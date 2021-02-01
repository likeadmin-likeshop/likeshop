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
	<view class="pay-result">
		<view class="contain bg-white">
			<view class="header  column-center">
				<view>
					<image class="tips-icon" src="/static/images/icon_paySuccess.png"></image>
				</view>
				<view class="xl mt20">订单支付成功</view>
			</view>
			<view style="height:181rpx"></view>
			<view class="info">
				<view class="order-num row-between mt20">
					<view class="ml20">订单编号</view>
					<view class="mr20">
						{{payInfo.order_sn}}
					</view>
				</view>
				<view v-if="payInfo.pay_time" class="order-time row-between mt20">
					<view class="ml20">付款时间</view>
					<view class="mr20">{{payInfo.pay_time}}</view>
				</view>
				<view class="order-pay-type row-between mt20">
					<view class="ml20">支付方式</view>
					<view class="mr20">{{payInfo.pay_way_text}}</view>
				</view>
				<view class="order-pay-money row-between mt20">
					<view class="ml20">支付金额</view>
					<view class="mr20">
						<price-format :price="payInfo.order_amount"></price-format>
					</view>
				</view>
			</view>
			<view class="line ml20"></view>
			<view class="opt-btn-contain row-center wrap">
				<navigator hover-class="none" class="check-order-btn row-center bg-primary br60 mt20" open-type="redirect" url="/pages/user_order/user_order">
					<view class="white bg-primary lg">查看订单</view>
				</navigator>
				<navigator hover-class="none" class="go-back-btn row-center br60 mt20" open-type="switchTab" url="/pages/index/index">
					<view class="primary br60 lg">返回首页</view>
				</navigator>
			</view>
		</view>
	</view>
</template>

<script>
	import {
		getOrderDetail
	} from '@/api/order';

	export default {
		data() {
			return {
				payInfo: {}
			};
		},

		components: {

		},
		props: {},
		onLoad: function(options) {
			this.id = options.id;
			this.getOrderResultFun();
		},


		methods: {
			getOrderResultFun() {
				getOrderDetail(this.id).then(res => {
					if (res.code == 1) {
						this.payInfo = res.data
					}
				});
			}

		}
	};
</script>
<style lang="scss">
	.pay-result {
		.contain {
			width: 682rpx;
			margin-left: 20rpx;
			margin-right: 20rpx;
			border-radius: 10rpx;
			margin-top: 78rpx;
			padding-left: 20rpx;
			padding-right: 20rpx;
			padding-bottom: 40rpx;
			position: relative;

			.tips-icon {
				width: 112rpx;
				height: 112rpx;
			}

			.header {
				position: absolute;
				left: 50%;
				transform: translateX(-50%);
				top: -50rpx;
			}

			.order-num {
				align-items: flex-start;
			}

			.info {
				margin-bottom: 40rpx;
			}

			.opt-btn-contain {
				margin-top: 40rpx;

				.check-order-btn {
					width: 650rpx;
					height: 84rpx;
				}

				.go-back-btn {
					width: 650rpx;
					height: 84rpx;
					border: solid 1rpx $-color-primary;
					box-sizing: border-box;
				}
			}

			.line {
				width: 650rpx;
				border-top: 1px solid rgba(229, 229, 229, 1);
			}
		}
	}
</style>
