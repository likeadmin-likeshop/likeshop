import {
	getUser
} from '@/api/user'
import {
	USER_INFO,
	TOKEN
} from '@/config/cachekey';
import Cache from '@/utils/cache'
const state = {
	userInfo: null,
	token: Cache.get(TOKEN) || null
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
};

const actions = {

};

export default {
	state,
	mutations,
	actions
};
