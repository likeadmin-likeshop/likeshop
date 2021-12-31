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

namespace app\common\behavior;

use app\common\model\Footprint as FootprintModel;
use app\common\model\FootprintRecord as FootprintRecordModel;
use app\common\server\ConfigServer;
use think\Db;

/**
 * 足迹记录
 * Class Footprint
 * @package app\common\behavior
 */
class Footprint
{
    public function run($params)
    {
        try {
            // 全局气泡开关
            $footprint_status = ConfigServer::get('footprint', 'footprint_status', 1);
            if (!$footprint_status) return;
            // 判断某个气泡功能是否开启
            if ($this->getFootPrintIsAllowByType($params['type'])) {
                $this->record($params);
            }
        } catch (\Exception $e) {}
    }

    // 记录足迹逻辑
    private function record($params)
    {
        // 获取参数(主要参数: type, user_id, goods_id[可能不存在])
        if (empty($params['type']) || !$params['type']) return;
        if (empty($params['user_id']) || !$params['user_id']) return;

        switch ($params['type']) {
            case FootprintModel::enter_mall:   //进入商城(30分钟内没记录才记录)
                if(!FootprintRecordModel::getFootPrintOneHourInner($params)) {
                    $tpl = '访问了商城';
                    FootprintRecordModel::add($params, $tpl);
                }
                break;
            case FootprintModel::browse_goods: //浏览商品(30分钟内没记录才记录)
                if(!FootprintRecordModel::getFootPrintOneHourInner($params)) {
                    $tpl = '正在浏览'.$this->getGoodsName($params['foreign_id']);
                    FootprintRecordModel::add($params, $tpl);
                }
                break;
            case FootprintModel::add_cart: //加入购物车
                $tpl = '正在购买'.$this->getGoodsName($params['foreign_id']);
                FootprintRecordModel::add($params, $tpl);
                break;
            case FootprintModel::receive_coupon: //领取优惠券
                $tpl = '正在领取'.$this->getCouponName($params['foreign_id']).'优惠券';
                FootprintRecordModel::add($params, $tpl);
                break;
            case FootprintModel::place_order:    //下单结算
                $tpl = '成功下单'.$params['total_money'];
                FootprintRecordModel::add($params, $tpl);
                break;
        }
    }

    // 获取商品名称
    private function getGoodsName($goods_id)
    {
        $goods = Db::name('goods')->where(['id'=>(int)$goods_id])
            ->field('id,name')->find();
        if ($goods) {
            if (mb_strlen($goods['name']) > 6) {
                return mb_substr($goods['name'], 0, 6). '**';
            }
            return $goods['nickname'];
        }
        return '';
    }

    // 获取优惠券名称
    private function getCouponName($coupon_id)
    {
        $coupon = Db::name('coupon')->where(['id'=>(int)$coupon_id])
            ->field('id,name')->find();
        return $coupon ? $coupon['name'] : '';
    }

    // 获取足迹模板(是否允许使用)
    public function getFootPrintIsAllowByType($type)
    {
        $model = Db::name('footprint')->where(['type'=>(int)$type])->find();
        if ($model and $model['status']) {
            return true;
        }
        return false;
    }
}