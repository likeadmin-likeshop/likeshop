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


use app\admin\logic\AuthLogic;
use think\facade\Hook;
use think\facade\Url;

class Auth extends AdminBase
{
    /**
     * 菜单列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function lists()
    {
        $lists = json_encode(AuthLogic::lists());
        $this->assign('lists', $lists);
        return $this->fetch();
    }

    /**
     * 添加菜单
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
            $result = $this->validate($post, 'app\admin\validate\Auth');
            if ($result === true) {
                $result = AuthLogic::addMenu($post);
                if (!is_string($result)) {
                    $this->_success('添加成功');
                } else {
                    $this->_error($result);
                }
            }
            $this->_error($result);
        }
        $this->assign('menu_lists', AuthLogic::chooseMenu());
        return $this->fetch();
    }

    /**
     * 编辑菜单
     * @param $id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit($id)
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['disable'] = isset($post['disable']) && $post['disable'] == 'on' ? 0 : 1;
            $result = $this->validate($post, 'app\admin\validate\Auth');
            if ($result === true) {
                $result = AuthLogic::updateMenu($post);
                if (!is_string($result)) {
                    $this->_success('修改成功');
                } else {
                    $this->_error($result);
                }
            }
            $this->_error($result);
        }
        $this->assign('info', AuthLogic::info($id));
        $this->assign('menu_lists', AuthLogic::chooseMenu($id));
        return $this->fetch();
    }

    /**
     * 设置状态
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function status()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            AuthLogic::setStatus($post);
            Hook::listen('menu_auth');
            $this->_success('修改成功');
        }
    }


    /**
     * 删除菜单
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (empty($post['ids'])) {
                $this->_error('删除失败');
            }
            AuthLogic::delMenu($post['ids']);
            Hook::listen('menu_auth');
            $this->_success('删除成功');
        }
    }

}