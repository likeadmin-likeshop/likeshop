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
// | Author: LikeShopTeam-张无忌
// +----------------------------------------------------------------------

namespace app\common\behavior;

use app\common\model\Footprint as FootprintModel;
use app\common\model\FootprintRecord as FootprintRecordModel;
/**
 * 足迹记录
 * Class Footprint
 * @package app\common\behavior
 */
class Footprint
{
    public function run($params)
    {
        $this->record($params);
    }

    private function record($params)
    {
        // 获取参数(主要参数: type, user_id, goods_id[可能不存在])
        if (empty($params['type']) || !$params['type']) return;
        if (empty($params['user_id']) || !$params['user_id']) return;

        switch ($params['type']) {
            case FootprintModel::enter_mall:   //进入商城
            case FootprintModel::browse_goods: //浏览商品
                $result = FootprintRecordModel::getFootPrintOneHourInner($params['type']);
                if (!$result) FootprintRecordModel::add($params);
                break;
            case FootprintModel::add_cart:       //加入购物车
            case FootprintModel::receive_coupon: //领取优惠券
            case FootprintModel::place_order:    //下单结算
                FootprintRecordModel::add($params);
                break;
        }
    }
}