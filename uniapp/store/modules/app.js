import {
	getUser
} from '@/api/user'
import {
	getCartNum
} from '@/api/store';
import {
	USER_INFO,
	TOKEN,
	CONFIG
} from '@/config/cachekey';
import Cache from '@/utils/cache'
const state = {
	config: Cache.get(CONFIG) || {
		center_setting: {},
		index_setting: {},
		navigation_menu: [],
		navigation_setting: {}
	},
	userInfo: {
		user_money: 0,
		user_integral: 0,
		coupon: 0
	},
	token: Cache.get(TOKEN) || null,
	cartNum: "",
};

const mutations = {
	LOGIN(state, opt) {
		state.token = opt.token;
		Cache.set(TOKEN, opt.token, 59 * 24 * 60 * 60);
		this.dispatch('getUser')
	},
	LOGOUT(state) {
		state.token = undefined;
		state.userInfo = {
			user_money: 0,
			user_integral: 0,
			coupon: 0
		}
		Cache.remove(TOKEN);
	},
	SETCARTNUM(state, num) {
		state.cartNum = num
	},
	SETUSERINFO(state, user) {
		state.userInfo = user
	},
	SETCONFIG(state, data) {
		state.config = Object.assign(state.config, data)
		Cache.set(CONFIG, state.config);
	}
};

const actions = {
	getCartNum({
		state,
		commit
	}) {
		return new Promise(resolve => {
			if (!state.token) return uni.removeTabBarBadge({
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
	},
};

export default {
	state,
	mutations,
	actions
};
