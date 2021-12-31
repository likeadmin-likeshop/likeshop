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


namespace app\admin\behavior;


use think\Db;
use think\Request;

class SystemLog
{
    /**
     * 记录后台操作日志
     * @param Request $request
     */
    public function run(Request $request)
    {
        $admin_info = session('admin_info');
        if (!session('admin_info')) {
            return;
        }
        $data = [
            'admin_id' => $admin_info['id'],
            'account' => $admin_info['account'],
            'name' => $admin_info['name'],
            'create_time' => time(),
            'uri' => url(),
            'type' => $request->isPost() ? 'POST' : 'GET',
            'param' => json_encode($request->param(),JSON_UNESCAPED_UNICODE),
            'ip' => $request->ip(),
        ];
        Db::name('system_log')->insert($data);
    }
}