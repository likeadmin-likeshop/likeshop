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