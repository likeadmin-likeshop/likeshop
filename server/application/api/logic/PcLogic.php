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
namespace app\api\logic;
use app\api\model\Goods;
use app\common\model\Ad;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;

class PcLogic{
    /**
     * Notes:pc端首页接口
     * @return array
     * @author:  2021/3/5 12:02
     */
    public static function pcLists(){
        $goods = new Goods();

        //热销榜单
        $host_list = $goods
            ->where(['del'=>0,'status'=>1])
            ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
            ->order('sales_sum desc,click_count desc')
            ->limit(10)
            ->select();

        //新品推荐
        $new_list = $goods
            ->where(['del'=>0,'status'=>1,'is_new'=>1])
            ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
            ->order('id desc,sort desc')
            ->limit(10)
            ->select();


        //好物优选
        $best_list = $goods
            ->where(['del'=>0,'status'=>1,'is_best'=>1])
            ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
            ->order('id desc,sort desc')
            ->limit(10)
            ->select();

        $ad_list = Db::name('ad a')
            ->join('ad_position ap', 'a.pid = ap.id')
            ->where(['pid' =>[18,19,20,21],'a.status' => 1,'a.del' => 0,'ap.status' => 1,'ap.del' => 0])
            ->order('a.id desc')
            ->field('a.*')
            ->select();


        $host_ad = [];      //热销榜单广告
        $new_ad = [];       //新品推荐广告
        $best_ad = [];      //好物优选广告
        $category_ad = [];  //分类广告

        foreach ($ad_list as $ad){
            $url = $ad['link'];
            $is_tab = 0;
            $params = [];
            switch ($ad['link_type']) {
                case 1:
                    $page = Ad::getLinkPage($ad['client'], $ad['link']);
                    $url = $page['path'];
                    $is_tab = $page['is_tab'] ?? 0;
                    break;
                case 2:
                    $goods_path = Ad::getGoodsPath($ad['client']);
                    $url = $goods_path;
                    $params = [
                        'id' => $ad['link'],
                    ];
                    break;
            }
            //首页热销榜单广告
            if(empty($host_ad) && 18 == $ad['pid']){
                $host_ad = [
                    'image'     => UrlServer::getFileUrl($ad['image']),
                    'link'      => $url,
                    'link_type' => $ad['link_type'],
                    'params'    => $params,
                    'is_tab'    => $is_tab,
                ];
            }
            //首页新品推荐广告
            if(empty($new_ad) && 19 == $ad['pid']){
                $new_ad = [
                    'image'     => UrlServer::getFileUrl($ad['image']),
                    'link'      => $url,
                    'link_type' => $ad['link_type'],
                    'params'    => $params,
                    'is_tab'    => $is_tab,
                ];
            }
            //首页好物优选广告
            if(empty($best_ad) && 20 == $ad['pid']){
                $best_ad = [
                    'image'     => UrlServer::getFileUrl($ad['image']),
                    'link'      => $url,
                    'link_type' => $ad['link_type'],
                    'params'    => $params,
                    'is_tab'    => $is_tab,
                ];
            }
            //首页分类广告
            if(21 == $ad['pid']){
           
                $category_ad[$ad['category_id']] = [
                    'image'         => UrlServer::getFileUrl($ad['image']),
                    'link'          => $url,
                    'link_type'     => $ad['link_type'],
                    'params'        => $params,
                    'is_tab'        => $is_tab,
                ];
            }

        }

        //分类信息
        $goods_category = new \app\admin\model\GoodsCategory();
        $goods_category_list = $goods_category
            ->where(['del'=>0, 'level'=>1,'is_recommend'=>1])
            ->with(['sons'])
            ->field('id,name')
            ->select();

        $category_list = [];
        foreach ($goods_category_list as $key => $goods_category){
            $sons = [];
            $goods_list = $goods
                        ->where(['first_category_id'=>$goods_category['id'],'del'=>0,'status'=>1])
                        ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
                        ->limit(8)
                        ->select();
            foreach ($goods_category['sons'] as $son){
                $sons[] = [
                    'id'        => $son['id'],
                    'name'      => $son['name'],
                ];
            }
            $ad = $category_ad[$goods_category['id']] ?? [];
            $category_list[] = [
                'id'        => $goods_category['id'],
                'name'      => $goods_category['name'],
                'ad'        => $ad,
                'sons'      => $sons,
                'goods_list'=> $goods_list,
            ];
        }
        
        $list = [
            'host_ad'       => $host_ad,
            'host_list'     => $host_list,
            'new_ad'        => $new_ad,
            'new_list'      => $new_list,
            'best_ad'       => $best_ad,
            'best_list'     => $best_list,
            'category_list' => $category_list,
        ];

        return $list;
    }

