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
class Menu_{
    /*
     * 首页菜单
     */
    const index_seckill             = 1;
    const index_team_activity       = 2;
    const index_hot_sell            = 3;
    const index_coupon_list         = 4;
    const index_sign_in             = 5;
    const index_member_centre       = 6;
    const index_my_collect          = 7;
    const index_store_news          = 8;
    const index_store_help          = 9;
    const index_delivery_address    = 10;
    const index_goods_category      = 11;
    /*
     * 个人中心菜单
     */
    const centre_my_wallet        = 10;
    const centre_generalize       = 11;
    const centre_my_coupon        = 12;
    const centre_level_serve      = 13;
    const centre_store_help       = 14;
    const centre_delivery_address = 15;
    const centre_my_collect       = 16;
    const centre_service          = 17;

    public static function getMenuContent($scene = true,$from = true){
        $config1 = [
            self::index_seckill            => [
                'name'          => '限时秒杀',
                'link'          => [
                      'link1' => '/pages/goods_seckill/goods_seckill',  //小程序
                      'link2' => '/home/goodsSeckill',                  //H5
                      'link3' => 'SeckillActivity',                     //APP
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_team_activity      => [
                'name'          => '拼团活动',
                'link'          => [
                    'link1' => '/pages/goods_combination/goods_combination',
                    'link2' => '/home/goodsCombination',
                    'link3' => 'GoodsCombin',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_hot_sell           => [
                'name'          => '热销榜单',
                'link'          => [
                    'link1' => '/pages/hot_list/hot_list',
                    'link2' => '/home/hotList',
                    'link3' => 'HotList',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_coupon_list        => [
                'name'          => '领券中心',
                'link'          => [
                    'link1' => '/pages/user_getcoupon/user_getcoupon',
                    'link2' => '/home/couponCenter',
                    'link3' => 'CouponCenter',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_sign_in            => [
                'name'          => '积分签到',
                'link'          => [
                    'link1' => '/pages/user_sign/user_sign',
                    'link2' => '/common/signUp',
                    'link3' => 'UserSign',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_member_centre      => [
                'name'          => '会员中心',
                'link'          => [
                    'link1' => '/pages/user_vip/user_vip',
                    'link2' => '/user/userVip',
                    'link3' => 'UserMember',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_my_collect         => [
                'name'          => '我的收藏',
                'link'          => [
                    'link1' => '/pages/user_collection/user_collection',
                    'link2' => '/user/userCollection',
                    'link3' => 'UserCollection',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_store_news         => [
                'name'          => '商城资讯',
                'link'          => [
                    'link1' => '/pages/news_list/news_list',
                    'link2' => '/common/newsCenter',
                    'link3' => 'NewsList',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_store_help         => [
                'name'          => '帮助中心',
                'link'          => [
                    'link1' => '/pages/news_list/news_list?type=1',
                    'link2' => '/common/newsCenter?type=1',
                    'link3' => 'NewsList?type=1',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_delivery_address   => [
                'name'          => '收货地址',
                'link'          => [
                    'link1' => '/pages/user_address/user_address',
                    'link2' => '/user/userAddress',
                    'link3' => 'UserAddress',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::index_goods_category     => [
                'name'          => '商品分类',
                'link'          => [
                    'link1' => '/pages/sort/sort',
                    'link2' => '/index/sort',
                    'link3' => 'Classify',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
        ];//首页菜单
        $config2 = [
            self::centre_my_wallet         => [
                'name'          => '我的钱包',
                'link'          => [
                    'link1' => '/pages/user_wallet/user_wallet',
                    'link2' => '/user/userWallet',
                    'link3' => 'UserWallet',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_generalize        => [
                'name'          => '分销推广',
                'link'          => [
                    'link1' => '/pages/user_spread/user_spread',
                    'link2' => '/user/userPromote',
                    'link3' => 'UserPromotion',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_my_coupon         => [
                'name'          => '我的优惠券',
                'link'          => [
                    'link1' => '/pages/user_coupon/user_coupon',
                    'link2' => '/user/userCoupon',
                    'link3' => 'UserCoupon',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_level_serve        => [
                'name'          => '等级服务',
                'link'          => [
                    'link1' => '/pages/user_vip/user_vip',
                    'link2' => '/user/userVip',
                    'link3' => 'UserMember',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_store_help         => [
                'name'          => '帮助中心',
                'link'          => [
                    'link1' => '/pages/news_list/news_list?type=1',
                    'link2' => '/common/newsCenter?type=1',
                    'link3' => 'NewsList?type=1',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_delivery_address   => [
                'name'          => '收货地址',
                'link'          => [
                    'link1' => '/pages/user_address/user_address',
                    'link2' => '/user/userAddress',
                    'link3' => 'UserAddress',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_my_collect         => [
                'name'          => '我的收藏',
                'link'          => [
                    'link1' => '/pages/user_collection/user_collection',
                    'link2' => '/user/userCollection',
                    'link3' => 'UserCollection',
                ],
                'is_tab'        => 0,
                'type'          => 1,
            ],
            self::centre_service            => [
                'name'          => '联系客服',
                'link'          => [
                    'link1' => '',
                    'link2' => '/user/contactOffical',
                    'link3' => 'ContactService',
                ],
                'is_tab'        => 0,
                'type'          => 3,
            ],
        ];//个人中心
        $config_name = 'config'.$scene;
        $content = $$config_name;
        if($scene === true){
            $content = array_merge($config1,$config2);
        }
        if($from === true){
            return $content;
        }
        return $content[$from] ?? [];
    }



}