<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam-张无忌
// +----------------------------------------------------------------------


namespace app\admin\controller;

use app\admin\logic\FootprintLogic;
use app\common\server\ConfigServer;

/**
 * 访问足迹(气泡足迹)
 * Class Footprint
 * @package app\admin\controller
 */
class Footprint extends AdminBase
{
    public function index()
    {
        $this->assign('set', ConfigServer::get('footprint'));
        $this->assign('footprint', FootprintLogic::lists());
        return $this->fetch();
    }

    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FootprintLogic::edit($post);
            if ($result) {
                $this->success('编辑成功');
            }
            $this->error('编辑失败');
        }

        $id = $this->request->get('id', 0, 'intval');
        $this->assign('info', FootprintLogic::info($id));
        return $this->fetch();
    }

    public function set()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FootprintLogic::set($post);
            if ($result) {
                $this->success('更新成功');
            }
            $this->error('更新失败');
        }
    }
}