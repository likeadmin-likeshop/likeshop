<?php

use think\facade\Config;
use think\facade\Route;

//手机h5页面路由
Route::rule('mobile/:any', function () {
    Config::set('app_trace', false);
    return view(app()->getRootPath() . 'public/mobile/index.html');
})->pattern(['any' => '\w+']);

Route::rule('umobile/:any', function () {
    Config::set('app_trace', false);
    return view(app()->getRootPath() . 'public/umobile/index.html');
})->pattern(['any' => '\w+']);