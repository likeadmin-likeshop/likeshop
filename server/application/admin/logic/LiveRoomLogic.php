<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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

namespace app\admin\logic;


use app\common\server\UrlServer;
use app\common\server\WeChatServer;
use EasyWeChat\Factory;
use Exception;

class LiveRoomLogic
{
    /**
     * @notes 获取assessToken
     * @return mixed
     * @throws @\EasyWeChat\Kernel\Exceptions\HttpException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws @\EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws @\Psr\SimpleCache\InvalidArgumentException
     * @author 张无忌
     * @date 2021/10/13 11:36
     */
    public static function getAccessToken()
    {
        $config = WeChatServer::getMnpConfig();
        $app = Factory::miniProgram($config);
        return $app->access_token->getToken()['access_token'];
    }


    /**
     * @notes 获取直播间列表
     * @param $get
     * @return array|string
     * @author 张无忌
     * @date 2021/9/13 15:54
     */
    public static function lists($get)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $result = $app->live->getRooms($get['page'] - 1, $get['limit']);

            if ($result['errcode'] != 0) {
                return $result['errcode'] . '：' . $result['errmsg'];
            }

            $liveStatus = [101 => '直播中', 102 => '未开始', 103 => '已结束', 104 => '禁播', 105 => '暂停', 106 => '异常', 107 => '已过期'];

            $data = [];
            foreach ($result['room_info'] as $item) {
                $data[] = [
                    'name' => $item['name'],
                    'roomid' => $item['roomid'],
                    'cover_img' => $item['cover_img'],
                    'anchor_name' => $item['anchor_name'],
                    'live_status' => $liveStatus[$item['live_status']],
                    'goods' => count($item['goods']),
                    'start_time' => date('Y-m-d H:i:s', $item['start_time']),
                    'end_time' => date('Y-m-d H:i:s', $item['end_time'])
                ];
            }

            return ['count' => $result['total'], 'lists' => $data];
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @notes 创建直播间
     * @param $post
     * @return bool|string
     * @throws @\EasyWeChat\Kernel\Exceptions\HttpException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws @\EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws @\Psr\SimpleCache\InvalidArgumentException
     * @author 张无忌
     * @date 2021/9/14 15:49
     */
    public static function add($post)
    {
        $config = WeChatServer::getMnpConfig();
        $app = Factory::miniProgram($config);
        $access_token = $app->access_token->getToken()['access_token'];

        $startTime = strtotime($post['startTime']);
        $endTime = strtotime($post['endTime']);

        if (($startTime - time()) <= 610) {
            return '开播时间需要在当前时间的10分钟后';
        }

        if (($endTime - $startTime) <= (30 * 60)) {
            return '播时间和结束时间间隔不得短于30分钟';
        }

        if (empty($post['coverImg'])) {
            return '请上传封面图';
        }

        if (empty($post['shareImg'])) {
            return '请上传分享图';
        }

        if (empty($post['feedsImg'])) {
            return '请上传背景图';
        }

        $data = [
            'name'            => $post['name'],
            'coverImg'        => $post['coverImg'],
            'startTime'       => strtotime($post['startTime']),
            'endTime'         => strtotime($post['endTime']),
            'anchorName'      => $post['anchorName'],
            'anchorWechat'    => $post['anchorWechat'],
            'subAnchorWechat' => $post['subAnchorWechat'] ?? '',
            'createrWechat'   => $post['anchorWechat'],
            'shareImg'        => $post['shareImg'],
            'feedsImg'        => $post['feedsImg'],
            'type'            => intval($post['type']),
            'isFeedsPublic'   => empty($post['isFeedsPublic']) ? 0 : 1,
            'closeLike'       => empty($post['closeLike']) ? 1 : 0,
            'closeGoods'      => empty($post['closeGoods']) ? 1 : 0,
            'closeComment'    => empty($post['closeComment']) ? 1 : 0,
            'closeReplay'     => empty($post['closeReplay']) ? 1 : 0,
            'closeShare'      => empty($post['closeShare']) ? 1 : 0,
            'closeKf'         => empty($post['closeKf']) ? 1 : 0,
        ];

        $url = 'https://api.weixin.qq.com/wxaapi/broadcast/room/create?access_token='.$access_token;
        $result = curl_post($url, $data);
        $result = json_decode($result, true);
        if ($result['errcode'] != 0) {
            return $result['errcode'] . '：' . $result['errmsg'];
        }

        return true;
    }

    /**
     * @notes 删除直播间
     * @param $id
     * @return bool|string
     * @throws @\EasyWeChat\Kernel\Exceptions\HttpException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws @\EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws @\Psr\SimpleCache\InvalidArgumentException
     * @author 张无忌
     * @date 2021/9/14 16:00
     */
    public static function del($id)
    {
        $config = WeChatServer::getMnpConfig();
        $app = Factory::miniProgram($config);
        $access_token = $app->access_token->getToken()['access_token'];

        $url = 'https://api.weixin.qq.com/wxaapi/broadcast/room/deleteroom?access_token='.$access_token;
        $result = curl_post($url, ['id'=>intval($id)]);
        $result = json_decode($result, true);
        if ($result['errcode'] != 0) {
            return $result['errcode'] . '：' . $result['errmsg'];
        }

        return true;
    }

    /**
     * @notes 上传临时素材图片
     * @param $url
     * @return array|string
     * @throws @\GuzzleHttp\Exception\GuzzleException
     * @author 张无忌
     * @date 2021/9/13 17:34
     */
    public static function upload($url)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $path = env('root_path').'public/uploads/temp/'.$url;
            $result = $app->media->uploadImage($path);

            return ['media_id'=>$result['media_id'], 'url'=>UrlServer::getFileUrl('uploads/temp/'.$url)];
        }catch (Exception $e) {
            return $e->getMessage();
        }
    }
}