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
use think\worker\Http as HttpServer;

/**
 * Worker 命令行类
 */
class Worker extends Command
{
    protected $config = [];

    public function configure()
    {
        $this->setName('worker')
            ->addArgument('action', Argument::OPTIONAL, "start|stop|restart|reload|status|connections", 'start')
            ->addOption('host', 'H', Option::VALUE_OPTIONAL, 'the host of workerman server.', null)
            ->addOption('port', 'p', Option::VALUE_OPTIONAL, 'the port of workerman server.', null)
            ->addOption('daemon', 'd', Option::VALUE_NONE, 'Run the workerman server in daemon mode.')
            ->setDescription('Workerman HTTP Server for ThinkPHP');
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

        if ('start' == $action) {
            $output->writeln('Starting Workerman http server...');
        }

        $this->config = Config::pull('worker');

        if (isset($this->config['context'])) {
            $context = $this->config['context'];
            unset($this->config['context']);
        } else {
            $context = [];
        }

        $host = $this->getHost();
        $port = $this->getPort();

        $worker = new HttpServer($host, $port, $context);

        if (empty($this->config['pidFile'])) {
            $this->config['pidFile'] = Env::get('runtime_path') . 'worker.pid';
        }

        // 避免pid混乱
        $this->config['pidFile'] .= '_' . $port;

        // 设置应用目录
        $worker->setAppPath($this->config['app_path']);
        unset($this->config['app_path']);

        // 开启守护进程模式
        if ($this->input->hasOption('daemon')) {
            $worker->setStaticOption('daemonize', true);
        }

        // 开启HTTPS访问
        if (!empty($this->config['ssl'])) {
            $this->config['transport'] = 'ssl';
            unset($this->config['ssl']);
        }

        // 设置网站目录
        if (empty($this->config['root'])) {
            $this->config['root'] = Env::get('root_path') . 'public';
        }

        $worker->setRoot($this->config['root']);
        unset($this->config['root']);

        // 设置文件监控
        if (Env::get('app_debug') || !empty($this->config['file_monitor'])) {
            $interval = isset($this->config['file_monitor_interval']) ? $this->config['file_monitor_interval'] : 2;
            $paths    = isset($this->config['file_monitor_path']) ? $this->config['file_monitor_path'] : [];
            $worker->setMonitor($interval, $paths);
            unset($this->config['file_monitor'], $this->config['file_monitor_interval'], $this->config['file_monitor_path']);
        }

        // 全局静态属性设置
        foreach ($this->config as $name => $val) {
            if (in_array($name, ['stdoutFile', 'daemonize', 'pidFile', 'logFile'])) {
                $worker->setStaticOption($name, $val);
                unset($this->config[$name]);
            }
        }

        // 设置服务器参数
        $worker->option($this->config);

        if (DIRECTORY_SEPARATOR == '\\') {
            $output->writeln('You can exit with <info>`CTRL-C`</info>');
        }

        $worker->start();
    }

    protected function getHost($default = '0.0.0.0')
    {
        if ($this->input->hasOption('host')) {
            $host = $this->input->getOption('host');
        } else {
            $host = !empty($this->config['host']) ? $this->config['host'] : $default;
        }

        return $host;
    }

    protected function getPort($default = '2346')
    {
        if ($this->input->hasOption('port')) {
            $port = $this->input->getOption('port');
        } else {
            $port = !empty($this->config['port']) ? $this->config['port'] : $default;
        }

        return $port;
    }
}
