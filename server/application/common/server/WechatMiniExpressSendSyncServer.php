<?php

namespace app\common\server;

use app\common\model\Client_;
use app\common\model\Delivery;
use app\common\model\Express;
use app\common\model\Order;
use app\common\model\OrderGoods;
use app\common\model\RechargeOrder;
use app\common\model\UserAuth;
use EasyWeChat\Factory;
use Psr\SimpleCache\InvalidArgumentException;
use think\facade\Log;

/**
 * @notes 小程序 发货信息录入
 * @notes https://developers.weixin.qq.com/miniprogram/dev/platform-capabilities/business-capabilities/order-shipping/order-shipping.html
 * author lbzy
 * @datetime 2023-07-14 14:51:23
 * @class WechatMiniExpressSendSyncService
 * @package app\common\service
 */
class WechatMiniExpressSendSyncServer
{
    static private $miniApp;
    
    private static function getMiniApp()
    {
        static::$miniApp = static::$miniApp ? : Factory::miniProgram(WeChatServer::getMnpConfig());
        
        return static::$miniApp;
    }
    
    /**
     * @notes 订单录入
     * @param array $order
     * @return bool
     * @author lbzy
     * @datetime 2023-07-14 14:34:05
     */
    static function _sync_order(array $order) : bool
    {
        try {
            $time   = time();
            $log    = 'wechat_mini_express_sync_order';
            $app    = static::getMiniApp();
            $user   = UserAuth::where('user_id', $order['user_id'])->where('client', Client_::mnp)->findOrEmpty();
    
            if (empty($user->openid)) {
                Log::write("用户：{$order['user_id']} openid不存在,订单ID：{$order['id']}", $log);
                Order::update([ 'wechat_mini_express_sync' => 2, 'wechat_mini_express_sync_time' => time() ], [
                    [ 'id', '=', $order['id'] ],
                ]);
                return false;
            }
            
            $order_goods = OrderGoods::where('order_id', $order['id'])->select()->toArray();
            $goods_names = implode(" ", array_column($order_goods, 'goods_name'));
    
            $shipping_item = [
                'item_desc' => mb_strlen($goods_names) > 128 ? (mb_substr($goods_names, 0, 124, 'UTF-8') . '...') : $goods_names,
            ];
    
            $data = [
                'order_key'     => [
                    'order_number_type'     => 2,
                    'transaction_id'        => $order['transaction_id'],
                ],
                'delivery_mode' => 1,
                'upload_time'   => date(DATE_RFC3339, $time),
                'payer'         => [
                    'openid'    => $user->openid,
                ],
            ];
    
            $delivery   = Delivery::where('order_id', $order['id'])->findOrEmpty();
            $express    = Express::where('id', $delivery['shipping_id'] ?? 0)->findOrEmpty();
    
            if (! empty($express->code) && ! empty($delivery->invoice_no) && ! empty($delivery->mobile)) {
                $shipping_item['tracking_no'] = $delivery->invoice_no;
                // 微信小程序 物流公司delivery_id
                $shipping_item['express_company'] = $express->code;
                $shipping_item['contact']['receiver_contact'] = substr_replace($delivery->mobile, '****', 3, 4);
            } else {
                // 无需物流 改为虚拟发货
                $data['logistics_type'] = 3;
            }
    
            $data['shipping_list'][] = $shipping_item;
    
            switch ($order['delivery_type']) {
                // 快递发货
                case Order::DELIVERY_STATUS_EXPRESS:
                    $data['logistics_type'] = $data['logistics_type'] ?? 1;
                    break;
                // 门店自提
                case Order::DELIVERY_STATUS_SELF:
                    $data['logistics_type'] = 4;
                    break;
                default:
                    break;
            }
    
            // dump($data);
    
            $token = static::getToken($app);
    
            $result_content = $app->http_client->post("/wxa/sec/order/upload_shipping_info?access_token={$token}", [
                'body'   => json_encode($data, JSON_UNESCAPED_UNICODE),
            ])->getBody()->getContents();
            
            $result = json_decode($result_content, true);
            
            // dump($result);
    
            if (! isset($result['errcode']) || $result['errcode'] != 0) {
                // token失效 不标记失败 等下次执行
                if (isset($result['errcode']) && $result['errcode'] == 40001) {
                    Log::write("等待下次执行" . ($result_content ? : "发货录入发生错误"), $log);
                    return false;
                }
                Log::write($result_content ? : "发货录入发生错误", $log);
                Order::update([ 'wechat_mini_express_sync' => 2, 'wechat_mini_express_sync_time' => $time ], [
                    [ 'id', '=', $order['id'] ],
                ]);
                return false;
            }
    
            Order::update([ 'wechat_mini_express_sync' => 1, 'wechat_mini_express_sync_time' => $time ], [
                [ 'id', '=', $order['id'] ],
            ]);
    
            return true;
            
        } catch(\Throwable $e) {
            // dump($e->__toString());
            Log::write($e->__toString(), $log);
            return false;
        }
    }
    
