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
namespace app\admin\controller;
use app\admin\logic\CommonLogic;
use app\admin\logic\MenuDecorateLogic;
use app\common\model\Menu_;
class MenuDecorate extends AdminBase{
    /**
     * note 小程序首页导航装修页面
     * create_time 2020/12/1 11:02
     */
    public function mnpIndexList(){
        $this->assign('client',1);
        $this->assign('type',1);
        return $this->fetch('lists');

    }
    /**
     * note 小程序个人中心装修页面
     * create_time 2020/12/1 11:02
     */
    public function mnpCenterList(){
        $this->assign('client',1);
        $this->assign('type',2);
        return $this->fetch('lists');
    }

    /**
     * note H5首页导航装修页面
     * create_time 2020/12/1 10:59
     */
    public function h5IndexList(){
        $this->assign('client',2);
        $this->assign('type',1);
        return $this->fetch('lists');
    }
    /**
     * note H5个人中心装修页面
     * create_time 2020/12/1 10:59
     */
    public function h5CenterList(){
        $this->assign('client',2);
        $this->assign('type',2);
        return $this->fetch('lists');
    }
    /**
     * note App首页导航装修
     * create_time 2020/12/1 11:04
     */
    public function appIndexList(){

        $this->assign('client',3);
        $this->assign('type',1);
        return $this->fetch('lists');
    }
    /**
     * note APP个人中心装修页面
     * create_time 2020/12/1 11:04
     */
    public function appCenterList(){
        $this->assign('client',3);
        $this->assign('type',2);
        return $this->fetch('lists');

    }

    /**
     * note 获取数据列表
     * create_time 2020/12/1 11:14
     */
    public function lists(){
        $client = $this->request->get('client');
        $type = $this->request->get('type');
        if($this->request->isAjax()){
            $this->_success('', MenuDecorateLogic::lists($client,$type));
        }
    }
    /**
     * note 添加菜单
     * create_time 2020/12/1 11:00
     */
    public function add(){

        if($this->request->isAjax()){
            $post_data = $this->request->post();
            $post_data['del'] = 0;
            $result = $this->validate($post_data, 'app\admin\validate\MenuDecorate.add');
            if($result === true){
                MenuDecorateLogic::add($post_data); //逻辑层处理添加数据
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $type = $this->request->param('type',1);
        $menu_list = Menu_::getMenuContent($type,true);
        $this->assign('menu_list',$menu_list);
        return $this->fetch();
    }

    /**
     * note 编辑菜单
     * create_time 2020/12/1 11:00
     */
    public function edit(){
        if($this->request->isAjax()){
            $post_data = $this->request->post();
            $post_data['del'] = 0;
            $result = $this->validate($post_data, 'app\admin\validate\MenuDecorate.edit');
            if($result === true){
                MenuDecorateLogic::edit($post_data); //逻辑层处理添加数据
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $id = $this->request->get('id');
        $decorate = MenuDecorateLogic::getMenuDecorate($id);
        $menu_list = Menu_::getMenuContent($decorate['decorate_type'],true);
        $this->assign('menu_list',$menu_list);
        $this->assign('decorate',$decorate);
        return $this->fetch();
    }

   /**
    * note 删除菜单
    * create_time 2020/12/1 11:00
    */
    public function del($id){
        if ($this->request->isAjax()) {
            $result = $this->validate(['id' => $id], 'app\admin\validate\MenuDecorate.del');
            if ($result === true) {
                MenuDecorateLogic::del($id);
                $this->_success('删除成功');
            }
            $this->_error($result);
        }
    }
    /*
     * 批量删除菜单
     */
    public function batchDel(){
        if ($this->request->isAjax()) {
            $ids = $this->request->post('id');
            $result = $this->validate(['id' => $ids], 'app\admin\validate\MenuDecorate.del');
            if ($result === true) {
                MenuDecorateLogic::batchDelMenuDecorate($ids);
                $this->_success('删除成功');
            }
            $this->_error($result);
        }
    }

    /*
     * 复制菜单
     */
    public function copy(){
        $id = $this->request->get('id');
        $decorate = MenuDecorateLogic::getMenuDecorate($id);
        $menu_list = Menu_::getIndexMenu(true);
        if($decorate['decorate_type'] == 2){
            $menu_list = Menu_::getCentreMenu(true);
        }
        $this->assign('menu_list',$menu_list);
        $this->assign('decorate',$decorate);
        return $this->fetch();
    }
    /*
     * 修改字段
     */
    public function changeFields(){
        $table = $this->request->controller();
        $pk_name = 'id';
        $pk_value = $this->request->post('id');

        $field = $this->request->post('field');
        $field_value = $this->request->post('value');
        $result = CommonLogic::changeTableValue($table, $pk_name, $pk_value, $field, $field_value);
        if ($result) {
            $this->_success('修改成功');
        }
        $this->_error('修改失败');
    }

}