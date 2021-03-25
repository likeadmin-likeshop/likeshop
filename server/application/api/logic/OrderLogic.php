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

// | Author: LikeShopTeam-段誉
// +----------------------------------------------------------------------

namespace app\api\logic;

use app\api\model\{Coupon, Order, User};
use app\common\logic\{
    LogicBase,
    OrderGoodsLogic,
    OrderLogLogic,
    OrderRefundLogic,
    PayNotifyLogic};
use app\common\model\{Client_, MessageScene_, OrderLog, Pay, Order as CommonOrder};
use app\common\server\{ConfigServer, UrlServer};
use think\Db;
use think\Exception;
use expressage\{
    Kdniao,
    Kd100
};
use think\facade\Hook;


class OrderLogic extends LogicBase
{
    /**
     * Notes:结算详情
     * @param $post
     * @param $user_id
     * @author 段誉(2021/1/30 14:44)
     * @return array
     */
    public static function info($post, $user_id)
    {
        try{
            $user = User::get($user_id);
            $goods = $post['goods'];
            $item_ids = array_column($goods, 'item_id');
            $infos = self::getGoodsColumn($item_ids);

            $goods_lists = [];
            $total_num = 0;//商品总数量
            $total_goods_price = 0;//商品总金额
            $discount_amount = 0;//优惠金额
            $order_type = \app\common\model\Order::NORMAL_ORDER;//普通订单

            foreach ($goods as $good) {
                if (!isset($infos[$good['item_id']])) {
                    continue;
                }
                $goods_info = $infos[$good['item_id']];

                $goods_info['goods_num'] = $good['num'];
                $image_str = empty($goods_info['spec_image']) ? $goods_info['image'] : $goods_info['spec_image'];
                $goods_info['image_str'] = UrlServer::getFileUrl($image_str);

                unset($goods_info['id']);
                $goods_info['discount_price'] = 0;
                $goods_lists[] = $goods_info;

                //订单汇总信息
                $total_num += $good['num'];
                $total_goods_price += $goods_info['goods_price'] * $good['num'];
            }

            //用户地址
            $user_address = UserAddressLogic::getOrderUserAddress($post, $user_id);
            //运费
            $total_shipping_price = FreightLogic::calculateFreight($goods_lists, $user_address);
            //订单金额
            $total_amount = $total_goods_price + $total_shipping_price;
            //订单应付金额
            $order_amount = $total_amount;

            //使用优惠券
            if (isset($post['coupon_id'])){
                $discount_amount_data = self::calculateDiscountAmount($goods_lists, $post['coupon_id']);//订单优惠金额
                $discount_amount = $discount_amount_data['total_discount'];
                $goods_lists = $discount_amount_data['goods'];
                $order_amount = $order_amount - $discount_amount;
            }

            if ($order_amount <= 0){
                $order_amount = 0;
            }

            $result = [
                'order_type' => $order_type,
                'goods_lists' => array_values($goods_lists),
                'coupon_id' => $post['coupon_id'] ?? 0,
                'total_num' => $total_num,//订单总数量
                'total_goods_price' => round($total_goods_price, 2),//订单商品总价
                'total_amount' => round($total_amount, 2),//订单总价(商品价格,运费,优惠券等)
                'order_amount' => round($order_amount, 2),//订单应付价格
                'address' => $user_address,
                'discount_amount' => $discount_amount,//优惠券抵扣金额
                'shipping_price' => round($total_shipping_price, 2),//运费
                'remark' => $post['remark'] ?? '',
                'pay_way' => $post['pay_way'] ?? Pay::WECHAT_PAY,
                'user_money' => $user['user_money'],//用户余额
            ];

            return self::dataSuccess('', $result);
        } catch (Exception $e){
            return self::dataError($e->getMessage());
        }
    }


