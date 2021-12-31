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

namespace app\admin\logic;


use app\common\model\Footprint;
use app\common\server\ConfigServer;

class FootprintLogic
{
    // 列表
    public static function lists()
    {
        $footprintModel = new Footprint();
        return $footprintModel->select();
    }

    // 获取详情
    public static function info($id)
    {
        $footprintModel = new Footprint();
        return $footprintModel->where(['id'=>(int)$id])->find();
    }

    public static function edit($post)
    {
        try {
            $footprintModel = new Footprint();
            $footprintModel->where(['id' => (int)$post['id']])
                ->update(['status' => $post['status']]);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function set($post)
    {
        try {
            ConfigServer::set('footprint', 'footprint_duration', $post['duration']);
            ConfigServer::set('footprint', 'footprint_status', $post['status']);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}