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
namespace app\admin\validate;
use think\Validate;

/**
 * 添加商品 数据校验
 * Class Bargain
 * @package app\admin\validate
 */
class LiveGoods extends Validate{
    protected $rule = [
        'goods_name'            => 'require|min:3|max:14',
        'feedsImg'              => 'require',
        'use_price_type'        => 'checkPrice',
        'url'                   => 'checkUrl',
    ];

    protected $message = [
        'goods_name.require'     => '请输入商品名称',
        'goods_name.min'         => '商品名称必须为3-14个字符',
        'goods_name.max'         => '商品名称必须为3-14个字符',
        'feedsImg.require'       => '请上传商品封面',
    ];


    public function checkPrice($value, $rule, $data)
    {
        switch ($data['use_price_type']) {
            case 1:
                $price = $data['price'];
                break;
            case 2:
                $price = $data['section_price_start'];
                $price2 = $data['section_price_end'];
                if($price > $price2){
                    return '价格不合法';
                }
                break;
            case 3:
                $price = $data['discount_price_start'];
                $price2 = $data['discount_price_end'];
                if($price < $price2){
                    return '价格不合法';
                }
                break;
        }
        if((isset($price) && $price < 0.01) || (isset($price2) && $price2 < 0.01)){
            return '价格不合法';
        }
        return true;
    }

    public function checkUrl($value, $rule, $data)
    {
        $goods_url = explode('=',$value);
        if(!strstr($value, '/') || (isset($goods_url[1]) && !is_numeric($goods_url[1]))){
            return '商品链接不合法';
        }
        return true;
    }
}