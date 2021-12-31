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


namespace app\common\server;




use app\common\model\Client_;
use app\common\model\Pay;
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
     * 根据不同来源获取支付配置
     */
    public static function getPayConfigBySource($order_source)
    {
        $notify_url = '';
        switch ($order_source) {
            case Client_::mnp:
                $notify_url = url('payment/notifyMnp', '', '', true);
                break;
            case Client_::oa:
            case Client_::pc:
            case Client_::h5:
                $notify_url = url('payment/notifyOa', '', '', true);
                break;
            case Client_::android:
            case Client_::ios:
                $notify_url = url('payment/notifyApp', '', '', true);
                break;
        }

        $config = self::getPayConfig($order_source);

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








    //===================================支付配置=======================================================

    //微信支付设置 H5支付 appid 可以是公众号appid
    public static function getPayConfig($client)
    {
        switch ($client) {
            case Client_::mnp:
                $appid = ConfigServer::get('mnp', 'app_id');
                $secret = ConfigServer::get('mnp', 'secret');
                break;
            case Client_::oa:
            case Client_::pc:
            case Client_::h5:
                $appid = ConfigServer::get('oa', 'app_id');
                $secret = ConfigServer::get('oa', 'secret');
                break;
            case Client_::android:
            case Client_::ios:
                $appid = ConfigServer::get('op', 'app_id');
                $secret = ConfigServer::get('op', 'secret');
                break;
            default:
                $appid = '';
                $secret = '';
        }

        $pay = Pay::where(['code' => 'wechat'])->find()->toArray();

        $config = [
            'app_id' => $appid,
            'secret' => $secret,
            'mch_id' => $pay['config']['mch_id'] ?? '',
            'key' => $pay['config']['pay_sign_key'] ?? '',
            'cert_path' => $pay['config']['apiclient_cert'] ?? '',
            'key_path' => $pay['config']['apiclient_key'] ?? '',
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => '../runtime/log/wechat.log'
            ],
        ];

        if (is_cli()) {
            $config['cert_path'] = ROOT_PATH.'/public/'.$pay['config']['apiclient_cert'];
            $config['key_path'] = ROOT_PATH.'/public/'.$pay['config']['apiclient_key'];
        }

        return $config;
    }

}