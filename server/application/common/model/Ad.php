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
use think\Model;

class Ad extends Model{
    const H5 = 1;
    const MNP = 2;
    const APP = 3;

    public static function getAdTypeDesc($from){
        $desc = [
            self::H5    => 'H5商场',
            self::MNP   => '微信小程序',
            self::APP   => 'app',
        ];
        if($from === true){
            return $desc;
        }
        return $desc[$from] ?? '';
    }

    public static function getLinkPage($type){
        $page = [
            self::H5    => [
                [
                    'name'      => '商品分类',
                    'path'      => '/index/sort',
                ],
                [
                    'name'      => '领券中心',
                    'path'      => '/home/couponcenter',
                ],
                [
                    'name'      => '店铺街',
                    'path'      => '/home/shopstreet',
                ],
                [
                    'name'      => '个人中心',
                    'path'      => '/index/user',
                ],
            ],
            self::MNP   => [
                [
                    'name'      => '商品分类',
                    'path'      => '/pages/sort/sort',
                    'is_tab'    => 1,
                ],
                [
                    'name'      => '领券中心',
                    'path'      => '/pages/user_getcoupon/user_getcoupon',
                    'is_tab'    => 0,
                ],
                [
                    'name'      => '店铺街',
                    'path'      => '/pages/shop_street/shop_street',
                    'is_tab'    => 0,
                ],
                [
                    'name'      => '个人中心',
                    'path'      => '/pages/user/user',
                    'is_tab'    => 1,
                ],
            ],
            self::APP   => [
                [
                    'name'      => '商品分类',
                    'path'      => 'Classify',
                ],
                [
                    'name'      => '领券中心',
                    'path'      => 'CouponCenter',
                ],
                [
                    'name'      => '店铺街',
                    'path'      => 'ShopStreet',
                ],
                [
                    'name'      => '个人中心',
                    'path'      => 'Mine',
                ],
            ],
        ];
        if($type === true){
            return $page[$type];
        }
        return $page[$type] ?? [];
    }

    /*
     * @notes 获取页面路径
     * @param 广告类型
     * @param 链接类型
     */
    public static function getLinkPath($ad_type,$link_type){
        $link_list = self::getLinkPage($ad_type);
        return $link_list[$link_type] ?? '';
    }
    public static function getGoodsPath($from){
        $desc = [
            self::H5    => '/common/goodsdetail',
            self::MNP   => '/pages/goods_details/goods_details',
            self::APP   => 'GoodsDetail',
        ];
        if($from === true){
            return $desc;
        }
        return $desc[$from] ?? '';

    }


}