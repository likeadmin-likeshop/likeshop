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


use app\admin\logic\AdminLogic;

class Admin extends AdminBase
{

    /**
     * 管理员列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('',  AdminLogic::lists($get));
        }

        $this->assign('role_lists', AdminLogic::roleLists());
        return $this->fetch();
    }

    /**
     * 添加管理员
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['disable'] = isset($post['disable']) && $post['disable'] == 'on' ? 0 : 1;
            $result = $this->validate($post, 'app\admin\validate\Admin.add');
            if ($result === true) {
                AdminLogic::addAdmin($post);
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $this->assign('role_lists', AdminLogic::roleLists());
        return $this->fetch();
    }

    /**
     * 编辑管理员
     * @param string $admin_id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit($admin_id = '')
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['disable'] = isset($post['disable']) && $post['disable'] == 'on' ? 0 : 1;
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\Admin.edit');
            if ($result === true) {
                AdminLogic::editAdmin($post);
                $this->_success('修改成功');
            }
            $this->_error($result);
        }

        $this->assign('info', AdminLogic::info($admin_id));
        $this->assign('role_lists', AdminLogic::roleLists());
        return $this->fetch();
    }

    /**
     * 删除管理员
     * @param $admin_id
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del($admin_id)
    {
        if ($this->request->isAjax()) {
            $result = AdminLogic::delAdmin($admin_id);
            if ($result) {
                $this->_success('删除成功');
            }
            $this->_error('删除失败');
        }
    }

}