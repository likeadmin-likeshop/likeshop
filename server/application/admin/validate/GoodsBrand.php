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