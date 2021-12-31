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
namespace app\api\controller;

use app\api\logic\UserLogic;
use think\Db;
use app\common\server\UrlServer;
use app\api\logic\SmsLogic;
use app\common\logic\SmsLogic as CommonSmsLogic;

class User extends ApiBase{

    /**
     * Notes:个人中心接口
     * @author:  2021/3/10 10:13
     */
    public function center(){
        $info = UserLogic::center($this->user_id);
        $this->_success('获取成功',$info);
    }

    /**
     * Notes:用户信息
     * @author:  2021/3/10 10:13
     */
    public function info()
    {
        $this->_success('获取成功', UserLogic::getUserInfo($this->user_id));
    }

    /**
     * Notes:设置用户手机号码
     * @author:  2021/3/10 10:13
     */
    public function setInfo()
    {
        $data = $this->request->post();
        $check = $this->validate($data, 'app\api\validate\UpdateUser.set');
        if (true !== $check) {
            $this->_error($check);
        }
        UserLogic::setUserInfo($this->user_id, $data);
        $this->_success('操作成功');
    }

    /**
     * Notes:账户流水
     * @author:  2021/3/10 10:13
     */
    public function accountLog(){
        $source = $this->request->get('source');
        $type = $this->request->get('type',0);
        $list = [];
        if($source){
            $list = UserLogic::accountLog($this->user_id, $source,$type, $this->page_no, $this->page_size);
        }
        $this->_success('获取成功',$list);
    }


    //更换手机号
    public function changeMobile()
    {
        $data = $this->request->post();
        //默认绑定手机号码
        $data['message_key'] = 'BDSJHM';
        $data['client'] = $this->client;
        $validate = 'app\api\validate\ChangeMobile.binding';
        //更换手机号码、替换短信key、验证规则
        if(isset($data['action']) && 'change' == $data['action']){
            $data['message_key'] = 'BGSJHM';
            $validate = 'app\api\validate\ChangeMobile';
        }
        $data['user_id'] = $this->user_id;
        $check = $this->validate($data, $validate);
        if (true !== $check) {
            $this->_error($check);
        }
        $res = UserLogic::changeMobile($this->user_id, $data);
        if($res){
            $this->_success('操作成功');
        }
        $this->_error('操作失败');
    }


