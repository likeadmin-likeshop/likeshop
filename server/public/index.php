<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

if(!file_exists(__DIR__.'/../thinkphp') || !file_exists(__DIR__.'/../vendor')){
    echo '当前未安装php依赖，请参考文档安装：<a target="_blank" href="http://doc.likemarket.net/likeshop_develop_v2_x/2086345">http://doc.likemarket.net/likeshop_develop_v2_x/2086345</a>';
    exit;
}

// 加载基础文件
require __DIR__ . '/../thinkphp/base.php';

// 支持事先使用静态方法设置Request对象和Config对象

if (!file_exists(__DIR__ .'/../config/install.lock')) {
    header("location:/install/install.php");
    exit;
}

// 执行应用并响应
Container::get('app')->run()->send();
