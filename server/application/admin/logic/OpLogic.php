<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
namespace app\admin\logic;
use app\common\server\ConfigServer;

class OpLogic{
    public static function getConfig($config_list){
        $config = [];
        foreach ($config_list as $config_name){
            $value = ConfigServer::get('op', $config_name, '');
            $config[$config_name] = $value;
        }
        return $config;
    }
    public static function setConfig($config_list){
        foreach ($config_list as $config_name => $config_value){
            ConfigServer::set('op',$config_name,$config_value);

        }
        return true;
    }


}