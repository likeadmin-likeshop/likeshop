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
		<view class="order-details">
			<view class="header-bg"></view>
			<view class="main">
				<view class="header">
					<view class="item" v-if="orderDetail.order_status == 0">
						<view class="white lg mb10">等待买家付款</view>
						<view class="white sm row" v-if="cancelTime > 0">支付剩余 <u-count-down separator="zh" :show-hours="false"
							 :show-seconds="false" :timestamp="cancelTime" separator-color="#fff" color="#fff" :separator-size="26"
							 :font-size="26" bg-color="transparent"></u-count-down> 自动关闭</view>
					</view>
					<view class="item" v-if="orderDetail.order_status == 1">
						<view class="white lg mb10">等待商家发货</view>
						<view class="white sm">您的商品正在打包中，请耐心等待…</view>
					</view>
					<view class="item" v-if="orderDetail.order_status == 2">
						<view class="white lg mb10">已发货</view>
						<view class="white sm">您的商品正在路中，请耐心等待…</view>
					</view>
					<view class="item" v-if="orderDetail.order_status == 3">
						<view class="white lg mb10">已完成</view>
						<view class="white sm">商品已签收，期待再次购买！</view>
					</view>
					<view class="item" v-if="orderDetail.order_status == 4">
						<view class="white lg mb10">订单已关闭</view>
						<!-- <view class="white sm">原因：超时未支付</view> -->
					</view>
				</view>
				<view class="address-wrap row contain">
					<image class="icon-md mr20" src="/static/images/icon_address.png"></image>
					<view class="address">
						<view>
							<text class="name md mr10">{{orderDetail.consignee}}</text>
							<text class="phone md">{{orderDetail.mobile}}</text>
							<view class="area sm mt10 lighter">{{orderDetail.delivery_address}}</view>
						</view>
					</view>
				</view>
				<view class="goods contain">
					<view class="status row-between" v-if="team.status != null">
						<view>拼团状态</view>
						<view :style="'padding: 6rpx 26rpx; ' + (team.status == 2 && 'background-color: #d7d7d7')" class="bg-primary br60 white sm">
							{{teamStatus(team.status)}}
						</view>
					</view>
					<order-goods :team="team" :link="true" :list="orderDetail.order_goods"></order-goods>
				</view>
				<view class="price contain">
					<view class="row-between">
						<view>商品金额</view>
						<view class="black">
							<price-format :price="orderDetail.goods_price"></price-format>
						</view>
					</view>
					<view class="row-between">
						<view>运费</view>
						<view class="black">+
							<price-format :price="orderDetail.shipping_price"></price-format>
						</view>
					</view>
					<view v-if="orderDetail.discount_amount != 0" class="row-between">
						<view>优惠券</view>
						<view class="primary">-
							<price-format :price="orderDetail.discount_amount"></price-format>
						</view>
					</view>
					<view v-if="orderDetail.integral_amount != 0" class="row-between">
						<view>积分抵扣</view>
						<view class="primary">-
							<price-format :price="orderDetail.integral_amount"></price-format>
						</view>
					</view>
					<view class="row-end">
						<view class="lighter">实付金额：</view>
						<view class="primary xl">
							<price-format :first-size="34" :second-size="34" :price="orderDetail.order_amount"></price-format>
						</view>
					</view>
				</view>
				<view class="order-info contain">
					<view class="item row" style="align-items: flex-start;">
						<view class="title">买家留言</view>
						<view class="black">{{orderDetail.user_remark || '无'}}</view>
					</view>
				</view>
				<view class="order-info contain">
					<view class="item row">
						<view class="title">订单编号</view>
						<view class="black">{{orderDetail.order_sn}}</view>
					</view>
					<view class="item row">
						<view class="title">订单类型</view>
						<view class="black">{{getOrderType(orderDetail.order_type)}}</view>
					</view>
					<view class="item row">
						<view class="title">支付方式</view>
						<view class="black">{{orderDetail.pay_way_text}}</view>
					</view>
					<view class="item row">
						<view class="title">下单时间</view>
						<view class="black">{{orderDetail.create_time}}</view>
					</view>
					<view v-if="orderDetail.pay_time" class="item row">
						<view class="title">付款时间</view>
						<view class="black">{{orderDetail.pay_time}}</view>
					</view>
					<view v-if="orderDetail.shipping_time" class="item row">
						<view class="title">发货时间</view>
						<view class="black">{{orderDetail.shipping_time }}</view>
					</view>
					<view v-if="orderDetail.confirm_take_time" class="item row">
						<view class="title">成交时间</view>
						<view class="black">{{orderDetail.confirm_take_time }}</view>
					</view>
					<view v-if="orderDetail.cancel_time" class="item row">
						<view class="title">关闭时间</view>
						<view class="black">{{orderDetail.cancel_time}}</view>
					</view>

				</view>
				<view class="footer bg-white row fixed" v-if="orderDetail.cancel_btn || orderDetail.delivery_btn || orderDetail.take_btn || orderDetail.del_btn || orderDetail.pay_btn">
					<view style="flex: 1"></view>
					<view v-if="orderDetail.cancel_btn">
						<button size="sm" class="plain br60" hover-class="none" @tap="cancelOrder">取消订单</button>
					</view>
					<navigator v-if="orderDetail.delivery_btn" hover-class="none" :url="'/pages/bundle/goods_logistics/goods_logistics?id=' + orderDetail.id">
						<button size="sm" class="plain br60" hover-class="none">查看物流</button>
					</navigator>
					<view v-if="orderDetail.take_btn" class="ml20">
						<button size="sm" class="plain br60 primary red" hover-class="none" @tap.stop="comfirmOrder">确认收货</button>
					</view>
					<view v-if="orderDetail.del_btn">
						<button size="sm" class="plain br60" hover-class="none" @tap="delOrder">删除订单</button>
					</view>
					<view class="ml20" v-if="orderDetail.pay_btn">
						<button size="sm" class="bg-primary br60 white" @tap="payNow">立即付款</button>
					</view>
				</view>
			</view>
		</view>
		<loading-view v-if="isFirstLoading"></loading-view>
		<order-dialog ref="orderDialog" :orderId="orderDetail.id" :type="type" @refresh="onRefresh"></order-dialog>
		<loading-view v-if="showLoading" background-color="transparent" :size="50"></loading-view>
		<float-tab></float-tab>
	</view>
