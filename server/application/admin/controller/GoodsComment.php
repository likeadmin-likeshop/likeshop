<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
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
            $this->success('', GoodsCommentLogic::lists($get));
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
                $this->success('删除成功');
            }
            $this->error('删除失败');
        }
    }

    /**
     * 修改状态
     */
    public function switchStatus(){
        $get = $this->request->get();
        GoodsCommentLogic::switchStatus($get);
        $this->success('修改成功');
    }

    //回复
    public function reply($id){
        if ($this->request->isAjax()) {

            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\GoodsComment');
            if($result === true){
                GoodsCommentLogic::reply($post);
                $this->success('回复成功！');
            }
            $this->error($result);

        }
        $this->assign('res',GoodsCommentLogic::info($id));
        return $this->fetch();
    }


}