<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

namespace app\common\command;

use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use think\facade\Config;
use think\facade\Log;

class Update extends Command
{
    protected function configure()
    {
        $this->setName('update')
            ->setDescription('更新代码、同步数据以后执行');
    }

    protected function execute(Input $input, Output $output)
    {
        //修改旧活动专区错误
        $lists = Db::name('activity_goods')->where(['del' => 0])->select();

        $temp = [];
        $count = 0;

        foreach ($lists as $k => $v) {
            $temp_key = $v['goods_id'].'_'.$v['activity_id'];
            if (in_array($temp_key, $temp)) {
                Db::name('activity_goods')
                    ->where(['del' => 0, 'id' => $v['id']])
                    ->update(['del' => 1]);
                $count += 1;
            } else {
                $temp[] = $temp_key;
            }
        }
        Log::write('处理活动专区错误,删除'.$count.'数据');

        // 更新file_cate表中type=null值的旧记录
        Db::name('file_cate')->whereNull('type')->update(['type' => 1]);
    }

}