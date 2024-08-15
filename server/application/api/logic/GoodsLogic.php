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
namespace app\api\logic;
use app\api\model\Goods;
use app\common\model\Distribution;
use app\common\model\DistributionGoods;
use app\common\model\DistributionLevel;
use app\common\model\Footprint;
use app\common\model\GoodsBrand;
use app\common\model\TeamActivity;
use app\common\model\TeamFound;
use app\common\model\TeamGoodsItem;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\facade\Hook;

class GoodsLogic{
    //商品列表
    public static function getGoodsList($user_id,$get,$page,$size){
        $where = [];
        $order = [];
        $where[] = ['status','=',1];
        $where[] = ['del','=',0];

        $goods = new Goods();
        //品牌筛选
        if(isset($get['brand_id']) && $get['brand_id']) {
            $where[] = ['brand_id', '=', $get['brand_id']];
        }
        //分类筛选
        if(isset($get['category_id']) && $get['category_id']){
            $where[] = ['first_category_id|second_category_id|third_category_id','=',$get['category_id']];
        }

        //关键词搜索
        if(isset($get['keyword']) && $get['keyword']){
            // 优先查品牌 然后再查询商品
            $band_ids = GoodsBrand::where('is_show', 1)->where('name', 'like', "%{$get['keyword']}%")->column('id');
            if ($band_ids) {
                $where[] = function ($query) use($band_ids, $get) {
                    $query->where('brand_id', 'in', $band_ids)->whereOr('name', 'like', "%{$get['keyword']}%");
                };
            } else {
                $where[] = [ 'name', 'like', "%{$get['keyword']}%" ];
            }
            
            //记录关键词
            if($user_id){
                self::recordKeyWord(trim($get['keyword']),$user_id);
            }
            
        }
        //销量排序
        if(isset($get['sales_sum']) && $get['sales_sum']){
            $order['sales_sum'] = $get['sales_sum'];
        }
        //价格排序
        if(isset($get['price']) && $get['price']){
            $order['min_price'] = $get['price'];
        }

        $order['sort'] = 'desc';
        $order['id'] = 'desc';

        $goods_count = $goods
                    ->where($where)
                    ->count();

        $goods_list = $goods
                    ->where($where)
                    ->page($page,$size)
                    ->order($order)
                    ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum,sort')
                ->select();

        $more = is_more($goods_count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $goods_list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $goods_count,
            'more'          => $more
        ];
        return $data;

    }

