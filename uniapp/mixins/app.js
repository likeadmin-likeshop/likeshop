import {
		toLogin
	} from '@/utils/login';

	import {
		mapGetters
	} from 'vuex'

	import wechatH5 from '@/utils/wechath5'
	export default {
		data() {
			return {

			};
		},
		onLoad(option) {
			// #ifdef H5
			const {
				code
			} = option
			wechatH5.config()
			this.wxShare()
			if (code) {
				wechatH5.authLogin(code)
			}
			if (this.isLogin) return
			toLogin();
			// #endif 
		},
		methods: {
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
			...mapGetters(['isLogin']),
		}
	};
