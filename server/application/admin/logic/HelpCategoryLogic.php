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

namespace app\admin\logic;

use app\admin\model\HelpCategory;
use think\Db;

class HelpCategoryLogic
{

    public static function lists($get)
    {
        $where = [];
        $where[] = ['del', '=', '0'];

        $cate = new HelpCategory();
        $count = $cate->where($where)->count();
        $list = $cate->where($where)
            ->page($get['page'], $get['limit'])
            ->append(['is_show_text'])
            ->select();

        return ['count' => $count, 'lists' => $list];
    }

    /**
     * Desc: 添加文章分类
     * @param $post array 文章分类数据
     * @return boolean
     */
    public static function addHelpCategory($post)
    {
        $help_category = new HelpCategory();
        $data = [
            'name' => $post['name'],
            'is_show' => $post['is_show'],
            'create_time' => time(),
        ];
        return $help_category->save($data);
    }

    /**
     * Desc: 编辑文章分类
     * @param $post array 文章分类数据
     * @return boolean
     */
    public static function editHelpCategory($post)
    {
        $help_category = new HelpCategory();
        $data = [
            'name' => $post['name'],
            'is_show' => $post['is_show'],
            'update_time' => time(),
        ];
        return $help_category->save($data, ['id' => $post['id'], 'del' => 0]);
    }

    /**
     * Desc: 删除文章分类
     * @param $id int 文章分类id
     * @return boolean
     */
    public static function delHelpCategory($id)
    {
        $help_category = new HelpCategory();
        $data = [
            'update_time' => time(),
            'del' => 1,
        ];
        return $help_category->save($data, ['id' => $id, 'del' => 0]);
    }

    /**
     * Desc: 获取单条文章分类
     * @param $id int 文章分类id
     * @return boolean
     */
    public static function getHelpCategory($id = 0)
    {
        $where[] = ['del', '=', 0];
        if ($id) {
            $where[] = ['id', '=', $id];
        }
        $help_category = new HelpCategory();
        return $help_category->where($where)->column('*', 'id');
    }

    public static function switchStatus($post)
    {
        $data = [
            'is_show' => $post['is_show'],
            'update_time' => time(),
        ];
        return Db::name('help_category')->where(['del' => 0, 'id' => $post['id']])->update($data);
    }
}
