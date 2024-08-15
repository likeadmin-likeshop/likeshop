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

use app\admin\logic\CommentHelperLogic;
use app\admin\logic\GoodsCategoryLogic;
use app\admin\logic\UserLogic;
use app\common\model\Goods;

/**
 * 评价助手
 * Class CommentHelper
 * @package app\admin\controller
 */
class CommentHelper extends AdminBase
{

    /**
     * @notes 商品列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author 段誉
     * @date 2022/1/12 11:01
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('', CommentHelperLogic::lists($get));
        }
        $this->assign('category_list', GoodsCategoryLogic::categoryTreeeTree());
        $this->assign('status_list', Goods::getStatusDesc(true));
        return $this->fetch();
    }



    /**
     * @notes 添加虚拟评论
     * @return mixed
     * @author 段誉
     * @date 2022/1/12 11:00
     */
    public function add()
    {
        $goods_id = $this->request->get('id');
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $check = $this->validate($post, 'app\admin\validate\CommentHelper');
            if ($check !== true) {
                $this->_error($check);
            }
            $result = CommentHelperLogic::addComment($post);
            if (true === $result) {
                $this->_success('操作成功');
            }
            $this->_error($result);
        }
        $this->assign('user_level', UserLogic::getLevelList());
        $this->assign('goods_id', $goods_id);
        return $this->fetch();
    }

}