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

use app\api\logic\DistributionLogic;
use app\common\logic\AccountLogLogic;
use app\common\logic\OrderRefundLogic;
use app\common\server\AreaServer;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use app\common\server\WeChatServer;
use app\common\logic\AfterSaleLogLogic;
use app\common\logic\PaymentLogic;
use app\common\model\{AccountLog, AfterSale, AfterSaleLog, Goods, MessageScene_, NoticeSetting, Order, OrderGoods, Pay};
use think\Db;
use think\Exception;
use think\facade\Env;
use think\facade\Hook;

class AfterSaleLogic
{
    /**
     * Notes: 列表
     * @param $get
     * @author 段誉(2021/1/30 16:56)
     * @return array
     */
    public static function lists($get)
    {
        $after_sale = new AfterSale();
        $where = [];

        $where[] = ['a.del', '=', 0];
        //订单类型
        if ($get['type'] != '') {
            $where[] = ['status', '=', $get['type']];
        }

        //订单搜素
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            switch ($get['search_key']) {
                case 'sn':
                    $where[] = ['a.sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'order_sn':
                    $where[] = ['o.order_sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'goods_name':
                    $where[] = ['g.goods_name', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_sn':
                    $where[] = ['u.sn', 'like', '%' . $keyword . '%'];
                    break;
                case 'nickname':
                    $where[] = ['u.nickname', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_mobile':
                    $where[] = ['u.mobile', 'like', '%' . $keyword . '%'];
                    break;
            }
        }

        if (isset($get['status']) && $get['status'] != '') {
            $where[] = ['a.status', '=', $get['status']];
        }

        //下单时间
        if (isset($get['start_time']) && $get['start_time'] != '') {
            $where[] = ['a.create_time', '>=', strtotime($get['start_time'])];
        }
        if (isset($get['end_time']) && $get['end_time'] != '') {
            $where[] = ['a.create_time', '<=', strtotime($get['end_time'])];
        }

        $field = 'a.id,a.sn,a.status,a.order_id,a.order_goods_id,
        a.user_id,a.refund_type,a.create_time,a.refund_price,
        o.order_status,o.pay_way';

        $count = $after_sale
            ->alias('a')
            ->join('order o', 'o.id = a.order_id')
            ->join('user u', 'u.id = a.user_id')
            ->join('order_goods g', 'g.id = a.order_goods_id')
            ->with(['order_goods', 'user', 'order'])
            ->where($where)
            ->group('a.id')
            ->count();

        $lists = $after_sale
            ->alias('a')
            ->field($field)
            ->join('order o', 'o.id = a.order_id')
            ->join('user u', 'u.id = a.user_id')
            ->join('order_goods g', 'g.id = a.order_goods_id')
            ->with(['order_goods', 'user', 'order'])
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('a.id desc')
            ->append(['user.base_avatar', 'order_goods.base_image'])
            ->group('a.id')
            ->select();

        foreach ($lists as &$list) {
            $list['order']['pay_way'] = Pay::getPayWay($list['order']['pay_way']);
            $list['order']['order_status'] = Order::getOrderStatus($list['order']['order_status']);
            $list['refund_type'] = AfterSale::getRefundTypeDesc($list['refund_type']);
            $list['create_time'] = date('Y-m-d H:i:s', $list['create_time']);
            $list['status'] = AfterSale::getStatusDesc($list['status']);

            foreach ($list['order_goods'] as &$good) {
                $info = json_decode($good['goods_info'], true);
                $good['goods_name'] = $info['goods_name'];
                $good['spec_value'] = $info['spec_value_str'];
                $good['image'] = empty($info['spec_image']) ?
                    UrlServer::getFileUrl($info['image']) : UrlServer::getFileUrl($info['spec_image']);
            }
        }
        return ['count' => $count, 'lists' => $lists];
    }


    /**
     * Notes: 详情
     * @param $id
     * @author 段誉(2021/1/30 16:56)
     * @return array
     */
    public static function getDetail($id)
    {
        $after_sale = new AfterSale();
        $result = $after_sale
            ->with(['order_goods', 'user', 'order', 'logs'])
            ->where('id', $id)
            ->find()->toArray();

        $result['refund_type_text'] = AfterSale::getRefundTypeDesc($result['refund_type']);
        $result['status_text'] = AfterSale::getStatusDesc($result['status']);
        $result['order']['pay_way'] = Pay::getPayWay($result['order']['pay_way']);
        $result['order']['order_status'] = Order::getOrderStatus($result['order']['order_status']);
        $result['create_time'] = date('Y-m-d H:i:s', $result['create_time']);

        foreach ($result['order_goods'] as &$good) {
            $info = json_decode($good['goods_info'], true);
            $good['goods_name'] = $info['goods_name'];
            $good['spec_value'] = $info['spec_value_str'];
            $good['image'] = empty($info['spec_image']) ?
                UrlServer::getFileUrl($info['image']) : UrlServer::getFileUrl($info['spec_image']);
        }

        foreach ($result['order_goods'] as &$good) {
            $info = json_decode($good['goods_info'], true);
            $good['goods_name'] = $info['goods_name'];
            $good['spec_value'] = $info['spec_value_str'];
            $good['image'] = empty($info['spec_image']) ?
                UrlServer::getFileUrl($info['image']) : UrlServer::getFileUrl($info['spec_image']);
        }

        foreach ($result['logs'] as &$log){
            $log['create_time'] = date('Y-m-d H:i:s', $log['create_time']);

            $log['log_img'] = '';
            $log['log_remark'] = '';
            switch ($log['channel']){
                //会员申请售后
                case AfterSaleLog::USER_APPLY_REFUND:
                    $log['log_img'] = empty($result['refund_image'])  ? '' : UrlServer::getFileUrl($result['refund_image']);
                    $refund_reason = empty($result['refund_reason']) ? '未知' : $result['refund_reason'];
                    $refund_remark = empty($result['refund_remark']) ? '暂无' : $result['refund_remark'];
                    $log['log_remark'] = '退款原因('.$refund_reason.')'.'退款说明('.$refund_remark.')';
                    break;
                //会员发快递
                case AfterSaleLog::USER_SEND_EXPRESS:
                    $log['log_img'] = empty($result['express_image']) ? '' : UrlServer::getFileUrl($result['express_image']);
                    $express_name = $result['express_name'];
                    $invoice_no = $result['invoice_no'];
                    $express_remark = empty($result['express_remark']) ? '暂无' : $result['express_remark'];
                    $log['log_remark'] = '快递公司('.$express_name.')'.'单号('.$invoice_no.')'.'备注说明('.$express_remark.')';
                    break;
                //商家拒绝退款 //商家拒绝收货
                case AfterSaleLog::SHOP_REFUSE_REFUND:
                case AfterSaleLog::SHOP_REFUSE_TAKE_GOODS:
                    $admin_remark = empty($result['admin_remark']) ? '暂无' : $result['admin_remark'];
                    $log['log_remark'] = '备注:'.$admin_remark;
                    break;
            }

        }

        $result['shop_address'] = self::getShopAddress();
        return $result;
    }



    /**
     * Notes: 商家同意售后
     * @param $id
     * @param $admin_id
     * @author 段誉(2021/1/30 16:56)
     */
    public static function agree($id, $admin_id)
    {
        $after_sale = AfterSale::get($id);

        $after_sale->update_time = time();
        //仅退款
        if ($after_sale['refund_type'] == AfterSale::TYPE_ONLY_REFUND) {
            $after_sale->status = AfterSale::STATUS_WAIT_REFUND;//更新为等待退款状态
        }

        //退款退货
        if ($after_sale['refund_type'] == AfterSale::TYPE_REFUND_RETURN) {
            $after_sale->status = AfterSale::STATUS_WAIT_RETURN_GOODS;//更新为商品待退货状态
        }

        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_AGREE_REFUND,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_AGREE_REFUND
        );

        // 仅退款;更新订单商品为等待退款
        if ($after_sale['refund_type'] == AfterSale::TYPE_ONLY_REFUND) {
            $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);
            $order_goods->refund_status = OrderGoods::REFUND_STATUS_WAIT;//等待退款
            $order_goods->save();
        }

        $mobile = Db::name('order')->where(['id'=>$after_sale->order_id])->value('mobile');
        //发送短信
        $nickname = Db::name('user')->where(['id' => $after_sale->user_id])->value('nickname');
        Hook::listen('sms_send',  [
            'key' => NoticeSetting::PLATFORM_PASS_REFUND_NOTICE,
            'mobile' => $mobile,
            'user_id' => $after_sale['user_id'],
            'params' => ['nickname' => $nickname, 'order_sn' => $after_sale->sn],
        ]);

        //消息通知
        Hook::listen('notice', [
            'user_id' => $after_sale['user_id'],
            'order_id' => $after_sale['order_id'],
            'refund_amount' => $after_sale['refund_price'],
            'scene' => NoticeSetting::PLATFORM_PASS_REFUND_NOTICE,
        ]);
    }



    /**
     * Notes: 商家拒绝
     * @param $post
     * @param $admin_id
     * @author 段誉(2021/1/30 16:56)
     */
    public static function refuse($post, $admin_id)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->update_time = time();
        $after_sale->status = AfterSale::STATUS_REFUSE_REFUND;//更新为拒绝退款状态
        $after_sale->admin_remark = isset($post['remark']) ? $post['remark'] : '';
        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_REFUSE_REFUND,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_REFUSE_REFUND
        );
        $nickname = Db::name('user')->where(['id' => $after_sale->user_id])->value('nickname');
        $mobile = Db::name('order')->where(['id'=>$after_sale->order_id])->value('mobile');
        //发送短信
        Hook::listen('sms_send', [
            'key' => NoticeSetting::PLATFORM_REFUSE_REFUND_NOTICE,
            'mobile' => $mobile,
            'user_id' => $after_sale['user_id'],
            'params' => ['nickname' => $nickname, 'order_sn' => $after_sale->sn],
        ]);

