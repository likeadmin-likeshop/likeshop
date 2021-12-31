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
        $set['footprint_duration'] = ConfigServer::get('footprint','footprint_duration',60);
        $set['footprint_status'] = ConfigServer::get('footprint','footprint_status',0);
        $this->assign('set', $set);
        $this->assign('footprint', FootprintLogic::lists());
        return $this->fetch();
    }

    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FootprintLogic::edit($post);
            if ($result) {
                $this->_success('编辑成功');
            }
            $this->_error('编辑失败');
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
                $this->_success('更新成功');
            }
            $this->_error('更新失败');
        }
    }
}