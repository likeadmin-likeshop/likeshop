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


namespace app\api\logic;


use app\common\logic\{AccountLogLogic, LogicBase};
use app\common\model\{AccountLog, User, Withdraw};
use app\common\server\ConfigServer;
use think\Db;
use think\Exception;

/**
 * 提现
 * Class WithdrawLogic
 * @package app\api\logic
 */
class WithdrawLogic extends LogicBase
{

    //基础配置
    public static function config($user_id)
    {
        $user = Db::name('user')->where('id', $user_id)->find();
        return [
            'able_withdraw' => $user['earnings'],
            'min_withdraw' => ConfigServer::get('withdraw', 'min_withdraw', 0),//最低提现金额;
            'max_withdraw' => ConfigServer::get('withdraw', 'max_withdraw', 0),//最高提现金额;
            'poundage_percent' => ConfigServer::get('withdraw', 'poundage', 0),//提现手续费;
        ];
    }


    //申请提现
    public static function apply($user_id, $post)
    {
        Db::startTrans();
        try{
            //提现手续费
            $poundage = 0;
            if ($post['type'] != Withdraw::TYPE_BALANCE){
                $poundage_config = ConfigServer::get('withdraw', 'poundage', 0);
                $poundage = $post['money'] * $poundage_config / 100;
            }

            $data = [
                'sn' => createSn('withdraw_apply', 'sn'),
                'user_id' => $user_id,
                'type' => $post['type'],
                'account' => $post['account'] ?? '',
                'real_name' => $post['real_name'] ?? '',
                'money' => $post['money'],
                'left_money' => $post['money'] - $poundage,
                'money_qr_code' => $post['money_qr_code'] ?? '',
                'remark' => $post['remark'] ?? '',
                'poundage' => $poundage,
                'create_time' => time(),
            ];
            $withdraw_id = Db::name('withdraw_apply')->insertGetId($data);

            //提交申请后,扣减用户的佣金
            $user = User::get($user_id);
            $user->earnings = ['dec', $post['money']];
            $user->save();
            //增加佣金变动记录
            AccountLogLogic::AccountRecord(
                $user_id,
                $post['money'],
                2,
                AccountLog::withdraw_dec_earnings,
                '',
                $withdraw_id,
                $data['sn']
            );

            Db::commit();
            return self::dataSuccess('', ['id' => $withdraw_id]);
        }catch (Exception $e){
            Db::rollback();
            return self::dataError($e->getMessage());
        }
    }


    //提现记录
    public static function records($user_id, $get, $page, $size)
    {
        $count = Db::name('withdraw_apply')
            ->where(['user_id' => $user_id])
            ->count();

        $lists = Db::name('withdraw_apply')
            ->where(['user_id' => $user_id])
            ->select();

        foreach ($lists as &$item){
            $item['desc'] = '提现至'.Withdraw::getTypeDesc($item['type']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $item['status_text'] = Withdraw::getStatusDesc($item['status']);
        }

        $data = [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
        return $data;
    }

    //提现详情
    public static function info($id, $user_id)
    {
        $info = Db::name('withdraw_apply')
            ->field('status, sn, create_time, type, money, left_money, poundage')
            ->where(['id' => $id, 'user_id' => $user_id])
            ->find();

        if (!$info){
            return [];
        }
        $info['create_time'] = date('Y-m-d H:i:s', $info['create_time']);
        return $info;
    }
}