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