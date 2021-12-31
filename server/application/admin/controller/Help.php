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

use app\admin\logic\{
    HelpLogic,
    HelpCategoryLogic
};

class Help extends AdminBase
{
    /**
     * 帮助列表
     * @return mixed
     */
    public function lists()
    {
        $category = HelpCategoryLogic::getHelpCategory();
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('', HelpLogic::lists($get, $category));
        }
        $this->assign('category_list', $category);
        return $this->fetch();
    }

    /**
     * 添加帮助
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\Help.add');
            if ($result === true) {
                HelpLogic::addHelp($post);
                $this->_success('添加成功！');
            }
            $this->_error($result);
        }
        $acticle_category = HelpCategoryLogic::getHelpCategory();
        $this->assign('category_list', $acticle_category);
        return $this->fetch();
    }

    /**
     * 编辑帮助
     */
    public function edit($id)
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\Help.edit');
            if ($result === true) {
                HelpLogic::editHelp($post);
                $this->_success('编辑成功！');
            }
            $this->_error($result);
        }
        $help = HelpLogic::getHelp($id);
        $category_list = HelpCategoryLogic::getHelpCategory();
        $this->assign('help', $help);
        $this->assign('category_list', $category_list);
        return $this->fetch();
    }

    /**
     * 删除帮助
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = $this->validate(['id' => $id], 'app\admin\validate\Help.del');
            if ($result === true) {
                HelpLogic::delHelp($id);
                $this->_success('删除成功');
            }
            $this->_error($result);
        }
    }


    /**
     * 修改状态
     */
    public function switchStatus()
    {
        $post = $this->request->post();
        HelpLogic::switchStatus($post);
        $this->_success('修改成功');
    }


}