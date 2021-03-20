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
use app\api\model\{Order};
use app\common\server\AliPayServer;
use app\common\server\WeChatPayServer;
use app\common\server\WeChatServer;
use app\common\logic\PaymentLogic;
use app\common\model\Pay;
use think\Db;


/**
 * 支付逻辑
 * Class Payment
 * @package app\api\controller
 */
class Payment extends ApiBase
{

    public $like_not_need_login = ['notifyMnp', 'notifyOa', 'notifyApp', 'aliNotify'];

    /**
     * Notes: 预支付
     * @author 段誉(2021/2/1 11:57)
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function prepay()
    {
        $post = $this->request->post();
        switch ($post['from']) {
            case 'order':
                $order = Order::get($post['order_id']);
                break;
            case 'recharge':
                $order = Db::name('recharge_order')->where(['id' => $post['order_id']])->find();
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

        $result = PaymentLogic::pay($post['from'], $order, $post['order_source']);
        if (false === $result) {
            $this->_error(PaymentLogic::getError(), ['order_id' => $order['id']], PaymentLogic::getReturnCode());
        }

        $this->_success('', $result);
    }



    /**
     * Notes: 小程序回调
     * @author 段誉(2021/2/23 14:34)
     */
    public function notifyMnp()
    {
        $config = WeChatServer::getMnpPayConfig();
        return WeChatPayServer::notify($config);
    }


    /**
     * Notes: 公众号回调
     * @author 段誉(2021/2/23 14:34)
     */
    public function notifyOa()
    {
        $config = WeChatServer::getOaPayConfig();
        return WeChatPayServer::notify($config);
    }


    /**
     * Notes: APP回调
     * @author 段誉(2021/2/23 14:34)
     */
    public function notifyApp()
    {
        $config = WeChatServer::getOpPayConfig();
        return WeChatPayServer::notify($config);
    }


    //支付宝回调
    public function aliNotify()
    {
        $aop = new AopClient();
        $config = AliPayServer::getAliConfig();
        $aop->alipayrsaPublicKey = $config['alipayrsaPublicKey'];

        $flag = $aop->rsaCheckV1($_POST, NULL, "RSA");
        cache('alipay', json_encode($flag, true));
        if ($flag) {
            $order_no = $flag['out_trade_no'];
        }
        echo 'success';
    }
}