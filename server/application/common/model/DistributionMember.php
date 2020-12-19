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

namespace app\common\model;


use think\Model;

/**
 * 分销会员
 * Class DistributionMember
 * @package app\common\model
 */
class DistributionMember extends Model
{
    protected $name = 'distribution_member_apply';

    //分销会员申请状态
    const STATUS_WAIT_AUDIT = 0;     //待审核
    const STATUS_AUDIT_SUCCESS = 1;  //审核通过
    const STATUS_AUDIT_ERROR = 2;   //审核拒绝


    //分销会员申请状态
    public static function getApplyStatus($status = true)
    {
        $desc = [
            self::STATUS_WAIT_AUDIT => '待审核',
            self::STATUS_AUDIT_SUCCESS => '审核通过',
            self::STATUS_AUDIT_ERROR => '审核拒绝',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '未知';
    }
}