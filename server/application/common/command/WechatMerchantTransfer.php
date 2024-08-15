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

namespace app\common\command;


use app\admin\logic\WechatMerchantTransferLogic;
use app\admin\model\WithdrawApply;
use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\User;
use app\common\model\Withdraw;
use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Output;
use think\console\Input;
use think\facade\Log;

class WechatMerchantTransfer extends Command
{
    protected function configure()
    {
        $this->setName('wechat_merchant_transfer')
            ->setDescription('商家转账到零钱查询');
    }

    protected function execute(Input $input, Output $output)
    {
        //微信零钱接口:1-企业付款到零钱;2-商家转账到零钱
        $transfer_way = ConfigServer::get('withdraw', 'transfer_way',1);
        //选择了商家转账到零钱再进行查询
        if ($transfer_way == 1) {
            return false;
        }

        $lists = WithdrawApply::where(['type'=>Withdraw::TYPE_WECHAT_CHANGE,'status'=>Withdraw::STATUS_ING])
            ->field('id,sn,batch_no,user_id,money')
            ->select();

        foreach ($lists as $list) {
            $result = WechatMerchantTransferLogic::details($list);
            // 记录查询结果
            WithdrawApply::update(['update_time'=>time(),'pay_search_desc'=>json_encode($result, JSON_UNESCAPED_UNICODE)],['id'=>$list['id']]);
            if(isset($result['detail_status'])) {
                if ($result['detail_status'] == 'SUCCESS') {
                    // 转账成功,标记提现申请单为提现成功,记录支付信息
                    WithdrawApply::update(['status'=>3,'payment_no'=>$result['detail_id'],'payment_time'=>strtotime($result['update_time'])],['id'=>$list['id']]);
                }
                if ($result['detail_status'] == 'FAIL') {
                    // 转账失败
                    WithdrawApply::update(['status'=>4],['id'=>$list['id']]);
                    //回退佣金
                    $user = User::find($list['user_id']);
                    $user->earnings = ['inc', $list['money']];
                    $user->save();

                    //增加佣金变动记录
                    AccountLogLogic::AccountRecord(
                        $list['user_id'],
                        $list['money'],
                        1,
                        AccountLog::withdraw_back_earnings,
                        '',
                        $list['id'],
                        $list['sn']
                    );
                }
                if ($result['detail_status'] == 'PROCESSING') {
                    return ['code' => 0, 'msg' => '正在处理中'];
                }
            }else{
                Log::write($result['message'] ?? '商家转账到零钱查询失败');
                return null;
            }
        }

        return true;
    }
}