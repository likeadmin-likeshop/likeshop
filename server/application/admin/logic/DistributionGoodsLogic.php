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
// +------------------------------------------------------------------------

namespace app\admin\logic;

use app\api\model\Goods;
use app\common\logic\LogicBase;
use app\common\model\DistributionGoods;
use app\common\model\DistributionLevel;
use think\Db;

class DistributionGoodsLogic extends LogicBase
{
    /**
     * @notes 分销商品列表
     * @param $params
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author Tab
     */
    public static function lists($params)
    {
        $where = [
            ['del', '<>', '1'],
        ];
        // 商品信息
        if (isset($params['keyword']) && !empty($params['keyword'])) {
            $where[] = ['name|code', 'like', '%'. $params['keyword']. '%'];
        }

        $field = [
            'id',
            'code',
            'name',
            'image',
            'max_price',
            'min_price',
            'id' => 'distribution_flag',
        ];
        $lists = Goods::field($field)
            ->where($where)
            ->withSearch(['is_distribution'], $params)
            ->page($params['page'], $params['limit'])
            ->order('id', 'desc')
            ->select()
            ->toArray();
        $count = Goods::field($field)
            ->where($where)
            ->withSearch(['is_distribution'], $params)
            ->count();

        return [
            'count' => $count,
            'lists' => $lists
        ];
    }

    /**
     * @notes 商品详情
     * @param $params
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author Tab
     */
    public static function detail($params)
    {
        // 商品信息
        $goods = Goods::field('id,code,name')->with('goods_item')->findOrEmpty($params['id'])->toArray();
        // 分销等级信息
        $distributionLevelLists = DistributionLevel::order('weights', 'asc')->select()->toArray();
        // 商品分销信息
        $distributionGoods = DistributionGoods::where('goods_id', $params['id'])->select()->toArray();
        if(empty($distributionGoods)) {
            // 未参与分销
            $goods['is_distribution'] = 0;
            $goods['rule'] = 1;
            $ratio = self::formatLevel($distributionLevelLists, $goods);
        } else {
            $goods['is_distribution'] = $distributionGoods[0]['is_distribution'];
            $goods['rule'] = $distributionGoods[0]['rule'];
            if($distributionGoods[0]['rule'] == 1) {
                $ratio = self::formatLevel($distributionLevelLists, $goods);
            } else {
                $ratio = self::formatGoods($distributionLevelLists, $goods);
            }
        }

        return [
            'goods' => $goods,
            'ratio' => $ratio
        ];
    }

    /**
     * @notes 拼装分销等级佣金比例
     * @param $distributionLevelLists
     * @param $goods
     * @return array
     * @author Tab
     */
    public static function formatLevel($distributionLevelLists, $goods)
    {
        $ratio = [];
        foreach($distributionLevelLists as $level) {
            foreach($goods['goods_item'] as $item) {
                $temp = [
                    'level_id' => $level['id'],
                    'level_name' => $level['name'],
                    'first_ratio' => $level['first_ratio'],
                    'second_ratio' => $level['second_ratio'],
                    'goods_id' => $item['goods_id'],
                    'item_id' => $item['id'],
                    'spec_value_str' => $item['spec_value_str'],
                    'price' => $item['price']
                ];
                $ratio[] = $temp;
            }
        }
        return $ratio;
    }

    /**
     * @notes 拼装单独设置的佣金比例
     * @param $distributionLevelLists
     * @param $goods
     * @param $distributionGoods
     * @return array
     * @author Tab
     */
    public static function formatGoods($distributionLevelLists, $goods)
    {
        $ratio = [];
        foreach($distributionLevelLists as $level) {
            foreach($goods['goods_item'] as $item) {
                $record = DistributionGoods::where([
                    'level_id' => $level['id'],
                    'item_id' =>  $item['id'],
                ])->findOrEmpty()->toArray();
                $temp = [
                    'level_id' => $level['id'],
                    'level_name' => $level['name'],
                    'first_ratio' => $record['first_ratio'] ?? 0,
                    'second_ratio' => $record['second_ratio'] ?? 0,
                    'goods_id' => $item['goods_id'],
                    'item_id' => $item['id'],
                    'spec_value_str' => $item['spec_value_str'],
                    'price' => $item['price']
                ];
                $ratio[] = $temp;
            }
        }
        return $ratio;
    }

    /**
     * @notes 设置佣金
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function set($params)
    {
        Db::startTrans();
        try {
            switch($params['rule']) {
                // 根据分销会员等级比例分佣
                case 1:
                    self::setRuleOne($params);
                    break;

                // 单独设置
                case 2:
                    self::setRuleTwo($params);
                    break;
            }

            Db::commit();
            return true;
        }catch(\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * @notes 设置佣金 - 根据分销会员等级比例分佣
     * @param $params
     * @author Tab
     */
    public static function setRuleOne($params)
    {
        // 删除旧数据
        $deleteIds = DistributionGoods::where('goods_id', $params['id'])->column('id');
        DistributionGoods::destroy($deleteIds);

        // 生成新数据
        $data = [
            'goods_id' => $params['id'],
            'is_distribution' => $params['is_distribution'],
            'rule' => $params['rule'],
        ];
        DistributionGoods::create($data);
    }

    /**
     * @notes 设置佣金 - 单独自定义
     * @param $params
     * @throws \Exception
     * @author Tab
     */
    public static function setRuleTwo($params)
    {
        // 删除旧数据
        $deleteIds = DistributionGoods::where('goods_id', $params['id'])->column('id');
        DistributionGoods::destroy($deleteIds);

        // 生成新数据
        $data= [];
        foreach($params['first_ratio'] as $k => $v) {
            if ($params['first_ratio'][$k] < 0 || $params['second_ratio'][$k] < 0) {
                throw new \Exception('分销比例不能小于0');
            }
            $temp = [
                'goods_id' => $params['id'],
                'item_id' => $params['items'][$k],
                'level_id' => $params['levels'][$k],
                'first_ratio' => !empty($params['first_ratio'][$k]) ? round($params['first_ratio'][$k], 2) : 0,
                'second_ratio' => !empty($params['second_ratio'][$k]) ? round($params['second_ratio'][$k], 2) : 0,
                'is_distribution' => $params['is_distribution'],
                'rule' => $params['rule'],
            ];
            $data[] = $temp;
        }
        (new DistributionGoods())->saveAll($data);
    }

    /**
     * @notes 参与分销/取消分销
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function isDistribution($params)
    {
        Db::startTrans();
        try{
            $existedIds = DistributionGoods::distinct(true)->column('goods_id');
            $updateIds = array_intersect($params['ids'], $existedIds);
            $insertIds = array_diff($params['ids'], $existedIds);
            if (!empty($updateIds)) {
                // 有分销数据，直接修改
                DistributionGoods::where('goods_id', 'in', $updateIds)->update(['is_distribution' => $params['is_distribution']]);
            }

            // 无分销数据，新增
            $insertData = [];
            foreach($insertIds as $id) {
                $item['goods_id'] = $id;
                $item['is_distribution'] = $params['is_distribution'];
                $item['rule'] = 1;
                $insertData[] = $item;
            }

            (new DistributionGoods())->saveAll($insertData);

            Db::commit();
            return true;
        }catch(\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }
}