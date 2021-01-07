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

class AfterSale extends Validate
{
    protected $rule = [
        'id' => 'require|checkAfterSale',
        'remark' => 'require',
    ];

    protected $message = [
        'id.require' => '参数缺失',
        'remark.require' => '请填写拒绝原因',
    ];

    //商家同意
    public function sceneAgree()
    {
        $this->only(['id']);
    }

    //商家拒绝
    public function sceneRefuse()
    {
        $this->only(['id','remark']);
    }

    //商家收货
    public function sceneTake()
    {
        $this->only(['id']);
    }

    //拒绝收货
    public function sceneRefuseGoods()
    {
        $this->only(['id','remark']);
    }

    //确认退款
    public function sceneConfirm()
    {
        $this->only(['id'])->append('id','checkIsRefund');
    }

    protected function checkAfterSale($value, $rule, $data)
    {
        $after_sale = \app\common\model\AfterSale::where('del',0)
            ->where('id',$value)
            ->find();

        if (!$after_sale){
            return '订单异常,暂不可操作!';
        }
        return true;
    }

    protected function checkIsRefund($value, $rule, $data)
    {
        $after_sale = \app\common\model\AfterSale::where('del',0)
            ->where('id',$value)
            ->find();

        if ($after_sale['status'] == \app\common\model\AfterSale::STATUS_SUCCESS_REFUND){
            return '此订单已退款';
        }
        return true;
    }
}