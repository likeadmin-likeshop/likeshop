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
use app\admin\logic\GoodsCategoryLogic;
use app\admin\logic\CommonLogic;

class Common extends AdminBase{
    public function selectGoods(){
        if ($this->request->isAjax()){
            $get = $this->request->get();
            $goods_list = CommonLogic::getGoodsList($get,true);
            $this->success('',$goods_list);
        }
        $category_list = GoodsCategoryLogic::categoryTreeeTree();
        $this->assign('category_list', $category_list);
        return $this->fetch();
    }
}