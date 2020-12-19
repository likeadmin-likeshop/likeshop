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


class ActivityGoods extends Validate{
    protected $rule = [
        'activity_id'    => 'require',
        'goods_list'     => 'checkGoods',

    ];
    protected $message = [
        'activity_id.require'       => '请选择活动专区',

    ];
    public function sceneAdd()
    {
        $this->remove('id', ['require']);
    }

    protected function checkGoods($value,$rule,$data){
        $activity_goods = Db::name('activity_goods')
                        ->where(['activity_id'=>$data['activity_id'],'goods_id'=>$value[0]['goods_id'],'del'=>0])
                        ->find();
        if($activity_goods){
            return '该商品已在该活动专区中，请勿重复添加';
        }
        return true;
    }
}