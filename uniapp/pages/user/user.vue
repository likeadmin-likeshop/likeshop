<template>
	<view class="user">
		<view class="header">
			<view class="header-line" :style="{height: '1px','background-color': navBg}"></view>
			<uni-nav-bar title="个人中心" :shadow="false" :border="false" :status-bar="true" :fixed="true" :background-color="navBg"
			 :color="navC"></uni-nav-bar>
			<view class="user-info row-between">
				<view class="info row">
					<image class="avatar mr20" @tap="goLogin" :src="isLogin ? userInfo.avatar : require('static/images/my_portrait_empty.png')"></image>
					<view class="white" v-if="isLogin">
						<view class="name xxl">{{userInfo.nickname}}</view>
						<view class="user-id row-between">
							<view class="xs white ml20 mr20">会员ID: {{userInfo.sn || ''}}</view>
							<view class="xs normal copy-btn row-center ml5" @tap.stop="onCopy">复制</view>
						</view>
					</view>
					<view class="white" v-else @tap="goLogin">
						<view style="font-size: 42rpx">点击登录</view>
						<view class="sm">登录体验更多功能</view>
					</view>
				</view>
			</view>
		</view>
		<view class="my-assets bg-white">
			<view class="title row lg">我的资产</view>
			<view class="nav row">
				<view class="column-center mb20 assets-item" @tap="goPage('/pages/user_wallet/user_wallet')">
					<view class="xl primary">{{userInfo.user_money}}</view>
					<view class="sm">余额</view>
				</view>
				<view class="column-center mb20 assets-item" @tap="goPage('/pages/user_sign/user_sign')">
					<view class="xl primary">{{userInfo.user_integral}}</view>
					<view class="sm">积分</view>
				</view>
				<view class="column-center mb20 assets-item" @tap="goPage('/pages/user_coupon/user_coupon')">
					<view class="xl primary">{{userInfo.coupon}}</view>
					<view class="sm">优惠券</view>
				</view>
			</view>
		</view>
		<view class="order-nav bg-white">
			<view class="title row-between" @tap="goPage('/pages/user_order/user_order')">
				<view class="lg">我的订单</view>
				<view class="muted sm row">
					全部订单
					<image class="icon-sm ml10" src="/static/images/arrow_right.png"></image>
				</view>
			</view>
			<view class="nav row">
				<view class="item column-center mb20" @tap="goPage('/pages/user_order/user_order?type=pay')">
					<view class="icon-contain">
						<view v-if="userInfo.wait_pay" class="badge xs row-center bg-white">
							{{userInfo.wait_pay}}
						</view>
						<image class="nav-icon" src="/static/images/icon_my_payment.png"></image>
					</view>
					<view class="sm mt10">待付款</view>
				</view>
				<view class="item column-center mb20" @tap="goPage('/pages/user_order/user_order?type=delivery')">
					<view class="icon-contain">
						<view v-if="userInfo.wait_delivery" class="badge xs row-center bg-white">
							{{userInfo.wait_delivery}}
						</view>
						<image class="nav-icon mb10" src="/static/images/icon_my_fahuo.png"></image>
					</view>
					<view class="sm">待发货</view>
				</view>
				<view class="item column-center mb20" @tap="goPage('/pages/user_order/user_order?type=delivery')">
					<view class="icon-contain">
						<view v-if="userInfo.wait_take" class="badge xs row-center bg-white">
							{{userInfo.wait_take}}
						</view>
						<image class="nav-icon" src="/static/images/icon_my_shouhuo.png"></image>
					</view>
					<view class="sm mt10">待收货</view>
				</view>
				<view class="item column-center mb20" @tap="goPage('/pages/goods_comment_list/goods_comment_list')">
					<view class="icon-contain">
						<view v-if="userInfo.wait_comment" class="badge xs row-center bg-white">
							{{userInfo.wait_comment}}
						</view>
						<image class="nav-icon" src="/static/images/icon_my_pingjia.png"></image>
					</view>
					<view class="sm mt10">商品评价</view>
				</view>
				<view class="item column-center mb20" @tap="goPage('/pages/post_sale/post_sale')">
					<view class="icon-contain">
						<view v-if="userInfo.after_sale" class="badge xs row-center bg-white">
							{{userInfo.after_sale}}
						</view>
						<image class="nav-icon" src="/static/images/icon_my_shouhou.png"></image>
					</view>
					<view class="sm mt10">退款/售后</view>
				</view>
			</view>
		</view>
		<view class="server-nav bg-white">
			<view>
				<view class="title row-between">
					<view class="lg">我的功能</view>
				</view>
			</view>
			<view class="nav row wrap">
				<button v-for="(item, index) in menuList" :key="index" class="item column-center mb20" hover-class="none"
				 :open-type="item.link_type == 3 ?'contact' :''" @tap="tapMenu(item)" style="width: 25%;">
					<image class="nav-icon" :src="item.image"></image>
					<view class="sm mt10">{{item.name}}</view>
				</button>
			</view>
		</view>
        <recommend/>
	</view>
