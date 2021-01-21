<template>
	<view class="sort">
		<view class="header">
			<uni-search-bar :radius="60" @confirm="search" @input="input" bg-color="#F4F4F4" cancel-button="none"></uni-search-bar>
		</view>
		<view class="content row">
			<view class="aside">
				<scroll-view style="height: 100%" scroll-y="true" :scroll-top="leftScrollTop" scroll-with-animation="true">
					<block v-for="(item, index) in sortList" :key="index">
						<view :class="'one-item sm ' + (index == leftIndex ? 'active' : '')" @click="changeActive(index)">
							<text class="name">{{ item.name }}</text>
							<view v-if="index == leftIndex" class="active-line bg-primary"></view>
						</view>
					</block>
				</scroll-view>
			</view>
			<view class="main bg-body">
				<scroll-view style="height: 100%" scroll-y="true" :scroll-into-view="'scroll-item-' + rightIndex" @scroll="onScroll"
				 @touchstart="onTouchStart" scroll-with-animation="true">
					<view class="main-wrap">
						<view class="mb20" style="border-radius: 10rpx;">
							<swipers :pid="5" height="160rpx" padding="20rpx 0 0" radius="5rpx"></swipers>
						</view>
						<view v-for="(item, index) in sortList" :key="index" class="one-item-wrap" :id="'scroll-item-' + index">
							<view v-for="(sitem, sindex) in item.sons" :key="sindex" class="two-item bg-white mb20">
								<view class="title row-center">
									<text class="line mr20"></text>
									<text class="name bold sm">{{sitem.name}}</text>
									<text class="line ml20"></text>
								</view>
								<view class="three-list row wrap">
									<navigator v-for="(titem, tindex) in sitem.sons" :key="tindex" class="three-item column-center mb20" hover-class="none" :url="`/pages/goods_search/goods_search?id=${titem.id}&name=${titem.name}&type=${titem.type}`">
										<custom-image mode="aspectFit" width="140rpx" height="140rpx" lazy-load :src="titem.image"></custom-image>
										<view class="text mt20 xs">{{ titem.name }}</view>
									</navigator>
								</view>
							</view>
						</view>
					</view>
					<view style="height: 50rpx"></view>
				</scroll-view>
			</view>
		</view>
	</view>
</template>

<script>
	import {
		getCatrgory
	} from '@/api/store';
	import {
		getRect
	} from '@/utils/wxutil';
	export default {
		data() {
			return {
				leftScrollTop: 0,
				sortList: [],
				isTouchScrollView: false,
				rightIndex: 0,
				leftIndex: 0,
				nodeRightList: [],
				nodeLeftList: [],
				asideH: 0,
				headerH: 0
			};
		},

		components: {},
		onLoad: function(options) {
			this.getCatrgoryFun();
		},
		onShow: function() {},
		methods: {
			onTouchStart() {
				this.isTouchScrollView = true
			},
			init() {
				getRect('.one-item-wrap', true).then(data => {
					this.nodeRightList = data
				})
				getRect('.one-item', true).then(data => {
					this.nodeLeftList = data
				})
				getRect('.aside').then(data => {
					this.asideH = data.height
				})
				getRect('.header').then(data => {
					this.headerH = data.height
				})
			},

			changeActive(index) {
				if (!this.isTouchScrollView && this.rightIndex == index) return;
				// 锁定联动
				this.isTouchScrollView = false;
				// 解决rightIndex相同触发更新失败
				if (this.rightIndex == index) {
					this.rightIndex = -1;
				}
				this.$nextTick(function() {
					this.rightIndex = index;
					this.leftIndex = index
				})
			},

			onScroll(e) {
				if (!this.isTouchScrollView) return;
				let scrollTop = this.scrollTop = e.detail.scrollTop;
				let fliterList = this.nodeRightList.map((item, index) => ({
						index,
						...item
					}))
					.filter(item => item.top <= scrollTop + this.headerH)
				
				if (fliterList.length) {
					let index = fliterList.sort((a, b) => b.top - a.top)[0].index
					if(this.leftIndex == index) return
					this.leftScrollTop = parseInt(this.nodeLeftList[index].top / this.asideH) *  this.asideH;
					this.leftIndex = index
				}
			},

			getCatrgoryFun() {
				getCatrgory().then(res => {
					if (res.code == 1) {
						this.sortList = res.data
						this.$nextTick(() => {
							this.init();
						});
					}
				});
			}

		}
	};
</script>
<style lang="scss">
	$header-height: 94rpx;
	page {
		background-color: #fff;

		.sort {
			.header {
				box-sizing: border-box;
				height: $header-height;
				border-bottom: $-solid-border;
			}

			.content {
				height: calc(100vh - #{$header-height} - var(--window-top) - var(--window-bottom));

				.aside {
					width: 200rpx;
					flex: none;
					height: 100%;

					.one-item {
						position: relative;
						text-align: center;
						padding: 26rpx 10rpx;

						&.active {
							color: var(--primary-color);
							font-size: 26rpx;
							font-weight: bold;
						}

						.active-line {
							position: absolute;
							width: 6rpx;
							height: 30rpx;
							left: 4rpx;
							top: 50%;
							transform: translateY(-50%);
						}
					}
				}

				.main {
					height: 100%;
					flex: 1;

					.main-wrap {
						padding: 0 24rpx;

						.two-item {
							border-radius: 10rpx;

							.title {
								height: 90rpx;

								.line {
									width: 40rpx;
									height: 1px;
									background-color: #BBBBBB;
								}
							}

							.three-list {
								align-items: flex-start;

								.three-item {
									width: 33%;

									.text {
										text-align: center;
									}
								}
							}

						}
					}
				}
			}
		}
	}


	.sort .header .search {
		flex: 1;
		height: 60rpx;
	}

	.sort .header .search input {
		flex: 1;
		height: 100%;
	}
</style>
