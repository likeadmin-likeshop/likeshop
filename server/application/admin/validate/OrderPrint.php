<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
namespace app\admin\validate;
use think\Db;
use think\Validate;


class OrderPrint extends Validate{
    protected $rule = [
        'id'        => 'require|checkPrint',
    ];

    protected function checkPrint($value,$rule,$data){
        $printer_config = Db::name('printer_config')
                    ->where(['status'=>1])
                    ->find();

        if(!$printer_config){
            return '请先到小票打印里面配置打印设置';
        }
        $printer = Db::name('printer')
                    ->where(['type'=>$printer_config['id']])
                    ->find();
        if(!$printer){
            return '请先添加打印机';
        }
        return true;

    }
}