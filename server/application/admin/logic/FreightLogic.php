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

use app\common\model\Freight;
use app\common\model\FreightConfig;
use think\Db;
use think\Exception;

class FreightLogic
{

    public static function lists($get)
    {
        $freight = new Freight();
        $where = [];

        if (isset($get['name']) && $get['name'] != '') {
            $where[] = ['name', 'like', '%' . $get['name'] . '%'];
        }

        if (isset($get['charge_way']) && $get['charge_way'] != '') {
            $where[] = ['charge_way', '=', $get['charge_way']];
        }

        $count = $freight->where($where)->count();
        $list = $freight
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->append(['charge_way_text'])
            ->order('id desc')
            ->select();

        if (!$list) {
            return ['count' => '', 'lists' => []];
        }
        return ['count' => $count, 'lists' => $list];
    }





    public static function add($post)
    {
        $freight = new Freight();
        $freight->name = $post['name'];
        $freight->charge_way = $post['charge_way'];
        $freight->remark = $post['remark'];
        $freight->allowField(true)->save();

        $freight_config = new FreightConfig();

        $config_data = [];
        foreach ($post as &$item) {
            if (is_array($item)) {
                $item = array_values($item);
            }
        }

        $post = form_to_linear($post);
        foreach ($post as $v) {
            $v['freight_id'] = $freight->id;
            $v['create_time'] = time();
            $config_data[] = $v;
        }
        $freight_config->allowField(true)->insertAll($config_data);
    }


    public static function edit($post)
    {
        Db::startTrans();
        try {
            $freight = Freight::where(['id' => $post['id']])
                ->with('configs')
                ->find();

            //删除之前保存的配置,再增加
            FreightConfig::where(['freight_id' => $freight['id']])->delete();

            $freight->save([
                'name' => $post['name'],
                'charge_way' => $post['charge_way'],
                'remark' => $post['remark'],
            ], ['id' => $freight['id']]);


            $config_data = [];
            foreach ($post as &$item) {
                if (is_array($item)) {
                    $item = array_values($item);
                }
            }

            $post = form_to_linear($post);

            foreach ($post as $v) {
                $v['freight_id'] = $freight->id;
                $config_data[] = $v;
            }

            $freight_config = new FreightConfig();
            $freight_config->allowField(true)->insertAll($config_data);
            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
        }
    }


    public static function del($post)
    {
        Db::startTrans();
        try {
            Freight::where(['id' => $post['id']])->delete();
            FreightConfig::where(['freight_id' => $post['id']])->delete();
            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
        }
    }


    public static function detail($id)
    {
        $freight = Freight::where(['id' => $id])
            ->with('configs')
            ->append(['charge_way_text'])
            ->find()->toArray();

        $regions = Db::name('dev_region')->column('name', 'id');

        foreach ($freight['configs'] as &$item) {
            $item['region_name'] = '';

            if ($item['region'] == 'all'){
                $item['region_name'] = '全国';
                continue;
            }

            $region = explode(',', $item['region']);

            foreach ($region as $v) {
                if (isset($regions[$v])) {
                    $item['region_name'] .= $regions[$v] . ',';
                }
            }
            $item['region_name'] = rtrim($item['region_name'], ',');
        }
        return $freight;
    }

    public static function areaTree()
    {
        $lists = Db::name('dev_region')
            ->field('id,parent_id,level,name as title')
            ->order('parent_id', 'desc')
            ->select();

        $result = self::areaSort($lists);
        return $result;
    }

    public static function areaSort(&$lists)
    {
        $tree = [];
        foreach ($lists as $k1 => $province) {
            if ($province['level'] == 1) {

                //树形结构参数
                $province['checkArr']['type'] = 0;
                $province['checkArr']['checked'] = 0;
                $province['last'] = false;
                $province['parentId'] = -1;

                //钓鱼岛这个没有下级
                if ($province['id'] == 900000) {
                    $province['children'] = [];
                    $province['last'] = true;
                }

                $tree[$k1] = $province;
                unset($lists[$k1]);
                foreach ($lists as $k2 => $city) {
                    $city['parentId'] = $city['parent_id'];
                    if ($city['parentId'] == $province['id']) {
                        foreach ($lists as $k3 => $district) {
                            $district['parentId'] = $district['parent_id'];
                            if ($district['parentId'] == $city['id']) {

                                //树形结构参数
                                $district['checkArr']['type'] = 0;
                                $district['checkArr']['checked'] = 0;
                                $district['last'] = true;

                                $city['children'][] = $district;
                                unset($lists[$k3]);
                            }
                        }

                        //树形结构参数
                        $city['checkArr']['type'] = 0;
                        $city['checkArr']['checked'] = 0;
                        $city['last'] = false;

                        $tree[$k1]['children'][] = $city;
                        unset($lists[$k2]);
                    }
                }
            }
        }
        return array_values($tree);
    }


    /**
     * note 获取全部运费模板
     */
    public static function getFreightList()
    {
        return  Db::name('freight')->field('id,name')->select();
    }


}