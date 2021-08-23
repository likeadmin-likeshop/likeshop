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
			<view class="title xxl mt20 bold">微信授权登录</view>
			<button size="lg" class="white br60 row-center btn" @click="mnpLoginFun">
				<image class="mr10 image" src="/static/images/icon_wechat.png"></image>
				<text>微信一键授权</text>
			</button>
			<view class="muted mt20">微信授权登录后才可进行更多操作哦</view>
		</view>
		<!--  #endif -->
		<!-- #ifdef H5 || APP-PLUS -->
		<view class="h5-login" v-if="!isWeixin">
			<image class="logo" :src="appConfig.shop_login_logo"></image>
			<view v-if="loginType == 0">
				<view class="input">
					<u-input v-model="account" style="width: 100%;" placeholder="请输入账户" :input-border="false" />
				</view>
				<view class="input row" style="padding: 15rpx 0;">
					<u-input v-model="password" type="password" style="flex: 1;" :password-icon="false" placeholder="请输入密码"
					 :input-border="false" />
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
							<u-count-down ref="countDown" :show-days="false" :timestamp="time" :showColon="false" separator="zh" color="#FF2C3C"
							 separator-color="#FF2C3C" :show-hours="false" :show-minutes="false" :autoplay="false" v-show="!canSendSms" @end="countDownFinish()" />
						</view>
					</view>
				</view>
			</view>
			<button style="margin: 80rpx 0 50rpx;width: 680rpx;" size="lg" class="br60" type="primary" @click="loginFun">登录</button>
			<view class="row-between" style="width: 680rpx;">
				<view class="lighter" @click="changeLoginType">{{loginType == 0 ? "短信验证码登录" : "账号登录"}}</view>
				<navigator class="lighter" url="/pages/register/register" hover-class="none">注册账号</navigator>
			</view>
			<view class="flex1 wx-login">
				<!-- #ifdef APP-PLUS -->
				<view v-if="appConfig.app_wechat_login">
					<u-divider>其他登录方式</u-divider>
					<view @click="appWxLogin">
						<image class="image" src="/static/images/icon_wechat.png"></image>
						<view class="sm">微信登录</view>
						<text selectable>{{text}}</text>
					</view>
				</view>
				<!-- #endif -->
			</view>
			<view class="mb20 sm row">
				已阅读并同意
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
		mapMutations,
		mapActions,
		mapGetters
	} from 'vuex'
	import {
		accountLogin,
		codeLogin,
		sendSms,
		wxpLogin,
		smsCodeLogin,
		opLogin,
		authLogin
	} from '@/api/app';
	import {
		inputInviteCode
	} from '@/api/user'
	import wechath5 from '@/utils/wechath5'
	import {
		isWeixinClient,
		currentPage,
		client
	} from '@/utils/tools'
	import {
	} from '@/utils/tools'
	import {
		SMSType
	} from "@/utils/type"
	import Cache from "@/utils/cache"
	import {
		BACK_URL
	} from '@/config/cachekey'
	import {getWxCode, getUserProfile} from '@/utils/login'
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
				isWeixin: '',
				loginType: 0,
				smsCode: '',
				time: 59,
				canSendSms: true,
				telephone: "",
				text: ''
			};
		},

		async onLoad(option) {
			
			// #ifdef H5
			// H5微信登录
			this.isWeixin = isWeixinClient()
			if (this.isLogin) {
				uni.switchTab({
					url: '/pages/index/index'
				})
				return
			}
			if (this.isWeixin) {
				const {
					code
				} = option
				if (code) {
					const data = await wechath5.authLogin(code)
					this.loginHandle(data)
				} else {
					wechath5.getWxUrl()
				}
			}
			// #endif
		},
		onUnload() {
			
		},
		methods: {
			...mapMutations(['LOGIN']),
			...mapActions(['getUser']),
			countDownFinish() {
				this.canSendSms = true;
			},
			// 小程序登录
			async mnpLoginFun() {
				const {userInfo: {avatarUrl, nickName, gender}} = await getUserProfile()
				uni.showLoading({
					title: '登录中...',
					mask: true
				});
				const wxCode = await getWxCode()
				const {code, data, msg} = await authLogin({
					code: wxCode,
					nickname: nickName,
					headimgurl: avatarUrl,
				})
				if(code == 1) {
					this.loginHandle(data)
				}else {
					this.$toast({
						title: msg
					})
				}
			},
			// 账号登录
			async loginFun() {
				const {
					account,
					password,
					telephone,
					smsCode
				} = this
				if (this.loginType == 0) {
					const {
						code,
						data
					} = await accountLogin({
						account,
						password,
						client: client
					})
					if (code == 1) {
						this.loginHandle(data)
					}
				} else {
					if (!telephone) {
						this.$toast({
							title: '请填写手机号'
						});
						return;
					}
					if (!smsCode) {
						this.$toast({
							title: '请填写手机验证码'
						});
						return;
					}
					smsCodeLogin({
						account: telephone,
						code: smsCode,
					}).then(res => {
						if (res.code == 1) {
							this.loginHandle(res.data)
						}
					})
				}
			},
			// 登录结果处理
			async loginHandle(data) {
				this.LOGIN(data)
				uni.hideLoading()
				const inviteCode = Cache.get("INVITE_CODE")
				if (inviteCode) {
					inputInviteCode({
						code: inviteCode
					})
				}
				// #ifdef H5
				location.replace('/mobile' + (Cache.get(BACK_URL) || '/'))
				Cache.remove(BACK_URL)
				//#endif
				// #ifdef MP-WEIXIN  || APP-PLUS
				uni.navigateBack({
					success(){
						// 刷新上一页
						const {onLoad, options} = currentPage()
						onLoad && onLoad(options)
					}
				})
				//#endif
				
			},
			changeLoginType() {
				if (this.loginType == loginType.ACCOUNT_LOGIN) {
					this.loginType = loginType.SMS_CODE_LOGIN
				} else if (this.loginType == loginType.SMS_CODE_LOGIN) {
					this.loginType = loginType.ACCOUNT_LOGIN
				}
			},
			// 发送验证码
			$sendSms() {
				if (this.canSendSms == false) {
					return;
				}
				if (!this.telephone) {
					this.$toast({
						title: '请填写手机号信息～'
					})
					return;
				}

				sendSms({
					mobile: this.telephone,
					key: SMSType.LOGIN
				}).then(res => {
					if (res.code == 1) {
						this.canSendSms = false;
						this.$refs.countDown.start();
						this.$toast({
							title: res.msg
						});
					}
				})
			},
			// app微信登录
			async appWxLogin() {
				uni.login({
					provider:'weixin',
					success: (res) => {
						uni.showLoading({
							title: '登录中...',
							mask: true
						});
						const {openid,access_token,} = res.authResult
						opLogin({
							openid,
							access_token
						}).then(res => {
							uni.hideLoading()
							if(res.code == 1) {
								this.loginHandle(res.data)
							}
						})
					}
				})
				
				
			}
		},
		computed: {
			...mapGetters(['appConfig'])
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
				}
				.user-name {
					height: 40rpx;
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
				padding-top: 100rpx;
				display: flex;
				flex-direction: column;
				align-items: center;
				height: 100%;
				box-sizing: border-box;

				.logo {
					width: 280rpx;
					height: 80rpx;
					margin-bottom: 50rpx;
				}

				.input {
					width: 670rpx;
					border-bottom: $-solid-border;
					margin-top: 30rpx;
				}

				.sms-btn {
					border: 1px solid $-color-primary;
					width: 176rpx;
					height: 60rpx;
					box-sizing: border-box;
				}

				.wx-login {
					margin-top: 60rpx;

					.image {
						margin-top: 40rpx;
						width: 80rpx;
						height: 80rpx;
					}
				}
			}
		}
	}
</style>
