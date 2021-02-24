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


use app\common\logic\PaymentLogic;
use app\common\logic\PayNotifyLogic;
use app\common\model\Client_;
use app\common\model\Pay;
use EasyWeChat\Factory;
use EasyWeChat\Payment\Application;
use think\Db;
use think\Exception;

class WeChatPayServer
{

    protected static $error = '未知错误';
    protected static $return_code = 0;

    /**
     * Notes: 错误信息
     * @return string
     * @author 段誉(2021/2/1 11:19)
     */
    public static function getError()
    {
        return self::$error;
    }

    /**
     * Notes: 返回状态码
     * @return int
     * @author 段誉(2021/2/1 11:19)
     */
    public static function getReturnCode()
    {
        return self::$return_code;
    }


    /**
     * Notes: 微信统一下单
     * @param $from
     * @param $order
     * @param $order_source
     * @return array|bool|string
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @author 段誉(2021/2/1 11:19)
     */
    public static function unifiedOrder($from, $order, $order_source)
    {
        try {
            $wechat_config = self::getWeChatConfig($order, $order_source);
            $auth = $wechat_config['auth'];
            $config = $wechat_config['config'];
            $notify_url = $wechat_config['notify_url'];

            //app支付不需要openid,其他需要openID
            $app_source = [Client_::ios, Client_::android];
            if (!$auth && !in_array($order_source, $app_source)) {
                throw new Exception('授权信息失效');
            }

            $app = Factory::payment($config);
            $attributes = self::getAttributes($from, $order, $order_source, $auth, $notify_url);
            $result = $app->order->unify($attributes);

            if ($result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS') {
                if (in_array($order_source, $app_source)) {
                    $data = $app->jssdk->appConfig($result['prepay_id'], false);
                } else {
                    $data = $app->jssdk->bridgeConfig($result['prepay_id'], false);
                }
                return $data;
            } else {
                if (isset($result['return_code']) && $result['return_code'] == 'FAIL') {
                    throw new Exception($result['return_msg']);
                }
                if (isset($result['err_code_des'])) {
                    throw new Exception($result['err_code_des']);
                }
                throw new Exception('未知原因');
            }

        } catch (Exception $e) {
            self::$error = '支付失败:' . $e->getMessage();
            return false;
        }
    }


    /**
     * Notes: 支付参数
     * @param $from
     * @param $order
     * @param $order_source
     * @param $auth
     * @param $notify_url
     * @author 段誉(2021/2/24 10:15)
     * @return array
     */
    public static function getAttributes($from, $order, $order_source, $auth, $notify_url)
    {
        switch ($from) {
            case 'order':
                $attributes = [
                    'trade_type' => 'JSAPI',
                    'body' => '商品',
                    'out_trade_no' => $order['order_sn'],
                    'total_fee' => $order['order_amount'] * 100, // 单位：分
                    'notify_url' => $notify_url,
                    'openid' => $auth['openid'],
                    'attach' => 'order'
                ];
                break;
            case 'recharge':
                $attributes = [
                    'trade_type' => 'JSAPI',
                    'body' => '充值',
                    'out_trade_no' => $order['order_sn'],
                    'total_fee' => $order['order_amount'] * 100, // 单位：分
                    'notify_url' => $notify_url,
                    'openid' => $auth['openid'],
                    'attach' => 'recharge'
                ];
                break;
        }

        //app支付类型
        if ($order_source == Client_::android || $order_source == Client_::ios) {
            $attributes['trade_type'] = 'APP';
        }

        //在白名单内,一分钱
        if (PaymentLogic::isPayWhiteList($order['user_id'])){
            $attributes['total_fee'] = 1;
        }

        return $attributes;
    }


    /**
     * Notes: 获取微信配置
     * @param $order
     * @param $order_source
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author 段誉(2021/2/1 11:20)
     */
    public static function getWeChatConfig($order, $order_source)
    {
        $pay_config = WeChatServer::getPayConfigBySource($order_source);

        $where[] = ['user_id', '=', $order['user_id']];
        $where[] = ['client', '=', $order_source];
        $auth = Db::name('user_auth')->where($where)->find();

        $data = [
            'auth'          => $auth,
            'config'        => $pay_config['config'],
            'notify_url'    => $pay_config['notify_url'],
            'order_source'  => $order_source,
        ];
        return $data;
    }



    /**
     * Notes: 支付回调
     * @param $config
     * @author 段誉(2021/2/24 10:02)
     * @throws \EasyWeChat\Kernel\Exceptions\Exception
     */
    public static function notify($config)
    {
        $app = new Application($config);
        $response = $app->handlePaidNotify(function ($message, $fail) {

            if ($message['return_code'] !== 'SUCCESS') {
                return $fail('通信失败');
            }

            // 用户是否支付成功
            if ($message['result_code'] === 'SUCCESS') {
                $extra['transaction_id'] = $message['transaction_id'];
                $attach = $message['attach'];
                switch ($attach) {
                    case 'order':
                        $order = Db::name('order')->where(['order_sn' => $message['out_trade_no']])->find();
                        if (!$order || $order['pay_status'] >= Pay::ISPAID) {
                            return true;
                        }
                        PayNotifyLogic::handle('order', $message['out_trade_no'], $extra);
                        break;

                    case 'recharge':
                        $order = Db::name('recharge_order')->where(['order_sn' => $message['out_trade_no']])->find();
                        if (!$order || $order['pay_status'] >= Pay::ISPAID) {
                            return true;
                        }
                        PayNotifyLogic::handle('recharge', $message['out_trade_no'], $extra);
                        break;
                }
            } elseif ($message['result_code'] === 'FAIL') {
                // 用户支付失败

            }

            return true; // 返回处理完成

        });
        $response->send();
    }



    /**
     * Notes: 退款
     * @param $config
     * @param $data //微信订单号、商户退款单号、订单金额、退款金额、其他参数
     * @return array|bool|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @author 段誉(2021/2/1 11:19)
     */
    public static function refund($config, $data)
    {
        if (!empty($data["transaction_id"])) {
            $app = Factory::payment($config);
            $result = $app->refund->byTransactionId(
                $data['transaction_id'],
                $data['refund_sn'],
                $data['total_fee'],
                $data['refund_fee']
            );
            return $result;
        } else {
            return false;
        }
    }

}