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

namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;

class UserDistribution extends Command
{
    protected function configure()
    {
        $this->setName('user_distribution')
            ->setDescription('更新会员分销信息');
    }

    protected function execute(Input $input, Output $output)
    {
        $users = Db::name('user u')
            ->field('d.*')
            ->join('user_distribution d', 'd.user_id = u.id')
            ->where(['u.del' => 0])
            ->select();

        if (!$users){
            return true;
        }

        foreach ($users as $user){

            //粉丝数量
            $where1 = [
                ['first_leader', '=', $user['user_id']],
            ];
            $where2 = [
                ['second_leader', '=', $user['user_id']],
            ];
            $fans = Db::name('user')
                ->whereOr([$where1,$where2])
                ->count();

            //分销订单信息
            $distribution = Db::name('distribution_order_goods')
                ->field('sum(money) as money, count(id) as order_num')
                ->where(['user_id' => $user['user_id']])
                ->find();

            $data = [
                'distribution_order_num' => $distribution['order_num'] ?? 0,
                'distribution_money' => $distribution['money'] ?? 0,
                'fans' => $fans,
                'update_time' => time(),
            ];

            //更新会员分销信息表
            Db::name('user_distribution')
                ->where('user_id', $user['user_id'])
                ->update($data);
        }
    }

}