    //记录搜索关键词
    public static function recordKeyWord($keyword,$user_id){
        $record = Db::name('search_record')->where(['user_id'=>$user_id,'keyword'=>$keyword,'del'=>0])->find();

        if($record){
            return Db::name('search_record')->where(['id'=>$record['id']])->update(['count'=>Db::raw('count+1'),'update_time'=>time()]);
        }
        return Db::name('search_record')->insert(['user_id'=>$user_id,'keyword'=>$keyword]);
    }
    //商品详情
    public static function getGoodsDetail($user_id,$id){

        $goods = Goods::get(['id'=>$id,'status'=>1],['goods_image','goods_item']);
        if(empty($goods)){
            return [];
        }

        //点击量
        $goods->click_count = $goods->click_count  + 1;
        $goods->save();
        $goods->sales_sum += $goods->virtual_sales_sum;
        $goods->is_collect = 0;
        $goods->member_price = 0;
        $goods->append(['order_give_integral', 'commission_price']);

        //检查商品是否整在参加活动，如果正在参加活动替换商品的价格为活动价
        $goods = self::checkActivity($goods);
        if($user_id) {
            //是否收藏
            $collect = Db::name('goods_collect')->where(['user_id'=>$user_id,'goods_id'=>$id])->find();
            $goods->is_collect= $collect ? 1 : 0;

            //会员折扣
            $member_discount = Db::name('user_level l')
                ->join('user u', 'u.level = l.id')
                ->where(['u.id' => $user_id])
                ->value('discount');
            $price_array = [];
            //处理会员折扣价格
            if ($goods->is_member > 0 && $member_discount > 0) {
                //会员价格
                foreach ($goods->goods_item as $item => $value){
                    $goods->goods_item[$item]['member_price'] = 0;
                    if($member_discount){
                        $member_price =  round($value['price'] * $member_discount / 10,2);
                        $goods->goods_item[$item]['member_price'] = $member_price;
                        $price_array[] = $member_price;
                    }
                }
                $price_array && $goods->member_price = min($price_array);
            }
            //多规格，按最高的价格计算积分
            if($price_array && 2 === $goods->give_integral_type){
                $price = $price_array ? max($price_array) : $goods->max_price;
                $goods->order_give_integral = intval($price * $goods->give_integral / 100);
            }
        }
        //猜你喜欢
        $goods->Like();
        //商品规格
        $goods->GoodsSpec();
        $goods->append(['comment'])->hidden(['Spec','GoodsSpecValue'])
            ->visible(['id','name','image','video','stock','remark','content','sales_sum','poster',
                'click_count','min_price','max_price','market_price','is_collect','goods_spec','goods_image',
                'goods_item','activity','member_price','is_express','is_selffetch','market_price']);

        $market_price_array = array_column($goods->goods_item->toarray(),'market_price');
        $goods->market_price = max($market_price_array);
        $price_array = array_column($goods->goods_item->toarray(),'price');
        $goods->min_price = min($price_array);
        $goods->max_price = max($price_array);

        $goods->poster = !empty($goods->poster) ? UrlServer::getFileUrl($goods->poster) : '';
        // 商品虚拟浏览量
        $goods->click_count += $goods->virtual_click;
        //判断是否开启了拼团
        if ($goods['is_team']) {
            $resTeam = self::getTeam($goods);
            // 如果活动没结束,则返回拼团数据, 否则把商品是否已开团状态改为,不是开团商品
            if ($resTeam !== 100 and is_array($resTeam)) {
                $goods['activity'] = $resTeam;
            } else {
                $goods['is_team'] = 0;
            }
        }
        // 预估佣金
        $goods = $goods->toArray();
        $goods['distribution'] = self::getDistribution($id, $user_id);

        // 钩子-记录足迹(浏览商品)
        Hook::listen('footprint', [
            'type'       => Footprint::browse_goods,
            'user_id'    => $user_id,
            'foreign_id' => $id //商品ID
        ]);


        Db::name('goods_click')->insert([
            'user_id' => $user_id,
            'goods_id' => $id,
            'create_time' => time(),
        ]);

        return $goods;



    }
    //好物优选
    public static function getBestList($page,$size){
        $goods = new Goods();
        $goods_count = $goods
                    ->where(['del'=>0,'status'=>1,'is_best'=>1])
                    ->count();

        $goods_list = $goods
                    ->where(['del'=>0,'status'=>1,'is_best'=>1])
                    ->field('id,name,image,min_price as price,market_price')
                    ->order('sort desc,id desc')
                    ->page($page,$size)
                    ->select();

        $more = is_more($goods_count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $goods_list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $goods_count,
            'more'          => $more
        ];
        return $data;
    }

    //热门推荐
    public static function getHostList($page,$size){
        $goods = new Goods();
        $goods_count = $goods
            ->where(['del'=>0,'status'=>1])
            ->count();

        $goods_list = $goods
            ->where(['del'=>0,'status'=>1])
            ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum,click_count,sort')
            ->order('sales_sum desc,click_count desc, sort desc')
            ->page($page,$size)
            ->select();

        $more = is_more($goods_count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $goods_list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $goods_count,
            'more'          => $more
        ];
        return $data;
    }

    //搜索记录
    public static function getSearchPage($user_id,$limit){
        $history_list = Db::name('search_record')
            ->where(['user_id'=>$user_id,'del'=>0])
            ->limit($limit)
            ->order('id desc')
            ->column('keyword');
        $hot_lists = ConfigServer::get('hot_search','hot_keyword',[]);
        return[
            'history_lists' => $history_list,
            'hot_lists' => $hot_lists,
        ];
    }

