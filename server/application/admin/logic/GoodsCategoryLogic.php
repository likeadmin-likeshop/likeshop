<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------


namespace app\admin\logic;
use app\common\server\UrlServer;
use think\Db;
use app\admin\model\GoodsCategory;
use think\facade\Cache;

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
        $is_recommend = $post['is_recommend'] ?? 0;
        $data = [
            'name'              => $post['name'],
            'pid'               => $post['pid'],
            'sort'              => $post['sort'],
            'is_show'           => $post['is_show'],
            'image'             => $post['image'],
            'level'             => $level + 1,
            'is_recommend'      => $post['pid'] == 0 ? $is_recommend : 0,
            'remark'            => $post['remark'],
            'create_time'       => time(),
            'update_time'       => time(),
        ];

        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
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
        $is_recommend  = $post['is_recommend'] ?? 0;
        $data = [
            'name'              => $post['name'],
            'sort'              => $post['sort'],
            'is_show'           => $post['is_show'],
            'image'             => $post['image'],
            'level'             => $level+1,
            'pid'               => $post['pid'],
            'is_recommend'      => $post['pid'] == 0 ? $is_recommend : 0,
            'remark'            => $post['remark'],
            'update_time'       => time(),
        ];

        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
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

        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
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

        $lists = Db::name('goods_category')
                ->where(['del' => 0])
                ->order('id asc')
                ->column('id,name,pid,is_recommend,is_show,level,image,sort');
        foreach ($lists as $k => $item){
            $lists[$k]['image'] = UrlServer::getFileUrl($item['image']);
        }

        $lists = linear_to_tree($lists);

        foreach ($lists as $key => $list){

            if(1 == $list['is_recommend']){
                $sub = [];
                foreach ($list['sub'] as $key1 => $sub1){
                    $sub1['is_recommend'] = 1;


                    foreach ($sub1['sub'] as $key2 => $sub2){
                        $sub1['sub'][$key2]['is_recommend'] = 1;

                    }
                    $sub[] = $sub1;

                }

                $lists[$key]['sub'] = $sub;
            }
        }

        return $lists;

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
     * @return string
     */
    public static function getCategory($id)
    {
        $detail = GoodsCategory::get(['id' => $id, 'del' => 0]);
        $detail['abs_image'] = UrlServer::getFileUrl($detail['image']);
        return $detail;
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

        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
        return Db::name('goods_category')->where(['del' =>0,'id' =>$data['id']])->update($update_data);
    }

}