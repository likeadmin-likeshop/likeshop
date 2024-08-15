<?php
namespace app\admin\logic;

use app\admin\model\User;
use app\common\logic\LogicBase;
use app\common\model\Distribution;
use app\common\model\DistributionOrderGoods;
use app\common\server\UrlServer;

/**
 * 分销会员逻辑层
 * Class DistributionMemberLogic
 * @package app\admin\logic\distribution
 */
class DistributionMemberLogic extends LogicBase
{
    /**
     * @notes 分销会员列表
     * @param $params
     * @return array
     * @author Tab
     */
    public static function lists($params)
    {
        $where = [
            ['d.is_distribution', '=', 1]
        ];
        // 用户信息
        if (isset($params['keyword']) && !empty($params['keyword'])) {
            $where[] = ['u.sn|u.nickname', 'like', '%'. $params['keyword'] .'%'];
        }
        // 分销等级
        if (isset($params['level_id']) && $params['level_id'] != 'all') {
            $where[] = ['d.level_id', '=', $params['level_id']];
        }
        // 分销状态
        if (isset($params['is_freeze']) && $params['is_freeze'] != 'all') {
            $where[] = ['d.is_freeze', '=', $params['is_freeze']];
        }

        $field = [
            'u.id' => 'user_id',
            'u.sn' => 'user_sn',
            'u.avatar',
            'u.nickname',
            'dl.id' => 'level_id',
            'dl.weights',
            'dl.name' => 'level_name',
            'd.is_freeze',
            'd.distribution_time',
        ];
        $lists = Distribution::alias('d')
            ->leftJoin('user u', 'u.id = d.user_id')
            ->leftJoin('distribution_level dl', 'dl.id = d.level_id')
            ->field($field)
            ->where($where)
            ->order('u.id', 'desc')
            ->page($params['page'], $params['limit'])
            ->select()
            ->toArray();

        $count = Distribution::alias('d')
            ->leftJoin('user u', 'u.id = d.user_id')
            ->leftJoin('distribution_level dl', 'dl.id = d.level_id')
            ->field($field)
            ->where($where)
            ->count();

        foreach($lists as &$item) {
            $item['avatar'] = empty($item['avatar']) ? '' : UrlServer::getFileUrl($item['avatar']);
            $item['earnings'] = DistributionOrderGoods::getEarnings($item['user_id']);
        }

        return [
            'count' => $count,
            'lists' => $lists
        ];
    }

    /**
     * @notes 用户列表
     * @param $params
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author Tab
     */
    public static function getUserLists($params)
    {
        $where[] = ['del', '=', 0];
        // 用户信息
        if (isset($params['keyword']) && !empty($params['keyword'])) {
            $where[] = ['sn|nickname', 'like', '%'. $params['keyword'] .'%'];
        }

        $lists = \app\common\model\User::field('id,sn,nickname,id as distribution')
            ->where($where)
            ->withSearch(['distribution'], $params)
            ->page($params['page'], $params['limit'])
            ->select()
            ->toArray();
        $count = \app\common\model\User::where($where)->withSearch(['distribution'], $params)->count();

        return [
            'count' => $count,
            'lists' => $lists,
        ];
    }

    /**
     * @notes 开通分销会员
     * @param $params
     * @return bool
     * @author Tab
     */
    public  static function open($params)
    {
        try {
            $user = User::where('id', $params['user_id'])->findOrEmpty()->toArray();
            if(empty($user)) {
                throw new \Exception('用户不存在');
            }
            $distribution = Distribution::where('user_id', $params['user_id'])->findOrEmpty()->toArray();
            if(!empty($distribution) && $distribution['is_distribution'] == 1) {
                throw new \Exception('用户已是分销会员');
            }
            if(!empty($distribution) && $distribution['is_distribution'] == 0) {
                Distribution::where('user_id', $params['user_id'])->update([
                    'is_distribution' => 1,
                    'distribution_time' => time()
                ]);
            }
            if(empty($distribution)) {
                $data = [
                    'user_id' => $params['user_id'],
                    'level_id' => $params['level_id'],
                    'is_distribution' => 1,
                    'is_freeze' => 0,
                    'remark' => '后台开通分销',
                    'distribution_time' => time()
                ];

                Distribution::create($data);
            }

            return true;
        } catch (\Exception $e) {
            self::$error = $e->getMessage();
            return false;
        }
    }

    public static function getUser($params)
    {
        $field = [
            'u.id' => 'user_id',
            'u.sn' => 'user_sn',
            'u.nickname' => 'user_nickname',
            'dl.name' => 'level_name',
            'dl.weights',
        ];
        $info = Distribution::alias('d')
            ->leftJoin('user u', 'u.id = d.user_id')
            ->leftJoin('distribution_level dl', 'dl.id = d.level_id')
            ->field($field)
            ->where('d.user_id', $params['id'])
            ->findOrEmpty()
            ->toArray();

        return $info;
    }

    /**
     * @notes 分销会员等级调整
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function adjust($params)
    {
        try {
            Distribution::where(['user_id' => $params['user_id']])->update([
                'level_id' => $params['level_id']
            ]);

            return true;
        } catch (\Exception $e) {
            self::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * @notes 冻结资格/恢复资格
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function isFreeze($params)
    {
        try {
            Distribution::where(['user_id' => $params['user_id']])->update([
                'is_freeze' => $params['is_freeze']
            ]);

            return true;
        } catch(\Exception $e) {
            self::$error = $e->getMessage();
            return false;
        }
    }
}