    /**
     * @notes 充值录入
     * @param array $recharge
     * @return bool
     * @throws InvalidArgumentException
     * @author lbzy
     * @datetime 2023-07-17 15:18:18
     */
    static function _sync_recharge(array $recharge) : bool
    {
        try {
            $time   = time();
            $log    = 'wechat_mini_express_sync_recharge';
            $app    = static::getMiniApp();
            $user   = UserAuth::where('user_id', $recharge['user_id'])->where('client', Client_::mnp)->findOrEmpty();
        
            if (empty($user->openid)) {
                Log::write("用户：{$recharge['user_id']} openid不存在,订单ID：{$recharge['id']}", $log);
                RechargeOrder::update([ 'wechat_mini_express_sync' => 2, 'wechat_mini_express_sync_time' => time() ], [
                    [ 'id', '=', $recharge['id'] ],
                ]);
                return false;
            }
        
            $shipping_item = [
                'item_desc' => '余额充值',
            ];
        
            $data = [
                'order_key'     => [
                    'order_number_type'     => 2,
                    'transaction_id'        => $recharge['transaction_id'],
                ],
                'delivery_mode' => 1,
                'upload_time'   => date(DATE_RFC3339, $time),
                'payer'         => [
                    'openid'    => $user->openid,
                ],
                'logistics_type' => 3,
            ];
        
            $data['shipping_list'][] = $shipping_item;
        
            // dump($data);
        
            $token = static::getToken($app);
        
            $result_content = $app->http_client->post("/wxa/sec/order/upload_shipping_info?access_token={$token}", [
                'body'   => json_encode($data, JSON_UNESCAPED_UNICODE),
            ])->getBody()->getContents();
        
            $result = json_decode($result_content, true);
        
            // dump($result);
        
            if (! isset($result['errcode']) || $result['errcode'] != 0) {
                // token失效 不标记失败 等下次执行
                if (isset($result['errcode']) && $result['errcode'] == 40001) {
                    Log::write("等待下次执行" . ($result_content ? : "发货录入发生错误"), $log);
                    return false;
                }
                Log::write($result_content ? : "发货录入发生错误", $log);
                RechargeOrder::update([ 'wechat_mini_express_sync' => 2, 'wechat_mini_express_sync_time' => $time ], [
                    [ 'id', '=', $recharge['id'] ],
                ]);
                return false;
            }
    
            RechargeOrder::update([ 'wechat_mini_express_sync' => 1, 'wechat_mini_express_sync_time' => $time ], [
                [ 'id', '=', $recharge['id'] ],
            ]);
        
            return true;
        
        } catch(\Throwable $e) {
            // dump($e->__toString());
            Log::write($e->__toString(), $log);
            return false;
        }
    }
    
    private static function getToken($app)
    {
        return $app->access_token->getToken()['access_token'];
    }
    
    static function wechatSyncCheck($order)
    {
        $app    = static::getMiniApp();
        
        $data = [
            'transaction_id' => $order['transaction_id'] ?? '',
        ];
        
        $token = static::getToken($app);
        
        $result_content = $app->http_client->post("/wxa/sec/order/get_order?access_token={$token}", [
            'body'   => json_encode($data, JSON_UNESCAPED_UNICODE),
        ])->getBody()->getContents();
        
        $result = json_decode($result_content, true);
        
        if (! isset($result['errcode']) || $result['errcode'] != 0) {
            // token失效 不标记失败 等下次执行
            if (isset($result['errcode']) && $result['errcode'] == 40001) {
                Log::write("等待下次执行" . ($result_content ? : "发货录入发生错误"), 'wechat_mini_express_sync_check');
                return false;
            }
            Log::write($result_content ? : "发货录入发生错误", 'wechat_mini_express_sync_check');
            return [];
        }
        
        return $result;
        
    }
}