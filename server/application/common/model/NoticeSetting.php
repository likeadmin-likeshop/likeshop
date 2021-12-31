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

use think\Model;

/**
 * 通知场景
 * Class Notice
 * @package app\common\model
 */
class NoticeSetting extends Model
{

    protected $name = 'dev_notice_setting';

    //设置json
//    protected $json = ['variable', 'system_notice', 'sms_notice', 'oa_notice', 'mnp_notice'];
//    protected $jsonAssoc = true;


    //通知类型
    const SYSTEM_NOTICE = 1;
    const SMS_NOTICE = 2;
    const OA_NOTICE = 3;
    const MNP_NOTICE = 4;


    //通知对象
    const NOTICE_PLATFORM = 1; //通知平台
    const NOTICE_USER = 2; //通知会员
    const NOTICE_OTHER = 3; //通知游客(如新用户注册)


    //通知会员
    const ORDER_PAY_NOTICE = 100;//订单已支付
    const ORDER_DELIVERY_NOTICE = 101;//订单已发货
    const PLATFORM_PASS_REFUND_NOTICE = 102;//平台通过售后退款通知
    const PLATFORM_REFUSE_REFUND_NOTICE = 103;//平台拒绝售后退款通知
    const REGISTER_NOTICE = 104;//注册通知
    const CHANGE_MOBILE_NOTICE = 105;//变更手机号短信通知
    const GET_BACK_MOBILE_NOTICE = 106;//重置密码短信通知
    const REGISTER_SUCCESS_NOTICE = 107;//注册成功
    const INVITE_SUCCESS_NOTICE = 108;//邀请成功
    const GET_EARNINGS_NOTICE = 109;//获得收益
    const GET_GODE_LOGIN_NOTICE = 110;//验证码登录
    const BIND_MOBILE_NOTICE = 111;//绑定手机号
    const GET_BACK_PAY_CODE_NOTICE = 112;//找回支付密码


    //通知平台
    const USER_PAID_NOTICE_PLATFORM = 200;//会员支付下单通知平台
    const AFTER_SALE_NOTICE_PLATFORM = 201;//会员发起售后退款通知



    //订单相关场景
    const ORDER_SCENE = [
        self::ORDER_PAY_NOTICE,
        self::ORDER_DELIVERY_NOTICE,
        self::PLATFORM_PASS_REFUND_NOTICE,
        self::PLATFORM_REFUSE_REFUND_NOTICE,
    ];


    //通知平台的场景
    const NOTICE_PLATFORM_SCENE = [
        self::USER_PAID_NOTICE_PLATFORM,
        self::AFTER_SALE_NOTICE_PLATFORM,
    ];


    //通知会员的场景
    const NOTICE_USER_SCENE = [
        self::ORDER_PAY_NOTICE,
        self::ORDER_DELIVERY_NOTICE,
        self::PLATFORM_PASS_REFUND_NOTICE,
        self::PLATFORM_REFUSE_REFUND_NOTICE,
        self::CHANGE_MOBILE_NOTICE,
        self::GET_BACK_MOBILE_NOTICE,
        self::REGISTER_SUCCESS_NOTICE,
        self::INVITE_SUCCESS_NOTICE,
        self::GET_EARNINGS_NOTICE,
    ];

    //通知游客(还不存在当前系统的人)
    const NOTICE_OTHER_SCENE = [
        self::REGISTER_NOTICE
    ];


    //验证码的场景
    const NOTICE_NEED_CODE = [
        self::REGISTER_NOTICE,
        self::CHANGE_MOBILE_NOTICE,
        self::GET_BACK_MOBILE_NOTICE,
        self::GET_GODE_LOGIN_NOTICE,
        self::BIND_MOBILE_NOTICE,
        self::GET_BACK_PAY_CODE_NOTICE,
    ];


    //场景值-兼容旧短信场景逻辑
    const SMS_SCENE = [
        'DDZFTZ' => self::ORDER_PAY_NOTICE,
        'DDFHTZ' => self::ORDER_DELIVERY_NOTICE,
        'SJTYSHTK' => self::PLATFORM_PASS_REFUND_NOTICE,
        'SJJJSHTK' => self::PLATFORM_REFUSE_REFUND_NOTICE,
        'ZCYZ' => self::REGISTER_NOTICE,
        'ZHMM' => self::GET_BACK_MOBILE_NOTICE,
        'DDTZ' => self::USER_PAID_NOTICE_PLATFORM,
        'SHTKDDTZ' => self::AFTER_SALE_NOTICE_PLATFORM,
        'YZMDL' => self::GET_GODE_LOGIN_NOTICE,
        'BGSJHM' => self::CHANGE_MOBILE_NOTICE,
        'BDSJHM' => self::BIND_MOBILE_NOTICE,
        'ZHZFMM' => self::GET_BACK_PAY_CODE_NOTICE,
    ];



