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


namespace app\admin\controller;

use app\admin\logic\LogLogic;
use think\helper\Time;

class Log extends AdminBase
{

    /**
     * 系统日志
     * @return mixed
     */
    public function lists()
    {


        if ($this->request->isAjax()) {
            $limit = $this->request->get('limit', 20);
            $page_no = $this->request->get('page', 1);
            $get = $this->request->get();
            $this->_success('', LogLogic::lists($page_no, $limit, $get));
        }


        $today = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::today());
        $this->assign('today', $today);

        $yesterday = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::yesterday());
        $this->assign('yesterday', $yesterday);


        $days_ago7 = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::dayToNow(7));
        $this->assign('days_ago7', $days_ago7);

        $days_ago30 = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::dayToNow(30, true));
        $this->assign('days_ago30', $days_ago30);
        return $this->fetch();
    }

}