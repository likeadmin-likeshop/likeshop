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
namespace app\admin\logic;
use app\admin\model\User;
use app\api\model\Order;
use app\api\model\OrderGoods;
use app\common\model\AccountLog;
use app\common\model\DistributionOrder;
use think\Db;
use think\helper\Time;

class AccountLogLogic{
    public static function lists($get){
        $source_type = '';
        $where = [];
        switch ($get['type']){//记录类型
            case 1://余额变动
                $source_type = AccountLog::money_change;
                break;
            case 2://积分变动
                $source_type = AccountLog::integral_change;
                break;
            case 3://成长值变动
                $source_type = AccountLog::growth_change;
        }
        if(isset($get['order_source']) && $get['order_source']){
            $source_type = $get['order_source'];
        }

        $where[] = ['source_type','in',$source_type];
        if(isset($get['change_type']) && $get['change_type']){
            $where[] = ['source_type','=',$get['change_type']];
        }
        if(isset($get['keyword']) && $get['keyword']){
            $where[] = [$get['keyword_type'],'like','%'.$get['keyword'].'%'];
        }
        if (isset($get['start_time']) && $get['start_time'] && isset($get['end_time']) && $get['end_time']) {
            $where[] = ['a.create_time', 'between', [strtotime($get['start_time']), strtotime($get['end_time'])]];
        }

        if(isset($get['create_end']) && $get['create_end']!=''){
            $where[] = ['ro.create_time','<=',strtotime($get['create_end'])];
        }

        $count = Db::name('account_log')->alias('a')
                ->join('user u','a.user_id = u.id')
                ->where($where)
                ->count();

        $list = Db::name('account_log')->alias('a')
                ->join('user u','a.user_id = u.id')
                ->where($where)
                ->page($get['page'],$get['limit'])
                ->order('a.id desc')
                ->field('a.*,nickname,sn,mobile')
                ->select();

        foreach ($list as &$item){
            $item['source_type_desc'] = AccountLog::getAcccountDesc($item['source_type']);
            $item['create_time'] = date('Y-m-d H:i:s',$item['create_time']);
            // 获取来源单号
            $item['order_sn'] = Db::name('order')->where(['del'=>0, 'id'=>$item['source_id']])->value('order_sn');
        }
        return ['count'=>$count,'lists'=>$list];
    }

    /**
     * note 每个资金记录页面的的变动类型
     * create_time 2020/11/23 9:55
     */
    public static function orderSourceList($type){
        $list = [];
        switch ($type){
            case 1:
                $list = [
                    [
                        'source'     => AccountLog::balance_pay_order,
                        'name'       => '订单支付',
                    ],
                    [
                        'source'     => AccountLog::admin_add_money.','.AccountLog::recharge_money,
                        'name'       => '钱包充值',
                    ],
                    [
                        'source'     => AccountLog::withdraw_to_balance,
                        'name'       => '佣金提现',
                    ],

                ];
                break;
            case 2:
                $list = [
                    [
                        'source'     => AccountLog::register_add_integral,
                        'name'       => '关注赠送积分',
                    ],
                    [
                        'source'     => AccountLog::invite_add_integral,
                        'name'       => '邀请赠送积分',
                    ],
                    [
                        'source'     => AccountLog::sign_in_integral,
                        'name'       => '签到赠送积分',
                    ],
                    [
                        'source'     => AccountLog::recharge_give_integral,
                        'name'       => '充值赠送积分',
                    ],
                    [
                        'source'     => AccountLog::order_add_integral,
                        'name'       => '消费赠送积分',
                    ],
                    [
                        'source'     => AccountLog::order_deduction_integral,
                        'name'       => '订单抵扣积分',
                    ],

                ];
                break;
            case 3:
                $list = [
                    [
                        'source'     => AccountLog::sign_give_growth,
                        'name'       => '签到赠送成长值',
                    ],
                    [
                        'source'     => AccountLog::recharge_give_growth,
                        'name'       => '充值赠送成长值',
                    ],
                    [
                        'source'     => AccountLog::order_give_growth,
                        'name'       => '下单赠送成长值',
                    ],
                ];
                break;
        }
        return $list;

    }

