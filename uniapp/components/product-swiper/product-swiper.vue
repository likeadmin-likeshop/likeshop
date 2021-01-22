<template>
	<view class="swiper-wrap">
		<swiper class="swiper" :autoplay="autoplay" :circular="circular" :interval="interval" :duration="duration" @change="swiperChange">
			<block v-for="(item, index) in imgUrls" :key="index">
				<swiper-item :data-current="item.uri" @tap="previewImage(index)">
					<custom-image width="750rpx" height="750rpx" :src="item.uri"></custom-image>
				</swiper-item>
			</block>
		</swiper>
		<view class="dots black sm bg-white br60">{{currentSwiper + 1}}/{{imgUrls.length}}</view>
	</view>
</template>

<script>
	var app = getApp();

	export default {
		data() {
			return {
				currentSwiper: 0,
				urls: []
			};
		},

		components: {},
		props: {
			imgUrls: {
				type: Array,
				default: () => [],
			},
			circular: {
				type: Boolean,
				default: true,
			},
			autoplay: {
				type: Boolean,
				default: true,
			},
			interval: {
				type: Number,
				default: 3000,
			},
			duration: {
				type: Number,
				default: 500,
			}
		},
		watch: {
			imgUrls: {
				handler(val) {
					this.urls = val.map(item => {
						return item.uri;
					});
				},
				immediate: true,
			}
		},
		methods: {
			swiperChange(e) {
				this.currentSwiper = e.detail.current
			},

			previewImage(current) {
				uni.previewImage({
					current,
					// 当前显示图片的http链接
					urls: this.urls // 需要预览的图片http链接列表
				});
			}

		}
	};
</script>
<style>
	.swiper-wrap {
		width: 100%;
		height: 750rpx;
		position: relative;
	}

	.swiper-wrap .swiper {
		width: 100%;
		height: 100%;
		position: relative;
	}

	.swiper-wrap .swiper .slide-image {
		width: 100%;
		height: 100%;
	}

	.swiper-wrap .dots {
		position: absolute;
		right: 24rpx;
		bottom: 24rpx;
		display: flex;
		height: 34rpx;
		padding: 0 15rpx;
	}
</style>
