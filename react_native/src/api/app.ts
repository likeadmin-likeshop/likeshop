import { get, post } from "../utils/request";
import {client} from "../utils/app"

// 微信授权登录
export function wxpLogin(data: any) {
    return post('account/oplogin', {...data, client}, true)
}
// app初始化
export function appinit() {
    return get('index/appinit', {})
}
//预支付接口
export function prepay(data: any, loading?: boolean) {
    return post('payment/prepay', {...data, order_source: client }, loading)
}

//上传图片
export function uploadFile(data: any) {
    return post('file/formimage', data)
}

//账号注册
export function register(data: any, loading?: boolean) {
    return post("account/register", {...data, client}, loading )
}

//账号登录
export function accountLogin(data: any, loading?: boolean) {
    return post("account/login", {...data, client}, loading )
}

//验证码登录
export function codeLogin(data: any, loading?: boolean) {
    return post("account/smsLogin", {...data, client}, loading )
}
//忘记密码
export function forgetPwd(data: any, loading?: boolean) {
    return post("login_password/forget", {...data, client}, loading )
}
// sms/send
export function sendSms(data: any, loading?: boolean) {
    return post("sms/send", {...data, client}, loading )
}

// 获取服务协议
export function getServerProto() {
    return get("policy/service")
}

// 获取隐私政策
export function getPrivatePolicy() {
    return get("policy/privacy")
}

// 获取售后保障
export function getAfterSaleGuar() {
    return get('policy/afterSale')
}

// 获取首页或个人中心菜单
export function getMenu(data: any) {
    return get('menu/lists', {...data, client: 3})
}

// 获取送优惠券列表
export function getCouponPopList() {
    return get("coupon/registerSendCoupon");
}

// 领取注册赠送的优惠券
export function getRegisterCoupon(data: any) {
    return post("coupon/getRegisterCoupon", data)
}

export function getService() {
    return get("service/lists")
}