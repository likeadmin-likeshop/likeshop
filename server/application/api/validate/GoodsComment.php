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


namespace app\api\validate;


use think\Validate;

class GoodsComment extends Validate
{

    protected $rule = [
        'goods_comment'         =>'require',
        'description_comment'   =>'require',
        'service_comment'       =>'require',
        'express_comment'       =>'require',

    ];

    protected $message = [
        'goods_comment.require'         =>'请进行商品评价',
        'description_comment.require'   =>'请进行描述相符评价',
        'service_comment.require'       =>'请进行服务态度评价',
        'express_comment.require'       =>'请进行配送服务评价',
    ];


    /**
     * 添加
     */
    public function sceneAdd()
    {
        return $this->remove('id','require');
    }

    /**
     * 编辑
     */
    public function sceneEdit()
    {

    }

    /**
     * 删除
     */
    public function sceneDel()
    {

        return $this->only(['id']);
    }

}