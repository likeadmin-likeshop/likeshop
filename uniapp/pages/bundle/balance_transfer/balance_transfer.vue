<template>
	<view class="balance-transfer">
		<view class="contain bg-white">
			<input style="height: 100rpx;" v-model="userSn" type="text" placeholder="请输入对方会员ID/手机号码进行转账" />
		</view>
		<view class="contain transfer-money bg-white mt20">
			<view class="muted xs">转账金额</view>
			<view class="input row-center">
				<view style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</view>
				<input v-model="money" placeholder="0.00" />
				<view class="column" style="flex: none;">
					<view class="xs primary" style="text-align: right;" @tap="money = wallet.user_money">全部</view>
					<view class="xs mt10" style="color: #BBBBBB">钱包余额￥{{wallet.user_money}}</view>
				</view>
			</view>
			<view class="btn lg white row-center br60" @tap="transferBtn">转账</view>
			<navigator url="/pages/bundle/transfer_record/transfer_record" hover-class="none"
				class="mt20 nr lighter row-center">
				转账记录</navigator>
		</view>
		<view class="user contain bg-white mt20 " v-if="transferList.length">
			<view class="lg bold">最近转账</view>
			<view class="list">
				<view class="item row" v-for="(item, index) in transferList" :key="index" @tap="userSn=item.sn">
					<image class="avatar mr30" :src="item.avatar"></image>
					<view>
						<view class="md">{{item.nickname}}</view>
						<view class="xs muted">会员ID:{{item.sn}}</view>
					</view>
				</view>
			</view>
		</view>
		<u-modal :value="showTransferInfo" show-cancel-button title="确认转账给" :confirm-color="primaryColor" async-close
			confirm-text="确认转账" @confirm="showInputPwd" @cancel="showTransferInfo=false">
			<view class="slot-content row-center" style="padding: 40rpx 80rpx">
				<view class="transfer-user row">
					<image class="avatar mr30" :src="transferInfo.avatar"></image>
					<view>
						<view class="md">{{transferInfo.nickname}}</view>
						<view class="xs muted mt10">会员ID:{{transferInfo.sn}}</view>
					</view>
				</view>
			</view>
		</u-modal>
		<set-pay-pwd ref="setPayPwd" @confirm="transferFun"></set-pay-pwd>
	</view>
</template>

<script>
	import {
		hasPayPassword,
		transfer,
		getTransferRecent,
		setPassword,
		transferToInfo,
		getWallet
	} from "@/api/user";
	export default {
		data() {
			return {
				showTransferInfo: false,
				pwd: '',
				comfirmPwd: '',
				userSn: '',
				money: '',
				transferInfo: {},
				transferList: [],
				wallet: {},

			};
		},
		onLoad() {
			this.getTransferRecentFun()
			this.getWalletFun()
		},
		onShow() {
			setTimeout(() => {
				this.$refs.setPayPwd && this.$refs.setPayPwd.hasPayWord()
			})
		},
		methods: {
			getWalletFun() {
				getWallet().then(res => {
					if (res.code == 1) {
						this.wallet = res.data
					}
				})
			},
			showInputPwd() {
				this.showTransferInfo = false
				this.$refs.setPayPwd.showInputPwd()
			},
			getTransferRecentFun() {
				getTransferRecent().then(res => {
					if (res.code == 1) {
						this.transferList = res.data
					}
				})
			},
			async transferBtn() {
				let {
					userSn,
					money,
				} = this;
				if (!userSn) return this.$toast({
					title: "请输入对方会员ID/手机号码"
				})
				if (!money) return this.$toast({
					title: "请输入转账金额"
				})

				let data = {
					transferTo: userSn
				};
				// 校验会员信息
				const {
					code: vipCode,
					data: transferInfo
				} = await transferToInfo(data)
				if (vipCode != 1) return
				this.transferInfo = transferInfo
				this.showTransferInfo = true
			},
			transferFun(payPwd) {
				const {
					userSn,
					money,

				} = this
				let data = {
					transferTo: userSn,
					money: money,
					pay_password: payPwd
				};
				transfer(data).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						},{
							tab: 2,
							url: '/pages/bundle/transfer_record/transfer_record'
						});
						this.showInputPwd()
						this.getWalletFun()
						this.getTransferRecentFun()
					}
				})
			},
		}
	}
</script>

<style lang="scss">
	.balance-transfer {
		padding: 20rpx 30rpx;

		.contain {
			border-radius: 20rpx;
			padding: 0 24rpx;
		}

		.transfer-money {
			padding: 30rpx 45rpx;

			.input {
				border-bottom: $-solid-border;
				margin-top: 30rpx;

				input {
					width: 100%;
					height: 94rpx;
					text-align: left;
					font-size: 66rpx;
					margin-left: 30rpx;
				}
			}

			.btn {
				background: linear-gradient(79deg, #F95F2F 0%, #FF2C3C 100%);
				line-height: 84rpx;
				margin-top: 80rpx;
			}

		}

		.user {
			padding: 22rpx 25rpx;

			.list .item {
				padding: 26rpx 0;

				&:not(:last-of-type) {
					border-bottom: $-solid-border;
				}


			}

		}

		.avatar {
			width: 68rpx;
			height: 68rpx;
			border-radius: 50%;
			flex: none;
		}
	}

	/* 弹窗 */
	.balance-transfer .set-word input {
		border: var(--border);
		padding: 16rpx 20rpx;
		font-size: 28rpx;
		border-radius: 6rpx;
		margin-bottom: 20rpx;
	}

	.balance-transfer .phone {
		padding: 20rpx 0;
		font-size: 42rpx;
	}
</style>
