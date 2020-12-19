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

class ShopWithdraw extends Model{

    const WAIT_AUDIT = 1;
    const WAIT_REMITTANCE = 2;
    const SUCCEED_REMITTANCE =3;
    const AUDIT_REFUSE = 4;


    public static function getStatus($from){
        $desc = [
            self::WAIT_AUDIT            => '待审核',
            self::WAIT_REMITTANCE       => '待转账',
            self::SUCCEED_REMITTANCE    => '已转账',
            self::AUDIT_REFUSE          => '审核拒绝',
        ];
        if($from === true){
            return $desc;
        }
        return $desc[$from] ??  '';
    }
    public function getCreateTimeAttr($value,$data){
        return date('Y-m-d H:i:s',$value);
    }

    public function getMoneyAttr($value,$data){
        return '￥'.$value;
    }

    public function getStatusDescAttr($value,$data){
        return self::getStatus($data['status']);
    }
    //todo 提现方式
    public function getWithdrawWayAttr($value,$data){
        $name = '银行卡';
        if($value == 2){
            $name = '支付宝';
        }
        return $name;
    }
    public function getRemittanceTimeAttr($value,$data){
        if($value){
            return date('Y-m-d H:i:s',$value);
        }
        return $value;
    }


}