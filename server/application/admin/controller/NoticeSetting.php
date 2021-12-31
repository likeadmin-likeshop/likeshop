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



use app\admin\logic\NoticeSettingLogic;
use app\common\model\NoticeSetting as NoticeSettingModel;
use think\Db;

class NoticeSetting extends AdminBase
{

    /**
     * Notes: 消息设置列表
     * @author 段誉(2021/4/27 17:17)
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $type = $get['type'] ?? NoticeSettingModel::NOTICE_USER;
            $this->_success('获取成功', NoticeSettingLogic::lists($type));
        }
        return $this->fetch();
    }



    /**
     * Notes: 设置系统通知模板
     * @author 段誉(2021/4/27 17:18)
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function set()
    {
        $id = $this->request->get('id');
        $type = $this->request->get('type');

        if ($this->request->isAjax()) {
            $post = $this->request->post();
            NoticeSettingLogic::set($post);
            $this->_success('操作成功');
        }

        $this->assign('info', NoticeSettingLogic::info($id, $type));
        $this->assign('type', $type);
        return $this->fetch('set_'.$type);
    }

    /**
     * 通知记录
     */
    public function record()
    {
        if($this->request->isAjax()) {
            $get = $this->request->get();
            $data = NoticeSettingLogic::record($get);
            $this->_success('', $data);
        }
        $param = $this->request->get();
        $this->assign('param', $param);
        return $this->fetch();
    }

    /**
     * 删除记录，直接删除（非软删除）
     */
    public function delRecord()
    {
        $id = $this->request->post('id', '', 'intval');
        if(empty($id)) {
            return $this->_error('参数缺失,删除失败');
        }
        $res = Db::name('notice')->delete($id);
        if($res) {
            return $this->_success('删除成功');
        }else{
            return $this->_error('删除失败');
        }

    }
}