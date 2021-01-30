<script>
	export default {
		globalData: {
			navHeight: ""
		},
		onLaunch: function() {
			this.getSystemInfo()
		},
		onShow: function() {
			// #ifdef H5
			uni.getSystemInfo({
				success(e) {
					/* 窗口宽度大于420px且不在PC页面且不在移动设备时跳转至 PC.html 页面 */
					if (e.windowWidth > 420 && !window.top.isPC && !/iOS|Android/i.test(e.system)) {
						// window.location.pathname = 'https://java.crmeb.net/';
						/* 若你的项目未设置根目录（默认为 / 时），则使用下方代码 */
						window.location.pathname = '/static/html/pc.html';
					}
				}
			})
			// #endif
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