    /**
     * Notes: 计算优惠金额
     * @param $goods
     * @param $cl_id
     * @author 段誉(2021/1/30 14:44)
     * @return array
     * @throws Exception
     * 1,找出商品在优惠条件中的 总商品金额和商品数量
     * 2,计算出每个商品可获得的优惠金额,最后一个商品,用总优惠券金额 - 已优惠金额
     */
    public static function calculateDiscountAmount($goods, $cl_id)
    {
        $coupon = Coupon::getCouponByClId($cl_id);

        if (empty($coupon)){
            return ['goods' => $goods, 'total_discount' => 0];
        }

        //与优惠券关联的商品id
        $coupon_goods = Db::name('coupon_goods')
            ->where(['coupon_id' => $coupon['id']])
            ->column('goods_id');

        $coupon_goods_data = self::discountGoods($goods, $coupon, $coupon_goods);
        $goods_count = $coupon_goods_data['count'];//可以优惠的商品数量
        $total_goods_price = $coupon_goods_data['discount_goods'];//可以优惠的商品总金额

        $total_discount = 0;
        $discount = 0;//每件商品优惠金额
        $check_num = 0;
        foreach ($goods as &$good){
            //指定可用时
            if ($coupon['use_goods_type'] == 2 && !in_array($good['goods_id'], $coupon_goods)){
                continue;
            }
            //指定不可用
            if ($coupon['use_goods_type'] == 3 && in_array($good['goods_id'], $coupon_goods)){
                continue;
            }

            $discount = ($good['goods_price'] * $good['goods_num']) / $total_goods_price * $coupon['money'];
            $discount = round($discount, 2);
            $good['discount_price'] = $discount;//每个商品优惠的金额

            //用于判断当前是否为最后一个商品
            if (($check_num + 1) == $goods_count){
                $discount = $coupon['money'] - $total_discount;
            }

            $check_num += 1;
            $total_discount += $discount;
        }

        return [
            'goods' => $goods,
            'total_discount' => round($total_discount, 2),
        ];
    }


    /**
     * Notes: 订单中优惠商品的总价
     * @param $goods
     * @param $coupon
     * @param $coupon_goods
     * @author 段誉(2021/1/30 14:45)
     * @return array
     * @throws Exception
     */
    public static function discountGoods($goods, $coupon, $coupon_goods)
    {
        $discount_goods = 0;
        $count = 0;

        //1-全部商品；2-指定商品；3-指定商品不可用
        foreach ($goods as $good){
            if ($coupon['use_goods_type'] == 1){
                $discount_goods += $good['goods_price'] * $good['goods_num'];
                $count += 1;
            }

            if (($coupon['use_goods_type'] == 2) && in_array($good['goods_id'], $coupon_goods)){
                $discount_goods += $good['goods_price'] * $good['goods_num'];
                $count += 1;
            }

            if ($coupon['use_goods_type'] == 3 && !in_array($good['goods_id'], $coupon_goods)){
                $discount_goods += $good['goods_price'] * $good['goods_num'];
                $count += 1;
            }
        }

        if ($coupon['condition_type'] == 2 && $discount_goods < $coupon['condition_money']){
            throw new Exception('所结算的商品中未满足使用的金额');
        }


        return $data = [
            'count' => $count,
            'discount_goods' => $discount_goods,
        ];
    }



    /**
     * Notes:获取指定商品信息
     * @param $item_ids
     * @author 段誉(2021/1/30 14:45)
     * @return array
     */
    public static function getGoodsColumn($item_ids)
    {
        $field = 'i.id as item_id,g.id as goods_id,g.name as goods_name,g.status,g.del,g.image,i.stock,
        g.free_shipping_type,g.free_shipping,g.free_shipping_template_id,g.image, i.image as spec_image,
        i.spec_value_str,i.spec_value_ids,i.price as goods_price,i.image as spec_image,i.volume,
        i.weight,g.third_category_id';

        $goods = Db::name('goods g')
            ->join('goods_item i', 'g.id = i.goods_id')
            ->join('goods_category c', 'c.id = g.third_category_id')
            ->where('i.id', 'in', $item_ids)
            ->column($field, 'i.id');

        return $goods;
    }



