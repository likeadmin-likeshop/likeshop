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

namespace app\common\logic;


use app\api\logic\SeckillLogic;
use app\common\model\Pay;
use app\common\server\ConfigServer;
use think\Db;

/**
 * 订单商品逻辑
 * Class OrderGoodsLogic
 * @package app\common\logic
 */
class OrderGoodsLogic
{
    //返回订单库存,销量
    public static function backStock($order_goods, $pay_status)
    {
        $deduct_type = ConfigServer::get('trading', 'deduct_type', 1);
        //支付后扣减
        if ($deduct_type == 0 && $pay_status == Pay::UNPAID) {
            return;
        }

        foreach ($order_goods as $good) {
            //回退库存,回退规格库存,减少商品销量
            Db::name('goods')
                ->where('id', $good['goods_id'])
                ->update([
//                    'sales_sum' => Db::raw("sales_sum-" . $good['goods_num']),
                    'stock' => Db::raw('stock+' . $good['goods_num'])
                ]);

            //补充规格表库存
            Db::name('goods_item')
                ->where('id', $good['item_id'])
                ->setInc('stock', $good['goods_num']);
        }
    }


    //下单扣除订单库存
    public static function decStock($goods)
    {
        $seckill_data = SeckillLogic::getSeckillGoods();
        $seckill = $seckill_data['seckill'];
        $seckill_goods = $seckill_data['seckill_goods'];

        foreach ($goods as $k1 => $good) {
            $item_id = $good['item_id'];
            //扣除库存,扣除规格库存,增加商品销量
            Db::name('goods')
                ->where('id', $good['goods_id'])
                ->update([
                    'sales_sum' => Db::raw("sales_sum+" . $good['goods_num']),
                    'stock' => Db::raw('stock-' . $good['goods_num'])
                ]);

            //扣除规格表库存
            Db::name('goods_item')
                ->where('id', $item_id)
                ->setDec('stock', $good['goods_num']);

            //秒杀商品增加销量
            if (isset($seckill_goods[$item_id])){
                $seckill_goods_id = $seckill_goods[$item_id]['seckill_goods_id'];
                Db::name('seckill_goods')
                    ->where('id', $seckill_goods_id)
                    ->update([
                        'sales_sum' => Db::raw("sales_sum+" . $good['goods_num']),
                        'update_time' => time()
                    ]);
            }
        }
    }

}