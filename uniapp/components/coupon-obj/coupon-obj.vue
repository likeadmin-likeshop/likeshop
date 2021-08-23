<template>
	<view>
		<scroll-view style="height: 640rpx;background-color: #F6F6F6" scroll-y="true">
			<view class="coupon-obj">
				<view v-for="(item, index) in coupons" :key="index" class="mb20 bg-white" @tap="onSelect(item.id)">
					<view class="coupon-item row">
						<view class="price white column-center">
							<view class="xl">
								<price-format :subscript-size="34" :first-size="60" :second-size="50" :price="item.money" :weight="500"></price-format>
							</view>
							<view class="nr">{{item.use_condition}}</view>
						</view>
						<view class="row-between" style="flex: 1">
							<view class="info ml20">
								<view class="bold md bold mb10 line1">{{item.name}}</view>
								<view class="xxs lighter mb10">{{item.coupon_type}}</view>
								<view class="xxs lighter">{{item.use_time_tips}}</view>
							</view>
							<checkbox v-if="type == 0" :checked="selectId == item.id" class="mr20"></checkbox>
						</view>
					</view>
					<view class="xs" v-if="item.tips" style="padding: 14rpx 20rpx">
						{{item.tips}}
					</view>
				</view>
			</view>
			<view v-if="coupons.length == 0" class="column-center" style="padding-top: 50rpx">
				<image class="img-null" src="/static/images/coupon_null.png"></image>
				<text class="muted">暂无优惠券～</text>
			</view>
		</scroll-view>

		<view class="column-center">
			<view class="bg-primary white row-center br60 mb10 lg" style="margin-top: 12rpx;width: 710rpx;height: 74rpx" @tap="onConfirmCoupon">
				确定
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				coupons: [],
				selectId: ""
			};
		},


		props: {
			list: {
				type: Array,
				default: () => []
			},
			type: {
				type: Number
			},
			couponId: [Number, String]
		},
		watch: {
			list: {
				handler(val) {
					this.coupons = val
				},
				immediate: true,
			},
			couponId: {
				handler(val) {
					this.selectId = val
				},
				immediate: true,
			}
		},
		methods: {
			onSelect(id) {
				const {
					coupons,
					type,
					selectId
				} = this;
				if (type == 1) return;
				this.selectId = id == selectId ? "" : id
				
			},
			onConfirmCoupon() {
				this.$emit("change", this.selectId)
			}

		}
	};
</script>
<style>
	.coupon-obj {
		padding: 20rpx 24rpx;
	}

	.coupon-obj .coupon-item {
		position: relative;
		height: 160rpx;
		background-image: url(../../static/images/coupon_bg.png);
		background-size: 100% 100%;
	}

	.coupon-obj .coupon-item .price {
		width: 200rpx;
	}

	.coupon-obj .coupon-item .btn {
		position: absolute;
		right: 20rpx;
		bottom: 20rpx;
		padding: 0 49rpx;
	}
</style>
