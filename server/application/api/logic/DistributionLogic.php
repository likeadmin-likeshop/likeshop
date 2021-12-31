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

use app\common\logic\AccountLogLogic;
use app\common\model\{AccountLog, AfterSale, DistributionOrder, NoticeSetting, Order, User};
use app\common\server\{AreaServer, ConfigServer, UrlServer};
use think\Db;
use think\Exception;
use think\facade\Hook;

class DistributionLogic
{
    /**
     * 填写邀请码
     * @param $code
     * @param $my_id
     * @return bool|string
     */
    public static function code($code, $my_id)
    {
        try {
            Db::startTrans();

            $my_leader = Db::name('user')
                ->field(['id', 'first_leader', 'second_leader', 'third_leader', 'ancestor_relation'])
                ->where(['distribution_code' => $code])
                ->find();

            //更新我的第一上级、第二上级、第三上级、关系链
            $my_leader_id = $my_leader['id'];
            $my_first_leader = $my_leader['first_leader'];
            $my_third_leader = $my_leader['second_leader'];
            $my_ancestor_relation = trim("{$my_leader_id},{$my_leader['ancestor_relation']}", ',');
            $data = [
                'first_leader' => $my_leader_id,
                'second_leader' => $my_first_leader,
                'third_leader' => $my_third_leader,
                'ancestor_relation' => $my_ancestor_relation,
            ];
            Db::name('user')
                ->where(['id' => $my_id])
                ->update($data);

            //更新我向下一级的第二上级、第三上级
            $data = [
                'second_leader' => $my_leader_id,
                'third_leader' => $my_first_leader,
            ];
            Db::name('user')
                ->where(['first_leader' => $my_id])
                ->update($data);

            //更新我向下二级的第三级
            $data = [
                'third_leader' => $my_leader_id,
            ];
            Db::name('user')
                ->where(['second_leader' => $my_id])
                ->update($data);


            //更新与我相关的所有关系链
            Db::name('user')
                ->where("find_in_set({$my_id},ancestor_relation)")
                ->exp('ancestor_relation', "replace(ancestor_relation,'{$my_id}','" . trim("{$my_id},{$my_ancestor_relation}", ',') . "')")
                ->update();

            //邀请会员赠送积分
            $invited_award_integral = ConfigServer::get('marketing','invited_award_integral',0);
            if($invited_award_integral > 0){
                Db::name('user')->where(['id'=>$my_leader['id']])->setInc('user_integral',$invited_award_integral);
                AccountLogLogic::AccountRecord($my_leader['id'],$invited_award_integral,1, AccountLog::invite_add_integral);
            }

            //消息通知
            Hook::listen('notice', [
                'user_id' => $my_leader_id,
                'lower_id' => $my_id,
                'scene' => NoticeSetting::INVITE_SUCCESS_NOTICE,
            ]);

            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }

    }


