<template>
	<view class="index">
		<view class="header">
			<sticky :offset-top="0">
				<view class="navigation-bar bg-primary row" :style="{height: navHeight + 'px'}">
					<image mode="heightFix" class="logo ml20" :src="logo"></image>
				</view>
				<navigator class="search" hover-class="none" url="/pages/goods_search/goods_search">
					<uni-search-bar :disabled="true" :radius="60" @confirm="search" @input="input" bg-color="#FFF" cancel-button="none" wrap-bg-color="#FF2C3C"></uni-search-bar>
				</navigator>
			</sticky>
		</view>
		<view class="contain">
			<view class="top-bg"></view>
			<view class="main">
				<swipers :pid="2" height="284rpx" padding="20rpx"></swipers>
				<!-- 导航入口 -->
				<view class="nav bg-white" v-if="navList.length">
					<swiper style="height: 374rpx;" @change="swiperChange">
						<swiper-item v-for="(items, index) in navList" :key="index">
							<view class="nav-list row wrap">
								<view v-for="(item, index2) in items" :key="index2" @tap="tapMenu(item)" class="nav-item column-center">
									<image class="nav-icon" :src="item.image"></image>
									<view class="name xs">{{item.name}}</view>
								</view>
							</view>
						</swiper-item>
					</swiper>
					<view class="dots" v-if="navList.length > 1">
						<view v-for="(item, index) in navList" :key="index" :class="'dot ' + (index == currentSwiper ? 'active' : '')"></view>
					</view>
				</view>
				<!-- 资讯 -->
				<navigator v-if="news.length" class="information bg-white row" hover-class="none" open-type="navigate" url="/pages/news_list/news_list">
					<image class="icon-toutiao" src="/static/images/icon_toutiao.png"></image>
					<text class="gap-line"></text>
					<view class="news flex1">
						<view class="shade"></view>
						<swiper autoplay="true" style="height: 76rpx; flex: 1" vertical="true" circular="true" :interval="3000">
							<swiper-item v-for="(item, index) in news" :key="index" class="row">
								<uni-tag v-if="item.is_new" text="最新" type="error" circle size="small" inverted></uni-tag>
								<view class="text-swiper ml10 line1">{{item.title}}</view>
							</swiper-item>
						</swiper>
					</view>
					<image class="icon-sm ml20" src="/static/images/arrow_right.png" />
				</navigator>
				<!-- 新品推荐 -->
				<view v-if="newGoods.length" class="goods" style="margin: 0 20rpx;">
					<view class="goods-title row-center">
						<text class="line"></text>
						<view class="row">
							<image class="mr10 icon" src="/static/images/icon_new_recommend.png"></image>
							<text class="bold xxl">新品推荐</text>
						</view>
						<text class="line"></text>
					</view>
					<goods-list type="new" :list="newGoods"></goods-list>
				</view>
				<!-- 好物优选 -->
				<view class="goods mt20" v-if="goodsList.length">
					<view class="goods-title row-center">
						<text class="line"></text>
						<view class="row">
							<image class="mr10 icon" src="/static/images/icon_like.png"></image>
							<text class="bold xxl">好物优选</text>
						</view>
						<text class="line"></text>
					</view>
					<goods-list :list="goodsList"></goods-list>
					<loading-footer :status="status"></loading-footer>
				</view>
			</view>
		</view>
	</view>
</template>

<script>
	import {mapGetters} from 'vuex'
	import {
		getHome,
		getMenu,
		getBestList
	} from '@/api/store';
	import {
		arraySlice
	} from '@/utils/tools'
	import {loadingType} from '@/utils/type'
	import {loadingFun, menuJump} from '@/utils/tools'
	import {
		showLoginDialog
	} from '@/utils/wxutil'
	const app = getApp()
	export default {
		data() {
			return {
				logo: "",
				navHeight: 0,
				currentSwiper: 0,
				colors: ["#FE41B7", "#FA444D", "#BD5AFF", "#FB831C", "#2DC1B9"],
				page: 1,
				status: loadingType.LOADING,
				timeData: {},
				remainTime: "",
				navList: [],
				news: [],
				goodsList: [],
				seckill: {},
				hotGoods: [],
				newGoods: [],
				activityArea: [],
				showCoupop: false,
				couponPopList: [],
				coupon: "",
			}
		},
		onLoad() {
			this.navHeight = app.globalData.navHeight
			this.getHomeFun()
			this.getMenuFun()
			this.getBestListFun()
		},
		onReachBottom() {
			this.getBestListFun()
		},
		onPullDownRefresh() {
			this.getHomeFun()
			this.getMenuFun()
		},
		methods: {
			async getHomeFun() {
				const {
					code,
					data
				} = await getHome();
				uni.stopPullDownRefresh()
				if (code == 1) {
					const {
						coupon,
						news,
						seckill,
						host_goods,
						shop_logo,
						new_goods,
						activity_area
					} = data;
					let remainTime = Math.abs(seckill.end_time - Date.parse(new Date()) / 1000) * 1000;
					this.logo = shop_logo
					this.news = news
					this.seckill = seckill
					this.hotGoods = host_goods
					this.coupon = coupon
					this.newGoods = new_goods
					this.remainTime = remainTime
					this.activityArea = activity_area
				}
			},
			async getMenuFun() {
				const {
					code,
					data
				} = await getMenu({
					type: 1
				});
				uni.stopPullDownRefresh()
				if (code == 1) {
					//   截取数组
					this.navList = arraySlice(data);
				}
			},
			async getBestListFun() {
				let { page, goodsList, status } = this
				const data = await loadingFun(getBestList,page, goodsList,status)
				if(!data) return
				this.page = data.page
				this.goodsList = data.dataList
				this.status = data.status
			},
			tapMenu(item) {
				if(!this.isLogin) return showLoginDialog()
				menuJump(item)
			}
		},
		computed: {
			...mapGetters(['isLogin']),
		}
	}
</script>

<style lang="scss">
	.index {
		.header {
			.navigation-bar {
				padding-top: var(--status-bar-height);
				box-sizing: border-box;

				.logo {
					width: auto;
					height: 50rpx;
				}
			}
		}

		.contain {
			.top-bg {
				background: url(../../static/images/bg_hometop.png) no-repeat;
				background-size: 100% 100%;
				height: 260rpx;
				box-sizing: border-box;
				position: relative;
			}

			.main {
				margin-top: -260rpx;
				position: relative;
				z-index: 9;

				.nav {
					.nav-item {
						width: 20%;
						margin-top: 30rpx;

						.nav-icon {
							width: 82rpx;
							height: 82rpx;
							margin-bottom: 15rpx;
						}
					}
				}

				.information {
					height: 76rpx;
					box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.06);
					padding: 0 20rpx;
					border-top: $-solid-border;
					box-sizing: border-box;
					.news {
						position: relative;
						.shade {
							position: absolute;
							width: 100%;
							height: 100%;
							z-index: 100;
						}
					}
					
					.icon-toutiao {
						width: 114rpx;
						height: 34rpx;

					}

					.gap-line {
						height: 28rpx;
						width: 1px;
						background-color: #DCDDDC;
						margin: 0 30rpx;
					}
				}

				.goods {
					.goods-title {
						height: 100rpx;

						.line {
							width: 58rpx;
							height: 1px;
							background-color: #ccc;
							margin: 0 22rpx;
						}

						.icon {
							width: 38rpx;
							height: 38rpx;
						}
					}
				}
			}
		}
	}
</style>
