
<script>
	
	export default {
		globalData: {
			navHeight: ""
		},
		onLaunch: function() {
			this.getSystemInfo()
		},
		onShow: function() {
			
		},
		onHide: function() {
			console.log('App Hide')
		},
		methods: {
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
			
		}
	}
</script>

<style lang='scss'>
	@import 'styles/base.scss';
	/*每个页面公共css */
</style>
