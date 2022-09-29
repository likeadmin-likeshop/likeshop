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