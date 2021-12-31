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
namespace app\index\controller;

use app\common\server\ConfigServer;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $template = app()->getRootPath() . 'public/mobile/index.html';
        if (file_exists($template)) {
            return view($template);
        }
        return '';
    }


    public function app()
    {

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')) {
            $url = ConfigServer::get('app', 'line_ios', '');
        } else {
            $url = ConfigServer::get('app', 'line_android', '');
        }

        if (empty($url)) {
            echo '未设置app下载链接';
            exit;
        }
        if (!preg_match("/^http(s)?:\\/\\/.+/", $url)) {
            $url = "http://".$url;
        }

        $this->redirect($url);
    }
}