    /**
     * Notes:pc端获取公共数据
     * @param $user_id int 用户id
     * @return array
     * @author:  2021/3/5 17:47
     */
    public static function commonData($user_id){
        $article = Db::name('article')
            ->where(['del'=>0,'is_notice'=>1,'is_show'=>1])
            ->order('create_time desc')
            ->field('id,title')
            ->limit(3)
            ->select();
        $cart_num = 0;
        $coupon_num = 0;
        $nickname = '';

        if($user_id){
            $cart_num = Db::name('cart')->where(['user_id'=>$user_id])->sum('goods_num');
            $coupon_num = Db::name('coupon_list')->where(['user_id'=>$user_id,'del'=>0,'status'=>0])->count();
            $nickname = Db::name('user')->where(['id'=>$user_id])->value('nickname');
        }

        return [
            'article'       => $article,
            'logo'          => UrlServer::getFileUrl(ConfigServer::get('website', 'pc_logo')),
            'name'          => ConfigServer::get('website', 'name',''),
            'cart_num'      => $cart_num,
            'coupon_num'    => $coupon_num,
            'nickname'      => $nickname,
            'oa_qr_code'    => UrlServer::getFileUrl(ConfigServer::get('oa', 'qr_code', '')),
            'mnp_qr_code'   => UrlServer::getFileUrl(ConfigServer::get('mnp', 'qr_code', '')),
        ];
    }

    /**
     * Notes:获取商品列表
     * @param $page int 页码
     * @param $size int 每页数量
     * @param $name string 商品名称
     * @param $category_id int 分类id
     * @param $type int 类型：1-热销榜单；2-新品推荐；3-好物优选
     * @param $sort_type string 筛选类型:sales_sum-销量筛选；price-价格筛选
     * @param $sort string 排序方式：desc-降序；asc-升序
     * @return array
     * @author:  2021/3/6 9:57
     */
    public static function goodsList($page,$size,$name,$category_id,$type,$sort_type,$sort){

        $where[] = ['del','=',0];
        $where[] = ['status','=',1];
        //按商品名称搜索
        if($name){
            $where[] = ['name','like','%'.$name.'%'];

        }
        //按商品分类搜索
        if($category_id){
            $where[] = ['first_category_id|second_category_id|third_category_id','=',$category_id];
        }
        //按类型筛选
        if(1 != $type){
            switch ($type){
                case 2:
                    $where[] = ['is_new','=',1];
                    break;
                case 3:
                    $where[] = ['is_best','=',1];
                    break;
            }
        }
        //按排序条件显示
        $order = [];
        if($sort_type && $sort){
            $order = [$sort_type=>$sort];
        }

        $goods = new Goods();

        $count = $goods
            ->where($where)
            ->count();

        $list = $goods
            ->where($where)
            ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
            ->order($order)
            ->page($page, $size)
            ->select();

        $more = is_more($count, $page, $size);  //是否有下一页

        return [
            'list' => $list,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => $more
        ];


    }

    /**
     * Notes:修改用户信息
     * @param $post array 用户信息
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     * @author:  2021/3/8 19:07
     */
    public static function changeUserInfo($post){
        $data = [
            'nickname'      => $post['nickname'],
            'sex'           => $post['sex'],
            'create_time'   => time(),
        ];
        return Db::name('user')->where(['id'=>$post['user_id']])->update($data);
    }
}