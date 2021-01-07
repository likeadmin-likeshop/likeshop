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

use app\admin\logic\AfterSaleLogic;
use app\common\model\AfterSale as CommonAfterSale;

class AfterSale extends AdminBase
{
    /**
     * User: 意象信息科技 mjf
     * Desc: 列表
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('', AfterSaleLogic::lists($get));
        }
        $this->assign('status', CommonAfterSale::getStatusDesc(true));
        return $this->fetch();
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 详情
     */
    public function detail()
    {
        $id = $this->request->get('id');
        $detail = AfterSaleLogic::getDetail($id);
        $this->assign('detail', $detail);
        return $this->fetch();
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 同意
     */
    public function agree()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\AfterSale.agree');
            if (true !== $check) {
                $this->_error($check);
            }
            AfterSaleLogic::agree($post['id'],$this->admin_id);
            $this->_success('操作成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 拒绝
     */
    public function refuse()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\AfterSale.refuse');
            if (true !== $check) {
                $this->_error($check);
            }
            AfterSaleLogic::refuse($post,$this->admin_id);
            $this->_success('操作成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 收货
     */
    public function take()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\AfterSale.take');
            if (true !== $check) {
                $this->_error($check);
            }
            AfterSaleLogic::takeGoods($post,$this->admin_id);
            $this->_success('操作成功');
        }
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 拒绝收货
     */
    public function refuseGoods()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\AfterSale.refuse_goods');
            if (true !== $check) {
                $this->_error($check);
            }
            AfterSaleLogic::refuseGoods($post,$this->admin_id);
            $this->_success('操作成功');
        }
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 确认退款
     */
    public function confirm()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post('');
            $check = $this->validate($post, 'app\admin\validate\AfterSale.confirm');
            if (true !== $check) {
                $this->_error($check);
            }
            $res = AfterSaleLogic::confirm($post,$this->admin_id);
            if ($res === true){
                $this->_success('操作成功');
            }
            $this->_error($res);
        }
    }
}