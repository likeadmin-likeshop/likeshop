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

/**
 * 微信/公众号的消息模板场景
 * Class MessageScene_
 * @package app\common\model
 */
class MessageScene_
{
    const BUY_SUCCESS           = 1; //购买成功通知
    const DELIVER_GOODS_SUCCESS = 2; //商品发货通知
    const REFUND_SUCCESS        = 3; //退款成功通知

    function getName($value)
    {
        $name = '';
        switch ($value) {
            case self::BUY_SUCCESS:
                $name = '购买成功通知';
                break;
            case self::DELIVER_GOODS_SUCCESS:
                $name = '商品发货通知';
                break;
            case self::REFUND_SUCCESS:
                $name = '退款成功通知';
                break;
        }
        return $name;
    }
}