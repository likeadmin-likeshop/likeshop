import request from '@/utils/request'


export function mnpLogin(data) {
  return request.post('account/mnpLogin', data);
} 