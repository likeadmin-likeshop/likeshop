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


use app\common\model\AfterSale as CommonAfterSale;
use app\common\model\Pay;
use app\common\model\Team;
use think\Db;
use think\Validate;

class Verification extends Validate
{
    public $rule = [
        'id' => 'require|checkId',
    ];

    public function sceneVerification()
    {
        return $this->only(['id'])->append('id','checkVerification');
    }

    /**
     * @notes 检查订单ID是否存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/16 8:21 下午
     */
    public function checkId($value,$rule,$data)
    {
        $result = \app\common\model\Order::where(['id'=>$value,'del'=>0])->find();
        if (empty($result)) {
            return '订单不存在';
        }
        return true;
    }

    /**
     * @notes 检验订单是否可以核销
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/16 8:30 下午
     */
    public function checkVerification($value,$rule,$data)
    {
        $result = \app\common\model\Order::where(['id'=>$value,'del'=>0])->find();
        if ($result['pay_status'] != Pay::ISPAID) {
            return '订单未支付，不允许核销';
        }
        if ($result['delivery_type'] != \app\common\model\Order::DELIVERY_STATUS_SELF) {
            return '非自提订单，不允许核销';
        }
        if ($result['verification_status'] == \app\common\model\Order::WRITTEN_OFF) {
            return '订单已核销';
        }
        if ($result['order_type'] == \app\common\model\Order::TEAM_ORDER){
            $found = Db::name('team_found')->where(['id' => $result['team_found_id']])->find();
            if ($found['status'] != Team::STATUS_SUCCESS){
                return '拼团成功后才能核销';
            }
        }
    
        foreach ($result->order_goods as $goods) {
            $where = [
                [ 'order_goods_id', '=', $goods['id'] ],
                [ 'order_id', '=', $goods['order_id'] ],
                [ 'status', 'in', CommonAfterSale::CanNotVerificationStatusArr() ],
                [ 'del', '=', 0 ],
            ];
        
            $after_sale = CommonAfterSale::where($where)->findOrEmpty();
        
            if (! $after_sale->isEmpty()) {
                RETURN '有商品处于售后中，不能核销';
            }
        }
        
        return true;
    }
}