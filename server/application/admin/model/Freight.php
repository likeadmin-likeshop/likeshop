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

namespace app\admin\model;

use think\Model;

class Freight extends Model
{
    protected $name = 'freight';

    protected $autoWriteTimestamp = true;

    //配送地区类型
    const TYPE_ALL = 0;//全国
    const TYPE_SPEC = 1;//指定地区


    //能否设置全国模板
    const ABLE_SET = 1;//能设置
    const UNABLE_SET = 2;//不能设置


    //计费方式
    const CHARGE_WAY_WEIGHT = 1;//按重量计费
    const CHARGE_WAY_VOLUME = 2; //体积计费
    const CHARGE_WAY_PIECE = 3;//按件计费


    public static function getChargeWay($type)
    {
        $data = [
            self::CHARGE_WAY_WEIGHT => '按重量计费',
            self::CHARGE_WAY_VOLUME => '按体积计费',
            self::CHARGE_WAY_PIECE => '按件计费',
        ];

        if ($type === true) {
            return $data;
        }

        return $data[$type] ?? '未知';
    }

    public function getChargeWayTextAttr($value, $data)
    {
        return self::getChargeWay($data['charge_way']);
    }


    public function configs()
    {
        return $this->hasMany('freight_config', 'freight_id', 'id');
    }

}