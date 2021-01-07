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