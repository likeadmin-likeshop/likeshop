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