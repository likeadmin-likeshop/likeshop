<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\controller;


use app\admin\logic\AdPositionLogic;
use app\common\model\Ad;

class AdPosition extends AdminBase
{

    /**
     * 广告管理列表
     * @return mixed
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $result = AdPositionLogic::lists($get);
            $this->_success('获取成功', $result);
        }
        $type = \app\common\model\Ad::getAdTypeDesc(true);
        $this->assign('type', $type);
        return $this->fetch();
    }

    /**
     * 添加
     * @return mixed
     */
    public function add($client = '')
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\AdPosition.add');
            if ($result === true) {
                $result = AdPositionLogic::addAdPosition($post);
                if ($result) {
                    $this->_success('添加成功！');
                } else {
                    $this->_error('添加失败');
                }
            }
            $this->_error($result);
        }

        return $this->fetch();
    }


    /**
     * 编辑
     * @param string $id
     * @return mixed
     */
    public function edit($id = '')
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post, 'app\admin\validate\AdPosition.edit');
            if ($result === true) {
                $result = AdPositionLogic::editAdPosition($post);
                if ($result) {
                    $this->_success('编辑成功！');
                } else {
                    $this->_error('编辑失败');
                }
            }
            $this->_error($result);
        }

        $this->assign('info', AdPositionLogic::info($id));
        return $this->fetch();
    }


    /**
     * 删除
     * @param $delData
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $delData = $this->request->post('delData');
            $attr = $this->request->post('attr');
            $client = $this->request->post('client');
            $result = $this->validate($post, 'app\admin\validate\AdPosition.del');

            if ($result === true) {
//            dd($result);
                $result = AdPositionLogic::del($delData, $client, $attr);
                if ($result) {
                    $this->_success('删除成功');
                }
                $this->_error('删除失败');
            }
            $this->_error($result);
        }
    }

    /**
     * 修改状态
     */
    public function switchStatus()
    {
        $get = $this->request->get();
        $result = AdPositionLogic::switchStatus($get);
        if ($result) {
            $this->_success('修改成功');
        }
        $this->_error('修改失败');
    }

}