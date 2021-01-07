<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------


namespace app\admin\logic;


use app\common\model\Crontab_;
use app\common\server\CrontabServer;
use Cron\CronExpression;
use think\Db;
use think\Exception;

class CrontabLogic
{

    /**
     * 获取定时任务列表
     * @return array|\PDOStatement|string|\think\Collection|\think\model\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists()
    {

        $lists = Db::name('dev_crontab')
            ->order(['system' => 'desc'])
            ->select();
        foreach ($lists as $k => $v) {
            $lists[$k]['type_str'] = Crontab_::$type[$v['type']];
            $lists[$k]['last_time_str'] = empty($v['last_time']) ? '-' : date('m-d H:i:s', $v['last_time']);
            if ($v['type'] == 2) {
                $lists[$k]['expression'] = '-';
            }
        }
        return ['count' => count($lists), 'lists' => $lists];
    }

    /**
     * 定时任务信息
     * @param $id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function info($id)
    {
        return Db::name('dev_crontab')
            ->where(['id' => $id])
            ->find();
    }

    /**
     * 操作
     * @param $operation
     * @param $id
     * @return bool|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function operation($operation, $id)
    {
        try {
            $cron = Db::name('dev_crontab')
                ->where(['id' => $id])
                ->find();
            if ($cron['type'] == 1 && CronExpression::isValidExpression($cron['expression']) === false) {
                throw  new  Exception("规则设置错误"); //定时任务运行规则错误，不执行
            }

            switch ($operation) {
                case  'start':
                case 'restart':
                    Db::name('dev_crontab')
                        ->where(['id' => $id])
                        ->update(['status' => 1]);
                    break;
                case 'stop':
                    Db::name('dev_crontab')
                        ->where(['id' => $id])
                        ->update(['status' => 2]);
                default;
            }
            /*$count = Db::name('dev_crontab')
                ->where(['status' => 1])
                ->count();


            $crontab_server = new CrontabServer();
            if ($count == 0) {
                $crontab_server->run(true);
            } else {
                $crontab_server->run(false);
            }*/
            return true;
        } catch (Exception $e) {
            Db::name('dev_crontab')
                ->where(['id' => $id])
                ->update(['status' => 3, 'error' => $e->getMessage()]);
            return $e->getMessage();
        }
    }

    /**
     * 获取接下来几次执行时间
     * @param $get
     * @return array
     */
    public static function expression($get)
    {
        if (CronExpression::isValidExpression($get['expression']) === false) {
            return [['time' => 0, 'date' => '规则设置错误']];
        }
        $cron_expression = CronExpression::factory($get['expression']);
        try {
            $res = $cron_expression->getMultipleRunDates(5);
        } catch (Exception $e) {
            return [['time' => 0, 'date' => '规则设置错误']];
        }
        $res = json_decode(json_encode($res), true);
        $lists = [];
        foreach ($res as $k => $v) {
            $lists[$k]['time'] = $k + 1;
            $lists[$k]['date'] = str_replace('.000000', '', $v['date']);
        }
        $lists[] = ['time' => 'x', 'date' => '……'];
        return $lists;
    }


    /**
     * 添加系统任务
     * @param $post
     * @return int|string
     */
    public static function add($post)
    {
        $data = [
            'name' => $post['name'],
            'type' => $post['type'],
            'remark' => $post['remark'],
            'command' => $post['command'],
            'parameter' => $post['parameter'],
            'status' => $post['status'],
            'expression' => $post['expression'],
            'create_time' => time()
        ];
        $result = Db::name('dev_crontab')
            ->insert($data);
        if ($post['status'] == 1) {
            (new CrontabServer())->run(false);
        }
        return $result;
    }

    /**
     * 编辑系统任务
     * @param $post
     * @return int|string
     */
    public static function edit($post)
    {
        $data = [
            'name' => $post['name'],
            'type' => $post['type'],
            'remark' => $post['remark'],
            'command' => $post['command'],
            'parameter' => $post['parameter'],
            'status' => $post['status'],
            'expression' => $post['expression'],
            'update_time' => time()
        ];
        $result = Db::name('dev_crontab')
            ->where(['id' => $post['id']])
            ->update($data);
        if ($post['status'] == 1) {
            (new CrontabServer())->run(false);
        }
        return $result;
    }

    /**
     * 删除定时任务
     * @param $id
     * @return int
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function del($id)
    {
        $system = Db::name('dev_crontab')
            ->where(['id' => $id])
            ->value('system');
        if ($system === 1) {
            return false;
        }
        $flag = Db::name('dev_crontab')
            ->where(['id' => $id])
            ->delete();
        (new CrontabServer())->run(false);
        return $flag;
    }
}