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