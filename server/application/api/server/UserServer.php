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


namespace app\api\server;


use app\common\model\Client_;
use app\common\model\Notice_;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;
use app\common\server\ConfigServer;
use think\facade\Hook;

class UserServer
{

    /**
     * User: 意象信息科技 lr
     * Desc: 通过小程序创建用户信息
     * @param $response
     * @return array|\PDOStatement|string|\think\Model|null
     */
    public static function createUser($response, $client)
    {
        $user_info = [];
        try {

            //不同授权返回信息key名不一样，统一处理
            switch ($client) {
                case Client_::mnp:
                    $openid = $response['openId'];
                    $unionid = $response['unionId'] ?? '';
                    $avatar_url = $response['avatarUrl'];
                    $nickname = $response['nickName'];
                    break;
                case Client_::oa:
                case Client_::ios:
                case Client_::android:
                    $openid = $response['openid'];
                    $unionid = $response['unionid'] ?? '';
                    $avatar_url = $response['headimgurl'];
                    $nickname = $response['nickname'];
            }

            Db::startTrans();
            $time = time();
            $file_name = md5($openid . $time) . '.jpeg';
            $avatar = download_file($avatar_url, 'uploads/user/avatar/', $file_name);
            $data = [
                'nickname' => $nickname,
                'sn' => create_user_sn(),
                'avatar' => '/' . $avatar,
                'create_time' => $time
            ];

            $user_id = Db::name('user')
                ->insertGetId($data);

            $data = [
                'user_id' => $user_id,
                'openid' => $openid,
                'create_time' => $time,
                'unionid' => $unionid,
                'client' => $client,
            ];
            Db::name('user_auth')
                ->insert($data);

            //消息通知
            Hook::listen('notice', [
                'user_id' => $user_id,
                'scene' => Notice_::SYSTEM_REGISTER_SUCCESS,
            ]);

            Db::commit();

            $user_info = Db::name('user')
                ->field(['id', 'nickname', 'avatar', 'level', 'disable'])
                ->where(['id' => $user_id])
                ->find();
            if (empty($user_info['avatar'])) {
                $user_info['avatar'] = UrlServer::getFileUrl(ConfigServer::get('website', 'user_image', ''));
            } else {
                $user_info['avatar'] = UrlServer::getFileUrl($user_info['avatar']);
            }

        } catch (Exception $e) {
            Db::rollback();
            throw new Exception($e->getMessage());
        }

        return $user_info;
    }

    /**
     * 更新用户信息
     * @param $response
     * @param $client
     * @param $user_id
     * @return array|\PDOStatement|string|\think\Model|null
     */
    public static function updateUser($response, $client, $user_id)
    {
        $time = time();
        try {

            switch ($client) {
                case Client_::mnp:
                    $openid = $response['openId'];
                    $unionid = $response['unionId'] ?? '';
                    $avatar_url = $response['avatarUrl'];
                    $nickname = $response['nickName'];
                    break;
                case Client_::oa:
                case Client_::ios:
                case Client_::android:
                    $openid = $response['openid'];
                    $unionid = $response['unionid'] ?? '';
                    $avatar_url = $response['headimgurl'];
                    $nickname = $response['nickname'];
                    break;
            }

            Db::startTrans();

            //ios,android
            if (in_array($client, [Client_::ios, Client_::android])) {
                Db::name('user_auth')
                    ->where(['openid' => $openid])
                    ->update(['client' => $client]);
            }

            //用户已存在，但是无该端的授权信息，保存数据
            $user_auth_id = Db::name('user_auth')
                ->where(['user_id' => $user_id, 'openid' => $openid])
                ->value('id');
            if (empty($user_auth_id)) {
                $data = [
                    'create_time' => $time,
                    'openid' => $openid,
                    'unionid' => $unionid,
                    'user_id' => $user_id,
                    'client' => $client,
                ];
                Db::name('user_auth')
                    ->insert($data);
            }

            $user_info = Db::name('user u')
                ->field(['u.nickname', 'u.avatar', 'u.level', 'u.id', 'au.unionid'])
                ->join('user_auth au', 'u.id=au.user_id')
                ->where(['au.openid' => $openid])
                ->find();

            //无头像需要更新头像
            if (empty($user_info['avatar'])) {
                $file_name = md5($openid . $time) . '.jpeg';
                $data['avatar'] = '/' . download_file($avatar_url, 'uploads/user/avatar/', $file_name);
                $data['update_time'] = $time;
                $data['nickname'] = $nickname;
                Db::name('user')
                    ->where(['id' => $user_info['id']])
                    ->update($data);
            }

            //之前无unionid需要更新
            if (empty($user_info['unionid']) && isset($unionid)) {
                $data = [];
                $data['unionid'] = $unionid;
                $data['update_time'] = $time;
                Db::name('user_auth')
                    ->where(['user_id' => $user_info['id']])
                    ->update($data);
            }

            $user_info = Db::name('user')
                ->where(['id' => $user_info['id']])
                ->field(['id', 'nickname', 'avatar', 'level', 'disable'])
                ->find();

            if (empty($user_info['avatar'])) {
                $user_info['avatar'] = UrlServer::getFileUrl(ConfigServer::get('website', 'user_image', ''));
            } else {
                $user_info['avatar'] = UrlServer::getFileUrl($user_info['avatar']);
            }
            Db::commit();

        } catch (Exception $e) {
            Db::rollback();
            throw new Exception($e->getMessage());
        }

        return $user_info;
    }
}