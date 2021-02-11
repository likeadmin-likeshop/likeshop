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
		<view class="confirm-order">
			<view class="confirm-con">
				<navigator hover-class="none" url="/pages/user_address/user_address?type=1">
					<address-item :address="address"></address-item>
				</navigator>
				<view class="goods contain">
					<order-goods :list="goodsLists"></order-goods>
					<view class="item row-between">
						<view>配送方式</view>
						<view>快递</view>
					</view>
					<view class="item row-between">
						<view>买家留言</view>
						<uni-easyinput v-model="userRemark" class="flex1" :input-border="false" placeholder="请添加备注（150字以内）"></uni-easyinput>
					</view>
				</view>
				<view class="contain benefit">
					<view class="item row-between" @tap="showCouponPop">
						<view>优惠券</view>
						<view class="row">
							<text class="primary" v-if="orderInfo.discount_amount">-￥{{orderInfo.discount_amount }}</text>
							<text v-else class="muted">请选择</text>
							<image class="icon-sm ml20" src="/static/images/arrow_right.png"></image>
						</view>
					</view>
					<view class="item row" @tap="changeIntegral" v-if="orderInfo.integral_switch">
						<view>积分抵扣</view>
						<view class="ml20 muted xs row" style="flex:1">
							共{{orderInfo.user_integral}}积分{{orderInfo.user_integral < orderInfo.integral_limit ? "，满" + orderInfo.integral_limit + "可用" : "" }}
							<uni-icons class="ml10" color="#999" @tap.stop="showDialog" size="15" type="help"></uni-icons>
						</view>
						<checkbox :disabled="orderInfo.user_integral < orderInfo.integral_limit" :checked="Boolean(useIntegral)">
						</checkbox>
					</view>
				</view>

				<view class="pay-way contain">
					<view class="lighter title">支付方式</view>
					<radio-group class="radio-group" @change="radioChange">
						<label v-for="(item, index) in payWayArr" :key="index" class="item row-between">
							<view class="row">
								<image class="icon-lg mr20" :src="item.icon"></image>
								<view class>
									<view class="balck bt10">{{item.name}}</view>
									<view class="muted xs">{{item.desc}}{{ item.type == 3 ? orderInfo.user_money : ''}}</view>
								</view>
							</view>
							<radio class="radio" :value="String(item.type)" :checked="item.type == payWay"></radio>
						</label>
					</radio-group>
				</view>
				<view class="price contain">
					<view class="item row-between">
						<view>商品金额</view>
						<view>¥{{orderInfo.total_goods_price}}</view>
					</view>
					<view class="item row-between">
						<view>运费</view>
						<view>¥{{orderInfo.shipping_price}}</view>
					</view>
					<view class="item row-between" v-if="orderInfo.discount_amount">
						<view>优惠券</view>
						<view class="primary">-¥{{orderInfo.discount_amount}}</view>
					</view>
					<view class="item row-between" v-if="orderInfo.integral_amount">
						<view>积分抵扣</view>
						<view class="primary">-¥{{orderInfo.integral_amount}}</view>
					</view>
				</view>
			</view>
			<view class="footer bg-white row-between fixed">
				<view class="all-price lg row">
					<text>合计：</text>
					<view class="primary">
						<price-format :first-size="36" :second-size="36" :price="orderInfo.order_amount"></price-format>
					</view>
				</view>
				<button class="btn br60 white" size="md" hover-class="none" @tap="onSubmitOrder">
					提交订单
				</button>
			</view>
		</view>
		<loading-view v-if="showLoading" background-color="transparent" :size="50" color="#FF2C3C"></loading-view>
		<loading-view v-if="isFirstLoading"></loading-view>
	</view>
</template>

