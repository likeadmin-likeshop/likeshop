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
use app\admin\logic\RechargeLogic;

class Recharge extends AdminBase {
    /**
     * note 充值模板列表
     * create_time 2020/10/23 16:21
     */
    public function lists(){
        $get = $this->request->get();
        if($this->request->isAjax()){
            if($get['type'] == 1){
                $list = RechargeLogic::templatelists($get['type']);
            }else{
                $list = RechargeLogic::getRechargeConfig();
            }
            $this->_success('',$list);

        }
        return $this->fetch();
    }

    /**
     * note 设置充值
     * create_time 2020/10/24 11:34
     */
    public function setRecharge(){
        $post = $this->request->post();
        if($this->request->isAjax()){
            RechargeLogic::setRecharge($post);
            $this->_success('设置成功');
        }

    }
    /**
     * note 添加充值模板
     * create_time 2020/10/23 17:52
     */
    public function add(){

        if ($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\RechargeTemplate');
            if ($result === true){
                RechargeLogic::add($post);
                $this->_success('添加成功！');
            }
            $this->_error($result);

        }
        return $this->fetch();
    }
    /**
     * note 编辑充值模板
     * create_time 2020/10/23 17:51
     */
    public function edit($id){
        if ($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\RechargeTemplate');
            if ($result === true){
                RechargeLogic::edit($post);
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $info = RechargeLogic::getRechargeTemplate($id);
        $this->assign('info',$info);
        return $this->fetch();
    }

    /**
     * note 删除充值模板
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = RechargeLogic::del($id);
            if ($result) {
                $this->_success('删除成功');
            }
            $this->_error('删除失败');
        }
    }

    public function changeFields(){
        $table = 'recharge_template';

        $pk_name = 'id';
        $pk_value = $this->request->get('id');

        $field = $this->request->get('field');
        $field_value = $this->request->get('value');
        $result = CommonLogic::changeTableValue($table,$pk_name,$pk_value,$field,$field_value);
        if($result){
            $this->_success('修改成功');
        }
        $this->_error('修改失败');
    }


}