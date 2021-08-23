<template>
	<view class="goods-list">
		<view v-if="type === 'double'" class="goods-double row-between">
			<navigator v-for="(item, index) in list" :key="index" class="item bg-white mt20" hover-class="none" open-type="navigate"
			 :url="'/pages/goods_details/goods_details?id=' + (isBargain ? item.goods_id : item.id)">
				<view class="goods-img" style="width: 347rpx;height:347rpx;">
					<custom-image :lazy-load="true" width="347rpx" height="347rpx" radius="10rpx" lazy-load :src="item.image"></custom-image>
				</view>
				<view class="goods-info">
					<view class="goods-name line2">{{item.name}}</view>
					<view class="price mt10 row">
						<price-format color="#FF2C3C"  class="mr10" :first-size="34" :second-size="26" :subscript-size="26" :price="item.price" :weight="500"></price-format>
						<price-format class="muted" :firstSize="24" :secondSize="24" :subscript-size="24" line-through :price="item.market_price || item.activity_price"></price-format>
					</view>
				</view>
			</navigator>
		</view>
		<view v-if="type === 'hot'" class="goods-hot">
			<navigator v-for="(item, index) in list" :key="index" class="item bg-white mt20 row" hover-class="none" open-type="navigate"
			 :url="'/pages/goods_details/goods_details?id=' + item.id">
				<view class="goods-img" style="width: 180rpx;height:180rpx;">
					<custom-image :lazy-load="true" width="180rpx" height="180rpx" radius="6rpx" lazy-load :src="item.image"></custom-image>
				</view>
				<view class="goods-info ml20">
					<view class="goods-name line2 mb10">{{item.name}}</view>
					<text class="sale br60 xxs">已有{{item.sales_sum}}人购买</text>
					<view class="row-between  mt10">
						<view class="price mt10 row">
							<price-format color="#FF2C3C"  class="mr10" :first-size="34" :second-size="26" :subscript-size="26" :price="item.price" :weight="500"></price-format>
							<price-format class="muted" :firstSize="24" :secondSize="24" :subscript-size="24" line-through :price="item.market_price"></price-format>
						</view>
						<image class="icon-md" src="/static/images/icon_go_red.png"></image>
					</view>
				</view>
				<image class="paixu" :src="'/static/images/No.' + (index < 3 ? index : 3) + '.png'"></image>
				<view class="number xxs">{{ index + 1 }}</view>
			</navigator>
		</view>
		<view v-if="type === 'home-hot'" class="goods-home-hot goods-hot">
			<navigator v-for="(item, index) in list" :key="index" class="item bg-white mb20 row" hover-class="none" open-type="navigate"
			 :url="'/pages/goods_details/goods_details?id=' + item.id">
				<view class="goods-img">
					<custom-image :lazy-load="true" width="240rpx" height="240rpx" radius="6rpx" lazy-load :src="item.image"></custom-image>
				</view>
				<view class="goods-info ml20 mr20">
					<view class="goods-name line2 mb10">{{item.name}}</view>
					<text class="sale br60 xxs">已有{{item.sales_sum}}人购买</text>
					<view class="row-between  mt10">
						<view class="price mt10 row">
							<price-format color="#FF2C3C"  class="mr10" :first-size="34" :second-size="26" :subscript-size="26" :price="item.price" :weight="500"></price-format>
							<price-format class="muted" :firstSize="24" :secondSize="24" :subscript-size="24" line-through :price="item.market_price"></price-format>
						</view>
						<button type="primary" class="br60" size="xs">去购买</button>
					</view>
				</view>
				<image class="paixu" :src="'/static/images/No.' + (index < 3 ? index : 3) + '.png'"></image>
				<view class="number">{{ index + 1 }}</view>
			</navigator>
		</view>
		<view v-if="type === 'new'" class="goods-new">
			<navigator v-for="(item, index) in list" :key="index" class="item bg-white mt20 row" hover-class="none" open-type="navigate"
			 :url="'/pages/goods_details/goods_details?id=' + item.id">
				<view class="goods-img">
					<custom-image :lazy-load="true" width="240rpx" height="240rpx" radius="10rpx" lazy-load :src="item.image"></custom-image>
				</view>
				<view class="goods-info ml20 mr20 flex1">
					<view class="goods-name line2 mb20">{{item.name}}</view>
					<view class="row-between muted xxs ">
						<view class="line-through">
							<text>原价</text>
							<price-format :second-size="22" :first-size="22" :subscript-size="22" :price="item.market_price"></price-format>
						</view>
						<view>{{item.sales_sum}}人购买</view>
					</view>
					<view class="row-between  mt10">
						<price-format color="#FF2C3C" :first-size="38" :subscript-size="26"  :second-size="26" :price="item.price"
						 :weight="500"></price-format>
						<button type="primary" class="br60" size="xs">立即抢购</button>
					</view>
				</view>
			</navigator>
		</view>
		<view v-if="type === 'one'" class="goods-one mt20">
			<navigator v-for="(item, index) in list" :key="index" class="item bg-white row" hover-class="none" open-type="navigate"
			 :url="'/pages/goods_details/goods_details?id=' + item.id">
				<view class="goods-img" style="width: 200rpx;height:200rpx;">
					<custom-image :lazy-load="true" width="200rpx" height="200rpx" radius="6rpx" lazy-load :src="item.image"></custom-image>
				</view>
				<view class="goods-info ml20">
					<view class="goods-name line2 mb10">{{item.name}}</view>
					<view class="row-between mt10">
						<view class="price mt10 row">
							<price-format color="#FF2C3C"  class="mr10" :first-size="34" :second-size="26" :subscript-size="26" :price="item.price" :weight="500"></price-format>
							<price-format class="muted" :firstSize="24" :secondSize="24" :subscript-size="24" line-through :price="item.market_price"></price-format>
						</view>
					</view>
				</view>
			</navigator>
		</view>
	</view>
</template>

<script>
	export default {
		props: {
			type: {
				type: String,
				default: 'double'
			},
			list: {
				type: Array,
				default: () => []
			},
            isBargain: {
                type: Boolean,
                default: false
            }
		},
		data() {
			return {

			};
		}
	}
</script>

<style lang="scss" scoped>
	.goods-list {
		.goods-double {
			flex-wrap: wrap;
			padding: 0 20rpx;
			align-items: stretch;
			.item {
				width: 347rpx;
				border-radius: 10rpx;

				.goods-info {
					padding: 10rpx;
				}
			}
		}
		
		.goods-hot {
			&.goods-home-hot {
				.item {
					padding: 0;
					.paixu,
					.number {
						left: 10rpx;
					}
				}
			}
			.item {
				position: relative;
				padding: 30rpx 20rpx;
				border-radius: 10rpx;
			
				.goods-info {
					width: 450rpx;
			
					.sale {
						padding: 4rpx 18rpx;
						color: #F79C0C;
						background-color: rgba(247, 156, 12, .1);
					}
				}
			
				.paixu,
				.number {
					position: absolute;
					top: 0;
					left: 27rpx;
					width: 50rpx;
					height: 54rpx;
					line-height: 60rpx;
					text-align: center;
					color: #621E09;
				}
			}
		} 

		.goods-one .item {
			padding: 20rpx;
			
			&:not(:last-of-type) {
				margin-bottom: 20rpx;
			}
		}
		.goods-new .item {
		    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.16);
		    border-radius: 10rpx;
		}
		
	}
</style>
