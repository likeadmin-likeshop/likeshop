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
namespace app\common\logic;
use app\common\model\User;
use app\common\model\AccountLog;

class AccountLogLogic{
    /**
     * Notes:记录会员账户流水，如果变动类型是成长值，且是增加的，则调用更新会员等级方法。该方法应在添加用户账户后调用
     * @author: cjh 2020/12/15 11:49
     * @param int $user_id  用户id
     * @param float $amount 变动数量
     * @param int $change_type  变动类型：1-增加；2-减少
     * @param int $source_type 来源类型
     * @param string $remark 说明
     * @param string $source_id 来源id
     * @param string $source_sn 来源单号
     * @param string $extra 额外字段说明
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function AccountRecord($user_id,$amount,$change_type,$source_type,$remark ='',$source_id ='',$source_sn='',$extra=''){
        $user = User::get($user_id);
        if(empty($user)){
            return false;
        }
        $type = AccountLog::getChangeType($source_type);
        $left_amount = '';
        switch ($type){
            case 'money':
                $left_amount = $user->user_money;
                break;
            case 'integral':
                $left_amount = $user->user_integral;
                break;
            case 'growth':
                $left_amount = $user->user_growth;
                break;
            case 'earnings':
                $left_amount = $user->earnings;
        }
        $account_log = new AccountLog();
        $account_log->log_sn = createSn('account_log','log_sn','',4);
        $account_log->user_id = $user_id;
        $account_log->source_type = $source_type;
        $account_log->source_id = $source_id;
        $account_log->source_sn = $source_sn;
        $account_log->change_amount = $amount;
        $account_log->left_amount = $left_amount;
        $account_log->remark = AccountLog::getRemarkDesc($source_type,$source_sn,$remark);
        $account_log->extra = $extra;
        $account_log->change_type = $change_type;
        $account_log->create_time = time();
        $account_log->save();

        //更新会员等级
        if($type === 'growth' && $change_type == 1){
            UserLevelLogic::updateUserLevel($user_id);
        }
        return true;

    }
}