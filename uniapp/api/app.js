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