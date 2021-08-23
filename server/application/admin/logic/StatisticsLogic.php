<?php

namespace app\admin\logic;

use app\common\model\OrderGoods;
use app\common\model\Pay;
use think\helper\Time;
use think\Db;

class StatisticsLogic
{

    /**
     * Notes: 时间
     * @author 段誉(2021/2/5 18:39)
     */
    public static function timeData()
    {
        //今天时间戳
        list($start_t, $end_t) = Time::today();
        $start_today = date('Y-m-d H:i:s', $start_t);
        $end_today = date('Y-m-d H:i:s', $end_t);

        //获取7天前零点到现在的时间戳
        list($start_s, $end_s) = Time::dayToNow(7);
        $start_seven = date('Y-m-d H:i:s', $start_s);
        $end_seven = date('Y-m-d H:i:s', $end_s);

        // 获取15天前零点到现在的时间戳
        list($start_f, $end_f) = Time::dayToNow(15);
        $start_fifteen = date('Y-m-d H:i:s', $start_f);
        $end_fifteen = date('Y-m-d H:i:s', $end_f);

        return [
            'start_t'       => $start_t,
            'end_t'         => $end_t,
            'start_s'       => $start_s,
            'end_s'         => $end_s,
            'start_f'       => $start_f,
            'end_f'         => $end_f,

            'start_today'   => $start_today,
            'end_today'     => $end_today,
            'start_seven'   => $start_seven,
            'end_seven'     => $end_seven,
            'start_fifteen' => $start_fifteen,
            'end_fifteen'   => $end_fifteen,
        ];
    }



