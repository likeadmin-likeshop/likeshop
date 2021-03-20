import {
	getUser
} from '@/api/user'
import {
	getCartNum
} from '@/api/store';
import {
	USER_INFO,
	TOKEN,
	LOGIN_NUM
} from '@/config/cachekey';
import Cache from '@/utils/cache'
const state = {
	config: {},
	userInfo: {
		user_money: 0,
		user_integral: 0,
		coupon: 0
	},
	token: Cache.get(TOKEN) || null,
	cartNum: "",
	//记录登录次数
	loginNum: Cache.get(LOGIN_NUM) || 0
};

const mutations = {
	LOGIN(state, opt) {
		state.token = opt.token;
		Cache.set(TOKEN, opt.token, 60 * 24 * 60 * 60);
	},
	LOGOUT(state) {
		state.token = undefined;
		Cache.remove(TOKEN);
	},
	SETCARTNUM(state, num) {
		state.cartNum = num
	},
	SETLOGINNUM(state, num) {
		state.loginNum = num
		Cache.set(LOGIN_NUM, num);

	},
	SETUSERINFO(state, user) {
		state.userInfo = user
	},
	SETCONFIG(state, data) {
		state.config = data
	}
};

const actions = {
	getCartNum({
		state,
		commit
	}) {
		return new Promise(resolve => {
			if (!state.token) return  uni.removeTabBarBadge({
				index: 2
			})
			getCartNum().then(res => {
				if (res.code == 1) {
					commit('SETCARTNUM', res.data.num)
					if (!res.data.num) return uni.removeTabBarBadge({
						index: 2
					})
					uni.setTabBarBadge({
						index: 2,
						text: String(res.data.num)
					})
					resolve()
				}
			})
		})
	},
	getUser({
		state,
		commit
	}) {
		return new Promise(resolve => {
			getUser().then(res => {
				if (res.code == 1) {
					commit('SETUSERINFO', res.data)
				}
				resolve()
			})
		})
	}
};

export default {
	state,
	mutations,
	actions
};
