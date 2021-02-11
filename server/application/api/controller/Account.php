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
use app\api\logic\LoginLogic;
use app\api\logic\WechatLogin;

class Account extends ApiBase
{

    public $like_not_need_login = ['register','applogin', 'login', 'mnplogin', 'codeurl', 'oalogin', 'oplogin','logout','smslogin'];


    /**
     * note 注册接口
     * create_time 2020/10/23 18:42
     */
    public function register(){
        $post  = $this->request->post();
        $result = $this->validate($post,'app\api\validate\Register');
        if($result ===true){
            $data = LoginLogic::register($post);
            if($data){
                $this->_success('注册成功',$data);
            }
            $this->_error('获取失败',$result,0);
        }$this->_error($result,'',0);
    }
    /**
     * showdoc
     * @catalog 接口/账号
     * @title 手机号账号登录
     * @description 手机号账号登录
     * @method post
     * @url /account/login
     * @return {"code":1,"msg":"登录成功","data":["token":"3237676fa733d73333341",//登录令牌"nickname":"好象cms-小林",//昵称"avatar":"http://b2c.yixiangonline.com/uploads/user/avatar/3f102df244d5b40f21c4b25dc321c5ab.jpeg",//头像url"level":0,//等级],"show":0,"time":"0.775400"}
     * @param account 必填 string 账号或手机号
     * @param id 必填 int 1-密码登录-2-验证码登录
     * @param password 必填 string 密码
     * @param client 必填 int 客户端类型：2-h5，3-ios，4-android
     * @return_param token string 登录令牌
     * @return_param nickname string 昵称
     * @return_param avatar string 头像
     * @remark
     * @number 1
     */
    public function login()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Login.password');
        if (true !== $check) {
            $this->_error($check);
        }
        $data = LoginLogic::login($post);
        $this->_success('登录成功', $data);
    }

    /**
     * 验证码登录
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
     public function smsLogin(){
         $post = $this->request->post();
         $post['message_key'] = 'YZMDL';
         $check = $this->validate($post, 'app\api\validate\Login.code');
         if (true !== $check) {
             $this->_error($check);
         }
         $data = LoginLogic::login($post);
         $this->_success('登录成功', $data);
     }

    /**
     * showdoc
     * @catalog 接口/账号
     * @title 小程序登录
     * @description 小程序登录
     * @method post
     * @url /account/mnpLogin
     * @return {"code":1,"msg":"登录成功","data":["token":"3237676fa733d73333341",//登录令牌"nickname":"好象cms-小林",//昵称"avatar":"http://b2c.yixiangonline.com/uploads/user/avatar/3f102df244d5b40f21c4b25dc321c5ab.jpeg",//头像url"level":0,//等级],"show":0,"time":"0.775400"}
     * @param code 必填 string code
     * @param iv 必填 string iv
     * @param encrypted_data 必填 string encrypted_data
     * @return_param token string 登录令牌
     * @return_param nickname string 昵称
     * @return_param avatar string 头像
     * @remark
     * @number 1
     */
    public function mnpLogin()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\MnpLogin');
        if (true !== $check) {
            $this->_error($check);
        }
        $data = LoginLogic::mnpLogin($post);
        $this->_success($data['msg'], $data['data'], $data['code']);
    }


    /**
     * showdoc
     * @catalog 接口/账号
     * @title 获取获取向微信请求code的链接
     * @description
     * @method get
     * @url /account/codeurl
     * @param url 必填 varchar 前端当前url
     * @return_param url string codeurl
     * @remark 这里是备注信息
     * @number 0
     * @return  {"code":1,"msg":"获取成功","data":{"url":'http://mp.weixin……'}}
     */
    public function codeUrl()
    {
        $url = $this->request->get('url');
        $this->_success('获取成功', ['url' => LoginLogic::codeUrl($url)], 1);
    }

    /**
     * showdoc
     * @catalog 接口/账号
     * @title 微信H5登录
     * @description 微信H5登录
     * @method post
     * @url /account/oalogin
     * @return {"code":1,"msg":"登录成功","data":["token":"3237676fa733d73333341",//登录令牌"nickname":"好象cms-小林",//昵称"avatar":"http://b2c.yixiangonline.com/uploads/user/avatar/3f102df244d5b40f21c4b25dc321c5ab.jpeg",//头像url"level":0,//等级],"show":0,"time":"0.775400"}
     * @param code 必填 string code
     * @return_param token string 登录令牌
     * @return_param nickname string 昵称
     * @return_param avatar string 头像
     * @remark
     * @number 1
     */
    public function oaLogin()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\OaLogin');
        if (true !== $check) {
            $this->_error($check);
        }
        $data = LoginLogic::oaLogin($post);
        $this->_success($data['msg'], $data['data'], $data['code']);
    }

    /**
     * showdoc
     * @catalog 接口/账号
     * @title 微信第三方app登录
     * @description 微信第三方app登录
     * @method post
     * @url /account/oplogin
     * @return {"code":1,"msg":"登录成功","data":["token":"3237676fa733d73333341",//登录令牌"nickname":"好象cms-小林",//昵称"avatar":"http://b2c.yixiangonline.com/uploads/user/avatar/3f102df244d5b40f21c4b25dc321c5ab.jpeg",//头像url"level":0,//等级],"show":0,"time":"0.775400"}
     * @param code 必填 string code
     * @param client 必填 int 客户端类型：3-ios，4-android
     * @return_param token string 登录令牌
     * @return_param nickname string 昵称
     * @return_param avatar string 头像
     * @remark
     * @number 1
     */
    public function opLogin()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\OpLogin');
        if (true !== $check) {
            $this->_error($check);
        }
        $data = LoginLogic::opLogin($post);
        $this->_success($data['msg'], $data['data'], $data['code']);
    }


    /**
     * 退出登录
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function logout()
    {
        LoginLogic::logout($this->user_id, $this->client);
        //退出登录只有成功
        $this->_success();
    }


}