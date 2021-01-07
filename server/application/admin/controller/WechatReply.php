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
use app\admin\logic\WechatReplyLogic;
use app\common\model\WeChat;

class WechatReply extends AdminBase{
    public function lists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = WechatReplyLogic::lists($get);
            $this->_success('',$list);

        }
        $type_list= Wechat::getCustomReply();
        $this->assign('type_list',$type_list);
        return $this->fetch();
    }
    public function add(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\WeChatReply.'.$post['reply_type']);

            if ($result === true){
                 WechatReplyLogic::add($post);
                $this->_success('添加超过',[]);
            }
            $this->_error($result);

        }
        $type = $this->request->get('type');
        $template = 'add_'.$type;
        return $this->fetch($template);
    }

    public function edit($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\WeChatReply.'.$post['reply_type']);

            if ($result === true){
                WechatReplyLogic::edit($post);
                $this->_success('添加超过',[]);
            }
            $this->_error($result);

        }
        $detail = WechatReplyLogic::getReply($id);
        $this->assign('detail',$detail);
        $template = 'edit_'.$detail['reply_type'];
        return $this->fetch($template);

    }
    public function del($id){
        $result = $this->validate(['id'=>$id],'app\admin\validate\WeChatReply.del');
        if ($result === true) {
            WechatReplyLogic::del($id);
            $this->_success('删除成功');
        }
        $this->_error($result);

    }

    /*
    * 修改字段
    */
    public function changeFields(){
        $pk_value = $this->request->post('id');
        $field = $this->request->post('field');
        $field_value = $this->request->post('value');
        $reply_type = $this->request->post('reply_type');
        $result = WechatReplyLogic::changeFields($pk_value, $field, $field_value,$reply_type);
        if ($result) {
            $this->_success('修改成功');
        }
        $this->_error('修改失败');
    }
}