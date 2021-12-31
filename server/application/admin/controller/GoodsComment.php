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
use app\admin\logic\GoodsCommentLogic;

class GoodsComment  extends AdminBase{

    /**
     * 列表
     */
    public function lists(){
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('', GoodsCommentLogic::lists($get));
        }
        return $this->fetch();
    }

    /**
     * 删除
     */
    public function del($delData)
    {
        if ($this->request->isAjax()) {
            $result = GoodsCommentLogic::del($delData); //逻辑层处理删除信息
            if ($result) {
                $this->_success('删除成功');
            }
            $this->_error('删除失败');
        }
    }

    /**
     * 修改状态
     */
    public function switchStatus(){
        $get = $this->request->get();
        GoodsCommentLogic::switchStatus($get);
        $this->_success('修改成功');
    }

    //回复
    public function reply($id){
        if ($this->request->isAjax()) {

            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\GoodsComment');
            if($result === true){
                GoodsCommentLogic::reply($post);
                $this->_success('回复成功！');
            }
            $this->_error($result);

        }
        $this->assign('res',GoodsCommentLogic::info($id));
        return $this->fetch();
    }


}