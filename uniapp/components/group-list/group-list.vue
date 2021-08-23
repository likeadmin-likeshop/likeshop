<template>
	<view class="group-list">
		<navigator v-for="(item, index) in groupList" :key="index" class="item bg-white mt20" hover-class="none" :url="'/pages/order_details/order_details?id=' + item.order_id">
			<view class="group-header row-between">
				<view>
					<view v-if="item.team_end_time">{{item.team_end_time}}</view>
					<view v-else>
						<view class="row" v-if="getTeamCountTime(item) >= 0">
							<view class="sm mr10">距离结束</view>
							<u-count-down :timestamp="getTeamCountTime(item)" color="#fff" bg-color="#FF2C3C" separator-color="#FF2C3C" font-size="24"
							 height="36" separator-size="26" @end="reflesh"></u-count-down>
						</view>
					</view>
				</view>
				<view :class="item.status == 2 ? 'muted' : 'primary'">{{getGroupStatus(item.status)}}
				</view>
			</view>
			<view class="group-con">
				<view v-if="item.type" class="team-chief xs white">团长</view>
				<order-goods :team="{need: item.need}" :list="[{name: item.name, spec_value_str: item.spec_value_str,image: item.spec_image,goods_num: item.total_num, goods_id: item.goods_id, goods_price: item.goods_price}]">
				</order-goods>
				<view class="all-price row-end">
					<text class="muted xs">共{{item.total_num}}件商品，总金额：</text>
					<price-format show-subscript :subscript-size="30" :first-size="30" :second-size="30" :price="item.order_amount"></price-format>
				</view>
			</view>
			<view class="group-footer row" v-if="item.pay_status == 0">
				<view style="flex: 1"></view>
				<view>
					<navigator v-if="item.pay_status == 0" hover-class="none" :url="'/pages/order_details/order_details?id=' + item.order_id">
						<button size="sm" class="br60 lighter btn" type="primary" hover-class="none">
							去付款
						</button>
					</navigator>
				</view>
			</view>
		</navigator>
		<loading-footer :status="status" :slot-empty="true" @refresh="reload">
			<view slot="empty" class="column-center" style="padding-top: 200rpx">
				<image class="img-null" src="/static/images/goods_null.png"></image>
				<text class="lighter">暂无拼团</text>
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
	} from '@/utils/tools';
	import {
		getUserGroup
	} from '@/api/activity';

	export default {
		data() {
			return {
				page: 1,
				groupList: [],
				status: loadingType.LOADING
			};
		},

		props: {
			groupType: {
				type: Number
			}
		},
		created: function() {},
		beforeMount: function() {
			this.getUserGroupFun();
		},
		destroyed: function() { // 在组件实例被从页面节点树移除时执行
			
		},
		methods: {
			reflesh() {
				this.page = 1
				this.groupList = []
				this.status = loadingType.LOADING;
				this.getUserGroupFun();
			},

			reload() {
				this.status = loadingType.LOADING
				this.getUserGroupFun();
			},

			async getUserGroupFun() {
				let {
					page,
					groupType,
					groupList,
					status
				} = this;
				const data = await loadingFun(getUserGroup, page, groupList, status, {
					status: groupType
				})
				if (!data) return
				this.page = data.page
				this.groupList = data.dataList
				this.status = data.status
			
			}

		},
		computed: {
			getGroupStatus() {
				return (status) => {
					var text = ''
					switch (status) {
					  case 0:
					    text = '拼团中';
					    break;
					  case 1:
					    text = '拼团成功';
					    break;
					  case 2:
					    text = '拼团失败';
					    break;
					}
					return text
				}
			},
			getTeamCountTime() {
				return (item) => item.count_time = Math.min(item.found_end_time, item.end_time) - Date.now()/1000
			}
		}
	};
</script>
<style lang="scss">
	.group-list {
		min-height: calc(100vh - 80rpx);
		padding: 0 20rpx;
		overflow: hidden;
		.item {
			border-radius: 10rpx;
			position: relative;
			.group-header {
				height: 80rpx;
				padding: 0 24rpx;
				border-bottom: 1px dotted #E5E5E5;
			}
			.team-chief {
				position: absolute;
				z-index: 100;
				top: 105rpx;
				padding: 4rpx 20rpx;
				border-radius: 0 60rpx 60rpx 0;
				background: linear-gradient(87deg, #F95F2F 0%, #FF2C3C 100%);
			}
			.all-price {
				text-align: right;
				padding: 0 24rpx 20rpx;
			}
			.group-footer {
				height: 100rpx;
				border-top: $-solid-border;
				padding: 0 24rpx;
				.btn {
					width: 244rpx;
				}
			}
		}
	}
</style>
