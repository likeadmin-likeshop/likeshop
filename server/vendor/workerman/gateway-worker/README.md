GatewayWorker 
=================

GatewayWorker基于[Workerman](https://github.com/walkor/Workerman)开发的一个项目框架，用于快速开发长连接应用，例如app推送服务端、即时IM服务端、游戏服务端、物联网、智能家居等等。

GatewayWorker使用经典的Gateway和Worker进程模型。Gateway进程负责维持客户端连接，并转发客户端的数据给Worker进程处理；Worker进程负责处理实际的业务逻辑，并将结果推送给对应的客户端。Gateway服务和Worker服务可以分开部署在不同的服务器上，实现分布式集群。

GatewayWorker提供非常方便的API，可以全局广播数据、可以向某个群体广播数据、也可以向某个特定客户端推送数据。配合Workerman的定时器，也可以定时推送数据。

快速开始
======
开发者可以从一个简单的demo开始(demo中包含了GatewayWorker内核，以及start_gateway.php start_business.php等启动入口文件)<br>
[点击这里下载demo](http://www.workerman.net/download/GatewayWorker.zip)。<br>
demo说明见源码readme。

手册
=======
http://www.workerman.net/gatewaydoc/

安装内核
=======

只安装GatewayWorker内核文件（不包含start_gateway.php start_businessworker.php等启动入口文件）
```
composer require workerman/gateway-worker
```

使用GatewayWorker开发的项目
=======
## [tadpole](http://kedou.workerman.net/)  
[Live demo](http://kedou.workerman.net/)  
[Source code](https://github.com/walkor/workerman)  
![workerman todpole](http://www.workerman.net/img/workerman-todpole.png)   

## [chat room](http://chat.workerman.net/)  
[Live demo](http://chat.workerman.net/)  
[Source code](https://github.com/walkor/workerman-chat)  
![workerman-chat](http://www.workerman.net/img/workerman-chat.png)  
