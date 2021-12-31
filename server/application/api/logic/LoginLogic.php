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


namespace app\api\logic;

use app\api\cache\TokenCache;
use app\api\model\User;
use app\api\server\UserServer;
use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\NoticeSetting;
use app\common\server\WeChatServer;
use app\common\logic\LogicBase;
use app\common\model\Client_;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use EasyWeChat\Factory;
use EasyWeChat\Kernel\Exceptions\Exception;
use Requests;
use think\Db;
use think\facade\Config;
use think\facade\Cache;
use think\facade\Hook;

class LoginLogic extends LogicBase
{
    public static function register($post){
        $client =Client_::mnp;
        switch ($post['client']){
            case 2:
                $client = Client_::oa;
                break;
            case 3:
                $client = Client_::ios;
                break;
            case 4:
                $client = Client_::android;
                break;
            case 5:
                $client = Client_::pc;
                break;
            case 6:
                $client = Client_::h5;
                break;
        }
        $time = time();
        $salt = substr(md5($time . $post['mobile']), 0, 4);//随机4位密码盐
        $password = create_password($post['password'], $salt);//生成密码
        $user_data = [
            'avatar'        => ConfigServer::get('website', 'user_image'),
            'sn'            => create_user_sn(),
            'mobile'        => $post['mobile'],
            'salt'          => $salt,
            'password'      => $password,
            'create_time'   => $time,
            'distribution_code' => generate_invite_code(),//分销邀请码
            'is_distribution' => DistributionLogic::isDistributionMember(),//是否为分销会员
        ];

        $user_data['nickname'] = '用户'.$user_data['sn'];

        $user = new User();
        $user->save($user_data);

        $token = self::createSession($user->id, $client);

        //生成会员分销扩展表
        DistributionLogic::createUserDistribution($user->id);
        //注册赠送
        self::registerAward($user->id);
        //消息通知
        Hook::listen('notice', [
            'user_id'  => $user->id,
            'scene'    => NoticeSetting::REGISTER_SUCCESS_NOTICE,
        ]);
        return $token;
    }
    /**
     * User: 意象信息科技 lr
     * Desc: 小程序登录
     * @param $post
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws Exception
     * @throws \EasyWeChat\Kernel\Exceptions\DecryptException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function mnpLogin($post)
    {
        //微信调用
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $response = $app->auth->session($post['code']);
            if (!isset($response['openid']) || empty($response['openid'])) {
                throw new Exception('获取openID失败');
            }
        } catch (Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        }catch (\think\Exception $e){
            return self::dataError('登录失败:' . $e->getMessage());
        }

        //添加或更新用户
        $user_id = Db::name('user_auth au')
            ->join('user u', 'au.user_id=u.id')
            ->where(['u.del' => 0])
            ->where(function ($query) use ($response) {
                $query->whereOr(['au.openid' => $response['openid']]);
                    if(isset($response['unionid']) && !empty($response['unionid'])){
                      $query->whereOr(['au.unionid' => $response['unionid']]);
                    }
            })
            ->value('user_id');

        if (empty($user_id)) {
            $user_info = UserServer::createUser($response, Client_::mnp);
        } else {
            $user_info = UserServer::updateUser($response, Client_::mnp, $user_id);
        }

        if ($user_info['disable']) {
            return self::dataError('该用户被禁用');
        }


        if (empty($user_info)) {
            return self::dataError('登录失败:user');
        }

        //创建会话
        $user_info['token'] = self::createSession($user_info['id'], Client_::mnp);


        unset($user_info['id']);
        unset($user_info['disable']);
        return self::dataSuccess('登录成功', $user_info);

    }

    /**
     * 获取code的url
     * @param $url
     * @return string
     */
    public static function codeUrl($url)
    {
        $config = WeChatServer::getOaConfig();
        $app = Factory::officialAccount($config);
        $response = $app
            ->oauth
            ->scopes(['snsapi_userinfo'])
            ->redirect($url)
            ->getTargetUrl();
        return $response;
    }


