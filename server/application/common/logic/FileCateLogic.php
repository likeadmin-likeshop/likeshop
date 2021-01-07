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


namespace app\common\logic;


use think\Db;

class FileCateLogic
{

    /**
     * Desc: 详情
     * @param $id
     * @return array|\PDOStatement|string|\think\Model|null
     */
    public static function info($id)
    {
        return Db::name('file_cate')->where(['id' => $id])->find();
    }

    /**
     * Desc: 添加分类
     * @param $post
     * @return bool
     */
    public static function add($post)
    {
        $level = 0;

        if ($post['pid']) {
            $level = Db::name('file_cate')
                ->where(['id' => $post['pid']])
                ->where(['del' => 0])
                ->value('level');
        }

        $data = [
            'name' => $post['name'],
            'pid' => $post['pid'],
            'sort' => $post['sort'],
            'level' => $level + 1,
            'create_time' => time(),
        ];
        Db::name('file_cate')->insert($data);
        return true;
    }

    /**
     * Desc: 编辑分类
     * @param $post
     * @return bool
     */
    public static function edit($post)
    {
        $level = 0;
        $data = [
            'pid' => $post['pid'],
            'name' => $post['name'],
            'sort' => $post['sort'],
            'update_time' => time(),
        ];

        if ($post['pid']) {
            $level = Db::name('file_cate')
                ->where(['id' => $post['pid']])
                ->where(['del' => 0])
                ->value('level');
        }

        $data['level'] = $level + 1;

        Db::name('file_cate')->where('id', $post['id'])->update($data);
        return true;
    }


    /**
     * Desc: 删除
     * @param $id
     * @return int|string
     */
    public static function del($id)
    {
        $data = [
            'del' => 1,
            'update_time' => time(),
        ];
        return Db::name('file_cate')->where(['del' => 0, 'id' => $id])->update($data);
    }


    /**
     * Desc: 树形结构
     * @return array
     */
    public static function cateTree()
    {
        $lists = Db::name('file_cate')
            ->where(['del' => 0])
            ->order('sort')
            ->select();

        $tree = self::cateListToTree($lists, 0);
        $all = [
            'id' => 0,
            'field' => 'all',
            'title' => '全部',
            'children' => [],
        ];
        array_unshift($tree,$all);
        return $tree;
    }


    public static function cateListToTree($lists, $pid = 0)
    {
        $tree = [];
        foreach ($lists as $k => $v) {
            if ($v['pid'] == $pid) {
                $temp['id'] = $v['id'];
                $temp['field'] = 'id';
                $temp['title'] = $v['name'];
                $temp['children'] = self::cateListToTree($lists, $v['id']);
                $temp['spread'] = true;
                $tree[] = $temp;
            }
        }
        return $tree;
    }


    /**
     * Desc: 下拉框树状结构
     * @return array
     */
    public static function categoryToSelect()
    {
        $lists = Db::name('file_cate')
            ->where(['del' => 0])
            ->order('sort')
            ->select();

        $tree = [];
        foreach ($lists as $val) {

            if ($val['pid'] != 0) {
                continue;
            }

            $tree[$val['id']] = "|----" . $val['name'];
            foreach ($lists as $val2) {
                if ($val2['pid'] == $val['id']) {
                    $tree[$val2['id']] = "|--------" . $val2['name'];
                }
            }

        }
        return $tree;
    }

}