    /**
     * Notes: 会员统计
     * @param $post
     * @author 段誉(2021/2/5 17:17)
     * @return array
     */
    public static function member($post)
    {
        $timeData = self::timeData();

        // 会员总数
        $count = Db::name('user')->where('del', 0)->count();

        if (isset($post['days']) && $post['days'] == 'today') {
            // 今天新增会员数量
            $add_today = Db::name('user')
                ->where('del', 0)
                ->whereTime('create_time', 'today')
                ->count();

            return [
                'start'         => $timeData['start_today'],
                'end'           => $timeData['end_today'],
                'count'         => $count,
                'add'           => $add_today,
                'start_seven'   => $timeData['start_seven'],
                'end_seven'     => $timeData['end_seven'],
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {
            // 获取7天新增会员数量
            $add_seven = Db::name('user')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();
            return [
                'start' => $timeData['start_seven'],
                'end'   => $timeData['end_seven'],
                'count' => $count,
                'add'   => $add_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_fifteen') {
            // 获取15天新增会员数量
            $add_thirty = Db::name('user')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();
            return [
                'start' => $timeData['start_fifteen'],
                'end'   => $timeData['end_fifteen'],
                'count' => $count,
                'add'   => $add_thirty
            ];
        }


        if (isset($post['member']) && $post['member'] == 'ago_seven') {
            $echarts_data = self::getMemberData($timeData['start_s'], 7);
            return [
                'echarts_count' => $echarts_data['count'],
                'echarts_add'   => $echarts_data['new'],
                'days'          => $echarts_data['days'],
                'start'         => $timeData['start_seven'],
                'end'           => $timeData['end_seven']
            ];
        }

        if (isset($post['member']) && $post['member'] == 'ago_fifteen') {
            $echarts_data = self::getMemberData($timeData['start_f'], 15);
            return [
                'echarts_count' => $echarts_data['count'],
                'echarts_add'   => $echarts_data['new'],
                'days'          => $echarts_data['days'],
                'start'         => $timeData['start_fifteen'],
                'end'           => $timeData['end_fifteen']
            ];
        }
    }


    /**
     * Notes: 会员图表数据
     * @param $end_stamp
     * @param $days
     * @author 段誉(2021/2/5 17:17)
     * @return array
     */
    public static function getMemberData($start_stamp, $days)
    {
        $dates = [];
        for ($i = 1; $i <= $days; $i++) {
            $time_start = strtotime("+ ".$i."day", $start_stamp);
            $time_end = strtotime("+ ".$i."day", $start_stamp) + 86399;

            $dates[] = date('m-d', $time_end);

            $echarts_count[] = Db::name('user')
                ->where('create_time', '<=', $time_end)
                ->where('del', 0)
                ->count();

            $echarts_new[] = Db::name('user')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->where('del', 0)
                ->count();
        }

        return [
            'count' => $echarts_count,
            'new'   => $echarts_new,
            'days'  => $dates,
        ];
    }


    /**
     * Notes: 商品统计
     * @param $post
     * @author 段誉(2021/2/5 17:45)
     * @return array
     */
    public static function goods($post)
    {
        $timeData = self::timeData();

        if (isset($post['days']) && $post['days'] == 'today') {

            $goods_click_today = Db::name('goods_click')
                ->whereTime('create_time', 'today')
                ->count();

            $goods_sale_today = Db::name('order')
                ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
                ->whereTime('create_time', 'today')
                ->sum('total_num');

            $goods_collect_today = Db::name('goods_collect')
                ->whereTime('create_time', 'today')
                ->count();

            return [
                'start'         => $timeData['start_today'],
                'end'           => $timeData['end_today'],
                'goods_click'   => $goods_click_today,
                'goods_sale'    => $goods_sale_today,
                'goods_collect' => $goods_collect_today,
                'start_seven'   => $timeData['start_seven'],
                'end_seven'     => $timeData['end_seven'],
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {

            $goods_click_seven = Db::name('goods_click')
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();

            $goods_sale_seven = Db::name('order')
                ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->sum('total_num');

            $goods_collect_seven = Db::name('goods_collect')
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();

            return [
                'start'         => $timeData['start_seven'],
                'end'           => $timeData['end_seven'],
                'goods_click'   => $goods_click_seven,
                'goods_sale'    => $goods_sale_seven,
                'goods_collect' => $goods_collect_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_fifteen') {

            $goods_click_fifteen = Db::name('goods_click')
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();

            $goods_sale_fifteen = Db::name('order')
                ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->sum('total_num');

            $goods_collect_fifteen = Db::name('goods_collect')
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();

            return [
                'start'         => $timeData['start_fifteen'],
                'end'           => $timeData['end_fifteen'],
                'goods_click'   => $goods_click_fifteen,
                'goods_sale'    => $goods_sale_fifteen,
                'goods_collect' => $goods_collect_fifteen
            ];
        }


        if (isset($post['goods']) && $post['goods'] == 'ago_seven') {
            $echarts_data = self::getGoodsData($timeData['start_s'], 7);
            return [
                'echarts_goods_click'   => $echarts_data['click'],
                'echarts_goods_collect' => $echarts_data['collect'],
                'echarts_goods_sale'    => $echarts_data['sale'],
                'days'                  => $echarts_data['days'],
                'start'                 => $timeData['start_seven'],
                'end'                   => $timeData['end_seven']
            ];
        }

        if (isset($post['goods']) && $post['goods'] == 'ago_fifteen') {
            $echarts_data = self::getGoodsData($timeData['start_f'], 15);
            return [
                'echarts_goods_click'   => $echarts_data['click'],
                'echarts_goods_collect' => $echarts_data['collect'],
                'echarts_goods_sale'    => $echarts_data['sale'],
                'days'                  => $echarts_data['days'],
                'start'                 => $timeData['start_fifteen'],
                'end'                   => $timeData['start_fifteen']
            ];
        }
    }


    /**
     * Notes: 商品图表数据
     * @param $end_stamp
     * @param $days
     * @author 段誉(2021/2/5 17:45)
     * @return array
     */
    public static function getGoodsData($start_stamp, $days)
    {
        $dates = [];
        for ($i = 1; $i <= $days; $i++) {

            $time_start = strtotime("+ ".$i."day", $start_stamp);
            $time_end = strtotime("+ ".$i."day", $start_stamp) + 86399;

            $dates[] = date('m-d', $time_end);

            //7天每天商品浏览量
            $echarts_goods_click[] = Db::name('goods_click')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
            //7天每天商品收藏量
            $echarts_goods_collect[] = Db::name('goods_collect')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
            //7天每天商品销量
            $echarts_goods_sale[] = Db::name('order')
                ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
                ->where('create_time', 'between', [$time_start, $time_end])
                ->sum('total_num');
        }

        return [
            'click'   => $echarts_goods_click,
            'collect' => $echarts_goods_collect,
            'sale'    => $echarts_goods_sale,
            'days'    => $dates,
        ];
    }



    /**
     * Notes: 交易统计
     * @param $post
     * @author 段誉(2021/2/5 18:06)
     * @return array
     */
    public static function deal($post)
    {
        $timeData = self::timeData();

        if (isset($post['days']) && $post['days'] == 'today') {
            //订单金额
            $order_amount_today = Db::name('order')
                ->where('del', 0)
                ->whereTime('create_time', 'today')
                ->sum('order_amount');
            //订单数量
            $order_num_today = Db::name('order')
                ->where('del', 0)
                ->whereTime('create_time', 'today')
                ->count();
            //商家售后单数量
            $after_num_today = Db::name('after_sale')
                ->where('del', 0)
                ->whereTime('create_time', 'today')
                ->count();

            return [
                'start'         => $timeData['start_today'],
                'end'           => $timeData['end_today'],
                'start_seven'   => $timeData['start_seven'],
                'end_seven'     => $timeData['end_seven'],
                'order_amount'  => $order_amount_today,
                'order_num'     => $order_num_today,
                'after_num'     => $after_num_today
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {
            //订单金额
            $order_amount_seven = Db::name('order')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->sum('order_amount');
            //订单数量
            $order_num_seven = Db::name('order')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();
            //商家售后单数量
            $after_num_seven = Db::name('after_sale')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();

            return [
                'start'         => $timeData['start_seven'],
                'end'           => $timeData['end_seven'],
                'order_amount'  => $order_amount_seven,
                'order_num'     => $order_num_seven,
                'after_num'     => $after_num_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_fifteen') {
            //订单金额
            $order_amount_fifteen = Db::name('order')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->sum('order_amount');
            //订单数量
            $order_num_fifteen = Db::name('order')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();
            //商家售后单数量
            $after_num_fifteen = Db::name('after_sale')
                ->where('del', 0)
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();

            return [
                'start'         => $timeData['start_fifteen'],
                'end'           => $timeData['end_fifteen'],
                'order_amount'  => $order_amount_fifteen,
                'order_num'     => $order_num_fifteen,
                'after_num'     => $after_num_fifteen
            ];
        }

        if (isset($post['deal']) && $post['deal'] == 'ago_seven') {

            $echarts_data = self::getDealData($timeData['start_s'], 7);

            return [
                'echarts_order_amount'  => $echarts_data['amount'],
                'echarts_order_num'     => $echarts_data['num'],
                'echarts_after_num'     => $echarts_data['after'],
                'days'                  => $echarts_data['days'],
                'start'                 => $timeData['start_seven'],
                'end'                   => $timeData['end_seven']
            ];
        }

        if (isset($post['deal']) && $post['deal'] == 'ago_fifteen') {

            $echarts_data = self::getDealData($timeData['start_f'], 15);

            return [
                'echarts_order_amount'  => $echarts_data['amount'],
                'echarts_order_num'     => $echarts_data['num'],
                'echarts_after_num'     => $echarts_data['after'],
                'days'                  => $echarts_data['days'],
                'start'                 => $timeData['start_fifteen'],
                'end'                   => $timeData['end_fifteen']
            ];
        }
    }


    /**
     * Notes: 交易数据
     * @param $end_stamp
     * @param $days
     * @author 段誉(2021/2/5 18:07)
     * @return array
     */
    public static function getDealData($start_stamp, $days)
    {
        $dates = [];
        for ($i = 1; $i <= $days; $i++) {

            $time_start = strtotime("+ ".$i."day", $start_stamp);
            $time_end = strtotime("+ ".$i."day", $start_stamp) + 86399;
            $dates[] = date('m-d', $time_end);

            //每天订单金额
            $echarts_order_amount[] = Db::name('order')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->sum('order_amount');
            //每天订单数量
            $echarts_order_num[] = Db::name('order')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
            //每天售后量
            $echarts_after_num[] = Db::name('after_sale')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
        }

        return [
            'amount'    => $echarts_order_amount,
            'num'       => $echarts_order_num,
            'after'     => $echarts_after_num,
            'days'      => $dates,
        ];
    }


    /**
     * Notes: 访问统计
     * @param $post
     * @author 段誉(2021/2/5 18:36)
     * @return array
     */
    public static function visit($post)
    {
        $timeData = self::timeData();

        if (isset($post['days']) && $post['days'] == 'today') {

            $goods_click_today = Db::name('goods_click')
                ->whereTime('create_time', 'today')
                ->count();
            $user_click_today = Db::name('stat')
                ->whereTime('create_time', 'today')
                ->count();

            return [
                'start'         => $timeData['start_today'],
                'end'           => $timeData['end_today'],
                'goods_click'   => $goods_click_today,
                'user_click'    => $user_click_today,
                'start_seven'   => $timeData['start_seven'],
                'end_seven'     => $timeData['end_seven'],
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {

            $goods_click_seven = Db::name('goods_click')
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();
            $user_click_seven = Db::name('stat')
                ->where('create_time', 'between', [$timeData['start_s'], $timeData['end_s']])
                ->count();

            return [
                'start'           => $timeData['start_seven'],
                'end'             => $timeData['end_seven'],
                'goods_click'     => $goods_click_seven,
                'user_click'      => $user_click_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_fifteen') {

            $goods_click_fifteen = Db::name('goods_click')
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();
            $user_click_fifteen = Db::name('stat')
                ->where('create_time', 'between', [$timeData['start_f'], $timeData['end_f']])
                ->count();

            return [
                'start'         => $timeData['start_fifteen'],
                'end'           => $timeData['end_fifteen'],
                'goods_click'   => $goods_click_fifteen,
                'user_click'    => $user_click_fifteen
            ];
        }


        if (isset($post['goods']) && $post['goods'] == 'ago_seven') {
            $echarts_data = self::getVisitData($timeData['start_s'], 7);
            return [
                'echarts_goods_click'   => $echarts_data['goods'],
                'echarts_user_click'    => $echarts_data['user'],
                'days'                  => $echarts_data['days'],
                'start'                 => $timeData['start_seven'],
                'end'                   => $timeData['end_seven'],
            ];
        }

        if (isset($post['goods']) && $post['goods'] == 'ago_fifteen') {
            $echarts_data = self::getVisitData($timeData['start_f'], 15);
            return [
                'echarts_goods_click'   => $echarts_data['goods'],
                'echarts_user_click'    => $echarts_data['user'],
                'days'                  => $echarts_data['days'],
                'start'                 => $timeData['start_fifteen'],
                'end'                   => $timeData['end_fifteen'],
            ];
        }
    }


    /**
     * Notes: 访问统计数据
     * @param $end_stamp
     * @param $days
     * @author 段誉(2021/2/5 18:36)
     * @return array
     */
    public static function getVisitData($start_stamp, $days)
    {
        $dates = [];
        for ($i = 1; $i <= $days; $i++) {

            $time_start = strtotime("+ ".$i."day", $start_stamp);
            $time_end = strtotime("+ ".$i."day", $start_stamp) + 86399;
            $dates[] = date('m-d', $time_end);

            //每天商品浏览量
            $echarts_goods_click[] = Db::name('goods_click')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
            //每天用户浏览量
            $echarts_user_click[] = Db::name('stat')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
        }

        return [
            'goods' => $echarts_goods_click,
            'user'  => $echarts_user_click,
            'days'  => $dates,
        ];
    }
}