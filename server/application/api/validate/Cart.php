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

namespace app\api\validate;

use think\Db;
use think\Validate;

class Cart extends Validate
{
    protected $rule = [
        'param' => 'require',
        'cart_id' => 'require|checkCart',
        'item_id' => 'require|checkGoods',
        'goods_num' => 'require|integer|gt:0',
        'selected' => 'require|in:0,1',
    ];

    protected $message = [
        'item_id' => '请选择商品',
        'goods_num.require' => '商品数量不能为0',
        'goods_num.gt' => '商品数量需大于0',
        'goods_num.integer' => '商品数量需为整数',
        'cart_id.require' => '参数错误',
        'param.require' => '参数错误',
        'selected.require' => '参数错误',
        'selected.in' => '参数错误',
    ];

    protected function sceneAdd()
    {
        $this->only(['item_id', 'goods_num']);
    }

    protected function sceneDel()
    {
        $this->only(['cart_id']);
    }

    protected function sceneSelected()
    {
        $this->only(['cart_id', 'selected']);
    }

    protected function sceneChange()
    {
        $this->only(['cart_id', 'goods_num']);
    }


    protected function checkCart($value, $rule, $data)
    {
        $cart = Db::name('cart')->where(['id' => $value])->find();
        if (!$cart){
            return '购物车不存在';
        }
        return true;
    }


    protected function checkGoods($value, $rule, $data)
    {
        $goods = Db::name('goods g')
            ->field('g.status')
            ->join('goods_item i', 'i.goods_id = g.id')
            ->where(['i.id' => $value, 'g.del' => 0])
            ->find();

        if (!$goods || $goods['status'] == 0) {
            return '商品已下架';
        }
        return true;
    }

}