    //检查商品是否正在参加活动
    public static function checkActivity($goods){
        $goods['activity'] = [];
        $seckill = SeckillLogic::getSeckillGoods();
        if($seckill['seckill_goods']){
            $seckill_goods_ids = array_column($seckill['seckill_goods'],'goods_id');
            if($seckill['seckill_goods'] && in_array($goods['id'],$seckill_goods_ids)){
                $goods['activity'] = [
                    'type'       => 1,
                    'info'       => $seckill['seckill'],
                ];
                foreach ($goods['goods_item'] as &$item){
                    if(isset($seckill['seckill_goods'][$item['id']])){

                        $item['price'] = $seckill['seckill_goods'][$item['id']]['price'];
                    }
                }
            }

        }
        return $goods;

    }

    //清空搜索记录
    public static function clearSearch($user_id){
        return Db::name('search_record')
                ->where(['user_id'=>$user_id])
                ->update(['del'=>1,'update_time'=>time()]);

    }

    // 获取拼团内容
    private static function getTeam($goods)
    {
        // 查询拼团活动信息
        $teamActivityModel = new TeamActivity();
        $team = $teamActivityModel->field(true)
            ->where(['del'=>0, 'status'=>1, 'goods_id'=>$goods['id']])->find();

        // 判断是否已到活动时间 (为真则活动结束)
        if ($team['end_time'] <= time()) {
            Goods::where(['id'=>$goods['id']])->update([ 'is_team' => 0 ]);
            return 10;
        }

        // 查询规格信息
        $teamGoodsItem = new TeamGoodsItem();
        $team_item = $teamGoodsItem->field(true)
            ->where('team_id', '=', $team['team_id'])
            ->where('goods_id','=', $team['goods_id'])->select();

        $team_spec_price = [];
        foreach ($team_item as $item) {
            $team_spec_price[intval($item['item_id'])] = $item['team_price'];
        }
        // 重置商品规格价格 为 拼团活动规格的价格
        $goods_item = $goods['goods_item'];
        foreach ($goods_item as &$item) {
            $item['team_price'] = $team_spec_price[$item['id']];
        }
        $goods['goods_item'] = $goods_item;

        unset($team['status']);
        unset($team['del']);
        unset($team['create_time']);

        // 获取该商品正在开的团,但是还不够人的团
        $teamFoundModel = new TeamFound();
        $team_found = $teamFoundModel->field('id,team_id,found_time,found_end_time,
                nickname,avatar,join,need')
            ->where('team_id', '=', $team['team_id'])
            ->where('status', '=', 0)
            ->where('found_end_time', '>', time())
            ->limit(10)
            ->select()->toArray();

        return ['type'=>2, 'team'=>$team, 'team_found'=>$team_found];
    }

    /**
     * 计算最高可得预估佣金
     * @param $goodsId
     * @param $userId
     * @return array
     */
    public static function getDistribution($goodsId, $userId)
    {
        $earnings = 0;
        $goods = \app\common\model\Goods::findOrEmpty($goodsId)->toArray();
        $distributionGoods = DistributionGoods::where('goods_id', $goodsId)->select()->toArray();
        if(!empty($distributionGoods) && $distributionGoods[0]['is_distribution'] && $distributionGoods[0]['rule'] == 2) {
            foreach($distributionGoods as $item) {
                $earnings = max($earnings, round($goods['max_price'] * $item['first_ratio'] / 100, 2));
                $earnings = max($earnings, round($goods['max_price'] * $item['second_ratio'] / 100, 2));
            }
        }
        if(!empty($distributionGoods) && $distributionGoods[0]['is_distribution'] && $distributionGoods[0]['rule'] == 1) {
            $levels = DistributionLevel::select()->toArray();
            foreach($levels as $item) {
                $earnings = max($earnings, round($goods['max_price'] * $item['first_ratio'] / 100, 2));
                $earnings = max($earnings, round($goods['max_price'] * $item['second_ratio'] / 100, 2));
            }
        }

        // 详情页是否显示佣金
        $isShow = ConfigServer::get('distribution', 'is_show_earnings', 0);
        if ($isShow) {
            // 详情页佣金可见用户 0-全部用户 1-分销商
            $scope = ConfigServer::get('distribution', 'show_earnings_scope', 0);
            $user = Distribution::where(['user_id' => $userId])->findOrEmpty()->toArray();
            if ($scope && empty($user['is_distribution'])) {
                $isShow = 0;
            }
        }

        return [
            'is_show' => $isShow,
            'earnings' => $earnings
        ];
    }
}