</template>

<script>
	import {
		getOrderDetail
	} from '@/api/order';
	import {
		prepay
	} from '@/api/app';
	import {
		wxpay,
		alipay
	} from '@/utils/pay'

	export default {
		data() {
			return {
				orderDetail: {
				},
				team: {},
				isFirstLoading: true,
				type: 0,
				cancelTime: 0,
				showCancel: "",
				showLoading: false
			};
		},

		components: {},
		props: {},

		onLoad: function(options) {
			this.id = options.id;
			this.getOrderDetailFun();
		},



		methods: {
			onRefresh() {
				uni.$emit("refreshorder")
				const {
					type
				} = this
				if ([0, 2].includes(type)) {
					this.getOrderDetailFun();
				} else if (type == 1) {
					setTimeout(() => {
						uni.navigateBack()
					}, 2000)
				}
			},
			orderDialog() {
				this.$refs.orderDialog.open()
			},

			delOrder() {
				this.type = 1
				this.$nextTick(() => {
					this.orderDialog();
				});
			},

			comfirmOrder() {
				this.type = 2
				this.$nextTick(() => {
					this.orderDialog();
				});
			},

			cancelOrder() {
				this.type = 0
				this.$nextTick(() => {
					this.orderDialog();
				});
			},

			payNow() {
				this.showLoading = true
				prepay({
					from: 'order',
					order_id: this.id
				}).then(res => {
					let args = res.data;
					this.showLoading = false
					if (res.code == 1) {
						wxpay(args).then((resPay) => {
							if(resPay == 'success') {
								this.$toast({
									title: "支付成功"
								})
								this.getOrderDetailFun();
								uni.$emit("refreshorder")
							}
						})
					}else if(res.code == 20001){
						alipay(args).then((resPay) => {
							if(resPay == 'success') {
								this.$toast({
									title: "支付成功"
								})
								this.getOrderDetailFun();
								uni.$emit("refreshorder")
							}
						})
					}
				});
			},

			getOrderDetailFun() {
				getOrderDetail(this.id).then(res => {
					if (res.code == 1) {
						this.cancelTime = res.data.order_cancel_time - Date.now() / 1000;
						this.orderDetail = res.data
						this.team = res.data.team || {}
						this.$nextTick(() => {
							this.isFirstLoading = false
						});
					}else {
						setTimeout(() => uni.navigateBack(), 1500)
					}
				});
			},
		},
		computed: {
			teamStatus() {
				return (status) => {
					switch (status) {
						case 0:
							return '拼团中'
						case 1:
							return '拼团成功'
						case 2:
							return '拼团失败'
					}
				}
			},
			getOrderType() {
				return (type) => {
					switch (type) {
						case 0:
							return '普通订单'
						case 1:
							return '秒杀订单'
						case 2:
							return '拼团订单'
						case 3:
							return '砍价订单'
					}
				}
			},
		}
	};
</script>
<style lang="scss">
	.order-details {
		position: relative;
		padding-bottom: calc(120rpx + env(safe-area-inset-bottom));
	}

	.order-details .header-bg {
		position: absolute;
		top: 0;
		width: 100%;
		height: 200rpx;
		background-color: $-color-primary;
		z-index: 0;
	}

	.order-details .goods .status {
		height: 88rpx;
		padding: 0 20rpx;
	}

	.order-details .main {
		position: relative;
		z-index: 1;
	}

	.order-details .contain {
		margin: 0 20rpx 20rpx;
		border-radius: 14rpx;
		background-color: #fff;
	}

	.order-details .header {
		padding: 24rpx 40rpx;
		box-sizing: border-box;
	}

	.order-details .img-line {
		height: 1.5px;
		width: 100%;
		display: block;
	}

	.order-details .address-wrap {
		height: 164rpx;
		padding: 0 24rpx;
	}

	.order-details .order-info {
		padding: 12rpx 0;
	}

	.order-details .order-info .item {
		padding: 12rpx 24rpx;
	}

	.order-details .order-info .item .title {
		width: 180rpx;
		flex: none;
	}

	.order-details .price>view {
		height: 60rpx;
		padding: 0 24rpx;
	}

	.order-details .footer {
		position: fixed;
		bottom: 0;
		left: 0;
		right: 0;
		height: 100rpx;
		padding: 0 24rpx;
		box-sizing: content-box;
		padding-bottom: env(safe-area-inset-bottom);
	}

	.footer .plain {
		border: 1px solid #BBBBBB;
	}

	.footer .plain.red {
		border: 1px solid $-color-primary;
	}

	.tips-dialog {
		height: 230rpx;
		width: 100%;
	}

	.order-details .invite-btn {
		background: linear-gradient(270deg, #FF2C3C 0%, #F95F2F 100%);
		margin: 30rpx 26rpx 40rpx;
	}
</style>
