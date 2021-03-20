import request from '@/utils/request'
import wechatH5 from '@/utils/wechath5'
import {client} from '@/utils/tools'

//小程序登录
export function mnpLogin(data) {
	return request.post('account/mnpLogin', data);
}

// app登录
export function opLogin(data) {
	return request.post('account/uinAppLogin', {...data, client});
}

//预支付接口
export function prepay(data) {
	return request.post('payment/prepay', { ...data,
		order_source: client
	});
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
			url: encodeURIComponent(wechatH5.signLink())
		}
	});
}

// 忘记密码
export function forgetPwd(data) {
    return request.post('login_password/forget', data)
}

// 发送短信
export function sendSms(data) {
    return request.post('sms/send', {...data, client})
}

// 注册账号
export function register(data) {
    return request.post('account/register', {...data, client})
}

// 验证码登录
export function smsCodeLogin(data) {
    return request.post('account/smsLogin', {...data, client})
}

export function getConfig() {
    return request.get("index/config")
}



//客服
export function getService() {
    return request.get("service/lists")
}
