<?php
namespace app\admin\logic;
/**
 * 功能: 微信企业付款
 * 用途：企业向微信用户个人付款
 * 证书：需要
 * 失败后一定要用【原来的商户订单号】去重试，不然有可能存在重复支付的风险！！！
 * 商户订单号: 必须唯一且需要为33位以下的数字或字母
 */

use EasyWeChat\Factory;
use app\common\model\Pay;
use app\common\server\ConfigServer;
use app\common\server\WeChatServer;
use think\Db;
use app\common\model\User;

class WechatCorporatePaymentLogic
{
  /**
   * 获取app
   */
  public static function getApp($client)
  {
    $config = WeChatServer::getPayConfigBySource($client)['config'];
    $app = Factory::payment($config);
    return $app;
  }

  /**
   * 企业付款
   */
  public static function pay($withdraw)
  {
    // 微信零钱最小提现金额 1元
    if($withdraw['left_money'] < 1) {
      return [
        'code' => 0,
        'msg' => '扣除手续费后提现金额不能小于1元'
      ];
    }
    // 每天最多可向同一用户付款10次
    $count = Db::name('withdraw_apply')
      ->whereTime('update_time', 'd') // 今天
      ->where('user_id', $withdraw['user_id'])
      ->where('type', 2) // 微信零钱
      ->where('status', '>=', 2) // 提现中、提现成功、提现失败
      ->count();
    if($count > 10) {
      return [
        'code' => 0,
        'msg' => '同一个用户一天最多可付款10次'
      ];
    }
    // 一天一个用户累计提现金额不能超过5000元
    $sum = Db::name('withdraw_apply')
      ->whereTime('update_time', 'd') // 今天
      ->where('user_id', $withdraw['user_id'])
      ->where('type', 2) // 微信零钱
      ->where('status', 'in', [2, 3]) // 提现中、提现成功
      ->sum('left_money');
    $sum = $sum + $withdraw['left_money'];
    if($sum > 5000) {
      return [
        'code' => 0,
        'msg' => '一天一个用户累计提现金额(不算手续费)不能超过5000元'
      ];
    }

    // 用户授权信息(同一个用户可能有多条，取client最小的一条)
    $userAuth = Db::name('user_auth')->where('user_id', $withdraw['user_id'])->order('client', 'asc')->find();
    if(!$userAuth) {
      // 无授权记录
      return [
        'code'=> 0,
        'msg' => '查询不到该用户的openid'
      ];
    }
    // 获取app
    $app = self::getApp($userAuth['client']);
    // 商户唯一订单号
    $partner_trade_no = $withdraw['sn'];
    // 发起企业付款
    $result = $app->transfer->toBalance([
      // 商户订单号，需保持唯一性(只能是字母或者数字，不能包含有符号)
      'partner_trade_no' => $partner_trade_no, 
      'openid' => $userAuth['openid'],
      // NO_CHECK：不校验真实姓名, FORCE_CHECK：强校验真实姓名
      'check_name' => 'NO_CHECK', 
      // 如果 check_name 设置为FORCE_CHECK，则必填用户真实姓名
      're_user_name' => '', 
      // 企业付款金额，单位为分 100分=1元
      'amount' => 100 * $withdraw['left_money'],
      // 企业付款操作说明信息。必填
      'desc' => '佣金提现'
    ]);
    // 马上将提现申请单状态修改为提现中,并记录微信返回信息，避免同一提现单多次点击发起多次企业付款
    $fiterField = ['appid','mch_appid', 'mchid', 'mch_id', 'openid']; // 过滤敏感字段
    $filterResult = array_filter($result, function($key) use ($fiterField) {
      return !in_array($key, $fiterField);
    }, ARRAY_FILTER_USE_KEY);
    Db::name('withdraw_apply')
      ->where('id', $withdraw['id'])
      ->update([
        'status' => 2, // 提现中
        'update_time' => time(),
        'pay_desc' => json_encode($filterResult)
      ]);
    // 通信标识 return_code
    if($result['return_code'] == 'SUCCESS') {
      // 业务结果 result_code
      if($result['result_code'] == 'SUCCESS') {
        // 企业付款成功, 更新提现申请单状态为提现成功并记录支付单号及支付时间
        Db::name('withdraw_apply')
          ->where('id', $withdraw['id'])
          ->update([
            'status' => 3, // 提现成功
            'payment_no' => $result['payment_no'],
            'payment_time' => strtotime($result['payment_time']),
            'update_time' => time()
          ]);
        return [
          'code' => 1,
          'msg' => '成功提现至微信零钱'
        ];
      }else{
        return [
          'code' => 0,
          'msg' => $result['err_code_des']
        ];
      }
    }else{
      // 提现至零钱失败,更新提现申请单为提现失败,并回退佣金
      Db::name('withdraw_apply')
          ->where('id', $withdraw['id'])
          ->update([
            'status' => 4, // 提现失败
            'update_time' => time()
          ]);
      //回退佣金
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
        'code' => 0,
        'msg' => $result['return_msg']
      ];
    }
  }

  /**
   * 查询企业付款
   */
  public static function search($withdraw)
  {
    $userAuth = Db::name('user_auth')->where('user_id', $withdraw['user_id'])->order('client', 'asc')->find();
    if(!$userAuth) {
      // 无授权记录
      return [
        'code'=> 0,
        'msg' => '查询不到该用户的openid'
      ];
    }
    $app = self::getApp($userAuth['client']);
    $partnerTradeNo = $withdraw['sn'];
    $result = $app->transfer->queryBalanceOrder($partnerTradeNo);
    $fiterField = ['appid','mch_appid', 'mchid', 'mch_id', 'openid']; // 过滤敏感字段
    $filterResult = array_filter($result, function($key) use ($fiterField) {
      return !in_array($key, $fiterField);
    }, ARRAY_FILTER_USE_KEY );
    // 记录查询结果
    Db::name('withdraw_apply')
      ->where('id', $withdraw['id'])
      ->update([
        'update_time' => time(),
        'pay_search_desc' => json_encode($filterResult)
      ]);
    if($result['return_code'] == 'SUCCESS') { // 通信标识
      if($result['result_code'] == 'SUCCESS') { // 另一个标识
        if($result['status'] == 'SUCCESS') { // 业务结果
          // 转账成功,标记提现申请单为提现成功,记录支付信息
          Db::name('withdraw_apply')
          ->where('id', $withdraw['id'])
          ->update([
            'status' => 3, // 提现成功
            'payment_no' => $result['detail_id'],
            'payment_time' => strtotime($result['payment_time']),
            'update_time' => time()
          ]);
          return [
            'code' => 1,
            'msg' => '已提现成功'
          ];
        }else if($result['status'] == 'FAILED'){
          // 转账失败
          Db::name('withdraw_apply')
          ->where('id', $withdraw['id'])
          ->update([
            'status' => 4, // 提现失败
            'update_time' => time()
          ]);
          //回退佣金
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
            'code' => 0,
            'msg' => '提现至微信零钱失败'
          ];
        }else{
          return [
            'code' => 0,
            'msg' => $result['reason']
          ];
        }
      }else{
        // 查看这个提现单今天是否有重新发起过付款，如果没有则尝试使用【相同的商户订单号】再次发起付款
        // $count = Db::name('withdraw_apply')
        // ->whereTime('repay_time', 'd') // 今天
        // ->where('id', $withdraw['id']) // 提现申请单号
        // ->count();
        // if(!$count) {
        //   // 记录重新发起支付的时间
        //   Db::name('withdraw_apply')->where('id', $withdraw['id'])->update([
        //     'repay_time' => time(),
        //     'update_time' => time()
        //   ]);
        //   return self::pay($withdraw);
        // }else{
        //   return [
        //     'code' => 0,
        //     'msg' => $result['err_code_des']
        //   ];
        // }
        return [
          'code' => 0,
          'msg' => $result['err_code_des']
        ];
      }
    }else{
      return [
        'code' => 0,
        'msg' => $result['return_msg']
      ];
    }
  }
}
