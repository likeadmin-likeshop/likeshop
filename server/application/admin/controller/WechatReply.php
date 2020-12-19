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
use app\admin\logic\CommonLogic;
use app\admin\logic\WechatReplyLogic;
use app\common\model\WeChat;

class WechatReply extends AdminBase{
    public function lists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = WechatReplyLogic::lists($get);
            $this->success('',$list);

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
                $this->success('添加超过',[]);
            }
            $this->error($result);

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
                $this->success('添加超过',[]);
            }
            $this->error($result);

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
            $this->success('删除成功');
        }
        $this->error($result);

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
            $this->success('修改成功');
        }
        $this->error('修改失败');
    }
}