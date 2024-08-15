<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------

namespace app\api\controller;

use app\api\logic\OrderLogic;
use app\common\model\Client_;
use app\common\server\ConfigServer;
use app\common\server\WechatMiniExpressSendSyncServer;
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
    
    /**
     * @notes 微信确认收货 获取详情
     * @return \think\response\Json
     * @author lbzy
     * @datetime 2023-09-05 09:51:41
     */
    function wxReceiveDetail()
    {
        return $this->_success('获取成功', OrderLogic::wxReceiveDetail(input('order_id/d'), $this->user_id));
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


    /**
     * @notes 核销订单列表
     * @author ljj
     * @date 2021/8/18 3:58 下午
     */
    public function verificationLists()
    {
        $type = $this->request->get('type',\app\common\model\Order::NOT_WRITTEN_OFF);
        $lists = OrderLogic::verificationLists($type, $this->user_id, $this->page_no, $this->page_size);
        $this->_success('获取成功', $lists);
    }


    /**
     * @notes 提货核销
     * @author ljj
     * @date 2021/8/18 4:36 下午
     */
    public function verification()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $check = $this->validate($post, 'app\api\validate\Order.verification');
        if (true !== $check) {
            $this->_error($check);
        }
        $result = OrderLogic::verification($post);
        $this->_success('获取成功',$result);
    }

    /**
     * @notes 确认提货
     * @author ljj
     * @date 2021/8/18 7:02 下午
     */
    public function verificationConfirm()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $result = OrderLogic::verificationConfirm($post);
        if (true !== $result) {
            $this->_error($result);
        }
        $this->_success('提货成功');
    }

    /**
     * @notes 获取配送方式
     * @author ljj
     * @date 2021/8/19 7:17 下午
     */
    public function getDeliveryType()
    {
        $data = OrderLogic::getDeliveryType();
        $this->_success('获取成功',$data);
    }
    
    /**
     * @notes 微信同步发货 查询
     * @return \think\response\Json
     * @author lbzy
     * @datetime 2023-09-07 15:27:17
     */
    function wechatSyncCheck()
    {
        $id     = $this->request->get('id');
        
        $order  = \app\common\model\Order::where('id', $id)->where('user_id', $this->user_id)->findOrEmpty();
        
        $result = WechatMiniExpressSendSyncServer::wechatSyncCheck($order);
        
        if (! $result) {
            $this->_error('获取失败');
        }
    
        $this->_success('成功', $result);
    }
}