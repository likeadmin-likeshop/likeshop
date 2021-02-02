<template>

	<view class="login">
		<!-- #ifdef MP-WEIXIN -->
		<view class="mpwx-login column-center">
			<view class="avatar">
				<open-data type="userAvatarUrl"></open-data>
			</view>
			<view class="user-name mt20">
				<open-data type="userNickName"></open-data>
			</view>
			<view class="title xxl mb20 bold">微信授权登录</view>
			<button size="lg" class="white br60 row-center btn" open-type="getUserInfo" @getuserinfo="getUserInfo">
				<image class="mr10 image" src="/static/images/icon_wechat.png"></image>
				<text>微信一键授权</text>
			</button>
			<view class="muted mt20">微信授权登录后才可进行更多操作哦</view>
		</view>
		<!--  #endif -->
		<!-- #ifdef H5 || APP-PLUS -->
		<view class="h5-login">
			<view>
				<image class="logo" src="/static/images/shop_logo.png"></image>
				<view class="input">
					<uni-easyinput v-model="account" style="width: 100%;" placeholder="请输入账户/手机号" :input-border="false"></uni-easyinput>
				</view>
				<view class="input row">
					<uni-easyinput v-model="password" type="password" style="flex: 1;" placeholder="请输入密码" :input-border="false"></uni-easyinput>
					<view>忘记密码</view>
				</view>
				<button style="margin: 80rpx 0 50rpx;" size="lg" class="br60" type="primary" @click="loginFun">登录</button>
				<view class="row-between">
					<view class="lighter">短信验证码登录</view>
					<view class="lighter">注册账号</view>
				</view>
			</view>
			<view class="flex1"></view>
			<view class="mb20 sm row">
				已阅读并同意LikeShop
				<navigator class="primary" hover-class="none">《服务协议》</navigator>
				和
				<navigator class="primary" hover-class="none">《隐私协议》</navigator>
			</view>
		</view>
		<!--  #endif -->
	</view>
</template>

<script>
	import {
		wxLogin
	} from '@/utils/login';
	import {
		mapMutations
	} from 'vuex'
	import {
		accountLogin,
		codeLogin,
		sendSms,
		wxpLogin
	} from '@/api/app';
	import {
		BACK_URL
	} from '@/config/cachekey'
	export default {
		data() {
			return {
				password: '',
				account: '',
				code: '',
			};
		},

		components: {},
		props: {},
		methods: {
			...mapMutations(['LOGIN']),
			async getUserInfo(e) {
				if (!e.detail.userInfo) return;
				uni.showLoading({
					title: '登录中...',
					mask: true
				});
				let {
					encryptedData: encrypted_data,
					iv
				} = e.detail;
				const {
					code,
					data
				} = await wxLogin({
					encrypted_data,
					iv
				})
				uni.hideLoading()
				if (code == 1) {
					this.LOGIN(data)
					uni.navigateBack();
				} else {
					this.$toast({
						title: '登录失败，请稍后再试'
					});
				}
			},
			async loginFun() {
				const {
					account,
					password
				} = this
				const {
					code,
					data
				} = await accountLogin({
					account,
					password,
					client: 2
				})
				if (code == 1) {
					this.LOGIN(data)
					const pages = getCurrentPages();
					const prevPage = pages[pages.length - 2]
					if (prevPage) {
						uni.navigateBack()
					} else {
						uni.reLaunch({
							url: '/pages/index/index'
						})
					}
				}
			}

		}
	};
</script>
<style lang="scss">
	page {
		background-color: #fff;
		text-align: center;

		.login {
			height: 100vh;

			.mpwx-login {
				height: 100%;
				.avatar {
					display: inline-block;
					width: 120rpx;
					height: 120rpx;
					border-radius: 50%;
					border: 1px solid #eee;
					overflow: hidden;


					.user-name {
						margin-bottom: 40rpx;
						height: 40rpx;
					}

				}

				.image {
					width: 50rpx;
					height: 50rpx;
				}

				.btn {
					background-color: #09BB07;
					width: 580rpx;
					margin: 80rpx auto 0;
				}
			}


			.h5-login {
				padding-top: 160rpx;
				display: flex;
				flex-direction: column;
				align-items: center;
				height: 100%;
				box-sizing: border-box;

				.logo {
					width: 280rpx;
					height: 80rpx;
					margin-bottom: 70rpx;
				}

				.input {
					width: 670rpx;
					border-bottom: $-solid-border;
					margin-top: 30rpx;
				}
			}
		}
	}
</style>
