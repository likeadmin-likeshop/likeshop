<?php

namespace app\admin\controller;


use app\admin\logic\LuckDrawLogic;
use app\common\server\ConfigServer;

class LuckDraw extends AdminBase
{
    /**
     * Notes: 查看页面
     * @author 张无忌(2021/1/25 11:08)
     * @return mixed
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = LuckDrawLogic::lists($get);
            $this->_success('获取成功', $lists);
        }

        // 获取抽奖设置信息
        $this->assign('setConfig', [
            'limit'  => ConfigServer::get('luckdraw', 'limit', 0),
            'rule'   => ConfigServer::get('luckdraw', 'rule', ''),
            'status' => ConfigServer::get('luckdraw', 'status', 0)
        ]);

        return $this->fetch();
    }

    /**
     * Notes: 添加奖品
     * @author 张无忌(2021/1/25 11:08)
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $validate = $this->validate($post, 'app\admin\validate\LuckDraw.add');
            if ($validate !== true) {
                $this->_error($validate);
            }
            if (LuckDrawLogic::add($post)) {
                $this->_success('新增成功');
            }
            $error = LuckDrawLogic::getError() ?: '新增失败';
            $this->_error($error);
        }

        return $this->fetch();
    }

    /**
     * Notes: 编辑奖品
     * @author 张无忌(2021/1/25 11:08)
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $validate = $this->validate($post, 'app\admin\validate\LuckDraw');
            if ($validate !== true) {
                $this->_error($validate);
            }
            if (LuckDrawLogic::edit($post)) {
                $this->_success('编辑成功');
            }
            $error = LuckDrawLogic::getError() ?: '编辑失败';
            $this->error($error);
        }

        $id = $this->request->get('id');
        $this->assign('detail', LuckDrawLogic::detail($id));
        return $this->fetch();
    }

    /**
     * Notes: 删除
     * @author 张无忌(2021/1/26 11:19)
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id', 0, 'intval');
            if (LuckDrawLogic::del($id)) {
                $this->_success('删除成功');
            }
            $error = LuckDrawLogic::getError() ?: '删除失败';
            $this->_error($error);
        }
    }

    public function switchStatus()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (LuckDrawLogic::switchStatus($post)) {
                $this->_success('更新成功');
            } else {
                $error = LuckDrawLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 更新排序
     * @author 张无忌(2021/1/28 10:21)
     */
    public function sort()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (LuckDrawLogic::updateSort($post)) {
                $this->_success('更新成功');
            } else {
                $error = LuckDrawLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 设置抽奖规则
     * @author 张无忌(2021/1/25 11:08)
     */
    public function set()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = LuckDrawLogic::set($post);
            if (!$result) {
                $error = LuckDrawLogic::getError() ?: '设置失败';
                $this->_error($error);
            }
            $this->_success('更新成功');
        }
    }

    /**
     * Notes: 抽奖记录
     * @author 张无忌(2021/1/25 11:08)
     */
    public function record()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = LuckDrawLogic::record($get);
            $this->_success('OK', $lists);
        }
    }
}