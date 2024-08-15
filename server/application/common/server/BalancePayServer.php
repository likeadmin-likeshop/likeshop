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

namespace app\common\server;

use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\User;

class BalancePayServer
{
    protected $error = '未知错误';

    public function pay($from, $order, $order_source)
    {
        try {
            $user = User::findOrEmpty($order['user_id']);
            if($user->isEmpty() || $order['order_amount'] > $user->user_money) {
                throw new \think\Exception('余额不足');
            }

            // 扣减余额
            $user->user_money = $user->user_money - $order['order_amount'];
            $user->save();

            // 记录账户流水
            AccountLogLogic::AccountRecord($order['user_id'], $order['order_amount'],2, AccountLog::balance_pay_order, '', $order['id'], $order['order_sn']);
        } catch(\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function getError()
    {
        return $this->error;
    }
}