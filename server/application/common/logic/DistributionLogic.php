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
namespace app\common\logic;

use app\common\model\Distribution;
use app\common\model\DistributionLevel;
use app\common\server\ConfigServer;

/**
 * 分销基础信息逻辑层
 * Class DistributionLogic
 * @package app\common\logic
 */
class DistributionLogic
{
    /**
     * @notes 添加分销基础信息记录
     * @param $userId
     * @author Tab
     */
    public static function add($userId)
    {
        // 默认分销会员等级
        $defaultLevelId = DistributionLevel::where('is_default', 1)->value('id');
        // 分销会员开通方式
        $apply_condition = ConfigServer::get('distribution', 'apply_condition', 2);
        $isDistribution = $apply_condition == 1 ? 1 : 0;

        $data = [
            'user_id' => $userId,
            'level_id' => $defaultLevelId,
            'is_distribution' => $isDistribution,
            'is_freeze' => 0,
            'remark' => '',
        ];

        if($isDistribution) {
            // 成为分销会员时间
            $data['distribution_time'] = time();
        }

        Distribution::create($data);
    }
}