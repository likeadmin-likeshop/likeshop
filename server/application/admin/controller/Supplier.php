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
use app\admin\logic\SupplierLogic;

class Supplier extends AdminBase{
    /**
     *列表
     */
    public function lists(){
        if ($this->request->isAjax()) {
            $get = $this->request->get(); //获取get请求
            $this->_success('', SupplierLogic::lists($get)); //逻辑层处理渲染数据
        }
        return $this->fetch();  //渲染
    }

    /**
     *添加
     */
    public  function add(){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\Supplier'); //验证信息
            if($result=== true){
                SupplierLogic::add($post);  //逻辑层处理添加数据
                $this->_success('添加成功');
            }
            $this->_error($result);
        }
        return $this->fetch(); //渲染
    }

    /**
     *编辑
     */
    public function edit($id = ''){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\Supplier'); //验证信息
            if($result=== true){
                SupplierLogic::edit($post);  //逻辑层处理添加数据
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $this->assign('info', SupplierLogic::info($id)); //逻辑层处理数据,返回已有信息
        return $this->fetch(); //渲染
    }

    /**
     *删除
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = SupplierLogic::del($id); //逻辑层处理删除信息
            if ($result) {
                $this->_success('删除成功');
            }
            $this->_error('删除失败');
        }
    }
}