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
                $this->error($result);
            }
            $result = FileCateLogic::add($post);
            if ($result !== true) {
                $this->error($result);
            }
            $this->success('添加成功');
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
                $this->error($result);
            }
            $result = FileCateLogic::edit($post);
            if ($result !== true) {
                $this->error($result);
            }
            $this->success('编辑成功');
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
                $this->error($result);
            }
            FileCateLogic::del($post['id']);
            $this->success('删除成功');
        }
    }
}