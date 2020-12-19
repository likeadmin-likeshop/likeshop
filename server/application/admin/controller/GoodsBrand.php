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
use app\admin\logic\GoodsBrandLogic;
use app\common\model\Capital_;

class GoodsBrand extends AdminBase {
   
    /**
     * note 品牌列表
     */
    public function lists()
    {
        if ($this->request->isAjax())
        {
            $get = $this->request->get();
            $list = GoodsBrandLogic::lists($get);
            $this->success('',$list);
        }
        return $this->fetch();
    }

    /**
     * note 添加品牌
     */
    public function add()
    {
        if ($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\GoodsBrand.add');
            if ($result === true){
                GoodsBrandLogic::add($post);
                $this->success('添加成功！');
            }
            $this->error($result);

        }

        $capital = Capital_::getData();
        $this->assign('capital',$capital);
        return $this->fetch();
    }

    /**
     * note 编辑品牌
     */
    public function edit($id)
    {
        if ($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\GoodsBrand.edit');
            if ($result === true){
                GoodsBrandLogic::edit($post,$id);
                $this->success('修改成功');
            }
            $this->error($result);
        }

        $info = GoodsBrandLogic::getGoodsBrand($id);
        $capital = Capital_::getData();
        $this->assign('info',$info);
        $this->assign('capital',$capital);
        return $this->fetch();
    }

    /**
     * note 删除品牌
     */
    public function del($id)
    {
        if ($this->request->isAjax()) {
            $result = GoodsBrandLogic::del($id);
            if ($result) {
                $this->success('删除成功');
            }
            $this->error('删除失败');
        }
    }

    /**
     * note 修改品牌的显示状态
     */
    public function switchStatus(){
        $get = $this->request->get();
        $result =GoodsBrandLogic::switchStatus($get);
        if ($result) {
            $this->success('修改成功');
        }
        $this->success('修改失败');
    }

}