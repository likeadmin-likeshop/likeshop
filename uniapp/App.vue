<script>
	import {
		mapMutations,
		mapActions
	} from 'vuex'
	import {
		userShare,
		getConfig
	} from '@/api/app'
	import Cache from '@/utils/cache'
	import {
		strToParams
	} from '@/utils/tools'
	export default {
		globalData: {
			navHeight: ""
		},
		onLaunch: function(options) {
			console.log("onLaunch:####", options);
			// 获取配置
			this.getConfigFun()
			if (this.isLogin) {
				this.getUser()
			}
			//更新登录次数
			//#ifdef MP-WEIXIN
			this.SETLOGINNUM(0)
			//#endif
			//获取系统信息
			this.getSystemInfo()

		},
		onShow: function() {

		},
		onHide: function() {
			console.log('App Hide')
		},
		methods: {
			...mapMutations(['SETLOGINNUM', 'SETCONFIG']),
			...mapActions(['getUser']),
			getSystemInfo() {
				uni.getSystemInfo({
					success: res => {
						let {
							statusBarHeight,
							platform
						} = res;
						let navHeight;

						if (platform == 'ios' || platform == 'devtools') {
							navHeight = statusBarHeight + 44;
						} else {
							navHeight = statusBarHeight + 48;
						}
						this.globalData.navHeight = navHeight;

					},
					fail(err) {
						console.log(err);
					}

				});
			},
			async getConfigFun() {
				const {
					code,
					data
				} = await getConfig()
				if (code == 1) {
					this.SETCONFIG(data)
				}
			},
		}
	}
</script>

<style lang='scss'>
	@import 'styles/base.scss';
	/*每个页面公共css */
    @import "components/uview-ui/index.scss";
</style>
