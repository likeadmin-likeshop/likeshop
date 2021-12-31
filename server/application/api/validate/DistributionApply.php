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


namespace app\api\validate;


use think\Db;
use think\Validate;

class DistributionApply extends Validate
{
    protected $rule = [
        'user_id' => 'apply',
        'real_name' => 'require',
//        'mobile' => 'require|mobile',
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
        'reason.require' => '请填写申请原因',
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