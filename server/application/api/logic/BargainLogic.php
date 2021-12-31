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

use app\common\logic\LogicBase;
use app\common\model\BargainLaunch;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;

class BargainLogic extends LogicBase {

    /**
     * Notes:获取砍价成功人数
     * @return float|string
     * @author:  2021/2/23 16:13
     */
    public static function barginNumber()
    {
        return Db::name('bargain_launch')
                ->where(['status'=>1])
                ->count();
    }


    /**
     * Notes:砍价列表
     * @param $page int 分页
     * @param $size int 分页条数
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author:  2021/2/23 16:09
     */
    public static function lists($page,$size){

        $now = time();
        $where[] = ['B.del','=',0];
        $where[] = ['B.status','=',1];
        $where[] = ['activity_start_time','<',$now];
        $where[] = ['activity_end_time','>',$now];

        $bargain_count = Db::name('bargain')->alias('B')
            ->join('Goods G','B.goods_id = G.id')
            ->where($where)
            ->count();

        $bargain_list = Db::name('bargain')->alias('B')
            ->join('Goods G','B.goods_id = G.id')
            ->where($where)
            ->page($page,$size)
            ->order('id desc')
            ->field('B.id,B.bargain_min_price as activity_price,G.id as goods_id,G.name,G.image,G.min_price as price')
            ->withAttr('image',function ($value,$data){
                return UrlServer::getFileUrl($value);
            })
            ->select();

        $more = is_more($bargain_count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $bargain_list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $bargain_count,
            'more'          => $more
        ];
        return $data;
    }

    /**
     * Notes:砍价活动详情
     * @param $bargain_id int 砍价活动id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author:  2021/2/23 18:02
     */
    public static function detail($bargain_id){

        $detail = Db::name('bargain')->alias('B')
                    ->join('goods G','B.goods_id = G.id')
                    ->where(['B.id'=>$bargain_id])
                    ->field('B.id,B.bargain_min_price as activity_price,G.id as goods_id,G.name,G.image,G.min_price as price')
                    ->withAttr('image',function ($value,$data){
                        return UrlServer::getFileUrl($value);
                    })
                    ->find();

        $detail['goods_item'] = Db::name('bargain_item')->alias('BI')
                            ->join('goods_item GI','BI.item_id = GI.id')
                            ->where(['BI.goods_id'=>$detail['goods_id']])
                            ->field('BI.floor_price as activity_price,GI.id,GI.image,GI.price,GI.spec_value_ids,GI.spec_value_str')
                            ->select();

        $spec_list = Db::name('goods_spec')
                    ->where(['goods_id'=>$detail['goods_id']])
                    ->column('*','id');

        $spec_value_list = Db::name('goods_spec_value')
                    ->where(['goods_id'=>$detail['goods_id']])
                    ->select();

        foreach ($spec_value_list as $spec_value){
            if(isset($spec_list[$spec_value['spec_id']])){
                $spec_list[$spec_value['spec_id']]['spec_value'][] = $spec_value;
            }
        }


        foreach ($detail['goods_item'] as $key => $goods_item){

            if(empty($goods_item['image'])){
                $goods_item['image'] = $detail['image'];
            }
            $detail['goods_item'][$key]['image'] = UrlServer::getFileUrl($goods_item['image']);
        }
        $detail['goods_spec'] = array_values($spec_list);
        //前端渲染状态
        $detail['status'] = -1;
        //提示字段
        $detail['bargain_tips'] = '您正在发起砍价';
        $detail['simple_tips'] = '邀请好友帮忙砍价，砍至'.$detail['activity_price'].'即可发货';

        return $detail;
    }