<script>
	import {
		orderBuy,
		getOrderCoupon
	} from '@/api/order';
	import {
		prepay,
		getMnpNotice
	} from '@/api/app';
	import {
		payWay
	} from '@/utils/type'
	import {
		wxpay
	} from '@/utils/wxutil'
	export default {
		data() {
			return {
				isFirstLoading: true,
				showLoading: false,
				address: {},
				orderInfo: {},
				goodsLists: [],
				addressId: '',
				useIntegral: 0,
				userRemark: '',
				payWayArr: [{
					icon: "/static/images/icon_wechat.png",
					name: '微信支付',
					type: payWay.WECHAT,
					desc: '微信快捷支付'
				}, {
					icon: "/static/images/icon_balance.png",
					name: '余额支付',
					type: payWay.BALANCE,
					desc: '可用余额：'
				}],
				payWay: payWay.WECHAT,
			};
		},

		components: {

		},
		props: {},

		onLoad(options) {
			uni.$on("selectaddress", (e) => {
				this.addressId = e.id;
			})
			const data = JSON.parse(decodeURIComponent(options.data));
			this.goods = data.goods
		},

		onShow: async function() {
			// await this.getOrderCouponFun();
			if (this.payStatus) return;
			setTimeout(() => {
				this.orderBuyFun();
			}, 100)
		},
		onUnload: function() {
			uni.$off("selectaddress")
		},
		methods: {
			changeIntegral() {
				const {
					useIntegral,
					orderInfo: {
						integral_limit,
						user_integral
					}
				} = this;
				if (integral_limit > user_integral) return this.$toast({
					title: "未满足使用条件"
				});
				this.useIntegral = useIntegral ? 0 : 1
				this.$nextTick(() => {
					this.orderBuyFun();
				});
			},

			radioChange(e) {
				this.payWay = Number(e.detail.value)
			},

			onSelectCoupon(e) {
				this.couponId = e.detail;
			},

			showCouponPop: function(e) {
				this.setData({
					showCoupon: !this.showCoupon
				});
			},
			hideCouponPop: function(e) {
				this.setData({
					showCoupon: !this.showCoupon
				});
				this.orderBuyFun();
			},

		


			getAuthMsg() {
				return new Promise(resolve => {
					getMnpNotice({
						scene: 1
					}).then(res => {
						if (res.code == 1) {
							uni.requestSubscribeMessage({
								tmplIds: res.data,

								fail(res) {
									console.log(res.errMsg);
								},

								complete() {
									resolve();
								}

							});
						} else {
							resolve();
						}
					});
				});
			},



			onSubmitOrder() {
				uni.showModal({
					title: '温馨提示',
					content: '是否确认下单',
					success: async res => {
						let {
							confirm
						} = res;
						if (confirm) {
							await this.getAuthMsg();
							this.showLoading = true
							this.orderBuyFun('submit');
						}
					}
				});
			},

			getOrderCouponFun() {
				return new Promise(resolve => {
					getOrderCoupon({
						goods: this.goods
					}).then(res => {
						if (res.code == 1) {
							const {
								usable,
								unusable
							} = res.data;
							this.setData({
								usableCoupon: usable,
								unusableCoupon: unusable
							});
							resolve();
						}
					});
				});
			},

			async orderBuyFun(action = 'info') {
				let {
					address,
					userRemark,
					payWay,
					useIntegral
				} = this;
				let submitObj = {
					action,
					goods: this.goods,
					pay_way: payWay,
					use_integral:useIntegral,
					address_id: this.addressId
				};

				if (action == 'submit') {
					submitObj.remark = userRemark;
					submitObj.type = this.confirmType;
				}
				const {
					data: orderData,
					code: orderCode
				} = await orderBuy(submitObj)
				if (orderCode != 1) return this.showLoading = false
				if (action == 'info') {
					let {
						address,
						goods_lists
					} = orderData;
					this.address = address
					this.goodsLists = goods_lists
					this.orderInfo = orderData
					this.$nextTick(() => {
						this.isFirstLoading = false
					});
				} else if (action == 'submit') {
					let {
						order_id,
						type
					} = orderData;
					const {
						data: prepayData,
						code: prepayCode
					} = await prepay({
						from: type,
						order_id
					})

					if (prepayCode == 1) {
						wxpay(prepayData).then(() => {
							this.payStatus = true;
							uni.redirectTo({
								url: `/pages/pay_result/pay_result?id=${order_id}`
							});
						}).catch(() => {
							this.payStatus = true;
							uni.redirectTo({
								url: `/pages/user_order/user_order`
							});
						});
					} else if (prepayCode == 10001) {
						//余额支付成功
						uni.redirectTo({
							url: `/pages/pay_result/pay_result?id=${order_id}`
						});
					} else {
						this.showLoading = false
					}
				}
			}
		},

		
	}
</script>
<style>
	/* pages/confirm_order/confirm_order.wxss */
	.confirm-order .confirm-con {
		overflow: hidden;
		padding-bottom: calc(120rpx + env(safe-area-inset-bottom));
	}

	.confirm-order .contain {
		border-radius: 14rpx;
		margin: 20rpx 20rpx 0;
		background-color: #fff;
		overflow: hidden;
	}

	.confirm-order .img-line {
		height: 1.5px;
		width: 100%;
		display: block;
	}


	.confirm-order .coupons {
		height: 100rpx;
		padding: 0 24rpx;
	}

	.goods .title {
		padding: 22rpx 24rpx;
		border-bottom: 1px solid #F6F6F6;
	}

	.goods .all-num {
		padding: 22rpx 24rpx;
		border-bottom: 1px dotted #F6F6F6;
	}

	.confirm-order .footer {
		position: fixed;
		bottom: 0;
		left: 0;
		right: 0;
		height: 100rpx;
		padding: 0 30rpx;
	}


	.confirm-order .pay-way .title {
		padding: 20rpx 24rpx;
	}

	.confirm-order .pay-way .radio-group .item {
		height: 120rpx;
		padding: 0 24rpx;
	}

	.confirm-order .price {
		padding: 28rpx 20rpx;
	}

	.confirm-order .price .item:not(:last-of-type) {
		margin-bottom: 20rpx;
	}

	.confirm-order .goods>.item,
	.confirm-order .benefit>.item {
		padding: 0 24rpx;
		height: 80rpx;
	}

	.confirm-order .btn {
		background: linear-gradient(90deg, rgba(249, 95, 47, 1) 0%, rgba(255, 44, 60, 1) 100%);
		padding: 0 50rpx;
	}

	.confirm-order .van-cell:after {
		border: none;
	}

	.goods .shop-icon {
		width: 40rpx;
		height: 40rpx;
	}

	.pop-title {
		height: 100rpx;
		border-bottom: 1rpx solid #F2F2F2;
	}

	.pop-title .title {
		margin-left: 30rpx;
		font-size: 34rpx;
		font-weight: bold;
		line-height: 36rpx;
	}
</style>
