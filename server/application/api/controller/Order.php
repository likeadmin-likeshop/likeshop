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

namespace app\api\controller;

use app\api\logic\OrderLogic;

/**
 * 订单
 * Class Order
 * @package app\api\controller
 */
class Order extends ApiBase
{

    //订单列表
    public function lists()
    {
        $type = $this->request->get('type', 'all');
        $order_list = OrderLogic::getOrderList($this->user_id, $type, $this->page_no, $this->page_size);
        $this->success('获取成功', $order_list);
    }

    //下单接口
    public function buy()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $check = $this->validate($post, 'app\api\validate\Order.buy');
        if (true !== $check) {
            $this->error($check);
        }

        $action = $post['action'];
        $info = OrderLogic::info($post, $this->user_id);

        if ($info['code'] == 0){
            $this->error($info['msg']);
        }

        if ($action == 'info') {
            $this->success('', $info['data']);
        }

        $type = $post['type'] ?? '';
        $client = $post['client'] ?? 1;
        $order = OrderLogic::add($this->user_id, $info['data'], $type, $client);
        return $order;
    }


    //订单详情
    public function detail()
    {
        $order_id = $this->request->get('id');
        if ($order_id) {
            $order_detail = OrderLogic::getOrderDetail($order_id);
            if ($order_detail) {
                $this->success('获取成功', $order_detail);
            }
            $this->error('订单不存在了!', '');
        }
        $this->error('请选择订单');
    }

    //取消订单
    public function cancel()
    {
        $order_id = $this->request->post('id');
        if (empty($order_id)) {
            $this->error('参数错误');
        }
        return OrderLogic::cancel($order_id, $this->user_id);
    }


    //删除订单
    public function del()
    {
        $order_id = $this->request->post('id');
        if (empty($order_id)) {
            $this->error('参数错误');
        }
        return OrderLogic::del($order_id, $this->user_id);
    }


    //确认订单
    public function confirm()
    {
        $order_id = $this->request->post('id');
        if (empty($order_id)) {
            $this->error('参数错误');
        }
        return OrderLogic::confirm($order_id, $this->user_id);
    }


    public function orderTraces()
    {
        $order_id = $this->request->get('id');
        $tips = '参数错误';
        if ($order_id) {
            $traces = OrderLogic::orderTraces($order_id, $this->user_id);
            if ($traces) {
                $this->success('获取成功', $traces);
            }
            $tips = '暂时物流信息';
        }
        $this->error($tips);
    }

}