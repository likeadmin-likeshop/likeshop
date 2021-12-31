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
		<view class="confirm-order">
			<view class="confirm-con">
				<navigator hover-class="none" url="/pages/user_address/user_address?type=1">
					<address-item :address="address"></address-item>
				</navigator>
				<view class="goods contain">
					<order-goods :team="{need: orderInfo.team_need}" :list="goodsLists"></order-goods>
					<view class="item row-between">
						<view>配送方式</view>
						<view>快递</view>
					</view>
					<view class="item row-between">
						<view>买家留言</view>
						<u-input v-model="userRemark" class="flex1 ml20" :clearable="false" placeholder="请添加备注（150字以内）"></u-input>
					</view>
				</view>
				<view class="contain benefit" v-if="orderInfo.order_type == 0">
					<view class="item row-between" @tap="showCoupon = true">
						<view>优惠券</view>
						<view class="row">
							<text class="primary" v-if="orderInfo.discount_amount">-￥{{orderInfo.discount_amount }}</text>
							<text v-else-if="usableCoupon.length" class="primary">{{usableCoupon.length + '张可用'}}</text>
							<text v-else class="muted">无优惠券可用</text>
							<image class="icon-sm ml20" src="/static/images/arrow_right.png"></image>
						</view>
					</view>
					<view class="item row" @tap="changeIntegral" v-if="orderInfo.integral_switch">
						<view>积分抵扣</view>
						<view class="ml20 muted xs row" style="flex:1">
							共{{orderInfo.user_integral}}积分{{orderInfo.user_integral < orderInfo.integral_limit ? "，满" + orderInfo.integral_limit + "可用" : "" }}
							<view style="margin-top: 10rpx;" @tap.stop="showDialog">
								<u-icon class="ml10" color="#999"  size="30"  name="question-circle"></u-icon>
							</view>
						</view>
						<checkbox :disabled="orderInfo.user_integral < orderInfo.integral_limit || orderInfo.integral_config == 0" :checked="Boolean(useIntegral)">
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
									<view class="muted xs">{{item.extra}}</view>
								</view>
							</view>
							<radio class="radio" :value="String(item.pay_way)" :checked="item.pay_way == payWay"></radio>
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
		<loading-view v-if="showLoading" background-color="transparent" :size="50"></loading-view>
		<loading-view v-if="isFirstLoading"></loading-view>
		<u-popup v-model="showCoupon" border-radius="14" mode="bottom" closeable>
		    <view class="pop-title row-between">
		        <view class="title">优惠券</view>
		    </view>
		    <view v-if="showCoupon">
		       <tabs :active="popActive" :config="{underLineWidth: 100}">
		            <tab :title="'可使用优惠券 (' + usableCoupon.length + ')'">
		                <coupon-obj :list="usableCoupon" :type="0" @change="onSelectCoupon" :coupon-id="couponId"></coupon-obj>
		            </tab>
		            <tab :title="'不可用优惠券 (' + unusableCoupon.length + ')'">
		                <coupon-obj :list="unusableCoupon" :type="1" @change="onSelectCoupon"></coupon-obj>
		            </tab>
		        </tabs>
		    </view>
		</u-popup>
	</view>
</template>

