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

namespace app\api\model;

use app\common\model\Pay;
use app\common\server\AreaServer;
use app\common\server\ConfigServer;
use think\Db;
use think\Model;
use app\common\model\Order as CommonOrder;

class Order extends Model
{
    protected $name = 'order';

    /*
     * 下单时间
     */
    public function getCreateTimeAttr($value, $data)
    {
        return date('Y-m-d H:i:s', $value);
    }

    /*
     * 付款时间
     */
    public function getPayTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return '';
    }

    /*
     * 发货时间
     */
    public function getShippingTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return '';

    }

    /*
     * 取消时间
     */
    public function getCancelTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return '';

    }

    /*
     * 确认收货时间
     */
    public function getConfirmTakeTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return '';
    }

    /*
     * 支付方式
     */
    public function getPayWayTextAttr($value, $data)
    {
        return Pay::getPayWay($data['pay_way']);
    }

    public function orderGoods()
    {
        return $this->hasMany('order_goods', 'order_id', 'id');
    }


    public function getGoodsCountAttr($value, $data)
    {
        return count($this->order_goods);
    }

    /*
     * 返回是否显示支付按钮
     */
    public function getPayBtnAttr($value, $data)
    {
        $btn = 0;
        if ($data['order_status'] == CommonOrder::STATUS_WAIT_PAY && $data['pay_status'] == Pay::UNPAID) {
            $btn = 1;
        }
        return $btn;
    }

    /*
     * 返回是否显示取消订单按钮
     */
    public function getCancelBtnAttr($value, $data)
    {
        $btn = 0;
        if (($data['order_status'] == CommonOrder::STATUS_WAIT_PAY && $data['pay_status'] == Pay::UNPAID) || ($data['pay_status'] == Pay::ISPAID && $data['order_status'] == CommonOrder::STATUS_WAIT_DELIVERY)) {
            $btn = 1;
        }
        return $btn;
    }

    /*
     * 返回是否显示物流按钮
     */
    public function getDeliveryBtnAttr($value, $data)
    {
        $btn = 0;
        if ($data['order_status'] == CommonOrder::STATUS_WAIT_RECEIVE && $data['pay_status'] == Pay::ISPAID && $data['shipping_status'] == 1) {
            $btn = 1;
        }
        if ($data['order_status'] == CommonOrder::STATUS_FINISH && $data['pay_status'] == Pay::ISPAID && $data['shipping_status'] == 1) {
            $btn = 1;
        }
        return $btn;

    }

    /*
     * 返回是否显示确认收货按钮
     */
    public function getTakeBtnAttr($value, $data)
    {
        $btn = 0;
        if ($data['order_status'] == CommonOrder::STATUS_WAIT_RECEIVE && $data['pay_status'] == Pay::ISPAID && $data['shipping_status'] == 1) {
            $btn = 1;
        }
        return $btn;
    }

    /*
     * 返回是否显示删除按钮
     */
    public function getDelBtnAttr($value, $data)
    {
        $btn = 0;
        if (
            ($data['order_status'] == CommonOrder::STATUS_CLOSE && $data['pay_status'] == Pay::UNPAID) ||
            ($data['order_status'] == CommonOrder::STATUS_CLOSE && $data['pay_status'] == Pay::REFUNDED)
        ) {
            $btn = 1;
        }
        return $btn;
    }

    /*
     * 返回是否显示已完成按钮
     */
    public function getFinishBtnAttr($value, $data)
    {
        $btn = 0;
        if ($data['order_status'] == CommonOrder::STATUS_FINISH && $data['pay_status'] == Pay::ISPAID) {
            $btn = 1;
        }
        return $btn;
    }

    /*
     * 返回是否显示去评论按钮
     */
    public function getCommentBtnAttr($value, $data)
    {
        $btn = 0;
        $comment_count = 0;
        if ($data['pay_status'] == Pay::ISPAID && $data['order_status'] == CommonOrder::STATUS_FINISH) {
            $btn = 1;
            foreach ($this->order_goods as $item) {
                if ($item['is_comment'] == 1) {
                    $comment_count += 1;
                };
            }
            if (count($this->orderGoods) == $comment_count) {
                $btn = 0;
            }
        }

        return $btn;
    }

    /*
     * 返回是否显示申请退款按钮
     */
    public function getRefundBtnAttr($value, $data)
    {
        $btn = 0;
        $refund_days = $data['confirm_take_time'] + ConfigServer::get('after_sale', 'refund_days', '', 0) * 86400;
        $now = time();

        //订单已完成、在售后期内。未申请退款、
        if ($data['order_status'] == CommonOrder::STATUS_FINISH && $refund_days > $now && $data['refund_status'] = \app\common\model\OrderGoods::REFUND_STATUS_NO) {
            $btn = 1;
        }
        return $btn;
    }

    //收货地址
    public function getDeliveryAddressAttr($value, $data)
    {
        $region_desc = AreaServer::getAddress([$data['province'], $data['city'], $data['district']], $data['address']);
        return $region_desc;
    }

    public function getOrderCancelTimeAttr($value, $data)
    {
        $end_time = '';
        if ($data['order_status'] == 0 && $data['pay_status'] == 0) {
            $order_cancel_time = ConfigServer::get('trading', 'order_cancel', 30);
            $end_time = $data['create_time'] + $order_cancel_time * 60;
        }
        return $end_time;
    }


}