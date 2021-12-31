<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

namespace app\api\validate;

use app\common\model\DistributionOrder;
use app\common\model\OrderGoods;
use app\common\server\ConfigServer;
use think\Db;
use think\Validate;

class AfterSale extends Validate
{
    protected $rule = [
        'id' => 'require',
        'order_id' => 'require',
        'reason' => 'require',
        'item_id' => 'require',
        'refund_type' => 'require',
        'express_name' => 'require',
        'invoice_no' => 'require|alphaNum',
    ];

    protected $message = [
        'id.require' => '参数错误',
        'reason.require' => '请选择退款原因',
        'order_id.require' => '参数错误',
        'item_id.require' => '参数错误',
        'refund_type.require' => '参数错误',
        'express_name.require' => '请填写物流公司名称',
        'invoice_no.require' => '请填写快递单号',
        'invoice_no.alphaNum' => '请填写正确的快递单号',
    ];

    //申请售后
    protected function sceneAdd()
    {
        $this->only(['item_id', 'order_id', 'reason', 'refund_type'])
            ->append('order_id', 'checkAbleApply');
    }

    //售后详情
    protected function sceneInfo()
    {
        $this->only(['order_id', 'item_id']);
    }

    //售后快递
    protected function sceneExpress()
    {
        $this->only(['id', 'express_name', 'invoice_no'])
            ->append('id', 'checkExpress');
    }

    //撤销售后
    protected function sceneCancel()
    {
        $this->only(['id'])
            ->append('id', 'checkCancel');
    }

    //重新申请
    protected function sceneAgain()
    {
        $this->only(['id', 'reason', 'refund_type'])->append('id', 'checkAgain');
    }


    //验证是否允许重新申请
    protected function checkAgain($value, $rule, $data)
    {
        $after_sale = Db::name('after_sale')
            ->where('id', $value)
            ->find();

        if (!$after_sale) {
            return '订单信息错误';
        }

        //商家拒绝,商家拒收货可以重新发起申请
        $able = [
            \app\common\model\AfterSale::STATUS_REFUSE_REFUND,
            \app\common\model\AfterSale::STATUS_REFUSE_RECEIVE_GOODS,
        ];

        if (in_array($after_sale['status'], $able)) {
            return true;
        }
        return '此订单暂不可重新申请';
    }

    //验证订单是否在售后时间内
    protected function checkAbleApply($value, $rule, $data)
    {
        $now = time();
        $where = [];
        $where[] = ['o.id', '=', $value];
        $where[] = ['g.item_id', '=', $data['item_id']];
        $where[] = ['o.order_status', 'in', [\app\common\model\Order::STATUS_WAIT_RECEIVE, \app\common\model\Order::STATUS_FINISH]];

        $order = Db::name('order o')
            ->field('o.order_status,o.confirm_take_time,g.refund_status')
            ->join('order_goods g', 'o.id = g.order_id')
            ->where($where)
            ->find();

        if (!$order) {
            return '此订单暂不可申请售后';
        }

        if ($order['refund_status'] == OrderGoods::REFUND_STATUS_APPLY) {
            return '此订单正在审核中';
        }

        if ($order['refund_status'] == OrderGoods::REFUND_STATUS_WAIT) {
            return '此订单等待退款中';
        }

        if ($order['refund_status'] == OrderGoods::REFUND_STATUS_SUCCESS) {
            return '此订单商品已退款成功';
        }

        $refund_days = ConfigServer::get('after_sale', 'refund_days', 0);
        if ($refund_days == 0) {
            return true;
        }

        if ($order['order_status'] == \app\common\model\Order::STATUS_FINISH) {
            $check_time = intval($order['confirm_take_time'] + ($refund_days * 24 * 60 * 60));
            if ($now > $check_time) {
                return '不在售后时间内';
            }
        }

        //验证订单是否已生成分佣订单且分佣, 有的不允许再发起售后
        $distribution = Db::name('distribution_order_goods')->alias('d')
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->where('og.order_id', $value)
            ->where('og.item_id', $data['item_id'])
            ->where('d.status', '=',DistributionOrder::STATUS_SUCCESS)
            ->find();

        if ($distribution) {
            return '已发生分佣, 无法再次发起售后';
        }

        return true;
    }


    //验证售后订单
    protected function checkExpress($value, $rule, $data)
    {
        $after_sale = Db::name('after_sale')
            ->where('id', $value)
            ->find();

        if (!$after_sale) {
            return '订单信息错误';
        }

        if ($after_sale['status'] == \app\common\model\AfterSale::STATUS_WAIT_RETURN_GOODS) {
            return true;
        }
        return '此订单正在审核中';
    }


    //验证撤销售后订单
    protected function checkCancel($value, $data)
    {
        $after_sale = Db::name('after_sale')
            ->where('id', $value)
            ->find();

        if (!$after_sale) {
            return '订单信息错误';
        }

        $check = [
            \app\common\model\AfterSale::STATUS_WAIT_REFUND,
            \app\common\model\AfterSale::STATUS_SUCCESS_REFUND,
        ];

        if (in_array($after_sale['status'], $check)){
            return '订单等待退款或已退款,无法撤销售后';
        }

        return true;
    }
}