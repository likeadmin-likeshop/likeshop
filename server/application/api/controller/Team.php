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
// | author: likeshop.cn.team-段誉
// +----------------------------------------------------------------------


namespace app\api\controller;


use app\api\logic\TeamLogic;

/**
 * 拼团
 * Class Team
 * @package app\api\controller
 */
class Team extends ApiBase
{
    public $like_not_need_login = ['teamGoodsList'];

    // 拼团商品列表
    public function teamGoodsList()
    {
        $lists = TeamLogic::getTeamGoodsList($this->page_no, $this->page_size);
        if ($lists) {
            $this->_success('获取成功', $lists);
        } else {
            $this->_error(TeamLogic::getError());
        }
    }

    //参与拼团活动
    public function buy()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $post['client'] = $this->client;
        $check = $this->validate($post, 'app\api\validate\Team.add');
        if (true !== $check) {
            $this->_error($check);
        }

        TeamLogic::setUser($this->user_id);
        TeamLogic::setTeamId($post['team_id']);
        TeamLogic::setTeamGoodsItem($post['item_id']);
        TeamLogic::setTeamGoodsNum($post['goods_num']);
        TeamLogic::setIntegralConfig();
        $info = TeamLogic::calculateInfo($post, $this->user_id);
        if ($info === false){
            $this->_error(TeamLogic::getError());
        }

        if($post['action'] == 'info'){
            $this->_success('', $info);
        }

        $order = TeamLogic::buy($this->user_id, $info, $post);
        if ($order === false){
            $this->_error(TeamLogic::getError());
        }
        $this->_success('', $order);
    }


    //验证拼团
    public function check()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $check = $this->validate($post, 'app\api\validate\Team.check');
        if (true !== $check) {
            $this->_error($check);
        }
        $this->_success();
    }
}