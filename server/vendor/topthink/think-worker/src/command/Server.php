<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\worker\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;
use think\facade\Config;
use think\facade\Env;
use think\worker\Server as WorkerServer;
use Workerman\Worker;

/**
 * Worker Server 命令行类
 */
class Server extends Command
{
    protected $config = [];

    public function configure()
    {
        $this->setName('worker:server')
            ->addArgument('action', Argument::OPTIONAL, "start|stop|restart|reload|status|connections", 'start')
            ->addOption('host', 'H', Option::VALUE_OPTIONAL, 'the host of workerman server.', null)
            ->addOption('port', 'p', Option::VALUE_OPTIONAL, 'the port of workerman server.', null)
            ->addOption('daemon', 'd', Option::VALUE_NONE, 'Run the workerman server in daemon mode.')
            ->setDescription('Workerman Server for ThinkPHP');
    }

    public function execute(Input $input, Output $output)
    {
        $action = $input->getArgument('action');

        if (DIRECTORY_SEPARATOR !== '\\') {
            if (!in_array($action, ['start', 'stop', 'reload', 'restart', 'status', 'connections'])) {
                $output->writeln("<error>Invalid argument action:{$action}, Expected start|stop|restart|reload|status|connections .</error>");
                return false;
            }

            global $argv;
            array_shift($argv);
            array_shift($argv);
            array_unshift($argv, 'think', $action);
        } elseif ('start' != $action) {
            $output->writeln("<error>Not Support action:{$action} on Windows.</error>");
            return false;
        }

        $this->config = Config::pull('worker_server');

        if ('start' == $action) {
            $output->writeln('Starting Workerman server...');
        }

        // 自定义服务器入口类
        if (!empty($this->config['worker_class'])) {
            $class = (array) $this->config['worker_class'];

            foreach ($class as $server) {
                $this->startServer($server);
            }

            // Run worker
            Worker::runAll();
            return;
        }

        if (!empty($this->config['socket'])) {
            $socket            = $this->config['socket'];
            list($host, $port) = explode(':', $socket);
        } else {
            $host     = $this->getHost();
            $port     = $this->getPort();
            $protocol = !empty($this->config['protocol']) ? $this->config['protocol'] : 'websocket';
            $socket   = $protocol . '://' . $host . ':' . $port;
            unset($this->config['host'], $this->config['port'], $this->config['protocol']);
        }

        if (isset($this->config['context'])) {
            $context = $this->config['context'];
            unset($this->config['context']);
        } else {
            $context = [];
        }

        $worker = new Worker($socket, $context);

        if (empty($this->config['pidFile'])) {
            $this->config['pidFile'] = Env::get('runtime_path') . 'worker.pid';
        }

        // 避免pid混乱
        $this->config['pidFile'] .= '_' . $port;

        // 开启守护进程模式
        if ($this->input->hasOption('daemon')) {
            Worker::$daemonize = true;
        }

        if (!empty($this->config['ssl'])) {
            $this->config['transport'] = 'ssl';
            unset($this->config['ssl']);
        }

        // 设置服务器参数
        foreach ($this->config as $name => $val) {
            if (in_array($name, ['stdoutFile', 'daemonize', 'pidFile', 'logFile'])) {
                Worker::${$name} = $val;
            } else {
                $worker->$name = $val;
            }
        }

        // Run worker
        Worker::runAll();
    }

    protected function startServer($class)
    {
        if (class_exists($class)) {
            $worker = new $class;
            if (!$worker instanceof WorkerServer) {
                $this->output->writeln("<error>Worker Server Class Must extends \\think\\worker\\Server</error>");
            }
        } else {
            $this->output->writeln("<error>Worker Server Class Not Exists : {$class}</error>");
        }
    }

    protected function getHost()
    {
        if ($this->input->hasOption('host')) {
            $host = $this->input->getOption('host');
        } else {
            $host = !empty($this->config['host']) ? $this->config['host'] : '0.0.0.0';
        }

        return $host;
    }

    protected function getPort()
    {
        if ($this->input->hasOption('port')) {
            $port = $this->input->getOption('port');
        } else {
            $port = !empty($this->config['port']) ? $this->config['port'] : 2345;
        }

        return $port;
    }
}
