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


use app\admin\model\Coupon;
use think\Model;

class Luckdraw extends Model
{

    //计费方式
    const PRIZE_INTEGRAL = 1; //积分
    const PRIZE_NOT_WIN = 2; // 谢谢惠顾
    const PRIZE_COUPON = 3; //优惠券
    const PRIZE_BALANCE = 4;//按件计费


    public function getPrizeNameAttr($value, $data)
    {
        return self::getPrizeNameDesc($data['prize_type'], $data['number']);
    }


    public static function getPrizeNameDesc($type, $number)
    {
        switch ($type) {
            case self::PRIZE_INTEGRAL:
                $str = $number.'积分';
                break;
            case self::PRIZE_COUPON:
                $coupon = Coupon::where('id', $number)->value('name');
                $str = $coupon;
                break;
            case self::PRIZE_BALANCE:
                $str = $number.'元';
                break;
            default:
                $str = '谢谢惠顾';
        }
        return $str;
    }

    /**
     * @notes 获取奖品描述
     * @param $type
     * @return string|string[]
     * @author 段誉
     * @date 2022/2/15 10:24
     */
    public static function getPrizeDesc($type)
    {
        $data = [
            self::PRIZE_INTEGRAL => '积分',
            self::PRIZE_NOT_WIN => '谢谢惠顾',
            self::PRIZE_COUPON => '优惠券',
            self::PRIZE_BALANCE => '余额',
        ];

        if ($type === true) {
            return $data;
        }

        return $data[$type] ?? '';
    }

}