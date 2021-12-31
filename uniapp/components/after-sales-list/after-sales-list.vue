<template>
	<view>
		<view>
			<view class="sale-list" v-if="type == 'normal'">
				<view v-for="(items, index) in lists" :key="index" class="sale-item bg-white mt20">
					<!--  <view class="sale-header row">
                    <view class="store-name nr ml10 normal">成交时间: {{items.time}}</view>
                </view> -->
					<view v-for="(item, index2) in items.order_goods" :key="index2" class="goods-item">
						<view class="sale-goods-show row">
							<view class="goods-img">
								<custom-image width="100%" height="100%" radius="6rpx" lazy-load :src="item.image" />
							</view>
							<view class="goods-desc">
								<view class="goods-name line2 nr">{{item.goods_name}}</view>
								<view class="row-between mt20">
									<price-format class="sm" :firstSize="30" :secondSize="30" :showSubscript="true"
										:subscriptSize="26" :price="item.goods_price" />
									<view class="nr">x{{item.goods_num}}</view>
								</view>
							</view>
						</view>
						<view
							:class="'sale-footer row-end ' + (items.after_sale.able_apply == 1 ? '' : 'bottom-opacity')">
							<view class="btn row-center bd-primary primary br60" @click="
                            goPage($event, 
                            items.after_sale.able_apply, 
                            '/pages/bundle/apply_refund/apply_refund', 
                            items.order_id, 
                            item.item_id)">
								申请售后
							</view>
						</view>
					</view>
				</view>
			</view>
			<view class="sale-list" v-else-if="type == 'apply'">
				<view v-for="(items, index) in lists" :key="index" class="sale-item bg-white mt20">
					<view class="sale-header row-between">
						<view class="row">
							<view class="store-name nr ml10 mr10">申请时间: {{items.time}}</view>
						</view>
						<view class="primary nr">{{items.after_sale.type_text}}</view>
					</view>
					<navigator v-for="(item, index2) in items.order_goods" :key="index2" hover-class="none"
						class="sale-goods-show"
						:url="'/pages/bundle/after_sales_detail/after_sales_detail?afterSaleId=' + items.after_sale.after_sale_id + '&order_id=' + items.order_id">
						<view class="row">
							<view class="goods-img">
								<custom-image width="100%" height="100%" radius="6rpx" lazy-load :src="item.image" />
							</view>
							<view class="goods-desc">
								<view class="goods-name line2 nr">{{item.goods_name}}</view>
								<view class="row-between mt20">
									<view>
										<price-format :firstSize="26" :price="item.goods_price" weight="600"
											:showSubscript="true" />
									</view>
									<view class="nr">x{{item.goods_num}}</view>
								</view>
							</view>
						</view>
						<view class="sale-status mt20 row">
							<view class="nr" style="font-weight: bold;">申请状态</view>
							<view class="nr ml20">{{items.after_sale.desc}}</view>
						</view>
					</navigator>
					<view class="sale-footer row-end">
						<view class="row-center normal br60 mr20 grey-btn nr"
							@tap="showDialog(items.after_sale.after_sale_id)">撤销申请</view>
						<navigator hover-class="none"
							:url="'/pages/bundle/input_express_info/input_express_info?id=' + items.after_sale.after_sale_id"
							class="row-center normal br60 grey-btn nr" :hidden="items.after_sale.status!=2">填写快递单号
						</navigator>
					</view>
				</view>
			</view>
			<view class="sale-list" v-else>
				<navigator v-for="(items, index) in lists" :key="index" hover-class="none"
					class="sale-item bg-white mt20"
					:url="'/pages/bundle/after_sales_detail/after_sales_detail?afterSaleId=' + items.after_sale.after_sale_id">
					<view class="sale-header row-between">
						<view class="row">
							<!-- <image style="width: 40rpx;height: 40rpx" src="/images/icon_shop.png"></image> -->
							<view class="store-name nr ml10 mr10">申请时间: {{items.time}}</view>
						</view>
						<view class="primary nr">{{items.after_sale.type_text}}</view>
					</view>
					<view v-for="(item, index2) in items.order_goods" :key="index2" class="sale-goods-show">
						<view class="row">
							<view class="goods-img">
								<custom-image lazy-load width="100%" height="100%" radius="6rpx" :src="item.image" />
							</view>
							<view class="goods-desc">
								<view class="goods-name line2 nr">{{item.goods_name}}</view>
								<view class="row-between mt20 row-between">
									<price-format :firstSize="26" :price="item.goods_price" weight="600"
										:showSubscript="true" />
									<view class="nr">x{{item.goods_num}}</view>
								</view>
							</view>
						</view>
						<view class="sale-status mt20 row">
							<view class="nr" style="font-weight: bold;">申请状态</view>
							<view class="nr ml20">{{items.after_sale.desc}}</view>
						</view>
					</view>
				</navigator>
			</view>
			<loading-footer :status="loadingStatus" slotEmpty>
				<view class="data-null column-center" slot="empty">
					<image class="img-null" src="/static/images/order_null.png"></image>
					<text class="nr muted">暂无售后数据～</text>
				</view>
			</loading-footer>
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
		AfterSaleType,
		loadingType
	} from "@/utils/type";
	import {
		getAfterSaleList,
		cancelApply,
		afterSaleDetail,
		applyAgain
	} from "@/api/user";
	import {
		loadingFun
	} from '@/utils/tools'

	export default {
		data() {
			return {
				lists: [],
				page: 1,
				loadingStatus: loadingType.LOADING,
				confirmDialog: false
			};
		},

		components: {},
		props: {
			type: {
				type: String,
				default: AfterSaleType.NORMAL
			}
		},

		created() {
			console.log('type', this.type)
			uni.$on('refreshsale', () => {this.reflesh()});
		},

		beforeMount() {
			this.getAfterSaleListFun();
		},
		destroyed: function() {
			uni.$off("refreshsale")
		},
		methods: {
			cancelApplyFun() {
				console.log(this.id, 'id')
				cancelApply({
					id: this.id
				}).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						});
						uni.$emit("refreshsale")
					}
				});
			},

			getAfterSaleListFun() {
				let {
					lists,
					loadingStatus,
					page
				} = this;
				loadingFun(getAfterSaleList, page, lists, loadingStatus, {
					type: this.type
				}).then(res => {
					console.log(res, "res")
					if (res) {
						this.page = res.page;
						this.loadingStatus = res.status;
						this.lists = res.dataList;
					}
				})
			},

			goPage(e, able_apply, url, order_id, item_id) {
				if (able_apply != 1) {
					return
				}
				url = url + '?order_id=' + order_id + '&item_id=' + item_id;
				uni.navigateTo({
					url: url
				});
			},

			reflesh() {
				this.page = 1;
				this.lists = [];
				this.loadingStatus = loadingType.LOADING;
				this.getAfterSaleListFun();
			},

			showDialog(id) {
				console.log(id, "showDialog")
				this.id = id;
				this.confirmDialog = true
			},

			hideDialog() {
				this.comfirmDialog = false
			}

		}
	};
</script>
<style lang="scss">
	.sale-list {

		/* padding: 20rpx 0; */
		.sale-item {
			.sale-goods-show {
				padding: 20rpx 24rpx;

				.goods-img {
					height: 160rpx;
					width: 160rpx;
				}

				.goods-desc {
					margin-left: 24rpx;
					flex: 1;
				}

				.sale-status {
					padding: 20rpx 40rpx;
					background-color: #F6F6F6;
					border-radius: 6rpx;
				}
			}

			.sale-header {
				padding: 20rpx 24rpx;

				.store-name {
					font-family: PingFang SC;
					line-height: 40rpx;
				}
			}

			.sale-footer {
				padding: 0 24rpx 22rpx;

				.btn {
					padding: 9rpx 34rpx;
					font-family: PingFang SC;
					border: 1px solid $-color-primary;
				}

				.grey-btn {
					border: 1px solid #CCCCCC;
					padding: 9rpx 34rpx;
					font-family: PingFang SC;
				}
			}
		}
	}

	.bottom-opacity {
		opacity: 0.5;
	}

	.data-null {
		padding-top: 150rpx;
	}

	.tips-dialog {
		height: 230rpx;
		width: 100%;
	}
</style>
