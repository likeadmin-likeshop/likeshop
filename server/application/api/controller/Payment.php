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

namespace app\api\controller;


use app\api\model\Order;
use app\common\model\Order as CommonOrder;
use app\common\model\Client_;
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

    public $like_not_need_login = ['aliNotify', 'notifyMnp', 'notifyOa', 'notifyApp'];


    /**
     * Notes: 预支付
     * @author 段誉(2021/2/23 14:33)
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
                if ($order['order_status'] == CommonOrder::STATUS_CLOSE || $order['del'] == 1) {
                    $this->_error('订单已关闭');
                }
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

        if (PaymentLogic::getReturnCode() != 0) {
            $this->_success('', $result, PaymentLogic::getReturnCode());
        }

        $this->_success('', $result);
    }



    /**
     * Notes: 小程序回调
     * @author 段誉(2021/2/23 14:34)
     */
    public function notifyMnp()
    {
        $config = WeChatServer::getPayConfig(Client_::mnp);
        return WeChatPayServer::notify($config);
    }


    /**
     * Notes: 公众号回调
     * @author 段誉(2021/2/23 14:34)
     */
    public function notifyOa()
    {
        $config = WeChatServer::getPayConfig(Client_::oa);
        return WeChatPayServer::notify($config);
    }


    /**
     * Notes: APP回调
     * @author 段誉(2021/2/23 14:34)
     */
    public function notifyApp()
    {
        $config = WeChatServer::getPayConfig(Client_::ios);
        return WeChatPayServer::notify($config);
    }


    /**
     * Notes: 支付宝回调
     * @author 段誉(2021/3/23 11:37)
     */
    public function aliNotify()
    {
        $data = $this->request->post();
        $result = (new AliPayServer())->verifyNotify($data);
        if (true === $result) {
            echo 'success';
        } else {
            echo 'fail';
        }
    }



    /**
     * Notes:
     * @author 段誉(2021/3/23 11:36)
     * @return \think\Model[]
     */
    public function payway()
    {
        $payModel = new Pay();
        $pay = $payModel->where(['status' => 1])->order('sort')->hidden(['config'])->select()->toArray();

        foreach ($pay as $k => &$item) {
            if ($item['code'] == 'wechat') {
                $item['extra'] = '微信快捷支付';
                $item['pay_way'] = Pay::WECHAT_PAY;
            }

            if ($item['code'] == 'balance') {
                $user_money = Db::name('user')->where(['id' => $this->user_id])->value('user_money');
                $item['extra'] = '可用余额:'.$user_money;
                $item['pay_way'] = Pay::BALANCE_PAY;
            }

            if ($item['code'] == 'alipay') {
                $item['extra'] = '';
                $item['pay_way'] = Pay::ALI_PAY;
            }

            if (in_array($this->client, [Client_::mnp, Client_::oa]) && $item['code'] == 'alipay') {
                unset($pay[$k]);
            }
        }
        $this->_success('', array_values($pay));
    }

}