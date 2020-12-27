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
use think\Db;
use app\admin\model\GoodsCategory;

class GoodsCategoryLogic
{
    /**
     *  Desc: 添加商品分类
     * @param $post array 分类数据
     * @return boolean
     */
    public static function add($post)
    {
        $level = 0;
        if ($post['pid']) {
            $level = Db::name('goods_category')->where(['id' => $post['pid']], ['del' => 0])->value('level');
        }
        $data = [
            'name'              => $post['name'],
            'pid'               => $post['pid'],
            'sort'              => $post['sort'],
            'is_show'           => $post['is_show'],
            'image'             => $post['image'],
            'level'             => $level + 1,
            'remark'            => $post['remark'],
            'create_time'       => time(),
            'update_time'       => time(),
        ];
        return Db::name('goods_category')->insert($data);
    }

    /**
     *  Desc: 编辑商品分类
     * @param $post array 分类数据
     * @return boolean
     */
    public static function edit($post)
    {
        $level = 0;
        if ($post['pid']) {
            $level = Db::name('goods_category')->where(['id' => $post['pid']], ['del' => 0])->value('level');
        }
        $data = [
            'name'              => $post['name'],
            'sort'              => $post['sort'],
            'is_show'           => $post['is_show'],
            'image'             => $post['image'],
            'level'             => $level+1,
            'pid'               => $post['pid'],
            'remark'            => $post['remark'],
            'update_time'       => time(),
        ];
        return Db::name('goods_category')->where(['id'=>$post['id']])->update($data);
    }

    /**
     *  Desc: 删除商品分类
     * @param $id array 分类id
     * @return boolean
     */
    public static function del($id)
    {
        $data = [
            'del' => 1,
            'update_time' => time(),
        ];
        return Db::name('goods_category')->where(['del' => 0, 'id' => $id])->update($data);
    }

    /**
     *  Desc: 获取商品完整二级分类
     * @return array
     */
    public static function categoryTwoTree()
    {
        $goods_category = new GoodsCategory();

        $cateogry_list = $goods_category::with('sons')
            ->where(['del' => 0, 'level' => 1])
            ->field('id,name,pid,level')
            ->select();

        return self::categoryToSelect($cateogry_list);
    }

    /**
     *  Desc: 获取完整的商品分类
     * @return array
     */
    public static function categoryThirdTree()
    {
        $category_all = Db::name('goods_category')->where(['del' => 0])->column('id,name,pid,is_show,level,image,sort', 'id');
        $lists = [];
        $leve2 = [];
        $leve3 = [];
        //获取各级分类
        foreach ($category_all as $item) {
            $item['children'] = [];
            if ($item['level'] == 3) {
                $leve3[] = $item;
            }

            if ($item['level'] == 2) {
                $leve2[$item['id']] = $item;
            }

            if ($item['level'] == 1) {
                $lists[$item['id']] = $item;
            }

        }

        //开始拼接全部数据
        foreach ($leve3 as $item) {
            if (isset($leve2[$item['pid']])) {
                $leve2[$item['pid']]['children'][] = $item;
            }
        }

        foreach ($leve2 as $item) {
            if (isset($lists[$item['pid']])) {
                $lists[$item['pid']]['children'][] = $item;
            }
        }

        return array_values($lists);
    }

    /**
     * Desc: 列表结构转换成树形结构
     * @param $lists array 分类数据
     * @return array
     */
    public static function categoryToTree($lists)
    {
        $tree = [];
        foreach ($lists as $val) {
            $temp = [
                'id'        => $val['id'],
                'title'     => $val['name'],
                'children'  => [],
                'spread'    => false
            ];

            if ($val['child']) {

                foreach ($val['child'] as $child_val) {
                    $children = [
                        'id'    => $child_val['id'],
                        'title' => $child_val['name'],
                    ];
                    $temp['spread'] = true;
                    $temp['children'][] = $children;
                }

            }

            $tree[] = $temp;
        }

        return $tree;

    }

    /**
     * Desc：将树形结构数组输出
     * @param $items  array 要输出的数组
     * @param $select_id int 已选中项
     * @return string
     */
    public static function categoryToSelect($lists, $select_id = 0)
    {
        $tree = [];
        foreach ($lists as $val) {
            $tree[$val['id']]['level'] = $val['level'];
            $tree[$val['id']]['name'] = '|----' . $val['name'];
            if ($val['sons']) {
                foreach ($val['sons'] as $val_sons) {
                    $tree[$val_sons['id']]['level'] = $val_sons['level'];
                    $tree[$val_sons['id']]['name'] = '|--------' . $val_sons['name'];
                }
            }

        }
        return $tree;

    }


    /**
     * Desc: 获取某个商品分类
     * @param $id int 分类id
     * @param $is_show int 是否显示
     * @return string
     */
    public static function getCategory($id)
    {
        return GoodsCategory::get(['id' => $id, 'del' => 0]);
    }

    /**
     * Desc: 返回该分类下有多少级子类
     * @param array $category 分类信息
     * @return string
     */
    public static function getCategoryLevel($category)
    {
        $level = 1;
        $two_id = Db::name('goods_category')->where(['pid' => $category['id'], 'del' => 0])->value('id');
        if ($two_id) {
            $level = 2;
            $three_id = Db::name('goods_category')->where(['pid' => $two_id, 'del' => 0])->value('id');
            if ($three_id) $level = 3;

        }
        return $level;
    }

    /**
     * Desc: 根据分类等级返回该级别的所有分类
     * @param $level int 需要获取的分类等级
     * @return string
     */
    public static function getGoodsCategoryLevel($level = 3)
    {
        $where['level'] = $level;
        $where['del'] = 0;
        return Db::name('goods_category')->where($where)->column('name', 'id');
    }


    public static function categoryTreeeTree()
    {
        $goods_category = new GoodsCategory();
        $lists = $goods_category->where(['del' => 0])->column('id,name,pid,level', 'id');
        return self::cateToTree($lists, 0, '|-----', 1);
    }

    public static function cateToTree($lists, $pid = 0, $html = '|-----', $level = 1, $clear = true)
    {
        static $tree = [];
        if ($clear) $tree = [];
        foreach ($lists as $k => $v) {
            if ($v['pid'] == $pid) {
                $v['html'] = str_repeat($html, $level);
                $tree[] = $v;
                unset($lists[$k]);
                self::cateToTree($lists, $v['id'], $html, $level + 1, false);
            }
        }
        return $tree;
    }

    /**
     * 获取所有分类树形结构
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getAllTree()
    {
        $lists = Db::name('goods_category')
            ->field(['name', 'id', 'pid', 'level'])
            ->where(['del' => 0])
            ->order(['sort' => 'desc'])
            ->select();
        return $lists;
    }

    //更新分类状态
    public static function switchStatus($data)
    {
        $update_data = [
            'is_show'       => $data['status'],
            'update_time'   => time(),
        ];
        return Db::name('goods_category')->where(['del' =>0,'id' =>$data['id']])->update($update_data);
    }

}