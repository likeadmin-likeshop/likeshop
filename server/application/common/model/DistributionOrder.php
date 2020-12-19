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
 * 分销订单
 * Class DistributionOrder
 * @package app\common\model
 */
class DistributionOrder extends Model
{
    protected $name = 'distribution_order_goods';

    //分销订单状态
    const STATUS_WAIT_HANDLE = 1;//待返佣
    const STATUS_SUCCESS = 2;//已结算
    const STATUS_ERROR = 3;//已失效


    //分销订单状态
    public static function getOrderStatus($status = true)
    {
        $desc = [
            self::STATUS_WAIT_HANDLE => '待返佣',
            self::STATUS_SUCCESS => '已结算',
            self::STATUS_ERROR => '已失效',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '未知';
    }
}