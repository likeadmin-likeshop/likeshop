<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------
namespace app\common\model;
use think\Model;

class WeChat extends Model{
    /**
     * 消息类型常量
     */
    const msg_type_text       = 'text';         //回复文本信息
    const msg_type_image      = 'image';        //回复图片信息
    const msg_type_voice      = 'voice';        //回复语音信息
    const msg_type_video      = 'video';        //回复视频消息
    const msg_type_music      = 'music';        //回复音乐消息
    const msg_type_news       = 'news';         //回复图文消息
    const msg_type_location   = 'location';     //回复地理位置消息
    const msg_type_link       = 'link';         //回复链接信息
    const msg_type_event      = 'event';        //回复事件
    const msg_type_default    = 'default';      //默认回复

    /**
     * 事件类型常量
     */
    const msg_event_subscribe   = 'subscribe';      //关注事件-首次关注
    const msg_event_unsubscribe = 'unsubscribe';    //取消关注事件
    const msg_event_scan        = 'SCAN';           //关注事件-已关注
    const msg_event_location    = 'LOCATION';       //上报地理位置事件
    const msg_event_click       = 'CLICK';          //点击菜单拉取消息时的事件推送
    const msg_event_view        = 'VIEW';           //点击菜单跳转链接时的事件

    public static function getCustomReply($form = true){
        $desc = [
            self::msg_event_subscribe   => '关注回复',
            self::msg_type_text         => '关键词回复',
            self::msg_type_default      => '默认回复',
        ];
        if( true === $form){
            return $desc;
        }
        return $desc[$form] ??[];
    }
}