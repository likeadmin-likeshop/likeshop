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

use app\admin\logic\AdminLogic;
use app\admin\logic\RoleLogic;
use think\facade\Hook;

class Role extends AdminBase
{
    public function lists()
    {
        if ($this->request->isAjax()) {
            $this->_success('', RoleLogic::lists());
        }
        return $this->fetch();
    }

    /**
     * 添加角色
     * @return mixed
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\Role.add');
            if ($result !== true) {
                $this->_error($result);
            }
            $result = RoleLogic::addRole($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('添加成功');
        }
        $auth_tree = RoleLogic::authTree();
        $this->assign('auth_tree', json_encode($auth_tree));
        return $this->fetch();
    }

    /**
     * 编辑角色
     * @param string $role_id
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function edit($role_id = '')
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\Role.edit');
            if ($result !== true) {
                $this->_error($result);
            }
            $result = RoleLogic::editRole($post);
            if ($result !== true) {
                $this->_error($result);
            }
            Hook::listen('menu_auth');
            $this->_success('修改成功');
        }
        $auth_tree = RoleLogic::authTree($role_id);
        $this->assign('info', RoleLogic::roleInfo($role_id));
        $this->assign('auth_tree', json_encode($auth_tree));
        return $this->fetch();
    }

    /**
     * 删除角色
     * @param $role_id
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del($role_id)
    {
        if ($this->request->isAjax()) {
            $result = $this->validate(['id' => $role_id], 'app\admin\validate\Role.del');
            if ($result === true) {
                RoleLogic::delRole($role_id);
                Hook::listen('menu_auth');
                $this->_success('删除成功');
            }
            $this->_error($result);
        }
    }
}