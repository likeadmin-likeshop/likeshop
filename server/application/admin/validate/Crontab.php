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

namespace app\admin\validate;

use Cron\CronExpression;
use think\Exception;
use think\Validate;

class Crontab extends Validate
{

    protected $rule = [
        'id' => 'require',
        'name' => 'require',
        'type' => 'require|in:1,2',
        'command' => 'require',
        'status' => 'require|in:1,2',
        'expression' => 'expression',
    ];

    protected $message = [
        'expression.expression'=>'定时任务规则设置错误',
    ];


    /**
     * 添加
     */
    public function sceneAdd()
    {
        $this->remove('id',['add']);
    }

    /**
     * 命令验证
     * @param $password
     * @param $other
     * @param $data
     * @return bool|mixed
     */
    protected function expression($expression, $other, $data)
    {
        if ($data['type'] == 2) {
            return true;
        }
        if (empty($expression)) {
            return '定时任务的规则不能为空';
        }
        if (CronExpression::isValidExpression($expression) === false) {
            return false;
        }
        $cron_expression = CronExpression::factory($expression);
        try {
            $cron_expression->getMultipleRunDates(1);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

}