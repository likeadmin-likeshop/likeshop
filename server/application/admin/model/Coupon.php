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
namespace app\admin\model;
use think\Db;
use think\Model;

class Coupon extends Model{
    protected $autoWriteTimestamp = true;
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    //开始发放时间
    public function setSendTimeStartAttr($value,$data){
        if($value){
            return strtotime($value);
        }
        return $value;
    }
    //结束发放时间
    public function setSendTimeEndAttr($value,$data){
        if($value){
            return strtotime($value);
        }
        return $value;
    }
    //修改使用时间
    public function setUseTimeStartAttr($value,$data){
        if($value){
            return strtotime($value);
        }
        return $value;
    }

    //修改结束时间
    public function setUseTimeEndAttr($value,$data){
        if($value){
            return strtotime($value);
        }
        return $value;
    }
    //优惠券面额
    public function getMoneyAttr($value,$data){
        if($value){
            return '￥'.$value;
        }
        return $value;
    }
    //使用场景
    public function getSceneTypeAttr($value,$data){
        switch ($value){
            case 1:
                return '全场通用券';
            default:
                return '';
        }
    }

    //使用门槛
    public function getConditionTypeAttr($value,$data){
        if($value == 1){
            return '无门槛';
        }
        if($value == 2){
            return '订单满'.$data['condition_money'].'元可用';
        }
    }
    //
    public function getUseTimeStartAttr($value,$data){
        if($value){
            return date('Y-m-d H:i:s',$value);
        }
        return $value;
    }

    public function getUseTimeEndAttr($value,$data){
        if($value){
            return date('Y-m-d H:i:s',$value);
        }
        return $value;
    }
    //用券时间
    public function getSendTimeAttr($value,$data){
        return date('Y-m-d H:i:s',$data['send_time_start']).'至' .date('Y-m-d H:i:s',$data['send_time_end']);
    }
    //用券时间
    public function getUseTimeTypeAttr($value,$data){

        if($value == 1){
            return date('Y-m-d H:i:s',$data['use_time_start']).'至' .date('Y-m-d H:i:s',$data['use_time_end']);
        }
        if($value == 2){
            return '领取当天起'.$data['use_time'].'天内可用';
        }
        if($value == 3){
            return '领取次日起'.$data['use_time'].'天内可用';
        }
    }
    //领取方式
    public function getGetTypeAttr($value,$data){
        switch ($value){
            case 1:
                return '直接领取';
            case 2:
                return '平台赠送';
            case 3:
                return '活动赠送';
            default:
                return '';
        }
    }
//    //优惠券状态
//    public function getStatusAttr($value,$data){
//        $status = '已关闭';
//        if($value == 1){
//            $status = '进行中';
//        }
//        return $status;
//    }
    public function getStatusDescAttr($value,$data){
        $status = '已关闭';
        if($data['status'] == 1){
            $status = '进行中';
        }
        return $status;
    }
    //发放总量
    public function getSendTotalTypeAttr($value,$data){
        if($value == 1){
            return '不限制数量';
        }
        if($value == 2){
            return '订单满'.$data['condition_money'].'元可用';
        }
    }
    public function getGetNumTypeAttr($value,$data){
        if($value == 1){
            return '不限制领取次数';
        }
        if($value == 2){
            return '限制领取'.$data['use_time'].'次';
        }
        if($value == 3){
            return '每天限制领取'.$data['use_time'].'次';
        }
    }

    //已发放
    public static function getSentTotalAttr($value,$data){
        $send_total = Db::name('coupon_list')->where(['coupon_id'=>$data['id']])->count();
        $tips = '已发放：'.$send_total.'<br>';
        if($data['send_total_type'] == 1){
            $tips .= '待发放：不限量'.'<br>'.'发放总量：不限量';
        }else{
            $residue = $data['send_total'] - $send_total;
            $residue = $residue >=0 ? $residue : 0;
            $tips .= '待发放：'.$residue.'张'.'<br>'.'发放总量：'.$data['send_total'];
        }
        return $tips;

    }
}