    //获取微信手机号
    public function getMobile()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\WechatMobile');
        if (true !== $check) {
            $this->_error($check);
        }
        return UserLogic::getMobileByMnp($post);
    }


    //我的粉丝
    public function fans()
    {
        $get = $this->request->get();
        $page = $this->request->get('page_no', $this->page_no);
        $size = $this->request->get('page_size', $this->page_size);
        $this->_success('', UserLogic::fans($this->user_id, $get, $page, $size));
    }

    /**
     * note 我的钱包
     * create_time 2020/11/27 16:58
     */
    public function myWallet(){
        $info = UserLogic::myWallet($this->user_id);
        $this->_success('获取成功',$info);
    }

    /**
     * Notes: 我的拼团
     * @author 张无忌(2021/1/14 18:43)
     */
    public function myTeam()
    {
        $page = $this->request->get('page_no', $this->page_no);
        $size = $this->request->get('page_size', $this->page_size);
        $status = $this->request->get('status', -1);
        $info = UserLogic::myTeam($this->user_id, $status, $page, $size);
        $this->_success('获取成功',$info);
    }


    /**
     * Notes: 更新微信的用户信息
     * @author 段誉(2021/4/7 15:28)
     */
    public function setWechatInfo()
    {
        $data = $this->request->post();
        $check = $this->validate($data, 'app\api\validate\SetWechatUser');
        if (true !== $check) {
            $this->_error($check);
        }
        $res = UserLogic::updateWechatInfo($this->user_id, $data);
        if (true === $res) {
            $this->_success('操作成功');
        }
        $this->_error('操作失败');
    }

    /**
     * 设置支付密码
     */
    public function setPayPassword()
    {
      if($this->request->isPost()) {
        $data = $this->request->post();
        $result = $this->validate($data,'app\api\validate\User.setPayPassword');
        if(true !== $result){
            $this->_error($result);
        }
        $data['user_id'] = $this->user_id;
        $data['pay_password'] = md5(trim($data['pay_password']));
        $result = UserLogic::setPassword($data);
        if($result) {
          $this->_success('设置支付密码成功');
        }else{
          $this->_error('设置支付密码失败');
        }
      }else{
        $this->_error('请求类型错误');
      }
    }

    /**
     * 会员转账
     */
    public function transfer()
    {
      $data = $this->request->post();
      $result = $this->validate($data,'app\api\validate\User.transfer');
      if(true !== $result){
          $this->_error($result);
      }
      $data['user_id'] = $this->user_id;
      $result = UserLogic::transfer($data);
      if($result['code']) {
        $this->_success($result['msg']);
      }else{
        $this->_error($result['msg']);
      }

    }

    /**
     * 判断会员是否有设置支付密码
     */
    public function hasPayPassword()
    {
      $payPassword = Db::name('user')->where('id', $this->user_id)->value('pay_password');
      if($payPassword) {
        $this->_success('已设置支付密码');
      }else{
        // 应前端要求，未设置密码show返回0
        $this->_error('未设置支付密码', [], 0, 0);
      }
    }

    /**
     * 转账记录
     */
    public function transferRecord()
    {
      $get = $this->request->get();
      $get['page_no'] = $get['page_no'] ?? $this->page_no;
      $get['page_size'] = $get['page_size'] ?? $this->page_size;
      $get['user_id'] = $this->user_id;
      $get['type'] = $get['type'] ?? 'all';
      $result = UserLogic::transferRecord($get);
      $this->_success('', $result);
    }

    /**
     * 最近转账(取最近3条)
     */
    public function transferRecent()
    {
      $list = Db::name('user_transfer')->alias('ut')
        ->distinct(true)
        ->field('u.sn, u.nickname, u.avatar')
        ->leftJoin('user u', 'u.id=ut.transfer_to_id')
        ->where('ut.transfer_from_id', $this->user_id)
        ->order('ut.create_time', 'desc')
        ->limit(3)
        ->select();
      foreach($list as &$item) {
        $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
      }
      return $this->_success('', $list);
    }

    /**
     * 收款会员信息
     */
    public function transferToInfo()
    {
      $transferTo = $this->request->get('transferTo', '', 'trim');
      if(!$transferTo) {
        return $this->_error('收款会员信息不能为空');
      }
      $user = Db::name('user')->field('sn,nickname,avatar')->where('sn', $transferTo)->find();
      if(!$user) {
        $user  = Db::name('user')->field('sn,nickname,avatar')->where('mobile', $transferTo)->find();
        if(!$user){
          return $this->_error('收款会员不存在');
        }
      }
      $user['avatar'] = UrlServer::getFileUrl($user['avatar']);
      return $this->_success('', $user);
    }

    /**
     * 修改支付密码
     */
    public function changePayPassword()
    {
      $post = $this->request->post();
      if(empty($post['origin_pay_password'])) {
        return $this->_error('原支付密码不能为空');
      }
      if(empty($post['new_pay_password'])) {
        return $this->_error('新支付密码不能为空');
      }
      $user = Db::name('user')->where('id', $this->user_id)->find();
      if(md5(trim($post['origin_pay_password'])) != $user['pay_password']) {
        return $this->_error('原支付密码错误');
      }
      $result = Db::name('user')->where('id', $this->user_id)->update([
        'pay_password' => md5(trim($post['new_pay_password'])),
        'update_time' => time()
      ]);
      if($result) {
        return $this->_success('修改成功');
      }else{
        return $this->_error('修改失败');
      }
    }

    /**
     * 找回密码获取验证码
     */
    public function send(){
      $mobile = $this->request->post('mobile');
      $key = 'ZHZFMM'; // 找回支付密码
      $result = $this->validate(['mobile'=>$mobile,'key'=>$key],'app\api\validate\SmsSend');
      if($result !== true){
          $this->_error($result);
      }
      $send_result = SmsLogic::send($mobile,$key);
      if($send_result !== true){
          $this->_error($send_result);
      }
      $this->_success('发送成功');
  }

  /**
   * 找回支付密码
   */
  public function retrievePayPassword()
  {
    $post = $this->request->post();
    if(empty($post['mobile'])) {
      return $this->_error('手机号码不能为空');
    }
    if(empty($post['code'])) {
      return $this->_error('验证码不能为空');
    }
    if(empty($post['new_pay_password'])) {
      return $this->_error('新支付密码不能为空');
    }

    $sms_logic = new CommonSmsLogic('ZHZFMM',$post['mobile'],$post['code']);
    $check = $sms_logic->checkCode();
    //检查验证码是否正确
    if($check !== true){
        return $this->_error('验证码错误');
    }
    //标记验证码已验证
    $sms_logic->cancelCode();
    // 设置新的支付密码
    $result = Db::name('user')->where('id', $this->user_id)->update([
      'update_time' => time(),
      'pay_password' => md5(trim($post['new_pay_password']))
    ]);
    if($result) {
      return $this->_success('设置成功');
    }else{
      return $this->_error('设置失败');
    }
  }

}