<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
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