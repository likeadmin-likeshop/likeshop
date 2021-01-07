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
namespace app\api\logic;
use app\common\server\UrlServer;
use think\Db;

class GoodsCategoryLogic{
    public static function categoryThirdTree(){
        $category_all = Db::name('goods_category')->where(['is_show'=>'1','del'=>0])->order('sort desc')->column('id,name,pid,image,level','id');
        $level1 = [];
        $level2 = [];
        $level3 = [];
        //三级分类
        foreach ($category_all as $item => $val){
            $category_all[$item]['type'] = 1;
            $category_all[$item]['image']= UrlServer::getFileUrl($val['image']);
            //筛选一级分类
            if($val['level'] == 1){
                $level1[$val['id']] = $category_all[$item];
                $level1[$val['id']]['sons'] = [];
            }
            //筛选二级分类
            if($val['level'] == 2){
                $level2[$val['id']] = $category_all[$item];
                $level2[$val['id']]['sons'] = [];
            }
            //筛选三级分类
            if($val['level'] == 3){
                $level3[] = $category_all[$item];
            }
        }
        //挂载第三级
        foreach ($level3 as $item){
            if(isset($level2[$item['pid']])){
                $level2[$item['pid']]['sons'][] = $item;
            }
        }
        //挂载第二级
        foreach ($level2 as $item){
            if(isset($level1[$item['pid']])){
                $level1[$item['pid']]['sons'][] = $item;
            }
        }
        $goods_brand = Db::name('goods_brand')
            ->where(['del'=>0,'is_show'=>1])
            ->field('id,name,image')
            ->order('sort desc,id desc')
            ->select();
        if($goods_brand){
            foreach ($goods_brand as &$brand_item){
                $brand_item['type'] = 0;
                $brand_item['image'] = UrlServer::getFileUrl($brand_item['image']);
            }

            $brand = [
                'id'    => 0,
                'name'  => '品牌推荐',
                'type'  => 0,
                'sons'  =>[
                    [
                        'id'    => 0,
                        'name'  => '热门品牌',
                        'type'  => 0,
                        'sons'  => $goods_brand,

                    ]
                ],
            ];
            array_unshift($level1,$brand);
        }

        return array_values($level1);
    }
}