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

        $goods_ids = [];

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

            $goods_ids[] = $good['goods_id'];
        }

        //下架商品总库存为0的商品
        if (!empty($goods_ids)){
            self::outGoods($goods_ids);
        }
    }


    /**
     * Notes: 下单后下架商品总库存为0的商品
     * @param $goods_id
     * @author 段誉(2021/3/19 16:19)
     * @return bool
     */
    public static function outGoods($goods_ids)
    {
        try{
            $goods = Db::name('goods')
                ->field('id, stock')
                ->where('id', 'in', $goods_ids)
                ->select();

            if (empty($goods)){
                return true;
            }

            $need_handle_ids = [];
            foreach ($goods as $good) {
                if ($good['stock'] <= 0) {
                    $need_handle_ids[] =  $good['id'];
                }
            }

            if (empty($need_handle_ids)){
                return true;
            }
            //下架订单商品中 商品总库存已为0的商品
            Db::name('goods')->where('id', 'in', $need_handle_ids)->update(['status' => 0]);

        } catch (\Exception $e) {}

    }

}