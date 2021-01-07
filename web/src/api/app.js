// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

import request from '@/utils/request'

//预支付接口
export function prepay(data) {
    return request.post('payment/prepay', {...data, order_source: 2})
}

// 登录
export function weichatLogin(data) {
    return request.post('account/oalogin', data)
}

// 获取获取向微信请求code的链接
export function getCodeUrl(params) {
    return request.get('account/codeurl', {params});
}

//判断是否为微信环境
export function isWeixinClient () {
    var ua = navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i)=="micromessenger") {
        //这是微信环境
        return true;
    } else {
        //这是非微信环境
        return false;
    }
}

export function jsconfig(params) {
    return request.get('we_chat/jsconfig', {params});
}

// H5 注册账号
export function register(data) {
    return request.post('account/register', data)
}

// 账号密码登录
export function pwdLogin(data) {
    return request.post('account/login', {...data, client: 2})
}

// 验证码登录
export function smsCodeLogin(data) {
    return request.post('account/smsLogin', {...data, client: 2})
}

// 忘记密码
export function forgetPwd(data) {
    return request.post('login_password/forget', data)
}

// 获取签到列表
export function getSignList() {
    return request.get("sign/lists")
}

// 签到
export function userSign() {
    return request.get("sign/sign")
}

// 获取签到规则
export function getSignRule() {
    return request.get("sign/rule")
}

// 发送短信
export function sendSms(data) {
    return request.post('sms/send', data)
}

// 获取服务协议
export function getServerProto() {
    return request.get("policy/service")
}

// 获取隐私政策
export function getPrivatePolicy() {
    return request.get("policy/privacy")
}

// 获取售后保障
export function getAfterSaleGuar() {
    return request.get('policy/afterSale')
}

// app下载链接
export function getAppDownload(params) {
    return request.get("index/downLine", {params})
}

// 获取首页或个人中心菜单
export function getMenu(params) {
    return request.get('menu/lists', {params})
}

// 获取送优惠券列表
export function getCouponPopList() {
    return request.get("coupon/registerSendCoupon");
}

// 领取注册赠送的优惠券
export function getRegisterCoupon(data) {
    return request.post("coupon/getRegisterCoupon", data)
}

//客服
export function getService() {
    return request.get("service/lists")
}