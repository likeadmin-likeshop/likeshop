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


namespace app\common\server;


use Cron\CronExpression;
use think\Console;
use think\Db;
use think\Exception;
use think\facade\Cache;
use think\facade\Config;
use think\facade\Debug;
use Workerman\Lib\Timer;
use Workerman\Worker;

class CrontabServer
{

    public $run_status = false;//运行状态
    public $cron_lists = []; //任务列表
    public $system; //1-wondows;2-unix;

    /**
     * 初始化
     * CrontabServer constructor.
     */
    public function __construct()
    {
        if (Cache::get('crontab_run_status')) {
            $this->run_status = true;
        }
        $this->cron_lists = Db::name('dev_crontab')
            ->where(['status' => 1])
            ->select();
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $this->system = 1;
        } else {
            $this->system = 2;
        }
    }

    /**
     * 运行定时任务
     * @return string
     * @throws Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function execute()
    {
        if (empty($this->cron_lists)) {
            return '当前无需要执行的定时任务或守护进程';
        }

        Db::name('dev_crontab')
            ->where(['status' => 1])
            ->update(['error' => '']);


        if ($this->system == 1) {
            self::windows($this->cron_lists);
        } else {
            self::unix($this->cron_lists);
        }
    }


    /**
     * unix系统
     * @param $cron_lists
     */
    private function unix($cron_lists)
    {
        $task = new Worker();
        $task->count = count($cron_lists);//根据列表任务分配线程
        $task->onWorkerStart = function ($task) use ($cron_lists) {
            $task_id = $task->id;
            //创建定时器
            $timer_id = Timer::add(1, function () use (&$timer_id, $task_id, $cron_lists) {
                try {
                    self::setStatus();
                    Db::close();
                    $time = time();
                    $cron = $cron_lists[$task_id];
                    if ($cron['type'] == 1) {
                        if (CronExpression::isValidExpression($cron['expression']) === false) {
                            throw  new  \Exception("规则设置错误"); //定时任务运行规则错误，不执行
                        }
                        $cron_expression = CronExpression::factory($cron['expression']);
                        $last_time = Db::name('dev_crontab')->where(['id' => $cron['id']])->value('last_time');
                        $next_time = $cron_expression->getNextRunDate(date('Y-m-d H:i:s', $last_time))->getTimestamp();
                        if ($next_time >= time()) {
                            sleep(1);
                            return true;
                        }
                    }
                    //执行定时任务
                    Debug::remark('begin');
                    $parameter = explode(' ', $cron['parameter']);
                    if (is_array($parameter) && !empty($parameter)) {
                        Console::call($cron['command'], $parameter);
                    } else {
                        Console::call($cron['command']);
                    }
                    Debug::remark('end');

                    echo "系统任务名称为:{$cron['name']}:" . "\n";

                } catch (\Exception $e) {
                    //运行错误，关闭定时任务
                    echo "系统任务名称为:{$cron['name']}:" . $e->getMessage();
                    Db::name('dev_crontab')
                        ->where(['id' => $cron['id']])
                        ->update(['error' => $e->getMessage(), 'status' => 3]);
                    Timer::del($timer_id);
                } catch (Exception $e) {
                    echo "系统任务名称为:{$cron['name']}:" . $e->getMessage();
                    Db::name('dev_crontab')
                        ->where(['id' => $cron['id']])
                        ->update(['error' => $e->getMessage(), 'status' => 3]);
                    Timer::del($timer_id);
                }

                $range_time = Debug::getRangeTime('begin', 'end');
                $max_time = max($cron['max_time'], $range_time);
                Db::name('dev_crontab')
                    ->where(['id' => $cron['id']])
                    ->update(['last_time' => $time, 'time' => $range_time, 'max_time' => $max_time]);
            });
        };

        Worker::runAll();
    }

    /**
     * windows系统下
     * @param $cron_lists
     */
    private function windows($cron_lists)
    {
        $task = new Worker();
        $task->count = 1;
        $task->onWorkerStart = function ($task) use ($cron_lists) {
            //创建定时器
            $timer_id = Timer::add(1, function () use ($cron_lists) {
                self::setStatus();
                foreach ($cron_lists as $k => $v) {
                    $cron = $v;
                    try {
                        $time = time();
                        if ($cron['type'] == 1) {
                            if (CronExpression::isValidExpression($cron['expression']) === false) {
                                throw  new  \Exception("规则设置错误"); //定时任务运行规则错误，不执行
                            }
                            $cron_expression = CronExpression::factory($cron['expression']);

                            $last_time = Db::name('dev_crontab')->where(['id' => $cron['id']])->value('last_time');
                            $next_time = $cron_expression->getNextRunDate(date('Y-m-d H:i:s', $last_time))->getTimestamp();
                            if ($next_time >= time()) {
                                usleep(100000);
                                continue;
                            }
                        }
                        //执行定时任务
                        Debug::remark('begin');
                        $parameter = explode(' ', $cron['parameter']);
                        if (is_array($parameter) && !empty($parameter)) {
                            Console::call($cron['command'], $parameter);
                        } else {
                            Console::call($cron['command']);
                        }
                        Debug::remark('end');

                        echo "系统任务名称为:{$cron['name']}:" . "\n";

                    } catch (\Exception $e) {
                        //运行错误，关闭定时任务
                        echo "系统任务名称为:{$cron['name']}:" . $e->getMessage();
                        Db::name('dev_crontab')
                            ->where(['id' => $cron['id']])
                            ->update(['error' => $e->getMessage(), 'status' => 3]);
                    } catch (Exception $e) {
                        echo "系统任务名称为:{$cron['name']}:" . $e->getMessage();
                        Db::name('dev_crontab')
                            ->where(['id' => $cron['id']])
                            ->update(['error' => $e->getMessage(), 'status' => 3]);
                    }

                    $range_time = Debug::getRangeTime('begin', 'end');
                    $max_time = max($cron['max_time'], $range_time);
                    Db::name('dev_crontab')
                        ->where(['id' => $cron['id']])
                        ->update(['last_time' => $time, 'time' => $range_time, 'max_time' => $max_time]);
                }
            });
        };

        Worker::runAll();
    }


    /**
     * 设置状态
     * @return mixed
     */
    private function setStatus()
    {
        return Cache::set('crontab_run_status', 1, 60);
    }


    /**
     * 更新定时任务状态
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public function updateStatus()
    {
        if ($this->run_status === false) {
            $this->cron_lists = Db::name('dev_crontab')
                ->where(['status' => 1])
                ->update(['status' => 2]);
        }
    }


    /**
     * 启动
     * @param bool $stop
     */
    public function run($stop = true)
    {
        $php_path = real_path();
        $this->setStatus();
        if ($stop) {
            if ($this->system == 1) {
                pclose(popen("start taskkill /f /im php.exe /t", 'r'));
            } else {
                pclose(popen($php_path . ' ../think crontab stop --d', 'r'));
            }
        } else {
            if ($this->system == 1) {
                pclose(popen("start taskkill /f /im php.exe /t", 'r'));
                sleep(2);
                pclose(popen("start " . $php_path . " ../think crontab restart --d", 'r'));
            } else {
                pclose(popen($php_path . ' ../think crontab restart --d', 'r'));
            }
        }
    }
}