<?php

namespace app\admin\logic;

use app\common\model\Pay;
use think\helper\Time;
use think\Db;

class StatisticsLogic
{
    //会员统计
    public static function member($post)
    {
        //今天时间戳
        list($start_t, $end_t) = Time::today();
        $start_today = date('Y-m-d H:i:s', $start_t);
        $end_today = date('Y-m-d H:i:s', $end_t);

        //获取7天前零点到现在的时间戳
        list($start_s, $end_s) = Time::dayToNow(7);
        $start_seven = date('Y-m-d H:i:s', $start_s);
        $end_seven = date('Y-m-d H:i:s', $end_t);

        // 获取30天前零点到现在的时间戳
        list($start_th, $end_th) = Time::dayToNow(30);
        $start_thirty = date('Y-m-d H:i:s', $start_th);
        $end_thirty = date('Y-m-d H:i:s', $end_t);

        // 会员总数
        $count = Db::name('user')
            ->where('del', 0)
            ->count();

        // 今天新增会员数量
        $add_today = Db::name('user')
            ->where('del', 0)
            ->whereTime('create_time', 'today')
            ->count();

        // 获取7天新增会员数量
        $add_seven = Db::name('user')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_s, $end_t])
            ->count();

        // 获取30天新增会员数量
        $add_thirty = Db::name('user')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();

        if (isset($post['days']) && $post['days'] == 'today') {
            return [
                'start' => $start_today,
                'end' => $end_today,
                'count' => $count,
                'add' => $add_today
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {
            return [
                'start' => $start_seven,
                'end' => $end_seven,
                'count' => $count,
                'add' => $add_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_thirty') {
            return [
                'start' => $start_thirty,
                'end' => $end_thirty,
                'count' => $count,
                'add' => $add_thirty
            ];
        }

        for ($i = 0; $i < 7; $i++) {
            //7天每天会员数
            $echarts_count[] = Db::name('user')
                ->where('del', 0)
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->count();
            //7天每天新增会员数
            $echarts_add[] = Db::name('user')
                ->where('del', 0)
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }

        $echarts_countall = array_reverse($echarts_count);
        $echarts_addall = array_reverse($echarts_add);

        for ($i = 0; $i < 30; $i++) {
            //30天每天会员数
            $echarts_count_thirty[] = Db::name('user')
                ->where('del', 0)
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->count();
            //30天每天新增会员数
            $echarts_add_thirty[] = Db::name('user')
                ->where('del', 0)
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }
        $echarts_countall_thirty = array_reverse($echarts_count_thirty);
        $echarts_addall_thirty = array_reverse($echarts_add_thirty);

        if (isset($post['member']) && $post['member'] == 'ago_seven') {
            return [
                'echarts_count' => $echarts_countall,
                'echarts_add' => $echarts_addall,
                'days' => 7,
                'start' => $start_seven,
                'end' => $end_seven
            ];
        }

        if (isset($post['member']) && $post['member'] == 'ago_thirty') {
            return [
                'echarts_count' => $echarts_countall_thirty,
                'echarts_add' => $echarts_addall_thirty,
                'days' => 30,
                'start' => $start_thirty,
                'end' => $end_thirty
            ];
        }
    }

    //商品统计
    public static function goods($post)
    {
        //今天时间戳
        list($start_t, $end_t) = Time::today();
        $start_today = date('Y-m-d H:i:s', $start_t);
        $end_today = date('Y-m-d H:i:s', $end_t);

        $goods_click_today = Db::name('goods_click')
            ->whereTime('create_time', 'today')
            ->count();

        $goods_sale_today = Db::name('order')
            ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
            ->whereTime('create_time','today')
            ->sum('total_num');

        $goods_collect_today = Db::name('goods_collect')
            ->whereTime('create_time', 'today')
            ->count();

        // 获取7天前零点到现在的时间戳
        list($start_s, $end_s) = Time::dayToNow(7);
        $start_seven = date('Y-m-d H:i:s', $start_s);
        $end_seven = date('Y-m-d H:i:s', $end_t);

        $goods_click_seven = Db::name('goods_click')
            ->where('create_time', 'between', [$start_s, $end_t])
            ->count();

        $goods_sale_seven = Db::name('order')
            ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
            ->whereTime('create_time','between', [$start_s, $end_t])
            ->sum('total_num');


        $goods_collect_seven = Db::name('goods_collect')
            ->where('create_time', 'between', [$start_s, $end_t])
            ->count();

        // 获取30天前零点到现在的时间戳
        list($start_th, $end_th) = Time::dayToNow(30);
        $start_thirty = date('Y-m-d H:i:s', $start_th);
        $end_thirty = date('Y-m-d H:i:s', $end_t);

        $goods_click_thirty = Db::name('goods_click')
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();

        $goods_sale_thirty = Db::name('order')
            ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
            ->whereTime('create_time','between', [$start_th,$end_t])
            ->sum('total_num');

        $goods_collect_thirty = Db::name('goods_collect')
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();

        if (isset($post['days']) && $post['days'] == 'today') {
            return [
                'start' => $start_today,
                'end' => $end_today,
                'goods_click' => $goods_click_today,
                'goods_sale' => $goods_sale_today,
                'goods_collect' => $goods_collect_today
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {
            return [
                'start' => $start_seven,
                'end' => $end_seven,
                'goods_click' => $goods_click_seven,
                'goods_sale' => $goods_sale_seven,
                'goods_collect' => $goods_collect_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_thirty') {
            return [
                'start' => $start_thirty,
                'end' => $end_thirty,
                'goods_click' => $goods_click_thirty,
                'goods_sale' => $goods_sale_thirty,
                'goods_collect' => $goods_collect_thirty
            ];
        }

        for ($i = 0; $i < 7; $i++) {
            //7天每天商品浏览量
            $echarts_goods_click[] = Db::name('goods_click')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //7天每天商品收藏量
            $echarts_goods_collcet[] = Db::name('goods_collect')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //7天每天商品销量
            $echarts_goods_sale[] = Db::name('order')
                ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
                ->where('create_time','<=',$end_t-$i*86400)
                ->where('create_time','>=',$start_t-$i*86400)
                ->sum('total_num');
        }

        $echarts_goods_click_all = array_reverse($echarts_goods_click);
        $echarts_goods_collect_all = array_reverse($echarts_goods_collcet);
        $echarts_goods_sale_all = array_reverse($echarts_goods_sale);

        for ($i = 0; $i < 30; $i++) {
            //30天每天商品浏览量
            $echarts_goods_click_thirty[] = Db::name('goods_click')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //30天每天商品收藏量
            $echarts_goods_collcet_thirty[] = Db::name('goods_collect')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //30天每天商品销量
            $echarts_goods_sale_thirty[] = Db::name('order')
                ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->sum('total_num');
        }
        $echarts_goods_click_all_thirty = array_reverse($echarts_goods_click_thirty);
        $echarts_goods_collect_all_thirty = array_reverse($echarts_goods_collcet_thirty);
        $echarts_goods_sale_all_thirty = array_reverse($echarts_goods_sale_thirty);


        if (isset($post['goods']) && $post['goods'] == 'ago_seven') {
            return [
                'echarts_goods_click' => $echarts_goods_click_all,
                'echarts_goods_collect' => $echarts_goods_collect_all,
                'echarts_goods_sale'=>  $echarts_goods_sale_all,
                'days' => 7,
                'start' => $start_seven,
                'end' => $end_seven
            ];
        }

        if (isset($post['goods']) && $post['goods'] == 'ago_thirty') {
            return [
                'echarts_goods_click' => $echarts_goods_click_all_thirty,
                'echarts_goods_collect' => $echarts_goods_collect_all_thirty,
                'echarts_goods_sale' => $echarts_goods_sale_all_thirty,
                'days' => 30,
                'start' => $start_thirty,
                'end' => $end_thirty
            ];
        }
    }

    //访问统计
    public static function visit($post)
    {
        //今天时间戳
        list($start_t, $end_t) = Time::today();
        $start_today = date('Y-m-d H:i:s', $start_t);
        $end_today = date('Y-m-d H:i:s', $end_t);

        $goods_click_today = Db::name('goods_click')
            ->whereTime('create_time', 'today')
            ->count();

        $goods_collect_today = Db::name('goods_collect')
            ->whereTime('create_time', 'today')
            ->count();

        // 获取7天前零点到现在的时间戳
        list($start_s, $end_s) = Time::dayToNow(7);
        $start_seven = date('Y-m-d H:i:s', $start_s);
        $end_seven = date('Y-m-d H:i:s', $end_t);

        $goods_click_seven = Db::name('goods_click')
            ->where('create_time', 'between', [$start_s,$end_t])
            ->count();

        $goods_collect_seven = Db::name('goods_collect')
            ->where('create_time', 'between', [$start_s, $end_t])
            ->count();


        // 获取30天前零点到现在的时间戳
        list($start_th, $end_th) = Time::dayToNow(30);
        $start_thirty = date('Y-m-d H:i:s', $start_th);
        $end_thirty = date('Y-m-d H:i:s', $end_t);


        $goods_click_thirty = Db::name('goods_click')
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();

        $goods_collect_thirty = Db::name('goods_collect')
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();

        if (isset($post['id']) && $post['id'] == '0') {
            return [
                'start' => $start_today,
                'end' => $end_today,
                'goods_click' => $goods_click_today,
                'goods_collect' => $goods_collect_today
            ];
        }

        if (isset($post['id']) && $post['id'] == '1') {
            return [
                'start' => $start_seven,
                'end' => $end_seven,
                'goods_click' => $goods_click_seven
                , 'goods_collect' => $goods_collect_seven
            ];
        }

        if (isset($post['id']) && $post['id'] == '2') {
            return [
                'start' => $start_thirty,
                'end' => $end_thirty,
                'goods_click' => $goods_click_thirty,
                'goods_collect' => $goods_collect_thirty
            ];
        }

        for ($i = 0; $i < 7; $i++) {
            //7天每天商品浏览量
            $echarts_goods_click[] = Db::name('goods_click')
                ->where('create_time','<=',$end_t-$i*86400)
                ->where('create_time','>=',$start_t-$i*86400)
                ->count();
            //7天每天商品收藏量
            $echarts_goods_collcet[] = Db::name('goods_collect')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }

        $echarts_goods_click_all = array_reverse($echarts_goods_click);
        $echarts_goods_collect_all = array_reverse($echarts_goods_collcet);

        for ($i = 0; $i < 30; $i++) {
            //30天每天商品浏览量
            $echarts_goods_click_thirty[] = Db::name('goods_click')
                ->where('create_time','<=',$end_t-$i*86400)
                ->where('create_time','>=',$start_t-$i*86400)
                ->count();
            //30天每天商品收藏量
            $echarts_goods_collcet_thirty[] = Db::name('goods_collect')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }

        $echarts_goods_click_all_thirty = array_reverse($echarts_goods_click_thirty);
        $echarts_goods_collect_all_thirty = array_reverse($echarts_goods_collcet_thirty);

        if (isset($post['goods']) && $post['goods'] == '0') {
            return [
                'echarts_goods_click'=>$echarts_goods_click_all,
                'echarts_goods_collect' => $echarts_goods_collect_all,
                'days' => 7,
                'start' => $start_seven,
                'end' => $end_seven,
            ];
        }

        if (isset($post['goods']) && $post['goods'] == '1') {
            return [
                'echarts_goods_click'=>$echarts_goods_click_all_thirty,
                'echarts_goods_collect' => $echarts_goods_collect_all_thirty,
                'days' => 30,
                'start' => $start_thirty,
                'end' => $end_thirty,
            ];
        }
    }

    //交易统计
    public static function deal($post)
    {
        //今天时间戳
        list($start_t, $end_t) = Time::today();
        $start_today = date('Y-m-d H:i:s', $start_t);
        $end_today = date('Y-m-d H:i:s', $end_t);
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

        // 获取7天前零点到现在的时间戳
        list($start_s, $end_s) = Time::dayToNow(7);
        $start_seven = date('Y-m-d H:i:s', $start_s);
        $end_seven = date('Y-m-d H:i:s', $end_t);

        //订单金额
        $order_amount_seven = Db::name('order')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_s, $end_t])
            ->sum('order_amount');
        //订单数量
        $order_num_seven = Db::name('order')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_s, $end_t])
            ->count();
        //商家售后单数量
        $after_num_seven = Db::name('after_sale')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_s, $end_t])
            ->count();

        // 获取30天前零点到现在的时间戳
        list($start_th, $end_th) = Time::dayToNow(30);
        $start_thirty = date('Y-m-d H:i:s', $start_th);
        $end_thirty = date('Y-m-d H:i:s', $end_t);
        //订单金额
        $order_amount_thirty = Db::name('order')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_th, $end_t])
            ->sum('order_amount');
        //订单数量
        $order_num_thirty = Db::name('order')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();
        //商家售后单数量
        $after_num_thirty = Db::name('after_sale')
            ->where('del', 0)
            ->where('create_time', 'between', [$start_th, $end_t])
            ->count();

        if (isset($post['days']) && $post['days'] == 'today') {
            return [
                'start' => $start_today,
                'end' => $end_today,
                'order_amount' => $order_amount_today,
                'order_num' => $order_num_today,
                'after_num' => $after_num_today
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_seven') {
            return [
                'start' => $start_seven,
                'end' => $end_seven,
                'order_amount' => $order_amount_seven,
                'order_num' => $order_num_seven,
                'after_num' => $after_num_seven
            ];
        }

        if (isset($post['days']) && $post['days'] == 'ago_thirty') {
            return [
                'start' => $start_thirty,
                'end' => $end_thirty,
                'order_amount' => $order_amount_thirty,
                'order_num' => $order_num_thirty,
                'after_num' => $after_num_thirty
            ];
        }


        for ($i = 0; $i < 7; $i++) {
            //7天每天订单金额
            $echarts_order_amount[] = Db::name('order')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->sum('order_amount');
            //7天每天订单数量
            $echarts_order_num[] = Db::name('order')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //7天每天售后量
            $echarts_after_num[] = Db::name('after_sale')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }

        $echarts_order_amount_all = array_reverse($echarts_order_amount);
        $echarts_order_num_all = array_reverse($echarts_order_num);
        $echarts_after_num_all = array_reverse($echarts_after_num);

        for ($i = 0; $i < 30; $i++) {
            //30天每天商品浏览量
            $echarts_order_amount_thirty[] = Db::name('order')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->sum('order_amount');
            //30天每天商品收藏量
            $echarts_order_num_thirty[] = Db::name('order')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //30天每天商品浏览量
            $echarts_after_num_thirty[] = Db::name('after_sale')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }
        $echarts_order_amount_all_thirty = array_reverse($echarts_order_amount_thirty);
        $echarts_order_num_all_thirty = array_reverse($echarts_order_num_thirty);
        $echarts_after_num_all_thirty = array_reverse($echarts_after_num_thirty);

        if (isset($post['deal']) && $post['deal'] == 'ago_seven') {
            return [
                'echarts_order_amount' => $echarts_order_amount_all,
                'echarts_order_num' => $echarts_order_num_all,
                'echarts_after_num' => $echarts_after_num_all,
                'days' => 7,
                'start' => $start_seven,
                'end' => $end_seven
            ];
        }

        if (isset($post['deal']) && $post['deal'] == 'ago_thirty') {
            return [
                'echarts_order_amount' => $echarts_order_amount_all_thirty,
                'echarts_order_num' => $echarts_order_num_all_thirty,
                'echarts_after_num' => $echarts_after_num_all_thirty,
                'days' => 30,
                'start' => $start_thirty,
                'end' => $end_thirty
            ];
        }
    }

    //起始默认值
    public static function default()
    {
        //今天时间戳
        list($start_t, $end_t) = Time::today();
        $start_today = date('Y-m-d H:i:s', $start_t);
        $end_today = date('Y-m-d H:i:s', $end_t);

        //7天时间戳
        list($start_s, $end_s) = Time::dayToNow(7);
        $start_seven = date('Y-m-d H:i:s', $start_s);
        $end_seven = date('Y-m-d H:i:s', $end_t);

        // 今天新增会员数量
        $add_today = Db::name('user')
            ->where('del', 0)
            ->whereTime('create_time', 'today')
            ->count();

        // 会员总数
        $count = Db::name('user')
            ->where('del', 0)
            ->count();

        for ($i = 0; $i < 7; $i++) {
            //7天每天会员数
            $echarts_count[] = Db::name('user')
                ->where('del', 0)
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->count();
            //7天每天新增会员数
            $echarts_add[] = Db::name('user')
                ->where('del', 0)
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
        }

        $echarts_countall = array_reverse($echarts_count);
        $echarts_addall = array_reverse($echarts_add);


        $goods_click = Db::name('goods_click')
            ->whereTime('create_time', 'today')
            ->count();

        $goods_sale = Db::name('goods_sale')
            ->whereTime('create_time', 'today')
            ->sum('goods_num');

        $goods_collect = Db::name('goods_collect')
            ->whereTime('create_time', 'today')
            ->count();

        for ($i = 0; $i < 7; $i++) {
            //7天每天商品浏览量
            $echarts_goods_click[] = Db::name('goods_click')
                ->where('create_time','<=',$end_t-$i*86400)
                ->where('create_time','>=',$start_t-$i*86400)
                ->count();

            //7天每天商品收藏量
            $echarts_goods_collcet[] = Db::name('goods_collect')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();

            //7天每天商品销量
            $echarts_goods_sale[] = Db::name('goods_sale')
                ->where('create_time','<=',$end_t-$i*86400)
                ->where('create_time','>=',$start_t-$i*86400)
                ->sum('goods_num');

            //7天每天订单金额
            $echarts_order_amount[] = Db::name('order')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->sum('order_amount');
            //7天每天订单数量
            $echarts_order_num[] = Db::name('order')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();
            //7天每天售后数量
            $echarts_after_num[] = Db::name('after_sale')
                ->where('create_time', '<=', $end_t - $i * 86400)
                ->where('create_time', '>=', $start_t - $i * 86400)
                ->count();

        }

        $echarts_goods_click_all = array_reverse($echarts_goods_click);
        $echarts_goods_collect_all = array_reverse($echarts_goods_collcet);
        $echarts_goods_sale_all = array_reverse($echarts_goods_sale);

        $echarts_order_amount_all = array_reverse($echarts_order_amount);
        $echarts_order_num_all = array_reverse($echarts_order_num);
        $echarts_after_num_all = array_reverse($echarts_after_num);

        //订单金额
        $order_amount = Db::name('order')
            ->where('del', 0)
            ->whereTime('create_time', 'today')
            ->sum('order_amount');
        //订单数量
        $order_num = Db::name('order')
            ->where('del', 0)
            ->whereTime('create_time', 'today')
            ->count();
        //商家售后单数量
        $after_num = Db::name('after_sale')
            ->where('del', 0)
            ->whereTime('create_time', 'today')
            ->count();

        return [
            'start' => $start_today           //今天开始时间戳
            , 'end' => $end_today            //今天结束时间戳
            , 'start_seven' => $start_seven   //7天开始时间戳
            , 'end_seven' => $end_seven      //7天结束时间戳
            , 'add' => $add_today           //今天添加会员
            , 'count' => $count               //共计会员
            , 'echarts_count' => $echarts_countall        //数组echarts7天每天合计
            , 'echarts_add' => $echarts_addall           //数组echarts7天每天新增会员

            ,'goods_click' =>$goods_click               //今日日浏览
            ,'goods_sale' =>$goods_sale                 //今日销量
            , 'goods_collect' => $goods_collect           //今日收藏
            ,'echarts_goods_click' =>$echarts_goods_click_all  //数组echarts7天每天点击合计
            , 'echarts_goods_collect' => $echarts_goods_collect_all //数组echarts7天每天收藏合计
            ,'echarts_goods_sale' =>$echarts_goods_sale_all     //数组echarts7天每天销量合计

            , 'order_amount' => $order_amount          //订单金额
            , 'order_num' => $order_num                  //订单数量
            , 'after_num' => $after_num                  //售后订单数量
            , 'echarts_order_amount' => $echarts_order_amount_all  //数组echarts7天订单金额每天
            , 'echarts_order_num' => $echarts_order_num_all  //数组echarts7天订单数量每天
            , 'echarts_after_num' => $echarts_after_num_all  //数组echarts7天售后数量每天
        ];
    }
}