        //消息通知
        Hook::listen('notice', [
            'user_id' => $after_sale['user_id'],
            'order_id' => $after_sale['order_id'],
            'scene' => NoticeSetting::PLATFORM_REFUSE_REFUND_NOTICE,
        ]);
    }



    /**
     * Notes: 商家收货
     * @param $post
     * @param $admin_id
     * @author 段誉(2021/1/30 16:56)
     */
    public static function takeGoods($post, $admin_id)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->update_time = time();
        $after_sale->status = AfterSale::STATUS_WAIT_REFUND;//更新为等待退款状态
        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_TAKE_GOODS,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_TAKE_GOODS
        );
        //更新订单商品为等待退款状态
        $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);
        $order_goods->refund_status = OrderGoods::REFUND_STATUS_WAIT;//等待退款
        $order_goods->save();
    }



    /**
     * Notes: 商家拒绝收货
     * @param $post
     * @param $admin_id
     * @author 段誉(2021/1/30 16:57)
     */
    public static function refuseGoods($post, $admin_id)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->update_time = time();
        $after_sale->status = AfterSale::STATUS_REFUSE_RECEIVE_GOODS;//更新为拒绝收货状态
        $after_sale->admin_remark = isset($post['remark']) ? $post['remark'] : '';
        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_REFUSE_TAKE_GOODS,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_REFUSE_TAKE_GOODS
        );
    }



    /**
     * Notes: 确认退款 ===> 退款
     * @param $id
     * @param $admin_id
     * @author 段誉(2021/1/30 16:57)
     * @return bool|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function confirm($id, $admin_id)
    {
        //售后记录状态
        $after_sale = AfterSale::get($id);
        $order = Order::get(['id' => $after_sale['order_id']]);
        $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);

        Db::startTrans();
        try {
            //更新售后为退款成功状态
            $after_sale->update_time = time();
            $after_sale->status = AfterSale::STATUS_SUCCESS_REFUND;
            $after_sale->save();
            //售后日志
            AfterSaleLogLogic::record(
                AfterSaleLog::TYPE_SHOP,
                AfterSaleLog::REFUND_SUCCESS,
                $after_sale['order_id'],
                $after_sale['id'],
                $admin_id,
                AfterSaleLog::REFUND_SUCCESS
            );
            //更新订单和订单商品状态
            OrderRefundLogic::afterSaleRefundUpdate($order, $order_goods['id'], $admin_id);
            //订单退款
            OrderRefundLogic::refund($order, $order['order_amount'], $after_sale['refund_price']);

            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            //增加退款失败记录
            OrderRefundLogic::addErrorRefund($order, $e->getMessage());
            //记录日志
            AfterSaleLogLogic::record(
                AfterSaleLog::TYPE_SHOP,
                AfterSaleLog::REFUND_ERROR,//退款失败
                $after_sale['order_id'],
                $after_sale['id'],
                $admin_id,
                AfterSaleLog::REFUND_ERROR,//退款失败
                $e->getMessage()
            );
            return $e->getMessage();
        }
    }


    /**
     * Notes: 获取商家地址
     * @author 段誉(2021/1/30 16:57)
     * @return string
     */
    public static function getShopAddress()
    {
        $shop_province = ConfigServer::get('shop', 'province_id', '');
        $shop_city = ConfigServer::get('shop', 'city_id', '');
        $shop_district = ConfigServer::get('shop', 'district_id', '');
        $shop_address = ConfigServer::get('shop', 'address', '');
        $shop_contact = ConfigServer::get('shop', 'contact', '');
        $shop_mobile = ConfigServer::get('shop', 'mobile', '');
        $shop_address = AreaServer::getAddress([$shop_province, $shop_city, $shop_district], $shop_address);
        return $shop_address.'('.$shop_contact.','.$shop_mobile.')';
    }

}