    /**
     * Notes: 添加订单
     * @param $user_id
     * @param $data
     * @param $post
     * @author 段誉(2021/1/30 14:45)
     * @return array
     */
    public static function add($user_id, $data, $post)
    {
        Db::startTrans();
        try {
            $type = $post['type'] ?? '';
            $order_source = $post['client'];
            $goods_lists = $data['goods_lists'];
            $user_address = $data['address'];
            $user = User::get($user_id);


            if ($data['pay_way'] == Pay::BALANCE_PAY) {
                throw  new Exception('暂不支持余额支付');
            }

            if (empty($data['address'])) {
                throw  new Exception('请选择收货地址');
            }

            $order = self::addOrder($user_id, $data, $order_source, $user_address);
            $order_id = $order['order_id'];
            self::addOrderGoods($order_id, $goods_lists);
            self::addOrderAfter($order_id, $user_id, $type, $data);

            if ($data['order_amount'] == 0){
                PayNotifyLogic::handle('order', $order['order_sn'], []);
            }

            //短信通知
            Hook::listen('sms_send', [
                'key'       => 'DDTJTZ',
                'mobile'    => $user_address['telephone'],
                'params'    => [
                    'nickname'      => $user->mobile,
                    'order_sn'      => $order['order_sn'],
                    'order_money'   => $order['order_amount']
                ],
            ]);

            Db::commit();
            return self::dataSuccess('', ['order_id' => $order_id, 'type' => 'order']);

        } catch (Exception $e) {
            Db::rollback();
            return self::dataError($e->getMessage());
        }
    }



    /**
     * Notes:添加订单
     * @param $user_id
     * @param $data
     * @param $order_source
     * @param $user_address
     * @author 段誉(2021/1/30 14:46)
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function addOrder($user_id, $data, $order_source, $user_address)
    {
        $order_data = [
            'order_type' => $data['order_type'],
            'order_sn' => createSn('order', 'order_sn', '', 4),
            'user_id' => $user_id,
            'order_source' => $order_source,
            'consignee' => $user_address['contact'],
            'province' => $user_address['province_id'],
            'city' => $user_address['city_id'],
            'district' => $user_address['district_id'],
            'address' => $user_address['address'],
            'mobile' => $user_address['telephone'],
            'goods_price' => $data['total_goods_price'],
            'order_amount' => $data['order_amount'],//应付金额
            'total_amount' => $data['total_amount'],//订单总金额
            'shipping_price' => $data['shipping_price'],//店铺订单运费
            'total_num' => $data['total_num'],//店铺订单商品数量
            'user_remark' => $data['remark'],
            'create_time' => time(),
            'discount_amount' => $data['discount_amount'],//优惠券优惠金额
            'pay_way' => $data['pay_way'],
        ];

        if ($data['coupon_id'] > 0 && $data['discount_amount'] > 0){
            $order_data['coupon_list_id'] = $data['coupon_id'];//此处coupon_id为前端传入的coupon_list_id
        }

        $order_id = Db::name('order')->insertGetId($order_data);

        return [
            'order_id' => $order_id,
            'order_sn' => $order_data['order_sn'],
            'order_amount' => $order_data['order_amount'],
        ];
    }




    /**
     * Notes: 添加订单商品
     * @param $order_id
     * @param $goods_lists
     * @author 段誉(2021/1/30 14:46)
     * @throws Exception
     */
    public static function addOrderGoods($order_id, $goods_lists)
    {
        foreach ($goods_lists as $k1 => $good) {
            //商品验证
            if ($good['del'] == 1 || $good['status'] != 1) {
                throw new Exception($good['goods_name'] . '不存在或已下架');
            }
            if ($good['goods_num'] > $good['stock']) {
                throw new Exception($good['goods_name'] . '库存不足');
            }

            $goods_data[] = [
                'order_id' => $order_id,
                'goods_id' => $good['goods_id'],
                'item_id' => $good['item_id'],
                'goods_name' => $good['goods_name'],
                'goods_num' => $good['goods_num'],
                'goods_price' => $good['goods_price'],
                'total_price' => $good['goods_price'] * $good['goods_num'],
                'total_pay_price' => ($good['goods_price'] * $good['goods_num']) - $good['discount_price'],//实际支付商品金额(扣除优惠金额)
                'spec_value_ids' => $good['spec_value_ids'],
                'discount_price' => $good['discount_price'],
                'goods_info'   => json_encode($good, JSON_UNESCAPED_UNICODE),
                'create_time' => time(),
            ];
        }
        Db::name('order_goods')->insertAll($goods_data);
    }



