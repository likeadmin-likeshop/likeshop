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

class AdjustAccount extends Validate{
    protected $rule = [
        'id'                => 'require|checkData',
        'money_remark'      => 'max:100',
        'integral_remark'   => 'max:100',
        'growth_remark'     => 'max:100',
    ];
    protected $message = [
        'id.require'            => '请选择用户',
        'money_remark.max'      => '余额备注不能超过100字',
        'integral_remark.max'   => '积分备注不能超过100字',
        'growth_remark.max'     => '成长值备注不能超过100字',
    ];


    protected function checkData($value,$rule,$data){
        $user = Db::name('user')->where(['del'=>0,'id'=>$value])->find();
        if(empty($user)){
            return '该用户不存在';
        }
        if(!isset($data['money_handle']) && !isset($data['integral_handle']) && !isset($data['growth_handle'])){
            return '请选择调整的类型';
        }

        //余额调整
        if(isset($data['money_handle'])){
            if(empty($data['money'])){
                return '请输入调整的余额';
            }
            //验证扣减余额操作
            if($data['money_handle'] == 0){
                //用户余额不足
                if($data['money'] > $user['user_money']){
                    return '用户余额仅剩下'.$user['user_money'].'元';
                }
            }
            if(empty($data['money_remark'])){
                return '请输入调整余额备注';
            }
        }

        //积分调整
        if(isset($data['integral_handle'])){
            if(empty($data['integral'])){
                return '请输入调整的积分';
            }
            //验证扣减积分操作
            if($data['integral_handle'] == 0){
                //用户积分不足
                if($data['integral'] > $user['user_integral']){
                    return '用户积分仅剩下'.$user['user_integral'].'分';
                }
            }

            if(empty($data['integral_remark'])){
                return '请输入调整积分备注';
            }
        }

        if(isset($data['growth_handle'])){
            if(empty($data['growth'])){
                return '请输入调整的成长值';
            }
            //验证扣减成长值操作
            if($data['growth_handle'] == 0){
                //用户成长值不足
                if($data['growth'] > $user['user_growth']){
                    return '用户成长值仅剩下'.$user['user_growth'];
                }
            }
            if(empty($data['growth_remark'])){
                return '请输入调整成长值备注';
            }
        }


        return true;
    }


}