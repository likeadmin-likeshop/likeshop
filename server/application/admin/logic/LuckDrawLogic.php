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

namespace app\admin\logic;


use app\admin\model\Coupon;
use app\common\model\Luckdraw;
use app\common\model\LuckdrawRecord;
use app\common\server\ConfigServer;

class LuckDrawLogic
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
     * Notes: 奖品列表
     * @author 张无忌(2021/1/25 11:28)
     * @param $get
     * @return array
     */
    public static function lists($get)
    {
        $where = [
            ['is_delete', '=', 0]
        ];

        $model = new Luckdraw();
        $count = $model->where($where)->count();
        $lists = $model->field(true)->where($where)
            ->append(['prize_name'])
            ->order(['sort'=>'desc', 'id' => 'desc'])
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['number'] = $item['prize_type'] == 2 ? '-' : $item['number'];
            $item['probability'] = $item['probability'] . '%';
        }

        return ['count'=>$count, 'list'=>$lists];
    }

    public static function detail($id)
    {
        $model = new Luckdraw();
        return $model->field(true)
            ->where('id', '=', (int)$id)
            ->find();
    }

    /**
     * Notes: 新增奖品
     * @param $post
     * @author 张无忌(2021/1/26 10:28)
     * @return bool
     */
    public static function add($post)
    {
        try {
            $post['name'] = Luckdraw::getPrizeDesc($post['prize_type']);
            $post['image'] = !empty($post['image']) ? $post['image'] : '';

            $model = new Luckdraw();
            return $model->save([
                'prize_type'   => $post['prize_type'],
                'name'         => $post['name'],
                'image'        => $post['image'],
                'number'       => self::getPrizeValue($post),
                'sort'         => $post['sort'],
                'probability'  => $post['probability'],
                'status'       => $post['status'],
                'is_delete'    => 0,
                'create_time'  => time(),
                'update_time'  => time()
            ]);
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 编辑奖品
     * @param $post
     * @author 张无忌(2021/1/26 10:28)
     * @return bool
     */
    public static function edit($post)
    {
        try {
            $post['name'] = Luckdraw::getPrizeDesc($post['prize_type']);
            $post['image'] = !empty($post['image']) ? $post['image'] : '';

            $model = new Luckdraw();
            $result = $model->where(['id'=>(int)$post['id']])->update([
                'prize_type'   => $post['prize_type'],
                'name'         => $post['name'],
                'image'        => $post['image'],
                'number'       => self::getPrizeValue($post),
                'sort'         => $post['sort'],
                'probability'  => $post['probability'],
                'status'       => $post['status'],
                'update_time'  => time()
            ]);
            return $result ? true : false;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 删除奖品
     * @param $id
     * @author 张无忌(2021/1/26 11:17)
     * @return bool
     */
    public static function del($id)
    {
        try {
            $model = new Luckdraw();
            $result = $model->where(['id'=>(int)$id])->update([
                'is_delete' => 1,
                'update_time' => time()
            ]);
            return $result ? true : false;
        }  catch (\Exception $e) {
            static::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 更新抽奖设置
     * @param $post
     * @author 张无忌(2021/1/26 11:40)
     * @return bool
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function set($post)
    {
        if ($post['status'] == 1) {
            $model = new Luckdraw();
            $prizes = $model->field(true)
                ->where(['is_delete' => 0, 'status'=>1])
                ->order(['id'=>'desc', 'sort'=>'desc'])
                ->select();
            if (count($prizes) != 8) {
                static::$error = '抽奖限制8个抽奖奖品';
                return false;
            }
            $probability = array_column($prizes->toArray(), 'probability');
            if (array_sum($probability) > 100) {
                static::$error = '中奖概率合计不能大于100%';
                return false;
            }
        }

        ConfigServer::set('luckdraw', 'limit', $post['limit']);
        ConfigServer::set('luckdraw', 'need', $post['need']);
        ConfigServer::set('luckdraw', 'rule', $post['rule']);
        ConfigServer::set('luckdraw', 'status', $post['status']);
        ConfigServer::set('luckdraw', 'show_win', $post['show_win']);
        return true;
    }

    /**
     * Notes: 抽奖记录
     * @param $get
     * @author 张无忌(2021/1/26 14:08)
     * @return array
     */
    public static function record($get)
    {
        $model = new LuckdrawRecord();
        $count = $model->count();
        $lists = $model->field(true)
            ->with('user')
            ->order('id', 'desc')
            ->page($get['page'], $get['limit'])
            ->append(['send_desc'])
            ->select();

        return ['count'=>$count, 'list'=>$lists];
    }

    /**
     * Notes: 切换状态
     * @param $post
     * @author 张无忌(2021/1/13 17:53)
     * @return bool
     */
    public static function switchStatus($post)
    {
        try {
            $model = new Luckdraw();
            $model->where(['id' => (int)$post['id']])->update([
                'status'     => $post['status'],
                'update_time' => time()
            ]);
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 更新排序
     * @param $post
     * @author 张无忌(2021/1/13 17:53)
     * @return bool
     */
    public static function updateSort($post)
    {
        try {
            $model = new Luckdraw();
            $model->where(['id' => (int)$post['id']])->update([
                $post['field']     => $post['data'],
                'update_time' => time()
            ]);
            return true;
        } catch (\Exception $e) {
            static::$error = $e->getMessage();
            return false;
        }
    }


    /**
     * @notes 优惠券列表
     * @return Coupon[]
     * @author 段誉
     * @date 2022/2/15 10:18
     */
    public static function coupon()
    {
        $where[] = ['del', '=', 0];
        $where[] = ['status', '=', 1];
        $where[] = ['get_type', '=', 2];
        return Coupon::where($where)->order('id desc')->select();
    }


    /**
     * @notes 获取奖品数值
     * @param $param
     * @return int|mixed
     * @author 段誉
     * @date 2022/2/15 14:14
     */
    public static function getPrizeValue($param)
    {
        $number = 0;
        switch ($param['prize_type']) {
            case Luckdraw::PRIZE_INTEGRAL:
                $number = $param['integral'];
                break;
            case Luckdraw::PRIZE_COUPON:
                $number = $param['coupon'];
                break;
            case Luckdraw::PRIZE_BALANCE:
                $number = $param['balance'];
                break;
        }
        return $number;
    }

}