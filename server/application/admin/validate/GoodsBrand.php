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