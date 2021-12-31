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

namespace app\admin\logic;

use app\common\logic\OrderRefundLogic;
use app\common\model\MessageScene_;
use app\common\model\NoticeSetting;
use app\common\model\Order;
use app\common\model\OrderGoods;
use app\common\model\OrderLog;
use app\common\logic\OrderLogLogic;
use app\common\model\Pay;
use app\common\model\UserLevel;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use app\common\server\YlyPrinter;
use expressage\Kd100;
use expressage\Kdniao;
use think\Db;
use think\Exception;
use think\facade\Cache;
use think\facade\Env;
use think\facade\Hook;

class OrderLogic
{

    /**
     * Notes: 列表查询条件
     * @param $get
     * @author 段誉(2021/2/1 10:12)
     * @return array
     */
    public static function getListsCondition($get)
    {
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

        return $where;
    }


    /**
     * Notes: 列表
     * @param $get
     * @author 段誉(2021/2/1 10:12)
     * @return array
     */
    public static function lists($get)
    {
        $order = new Order();
        $where = self::getListsCondition($get);

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
                $order_goods['image'] =  empty($order_good_info['spec_image']) ?
                    UrlServer::getFileUrl($order_good_info['image']) : UrlServer::getFileUrl($order_good_info['spec_image']);
            }
            $list['delivery_type'] = Order::getDeliveryType($list['delivery_type']);
            $list['user_level'] = $list['user']['level']['name'] ?? '无等级';
        }
        return ['count' => $count, 'lists' => $lists];
    }

    public static function exportFile($get)
    {
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
            $where[] = ['g.name', 'like', '%' . $get['goods_name'] . '%'];
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

        $field = 'o.*,o.order_type as order_type_text, o.order_source as order_source_text,o.pay_way as pay_way_text,address as delivery_address,o.pay_status as pay_status_text,o.order_status as order_status_text,u.sn as user_sn,u.nickname as user_nickname,u.level as user_level';

        $lists = Order::alias('o')
                ->join('user u','u.id=o.user_id')
                ->join('order_goods og', 'og.order_id=o.id')
                ->join('goods g', 'g.id=og.goods_id')
                ->with('order_goods')
                ->field($field)
                ->where($where)
                ->order('o.id', 'desc')
                ->group('og.order_id')
                ->select()
                ->toArray();

        $userLevel = UserLevel::where('del', 0)->column(['id','name'], 'id');

        $exportTitle = ['订单编号', '订单类型', '下单时间', '支付时间', '订单来源', '会员编号', '会员昵称', '会员等级', '商品信息', '商品数量', '运费金额', '商品总金额', '优惠金额', '应付金额', '支付方式', '收货人', '手机号码', '收货地址', '配送方式', '支付状态', '订单状态'];
        $exportExt = 'xls';
        $exportData = [];
        foreach ($lists as $item){
//            halt($item);
            $orderSn = 'SN'.$item['order_sn']; // 转字符串
            $level = isset($userLevel[$item['user_level']]) ?  $userLevel[$item['user_level']] : '无等级';
            $deliveryType = Order::getDeliveryType($item['delivery_type']);
            $goodsStr = '';
            foreach($item['order_goods'] as $subItem) {
                $goodsInfo = json_decode($subItem['goods_info'], true);
                $goodsStr.= '【'.$goodsInfo['goods_name'].' 规格:'.$goodsInfo['spec_value_str']. ' 数量:'.$subItem['goods_num']. '】';
            }
            $exportData[] = [$orderSn, $item['order_type_text'], $item['create_time'], $item['pay_time'], $item['order_source_text'], $item['user_sn'], $item['user_nickname'], $level, $goodsStr,$item['total_num'], $item['shipping_price'], $item['goods_price'], $item['discount_amount'], $item['order_amount'], $item['pay_way_text'], $item['consignee'], $item['mobile'], $item['delivery_address'],$deliveryType, $item['pay_status_text'], $item['order_status_text']];
        }
        return ['exportTitle'=> $exportTitle, 'exportData' => $exportData, 'exportExt'=>$exportExt, 'exportName'=>'订单列表'.date('Y-m-d H:i:s')];
    }


    /**
     * Notes: 详情
     * @param $id
     * @author 段誉(2021/2/1 10:12)
     * @return Order
     */
    public static function getDetail($id)
    {
        $order = new Order();
        $result = $order
            ->with(['user', 'order_goods'])
            ->where('id', $id)
            ->append(['delivery_address', 'pay_status_text', 'order_status_text', 'pay_way_text', 'order_type_text'])
            ->find();

        $result['user']['avatar'] = UrlServer::getFileUrl($result['user']['avatar']);
        foreach ($result['order_goods'] as &$order_goods) {
            $info = json_decode($order_goods['goods_info'], true);
            $order_goods['goods_name'] = $info['goods_name'];
            $order_goods['spec_value'] = $info['spec_value_str'];
            $order_goods['goods_image'] = empty($info['spec_image']) ?
                            UrlServer::getFileUrl($info['image']) : UrlServer::getFileUrl($info['spec_image']);
        }
        return $result;
    }


    /**
     * Notes: 取消订单(返回商品规格表库存)
     * @param $order_id
     * @param $admin_id
     * @author 段誉(2021/2/1 10:12)
     */
    public static function cancel($order_id, $admin_id)
    {
        Db::startTrans();
        try{
            $order = Order::get(['id' => $order_id], ['orderGoods']);
            //取消订单
            OrderRefundLogic::cancelOrder($order_id, OrderLog::TYPE_SHOP, $admin_id);
            //已支付的订单,取消,退款
            if ($order['pay_status'] == Pay::ISPAID) {
                //更新订单状态
                OrderRefundLogic::cancelOrderRefundUpdate($order);
                //订单退款
                OrderRefundLogic::refund($order, $order['order_amount'], $order['order_amount']);
            }
            Db::commit();

            return true;

        } catch(\Exception $e) {
            Db::rollback();
            //增加退款失败记录
            OrderRefundLogic::addErrorRefund($order, $e->getMessage());
            return $e->getMessage();
        }

    }


    /**
     * Notes: 删除已取消的订单
     * @param $order_id
     * @param $admin_id
     * @author 段誉(2021/2/1 10:14)
     */
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


    /**
     * Notes: 物流公司
     * @author 段誉(2021/2/1 10:15)
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function express()
    {
        return Db::name('express')->where('del', 0)->select();
    }




    /**
     * Notes: 发货操作
     * @param $data
     * @param $admin_id
     * @author 段誉(2021/2/1 10:15)
     * @return bool
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
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
        
        //更新订单下商品的发货状态
        $order->update_time = time();
        $order->shipping_time = time();
        $order->shipping_status = 1;
        $order->order_status = Order::STATUS_WAIT_RECEIVE;
        $order->delivery_id = $delivery_id;
        $order->save();

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_SHOP,
            OrderLog::SHOP_DELIVERY_ORDER,
            $order_id,
            $admin_id,
            OrderLog::SHOP_DELIVERY_ORDER
        );

        //发货短信通知
        if($order->mobile){
            $nickname = Db::name('user')->where(['id' => $order['user_id']])->value('nickname');
            $send_data = [
                'key' => NoticeSetting::ORDER_DELIVERY_NOTICE,
                'user_id'  => $order['user_id'],
                'mobile' => $order->mobile,
                'params' => [
                    'order_sn' => $order->order_sn,
                    'nickname' => $nickname,
                    'time'     => date('Y-m-d H:i:s'),
                    'invoice_no'    => $data['invoice_no'] ?? '',
                    'shipping_name' => $delivery_data['shipping_name'] ?? '无需快递',
                    'goods_name'    => omit_str($order['order_goods'][0]['goods_name'] ?? '商品', 8)
                ],
            ];
        }
        Hook::listen('sms_send', $send_data);

        // 赠送成长值和积分
        Hook::listen('give_reward', [
            'order_id' => $order['id'],
            'scene'    => 2, //2=发货场景
        ]);

        // 发货模板消息
        Hook::listen('notice', [
            'user_id' => $order['user_id'],
            'order_id' => $order['id'],
            'scene' => NoticeSetting::ORDER_DELIVERY_NOTICE,
            'shipping_name' => $delivery_data['shipping_name'] ?? '无需快递',
            'invoice_no'    => $data['invoice_no'] ?? '',
            'time' => date('Y-m-d H:i:s')
        ]);
    }




    /**
     * Notes: 确认收货
     * @param $order_id
     * @param $admin_id
     * @author 段誉(2021/2/1 10:16)
     */
    public static function confirm($order_id, $admin_id)
    {
        $order = Order::get(['del' => 0, 'id' => $order_id]);
        $order->order_status = Order::STATUS_FINISH;
        $order->update_time = time();
        $order->confirm_take_time = time();
        $order->save();

        // 赠送成长值和积分
        Hook::listen('give_reward', [
            'order_id' => $order_id,
            'scene'    => 3, //3=订单完成
        ]);

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_SHOP,
            OrderLog::SHOP_CONFIRM_ORDER,
            $order_id,
            $admin_id,
            OrderLog::SHOP_CONFIRM_ORDER
        );
    }



    /**
     * Notes: 物流信息
     * @param $order_id
     * @author 段誉(2021/2/1 10:16)
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function shippingInfo($order_id)
    {
        $shipping = Db::name('delivery')->where('order_id', $order_id)->find();
        if ($shipping) {
            $shipping['create_time_text'] = date('Y-m-d H:i:s', $shipping['create_time']);
        }
        $shipping['traces'] = self::getShipping($order_id);
        return $shipping;
    }


    /**
     * Notes: 物流轨迹
     * @param $order_id
     * @author 段誉(2021/2/1 10:16)
     * @return array|bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
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
            $expressage = (new Kdniao($key, $app, Env::get('app.app_debug', 'true')));
            $shipping_field = 'codebird';
        } else {
            $expressage = (new Kd100($key, $app, Env::get('app.app_debug', 'true')));
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
            $traces[] = [$expressage->getError()];
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

    /**
     * Notes:打印接口
     * @param $id int 订单id
     * @return string
     */
    public static function orderPrint($id){
        try {

            //打印机配置
            $printer_config = Db::name('printer_config')->where(['status'=>1])->find();
            //打印机列表
            $printer_list = Db::name('printer')->where(['type'=>$printer_config['id'],'del'=>0])->select();

            if(empty($printer_config) || empty($printer_list)){
                throw new Exception('请先配置打印机');
            }
            $yly_print = new YlyPrinter($printer_config['client_id'],$printer_config['client_secret']);

            $order = self::getPrintOrder($id);

            $template_config = ConfigServer::get('printer', 'yly_template', []);
            $yly_print->ylyPrint($printer_list,$order,$template_config);

        }catch (\Exception $e){

            $msg = json_decode($e->getMessage(),true);
            if($msg && isset($msg['error'])){
                return '易联云：'.$msg['error_description'];
            }
            if(18 === $e->getCode()){
                //todo token过期重新拿
                Cache::rm('yly_access_token');
                Cache::rm('yly_refresh_token');
            };
            return '易联云：'.$e->getMessage();
        }
    }

    public static function getPrintOrder($id){
        $order = new Order();
        $result = $order
            ->with(['user', 'order_goods'])
            ->where('id', $id)
            ->append(['delivery_address'])
            ->find();


        foreach ($result['order_goods'] as &$order_goods) {
            $info = json_decode($order_goods['goods_info'], true);
            $order_goods['name'] = $info['goods_name'];
            $order_goods['spec_value_str'] = $info['spec_value_str'];
            $order_goods['goods_image'] = empty($info['spec_image']) ? $info['image'] : $info['spec_image'];
        }
        return $result->toArray();
    }

}