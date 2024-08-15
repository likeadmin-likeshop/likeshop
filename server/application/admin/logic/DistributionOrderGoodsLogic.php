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
// +------------------------------------------------------------------------

namespace app\admin\logic;

use app\common\logic\LogicBase;
use app\common\model\DistributionLevel;
use app\common\model\DistributionOrderGoods;
use app\common\model\User;
use app\common\server\UrlServer;

class DistributionOrderGoodsLogic extends LogicBase
{
    /**
     * @notes 分销订单列表
     * @param $params
     * @return int[]
     * @author Tab
     */
    public static function lists($params)
    {
        $where = [];
        // 订单信息
        if (isset($params['order_keyword']) && !empty($params['order_keyword'])) {
            $where[] = ['o.order_sn', '=', $params['order_keyword']];
        }
        // 商品名称
        if (isset($params['goods_keyword']) && !empty($params['goods_keyword'])) {
            $where[] = ['og.goods_name', 'like', '%'.$params['goods_keyword'].'%'];
        }
        // 分销会员
        if (isset($params['distribution_keyword']) && !empty($params['distribution_keyword'])) {
            $where[] = ['u.sn|u.nickname', 'like', '%'.$params['distribution_keyword'].'%'];
        }
        // 佣金状态
        if (isset($params['status']) && !empty($params['status'])) {
            $where[] = ['dog.status', '=', $params['status']];
        }

        $field = [
            'o.id' => 'order_id',
            'o.order_sn',
            'o.create_time' => 'order_create_time',
            'o.user_id' => 'order_user_id',
            'u.id' => 'distribution_user_id',
            'u.avatar' => 'distribution_avatar',
            'u.sn' => 'distribution_sn',
            'u.nickname' => 'distribution_nickname',
            'g.image' => 'goods_image',
            'g.name' => 'goods_name',
            'gi.spec_value_str',
            'og.goods_num' => 'goods_num',
            'og.total_pay_price' => 'total_pay_price',
            'dog.level_id',
            'dog.level',
            'dog.ratio',
            'dog.money',
            'dog.status' => 'status_desc',
            'dog.settlement_time'
        ];

        $lists = DistributionOrderGoods::alias('dog')
            ->leftJoin('order o', 'o.id = dog.order_id')
            ->leftJoin('user u', 'u.id = dog.user_id')
            ->leftJoin('order_goods og', 'og.id = dog.order_goods_id')
            ->leftJoin('goods g', 'g.id = og.goods_id')
            ->leftJoin('goods_item gi', 'gi.id = og.item_id')
            ->leftJoin('distribution_level dl', 'dl.id = dog.level_id')
            ->field($field)
            ->where($where)
            ->order('dog.id', 'desc')
            ->page($params['page'], $params['limit'])
            ->select()
            ->toArray();

        $count = DistributionOrderGoods::alias('dog')
            ->leftJoin('order o', 'o.id = dog.order_id')
            ->leftJoin('user u', 'u.id = dog.user_id')
            ->leftJoin('order_goods og', 'og.id = dog.order_goods_id')
            ->leftJoin('goods g', 'g.id = og.goods_id')
            ->leftJoin('goods_item gi', 'gi.id = og.item_id')
            ->leftJoin('distribution_level dl', 'dl.id = dog.level_id')
            ->field($field)
            ->where($where)
            ->count();

        foreach($lists as &$item) {
            $item['order_create_time'] = date('Y-m-d H:i:s', $item['order_create_time']);
            $item['user_info'] = User::getUserInfo($item['order_user_id']);
            $item['distribution_avatar'] = empty($item['distribution_avatar']) ? '' : UrlServer::getFileUrl($item['distribution_avatar']);
            $item['user_info']['avatar'] = empty($item['user_info']['avatar']) ? '' : UrlServer::getFileUrl($item['user_info']['avatar']);
            $item['level_name'] = DistributionLevel::getLevelName($item['level_id']);
            $item['goods_image'] = empty($item['goods_image']) ? '' : UrlServer::getFileUrl($item['goods_image']);
        }

        return [
            'count' => $count,
            'lists' => $lists
        ];
    }
}