<script>
	import {
		orderBuy,
		getOrderCoupon
	} from '@/api/order';
	import {teamBuy} from '@/api/activity'
	import {
		prepay,
		getMnpNotice,
		getPayway
	} from '@/api/app';
	import {
		wxpay,
		alipay
	} from '@/utils/pay'
	export default {
		data() {
			return {
				isFirstLoading: true,
				showLoading: false,
				showCoupon: false,
				address: {},
				orderInfo: {},
				goodsLists: [],
				addressId: '',
				useIntegral: 0,
				popActive: 0,
				userRemark: '',
				usableCoupon: [],
				unusableCoupon: [],
				couponId: "",
				payWayArr: [],
				payWay: '',
                bargainLaunchId: -1
			};
		},

		components: {

		},

		onLoad(options) {
			this.getPaywayFun()
			uni.$on("selectaddress", (e) => {
				this.addressId = e.id;
			})
			const data = JSON.parse(decodeURIComponent(options.data));
			this.goods = data.goods
			this.type = data.type
			this.teamId = data.teamId
            this.bargainLaunchId = options.bargain_launch_id
			this.foundId = data.foundId || 0
			
		},

		onShow: async function() {
			await this.getOrderCouponFun();
			if (this.payStatus) return;
			setTimeout(() => {
				this.orderBuyFun();
			}, 100)
		},
		onUnload: function() {
			uni.$off("selectaddress")
		},
		methods: {
			getPaywayFun() {
				return new Promise(resolve => {
					getPayway().then(res => {
						if(res.code == 1) {
							this.payWayArr = res.data
							this.payWay = res.data.length ? res.data[0].pay_way : 0
							resolve()
						}
					})
				})
			},
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
			showDialog() {
				const {
				  integral_config,
				  integral_desc
				} = this.orderInfo;
				uni.showModal({
					title:'积分使用说明',
					content: integral_desc,
					confirmColor:"#FF2C3C",
					showCancel:false
				})
			},
			radioChange(e) {
				this.payWay = Number(e.detail.value)
			},
			onSelectCoupon(e) {
				this.couponId = e
				this.showCoupon = false
				this.orderBuyFun()
			},

			getAuthMsg() {
				return new Promise(resolve => {
					getMnpNotice({
						scene: 1
					}).then(res => {
						if (res.code == 1) {
							console.log(res.data)
							uni.requestSubscribeMessage({
								tmplIds: res.data,

								fail(res) {
									console.log(res);
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
					content: '是否确认下单?',
					confirmColor: '#FF2C3C',
					success: async res => {
						let {
							confirm
						} = res;
						if (confirm) {
							this.showLoading = true
							// #ifdef MP-WEIXIN
							await this.getAuthMsg();
							//#endif
							
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
							this.usableCoupon = usable,
							this.unusableCoupon = unusable
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
					useIntegral,
                    bargainLaunchId
				} = this;
				let submitObj = {
					action,
					goods: this.goods,
					pay_way: payWay,
					use_integral:useIntegral,
					address_id: this.addressId,
					coupon_id: this.couponId,
                    bargain_launch_id: this.bargainLaunchId == -1 ? '' : this.bargainLaunchId
				};
				if (this.teamId) {
					const {
					  item_id,
					  num
					} = this.goods[0];
					delete submitObj.goods;
					submitObj.item_id = item_id;
					submitObj.goods_num = num;
					submitObj.team_id = this.teamId;
					submitObj.found_id = this.foundId;
				  }
				if (action == 'submit') {
					submitObj.remark = userRemark;
					submitObj.type = this.type;
					if(!this.payWayArr.length) {
						this.showLoading = false
						return this.$toast({
							title: '请联系管理员配置支付方式'
						})
					}
					
				}
				const {
					data: orderData,
					code: orderCode
				} = this.teamId ?  await teamBuy(submitObj) :  await orderBuy(submitObj)
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
					this.showLoading = false
					if (prepayCode == 1) {
						//微信成功
						wxpay(prepayData).then((res) => {
							if(res == 'success') {
								this.payStatus = true;
								uni.redirectTo({
									url: `/pages/pay_result/pay_result?id=${order_id}`
								});
							}else {
								uni.redirectTo({
									url: '/pages/user_order/user_order'
								});
							}
						})
					}else if (prepayCode == 20001){
						//支付宝成功
						alipay(prepayData).then((res) => {
							if(res == 'success') {
								this.payStatus = true;
								uni.redirectTo({
									url: `/pages/pay_result/pay_result?id=${order_id}`
								});
							}else {
								uni.redirectTo({
									url: '/pages/user_order/user_order'
								});
							}
						})
					} else if (prepayCode == 10001) {
						//余额支付成功
						uni.redirectTo({
							url: `/pages/pay_result/pay_result?id=${order_id}`
						});
					}
				}
			}
		},

		
	}
</script>
<style>
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
		box-sizing: content-box;
		padding-bottom: env(safe-area-inset-bottom);
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
