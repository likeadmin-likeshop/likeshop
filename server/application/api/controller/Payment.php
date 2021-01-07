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

namespace app\api\controller;

use alipay\aop\AopClient;
use app\api\logic\OrderLogic;
use app\common\model\MessageScene_;
use app\api\model\{Order};
use app\common\server\AliPayServer;
use app\common\server\WeChatServer;
use app\common\logic\{PaymentLogic, PayNotifyLogic};
use app\common\model\Pay;
use EasyWeChat\Payment\Application;
use think\Db;
use think\facade\Hook;

class Payment extends ApiBase
{

    public $like_not_need_login = ['notify', 'aliNotify'];


    public function prepay()
    {
        $post = $this->request->post();
        switch ($post['from']) {
            case 'order':
                $order = Order::get($post['order_id']);
                break;
            case 'recharge':
                $order = Db::name('recharge_order')->where(['id'=>$post['order_id']])->find();
                break;
        }

        //找不到订单
        if (empty($order)) {
            $this->_error('订单不存在');
        }

        //已支付
        if ($order['pay_status'] == Pay::ISPAID || $order['order_amount'] == 0) {
            $this->_success('支付成功', ['order_id' => $order['id']], 10001);
        }

        if ($order['pay_way'] == Pay::WECHAT_PAY){
            return PaymentLogic::unifiedOrder($post['from'], $order, $post['order_source']);
        }

        if ($order['pay_way'] == Pay::ALI_PAY){
            return PaymentLogic::appAlipay($post['from'], $order, $post['order_source']);
        }

        $this->_error('订单状态未知', ['order_id' => $order['id']]);
    }

    public function notify()
    {
        $config = WeChatServer::getMnpPayConfig();
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

                        if (!$order || $order['pay_status'] == Pay::ISPAID) {
                            return true;
                        }
                        PayNotifyLogic::handle('order', $message['out_trade_no'], $extra);
                        break;
                    case 'recharge':
                        $order = Db::name('recharge_order')->where(['order_sn' => $message['out_trade_no']])->find();

                        if (!$order || $order['pay_status'] == Pay::ISPAID) {
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

}