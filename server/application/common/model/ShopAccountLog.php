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
use think\Model;

class ShopAccountLog extends Model{
    const ORDER_SETTLE = 100;           //店铺结算
    const WITHDRAW_AUDIT = 200;         //店铺提现
    const WITHDRAW_REFUSE = 201;        //店铺提现拒绝


    public static function getSourceTypeDesc($from){
        $desc = [
            self::ORDER_SETTLE      => '店铺结算',
            self::WITHDRAW_AUDIT    => '店铺提现',
            self::WITHDRAW_REFUSE   => '店铺提现拒绝',
        ];
        if($from === true){
            return $desc;
        }
        return $desc[$from] ?? '账户变动';
    }

    public static function getRemarkDesc($from,$source_sn,$remark){
        $desc = [
            self::ORDER_SETTLE      => '结算单号：'.$source_sn,
            self::WITHDRAW_AUDIT    => '提现单号：'.$source_sn,
        ];
        return $desc[$from] ?? $remark;
    }
}