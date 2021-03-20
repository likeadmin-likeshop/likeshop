<template>

	<view class="goods-details">
		<loading-view v-if="isFirstLoading"></loading-view>
		<view class="contain">
			<product-swiper :imgUrls="swiperList"></product-swiper>
			<view class="goods-info bg-white">
				<view class="info-header row">
					<view class="price row flex1">
						<view class="primary mr10">
							<price-format :first-size="46" :second-size="32" :subscript-size="32" :price="checkedGoods.price || goodsDetail.price"
							 :weight="500"></price-format>
						</view>
						<view class="line-through muted md">
							<price-format :price="checkedGoods.market_price || goodsDetail.market_price"></price-format>
						</view>
					</view>

					<image class="icon-share" src="/static/images/icon_share.png" @tap="showShareBtn=true"></image>
				</view>
				<view class="row">
					<view class="goods-name lg bold">{{goodsDetail.name}}</view>
				</view>
				<view class="row-between xs lighter" style="padding: 0 24rpx 20rpx">
					<text v-if="goodsDetail.stock !== true">库存: {{checkedGoods.stock || goodsDetail.stock}}件</text>
					<text>销量: {{goodsDetail.sales_sum}}件</text>
					<text>浏览量: {{goodsDetail.click_count}}次</text>
				</view>
			</view>
			<view class="coupons row mt20 bg-white" style="align-items: flex-start;" @tap="showCoupon=true" v-if="couponList.length">
				<view class="text muted">优惠</view>
				<view style="flex: 1">
					<view class="row">
						<view class="flexnone">
							<u-tag text="领券" size="mini" type="primary" mode="plain" />
						</view>
						<view class="con row ml20" style="flex: 1">
							<view v-for="(item, index) in couponList" :key="index" class="coupons-item  mr20">
								<view v-if="index < 2" class="row xs">
									<view class="line1">
										{{ item.use_condition }}
									</view>
								</view>
							</view>
						</view>
						<image class="icon-sm" src="/static/images/arrow_right.png"></image>
					</view>
				</view>
			</view>
			<view class="spec row bg-white mt20" @tap="showSpecFun(0)">
				<view class="text lighter">已选</view>
				<view class="line1 mr20" style="flex: 1;">{{checkedGoods.spec_value_str || "默认"}}</view>
				<image class="icon-sm" src="/static/images/arrow_right.png"></image>
			</view>
			<view class="evaluation bg-white mt20">
				<navigator hover-class="none" :url="'/pages/all_comments/all_comments?id=' + goodsDetail.id" class="title row-between">
					<view>
						<text class="balck md mr10">用户评价</text>
						<text class="primary sm">好评率{{comment.goods_rate || '0%'}}</text>
					</view>
					<view class="row">
						<text class="lighter">查看全部</text>
						<image class="icon-sm" src="/static/images/arrow_right.png"></image>
					</view>
				</navigator>
				<view class="con" v-if="comment.goods_rate">
					<view class="user-info row">
						<image class="avatar mr20" :src="comment.avatar"></image>
						<view class="user-name md mr10">{{comment.nickname}}</view>
					</view>
					<view class="muted xs mt10">
						<text class="mr20">{{comment.create_time}}</text>
					</view>
					<view v-if="comment.comment" class="dec mt20">{{comment.comment}}</view>
				</view>
				<view class="con row-center muted" v-else>暂无评价</view>
			</view>
			<view class="goods-like mt20 bg-white">
				<goods-like :list="goodsLike"></goods-like>
			</view>
			<view class="details mt20 bg-white">
				<view class="title lg">商品详情</view>
				<view class="content">
					<u-parse :html="goodsDetail.content"></u-parse>
				</view>
			</view>
			<view class="footer row bg-white fixed">
				<navigator class="btn column-center" hover-class="none" url="/pages/contact_offical/contact_offical">
					<image class="icon-md" src="/static/images/icon_contact.png"></image>
					<text class="xxs lighter">客服</text>
				</navigator>
				<button class="btn column-center" hover-class="none" @tap="collectGoodsFun">
					<image class="icon-md" :src="(goodsDetail.is_collect == 1)?'/static/images/icon_collection_s.png' : '/static/images/icon_collection.png'"></image>
					<text class="xxs lighter">收藏</text>
				</button>
				<navigator class="btn cart column-center" hover-class="none" open-type="switchTab" url="/pages/shop_cart/shop_cart">
					<image class="icon-md" src="/static/images/icon_cart.png"></image>
					<text class="xxs lighter">购物车</text>
					<u-badge v-if="cartNum" bgColor="#FF2C3C" :offset="[8, 10]" :count="cartNum"></u-badge>
				</navigator>
				<view class="add-cart br60 white mr20 md ml20" @tap="showSpecFun(1)">
					加入购物车
				</view>
				<view class="right-buy br60 white mr20 md" @tap="showSpecFun(2)">
					立即购买
				</view>
			</view>
		</view>
		<spec-popup :show="showSpec" :goods="goodsDetail" @close="showSpec = false" :show-add="popupType == 1 || popupType == 0"
		 :show-buy="popupType == 2 || popupType == 0" @buynow="onBuy" @addcart="onAddCart"></spec-popup>
		<!-- 领券 -->
		<u-popup v-model="showCoupon" mode="bottom" border-radius="14">
			<view>
				<view class="row-between" style="padding: 30rpx">
					<view class="title md bold">领券</view>
					<view class="close" @tap="showCoupon = false">
						<image class="icon-lg" src="/static/images/icon_close.png"></image>
					</view>
				</view>
				<view class="content bg-body">
					<scroll-view scroll-y="true" style="height: 700rpx">
						<coupon-list :list="couponList" @reflash="getGoodsCouponFun" :btn-type="3"></coupon-list>
					</scroll-view>
				</view>
			</view>
		</u-popup>
			<share-popup :show="showShareBtn" @close="showShareBtn = false" :goods-id="id"></share-popup>
	</view>
