<template>
	<view class="set-pwd">
		<view class="input-container bg-white">
			<view class="input-item row">
				<view class="input-label md normal">手机号</view>
				<u-input class="flex1" v-model="mobile" />
			</view>
			<view class="input-item row">
				<view class="input-label md normal">验证码</view>
				<u-input class="flex1" v-model="code" placeholder="请输入验证码" />
				<view class="get-code xs br60 row-center primary" @tap="sendSms">
					<view v-show="!showCount">获取验证码</view>
					<u-count-down v-show="showCount" ref="countDown" :show-days="false" :timestamp="time" separator="zh"
						color="#FF2C3C" separatorColor="#FF2C3C" bg-color="rgba(0, 0, 0, 0)" :show-hours="false"
						:show-minutes="false" :autoplay="false" @end="showCount = false" />
				</view>
			</view>
			<view class="input-item row">
				<view class="input-label md normal">交易密码</view>
				<u-input class="flex1" type="password" v-model="setPwd"
					placeholder="请输入新的交易密码" />
			</view>
			<view class="input-item row">
				<view class="input-label md normal">确认密码</view>
				<u-input class="flex1" type="password" v-model="comfirmPwd" placeholder="请再次确认密码" />
			</view>
			<button size="lg" type="primary" class="btn bg-primary white br60 row-center" @tap="retrievePayPasswordFun">
				确认
			</button>
		</view>
	</view>
</template>

<script>
	import {
		retrievePayPassword,
		send
	} from "@/api/user";
	import {
		mapGetters
	} from 'vuex'
	export default {
		data() {
			return {
				time: 59,
				showCount: false,
				setPwd: '',
				comfirmPwd: '',
				code: ''
			}
		},
		onLoad() {
		},
		methods: {
			retrievePayPasswordFun() {
				let {
					setPwd,
					comfirmPwd,
					code
				} = this
				if (!code) {
					this.$toast({
						title: '请输入验证码'
					});
					return;
				}
				if (!setPwd) {
					this.$toast({
						title: '请输入新的交易密码'
					});
					return;
				}
				if (!comfirmPwd) {
					this.$toast({
						title: '请输入确认密码'
					});
					return;
				}

				if (setPwd != comfirmPwd) {
					this.$toast({
						title: '两次密码输入不一致'
					});
					return;
				}
				if (setPwd.length < 4 || setPwd.length > 8) {
					this.$toast({
						title: '请输入长度为4-6位的密码'
					});
					return;
				}

				let data = {
					new_pay_password: setPwd,
					mobile: this.userInfo.mobile,
					code: code
				};

				retrievePayPassword(data).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						},{tab: 3});
					}
				})

			},
			sendSms() {
				let data = {
					mobile: this.userInfo.mobile
				}
				if (this.showCount) return
				send(data).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						});
						this.showCount = true
						this.$refs.countDown.start();
					}
				})
			},
		},
		computed: {
			...mapGetters(['userInfo']),
			mobile() {
				if (this.userInfo.mobile) {
					return this.userInfo.mobile.replace(/(\d{3})\d{4}(\d{4})/, '$1****$2')
				}
			},
		}
	}
</script>

<style lang="scss">
	.set-pwd {
		padding-top: 20rpx;

		.input-container {
			padding: 20rpx 0 100rpx;
			border-radius: 20rpx;

			.input-item {
				margin: 0 30rpx;
				height: 88rpx;
				margin-bottom: 30rpx;
				border-bottom: 1px solid #D7D7D7;

				.input-label {
					width: 180rpx;
					flex: none;
				}

				.get-code {
					width: 176rpx;
					height: 58rpx;
					flex: none;
					border: 1px solid $-color-primary;
				}
			}

			.btn {
				margin: 80rpx 30rpx 0;
			}
		}
	}
</style>
