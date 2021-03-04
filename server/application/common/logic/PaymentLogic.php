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
use app\common\server\WeChatPayServer;
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
                $res = WeChatPayServer::unifiedOrder($from, $order, $order_source);
                if (false === $res) {
                    self::$error = WeChatPayServer::getError();
                }
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
     * Notes: 是否在白名单内支付
     * @param $user_id
     * @author 段誉(2021/2/24 10:01)
     * @return bool
     */
    public static function isPayWhiteList($user_id)
    {
        $white_list = Env::get('wechat.white_list', '');
        $white_list = explode(',', $white_list);
        if (in_array($user_id, $white_list)) {
            return true;
        }
        return false;
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