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


namespace app\common\model;


use app\common\server\UrlServer;
use think\Model;

class Pay extends Model
{

    protected $name = 'dev_pay';


    const UNPAID = 0;//待支付
    const ISPAID = 1;//已支付
    const REFUNDED = 2;//已退款
    const REFUSED_REFUND = 3;//拒绝退款

    //支付方式
    const WECHAT_PAY = 1;//微信支付
    const ALI_PAY = 2;//支付宝支付
    const BALANCE_PAY = 3;//余额支付
    const OFFLINE_PAY = 4;//线下支付


    //支付状态
    public static function getPayStatus($type)
    {
        $data = [
            self::UNPAID => '待支付',
            self::ISPAID => '已支付',
            self::REFUNDED => '已退款',
            self::REFUSED_REFUND => '拒绝退款',
        ];

        if ($type === true) {
            return $data;
        }
        return $data[$type] ?? '未知';
    }


    //支付方式
    public static function getPayWay($type)
    {
        $data = [
            self::WECHAT_PAY => '微信支付',
            self::ALI_PAY => '支付宝支付',
            self::BALANCE_PAY => '余额支付',
            self::OFFLINE_PAY => '线下支付',
        ];

        if ($type === true) {
            return $data;
        }
        return $data[$type] ?? '其他';
    }



    //图片路径
    public function getIconAttr($value, $data)
    {
        return UrlServer::getFileUrl($value);
    }


    //支付设置状态
    public function getStatusTextAttr($value, $data)
    {
        if ($data['status'] == 1){
            return '启用';
        }
        return '关闭';
    }


    //各种支付的配置
    public function getConfigAttr($value, $data)
    {
        if ($value){
            return json_decode($value, true);
        }
        return $value;
    }

}