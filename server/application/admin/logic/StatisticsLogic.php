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
// +----------------------------------------------------------------------

namespace app\admin\logic;

use app\admin\model\User;
use app\common\model\OrderGoods;
use app\common\model\Pay;
use think\helper\Time;
use think\Db;

class StatisticsLogic
{

    /**
     * @notes 获取两个日期区间
     * @param $start
     * @param $end
     * @return array
     * @author 段誉
     * @date 2022/4/27 12:09
     */
    public static function getDateRange($start, $end)
    {
        $start = strtotime($start);
        $end = strtotime($end);
        $range = get_date_range($start, $end);
        return [
            'start' => $start,
            'end' => $end,
            'range' => $range,
        ];
    }


    /**
     * @notes 获取会员数据
     * @param $params
     * @return array
     * @author 段誉
     * @date 2022/4/27 10:50
     */
    public static function getMemberData($params)
    {
        // 获取两个日期区间
        $range = self::getDateRange($params['start_time'], $params['end_time']);

        $start_time = $range['start'];
        $end_time = $range['end'];
        $range_data = $range['range'];

        // 会员数量
        $count = User::getUserCount();

        // 新增会员数量
        $new = User::getUserCount(['create_time', 'between', [$start_time, $end_time]]);

        $echarts_count = [];
        $echarts_new = [];
        for ($i = 0; $i < count($range_data['data']); $i++) {
            // 每次的开始和结束时间
            $item_time = self::getItemTime($i, $range_data, $start_time, $end_time);
            $time_start = $item_time['time_start'];
            $time_end = $item_time['time_end'];
            // 查询对应时间数据
            $echarts_count[] = User::getUserCount(['create_time', '<=', $time_end]);
            $echarts_new[] = User::getUserCount(['create_time', 'between', [$time_start, $time_end]]);
        }

        if ($range_data['type'] == 'day') {
            $range_data['data'] = $range_data['day_extend'];
        }

        return [
            'count' => $count,
            'new'   => $new,
            'days'  => $range_data['data'],
            'echarts_count' => $echarts_count,
            'echarts_new' => $echarts_new,
        ];
    }


    /**
     * @notes 获取商品数据
     * @param $params
     * @return array
     * @author 段誉
     * @date 2022/4/27 15:03
     */
    public static function getGoodsData($params)
    {
        $range = self::getDateRange($params['start_time'], $params['end_time']);

        $start_time = $range['start'];
        $end_time = $range['end'];
        $range_data = $range['range'];

        $goods_click = Db::name('goods_click')
            ->where('create_time', 'between', [$start_time, $end_time])
            ->count();

        $goods_sale = Db::name('order')
            ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
            ->where('create_time', 'between', [$start_time, $end_time])
            ->sum('total_num');

        $goods_collect = Db::name('goods_collect')
            ->where('create_time', 'between', [$start_time, $end_time])
            ->count();

        $echarts_click = [];
        $echarts_collect = [];
        $echarts_sale = [];

        for ($i = 0; $i < count($range_data['data']); $i++) {
            // 每次的开始和结束时间
            $item_time = self::getItemTime($i, $range_data, $start_time, $end_time);
            $time_start = $item_time['time_start'];
            $time_end = $item_time['time_end'];

            $echarts_click[] = Db::name('goods_click')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();

            $echarts_collect[] = Db::name('order')
                ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
                ->where('create_time', 'between', [$time_start, $time_end])
                ->sum('total_num');

            $echarts_sale[] = Db::name('goods_collect')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
        }

        if ($range_data['type'] == 'day') {
            $range_data['data'] = $range_data['day_extend'];
        }

        return [
            'days' => $range_data['data'],
            'click' => $goods_click,
            'collect' => $goods_collect,
            'sale' => $goods_sale,
            'echarts_click' => $echarts_click,
            'echarts_collect' => $echarts_collect,
            'echarts_sale' => $echarts_sale,
        ];
    }


    /**
     * @notes 获取每项开始结束时间
     * @param $i
     * @param $data
     * @param $start_time
     * @param $end_time
     * @return array
     * @author 段誉
     * @date 2022/4/27 14:47
     */
    public static function getItemTime($i, $data, $start_time, $end_time)
    {
        // 处理开始时间
        if ($i == 0) {
            $time_start = $start_time;
        } else {
            if ($data['type'] == 'year') {
                $time_start = strtotime($data['data'][$i] . "-1-1");
            } else {
                $time_start = strtotime($data['data'][$i]);
            }
        }

        // 处理结束时间
        if ($data['type'] == 'day') {
            $time_end = strtotime($data['data'][$i] . "+ 1days") - 1;
        } else {
            if ($i == (count($data['data']) - 1)) {
                $time_end = $end_time + 86400 -1;
            } else {
                if ($data['type'] == 'year') {
                    $time_end = strtotime($data['data'][$i] . "-12-31 23:59:59");
                } else {
                    $time_end = strtotime($data['data'][$i + 1]) - 1;
                }
            }
        }

        return [
            'time_start' => $time_start,
            'time_end' => $time_end,
        ];
    }


