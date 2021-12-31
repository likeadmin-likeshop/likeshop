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
use app\admin\logic\OaLogic;
use app\admin\logic\WeChatLogic;
use app\common\server\ConfigServer;

class Oa extends AdminBase {
    /**
     * note 设置公众号
     * create_time 2020/12/11 11:28
     */
    public function setOa(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            OaLogic::setOa($post);
            $this->_success('设置成功');
        }
        $oa = OaLogic::getOa();
        $this->assign('oa',$oa);
        return $this->fetch();
    }
    /**
     * note 微信菜单
     * create_time 2020/12/11 11:28
     */
    public function oaMenu(){
        $wechat_menu = ConfigServer::get('menu', 'wechat_menu',[]);
        $this->assign('menu',$wechat_menu);
        return $this->fetch();
    }

    /**
     * note 发布菜单
     * create_time 2020/12/11 11:28
     */
    public function pulishMenu(){
        $menu = $this->request->post('button');
        if(empty($menu)){
            $this->_error('请设置菜单');
        }
        $result = OaLogic::pulishMenu($menu);
        if($result['code'] == 1){
            $this->_success($result['msg']);
        }
        $this->_error($result['msg']);

    }

}