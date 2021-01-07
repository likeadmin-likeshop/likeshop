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
/**
 * Created by PhpStorm.
 * User: wzg
 * Date: 2020/5/22 0022
 * Time: 16:45
 */

namespace app\admin\validate;


use think\Db;
use think\Validate;

class GoodsBrand extends Validate
{
    protected $rule = [
        'name'              => 'require|unique:GoodsBrand,name^del',
        'initial'           => 'require',
        'sort'              => 'integer|egt:0',
    ];

    protected $message = [
        'name.require'            => '品牌名称不能为空',
        'name.unique'             => '该名称已存在',
        'initial.require'         => '品牌首字母不能为空',
        'sort.integer'            => '排序请输入整数',
        'sort.egt'                => '排序值必须大于0',
    ];

    /**
     *  添加场景
     */
    public function sceneAdd()
    {

        $this->remove('id');
    }
}