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

namespace app\admin\validate;

use think\Db;
use think\Validate;

class Freight extends Validate
{

    protected $rule = [
        'id' => 'require',
        'charge_way' => 'require',
        'name' => 'require|unique:freight',
        'region' => 'require|checkTypeData',
    ];

    protected $message = [
        'id.require' => '参数缺失',
        'charge_way.require' => '请选择计费方式',
        'name.require' => '请输入模板名称',
        'name.unique' => '该模板名称已存在',
    ];

    protected function sceneAdd()
    {
        $this->only(['name', 'charge_way', 'region']);
    }

    protected function sceneEdit()
    {
        $this->only(['id', 'name', 'charge_way', 'region']);
    }

    public function sceneDel()
    {
        $this->only(['id'])->append('id', 'checkIsAbleDel');
    }

    //添加时验证全国模板或指定地区模板的数据
    protected function checkTypeData($value, $reule, $data)
    {
        foreach ($data as &$item) {
            if (is_array($item)) {
                $item = array_values($item);
            }
        }

        $configs = form_to_linear($data);

        foreach ($configs as $config) {
            if (
                empty($config['first_unit']) ||
                empty($config['first_money']) ||
                empty($config['continue_unit']) ||
                empty($config['continue_money'])
            ) {
                return '请填写完整';
            }
        }
        return true;
    }


    //验证模板是否可以删除
    protected function checkIsAbleDel($value, $reule, $data)
    {
        $freight = Db::name('goods')
            ->where('free_shipping_template_id', $value)
            ->find();

        if ($freight) {
            return '此模板已有商品使用!';
        }
        return true;
    }

}