    /**
     * Notes:下单后操作
     * @param $order_id
     * @param $user_id
     * @param $type
     * @param $data
     * @author 段誉(2021/1/30 14:46)
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function addOrderAfter($order_id, $user_id, $type, $data)
    {
        $goods_data = $data['goods_lists'];
        //下单时扣减商品库存
        $deduct_type = ConfigServer::get('trading','deduct_type', '', 1);
        if ($deduct_type == 1) {
            OrderGoodsLogic::decStock($goods_data);
        }

        //删除购物车商品
        if ($type == 'cart') {
            $cart_items = array_column($goods_data, 'item_id');
            Db::name('cart')->where([
                ['user_id', '=', $user_id],
                ['selected', '=', 1],
                ['item_id', 'in', $cart_items],
            ])->delete();
        }

        //有使用优惠券时更新coupon_list
        if ($data['coupon_id'] > 0){
            \app\common\logic\CouponLogic::handleCouponByOrder($data['coupon_id'], $order_id);
        }

        //增加订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_USER,
            OrderLog::USER_ADD_ORDER,
            $order_id,
            $user_id,
            OrderLog::USER_ADD_ORDER
        );
    }




    /**
     * Notes: 订单列表
     * @param $user_id
     * @param $type
     * @param $page
     * @param $size
     * @author 段誉(2021/1/30 14:46)
     * @return array
     */
    public static function getOrderList($user_id, $type, $page, $size)
    {
        $order = new Order();
        $where[] = ['del', '=', 0];
        $where[] = ['user_id', '=', $user_id];

        switch ($type) {
            case 'pay':
                $where[] = ['order_status', '=', CommonOrder::STATUS_WAIT_PAY];
                break;
            case 'delivery':
                $where[] = ['order_status', 'in', [CommonOrder::STATUS_WAIT_DELIVERY, CommonOrder::STATUS_WAIT_RECEIVE]];
                break;
            case 'finish':
                $where[] = ['order_status', '=', CommonOrder::STATUS_FINISH];
                break;
            case 'close':
                $where[] = ['order_status', '=', CommonOrder::STATUS_CLOSE];
                break;
        }

        $order_count = $order->where(['del' => 0, 'user_id' => $user_id])
            ->where($where)
            ->count();

        $order_list = $order->where(['del' => 0, 'user_id' => $user_id])
            ->where($where)
            ->with(['orderGoods'])
            ->field('id,order_sn,order_status,pay_status,order_amount,order_status,order_type,shipping_status,create_time')
            ->page($page, $size)
            ->order('id desc')
            ->select();

        $order_list->append(['goods_count', 'pay_btn', 'cancel_btn', 'delivery_btn', 'take_btn', 'del_btn', 'comment_btn', 'order_cancel_time']);

        foreach ($order_list as $list){
            foreach ($list['order_goods'] as &$order_goods){
                $order_good_info = json_decode($order_goods['goods_info'], true);
                $order_goods['goods_name'] = $order_good_info['goods_name'];
                $order_goods['spec_value'] = $order_good_info['spec_value_str'];
                $image = empty($order_good_info['spec_image']) ? $order_good_info['image'] : $order_good_info['spec_image'];
                $order_goods['image'] = UrlServer::getFileUrl($image);
            }
        }

        $data = [
            'list'  => $order_list,
            'page'  => $page,
            'size'  => $size,
            'count' => $order_count,
            'more'  => is_more($order_count, $page, $size)
        ];
        return $data;
    }



