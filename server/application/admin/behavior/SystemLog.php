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
// | Author: LikeShop-令狐冲
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