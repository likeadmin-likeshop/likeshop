import axios from '../js_sdk/xtshadow-axios/axios.min'
import store from '../store'
import {
	paramsToStr,
	currentPage
} from './tools'
import Cache from './cache'
import {
	TOKEN
} from '../config/cachekey'
import {baseURL} from '@/config/react_native'

import {
	wxAutoLogin,
	isAuthorize,
	toLogin
} from './login'

let index = 0;

function checkParams(params) {
	if (typeof params != 'object') return params
	for (let key in params) {
		const value = params[key];
		if (value === null || value === undefined || value === "") {
			delete params[key];
		}
	}
	return params;
}



const service = axios.create({
	baseURL: baseURL,
	timeout: 10000,
	header: {
		'content-type': 'application/json'
	}
});


// request拦截器
service.interceptors.request.use(
	config => {
		config.data = checkParams(config.data)
		config.params = checkParams(config.params)
		if (config.method == 'GET') {
			config.url += paramsToStr(config.params)
		}
		config.header.token = Cache.get(TOKEN)
		console.log(config)
		return config
	},
	error => {
		// Do something with request error
		console.log(error) // for debug
		Promise.reject(error)
	}
)

// response 拦截器
service.interceptors.response.use(
	async (response) => {
			if (response.data) {
				const {
					code,
					show,
					msg
				} = response.data;
				if (code == 0 && show && msg) {
					uni.showToast({
						title:msg,
						icon:"none"
					})
				} else if (code == -1) {
					store.commit('LOGOUT')
					//#ifdef  MP-WEIXIN
					let num = store.getters.loginNum
					let isAuth = await isAuthorize();
					if (!isAuth) return;
					if (num == 0) {
						uni.showLoading({
							title: "登录中..."
						})
						store.commit('SETLOGINNUM', ++num)
						const {
							code: loginCode,
							data: loginData
						} = await wxAutoLogin()
						if (loginCode == 1) {
							uni.hideLoading()
							store.commit('LOGIN', loginData)
							const {options, onLoad, onShow} = currentPage()
							onLoad && onLoad(options)
							onShow && onShow()
						}
					}
					// #endif
					//#ifdef H5
					toLogin()
					// #endif
				}
			}

			return Promise.resolve(response.data)
		},
		error => {
			// tryHideFullScreenLoading()
			console.log(error)
			console.log('err' + error) // for debug
			return Promise.reject(error)
		}
)

export default service
