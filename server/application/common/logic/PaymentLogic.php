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

namespace app\common\logic;

use app\common\server\AliPayServer;
use app\common\server\WeChatServer;
use app\common\model\{Client_};
use EasyWeChat\Factory;
use think\Db;
use think\Exception;
use think\facade\Env;

class PaymentLogic extends LogicBase
{

    //微信统一下单
    public static function unifiedOrder($from, $order, $order_source)
    {
        try {
            $wechat_config = self::getWeChatConfig($order, $order_source);
            $auth = $wechat_config['auth'];
            $config = $wechat_config['config'];

            if (empty($config)){
                throw new Exception('请联系管理员配置支付信息');
            }

            //app支付不需要openid
            $app_source = [Client_::ios, Client_::android];
            if (!$auth && !in_array($order_source, $app_source)) {
                throw new Exception('授权信息失效');
            }

            $app = Factory::payment($config);
            switch ($from) {
                case 'order':
                    $attributes = [
                        'trade_type' => 'JSAPI',
                        'body' => '商品',
                        'out_trade_no' => $order['order_sn'],
                        'total_fee' => $order['order_amount'] * 100, // 单位：分
                        'notify_url' => url('payment/notify', '', '', true),
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
                        'notify_url' => url('payment/notify', '', '', true),
                        'openid' => $auth['openid'],
                        'attach' => 'recharge'
                    ];
                    break;
            }

            //app支付类型
            if ($order_source == Client_::android || $order_source == Client_::ios){
                $attributes['trade_type'] = 'APP';
            }
            //在白名单内,一分钱
            $white_list = Env::get('wechat.white_list', '');
            $white_list = explode(',', $white_list);
            if (in_array($order['user_id'], $white_list)) {
                $attributes['total_fee'] = 1;
            }

            $result = $app->order->unify($attributes);

            $data = [];
            if ($result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS') {
                $prepayId = $result['prepay_id'];
                $jssdk = $app->jssdk;

                if (in_array($order_source, $app_source)){
                    $data = $jssdk->appConfig($prepayId, false);
                }else{
                    $data = $jssdk->bridgeConfig($prepayId, false);
                }

            } else {
                if (isset($result['return_code']) && $result['return_code'] == 'FAIL'){
                    throw new Exception($result['return_msg']);
                }
                if (isset($result['err_code_des'])){
                    throw new Exception($result['err_code_des']);
                }
                throw new Exception('未知原因');
            }
            return self::dataSuccess('', $data);
        } catch (Exception $e) {
            return self::dataError('支付失败:' . $e->getMessage());
        }
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 退款
     * @param $config
     * @param $data //微信订单号、商户退款单号、订单金额、退款金额、其他参数
     * @param string $desc
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


    //获取微信配置
    public static function getWeChatConfig($order, $order_source)
    {
        $where[] = ['user_id', '=', $order['user_id']];
        $where[] = ['client', '=', $order_source];

        $config = WeChatServer::getPayConfigBySource($order_source);

        $auth = Db::name('user_auth')->where($where)->find();
        $data = [
            'auth' => $auth,
            'config' => $config,
            'order_source' => $order_source,
        ];
        return $data;
    }



    //支付宝APP支付
    public static function appAlipay($from, $order, $order_source)
    {
        try{

            if ($order_source != Client_::ios && $order_source != Client_::android){
                throw new Exception('错误的支付方式');
            }

            $notify_url = url('payment/aliNotify', '', '', true);

            switch ($from) {
                case 'order':
                    $data = [
                        'body'=>'订单',
                        'subject'=>'商品名',
                        'out_trade_no'=> $order['order_sn'],
                        'timeout_express'=>'30m',
                        'total_amount'=> $order['order_amount'],
                        'product_code'=>'QUICK_MSECURITY_PAY'
                    ];
                    break;
                case 'recharge':
                    $data = [
                        'body'=>'充值',
                        'subject'=>'商品名',
                        'out_trade_no'=> $order['order_sn'],
                        'timeout_express'=>'30m',
                        'total_amount'=> $order['order_amount'],
                        'product_code'=>'QUICK_MSECURITY_PAY'
                    ];
                    break;
            }

            $alipay = new AliPayServer();
            $result = $alipay->appAlipay($data, $notify_url);
            return self::dataSuccess('', $result, 10002);

        } catch (Exception $e) {
            return self::dataError($e->getMessage());
        }
    }
}