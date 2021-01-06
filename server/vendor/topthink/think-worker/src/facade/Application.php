<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\worker\facade;

use think\Facade;

/**
 * @see \think\worker\Application
 * @mixin \think\worker\Application
 * @method void initialize() static 初始化应用
 * @method void worker(\Workerman\Connection\TcpConnection $connection) static 处理Worker请求
 */
class Application extends Facade
{
}
