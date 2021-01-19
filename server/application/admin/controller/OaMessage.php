<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\controller;


use app\admin\logic\OaMessageLogic;

class OaMessage extends AdminBase
{

    /**
     * Notes: 模板消息管理
     */
    public function lists()
    {
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = OaMessageLogic::lists($get);
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
        $info = OaMessageLogic::getTemplateMessage($id);
        $this->assign('info',$info);
        return $this->fetch();
    }

    /**
     * Notes: 修改消息模板使用状态
     */
    public function switchStatus()
    {
        $get = $this->request->get();
        $result = OaMessageLogic::switchStatus($get);
        if ($result) {
            $this->_success('修改成功');
        }
        $this->_success('修改失败');
    }

    /**
     * Notes: 同步消息模板到公众号
     */
    public function synchro()
    {
        $post = $this->request->post();
        $result = OaMessageLogic::synchro($post);
        if ($result === true) {
            $this->_success('同步成功');
        }
        $this->_error('同步失败,请检查配置信息');
    }
}