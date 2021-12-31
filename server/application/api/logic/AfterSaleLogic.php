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

namespace app\api\logic;

use app\common\logic\{LogicBase, AfterSaleLogLogic};
use app\common\model\{AfterSale, AfterSaleLog, Goods, NoticeSetting, Order, OrderGoods};
use app\common\server\AreaServer;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;
use think\facade\Hook;

/**
 * 售后
 * Class AfterSaleLogic
 * @package app\api\logic
 */
class AfterSaleLogic extends LogicBase
{

    public static function lists($user_id, $type, $page, $size)
    {
        $where = [];
        $where[] = ['o.user_id', '=', $user_id];

        $data = $result = [];
        switch ($type) {
            case 'normal':
                $where[] = ['g.refund_status', '=', OrderGoods::REFUND_STATUS_NO];
                $where[] = ['o.order_status', 'in', [Order::STATUS_WAIT_RECEIVE, Order::STATUS_FINISH]];
                $order = new Order();
                $count = $order->alias('o')
                    ->field('o.id,o.confirm_take_time,o.order_status,o.create_time')
                    ->join('order_goods g', 'g.order_id = o.id')
                    ->with(['orderGoods' => function ($query) {
                        $query->where('refund_status', OrderGoods::REFUND_STATUS_NO);
                    }])
                    ->where($where)
                    ->group('o.id')
                    ->count();

                $lists = $order
                    ->alias('o')
                    ->field('o.id,o.confirm_take_time,o.order_status,o.create_time')
                    ->join('order_goods g', 'g.order_id = o.id')
                    ->with(['orderGoods' => function ($query) {
                        $query->where('refund_status', OrderGoods::REFUND_STATUS_NO);
                    }])
                    ->where($where)
                    ->group('o.id')
                    ->order('o.id desc')
                    ->page($page, $size)
                    ->select();

                foreach ($lists as $item) {
                    $result = [
                        'order_id' => $item['id'],
                    ];

                    $order_goods = [];
                    foreach ($item['order_goods'] as $k1 => $good) {
                        $goods = [
                            'goods_id' => $good['goods_id'],
                            'item_id' => $good['item_id'],
                            'goods_name' => '',
                            'goods_num' => $good['goods_num'],
                            'goods_price' => $good['goods_price'],
                            'image' => '',
                        ];

                        $goods_data = json_decode($good['goods_info'], true);
                        $goods['spec_value_str'] = $goods_data['spec_value_str'];
                        $goods['goods_name'] = $goods_data['goods_name'];
                        $goods['image'] = empty($goods_data['spec_image']) ? UrlServer::getFileUrl($goods_data['image']) : UrlServer::getFileUrl($goods_data['spec_image']);

                        $order_goods[] = $goods;
                    }
                    $result['order_goods'] = $order_goods;
                    $result['after_sale']['desc'] = '';
                    $result['after_sale']['able_apply'] = 1;
                    if (self::checkAfterSaleDate($item) === false) {
                        $result['after_sale']['desc'] = '该商品已超过售后期';
                        $result['after_sale']['able_apply'] = 0;
                    }
                    $time = $item['confirm_take_time'] ?? $item->getData('create_time');
                    $result['time'] = date('Y-m-d H:i', $time);
                    $data[] = $result;
                }
                $list = ['list' => $data, 'page' => $page, 'size' => $size, 'count' => $count, 'more' => is_more($count, $page, $size)];
                return $list;
                break;
            case 'apply':
                $where[] = ['g.refund_status', 'in', [OrderGoods::REFUND_STATUS_APPLY, OrderGoods::REFUND_STATUS_WAIT]];
                $where[] = ['o.order_status', 'in', [Order::STATUS_WAIT_RECEIVE, Order::STATUS_FINISH]];
                $where[] = ['a.del', '=', 0];
                break;
            case 'finish':
                $where[] = ['g.refund_status', '=', OrderGoods::REFUND_STATUS_SUCCESS];
                $where[] = ['a.del', '=', 0];
                $where[] = ['o.order_status', 'in', [Order::STATUS_WAIT_RECEIVE, Order::STATUS_FINISH, Order::STATUS_CLOSE]];
                break;
        }

        $field = 'g.order_id,g.goods_id,g.item_id,g.goods_num,g.goods_price,g.goods_info,a.status,a.refund_type,a.id as after_sale_id,a.create_time';

        $count = Db::name('order_goods g')
            ->field($field)
            ->join('order o', 'g.order_id = o.id')
            ->join('after_sale a', 'a.order_goods_id = g.id', 'left')
            ->where($where)
            ->group('g.id')
            ->count();

        $lists = Db::name('order_goods g')
            ->field($field)
            ->join('order o', 'g.order_id = o.id')
            ->join('after_sale a', 'a.order_goods_id = g.id', 'left')
            ->where($where)
            ->group('g.id')
            ->order('a.id desc')
            ->page($page, $size)
            ->select();

        foreach ($lists as $k => $item) {

            $goods_data = json_decode($item['goods_info'], true);
            $goods_name = $goods_data['goods_name'];
            $image = empty($goods_data['spec_image']) ? UrlServer::getFileUrl($goods_data['image']) : UrlServer::getFileUrl($goods_data['spec_image']);

            $result = [
                'order_id' => $item['order_id'],
                'order_goods' => [[
                    'goods_id' => $item['goods_id'],
                    'item_id' => $item['item_id'],
                    'goods_name' => $goods_name,
                    'goods_num' => $item['goods_num'],
                    'goods_price' => $item['goods_price'],
                    'image' => $image,
                    'spec_value_str' => $goods_data['spec_value_str'],
                ]],
                'after_sale' => [
                    'after_sale_id' => $item['after_sale_id'],
                    'status' => $item['status'],
                    'refund_type' => $item['refund_type'],
                    'status_text' => AfterSale::getStatusDesc($item['status']),
                    'type_text' => AfterSale::getRefundTypeDesc($item['refund_type']),
                    'desc' => AfterSale::getStatusDesc($item['status']),
                    'able_apply' => 1,
                ],
                'time' => date('Y-m-d H:i', $item['create_time']),
            ];
            $data[] = $result;
        }

        $list = [
            'list' => $data,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
        return $list;
    }

    //验证(收货后多少天内才可申请售后/或已发货,未收货). 售后日志
    public static function add($post, $user_id)
    {
        Db::startTrans();
        try {
            //1,增加售后记录
            $order_goods = Db::name('order_goods g')
                ->field('g.id,g.goods_num,g.total_pay_price,g.order_id,g.refund_status,g.goods_id')
                ->join('order o', 'o.id = g.order_id')
                ->where(['order_id' => $post['order_id'], 'g.item_id' => $post['item_id']])
                ->find();

            $data = [
                'sn' => createSn('after_sale', 'sn', '', 4),
                'user_id' => $user_id,
                'order_id' => $order_goods['order_id'],
                'order_goods_id' => $order_goods['id'],
                'item_id' => $post['item_id'],
                'goods_id' => $order_goods['goods_id'],
                'goods_num' => $order_goods['goods_num'],
                'refund_reason' => trim($post['reason']),
                'refund_remark' => isset($post['remark']) ? trim($post['remark']) : '',
                'refund_image' => isset($post['img']) ? $post['img'] : '',
                'refund_type' => $post['refund_type'],
                'refund_price' => $order_goods['total_pay_price'],
                'create_time' => time(),
            ];

            $after_sale_id = Db::name('after_sale')->insertGetId($data);

            //2,更改订单商品,退款状态为申请退款
            Db::name('order_goods')
                ->where('id', $order_goods['id'])
                ->update(['refund_status' => OrderGoods::REFUND_STATUS_APPLY]);

            //记录日志
            AfterSaleLogLogic::record(
                AfterSaleLog::TYPE_USER,
                AfterSaleLog::USER_APPLY_REFUND,
                $post['order_id'],
                $after_sale_id,
                $user_id,
                AfterSaleLog::USER_APPLY_REFUND
            );

            $order_contact_mobile = ConfigServer::get('order_message', 'order_contact_mobile' );
            //平台短信通知
            if($order_contact_mobile){
                Hook::listen('sms_send',[
                    'key'       => NoticeSetting::AFTER_SALE_NOTICE_PLATFORM,
                    'mobile'    => $order_contact_mobile,
                    'params'    => [
                        'order_sn'      => $data['sn'],
                    ],
                ]);
            }

            Db::commit();
            return self::dataSuccess('提交成功', ['after_sale_id' => $after_sale_id]);
        } catch (Exception $e) {
            Db::rollback();
            return self::dataError($e->getMessage());
        }
    }


    //详情
    public static function info($item_id, $order_id)
    {
        $goods = Db::name('order_goods')
            ->where(['order_id' => $order_id, 'item_id' => $item_id])
            ->hidden('id,spec_value_ids,create_time')
            ->find();

        $info = json_decode($goods['goods_info'], true);
        $goods['goods_name'] = $info['goods_name'];
        $goods['spec_value'] = $info['spec_value_str'];
        $goods['image'] = isset($info['image']) ? UrlServer::getFileUrl($info['image']) : '';

        $data = [
            'goods' => $goods,
            'reason' => AfterSale::getReasonLists(),
        ];
        return $data;
    }

    //上传退货快递信息
    public static function express($user_id, $post)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);

