<script>
	import {
		mapMutations,
		mapActions
	} from 'vuex'
	import {
		inputInviteCode
	} from '@/api/user'
	import {
		userShare,
		getConfig
	} from '@/api/app'
	import Cache from '@/utils/cache'
	import {
		strToParams,
		showModal,
		setTabbar
	} from '@/utils/tools'
	import {
		wxMnpLogin
	} from '@/utils/login'
	export default {
		globalData: {
			navHeight: ""
		},
		onLaunch: function(options) {
			uni.hideTabBar({
				animation: false
			})
			// 获取配置
			this.getConfigFun()
			
			this.getUser()
			// 获取分享
			this.getShareInfo()
			//获取系统信息
			this.getSystemInfo()
		},
		onShow: function(options) {
			
			//绑定邀请码
			this.bindCode(options)
		},
		onHide: function() {
			console.log('App Hide')
		},
		methods: {
			...mapMutations(['SETCONFIG']),
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
			async getShareInfo() {
				const {
					code,
					data
				} = await userShare()
				if (code == 1) {
					Cache.set('shareInfo', data)
				}

			},
			async getConfigFun() {
				try{
					const {
						code,
						data
					} = await getConfig()
					if (code == 1) {
						this.SETCONFIG(data)
						setTabbar()
						
					}
				}catch(e){
					uni.showTabBar()
				}
				
			},
			bindCode(options) {
				let invite_code = options.query.invite_code || strToParams(decodeURIComponent(options.query.scene))
					.invite_code
				if (invite_code) {
					inputInviteCode({
						code: invite_code
					}).then(res => {
						if (res.code == -1) {
							Cache.set("INVITE_CODE", invite_code)
						}
					})
				}
			}
		}
	}
</script>

<style lang='scss'>
	@import 'styles/base.scss';
	/*每个页面公共css */
	@import "components/uview-ui/index.scss";
</style>
