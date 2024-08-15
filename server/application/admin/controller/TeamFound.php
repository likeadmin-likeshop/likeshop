<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------

namespace app\admin\controller;


use app\admin\logic\TeamFoundLogic;
use app\common\model\Team;
use think\helper\Time;

class TeamFound extends AdminBase
{
    /**
     * Notes: 列表
     * @author 张无忌(2021/1/15 17:24)
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = TeamFoundLogic::lists($get);
            $this->_success('获取成功', $lists);
        }

        $days_ago7 = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::dayToNow(7));
        $days_ago30 = array_map(function ($time) {
            return date('Y-m-d H:i:s', $time);
        }, Time::dayToNow(30, true));

        $this->assign('days_ago7', $days_ago7);
        $this->assign('days_ago30', $days_ago30);
        $this->assign('team_status', Team::getStatusDesc(true));
        return $this->fetch('team_found/lists');
    }

    /**
     * Notes: 拼团详细
     * @author 张无忌(2021/1/15 17:24)
     */
    public function detail()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = TeamFoundLogic::teamOrderListById($get);
            $this->_success('获取成功', $lists);
        }

        $found_id = $this->request->get('found_id', 0, 'intval');
        $this->assign('found_id', $found_id);
        $this->assign('detail', TeamFoundLogic::getDetail($found_id));
        return $this->fetch('team_found/detail');
    }

    /**
     * Notes: 退款列表
     * @author 张无忌(2021/1/19 9:55)
     * @return mixed
     */
    public function refundDetail()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = TeamFoundLogic::getRefundDetail($get);
            $this->_success('获取成功', $lists);
        }

        $found_id = $this->request->get('found_id', 0, 'intval');
        $this->assign('found_id', $found_id);
        return $this->fetch('team_found/refund');
    }

    /**
     * Notes: 实现-原路退款
     * @author 张无忌(2021/1/18 17:43)
     */
    public function handlerRefund()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (TeamFoundLogic::handleRefund($post, $this->admin_id)) {
                $this->_success('退款成功');
            }
            $error = TeamFoundLogic::getError() ?: '退款失败';
            $this->_error($error);
        }
    }
}