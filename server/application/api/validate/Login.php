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


namespace app\api\validate;


use app\common\model\Client_;
use think\Db;
use think\facade\Cache;
use think\Validate;
use app\common\logic\SmsLogic;
class Login extends Validate
{


    public function __construct(array $rules = [], array $message = [], array $field = [])
    {
        parent::__construct($rules, $message, $field);
    }


    protected $rule = [
        'account' => 'require',
        'password' => 'require|password',
        'client' => 'require|in:' . Client_::h5 . ',' . Client_::ios . ',' . Client_::android,
        'code'=>'require|checkCode',
    ];

    protected $message = [
        'account.require' => '请输入账号或手机号',
        'password.require' => '请输入密码',
        'password.password' => '密码错误',
        'client.in' => '当前只支持h5和app登录',
        'code.require'=>'请输入验证码',
    ];

    public function scenePassword()
    {
        $this->remove(['code']);
    }

    public function sceneCode()
    {
        $this->only(['account','code','client']);
    }


    public static function checkCode($value,$rule,$data){
        $sms_logic = new SmsLogic($data['message_key'],$data['account'],$value);
        $check = $sms_logic->checkCode();
        //检查验证码是否正确
        if($check !== true){
            return $check;
        }
        //标记验证码已验证
        $sms_logic->cancelCode();
        return true;
    }

    /**
     * 账号密码验证码
     * @param $password
     * @param $other
     * @param $data
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function password($password, $other, $data)
    {
        if ($this->safe() === false) {
            $this->message['password.password'] .= ':多次输入错误';
            return false;
        }
        $admin_info = Db::name('user')
            ->where(['account|mobile' => $data['account'], 'del' => 0])
            ->find();

        if (empty($admin_info)) {
            $this->safe(true);
            return false;
        }
        if ($admin_info['disable']) {
            return '账号被禁用';
        }
        $password = create_password($password, $admin_info['salt']);
        if ($password != $admin_info['password']) {
            $this->safe(true);
            return false;
        }
        return true;
    }

    /**
     * 连续30分钟内15次输错密码，无法登录
     * @param bool $add
     * @return bool
     */
    protected function safe($add = false)
    {
        $cache_name = 'app_login_error_count' . request()->ip();
        if ($add) {
            $admin_login_error_count = Cache::get($cache_name);
            $admin_login_error_count++;
            Cache::tag('app_login_error_count')->set($cache_name, $admin_login_error_count, 1800);
        }
        $count = Cache::get($cache_name);
        if (!empty($count) && $count >= 15) {
            return false;
        }
        return true;
    }

}