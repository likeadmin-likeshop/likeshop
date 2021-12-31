<template>
	<view class="goods-details">
		<!-- #ifdef H5 -->
		<download-nav v-if="showDownload"></download-nav>
		<!-- #endif -->
		<loading-view v-if="isFirstLoading"></loading-view>
		<view class="contain" v-if="!isNull">
			<bubble-tips top="40rpx"></bubble-tips>
			<product-swiper :imgUrls="swiperList" :video="goodsDetail.video"></product-swiper>
			<!-- 秒杀 -->
			<view class="seckill row-between" v-if="goodsType == 1">
				<view class="price row">
					<view class="row white info">
						<view style="align-items: baseline;" class="row ml20">
							<view class="mr10">秒杀价</view>
							<price-format :subscript-size="32" :first-size="46" :second-size="32"
								:price="checkedGoods.price || goodsDetail.price" :weight="500"></price-format>
							<view class="ml10">
								<price-format :subscript-size="30" :line-through="true" :first-size="30"
									:second-size="30" :price="checkedGoods.market_price || goodsDetail.market_price">
								</price-format>
							</view>
						</view>
					</view>
				</view>
				<view class="down column-center">
					<view class="xxs primary mb10">距活动结束仅剩</view>
					<u-count-down :timestamp="countTime" @end="getGoodsDetailFun" color="#fff" bg-color="#FF2C3C"
						separator-color="#FF2C3C" font-size="24" height="36" separator-size="26"></u-count-down>
				</view>
			</view>
			<!-- 拼团 -->
			<view class="group" v-show="goodsType == 2">
				<view class="row info" style="height: 100%">
					<view class="row-between ml20 white" style="flex: 1;">
						<view style="align-items: baseline;" class="row">
							<view class="mr10">拼团价</view>
							<price-format :subscript-size="32" :first-size="46" :second-size="32"
								:price="checkedGoods.team_price || team.team_min_price" :weight="500"></price-format>
						</view>
						<view class="mr20 row group-num">
							<view class="group-icon">
								<image src="/static/images/icon_group.png" class="icon-sm"></image>
							</view>
							<view class="xxs ml10 mr10">{{ team.people_num }}人团</view>
						</view>
					</view>
					<view class="down column-center">
						<view class="xxs primary mb10">距活动结束仅剩</view>
						<u-count-down :timestamp="countTime" color="#fff" bg-color="#FF2C3C" separator-color="#FF2C3C"
							font-size="24" height="36" separator-size="26" @end="getGoodsDetailFun"></u-count-down>
					</view>
				</view>
			</view>
			<view class="goods-info bg-white">
				<view class="info-header row" v-if="goodsType != 1">
					<view class="price row flex1">
						<view class="primary mr10">
							<price-format :first-size="46" :second-size="32" :subscript-size="32"
								:price="checkedGoods.price || goodsDetail.price" :weight="500"></price-format>
						</view>
						<view class="line-through muted md">
							<price-format :price="checkedGoods.market_price || goodsDetail.market_price"></price-format>
						</view>
					</view>
					<image class="icon-share" src="/static/images/icon_share.png" @tap="showShareBtn = true"></image>
				</view>
				<view class="row" v-if="!goodsType && (checkedGoods.member_price || goodsDetail.member_price)">
					<view class="vip-price row">
						<view class="price-name xxs">会员价</view>
						<view style="padding: 0 11rpx">
							<price-format :price="checkedGoods.member_price || goodsDetail.member_price "
								:first-size="26" :second-size="26" :subscript-size="22" :weight="500" color="#7B3200">
							</price-format>
						</view>
					</view>
				</view>
				<view class="row">
					<view class="name lg bold">{{ goodsDetail.name }}</view>
					<image class="icon-share" src="/static/images/icon_share.png" @tap="showShareBtn = true"
						v-if="goodsType == 1"></image>
				</view>
				<view class="row-between xs lighter" style="padding: 0 24rpx 20rpx">
					<text v-if="goodsDetail.stock !== true">库存: {{ checkedGoods.stock || goodsDetail.stock }}件</text>
					<text>销量: {{ goodsDetail.sales_sum }}件</text>
					<text>浏览量: {{ goodsDetail.click_count }}次</text>
				</view>
			</view>
			<view class="group-play bg-white mt20" v-if="goodsType == 2">
				<view class="title">拼团玩法</view>
				<view class="steps row">
					<view class="row step">
						<view class="number xxs">1</view>
						<view class="sm">开团/参团</view>
					</view>
					<view class="line"></view>
					<view class="row step">
						<view class="number xxs">2</view>
						<view class="sm">团满即成新团</view>
					</view>
					<view class="line"></view>
					<view class="row step">
						<view class="number xxs">3</view>
						<view class="sm">满员发货</view>
					</view>
				</view>
			</view>
			<view class="discount mt20 bg-white" v-if="couponList.length || goodsDetail.order_give_integral">
				<view class="row" style="align-items: flex-start;">
					<view class="text muted">优惠</view>
					<view style="flex: 1">
						<view :class="['row coupons', {mb30: goodsDetail.order_give_integral > 0}]"
							v-if="couponList.length" @tap="showCouponFun">
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
						<view class="row integral" style="align-items: flex-start;"
							v-if="goodsDetail.order_give_integral">
							<view class="flexnone">
								<u-tag text="积分" size="mini" type="primary" mode="plain" />
							</view>
							<view class="ml20">下单最多可获得{{goodsDetail.order_give_integral}}积分</view>
						</view>
					</view>
				</view>
			</view>
			<swiper v-if="teamFound.length" class="mt20 bg-white" autoplay="true" style="height: 240rpx;"
				vertical="true" circular="true" :interval="5000">
				<swiper-item v-for="(sitem, index) in teamFound" :key="index">
					<view class="group-list">
						<view v-for="(item, index2) in sitem" :key="index2" class="group-item bg-white row-between">
							<view class="row" style="max-width: 280rpx;">
								<custom-image :src="item.avatar" width="80rpx" height="80rpx" radius="50%">
								</custom-image>
								<view class="ml20 line1 normal">{{ item.nickname }}</view>
							</view>
							<view class="row ml20" style="flex: none;">
								<view class="column-center">
									<text class="sm normal">
										还差
										<text class="primary">{{ item.need - item.join }}</text>
										人成团
									</text>
									<view class="muted xs">
										剩余
										<u-count-down :timestamp="getTeamCountTime(item.found_end_time)"
											separator-color="#999" color="#999" :separator-size="24" :font-size="24"
											bg-color="transparent" @end="getGoodsDetailFun"></u-count-down>
									</view>
								</view>
								<view class="group-btn br60 white row-center" @tap="showSpecFun(3, item.id)">去参团</view>
							</view>
						</view>
					</view>
				</swiper-item>
			</swiper>
			<view v-if="!goodsType" class="spec row bg-white mt20" @tap="showSpecFun(0)">
				<view class="text lighter">已选</view>
				<view class="line1 mr20" style="flex: 1;">{{ checkedGoods.spec_value_str || '默认' }}</view>
				<image class="icon-sm" src="/static/images/arrow_right.png"></image>
			</view>
			<navigator class="mt20" hover-class="none" url="/pages/bundle/server_explan/server_explan?type=2">
				<view class="row bg-white" style="padding: 24rpx 24rpx;">
					<view class="text lighter flex1">售后保障</view>
					<image class="icon-sm" src="/static/images/arrow_right.png"></image>
				</view>
			</navigator>
			<view class="evaluation bg-white mt20">
				<navigator hover-class="none" :url="'/pages/all_comments/all_comments?id=' + goodsDetail.id"
					class="title row-between">
					<view>
						<text class="balck md mr10">用户评价</text>
						<text class="primary sm">好评率{{ comment.goods_rate || '0%' }}</text>
					</view>
					<view class="row">
						<text class="lighter">查看全部</text>
						<image class="icon-sm" src="/static/images/arrow_right.png"></image>
					</view>
				</navigator>
				<view class="con" v-if="comment.goods_rate">
					<view class="user-info row">
						<image class="avatar mr20" :src="comment.avatar"></image>
						<view class="user-name md mr10">{{ comment.nickname }}</view>
					</view>
					<view class="muted xs mt10">
						<text class="mr20">{{ comment.create_time }}</text>
					</view>
					<view v-if="comment.comment" class="dec mt20">{{ comment.comment }}</view>
				</view>
				<view class="con row-center muted" v-else>暂无评价</view>
			</view>

			<view class="goods-like mt20 bg-white">
				<goods-like :list="goodsLike"></goods-like>
			</view>
			<view class="details mt20 bg-white">
				<view class="title lg">商品详情</view>
				<view class="content">
					<u-parse :html="goodsDetail.content" :lazy-load="true" :show-with-animation="true"></u-parse>
				</view>
			</view>
			<view class="footer row bg-white fixed">
				<navigator class="btn column-center" hover-class="none"
					url="/pages/bundle/contact_offical/contact_offical">
					<image class="icon-md" src="/static/images/icon_contact.png"></image>
					<text class="xxs lighter">客服</text>
				</navigator>
				<button class="btn column-center" hover-class="none" @tap="collectGoodsFun">
					<image class="icon-md"
						:src="goodsDetail.is_collect == 1 ? '/static/images/icon_collection_s.png' : '/static/images/icon_collection.png'">
					</image>
					<text class="xxs lighter">收藏</text>
				</button>
				<navigator class="btn cart column-center" hover-class="none" open-type="switchTab"
					url="/pages/shop_cart/shop_cart">
					<image class="icon-md" src="/static/images/icon_cart.png"></image>
					<text class="xxs lighter">购物车</text>
					<u-badge v-if="cartNum" bgColor="#FF2C3C" :offset="[8, 10]" :count="cartNum"></u-badge>
				</navigator>
				<view v-if="btnText.yellow" class="add-cart br60 white mr10 md ml20" @tap="showSpecFun(1)">
					{{ btnText.yellow }}</view>
				<view class="right-buy br60 white mr20 ml10 md" @tap="showSpecFun(2)">{{ btnText.red }}</view>
			</view>
		</view>
		<view v-else>
			<view class="details-null column-center">
				<image class="img-null" src="/static/images/goods_null.png"></image>
				<view class="xs muted">该商品已下架或不存在，去逛逛别的吧~</view>
			</view>
			<recommend></recommend>
		</view>
		<spec-popup :show="showSpec" :goods="goodsDetail" :is-seckill="goodsType == 1" @close="showSpec = false"
			:show-add="popupType == 1 || popupType == 0" :show-buy="popupType == 2 || popupType == 0"
			:showConfirm="popupType == 3" @buynow="onBuy" @addcart="onAddCart" @change="onChangeGoods"
			:group="Boolean(isGroup)" :red-btn-text="btnText.red" :yellow-btn-text="btnText.yellow"
			@confirm="onConfirm"></spec-popup>

		<share-popup :show="showShareBtn" @close="showShareBtn = false" :goods-id="id" :img-url="goodsDetail.image"
			:summary="goodsDetail.remark" :share-title="goodsDetail.name"></share-popup>
		<float-tab></float-tab>
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

		<view class="share-money" :class="{ show: showShare && goodsDetail.commission_price > 0 && goodsType == 0}">
			<view class="row-end">
				<view class="share-close row-center" @tap="showShare=false">
					<u-icon name="close" size="16" color="#fff"></u-icon>
				</view>
			</view>
			<view class="share-con mt10" @tap="showShareBtn=true">
				<view class="primary" style="font-size: 45rpx;">
					{{goodsDetail.commission_price}}<text class="xs">元</text>
				</view>
				<view class="lighter xxs">
					好友下单最高可赚
				</view>
			</view>
		</view>
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
		getGoodsCoupon,
		teamCheck
	} from '@/api/activity';
	import {
		mapActions,
		mapGetters
	} from 'vuex';
	import {
		arraySlice
	} from '@/utils/tools';
	import {
		toLogin
	} from '@/utils/login';
	import {
		getUser,
		inputInviteCode
	} from '@/api/user';
	import Cache from '@/utils/cache';
	import {
		strToParams
	} from '@/utils/tools'
	export default {
		data() {
			return {
				isFirstLoading: true,
				isNull: false,
				showSpec: false,
				showCoupon: false,
				showShareBtn: false,
				showShare: true,
				popupType: '',
				swiperList: [],
				goodsDetail: {},
				goodsLike: [],
				goodsType: 0,
				checkedGoods: {},
				couponList: [],
				comment: {},
				countTime: 0,
				tagStyle: {
					img: 'width:100%;'
				},
				team: {},
				teamFound: [],
				isGroup: 0,
				id: '',
				showDownload: false
			};
		},
		onLoad(options) {
			if (options && options.scene) {
				let scene = strToParams(decodeURIComponent(options.scene));
				console.log(scene, decodeURIComponent(options.scene))
				options.id = scene.id;
			}
			// #ifdef H5
			if (options && options.isapp == 1) {
				this.showDownload = true;
			}
			// #endif
			if (!options.id) {
				return this.$toast({
					title: '缺少参数，无法查看商品'
				}, {
					tab: 3
				});
			} else {
				this.id = options.id;
			}
			this.getGoodsCouponFun();
			this.getCartNum();
		},
		onShow() {
			this.getGoodsDetailFun();
		},
		methods: {
			...mapActions(['getCartNum']),
			async getGoodsDetailFun() {
				const {
					data,
					code
				} = await getGoodsDetail({
					id: this.id
				});
				if (code == 1) {
					let {
						goods_image,
						content,
						comment,
						like,
						activity
					} = data;
					let {
						info,
						team,
						team_found
					} = activity; //秒杀时间
					let time = info ?
						info.end_time - Date.now() / 1000 //拼团时间
						:
						team ?
						team.end_time - Date.now() / 1000 :
						0;

					if (team_found) {
						team_found = arraySlice(team_found, [], 2);
					}

					this.goodsDetail = data;
					this.swiperList = goods_image;
					this.comment = comment;
					this.goodsLike = like;
					this.countTime = time;
					this.goodsType = activity.type || 0;
					this.team = team ? team : {};
					this.teamFound = team_found ? team_found : [];

					this.$nextTick(() => {
						this.isFirstLoading = false;
					});
					// #ifdef H5
					let options = {
						shareTitle: data.name,
						shareLink: location.href + '&invite_code=' + this.userInfo.distribution_code,
						shareImage: data.image,
						shareDesc: data.remark
					};
					this.wxShare(options);
					// #endif
				} else {
					this.isNull = true
					this.isFirstLoading = false;
				}
			},
			async getGoodsCouponFun() {
				const {
					data,
					code
				} = await getGoodsCoupon({
					id: this.id
				});
				if (code == 1) {
					this.couponList = data;
				}
			},
			async collectGoodsFun() {
				if (!this.isLogin) return toLogin();
				const {
					goodsDetail: {
						is_collect
					}
				} = this;
				const {
					data,
					code
				} = await collectGoods({
					is_collect: is_collect == 0 ? 1 : 0,
					goods_id: this.id
				});
				if (code == 1) {
					if (is_collect == 0) {
						this.$toast({
							title: '收藏成功'
						});
					} else {
						this.$toast({
							title: '取消收藏'
						});
					}
					this.getGoodsDetailFun();
				}
			},
			showCouponFun() {
				if (!this.isLogin) return toLogin();
				this.showCoupon = true;
			},
			onChangeGoods(e) {
				console.log(e);
				this.checkedGoods = e.detail;
			},
			showSpecFun(type, id) {
				if (!this.isLogin) return toLogin();
				if (this.goodsType == 2 && [2, 3].includes(type)) {
					this.isGroup = 1;
					this.foundId = id;
				} else {
					this.isGroup = 0;
					this.foundId = '';
				}
				this.popupType = type;
				this.showSpec = true;
			},
			onBuy(e) {
				let {
					id,
					goodsNum
				} = e.detail;
				const {
					goodsType,
					team
				} = this;
				let goods = [{
					item_id: id,
					num: goodsNum
				}];
				const params = {
					goods
				};
				this.showSpec = false;
				goodsType == 2 ? (params.teamId = team.team_id) : '';
				this.foundId ? (params.foundId = this.foundId) : '';
				uni.navigateTo({
					url: '/pages/confirm_order/confirm_order?data=' + encodeURIComponent((JSON.stringify(params)))
				})
			},
			onConfirm(e) {
				const {
					team: {
						team_id
					}
				} = this;
				teamCheck({
					team_id,
					found_id: this.foundId
				}).then(res => {
					if (res.code == 1) {
						this.onBuy(e);
					}
				});
			},
			async onAddCart(e) {
				let {
					id,
					goodsNum
				} = e.detail;

				if (this.goodsType == 2) {
					// 拼团单独购买
					let goods = [{
						item_id: id,
						num: goodsNum
					}];
					uni.navigateTo({
						url: '/pages/confirm_order/confirm_order?data=' + encodeURIComponent((JSON.stringify({
							goods
						})))
					})
					return
				}
				const {
					code,
					data,
					msg
				} = await addCart({
					item_id: id,
					goods_num: goodsNum
				});
				if (code == 1) {
					this.getCartNum();
					this.$toast({
						title: msg,
						icon: 'success'
					});
					this.showSpec = false;
				}
			}
		},
		async onShareAppMessage() {
			const {
				goodsDetail,
				team,
				userInfo
			} = this;
			return {
				title: team.share_title || goodsDetail.name,
				imageUrl: goodsDetail.image,
				path: '/pages/goods_details/goods_details?id=' + this.id + "&invite_code=" + userInfo.distribution_code
			};
		},
		computed: {
			...mapGetters(['cartNum', 'userInfo']),
			btnText() {
				const {
					goodsType
				} = this;
				switch (goodsType) {
					case 1:
						return {
							red: '立即抢购',
								yellow: ''
						};
					case 2:
						return {
							red: '立即开团',
								yellow: '单独购买'
						};
					default:
						return {
							red: '立即购买',
								yellow: '加入购物车'
						};
				}
			},
			getTeamCountTime() {
				return time => time - Date.now() / 1000;
			}
		}
	};
