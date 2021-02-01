import {
	getUser
} from '@/api/user'
import {
	getCartNum
} from '@/api/store';
import {
	USER_INFO,
	TOKEN
} from '@/config/cachekey';
import Cache from '@/utils/cache'
const state = {
	userInfo: null,
	token: Cache.get(TOKEN) || null,
	cartNum: ""
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
	}
};

const actions = {
	getCartNum({
		state,
		commit
	}) {
		if (!state.token) return
		getCartNum().then(res => {
			if (res.code == 1) {
				commit('SETCARTNUM', res.data.num)
			}
		})
	}
};

export default {
	namespaced: true,
	state,
	mutations,
	actions
};
