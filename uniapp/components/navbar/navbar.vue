<template>
	<view class="navbar" @tap.stop="showFloat = false">
		<u-navbar :background="background" :title="title" :title-color="titleColor" :border-bottom="borderBottom"
			:immersive="immersive" :title-bold="true" :is-back="false">
			<view class="navbar-left" slot="left">
				<u-icon :name="backIcon" :size="36" @click="goBack"></u-icon>
				<view class="line"></view>
				<view class="navbar-lists" @tap.stop="showFloat = !showFloat">
					<u-icon :name="require('@/static/images/icon_list.png')" :size="32"></u-icon>
					<view class="navbar-float" v-show="showFloat">
						<navigator v-for="(item, index) in navLists" :key="index" :url="item.url" :open-type="item.type"
							class="float-item" hover-class="none">
							<u-icon :name="item.icon" :size="44"></u-icon>
							<text class="ml20">{{ item.name }}</text>
						</navigator>
					</view>
				</view>
			</view>
		</u-navbar>
		<view class="mask" v-show="showFloat" @touchstart="showFloat = false">

		</view>
	</view>
</template>

<script>
	export default {
		props: {
			// 导航内容
			title: String,
			titleColor: {
				type: String,
				default: '#000000'
			},
			// 导航的背景颜色
			background: {
				type: Object,
				default: () => ({
					background: '#ffffff'
				})
			},
			// 是否显示底部边框
			borderBottom: {
				type: Boolean,
				default: false
			},
			immersive: {
				type: Boolean,
				default: false
			}
		},
		data() {
			return {
				isIndex: false,
				navLists: [{
					url: '/pages/index/index',
					name: '首页',
					icon: require('@/static/images/icon_home.png'),
					type: 'switchTab'
				}, {
					url: '/pages/goods_search/goods_search',
					name: '搜索',
					icon: require('@/static/images/icon_search.png'),
					type: 'navigate'
				}, {
					url: '/pages/shop_cart/shop_cart',
					name: '购物车',
					icon: require('@/static/images/icon_carts.png'),
					type: 'switchTab'
				}, {
					url: '/pages/user/user',
					name: '个人中心',
					icon: require('@/static/images/icon_user.png'),
					type: 'switchTab'
				}],
				showFloat: false
			};
		},
		methods: {
			goBack() {
				if (!this.isIndex) {
					uni.navigateBack()
					return
				}
				uni.switchTab({
					url: '/pages/index/index'
				})
			}
		},
		computed: {
			backIcon() {
				const iconName = this.isIndex ? 'icon_home' : 'icon_back'
				return require(`@/static/images/${iconName}.png`)
			}
		},
		created() {
			setTimeout(() => {
				let pages = getCurrentPages();
				if (pages.length == 1) {
					this.isIndex = true
				}
			})

		}
	}
</script>

<style lang="scss">
	.navbar {
		.navbar-left {
			display: flex;
			padding: 12rpx 25rpx;
			border-radius: 30px;
			background: rgba(255, 255, 255, 0.3);
			border: 1rpx solid rgba(0, 0, 0, 0.1);

			.line {
				width: 1px;
				height: 36rpx;
				background: rgba(0, 0, 0, 0.2);
				margin: 0 25rpx;
			}

			.navbar-lists {
				display: flex;
				justify-content: center;
				position: relative;
				
				.navbar-float {
					position: absolute;
					top: 40px;
					width: 258rpx;
					padding: 0 24rpx;
					background: #fff;
					border-radius: 14rpx;
					box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.06);

					&::before {
						content: '';
						display: block;
						position: absolute;
						left: 50%;
						width: 0;
						height: 0;
						border: 14rpx solid transparent;
						border-bottom-color: #fff;
						transform: translate(-50%, -100%);
					}

					.float-item {
						padding: 20rpx 0;
						display: flex;
						align-items: center;

						&:not(:last-of-type) {
							border-bottom: 1px solid #e5e5e5;
						}
					}
				}
			}
		}

		.mask {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1;
		}
	}
</style>
