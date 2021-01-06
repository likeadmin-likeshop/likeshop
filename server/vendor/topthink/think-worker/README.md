ThinkPHP 5.1 Workerman 扩展
===============

## 安装
composer require topthink/think-worker

## 使用方法

### HttpServer

在命令行启动服务端
~~~
php think worker
~~~

然后就可以通过浏览器直接访问当前应用

~~~
http://localhost:2346
~~~

linux下面可以支持下面指令
~~~
php think worker [start|stop|reload|restart|status]
~~~

workerman的参数可以在应用配置目录下的worker.php里面配置。

由于onWorkerStart运行的时候没有HTTP_HOST，因此最好在应用配置文件中设置app_host

### SocketServer

在命令行启动服务端
~~~
php think worker:server
~~~

默认会在0.0.0.0:2345开启一个websocket服务。

如果需要自定义参数，可以在config/worker_server.php中进行配置，包括：

配置参数 | 描述
--- | ---
protocol| 协议
host | 监听地址
port | 监听端口
socket | 完整的socket地址

并且支持workerman所有的参数。
也支持使用闭包方式定义相关事件回调。

~~~
return [
	'socket' 	=>	'http://127.0.0.1:8000',
	'name'		=>	'thinkphp',
	'count'		=>	4,
	'onMessage'	=>	function($connection, $data) {
		$connection->send(json_encode($data));
	},
];
~~~

也支持使用自定义类作为Worker服务入口文件类。例如，我们可以创建一个服务类（必须要继承 think\worker\Server），然后设置属性和添加回调方法

~~~
<?php
namespace app\http;

use think\worker\Server;

class Worker extends Server
{
	protected $socket = 'http://0.0.0.0:2346';

	public function onMessage($connection,$data)
	{
		$connection->send(json_encode($data));
	}
}
~~~
支持workerman所有的回调方法定义（回调方法必须是public类型）

然后在worker_server.php中增加配置参数：
~~~
return [
	'worker_class'	=>	'app\http\Worker',
];
~~~

定义该参数后，其它配置参数均不再有效。

在命令行启动服务端
~~~
php think worker:server
~~~

然后在浏览器里面访问
~~~
http://localhost:2346
~~~
如果在Linux下面，同样支持reload|restart|stop|status 操作
~~~
php think worker:server reload
~~~