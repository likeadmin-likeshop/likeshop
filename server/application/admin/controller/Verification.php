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

namespace app\admin\controller;


use app\admin\logic\VerificationLogic;
use app\common\model\Client_;
use app\common\model\Order as CommonOrder;
use app\common\model\Pay;

class Verification extends AdminBase
{
    /**
     * @notes 自提订单列表
     * @return mixed
     * @author ljj
     * @date 2021/8/16 6:10 下午
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $params['admin_name'] = $this->admin_info['name'];
            $this->_success('', VerificationLogic::lists($params));
        }
        $this->assign('order_type', CommonOrder::getOrderType(true));
        $this->assign('pay_way', Pay::getPayWay(true));
        $this->assign('order_source', Client_::getClient(true));
        $this->assign('verification_status', CommonOrder::getVerificationStatus(true));

        return $this->fetch();
    }

    /**
     * @notes 导出自提订单列表
     * @author ljj
     * @date 2021/8/16 7:55 下午
     */
    public function exportFile()
    {
        $params = $this->request->get();
        $params['admin_name'] = $this->admin_info['name'];
        $this->_success('', VerificationLogic::exportFile($params));
    }

    /**
     * @notes 提货核销
     * @param $id
     * @return mixed
     * @author ljj
     * @date 2021/8/17 10:09 上午
     */
    public function verification($id)
    {
        if ($this->request->isAjax() && $this->request->isPost()) {
            $params = $this->request->post();
            $params['admin_info'] = $this->admin_info;
            $result = $this->validate($params, 'app\admin\validate\Verification.verification');
            if ($result !== true) {
                $this->_error($result);
            }

            $result = VerificationLogic::verification($params);
            if ($result !== true) {
                $this->_error('核销失败:' . $result);
            }
            $this->_success('核销成功');
        }

        $this->assign('detail', VerificationLogic::verificationInfo($id));
        return $this->fetch();
    }

    /**
     * @notes 核销查询
     * @param $id
     * @return mixed
     * @author ljj
     * @date 2021/8/17 11:47 上午
     */
    public function verificationQuery($id)
    {
        $this->assign('detail', VerificationLogic::verificationQuery($id));
        return $this->fetch();
    }
}