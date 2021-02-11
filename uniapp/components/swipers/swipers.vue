<template>
	<view class="swiper" :style="{height, padding, 'border-radius': radius}" v-if="lists.length">
		<swiper :autoplay="autoplay" :circular="circular" @change="swiperChange">
			<swiper-item v-for="(item, index) in lists" :key="index">
				<view :data-item="item" style="width:100%;height:100%;" @click="goPage(item)">
					<image fit="cover" :src="item.image" :style="{'border-radius': radius}" class="slide-image"></image>
				</view>
			</swiper-item>
		</swiper>
		<view class="dots" v-if="lists.length > 1">
			<view v-for="(item, index) in lists" :key="index" :class="'dot ' + (index == currentSwiper ? 'active' : '')"></view>
		</view>
	</view>
</template>

<script>
	import {
		getAdList
	} from '@/api/store';
	import {paramsToStr} from '@/utils/tools'

	export default {
		data() {
			return {
				lists: [],
				currentSwiper: 0
			};
		},

		components: {},
		props: {
			pid: {
				type: Number
			},
			circular: {
				type: Boolean,
				default: true
			},
			autoplay: {
				type: Boolean,
				default: true
			},
			height: {
				type: String
			},
			radius: {
				type: String,
				default: '10rpx'
			},
			padding: {
				type: String,
				default: '0rpx'
			}
		},
		created() {
			this.getAdListFun();
		},
		watch: {
			'pid': function(value) {
				this.getAdListFun();
			}
		},
		methods: {
			async getAdListFun() {
				const {
					code,
					data
				} = await getAdList({
					client: 2,
					pid: this.pid
				})
				if (code == 1) {
					this.lists = data
				}
			},

			swiperChange(e) {
				this.currentSwiper = e.detail.current
			},
			goPage(item) {
				let {
					link,
					link_type,
					params,
					is_tab
				} = item;
				switch (link_type) {
					case 1: ""
					case 2:
						if (is_tab) {
							uni.switchTab({
								url: link
							});
						} else {
							uni.navigateTo({
								url: link + paramsToStr(args) 
							});
						}
						break;
					case 3:
						uni.navigateTo({
							url: '/pages/webview/webview?url=' + link
						});
						break;
				}
			}
		}
	};
</script>
<style lang="scss">
	.swiper {
		position: relative;
		overflow: hidden;

		swiper {
			width: 100%;
			height: 100%;
			position: relative;

			.slide-image {
				width: 100%;
				height: 100%;
			}
		}

		.dots {
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			bottom: 40rpx;
			display: flex;

			.dot {
				width: 8rpx;
				height: 8rpx;
				border-radius: 50%;
				margin-right: 10rpx;
				background-color: #fff;

				&.active {
					width: 16rpx;
					border-radius: 8rpx;
					background-color: $-color-primary;
				}
			}
		}
	}
</style>
