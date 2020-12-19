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

namespace app\admin\validate;

use think\Db;
use think\Validate;

class Order extends Validate
{
    protected $rule = [
        'order_id|参数缺失' => 'require',
        'send_type|请选择配送方式' => 'require',//配送方式
        'shipping_id|请选择快递' => 'requireIf:send_type,1',//物流公司
        'invoice_no|快递单号' => 'requireIf:send_type,1',//单号
    ];

    protected $message = [
        'order_id.require' => '参数缺失',
    ];


    public function sceneCancel()
    {
        $this->only(['order_id'])
            ->append('order_id', 'checkCancel');
    }

    public function sceneDel()
    {
        $this->only(['order_id'])
            ->append('order_id', 'checkDel');
    }

    public function sceneDelivery()
    {
        $this->only(['order_id','send_type','shipping_id','invoice_no'])
            ->append('order_id','checkDelivery');
    }

    public function sceneConfirm()
    {
        $this->only(['order_id']);
    }

    protected function checkCancel($value, $reule, $data)
    {
        $order = Db::name('order')->where(['id' => $value, 'del' => 0])->find();

        if (!$order) {
            return '订单失效';
        }

        if ($order['order_status'] > \app\common\model\Order::STATUS_WAIT_DELIVERY) {
            return '此订单不可取消';
        }
        return true;
    }

    protected function checkDel($value, $reule, $data)
    {
        $order = Db::name('order')->where(['id' => $value])->find();

        if (!$order) {
            return '订单失效';
        }

        if ($order['del'] == 1){
            return '订单已删除';
        }

        if ($order['order_status'] != \app\common\model\Order::STATUS_CLOSE) {
            return '此订单不可删除';
        }
        return true;
    }

    protected function checkDelivery($value, $reule, $data)
    {
        $order = Db::name('order')->where(['id' => $value])->find();

        if (!$order) {
            return '订单失效';
        }

        if ($order['del'] == 1){
            return '订单已删除';
        }

        if ($order['shipping_status'] == 1) {
            return '此订单已发货';
        }
        return true;
    }
}