</script>

<style lang="scss">
	.goods-details {
		padding-bottom: calc(120rpx + env(safe-area-inset-bottom));

		.seckill {
			height: 100rpx;
			background: #ffd4d8;

			.price {
				width: 504rpx;
				height: 100%;
				background: url(../../static/images/bg_seckill.png) no-repeat;
				background-size: 100%;
			}

			.down {
				flex: 1;
			}
		}

		.group {
			height: 100rpx;
			width: 100%;
			background-image: url(../../static/images/pintuan_bg.png);
			background-size: 100%;

			.group-num {
				border: 1px solid #ffffff;
				border-radius: 4rpx;

				.group-icon {
					background: #fff;
					padding: 3rpx 7rpx;
				}
			}

			.down {
				height: 100%;
				background-color: #fff5e1;
				padding: 0 20rpx;
			}
		}

		.goods-info {
			position: relative;

			.info-header {
				padding: 20rpx 0 0rpx 24rpx;

				.price {
					align-items: baseline;
				}
			}

			.vip-price {
				margin: 0 24rpx;
				background-color: #FFE9BA;
				line-height: 36rpx;
				border-radius: 6rpx;
				overflow: hidden;

				.price-name {
					background-color: #101010;
					padding: 3rpx 12rpx;
					color: #FFD4B7;
					position: relative;
					overflow: hidden;

					&::after {
						content: '';
						display: block;
						width: 20rpx;
						height: 20rpx;
						position: absolute;
						right: -15rpx;
						background-color: #FFE9BA;
						border-radius: 50%;
						top: 50%;
						transform: translateY(-50%);
						box-sizing: border-box;
					}
				}
			}

			.name {
				padding: 20rpx 24rpx;
				flex: 1;
			}

			.icon-share {
				width: 134rpx;
				height: 60rpx;
			}
		}

		.discount {
			padding: 24rpx;

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
					white-space: nowrap;
					overflow: hidden;

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

		.details-null {
			padding-top: 140rpx;
			margin-bottom: 100rpx;
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
				overflow: hidden;

				::v-deep image {
					vertical-align: middle;
				}

				// #ifdef H5
				::v-deep img {
					vertical-align: middle;
				}

				// #endif
				// #ifdef MP-WEIXIN || APP-PLUS
				::v-deep ._img {
					display: block;
				}

				// #endif
			}
		}

		.footer {
			height: 100rpx;
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
			box-sizing: content-box;
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
				background-color: #ffa630;
			}

			.right-buy {
				background-color: $-color-primary;
			}
		}

		.group-play {
			.title {
				padding: 20rpx 28rpx;
				border-bottom: $-solid-border;
			}

			.steps {
				padding: 20rpx 28rpx;

				.step {
					flex: none;
				}

				.line {
					flex: 1;
					border: 1px dashed #999999;
					margin: 0 20rpx;
				}

				.number {
					border: 1rpx solid #707070;
					width: 28rpx;
					height: 28rpx;
					border-radius: 50%;
					line-height: 28rpx;
					text-align: center;
					margin-right: 6rpx;
				}
			}
		}

		.group-list {
			.group-item {
				padding: 20rpx 24rpx;

				&:not(:last-of-type) {
					border-bottom: $-solid-border;
				}

				.group-btn {
					background: linear-gradient(90deg, #f95f2f 0%, #ff2c3c 100%);
					height: 58rpx;
					padding-left: 28rpx;
					padding-right: 28rpx;
					margin-left: 30rpx;
					box-shadow: 0px 6rpx 12rpx rgba(249, 47, 138, 0.4);
				}
			}
		}

		.share-money {
			position: fixed;
			left: 20rpx;
			bottom: calc(130rpx + env(safe-area-inset-bottom));
			transform: scale(0);
			transition: all .3s;

			&.show {
				transform: scale(1);
			}

			.share-close {
				width: 34rpx;
				height: 34rpx;
				background: #a7a7a7;
				border-radius: 50%;
			}

			.share-con {
				background: url('../../static/images/bg_packet_img.png');
				width: 241rpx;
				height: 208rpx;
				background-size: 100%;
				padding-top: 20rpx;
				text-align: center;
			}
		}
	}
</style>
