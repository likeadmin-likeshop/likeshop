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

use app\api\logic\WithdrawLogic;

class Withdraw extends ApiBase
{

    //提现申请
    public function apply()
    {
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $check = $this->validate($post, 'app\api\validate\Withdraw.apply');
        if (true !== $check) {
            $this->_error($check);
        }
        return WithdrawLogic::apply($this->user_id, $post);
    }

    //提现配置
    public function config()
    {
        $data = WithdrawLogic::config($this->user_id);
        $this->_success('', $data);
    }


    //提现记录
    public function records()
    {
        $get = $this->request->get();
        $page = $this->request->get('page_no', $this->page_no);
        $size = $this->request->get('page_size', $this->page_size);
        $res = WithdrawLogic::records($this->user_id, $get, $page, $size);
        $this->_success('', $res);
    }


    //提现详情
    public function info()
    {
        $get = $this->request->get('');
        $check = $this->validate($get, 'app\api\validate\Withdraw.info');
        if (true !== $check) {
            $this->_error($check);
        }
        $this->_success('', WithdrawLogic::info($get['id'], $this->user_id));
    }
}