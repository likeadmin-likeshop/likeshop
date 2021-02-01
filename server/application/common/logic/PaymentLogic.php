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

namespace app\common\logic;

use app\common\server\AliPayServer;
use app\common\server\WeChatServer;
use app\common\model\{Client_, Pay};
use EasyWeChat\Factory;
use think\Db;
use think\Exception;
use think\facade\Env;

class PaymentLogic extends LogicBase
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
     * Notes: 支付
     * @param $from
     * @param $order
     * @param $order_source
     * @author 段誉(2021/2/1 11:58)
     * @return array|bool|string
     */
    public static function pay($from, $order, $order_source)
    {
        switch ($order['pay_way']) {
            case Pay::WECHAT_PAY:
                $res = self::unifiedOrder($from, $order, $order_source);
                break;
            case Pay::ALI_PAY:
                $res = self::appAlipay($from, $order, $order_source);
                break;
            default:
                self::$error = '订单状态未知';
                $res = false;
        }
        return $res;
    }



    /**
     * Notes: 微信统一下单
     * @param $from
     * @param $order
     * @param $order_source
     * @author 段誉(2021/2/1 11:58)
     * @return array|bool|string
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function unifiedOrder($from, $order, $order_source)
    {
        try {
            $wechat_config = self::getWeChatConfig($order, $order_source);
            $auth = $wechat_config['auth'];
            $config = $wechat_config['config'];

            if (empty($config) || empty($config['key']) || empty($config['mch_id']) || empty($config['app_id']) || empty($config['secret'])) {
                throw new Exception('请在后台配置好微信支付');
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

            return $data;
        } catch (Exception $e) {
            self::$error = '支付失败:' . $e->getMessage();
            return false;
        }
    }


    /**
     * Notes: 退款
     * @param $config
     * @param $data
     * @author 段誉(2021/2/1 11:58)
     * @return array|bool|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
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



    /**
     * Notes: 获取微信配置
     * @param $order
     * @param $order_source
     * @author 段誉(2021/2/1 11:58)
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
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




    /**
     * Notes: 支付宝APP支付
     * @param $from
     * @param $order
     * @param $order_source
     * @author 段誉(2021/2/1 11:58)
     * @return bool|string
     */
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

            self::$return_code = 10002;
            return $result;

        } catch (Exception $e) {
            self::$error = $e->getMessage();
            return false;
        }
    }
}