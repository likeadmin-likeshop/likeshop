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

class Goods extends Validate
{
    protected $rule = [
        'goods_id'                  => 'require|checkGoods',
        'name'                      => 'require|min:3|max:64|unique:Goods,name^del',
        'first_category_id'         => 'require',
        'second_category_id'        => 'require',
        'third_category_id'         => 'require|checkCategory',
        'image'                     => 'require',
        'goods_image'               => 'require|length:1,5',
        'spec_type'                 => 'require',
        'brand_id'                  => 'checkBrand',
        'status'                    => 'require',
        'is_show_stock'             => 'require',
        'free_shipping_type'        => 'require',
        'free_shipping'             => 'requireIf:free_shipping_type,2',
        'free_shipping_template_id' => 'requireIf:free_shipping_type,3|checkTemplate',
        'virtual_sales_sum'         => 'egt:0',
        'stock_warn'                => 'egt:0',
        'first_ratio'               => 'lt:100',
        'second_ratio'              => 'lt:100',
        'three_ratio'               => 'lt:100|checkRatio',
        'region_ratio'              => 'lt:100',
        'shareholder_ratio'         => 'lt:100',
    ];

    protected $message = [
        'name.require'                          => '请输入商品名称',
        'name.unique'                           => '商品名称已存在，请重新输入',
        'name.min'                              => '商品名称长度至少3个字符',
        'name.max'                              => '商品名称长度最多64个字符',
        'first_category_id.require'             => '请选择一级分类',
        'second_category_id.require'            => '请输入二级分类',
        'third_category_id.require'             => '请输入三级分类',
        'goods_image.require'                   => '请上传商品主图',
        'image.require'                         => '请上传商品轮播图',
        'image.length'                          => '商品轮播图只能上传1~8张',
        'spec_type.require'                     => '请选择规格类型',
        'status.require'                        => '请选择销售状态',
        'is_show_stock.require'                 => '请选择库存显示',
        'free_shipping_type.require'            => '请选择快递运费类型',
        'free_shipping.requireIf'               => '请输入统一运费',
        'free_shipping_template_id.requireIf'   => '请选择快递运费模板',
        'virtual_sales_sum.egt'                 => '虚拟销量必须大于0',
        'stock_warn.egt'                        => '库存预警必须大于等于0',
        'first_ratio.lt'                        => '一级分销比例不能超过100',
        'second_ratio.lt'                       => '二级分销比例不能超过100',
        'three_ratio.lt'                        => '三级分销比例不能超过100',
        'region_ratio.lt'                       => '区域分红比例不能超过100',
        'shareholder_ratio.lt'                  => '股东分红比例不能超过100',
    ];

    //活动商品不可编辑
    protected function checkGoods($value,$rule,$data){
        $seckill_goods = Db::name('seckill_goods')
            ->where(['goods_id'=>$value,'del'=>0])
            ->find();
        if($seckill_goods){
            return '商品正在参与秒杀活动，无法修改';
        }
        return true;
    }
    /**
     * 编辑
     */
    public function sceneAdd()
    {
        $this->remove('goods_id', ['require']);

    }
    protected function checkCategory($value,$rule,$data){
        $goods_category = Db::name('goods_category')->where(['del'=>0,'id'=>$value])->find();
        if(empty($goods_category)){
            return '该分类不存在，请重新选择';
        }
        return true;

    }

    protected function checkBrand($value,$rule,$data){
        if($value){
            $brand = Db::name('goods_brand')->where(['id'=>$value,'del'=>0])->find();
            if(empty($brand)){
                return '该品牌不存在，请重新选择';
            }
        }
        return true;
    }
    protected function checkSupplier($value,$rule,$data){
        if($value){
            $supplier = Db::name('supplier')->where(['id'=>$value])->find();
            if(empty($supplier)){
                return '该供应商不存在，请重新选择';
            }
        }
        return true;
    }
    //验证运费模板
    protected function checkTemplate($value,$rule,$data){
        if($data['free_shipping_type'] === 3){
            $freight = Db::name('freight')
                        ->where(['id'=>$value])
                        ->find();
            if(empty($freight)){
                return '运费模板不存在，请重新选择';
            }
        }
        return true;
    }
    //验证分销比例（三级比例总和不能超过100）
    protected function checkRatio($value,$rule,$data){
        $ratio = $data['first_ratio'] + $data['second_ratio'] + $value;
        if($ratio > 100){
            return '分销比例不可超过100';
        }
        return true;
    }


}