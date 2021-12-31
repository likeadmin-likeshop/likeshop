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

namespace app\api\controller;

use app\api\logic\OrderLogic;
use app\common\model\Client_;
use think\Db;

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
        $this->_success('获取成功', $order_list);
    }

    //下单接口
    public function buy()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $post['client'] = $this->client;
        $check = $this->validate($post, 'app\api\validate\Order.buy');
        if (true !== $check) {
            $this->_error($check);
        }

        $action = $post['action'];
        $info = OrderLogic::info($post, $this->user_id);

        if ($info['code'] == 0) {
            $this->_error($info['msg']);
        }

        if ($action == 'info') {
            $this->_success('', $info['data']);
        }

        if ($this->client != Client_::pc && empty($post['pay_way'])) {
            $this->_error('请联系管理员配置支付方式');
        }
        
        $order = OrderLogic::add($this->user_id, $info['data'], $post);
        return $order;
    }


    //订单详情
    public function detail()
    {
        $order_id = $this->request->get('id');
        if (!$order_id){
            $this->_error('请选择订单');
        }
        $order_detail = OrderLogic::getOrderDetail($order_id, $this->user_id);
        if (!$order_detail) {
            $this->_error('订单不存在了!', '');
        }
        $this->_success('获取成功', $order_detail);
    }

    //取消订单
    public function cancel()
    {
        $order_id = $this->request->post('id');
        if (empty($order_id)) {
            $this->_error('参数错误');
        }
        return OrderLogic::cancel($order_id, $this->user_id);
    }


    //删除订单
    public function del()
    {
        $order_id = $this->request->post('id');
        if (empty($order_id)) {
            $this->_error('参数错误');
        }
        return OrderLogic::del($order_id, $this->user_id);
    }


    //确认订单
    public function confirm()
    {
        $order_id = $this->request->post('id');
        if (empty($order_id)) {
            $this->_error('参数错误');
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
                $this->_success('获取成功', $traces);
            }
            $tips = '暂无物流信息';
        }
        $this->_error($tips);
    }

}