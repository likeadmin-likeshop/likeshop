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


use think\Validate;

/**
 * 更新微信信息验证器
 * Class UpdateWechatUser
 * @package app\api\validate
 */
class SetWechatUser extends Validate
{
    protected $rule = [
        'nickname'  => 'require',
        'avatar'    => 'require',
        'sex'       => 'require',
    ];

    protected $message = [
        'nickname.require'  => '参数缺失',
        'avatar.require'    => '参数缺失',
        'sex.require'       => '参数缺失',
    ];

}