<template>
	<view>
		<u-modal :value="showTips" ref="uModal" show-cancel-button :confirm-color="primaryColor" async-close
			confirm-text="前往绑定" @confirm="toSetting" @cancel="goBack">
			<view class="slot-content row-center" style="padding: 40rpx;">
				您暂未绑定手机号，请先绑定
			</view>
		</u-modal>
		<u-modal ref="uModalSet" :value="!showTips && showSetPwd" title="设置交易密码" show-cancel-button
			:confirm-color="primaryColor" async-close confirm-text="确定" @confirm="onSetPwd" @cancel="goBack">
			<view class="slot-content" style="padding: 40rpx;">
				<view style="font-size: 42rpx;">{{mobile}}</view>
				<view class="mt20">
					<u-input type="password" v-model="setPwd" :border="true" placeholder="请设置您的交易密码"
						style="width: 100%" />
				</view>
				<view class="mt20">
					<u-input type="password" v-model="comfirmPwd" :border="true" placeholder="再次确认交易密码"
						style="width: 100%" />
				</view>
			</view>
		</u-modal>
		<u-modal ref="uModalInput" :value="showConfirm" show-cancel-button :confirm-color="primaryColor" async-close
			confirm-text="确定" @confirm="onConfirm" @cancel="toSetting" cancel-text="忘记密码" title="请输入密码">
			<view class="slot-content row-center" style="padding: 40rpx;">
				<u-icon class="icon-close" name="close" @click="showInputPwd"></u-icon>
				<u-input type="password" v-model="pwd" :border="true" placeholder="请输入您的交易密码" style="width: 100%" />
			</view>
		</u-modal>
	</view>
</template>

<script>
	import {
		hasPayPassword,
		setPassword
	} from "@/api/user";
	import {
		mapGetters
	} from 'vuex'
	export default {
		name: "set-pay-pwd",
		data() {
			return {
				showSetPwd: false,
				showConfirm: false,
				pwd: '',
				setPwd: '',
				comfirmPwd: ''
			};
		},
		methods: {
			onSetPwd() {
				let {
					setPwd,
					comfirmPwd
				} = this
				this.$refs.uModalSet.clearLoading()
				if (!setPwd) {
					this.$toast({
						title: '请填写交易密码'
					});
					return;
				}
				if (!comfirmPwd) {
					this.$toast({
						title: '请填写确认密码'
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
					pay_password: setPwd
				};

				setPassword(data).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						});
						this.showSetPwd = false
					}
				})
			},
			goBack() {
				uni.navigateBack()
			},
			toSetting() {
				uni.navigateTo({
					url: '/pages/bundle/user_profile/user_profile'
				})
				this.$refs.uModal.clearLoading()
			},
			hasPayWord() {
				console.log(11)
				
				hasPayPassword().then(res => {
					console.log(res)
					if (res.code == 0) {
						this.showSetPwd = true
					}
				})
			},
			onConfirm() {

				this.$refs.uModalInput.clearLoading()
				this.$emit('confirm', this.pwd)
			},
			showInputPwd() {
				setTimeout(() => {
					this.pwd = ""
				}, 1000)
				this.showConfirm = !this.showConfirm
			}
		},
		computed: {
			...mapGetters(['userInfo']),
			mobile() {
				if (this.userInfo.mobile) {
					return this.userInfo.mobile.replace(/(\d{3})\d{4}(\d{4})/, '$1****$2')
				}
			},
			showTips() {
				console.log(this.userInfo)
				return Boolean(!this.userInfo.mobile)
			}
		}
	}
</script>

<style lang="scss" scoped>
	.icon-close {
		position: absolute;
		top: 30rpx;
		right: 30rpx;
	}
</style>
