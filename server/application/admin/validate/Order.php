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

namespace app\admin\validate;

use app\common\model\Team;
use think\Db;
use think\Validate;

class Order extends Validate
{
    protected $rule = [
        'order_id|参数缺失' => 'require',
        'send_type|请选择配送方式' => 'require',//配送方式
        'shipping_id|请选择快递' => 'requireIf:send_type,1',//物流公司
        'invoice_no|快递单号' => 'requireIf:send_type,1|alphaNum',//单号
    ];

    protected $message = [
        'order_id.require' => '参数缺失',
        'invoice_no.alphaNum' => '请填写正确订单号',
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

        if ($order['order_type'] == \app\common\model\Order::TEAM_ORDER) {
            $found = Db::name('team_found')->where(['id' => $order['team_found_id']])->find();
            if ($found['status'] == Team::STATUS_WAIT_SUCCESS){
                return '已支付的拼团订单需要有拼团结果才可以取消';
            }
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
        
        if ($order['order_type'] == \app\common\model\Order::TEAM_ORDER){
            $found = Db::name('team_found')->where(['id' => $order['team_found_id']])->find();
            if ($found['status'] != Team::STATUS_SUCCESS){
                return '已支付的拼团订单需要等待拼团成功后才能发货';
            }
        }

        return true;
    }
}