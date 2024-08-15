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


use app\admin\logic\SelffetchVerifierLogic;

class SelffetchVerifier extends AdminBase
{
    /**
     * @notes 核销员列表
     * @return mixed
     * @author ljj
     * @date 2021/8/16 3:30 下午
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', SelffetchVerifierLogic::lists($params));
        }

        return $this->fetch();
    }

    /**
     * @notes 添加核销员
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author ljj
     * @date 2021/8/16 4:45 下午
     */
    public function add()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchVerifier.add');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchVerifierLogic::add($params);
            if ($result !== true) {
                $this->_error('添加失败:' . $result);
            }
            $this->_success('添加成功');
        }

        $this->assign('shop_lists', SelffetchVerifierLogic::getShopLists());
        return $this->fetch();
    }

    /**
     * @notes 获取用户列表
     * @return mixed
     * @author ljj
     * @date 2021/8/19 2:42 下午
     */
    public function userLists()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', SelffetchVerifierLogic::getUserLists($params));
        }

        return $this->fetch();
    }

    /**
     * @notes 编辑核销员
     * @param $id
     * @return mixed
     * @author ljj
     * @date 2021/8/16 4:49 下午
     */
    public function edit($id)
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchVerifier.edit');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchVerifierLogic::edit($params);
            if ($result !== true) {
                $this->_error('修改失败:' . $result);
            }
            $this->_success('修改成功');
        }

        //$this->assign('user_lists', SelffetchVerifierLogic::getUserLists());
        $this->assign('shop_lists', SelffetchVerifierLogic::getShopLists());
        $this->assign('detail', SelffetchVerifierLogic::detail($id));
        return $this->fetch();
    }

    /**
     * @notes 修改核销员状态
     * @author ljj
     * @date 2021/8/16 4:55 下午
     */
    public function status()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchVerifier.status');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchVerifierLogic::status($params);
            if ($result !== true) {
                $this->_error('修改失败:' . $result);
            }
            $this->_success('修改成功');
        }
    }

    /**
     * @notes 删除核销员
     * @author ljj
     * @date 2021/8/16 4:58 下午
     */
    public function del()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $result = $this->validate($params, 'app\admin\validate\SelffetchVerifier.del');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = SelffetchVerifierLogic::del($params);
            if ($result !== true) {
                $this->_error('删除失败:' . $result);
            }
            $this->_success('删除成功');
        }
    }

    /**
     * @notes 导出核销员列表
     * @author ljj
     * @date 2021/8/16 5:02 下午
     */
    public function exportFile()
    {
        $params = $this->request->get();
        $this->_success('', SelffetchVerifierLogic::exportFile($params));
    }
}