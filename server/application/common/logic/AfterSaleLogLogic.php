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

namespace app\common\logic;

use app\common\model\AfterSaleLog;

/**
 * 售后记录日志
 * Class AfterSaleLogLogic
 * @package app\common\logic
 */
class AfterSaleLogLogic
{
    public static function record($type, $channel, $order_id, $after_sale_id, $handle_id, $content, $desc = '')
    {
        if (empty($content)) {
            return true;
        }
        $log = new AfterSaleLog();
        $log->type = $type;
        $log->channel = $channel;
        $log->order_id = $order_id;
        $log->after_sale_id = $after_sale_id;
        $log->handle_id = $handle_id;
        $log->content = AfterSaleLog::getLogDesc($content);
        $log->create_time = time();

        if ($desc != ''){
            $log->content = AfterSaleLog::getLogDesc($content).'('.$desc.')';
        }

        $log->save();
    }
}