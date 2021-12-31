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
use app\admin\logic\SeckillLogic;
class Seckill extends AdminBase{

    public function lists(){
        $seckill_time = SeckillLogic::getTimeAll();
        $this->assign('seckill',$seckill_time);
        return $this->fetch();
    }
    /**
     * note 秒杀商品
     * create_time 2020/11/13 16:01
     */
    public function goodsLists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = SeckillLogic::goodsList($get);
            $this->_success('',$list);
        }
    }
    /**
     * note 秒杀时间
     * create_time 2020/11/13 16:01
     */
    public function timeLists(){
        if($this->request->isAjax()){
            $get= $this->request->get();
            $list = SeckillLogic::timeList($get);
            $this->_success('',$list);
        }
    }
    /**
     * note 添加秒杀时间段
     * create_time 2020/11/13 16:01
     */
    public function addTime(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\SeckillTime');
            if($result === true){
                SeckillLogic::addTime($post);
                $this->_success('新增成功','');
            }
            $this->_error($result,'');


        }
        return $this->fetch();
    }

    /**
     * note 编辑秒杀时间段
     * create_time 2020/11/13 16:02
     */
    public function editTime($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\SeckillTime');
            if($result === true){
                SeckillLogic::editTime($post);
                $this->_success('编辑成功','');
            }
            $this->_error($result,'');
        }
        $this->assign('detail',SeckillLogic::getTime($id));
        return $this->fetch();
    }

    /**
     * note 删除秒杀时间段
     * create_time 2020/11/13 16:02
     */
    public function delTime(){
        if($this->request->isAjax()){
            $id = $this->request->post('id');
            $result = SeckillLogic::delTime($id);

            if($result == true){
                $this->_success('删除成功','');
            }
            return $this->_error('删除失败','');


        }
    }
    /**
     * note 添加秒杀商品
     * create_time 2020/11/13 16:02
     */
    public function addGoods(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $post['item'] = form_to_linear($post);
            $result = $this->validate($post,'app\admin\validate\SeckillGoods.add');
            if($result === true){
                $result = SeckillLogic::addGoods($post);
                if($result){
                    $this->_success('新增成功','');
                }
                $result = '新增失败';
            }
            $this->_error($result);

        }

        $seckill_time = SeckillLogic::getTimeAll();
        $this->assign('seckill',$seckill_time);
        return $this->fetch();
    }
    /**
     * note 编辑秒杀商品
     * create_time 2020/11/13 16:02
     */
    public function editGoods(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $post['item'] = form_to_linear($post);
            $result = $this->validate($post,'app\admin\validate\SeckillGoods.edit');
            if($result === true){
                $result = SeckillLogic::editGoods($post);
                if($result){
                    $this->_success('编辑成功','');
                }
                $result = '编辑失败';
            }
            $this->_error($result);


        }
        $id = $this->request->get('id');
        $seckill_id = $this->request->get('seckill_id');

        $detail = SeckillLogic::getSeckillGoods($id,$seckill_id);
        $seckill_time = SeckillLogic::getTimeAll();
        $this->assign('seckill',$seckill_time);
        $this->assign('detail',$detail);
        return $this->fetch();
    }

    /**
     * note 删除秒杀商品
     * create_time 2020/11/13 16:05
     */
    public function delGoods(){
        if($this->request->isAjax()){
            $id = $this->request->post('id');
            $seckill_id = $this->request->post('seckill_id');
            $result = SeckillLogic::delGoods($id,$seckill_id);

            if($result == true){
                $this->_success('删除成功','');
            }
            return $this->_error('删除失败','');
        }
    }

}