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
namespace app\api\validate;
use app\common\server\ConfigServer;
use think\Db;
use think\Validate;

class Recharge extends Validate{
    protected $rule = [
        'id'        => 'checkRecharge',
        'money'     => 'checkRecharge',
        'pay_way'   => 'require',
    ];
    protected $message = [
        'pay_way.require'   => '请选择支付方式',
    ];
    protected function checkRecharge($value,$rule,$data){
        $open_racharge = ConfigServer::get('recharge','open_racharge',0);
        if(!$open_racharge){
            return '充值功能已关闭，无法充值';
        }

        if(empty($value) && $data['money']){
            return '请输入充值金额';
        }

        if(isset($data['id'])){
            $remplate = Db::name('recharge_template')
                        ->where(['id'=>$value,'del'=>0])
                        ->find();
            if(empty($remplate)){
                return '该充值模板不存在';
            }

        }else{
            $min_money = ConfigServer::get('recharge', 'min_money',0);

            if($data['money'] < $min_money){
                return '最低充值金额为'.$min_money;
            }

        }

        return true;
    }
}