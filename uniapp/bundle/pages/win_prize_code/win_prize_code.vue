<template>
	<view class="win-prize-code">
		<view class="goods-list">
			<view class="" v-for="(item, index) in bargainGoods" :key="index">
				<view class="bg-white row code-item">
					<u-image :src="item.prize_image" width="90rpx" height="90rpx" mode="aspectFill" radius="6rpx"></u-image>
					<view class="ml20 desc">
						<view class="nr line1 bold">{{item.title}}</view>
						<view class="mt10 row-between">
							<view class="xs lighter">抽奖时间：{{item.create_time}}</view>
							<!-- <view class="xs">+100</view> -->
						</view>
					</view>
				</view>
			</view>
		</view>
		<loading-footer slotEmpty :status="loadingStatus">
			<view style="padding-top: 200rpx;" class="data-null column-center" slot="empty">
				<image src="../../../static/images/order_null.png" class="img-null"></image>
				<text class="xs muted">暂无中奖名单</text>
			</view>
		</loading-footer>
	</view>
</template>

<script>
	import {
		loadingType
	} from '@/utils/type';
	import {
		loadingFun
	} from "@/utils/tools"
	import {
		luckyDrawWinningList
	} from "@/api/user";
	export default {
		data() {
			return {
				loadingStatus: loadingType.EMPTY,
				page: 1,
				bargainGoods: [], // 记录列表
			}
		},
		methods: {
			// 上拉加载
			getLists() {
				let {
					loadingStatus,
					bargainGoods,
					page
				} = this;

				loadingFun(luckyDrawWinningList, page, bargainGoods, loadingStatus).then(res => {
					if (res) {
						this.page = res.page;
						this.bargainGoods = res.dataList
						this.loadingStatus = res.status
					}
				})
			}
		},
		onLoad() {
			this.getLists()
		},
		onReachBottom() {
			this.getLists();
		},
	}
</script>

<style lang="scss" scoped>
	.goods-list {
		margin: 0 20rpx;
		// margin-top: 20rpx;

		.code-item {
			margin-top: 20rpx;
			padding: 26rpx 24rpx;
		}

		.desc {
			width: 550rpx;
		}
	}
</style>
