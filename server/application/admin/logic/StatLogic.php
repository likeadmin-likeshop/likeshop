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

namespace app\admin\logic;

use app\common\model\Pay;
use think\helper\Time;
use think\Db;

class StatLogic
{
    //工作台基本数据
    public static function stat()
    {
        //更新时间
        $time = date('Y-m-d H:i:s', time());
        //今日成交订单
        $order_num_today = Db::name('order')
            ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
            ->whereTime('create_time', 'today')
            ->count();
        //昨日
        $order_num_yesterday = Db::name('order')
            ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
            ->whereTime('create_time', 'yesterday')
            ->count();
        //变化
        $order_num_change = $order_num_today - $order_num_yesterday;
        if ($order_num_change >= 0) {
            $order_num_change = '+' . $order_num_change;
        }
        //总
        $order_num_all = Db::name('order')
            ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
            ->count();
        //今日销售金额（元）
        $order_amount_today = Db::name('order')
            ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
            ->whereTime('create_time', 'today')
            ->sum('order_amount');
        //昨日
        $order_amount_yesterday = Db::name('order')
            ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
            ->whereTime('create_time', 'yesterday')
            ->sum('order_amount');
        //总
        $order_amount_all = Db::name('order')
            ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
            ->sum('order_amount');
        //变化
        $order_amount_change = $order_amount_today - $order_amount_yesterday;
        if ($order_amount_change >= 0) {
            $order_amount_change = '+' . $order_amount_change;
        }


        // 今天新增会员数量
        $add_user_today = Db::name('user')
            ->where('del', 0)
            ->whereTime('create_time', 'today')
            ->count();
        //昨天
        $add_user_yesterday = Db::name('user')
            ->where('del', 0)
            ->whereTime('create_time', 'yesterday')
            ->count();
        //总
        $user_all = Db::name('user')
            ->where('del', 0)
            ->count();
        //变化
        $add_change = $add_user_today - $add_user_yesterday;
        if ($add_change >= 0) {
            $add_change = '+' . $add_change;
        }

        $today_pv = Db::name('stat')
            ->whereTime('create_time', 'today')
            ->value('today_user_pv');
        $yesterday_pv = Db::name('stat')
            ->whereTime('create_time', 'yesterday')
            ->value('today_user_pv');

        $pv_change = $today_pv - $yesterday_pv;
        if ($pv_change >= 0) {
            $pv_change = '+' . $pv_change;
        }

        $total_pv = Db::name('stat')->sum('today_user_pv');

        return [
            'time' => $time,
            'order_num_today' => $order_num_today,
            'order_num_yesterday' => $order_num_yesterday,
            'order_num_change' => $order_num_change,
            'order_amount_today' => $order_amount_today,
            'order_amount_yesterday' => $order_amount_yesterday,
            'order_amount_change' => $order_amount_change,

            'add_user_today' => $add_user_today,
            'add_user_yesterday' => $add_user_yesterday,
            'add_user_change' => $add_change,

            'order_num_all' => $order_num_all,
            'order_amount_all' => $order_amount_all,
            'user_all' => $user_all,
            'today_user_pv' => $today_pv ?? 0,
            'yesterday_user_pv' => $yesterday_pv ?? 0,
            'pv_change' => $pv_change,
            'total_user_pv' => $total_pv ?? 0,
        ];
    }


    //图标数据
    public static function graphData()
    {
        //今天时间戳
        list($start_t, $end_t) = Time::dayToNow(30);

        //echarts图表数据
        for ($i = 1; $i <= 30; $i++) {
            $where_start = strtotime("+ ".$i."day", $start_t);
            $where_end = strtotime("+ ".$i."day", $start_t) + 86399;

            //每天订单金额
            $echarts_order_amount[] = Db::name('order')
                ->where('create_time', '<=', $where_end)
                ->where('create_time', '>=', $where_start)
                ->where(['del' => 0, 'pay_status' => Pay::ISPAID])
                ->sum('order_amount') ?? 0;

            //每天用户访问量
            $echarts_user_pv[] = Db::name('stat')
                ->where('create_time', '<=', $where_end)
                ->where('create_time', '>=', $where_start)
                ->value('today_user_pv') ?? 0;
        }

        $echarts_order_amount_all = array_reverse($echarts_order_amount);
        $echarts_user_pv_all = array_reverse($echarts_user_pv);

        return [
            'echarts_order_amount' => $echarts_order_amount_all,
            'echarts_user_visit' => $echarts_user_pv_all,
            'number' => range(1, 30),
        ];
    }
}