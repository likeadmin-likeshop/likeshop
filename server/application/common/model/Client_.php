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


class Client_
{
    const mnp = 1;
    const h5 = 2;
    const ios = 3;
    const android = 4;

    function getName($value)
    {
        switch ($value) {
            case self::mnp:
                $name = '小程序';
                break;
            case self::h5:
                $name = 'h5';
                break;
            case self::ios:
                $name = '苹果';
                break;
            case self::android:
                $name = '安卓';
                break;
        }
        return $name;
    }

    public static function getClient($type = true)
    {
        $desc = [
            self::mnp => '小程序商城',
            self::h5 => 'h5商城',
            self::ios => '苹果APP',
            self::android => '安卓APP',
        ];
        if ($type === true) {
            return $desc;
        }
        return $desc[$type] ?? '未知';
    }
}