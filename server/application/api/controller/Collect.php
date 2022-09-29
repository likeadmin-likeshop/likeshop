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
namespace app\api\controller;
use app\api\logic\CollectLogic;

class Collect extends ApiBase{
    /**
     * note 商品收藏列表
     * create_time 2020/10/29 10:17
     */
    public function getCollectGoods(){
        $collect = CollectLogic::getCollectGoods($this->user_id,$this->page_no,$this->page_size);
        $this->_success('获取成功',$collect);
    }
    /**
     * note 商品收藏操作
     * create_time 2020/10/29 10:17
     */
    public function handleCollectGoods(){
        $post = $this->request->post();
        $collect = CollectLogic::handleCollectGoods($post,$this->user_id);
        $this->_success('获取成功',$collect);
    }
}