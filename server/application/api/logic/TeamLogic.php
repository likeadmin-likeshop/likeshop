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


use app\common\logic\IntegralLogic;
use app\common\logic\LogicBase;
use app\common\logic\PayNotifyLogic;
use app\common\model\Client_;
use app\common\model\Order;
use app\common\model\Pay;
use app\common\model\Team;
use app\common\model\TeamActivity;
use app\common\model\TeamFollow;
use app\common\model\TeamFound;
use app\common\model\TeamGoodsItem;
use app\common\model\User;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;
use think\facade\Hook;

/**
 * 拼团逻辑
 * Class TeamLogic
 * @package app\api\logic
 */
class TeamLogic extends LogicBase
{

    private static $team_goods;
    private static $team_id;
    private static $goods_num;
    private static $user_id;
    private static $user;
    private static $integral_switch;
    private static $integral_config;
    private static $integral_limit;
    private static $team_found_id = 0;
    private static $team_found = [];
    private static $team_activity = [];

    protected static $error; //错误信息


    /**
     * Notes: 错误错误信息
     * @author 张无忌(2021/1/12 16:01)
     * @return mixed
     */
    public static function getError()
    {
        return self::$error;
    }

    /**
     * Notes: 获取拼团商品列表
     * @param $page
     * @param $size
     * @author 张无忌(2021/1/14 11:39)
     * @return TeamActivity[]|array
     */
    public static function getTeamGoodsList($page, $size)
    {
        try {
            $teamActivityModel = new TeamActivity();

            $where = [
                ['t.del', '=', 0],
                ['t.status', '=', 1],
                ['t.end_time', '>', time()],
                ['g.del', '=', 0],
                ['g.status', '=', 1],
            ];


            $count = $teamActivityModel->where($where)->alias('t')
                ->join('Goods g', 'g.id = t.goods_id')
                ->count();

            $lists = $teamActivityModel->field('g.name,g.image,g.max_price,g.min_price,
            t.team_id,t.goods_id,t.sales_sum,t.people_num,t.team_max_price,t.team_min_price,t.end_time')
                ->where($where)->alias('t')
                ->join('Goods g', 'g.id = t.goods_id')
                ->page($page, $size)
                ->select();

            foreach ($lists as &$item) {
                $item['image'] = UrlServer::getFileUrl($item['image']);
            }

            return [
                'list'          => $lists,
                'page_no'       => $page,
                'page_size'     => $size,
                'count'         => $count,
                'more'          => is_more($count, $page, $size)
            ];
        } catch (\Exception $e) {
            static::$error = '获取拼团商品异常';
            return [];
        }
    }


    public static function setUser($user_id)
    {
        self::$user_id = $user_id;
        self::$user = User::get($user_id);
    }

    public static function setTeamId($team_id)
    {
        self::$team_id = $team_id;
    }


    public static function setTeamGoodsItem($item_id)
    {
        $team_goods = new TeamGoodsItem();

        $field = 'i.id as item_id,g.id as goods_id,g.name as goods_name,g.status,g.del,g.image,i.stock,
        g.free_shipping_type,g.free_shipping,g.free_shipping_template_id,g.image, i.image as spec_image,
        i.spec_value_str,i.spec_value_ids,i.price as item_price,i.image as spec_image,i.volume,
        i.weight,g.third_category_id,i.price as original_price,tg.team_id,tg.team_price as goods_price';

        $goods = $team_goods->alias('tg')
            ->field($field)
            ->join('goods_item i', 'i.id = tg.item_id')
            ->join('goods g', 'g.id = i.goods_id')
            ->where(['item_id' => $item_id, 'tg.del' => 0, 'team_id' => self::$team_id])
            ->find();

        $image_str = empty($goods['spec_image']) ? $goods['image'] : $goods['spec_image'];
        $goods['image_str'] = UrlServer::getFileUrl($image_str);
        $goods['discount_price'] = 0;
        $goods['integral_price'] = 0;
        self::$team_goods = $goods;
        self::$team_activity = TeamActivity::where(['team_id' => self::$team_id])->find();
    }

    public static function setTeamGoodsNum($goods_num)
    {
        self::$goods_num = $goods_num;
    }

    public static function setTeamFound($found_id)
    {
        if ($found_id > 0){
            self::$team_found_id = $found_id;
            self::$team_found = TeamFound::get($found_id);
        }
    }


    public static function setIntegralConfig()
    {
        self::$integral_switch = IntegralLogic::isIntegralInOrder(self::$team_goods) ? 1 : 0;
        self::$integral_config = ConfigServer::get('marketing', 'integral_deduction_money', 0);
        self::$integral_limit = ConfigServer::get('marketing', 'integral_deduction_limit', 0);
    }


    /**
     * Desc: 拼团订单结算详情
     * @param $post
     * @param $user_id
     * @return array
     */
    public static function calculateInfo($post, $user_id)
    {
        try{
            $found_id = $post['found_id'] ?? 0;
            self::setTeamFound($found_id);
            $goods = self::$team_goods;
            $goods['goods_num'] = self::$goods_num;
            $goods_lists[] = $goods;

            $total_goods_price = self::$team_goods['goods_price'] * self::$goods_num;//商品总金额

            //用户地址
            $user_address = UserAddressLogic::getOrderUserAddress($post, $user_id);
            //运费
            $total_shipping_price = FreightLogic::calculateFreight($goods_lists, $user_address);
            //订单金额
            $total_amount = $total_goods_price + $total_shipping_price;
            //订单应付金额
            $order_amount = $total_amount;

            if ($order_amount <= 0){
                $order_amount = 0;
            }

            $result = [
                'order_type' => Order::TEAM_ORDER,
                'goods_lists' => array_values($goods_lists),
                'coupon_id' => $post['coupon_id'] ?? 0,
                'total_num' => self::$goods_num,//订单总数量
                'total_goods_price' => round($total_goods_price, 2),//订单商品总价
                'total_amount' => round($total_amount, 2),//订单总价(商品价格,运费,优惠券等)
                'order_amount' => round($order_amount, 2),//订单应付价格
                'address' => $user_address,
                'discount_amount' => 0,//优惠券抵扣金额
                'integral_amount' => 0,//积分抵扣金额
                'shipping_price' => round($total_shipping_price, 2),//运费
                'remark' => $post['remark'] ?? '',
                'pay_way' => $post['pay_way'] ?? Pay::WECHAT_PAY,
                'user_money' => self::$user['user_money'],//用户余额
                'user_use_integral' => 0,//用户使用积分
                'user_integral' => self::$user['user_integral'],//用户拥有积分
                'integral_limit' => self::$integral_limit,// 积分抵扣限制(满多少积分可用)
                'integral_switch' => self::$integral_switch,//积分抵扣开关
                'integral_config' => self::$integral_config,//积分抵扣配置
                'team_need' => self::$team_activity['people_num'] ?? 0,//成团人数
            ];

            return $result;
        } catch (Exception $e){
            static::$error = $e->getMessage();
            return false;
        }
    }

    
    /**
     * Desc:添加拼团订单
     * @param $user_id
     * @param $order_data
     * @param $client
     * @return array
     */
    public static function buy($user_id, $order_data, $post)
    {
        Db::startTrans();
        try {
            $client = $post['client'];
            $goods_lists = $order_data['goods_lists'];
            $user_address = $order_data['address'];

            self::addTeamOrderCheck($order_data);

            //拼团信息
            $order_team = [
                'found_id' => $post['found_id'] ?? 0,
                'team_id' => $post['team_id'] ?? 0,
            ];
            $order = OrderLogic::addOrder($user_id, $order_data, $client, $user_address, $order_team);
            $order_id = $order['order_id'];
            OrderLogic::addOrderGoods($order_id, $goods_lists);
            OrderLogic::addOrderAfter($order_id, $user_id, $type = '', $order_data);

            //支付方式为余额支付,扣除余额,更新订单状态,支付状态
            if ($order_data['pay_way'] == Pay::BALANCE_PAY || $order_data['order_amount'] == 0){
                PayNotifyLogic::handle('order', $order['order_sn'], []);
            }

            //短信通知
            Hook::listen('sms_send', [
                'key'       => 'DDTJTZ',
                'mobile'    => $user_address['telephone'],
                'params'    => [
                    'nickname'      => self::$user['mobile'],
                    'order_sn'      => $order['order_sn'],
                    'order_amount'   => $order['order_amount']
                ],
            ]);

            Db::commit();
            return ['order_id' => $order_id, 'type' => 'order'];

        } catch (Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }


    /**
     * Desc: 开团或参团验证
     * @param $order_data
     * @throws Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function addTeamOrderCheck($order_data)
    {
        if (empty($order_data['address'])) {
            throw new Exception('请选择收货地址');
        }

        //余额支付,是否满足支付金额
        if ($order_data['pay_way'] == Pay::BALANCE_PAY){
            $user_money = self::$user['user_money'];
            if($user_money < $order_data['order_amount']){
                throw new  Exception('账户余额不足');
            }
        }

        //用户当前积分 - 用户使用的积分
        if ($order_data['user_use_integral'] > 0){
            if (self::$user['user_integral'] < $order_data['user_use_integral']){
                throw new Exception('积分不足');
            }
        }
    }


    /**
     * Desc: 参加拼团,做团员
     * @param $order_id
     * @param $found_id
     * @param $user_id
     * @param bool $is_found
     * @throws Exception
     */
    public static function addTeamFollow($order_id, $found_id, $user_id, $is_found = false)
    {
        $found = TeamFound::get($found_id);
        $user = User::get($user_id);

        $team_follow = new TeamFollow();
        $follow_data = [
            'follow_user_id' => $user_id,
            'follow_user_nickname' => $user['nickname'],
            'follow_user_avatar' => $user['avatar'],
            'follow_time' => time(),
            'order_id' => $order_id,
            'found_id' => $found_id,
            'team_id' => $found['team_id'],
            'type' => $is_found ? 1 : 0,
        ];
        $team_follow->insertGetId($follow_data);
        TeamFound::where(['id' => $found_id])->setInc('join', 1);
    }



    /**
     * User: 意象信息科技 mjf
     * Desc: 开启新的拼团, 做团长
     * @param $order_id
     * @param $user_id
     * @param $team_id
     * @return int|string
     */
    public static function addTeamFound($order_id, $user_id, $team_id)
    {
        $user = User::get($user_id);
        $team_activity = TeamActivity::get(['team_id' => $team_id]);

        $team_found = new TeamFound();
        $found_data = [
            'sn' => createSn('team_found', 'sn', '', 4),
            'found_time' => time(),
            'found_end_time' => time() + intval($team_activity['time_limit'] * 60 * 60),//time_limit 小时
            'user_id' => $user_id,
            'team_id' => $team_id,
            'nickname' => $user['nickname'],
            'avatar' => $user['avatar'],
            'order_id' => $order_id,
            'need' => $team_activity['people_num'],
        ];
        return $team_found->insertGetId($found_data);
    }



    /**
     * Desc: 已支付拼团订单后,更新拼团状态
     * @param $order_id
     * @throws Exception
     */
    public static function updateTeam($order_id)
    {
        $order = Order::get($order_id);
        $team_found = TeamFound::where(['id' => $order['team_found_id']])->find();

        self::incTeamGoodsSale($order_id, $order['team_id']);

        //订单中没有选中团
        if($order['team_found_id'] <= 0){
            //没有选中的团时,开通一个新团做团长
            return self::openNewTeamFound($order, $order['team_id']);
        }

        //订单中已有选中团 -> 已满员
        if ($team_found['join'] == $team_found['need']){
            //没有位置, 找一个随机的团加入, 没有团则开一个新团做团长
            $rand_found_id = self::unFinishedTeam($team_found['team_id']);
            if ($rand_found_id === false){
                //没有随机团,创建新团做团长
                return self::openNewTeamFound($order, $team_found['team_id']);
            }
            //加入随机团
            self::addTeamFollow($order_id, $rand_found_id, $order['user_id']);
            self::updateTeamStatus($rand_found_id);
            return $rand_found_id;
        }

        //订单中已有选中团 -> 加入团
        self::addTeamFollow($order_id, $order['team_found_id'], $order['user_id']);
        self::updateTeamStatus($order['team_found_id']);
        return $order['team_found_id'];
    }


    /**
     * Desc: 拼团商品增加销量
     * @param $order_id
     * @param $team_id
     * @throws Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function incTeamGoodsSale($order_id, $team_id)
    {
        $order_goods = Db::name('order_goods')->where(['order_id' => $order_id])->find();

        Db::name('team_activity')
            ->where(['goods_id' => $order_goods['goods_id'], 'team_id' => $team_id])
            ->setInc('sales_sum', $order_goods['goods_num']);

        Db::name('team_goods_item')
            ->where(['team_id' => $team_id, 'item_id' => $order_goods['item_id']])
            ->setInc('sales_sum', $order_goods['goods_num']);
    }



    /**
     * User: 意象信息科技 mjf
     * Desc: 更新拼团参与状态
     * @param $found_id
     */
    public static function updateTeamStatus($found_id)
    {
        $found = TeamFound::get($found_id);
        //人数凑齐,拼团成功
        if ($found['join'] == $found['need']){
            $found->status = Team::STATUS_SUCCESS;
            $found->team_end_time = time();
            $found->save();
            TeamFollow::where(['found_id' => $found_id])->update(['status' => Team::STATUS_SUCCESS, 'team_end_time' => time()]);
        }
    }


    /**
     * Desc: 开一个新的团
     * @param $order
     * @param $team_id
     * @throws Exception
     */
    public static function openNewTeamFound($order, $team_id)
    {
        $found_id = self::addTeamFound($order['id'], $order['user_id'], $team_id);
        self::addTeamFollow($order['id'], $found_id, $order['user_id'], true);
        //更新订单关联拼团id
        self::updateOrderTeamFound($order['id'], $found_id);
        return $found_id;
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 更新订单关联拼团id
     * @param $order_id
     * @param $found_id
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function updateOrderTeamFound($order_id, $found_id)
    {
        return Db::name('order')->where(['id' => $order_id])->update(['team_found_id' => $found_id]);
    }


    /**
     * Desc: 未成的团id
     * @param $team_id
     * @return bool
     */
    public static function unFinishedTeam($team_id)
    {
        $founds = TeamFound::where(['status' => Team::STATUS_WAIT_SUCCESS, 'team_id' => $team_id])->column('id');
        if (!$founds){
            return false;
        }
        $key = array_rand($founds, 1);
        return $founds[$key];
    }
}