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


namespace app\common\model;

use think\Model;

class FileCate extends Model
{
    public static function getTreeMenu($get)
    {
        $field = 'id,name,pid,level,sort';
        switch($get['type']) {
            case 'video':
                $where = [
                    'del' => 0,
                    'partner_id' => $get['partner_id'],
                    'type' => self::getTypeNumber($get['type'])
                ];
                $menu = self::where($where)->order('sort', 'desc')->select()->toArray();
                break;
        }
        return self::formatTreeMenu($menu);
    }

    public static function getMenu($get)
    {
        $field = 'id,name,pid,level,sort';
        switch($get['type']) {
            case 'video':
                $where = [
                    'del' => 0,
                    'partner_id' => $get['partner_id'],
                    'type' => self::getTypeNumber($get['type'])
                ];
                $menu = self::field($field)->where($where)->order('sort', 'desc')->select()->toArray();
                break;
        }
        return self::formatMenu($menu);
    }

    public static function getTypeNumber($type)
    {
        switch($type) {
            case 'image':
                return 1;
            case 'video':
                return 2;
            default:
                return 0;
        }
    }

    public static function formatMenu($menu)
    {
        $tree = [];
        foreach($menu as $item) {
            // 查找一级分类
            if($item['pid'] != 0) {
                continue;
            }
            $tree[$item['id']] = '|__'.$item['name'];
            // 查找二级分类
            foreach($menu as $subItem) {
                if($subItem['pid'] == $item['id']) {
                    $tree[$subItem['id']] = '|____'.$subItem['name'];
                }
            }
        }
        return $tree;
    }

    public static function formatTreeMenu($menu)
    {
//        [{
//        title: '江西' //一级菜单
//                ,children: [{
//            title: '南昌' //二级菜单
//                    ,children: [{
//                title: '高新区' //三级菜单
//                        //…… //以此类推，可无限层级
//                    }]
//                }]
//            },{
//        title: '陕西' //一级菜单
//                ,children: [{
//            title: '西安' //二级菜单
//                }]
//            }]
        $tree = [];
        $i = 0;
        foreach($menu as $item) {
            // 查找一级分类
            if($item['pid'] != 0) {
                continue;
            }
            $tree[$i]["id"] = $item['id'];
            $tree[$i]["title"] = $item['name'];
            $tree[$i]["spread"] = true;
            $tree[$i]["children"] = [];
            // 查找二级分类
            $j = 0;
            foreach($menu as $subItem) {
                if($subItem['pid'] == $item['id']) {
                    $tree[$i]["children"][$j]["id"] = $subItem['id'];
                    $tree[$i]["children"][$j]["title"] = $subItem['name'];
                    $tree[$i]["children"][$j]["spread"] = true;
                    $tree[$i]["children"][$j]["children"] = [];
                    // 查找三级分类
                    $k = 0;
                    foreach($menu as $thirdItem) {
                        if($thirdItem['pid'] == $subItem['id']) {
                            $tree[$i]["children"][$j]["children"][$k]["id"] = $thirdItem['id'];
                            $tree[$i]["children"][$j]["children"][$k]["title"] = $thirdItem['name'];
                            $k++;
                        }
                    }
                    $j++;
                }
            }
            $i++;
        }
        return $tree;
    }

    public static function getCateById($id)
    {
        $cate = FileCate::field('id,name,pid,sort')->where(['del'=>0, 'id'=>$id])->findOrEmpty();
        if($cate->isEmpty()) {
            return [];
        }
        return $cate->toArray();
    }
}