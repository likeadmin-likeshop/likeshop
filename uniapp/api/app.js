import request from '@/utils/request'


//小程序登录
export function mnpLogin(data) {
  return request.post('account/mnpLogin', data);
} 