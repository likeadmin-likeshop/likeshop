import request from '@/utils/request'
import wechath5 from '@/utils/wechath5'
import {client} from '@/utils/tools'

//小程序授权登录
export function authLogin(data) {
	return request.post('account/authLogin', data);
}
//小程序静默登录
export function silentLogin(data) {
	return request.post('account/silentLogin', data);
}
   
// app登录
export function opLogin(data) {
	return request.post('account/uinAppLogin', {...data, client});
}

//预支付接口
export function prepay(data) {
	return request.post('payment/prepay', {...data, order_source:client});
}

//小程序订阅
export function getMnpNotice(data) {
	return request.get("subscribe/lists", {
		params: data
	});
}

//账号登录
export function accountLogin(data) {
    return request.post("account/login", {...data, client})
}


export function getWechatConfig() {
	return request.get("wechat/config", {
		url: encodeURIComponent(wechat.signLink())
	});
}


// 登录
export function wechatLogin(data) {
	return request.post('account/oalogin', data)
}

// 获取获取向微信请求code的链接
export function getCodeUrl() {
	return request.get('account/codeurl', {
		params:{
			url: encodeURIComponent(location.href)
		}
	});
}



//微信sdk配置
export function getJsconfig() {
	return request.get('we_chat/jsconfig', {
		params: {
			url: encodeURIComponent(wechath5.signLink())
		}
	});
}

// 忘记密码
export function forgetPwd(data) {
    return request.post('login_password/forget', {...data, client})
}

// 发送短信
export function sendSms(data) {
    return request.post('sms/send', {...data, client})
}

// Html5 注册账号
export function register(data) {
    return request.post('account/register', {...data, client})
}

// 获取服务协议
export function getServerProto() {
    return request.get("policy/service")
}

// 获取隐私政策
export function getPrivatePolicy() {
    return request.get("policy/privacy")
}

//客服
export function getService() {
    return request.get("service/lists")
}

// 足迹气泡
export function getBubbleLists() {
    return request.get("footprint/lists")
}

// 用户自定义分享
export function userShare(params) {
    return request.get("index/share", {params: {
        ...params,
        client
    }})
}

// 验证码登录
export function smsCodeLogin(data) {
    return request.post('account/smsLogin', {...data, client})
}
export function getConfig() {
    return request.get("index/config")
}


// 注册赠送优惠券
export function getRegisterCoupon() {
    return request.get('coupon/registerSendCoupon')
}

// 获取支付配置
export function getPayway() {
    return request.get('payment/payway')
}