    /**
     * Notes:发起砍价
     * @param $post_data array 活动id、规格id
     * @param $user_id int 用户id
     * @return int|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author:  2021/2/24 11:29
     */
    public static function sponsor($post_data,$user_id){
        Db::startTrans();
        try {
            //商品规格信息
            $goods_item = Db::name('goods_item')->alias('GI')
                ->join('goods G','G.id = GI.goods_id')
                ->where(['GI.id'=>$post_data['item_id']])
                ->field('G.name,G.image as goods_iamge,GI.id as item_id,GI.image,GI.spec_value_str,GI.price')
                ->find();

            $bargain = Db::name('bargain')->alias('B')
                ->join('bargain_item BI','B.id = BI.bargain_id')
                ->where(['B.id'=>$post_data['bargain_id'],'BI.item_id'=>$post_data['item_id'],'B.del'=>0])
                ->field('B.*,BI.floor_price,BI.item_id,BI.first_knife_price')
                ->find();
            $now = time();
            //砍到价格
            $current_price = $goods_item['price'] - $bargain['first_knife_price'];

            $status = BargainLaunch::conductStatus;
            $payment_limit_time = 0;
            $bargain_end_time = 0;
            //首刀砍掉后小于零，或低于底价
            if($current_price <= $bargain['floor_price'] || $current_price <= 0){
                //标记砍价成功
                $status = BargainLaunch::successStatus;

                //砍价的价格低于低价、重新计算每刀价格
                if($current_price < $bargain['floor_price']){
                    $current_price = $bargain['floor_price'];
                    $bargain['first_knife_price'] = $goods_item['price'] - $current_price;
                }
                //砍价成功后的付款时间（秒）
                $payment_limit_time = ConfigServer::get('bargain', 'payment_limit_time', 0) * 60;
                if($payment_limit_time > 0){
                    $payment_limit_time = $now + $payment_limit_time;
                }
                $bargain_end_time = $now;
            }


            $diff_price = round($current_price - $bargain['floor_price'],2);

            $bargain_launch = [
                'bargain_id'            => $bargain['id'],
                'goods_id'              => $bargain['goods_id'],
                'user_id'               => $user_id,
                'order_id'              => '',
                'goods_snap'            => json_encode($goods_item),            //规格信息
                'bargain_snap'          => json_encode($bargain),               //砍价信息
                'help_number'           => 0,                                   //助力次数
                'bargain_price'         => $bargain['floor_price'],             //商品活动低价
                'current_price'         => $current_price,                      //当前砍到的价格
                'launch_start_time'     => $now,                                //砍价发起时间
                'launch_end_time'       => $now + $bargain['time_limit'] * 3600,//砍价结束时间
                'bargain_end_time'      => $bargain_end_time,                   //最后的砍价时间
                'payment_limit_time'    => $payment_limit_time,                 //最后的付款时间
                'status'                => $status,                             //当前砍价状态
            ];
            //写入发起砍价表
            $bargain_launch_id = Db::name('bargain_launch')
                            ->insertGetId($bargain_launch);

            $bargain_knife = [
                'bargain_id'        => $bargain['id'],
                'launch_id'         => $bargain_launch_id,
                'user_id'           => $user_id,
                'surplus_price'     => $current_price,
                'help_price'        => $bargain['first_knife_price'],
                'help_time'         => $now
            ];

            //写入砍价记录表
            Db::name('bargain_knife')
                 ->insert($bargain_knife);

            //砍价进度条
            $progress = round($bargain['floor_price'] / $current_price,2);

            Db::commit();
            return data_success('发起砍价成功',['id'=>$bargain_launch_id,'knife_price'=>$bargain['first_knife_price'],'diff_price'=>$diff_price,'progress'=>$progress]);
        }catch (Exception $e) {
            Db::rollback();

            return data_error('发起砍价失败：'.$e->getMessage(),'');
        }

    }

