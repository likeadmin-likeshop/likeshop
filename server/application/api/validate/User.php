<?php
namespace app\api\validate;

use think\Db;
use think\Validate;

class User extends Validate
{
  protected $rule = [
    'pay_password' => 'require|length:4,8|alphaDash',  // 字母、数字、下划线、破折号
    'transferTo' => 'require|interfaceRestriction',
    'money' => 'require|gt:0'
  ];

  protected $message = [
    'pay_password.require' => '支付密码不能为空', 
    'pay_password.length' => '支付密码必须在4-8位之间', 
    'pay_password.alphaDash' => '支付密码须为字母、数字、下划线或破折号',
    'user_type.require' => '用户类型不能为空',
    'transferTo.require' => '收款人不能为空',
    'money.require' => '转账金额不能为空',
    'money.gt' => '转账金额必须大于0',

  ];

  /**
   * 设置支付密码
   */
  public function sceneSetPayPassword()
  {
    return $this->only(['pay_password']);
  }

  /**
   * 会员转账
   */
  public function sceneTransfer()
  {
    return $this->only(['pay_password', 'transferTo', 'money'])
                ->remove('pay_password',['length','alphaDash']);
  }

    /**
     * @notes 接口调用限制(3秒一次)
     * @author Tab
     * @date 2021/8/17 9:48
     */
  public function interfaceRestriction($value, $rule, $data)
  {
      // 查找最近一条转账记录
    $record = Db::name('user_transfer')->where('transfer_from_id', $data['user_id'])->order('id', 'desc')->find();
    if(empty($record)) {
       return true;
    }
    if(time() - $record['create_time'] < 3) {
        return '转账太频繁了，请3秒后再试';
    }
    return true;
  }
}