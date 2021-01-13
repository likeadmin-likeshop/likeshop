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
namespace app\common\command;
use app\api\model\{
    Order,Goods,GoodsItem
};
use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\Pay;
use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;

class OrderClose extends Command{
    protected function configure()
    {
        $this->setName('order_close')
            ->setDescription('关闭订单');
    }
    protected function execute(Input $input, Output $output)
    {
        //是否下单扣库存 todo 默认是下单扣库存
        $deduct_type = ConfigServer::get('trading', 'deduct_type', 1);
        //取消订单时长 todo 默认是30分钟
        $order_cancel_time = ConfigServer::get('trading','order_cancel', 30) * 60;
        $now = time();

        $order = new Order();
        $where[] = ['order_status','=',\app\common\model\Order::STATUS_WAIT_PAY];
        $where[] = ['pay_status','=',Pay::UNPAID];

        $order_list = $order
            ->where($where)
            ->where(Db::raw("create_time+$order_cancel_time < $now"))
            ->with(['orderGoods'])
            ->select()->toArray();


        $update_total_stock = [];       //更新总库存
        $update_stock = [];             //更新规格库存
        $total_stock_num = [];          //总库存
        $stock_num = [];                //规格库存
        $update_coupon_ids = [];        //更新优惠券状态
        foreach ($order_list as $order){
            $order_ids[] = $order['id'];
            //返回优惠券
            if($order['coupon_list_id']){
                $update_coupon_ids[] = $order['coupon_list_id'];
            }
            //更新积分
            if($order['use_integral'] > 0){
                Db::name('user')->where(['id'=>$order['user_id']])->setInc('user_integral',$order['use_integral']);
                AccountLogLogic::AccountRecord(
                    $order['user_id'],
                    $order['use_integral'],
                    1,
                    AccountLog::cancel_order_refund_integral
                );
            }
            foreach ($order['order_goods'] as $order_goods){
                //更新库存
                if($deduct_type){
                    //更新商品总库存数据
                    if(isset($update_total_stock[$order_goods['goods_id']])){
                        $total_stock_num[$order_goods['goods_id']] = $total_stock_num[$order_goods['goods_id']] + $order_goods['goods_num'];
                        $update_total_stock[$order_goods['goods_id']]['stock'] = Db::raw('stock+'.$total_stock_num[$order_goods['goods_id']]);
                    }else{
                        $total_stock_num[$order_goods['goods_id']] = $order_goods['goods_num'];
                        $update_total_stock[$order_goods['goods_id']] = [
                            'id'        => $order_goods['goods_id'],
                            'stock'     => Db::raw('stock+'.$total_stock_num[$order_goods['goods_id']])
                        ];
                    }
                    //更新商品规格库存数据
                    if(isset($update_stock[$order_goods['item_id']])){
                        $stock_num[$order_goods['item_id']] = $stock_num[$order_goods['item_id']] + $order_goods['goods_num'];
                        $update_stock[$order_goods['item_id']]['stock'] = Db::raw('stock+'.$stock_num[$order_goods['item_id']]);
                    }else{
                        $stock_num[$order_goods['item_id']] = $order_goods['goods_num'];
                        $update_stock[$order_goods['item_id']] = [
                            'id'        => $order_goods['item_id'],
                            'stock'     => Db::raw('stock+'.$stock_num[$order_goods['item_id']])
                        ];
                    }
                }
            }

        }

        if($update_total_stock){
            $update_data = [
                'order_status'  => \app\common\model\Order::STATUS_CLOSE,
                'update_time'   => $now,
            ];
            Db::name('order')->where(['id'=>$order_ids])->update($update_data);
            $goods = new Goods();
            $goods_item = new GoodsItem();
            $goods->saveAll(array_values($update_total_stock));
            $goods_item->saveAll(array_values($update_stock));
        }

        if($update_coupon_ids){
            $update_coupon = [
                'status'        => 0,
                'use_time'      => '',
                'order_id'      => '',
                'update_time'   => $now,
            ];
            Db::name('coupon_list')->where(['id'=>$update_coupon_ids])->update($update_coupon);
        }

    }

}