    /**
     * @notes 获取交易数据
     * @param $params
     * @return array
     * @author 段誉
     * @date 2022/4/27 15:32
     */
    public static function getDealData($params)
    {
        $range = self::getDateRange($params['start_time'], $params['end_time']);

        $start_time = $range['start'];
        $end_time = $range['end'];
        $range_data = $range['range'];

        //订单金额
        $order_amount = Db::name('order')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_time, $end_time])
            ->sum('order_amount');
        //订单数量
        $order_num = Db::name('order')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_time, $end_time])
            ->count();
        //商家售后单数量
        $after_num = Db::name('after_sale')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_time, $end_time])
            ->count();

        $echarts_order_amount = [];
        $echarts_order_num = [];
        $echarts_after_num = [];

        for ($i = 0; $i < count($range_data['data']); $i++) {
            // 每次的开始和结束时间
            $item_time = self::getItemTime($i, $range_data, $start_time, $end_time);
            $time_start = $item_time['time_start'];
            $time_end = $item_time['time_end'];

            $echarts_order_amount[] = Db::name('order')
                ->where('del', 0)
                ->where('create_time', 'between', [$time_start, $time_end])
                ->sum('order_amount');

            $echarts_order_num[] = Db::name('order')
                ->where('del', 0)
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();

            $echarts_after_num[] = Db::name('after_sale')
                ->where('del', 0)
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
        }

        if ($range_data['type'] == 'day') {
            $range_data['data'] = $range_data['day_extend'];
        }

        return [
            'days' => $range_data['data'],
            'order_amount' => $order_amount,
            'order_num' => $order_num,
            'after_num' => $after_num,
            'echarts_order_amount' => $echarts_order_amount,
            'echarts_order_num' => $echarts_order_num,
            'echarts_after_num' => $echarts_after_num,
        ];
    }


    /***
     * @notes 获取访问数据
     * @param $params
     * @return array
     * @author 段誉
     * @date 2022/4/27 15:47
     */
    public static function getVisitData($params)
    {
        $range = self::getDateRange($params['start_time'], $params['end_time']);

        $start_time = $range['start'];
        $end_time = $range['end'];
        $range_data = $range['range'];

        //每天商品浏览量
        $goods_click = Db::name('goods_click')
            ->where('create_time', 'between', [$start_time, $end_time])
            ->count();
        //每天用户浏览量
        $user_click = Db::name('stat')
            ->where('create_time', 'between', [$start_time, $end_time])
            ->count();

        $echarts_goods_click = [];
        $echarts_user_click = [];

        for ($i = 0; $i < count($range_data['data']); $i++) {
            // 每次的开始和结束时间
            $item_time = self::getItemTime($i, $range_data, $start_time, $end_time);
            $time_start = $item_time['time_start'];
            $time_end = $item_time['time_end'];

            //每天商品浏览量
            $echarts_goods_click[] = Db::name('goods_click')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
            //每天用户浏览量
            $echarts_user_click[] = Db::name('stat')
                ->where('create_time', 'between', [$time_start, $time_end])
                ->count();
        }

        if ($range_data['type'] == 'day') {
            $range_data['data'] = $range_data['day_extend'];
        }

        return [
            'days' => $range_data['data'],
            'goods_click' => $goods_click,
            'user_click' => $user_click,
            'echarts_goods_click' => $echarts_goods_click,
            'echarts_user_click' => $echarts_user_click,
        ];

    }


    /**
     * @notes 获取日期
     * @return array
     * @author 段誉
     * @date 2022/4/27 10:50
     */
    public static function getDateData()
    {
        $today = array_map(function ($time) {
            return date('Y-m-d', $time);
        }, Time::today());

        $days_ago7 = array_map(function ($time) {
            return date('Y-m-d', $time);
        }, Time::dayToNow(7));

        $days_ago15 = array_map(function ($time) {
            return date('Y-m-d', $time);
        }, Time::dayToNow(15, true));

        $time = [
            'today' => $today,
            'days_ago7' => $days_ago7,
            'days_ago15' => $days_ago15,
        ];
        return $time;
    }






}