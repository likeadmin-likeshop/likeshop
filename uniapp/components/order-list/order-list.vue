// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

<template>
	<view>
		<view class="order-list">
			<navigator v-for="(item, index) in orderList" :key="index" hover-class="none" class="order-item bg-white mt20" :url="'/pages/order_details/order_details?id=' + item.id">
				<view class="order-header row-between">
					<view class="row">
						<view v-if="item.order_type == 1" class="mr10">
							<u-tag text="秒杀" size="mini" type="primary" mode="plain" />
						</view>
						<view v-if="item.order_type == 2" class="mr10">
							<u-tag text="拼团" size="mini" type="primary" mode="plain" />
						</view>
							<view v-if="item.order_type == 3" class="mr10">
							<u-tag text="砍价" size="mini" type="primary" mode="plain" />
						</view>
						订单编号：{{item.order_sn}}
					</view>
					<view :class="item.order_status == 4 ? 'muted' : 'primary'">{{getOrderStatus(item.order_status)}}</view>
				</view>
				<view class="order-con">
					<order-goods :list="item.order_goods"></order-goods>
					<view class="all-price row-end">
						<text class="muted xs">共{{item.goods_count}}件商品，总金额：</text>
						<price-format :subscript-size="30" :first-size="30" :second-size="30" :price="item.order_amount"></price-format>
					</view>
				</view>
				<view class="order-footer row"  v-if="item.cancel_btn || item.delivery_btn || item.take_btn || item.del_btn || item.pay_btn || item.comment_btn">
					<view style="flex: 1">
						<view class="primary sm row" v-if="getCancelTime(item.order_cancel_time) > 0">支付剩余 <u-count-down separator="zh" :show-hours="false"
							 :show-seconds="false" :timestamp="getCancelTime(item.order_cancel_time)" separator-color="#FF2C3C" color="#FF2C3C" :separator-size="26"
							 :font-size="26" bg-color="transparent" @end="reflesh"></u-count-down>自动关闭</view>
					</view>
					<view v-if="item.cancel_btn">
						<button size="sm" class="plain br60 lighter" hover-class="none" @tap.stop="cancelOrder(item.id)">
							取消订单
						</button>
					</view>
					<view  v-if="item.delivery_btn" @tap.stop="goPage('/pages/bundle/goods_logistics/goods_logistics?id=' + item.id)">
						<button size="sm" class="btn plain br60 lighter" hover-class="none">查看物流</button>
					</view>
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
		<loading-view v-if="showLoading" background-color="transparent" :size="50"></loading-view>
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
		wxpay,
		alipay
	} from '@/utils/pay';
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
				orderId: "",
				showLoading: false
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

			payNow(id) {
				this.showLoading = true
				prepay({
					from: 'order',
					order_id: id
				}).then(res => {
					let args = res.data;
					this.showLoading = false
					if (res.code == 1) {
						wxpay(args).then((resPay) => {
							if(resPay == 'success') {
								this.$toast({
									title: "支付成功"
								})
								uni.$emit("refreshorder")
							}
						})
					}else if(res.code == 20001){
						alipay(args).then((resPay) => {
							if(resPay == 'success') {
								this.$toast({
									title: "支付成功"
								})
								uni.$emit("refreshorder")
							}
						})
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
			},
			goPage(url) {
				uni.navigateTo({
					url
				})
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
			getCancelTime() {
				return (time) => time - Date.now()/1000
			}
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
