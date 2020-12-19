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


use app\admin\logic\CrontabLogic;

class Crontab extends AdminBase
{
    /**
     * 定时任务列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $this->success('', CrontabLogic::lists());
        }
        return $this->fetch();
    }


    /**
     * 添加定时任务
     * @return mixed
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['status'] = isset($post['status']) && $post['status'] == 'on' ? 1 : 2;
            $result = $this->validate($post, 'app\admin\validate\Crontab.add');
            if ($result === true) {
                CrontabLogic::add($post);
                $this->success('添加成功');
            }
            $this->error($result);
        }
        return $this->fetch();
    }

    /**
     * 编辑定时任务
     * @return mixed
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['status'] = isset($post['status']) && $post['status'] == 'on' ? 1 : 2;
            $result = $this->validate($post, 'app\admin\validate\Crontab');
            if ($result === true) {
                CrontabLogic::edit($post);
                $this->success('修改成功');
            }
            $this->error($result);
        }
        $id = $this->request->get('id');
        $this->assign('info',CrontabLogic::info($id));
        return $this->fetch();
    }

    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id');
            if (CrontabLogic::del($id) !== true) {
                $this->success('删除成功');
            }
        }
        $this->error('删除失败');
    }


    /**
     * 定时任务操作
     */
    public function operation()
    {
        $post = $this->request->post();
        $result = CrontabLogic::operation($post['operation'], $post['id']);
        if ($result !== true) {
            $this->error('操作失败：' . $result);
        }
        $this->success('操作成功');
    }

    /**
     * 获取接下来执行时间
     */
    public function expression()
    {
        $get = $this->request->get();
        $this->success('', CrontabLogic::expression($get));
    }

}