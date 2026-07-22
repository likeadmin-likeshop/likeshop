import axios from '../js_sdk/xtshadow-axios/axios.min'
import JSEncrypt from 'jsencrypt'
import store from '../store'
import { paramsToStr, currentPage, tabbarList, acountList } from './tools'
import Cache from './cache'
import { TOKEN, BACK_URL } from '../config/cachekey'
import { baseURL } from '../config/app'
import { getWxCode, toLogin, wxMnpLogin } from './login'

const passwordFields = [
    'password', 'password2', 'password_confirm', 'passwordConfirm',
    're_password', 'repassword', 'confirm_password', 'confirmPassword',
    'old_password', 'oldPassword', 'curr_password', 'currPassword',
    'new_password', 'newPassword', 'pay_password', 'payPassword',
    'origin_pay_password', 'originPayPassword', 'new_pay_password', 'newPayPassword'
]

function checkParams(params) {
    if (typeof params != 'object') return params
    for (let key in params) {
        const value = params[key]
        if (value === null || value === undefined || value === '') {
            delete params[key]
        }
    }
    return params
}

const service = axios.create({
    baseURL: `${baseURL}/api/`,
    timeout: 10000,
    header: {
        'content-type': 'application/json'
    }
})

// request拦截器
service.interceptors.request.use(
    async (config) => {
        config.data = checkParams(config.data)
        config.params = checkParams(config.params)
        if (
            config.data &&
            passwordFields.some((field) => typeof config.data[field] === 'string' && config.data[field])
        ) {
            const response = await service.get('account/passwordKey')
            if (!response || response.code !== 1 || !response.data || !response.data.key) {
                throw new Error(response && response.msg ? response.msg : '获取密码加密密钥失败')
            }

            const encryptor = new JSEncrypt()
            encryptor.setPublicKey(response.data.key)
            const data = { ...config.data }
            passwordFields.forEach((field) => {
                if (typeof data[field] === 'string' && data[field]) {
                    const encrypted = encryptor.encrypt(data[field])
                    if (!encrypted) {
                        throw new Error('密码加密失败')
                    }
                    data[field] = `RSA:${encrypted}`
                }
            })
            data.password_key_id = response.data.key_id || response.data.keyId
            config.data = data
        }
        if (config.method == 'GET') {
            config.url += paramsToStr(config.params)
        }
        config.header = config.header || {}
        config.header.token = config.header.token || Cache.get(TOKEN)
        return config
    },
    (error) => {
        // Do something with request error
        console.log(error) // for debug
        Promise.reject(error)
    }
)

// response 拦截器
service.interceptors.response.use(
    async (response) => {
        if (response.data) {
            const { code, show, msg } = response.data
            const { route, options } = currentPage()
            if (code == 0 && show && msg) {
                uni.showToast({
                    title: msg,
                    icon: 'none'
                })
            } else if (code == -1) {
                store.commit('LOGOUT')
                //#ifdef MP-WEIXIN

                wxMnpLogin()
                // #endif
                //#ifdef H5 || APP-PLUS
                if (route && !tabbarList.includes(route)) {
                    toLogin()
                }
                // #endif
                //#ifdef H5
                if (!acountList.includes(route)) {
                    Cache.set(BACK_URL, `/${route}${paramsToStr(options)}`)
                }
                // #endif
            }
        }

        return Promise.resolve(response.data)
    },
    (error) => {
        // tryHideFullScreenLoading()
        console.log(error)
        console.log('err' + error) // for debug
        return Promise.reject(error)
    }
)

export default service
