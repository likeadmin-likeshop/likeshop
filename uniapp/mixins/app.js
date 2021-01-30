	import {
		toLogin
	} from '@/utils/login';

import {
	mapGetters
} from 'vuex'

export default {
	data() {
		return {

		};
	},
	onLoad(option) {
		// #ifdef H5
		if(this.isLogin) return
		toLogin();
		// #endif 
	},
	methods: {

	},
	computed: {
		...mapGetters(['isLogin']),
	}
};