    public static function getTime(){
        $today = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::today());
        $yesterday = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::yesterday());

        $days_ago7 = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::dayToNow(7));

        $days_ago30 = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::dayToNow(30, true));
        $time = [
            'today'         => $today,
            'yesterday'     => $yesterday,
            'days_ago7'     => $days_ago7,
            'days_ago30'    => $days_ago30,
        ];
        return $time;
    }



    //佣金记录
    public static function getDistributionLog($get)
    {
        $where = [];
        if (!empty($get['distribution_keyword_type']) and !empty($get['distribution_keyword']) and $get['distribution_keyword']) {
            switch ($get['distribution_keyword_type']) {
                case 'order_sn':
                    $order_ids = Order::field('id,order_sn')->where('order_sn', $get['distribution_keyword'])->column('id');
                    $og_ids = OrderGoods::field('id,order_id')->whereIn('id', $order_ids)->column('id');
                    $where[] = ['order_goods_id', 'in', $og_ids];
                    break;
                case 'nickname':
                    $user_ids = User::field('id,sn,nickname')->where('nickname', 'like', '%'.$get['distribution_keyword'].'%')->column('id');
                    $where[] = ['user_id', 'in', $user_ids];
                    break;
                case 'user_sn':
                    $user_ids = User::field('id,sn,nickname')->where('sn', 'like', '%'.$get['distribution_keyword'].'%')->column('id');
                    $where[] = ['user_id', 'in', $user_ids];
                    break;
                case 'mobile':
                    $user_ids = User::field('id,sn,mobile')->where('mobile', '=', $get['distribution_keyword'])->column('id');
                    $where[] = ['user_id', 'in', $user_ids];
                    break;
            }
        }

        if (!empty($get['distribution_status']) and is_numeric($get['distribution_status'])) {
            $where[] = ['d.status', '=', $get['distribution_status']];
        }
        if (!empty($get['distribution_start_time']) and $get['distribution_start_time']) {
            $where[] = ['d.create_time', '>=', strtotime($get['distribution_start_time'])];
        }
        if (!empty($get['distribution_end_time']) and $get['distribution_end_time']) {
            $where[] = ['d.create_time', '<=', strtotime($get['distribution_end_time'])];
        }

        // 查询结果
        $count = DistributionOrder::where($where)->alias('d')
            ->join('order_goods og', 'order_goods_id = og.id')
            ->count();
        $lists = DistributionOrder::field('d.*, og.order_id')
            ->where($where)->alias('d')
            ->join('order_goods og', 'order_goods_id = og.id')
            ->with('user')
            ->withAttr('order', function ($value, $data) {
                return Order::field('id,order_sn,order_amount')->where(['id'=>$data['order_id']])->find();
            })
            ->page($get['page'], $get['limit'])
            ->append(['order'])
            ->order('d.id desc')
            ->select();

        foreach ($lists as &$item) {
            $item['status_text'] = DistributionOrder::getOrderStatus($item['status']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
        }
        return ['count'=>$count, 'lists'=>$lists];
    }


    //佣金统计
    public static function withdrawTotalCount($get)
    {
        // 今天开始和结束时间戳
        list($startToday, $endToday) = Time::today();
        // 本月开始和结束时间戳
        list($startMonth, $endMonth) = Time::month();

        if ($get['type'] == 'distribution') {
            // 获取分销佣金总计
            $distributionToday = DistributionOrder::where('status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
                ->where('create_time', '>=', $startToday)
                ->where('create_time', '<=', $endToday)
                ->sum('money');

            $distributionMonth = DistributionOrder::where('status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
                ->where('create_time', '>=', $startMonth)
                ->where('create_time', '<=', $endMonth)
                ->sum('money');

            $distributionTotal = DistributionOrder::where('status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
                ->sum('money');

            return ['today'=>$distributionToday, 'month'=>$distributionMonth, 'total'=>$distributionTotal];
        }
    }


}