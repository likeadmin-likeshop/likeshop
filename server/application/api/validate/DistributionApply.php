<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------


namespace app\api\validate;


use think\Db;
use think\Validate;

class DistributionApply extends Validate
{
    protected $rule = [
        'user_id' => 'apply',
        'real_name' => 'require',
        'mobile' => 'require|mobile',
        'province' => 'require|number',
        'city' => 'require|number',
        'district' => 'require|number',
        'reason' => 'require',
    ];

    protected $message = [
        'real_name.require' => '请填写真实姓名',
        'mobile.require' => '请填写手机号码',
        'mobile.mobile' => '请填写正确的手机号码',
        'province.province' => '请填写省份',
        'city.city' => '请填写城市',
        'district.district' => '请填写县区',
    ];


    protected function apply($user_id, $other, $data)
    {
        $result = Db::name('distribution_member_apply')
            ->where('user_id', $user_id)
            ->where('status', 0)
            ->find();
        if ($result) {
            return '正在审核中，请勿重复提交';
        }
        return true;
    }
}