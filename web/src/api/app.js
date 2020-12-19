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