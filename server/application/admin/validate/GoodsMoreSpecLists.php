<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
namespace app\admin\validate;


use think\Validate;

class GoodsMoreSpecLists extends Validate
{
    protected $rule = [
//        'market_price'  => 'require|gt:0.01',
        'price'         => 'require|egt:0.01',
        'cost_price'    => 'require|egt:0.01',
        'stock'         => 'require|integer',
        'weight'        => 'egt:0',
        'volume'        => 'egt:0',
    ];

    protected $message = [
        'volume.require'        => '请输入体积',
        'volume.egt'             => '体积必须大于或等于0',
        'weight.require'        => '请输入重量',
        'weight.egt'             => '重量必须大于或等于0',
        'market_price.require'  => '请输入市场价',
        'market_price.egt'       => '市场价必须大于或等于0.01',
        'price.require'         => '请输入价格',
        'price.egt'              => '价格必须大于或等于0.01',
        'cost_price.require'    => '请输入成本价',
        'cost_price.egt'         => '成本价必须大于或等于0.01',
        'stock.require'         => '请输入库存',
        'stock.integer'         => '库存必须为整数',
    ];


}