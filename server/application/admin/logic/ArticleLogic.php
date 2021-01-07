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

namespace app\admin\logic;

use app\admin\model\Article;
use think\Db;

class ArticleLogic
{

    public static function lists($get, $category)
    {
        $article = Db::name('article');

        $where = [];
        $where[] = ['del', '=', '0'];
        if (isset($get['is_notice']) && $get['is_notice'] != '') {
            $where[] = ['is_notice', '=', $get['is_notice']];
        }

        if (isset($get['title']) && $get['title']) {
            $where[] = ['title', 'like', '%' . $get['title'] . '%'];
        }

        if (isset($get['cid']) && $get['cid']) {
            $where[] = ['cid', '=', $get['cid']];
        }


        $count = $article->where($where)->count();
        $list = $article->where($where)->page($get['page'], $get['limit'])->select();
        foreach ($list as &$item) {
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            if (isset($category[$item['cid']])) {
                $item['cat_name'] = $category[$item['cid']]['name'];
            }
            if ($item['is_show'] == 1) {
                $item['is_show_text'] = '显示';
            } else {
                $item['is_show_text'] = '隐藏';
            }

            if ($item['is_notice'] == 1) {
                $item['is_notice'] = '是';

            } else if ($item['is_notice'] == 0) {
                $item['is_notice'] = '否';
            }
        }
        return ['count' => $count, 'lists' => $list];
    }


    public static function addArticle($post)
    {
        $article = new Article();

        $data = [
            'title' => $post['title'],
            'cid' => $post['cid'],
            'image' => $post['image'],
            'content' => $post['content'],
            'is_show' => $post['is_show'],
            'is_notice' => $post['is_notice'],
            'create_time' => time(),
            'sort' => $post['sort'],
            'synopsis' => $post['synopsis']
        ];
        return $article->save($data);
    }

    public static function editArticle($post)
    {
        $article = new Article();
        $data = [
            'title' => $post['title'],
            'cid' => $post['cid'],
            'image' => $post['image'],
            'content' => $post['content'],
            'is_show' => $post['is_show'],
            'is_notice' => $post['is_notice'],
            'update_time' => time(),
            'sort' => $post['sort'],
            'synopsis' => $post['synopsis']

        ];
        return $article->save($data, ['id' => $post['id'], 'del' => 0]);
    }

    public static function getArticle($id)
    {
        $article = new Article();
        return $article::get(['id' => $id, 'del' => 0]);
    }

    public static function delArticle($id)
    {
        $article = new Article();

        $data = [
            'del' => time(),
            'update_time' => 1
        ];
        return $article->save($data, ['id' => $id, 'del' => 0]);
    }

    public static function switchStatus($post)
    {
        $data = [
            'is_show' => $post['is_show'],
            'update_time' => time(),
        ];
        return Db::name('article')->where(['del' => 0, 'id' => $post['id']])->update($data);
    }

}