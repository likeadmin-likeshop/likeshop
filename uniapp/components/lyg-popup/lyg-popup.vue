<template name="protocol-popup">
	<view @touchmove.stop.prevent="clear" v-show="showPopup">
		<view class="popup_mask" @touchmove.stop.prevent="clear"></view>
		<view class="popup_content">
			<view class="title">{{title}}</view>
			<view class="explain_text">
				请你务必认真阅读、充分理解“服务协议”和“隐私政策”各条款，包括但不限于：为了向你提供数据、分享等服务所要获取的权限信息。
				<view class="line">你可以阅读<navigator :url="protocolPath" class="path" hover-class="navigator-hover">《服务协议》
					</navigator>和<navigator :url="policyPath" class="path" hover-class="navigator-hover">《隐私政策》
					</navigator>了解详细信息。如您同意，请点击"同意"开始接受我们的服务。
				</view>
			</view>

			<view class="button">
				<view @tap="back">暂不使用</view>
				<view @tap="confirm">同意</view>
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		name: "lyg-popup",
		props: {
			title: {
				type: String,
				default: "服务协议和隐私政策"
			},
			// 协议路径
			protocolPath: {
				type: String
			},
			// 政策路径
			policyPath: {
				type: String
			},
			policyStorageKey: {
				type: String,
				default: "has_read_privacy"
			}
		},
		data() {
			return {
				showPopup: false
			};

		},
		created: function() {
			var that = this;
			console.log("lyg-popup created");
			uni.getStorage({
				key: this.policyStorageKey,
				success: (res) => {
					if (res.data) {
						that.showPopup = false;
						uni.showTabBar({});
					}
				},
				fail: function(e) {
					that.showPopup = true;
					uni.hideTabBar({});
					console.log(e)
				}
			});
		},
		methods: {
			// 禁止滚动
			clear() {
				return;
			},
			back() {
				this.$emit('popupState', false)
				// #ifdef APP-PLUS  
				if (uni.getSystemInfoSync().platform == 'ios') {
					const threadClass = plus.ios.importClass("NSThread");
					const mainThread = plus.ios.invoke(threadClass, "mainThread");
					// plus.ios.invoke(mainThread, "exit");
					//上面的不起效果下面的
					plus.ios.import("UIApplication").sharedApplication().performSelector("exit")
				} else if (uni.getSystemInfoSync().platform == 'android') {
					plus.runtime.quit();
				}
				// #endif
			},
			// 关闭弹框
			confirm() {
				this.showPopup = false;
				this.$emit('popupState', true);

				uni.setStorage({
					key: this.policyStorageKey,
					data: true
				});
				uni.showTabBar({});
			}
		}
	};
</script>

<style lang="scss">
	.popup_mask {
		position: fixed;
		bottom: 0;
		top: 0;
		left: 0;
		right: 0;
		background-color: rgba(0, 0, 0, 0.4);
		transition-property: opacity;
		transition-duration: 0.3s;
		opacity: 0;
		z-index: 98;

	}

	.popup_mask {
		opacity: 1;
	}

	.popup_content {
		overflow: hidden;
		box-sizing: border-box;
		padding: 40upx 20upx 0 20upx;
		position: fixed;
		bottom: 30%;
		border-radius: 8px;
		left: 50%;
		margin-left: -40%;
		right: 0;
		min-height: 400upx;
		background: #ffffff;
		width: 80%;
		z-index: 99;

		.title {
			text-align: center;
			font-size: 34upx;
			padding: 10upx 0 0 0;
		}

		.explain_text {
			font-size: 30upx;
			padding: 30upx 30upx 40upx 30upx;
			line-height: 38upx;

			.line {
				display: block;

				.path {
					color: #007aff;
					display: inline-block;
					text-align: center;
				}
			}
		}

		.button {
			display: flex;
			padding: 20upx;
			align-items: center;
			font-size: 34upx;
			justify-content: space-around;
			border-top: 1upx solid #f2f2f2;

			view {
				text-align: center;
			}
		}
	}
</style>
