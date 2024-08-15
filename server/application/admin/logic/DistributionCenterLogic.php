<?php
namespace app\admin\logic;

use app\common\logic\LogicBase;
use app\common\model\Distribution;
use app\common\model\DistributionOrder;
use app\common\model\DistributionOrderGoods;
use app\common\server\UrlServer;

class DistributionCenterLogic extends LogicBase
{
    /**
     * @notes 数据概览
     * @return array
     * @author Tab
     */
    public static function center()
    {
        $data = [
            'earnings' => self::earnings(),
            'members' => self::members(),
            'topGoods' => self::topGoods(),
            'topMembers' => self::topMembers(),
        ];

        return $data;
    }

    /**
     * @notes 佣金数据
     * @return array
     * @author Tab
     */
    public static function earnings()
    {
        // 累计已入账佣金
        $totalSuccess = DistributionOrderGoods::where([
            'status' => 2,
        ])->sum('money');
        // 今日已入账佣金
        $totalTodaySuccess = DistributionOrderGoods::where([
            'status' => 2,
        ])->whereTime('settlement_time', 'd')->sum('money');
        // 累计待结算佣金
        $totalWait = DistributionOrderGoods::where([
            'status' => 1,
        ])->sum('money');
        // 今日待结算佣金
        $totalTodayWait = DistributionOrderGoods::where([
            'status' => 1,
        ])->whereTime('create_time', 'd')->sum('money');

        return [
            'total_success' => $totalSuccess,
            'total_today_success' => $totalTodaySuccess,
            'total_wait' => $totalWait,
            'total_today_wait' => $totalTodayWait,
        ];
    }

    /**
     * @notes 分销会员数据
     * @author Tab
     */
    public static function members()
    {
        $members = Distribution::where('is_distribution', 1)->count();
        $users = Distribution::count();
        $proportion = 0;
        if ($users) {
            $proportion = round(($members / $users), 2) * 100;
        }


        return [
            'members' => $members,
            'proportion' => $proportion,
        ];
    }

    /**
     * @notes 分销商品排行榜
     * @author Tab
     */
    public static function topGoods()
    {
        $field = [
            'sum(dog.money)' => 'total_money',
            'g.image' => 'goods_image',
            'og.goods_name',
        ];
        $where = [
            'dog.status' => 2, // 已入账
        ];
        $topGoods = DistributionOrderGoods::alias('dog')
            ->leftJoin('order_goods og', 'og.id = dog.order_goods_id')
            ->leftJoin('goods g', 'g.id = og.goods_id')
            ->field($field)
            ->where($where)
            ->group('g.image,og.goods_name')
            ->order('total_money', 'desc')
            ->limit(10)
            ->select()
            ->toArray();
        foreach ($topGoods as &$item) {
            $item['goods_image'] = empty($item['goods_image']) ? '' : UrlServer::getFileUrl($item['goods_image']);
        }

        return $topGoods;
    }

    /**
     * @notes 分销会员排行榜
     * @return mixed
     * @author Tab
     */
    public static function topMembers()
    {
        $field = [
            'sum(dog.money)' => 'total_money',
            'u.avatar',
            'u.nickname',
        ];
        $where = [
            'dog.status' => 2, // 已入账
        ];
        $topMembers = DistributionOrderGoods::alias('dog')
            ->leftJoin('user u', 'u.id = dog.user_id')
            ->field($field)
            ->where($where)
            ->group('dog.money,u.avatar,u.nickname')
            ->order('total_money', 'desc')
            ->limit(10)
            ->select()
            ->toArray();

        foreach($topMembers as &$item) {
            $item['avatar'] = empty($item['avatar']) ? '' : UrlServer::getFileUrl($item['avatar']);
        }

        return $topMembers;
    }
}