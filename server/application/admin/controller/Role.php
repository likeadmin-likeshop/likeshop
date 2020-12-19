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
// | Author: LikeShopTeam
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
            $this->success('', RoleLogic::lists());
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
                $this->error($result);
            }
            $result = RoleLogic::addRole($post);
            if ($result !== true) {
                $this->error($result);
            }
            $this->success('添加成功');
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
                $this->error($result);
            }
            $result = RoleLogic::editRole($post);
            if ($result !== true) {
                $this->error($result);
            }
            Hook::listen('menu_auth');
            $this->success('修改成功');
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
                $this->success('删除成功');
            }
            $this->error($result);
        }
    }
}