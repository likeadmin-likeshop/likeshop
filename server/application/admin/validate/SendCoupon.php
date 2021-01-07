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
namespace app\admin\validate;
use think\Db;
use think\Validate;
class SendCoupon extends Validate{
    protected $rule = [
        'coupon_ids'            => 'require|checkCoupon',
    ];
    protected $message = [
        'coupon_ids.require'    => '请选择优惠券',
    ];
    protected function checkCoupon($value,$rule,$data){

        $now = time();
        $where[] = ['id','in',$value];
        $where[] = ['status','=',1];
        $where[] = ['get_type','=',2];

        $coupon_list = Db::name('coupon')
                ->where($where)
                ->column('*','id');
        foreach ($value as $coupon_id){
            $coupon = $coupon_list[$coupon_id] ?? [];
            if(empty($coupon)){
                return '优惠券信息错误';
            }
            if($coupon['send_total_type'] == 2){
                $get_total_coupon = Db::name('coupon_list')
                                ->where(['id'=>$coupon_id])
                                ->count();
                $get_total_coupon = count($data['user_ids']) + $get_total_coupon;

                if($get_total_coupon > $coupon['send_total']){
                    return $coupon['name'].'的发放的总量已达到限制';
                }
            }
            return true;

        }
    }


}