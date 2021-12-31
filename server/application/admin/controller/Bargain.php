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


namespace app\admin\controller;


use app\admin\logic\BargainLogic;
use app\common\model\BargainLaunch;
use app\common\server\ConfigServer;

class Bargain extends AdminBase
{
    /**
     * Notes: 砍价活动 商品列表
     * @author 张无忌(2021/1/30 15:06)
     * @return mixed
     */
    public function activity()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = BargainLogic::activity($get);
            $this->_success('获取成功', $lists);
        }

        return $this->fetch();
    }

    /**
     * Notes: 新增活动 商品
     * @author 张无忌(2021/1/30 15:21)
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $check = $this->validate($post, 'app\admin\validate\Bargain.add');
            if ($check !== true) {
                $this->_error($check);
            }
            if (BargainLogic::add($post)) {
                $this->_success('新增成功');
            } else {
                $error = BargainLogic::getError() ?? '新增失败';
                $this->_error($error);
            }
        }

        return $this->fetch();
    }

    /**
     * Notes: 编辑活动 商品
     * @author 张无忌(2021/1/30 15:21)
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $check = $this->validate($post, 'app\admin\validate\Bargain');
            if ($check !== true) {
                $this->_error($check);
            }
            if (BargainLogic::edit($post)) {
                $this->_success('编辑成功');
            } else {
                $error = BargainLogic::getError() ?? '编辑失败';
                $this->_error($error);
            }
        }

        $id = $this->request->get('id');
        $detail = BargainLogic::getDetail($id);
        $this->assign('detail', $detail);
        return $this->fetch();
    }

    /**
     * Notes: 删除
     * @author 张无忌(2021/1/12 15:52)
     * @return mixed
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id');
            if (BargainLogic::softDelete($id)) {
                $this->_success('删除成功');
            } else {
                $error = BargainLogic::getError() ?? '删除失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 切换状态
     * @author 张无忌(2021/1/13 18:01)
     */
    public function switchStatus()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (BargainLogic::switchStatus($post)) {
                $this->_success('更新成功');
            } else {
                $error = BargainLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 发起砍价列表
     * @author 张无忌(2021/1/30 16:51)
     */
    public function launch()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = BargainLogic::getLaunch($get);
            $this->_success('Ok', $lists);
        }

        $bargain_id = $this->request->get('bargain_id', 0);
        $this->assign('bargain_id', $bargain_id);
        return $this->fetch();
    }

    /**
     * Notes: 砍价详细
     * @author 张无忌(2021/1/30 17:13)
     * @return mixed
     */
    public function detail()
    {
        $id = $this->request->get('id');
        $detail = BargainLogic::getLaunchDetail($id);
        $this->assign('detail', $detail);
        return $this->fetch();
    }

    /**
     * Notes: 砍价订单记录
     * @author 张无忌(2021/2/24 15:59)
     */
    public function knifeOrderRecord() {
        $launch_id = $this->request->get('launch_id');
        $get = $this->request->get();
        $lists = BargainLogic::getKnifeOrderRecord($launch_id, $get);
        $this->_success('获取成功', $lists);
    }

    /**
     * Notes: 砍价助力记录
     * @author 张无忌(2021/2/24 15:58)
     */
    public function knifeRecord()
    {
        $launch_id = $this->request->get('launch_id');
        $get = $this->request->get();
        $lists = BargainLogic::getKnifeRecord($launch_id, $get);
        $this->_success('获取成功', $lists);
    }

    /**
     * Notes: 砍价设置
     * @author 张无忌(2021/2/24 18:16)
     * @return mixed
     */
    public function set()
    {
        if ($this->request->isAjax()) {
            $payment_limit_time = $this->request->post('payment_limit_time', 0);
            try {
                ConfigServer::set('bargain', 'payment_limit_time', $payment_limit_time);
            } catch (\Exception $e) {
                $this->_error('设置失败');
            }
            $this->_success('设置成功');
        }

        $payment_limit_time = ConfigServer::get('bargain', 'payment_limit_time', 0);
        $this->assign('payment_limit_time', $payment_limit_time);
        return $this->fetch();
    }
}