        $after_sale->express_name = $post['express_name'];
        $after_sale->invoice_no = $post['invoice_no'];
        $after_sale->express_remark = isset($post['express_remark']) ? trim($post['express_remark']) : null;
        $after_sale->express_image = isset($post['express_image']) ? $post['express_image'] : null;
        $after_sale->status = AfterSale::STATUS_WAIT_RECEIVE_GOODS;//售后状态
        $after_sale->save();

        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_USER,
            AfterSaleLog::USER_SEND_EXPRESS,
            $after_sale['order_id'],
            $id,
            $user_id,
            AfterSaleLog::USER_SEND_EXPRESS
        );
        return self::dataSuccess('提交成功', ['after_sale_id' => $id]);
    }


    //撤销申请
    public static function cancel($user_id, $post)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->del = 1;
        $after_sale->update_time = time();
        $after_sale->save();


        //2,更改订单商品,退款状态为申请退款
        $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);
        $order_goods->refund_status = OrderGoods::REFUND_STATUS_NO;
        $order_goods->save();

        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_USER,
            AfterSaleLog::USER_CANCEL_REFUND,
            $after_sale['order_id'],
            $id,
            $user_id,
            AfterSaleLog::USER_CANCEL_REFUND
        );
    }

    //售后详情
    public static function detail($get)
    {
        $after_sale = new \app\api\model\AfterSale();

        $detail = $after_sale
            ->field('id,sn,order_goods_id,refund_reason,refund_image,refund_type,refund_price,create_time,status')
            ->with(['order_goods'])
            ->where(['id' => $get['id'], 'del' => 0])
            ->find();

        if (!$detail) {
            return [];
        }

        $detail['refund_image'] = UrlServer::getFileUrl($detail['refund_image']);
        $detail['status_text'] = AfterSale::getStatusDesc($detail['status']);
        $detail['create_time'] = date('Y-m-d H:i:s', $detail['create_time']);

        $goods = json_decode($detail['order_goods']['goods_info'], true);

        $image = $goods['image'];
        $spec_image = $goods['spec_image'];
        $detail['order_goods']['image'] = empty($spec_image) ? $image : $spec_image;

        $detail['order_goods']['goods_name'] = $goods['goods_name'];
        $detail['order_goods']['spec_value'] = $goods['spec_value_str'];

        $detail['refund_type_text'] = AfterSale::getRefundTypeDesc($detail['refund_type']);

        $shop_province = ConfigServer::get('shop', 'province_id', '');
        $shop_city = ConfigServer::get('shop', 'city_id', '');
        $shop_district = ConfigServer::get('shop', 'district_id', '');
        $shop_address = ConfigServer::get('shop', 'address', '');

        $address = AreaServer::getAddress([$shop_province, $shop_city, $shop_district], $shop_address);

        $shop = [
            'contact' => ConfigServer::get('shop', 'contact', ''),
            'mobile' => ConfigServer::get('shop', 'mobile', ''),
            'address' => $address
        ];

        $detail['shop'] = $shop;
        return $detail;
    }

    //重新申请;商家拒绝才可以重新申请
    public static function again($user_id, $post)
    {
        Db::startTrans();
        try {
            $id = $post['id'];
            $after_sale = AfterSale::get($id);

            $after_sale->refund_type = $post['refund_type'];
            $after_sale->refund_reason = trim($post['reason']);
            $after_sale->refund_remark = isset($post['remark']) ? trim($post['remark']) : '';
            $after_sale->refund_image = isset($post['img']) ? $post['img'] : '';
            $after_sale->status = AfterSale::STATUS_APPLY_REFUND;
            $after_sale->save();

            //2,更改订单商品,退款状态为申请退款
            $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);
            $order_goods->refund_status = OrderGoods::REFUND_STATUS_APPLY;
            $order_goods->save();

            //记录日志
            AfterSaleLogLogic::record(
                AfterSaleLog::TYPE_USER,
                AfterSaleLog::USER_AGAIN_REFUND,
                $after_sale['order_id'],
                $id,
                $user_id,
                AfterSaleLog::USER_AGAIN_REFUND
            );
            Db::commit();
            return self::dataSuccess('提交成功', ['after_sale_id' => $id]);
        } catch (Exception $e) {
            Db::rollback();
            return self::dataError($e->getMessage());
        }

    }


    //检查是否在售后时间内
    public static function checkAfterSaleDate($order)
    {
        $now = time();
        $refund_days = ConfigServer::get('after_sale', 'refund_days', 0, 0);
        if ($refund_days == 0) {
            return true;
        }

        if ($order['order_status'] == \app\common\model\Order::STATUS_FINISH) {
            $check_time = strtotime('+' . $refund_days . 'day', $order['confirm_take_time']);
            if ($now > $check_time) {
                return false;
            }
        }
        return true;
    }
}