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
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
namespace app\admin\controller;
use app\admin\logic\PrinterLogic;

class Printer extends AdminBase{
    /**
     * Notes:打印机列表
     * @return mixed
     */
    public function lists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = PrinterLogic::lists($get);
            $this->_success('',$list);
        }
        return $this->fetch();

    }

    /**
     * Notes:添加打印机
     * @return mixed
     */
    public function add(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\Printer.add');
            if(true === $result){
                $result = PrinterLogic::add($post);
                if(true === $result){
                    $this->_success('添加成功');
                }
            }
            $this->_error($result);
        }
        $this->assign('type_list',PrinterLogic::getTypeList());
        return $this->fetch();
    }

    /**
     * Notes:编辑打印机
     * @param $id 打印机id
     * @return mixed
     */
    public function edit($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\Printer');
            if(true === $result){
                $result = PrinterLogic::edit($post);
                if(true === $result){
                    $this->_success('添加成功');
                }
            }
            $this->_error($result);
        }
        $this->assign('type_list',PrinterLogic::getTypeList());
        $this->assign('detail',PrinterLogic::getPrinter($id));
        return $this->fetch();
    }

    /**
     * Notes:设置打印机配置
     * @return mixed
     */
    public function setConfig(){
        $id = $this->request->get('id');
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\SetConfig');
            if(true === $result){
                PrinterLogic::setConfig($post);
                $this->_success('设置成功');
            }
            $this->_error($result);

        }
        $this->assign('detail',PrinterLogic::getConfig($id));
        return $this->fetch('config');
    }

    /**
     * Notes:设置打印机配置
     */
    public function setTemplate(){
        $post = $this->request->post();
        $result = PrinterLogic::setTemplate($post);
        if(true == $result){
            $this->_success('模板设置成功');
        }
        $this->_error('模板设置失败');
    }

    /**
     * Notes:测试打印
     */
    public function testPrint(){
        $post = $this->request->post();
        $result = $this->validate($post,'app\admin\validate\Printer.config');
        if(true === $result){
            $result = PrinterLogic::testPrint($post);
            if(true === $result){
                $this->_success('打印成功');
            }
        }

        $this->_error($result);
    }

    public function del(){
        $id = $this->request->post('id');
        $result = $this->validate(['id'=>$id],'app\admin\validate\Printer.del');
        if(true === $result){
            $result = PrinterLogic::del($id);
            if($result === true){
                $this->_success('删除成功');
            }
            $this->error($result);
        }

        $this->_error($result);
    }

}