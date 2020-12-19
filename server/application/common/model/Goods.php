<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\common\model;

use think\Db;
use think\Model;

class Goods extends Model
{
    /**
     * User: 意象信息科技 mjf
     * Desc: 获取以规格id为键的商品信息
     * @param string $field
     * @return array
     */
    public static function getColumnGoods($field = '*')
    {
        $info = Db::name('goods_item i')
            ->join('goods g', 'g.id = i.goods_id')
            ->column($field, 'i.id');

        return $info;
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 通过规格id获取商品信息
     * @param $item_id
     * @param string $field
     * @return array|\PDOStatement|string|Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getOneByItem($item_id, $field = '*')
    {
       $info = Db::name('goods_item i')
            ->field($field)
            ->join('goods g', 'g.id = i.goods_id')
            ->where('i.id', $item_id)
            ->find();

       return $info;
    }

}