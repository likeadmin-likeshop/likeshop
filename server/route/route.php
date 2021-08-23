<?php

use think\facade\Config;
use think\facade\Route;

//手机h5页面路由
Route::rule('mobile/:any', function () {
    Config::set('app_trace', false);
    return view(app()->getRootPath() . 'public/mobile/index.html');
})->pattern(['any' => '\w+']);

//手机h5页面路由
Route::rule('pc/:any', function () {
    Config::set('app_trace', false);
    return view(app()->getRootPath() . 'public/pc/index.html');
})->pattern(['any' => '\w+']);