    /**
     * Notes: 获取场景描述
     * @param $state
     * @return array|mixed|string
     * @author 段誉(2021/4/26 16:15)
     */
    public static function getSceneDesc($state)
    {
        $data = [
            self::ORDER_PAY_NOTICE => '订单已支付',
            self::ORDER_DELIVERY_NOTICE => '订单已发货',
            self::PLATFORM_PASS_REFUND_NOTICE => '平台通过售后退款通知',
            self::PLATFORM_REFUSE_REFUND_NOTICE => '平台拒绝售后退款通知',
            self::REGISTER_NOTICE => '注册通知',
            self::CHANGE_MOBILE_NOTICE => '变更手机号短信通知',
            self::GET_BACK_MOBILE_NOTICE => '重置密码短信通知',
            self::REGISTER_SUCCESS_NOTICE => '注册成功',
            self::INVITE_SUCCESS_NOTICE => '邀请成功',
            self::GET_EARNINGS_NOTICE => '获得收益',
            self::GET_GODE_LOGIN_NOTICE => '验证码登录',
            self::BIND_MOBILE_NOTICE => '绑定手机号',
            self::GET_BACK_PAY_CODE_NOTICE => '找回支付密码',

            self::USER_PAID_NOTICE_PLATFORM => '会员支付下单通知平台',
            self::AFTER_SALE_NOTICE_PLATFORM => '会员发起售后退款通知',
        ];
        if ($state === true) {
            return $data;
        }
        return $data[$state] ?? '';
    }


    /**
     * Notes: 根据场景获取跳转地址
     * @param $scene
     * @author 段誉(2021/4/27 17:01)
     * @return array
     */
    public static function getPathByScene($scene, $extra_id)
    {
        $page = '/pages/index/index'; // 小程序主页路径
        $url = '/mobile/pages/index/index'; // 公众号主页路径
        if (in_array($scene, self::ORDER_SCENE)) {
            $url = '/mobile/pages/order_details/order_details?id='.$extra_id;
            $page = '/pages/order_details/order_details?id='.$extra_id;
        }
        return ['url' => $url, 'page' => $page];
    }


    /**
     * Notes: 场景名称
     * @param $value
     * @param $data
     * @author 段誉(2021/4/26 16:56)
     * @return array|mixed|string
     */
    public function getSceneAttr($value, $data)
    {
        return self::getSceneDesc($value);
    }


    /**
     * Notes: 场景变量
     * @param $value
     * @param $data
     * @author 段誉(2021/4/26 17:07)
     * @return mixed
     */
    public function getVariableAttr($value, $data)
    {
        return $this->jsonToArr($value);
    }


    /**
     * Notes: 系统消息
     * @param $value
     * @param $data
     * @author 段誉(2021/4/26 17:18)
     * @return array|mixed
     */
    public function getSystemNoticeAttr($value, $data)
    {
        return $this->jsonToArr($value);
    }

    /**
     * Notes: 短信消息
     * @param $value
     * @param $data
     * @author 段誉(2021/4/26 17:25)
     * @return array|mixed
     */
    public function getSmsNoticeAttr($value, $data)
    {
        return $this->jsonToArr($value);
    }


    /**
     * Notes: 公众号消息
     * @param $value
     * @param $data
     * @author 段誉(2021/4/26 17:25)
     * @return array|mixed
     */
    public function getOaNoticeAttr($value, $data)
    {
        return $this->jsonToArr($value);
    }

    /**
     * Notes: 小程序消息
     * @param $value
     * @param $data
     * @author 段誉(2021/4/26 17:25)
     * @return array|mixed
     */
    public function getMnpNoticeAttr($value, $data)
    {
        return $this->jsonToArr($value);
    }


    public function jsonToArr($data)
    {
        return empty($data) ? [] : json_decode($data, JSON_UNESCAPED_UNICODE);
    }

}