    /**
     * Notes:助力
     * @param $id int 砍价订单id
     * @param $user_id int 用户id
     * @return array|bool
     * @author:  2021/2/25 19:08
     */
    public static function knife($id,$user_id){
        Db::startTrans();
        try {
            $now = time();
            $bargain_launch = new BargainLaunch();
            $bargain_launch = $bargain_launch
                ->where(['id' => $id])
                ->find();

            $bargain_snap = $bargain_launch['bargain_snap'];
            //每刀随机金额
            if (1 == $bargain_snap['knife_type']) {
                $knife__price_array = explode(',', $bargain_launch['bargain_snap']['knife_price']);
                $knife_price = round(random_float(array_pop($knife__price_array), array_pop($knife__price_array)), 2);

            } else {    //每刀固定金额
                $knife_price = $bargain_launch['bargain_snap']['knife_price'];
            }

            //商品的低价
            $low_price = $bargain_launch['bargain_price'];
            //砍价后的金额
            $knife_after_price = $bargain_launch['current_price'] - $knife_price;
            $status = BargainLaunch::conductStatus;   //砍价状态
            $payment_limit_time = 0;                  //砍价成功后的付款时间
            $bargain_end_time = 0;                   //最后的砍刀时间

            //如果砍价后低于低价，按当前的价格-低价来得到每刀金额,并标记砍价成功
            if ($knife_after_price <= $low_price) {
                //砍价成功后的付款时间（秒）
                $payment_limit_time = ConfigServer::get('bargain', 'payment_limit_time', 0) * 60;

                $status = BargainLaunch::successStatus;
                if($payment_limit_time > 0){
                    $payment_limit_time = $now + $payment_limit_time;
                }
                $bargain_end_time = $now;
                $knife_price = round($bargain_launch['current_price'] - $low_price,2);   //砍价的金额 = 当前砍到的价格 - 低价
                $knife_after_price = $low_price;        //砍价后更新为低价
            }

            //写入砍价助力表
            $knife_data = [
                'bargain_id'        => $bargain_snap['id'],         //活动id
                'launch_id'         => $bargain_launch['id'],       //订单id
                'user_id'           => $user_id,                    //用户id
                'surplus_price'     => $knife_after_price,          //助力后的价格
                'help_price'        => $knife_price,                //助力的金额
                'help_time'         => $now,
            ];
            Db::name('bargain_knife')->insert($knife_data);

            //更新砍价进度
            $bargain_launch->help_number     = ['inc', 1];                       //助力次数+1
            $bargain_launch->current_price   = $knife_after_price;               //助力后的价格
            $bargain_launch->status          = $status;                          //砍价状态

            //砍价成功 限制多少时间内付款
            if($payment_limit_time > 0 ){
                $bargain_launch->payment_limit_time = $payment_limit_time;
            }
            if($bargain_end_time > 0){
                $bargain_launch->bargain_end_time = $bargain_end_time;
            }

            $bargain_launch->save();

            //进度条、剩余差价
            $progress = round($bargain_snap['floor_price'] / $knife_after_price,2);
            $diff_price = round($knife_after_price - $bargain_snap['floor_price'],2);

            Db::commit();

            return data_success('助力成功',['status'=>$status,'knife_price'=>$knife_price,'diff_price'=>$diff_price,'progress'=>$progress]);


        }catch (Exception $e) {
            Db::rollback();
            return data_error('助力失败：'.$e->getMessage(),'');
        }

    }
    /**
     * Notes:砍价订单
     * @param $type int 类型
     * @param $user_id int 用户id
     * @param $page int 分页
     * @param $size int 分页条数
     * @author:  2021/2/24 16:08
     */
    public static function orderList($type,$user_id,$page,$size){
        $where[] = ['user_id','=',$user_id];
        if('-1' != $type){
            $where[] = ['status','=',$type];
        }
        $bargain_launch = new BargainLaunch();

        $order_count = $bargain_launch
                ->where($where)
                ->count();

        $order_list =  $bargain_launch
                ->where($where)
                ->page($page,$size)
                ->order('id desc')
                ->append(['item_id','btn_tips','bargain_tips','image','name','price','spec_value_str','status_text','create_time'])
                ->visible(['id','bargain_id','goods_id','item_id','image','name','price','spec_value_str','order_id','current_price','buy_btn','bargain_btn','pay_btn','status_text','create_time'])
                ->select();

        $more = is_more($order_count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $order_list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $order_count,
            'more'          => $more
        ];

        return $data;
    }

