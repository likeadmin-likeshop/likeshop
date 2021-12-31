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


namespace app\admin\controller;


use app\admin\cache\RoleMenuCache;
use app\admin\logic\StatLogic;
use app\admin\server\MenuServer;
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
        // 菜单渲染
        $menu = MenuServer::getMenuTree($this->admin_info['role_id']);
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
            'web_favicon' => ConfigServer::get('website', 'web_favicon'),
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
            $this->_success('', StatLogic::graphData());
        }
        $this->assign('res', StatLogic::stat());
        $this->assign('company_name',ConfigServer::get('copyright', 'company_name'));
        return $this->fetch();
    }
}