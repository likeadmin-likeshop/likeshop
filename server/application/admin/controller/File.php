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


use app\common\logic\FileCateLogic;
use app\common\server\FileServer;

class File extends AdminBase
{

    /**
     * 图片上传
     * @return mixed
     */
    public function image()
    {
        if ($this->request->isPost()) {
            $cate_id = $this->request->post('cate',0);
            $result = FileServer::image($cate_id);
            $this->successOrError($result);
        }
        $auth_tree = FileCateLogic::cateTree();
        $this->assign('list', json_encode($auth_tree));
        return $this->fetch();
    }

    /**
     * 图片列表
     * @param string $type
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function lists($type = '')
    {
        $cate_id = $this->request->get('cate', 0);
        $this->_success('', FileServer::lists($this->page_no, $this->page_size, $cate_id, $type));
    }

    /**
     * User: 意象信息科技 mjf
     * Desc: 删除图片
     */
    public function del()
    {
        $ids = $this->request->post('ids');
        FileServer::del($ids);
        $this->_success('操作成功');
    }

    /**
     * 其他文件上传
     */
    public function other()
    {
        if ($this->request->isPost()) {
            $sub_dir = $this->request->get('sub_dir','');
            $result = FileServer::other($sub_dir);
            $this->successOrError($result);
        }
        $this->_success();
    }
}