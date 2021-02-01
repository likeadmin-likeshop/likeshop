import request from '@/utils/request'


//小程序登录
export function mnpLogin(data) {
  return request.post('account/mnpLogin', data);
} 

//预支付接口
export function prepay(data) {
  return request.post('payment/prepay', { ...data,
    order_source: 1
  });
}

//小程序订阅
export function getMnpNotice(data) {
  return request.get("subscribe/lists", {params: data});
} 

//账号登录
export function accountLogin(data) {
    return request.post("account/login", {...data, client: 2})
}

// 忘记密码
export function forgetPwd(data) {
    return request.post('login_password/forget', data)
}

// 发送短信
export function sendSms(data) {
    return request.post('sms/send', {...data, client: 2})
}

// Html5 注册账号
export function register(data) {
    return request.post('account/register', data)
}