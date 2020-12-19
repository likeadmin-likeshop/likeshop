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


namespace app\api\controller;

use app\api\logic\ArticleLogic;


class Article extends ApiBase
{

    public $like_not_need_login = ['lists', 'category', 'detail'];

    public function lists()
    {
        $id = $this->request->get('id');
        $article = ArticleLogic::lists($id, $this->page_no, $this->page_size);
        $this->success('获取成功', $article);
    }


    public function category()
    {
        $article = ArticleLogic::CategoryLists();
        $this->success('获取成功', $article);
    }


    public function detail()
    {
        $id = $this->request->get('id');
        if (!$id) {
            $this->error('参数缺失');
        }
        $article_detail = ArticleLogic::getArticleDetail($id);
        $this->success('获取成功', $article_detail);
    }
}