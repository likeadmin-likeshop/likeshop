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
use app\common\model\AccountLog;
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
        }else{
            $where[] = ['a.create_time', 'between', Time::today()];
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

}