    /**
     * User: 意象信息科技 lr
     * Desc: 微信公众号登录
     * @param $post
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws Exception
     * @throws \EasyWeChat\Kernel\Exceptions\DecryptException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function oaLogin($post)
    {
        //微信调用
        try {
            $config = WeChatServer::getOaConfig();
            $app = Factory::officialAccount($config);
            $response = $app
                ->oauth
                ->scopes(['snsapi_userinfo'])
                ->getAccessToken($post['code']);
            if (!isset($response['openid']) || empty($response['openid'])) {
                throw new Exception();
            }
            $user = $app->oauth->user($response);
            $user = $user->getOriginal();
        } catch (Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        }catch (\think\Exception $e){
            return self::dataError('登录失败:' . $e->getMessage());
        }

        //添加或更新用户
        $user_id = Db::name('user_auth au')
            ->join('user u', 'au.user_id=u.id')
            ->where(['u.del' => 0])
            ->where(function ($query) use ($user) {
                $query->whereOr(['au.openid' => $user['openid']]);
                if(isset($user['unionid']) && !empty($user['unionid'])){
                    $query->whereOr(['au.unionid' => $user['unionid']]);
                }
            })
            ->value('user_id');

        if (empty($user_id)) {
            $user_info = UserServer::createUser($user, Client_::oa);
        } else {
            $user_info = UserServer::updateUser($user, Client_::oa, $user_id);
        }

        if (empty($user_info)) {
            return self::dataError('登录失败:user');
        }

        if ($user_info['disable']) {
            return self::dataError('该用户被禁用');
        }

        //创建会话
        $user_info['token'] = self::createSession($user_info['id'], Client_::oa);


        unset($user_info['id']);
        unset($user_info['disable']);
        return self::dataSuccess('登录成功', $user_info);

    }

    /**
     * User: 意象信息科技 lr
     * Desc: 微信第三方app登录
     * @param $post
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws Exception
     * @throws \EasyWeChat\Kernel\Exceptions\DecryptException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function opLogin($post)
    {
        //微信调用
        try {
            $config = WeChatServer::getOpConfig();
            $app = Factory::officialAccount($config);
            $response = $app
                ->oauth
                ->scopes(['snsapi_userinfo'])
                ->getAccessToken($post['code']);
            $app->access_token->setToken($response->offsetGet('access_token'));

            //sdk不支持app登录，直接调用微信接口
            $requests = Requests::get('https://api.weixin.qq.com/sns/userinfo?openid=' . 'openid=' . $response->offsetGet('openid') . '&access_token=' . $response->offsetGet('access_token')
            );
            $user = json_decode($requests->body, true);
        } catch (Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        }catch (\think\Exception $e){
            return self::dataError('登录失败:' . $e->getMessage());
        }


        //添加或更新用户
        $user_id = Db::name('user_auth au')
            ->join('user u', 'au.user_id=u.id')
            ->where(['u.del' => 0])
            ->where(function ($query) use ($user) {
                $query->whereOr(['au.openid' => $user['openid']])
                    ->whereOr(['au.unionid' => $user['unionid']]);
            })
            ->value('user_id');

        if (empty($user_id)) {
            $user_info = UserServer::createUser($user, $post['client']);
        } else {
            $user_info = UserServer::updateUser($user, $post['client'], $user_id);
        }

        if (empty($user_info)) {
            return self::dataError('登录失败:user');
        }

        if ($user_info['disable']) {
            return self::dataError('该用户被禁用');
        }

        //创建会话
        $user_info['token'] = self::createSession($user_info['id'], $post['client']);


        unset($user_info['id']);
        unset($user_info['disable']);
        return self::dataSuccess('登录成功', $user_info);

    }

    /**
     * app登录
     * @param $post
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function login($post)
    {
        $user_info = Db::name('user')
            ->field(['id', 'nickname', 'avatar', 'level', 'disable', 'distribution_code'])
            ->where(['account|mobile' => $post['account']])
            ->find();
        $user_info['token'] = self::createSession($user_info['id'], $post['client']);
        if (empty($user_info['avatar'])) {
            $user_info['avatar'] = UrlServer::getFileUrl(ConfigServer::get('website', 'user_image'));
        } else {
            $user_info['avatar'] = UrlServer::getFileUrl($user_info['avatar']);
        }
        return $user_info;
    }

    /**
     * 退出登录
     * @param $user_id
     * @param $client
     * @return string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function logout($user_id, $client)
    {
        return self::expirationSession($user_id, $client);
    }


    /**
     * 设置会话过期
     * @param $user_id
     * @param $client
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function expirationSession($user_id, $client)
    {
        $time = time();
        $token = Db::name('session')
            ->where(['user_id' => $user_id, 'client' => $client])
            ->value('token');
        $token_cache = new TokenCache($token);
        $token_cache->del();
        return Db::name('session')
            ->where(['user_id' => $user_id, 'client' => $client])
            ->update(['update_time' => $time, 'expire_time' => $time]);
    }


    /**
     * 创建会话
     * @param $user_id
     * @param $client
     * @return string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function createSession($user_id, $client)
    {

        //清除之前缓存
        $token = Db::name('session')
            ->where(['user_id' => $user_id, 'client' => $client])
            ->value('token');
        if($token) {
            $token_cache = new TokenCache($token);
            $token_cache->del();
        }

        $result = Db::name('session')
            ->where(['user_id' => $user_id, 'client' => $client])
            ->find();

        $time = time();
        $expire_time = $time + Config::get('project.token_expire_time');
        $token = md5($user_id . $client . $time);
        $data = [
            'user_id' => $user_id,
            'token' => $token,
            'client' => $client,
            'update_time' => $time,
            'expire_time' => $expire_time,
        ];

        if (empty($result)) {
            Db::name('session')->insert($data);
        } else {
            Db::name('session')
                ->where(['user_id' => $user_id, 'client' => $client])
                ->update($data);
        }

        //更新登录信息
        $login_ip = $ip = request()->ip();
        Db::name('user')
            ->where(['id' => $user_id])
            ->update(['login_time' => $time, 'login_ip' => $login_ip]);

        //创建新的缓存
        (new TokenCache($token, ['token' => $token]))->set(300);
        return $token;
    }

    public static function registerAward($user_id){
        $register_award_integral_status = ConfigServer::get('marketing','register_award_integral_status',0);
        $register_award_coupon_status = ConfigServer::get('marketing','register_award_coupon_status',0);
        //赠送积分
        if($register_award_integral_status){
            $register_award_integral = ConfigServer::get('marketing','register_award_integral',0);
            //赠送的积分
            if($register_award_integral > 0){
                Db::name('user')->where(['id'=>$user_id])->setInc('user_integral',$register_award_integral);
                AccountLogLogic::AccountRecord($user_id,$register_award_integral,1,AccountLog::register_add_integral,'');
            }
        }
        //注册账号，首次进入首页时领取优惠券
        $register_award_coupon = ConfigServer::get('marketing','register_award_coupon','');
        if($register_award_coupon_status && $register_award_coupon){
            Cache::tag('register_coupon')->set('register_coupon_'.$user_id,$register_award_coupon);
        }
        //会员等级
        $user_level = Db::name('user_level')->where(['del'=>0,'growth_value'=>0])->find();
        if($user_level){
            Db::name('user')->where(['id'=>$user_id])->update(['level'=>$user_level['id']]);
        }
    }


    /**
     * Notes: uniApp微信登录
     * @param $post
     * @author 段誉(2021/3/16 16:17)
     * @return array
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function uinAppLogin($post)
    {
        //微信调用
        try {
            if (empty($post['openid']) || empty($post['access_token']) || empty($post['client'])){
                throw new \think\Exception('参数缺失');
            }

            //sdk不支持app登录，直接调用微信接口
            $requests = Requests::get('https://api.weixin.qq.com/sns/userinfo?openid=' . 'openid=' . $post['openid'] . '&access_token=' . $post['access_token']);
            $user = json_decode($requests->body, true);
        } catch (Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        }catch (\think\Exception $e){
            return self::dataError('登录失败:' . $e->getMessage());
        }

        //添加或更新用户
        $user_id = Db::name('user_auth au')
            ->join('user u', 'au.user_id=u.id')
            ->where(['u.del' => 0])
            ->where(function ($query) use ($user) {
                $query->whereOr(['au.openid' => $user['openid']])
                    ->whereOr(['au.unionid' => $user['unionid']]);
            })
            ->value('user_id');

        if (empty($user_id)) {
            $user_info = UserServer::createUser($user, $post['client']);
        } else {
            $user_info = UserServer::updateUser($user, $post['client'], $user_id);
        }

        if (empty($user_info)) {
            return self::dataError('登录失败:user');
        }

        if ($user_info['disable']) {
            return self::dataError('该用户被禁用');
        }

        //创建会话
        $user_info['token'] = self::createSession($user_info['id'], $post['client']);

        unset($user_info['id']);
        unset($user_info['disable']);
        return self::dataSuccess('登录成功', $user_info);
    }






    /**
     * Notes: 根据微信返回信息查询当前用户id
     * @param $response
     * @author 段誉(2021/4/19 16:52)
     * @return mixed
     */
    public static function getUserByWechatResponse($response)
    {
        $user_id = Db::name('user_auth au')
            ->join('user u', 'au.user_id=u.id')
            ->where(['u.del' => 0])
            ->where(function ($query) use ($response) {
                $query->whereOr(['au.openid' => $response['openid']]);
                if(isset($response['unionid']) && !empty($response['unionid'])){
                    $query->whereOr(['au.unionid' => $response['unionid']]);
                }
            })
            ->value('user_id');
        return $user_id;
    }




