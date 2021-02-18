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
		<view class="h5-login" v-if="!isWeixin">
			<image class="logo" src="/static/images/shop_logo.png"></image>
			<view v-if="loginType == 0">
				<view class="input">
					<u-input v-model="account" style="width: 100%;" placeholder="请输入账户" :input-border="false" />
				</view>
				<view class="input row" style="padding: 15rpx 0;">
					<u-input v-model="password" type="password" style="flex: 1;" :password-icon="false" placeholder="请输入密码" :input-border="false" />
					<navigator style="width: 132rpx;border-left: 1rpx solid #CCC;" url="/pages/forget_pwd/forget_pwd" hover-class="none">忘记密码</navigator>
				</view>
			</view>
			<view v-if="loginType == 1">
				<view class="input">
					<u-input v-model="telephone" style="width: 100%;" placeholder="手机号" :input-border="false" />
				</view>
				<view class="input row" style="padding: 15rpx 0;">
					<u-input v-model="smsCode" style="flex: 1;" placeholder="请输入验证码" :input-border="false" />
					<view class="row">
						<view class="sms-btn primary sm row-center br60" @click="$sendSms">
							<view v-show="canSendSms">获取验证码</view>
							<u-count-down
							ref="countDown"
							:show-days="false"
							:timestamp="time"
							:showColon="false"
							color="#FF2C3C"
							:show-hours="false"
							:show-minutes="false"
                            :autoplay="false"
							v-show="!canSendSms" 
							@end="countDownFinish()"
							/>
						</view>
					</view>
				</view>
			</view>
			<button style="margin: 80rpx 0 50rpx;width: 680rpx;" size="lg" class="br60" type="primary" @click="loginFun">登录</button>
			<view class="row-between" style="width: 680rpx;">
				<view class="lighter" @click="changeLoginType">{{loginType == 0 ? "短信验证码登录" : "账号登录"}}</view>
				<navigator class="lighter" url="/pages/register/register" hover-class="none">注册账号</navigator>
			</view>
			<view class="flex1"></view>
			<view class="mb20 sm row">
				已阅读并同意LikeShop
				<navigator class="primary" hover-class="none" url="/pages/bundle/server_explan/server_explan?type=0">《服务协议》</navigator>
				和
				<navigator class="primary" hover-class="none" url="/pages/bundle/server_explan/server_explan?type=1">《隐私协议》</navigator>
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
		mapMutations,
		mapActions
	} from 'vuex'
	import {
		accountLogin,
		codeLogin,
		sendSms,
		wxpLogin,
		smsCodeLogin
	} from '@/api/app';
	import  wechath5 from '@/utils/wechath5'
	import {isWeixinClient} from '@/utils/tools'
	import{client} from '@/utils/tools'
	import {SMSType} from "@/utils/type"
	const loginType = {
	    ACCOUNT_LOGIN: 0,
	    SMS_CODE_LOGIN: 1,
	}
	export default {
		data() {
			return {
				password: '',
				account: '',
				code: '',
				isWeixin: isWeixinClient(),
				loginType: 0,
				smsCode: '',
				time: 60,
				canSendSms: true,
				telephone: ""
			};
		},

		async onLoad(option) {
			// #ifdef H5
			if (isWeixinClient()) {
				const {
					code
				} = option
				if (code) {
					await wechath5.authLogin(code)
					this.loginHandle()
				}else {
					wechath5.getWxUrl()
				}
			}
			// #endif 
		},
		methods: {
			...mapMutations(['LOGIN']),
			...mapActions(['getUser']),
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
					this.getUser()
					uni.navigateBack();
				} else {
					this.$toast({
						title: '登录失败，请稍后再试'
					});
				}
			},
            countDownFinish() {
                this.canSendSms = true;
            },
			async loginFun() {
				const {
					account,
					password,
					telephone,
					smsCode
				} = this
				if(this.loginType == 0) {
					const {
						code,
						data
					} = await accountLogin({
						account,
						password,
						client: client
					})
					if (code == 1) {
						this.LOGIN(data)
						this.loginHandle()
					}
				}
				else {
					if(!telephone) {
						this.$toast({title: '请填写手机号'});
						return;
					}
					if(!smsCode) {
						this.$toast({title: '请填写手机验证码'});
						return;
					}
					smsCodeLogin({
						account: telephone, 
						code: smsCode,
					}).then(res => {
						 if(res.code == 1) {
							this.LOGIN(res.data)
							this.loginHandle()
						}
					})
				}
			},
			loginHandle() {
				this.getUser()
				const pages = getCurrentPages();
				const prevPage = pages[pages.length - 2]
				if (prevPage) {
					uni.navigateBack()
				} else {
					uni.switchTab({
						url: '/pages/index/index'
					})
				}
			},
			changeLoginType() {
				if(this.loginType == loginType.ACCOUNT_LOGIN) {
					this.loginType = loginType.SMS_CODE_LOGIN
				}
				else if(this.loginType == loginType.SMS_CODE_LOGIN) {
					this.loginType = loginType.ACCOUNT_LOGIN
				}
			},
			$sendSms() {
				if(this.canSendSms == false) {
					return;
				}
				if(!this.telephone) {
					this.$toast({title: '请填写手机号信息～'})
					return; 
				}
				
				sendSms({
					mobile: this.telephone, 
					key: SMSType.LOGIN
				}).then(res => {
					if(res.code == 1) {
						this.canSendSms = false;
						this.$refs.countDown.start();
						this.$toast({title: res.msg});
					}
				})
			},
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
				.sms-btn {
					border: 1rpx solid $-color-primary;
					width: 176rpx;
					height: 60rpx;
					box-sizing: border-box;
				}
			}
		}
	}
</style>
