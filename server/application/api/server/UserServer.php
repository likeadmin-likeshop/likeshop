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


namespace app\api\server;


use app\api\logic\DistributionLogic;
use app\api\logic\LoginLogic;
use app\common\model\Client_;
use app\common\model\NoticeSetting;
use app\common\server\storage\Driver as StorageDriver;
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
     * @param $client
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws Exception
     */
    public static function createUser($response, $client)
    {
        $user_info = [];
        try {
            $openid = $response['openid'];
            $unionid = $response['unionid'] ?? '';
            $avatar_url = $response['headimgurl'] ?? '';
            $nickname = $response['nickname'] ?? '';

            Db::startTrans();

            // 获取存储引擎
            $config = [
                'default' => ConfigServer::get('storage', 'default', 'local'),
                'engine'  => ConfigServer::get('storage_engine')
            ];

            $time   = time(); //创建时间
            $avatar = '';     //头像路径

            if (empty($avatar_url)) {
                $avatar = ConfigServer::get('website', 'user_image', '');
            } else {
                if ($config['default'] == 'local') {
                    $file_name = md5($openid . $time) . '.jpeg';
                    $avatar = download_file($avatar_url, 'uploads/user/avatar/', $file_name);
                } else {
                    $avatar = 'uploads/user/avatar/' . md5($openid . $time) . '.jpeg';
                    $StorageDriver = new StorageDriver($config);
                    if (!$StorageDriver->fetch($avatar_url, $avatar)) {
                        throw new Exception( '头像保存失败:'. $StorageDriver->getError());
                    }
                }
            }

            $data = [
                'nickname'          => $nickname,
                'sn'                => create_user_sn(),
                'avatar'            => $avatar,
                'create_time'       => $time,
                'distribution_code' => generate_invite_code(),//分销邀请码
                'is_distribution'   => DistributionLogic::isDistributionMember()
            ];

            if (empty($nickname)) {
                $data['nickname'] = '用户'.$data['sn'];
            }

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

            //生成会员分销扩展表
            DistributionLogic::createUserDistribution($user_id);
            //消息通知
            Hook::listen('notice', ['user_id' => $user_id, 'scene' => NoticeSetting::REGISTER_SUCCESS_NOTICE]);

            //注册赠送优惠
            LoginLogic::registerAward($user_id);

            Db::commit();

            $user_info = Db::name('user')
                ->field(['id', 'nickname', 'avatar', 'level', 'disable', 'distribution_code'])
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

            $openid = $response['openid'];
            $unionid = $response['unionid'] ?? '';
            $avatar_url = $response['headimgurl'] ?? '';
            $nickname = $response['nickname'] ?? '';

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
                // 获取存储引擎
                $config = [
                    'default' => ConfigServer::get('storage', 'default', 'local'),
                    'engine'  => ConfigServer::get('storage_engine')
                ];

                $avatar = '';     //头像路径
                if ($config['default'] == 'local') {
                    $file_name = md5($openid . $time) . '.jpeg';
                    $avatar = download_file($avatar_url, 'uploads/user/avatar/', $file_name);
                } else {
                    $avatar = 'uploads/user/avatar/' . md5($openid . $time) . '.jpeg';
                    $StorageDriver = new StorageDriver($config);
                    if (!$StorageDriver->fetch($avatar_url, $avatar)) {
                        throw new Exception( '头像保存失败:'. $StorageDriver->getError());
                    }
                }

                $data['avatar'] = $avatar;
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
                ->field(['id', 'nickname', 'avatar', 'level', 'disable', 'distribution_code'])
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