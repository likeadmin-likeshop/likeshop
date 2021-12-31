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
namespace app\api\logic;
use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\server\UrlServer;
use think\Db;
use think\helper\Time;
use app\common\server\ConfigServer;
class SignLogic
{
    /**
     * note 每日签到
     * create_time 2020/12/3 16:06
     */
    public static function lists($user_id){

        //用户信息
        $user = Db::name('user')
                ->where(['id'=>$user_id])
                ->field('id,nickname,avatar,user_integral')
                ->find();

        $user['avatar'] = UrlServer::getFileUrl($user['avatar']);
        $user['today_sign'] = 0;
        $today_sign = Db::name('user_sign')
            ->where(['del'=>0 , 'user_id'=>$user_id])
            ->whereTime('sign_time', 'today')
            ->find();

        list($today_start,$today_end) = Time::today();
        //今天是否已签到
        $today_sign && $user['today_sign'] = 1;
        //今天签到赠送的积分
        $today_sign_integral = 0;
        //昨天是否签到
        $yester_sign = Db::name('user_sign')
                ->where(['del'=>0 , 'user_id'=>$user_id])
                ->whereTime('sign_time', 'yesterday')
                ->find();
        //昨天没签到，则签到中断重新计算连续天数
        if(!$yester_sign){
            Db::name('user_sign')
                ->where(['del'=>0,'user_id'=>$user_id])
                ->where('sign_time','<',$today_start)
                ->update(['del'=> 1,'update_time'=>time()]);
        }

        //签到规则
        $sign_list = Db::name('sign_daily')
                ->where(['del'=>0])
                ->order('type asc,days asc')
                ->column('*','days');
        $sign_total_days = '';
        $days_list = [];
        if($sign_list){
            $start_sign = current($sign_list);      //第一次签到规则
            $end_sign = end($sign_list);     //最后一次签到规则
            //每天赠送的积分
            $everyday_send_integral = 0;
            $start_sign['integral_status'] && $everyday_send_integral = $start_sign['integral'];
            //累计签到的总天数
            $sign_total_days = Db::name('user_sign')
                ->where(['del'=>0,'user_id'=>$user_id])
                ->order('id desc')
                ->value('days');


            for($days = 1; $days <= $end_sign['days'] ;$days++){
                $send_integral = $everyday_send_integral;
                //连接签到赠送的积分
                if(isset($sign_list[$days]) && $sign_list[$days]['integral_status'] ){
                    $send_integral = $everyday_send_integral + $sign_list[$days]['integral'];
                }
                //合并数据
                $days_list[$days] = [
                    'days'          => $days,
                    'status'        => 0,
                    'integral'      => $send_integral,
                    'growth'        => 0,
                ];
                $total_sin_days = $end_sign['days'];  //可连续签到的最大天数
                //更新签到天数之前的签到状态
                if($days === $sign_total_days){
                    $today_sign_integral = $send_integral;//今天签到获得的积分
                    for ($sign_day = $days;$sign_day >= 1;$sign_day--){
                        $days_list[$sign_day]['status'] = 1;
                    }
                }
                //如果连续签到天数大于总天数，则全部标记为已签到状态
                if($sign_total_days > $total_sin_days){
                    $days_list[$days]['status'] = 1;
                }
            }

        }
        $user['days'] = $sign_total_days ?: 0;

        //赚积分
        $make_inegral = [];
        $make_inegral[] = [
            'name'      => '每日签到',
            'status'    => $user['today_sign'],
            'integral'  => $today_sign_integral,
            'type'      => 1,//类型，主要用前端显示图标
        ];


        $order_award_integral = ConfigServer::get('marketing','order_award_integral',0);
        $invited_award_integral = ConfigServer::get('marketing','invited_award_integral',0);
        //下单奖励
        if($order_award_integral > 0){

            $today_order_award = Db::name('account_log')
                ->where(['user_id'=>$user_id,'source_type'=>AccountLog::order_add_integral])
                ->whereTime('create_time',[$today_start,$today_end])
                ->find();
            $make_inegral[] = [
                'name'      => '下单任意商品',
                'status'    => $today_order_award ? 1 : 0,
                'integral'  => $order_award_integral,
                'type'      => 2,
            ];
        }
        //邀请奖励
        if($invited_award_integral > 0){
            $total_invited_award = Db::name('account_log')
                    ->where(['user_id'=>$user_id,'source_type'=>AccountLog::invite_add_integral])
                    ->whereTime('create_time',[$today_start,$today_end])
                    ->find();
            $make_inegral[] = [
                'name'      => '成功邀请1位好友',
                'status'    => $total_invited_award ? 1 : 0,
                'integral'  => $invited_award_integral,
                'type'      => 3,
            ];
        }

        return [
            'user'          => $user,
            'sign_list'     => array_values($days_list),
            'make_inegral'  => $make_inegral,
        ];
    }
    //签到接口
    public static function sign($user_id){

        $sign_list = Db::name('sign_daily')
                    ->where(['del'=>0])
                    ->order('type asc,days asc')
                    ->column('*','days');
        $start_sign = current($sign_list);      //第一次签到规则
        $end_sign = end($sign_list);     //最后一次签到规则
        //签到记录
        $last_sign = Db::name('user_sign')
                    ->where(['del'=>0,'user_id'=>$user_id])
                    ->order('id desc')
                    ->find();
        $now = time();
        $total_integral = 0;                    //签到赠送的积分
        $total_growth = 0;                      //签到赠送的成长值

        $sign_add = [];
        $sign_day = 1;                  //累计签到天数
        //有签到记录，说明之前有签到
        if($last_sign){

            $sign_day = $last_sign['days'] + 1;
            $sign = $sign_list[$sign_day] ?? [];
            $continuous_integral = 0;               //连续签到奖励积分
            $continuous_growth = 0;                 //连续签到奖励成长值

            //累计签到天数,额外奖励
            if($sign){
                if($sign['integral_status'] && $sign['integral'] > 0){
                    $total_integral+=$sign['integral'];
                }
                if($sign['growth_status'] && $sign['growth'] > 0){
                    $total_growth+=$sign['growth'];
                }
            }
            if($start_sign && $start_sign['integral_status'] && $start_sign['integral'] > 0){
                $total_integral+=$start_sign['integral'];
            }
            if($start_sign && $start_sign['growth_status'] && $start_sign['growth'] > 0){
                $total_growth+=$start_sign['growth'];
            }
            $sign_add = [
                'user_id'               => $user_id,
                'days'                  => $sign_day,
                'integral'              => $total_integral,
                'growth'                => $total_growth,
                'continuous_integral'   => $continuous_integral,
                'continuous_growth'     => $continuous_growth,
                'sign_time'             => $now,
                'create_time'           => $now,
            ];


        }else{  //第一次签到
            $one_day_sign = $sign_list['1'] ?? [];
            //连续一天的奖励
            if($one_day_sign && $one_day_sign['integral_status'] && $one_day_sign['integral'] > 0){
                $total_integral+=$one_day_sign['integral'];
            }
            if($one_day_sign && $one_day_sign['growth_status'] && $one_day_sign['growth'] > 0){
                $total_growth+=$one_day_sign['growth'];
            }

            //每天签到的奖励
            if($start_sign && $start_sign['integral_status'] && $start_sign['integral'] > 0){
                $total_integral+=$start_sign['integral'];
            }
            if($start_sign && $start_sign['growth_status'] && $start_sign['growth'] > 0){
                $total_growth+=$start_sign['growth'];
            }
          
            $sign_add = [
                'user_id'       => $user_id,
                'days'          => $sign_day,
                'integral'      => $total_integral,
                'growth'        => $total_growth,
                'sign_time'     => $now,
                'create_time'   => $now,
            ];
        }
        Db::name('user_sign')->insert($sign_add);

        if($total_integral){
            Db::name('user')
                ->where(['del'=>0 , 'id'=>$user_id])
                ->setInc('user_integral',$total_integral);
            AccountLogLogic::AccountRecord($user_id,$total_integral,1, AccountLog::sign_in_integral);
        }
        if($total_growth){
            //用户成长值
            Db::name('user')
                ->where(['del'=>0 , 'id'=>$user_id])
                ->setInc('user_growth',$total_growth);
            AccountLogLogic::AccountRecord($user_id,$total_growth,1,AccountLog::sign_give_growth);

        }


        return [
            'integral'  => $total_integral,
            'growth'    => $total_growth,
            'days'      => $sign_day,
        ];

    }
}