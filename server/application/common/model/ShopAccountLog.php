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

class ShopAccountLog extends Model{
    const ORDER_SETTLE = 100;           //店铺结算
    const WITHDRAW_AUDIT = 200;         //店铺提现
    const WITHDRAW_REFUSE = 201;        //店铺提现拒绝


    public static function getSourceTypeDesc($from){
        $desc = [
            self::ORDER_SETTLE      => '店铺结算',
            self::WITHDRAW_AUDIT    => '店铺提现',
            self::WITHDRAW_REFUSE   => '店铺提现拒绝',
        ];
        if($from === true){
            return $desc;
        }
        return $desc[$from] ?? '账户变动';
    }

    public static function getRemarkDesc($from,$source_sn,$remark){
        $desc = [
            self::ORDER_SETTLE      => '结算单号：'.$source_sn,
            self::WITHDRAW_AUDIT    => '提现单号：'.$source_sn,
        ];
        return $desc[$from] ?? $remark;
    }
}