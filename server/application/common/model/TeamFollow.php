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
// | author: likeshop.cn.team-段誉
// +----------------------------------------------------------------------


namespace app\common\model;


use think\Model;

/**
 * 拼团参团
 * Class TeamFollow
 * @package app\common\model
 */
class TeamFollow extends Model
{
    // 关联用户模型
    public function user()
    {
        return $this->hasOne('user', 'id', 'follow_user_id')
            ->field('id,sn,nickname,avatar,level,mobile,sex,create_time');
    }
}