</template>

<script>
	import {
		getGoodsDetail,
		addCart,
		getPoster,
		getCartNum
	} from '@/api/store';
	import {
		collectGoods
	} from '@/api/user';
	import {
		getGoodsCoupon
	} from '@/api/activity';
	import {
		mapActions,
		mapGetters
	} from 'vuex'
	import {
		strToParams
	} from '@/utils/tools'
	import {
		showLoginDialog
	} from '@/utils/wxutil';
	export default {
		data() {
			return {
				isFirstLoading: true,
				showSpec: false,
				showShareBtn: false,
				showCoupon: false,
				popupType: '',
				swiperList: [],
				goodsDetail: {},
				goodsLike: [],
				checkedGoods: {},
				couponList: [],
				comment: {},
				id: ""
			};
		},
		onLoad(options) {
			if (options && options.scene) {
				let scene = strToParams(decodeURIComponent(options.scene));
				console.log(scene, decodeURIComponent(options.scene))
				options.id = scene.id;
			}
			if (!options.id) {
				return this.$toast({
					title: '缺少参数，无法查看商品'
				}, {
					tab: 3
				});
			} else {
				this.id = options.id;
			}
			this.getGoodsDetailFun();
			this.getGoodsCouponFun()
			this.getCartNum()
		},
		methods: {
			...mapActions(['getCartNum']),
			async getGoodsDetailFun() {
				const {
					data,
					code
				} = await getGoodsDetail({
					id: this.id
				})
				if (code == 1) {
					let {
						goods_image,
						content,
						comment,
						like
					} = data;
					this.goodsDetail = data
					this.swiperList = goods_image
					this.comment = comment
					this.goodsLike = like
					this.$nextTick(() => {
						this.isFirstLoading = false
					})
				} else {
					setTimeout(() => {
						uni.navigateBack();
					}, 500);
				}
			},
			async getGoodsCouponFun() {
				const {
					data,
					code
				} = await getGoodsCoupon({
					id: this.id
				})
				if (code == 1) {
					this.couponList = data
				}
			},
			async collectGoodsFun() {
				if (!this.isLogin) return showLoginDialog()
				const {
					goodsDetail: {
						is_collect
					}
				} = this
				const {
					data,
					code
				} = await collectGoods({
					is_collect: is_collect == 0 ? 1 : 0,
					goods_id: this.id
				})
				if (code == 1) {
					if (is_collect == 0) {
						this.$toast({
							title: "收藏成功"
						})
					} else {
						this.$toast({
							title: "取消收藏"
						})
					}
					this.getGoodsDetailFun();
				}
			},
			showSpecFun(type) {
				if (!this.isLogin) return showLoginDialog()
				this.popupType = type
				this.showSpec = true
			},
			onBuy(e) {
				let {
					id,
					goodsNum
				} = e.detail;
				let goods = [{
					item_id: id,
					num: goodsNum
				}];
				uni.navigateTo({
					url: '/pages/confirm_order/confirm_order?data=' + encodeURIComponent((JSON.stringify({
						goods
					}))),
				})
			},
			async onAddCart(e) {
				let {
					id,
					goodsNum
				} = e.detail;
				const {
					code,
					data,
					msg
				} = await addCart({
					item_id: id,
					goods_num: goodsNum
				})
				if (code == 1) {
					this.$toast({
						title: msg,
						icon: "success"
					})
					this.showSpec = false
					this.getCartNum()
					
				}
			}
		},
		computed: {
			...mapGetters(["cartNum"])
		}
	}
