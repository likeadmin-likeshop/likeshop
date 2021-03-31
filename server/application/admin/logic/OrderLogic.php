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

namespace app\admin\logic;

use app\common\logic\OrderGoodsLogic;
use app\common\model\Goods;
use app\common\model\MessageScene_;
use app\common\model\Order;
use app\common\model\OrderLog;
use app\common\logic\OrderLogLogic;
use app\common\server\ConfigServer;
use expressage\Kd100;
use expressage\Kdniao;
use think\Db;
use think\facade\Env;
use think\facade\Hook;

class OrderLogic
{

    public static function lists($get)
    {
        $order = new Order();

        $where = [];
        $where[] = ['o.del', '=', 0];

        //订单状态
        if ($get['type'] != '') {
            $where[] = ['order_status', '=', $get['type']];
        }

        //订单搜素
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            switch ($get['search_key']) {
                case 'order_sn':
                    $where[] = ['o.order_sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_sn':
                    $where[] = ['u.sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'nickname':
                    $where[] = ['nickname', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_mobile':
                    $where[] = ['u.mobile', 'like', '%' . $keyword . '%'];
                    break;
                case 'consignee':
                    $where[] = ['consignee', 'like', '%' . $keyword . '%'];
                    break;
                case 'consignee_mobile':
                    $where[] = ['o.mobile', 'like', '%' . $keyword . '%'];
                    break;
            }
        }

        //商品名称
        if (isset($get['goods_name']) && $get['goods_name'] != '') {
            $where[] = ['g.goods_name', 'like', '%' . $get['goods_name'] . '%'];
        }

        //付款方式
        if (isset($get['pay_way']) && $get['pay_way'] != '') {
            $where[] = ['o.pay_way', '=', $get['pay_way']];
        }

        //配送方式
        if (isset($get['delivery_type']) && $get['delivery_type'] != '') {
            $where[] = ['o.delivery_type', '=', $get['delivery_type']];
        }

        //订单类型
        if (isset($get['order_type']) && $get['order_type'] != '') {
            $where[] = ['o.order_type', '=', $get['order_type']];
        }

        //订单来源
        if (isset($get['order_source']) && $get['order_source'] != '') {
            $where[] = ['o.order_source', '=', $get['order_source']];
        }

        //下单时间
        if (isset($get['start_time']) && $get['start_time'] != '') {
            $where[] = ['o.create_time', '>=', strtotime($get['start_time'])];
        }
        if (isset($get['end_time']) && $get['end_time'] != '') {
            $where[] = ['o.create_time', '<=', strtotime($get['end_time'])];
        }

        $field = 'o.*,order_status as order_status_text,pay_way as pay_way_text';


        $count = $order
            ->alias('o')
            ->field($field)
            ->join('user u', 'u.id = o.user_id')
            ->join('order_goods g', 'g.order_id = o.id')
            ->with(['order_goods', 'user.level'])
            ->where($where)
            ->group('o.id')
            ->count();

        $lists = $order
            ->alias('o')
            ->field($field)
            ->join('user u', 'u.id = o.user_id')
            ->join('order_goods g', 'g.order_id = o.id')
            ->with(['order_goods', 'user.level'])
            ->where($where)
            ->append(['delivery_address', 'pay_status_text', 'order_type_text', 'user.base_avatar', 'order_source_text'])
            ->page($get['page'], $get['limit'])
            ->order('o.id desc')
            ->group('o.id')
            ->select()->toArray();

        foreach ($lists as &$list){
            foreach ($list['order_goods'] as &$order_goods){
                $order_good_info = json_decode($order_goods['goods_info'], true);
                $order_goods['goods_name'] = $order_good_info['goods_name'];
                $order_goods['spec_value'] = $order_good_info['spec_value_str'];
                $order_goods['image'] =  empty($order_good_info['spec_image']) ? $order_good_info['image'] : $order_good_info['spec_image'];
            }
            $list['delivery_type'] = Order::getDeliveryType($list['delivery_type']);
            $list['user_level'] = $list['user']['level']['name']?? '';
        }
        return ['count' => $count, 'lists' => $lists];
    }

    public static function getDetail($id)
    {
        $order = new Order();
        $result = $order
            ->with(['user', 'order_goods'])
            ->where('id', $id)
            ->append(['delivery_address', 'pay_status_text', 'order_status_text', 'pay_way_text', 'order_type_text'])
            ->find();

        foreach ($result['order_goods'] as &$order_goods) {
            $info = json_decode($order_goods['goods_info'], true);
            $order_goods['goods_name'] = $info['goods_name'];
            $order_goods['spec_value'] = $info['spec_value_str'];
            $order_goods['goods_image'] = empty($info['spec_image']) ? $info['image'] : $info['spec_image'];
        }
        return $result;
    }

    //取消订单,返回商品规格表库存
    public static function cancel($order_id, $admin_id)
    {
        $order = Order::get(['del' => 0, 'id' => $order_id], ['order_goods']);

        OrderGoodsLogic::backStock($order['order_goods'], $order['pay_status']);

        $order->save(['order_status' => Order::STATUS_CLOSE, 'update_time' => time(), 'cancel_time' => time()]);

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_SHOP,
            OrderLog::SHOP_CANCEL_ORDER,
            $order_id,
            $admin_id,
            OrderLog::SHOP_CANCEL_ORDER
        );
    }

    //删除已取消的订单
    public static function del($order_id, $admin_id)
    {
        $order = Order::get(['del' => 0, 'id' => $order_id]);
        $order->save(['del' => 1, 'update_time' => time()]);

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_SHOP,
            OrderLog::SHOP_DEL_ORDER,
            $order_id,
            $admin_id,
            OrderLog::SHOP_DEL_ORDER
        );
    }

