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


namespace app\api\validate;


use think\Validate;

class UserAddress extends Validate
{

    protected $rule = [
        'id'            => 'require|integer',
        'contact'       => 'require',
        'telephone'     => 'require|mobile',
        'province_id'   => 'require',
        'city_id' => 'require',
        'district_id' => 'require',
        'address'       => 'require',
        'is_default'    => 'require',
    ];

    protected $message = [
        'id.require'            => 'id不能为空',
        'id.integer'            => 'id参数错误',
        'contact.require'       => '收货人不能为空',
        'telephone.require'     => '联系方式不能为空',
        'telephone.mobile'      => '非有效手机号',
        'province_id.require'   => '所选地区不能为空',
        'city_id.require'       => '请选择完整地址',
        'district_id.require'   => '请选择完整地址',
        'address.require'       => '详细地址不能为空',
        'is_default.require'    => '是否默认不能为空',
        'province.require'      => '省不能为空',
        'city.require'          => '市不能为空',
        'district.require'      => '区不能为空',
    ];


    /**
     * 添加
     */
    public function sceneAdd()
    {
        return $this->remove('id');
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

    /**
     * 获取一条地址
     */
    public function sceneOne()
    {
        return $this->only(['id']);
    }

    /**
     * 设置默认地址
     */
    public function sceneSet()
    {
        return $this->only(['id']);
    }

    /**
     * 获取省市区id
     */
    public function sceneHandleRegion()
    {
        return $this->only(['province','city','district'])
            ->append('province','require')
            ->append('city','require')
            ->append('district','require');
    }

}