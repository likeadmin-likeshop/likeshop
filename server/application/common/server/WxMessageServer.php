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
use app\common\model\MessageScene_;
use EasyWeChat\Factory;
use think\Db;

class WxMessageServer
{
    protected $config = null;  // 配置信息
    protected $app = null;     // easyechat实例
    protected $openid = null;  // openid
    protected $template_id = null; // 消息模板ID
    protected $platform = null;    //平台[公众号, 小程序]

    // 初始化
    public function __construct($user_id)
    {
        // 获取用户信息
        $user_model = Db::name('user_auth')->where(['user_id' => (int)$user_id])->find();
        $this->openid = $user_model['openid'];
        $this->platform = $user_model['client'];

        if ($this->platform === Client_::h5) {
            $this->config = WeChatServer::getOaConfig();
            $this->app = Factory::officialAccount($this->config);
        } else if ($this->platform === Client_::mnp) {
            $this->config = WeChatServer::getMnpConfig();
            $this->app = Factory::miniProgram($this->config);
        }
    }

    // 发送消息
    public function send($params)
    {
        // 获取template_id
        $where = ['type'=>$this->platform, 'scene'=>(int)$params['scene']];
        $scene_model = Db::name('dev_message_template')->where($where)->find();
        if (!$scene_model || $scene_model['disable']===1 || $scene_model['template_id']==='') {
            return false;
        } else  {
            $this->template_id = $scene_model['template_id'];
        }
        // 发送消息
        try {
            if ($this->platform  === Client_::h5) {
                $this->app->template_message->send($this->oaTemplate($params));  // 公众号场景
            } else if ($this->platform === Client_::mnp) {
                $this->app->subscribe_message->send($this->mnpTemplate($params));
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // 公众号消息模板
    public function oaTemplate($data)
    {
        $tpl = [
            'touser'      => $this->openid,
            'template_id' => $this->template_id,
        ];

        switch ($data['scene']) {
            case MessageScene_::BUY_SUCCESS: //购买成功通知：OPENTM417997194
                $order = Db::name('order')->where(['id'=>$data['order_id']])->find();

                $tpl['url']  = '/pages/order_details/order_details?id='.$data['order_id'];
                $tpl['data'] = [
                    'first'    => '您好！您所购买的商品已支付成功',
                    'keyword1' => $order['order_sn'],  //订单号
                    'keyword2' => $order['total_num'],  //购买数量
                    'keyword3' => $order['order_amount'],  //实付金额
                    'keyword4' => date('Y-m-d H:i:s', $order['pay_time']),  //下单时间
                    'remark'   => '请耐心等待商家发货哦！',
                ];
                break;
            case MessageScene_::DELIVER_GOODS_SUCCESS: //发货提醒：OPENTM416317950
                $order = Db::name('order')->where(['id'=>$data['order_id']])->find();

                $tpl['url']  = '/pages/order_details/order_details?id='.$data['order_id'];
                $tpl['data'] = [
                    'first'    => '亲爱的用户：',
                    'keyword1' => $order['mobile'],  //手机号
                    'keyword2' => $order['order_sn'],  //订单号
                    'keyword3' => $order['order_amount'],  //金额
                    'remark'   => '亲，有一张订单已发货。',
                ];
                break;
            case MessageScene_::REFUND_SUCCESS: //退款成功通知：OPENTM202723917
                $order_refund = Db::name('order_refund')->where(['order_id'=>$data['order_id']])->find();

                $tpl['url']  = '/pages/order_details/order_details?id='.$data['order_id'];
                $tpl['data'] = [
                    'first'    => '退款成功通知',
                    'keyword1' => $order_refund['refund_sn'], //订单编号
                    'keyword2' => $order_refund['refund_amount'], //退款金额
                    'remark'   => '感谢你的使用。'
                ];
                break;
        }
        return $tpl;
    }

    // 小程序消息模板
    public function mnpTemplate($data)
    {
        $tpl = [
            'touser'      => $this->openid,
            'template_id' => $this->template_id,
        ];

        switch ($data['scene']) {
            case MessageScene_::BUY_SUCCESS:
                $order = Db::name('order')->where(['id'=>$data['order_id']])->find();
                $order_goods = Db::name('order_goods')->where(['order_id'=>$order['id']])->find();
                $goods = Db::name('goods')->where(['id'=>$order_goods['goods_id']])->find();

                $tpl['page'] = '/pages/order_details/order_details?id='.$data['order_id'];
                $tpl['data'] = [
                    'character_string1' => ['value'=>$order['order_sn']],
                    'time2'     => ['value'=>date('Y-m-d H:i:s', $order['pay_time'])],
                    'amount3'   => ['value'=>$order['order_amount']],
                    'thing4'    => ['value'=>mb_substr($goods['name'], 0, 10)],
                ];
                break;
            case MessageScene_::DELIVER_GOODS_SUCCESS:
                $order = Db::name('order')->where(['id'=>$data['order_id']])->find();
                $order_goods = Db::name('order_goods')->where(['order_id'=>$order['id']])->find();
                $goods = Db::name('goods')->where(['id'=>$order_goods['goods_id']])->find();

                $tpl['page'] = '/pages/order_details/order_details?id='.$data['order_id'];
                $tpl['data'] = [
                    'thing1'             => ['value'=>mb_substr($goods['name'], 0, 10)], //商品名称
                    'character_string2'  => ['value'=>$order['order_sn']],      //订单号
                    'date3'              => ['value'=>$data['delivery_time']],  //发货时间
                    'thing4'             => ['value'=>$data['shipping_name']],  //快递公司
                    'character_string5'  => ['value'=>$data['invoice_no']],     //快递单号
                ];
                break;
            case MessageScene_::REFUND_SUCCESS:
                $order_goods = Db::name('order_goods')->where(['order_id'=>$data['order_id']])->find();
                $goods = Db::name('goods')->where(['id'=>$order_goods['goods_id']])->find();
                $order_refund = Db::name('order_refund')->where(['order_id'=>$data['order_id']])->find();

                $tpl['page'] = '/pages/order_details/order_details?id='.$data['order_id'];
                $tpl['data'] = [
                    'amount1'            => ['value'=>$order_refund['refund_amount']],  //退款金额
                    'thing2'             => ['value'=>$goods['name']],  //商品名称
                    'character_string3'  => ['value'=>$order_refund['refund_sn']],  //订单编号
                    'date4'              => ['value'=>date('Y-m-d h:i:s', $order_refund['refund_at'])],  //退款时间
                ];
                break;
        }
        return $tpl;
    }
}