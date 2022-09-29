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