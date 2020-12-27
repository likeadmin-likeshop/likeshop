<?php


namespace app\admin\logic;


use app\common\server\ConfigServer;

class HotSearchLogic
{

    public static function info(){

        $info = ConfigServer::get('hot_search','hot_keyword',[]);
        if (empty($info)){
            return [''];
        }
        return $info;
    }

    public static function set($post){

        if ($post['hot_keyword'] == ['']){
            return ConfigServer::set('hot_search','hot_keyword',[]);
        }
        $hot_keyword = array_values(array_filter($post['hot_keyword']));

        return ConfigServer::set('hot_search','hot_keyword',$hot_keyword);
    }
}