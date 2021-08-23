<?php

namespace app\admin\logic;


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
            ->order(['sort'=>'desc'])
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
            $name_text = ['', '积分', '谢谢惠顾', '优惠券'];
            $post['name'] = $name_text[$post['prize_type']];
            $post['image'] = !empty($post['image']) ? $post['image'] : '';

            $model = new Luckdraw();
            return $model->save([
                'prize_type'   => $post['prize_type'],
                'name'         => $post['name'],
                'image'        => $post['image'],
                'number'       => $post['number'],
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
            $name_text = ['', '积分', '谢谢惠顾', '优惠券'];
            $post['name'] = $name_text[$post['prize_type']];
            $post['image'] = !empty($post['image']) ? $post['image'] : '';

            $model = new Luckdraw();
            $result = $model->where(['id'=>(int)$post['id']])->update([
                'prize_type'   => $post['prize_type'],
                'name'         => $post['name'],
                'image'        => $post['image'],
                'number'       => $post['number'],
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
            $count = $model->field(true)
                ->where(['is_delete' => 0, 'status'=>1])
                ->order(['id'=>'desc', 'sort'=>'desc'])
                ->count();
            if ($count < 8) {
                static::$error = '请设置最少8个抽奖商品再来启动';
                return false;
            }
        }

        ConfigServer::set('luckdraw', 'limit', $post['limit']);
        ConfigServer::set('luckdraw', 'rule', $post['rule']);
        ConfigServer::set('luckdraw', 'status', $post['status']);
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
}