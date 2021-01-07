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

namespace app\admin\logic;

use think\Db;

class PayConfigLogic
{

    public static function lists($get)
    {
        $lists = DB::name('dev_pay');
        $list = $lists->select();
        $count = $lists->count();
        foreach ($list as &$item) {
            if ($item['pay_use'] == 1) {
                $item['pay_use'] = '启用';
            } else if ($item['pay_use'] == 0) {
                $item['pay_use'] = '关闭';
            }
        }

        return ['list' => $list, 'count' => $count];
    }

    /**
     *余额支付
     */
    public static function editBalancePayConfig($post)
    {
        $data = ['pay_use' => $post['pay_use']];
        return db::name('dev_pay')->where('name', '余额支付')->update($data);
    }

    /**
     *货到付款
     */
    public static function editHandPayConfig($post)
    {
        $data = ['pay_use' => $post['pay_use']];
        return db::name('dev_pay')->where('name', '货到付款')->update($data);
    }

    /**
     *公众号
     */
    public static function editOfficialPayConfig($post)
    {

        $data = ['pay_use' => $post['pay_use']
            , 'app_id' => $post['app_id']
            , 'app_secrect' => $post['app_secrect']
            , 'pay_sign_key' => $post['pay_sign_key']
            , 'mch_id' => $post['mch_id']
            , 'apiclient_cert' => $post['apiclient_cert']
            , 'apiclient_key' => $post['apiclient_key']
        ];
        return db::name('dev_pay')->where('name', '微信公众号支付')->update($data);
    }

    /**
     *小程序
     */
    public static function editAppletPayConfig($post)
    {

        $data = ['pay_use' => $post['pay_use']
            , 'app_id' => $post['app_id']
            , 'app_secrect' => $post['app_secrect']
            , 'pay_sign_key' => $post['pay_sign_key']
            , 'mch_id' => $post['mch_id']
            , 'apiclient_cert' => $post['apiclient_cert']
            , 'apiclient_key' => $post['apiclient_key']
        ];
        return db::name('dev_pay')->where('name', '微信小程序支付')->update($data);
    }

    /**
     *支付宝
     */
    public static function editAlipayPayConfig($post)
    {
        $data = ['pay_use' => $post['pay_use']
            , 'api_id' => $post['api_id']
            , 'private_key' => $post['private_key']
            , 'public_key' => $post['public_key']
            , 'alipay_public_key' => $post['alipay_public_key']
        ];
        return db::name('dev_pay')->where('name', '支付宝APP支付')->update($data);
    }

    /**
     *App
     */
    public static function editApp($post)
    {
        $data = ['pay_use' => $post['pay_use']
            , 'app_id' => $post['app_id']
            , 'app_secrect' => $post['app_secrect']
            , 'pay_sign_key' => $post['pay_sign_key']
            , 'mch_id' => $post['mch_id']
            , 'apiclient_cert' => $post['apiclient_cert']
            , 'apiclient_key' => $post['apiclient_key']
        ];
        return db::name('dev_pay')->where('type', 5)->update($data);
    }


}