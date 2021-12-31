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