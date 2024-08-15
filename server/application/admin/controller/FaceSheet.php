<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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


use app\admin\logic\ExpressLogic;
use app\admin\logic\FaceSheetLogic;
use app\common\server\ConfigServer;

class FaceSheet extends AdminBase
{
    /**
     * @notes 面单设置
     * @return mixed
     * @throws @\think\Exception
     * @throws @\think\db\exception\DataNotFoundException
     * @throws @\think\db\exception\ModelNotFoundException
     * @throws @\think\exception\DbException
     * @throws @\think\exception\PDOException
     * @author 张无忌
     * @date 2021/9/24 17:32
     */
    public function setting()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            ConfigServer::set('faceSheet', 'type', $post['type']);
            ConfigServer::set('kd100', 'kd100_key', $post['kd100_key']);
            ConfigServer::set('kd100', 'kd100_secret', $post['kd100_secret']);
            ConfigServer::set('kd100', 'kd100_siid', $post['kd100_siid']);
            $this->_success('修改成功');
        }

        $faceSheet = ConfigServer::get('faceSheet');
        
        $detail = [
            'kd100_key'         => ConfigServer::get('kd100', 'kd100_key'),
            'kd100_secret'      => ConfigServer::get('kd100', 'kd100_secret'),
            'kd100_siid'        => ConfigServer::get('kd100', 'kd100_siid'),
        ];
        
        $this->assign('detail', $detail);
        $this->assign('faceSheet', $faceSheet);
        return $this->fetch();
    }

    /**
     * @notes 电子面单模板列表
     * @author 张无忌
     * @date 2021/9/24 17:35
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $list = FaceSheetLogic::lists($get);
            $this->_success('获取成功', $list);
        }

        return $this->fetch();
    }

    /**
     * @notes 新增电子面单模板
     * @author 张无忌
     * @date 2021/9/24 18:35
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FaceSheetLogic::add($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('新增成功');
        }

        $this->assign('express', ExpressLogic::all());
        return $this->fetch();
    }

    /**
     * @notes 编辑电子面单模板
     * @author 张无忌
     * @date 2021/9/24 18:35
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = FaceSheetLogic::edit($post);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('编辑成功');
        }

        $id = $this->request->get('id');
        $this->assign('detail', FaceSheetLogic::detail($id));
        $this->assign('express', ExpressLogic::all());
        return $this->fetch();
    }

    /**
     * @notes 删除电子面单模板
     * @author 张无忌
     * @date 2021/9/28 15:45
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id');
            $result = FaceSheetLogic::del($id);
            if ($result !== true) {
                $this->_error($result);
            }
            $this->_success('删除成功');
        }
    }
}