import {
	mnpLogin
} from '@/api/app'; //用户是否已经授权
import {
	isWeixinClient,
	currentPage
} from './tools'
import store from '@/store'
import Cache from './cache'
import {
	BACK_URL
} from '@/config/cachekey'
import wechath5 from './wechath5'

export function isAuthorize() {
	return new Promise((resolve, reject) => {
		uni.getSetting({
			success(res) {
				if (res.authSetting['scope.userInfo']) {
					resolve(true);
				} else {
					resolve(false);
				}
			}

		});
	});
}
export function wxgetUserInfo() {
	return new Promise((resolve, reject) => {
		uni.getUserInfo({
			lang: 'zh_CN',

			success(res) {
				resolve(res);
			},

			fail(res) {
				resolve(res);
			}

		});
	});
}
// 获取登录凭证（code）

export function getWxCode() {
	return new Promise((resolve, reject) => {
		uni.login({
			success(res) {
				resolve(res.code);
			},

			fail(res) {
				reject(res);
			}

		});
	});
}
//微信授权登录登录 

export function wxLogin(data) {
	return new Promise(resolve => {
		getWxCode().then(code => {
			return mnpLogin({ ...data,
				code
			});
		}).then(res => {
			resolve(res);
		});
	});
}
//授权后自动登录

export function wxAutoLogin() {
	return new Promise(resolve => {
		let code;
		return getWxCode().then(res => {
			code = res;
			return wxgetUserInfo();
		}).then(res => {
			if (!res.userInfo) return;
			let {
				encryptedData: encrypted_data,
				iv
			} = res;
			return mnpLogin({
				encrypted_data,
				iv,
				code
			});
		}).then(res => {
			resolve(res);
		});
	});
}


// 去登录
export function toLogin() {
	//#ifndef  H5 || APP-PLUS
	uni.showModal({
		title: '提示',
		content: '不登录则无法进行更多操作，点击去登录按钮前往登录',
		confirmText: '去登录',
		confirmColor: '#FF2C3C',
		success: res => {
			let {
				confirm
			} = res;
			if (confirm) {
				uni.navigateTo({
					url: '/pages/login/login'
				});
			}
		}
	});
	// #endif
	//#ifdef APP-PLUS
	uni.navigateTo({
		url: '/pages/login/login'
	});
	//#endif
	//#ifdef  H5
	const pathLogin = 'pages/login/login'
	let path = currentPage().route
	console.log(pathLogin)
	if (path != pathLogin) {
		uni.navigateTo({
			url: '/pages/login/login'
		})
	}
	// #endif
} 