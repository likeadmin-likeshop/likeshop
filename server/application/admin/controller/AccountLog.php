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
use app\admin\logic\AccountLogLogic;
use think\helper\Time;

class AccountLog extends AdminBase{
    /**
     * note 资金记录
     * create_time 2020/11/20 17:36
     */
    public function capitalList(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = AccountLogLogic::lists($get);
            $this->_success('',$list);
        }
        $this->assign('order_source',AccountLogLogic::orderSourceList(1));
        $this->assign('time',AccountLogLogic::getTime());
        return $this->fetch();
    }
    /**
     * note 积分记录
     * create_time 2020/11/20 17:36
     */
    public function integralList(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = AccountLogLogic::lists($get);
            $this->_success('',$list);
        }
        $this->assign('order_source',AccountLogLogic::orderSourceList(2));
        $this->assign('time',AccountLogLogic::getTime());
        return $this->fetch();
    }

    /**
     * note 成长值记录
     * create_time 2020/11/20 17:36
     */
    public function growthList(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = AccountLogLogic::lists($get);
            $this->_success('',$list);
        }
        $this->assign('order_source',AccountLogLogic::orderSourceList(3));
        $this->assign('time',AccountLogLogic::getTime());
        return $this->fetch();
    }



    /**
     * Notes: 佣金记录
     * @author 段誉(2021/5/15 11:36)
     * @return mixed
     */
    public function withdrawList()
    {
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = [];
            switch ($get['type']) {
                case 'distribution':
                    $list = AccountLogLogic::getDistributionLog($get);
                    break;
            }
            $this->_success('',$list);
        }
        return $this->fetch();
    }


    /**
     * Notes: 佣金统计
     * @author 段誉(2021/5/15 11:36)
     */
    public function withdrawTotalCount()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $result = AccountLogLogic::withdrawTotalCount($get);
            $this->_success('OK', $result);
        }
    }

}