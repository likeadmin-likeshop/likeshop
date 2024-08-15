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


namespace app\api\validate;


use app\admin\logic\UserSettingLogic;
use app\common\server\ConfigServer;
use think\Db;
use think\Validate;

class DistributionCode extends Validate
{
    protected $rule = [
        'code' => 'require|checkCode',
    ];

    protected $message = [
        'code.require' => '请输入邀请码',
    ];

    /**
     * 填写邀请码验证
     * @param $code
     * @param $other
     * @param $data
     * @return bool|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function checkCode($code, $other, $data)
    {
        $config = UserSettingLogic::getConfig();
        if(!$config['is_open']) {
            return '系统已关闭邀请功能';
        }

        $user = \app\common\model\User::where(['id'=>$data['user_id'], 'del'=>0])->findOrEmpty();
        if($user->isEmpty()) {
            return '无法获取当前用户信息';
        }
        if(!empty($user['first_leader'])) {
            return '已有邀请人';
        }

        $firstLader = \app\common\model\User::field('id,is_distribution,level,ancestor_relation')
            ->where('distribution_code', $code)
            ->findOrEmpty();
        if($firstLader->isEmpty()) {
            return '无效的邀请码';
        }
        if($firstLader['id'] == $data['user_id']) {
            return '不能填自己的邀请码';
        }

        // qualifications-邀请资格 【1-全部用户 2-指定等级用户】
        $invite_appoint_user = ConfigServer::get('invite', 'invite_appoint_user', []);
        if(in_array(2, $config['qualifications']) && !in_array($firstLader['level'],$invite_appoint_user)) {
            return '邀请下级资格未达到要求';
        }

        // 如果当前用户id出现在邀请人的祖先链路中，代表当前用户是已经是邀请人的上级或祖先级，同时意味着邀请人是当前用户的后代级别
        // 不能将自己的上级设置为自己的后代级用户
        $ancestorArr = explode(',', $firstLader['ancestor_relation']);
        if(!empty($ancestorArr) && in_array($data['user_id'], $ancestorArr)) {
            return '不能填写自己下级的邀请码';
        }
        return true;
    }
}