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

namespace app\admin\controller;

use app\common\model\OrderLog;
use app\admin\logic\OrderLogic;
use app\common\model\Client_;
use app\common\model\Order as CommonOrder;
use app\common\model\Pay;
use think\Db;

class Order extends AdminBase
{
    /**
     * User: 意象信息科技 mjf
     * Desc: 订单列表
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->success('', OrderLogic::lists($get));
        }
        $this->assign('order_status', CommonOrder::getOrderStatus(true));
        $this->assign('order_type', CommonOrder::getOrderType(true));
        $this->assign('pay_way', Pay::getPayWay(true));
        return $this->fetch();
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 订单详情
     */
    public function detail()
    {
        $id = $this->request->get('id');
        $detail = OrderLogic::getDetail($id);
        $this->assign('detail', $detail);
        $this->assign('logs', OrderLog::getOrderLog($id));
        return $this->fetch();
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 取消订单
     */
    public function cancel()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\Order.cancel');
            if (true !== $check) {
                $this->error($check);
            }
            OrderLogic::cancel($post['order_id'], $this->admin_id);
            $this->success('取消成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 删除订单
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\Order.del');
            if (true !== $check) {
                $this->error($check);
            }
            OrderLogic::del($post['order_id'], $this->admin_id);
            $this->success('删除成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 发货
     */
    public function delivery()
    {
        $id = $this->request->get('id');
        $detail = OrderLogic::getDetail($id);
        $this->assign('detail', $detail);
        $this->assign('express', OrderLogic::express());
        return $this->fetch();
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 发货操作
     */
    public function deliveryHandle()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\Order.delivery');
            if (true !== $check) {
                $this->error($check);
            }
            OrderLogic::deliveryHandle($post, $this->admin_id);
            $this->success('发货成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 确认收货
     */
    public function confirm()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\Order.confirm');
            if (true !== $check) {
                $this->error($check);
            }
            OrderLogic::confirm($post['order_id'], $this->admin_id);
            $this->success('确认成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 物流信息
     */
    public function express()
    {
        $id = $this->request->get('id');
        $detail = OrderLogic::getDetail($id);
        $detail['shipping'] = OrderLogic::shippingInfo($detail['id']);
        $this->assign('detail', $detail);
        return $this->fetch();
    }
}