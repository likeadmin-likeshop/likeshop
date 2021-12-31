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

use app\admin\logic\CommonLogic;
use app\admin\logic\MenuDecorateLogic;
use app\common\model\Menu_;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
class MenuDecorate extends AdminBase{
    /**
     * note 首页导航装修页面
     */
    public function indexList(){
      if($this->request->isAjax()) {
        $get = $this->request->get();
        return $this->_success('', MenuDecorateLogic::indexList($get));
      }
      $index_setting_logo = ConfigServer::get('decoration', 'index_setting_logo',1);
      $index_setting_hots = ConfigServer::get('decoration', 'index_setting_hots',1);
      $index_setting_news = ConfigServer::get('decoration', 'index_setting_news', 1);
      $index_setting_top_bg_image = ConfigServer::get('decoration', 'index_setting_top_bg_image', '');
      if(!empty($index_setting_top_bg_image)) {
        $index_setting_top_bg_image = UrlServer::getFileUrl($index_setting_top_bg_image);
      }
      $this->assign('index_setting_logo', $index_setting_logo);
      $this->assign('index_setting_hots', $index_setting_hots);
      $this->assign('index_setting_news', $index_setting_news);
      $this->assign('index_setting_top_bg_image', $index_setting_top_bg_image);
      return $this->fetch();
  }    

    /**
     * note 个人中心装修页面
     */
    // public function centerList(){
    //     $this->assign('type',2);
    //     return $this->fetch('lists');
    // }

    /**
   * note 个人中心装修页面
   */
    public function centerList(){
      if($this->request->isAjax()) {
        $get = $this->request->get();
        return $this->_success('', MenuDecorateLogic::centerList($get));
      }
      $center_setting_top_bg_image = ConfigServer::get('decoration', 'center_setting_top_bg_image', '');
      if(!empty($center_setting_top_bg_image)) {
        $center_setting_top_bg_image = UrlServer::getFileUrl($center_setting_top_bg_image);
      }
      $this->assign('center_setting_top_bg_image', $center_setting_top_bg_image);
      return $this->fetch();
    }


    /**
     * note 获取数据列表
     * create_time 2020/12/1 11:14
     */
    public function lists(){
        $get = $this->request->get('');
        if($this->request->isAjax()){
            $this->_success('', MenuDecorateLogic::lists($get));
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

    /**
     * 商品分类布局页
     */
    public function categoryLayout() {
      if($this->request->isPost()) {
        $post = $this->request->post();
        // 这里设置值要与显示时取值不同，这里相当于所有的
        ConfigServer::set('decoration', 'layout_no', $post['layout_no']);
        $this->_success('设置成功');
      }

      $category_layouts = ConfigServer::get('decoration', 'category_layout');
      $category_layouts_tips = ConfigServer::get('decoration', 'category_layout_tips');
      $layout_no = ConfigServer::get('decoration', 'layout_no', '');
      $this->assign('category_layouts', $category_layouts);
      $this->assign('category_layouts_tips', $category_layouts_tips);
      $this->assign('layout_no', $layout_no);
      return $this->fetch();
    }

    /**
     * 首页 - 其它设置
     */
    public function setIndexSetting()
    {
      $post = $this->request->post();
      ConfigServer::set('decoration', 'index_setting_logo', $post['logo']);
      ConfigServer::set('decoration', 'index_setting_hots', $post['hots']);
      ConfigServer::set('decoration', 'index_setting_news', $post['news']);
      ConfigServer::set('decoration', 'index_setting_top_bg_image', $post['top_bg_image']);
      $this->_success('设置成功');
    }

    /**
     * 我的 - 其它设置
     */
    public function setCenterSetting()
    {
      $post = $this->request->post();
      ConfigServer::set('decoration', 'center_setting_top_bg_image', $post['top_bg_image']);
      $this->_success('设置成功');
    }

    /**
     * 底部导航
     */
    public function bottomNavigation()
    {
      if($this->request->isAjax()) {
        $get = $this->request->get();
        $result = MenuDecorateLogic::bottomNavigation($get);
        return $this->_success('', $result);
      }
      $unSelectedTextColor = ConfigServer::get('decoration', 'navigation_setting_ust_color', '#000000');
      $selectedTextColor = ConfigServer::get('decoration', 'navigation_setting_st_color', '#000000');
      // $top_bg_image = ConfigServer::get('decoration', 'navigation_setting_top_bg_image', '');
      // if(!empty($top_bg_image)) {
      //   $top_bg_image = UrlServer::getFileUrl($top_bg_image);
      // }
      $this->assign('unSelectedTextColor', $unSelectedTextColor);
      $this->assign('selectedTextColor', $selectedTextColor);
      // $this->assign('top_bg_image', $top_bg_image);
      return $this->fetch();
    }

    /**
     * 添加底部导航
     */
    public function addNavigation()
    {
      if($this->request->isAjax()) {
        $post = $this->request->post();
        $result = MenuDecorateLogic::addNavigation($post);
        if($result['flag']) {
          $this->_success($result['msg']);
        }else{
          $this->_error($result['msg']);
        }
      }
      return $this->fetch();
    }

    /**
     * 编辑底部导航
     */
    public function editNavigation()
    {
      if($this->request->isAjax()) {
        $post = $this->request->post();
        $result = MenuDecorateLogic::editNavigation($post);
        if($result['flag']) {
          $this->_success($result['msg']);
        }else{
          $this->_error($result['msg']);
        }
      }
      $id = $this->request->get('id');
      $navigation = MenuDecorateLogic::getNavigation($id);
      $this->assign('navigation', $navigation);
      return $this->fetch();
    }

    /**
     * 删除底部导航
     */
    public function delNavigation()
    {
      if($this->request->isPost()) {
        $id = $this->request->post('id', '', 'intval');
        $result = MenuDecorateLogic::delNavigation($id);
        if($result) {
          return $this->_success('删除成功');
        }else{
          return $this->_error('删除失败');
        }
      }
    }

    /**
     * 底部导航 - 其他设置
     */
    public function setNavigationSetting()
    {
      $post = $this->request->post();
      ConfigServer::set('decoration', 'navigation_setting_ust_color', $post['unSelectedTextColor']);
      ConfigServer::set('decoration', 'navigation_setting_st_color', $post['selectedTextColor']);
      // ConfigServer::set('decoration', 'navigation_setting_top_bg_image', $post['top_bg_image']);
      $this->_success('设置成功');
    }
}