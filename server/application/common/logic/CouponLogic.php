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
namespace app\common\logic;
use think\Db;

class CouponLogic {
    public static function couponClose($user_id = ''){
        $coupon_list = Db::name('coupon')
            ->where(['del'=>0])
            ->column('id,use_time_type,use_time_start,use_time_end,use_time','id');

        $coupon_ids = array_keys($coupon_list);
        $where[] = ['coupon_id','in',$coupon_ids];
        $where[] = ['status','in',0];
        if($user_id){
            $where[] = ['user_id','=',$user_id];
        }
        $user_coupon_list = Db::name('coupon_list')
            ->where(['coupon_id'=>$coupon_ids,'status'=>0])
            ->field('id,coupon_id,create_time')
            ->order('id asc')
            ->select();

        $now = time();
        $update_data = [];
        foreach ($user_coupon_list as $coupon_item){
            $coupon = $coupon_list[$coupon_item['coupon_id']] ?? [];
            if($coupon){
                //用券时间类型：1-固定时间；2-领券当天起；3-领券次日起
                switch ($coupon['use_time_type']){
                    case 1:
                        if($now > $coupon['use_time_end']){
                            $update_data[] = $coupon_item['id'];
                        }
                        break;
                    case 2:
                        $daytime = strtotime(date("Y-m-d",$coupon_item['create_time'])) + 86400 * $coupon['use_time'];
                        if($now > $daytime){
                            $update_data[] = $coupon_item['id'];
                        }
                        break;
                    case 3:
                        $day = $coupon['use_time'] + 2;
                        $daytime = strtotime(date("Y-m-d",$coupon_item['create_time'])) + 86400 * $day;
                        if($now > $daytime){
                            $update_data[] = $coupon_item['id'];
                        }
                }
            }
        }

        if($update_data){
            Db::name('coupon_list')->where(['id'=>$update_data])->update(['status'=>2,'update_time'=>$now]);

        }
    }



    /**
     * Desc:　使用优惠券
     * @param $coupon_list_id
     * @param $order_id
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function handleCouponByOrder($coupon_list_id, $order_id)
    {
        $update_coupon = [
            'status' => 1,
            'use_time' => time(),
            'order_id' => $order_id,
            'update_time' => time(),
        ];

        Db::name('coupon_list')
            ->where('id', $coupon_list_id)
            ->update($update_coupon);
    }
}