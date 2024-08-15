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

namespace app\common\model;


use app\api\model\Coupon;
use think\Model;

/**
 * 抽奖记录模型
 * Class LuckDrawRecord
 * @package app\common\model
 */
class LuckdrawRecord extends Model
{
    // 关联用户模型
    public function user()
    {
        return $this->hasOne('user', 'id', 'user_id')
            ->field('id,sn,nickname,avatar,level,mobile,sex,create_time');
    }

    public function getCreateTimeAttr($value)
    {
        return date('Y-m-d H:i:s', $value);
    }


    public function getSendDescAttr($value, $data)
    {
        return $data['is_send'] ? '已发放' : '未发放';
    }


    public function getPrizeNameAttr($value, $data)
    {
        return Luckdraw::getPrizeNameDesc($data['prize_type'], $data['number']);
    }
}