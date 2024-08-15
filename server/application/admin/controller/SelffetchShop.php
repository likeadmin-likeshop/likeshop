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


use app\admin\logic\SelffetchShopLogic;
use app\common\server\ConfigServer;

class SelffetchShop extends AdminBase
{
    /**
     * @notes 查看自提门店列表
     * @return mixed
     * @author ljj
     * @date 2021/8/14 6:02 下午
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', SelffetchShopLogic::lists($params));
        }

        return $this->fetch();
    }

    /**
     * @notes 添加自提门店
     * @return mixed
     * @author ljj
     * @date 2021/8/16 11:22 上午
     */
    public function add()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchShop.add');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchShopLogic::add($params);
            if ($result !== true) {
                $this->_error('添加失败:' . $result);
            }
            $this->_success('添加成功');
        }

        $this->assign('tx_map_key',ConfigServer::get('map','tx_map_key',''));
        $this->assign('area_lists', json_encode(SelffetchShopLogic::getAreaLists(), JSON_UNESCAPED_UNICODE));
        return $this->fetch();
    }

    /**
     * @notes 编辑自提门店
     * @param $id
     * @return mixed
     * @author ljj
     * @date 2021/8/16 2:15 下午
     */
    public function edit($id)
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchShop.edit');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchShopLogic::edit($params);
            if ($result !== true) {
                $this->_error('修改失败:' . $result);
            }
            $this->_success('修改成功');
        }

        $this->assign('tx_map_key',ConfigServer::get('map','tx_map_key',''));
        $this->assign('area_lists', json_encode(SelffetchShopLogic::getAreaLists(), JSON_UNESCAPED_UNICODE));
        $this->assign('detail', SelffetchShopLogic::detail($id));
        return $this->fetch();
    }

    /**
     * @notes 修改自提门店状态
     * @author ljj
     * @date 2021/8/16 2:35 下午
     */
    public function status()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchShop.status');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchShopLogic::status($params);
            if ($result !== true) {
                $this->_error('修改失败:' . $result);
            }
            $this->_success('修改成功');
        }
    }

    /**
     * @notes 删除自提门店
     * @author ljj
     * @date 2021/8/16 2:42 下午
     */
    public function del()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchShop.del');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchShopLogic::del($params);
            if ($result !== true) {
                $this->_error('删除失败:' . $result);
            }
            $this->_success('删除成功');
        }
    }

    /**
     * @notes 导出列表
     * @author ljj
     * @date 2021/8/16 2:50 下午
     */
    public function exportFile()
    {
        $params = $this->request->get();
        $this->_success('', SelffetchShopLogic::exportFile($params));
    }
}