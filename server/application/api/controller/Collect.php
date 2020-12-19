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
use app\api\logic\CollectLogic;

class Collect extends ApiBase{
    /**
     * note 商品收藏列表
     * create_time 2020/10/29 10:17
     */
    public function getCollectGoods(){
        $collect = CollectLogic::getCollectGoods($this->user_id,$this->page_no,$this->page_size);
        $this->success('获取成功',$collect);
    }
    /**
     * note 商品收藏操作
     * create_time 2020/10/29 10:17
     */
    public function handleCollectGoods(){
        $post = $this->request->post();
        $collect = CollectLogic::handleCollectGoods($post,$this->user_id);
        $this->success('获取成功',$collect);
    }
}