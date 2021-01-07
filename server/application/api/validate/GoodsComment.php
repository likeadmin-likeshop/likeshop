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