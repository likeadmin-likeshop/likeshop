import {
	toLogin
} from '@/utils/login';

import {
	mapGetters,
	mapMutations
} from 'vuex'
import wechatH5 from '@/utils/wechath5'

import {isWeixinClient, currentPage} from '@/utils/tools'


export default {
	data() {
		return {

		};
	},
	async onLoad(option) {
		const {options, $onLoad, onShow} = currentPage()
		uni.navigateBack({
			delta:0
		})
		// #ifdef H5
		if (isWeixinClient()) {
			const {
				code
			} = option
			wechatH5.config()
			this.wxShare()
			if (code) {
				await wechatH5.authLogin(code)
				this.SETLOGINNUM(0)
				const {options, onLoad, onShow} = currentPage()
				console.log(options, onLoad, onShow)
				onLoad && onLoad(options)
				onShow && onShow()
			}
		}
		console.log(this.isLogin)
		if (this.isLogin) return
		toLogin();
		// #endif 
	},
	methods: {
		...mapMutations(['SETLOGINNUM']),
		wxShare() {
			const option = {
				shareTitle: "100%开源免费商用电商系统",
				shareLink: window.location.origin,
				shareImage: "",
				shareDesc: "likeshop已经把小程序、安卓APP、苹果APP都免费开源出来了"
			}
			wechatH5.share(option)
		}
	},
	computed: {
		...mapGetters(['isLogin', 'loginNum']),
	}
};
