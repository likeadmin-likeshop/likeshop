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

use app\admin\model\WithdrawApply;
use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\User;
use app\common\model\Withdraw;
use think\Db;
use think\Exception;
use think\helper\Time;

class WithdrawLogic
{
    /**
     * 佣金提现列表
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists($get)
    {
        $where = [];
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            if ($get['search_key'] == 'order_sn') {
                $where[] = ['w.sn', '=', $keyword];
            } elseif ($get['search_key'] == 'user_sn'){
                $where[] = ['u.sn', '=', $keyword];
            } else {
                $where[] = [$get['search_key'], 'like', '%' . $keyword . '%'];
            }
        }

        //提现方式
        if (isset($get['type']) && $get['type'] != '') {
            $where[] = ['type', '=', $get['type']];
        }

        //提现状态
        if (isset($get['status']) && $get['status'] != '') {
            $where[] = ['status', '=', $get['status']];
        }


        if (isset($get['start_time']) && $get['start_time'] && isset($get['end_time']) && $get['end_time']) {
            $where[] = ['w.create_time', 'between', [strtotime($get['start_time']), strtotime($get['end_time'])]];
        }else{
            $where[] = ['w.create_time', 'between', Time::today()];
        }

        $count = Db::name('withdraw_apply w')
            ->join('user u', 'u.id = w.user_id')
            ->where($where)
            ->count();

        $lists = Db::name('withdraw_apply w')
            ->field('w.*, u.nickname, u.sn as user_sn, u.mobile')
            ->join('user u', 'u.id = w.user_id')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('w.id desc')
            ->select();

        foreach ($lists as &$item) {
            $item['type'] = Withdraw::getTypeDesc($item['type']);
            $item['status_text'] = Withdraw::getStatusDesc($item['status']);
        }

        return ['count' => $count, 'lists' => $lists];
    }


    //审核通过
    public static function confirm($post)
    {
        $id = $post['id'];
        $withdraw = Db::name('withdraw_apply')
            ->where('id', $id)
            ->find();

        //提现到余额
        if ($withdraw['type'] == Withdraw::TYPE_BALANCE){
            $user = User::get($withdraw['user_id']);
            $user->user_money = ['inc', $withdraw['left_money']];
            $user->save();
            AccountLogLogic::AccountRecord(
                $withdraw['user_id'],
                $withdraw['left_money'],
                1,
                AccountLog::withdraw_to_balance,
                '',
                $withdraw['id'],
                $withdraw['sn']
            );
        }
        //更新申请状态
        Db::name('withdraw_apply')
            ->where('id',  $id)
            ->update(['status' => Withdraw::STATUS_AUDIT_SUCCESS, 'update_time' => time()]);
    }


    //审核拒绝
    public static function refuse($post)
    {
        Db::startTrans();
        try{
            $withdraw_apply = WithdrawApply::where('id', $post['id'])->find();
            $withdraw_apply->status = Withdraw::STATUS_AUDIT_ERROR;
            $withdraw_apply->update_time = time();
            $withdraw_apply->save();

            //拒绝提现,回退佣金
            $user = User::get($withdraw_apply['user_id']);
            $user->earnings = ['inc', $withdraw_apply['money']];
            $user->save();

            //增加佣金变动记录
            AccountLogLogic::AccountRecord(
                $withdraw_apply['user_id'],
                $withdraw_apply['money'],
                1,
                AccountLog::withdraw_back_earnings,
                '',
                $withdraw_apply['id'],
                $withdraw_apply['sn']
            );
            Db::commit();
        } catch (Exception $e){
            Db::rollback();
        }
    }
}