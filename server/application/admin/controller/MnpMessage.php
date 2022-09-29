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


use app\admin\logic\MnpMessageLogic;

class MnpMessage extends AdminBase
{
    /**
     * Notes: 模板消息管理
     */
    public function lists()
    {
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = MnpMessageLogic::lists($get);
            $this->_success('', $list);
        }
        return $this->fetch();
    }

    /**
     * Notes: 编辑模板消息
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $info = MnpMessageLogic::getTemplateMessage($id);
        $this->assign('info',$info);
        return $this->fetch();
    }

    /**
     * Notes: 修改消息模板使用状态
     */
    public function switchStatus()
    {
        $get = $this->request->get();
        $result = MnpMessageLogic::switchStatus($get);
        if ($result) {
            $this->_success('修改成功');
        }
        $this->_success('修改失败');
    }

    /**
     * Notes: 同步消息模板
     */
    public function synchro()
    {
        $post = $this->request->post();
        $result = MnpMessageLogic::synchro($post);
        if ($result === true) {
            $this->_success('同步成功');
        }
        $this->_error('同步失败,请检查配置信息');
    }
}