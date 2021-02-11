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


use app\admin\logic\UserGroupLogic;

class UserGroup extends AdminBase
{

    /**
     * 用户分组列表
     * @return mixed
     */
    public function lists(){

        if ($this->request->isAjax()) {
            $get = $this->request->get(); //获取get请求
            $this->_success('', UserGroupLogic::lists($get)); //逻辑层处理渲染数据
        }
        return $this->fetch();  //渲染
    }

    /**
     * 添加
     * @return mixed
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\UserGroup.add');
            if ($result === true) {
                UserGroupLogic::addUserGroup($post);
                $this->_success('添加成功');
            }
            $this->_error($result);
        }

        return $this->fetch();
    }


    /**
     * 编辑
     * @param string $id
     * @return mixed
     */
    public function edit($id)
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\UserGroup.edit');
            if ($result === true) {
                UserGroupLogic::editUserGroup($post);
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $this->assign('info', UserGroupLogic::info($id));
        return $this->fetch();
    }


    /**
     * 删除
     * @param $id
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = $this->validate(['id'=>$id], 'app\admin\validate\UserGroup.del');
            if($result === true) {
                UserGroupLogic::delUserGroup($id);
                $this->_success('删除成功');
            }
            $this->_error($result);
        }
    }


}