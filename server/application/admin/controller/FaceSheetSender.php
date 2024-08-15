<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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


use app\admin\logic\FaceSheetSenderLogic;

class FaceSheetSender extends AdminBase
{
    /**
     * @notes 发件人列表
     * @author 张无忌
     * @date 2021/9/26 14:26
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $list = FaceSheetSenderLogic::lists($get);
            $this->_success('获取成功', $list);
        }

        return $this->fetch();
    }

    /**
     * @notes 新增发件人模板
     * @author 张无忌
     * @date 2021/9/26 14:27
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FaceSheetSenderLogic::add($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('新增成功');
        }

        return $this->fetch();
    }

    /**
     * @notes 编辑发件人
     * @author 张无忌
     * @date 2021/9/26 14:27
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FaceSheetSenderLogic::edit($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('编辑成功');
        }

        $id = $this->request->get('id');
        $this->assign('detail', FaceSheetSenderLogic::detail($id));
        return $this->fetch();
    }

    /**
     * @notes 删除发件人
     * @author 张无忌
     * @date 2021/9/26 14:27
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id');
            $result = FaceSheetSenderLogic::del($id);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('删除成功');
        }
    }
}