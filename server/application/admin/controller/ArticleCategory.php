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
use app\admin\logic\{
    ArticleCategoryLogic
};
class ArticleCategory extends AdminBase {
    /**
     * 文章分类列表
     * @return mixed
     */
    public function lists(){
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->success('', ArticleCategoryLogic::lists($get));
        }
        return $this->fetch();
    }
    /**
     * 添加文章分类
     * @return mixed
     */
    public function add(){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\ArticleCategory');
            if($result === true){
                ArticleCategoryLogic::addArticleCategory($post);
                $this->success('添加成功！');
            }
            $this->error($result);
        }
        return $this->fetch();
    }

    /**
     * 编辑文章分类
     * @return mixed
     */
    public function edit($id){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\ArticleCategory.edit');
            if($result === true){
                ArticleCategoryLogic::editArticleCategory($post);
                $this->success('编辑成功！');
            }
            $this->error($result);
        }
        $category= ArticleCategoryLogic::getArticleCategory($id);
        $this->assign('category',array_values($category)[0]);
        return $this->fetch();
    }

    /**
     * 删除文章分类
     * @return mixed
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = $this->validate(['id' => $id], 'app\admin\validate\ArticleCategory.del');
            if ($result === true) {
                ArticleCategoryLogic::delArticleCategory($id);
                $this->success('删除成功');
            }
            $this->error($result);
        }
    }


    /**
     * 修改状态
     */
    public function switchStatus(){
        $post = $this->request->post();
        ArticleCategoryLogic::switchStatus($post);
        $this->success('修改成功');
    }

}