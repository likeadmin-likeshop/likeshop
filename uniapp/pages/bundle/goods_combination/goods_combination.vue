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
	<view class="goods-combination">
		<view class="header">
			<image class="img" src="/static/images/group_bg.png"></image>
		</view>
		<view class="main bg-primary">
			<view class="goods-list">
				<navigator v-for="(item, index) in groupList" :key="index" class="goods-item row mt20 bg-white" hover-class="none"
				 :url="'/pages/goods_details/goods_details?id=' + item.goods_id">
					<custom-image width="180rpx" height="180rpx" radius="6rpx" lazy-load :src="item.image"></custom-image>
					<view class="goods-info ml20">
						<view class="goods-name line2 mb10">{{item.name}}</view>
						<view class="dec row">
							<view class="group mr20 row">
								<view class="group-img row-center">
									<image class="icon-sm" src="/static/images/icon_group_white.png"></image>
								</view>
								<view class="primary xxs mr10 ml10">{{item.people_num}}人团</view>
							</view>
							<view class="sale muted xs">已拼{{item.sales_sum}}件</view>
						</view>
						<view class="info-footer row-between">
							<view class="price row">
								<price-format color="#FF2C3C" :subscript-size="26" :second-size="26" :first-size="34" :price="item.team_min_price"
								 :weight="500"></price-format>
								<price-format class="ml10" color="#999" :line-through="true" :subscript-size="24" :first-size="24" :second-size="24"
								 :price="item.min_price"></price-format>
							</view>
							<button class="br60 btn white" size="sm" type="primary">去拼团</button>
						</view>
					</view>
				</navigator>
			</view>
			<loading-footer :status="status" :slot-empty="true" color="#fff" @refresh="getGroupListFun">
				<view slot="empty" class="column-center" style="padding-top: 200rpx">
					<text class="lg" style="color: #FFD4D8">暂无拼团商品</text>
				</view>
			</loading-footer>
		</view>
		<float-tab></float-tab>
	</view>
</template>

<script>
	import {
		loadingType
	} from '@/utils/type';
	import {
		getGroupList
	} from '@/api/activity';

	import {
		loadingFun
	} from '@/utils/tools'
	export default {
		data() {
			return {
				page: 1,
				groupList: [],
				status: loadingType.LOADING
			};
		},

		components: {},
		onLoad: function(options) {
			this.getGroupListFun();
		},


		onPullDownRefresh: function() {
			this.page = 1;
			this.groupList = [];
			this.status = loadingType.LOADING;
			this.getGroupListFun();
		},

		onReachBottom: function() {
			this.getGroupListFun();
		},

		methods: {
			async getGroupListFun() {
				let {
					page,
					groupList,
					status
				} = this;
				const data = await loadingFun(getGroupList, page, groupList, status)
				if (!data) return
				this.page = data.page
				this.groupList = data.dataList
				this.status = data.status

			}

		}
	};
</script>
<style lang="scss">
	.goods-combination {
		background-color: $-color-primary;
		min-height: 100vh;

		.header .img {
			display: block;
			width: 750rpx;
			height: 380rpx;
		}

		.main {
			padding: 0 20rpx;
			margin-top: -30rpx;
			position: relative;
			z-index: 1;
			.goods-list {
				.goods-item {
					border-radius: 20rpx;
					padding: 30rpx 20rpx;
					.goods-img {
						width: 180rpx;
						height: 180rpx;
						flex: none;
					}
					.goods-info {
						flex: 1;
						width: 475rpx;
						.group {
							border: 1px solid $-color-primary;
							border-radius: 4rpx;
							.group-img {
								padding: 2rpx 6rpx;
								background: linear-gradient(90deg, rgba(249, 95, 47, 1) 0%, rgba(255, 44, 60, 1) 100%);
								border-radius: 0 4rpx 4rpx 0;
							}
							
						}
						.info-footer {.btn {
							padding: 0 30rpx;
							background-color: #F95F2F;
						}}
					}
				}
			}

		}
	}
</style>
