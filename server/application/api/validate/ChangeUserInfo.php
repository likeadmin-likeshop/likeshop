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

class changeUserInfo extends Validate{
    protected $rule = [
        'nickname'  => 'require',
        'sex'       => 'require|in:0,1,2',
    ];
    protected $message = [
        'nickname.require'  => '请输入昵称',
        'sex.require'       => '请选择性别',
        'sex.in'            => '性别设置错误',
    ];
    public function scenePc(){
        $this->only(['nickname','sex']);
    }
}