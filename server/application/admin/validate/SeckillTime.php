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
namespace app\admin\validate;
use think\Db;
use think\Validate;

class SeckillTime extends Validate{
    protected $rule = [
        'start_time'        => 'require',
        'end_time'          => 'require|checkTime',
    ];
    protected $message = [
        'start_time.require'        => '请选择开始时间',
        'end_time.require'          => '请选择结束时间',
    ];

    public function checkTime($value,$rule,$data){
        $start_time = strtotime(date('Y-m-d'.$data['start_time']));
        $end_time = strtotime(date('Y-m-d'.$value));
        if($start_time >= $end_time){
            return '开始时间不能大于结束时间';
        }
        $where[] = ['del','=',0];
        if(isset($data['id'])){
            $where[] = ['id','<>',$data['id']];
        }
        $time_list = Db::name('seckill_time')->where($where)->select();
        foreach ($time_list as $item){
            $item_start_time = strtotime(date('Y-m-d'.$item['start_time']));
            $item_end_time = strtotime(date('Y-m-d'.$item['end_time']));
            if($start_time >= $item_start_time && $start_time < $item_end_time ){

                return '秒杀时间段冲突';
            }
            if($end_time >= $item_start_time && $end_time < $item_end_time ){

                return '秒杀时间段冲突';
            }

        }
        return true;
    }
}