</script>

<style lang="scss">
	.goods-details {
		padding-bottom: calc(120rpx + env(safe-area-inset-bottom));

		.goods-info {
			position: relative;

			.info-header {
				padding: 20rpx 0 0rpx 24rpx;

				.price {
					align-items: baseline;
				}
			}

			.goods-name {
				padding: 20rpx 24rpx;
				flex: 1;
			}

			.icon-share {
				width: 134rpx;
				height: 60rpx;
			}

		}

		.coupons {
			padding: 24rpx 24rpx;

			.text {
				width: 100rpx;
				flex: none;
			}
			.con {
				width: 400rpx;
			}
			.coupons-item {
				overflow: hidden;

				&>view {
					position: relative;
					height: 40rpx;
					line-height: 40rpx;
					padding: 0 18rpx;
					border-radius: 6rpx;
					box-sizing: border-box;
					background-color: $-color-primary;
					color: #fff;

					&::after,
					&::before {
						content: '';
						display: block;
						width: 20rpx;
						height: 20rpx;
						position: absolute;
						left: -14rpx;
						background-color: #fff;
						border-radius: 50%;
						border: 1px solid currentColor;
						box-sizing: border-box;
					}

					&::after {
						right: -14rpx;
						left: auto;
					}
				}
			}

		}

		.spec {
			padding: 24rpx 24rpx;

			.text {
				width: 100rpx;
			}
		}

		.evaluation {
			.title {
				height: 100rpx;
				border-bottom: $-solid-border;
				padding: 0 24rpx;
			}

			.con {
				padding: 30rpx 24rpx;
			}

			.user-info .avatar {
				width: 60rpx;
				height: 60rpx;
				border-radius: 50%;
			}

		}

		.details {
			.title {
				line-height: 88rpx;
				text-align: center;
			}

			&>.content {
				padding: 0 20rpx 20rpx;
			}
		}

		.footer {
			height: 100rpx;
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
			padding-bottom: env(safe-area-inset-bottom);

			.btn {
				width: 100rpx;
				height: 100rpx;
				position: relative;
				line-height: 1.3;
			}

			.cart-num {
				position: absolute;
				left: 60rpx;
				top: 6rpx;
			}

			.add-cart,
			.right-buy {
				flex: 1;
				text-align: center;
				padding: 16rpx 0;
			}

			.add-cart {
				background-color: #FFA630;
			}

			.right-buy {
				background-color: $-color-primary;
			}
		}
	}
</style>
