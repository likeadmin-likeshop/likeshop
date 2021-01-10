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


namespace app\api\logic;


use app\common\model\WeChat;
use app\common\server\WeChatServer;
use EasyWeChat\Kernel\Exceptions\Exception;
use EasyWeChat\Kernel\Messages\Text;
use EasyWeChat\Factory;
use think\Db;


class WeChatLogic
{
    /**
     * 获取微信配置
     * @param $url
     * @return array|string
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public static function jsConfig($url)
    {
        $config = WeChatServer::getOaConfig();
        $app = Factory::officialAccount($config);
        $url = urldecode($url);
        $app->jssdk->setUrl($url);
        $apis = ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone', 'openLocation', 'getLocation', 'chooseWXPay', 'updateAppMessageShareData', 'updateTimelineShareData', 'openAddress'];
        try {
            $data = $app->jssdk->getConfigArray($apis, $debug = false, $beta = false);
            return data_success('', $data);
        } catch (Exception $e) {
            return data_error('公众号配置出错' . $e->getMessage());
        }
    }

    public static function index()
    {
        //微信配置
        $config = WeChatServer::getOaConfig();
        $app = Factory::officialAccount($config);

        $app->server->push(function ($message) {
            switch ($message['MsgType']) {
                case WeChat::msg_type_event: //关注事件
                    switch ($message['Event']) {
                        case WeChat::msg_event_subscribe:
                            $reply_content = Db::name('wechat_reply')
                                ->where(['reply_type' => WeChat::msg_event_subscribe, 'status' => 1, 'del' => 0])
                                ->value('content');
                            //关注回复空的话，找默认回复
                            if (empty($reply_content)) {
                                $reply_content = Db::name('wechat_reply')
                                    ->where(['reply_type' => WeChat::msg_type_default, 'status' => 1, 'del' => 0])
                                    ->value('content');
                            }
                            if ($reply_content) {
                                $text = new Text($reply_content);
                                return $text;
                            }
                            break;

                    }

                case WeChat::msg_type_text://消息类型
                    $reply_list = Db::name('wechat_reply')
                        ->where(['reply_type' => WeChat::msg_type_text, 'status' => 1, 'del' => 0])
                        ->order('sort asc')
                        ->select();
                    $reply_content = '';
                    foreach ($reply_list as $reply) {
                        switch ($reply['matching_type']) {
                            case 1://全匹配
                                $reply['keyword'] === $message['Content'] && $reply_content = $reply['content'];
                                break;
                            case 2://模糊匹配
                                stripos($reply['keyword'], $message['Content']) && $reply_content = $reply['content'];
                                break;
                        }
                    }
                    //消息回复为空的话，找默认回复
                    if (empty($reply_content)) {
                        $reply_content = Db::name('wechat_reply')
                            ->where(['reply_type' => WeChat::msg_type_default, 'status' => 1, 'del' => 0])
                            ->value('content');
                    }
                    if ($reply_content) {
                        $text = new Text($reply_content);
                        return $text;
                    }
                    break;


            }
        });
        $response = $app->server->serve();
        $response->send();

    }

}