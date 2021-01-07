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

class AfterSale extends Model
{
    //售后状态
    const STATUS_APPLY_REFUND = 0;//申请退款
    const STATUS_REFUSE_REFUND = 1;//平台拒绝
    const STATUS_WAIT_RETURN_GOODS = 2;//商品待退货
    const STATUS_WAIT_RECEIVE_GOODS = 3;//平台待收货
    const STATUS_REFUSE_RECEIVE_GOODS = 4;//平台拒收货
    const STATUS_WAIT_REFUND = 5;//等待退款
    const STATUS_SUCCESS_REFUND = 6;//退款成功

    //退款类型
    const TYPE_ONLY_REFUND = 0;//仅退款
    const TYPE_REFUND_RETURN = 1;//退款退货

    //售后状态描述
    public static function getStatusDesc($state)
    {
        $data = [
            self::STATUS_APPLY_REFUND => '申请退款',
            self::STATUS_REFUSE_REFUND => '平台拒绝',
            self::STATUS_WAIT_RETURN_GOODS => '商品待退货',
            self::STATUS_WAIT_RECEIVE_GOODS => '平台待收货',
            self::STATUS_REFUSE_RECEIVE_GOODS => '平台拒收货',
            self::STATUS_WAIT_REFUND => '等待退款',
            self::STATUS_SUCCESS_REFUND => '退款成功',
        ];
        if ($state === true) {
            return $data;
        }
        return $data[$state] ?? '';
    }

    //售后类型描述
    public static function getRefundTypeDesc($type)
    {
        $data = [
            self::TYPE_ONLY_REFUND => '仅退款',
            self::TYPE_REFUND_RETURN => '退款退货',
        ];
        if ($type === true) {
            return $data;
        }
        return $data[$type] ?? '';
    }


    //售后原因
    public static function getReasonLists()
    {
        $data = [
            '7天无理由退换货',
            '大小尺寸与商品描述不符',
            '颜色/图案/款式不符',
            '做工粗糙/有瑕疵',
            '质量问题',
            '卖家发错货',
            '少件（含缺少配件）',
            '不喜欢/不想要',
            '快递/物流一直未送到',
            '空包裹',
            '快递/物流无跟踪记录',
            '货物破损已拒签',
            '其他',
        ];
        return $data;
    }



    public function orderGoods()
    {
        return $this->hasMany('order_goods', 'id', 'order_goods_id');
    }

    public function user()
    {
        return $this->hasOne('user', 'id', 'user_id')
            ->field('id,nickname,avatar,mobile,sex,create_time');
    }

    public function order()
    {
        return $this->hasOne('order', 'id', 'order_id')
            ->field('id,order_sn,total_amount,order_amount,pay_way,order_status');
    }
}