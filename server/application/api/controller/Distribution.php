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


use app\api\logic\DistributionLogic;
use app\common\model\User;

class Distribution extends ApiBase
{

    /**
     * 填写邀请码
     */
    public function code()
    {
        $code = $this->request->post('code');
        $data = [
            'user_id' => $this->user_id,
            'code' => $code,
        ];
        $result = $this->validate($data, 'app\api\validate\DistributionCode');
        if ($result !== true) {
            $this->_error($result, [], 0, 0);
        }
        $result = DistributionLogic::code($code, $this->user_id);
        if ($result !== true) {
            $this->_error($result, [], 0, 0);
        }
        $this->_success();
    }

    /**
     * 分销会员申请
     */
    public function apple()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $result = $this->validate($post, 'app\api\validate\DistributionApply');
        if ($result !== true) {
            $this->_error($result);
        }
        $result = DistributionLogic::apple($post,$this->user_id);
        if ($result !== true) {
            $this->_error($result);
        }
        $this->_success();
    }

    /**
     * 最新的分销会员申请详情
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function appleDetail()
    {
        $this->_success('',DistributionLogic::appleDetail($this->user_id));
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 我的分销上级
     */
    public function myLeader()
    {
        $this->_success('', DistributionLogic::myLeader($this->user_id));
    }


    /**
     * 分销推广主页信息
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $this->_success('', DistributionLogic::index($this->user_id));
    }



    /**
     * 分销订单
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function order()
    {
        $get = $this->request->get();
        $page = $this->request->get('page_no', $this->page_no);
        $size = $this->request->get('page_size', $this->page_size);
        $this->_success('', DistributionLogic::order($this->user_id, $get, $page, $size));
    }


    /**
     * 月度账单
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function monthBill()
    {
        $page = $this->request->get('page_no', $this->page_no);
        $size = $this->request->get('page_size', $this->page_size);
        $this->_success('', DistributionLogic::getMonthBill($this->user_id, $page, $size));
    }

    /**
     * 月度账单明细
     */
    public function monthDetail()
    {
        $get = $this->request->get();
        $page = $this->request->get('page_no', $this->page_no);
        $size = $this->request->get('page_size', $this->page_size);
        $this->_success('', DistributionLogic::getMonth($get, $this->user_id, $page, $size));
    }


    /**
     * Notes: 分销会员页面判断
     * @author 段誉(2021/2/1 18:45)
     */
    public function check()
    {
        $user = User::get($this->user_id);
        if ($user['freeze_distribution'] == 1) {
            $this->_error('您已被冻结');
        }

        if ($user['is_distribution'] == 1) {
            $this->_success('', '', 10001);//已是分销会员
        } else {
            $this->_success('', '',20001);//未是分销会员
        }
    }
}