    /**
     * Notes:砍价详情页
     * @param $id int 订单id
     * @param $user_id int 用户id
     * @author:  2021/2/24 18:07
     */
    public static function bargainDetail($id,$user_id){
        $bargain_launch = new BargainLaunch();
        $bargain_launch = $bargain_launch
                ->where(['id'=>$id])
                ->with('bargain_knife.user')
                ->append(['item_id','image','name','price','spec_value_str','over_time','diff_price','activity_price','progress','knife_list','knife_price','share_titles','share_intros'])
                ->find();
        //砍价快照
        $bargain_snap = $bargain_launch['bargain_snap'];

        $bargain_launch = $bargain_launch->visible(['id','bargain_id','user_id','goods_id','item_id','order_id','name','image','price','spec_value_str','current_price','floor_price','diff_price','progress','knife_list','status','knife_price','share_titles','share_intros','payment_limit_time'])
            ->hidden(['bargain_knife'])->toArray();
      

        $user_info = current($bargain_launch['knife_list']);
        $now = time();

        //好友点击分享行为按钮
        $sponsor_btn     = 0;        //我也要砍价按钮
        $knife_btn       = 0;        //帮忙砍一刀按钮
        //查看自己砍价行为按钮
        $direct_buy_btn  = 0;        //直接购买按钮
        $buy_btn         = 0;        //立即购买按钮
        $invite_btn      = 0;        //邀请好友按钮
        $order_btn       = 0;        //查看订单按钮
        //提示语，通用
        $bargain_tips    = '';       //砍价提示，最上方提示
        $simple_tips     = '';       //提示，砍价提示下方提示
        $status_tips     = '';       //状态提示
        //分享用户的头像
        $bargain_launch['share_avatar'] = '';

        //显示按钮：查看自己的砍价、好友点击分享进来
        if($bargain_launch['user_id'] != $user_id){ //好友点击分享进来
            $bargain_launch['status'] = 5;//标记为好友邀请进来的
            //我也要砍价按钮
            $sponsor_btn = 1;
            $bargain_tips = '来自'.$user_info['nickname'].'的分享';
            $bargain_launch['share_avatar'] = $user_info['avatar'];
            $simple_tips = '谢谢您的助力，动动手指帮我砍一刀';

            if($bargain_launch['over_time'] <= $now || 1 == $bargain_launch['status'] || 2 == $bargain_launch['status']){
                $status_tips = '砍价已结束，去看看其他商品吧~';
            }else{

                $bargain_knife = Db::name('bargain_knife')->where(['launch_id'=>$bargain_launch['id'],'user_id'=>$user_id])->find();

                if(empty($bargain_knife)){
                    //帮忙砍一刀按钮
                    $knife_btn = 1;
                }

            }


        }else{//自己的砍价

            $simple_tips = '邀请好友帮砍价，砍至'.$bargain_snap['floor_price'].'即可发货';
            //砍价进行中
            if(0 == $bargain_launch['status'] && $bargain_launch['over_time'] > $now){
                //邀请好友按钮
                $invite_btn = 1;
                $bargain_tips = '砍价中';
                if(2 == $bargain_snap['payment_where']){
                    //显示直接购买按钮
                    $direct_buy_btn = 1;
                }
                $status_tips = '砍价中';
            }

            //砍价成功
            if(1 == $bargain_launch['status'] || (2 == $bargain_snap['payment_where'] && $bargain_launch['over_time'] <= $now)){
                $bargain_tips = '砍价成功';
                $status_tips = '恭喜您，砍价成功';
                //砍价成功，没有超过付款时间,且没有下单的，显示购买按钮
                $buy_btn = 1;
                if($bargain_launch['order_id'] || ($bargain_launch['payment_limit_time'] && $bargain_launch['payment_limit_time'] < $now)){
                   
                    $buy_btn = 0;
                    if($bargain_launch['payment_limit_time'] && $bargain_launch['payment_limit_time'] < $now){
                        $status_tips = '已超过下单时间，无法下单';
                    }
                }

                //已下单
                if($bargain_launch['order_id']){
                    $order_btn = 1;

                }


            }

            //砍价失败
            if(($bargain_launch['over_time'] <= $now && 1 != $bargain_launch['status'] && 2 != $bargain_snap['payment_where']) || 2 == $bargain_launch['status']){
                $bargain_tips = '砍价失败';
                $status_tips = '非常遗憾，砍价失败';
            }

        }
        $bargain_launch['sponsor_btn'] = $sponsor_btn;
        $bargain_launch['knife_btn'] = $knife_btn;
        $bargain_launch['direct_buy_btn'] = $direct_buy_btn;
        $bargain_launch['buy_btn'] = $buy_btn;
        $bargain_launch['invite_btn'] = $invite_btn;
        $bargain_launch['order_btn'] = $order_btn;
        $bargain_launch['bargain_tips'] = $bargain_tips;
        $bargain_launch['simple_tips'] = $simple_tips;
        $bargain_launch['status_tips'] = $status_tips;

        return $bargain_launch;

    }

    /**
     * Notes:关闭砍价订单
     * @param $id int 活动订单id
     * @return bool
     * @author:  2021/2/26 16:36
     */
    public static function closeBargain($id){
        $bargain_launch = new BargainLaunch();
        $bargain_launch  = $bargain_launch
                            ->where(['id'=>$id])
                            ->find();

        //标记砍价结束
        if($bargain_launch['launch_end_time'] < time() && 0 == $bargain_launch['status']){

            //任意金额购买标记成功
            if(2 == $bargain_launch['bargain_snap']['payment_where']){
                $status = 1;
            }else{//砍到低价
                $status = 2;
                if($bargain_launch['bargain_price'] > $bargain_launch['current_price']){
                    $status = 1;
                }
            }
            $bargain_launch->status = $status;
            $bargain_launch->save();
        }

        return true;
    }


}