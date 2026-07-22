<template name="protocol-popup">
	<view @touchmove.stop.prevent="clear" v-show="showPopup">
		<view class="popup_mask1" @touchmove.stop.prevent="clear"></view>
		<view class="popup_mask" @touchmove.stop.prevent="clear"></view>
		
		<view class="popup_content">
			<view class="title">{{ title }}</view>
			<view class="content">
				请你务必审慎阅读、充分理解“服务协议”和“隐私政策”各条款，包括但不限于：为了更好的向你提供服务，我们需要收集你的设备标识、操作日志等信息用于分析、优化应用性能。你可阅读
				<text class="link" @click="linkClick(1)">《服务协议》</text>和
				<text class="link" @click="linkClick(2)">《隐私政策》</text>
				了解详细信息。如果你同意，请点击下面按钮开始接受我们的服务。
			</view>
			<view class="btn">
				<view class="flex-1">
					<button class="plain" @click="back">拒绝，仅浏览</button>
				</view>
				<view class="flex-1">
					<button @click="confirm">同意并继续</button>
				</view>
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
				default: "用户使用及隐私保护政策提示"
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
			const platform = uni.getSystemInfoSync().osName
			const agree = uni.getStorageSync(this.policyStorageKey)
			if (platform === 'android' || agree) {
				this.showPopup = false;
				uni.showTabBar({})
			} else {
				this.showPopup = true;
				uni.hideTabBar({})
			}
		},
		methods: {
			// 查看隐私协议或服务协议
			linkClick (num) {
				switch (num) {
					case 1:
						// 跳转服务协议
						this.$Router.push(this.protocolPath)
						break
					case 2:
						// 跳转隐私政策
						this.$Router.push(this.policyPath)
						break
				}
			},
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
				uni.showTabBar({})
				uni.setStorageSync(this.policyStorageKey, true)
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
		z-index: 1299;
	}

	.popup_mask {
		opacity: 1;
	}
	
	.popup_mask1 {
		position: fixed;
		bottom: 0;
		top: 0;
		left: 0;
		right: 0;
		z-index: 1298;
		background-color: #ffffff;
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
		z-index: 1300;

		.title {
			text-align: center;
			line-height: 120rpx;
			font-size: 32rpx;
			font-weight: 600;
		}
		
		.content {
			padding: 0 32rpx;
			text-indent: 1em;
		
			.link {
				color: #4982db;
			}
		}
		
		.btn {
			display: flex;
			flex: 1;
			margin-top: 30rpx;
			
			>view {
				margin: 20rpx;
				flex: 1;
			}
			button {
				color: $-color-white;
				background-color: $-color-primary;
			}
			.plain {
				color: $-color-primary;
				background-color: $-color-white;
				border: 1px solid $-color-primary;
			}
		}
	}
</style>
