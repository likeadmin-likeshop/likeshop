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

namespace app\api\controller;

use app\api\logic\CartLogic;

/**
 * 购物车
 * Class Cart
 * @package app\api\controller
 */
class Cart extends ApiBase
{

    public function lists()
    {
        $this->_success('', CartLogic::lists($this->user_id));
    }


    public function add()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.add');
        if (true !== $check) {
            $this->_error($check);
        }
        $res = CartLogic::add($post['item_id'], $post['goods_num'], $this->user_id);
        if ($res === true) {
            $this->_success('加入成功');
        }
        $this->_error($res);
    }


    public function change()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.change');
        if ($check !== true) {
            $this->_error($check);
        }
        $res = CartLogic::change($post['cart_id'], $post['goods_num']);
        if ($res === true) {
            $this->_success();
        }
        $this->_error($res);
    }


    public function del()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.del');
        if (true !== $check) {
            $this->_error($check);
        }
        if (CartLogic::del($post['cart_id'], $this->user_id)) {
            $this->_success('删除成功');
        }
        $this->_error('删除失败');
    }


    public function selected()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.selected');
        if (true !== $check) {
            $this->_error($check);
        }
        CartLogic::selected($post, $this->user_id);
        $this->_success();
    }


    public function num()
    {
        $this->_success('',CartLogic::cartNum($this->user_id));
    }
}