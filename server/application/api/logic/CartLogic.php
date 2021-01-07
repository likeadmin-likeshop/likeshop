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

namespace app\api\logic;

use app\api\model\Cart;
use app\common\model\Footprint;
use app\common\server\UrlServer;
use think\Db;
use think\facade\Hook;

class CartLogic
{
    //添加购物车
    public static function add($item_id, $goods_num, $user_id)
    {
        $goods = Db::name('goods g')
            ->field('i.goods_id')
            ->join('goods_item i', 'i.goods_id = g.id')
            ->where('i.id', $item_id)
            ->find();

        $time = time();
        $where = [
            'user_id' => $user_id,
            'item_id' => $item_id,
        ];
        $info = Cart::where($where)->find();

        $cart_num = $goods_num + (isset($info) ? $info['goods_num'] : 0);

        if (self::checkStock($item_id, $cart_num)) {
            return '很抱歉,商品库存不足';
        }

        if ($info) {
            //购物车内已有该商品
            $update_data = [
                'goods_num' => $goods_num + $info['goods_num'],
                'update_time' => $time,
            ];
            $res = Db::name('cart')
                ->where('id', $info['id'])
                ->update($update_data);
        } else {
            //新增购物车记录
            $data = [
                'user_id' => $user_id,
                'goods_id' => $goods['goods_id'],
                'goods_num' => $goods_num,
                'item_id' => $item_id,
                'create_time' => $time,
            ];
            $res = Db::name('cart')->insert($data);
        }

        if (!$res) {
            return '添加失败';
        }

        // 钩子-记录足迹(添加购物车)
        Hook::listen('footprint', [
            'type'     => Footprint::add_cart,
            'user_id'  => $user_id,
            'foreign_id' => $goods['goods_id'] //商品ID
        ]);

        return true;
    }

    //删除购物车
    public static function del($cart_id, $user_id)
    {
        $where = [
            ['id', '=', $cart_id],
            ['user_id', '=', $user_id],
        ];

        return Db::name('cart')->where($where)->delete();
    }

    //变动购物车数量
    public static function change($cart_id, $goods_num)
    {
        $cart = Db::name('cart')->where(['id' => $cart_id])->find();

        if (self::checkStock($cart['item_id'], $goods_num)) {
            return '很抱歉,库存不足';
        }

        if ($goods_num <= 0) {
            $goods_num = 1;
        }

        $update = [
            'update_time' => time(),
            'goods_num' => $goods_num,
        ];

        Db::name('cart')->where(['id' => $cart_id])->update($update);

        return true;
    }

    //购物车选中状态
    public static function selected($post, $user_id)
    {
        return Db::name('cart')
            ->where(['id' => $post['cart_id'], 'user_id' => $user_id])
            ->update(['selected' => $post['selected'], 'update_time' => time()]);
    }

    //检查库存
    public static function checkStock($item_id, $goods_num)
    {
        $item_info = Db::name('goods_item')
            ->where('id', $item_id)->find();

        if ($goods_num > $item_info['stock']) {
            return true;
        }
        return false;
    }

    //列表
    public static function lists($user_id)
    {
        $field = 'g.name,g.image,g.id as goods_id,g.status as g_status,g.del as g_del,i.spec_value_str,i.price,
        i.image as item_image,c.goods_num,c.selected,c.id as cart_id,c.item_id';

        $carts = Db::name('cart c')
            ->field($field)
            ->join('goods g', 'g.id = c.goods_id')
            ->join('goods_item i', 'i.id = c.item_id')
            ->where('c.user_id', $user_id)
            ->order('c.create_time desc')
            ->select();

        $goods_num = 0;
        $total = 0;

        $lists = [];

        foreach ($carts as $k1 => $cart) {

            $cart['img'] = empty($cart['item_image']) ? UrlServer::getFileUrl($cart['image']) : UrlServer::getFileUrl($cart['item_image']);

            $cart['cart_status'] = 0;
            if ($cart['g_status'] == 0) {
                $cart['cart_status'] = 1;
            }

            if ($cart['g_del'] == 1) {
                $cart['cart_status'] = 2;
            }

            if ($cart['selected'] == Cart::IS_SELECTED) {
                $goods_num += $cart['goods_num'];
                $total += $cart['price'] * $cart['goods_num'];
            }

            $cart['selected'] = intval($cart['selected']);
            unset($cart['image'], $cart['item_image']);
            $lists[] = $cart;
        }

        return [
            'lists' => $lists,
            'total_amount' => round($total, 2),
            'total_num' => $goods_num,
        ];
    }

    //获取购物车数量
    public static function cartNum($user_id)
    {
        $num = Db::name('cart')
            ->where('user_id', $user_id)
            ->sum('goods_num');
        return ['num' => $num ?? 0];
    }

}