    /**
     * Notes: 根据code 获取微信信息(openid, unionid)
     * @param $post
     * @author 段誉(2021/4/19 16:52)
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws Exception
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public static function getWechatResByCode($post)
    {
        $config = WeChatServer::getMnpConfig();
        $app = Factory::miniProgram($config);
        $response = $app->auth->session($post['code']);
        if (!isset($response['openid']) || empty($response['openid'])) {
            throw new Exception('获取openID失败');
        }
        return $response;
    }


    /**
     * Notes: 检车用户信息
     * @param $user_info
     * @author 段誉(2021/4/19 16:54)
     * @return bool|string
     */
    public static function checkUserInfo($user_info)
    {
        if (empty($user_info)) {
            return '登录失败:user';
        }

        if ($user_info['disable']) {
            return '该用户被禁用';
        }

        return true;
    }


    /**
     * Notes: 旧用户登录
     * @param $post
     * @author 段誉(2021/4/19 16:57)
     * @return array
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function silentLogin($post)
    {
        try {
            //通过code获取微信 openid
            $response = self::getWechatResByCode($post);
            //通过获取到的openID或unionid获取当前 系统 用户id
            $user_id = self::getUserByWechatResponse($response);

        } catch (Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        } catch (\think\Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        }

        if (empty($user_id)) {
            //系统中没有用户-调用authlogin接口生成新用户
            return self::dataSuccess('', []);
        } else {
            $user_info = UserServer::updateUser($response, Client_::mnp, $user_id);
        }

        //验证用户信息
        $check_res = self::checkUserInfo($user_info);
        if (true !== $check_res) {
            return self::dataError($check_res);
        }

        //创建会话
        $user_info['token'] = self::createSession($user_info['id'], Client_::mnp);

        unset($user_info['id'], $user_info['disable']);
        return self::dataSuccess('登录成功', $user_info);
    }


    /**
     * Notes: 新用户登录
     * @param $post
     * @author 段誉(2021/4/19 16:57)
     * @return array
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function authLogin($post)
    {
        try {
            //通过code获取微信 openid
            $response = self::getWechatResByCode($post);
            $response['headimgurl'] = $post['headimgurl'] ?? '';
            $response['nickname'] = $post['nickname'] ?? '';
            //通过获取到的openID或unionid获取当前 系统 用户id
            $user_id = self::getUserByWechatResponse($response);

        } catch (Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        } catch (\think\Exception $e) {
            return self::dataError('登录失败:' . $e->getMessage());
        }

        if (empty($user_id)) {
            $user_info = UserServer::createUser($response, Client_::mnp);
        } else {
            $user_info = UserServer::updateUser($response, Client_::mnp, $user_id);
        }

        //验证用户信息
        $check_res = self::checkUserInfo($user_info);
        if (true !== $check_res) {
            return self::dataError($check_res);
        }

        //创建会话
        $user_info['token'] = self::createSession($user_info['id'], Client_::mnp);

        unset($user_info['id'], $user_info['disable']);
        return self::dataSuccess('登录成功', $user_info);
    }

}