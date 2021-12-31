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

namespace app\api\controller;
use app\api\logic\IndexLogic;
use app\common\model\Client_;
use app\common\model\MessageScene_;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\facade\Hook;
use think\Db;
class Index extends ApiBase
{
   public $like_not_need_login = ['test', 'lists', 'appInit', 'downLine', 'share', 'config','pcLists'];
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
                    'mnp_share_title' => ''
                ]);
                break;
            case Client_::oa:
                $config = ConfigServer::get('share', 'h5', [
                    'h5_share_title' => '',
                    'h5_share_intro' => '',
                    'h5_share_image' => ''
                ]);
                if (!empty($config['h5_share_image']) and $config['h5_share_image'] !== '') {
                    $config['h5_share_image'] = UrlServer::getFileUrl($config['h5_share_image']);
                }
                break;
            case Client_::android:
            case Client_::ios:
                $config = ConfigServer::get('share', 'app', [
                    'app_share_title' => '',
                    'app_share_intro' => '',
                    'app_share_image' => ''
                ]);
                if (!empty($config['app_share_image']) and $config['app_share_image'] !== '') {
                    $config['app_share_image'] = UrlServer::getFileUrl($config['app_share_image']);
                }
                break;
        }
        return $this->_success('获取成功', $config);
    }


    /**
     * Notes: 设置
     * @author 段誉(2021/2/25 15:39)
     */
    public function config()
    {
        $navigation = Db::name('dev_navigation')
          ->field('name,selected_icon,un_selected_icon')
          ->where('del', 0)
          ->order('id', 'desc')
          ->select();
        foreach($navigation as &$item) {
          $item['selected_icon'] =  empty($item['selected_icon']) ? '' : UrlServer::getFileUrl($item['selected_icon']);
          $item['un_selected_icon'] =  empty($item['un_selected_icon']) ? '' : UrlServer::getFileUrl($item['un_selected_icon']);
        }
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
            'ios_download'     => ConfigServer::get('app', 'line_ios', ''),//ios_app下载链接
            'android_download' => ConfigServer::get('app', 'line_android', ''),//安卓下载链接
            'download_doc'     => ConfigServer::get('app', 'download_doc', ''),//app下载文案
            'cate_style'       => ConfigServer::get('decoration', 'layout_no', 1),//分类页面风格
            'index_setting' => [ // 首页设置
              // 热销榜单
              'logo' => ConfigServer::get('decoration', 'index_setting_logo', 1),
              // 热销榜单
              'hots' => ConfigServer::get('decoration', 'index_setting_hots', 1),
              // 新品推荐
              'news' => ConfigServer::get('decoration', 'index_setting_news', 1),
              // 顶部背景图
              'top_bg_image' => UrlServer::getFileUrl(ConfigServer::get('decoration', 'index_setting_top_bg_image', ''))
            ],
            'center_setting' => [ // 个人中心设置
              // 顶部背景图
              'top_bg_image' => UrlServer::getFileUrl(ConfigServer::get('decoration', 'center_setting_top_bg_image', ''))
            ],
            'navigation_setting' => [ // 底部导航设置
              // 未选中文字颜色
              'ust_color' => ConfigServer::get('decoration', 'navigation_setting_ust_color', '#000000'),
              // 选中文字颜色
              'st_color' => ConfigServer::get('decoration', 'navigation_setting_st_color', '#000000'),
              // 顶部背景图
              // 'top_bg_image' => UrlServer::getFileUrl(ConfigServer::get('decoration', 'navigation_setting_top_bg_image', ''))
            ],
            // 首页底部导航菜单
            'navigation_menu' => $navigation
        ];
        $this->_success('', $config);
    }


}