<template>
	<!-- pages/login/login.wxml -->
	<view class="login column-center">
		<view class="avatar">
			<open-data type="userAvatarUrl"></open-data>
		</view>
		<view class="user-name mt20">
			<open-data type="userNickName"></open-data>
		</view>
		<view class="title xxl mb20 bold">微信授权登录</view>
		<button size="lg" class="white br60 row-center btn" open-type="getUserInfo" @getuserinfo="getUserInfo">
			<image class="mr10" src="/static/images/icon_wechat.png"></image>
			<text>微信一键授权</text>
		</button>
		<view class="muted mt20">微信授权登录后才可进行更多操作哦</view>
	</view>
</template>

<script>
	import {
		wxLogin
	} from '@/utils/wxutil';
	import {
		mapMutations
	} from 'vuex'

	export default {
		data() {
			return {};
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
			}

		}
	};
</script>
<style>
	page {
		background-color: #fff;
		text-align: center;
	}

	.login {
		height: 100vh;

	}

	.login .avatar {
		display: inline-block;
		width: 120rpx;
		height: 120rpx;
		border-radius: 50%;
		border: 1px solid #eee;
		overflow: hidden;
	}

	.login .user-name {
		margin-bottom: 40rpx;
		height: 40rpx;
	}

	.login image {
		width: 50rpx;
		height: 50rpx;
	}

	.login .btn {
		background-color: #09BB07;
		width: 580rpx;
		margin: 80rpx auto 0;
	}
</style>
