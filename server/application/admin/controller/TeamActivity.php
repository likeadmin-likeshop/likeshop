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

namespace app\admin\controller;

use app\admin\logic\TeamActivityLogic;
use app\common\model\Team;
use think\helper\Time;

/**
 * 拼团商品管理 - 控制器
 * Class TeamActivity
 * @package app\admin\controller
 */
class TeamActivity extends AdminBase
{
    /**
     * Notes: 列表
     * @author 张无忌(2021/1/12 15:51)
     * @return mixed
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = TeamActivityLogic::lists($get);
            $this->_success('获取成功', $lists);
        }

        return $this->fetch('team_activity/lists');
    }

    /**
     * Notes: 添加
     * @author 张无忌(2021/1/12 15:52)
     * @return mixed
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $check = $this->validate($post, 'app\admin\validate\TeamActivity.add');
            if ($check !== true) {
                $this->_error($check);
            }
            if (TeamActivityLogic::add($post)) {
                $this->_success('新增成功');
            } else {
                $error = TeamActivityLogic::getError() ?? '新增失败';
                $this->_error($error);
            }
        }

        return $this->fetch('team_activity/add');
    }

    /**
     * Notes: 编辑
     * @author 张无忌(2021/1/12 15:52)
     * @return mixed
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $check = $this->validate($post, 'app\admin\validate\TeamActivity');
            if ($check !== true) {
                $this->_error($check);
            }
            if (TeamActivityLogic::edit($post)) {
                $this->_success('更新成功');
            } else {
                $error = TeamActivityLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }

        $id = $this->request->get('id');
        $this->assign('detail', TeamActivityLogic::getDetail($id));
        return $this->fetch('team_activity/edit');
    }

    /**
     * Notes: 删除
     * @author 张无忌(2021/1/12 15:52)
     * @return mixed
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id');
            if (TeamActivityLogic::softDelete($id)) {
                $this->_success('删除成功');
            } else {
                $error = TeamActivityLogic::getError() ?? '删除失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 切换状态
     * @author 张无忌(2021/1/13 18:01)
     */
    public function switchStatus()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (TeamActivityLogic::switchStatus($post)) {
                $this->_success('更新成功');
            } else {
                $error = TeamActivityLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 参团订单
     * @author 张无忌(2021/1/13 18:21)
     */
    public function teamOrder()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = TeamActivityLogic::teamOrder($get);
            $this->_success('获取成功', $lists);
        }

        $team_id = $this->request->get('id', 0, 'intval');
        $this->assign('team_id', $team_id);
        $this->assign('team_status', Team::getStatusDesc(true));
        return $this->fetch('team_activity/team_order');
    }
}