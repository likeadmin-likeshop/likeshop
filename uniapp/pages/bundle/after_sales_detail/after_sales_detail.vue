<template>
	<view>
		<!--pages/after_sales_detail/after_sales_detail.wxml-->
		<view class="after-sales-detail">
			<view class="after-sales-header">
				<view class="after-sales-status white lg">
					{{lists.status_text}}
				</view>
				<!-- <view class="after-sales-explain bg-white" hidden="{{lists.status == 2 || lists.status == 5 || lists == 6}}">
			<text class="xs muted" style="line-height: 40rpx" wx:if="{{lists.status == 0 || lists.status == 1 || lists == 4}}">如果商家拒绝，您可重新发起申请
				如果商家同意，将通过申请原路退款至您的账户中
				如果商家逾期未处理，平台将自动通过申请并退款给您
			</text>
			<text class="xs muted" style="line-height: 40rpx" wx:if="{{lists.status == 3}}">如果商家确认收到货后将会退款给您
				如果商家拒绝收货，该次退款将会关闭，您可以重新发起退款
			</text>
		</view> -->
			</view>
			<!-- <view class="negotiation-record row-between bg-white mt20">
		<view class="nr">协商记录</view>
		<view class="arrow">
			<image src="/images/arrow_right.png" />
		</view>
	</view> -->
			<view class="return-address-contain row bg-white mt20" v-show="!(lists.refund_type == 0)">
				<view class="nr normal address-title">退货地址：</view>
				<view class="sm normal address">{{lists.shop && lists.shop.address}}
					{{lists.shop && lists.shop.contact}} {{lists.shop && lists.shop.mobile}}</view>
				<view class="xs copy-btn row-center flex-none" @tap="onCopy">复制</view>
			</view>
			<view class="goods-container bg-white mt20">
				<!-- <view class="goods-header row">
			<view class="store-img mr10">
				<image src="/images/icon_shop.png" />
			</view>
			<view class="store-name nr bold">
				{{lists.shop.name}}
			</view>
		</view> -->
				<view class="goods-item row">
					<view class="goods-img">
						<custom-image width="100%" height="100%" radius="10rpx" lazy-load
							:src="lists.order_goods && lists.order_goods.image" />
					</view>
					<view class="goods-info">
						<view class="two-txt-cut nr">{{lists.order_goods && lists.order_goods.goods_name}}</view>
						<view class="row-between mt20">
							<!-- <view class="md">￥999.00</view> -->
							<price-format :price="lists.order_goods && lists.order_goods.goods_price" :firstSize="30"
								:secondSize="30" :showSubscript="true" :subscriptSize="30" color="#101010" />
							<view class="nr">x{{lists.order_goods && lists.order_goods.goods_num}}</view>
						</view>
					</view>
				</view>
			</view>
			<view class="return-goods-container bg-white mt20">
				<view class="return-goods-row row sm">
					<view class="return-title">退款方式：</view>
					<view class="return-explain">{{lists.refund_type == 0 ? '仅退款' : '退款退货'}}</view>
				</view>
				<view class="return-goods-row row sm mt20">
					<view class="return-title">退款原因：</view>
					<view class="return-explain">{{lists.refund_reason}}</view>
				</view>
				<view class="return-goods-row row sm mt20">
					<view class="return-title">退款金额：</view>
					<view class="return-explain primary">¥{{lists.refund_price}}</view>
				</view>
				<view class="return-goods-row row sm mt20">
					<view class="return-title">退款编号：</view>
					<view class="return-explain">{{lists.sn}}</view>
				</view>
				<view class="return-goods-row row sm mt20">
					<view class="return-title">申请时间：</view>
					<view class="return-explain">{{lists.create_time}}</view>
				</view>
			</view>
			<view class="btn-group fixed bg-white row-end" v-show="lists.status != 6">
				<view class="mr20 btn br60" @tap="showDialog">撤销申请</view>
				<view class="mr20 btn br60" @tap="goRefund" v-show="lists.status == 4 || lists.status == 1">重新申请</view>
				<navigator hover-class="none"
					:url="'/pages/bundle/input_express_info/input_express_info?id=' + lists.id" class="mr20 btn br60"
					v-show="lists.status == 2">填写快递单号</navigator>
				<view class="btn br60" v-show="false">平台退款</view>
			</view>
		</view>
		<u-modal v-model="confirmDialog" confirm-text="确定" :showCancelButton="true" :show-title="false"
			confirm-color="#FF2C3C" @confirm="cancelApplyFun" @cancel="hideDialog">
			<view class="column-center tips-dialog" style="padding: 20rpx 0;">
				<image class="icon-lg" src="/static/images/icon_warning.png"></image>
				<view style="margin-top:30rpx">是否要撤销申请？</view>
			</view>
		</u-modal>
	</view>
