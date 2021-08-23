<?php

namespace app\admin\logic;


use app\common\model\Goods as GoodsModel;
use app\common\model\Team;
use app\common\model\TeamActivity as TeamActivityModel;
use app\common\model\TeamFollow as TeamFollowModel;
use app\common\model\TeamFound as TeamFoundModel;
use app\common\model\TeamGoodsItem as TeamGoodsItemModel;
use app\common\server\UrlServer;
use think\Db;

/**
 * 拼团商品逻辑层
 * Class TeamActivityLogic
 * @package app\admin\logic
 */
class TeamActivityLogic
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
     * Notes: 列表数据
     * @author 张无忌(2021/1/13 15:03)
     * @param array $get
     * @return array
     */
    public static function lists(array $get)
    {
        $teamActivityModel = new TeamActivityModel();

        // 查询条件
        $where = [];
        if ( !empty($get['goods_name']) and $get['goods_name'] !== '') {
            $goodsModel = new GoodsModel();
            $ids = $goodsModel->field('id,name')->where([
                ['name', 'like', '%' . $get['goods_name'] . '%']
            ])->column('id');

            $where[] = ['goods_id', 'in', $ids];
        }

        if (isset($get['status']) and is_numeric($get['status'])) {
            $where[] = ['t.status', '=', (int)$get['status']];
        }

        if ( !empty($get['start_time']) and $get['start_time'] !== '') {
            $where[] = ['start_time', '>=', strtotime($get['start_time'])];
        }

        if ( !empty($get['end_time']) and $get['end_time'] !== '') {
            $where[] = ['end_time', '<=', strtotime($get['end_time'])];
        }

        $count = $teamActivityModel->alias('t')->where(['del' => 0])->where($where)->count();
        $lists = $teamActivityModel->alias('t')
            ->where(['t.del' => 0])
            ->where($where)->field('t.*,g.name,g.image,g.max_price,g.min_price')
            ->withAttr('team_count', function ($value, $data) {
                return TeamFoundModel::where(['team_id'=>$data['team_id']])->count();
            })
            ->withAttr('follow_count', function ($value, $data) {
                return TeamFollowModel::where(['team_id'=>$data['team_id']])->count();
            })
            ->join('Goods g', 't.goods_id=g.id')
            ->order('team_id', 'desc')
            ->page($get['page'], $get['limit'])
            ->select()->append(['team_count', 'follow_count']);

        foreach ($lists as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
            $item['status'] = $item['end_time'] <= time() ? 0 : $item['status'];
            $item['start_time'] = date('Y-m-d H:i:s', $item['start_time']);
            $item['end_time'] = date('Y-m-d H:i:s', $item['end_time']);
        }

        return ['count' => $count, 'lists' => $lists];
    }

    public static function getDetail(int $id)
    {
        $teamActivityModel = new TeamActivityModel();
        $teamGoodsItemModel = new TeamGoodsItemModel();

        $detail = $teamActivityModel->field('t.*,g.name,g.image')
            ->alias('t')
            ->join('Goods g', 't.goods_id=g.id')
            ->where(['team_id' => $id])->find();

        $goods_item = $teamGoodsItemModel->field('t.*,gi.id as spec_item_id, gi.spec_value_str, gi.price as spec_item_price')
            ->alias('t')->where(['team_id' => $id])
            ->rightJoin('goods_item gi', 'gi.id = t.item_id')
            ->select();

        $detail['item'] = $goods_item;
        $detail['image'] = UrlServer::getFileUrl($detail['image']);
        $detail['start_time'] = date('Y-m-d H:i:s', $detail['start_time']);
        $detail['end_time'] = date('Y-m-d H:i:s', $detail['end_time']);
        return $detail;
    }

    /**
     * Notes: 新增拼团商品
     * @author 张无忌(2021/1/13 11:46)
     * @param array $post
     * @return bool
     */
    public static function add(array $post)
    {
        Db::startTrans();
        try {
            $goodsModel = new GoodsModel();
            $teamActivityModel = new TeamActivityModel();

            // 查询商品信息
            $goods = $goodsModel->field('id,name,image')
                ->where(['id' => (int)$post['goods_id']])->find();

            if (!$goods) {
                static::$error = '选择的商品不存在';
                return false;
            }

            // 拼团商品已存在
            $teamGoods = $teamActivityModel->field('goods_id')
                ->where(['goods_id'=>(int)$goods['id'], 'del'=>0])->find();

            if ($teamGoods) {
                static::$error = '该商品已是拼团商品,无需重复添加';
                return false;
            }

            // 查询该商品是否开启了秒杀活动
            $seckillGoods = Db::name('seckill_goods')->field(true)
                ->where(['goods_id'=>(int)$goods['id'], 'del'=>0])->find();

            if ($seckillGoods) {
                static::$error = '该商品开启了秒杀活动,请先移除';
                return false;
            }

            // 查出最大和最少价格
            $team_price = [];
            foreach ($post['item'] as $key => $value) {
                foreach ($value as $K => $item) {
                    array_push($team_price, $item);
                }
            }
            $team_max_price = !empty($team_price) ? max($team_price) : 0;
            $team_min_price = !empty($team_price) ? min($team_price) : 0;

            // 新增拼团商品信息
            $activity = $teamActivityModel->insertGetId([
                'goods_id'       => $post['goods_id'],
                'sales_sum'      => 0,
                'people_num'     => $post['people_num'],
                'time_limit'     => $post['time_limit'],
                'start_time'     => strtotime($post['start_time']),
                'end_time'       => strtotime($post['end_time']),
                'share_title'    => empty($post['share_title']) ? '' : $post['share_title'],
                'share_intro'    => empty($post['share_intro']) ? '' : $post['share_intro'],
                'team_max_price' => $team_max_price,
                'team_min_price' => $team_min_price,
                'status'         => $post['status'],
                'create_time'    => time()
            ]);

            // 新增拼团商品规格
            $lists = [];
            foreach ($post['item'] as $key => $value) {
                foreach ($value as $K => $item) {
                    $lists[] = [
                        'team_id'    => $activity,
                        'goods_id'   => $key,
                        'item_id'    => $K,
                        'team_price' => $item
                    ];
                }
            }
            if ( !empty($lists)) {
                $teamGoodsItemModel = new TeamGoodsItemModel();
                $teamGoodsItemModel->saveAll($lists);
            }

            // 回调更新商品表拼团字段
            if ($post['status'] == 1) {
                $goodsModel->where(['id' => (int)$post['goods_id']])->update([
                    'is_team'     => 1,
                    'update_time' => time()
                ]);
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
     * Notes: 编辑
     * @param $post
     * @author 张无忌(2021/1/13 17:41)
     * @return bool
     */
    public static function edit($post)
    {
        Db::startTrans();
        try {
            $goodsModel = new GoodsModel();
            $teamActivityModel = new TeamActivityModel();

            // 查询商品信息
            $goods = $goodsModel->field('id,name,image')
                ->where(['id' => (int)$post['goods_id']])->find();

            if ( !$goods) {
                static::$error = '选择的商品不存在';
                return false;
            }

            // 拼团商品已存在
            $teamGoods = $teamActivityModel->field('goods_id')
                ->where(['goods_id'=>(int)$goods['id'], 'del'=>0])
                ->where('team_id', '<>', (int)$post['team_id'])
                ->find();

            if ($teamGoods) {
                static::$error = '该商品已是拼团商品,换一个吧';
                return false;
            }

            // 查询该商品是否开启了秒杀活动
            $seckillGoods = Db::name('seckill_goods')->field(true)
                ->where(['goods_id'=>(int)$goods['id'], 'del'=>0])->find();

            if ($seckillGoods) {
                static::$error = '该商品开启了秒杀活动,请先移除';
                return false;
            }

            // 查出最大和最少价格
            $team_price = [];
            foreach ($post['item'] as $key => $value) {
                foreach ($value as $K => $item) {
                    array_push($team_price, $item);
                }
            }
            $team_max_price = !empty($team_price) ? max($team_price) : 0;
            $team_min_price = !empty($team_price) ? min($team_price) : 0;

            // 新增拼团商品信息
            $teamActivityModel->where(['team_id' => (int)$post['team_id']])->update([
                'goods_id'       => $post['goods_id'],
                'people_num'     => $post['people_num'],
                'time_limit'     => $post['time_limit'],
                'start_time'     => strtotime($post['start_time']),
                'end_time'       => strtotime($post['end_time']),
                'share_title'    => empty($post['share_title']) ? '' : $post['share_title'],
                'share_intro'    => empty($post['share_intro']) ? '' : $post['share_intro'],
                'team_max_price' => $team_max_price,
                'team_min_price' => $team_min_price,
                'status'         => $post['status']
            ]);

            // 删除旧的规格
            $teamGoodsItemModel = new TeamGoodsItemModel();
            $teamGoodsItemModel->where(['team_id' => (int)$post['team_id']])->delete();

            // 新增拼团商品规格
            $lists = [];
            foreach ($post['item'] as $key => $value) {
                foreach ($value as $K => $item) {
                    $lists[] = [
                        'team_id'    => (int)$post['team_id'],
                        'goods_id'   => $key,
                        'item_id'    => $K,
                        'team_price' => $item
                    ];
                }
            }
            if ( !empty($lists)) {
                $teamGoodsItemModel->saveAll($lists);
            }

            // 回调更新商品表拼团字段
            if ($post['status'] == 1) {
                $goodsModel->where(['id' => (int)$post['goods_id']])->update([
                    'is_team'     => 1,
                    'update_time' => time()
                ]);
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
            $teamActivityModel = new TeamActivityModel();

            $team = $teamActivityModel->field(true)->where(['team_id' => (int)$id])->find();
            if (!$team) {
                static::$error = '该拼团活动不存在';
                return false;
            }

            $teamActivityModel->where(['team_id' => (int)$id])->update([
                'del' => 1
            ]);

            $goodsModel = new GoodsModel();
            $goodsModel->where(['id' => (int)$team['goods_id']])->update([
                'is_team'     => 0,
                'update_time' => time()
            ]);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            Db::rollback();
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
            $teamActivityModel = new TeamActivityModel();
            $teamActivityModel->where(['team_id' => (int)$post['id']])->update([
                $post['field'] => $post['status']
            ]);

            $activity = $teamActivityModel->field('goods_id')->where(['team_id' => (int)$post['id']])->find();

            $goodsModel = new GoodsModel();
            $goodsModel->where(['id' => (int)$activity['goods_id']])->update([
                'is_team'     => $post['status'],
                'update_time' => time()
            ]);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            Db::rollback();
            return false;
        }
    }

    /**
     * Notes: 拼团列表
     * @author 张无忌(2021/1/14 14:25)
     * @param $get
     * @return array
     */
    public static function teamOrder($get)
    {
        $where = [
            ['f.team_id', '=', (int)$get['team_id']]
        ];

        if ( !empty($get['goods_name']) and $get['goods_name'] !== '') {
            $goodsModel = new GoodsModel();
            $goods_ids = $goodsModel->where('name', 'like', '%' . $get['goods_name'] . '%')->column('id');
            if ( !empty($goods_ids)) {
                $teamActivityModel = new TeamActivityModel();
                $team_ids = $teamActivityModel->whereIn('goods_id', $goods_ids)->column('team_id');
                if ( !empty($team_ids)) {
                    $where[] = ['f.team_id', 'in', $team_ids];
                }
            }
        }

        if ( !empty($get['nickname']) and $get['nickname'] !== '') {
            $where[] = ['nickname', 'like', '%' . $get['nickname'] . '%'];
        }

        if ( !empty($get['found_time']) and $get['found_time'] !== '') {
            $where[] = ['found_time', '>=', strtotime($get['found_time'])];
        }

        if ( !empty($get['found_end_time']) and $get['found_end_time'] !== '') {
            $where[] = ['found_end_time', '<=', strtotime($get['found_end_time'])];
        }

        if (isset($get['status']) and is_numeric($get['status'])) {
            $where[] = ['f.status', '=', (int)$get['status']];
        }

        $teamFoundModel = new TeamFoundModel();
        $count = $teamFoundModel->where($where)->alias('f')->count();

        $lists = $teamFoundModel->field('f.*,t.goods_id,g.name,g.image')
            ->alias('f')->where($where)
            ->with('user.level')
            ->join('team_activity t', 't.team_id = f.team_id')
            ->join('goods g', 't.goods_id = g.id')
            ->page($get['page'], $get['limit'])
            ->order('f.id desc')
            ->select()
            ->toArray();

        foreach ($lists as &$item) {
            $item['found_time'] = date('Y-m-d H:i:s', $item['found_time']);
            $item['found_end_time'] = date('Y-m-d H:i:s', $item['found_end_time']);
            $item['status'] = Team::getStatusDesc($item['status']);
            $item['user_level'] = $item['user']['level']['name'] ?? '无等级';
        }

        return ['count' => $count, 'lists' => $lists];
    }

}