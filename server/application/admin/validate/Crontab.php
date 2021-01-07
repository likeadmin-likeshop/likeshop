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