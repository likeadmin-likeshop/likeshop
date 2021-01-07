<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\common\model;

use think\Model;

class Withdraw extends Model
{

    //提现类型
    const TYPE_BALANCE = 1;//提现到余额
    const TYPE_WECHAT = 2;//提现到微信
    const TYPE_ALI = 3;//提现到支付宝


    //提现状态
    const STATUS_WAIT_AUDIT = 0;//待审核
    const STATUS_AUDIT_SUCCESS = 1;//审核通过
    const STATUS_AUDIT_ERROR  = 2;//审核拒绝

    //提现状态
    public static function getStatusDesc($status = true)
    {
        $desc = [
            self::STATUS_WAIT_AUDIT => '待审核',
            self::STATUS_AUDIT_SUCCESS => '审核通过',
            self::STATUS_AUDIT_ERROR => '审核拒绝',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '';
    }

    //提现类型
    public static function getTypeDesc($status = true)
    {
        $desc = [
            self::TYPE_BALANCE => '余额',
            self::TYPE_WECHAT => '微信',
            self::TYPE_ALI => '支付宝',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '';
    }
}