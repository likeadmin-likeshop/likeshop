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

use app\admin\logic\{
    ArticleLogic,
    ArticleCategoryLogic
};

class Article extends AdminBase
{
    /**
     * 文章列表
     * @return mixed
     */
    public function lists()
    {
        $category = ArticleCategoryLogic::getArticleCategory();
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('', ArticleLogic::lists($get, $category));
        }
        $this->assign('category_list', $category);
        return $this->fetch();
    }

    /**
     * 添加文章
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\Article.add');
            if ($result === true) {
                ArticleLogic::addArticle($post);
                $this->_success('添加成功！');
            }
            $this->_error($result);

        }
        $acticle_category = ArticleCategoryLogic::getArticleCategory();
        $this->assign('category_list', $acticle_category);
        return $this->fetch();
    }

    /**
     * 编辑文章
     */
    public function edit($id)
    {
        if ($this->request->isAjax()) {

            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\Article.edit');

            if ($result === true) {
                ArticleLogic::editArticle($post);
                $this->_success('编辑成功！');
            }
            $this->_error($result);

        }
        $article = ArticleLogic::getArticle($id);
        $category_list = ArticleCategoryLogic::getArticleCategory();
        $this->assign('article', $article);
        $this->assign('category_list', $category_list);
        return $this->fetch();
    }

    /**
     * 删除文章
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = $this->validate(['id' => $id], 'app\admin\validate\Article.del');
            if ($result === true) {
                ArticleLogic::delArticle($id);
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
        ArticleLogic::switchStatus($post);
        $this->_success('修改成功');
    }


}