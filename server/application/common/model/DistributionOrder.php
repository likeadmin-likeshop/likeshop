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


    /**
     * Notes: 更新指定分佣订单状态
     * @param $distribution_id
     * @param $status
     * @author 段誉(2021/4/23 10:10)
     * @return DistributionOrder
     */
    public static function updateOrderStatus($distribution_id, $status)
    {
        return self::where('id', $distribution_id)
            ->update([
                'status' => $status,
                'update_time' => time()
            ]);
    }


    //用户
    public function user()
    {
        return $this->hasOne('user', 'id', 'user_id')
            ->field('id,sn,nickname,avatar,level,mobile,sex,create_time');
    }

}