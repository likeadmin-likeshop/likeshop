<template>
	<view class="recharge-code">
		<view class="list">
			<view v-for="(item, index) in lists" :key="index" class="item bg-white">
				<view class="row-between">
					<view class="black mb10">{{item.desc}}</view>
					<view class="xl primary">+{{item.total}}</view>
				</view>
				<view class="xs muted">{{item.create_time}}</view>
			</view>
		</view>
		<loading-footer :status="status" slotEmpty>
			<view class="data-null column-center" slot="empty" style="padding-top: 200rpx">
				<image class="img-null" src="/static/images/order_null.png" />
				<text class="nr muted">暂无记录～</text>
			</view>
		</loading-footer>
	</view>
</template>

<script>
	import {
		getRechargeRecord
	} from '@/api/user'
	import {
		loadingType
	} from "@/utils/type";
	import {
		loadingFun
	} from "@/utils/tools"
	export default {
		data() {
			return {
				lists: [],
				page: 1,
				status: loadingType.LOADING
			}
		},
		onLoad: function(options) {
			this.getRechargeRecordFun();
		},


		onReachBottom: function() {
			this.getRechargeRecordFun();
		},

		methods: {
			getRechargeRecordFun(type) {
				let {
					lists,
					status,
					page
				} = this;
				loadingFun(getRechargeRecord, page, lists, status).then(res => {
					if (res) {
						this.page = res.page;
						this.lists = res.dataList
						this.status = res.status
					}
				})
			}
		}
	}
</script>

<style lang="scss">
	.recharge-code {
		padding-top: 20rpx;

		.list {
			.item {
				padding: 20rpx 30rpx;

				&:not(:last-of-type) {
					border-bottom: $-solid-border;
				}
			}
		}
	}
</style>