    /**
     * Notes: 订单详情
     * @param $order_id
     * @author 段誉(2021/1/30 14:46)
     * @return Order|array
     */
    public static function getOrderDetail($order_id)
    {
        $order = Order::get(['del' => 0, 'id' => $order_id], ['orderGoods']);
        if (!$order) {
            return [];
        }

        $order_append = [
            'delivery_address', 'pay_btn', 'cancel_btn', 'delivery_btn', 'take_btn', 'del_btn', 'order_cancel_time', 'pay_way_text'
        ];
        $order_hidden = [
            'user_id', 'order_source', 'city', 'district', 'address', 'shipping_status', 'shipping_code',
            'pay_status', 'transaction_id', 'del', 'province'
        ];
        $order->append($order_append)->hidden($order_hidden);

        $refund_days = ConfigServer::get('after_sale', 'refund_days', 0) * 86400;
        $now = time();
        //显示是否评论按钮
        foreach ($order->order_goods as &$item) {
            $item['comment_btn'] = 0;
            if ($order['pay_status'] == Pay::ISPAID && $order['order_status'] == CommonOrder::STATUS_FINISH && $item['is_comment'] == 0) {
                $item['comment_btn'] = 1;
            }
            $item['refund_btn'] = 0;

            $confirm_take_time = strtotime($order['confirm_take_time']) ?: 0;
            $refund_time = $confirm_take_time + $refund_days;

            if ($order['order_status'] == CommonOrder::STATUS_FINISH && $refund_time > $now && $item['refund_status'] == \app\common\model\OrderGoods::REFUND_STATUS_NO) {
                $item['refund_btn'] = 1;
            }

            $goods_info = json_decode($item['goods_info'], true);
            $item['goods_name'] = $goods_info['goods_name'];
            $item['spec_value'] = $goods_info['spec_value_str'];
            $item['image'] = empty($goods_info['spec_image']) ? UrlServer::getFileUrl($goods_info['image']) : UrlServer::getFileUrl($goods_info['spec_image']);
        }
        return $order;
    }




    /**
     * Notes: 取消订单
     * @param $order_id
     * @param $user_id
     * @author 段誉(2021/1/30 14:47)
     * @return array
     */
    public static function cancel($order_id, $user_id)
    {
        $order = Order::get([
            'del' => 0,
            'user_id' => $user_id,
            'id' => $order_id
        ], ['orderGoods']);

        if (!$order || $order['order_status'] > CommonOrder::STATUS_WAIT_DELIVERY) {
            return self::dataError('很抱歉!订单无法取消');
        }
        Db::startTrans();
        try {
            //取消订单
            OrderRefundLogic::cancelOrder($order_id, OrderLog::TYPE_USER);
            //已支付的订单,取消,退款
            if ($order['pay_status'] == Pay::ISPAID) {
                //更新订单状态
                OrderRefundLogic::cancelOrderRefundUpdate($order);
                //订单退款
                OrderRefundLogic::refund($order, $order['order_amount'], $order['order_amount']);
            }

            Db::commit();

            Hook::listen('wx_message_send', [
                'user_id'  => $user_id,
                'scene'    => MessageScene_::REFUND_SUCCESS,
                'order_id' => $order_id
            ]);
            return self::dataSuccess('取消成功');
        } catch (Exception $e) {
            Db::rollback();
            //增加退款失败记录
            OrderRefundLogic::addErrorRefund($order, $e->getMessage());
            return self::dataError($e->getMessage());
        }
    }



    /**
     * Notes: 删除订单
     * @param $order_id
     * @param $user_id
     * @author 段誉(2021/1/30 14:57)
     * @return array
     */
    public static function del($order_id, $user_id)
    {
        $order = Order::get([
            'order_status' => CommonOrder::STATUS_CLOSE,
            'user_id' => $user_id,
            'id' => $order_id,
            'del' => 0,
        ]);

        if (!$order) {
            return self::dataError('订单无法删除');
        }

        $order->save(['del' => 1, 'update_time' => time()]);

        OrderLogLogic::record(
            OrderLog::TYPE_USER,
            OrderLog::USER_DEL_ORDER,
            $order_id,
            $user_id,
            OrderLog::USER_DEL_ORDER
        );

        return self::dataSuccess('删除成功');
    }




    /**
     * Notes: 确认收货
     * @param $order_id
     * @param $user_id
     * @author 段誉(2021/1/30 14:57)
     * @return array
     */
    public static function confirm($order_id, $user_id)
    {
        $order = Order::get(['del' => 0, 'id' => $order_id]);
        if ($order['order_status'] == \app\common\model\Order::STATUS_FINISH) {
            return self::dataError('订单已完成');
        }
        if ($order['shipping_status'] == 0) {
            return self::dataError('订单未发货');
        }
        $order->order_status = \app\common\model\Order::STATUS_FINISH;
        $order->update_time = time();
        $order->confirm_take_time = time();
        $order->save();

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_USER,
            OrderLog::USER_CONFIRM_ORDER,
            $order_id,
            $user_id,
            OrderLog::USER_CONFIRM_ORDER
        );

