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

namespace app\admin\logic;


use app\common\logic\OrderLogLogic;
use app\common\model\Order;
use app\common\model\OrderLog;
use app\common\model\UserLevel;
use app\common\model\Verification;
use app\common\server\UrlServer;
use think\Db;
use think\facade\Hook;

class VerificationLogic
{
    /**
     * @notes 列表查询条件
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/16 5:59 下午
     */
    public static function getWhere($params)
    {
        $where = [];
        $where[] = ['o.del', '=', 0];
        $where[] = ['o.delivery_type', '=', 2];

        //提货码
        if (!empty($params['pickup_code'])) {
            $where[] = ['o.pickup_code', 'like', '%'.$params['pickup_code'].'%'];
        }

        //核销状态
        if (isset($params['verification_status']) && $params['verification_status'] != '') {
            $where[] = ['o.verification_status', '=', $params['verification_status']];
        }

        //订单搜素
        if (!empty($params['search_key']) && !empty($params['keyword'])) {
            $keyword = $params['keyword'];
            switch ($params['search_key']) {
                case 'order_sn':
                    $where[] = ['o.order_sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_sn':
                    $where[] = ['u.sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'nickname':
                    $where[] = ['nickname', 'like', '%' . $keyword . '%'];
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
        if (!empty($params['goods_name'])) {
            $where[] = ['g.goods_name', 'like', '%' . $params['goods_name'] . '%'];
        }

        //订单类型
        if (!empty($params['order_type'])) {
            $where[] = ['o.order_type', '=', $params['order_type']];
        }

        //订单来源
        if (!empty($params['order_source'])) {
            $where[] = ['o.order_source', '=', $params['order_source']];
        }

        //付款方式
        if (!empty($params['pay_way'])) {
            $where[] = ['o.pay_way', '=', $params['pay_way']];
        }

        //下单时间
        if (!empty($params['start_time'])) {
            $where[] = ['o.create_time', '>=', strtotime($params['start_time'])];
        }
        if (!empty($params['end_time'])) {
            $where[] = ['o.create_time', '<=', strtotime($params['end_time'])];
        }

        return $where;
    }

    /**
     * @notes 自提订单列表
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/16 6:09 下午
     */
    public static function lists($params)
    {
        $order = new Order();
        $where = self::getWhere($params);

        $field = 'o.*,pay_way as pay_way_text,ss.name as shop_name';

        $count = $order
            ->alias('o')
            ->field($field)
            ->join('user u', 'u.id = o.user_id')
            ->join('order_goods g', 'g.order_id = o.id')
            ->join('selffetch_shop ss', 'ss.id = o.selffetch_shop_id')
            ->with(['order_goods', 'user.level'])
            ->where($where)
            ->group('o.id')
            ->count();

        $lists = $order
            ->alias('o')
            ->field($field)
            ->join('user u', 'u.id = o.user_id')
            ->join('order_goods g', 'g.order_id = o.id')
            ->join('selffetch_shop ss', 'ss.id = o.selffetch_shop_id')
            ->with(['order_goods', 'user.level'])
            ->where($where)
            ->append(['delivery_address', 'order_type_text', 'user.base_avatar', 'order_source_text','verification_status_text'])
            ->page($params['page'], $params['limit'])
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

            $list['verifier_name'] = '-';
            $list['verification_time'] = '-';
            if ($list['verification_status'] == Order::WRITTEN_OFF) {
                $verification = Verification::where('order_id',$list['id'])->json(['snapshot'],true)->find();
                $list['verification_time'] = date('Y-m-d H:i:s',$verification['create_time']);
                $list['verifier_name'] = $verification['snapshot']['name'];
            }
        }
        return ['count' => $count, 'lists' => $lists];
    }

    /**
     * @notes 导出自提订单列表
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/16 7:55 下午
     */
    public static function exportFile($params)
    {
        $where = self::getWhere($params);

        $field = 'o.*,o.order_type as order_type_text, o.order_source as order_source_text,o.pay_way as pay_way_text,o.pay_status as pay_status_text,o.order_status as order_status_text,u.sn as user_sn,u.nickname as user_nickname,u.level as user_level';

        $lists = Order::alias('o')
            ->join('user u','u.id=o.user_id')
            ->join('order_goods og', 'og.order_id=o.id')
            ->join('goods g', 'g.id=og.goods_id')
            ->with([
                'order_goods',
                'selffetch_shop' => function ($query) {
                    $query->field([ 'id', 'name', 'address', 'district', 'city', 'province' ])->append([ 'shop_address' ]);
                }
            ])
            ->field($field)
            ->where($where)
            ->append([ 'verification_status_text', 'order_status_text' ])
            ->order('o.id', 'desc')
            ->group('og.order_id')
            ->select()
            ->toArray();

        $userLevel = UserLevel::where('del', 0)->column(['id','name'], 'id');

        $exportTitle = [
            '订单编号', '订单类型', '下单时间', '支付时间', '订单来源',
            '会员编号', '会员昵称', '会员等级',
            '商品信息', '商品数量',
            '运费金额', '商品总金额', '优惠金额', '积分抵扣', '应付金额', '支付方式',
            '配送方式', '自提门店', '自提地址', '联系人', '联系手机', '提货码',
            '核销状态', '订单状态', '核销员', '核销时间',
        ];
        $exportExt = 'xls';
        $exportData = [];
        foreach ($lists as $item){
            $item['delivery_type'] = Order::getDeliveryType($item['delivery_type']);
            $orderSn = 'SN'.$item['order_sn']; // 转字符串
            $level = $userLevel[$item['user_level']] ?? '无等级';
            // $deliveryType = Order::getDeliveryType($item['delivery_type']);
            $goodsStr = '';
            foreach($item['order_goods'] as $subItem) {
                $goodsInfo = json_decode($subItem['goods_info'], true);
                $goodsStr.= '【'.$goodsInfo['goods_name'].' 规格:'.$goodsInfo['spec_value_str']. ' 数量:'.$subItem['goods_num']. '】';
            }
            
            $item['verifier_name'] = '-';
            $item['verification_time'] = '-';
            if ($item['verification_status'] == Order::WRITTEN_OFF) {
                $verification = Verification::where('order_id',$item['id'])->json(['snapshot'],true)->find();
                $item['verification_time'] = date('Y-m-d H:i:s',$verification['create_time']);
                $item['verifier_name'] = $verification['snapshot']['name'];
            }

            $exportData[] = [
                $orderSn, $item['order_type_text'], $item['create_time'], $item['pay_time'], $item['order_source_text'],
                $item['user_sn'], $item['user_nickname'], $level,
                $goodsStr, $item['total_num'],
                $item['shipping_price'], $item['goods_price'], $item['discount_amount'], $item['integral_amount'], $item['order_amount'], $item['pay_way_text'],
                $item['delivery_type'], $item['selffetch_shop']['name'] ?? '', $item['selffetch_shop']['shop_address'] ?? '', $item['consignee'], $item['mobile'], $item['pickup_code'],
                $item['verification_status_text'], $item['order_status_text'], $item['verifier_name'], $item['verification_time'],
            ];
        }
        return ['exportTitle'=> $exportTitle, 'exportData' => $exportData, 'exportExt'=>$exportExt, 'exportName'=>'自提订单列表'.date('Y-m-d H:i:s')];
    }

    /**
     * @notes 提货核销
     * @param $params
     * @return bool|string
     * @author ljj
     * @date 2021/8/17 10:09 上午
     */
    public static function verification($params)
    {
        // 启动事务
        Db::startTrans();
        try {
            $order = Order::find($params['id']);

            //添加核销记录
            $snapshot = [
                'sn' => $params['admin_info']['account'],
                'name' => $params['admin_info']['name']
            ];
            $verification = new Verification;
            $verification->order_id = $params['id'];
            $verification->selffetch_shop_id = $order['selffetch_shop_id'];
            $verification->handle_id = $params['admin_info']['id'];
            $verification->verification_scene = Verification::TYPE_ADMIN;
            $verification->snapshot = json_encode($snapshot);
            $verification->create_time = time();
            $verification->save();

            //更新订单状态
            $order->order_status = Order::STATUS_FINISH;
            $order->verification_status = Order::WRITTEN_OFF;
            $order->update_time = time();
            $order->confirm_take_time = time();
            $order->save();

            //订单日志
            OrderLogLogic::record(
                OrderLog::TYPE_SHOP,
                OrderLog::SHOP_VERIFICATION,
                $params['id'],
                $params['admin_info']['id'],
                OrderLog::SHOP_VERIFICATION
            );

            // 赠送成长值和积分
            Hook::listen('give_reward', [
                'order_id' => $params['id'],
                'scene'    => 3, //3=订单完成
            ]);

            // 提交事务
            Db::commit();
            return true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return $e->getMessage();
        }
    }

    /**
     * @notes 提货核销详情
     * @param $id
     * @return Order
     * @author ljj
     * @date 2021/8/17 10:00 上午
     */
    public static function verificationInfo($id)
    {
        $detail = Order::alias('o')
            ->join('selffetch_shop ss', 'ss.id = o.selffetch_shop_id')
            ->with('order_goods')
            ->where('o.id',$id)
            ->field('o.id,o.pickup_code,ss.name as shop_name,o.consignee,o.mobile')
            ->find();

        foreach ($detail['order_goods'] as &$order_goods) {
            $info = json_decode($order_goods['goods_info'], true);
            $order_goods['goods_name'] = $info['goods_name'];
            $order_goods['spec_value'] = $info['spec_value_str'];
            $order_goods['goods_image'] = empty($info['spec_image']) ?
                UrlServer::getFileUrl($info['image']) : UrlServer::getFileUrl($info['spec_image']);
        }

        return $detail;
    }

    /**
     * @notes 核销查询
     * @param $id
     * @return Order
     * @author ljj
     * @date 2021/8/17 11:47 上午
     */
    public static function verificationQuery($id)
    {
        $detail = Order::alias('o')
            ->join('selffetch_shop ss', 'ss.id = o.selffetch_shop_id')
            ->join('verification v', 'o.id = v.order_id')
            ->with('order_goods')
            ->where('o.id',$id)
            ->field('o.id,ss.name as shop_name,o.consignee,o.mobile,v.snapshot,v.create_time as verification_time')
            ->json(['snapshot'],true)
            ->find();

        foreach ($detail['order_goods'] as &$order_goods) {
            $info = json_decode($order_goods['goods_info'], true);
            $order_goods['goods_name'] = $info['goods_name'];
            $order_goods['spec_value'] = $info['spec_value_str'];
            $order_goods['goods_image'] = empty($info['spec_image']) ?
                UrlServer::getFileUrl($info['image']) : UrlServer::getFileUrl($info['spec_image']);
        }

        $detail['verification_time'] = date('Y-m-d H:i:s',$detail['verification_time']);

        return $detail;
    }
}