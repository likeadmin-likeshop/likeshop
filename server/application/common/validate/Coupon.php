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
namespace app\common\validate;
use think\Db;
use think\Validate;


class Coupon extends Validate{
    protected $rule = [
        'name'              => 'require|max:16',
        'send_time_start'   => 'require|checkSendTime',
        'send_time_end'     => 'require',
        'money'             => 'require|gt:0',
        'scene_type'        => 'require|in:1',
        'platform_ratio'    => 'require',
        'shop_ratio'        => 'require',
        'send_total_type'   => 'require|in:1,2',
        'send_total'        => 'requireIf:send_total_type,2|gt:0',
        'condition_type'    => 'require|in:1,2',
        'condition_money'   => 'requireIf:condition_type,2|gt:0',
        'use_time_type'     => 'require|in:1,2,3',
        'use_time_start'    => 'requireIf:use_time_type,1|checkUseTime',
        'use_time_end'      => 'requireIf:use_time_type,1',
        'use_time'          => 'requireIf:use_time_type,2',
        'tomorrow_use_time' => 'requireIf:use_time_type,3',
        'get_type'          => 'require|in:1,2',
        'get_num_type'      => 'require|in:1,2,3',
        'get_num'           => 'requireIf:get_num_type,2',
        'day_get_num'       => 'requireIf:get_num_type,3',
        'use_goods_type'    => 'require|in:1,2,3',
        'goods_ids'         => 'checkGoods',
    ];
    protected $message = [
        'name.require'                  => '请输入优惠券名称',
        'name.max'                      => '优惠券名称长度最多16个字符',
        'send_time_start.require'       => '请选择优惠券开始发放时间',
        'send_time_end.require'         => '请选择优惠券结束发放时间',
        'money.require'                 => '请输入优惠券面额',
        'money.gt'                      => '优惠券面额必须大于零',
        'scene_type.require'            => '请选择使用场景',
        'scene_type.in'                 => '使用场景类型错误',
        'platform_ratio.require'        => '请输入平台分摊比例',
        'shop_ratio.require'            => '请输入店铺分摊比例',
        'send_total_type.require'       => '请选择发放总量',
        'send_total_type.in'            => '发放总量类型错误',
        'condition_type.require'        => '请选择使用门槛',
        'condition_type.in'             => '使用门槛类型错误',
        'use_time_type.require'         => '请选择用券时间',
        'use_time_start.requireIf'      => '请选择优惠券使用时间',
        'use_time_end.requireIf'        => '请选择优惠券使用时间',
        'use_time.requireIf'            => '请选择优惠券使用时间',
        'tomorrow_use_time.requireIf'   => '请选择优惠券使用时间',
        'get_type.require'              => '请选择领取方式',
        'get_type.in'                   => '领取方式类型错误',
        'get_num_type.require'          => '请选择领取次数',
        'get_num_type.in'               => '领取次数类型错误',
        'get_num.requireIf'             => '请输入领取次数',
        'day_get_num.requireIf'         => '请输入领取次数',
        'use_goods_type.require'        => '请选择适用商品',
        'use_goods_type.in'             => '适用商品类型错误',
    ];

    protected function scenePlatfrom(){
        $this->remove(['use_goods_type','goods_ids']);
    }

    protected function sceneShop(){
        $this->remove(['scene_type','platform_ratio','shop_ratio']);
    }

    public function checkGoods($value,$rule,$data){
        if($data['use_goods_type'] !=1 ){
            $shop_goods_list = Db::name('goods')->where(['del'=>0,'shop_id'=>$data['shop_id']])->column('id');
            foreach ($value as $item){
                if (!in_array($item,$shop_goods_list)){
                    return '商品ID：'.$item.'不可使用';
                }
            }
        }
        return true;
    }

    public function checkUseTime($value,$rule,$data){
        if($value && $value == $data['use_time_end']){
            return '用券时间开始时间和结束时间不能相同';
        }
        return true;
    }

    public function checkSendTime($value,$rule,$data){
        if($value && $value == $data['send_time_end']){
            return '发放开始时间和结束时间不能相同';
        }
        return true;
    }

}

