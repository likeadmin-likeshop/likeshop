<template>
	<view class="pay-result">
		<view class="contain bg-white">
			<view style="border-top: 1rpx solid transparent;">
				<view class="header  column-center">
					<view>
						<image class="tips-icon" :src="getStatusImg"></image>
					</view>
					<view class="xl mt20 line1">{{widthdrawInfo.statusDesc}}</view>
				</view>
				<view class="column-center mt10">
					<price-format :price="widthdrawInfo.money" color="#FF2C3C" showSubscript subscriptSize="30"
						firstSize="46" secondSize="46" weight="500" />
				</view>
				<view class="info">
					<view class="order-num row-between mt20">
						<view class="ml20">流水号</view>
						<view class="mr20">
							{{widthdrawInfo.sn}}
						</view>
					</view>
					<view v-if="widthdrawInfo.create_time" class="order-time row-between mt20">
						<view class="ml20">提交时间</view>
						<view class="mr20">{{widthdrawInfo.create_time}}</view>
					</view>
					<view class="order-pay-type row-between mt20">
						<view class="ml20">提现至</view>
						<view class="mr20">{{widthdrawInfo.typeDesc}}</view>
					</view>
					<view class="order-pay-money row-between mt20">
						<view class="ml20">服务费</view>
						<view class="mr20">
							<price-format :price="widthdrawInfo.poundage" />
						</view>
					</view>
					<view class="order-pay-money row-between mt20">
						<view class="ml20">实际到账</view>
						<view class="mr20">
							<price-format :price="widthdrawInfo.left_money" />
						</view>
					</view>
				</view>
				<view class="line ml20" v-if="!type"></view>
				<view class="opt-btn-contain row-center wrap" v-if="!type">
					<navigator hover-class="none" class="check-order-btn row-center bg-primary br60 mt20"
						url="/pages/bundle/user_withdraw_code/user_withdraw_code">
						<view class="white bg-primary lg">查看历史提现记录</view>
					</navigator>
					<navigator hover-class="none" class="go-back-btn row-center br60 mt20" open-type="switchTab"
						url="/pages/index/index">
						<view class="primary br60 lg">返回首页</view>
					</navigator>
				</view>
			</view>
		</view>
		<view class="muted mt20 row-center xs">* 审核通过后约72小时内到账，请留意账户明细</view>
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
		getWithdrawDetail
	} from '@/api/user';

	export default {
		data() {
			return {
				widthdrawInfo: {},
				type: ""
			};
		},

		components: {},
		props: {},

		/**
		 * 生命周期函数--监听页面加载
		 */
		onLoad: function(options) {
			this.id = options.id;
			this.type = options.type
			this.getWithdrawDetailFun();
		},


		methods: {
			getWithdrawDetailFun() {
				getWithdrawDetail({
					id: this.id
				}).then(res => {
					if (res.code == 1) {
						this.widthdrawInfo = res.data
					}
				});
			}

		},
		computed: {
			getStatusImg() {
				switch (this.widthdrawInfo.status) {
					case 1:
						"";
					case 2:
						return '/static/images/icon_cashOut_wait.png';
					case 3:
						return '/static/images/icon_paySuccess.png';
					case 4:
						return '/static/images/icon_payFail.png';
				}
			}
		}
	};
</script>
<style lang="scss">
	.pay-result {
		overflow: hidden;

		.contain {
			/* height: 732rpx; */
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
				margin-top: -56rpx;
			}

			.info {
				margin-bottom: 40rpx;

				.order-num {
					align-items: flex-start;
				}
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
		}
	}

	.line {
		width: 650rpx;
		border-top: 1px solid rgba(229, 229, 229, 1);
	}
</style>
