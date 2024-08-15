<template>
	<view class="live-broadcast">
		<!-- #ifdef MP-WEIXIN -->
		<view class="broadcast-list">
			<view class="broadcast-item" @tap="navigateTo(item)" v-for="(item, index) in lists" :key="index">
				<view class="img-wrap">
					<u-image width="100%" height="100%" :src="item.cover_img"></u-image>
					<view class="tag xxs" :class="{
						active: item.status == 101
					}">
						<u-icon v-if="item.status == 101" name="play-right-fill" size="24"></u-icon>
						<text v-else class="circel"></text>
						<text class="ml10">{{ item.live_status }}</text>
					</view>
					<view class="tips line1">{{ item.name }}</view>
				</view>
				<view class="info">
					<view class="md">
						主播：{{ item.anchor_name }}
						<text class="xs">｜直播商品：{{item.goods}}件</text>
					</view>
					<view class="muted xs mt20">直播时间：{{item.start_time}} 至 {{item.end_time}}</view>
				</view>
			</view>
		</view>
		<loading-footer :status="status" slot-empty>
			<view class="data-null column-center" slot="empty">
				<image class="img-null" src="/static/images/order_null.png"></image>
				<text class="nr muted">暂无直播~</text>
			</view>
		</loading-footer>
		<!-- #endif -->
		<!-- #ifndef MP-WEIXIN -->
		<view class="data-null column-center" style="padding-top: 400rpx;">
			<image class="img-null" src="/static/images/order_null.png"></image>
			<text class="nr muted">非小程序端暂不支持直播~</text>
		</view>
		<!-- #endif -->
	</view>
</template>

<script>
	import {
		loadingType
	} from "@/utils/type";
	import {
		loadingFun
	} from "@/utils/tools"
	import {
		getLiveRoom
	} from "@/api/store"
	export default {
		data() {
			return {
				lists: [],
				page: 1,
				status: loadingType.LOADING
			};
		},
		
		methods: {
			navigateTo(item) {
				const roomId = [item.roomid];
				wx.navigateTo({
					url: `plugin-private://wx2b03c6e691cd7370/pages/live-player-plugin?room_id=${roomId}`
				});
			},
			getLists() {
				let {
					lists,
					status,
					page
				} = this;
				loadingFun(getLiveRoom, page, lists, status).then(res => {
					if (res) {
						this.page = res.page;
						this.lists = res.dataList
						this.status = res.status
					}
				})
			}

		},
		onLoad(options) {
			this.getLists();
		},


		onReachBottom() {
			this.getLists();
		},
		onPullDownRefresh() {
			this.page = 1
			this.status = loadingType.LOADING
			this.getLists();
		},
	}
</script>

<style lang="scss">
	.live-broadcast {
		.broadcast-list {
			padding: 20rpx 20rpx 0;
			overflow: hidden;

			.broadcast-item {
				border-radius: 12rpx;
				overflow: hidden;
				background-color: #fff;

				&:not(:last-of-type) {
					margin-bottom: 20rpx;
				}

				.img-wrap {
					height: 300rpx;
					position: relative;
					color: #fff;

					.tag {
						position: absolute;
						top: 0;
						border-radius: 0 60rpx 60rpx 0;
						background: #ccc;
						padding: 8rpx 20rpx;
						&.active{
							background: linear-gradient(#ff2c3c 0%, #f95f2f 100%);
						}
						.circel {
							display: inline-block;
							width: 14rpx;
							height: 14rpx;
							background: #fff;
							border-radius: 50%;
						}
					}

					.tips {
						position: absolute;
						background: linear-gradient(rgba(255, 255, 255, 0) 0%, #808080 100%);
						bottom: 0;
						width: 100%;
						font-weight: 500;
						font-size: 30rpx;
						padding: 42rpx 20rpx 16rpx;
					}
				}

				.info {
					padding: 20rpx;
				}
			}
		}
	}
</style>
