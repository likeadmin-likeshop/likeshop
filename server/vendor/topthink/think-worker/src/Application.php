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

namespace think\worker;

use think\App;
use think\Error;
use think\exception\HttpException;
use Workerman\Protocols\Http as WorkerHttp;

/**
 * Worker应用对象
 */
class Application extends App
{
    /**
     * 处理Worker请求
     * @access public
     * @param  \Workerman\Connection\TcpConnection   $connection
     * @param  void
     */
    public function worker($connection)
    {
        try {
            ob_start();
            // 重置应用的开始时间和内存占用
            $this->beginTime = microtime(true);
            $this->beginMem  = memory_get_usage();

            // 销毁当前请求对象实例
            $this->delete('think\Request');

            $pathinfo = ltrim(strpos($_SERVER['REQUEST_URI'], '?') ? strstr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI'], '/');

            $this->request->setPathinfo($pathinfo);

            if ($this->config->get('session.auto_start')) {
                WorkerHttp::sessionStart();
            }

            // 更新请求对象实例
            $this->route->setRequest($this->request);

            $response = $this->run();
            $response->send();
            $content = ob_get_clean();

            // Trace调试注入
            if ($this->env->get('app_trace', $this->config->get('app_trace'))) {
                $this->debug->inject($response, $content);
            }

            $this->httpResponseCode($response->getCode());

            foreach ($response->getHeader() as $name => $val) {
                // 发送头部信息
                WorkerHttp::header($name . (!is_null($val) ? ':' . $val : ''));
            }

            $connection->send($content);
        } catch (HttpException $e) {
            $this->exception($connection, $e);
        } catch (\Exception $e) {
            $this->exception($connection, $e);
        } catch (\Throwable $e) {
            $this->exception($connection, $e);
        }
    }

    protected function httpResponseCode($code = 200)
    {
        WorkerHttp::header('HTTP/1.1', true, $code);
    }

    protected function exception($connection, $e)
    {
        if ($e instanceof \Exception) {
            $handler = Error::getExceptionHandler();
            $handler->report($e);

            $resp    = $handler->render($e);
            $content = $resp->getContent();
            $code    = $resp->getCode();

            $this->httpResponseCode($code);
            $connection->send($content);
        } else {
            $this->httpResponseCode(500);
            $connection->send($e->getMessage());
        }
    }

}