    //物流公司
    public static function express()
    {
        return Db::name('express')->where('del', 0)->select();
    }

    //发货操作
    public static function deliveryHandle($data, $admin_id)
    {
        $order_id = $data['order_id'];
        $order = Order::get(['del' => 0, 'id' => $order_id], ['order_goods']);

        if ($order['shipping_status'] == 1) {
            return true;
        }

        $shipping = Db::name('express')->where('id', $data['shipping_id'])->find();

        //添加发货单
        $delivery_data = [
            'order_id' => $order_id,
            'order_sn' => $order['order_sn'],
            'user_id' => $order['user_id'],
            'admin_id' => $admin_id,
            'consignee' => $order['consignee'],
            'mobile' => $order['mobile'],
            'province' => $order['province'],
            'city' => $order['city'],
            'district' => $order['district'],
            'address' => $order['address'],
            'invoice_no' => $data['invoice_no'],
            'send_type' => $data['send_type'],
            'create_time' => time(),
        ];

        //配送方式->快递配送
        if ($data['send_type'] == 1) {
            $delivery_data['shipping_id'] = $data['shipping_id'];
            $delivery_data['shipping_name'] = $shipping['name'];
            $delivery_data['shipping_status'] = 1;
        }

        $delivery_id = Db::name('delivery')->insertGetId($delivery_data);

        $order->update_time = time();
        $order->shipping_time = time();
        $order->shipping_status = 1;
        $order->order_status = Order::STATUS_WAIT_RECEIVE;
        $order->delivery_id = $delivery_id;
        $order->save();

        //发货短信通知
        if($order->mobile){
            $nickname = Db::name('user')->where(['id' => $order['user_id']])->value('nickname');
            $send_data = [
                'key' => 'DDFHTZ',
                'mobile' => $order->mobile,
                'params' => [
                    'order_sn' => $order->order_sn,
                    'nickname' => $nickname,
                ],
            ];
        }


        Hook::listen('sms_send', $send_data);

        // 发货模板消息
        Hook::listen('wx_message_send', [
            'user_id'  => $order['user_id'],
            'scene'    => MessageScene_::DELIVER_GOODS_SUCCESS,
            'order_id' => $order_id,
            'shipping_name' => $delivery_data['shipping_name'] ?? '无需快递',
            'invoice_no'    => $data['invoice_no'] ?? '',
            'delivery_time' => date('Y-m-d H:i:s')
        ]);

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_SHOP,
            OrderLog::SHOP_DELIVERY_ORDER,
            $order_id,
            $admin_id,
            OrderLog::SHOP_DELIVERY_ORDER
        );
    }


    //确认收货
    public static function confirm($order_id, $admin_id)
    {
        $order = Order::get(['del' => 0, 'id' => $order_id]);
        $order->order_status = Order::STATUS_FINISH;
        $order->update_time = time();
        $order->confirm_take_time = time();
        $order->save();

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_SHOP,
            OrderLog::SHOP_CONFIRM_ORDER,
            $order_id,
            $admin_id,
            OrderLog::SHOP_CONFIRM_ORDER
        );
    }

    //物流信息
    public static function shippingInfo($order_id)
    {
        $shipping = Db::name('delivery')->where('order_id', $order_id)->find();
        if ($shipping) {
            $shipping['create_time_text'] = date('Y-m-d H:i:s', $shipping['create_time']);
        }
        $shipping['traces'] = self::getShipping($order_id);
        return $shipping;
    }

    public static function getShipping($order_id)
    {
        $orderModel = new Order();
        $order = $orderModel->alias('o')
            ->field('invoice_no,shipping_name,shipping_id,o.shipping_status')
            ->join('delivery d', 'd.order_id = o.id')
            ->where(['o.id' => $order_id])
            ->find();

        $express = ConfigServer::get('express', 'way', '', '');
        $app = ConfigServer::get($express, 'appkey', '', '');
        $key = ConfigServer::get($express, 'appsecret', '', '');

        if (empty($express) || $order['shipping_status'] != 1 || empty($app) || empty($key)) {
            return $traces[] = ['暂无物流信息'];
        }

        //快递配置设置为快递鸟时
        if($express === 'kdniao') {
            $expressage = (new Kdniao($app, $key, Env::get('app.app_debug', true)));
            $shipping_field = 'codebird';
        } else {
            $expressage = (new Kd100($key, $app, Env::get('app.app_debug', true)));
            $shipping_field = 'code100';
        }

        //快递编码
        $shipping_code = Db::name('express')
            ->where(['id' => $order['shipping_id']])
            ->value($shipping_field);

        //获取物流轨迹
        $expressage->logistics($shipping_code, $order['invoice_no']);
        $traces = $expressage->logisticsFormat();
        if ($traces == false) {
            $traces[] = ['暂无物流信息'];
        } else {
            foreach ($traces as &$item) {
                $item = array_values(array_unique($item));
            }
        }
        return $traces;
    }


    /**
     * Notes: 订单备注
     * @param $post
     * @param string $type
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     * @author 张无忌(2021/2/1 18:50)
     */
    public static function remarks($post, $type="get")
    {
        if ($type==='get') {

            return Db::name('order')->field('id,order_remarks')
                ->where(['id'=>$post['id']])
                ->findOrEmpty();
        } else {
            return Db::name('order')
                ->where(['id'=>$post['id']])
                ->update(['order_remarks'=>$post['order_remarks']]);
        }
    }
}