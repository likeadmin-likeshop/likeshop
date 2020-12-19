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
use app\admin\logic\SupplierLogic;

class Supplier extends AdminBase{
    /**
     *列表
     */
    public function lists(){
        if ($this->request->isAjax()) {
            $get = $this->request->get(); //获取get请求
            $this->success('', SupplierLogic::lists($get)); //逻辑层处理渲染数据
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
                $this->success('添加成功');
            }
            $this->error($result);
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
                $this->success('修改成功');
            }
            $this->error($result);
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
                $this->success('删除成功');
            }
            $this->error('删除失败');
        }
    }
}