        return self::dataSuccess('确认成功');
    }


    public static function orderTraces($id, $user_id)
    {
        $order = new Order();
        $order = $order->alias('o')
            ->join('order_goods og', 'o.id = og.order_id')
            ->join('goods g','g.id = og.goods_id')
            ->where(['o.id' => $id, 'user_id' => $user_id, 'pay_status' => \app\common\model\Order::STATUS_WAIT_DELIVERY, 'o.del' => 0])
            ->field('o.id,order_status,total_num,image,consignee,mobile,province,city,district,address,pay_time,confirm_take_time,o.shipping_status,shipping_time,o.delivery_id')
            ->append(['delivery_address'])
            ->find();

        if(!self::checkDelivery($order['delivery_id'])){
            return false;
        }

        //初始化数据
        $order_tips = '已下单';
        $order_traces = [];
        $traces = [];//物流轨迹
        $shipment = [//发货
            'title' => '已发货',
            'tips' => '',
            'time' => '',
        ];
        $finish = [//交易完成
            'title' => '交易完成',
            'tips' => '',
            'time' => '',
        ];

        if ($order) {
            $order_delivery = Db::name('delivery')->where(['order_id' => $id])->field('invoice_no,shipping_name,shipping_id')->find();
            $express = ConfigServer::get('express', 'way', '', '');
            //已发货
            if ($express && $order['shipping_status']) {
                $app = ConfigServer::get($express, 'appkey', '', '');
                $key = ConfigServer::get($express, 'appsecret', '', '');
                //获取物流配置
                if ($app && $key) {
                    //快递配置设置为快递鸟时
                    if($express === 'kdniao'){
                        $expressage = (new Kdniao($app, $key, true));
                        $shipping_field = 'codebird';
                    }else{
                        $expressage = (new Kd100($key, $app, true));
                        $shipping_field = 'code100';
                    }
                    //快递编码
                    $shipping_code = Db::name('express')->where(['id' => $order_delivery['shipping_id']])->value($shipping_field);
                    //获取物流轨迹
                    $expressage->logistics($shipping_code, $order_delivery['invoice_no']);
                    $traces = $expressage->logisticsFormat();

                    //获取不到物流轨迹时
                    if ($traces == false) {
                        $traces[] = ['暂时物流信息'];

                    } else {
                        foreach ($traces as &$item) {
                            $item = array_values(array_unique($item));
                        }
                    }

                }
            }
            //待收货
            if ($order['order_status'] == 2) {
                $shipment['tips'] = '商品已出库';
                $shipment['time'] = $order['shipping_time'];
            }
            //确认收货
            if ($order['order_status'] == 3) {
                $order_tips = '交易完成';
                $finish['tips'] = '订单交易完成';
                $finish['time'] = $order['confirm_take_time'];
            }
            //数据合并
            $order_traces = [
                'order' => [
                    'tips' => $order_tips,
                    'image' => UrlServer::getFileUrl($order['image']),
                    'count' => $order['total_num'],
                    'invoice_no' => $order_delivery['invoice_no'],
                    'shipping_name' => $order_delivery['shipping_name'],
                ],
                'take' => [
                    'contacts' => $order['consignee'],
                    'mobile' => $order['mobile'],
                    'address' => $order['delivery_address'],
                ],
                'finish' => $finish,
                'delivery' => [
                    'title' => '运输中',
                    'traces' => $traces
                ],
                'shipment' => $shipment,
                'buy' => [
                    'title' => '已下单',
                    'tips' => '订单提交成功',
                    'time' => $order['pay_time']
                ],
            ];
            return $order_traces;
        }
        return $order_traces;
    }


    //配送方式无需快递的
    public static function checkDelivery($delivery_id)
    {
        $delivery = Db::name('delivery')
            ->where(['id' => $delivery_id])
            ->find();

        if ($delivery['send_type'] == 2){
            return false;
        }
        return true;
    }

}