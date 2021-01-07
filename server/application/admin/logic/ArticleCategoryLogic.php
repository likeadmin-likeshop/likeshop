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

use app\admin\model\ArticleCategory;
use think\Db;

class ArticleCategoryLogic
{
    public static function lists($get)
    {
        $where = [];
        $where[] = ['del', '=', '0'];

        $article_category = new ArticleCategory();
        $count = $article_category->where($where)->count();
        $list = $article_category->where($where)->page($get['page'], $get['limit'])->select();

        foreach ($list as &$item) {
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            if ($item['is_show'] == 1) {
                $item['is_show_text'] = '启用';
            } else {
                $item['is_show_text'] = '停用';
            }
        }
        return ['count' => $count, 'lists' => $list];
    }

    /**
     * Desc: 添加文章分类
     * @param $post array 文章分类数据
     * @return boolean
     */
    public static function addArticleCategory($post)
    {
        $article_category = new ArticleCategory();
        $data = [
            'name' => $post['name'],
            'is_show' => $post['is_show'],
            'create_time' => time(),
        ];
        return $article_category->save($data);
    }

    /**
     * Desc: 编辑文章分类
     * @param $post array 文章分类数据
     * @return boolean
     */
    public static function editArticleCategory($post)
    {
        $article_category = new ArticleCategory();
        $data = [
            'name' => $post['name'],
            'is_show' => $post['is_show'],
            'update_time' => time(),
        ];
        return $article_category->save($data, ['id' => $post['id'], 'del' => 0]);
    }

    /**
     * Desc: 删除文章分类
     * @param $id int 文章分类id
     * @return boolean
     */
    public static function delArticleCategory($id)
    {
        $article_category = new ArticleCategory();
        $data = [
            'update_time' => time(),
            'del' => 1,
        ];
        return $article_category->save($data, ['id' => $id, 'del' => 0]);
    }

    /**
     * Desc: 获取单条文章分类
     * @param $id int 文章分类id
     * @return boolean
     */
    public static function getArticleCategory($id = 0)
    {
        $where[] = ['del', '=', 0];
        if ($id) {
            $where[] = ['id', '=', $id];
        }
        $article_category = new ArticleCategory();
        return $article_category->where($where)->column('*', 'id');
    }

    public static function switchStatus($post)
    {
        $data = [
            'is_show' => $post['is_show'],
            'update_time' => time(),
        ];
        return Db::name('article_category')->where(['del' => 0, 'id' => $post['id']])->update($data);
    }
}
