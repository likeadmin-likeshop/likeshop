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
use app\api\logic\IndexLogic;
use app\common\model\Client_;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;

class Index extends ApiBase
{
   public $like_not_need_login = ['lists', 'appInit', 'downLine', 'share', 'config'];
    /**
     * note 首页接口
     * create_time 2020/10/21 19:05
     */
   public function lists(){
        $lists = IndexLogic::lists($this->user_id);
        return $this->_success('',$lists);
   }

    /**
     * app下载链接  todo lr未完成
     */
    public function downLine()
    {
        $get = $this->request->get();
        $check = $this->validate($get, 'app\api\validate\App');
        if (true !== $check) {
            $this->_error($check);
        }
        if(isset($get['client']) && $get['client'] == Client_::ios){
            $this->_success('', ['line' => ConfigServer::get('app', 'line_ios', '')]);
        }else{
            $this->_success('', ['line' => ConfigServer::get('app', 'line_android', '')]);
        }
    }
    /**
     * app初始化接口
     * 苹果不允许单独只有微信第三方登录
     */
    public function appInit()
    {
        $data = [
            'wechat_login' =>  ConfigServer::get('app', 'wechat_login', '',0),//微信登录
            //弹出协议
            'agreement' => ConfigServer::get('app', 'agreement', '',1)
        ];
        $this->_success('', $data);
    }

    /**
     * Notes: 获取分享信息
     * @author 张无忌(2021/1/20 17:04)
     * @return array|mixed|string
     */
    public function share()
    {
        $client = $this->request->get('client', Client_::mnp, 'intval');
        $config = [];
        switch ($client) {
            case Client_::mnp:
                $config = ConfigServer::get('share', 'mnp', [
                    'mnp_share_title' => 'LikeShop——100%开源免费商用电商系统'
                ]);
                break;
            case Client_::oa:
                $config = ConfigServer::get('share', 'h5', [
                    'h5_share_title' => 'LikeShop——100%开源免费商用电商系统',
                    'h5_share_intro' => 'likeshop已经把小程序、安卓APP、苹果APP都免费开源出来了！',
                    'h5_share_image' => ''
                ]);
                if (empty($config['h5_share_image']) and $config['h5_share_image'] !== '') {
                    $config['h5_share_image'] = UrlServer::getFileUrl($config['h5_share_image']);
                }
                break;
            case Client_::android:
            case Client_::ios:
                $config = ConfigServer::get('share', 'app', [
                    'app_share_title' => 'LikeShop——100%开源免费商用电商系统',
                    'app_share_intro' => 'likeshop已经把小程序、安卓APP、苹果APP都免费开源出来了！',
                    'app_share_image' => ''
                ]);
                if (empty($config['app_share_image']) and $config['app_share_image'] !== '') {
                    $config['app_share_image'] = UrlServer::getFileUrl($config['app_share_image']);
                }
                break;
        }
        return $config;
    }

    /**
     * Notes: 设置
     * @author 段誉(2021/2/25 15:39)
     */
    public function config()
    {
        $config = [
            'register_setting' => ConfigServer::get('register_setting', 'open', 0),//注册设置-是否开启短信验证注册
            'app_wechat_login' => ConfigServer::get('app', 'wechat_login', 0),//APP是否允许微信授权登录
            'shop_login_logo'  => UrlServer::getFileUrl(ConfigServer::get('website', 'shop_login_logo')),//移动端登录页logo
            'web_favicon'      => UrlServer::getFileUrl(ConfigServer::get('website', 'web_favicon')),//浏览器标签图标
            'name'             => ConfigServer::get('website', 'name'),//商城名称
            'copyright_info'   => ConfigServer::get('copyright', 'company_name'),//版权信息
            'icp_number'       => ConfigServer::get('copyright', 'number'),//ICP备案号
            'icp_link'         => ConfigServer::get('copyright', 'link'),//备案号链接
            'app_agreement'    => ConfigServer::get('app', 'agreement', 0),//app弹出协议
        ];
        $this->_success('', $config);
    }
}