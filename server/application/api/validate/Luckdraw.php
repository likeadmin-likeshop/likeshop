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


use app\common\model\LuckdrawRecord;
use app\common\server\ConfigServer;
use think\Validate;
use app\common\model\User;


class Luckdraw extends Validate
{

    protected $rule = [
        'user_id' => 'require|checkActivity',
    ];

    protected $message = [
        'user_id.require' => '参数缺失',
    ];

    public static function checkActivity($value, $rule, $data)
    {
        $user = User::findOrEmpty($value);
        if ($user->isEmpty()) {
            return '用户不存在';
        }

        // 活动是否进行中
        $status = ConfigServer::get('luckdraw', 'status', 0);
        if ($status == 0) {
            return '抽奖活动已结束';
        }

        // 每次抽奖需要消耗积分
        $need = ConfigServer::get('luckdraw', 'need', 0);
        if ($user['user_integral'] < $need) {
            return '积分不足';
        }

        // 计算用户剩余抽奖次数  该用户今天抽奖次数
        $recordCount = LuckdrawRecord::where(['user_id' => $value])
            ->whereTime('create_time', 'today')
            ->count('id');

        // 每日抽奖次数
        $limit = ConfigServer::get('luckdraw', 'limit', 0);
        if ($recordCount >= $limit) {
            return '今天抽奖次数已用完';
        }

        return true;
    }

}