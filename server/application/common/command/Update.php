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