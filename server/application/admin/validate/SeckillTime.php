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
// | Author: LikeShopTeam
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
//                var_dump(date('y-m-d h:i:s',$start_time));
//                var_dump(date('y-m-d h:i:s',$item_start_time));
//                var_dump(date('y-m-d h:i:s',$item_end_time));
                return '秒杀时间段冲突';
            }
            if($end_time >= $item_start_time && $end_time < $item_end_time ){

                return '秒杀时间段冲突';
            }

        }
        return true;
    }
}