</template>

<script>
	import {
		mapGetters
	} from 'vuex'
	import {
		getUser
	} from '@/api/user';
	import {
		getMenu
	} from '@/api/store'
	import {
		showLoginDialog
	} from '@/utils/wxutil'
	import {menuJump} from '@/utils/tools'
	const app = getApp()
	export default {
		data() {
			return {
				showNav: false,
				navH: 0,
				navBg: 'transparent',
				navC: '#fff',
				userInfo: {},
				menuList: [],
				statusBarH: ""
			};
		},

		components: {},
		props: {},

		onLoad(options) {
			this.getMenuFun();
			this.$nextTick(() => {
				this.observeHeader();
			});
		},

		onShow() {
			this.getUserInfoFun();
		},


		onUnload() {
			this.observeLine.disconnect();
		},
		onPullDownRefresh: function() {
			this.getUserInfoFun();
			this.getMenuFun();
		},
		methods: {
			goLogin() {
				console.log(this)
				let {
					isLogin
				} = this;
				if (isLogin) {
					uni.navigateTo({
						url: '/pages/user_profile/user_profile'
					});
					return;
				}
				uni.navigateTo({
					url: '/pages/login/login'
				});
			},

			goPage(url) {
				if(!this.isLogin) return showLoginDialog()
				uni.navigateTo({
					url
				});
			},
			tapMenu(item) {
				if(!this.isLogin) return showLoginDialog()
				menuJump(item)
			},
			async getMenuFun() {
				const {
					data,
					code
				} = await getMenu({
					type: 2,
					client: 1
				})
				if (code == 1) {
					this.menuList = data
				}
			},
			async getUserInfoFun() {
				const {
					data,
					code
				} = await getUser()
				uni.stopPullDownRefresh();
				if (code == 1) {
					this.userInfo = data
				} else {
					this.userInfo = {
						user_money: 0,
						user_integral: 0,
						coupon: 0
					}
				}
			},
			observeHeader() {
				this.observeLine = uni.createIntersectionObserver(this);
				this.observeLine.relativeToViewport({
					top: 0
				}).observe('.header-line', res => {
					if (res.intersectionRatio == 0) {
						uni.setNavigationBarColor({
							frontColor: "#000000",
							backgroundColor: '#fff'
						});
						this.navBg = '#fff'
						this.navC = '#000'
					} else {
						uni.setNavigationBarColor({
							frontColor: "#ffffff",
							backgroundColor: '#000'
						});
						this.navBg = 'transparent'
						this.navC = '#fff'
					}
				});
			},

			onCopy(e) {
				uni.setClipboardData({
					data: this.userInfo.sn
				});
			},



		},
		computed: {
			...mapGetters(['isLogin']),
		}
	};
</script>
<style lang="scss">
	.user {
		background-image: url(../../static/images/my_topbg.png);
		background-size: 100% 400rpx;
		background-repeat: no-repeat;

		.header {
			display: flex;
			flex-direction: column;
			height: 300rpx;

			.user-info {
				padding: 10rpx 30rpx;

				.avatar {
					height: 110rpx;
					width: 110rpx;
					border-radius: 50%;
					overflow: hidden;
				}

				.name {
					text-align: left;
					margin-bottom: 5rpx;
				}

				.user-id {
					border: 1rpx solid white;
					border-radius: 100rpx;
					height: 40rpx;

					.copy-btn {
						background-color: #FFDFDA;
						height: 100%;
						width: 90rpx;
						border-radius: 100rpx;
					}
				}

				.user-opt {
					position: relative;

					.dot {
						position: absolute;
						background-color: #ee0a24;
						border: 2rpx solid #FFFFFF;
						color: $-color-primary;
						border-radius: 100%;
						top: 6rpx;
						right: 0rpx;
						font-size: 22rpx;
						min-width: 16rpx;
						height: 16rpx;
					}
				}

				.buyer-type {
					background-color: #FFA200;
					height: 38rpx;
					padding: 0 10rpx;
				}
			}

		}

		.order-nav {
			.icon-contain {
				position: relative;
			}
		}

		.order-nav,
		.my-assets {
			margin: 20rpx 20rpx 0;
			border-radius: 8rpx;
		}

		.server-nav {
			margin: 20rpx;
			border-radius: 8rpx;
		}

		.title {
			height: 88rpx;
			padding: 0 30rpx;
			border-bottom: $-dashed-border;
		}

		.nav {
			padding: 26rpx 0 0;

			.assets-item {
				flex: 1;
			}

			.item {
				width: 25%;
			}

			.badge {
				padding: 0 6rpx;
				min-width: 28rpx;
				height: 28rpx;
				border-radius: 28rpx;
				box-sizing: border-box;
				border: 1rpx solid $-color-primary;
				color: $-color-primary;
				position: absolute;
				left: 33rpx;
				top: -10rpx;
				z-index: 2;
			}

			.nav-icon {
				width: 52rpx;
				height: 52rpx;
			}
		}
	}
</style>
