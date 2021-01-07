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

class AfterSaleLog extends Model
{
    //售后操作人类型
    const TYPE_USER = 0;//会员
    const TYPE_SHOP = 1;//门店

    //售后动作
    const USER_APPLY_REFUND = 100;//会员申请售后
    const USER_SEND_EXPRESS = 101;//会员发快递
    const USER_CANCEL_REFUND = 102;//会员撤销售后
    const USER_AGAIN_REFUND = 103;//会员重新提交申请
    const SHOP_AGREE_REFUND = 104;//商家同意退款
    const SHOP_REFUSE_REFUND = 105;//商家拒绝退款
    const SHOP_TAKE_GOODS = 106;//商家收货
    const SHOP_REFUSE_TAKE_GOODS = 107;//商家拒绝收货
    const SHOP_CONFIRM_REFUND = 108;//商家确认退款
    const REFUND_SUCCESS = 109;//退款成功
    const REFUND_ERROR = 110;//退款失败


    //售后动作明细
    public static function getLogDesc($log)
    {
        $desc = [
            self::USER_APPLY_REFUND => '会员申请退款',
            self::USER_SEND_EXPRESS => '会员填写退货物流信息',
            self::USER_CANCEL_REFUND => '会员撤销售后申请',
            self::USER_AGAIN_REFUND => '会员重新提交申请',
            self::SHOP_AGREE_REFUND => '商家同意退款',
            self::SHOP_REFUSE_REFUND => '商家拒绝退款',
            self::SHOP_TAKE_GOODS => '商家收货',
            self::SHOP_REFUSE_TAKE_GOODS => '商家拒绝收货',
            self::SHOP_CONFIRM_REFUND => '商家确认退款',
            self::REFUND_SUCCESS => '退款成功',
            self::REFUND_ERROR => '退款失败',
        ];

        if ($log === true){
            return $desc;
        }

        return  isset($desc[$log]) ? $desc[$log] : $log;
    }
}