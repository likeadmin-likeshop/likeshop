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
            $this->_success('', CrontabLogic::lists());
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
                $this->_success('添加成功');
            }
            $this->_error($result);
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
                $this->_success('修改成功');
            }
            $this->_error($result);
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
                $this->_success('删除成功');
            }
        }
        $this->_error('删除失败');
    }


    /**
     * 定时任务操作
     */
    public function operation()
    {
        $post = $this->request->post();
        $result = CrontabLogic::operation($post['operation'], $post['id']);
        if ($result !== true) {
            $this->_error('操作失败：' . $result);
        }
        $this->_success('操作成功');
    }

    /**
     * 获取接下来执行时间
     */
    public function expression()
    {
        $get = $this->request->get();
        $this->_success('', CrontabLogic::expression($get));
    }

}