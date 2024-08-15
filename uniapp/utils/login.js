import {
	silentLogin
} from '@/api/app';
import {
	isWeixinClient,
	currentPage,
	trottle,
	tabbarList
} from './tools'
import store from '@/store'
import Cache from './cache'
import {
	BACK_URL
} from '@/config/cachekey'
import wechath5 from './wechath5'
import {
	inputInviteCode
} from '@/api/user'


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
//小程序获取用户信息
export function getUserProfile() {
	return new Promise((resolve, reject) => {
		uni.getUserProfile({
			desc: '获取用户信息，完善用户资料 ',
			success: (res) => {
				resolve(res);
			},
			fail(res) {}

		})
	})

}

export const wxMnpLogin = trottle(_wxMnpLogin, 1000)
//小程序静默授权
async function _wxMnpLogin() {
	
	const code = await getWxCode()
	const {code:loginCode, data: loginData} = await silentLogin({
		code 
	})
	const {
		options,
		onLoad,
		onShow,
		route
	} = currentPage()
	if(loginCode != 1) return
	if (loginData.token && !loginData.is_new_user) {
		store.commit('LOGIN', loginData)
		onLoad && onLoad(options)
		onShow && onShow()
		const inviteCode = Cache.get("INVITE_CODE")
		if (inviteCode) {
			Cache.remove("INVITE_CODE")
			inputInviteCode({
				code: inviteCode
			})
		}
	} else {
		const loginRoute = '/pages/login/login'
		if (!tabbarList.includes(route)) {
			if(loginRoute.includes(route)) return
			uni.navigateTo({
				url: loginRoute
			})
		}
	}
}

export const toLogin = trottle(_toLogin, 1000)
// 去登录
function _toLogin() {
	uni.navigateTo({
		url: '/pages/login/login'
	});
	//#ifdef  H5
	const pathLogin = 'pages/login/login'
	let path = currentPage().route
	if (path != pathLogin) {
		uni.navigateTo({
			url: '/pages/login/login'
		})
	}
	// #endif
}
