<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

namespace app\admin\logic;

use app\admin\model\WithdrawApply;
use app\common\logic\AccountLogLogic;
use app\admin\logic\WechatCorporatePaymentLogic;
use app\common\server\UrlServer;
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
        // 会员信息
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            if ($get['search_key'] == 'user_sn') {
                $where[] = ['u.sn', '=', $keyword];
            } elseif ($get['search_key'] == 'nickname'){
                $where[] = ['u.nickname', 'like', '%' . $keyword . '%'];
            }
        }

        //提现单号
        if (isset($get['withdraw_sn']) && $get['withdraw_sn'] != '') {
          $where[] = ['w.sn', '=', $get['withdraw_sn']];
      }

        //提现方式
        if (isset($get['type']) && $get['type'] != '') {
            $where[] = ['type', '=', $get['type']];
        }

        //提现状态
        if (isset($get['status']) && $get['status'] != '') {
            $where[] = ['status', '=', $get['status']];
        }

        // 提现时间
        if (isset($get['start_time']) && $get['start_time'] && isset($get['end_time']) && $get['end_time']) {
            $where[] = ['w.create_time', 'between', [strtotime($get['start_time']), strtotime($get['end_time'])]];
        }else{
//            $where[] = ['w.create_time', 'between', Time::today()];
        }

        $lists = Db::name('withdraw_apply w')
            ->field('w.*, u.nickname,u.avatar, u.sn as user_sn, u.mobile, ul.name as user_level_name')
            ->leftJoin('user u', 'u.id = w.user_id')
            ->leftJoin('user_level ul', 'ul.id = u.level')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('w.id desc')
            ->select();

        $count = Db::name('withdraw_apply w')
        ->field('w.*, u.nickname,u.avatar, u.sn as user_sn, u.mobile, ul.name as user_level_name')
        ->leftJoin('user u', 'u.id = w.user_id')
        ->leftJoin('user_level ul', 'ul.id = u.level')
        ->where($where)
        ->order('w.id desc')
        ->count();

        foreach ($lists as &$item) {
            $item['type_text'] = Withdraw::getTypeDesc($item['type']);
            $item['status_text'] = Withdraw::getStatusDesc($item['status']);
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
            $item['user_level_name'] = $item['user_level_name'] ? $item['user_level_name'] : '无等级';
            $item['create_time'] = date('Y-m-d h:i:s', $item['create_time']);
            $item['payment_time'] = date('Y-m-d h:i:s', $item['payment_time']);
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

        // 判断提现单是否为待提现状态 1
        if($withdraw['status'] != 1) {
          return [
            'code' => 0,
            'msg' => '不是待提现申请单'
          ];
        }

        //提现到钱包余额
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
            //更新提现申请单状态为提现成功
            Db::name('withdraw_apply')
            ->where('id',  $id)
            ->update(['status' => Withdraw::STATUS_SUCCESS, 'update_time' => time(), 'description'=>$post['description']]);

            return [
              'code' => 1,
              'msg' => '提现至钱包余额成功'
            ];
        }
        //提现到微信零钱 
        if($withdraw['type'] == Withdraw::TYPE_WECHAT_CHANGE) {
          // 先更新审核备注
          Db::name('withdraw_apply')
            ->where('id',  $id)
            ->update(['update_time' => time(),'description'=>$post['description']]);
          return WechatCorporatePaymentLogic::pay($withdraw);
        }

        //提现到微信收款码、支付收款码
        if($withdraw['type'] == Withdraw::TYPE_WECHAT_CODE || $withdraw['type'] == Withdraw::TYPE_ALI_CODE || Withdraw::TYPE_BANK) {
          // 直接标识为提现中状态
          Db::name('withdraw_apply')
            ->where('id',  $id)
            ->update(['status' => Withdraw::STATUS_ING, 'update_time' => time(),'description'=>$post['description']]);
          return [
            'code' => 1,
            'msg' => '审核通过，提现中'
          ];
        }
    }

    //审核拒绝
    public static function refuse($post)
    {
        Db::startTrans();
        try{
            $withdraw_apply = WithdrawApply::where('id', $post['id'])->find();
            $withdraw_apply->status = Withdraw::STATUS_FAIL; // 提现失败
            $withdraw_apply->description = $post['description'];
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

    /**
     * 提现失败
     */
    public static function withdrawFailed($id)
    {
      $withdraw_apply = WithdrawApply::where('id', $id)->find();
      $withdraw_apply->status = Withdraw::STATUS_FAIL; // 提现失败
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
    }

    /**
     * 提现详情
     */
    public static function detail($id)
    {
      $detail = Db::name('withdraw_apply w')
        ->field('w.*,u.sn as user_sn, u.nickname, u.mobile')
        ->leftJoin('user u', 'u.id=w.user_id')
        ->where('w.id', $id)
        ->find();
      $detail['typeDesc'] = Withdraw::getTypeDesc($detail['type']);
      $detail['statusDesc'] = Withdraw::getStatusDesc($detail['status']);
      $detail['create_time'] = Date('Y-m-d h:i:s', $detail['create_time']);
      $detail['payment_time'] = Date('Y-m-d h:i:s', $detail['payment_time']);
      $detail['transfer_time'] = $detail['transfer_time'] ? Date('Y-m-d h:i:s', $detail['transfer_time']) : '';
      return $detail;
    }

    /**
     * 提现结果查询
     */
    public static function search($id)
    {
        $withdraw = Db::name('withdraw_apply')
            ->where('id', $id)
            ->find();

        // 判断提现单是否为提现中状态 2 且 提现方式为 微信零钱 2
        if($withdraw['status'] == 2 && $withdraw['type'] == 2) {
          return WechatCorporatePaymentLogic::search($withdraw);
        }else{
          return [
            'code' => 0,
            'msg' => '不是提现中的微信零钱申请单，无法查询'
          ];
        }
    }

    /**
     * 转账失败
     */
    public static function transferFail($post)
    {
      if(empty($post['transfer_description'])) {
        return [
          'code' => 0,
          'msg' => '请填写转账说明'
        ];
      }
      // 标识提现失败
      Db::name('withdraw_apply')->where('id', $post['id'])->update([
        'status' => 4, // 提现失败
        'transfer_description' => $post['transfer_description'],
        'update_time' => time()
      ]);

      $withdraw_apply = Db::name('withdraw_apply')->where('id', $post['id'])->find();
      // 退回佣金
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
      return [
        'code' => 1,
        'msg' => '转账失败，提现金额已退回佣金账户'
      ];
    }

    /**
     * 转账成功
     */
    public static function transferSuccess($post)
    {
      if(empty($post['transfer_voucher'])) {
        return [
          'code' => 0,
          'msg' => '请上传转账凭证'
        ];
      }

      $post['transfer_voucher'] = UrlServer::getFileUrl($post['transfer_voucher']);

      if(empty($post['transfer_description'])) {
        return [
          'code' => 0,
          'msg' => '请填写转账说明'
        ];
      }
      // 标识提现成功
      Db::name('withdraw_apply')->where('id', $post['id'])->update([
        'status' => 3, // 提现成功
        'transfer_voucher' => $post['transfer_voucher'],
        'transfer_description' => $post['transfer_description'],
        'update_time' => time(),
        'transfer_time' => time()
      ]);

      return [
        'code' => 1,
        'msg' => '转账成功'
      ];
    }
}