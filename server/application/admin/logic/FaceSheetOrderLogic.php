<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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


use app\common\logic\OrderLogLogic;
use app\common\model\NoticeSetting;
use app\common\model\Order;
use app\common\model\OrderGoods;
use app\common\model\OrderLog;
use app\common\model\TeamFound;
use app\common\model\User;
use app\common\model\FaceSheetSender;
use app\common\model\FaceSheetTemplate;
use app\common\model\Express;
use app\common\server\AreaServer;
use app\common\server\printing\Kuaidi100;
use app\common\server\UrlServer;
use Exception;
use think\Db;
use think\facade\Hook;

class FaceSheetOrderLogic
{
    /**
     * @notes 获取待发货订单列表
     * @param $get
     * @return array
     * @author 张无忌
     * @date 2021/9/27 11:53
     */
    public static function lists($get)
    {
        $where = [
            ['O.order_status', '=', 1],
            ['O.pay_status', '=', 1],
            ['O.delivery_type', '=', 1],
//            ['TF.status', '=', 0]
        ];

        if (!empty($get['keyword_type']) and !empty($get['keyword'])) {
            switch ($get['keyword_type']) {
                case 'order_sn':
                    $where[] = ['O.order_sn', '=', $get['keyword']];
                    break;
                case 'user_sn':
                    $where[] = ['U.sn', 'like', '%'.$get['keyword'].'%'];
                    break;
                case 'nickname':
                    $where[] = ['U.nickname', 'like', '%'.$get['keyword'].'%'];
                    break;
                case 'consignee':
                    $where[] = ['O.consignee', 'like', '%'.$get['keyword'].'%'];
                    break;
                case 'consignee_mobile':
                    $where[] = ['O.consignee_mobile', '=', $get['keyword']];
                    break;
            }
        }

        if (!empty($get['goods_name']) and $get['goods_name']) {
            $where[] = ['OG.goods_name', 'like', '%'.$get['goods_name'].'%'];
        }

        if (!empty($get['start_time']) and $get['start_time']) {
            $where[] = ['O.create_time', '>=', strtotime($get['start_time'])];
        }

        if (!empty($get['end_time']) and $get['end_time']) {
            $where[] = ['O.create_time', '<=', strtotime($get['end_time'])];
        }

        $count = Order::where($where)->alias('O')
            ->join('user U', 'U.id = O.user_id')
            ->join('orderGoods OG', 'OG.order_id = O.id')
            ->leftJoin('team_found TF', 'TF.id = O.team_found_id')
            ->group('O.id')
            ->count('O.id');

        $lists = Order::field(
            'O.id,O.user_id,O.order_type,O.order_sn,O.order_status,O.total_num,O.order_amount,O.delivery_type,
                 O.consignee,O.mobile,O.province,O.city,O.district,O.address,O.create_time,TF.status as team_found_status'
            )->alias('O')
            ->where($where)
            ->join('user U', 'U.id = O.user_id')
            ->join('orderGoods OG', 'OG.order_id = O.id')
            ->leftJoin('team_found TF', 'TF.id = O.team_found_id')
            ->group('O.id')
            ->order('O.id desc')
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $user = User::field('nickname,sn')->where(['id'=>$item['user_id']])->find();
            $item['user'] = $user['nickname'];

//            $item['team_found_status'] = $item['team_found_status'] ? 1 : 0;

            $item['order_type'] = Order::getOrderType($item['order_type']);
            $item['order_status'] = Order::getOrderStatus($item['order_status']);
            $item['delivery_type'] = Order::getDeliveryType($item['delivery_type']);
            $item['address'] = AreaServer::getAddress([$item['province'], $item['city'], $item['district']], $item['address']);

            $orderGoods = OrderGoods::field('id,goods_price,goods_num,goods_info')->where(['order_id'=>$item['id']])->select();
            $orderGoodsData = [];
            foreach ($orderGoods as $og) {
                $info = json_decode($og['goods_info'], true);
                $orderGoodsData[] = [
                    'id'          => $og['id'],
                    'goods_price' => $og['goods_price'],
                    'goods_num'   => $og['goods_num'],
                    'goods_name'  => $info['goods_name'],
                    'spec_value_str' => $info['spec_value_str'],
                    'image' => $info['spec_image'] ? UrlServer::getFileUrl($info['spec_image']) : UrlServer::getFileUrl($info['image']),
                ];
            }
            $item['orderGoods'] = $orderGoodsData;
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    /**
     * @notes 打印电子面单
     * @param $order_id
     * @param $tempid
     * @param $sender_id
     * @param $admin_id
     * @return string
     * @author 张无忌
     * @date 2021/9/27 11:54
     */
    public static function print($order_id, $tempid, $sender_id, $admin_id)
    {
        try {
            // 查询出订单信息
            $order = Order::field(true)->with(['orderGoods'])->where(['id' => intval($order_id)])->find();

            if (!$order) {
                throw new Exception('订单不存在');
            }

            if ($order['order_status'] != 1) {
                throw new Exception('该订单不是待发货状态的订单');
            }

            if ($order['pay_status'] == 0) {
                throw new Exception('该订单未支付');
            }

            if ($order['pay_status'] == 2) {
                throw new Exception('该订单已退款');
            }

            // 拼团订单(未成功的订单)
            if ($order['order_type'] == 2) {
                $found = TeamFound::where(['id'=>$order['team_found_id']])->find();
                if ($found['status'] != 1) {
                    throw new Exception('拼团未成功禁止打印：'.$order['order_sn']);
                }
            }

            // 获取发件人模板
            $sender = FaceSheetSender::where(['id'=>intval($sender_id)])->find();
            if (!$sender) {
                throw new Exception('未找到发件人模板信息');
            }

            // 获取电子面单模板
            $template = FaceSheetTemplate::where(['id'=>intval($tempid)])->find();
            if (!$template) {
                throw new Exception('未找到电子面单模板信息');
            }

            // 获取快递公司
            $express = Express::field('id,name,code100')->where(['id'=>$template['express_id']])->find();
            if (!$template) {
                throw new Exception('未找到快递公司信息');
            }

            $goodsName = '';
            $totalWeight = 0;
            foreach ($order['order_goods'] as $item) {

                $goodsInfo = json_decode($item['goods_info'], true);
                $goodsName .= $goodsInfo['goods_name'].' ('.$goodsInfo['spec_value_str'].$item['goods_num'].'件)\n';
                $totalWeight = round($goodsInfo['weight']+$totalWeight,2);
            }
            // 打印电子面单
            $result = (new Kuaidi100())->print([
                'remark'   => $goodsName ?? '',
                'template' => [
                    'partnerId'    => $template['partner_id'],
                    'partnerKey'   => $template['partner_key'],
                    'payType'      => $template['pay_type'],
                    'net'          => $template['net'],
                    'tempid'       => $template['tempid'],
                    'expressName'  => $express['name'],
                    'expressCode'  => $express['code100'],
                ],
                'total_weight'     => $totalWeight,
                'recMan' => [
                    'name'      => trim($order['consignee']),
                    'mobile'    => trim($order['mobile']),
                    'printAddr' => AreaServer::getAddress([$order['province'], $order['city'], $order['district']], $order['address'])
                ],
                'sendMan' => array(
                    'name'      => $sender['name'],
                    'mobile'    => $sender['mobile'],
                    'printAddr' => AreaServer::getAddress([$sender['province_id'], $sender['city_id'], $sender['district_id']], $sender['address']),
                )
            ]);

            // 更新信息状态为已发货
            $delivery_id = Db::name('delivery')->insertGetId([
                'order_id'  => $order['id'],
                'order_sn'  => $order['order_sn'],
                'user_id'   => $order['user_id'],
                'admin_id'  => $admin_id,
                'consignee' => $order['consignee'],
                'mobile'    => $order['mobile'],
                'province'  => $order['province'],
                'city'      => $order['city'],
                'district'  => $order['district'],
                'address'   => $order['address'],
                'shipping_status'  => 1,
                'shipping_id'      => $express['id'],
                'shipping_name'    => $express['name'],
                'send_type'        => 1,
                'invoice_no'       => $result['data']['kuaidinum'],
                'create_time'      => time()
            ]);

            Order::update([
                'order_status'    => 2,
                'shipping_status' => 1,
                'delivery_id'     => $delivery_id,
                'shipping_time'   => time(),
                'update_time'     => time(),
            ], ['id'=>$order['id']]);

            //订单日志
            OrderLogLogic::record(
                OrderLog::TYPE_SHOP,
                OrderLog::SHOP_DELIVERY_ORDER,
                $order_id,
                $admin_id,
                OrderLog::SHOP_DELIVERY_ORDER
            );

            //发货短信通知
            if($order['mobile']){
                $nickname = Db::name('user')->where(['id' => $order['user_id']])->value('nickname');
                $send_data = [
                    'key' => NoticeSetting::ORDER_DELIVERY_NOTICE,
                    'user_id'  => $order['user_id'],
                    'mobile' => $order['mobile'],
                    'params' => [
                        'order_sn'      => $order['order_sn'],
                        'nickname'      => $nickname,
                        'time'          => date('Y-m-d H:i:s'),
                        'invoice_no'    => $result['data']['kuaidinum'],
                        'shipping_name' => $express['name'],
                        'goods_name'    => omit_str($order['order_goods'][0]['goods_name'] ?? '商品', 8)
                    ],
                ];
                Hook::listen('sms_send', $send_data);
            }

            // 赠送成长值和积分
            Hook::listen('give_reward', [
                'order_id' => $order['id'],
                'scene'    => 2, //2=发货场景
            ]);

            // 发货模板消息
            Hook::listen('notice', [
                'user_id'       => $order['user_id'],
                'order_id'      => $order['id'],
                'scene'         => NoticeSetting::ORDER_DELIVERY_NOTICE,
                'shipping_name' => $express['name'],
                'invoice_no'    => $result['data']['kuaidinum'],
                'time'          => date('Y-m-d H:i:s')
            ]);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}