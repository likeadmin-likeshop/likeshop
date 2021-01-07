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
namespace app\api\validate;
use think\Db;
use think\Validate;

class GetCoupon extends Validate{
    protected $rule = [
        'id'            => 'require|checkCoupon',
    ];
    protected $message = [
        'id.require'    => '请选择优惠券',
    ];
    public function checkCoupon($value,$rule,$data){

        $coupon = Db::name('coupon')->where(['id'=>$value,'status'=>1,'del'=>0,'get_type'=>1])->find();
        if(!$coupon){
            return '优惠券已下架';
        }
        $now = time();
        if($coupon['send_time_start'] > $now || $coupon['send_time_end'] < $now){
            return '未到领取时间';
        }

        //限量发放，验证是否达到数量
        if($coupon['send_total_type'] == 2){
            $total_coupon = Db::name('coupon_list')->where(['coupon_id'=>$value,'del'=>0])->count();
            if($total_coupon >= $coupon['send_total']){
                return '优惠券已领完';
            }
        }
        //限制每人领取次数
        if($coupon['get_num_type'] == 2 || $coupon['get_num_type'] == 3){
            if($coupon['get_num_type'] == 2){

                $total_coupon = Db::name('coupon_list')->where(['user_id'=>$data['user_id'],'coupon_id'=>$value,'del'=>0])->count();
                if($total_coupon >= $coupon['get_num']) {
                    return '您已达到领取次数了';
                }

            }
            if($coupon['get_num_type'] == 3){
                $today = date("Y-m-d");
                $tomorrow = date("Y-m-d",strtotime("+1 day"));
                $total_coupon = Db::name('coupon_list')->where(['user_id'=>$data['user_id'],'coupon_id'=>$value,'del'=>0])
                    ->whereTime('create_time', 'between',[$today,$tomorrow])
                    ->count();

                if($total_coupon >= $coupon['get_num']) {
                    return '您已达到领取次数了';
                }
            }

        }

        return true;

    }
}