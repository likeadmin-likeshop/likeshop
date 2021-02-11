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

namespace app\api\logic;

use app\common\model\Freight;
use think\Db;

/**
 * 运费逻辑
 * Class FreightLogic
 * @package app\api\logic
 */
class FreightLogic
{

    /**
     * User: 意象信息科技 mjf
     * Desc: 计算运费
     * @param $goods
     * @param $user_address
     * @return float|int
     */
    public static function calculateFreight($goods, $user_address)
    {
        $shipping_price = 0;
        $template_list = [];

        if (empty($user_address)){
            return $shipping_price;
        }

        foreach ($goods as $good){
            //统一邮费
            if ($good['free_shipping_type'] == 2){
                $shipping_price += round($good['free_shipping'] * $good['goods_num'], 2);
            }

            //指定运费模板
            if ($good['free_shipping_type'] == 3 && $good['free_shipping_template_id'] > 0){
                $template_list[$good['free_shipping_template_id']][] = $good;
            }
        }

        foreach ($template_list as $template_id => $template_goods) {
            $temp = [];
            $temp['template_id'] = $template_id;
            $temp['total_volume'] = 0;
            $temp['total_weight'] = 0;
            $temp['goods_num'] = 0;
            foreach ($template_goods as $template_good) {
                $temp['total_volume'] += $template_good['volume'] * $template_good['goods_num'];
                $temp['total_weight'] += $template_good['weight'] * $template_good['goods_num'];
                $temp['goods_num'] += $template_good['goods_num'];
            }
            $shipping_price += self::calculate($temp, $user_address);
        }

        return $shipping_price;
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 计算运费
     * @param $data
     * @param $user_address
     * @return float|int
     */
    public static function calculate($data, $user_address)
    {
        $shipping_price = 0;

        $freight = FreightLogic::getFreightsByAddress($data['template_id'], $user_address);

        if (empty($freight)){
            return $shipping_price;
        }
        $unit = 0;
        //按重量计算
        if ($freight['charge_way'] == Freight::CHARGE_WAY_WEIGHT){
            $unit = $data['total_weight'];
        }

        //按件数计算
        if ($freight['charge_way'] == Freight::CHARGE_WAY_PIECE){
            $unit = $data['goods_num'];
        }

        //按体积计算
        if ($freight['charge_way'] == Freight::CHARGE_WAY_VOLUME){
            $unit = $data['total_volume'];
        }

        if($unit > $freight['first_unit'] && $freight['continue_unit'] > 0){
            $left = ceil(($unit - $freight['first_unit']) / $freight['continue_unit']);//取整
            return $freight['first_money'] + $left * $freight['continue_money'];
        }else{
            return $freight['first_money'];
        }
    }



    /**
     * User: 意象信息科技 mjf
     * Desc: 通过用户地址获取运费模板
     * @param $address
     */
    public static function getFreightsByAddress($template_id, $address)
    {
        $district_id = $address['district_id'];
        $city_id = $address['city_id'];
        $province_id = $address['province_id'];

        $freights = Db::name('freight')->alias('f')
            ->join('freight_config c', 'c.freight_id = f.id')
            ->where('f.id', $template_id)
            ->order(['f.id' => 'desc', 'c.id' => 'desc'])
            ->select();

        foreach ($freights as $freight) {
            $region_ids = explode(',', $freight['region']);
            if (in_array($district_id, $region_ids)) {
                return $freight;
            }

            if (in_array($city_id, $region_ids)) {
                return $freight;
            }

            if (in_array($province_id, $region_ids)) {
                return $freight;
            }

            if ($freight['region'] = 'all'){
                $national_freight = $freight;
            }
        }

        //会员的省市区id在商家的运费模板(指定地区)中找不到,查一下商家的全国运费模板
        return $national_freight;
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 模板中指定地区id是否存在
     * @param $freights
     * @param $region_id
     * @return bool|mixed
     */
    public static function isExistRegionId($freights, $region_id)
    {
        foreach ($freights as $freight) {
            $region_ids = explode(',', $freight['region']);
            if (in_array($region_id, $region_ids)) {
                return $freight;
            }
        }
        return false;
    }
}