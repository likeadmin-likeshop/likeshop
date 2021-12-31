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
namespace app\api\logic;
use app\common\model\Pay;
use app\common\server\ConfigServer;
use think\Db;

class RechargeLogic{
    public static function getTemplate(){
        $list = Db::name('recharge_template')
                ->where(['del'=>0])
                ->order('sort desc')
                ->field('id,money,give_money,is_recommend')
                ->select();

        foreach ($list as &$item){
            $item['tips'] = '';
            if($item['give_money'] > 0){
                $item['tips'] = '充'.intval($item['money']).'赠送'.intval($item['give_money']).'元';
            }
        }
        return $list;
    }

    public static function recharge($user_id,$client,$post){
        $give_integral= ConfigServer::get('recharge', 'give_integral', 0);
        $give_growth  = ConfigServer::get('recharge', 'give_growth', 0);

        //选择运费模板
        if(isset($post['id'])){
            $template = Db::name('recharge_template')
                    ->where(['del'=>0,'id'=>$post['id']])
                    ->field('id,money,give_money')
                    ->find();
            $money = $template['money'];
            $give_money = $template['give_money'];


        }else{//自定义充值金额
            $template = Db::name('recharge_template')
                    ->where(['del'=>0,'money'=>$post['money']])
                    ->field('id,money,give_money')
                    ->find();
            $money = $post['money'];
            $give_money = 0;
            if($template){
                $money = $template['money'];
                $give_money = $template['give_money'];
            }

        }
        //赠送的积分和成长值
        $integral = $money * $give_integral;
        $growth = $money * $give_growth;
        $integral = $integral > 0 ? intval($integral) : 0;
        $growth = $growth > 0 ? intval($growth) : 0;

        $add_order = [
            'user_id'       => $user_id,
            'order_sn'      => createSn('recharge_order','order_sn'),
            'order_amount'  => $money,
            'order_source'  => $client,
            'pay_status'    => Pay::UNPAID,    //待支付状态；
            'pay_way'       => $post['pay_way'],
            'template_id'   => $template['id'] ?? 0,
            'give_money'    => $give_money,
            'give_integral' => $integral,
            'give_growth'   => $growth,
            'create_time'   => time(),
        ];

        $id = Db::name('recharge_order')->insertGetId($add_order);
        if($id){
            return Db::name('recharge_order')->where(['id'=>$id])->field('id,order_sn,give_integral,give_growth')->find();
        }
        return [];
    }

    /**
     * 充值记录
     */
    public static function rechargeRecord($get)
    {
      $list = Db::name('recharge_order')
        ->field('order_sn, order_amount, give_money, create_time')
        ->where([
          'user_id' => $get['user_id'],
          'pay_status' => 1
        ])
        ->order('create_time', 'desc')
        ->page($get['page_no'], $get['page_size'])
        ->select();

      $count = Db::name('recharge_order')
      ->where([
        'user_id' => $get['user_id'],
        'pay_status' => 1
      ])
      ->count();

      foreach($list as &$item) {
        $item['create_time'] = date('Y-m-d h:i:s', $item['create_time']);
        if($item['give_money'] > 0) {
          $item['desc'] = '充值'. $item['order_amount'] . '赠送' . $item['give_money'];
        }else{
          $item['desc'] = '充值'. $item['order_amount'];
        } 
        $item['total'] = $item['order_amount'] + $item['give_money']; // 充值金额 + 赠送金额
      }

      $result = [
        'count' => $count,
        'list' => $list,
        'more' =>  is_more($count, $get['page_no'], $get['page_size']),
        'count' => $count,
        'page_no' =>  $get['page_no'],
        'page_size' =>  $get['page_size']
      ];

      return $result;
    }
}