</template>

<script>
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
	import {
		afterSaleDetail,
		cancelApply
	} from "@/api/user";
	import {
		trottle,
		copy
	} from "@/utils/tools.js";

	export default {
		data() {
			return {
				goods: {},
				reason: [],
				lists: {},
				copyContent: "",
				confirmDialog: false
			};
		},

		components: {},
		props: {},

		/**
		 * 生命周期函数--监听页面加载
		 */
		onLoad: function(options) {
			let {
				afterSaleId,
				order_id
			} = options;
			this.afterSaleId = afterSaleId;
			this.orderId = order_id;
		},


		/**
		 * 生命周期函数--监听页面显示
		 */
		onShow: function() {
			this.afterSaleDetailFun();
		},

		methods: {
			onCopy() {
				let {
					lists,
					copyContent
				} = this;
				let {
					address,
					contact,
					mobile
				} = lists.shop;
				copyContent = address + " " + contact + " " + mobile;
				copy(copyContent)
			},

			goRefund(e) {
				let {
					lists
				} = this;
				uni.navigateTo({
					url: '/pages/bundle/apply_refund/apply_refund?order_id=' + this.orderId + '&afterSaleId=' +
						this.afterSaleId + '&item_id=' + lists.order_goods.item_id
				});
			},

			showDialog() {
				this.confirmDialog = true
			},

			hideDialog() {
				this.confirmDialog = false;
			},

			confirmCancel() {},

			cancelApplyFun() {
				cancelApply({
					id: this.afterSaleId
				}).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						}, {
							tab: 3
						});
						uni.$emit("refreshsale")
					}
				});
			},

			afterSaleDetailFun() {
				afterSaleDetail({
					id: this.afterSaleId
				}).then(res => {
					if (res.code == 1) {
						this.lists = res.data
					}
				});
			}

		}
	};
</script>
<style lang="scss">
	/* pages/after_sales_detail/after_sales_detail.wxss */

	.after-sales-detail {
		padding-bottom: calc(120rpx + env(safe-area-inset-bottom));

		.after-sales-header {
			.after-sales-status {
				padding: 48rpx 30rpx;
				background-color: #555555;
			}

			.after-sales-explain {
				padding: 20rpx 30rpx 24rpx;
			}
		}

		.negotiation-record {
			padding: 24rpx 30rpx;

			.arrow {
				width: 28rpx;
				height: 28rpx;
			}
		}

		.return-goods-container {
			padding: 20rpx 24rpx 55rpx;

			.return-goods-row {
				line-height: 40rpx;
				font-weight: 400;
			}
		}

		.btn-group {
			padding: 0rpx 24rpx;
			position: fixed;
			left: 0;
			right: 0;
			bottom: 0;
			height: 100rpx;

			.btn {
				padding: 10rpx 34rpx;
				border: 1px solid #999999;
			}
		}

		.goods-container {
			.goods-header {
				padding: 20rpx 24rpx;

				.store-img {
					width: 40rpx;
					height: 40rpx;
				}

				.store-name {
					line-height: 40rpx;
					align-self: flex-end;
					font-family: PingFang SC;
				}
			}

			.goods-item {
				padding: 25rpx 24rpx;

				.goods-img {
					width: 180rpx;
					height: 180rpx;
					flex: none;
				}

				.goods-info {
					margin-left: 24rpx;
					flex: 1;
				}
			}
		}
	}

	.return-address-contain {
		padding: 20rpx 24rpx 28rpx 30rpx;

		.address {
			flex: 1;
			line-height: 38rpx;
		}

		.address-title {
			width: 150rpx;
			align-self: flex-start;
			line-height: 40rpx;
		}

		.copy-btn {
			flex: 0 0 13%;
			background-color: #F4F4F4;
			color: #555555;
			align-self: flex-start;
			padding: 3rpx 16rpx;
			margin-left: 12rpx;
			border-radius: 4rpx;
		}
	}

	.tips-dialog {
		height: 230rpx;
		width: 100%;
	}
</style>
