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

use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use think\facade\Config;

class Update extends Command
{
    protected function configure()
    {
        $this->setName('update')
            ->setDescription('更新代码、同步数据以后执行');
    }

    protected function execute(Input $input, Output $output)
    {
        $lists = Db::name('order')->alias('o')
            ->field('d.id as delivery_id,d.order_id,o.delivery_id as old_delivery_id')
            ->join('delivery d', 'd.order_id = o.id')
            ->where('o.delivery_id', '=', 0)
            ->select();

        if (empty($lists)){
            return true;
        }

        $update_num = 0;
        foreach ($lists as $item){
            Db::name('order')
                ->where('id', $item['order_id'])
                ->update([
                    'delivery_id' => $item['delivery_id'],
                ]);
            $update_num += 1;
        }
        return '修改'.$update_num.'条数据';
    }

}