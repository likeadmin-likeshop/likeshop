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


use app\admin\logic\LuckDrawLogic;
use app\common\server\ConfigServer;
use app\common\model\Luckdraw as LuckdrawModel;

class LuckDraw extends AdminBase
{
    /**
     * Notes: 查看页面
     * @author 张无忌(2021/1/25 11:08)
     * @return mixed
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = LuckDrawLogic::lists($get);
            $this->_success('获取成功', $lists);
        }

        // 获取抽奖设置信息
        $this->assign('setConfig', [
            'limit'  => ConfigServer::get('luckdraw', 'limit', 0),
            'need'  => ConfigServer::get('luckdraw', 'need', 0),
            'rule'   => ConfigServer::get('luckdraw', 'rule', ''),
            'status' => ConfigServer::get('luckdraw', 'status', 0),
            'show_win' => ConfigServer::get('luckdraw', 'show_win', 0)
        ]);

        return $this->fetch();
    }

    /**
     * Notes: 添加奖品
     * @author 张无忌(2021/1/25 11:08)
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $validate = $this->validate($post, 'app\admin\validate\LuckDraw.add');
            if ($validate !== true) {
                $this->_error($validate);
            }
            if (LuckDrawLogic::add($post)) {
                $this->_success('新增成功');
            }
            $error = LuckDrawLogic::getError() ?: '新增失败';
            $this->_error($error);
        }
        $this->assign('prizes', LuckdrawModel::getPrizeDesc(true));
        $this->assign('coupon', LuckDrawLogic::coupon());
        return $this->fetch();
    }

    /**
     * Notes: 编辑奖品
     * @author 张无忌(2021/1/25 11:08)
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $validate = $this->validate($post, 'app\admin\validate\LuckDraw');
            if ($validate !== true) {
                $this->_error($validate);
            }
            if (LuckDrawLogic::edit($post)) {
                $this->_success('编辑成功');
            }
            $error = LuckDrawLogic::getError() ?: '编辑失败';
            $this->error($error);
        }

        $id = $this->request->get('id');
        $this->assign('prizes', LuckdrawModel::getPrizeDesc(true));
        $this->assign('coupon', LuckDrawLogic::coupon());
        $this->assign('detail', LuckDrawLogic::detail($id));
        return $this->fetch();
    }

    /**
     * Notes: 删除
     * @author 张无忌(2021/1/26 11:19)
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id', 0, 'intval');
            if (LuckDrawLogic::del($id)) {
                $this->_success('删除成功');
            }
            $error = LuckDrawLogic::getError() ?: '删除失败';
            $this->_error($error);
        }
    }

    public function switchStatus()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (LuckDrawLogic::switchStatus($post)) {
                $this->_success('更新成功');
            } else {
                $error = LuckDrawLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 更新排序
     * @author 张无忌(2021/1/28 10:21)
     */
    public function sort()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            if (LuckDrawLogic::updateSort($post)) {
                $this->_success('更新成功');
            } else {
                $error = LuckDrawLogic::getError() ?? '更新失败';
                $this->_error($error);
            }
        }
    }

    /**
     * Notes: 设置抽奖规则
     * @author 张无忌(2021/1/25 11:08)
     */
    public function set()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = LuckDrawLogic::set($post);
            if (!$result) {
                $error = LuckDrawLogic::getError() ?: '设置失败';
                $this->_error($error);
            }
            $this->_success('更新成功');
        }
    }

    /**
     * Notes: 抽奖记录
     * @author 张无忌(2021/1/25 11:08)
     */
    public function record()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = LuckDrawLogic::record($get);
            $this->_success('OK', $lists);
        }
    }
}