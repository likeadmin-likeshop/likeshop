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
        $this->success('', CartLogic::lists($this->user_id));
    }


    public function add()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.add');
        if (true !== $check) {
            $this->error($check);
        }
        $res = CartLogic::add($post['item_id'], $post['goods_num'], $this->user_id);
        if ($res === true) {
            $this->success('加入成功');
        }
        $this->error($res);
    }


    public function change()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.change');
        if ($check !== true) {
            $this->error($check);
        }
        $res = CartLogic::change($post['cart_id'], $post['goods_num']);
        if ($res === true) {
            $this->success();
        }
        $this->error($res);
    }


    public function del()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.del');
        if (true !== $check) {
            $this->error($check);
        }
        if (CartLogic::del($post['cart_id'], $this->user_id)) {
            $this->success('删除成功');
        }
        $this->error('删除失败');
    }


    public function selected()
    {
        $post = $this->request->post();
        $check = $this->validate($post, 'app\api\validate\Cart.selected');
        if (true !== $check) {
            $this->error($check);
        }
        CartLogic::selected($post, $this->user_id);
        $this->success();
    }


    public function num()
    {
        $this->success('',CartLogic::cartNum($this->user_id));
    }
}