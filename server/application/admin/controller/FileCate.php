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

use app\common\logic\FileCateLogic;

/**
 * 图片分类
 * Class FileCate
 * @package app\admin\controller
 */
class FileCate extends AdminBase
{

    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\FileCate.add');
            if ($result !== true) {
                $this->_error($result);
            }
            $result = FileCateLogic::add($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('添加成功');
        }
        $tree = FileCateLogic::categoryToSelect();
        $this->assign('cate_tree', $tree);
        return $this->fetch();
    }


    public function edit($id = '')
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\FileCate.edit');
            if ($result !== true) {
                $this->_error($result);
            }
            $result = FileCateLogic::edit($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('编辑成功');
        }
        $tree = FileCateLogic::categoryToSelect();
        $this->assign('cate_tree', $tree);
        $this->assign('detail', FileCateLogic::info($id));
        return $this->fetch();
    }


    public function del()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\FileCate.del');
            if ($result !== true) {
                $this->_error($result);
            }
            FileCateLogic::del($post['id']);
            $this->_success('删除成功');
        }
    }
}