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
namespace app\common\model;
use think\Model;

class SmsLog extends Model{
    const send_ing = 0;
    const send_success = 1;
    const send_fail = 2;

    public static function getSendStatusDesc($from){
        $desc = [
            self::send_ing          => '发送中',
            self::send_success      => '发送成功',
            self::send_fail         => '发送失败',
        ];
        if($from === true){
            return $desc;
        }
        return $desc[$from] ?? '';
    }

    public static function getCreateTimeAttr($value,$data){
         return date('Y-m-d H:i:s',$value);
    }
    public static function getSendTimeAttr($value,$data){
        if($value){
            return date('Y-m-d H:i:s',$value);
        }
        return '';
    }

    public static function getSendStatusAttr($value,$data){
        return self::getSendStatusDesc($value);
    }

    public static function getResultsAttr($value,$data){
        if($value){
            $result = json_decode($value,true);
            if(is_array($result)){
                return implode('，',$result);
            }
            return $result;
        }
        return '';

    }
}