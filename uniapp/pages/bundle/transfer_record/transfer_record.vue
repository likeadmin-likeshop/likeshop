<template>
	<!--pages/user_bill/user_bill.wxml-->
	<view class="transfer-record">
		<tabs :active="active" line-width="40" @change="onChange">
			<tab title="全部">
				<view class="list mt20">
					<view v-for="(item, index) in lists" :key="index" class="item bg-white row">
						<view class="flexnone mr20">
							<image class="avatar" :src="item.avatar"></image>
						</view>
						<view class="flex1 mr20">
							<view class="black mb10">{{item.nickname}}</view>
							<view class="xs muted">会员ID:{{item.sn}}</view>
							<view class="xs muted">{{item.create_time}}</view>
						</view>
						<view :class="'lg flexnone ' + (item.type == 1 ? 'primary' : '')">
							{{item.type == 1 ? '+' : '-'}}{{item.money}}
						</view>
					</view>
				</view>
				<loading-footer :status="loadingStatus" slotEmpty>
					<view class="data-null column-center" slot="empty">
						<image class="img-null" src="/static/images/order_null.png" />
						<text class="nr muted">暂无记录～</text>
					</view>
				</loading-footer>
			</tab>
			<tab title="转出">
			<view class="list mt20">
				<view v-for="(item, index) in lists" :key="index" class="item bg-white row">
					<view class="flexnone mr20">
						<image class="avatar" :src="item.avatar"></image>
					</view>
					<view class="flex1 mr20">
						<view class="black mb10">{{item.nickname}}</view>
						<view class="xs muted">会员ID:{{item.sn}}</view>
						<view class="xs muted">{{item.create_time}}</view>
					</view>
					<view :class="'lg flexnone ' + (item.type == 1 ? 'primary' : '')">
						{{item.type == 1 ? '+' : '-'}}{{item.money}}
					</view>
				</view>
			</view>
				<loading-footer :status="loadingStatus" slotEmpty>
					<view class="data-null column-center" slot="empty">
						<image class="img-null" src="/static/images/order_null.png" />
						<text class="nr muted">暂无转出记录～</text>
					</view>
				</loading-footer>
			</tab>
			<tab title="转入">
				<view class="list mt20">
					<view v-for="(item, index) in lists" :key="index" class="item bg-white row">
						<view class="flexnone mr20">
							<image class="avatar" :src="item.avatar"></image>
						</view>
						<view class="flex1 mr20">
							<view class="black mb10">{{item.nickname}}</view>
							<view class="xs muted">会员ID:{{item.sn}}</view>
							<view class="xs muted">{{item.create_time}}</view>
						</view>
						<view :class="'lg flexnone ' + (item.type == 1 ? 'primary' : '')">
							{{item.type == 1 ? '+' : '-'}}{{item.money}}
						</view>
					</view>
				</view>
				<loading-footer :status="loadingStatus" slotEmpty>
					<view class="data-null column-center" slot="empty">
						<image class="img-null" src="/static/images/order_null.png"></image>
						<text class="nr muted">暂无转入记录～</text>
					</view>
				</loading-footer>
			</tab>
		</tabs>
	</view>
</template>

<script>
	import {
		transferRecord
	} from "@/api/user";
	import {
		loadingType
	} from "@/utils/type";
	import {
		loadingFun
	} from "@/utils/tools"
	export default {
		data() {
			return {
				active: 0,
				lists: [],
				page: 1,
				loadingStatus: loadingType.LOADING
			};
		},

		components: {},
		props: {},

		/**
		 * 生命周期函数--监听页面加载
		 */
		onLoad: function(options) {
			this.active = parseInt(options.type || 0);
			this.transferRecordFun(this.active);
		},


		onReachBottom: function() {
			this.transferRecordFun(this.active);
		},

		methods: {
			onChange(e) {
				this.active = e;
				this.cleanStatus();
				this.transferRecordFun(e);
			},

			cleanStatus() {
				// 清理状态
				this.page = 1;
				this.lists = [];
				this.loadingStatus = loadingType.LOADING
			},

			transferRecordFun(type) {
				let changeType = 'all';
				type == 0 ? changeType = 'all' : type == 1 ? changeType = 'out' : changeType = 'in';
				let {
					lists,
					loadingStatus,
					page
				} = this;
				loadingFun(transferRecord, page, lists, loadingStatus, {
					type: changeType
				}).then(res => {
					if (res) {
						this.page = res.page;
						this.lists = res.dataList
						this.loadingStatus = res.status
					}
				})
			}

		}
	};
</script>
<style lang="scss">
	.transfer-record {
		.list {
			.item {
				padding: 20rpx 30rpx;
				border-bottom: $-solid-border;
				align-items: flex-start;
				.avatar {
					width: 68rpx;
					height: 68rpx;
					border-radius: 50%;
					
				}
			}
		}
	}

	.data-null {
		padding-top: 150rpx;
	}
</style>
