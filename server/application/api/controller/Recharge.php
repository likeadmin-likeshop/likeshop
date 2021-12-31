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
use app\api\logic\RechargeLogic;
class Recharge extends ApiBase{
    public $like_not_need_login = ['rechargetemplate'];
    /**
     * note 充值模板
     * create_time 2020/10/24 15:56
     */
    public function rechargeTemplate(){
        $list = RechargeLogic::getTemplate();
        $this->_success('',$list);
    }

    /**
     * note 充值
     * create_time 2020/10/24 15:56
     */
    public function recharge(){
        $post = $this->request->post();
        $result = $this->validate($post,'app\api\validate\Recharge');

        if($result === true){
            $data = RechargeLogic::recharge($this->user_id,$this->client,$post);
            if($data){
                $this->_success('',$data);
            }
            $this->_error('信息获取错误');

        }
        $this->_error($result);

    }

    /**
     * 充值记录
     */
    public function rechargeRecord()
    {
      $get = $this->request->get();
      $get['page_no'] = $get['page_no'] ?? $this->page_no;
      $get['page_size'] = $get['page_size'] ?? $this->page_size;
      $get['user_id'] = $this->user_id;
      $result =  RechargeLogic::rechargeRecord($get);
      return $this->_success('',$result);
    }
}