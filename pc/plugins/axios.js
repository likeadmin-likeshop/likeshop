import { Message } from 'element-ui';
import JSEncrypt from 'jsencrypt'
import config from '~/config/app'
import { createConsumeToken, clearConsumeToken } from '~/utils/consumeToken'

const passwordFields = [
  'password', 'password2', 'password_confirm', 'passwordConfirm',
  're_password', 'repassword', 'confirm_password', 'confirmPassword',
  'old_password', 'oldPassword', 'curr_password', 'currPassword',
  'new_password', 'newPassword', 'pay_password', 'payPassword',
  'origin_pay_password', 'originPayPassword', 'new_pay_password', 'newPayPassword'
]

export default function ({ $axios, redirect, app, store }, inject) {

  $axios.setBaseURL(`${config.baseUrl}/api/`)
  $axios.onRequest(async config => {
    config.headers.token = config.headers.token || store.state.token
    if (config.data && passwordFields.some(field => typeof config.data[field] === 'string' && config.data[field])) {
      const response = await $axios.$get('account/passwordKey')
      if (!response || response.code !== 1 || !response.data || !response.data.key) {
        throw new Error(response && response.msg ? response.msg : '获取密码加密密钥失败')
      }
      const session = response.data
      const encryptor = new JSEncrypt()
      encryptor.setPublicKey(session.key)
      const data = { ...config.data }
      passwordFields.forEach(field => {
        if (typeof data[field] === 'string' && data[field]) {
          const encrypted = encryptor.encrypt(data[field])
          if (!encrypted) {
            throw new Error('密码加密失败')
          }
          data[field] = `RSA:${encrypted}`
        }
      })
      data.password_key_id = session.key_id || session.keyId
      config.data = data
    }
    if (config.headers.token) {
      config.headers['X-Consume-Token'] = await createConsumeToken(config.headers.token)
    }
    return config
  })
  $axios.onResponse((response) => {
    const {
      code,
      show,
      msg
    } = response.data;
    if (code == 0 && response.data.data && response.data.data.error === 'consume_token_invalid') {
      clearConsumeToken()
    }
    if (code == 0 && show && msg) {
      Message({
        message: msg,
        type: 'error'
      })
    }else if(code == -1){
      store.commit('logout')
      redirect('/account/login')
    }
  })
  $axios.onError(error => {
    redirect('/error')
  })
  inject('get', $axios.$get)
  inject('post', $axios.$post)
}
