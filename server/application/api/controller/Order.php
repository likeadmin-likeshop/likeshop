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

namespace app\api\controller;

use app\api\logic\OrderLogic;
use think\Db;

/**
 * 订单
 * Class Order
 * @package react_native\api\controller
 */
class Order extends ApiBase
{

    public $like_not_need_login = ['goods'];


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
        $check = $this->validate($post, 'react_native\api\validate\Order.buy');
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
        if (!$order_id) {
            $this->_error('请选择订单');
        }
        $order_detail = OrderLogic::getOrderDetail($order_id);
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
            $tips = '暂时物流信息';
        }
        $this->_error($tips);
    }

    //修复旧数据
    public function goods()
    {
        $orders = Db::name('order_goods og')
            ->field('og.goods_id,og.item_id,og.goods_info,og.spec_value_ids,og.id as og_id')
            ->join('goods g', 'og.goods_id = g.id')
            ->join('goods_item i', 'i.id = og.item_id')
            ->where('og.goods_info', 'null')
            ->select();

        $goods_ids = array_column($orders, 'goods_id');
        $item_ids = array_column($orders, 'item_id');
        $spec_ids = array_column($orders, 'spec_value_ids');

        $goods = Db::name('goods')->where(['id' => $goods_ids])->column('image,name', 'id');
        $goods_item = Db::name('goods_item')->where(['id' => $item_ids])->column('image', 'id');
        $spec = Db::name('goods_spec_value')->where(['id' => $spec_ids])->column('value', 'id');

        $handle_arr = [];
        foreach ($orders as $order) {
            if (!empty($order['goods_info'])) {
                continue;
            }

            $goods_id = $order['goods_id'];
            $item_id = $order['item_id'];
            $spec_id = $order['spec_value_ids'];

            $data = [];
            $data['goods_name'] = $goods[$goods_id]['name'] ?? '';
            $data['image'] = $goods[$goods_id]['image'] ?? '';
            $data['spec_image'] = $goods_item[$item_id] ?? '';
            $data['spec_value_str'] = $spec[$spec_id] ?? '';

            Db::name('order_goods')
                ->where(['id' => $order['og_id']])
                ->update([
                    'goods_info' => json_encode($data, JSON_UNESCAPED_UNICODE),
                ]);

            $handle_arr[] = $order['og_id'];
        }

        return '修改' . count($handle_arr) . '条数据';
    }
}