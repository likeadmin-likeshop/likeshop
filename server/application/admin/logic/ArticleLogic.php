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

namespace app\admin\logic;

use app\admin\model\Article;
use app\common\server\UrlServer;
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
        $list = $article->where($where)->page($get['page'], $get['limit'])->order('id desc')->select();
        foreach ($list as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
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
        $detail = $article::get(['id' => $id, 'del' => 0]);
        $detail['abs_image'] = UrlServer::getFileUrl($detail['image']);
        return $detail;
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