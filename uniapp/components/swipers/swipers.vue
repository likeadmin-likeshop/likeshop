<template>
	<view class="swiper-wrap" :style="{height, padding}" v-if="lists.length">
		<view class="swiper-con" :style="{borderRadius: radius}">
			<template v-if="isSwiper">
				<swiper class="swiper" :autoplay="autoplay" :circular="circular" @change="swiperChange"
					:previous-margin="previousMargin" display-multiple-items="1">
					<swiper-item v-for="(item, index) in lists" :key="index">
						<view :data-item="item" style="width:100%;height:100%;" @click="goPage(item)">
							<u-image mode="aspectFill" :width="'calc(100% - ' + previousMargin + ')'" height="100%"
								:border-radius="radius" :src="item.image"></u-image>
						</view>
					</swiper-item>
				</swiper>
				<view class="dots" v-if="lists.length > 1">
					<view v-for="(item, index) in lists" :key="index"
						:class="'dot ' + (index == currentSwiper ? 'active' : '')"></view>
				</view>
			</template>
			<template v-lese v-for="(item, index) in lists" >
				<view :key="index" :data-item="item" style="width:100%;height:100%;" @click="goPage(item)" v-if="index < 1">
					<u-image mode="aspectFill" :width="'calc(100% - ' + previousMargin + ')'" height="100%"
						:border-radius="radius" :src="item.image"></u-image>
				</view>
			</template>
		</view>
	</view>
</template>

<script>
	import {
		getAdList
	} from '@/api/store';
	import {
		paramsToStr
	} from '@/utils/tools'

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
			},
			previousMargin: {
				type: String,
				default: "0rpx"
			},
			isSwiper: {
				type: Boolean,
				default: true
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
					pid: this.pid,
					client: 1
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
					case 1:
						""
					case 2:
						if (is_tab) {
							uni.switchTab({
								url: link
							});
						} else {
							uni.navigateTo({
								url: link + paramsToStr(params)
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
	.swiper-wrap {
		overflow: hidden;
		box-sizing: content-box;

		.swiper-con {
			position: relative;
			height: 100%;
			overflow: hidden;
			transform: translateY(0);
		}

		.swiper {
			width: 100%;
			height: 100%;
			position: relative;

			.slide-image {
				height: 100%;
			}
		}

		.dots {
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			bottom: 20rpx;
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
