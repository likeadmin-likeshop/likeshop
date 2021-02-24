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


namespace app\common\server;




use app\common\model\Client_;
use think\Db;
use think\Exception;

class WeChatServer
{
    /**
     * 获取小程序配置
     * @return array
     */
    public static function getMnpConfig()
    {
        $config = [
            'app_id' => ConfigServer::get('mnp', 'app_id'),
            'secret' => ConfigServer::get('mnp', 'secret' ),
            'mch_id' => ConfigServer::get('mnp', 'mch_id'),
            'key' => ConfigServer::get('mnp', 'key'),
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];
        return $config;
    }

    /**
     * 获取微信公众号配置
     * @return array
     */
    public static function getOaConfig()
    {
        $config = [
            'app_id' => ConfigServer::get('oa', 'app_id'),
            'secret' => ConfigServer::get('oa', 'secret'),
            'mch_id' => ConfigServer::get('oa', 'mch_id'),
            'key' => ConfigServer::get('oa', 'key'),
            'token' => ConfigServer::get('oa', 'token',''),
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];
        return $config;
    }

    /**
     * 获取微信开放平台应用配置
     * @return array
     */
    public static function getOpConfig()
    {
        $config = [
            'app_id' => ConfigServer::get('op', 'app_id'),
            'secret' => ConfigServer::get('op', 'secret'),
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];
        return $config;
    }


    /**
     * 获取小程序支付配置
     * @return array
     */
    public static function getMnpPayConfig()
    {
        $pay = Db::name('dev_pay')->where(['type' => 3])->find();

        if (empty($pay)){
            return [];
        }

        $config = [
            'app_id' => $pay['app_id'],
            'secret' => $pay['app_secrect'],
            'mch_id' => $pay['mch_id'],
            'key' => $pay['pay_sign_key'],
            'cert_path' => $pay['apiclient_cert'],
            'key_path' => $pay['apiclient_key'],
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];
        return $config;
    }


    /**
     * 获取公众号支付配置
     * @return array
     */
    public static function getOaPayConfig()
    {
        $pay = Db::name('dev_pay')->where(['type' => 2])->find();

        if (empty($pay)){
            return [];
        }

        $config = [
            'app_id' => $pay['app_id'],
            'secret' => $pay['app_secrect'],
            'mch_id' => $pay['mch_id'],
            'key' => $pay['pay_sign_key'],
            'cert_path' => $pay['apiclient_cert'],
            'key_path' => $pay['apiclient_key'],
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];
        return $config;
    }


    /**
     * 获取app支付配置
     * @return array
     */
    public static function getOpPayConfig()
    {
        $pay = Db::name('dev_pay')->where(['type' => 5])->find();

        if (empty($pay)){
            return [];
        }

        $config = [
            'app_id' => $pay['app_id'],
            'secret' => $pay['app_secrect'],
            'mch_id' => $pay['mch_id'],
            'key' => $pay['pay_sign_key'],
            'cert_path' => $pay['apiclient_cert'],
            'key_path' => $pay['apiclient_key'],
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];
        return $config;
    }


    /**
     * 根据不同来源获取支付配置
     */

    //获取支付配置
    public static function getPayConfigBySource($order_source)
    {
        $config = [];
        $notify_url = '';
        switch ($order_source) {
            case Client_::mnp:
                $config = self::getMnpPayConfig();
                $notify_url = url('payment/notifyMnp', '', '', true);
                break;
            case Client_::h5:
                $config = self::getOaPayConfig();
                $notify_url = url('payment/notifyOp', '', '', true);
                break;
            case Client_::android:
            case Client_::ios:
                $config = self::getOpPayConfig();
                $notify_url = url('payment/notifyApp', '', '', true);
                break;
        }

        if (empty($config) ||
            empty($config['key']) ||
            empty($config['mch_id']) ||
            empty($config['app_id']) ||
            empty($config['secret'])
        ) {
            throw new Exception('请在后台配置好微信支付');
        }

        return [
            'config'        => $config,
            'notify_url'    => $notify_url,
        ];
    }
}