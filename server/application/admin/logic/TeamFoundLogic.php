<?php

namespace app\admin\logic;


use app\admin\model\User;
use app\common\logic\OrderRefundLogic;
use app\common\model\Goods as GoodsModel;
use app\common\model\Order;
use app\common\model\OrderLog;
use app\common\model\Pay;
use app\common\model\Team;
use app\common\model\TeamActivity as TeamActivityModel;
use app\common\model\TeamFollow as TeamFollowModel;
use app\common\model\TeamFound as TeamFoundModel;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;

class TeamFoundLogic
{
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
     * Notes: 拼团列表
     * @param $get
     * @author 张无忌(2021/1/15 18:24)
     * @return array
     */
    public static function lists($get)
    {
        // 查询条件
        $where = [];

        if (isset($get['goods_name']) and $get['goods_name'] !== '') {
            $goodsModel = new GoodsModel();
            $ids = $goodsModel->field('id,name')->where([
                ['name', 'like', '%' . $get['goods_name'] . '%']
            ])->column('id');

           $team_ids = TeamActivityModel::where('goods_id', 'in', $ids)->column('team_id');

            $where[] = ['f.team_id', 'in', $team_ids];
        }

        if (isset($get['status']) and is_numeric($get['status'])) {
            $where[] = ['f.status', '=', (int)$get['status']];
        }

        if (isset($get['found_time']) and $get['found_time'] !== '') {
            $where[] = ['found_time', '>=', strtotime($get['found_time'])];
        }

        if (isset($get['found_end_time']) and $get['found_end_time'] !== '') {
            $where[] = ['found_end_time', '<=', strtotime($get['found_end_time'])];
        }

        if (isset($get['type']) and $get['type'] !== '') {
            if (isset($get['keyword']) and $get['keyword'] !== '') {
                switch ($get['type']) {
                    case 'sn':
                        $uid = User::where('sn', '=', $get['keyword'])->column('id');
                        $where[] = ['user_id', 'in', $uid];
                        break;
                    case 'nickname':
                        $uid = User::where('nickname', 'like', '%' . $get['keyword'] . '%')->column('id');
                        $where[] = ['user_id', 'in', $uid];
                        break;
                    case 'mobile':
                        $uid = User::where('mobile', '=', $get['keyword'])->column('id');
                        $where[] = ['user_id', 'in', $uid];
                        break;
                }
            }
        }


        //执行查询
        $teamFollowModel = new TeamFoundModel();
        $count = $teamFollowModel->where($where)->alias('f')->count();
        $lists = $teamFollowModel->alias('f')
            ->field('f.*,g.name,g.image')
            ->where($where)
            ->with('user.level')
            ->order('id', 'desc')
            ->join('team_activity a', 'a.team_id = f.team_id')
            ->join('goods g', 'g.id = a.goods_id')
            ->append(['user.base_avatar'])
            ->page($get['page'], $get['limit'])
            ->select()
            ->toArray();

        foreach ($lists as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
            $item['found_time'] = date('Y-m-d H:i:s', $item['found_time']);
            $item['found_end_time'] = date('Y-m-d H:i:s', $item['found_end_time']);
            $item['status_text'] = Team::getStatusDesc($item['status']);
            $item['user_level'] = $item['user']['level']['name'] ?? '无等级';
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    /**
     * Notes: 拼团详细信息
     * @param $fount_id (团ID)
     * @author 张无忌(2021/1/18 15:09)
     * @return array
     */
    public static function getDetail($fount_id)
    {
        $teamFoundModel = new TeamFoundModel();
        $detail = $teamFoundModel->field(true)
            ->with('user.level')
            ->where(['id'=>(int)$fount_id])
            ->find()->toArray();

        $detail['found_time'] = date('Y-m-d H:i:s', $detail['found_time']);
        $detail['found_end_time'] = date('Y-m-d H:i:s', $detail['found_end_time']);
        $detail['status'] = Team::getStatusDesc($detail['status']);
        $detail['user_level'] = $detail['user']['level']['name'] ?? '无等级';

        return $detail;
    }

    /**
     * Notes: 根据团ID, 获取团下面的订单
     * @param $get
     * @author 张无忌(2021/1/18 15:10)
     * @return array
     */
    public static function teamOrderListById($get)
    {
        $where = [
            ['found_id', '=', (int)$get['found_id']]
        ];

        $teamFollowModel = new TeamFollowModel();
        $count = $teamFollowModel->where($where)->count();
        $lists = $teamFollowModel->alias('f')
            ->field('f.*,o.order_sn,o.order_status,o.create_time,o.total_amount,t.goods_id,g.name,g.image')
            ->where($where)
            ->with('user.level')
            ->join('order o', 'o.id = f.order_id')
            ->join('team_activity t', 't.team_id = f.team_id')
            ->join('goods g', 't.goods_id = g.id')
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
            $item['relation'] = $item['type'] ? '团长' : '团员';
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $item['order_status'] = Order::getOrderStatus($item['order_status']);
            $item['user_level'] = $item['user']['level']['name'] ?? '无等级';
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    /**
     * Notes: 获取团退款详细信息
     * @author 张无忌(2021/1/18 18:43)
     * @param $get
     * @return array
     */
    public static function getRefundDetail($get)
    {
        $where = [
            ['found_id', '=', (int)$get['found_id']]
        ];

        $teamFollowModel = new TeamFollowModel();
        $count = $teamFollowModel->where($where)->count();
        $lists = $teamFollowModel->field(true)
            ->with('user.level')
            ->withAttr('order', function ($value, $data) {
                $orderModel = new Order();
                return $orderModel->field('id,order_sn,order_source,order_status,
                    pay_status,pay_way,order_amount')
                    ->where('user_id', $data['follow_user_id'])
                    ->where('id', $data['order_id'])
                    ->where('team_found_id',  (int)$data['found_id'])
                    ->append(['pay_way_text', 'pay_status_text', 'order_status_text', 'order_source_text'])
                    ->find();
            })
            ->where('found_id', '=', $get['found_id'])
            ->page($get['page'], $get['limit'])
            ->append(['order'])
            ->select()->toArray();

        foreach ($lists as &$item){
            $item['user_level'] = $item['user']['level']['name'] ?? '无等级';
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    
    /**
     * Notes: 取消订单并退款
     * @param $post
     * @param $admin_id
     * @author 段誉(2021/1/29 18:28)
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function handleRefund($post, $admin_id)
    {
        Db::startTrans();
        try{
            $orderModel = new Order();
            $order = $orderModel->field(true)
                ->where('id', '=', (int)$post['order_id'])
                ->where(['order_status' => 1, 'pay_status' => 1])
                ->find();

            if (!$order){
                throw new Exception('订单信息错误');
            }

            //取消订单
            OrderRefundLogic::cancelOrder($order['id'], OrderLog::TYPE_SHOP, $admin_id);
            //退款
            if ($order['pay_status'] == Pay::ISPAID){
                //更新订单状态
                OrderRefundLogic::cancelOrderRefundUpdate($order);
                //订单退款
                OrderRefundLogic::refund($order, $order['order_amount'], $order['order_amount']);
            }

            Db::commit();
            return true;
        } catch (Exception $e) {

            Db::rollback();
            static::$error = $e->getMessage();
            OrderRefundLogic::addErrorRefund($order, $e->getMessage());
            return false;
        }
    }

}