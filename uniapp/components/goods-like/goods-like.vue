<template>
	<view class="goods-like">
		<view class="title row-center">
			<text class="line"></text>
			<view class="row">
				<image class="mr20" src="/static/images/icon_like.png"></image>
				<text class="bold xxl">猜你喜欢</text>
			</view>
			<text class="line"></text>
		</view>
		<view class="goods">
			<scroll-view style="height: 340rpx; white-space: nowrap;" scroll-x="true" scroll-with-animation="true"
				@scroll="scrollBarChange">
				<navigator v-for="(item, index) in list" :key="index" hover-class="none"
					:url="'/pages/goods_details/goods_details?id=' + item.id" class="goods-item">
					<custom-image width="240rpx" height="240rpx" radius="10rpx" lazy-load :src="item.image">
					</custom-image>
					<view class="goods-name line1 mt10">{{item.name}}</view>
					<view class="price">
						<price-format color="#FF2C3C" :subscript-size="22" :second-size="22" :price="item.price"
							:weight="500"></price-format>
						<price-format class="ml10" :show-subscript="true" color="#999" :line-through="true"
							:subscript-size="22" :first-size="22" :second-size="22" :price="item.market_price">
						</price-format>
					</view>
				</navigator>
			</scroll-view>
			<view class="row-center mb10 mt20" v-if="list.length > 3">
				<cu-progress progressBarColor="#FF2C3C" :left="progressPer"></cu-progress>
			</view>
		</view>
	</view>
</template>

<script>
	import {
		getRect
	} from '@/utils/tools';
	export default {
		data() {
			return {
				progressPer: 0
			};
		},

		components: {},
		props: {
			list: {
				type: Array,
				default: () => []
			}
		},
		watch: {
			list: {
				handler: function() {
					this.$nextTick(function() {
						getRect(".goods-like", false, this).then(res => {
							this.rectWidth = res.width;
						});
					})
				},
				immediate: true,
				deep: true
			}
		},
		methods: {
			scrollBarChange(e) {
				let {
					progressPer
				} = this;
				let {
					scrollLeft,
					scrollWidth
				} = e.detail;
				progressPer = scrollLeft / (scrollWidth - this.rectWidth) * 100;
				progressPer = Number(progressPer.toFixed(0))
				this.progressPer = progressPer
			}
		}
	};
</script>
<style lang="scss">
	.goods-like .title {
		height: 100rpx;
		padding: 0 20rpx;
	}

	.goods-like .title .line {
		width: 58rpx;
		height: 1px;
		background-color: #ccc;
		margin: 0 22rpx;
	}

	.goods-like .title image {
		width: 38rpx;
		height: 38rpx;
	}

	.goods-like .title .like {
		padding: 1rpx 11rpx;
		background: linear-gradient(180deg, rgba(255, 44, 60, 1) 0%, rgba(249, 95, 47, 1) 100%);
		border-radius: 100px 100px 100px 0px;
	}

	.goods-like .goods {
		padding-bottom: 10rpx;
	}

	.goods-like .goods .goods-item {
		width: 240rpx;
		margin-left: 20rpx;
		display: inline-block;
	}

	.goods-like .goods .goods-item:last-of-type {
		margin-right: 20rpx;
	}
</style>
