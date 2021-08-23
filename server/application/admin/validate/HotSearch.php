<?php


namespace app\admin\validate;


use think\Validate;

class HotSearch extends Validate
{

    protected $rule = [
//        'hot_keyword'                   => 'require',
    ];

    protected $message = [
        'hot_keyword.require'                   => '热门搜索关键字不能为空',
    ];

    protected function sceneSet()
    {

    }


}