<template>
	<view class="writeoff-order">
		
		<template v-if="detail.id">
			<view class="list">
				<view class="item bg-white">
					<view class="row-between title">
						<view>联系人：{{detail.consignee}}</view>
						<view :class="[detail.verification_status == 0 ? 'primary' : 'muted']">{{detail.verification_status_desc}}</view>
					</view>
					<order-goods :list="detail.order_goods"></order-goods>
				</view>
			</view>
			<view class="btns">
				<button class="bg-primary br60 white btn" size="lg" @tap="showModal=true">已提货</button>
				<navigator class="mt20" open-type="navigateBack" :delta="1" hover-class="none">
					<button class="bg-white br60 btn" size="lg">返回核销列表</button>
				</navigator>
			</view>
		</template>
		<template v-else>
			<view  class="column-center" style="padding-top: 200rpx">
				<image class="img-null" src="/static/images/order_null.png"></image>
				<text class="lighter">抱歉，该订单不存在！</text>
				<view class="btns" style="margin-top: 100rpx;">
					<navigator style="width: 100%;" open-type="navigateBack" :delta="1" hover-class="none">
						<button class="bg-primary br60 white" size="lg">返回核销列表</button>
					</navigator>
				</view>
			</view>
		</template>
		<u-modal ref="uModalInput" v-model="showModal" show-cancel-button :confirm-color="primaryColor"
			confirm-text="确定" @confirm="handleVerificationConfirm" title="确认核销" content="是否确认核销？">
		</u-modal>
		
		<loading-view v-if="isFirstLoading"></loading-view>
	</view>
</template>

<script>
	import {
		verificationConfirm,
		verification
	} from '@/api/order'
	export default {
		data() {
			return {
				detail: {},
				showModal: false,
				isFirstLoading: true
			}
		},
		methods: {
			verificationFun() {
				verification({
					pickup_code: this.code
				}).then(res => {
					this.isFirstLoading = false
					if(res.code == 1) {
						this.detail = res.data
					}
				})
			},
			handleVerificationConfirm() {
				verificationConfirm({
					id: this.detail.id
				}).then(res => {
					if(res.code == 1) {
						uni.$emit('refreshverify')
						this.$toast({
							title: res.msg
						}, {
							tab: 3, 
							url: 1
						})
					}
				})
			}
		},
		async onLoad(options) {
			this.code = options.code
			this.verificationFun()
			console.log(options)
		},
	}
</script>

<style lang="scss">
	.writeoff-order {
		.list {
			padding: 20rpx;
			.item {
				border-radius: 10rpx;
				&:not(:last-of-type) {
					margin-bottom: 20rpx;
				}
				.title {
					padding: 20rpx;
				}
			}
		}
		.btns {
			width: 100%;
			padding: 0 40rpx 50rpx;
		}
	}
</style>