    /**
     * 填写申请记录
     * @param $post
     * @param $user_id
     * @return bool|string
     */
    public static function apple($post, $user_id)
    {
        try {
            $time = time();
            $data = [
                'user_id' => $user_id,
                'real_name' => $post['real_name'],
                'province' => $post['province'],
                'city' => $post['city'],
                'district' => $post['district'],
                'reason' => $post['reason'],
                'create_time' => $time,
                'update_time' => $time,
            ];
            Db::name('distribution_member_apply')
                ->insert($data);
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * 获取最新申请详情
     * @param $user_id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function appleDetail($user_id)
    {
        $result = Db::name('distribution_member_apply')
            ->field(['real_name', 'province', 'city', 'district', 'reason', 'status'])
            ->where('user_id', $user_id)
            ->order('id', 'desc')
            ->find();

        if (empty($result)) {
            return [];
        }

        $result['province'] = AreaServer::getAddress($result['province']);
        $result['city'] = AreaServer::getAddress($result['city']);
        $result['district'] = AreaServer::getAddress($result['district']);
        switch ($result['status']) {
            case 0:
                $result['status_str'] = '已提交，等待客服审核...';
                break;
            case 1:
                $result['status_str'] = '';
                break;
            case 2:
                $result['status_str'] = '审核失败，请重新提交审核';
                break;
        }
        return $result;
    }

    /**
     * 上级邀请人信息
     * @param $user_id
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function myLeader($user_id)
    {

        $field = 'nickname,avatar,is_distribution,mobile,first_leader,distribution_code,earnings';

        $user = Db::name('user')
            ->field($field)
            ->where(['id' => $user_id])
            ->find();

        $first_leader = Db::name('user')
            ->field('nickname,mobile')
            ->where(['id' => $user['first_leader']])
            ->findOrEmpty();

        $user['avatar'] = UrlServer::getFileUrl($user['avatar'], 'local');
        return [
            'user' => $user,
            'leader' => $first_leader,
        ];
    }

    /**
     * 分销推广主页信息
     * @param $user_id
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function index($user_id)
    {
        $user_info = self::myLeader($user_id);//用户信息
        $fans = Db::name('user')
            ->where('first_leader|second_leader', '=', $user_id)
            ->count();

        //今天的预估收益
        $today_earnings = Db::name('distribution_order_goods')
            ->whereTime('create_time', 'today')
            ->where(['status' => 1, 'user_id' => $user_id])
            ->sum('money');

        //本月预估收益
        $month_earnings = Db::name('distribution_order_goods')
            ->whereTime('create_time', 'month')
            ->where(['status' => 1, 'user_id' => $user_id])
            ->sum('money');

        //累计收益
        $history_earnings = Db::name('distribution_order_goods')
            ->where(['status' => 2, 'user_id' => $user_id])
            ->sum('money');

        $data = [
            'user' => $user_info['user'],
            'leader' => $user_info['leader'],
            'fans' => $fans,//粉丝数量
            'able_withdrawal' => $user_info['user']['earnings'],//可提现佣金
            'today_earnings' => round($today_earnings, 2),//今天预估收益
            'month_earnings' => round($month_earnings, 2),//本月预估收益
            'history_earnings' => round($history_earnings, 2),//累计收益
        ];
        return $data;
    }


    //可提现佣金
    public static function getAbleWithdrawal($user_id)
    {
        $after_sale_time = ConfigServer::get('after_sale', 'refund_days');
        $time = time() - ($after_sale_time * 24 * 60 * 60);

        //可提现佣金
        $orders = Db::name('order o')
            ->field('o.id, d.money')
            ->join('order_goods g', 'o.id = g.order_id')
            ->join('distribution_order_goods d', 'd.order_goods_id = g.id')
            ->where('o.create_time', '<', $time)
            ->where('o.order_status', Order::STATUS_FINISH)
            ->where('d.user_id', $user_id)
            ->where('d.status', DistributionOrder::STATUS_WAIT_HANDLE)
            ->select();

        $able_withdrawal = 0;
        if (!$orders) {
            return $able_withdrawal;
        }

        foreach ($orders as $order) {
            $check = Db::name('after_sale')
                ->where(['order_id' => $order['id']])
                ->where('status', 'in', [AfterSale::STATUS_WAIT_REFUND, AfterSale::STATUS_SUCCESS_REFUND])
                ->find();

            if ($check) {
                continue;
            }
            $able_withdrawal += $order['money'];
        }
        return $able_withdrawal;
    }


    /**
     * 分销订单列表(待返佣,已结算,已失效)
     * @param $user_id
     * @param $get
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function order($user_id, $get, $page, $size)
    {
        $where = [];
        $where[] = ['d.user_id', '=', $user_id];

        $status = $get['status'] ?? 0;
        if ($status != 0) {
            $where[] = ['d.status', '=', $status];
        }

        $field = 'o.order_sn, og.total_pay_price as pay_price, d.create_time, d.money, og.item_id, og.goods_num, d.status';

        $count = Db::name('distribution_order_goods d')
            ->field($field)
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->join('order o', 'o.id = og.order_id')
            ->where($where)
            ->count();

        $lists = Db::name('distribution_order_goods d')
            ->field($field)
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->join('order o', 'o.id = og.order_id')
            ->where($where)
            ->order('o.id desc')
            ->page($page, $size)
            ->select();

        $item_ids = array_column($lists, 'item_id');
        $goods = Db::name('goods_item i')
            ->join('goods g', 'i.goods_id = g.id')
            ->where('i.id', 'in', $item_ids)
            ->column('g.name, g.image, i.image as spec_image, i.spec_value_str', 'i.id');

        foreach ($lists as &$item) {
            $item_id = $item['item_id'];
            if (!isset($goods[$item_id])) {
                continue;
            }
            $info = $goods[$item_id];
            $item['goods_name'] = $info['name'];
            $item['spec_name'] = $info['spec_value_str'];
            $item['image'] = UrlServer::getFileUrl(empty($info['spec_image']) ? $info['image'] : $info['spec_image']);
            $item['status'] = DistributionOrder::getOrderStatus($item['status']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
        }

        $data = [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
        return $data;
    }


    /**
     * 月度账单
     * @param $user_id
     * @param $get
     * @param $page
     * @param $size
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getMonthBill($user_id, $page, $size)
    {
        $field = [
            "FROM_UNIXTIME(d.create_time,'%Y年%m月') as date",
            "FROM_UNIXTIME(d.create_time,'%Y') as year",
            "FROM_UNIXTIME(d.create_time,'%m') as month",
            'sum(d.money) as total_money',
            'count(o.id) as order_num'
        ];
        $count = Db::name('distribution_order_goods d')
            ->field($field)
            ->join('order_goods g', 'g.id = d.order_goods_id')
            ->join('order o', 'o.id = g.order_id')
            ->where(['d.user_id' => $user_id])
            ->where('d.status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
            ->group('date')
            ->count();

        $lists = Db::name('distribution_order_goods d')
            ->field($field)
            ->join('order_goods g', 'g.id = d.order_goods_id')
            ->join('order o', 'o.id = g.order_id')
            ->where(['d.user_id' => $user_id])
            ->where('d.status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
            ->page($page, $size)
            ->group('date')
            ->select();

        $data = [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
        return $data;
    }

    public static function getMonth($get, $user_id, $page, $size)
    {
        $year = $get['year'] ?? date('Y');
        $month = $get['month'] ?? date('m');
        //指定月份
        list($y, $m, $t) = explode('-', date("$year-$month-t"));
        $time_range = [
            mktime(0, 0, 0, $m, 1, $y),
            mktime(23, 59, 59, $m, $t, $y)
        ];

        $field = 'o.order_sn, o.id as order_id, g.total_pay_price as pay_price, d.create_time, d.money, g.item_id, g.goods_num, d.status';


        $count = Db::name('distribution_order_goods')->alias('d')
            ->field($field)
            ->join('order_goods g', 'g.id = d.order_goods_id')
            ->join('order o', 'o.id = g.order_id')
            ->where(['d.user_id' => $user_id])
            ->where('d.status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
            ->where('d.create_time', 'between time', $time_range)
            ->count();

        $lists = Db::name('distribution_order_goods')->alias('d')
            ->field($field)
            ->join('order_goods g', 'g.id = d.order_goods_id')
            ->join('order o', 'o.id = g.order_id')
            ->where(['d.user_id' => $user_id])
            ->where('d.status', 'in', [DistributionOrder::STATUS_WAIT_HANDLE, DistributionOrder::STATUS_SUCCESS])
            ->where('d.create_time', 'between time', $time_range)
            ->page($page, $size)
            ->select();


        $item_ids = array_column($lists, 'item_id');
        $goods = Db::name('goods_item i')
            ->join('goods g', 'i.goods_id = g.id')
            ->where('i.id', 'in', $item_ids)
            ->column('g.name, g.image, i.image as spec_image, i.spec_value_str', 'i.id');

        $total_money = 0;
        $order_ids = [];
        foreach ($lists as &$item) {
            $item_id = $item['item_id'];
            if (!isset($goods[$item_id])) {
                continue;
            }
            $info = $goods[$item_id];
            $item['goods_name'] = $info['name'];
            $item['spec_name'] = $info['spec_value_str'];
            $item['image'] = UrlServer::getFileUrl(empty($info['spec_image']) ? $info['image'] : $info['spec_image']);
            $item['status'] = DistributionOrder::getOrderStatus($item['status']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $total_money += $item['money'];
            if (!in_array($item['order_id'], $order_ids)) {
                array_push($order_ids, $item['order_id']);
            }
        }

        $data = [
            'year' => $year,
            'month' => $month,
            'total_money' => $total_money,
            'total_order' => count($order_ids),
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
        return $data;

    }

    /**
     * Desc: 生成用户扩展表
     * @param $user_id
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function createUserDistribution($user_id)
    {
        $user_distribution = Db::name('user_distribution')
            ->where(['user_id' => $user_id])
            ->find();

        if ($user_distribution) {
            return true;
        }

        $data = [
            'user_id' => $user_id,
            'distribution_order_num' => 0,
            'distribution_money' => 0,
            'fans' => 0,
            'create_time' => time(),
        ];
        Db::name('user_distribution')->insert($data);
        return true;
    }


    /**
     * Desc: 取消订单后更新分销订单为已失效
     * @param $order_id
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function setDistributionOrderFail($order_id)
    {
        //订单取消后更新分销订单为已失效状态
        return Db::name('distribution_order_goods d')
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->join('order o', 'o.id = og.order_id')
            ->where('o.id', $order_id)
            ->update([
                'd.status' => DistributionOrder::STATUS_ERROR,
                'd.update_time' => time(),
            ]);
    }


    /**
     * Notes: 发生售后后,更新分销订单为已失效
     * @param $order_goods_id
     * @author 段誉(2021/5/13 17:38)
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function setFailByAfterSale($order_goods_id)
    {
        return Db::name('distribution_order_goods')
            ->where('order_goods_id', $order_goods_id)
            ->update([
                'status' => DistributionOrder::STATUS_ERROR,
                'update_time' => time(),
            ]);
    }


    /**
     * Notes: 根据后台设置返回当前生成用户的分销会员状态(设置了全员分销,新生成的用户即为分销会员)
     * @author 段誉(2021/4/7 14:48)
     * @return int
     */
    public static function isDistributionMember()
    {
        $is_distribution = 0;
        //分销会员申请--1,申请分销; 2-全员分销;
        $distribution = ConfigServer::get('distribution', 'member_apply', 1);
        if ($distribution == 2) {
            $is_distribution = 1;
        }
        return $is_distribution;
    }


}