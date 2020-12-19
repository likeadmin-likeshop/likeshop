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
// | Author: LikeShopTeam
// +----------------------------------------------------------------------


namespace app\admin\controller;


use app\admin\cache\RoleMenuCache;
use app\admin\logic\StatLogic;
use app\common\server\ConfigServer;
use think\Db;
use think\facade\Config;

class Index extends AdminBase
{
    /**
     * 后台前端全局界面
     * @return mixed
     */
    public function index()
    {
        //菜单渲染
        $role_menu_cache = new RoleMenuCache($this->admin_info['role_id'], ['role_id' => $this->admin_info['role_id']]);
        $menu = $role_menu_cache->set();
        $this->assign('menu', $menu);

        //开启右上角前端示例
        $app_trace = Config::get('app.app_trace');
        $this->assign('view_app_trace', $app_trace);

        //管理员名称
        $this->assign('admin_name', $this->admin_info['name']);

        //角色名称
        $role_name = Db::name('role')
            ->where(['id' => $this->admin_info['role_id']])
            ->value('name');
        $role_name = empty($role_name) ? '系统管理员' : $role_name;
        $this->assign('role_name', $role_name);

        // 网站配置
        $config = [
            'name' => ConfigServer::get('website', 'name'),
            'backstage_logo' => ConfigServer::get('website', 'backstage_logo'),
        ];
        $this->assign('config', $config);

        return $this->fetch();
    }

    /**
     * 工作台
     * @return mixed
     */
    public function stat()
    {
        if($this->request->isAjax()){
            $this->success('', StatLogic::graphData());
        }
        $this->assign('res', StatLogic::stat());
        return $this->fetch();
    }
}