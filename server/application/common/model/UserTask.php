<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------
namespace app\common\model;
use think\Model;

class UserTask extends Model{
    //会员任务
    const USERTASK = [
        [
            'type'          =>'SatisfactionIntegral',
            'name'          =>'满足积分{$num}',
            'real_name'     =>'积分数',
            'max_number'    =>0,
            'min_number'    =>0,
            'unit'          =>'分'
        ],
        [
            'type'          =>'ConsumptionAmount',
            'name'          =>'消费满{$num}',
            'real_name'     =>'消费金额',
            'max_number'    =>0,
            'min_number'    =>0,
            'unit'          =>'元'
        ],
        [
            'type'          =>'ConsumptionFrequency',
            'name'          =>'消费{$num}',
            'real_name'     =>'消费次数',
            'max_number'    =>0,
            'min_number'    =>0,
            'unit'          =>'次'
        ],
        [
            'type'          =>'CumulativeAttendance',
            'name'          =>'累计签到{$num}',
            'real_name'     =>'累计签到',
            'max_number'    =>365,
            'min_number'    =>1,
            'unit'          =>'天'
        ],
        [
            'type'          =>'SharingTimes',
            'name'          =>'分享给朋友{$num}',
            'real_name'     =>'分享给朋友',
            'max_number'    =>1000,
            'min_number'    =>1,
            'unit'          =>'次'
        ],
        [
            'type'          =>'InviteGoodFriends',
            'name'          =>'邀请好友{$num}成为下线',
            'real_name'     =>'邀请好友成为下线',
            'max_number'    =>1000,
            'min_number'    =>1,
            'unit'          =>'人'
        ],
        [
            'type'          =>'InviteGoodFriendsLevel',
            'name'          =>'邀请好友{$num}成为会员',
            'real_name'     =>'邀请好友成为会员',
            'max_number'    =>1000,
            'min_number'    =>1,
            'unit'          =>'人'
        ],
    ];

}