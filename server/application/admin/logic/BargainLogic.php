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


use app\common\model\Bargain;
use app\common\model\BargainItem;
use app\common\model\BargainKnife;
use app\common\model\BargainLaunch;
use app\common\model\Goods as GoodsModel;
use app\common\model\Order;
use app\common\model\TeamActivity as TeamActivityModel;
use app\common\model\User;
use app\common\server\UrlServer;
use think\Db;

class BargainLogic
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
     * Notes: 砍价活动列表
     * @param $get
     * @author 张无忌(2021/2/24 11:11)
     * @return array
     */
    public static function activity($get) {

        $where = [
            ['del', '=', 0]
        ];

        // 查询条件
        if ( !empty($get['goods_name']) and $get['goods_name'] !== '') {
            $goodsModel = new GoodsModel();
            $ids = $goodsModel->field('id,name')->where([
                ['name', 'like', '%' . $get['goods_name'] . '%']
            ])->column('id');

            $where[] = ['goods_id', 'in', $ids];
        }

        if (isset($get['status']) and is_numeric($get['status'])) {
            $where[] = ['status', '=', (int)$get['status']];
        }

        $bargainModel = new Bargain();
        $count = $bargainModel->where($where)->count('id');
        $lists = $bargainModel->field(true)
            ->where($where)
            ->with(['goods'])
            ->withCount(['launchPeopleNumber', 'successKnifePeopleNumber'])
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['goods']['image'] = UrlServer::getFileUrl($item['goods']['image']);
            $item['activity_start_time'] = date('Y-m-d H:i:s', $item['activity_start_time']);
            $item['activity_end_time'] = date('Y-m-d H:i:s', $item['activity_end_time']);
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    /**
     * Notes: 获取砍价活动详细
     * @param $id
     * @author 张无忌(2021/2/24 11:11)
     * @return Bargain
     */
    public static function getDetail($id)
    {
        $bargainModel = new Bargain();
        $bargainItemModel = new BargainItem();

        $detail = $bargainModel->field(true)
            ->where(['id'=>(int)$id])
            ->with(['goods'])
            ->find();

        $goodItem = $bargainItemModel->field('t.*,gi.id as spec_item_id,
            gi.spec_value_str, gi.price as spec_item_price, gi.stock')
            ->where(['bargain_id'=>(int)$id])
            ->alias('t')
            ->rightJoin('goods_item gi', 'gi.id = t.item_id')
            ->select();

        $detail['min_knife_price'] = 0;
        $detail['max_knife_price'] = 0;
        $detail['fixed_knife_price'] = 0;
        if ($detail['knife_type'] == 1) {
            $knife_price_arr = explode(',', $detail['knife_price']);
            $detail['min_knife_price']  = empty($knife_price_arr[0]) ? 0 : $knife_price_arr[0];
            $detail['max_knife_price'] = empty($knife_price_arr[1]) ? 0 : $knife_price_arr[1];
        } else {
            $detail['fixed_knife_price'] = $detail['knife_price'];
        }

        // 处理判断商品规格是否已发生变化, 没变化是true, 否则false
        $detail['is_goods_item'] = true;
        foreach ($goodItem as $item) {
            if (!$item['spec_value_str'] || $item['spec_value_str'] == ''
                || $item['spec_item_price'] == '') {
                $detail['is_goods_item'] = false;
                break;
            }
        }

        $detail['item'] = $goodItem;
        $detail['goods']['image'] = UrlServer::getFileUrl($detail['goods']['image']);
        $detail['activity_start_time'] = date('Y-m-d H:i:s', $detail['activity_start_time']);
        $detail['activity_end_time'] = date('Y-m-d H:i:s', $detail['activity_end_time']);

        return $detail;
    }

    /**
     * Notes: 新增砍价活动
     * @param $post
     * @author 张无忌(2021/2/23 15:46)
     * @return bool
     */
    public static function add($post)
    {
        Db::startTrans();
        try {
            // 校验拼团活动是否存在
            $teamActivityModel = new TeamActivityModel();
            $team = $teamActivityModel->where([
                'goods_id' => intval($post['goods_id']),
                'del' => 0
            ])->find();

            if ($team) {
                static::$error = '商品正在参与拼团活动, 请先移除活动再添加';
                return false;
            }

            //秒杀验证
            $seckill_goods = Db::name('seckill_goods')
                ->where(['goods_id'=>intval($post['goods_id']),'del'=>0])
                ->find();
            if($seckill_goods){
                static::$error = '商品正在参与秒杀活动，无法修改';
                return false;
            }

            // 每刀金额(随机 / 固定)
            $knife_price = 0;
            if ($post['knife_type'] == 1) {
                $knife_price = [$post['min_knife_price'], $post['max_knife_price']];
                $knife_price = implode(',', $knife_price);
            } else {
                $knife_price = $post['fixed_knife_price'];
            }

            // 查出最大低价和最少价格
            $bargain_price = [];
            foreach ($post['floor_price'] as $key => $value) {
                foreach ($value as $K => $item) {
                    array_push($bargain_price, $item);
                }
            }
            $bargain_max_price = !empty($bargain_price) ? max($bargain_price) : 0;
            $bargain_min_price = !empty($bargain_price) ? min($bargain_price) : 0;

            // 新增砍价活动
            $bargainModel = new Bargain();
            $bargain_id = $bargainModel->insertGetId([
                'goods_id'            => $post['goods_id'],
                'time_limit'          => $post['time_limit'],
                'activity_start_time' => strtotime($post['activity_start_time']),
                'activity_end_time'   => strtotime($post['activity_end_time']),
                'bargain_min_price'   => $bargain_min_price,
                'bargain_max_price'   => $bargain_max_price,
                'share_title'         => empty($post['share_title']) ? '' : $post['share_title'],
                'share_intro'         => empty($post['share_intro']) ? '' : $post['share_intro'],
                'payment_where'       => $post['payment_where'],
                'knife_type'          => $post['knife_type'],
                'knife_price'         => $knife_price,
                'status'              => $post['status'],
                'del'                 => 0,
            ]);

            // 新增砍价商品SKU
            $lists = [];
            foreach ($post['floor_price'] as $key => $value) {
                foreach ($value as $K => $item) {
                    $lists[] = [
                        'bargain_id'        => $bargain_id,
                        'goods_id'          => $key,
                        'item_id'           => $K,
                        'floor_price'       => $item,
                        'first_knife_price' => $post['first_knife_price'][$key][$K]
                    ];
                }
            }
            if ( !empty($lists)) {
                $bargainItemModel = new BargainItem();
                $bargainItemModel->saveAll($lists);
            }

            Db::commit();
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            Db::rollback();
            return false;
        }
    }

    /**
     * Notes: 编辑砍价活动
     * @param $post
     * @author 张无忌(2021/2/24 11:10)
     * @return bool
     */
    public static function edit($post)
    {
        Db::startTrans();
        try {
            // 查询商品信息
            $goodsModel = new GoodsModel();
            $goods = $goodsModel->field('id,name,image')
                ->where(['id' => (int)$post['goods_id']])->find();

            if (!$goods) {
                static::$error = '选择的商品已不存在,可能已被删除';
                return false;
            }

            // 每刀金额(随机 / 固定)
            $knife_price = 0;
            if ($post['knife_type'] == 1) {
                $knife_price = [$post['min_knife_price'], $post['max_knife_price']];
                $knife_price = implode(',', $knife_price);
            } else {
                $knife_price = $post['fixed_knife_price'];
            }

            // 查出最大低价和最少价格
            $bargain_price = [];
            foreach ($post['floor_price'] as $key => $value) {
                foreach ($value as $K => $item) {
                    array_push($bargain_price, $item);
                }
            }
            $bargain_max_price = !empty($bargain_price) ? max($bargain_price) : 0;
            $bargain_min_price = !empty($bargain_price) ? min($bargain_price) : 0;

            // 新增砍价活动
            $bargainModel = new Bargain();
            $bargainModel->where(['id' => (int)$post['id']])->update([
                'goods_id'            => $post['goods_id'],
                'time_limit'          => $post['time_limit'],
                'activity_start_time' => strtotime($post['activity_start_time']),
                'activity_end_time'   => strtotime($post['activity_end_time']),
                'bargain_min_price'   => $bargain_min_price,
                'bargain_max_price'   => $bargain_max_price,
                'share_title'         => empty($post['share_title']) ? '' : $post['share_title'],
                'share_intro'         => empty($post['share_intro']) ? '' : $post['share_intro'],
                'payment_where'       => $post['payment_where'],
                'knife_type'          => $post['knife_type'],
                'knife_price'         => $knife_price,
                'status'              => $post['status']
            ]);

            // 删除旧的SKU
            $bargainItemModel = new BargainItem();
            $bargainItemModel->where(['bargain_id' => (int)$post['id']])->delete();

            // 新增砍价商品SKU
            $lists = [];
            foreach ($post['floor_price'] as $key => $value) {
                foreach ($value as $K => $item) {
                    $lists[] = [
                        'bargain_id'        => $post['id'],
                        'goods_id'          => $key,
                        'item_id'           => $K,
                        'floor_price'       => $item,
                        'first_knife_price' => $post['first_knife_price'][$key][$K]
                    ];
                }
            }
            if (!empty($lists)) {
                $bargainItemModel->saveAll($lists);
            }

            Db::commit();
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            Db::rollback();
            return false;
        }
    }

    /**
     * Notes: 软删除
     * @param int $id
     * @author 张无忌(2021/1/13 18:02)
     * @return bool
     */
    public static function softDelete(int $id)
    {
        Db::startTrans();
        try {
            $bargainModel = new Bargain();
            $bargainModel->where(['id'=>(int)$id])->update(['del'=>1]);

            // 关闭活动未完成的
            $bargainLaunchModel = new BargainLaunch();
            $bargainLaunchModel->where(['bargain_id'=>$id, 'status'=>0])
                ->update(['status'=>2]);

            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
            static::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 切换状态
     * @param $post
     * @author 张无忌(2021/1/13 17:53)
     * @return bool
     */
    public static function switchStatus($post)
    {
        Db::startTrans();
        try {
            $bargainModel = new Bargain();
            // 切换状态
            $bargainModel->where(['id' => (int)$post['id']])
                ->update([ $post['field'] => $post['status'] ]);
            // 关闭活动未完成的
//            if ($post['status']) {
                $bargainLaunchModel = new BargainLaunch();
//                $bargainLaunchModel->where(['bargain_id'=>$post['id'], 'status'=>0])
//                    ->update(['status'=>2]);
//            }

            Db::commit();
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            Db::rollback();
            return false;
        }
    }

    /**
     * Notes: 砍价列表
     * @param $get
     * @author 张无忌(2021/2/24 17:43)
     * @return array
     */
    public static function getLaunch($get)
    {
        // 查询条件
        $where = [];

        if (isset($get['bargain_id']) and $get['bargain_id']) {
            $where[] = ['bargain_id', '=', (int)$get['bargain_id']];
        }

        if (isset($get['goods_name']) and $get['goods_name'] !== '') {
            $goodsModel = new GoodsModel();
            $ids = $goodsModel->field('id,name')->where([
                ['name', 'like', '%' . $get['goods_name'] . '%']
            ])->column('id');

            $where[] = ['goods_id', 'in', $ids];
        }

        if (isset($get['status']) and is_numeric($get['status'])) {
            $where[] = ['status', '=', (int)$get['status']];
        }

        if (isset($get['launch_start_time']) and $get['launch_start_time'] !== '') {
            $where[] = ['launch_start_time', '>=', strtotime($get['launch_start_time'])];
        }

        if (isset($get['launch_end_time']) and $get['launch_end_time'] !== '') {
            $where[] = ['launch_end_time', '<=', strtotime($get['launch_end_time'])];
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

        $model = new BargainLaunch();
        $count = $model->where($where)->count('id');
        $lists = $model->field(true)
            ->where($where)
            ->with(['user.level'])
            ->order('id', 'desc')
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['launch_start_time'] = date('Y-m-d H:i:s', $item['launch_start_time']);
            $item['launch_end_time'] = date('Y-m-d H:i:s', $item['launch_end_time']);
            $item['domain'] = UrlServer::getFileUrl('/');
            $item['status'] = BargainLaunch::getStatusDesc($item['status']);
            $item['goods_image'] = $item['goods_snap']['image'] == "" ? $item['goods_snap']['goods_iamge'] : $item['goods_snap']['image'] ;
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    /**
     * Notes: 砍价详细
     * @param $id
     * @author 张无忌(2021/2/24 17:43)
     * @return array
     */
    public static function getLaunchDetail($id)
    {
        $model = new BargainLaunch();
        $detail = $model->field(true)
            ->where(['id'=>(int)$id])
            ->with(['user.level'])
            ->find()->toArray();

        $detail['domain'] = UrlServer::getFileUrl();
        $detail['goods_snap']['goods_iamge'] = UrlServer::getFileUrl($detail['goods_snap']['goods_iamge']);
        $detail['launch_start_time'] = date('Y-m-d H:i:s',  $detail['launch_start_time']);
        $detail['launch_end_time'] = date('Y-m-d H:i:s',  $detail['launch_end_time']);
        $detail['payment_where'] = $detail['bargain_snap']['payment_where'] == 1 ? '任意金额购买' : '固定金额购买';
        $detail['status'] = BargainLaunch::getStatusDesc($detail['status']);
        return $detail;
    }

    /**
     * Notes: 砍价订单
     * @param $launch_id
     * @param $get
     * @author 张无忌(2021/2/24 17:43)
     * @return array
     */
    public static function getKnifeOrderRecord($launch_id, $get)
    {
        $model = new BargainLaunch();
        $count = $model->where(['id'=>(int)$launch_id])
            ->where('order_id', '>', 0)->count('id');
        $lists = $model->field(true)
            ->where(['id'=>(int)$launch_id])
            ->where('order_id', '>', 0)
            ->with(['user.level', 'order'])
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['order_status'] = Order::getOrderStatus($item['order']['order_status']);
        }

        return ['count'=>$count, 'lists'=>$lists];
    }

    /**
     * Notes: 砍价记录
     * @param $launch_id
     * @param $get
     * @author 张无忌(2021/2/24 15:48)
     * @return array
     */
    public static function getKnifeRecord($launch_id, $get)
    {
        $model = new BargainKnife();

        $count = $model->where(['launch_id'=>(int)$launch_id])->count();
        $lists = $model->field(true)
            ->where(['launch_id'=>(int)$launch_id])
            ->with(['user.level'])
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['help_time'] = date('Y-m-d H:i:s', $item['help_time']);
            $item['help_price'] = '￥'.$item['help_price'];
            $item['surplus_price'] = '￥'.$item['surplus_price'];
        }

        return ['count'=>$count, 'lists'=>$lists];
    }
}