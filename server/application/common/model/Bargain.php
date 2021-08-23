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


namespace app\common\model;


use think\Model;

/**
 * 砍价活动模型
 * Class Bargain
 * @Author 张无忌
 * @package app\common\model
 */
class Bargain extends Model
{
    /**
     * Notes: 关联商品模型
     * @author 张无忌(2021/2/23 17:50)
     */
    public function goods()
    {
        return $this->hasOne('Goods', 'id', 'goods_id')
            ->field(['id', 'name', 'image', 'max_price', 'min_price']);
    }

    /**
     * Notes: 关联砍价参与人数
     * @author 张无忌(2021/2/23 18:06)
     */
    public function launchPeopleNumber()
    {
        return $this->hasMany('BargainLaunch', 'bargain_id', 'id');
    }

    /**
     * Notes: 关联砍价成功人数
     * @author 张无忌(2021/2/23 18:11)
     */
    public function successKnifePeopleNumber()
    {
        return $this->hasMany('BargainLaunch', 'bargain_id', 'id')
            ->where(['status'=>1]);
    }
}