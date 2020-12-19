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
            $this->success('设置成功');
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
            $this->error('请设置菜单');
        }
        $result = OaLogic::pulishMenu($menu);
        if($result['code'] == 1){
            $this->success($result['msg']);
        }
        $this->error($result['msg']);

    }

}