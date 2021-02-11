// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

<template>
	<view>
		<view class="order-list">
			<navigator v-for="(item, index) in orderList" :key="index" hover-class="none" class="order-item bg-white mt20" :url="'/pages/order_details/order_details?id=' + item.id">
				<view class="order-header row-between">
					<view class="row">订单编号：{{item.order_sn}}</view>
					<view :class="item.order_status == 4 ? 'muted' : 'primary'">{{getOrderStatus(item.order_status)}}</view>
				</view>
				<view class="order-con">
					<order-goods :list="item.order_goods"></order-goods>
					<view class="all-price row-end">
						<text class="muted xs">共{{item.goods_count}}件商品，总金额：</text>
						<price-format :subscript-size="30" :first-size="30" :second-size="30" :price="item.order_amount"></price-format>
					</view>
				</view>
				<view class="order-footer row" v-if="item.cancel_btn || item.delivery_btn || item.take_btn || item.del_btn || item.pay_btn || item.comment_btn">
					<view style="flex: 1">
						<!-- <view class="row" v-if="orderUtil.getTime(item.order_cancel_time)">
							<van-count-down class="count-down" @finish="reflesh" :time="orderUtil.getTime(item.order_cancel_time)" format="mm分钟"></van-count-down>
							<text class="primary sm">后订单自动关闭</text>
						</view> -->
					</view>
					<view v-if="item.cancel_btn">
						<button size="sm" class="plain br60 lighter" hover-class="none" @tap.stop="cancelOrder(item.id)">
							取消订单
						</button>
					</view>
					<navigator hover-class="none" :url="'/pages/goods_logistics/goods_logistics?id=' + item.id" v-if="item.delivery_btn">
						<button size="sm" class="btn plain br60 lighter" hover-class="none">查看物流</button>
					</navigator>
					<view v-if="item.del_btn">
						<button size="sm" class="btn plain br60 lighter" hover-class="none" @tap.stop="delOrder(item.id)">删除订单</button>
					</view>
					<view v-if="item.pay_btn" class="ml20">
						<button size="sm" class="btn bg-primary br60 white" @tap.stop="payNow(item.id)">
							立即付款
						</button>
					</view>
					<view v-if="item.comment_btn" class="ml20">
						<button size="sm" hover-class="none" class="btn plain btn br60 primary red">
							去评价
						</button>
					</view>
					<view v-if="item.take_btn" class="ml20">
						<button size="sm" class="btn plain br60 primary red" hover-class="none" @tap.stop="comfirmOrder(item.id)">确认收货</button>
					</view>
				</view>
			</navigator>
			<loading-footer :status="status" :slot-empty="true" @refresh="reload">
				<view slot="empty" class="column-center" style="padding-top: 200rpx">
					<image class="img-null" src="/static/images/goods_null.png"></image>
					<text class="lighter">暂无订单</text>
				</view>
			</loading-footer>
		</view>
		<order-dialog ref="orderDialog" :order-id="orderId" :type="type" @refresh="reflesh"></order-dialog>
	</view>
</template>


<script>
	import {
		getOrderList,
		cancelOrder,
		delOrder,
		confirmOrder
	} from '@/api/order';
	import {
		prepay
	} from '@/api/app';
	import {
		loadingType
	} from '@/utils/type';

	import {
		wxpay
	} from '@/utils/wxutil';
	import {
		loadingFun
	} from '@/utils/tools'
	export default {
		data() {
			return {
				page: 1,
				orderList: [],
				status: loadingType.LOADING,
				showCancel: false,
				type: 0,
				orderId: ""
			};
		},

		components: {

		},
		props: {
			orderType: {
				type: String
			}
		},
		created: function() {
			uni.$on("refreshorder", () => {
				this.reflesh()
			})
		},
		beforeMount: function() {
			this.getOrderListFun();
		},
		destroyed: function() {
			uni.$off("refreshorder")
		},
		methods: {
			reflesh() {
				this.page = 1
				this.orderList = []
				this.status = loadingType.LOADING
				this.type = 0
				this.getOrderListFun();
			},

			reload() {
				this.status = loadingType.LOADING
				this.getOrderListFun();
			},

		
			orderDialog() {
				this.$refs.orderDialog.open()
			},

			delOrder(id) {
				this.orderId = id
				this.type = 1
				this.$nextTick(() => {
					this.orderDialog();
				});
			},

			comfirmOrder(id) {
				this.orderId = id
				this.type = 2
				this.$nextTick(() => {
					this.orderDialog();
				});
			},

			cancelOrder(id) {
				this.orderId = id
				this.type = 0
				this.$nextTick(() => {
					this.orderDialog();
				});
			},

			payNow(e) {

				let {
					id
				} = e.currentTarget.dataset;
				prepay({
					from: 'order',
					order_id: id
				}).then(res => {
					Toast.clear();

					if (res.code == 1) {
						let args = res.data;
						wxpay(args).then(() => {
							Tips({
								title: '支付成功'
							});
							event.emit('RESET_LIST');
						}).catch(() => {});
					}
				});
			},

			async getOrderListFun() {
				let {
					page,
					orderType,
					orderList,
					status
				} = this;
				const data = await loadingFun(getOrderList, page, orderList, status, {
					type: orderType
				})
				if (!data) return
				this.page = data.page
				this.orderList = data.dataList
				this.status = data.status
				console.log(this.status)
			}

		},
		computed: {
			getOrderStatus() {
				return (status) => {
					let text = ''
					switch (status) {
						case 0:
							text = '待支付';
							break;
						case 1:
							text = '待发货';
							break;
						case 2:
							text = '待收货';
							break;
						case 3:
							text = '已完成';
							break;
						case 4:
							text = '订单已关闭';
							break;
					}
					return text
				}
			},
		}
	};
</script>
<style lang="scss">
	.order-list {
		min-height: calc(100vh - 80rpx);
		padding: 0 20rpx;
		overflow: hidden;

		.order-item {
			border-radius: 10rpx;

			.order-header {
				height: 80rpx;
				padding: 0 24rpx;
				border-bottom: 1px dotted #E5E5E5;
			}

			.all-price {
				text-align: right;
				padding: 0 24rpx 20rpx;
			}

			.order-footer {
				height: 100rpx;
				border-top: $-solid-border;
				padding: 0 24rpx;

				.plain {
					border: 1px solid #BBBBBB;

					&.red {
						border-color: $-color-primary;
					}

				}
			}
		}
	}
</style>
