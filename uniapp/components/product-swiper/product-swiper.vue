<template>
	<view class="swiper-wrap">
		<swiper class="swiper" ref="swiper"  :autoplay="autoplay" :circular="circular"
			:interval="interval" :duration="duration" @change="swiperChange">
			<block v-for="(item, index) in urls" :key="index">
				<swiper-item @tap="previewImage(index)">
					<view v-if="item.type == 'video'" class="video-wrap">
						<!-- #ifdef H5 || MP-WEIXIN -->
						<video id="myVideo" class="my-video" :enable-progress-gesture="false" :controls="showControls"
							:autoplay="true" :show-progress="true" :show-fullscreen-btn="showControls" :src="item.url"
							:show-center-play-btn="false" @error="videoErrorCallback" :show-play-btn="showControls"
							@play="showPlay = false" @ended="playEnd" @fullscreenchange="fullscreenchange">
						</video>
						<image v-show="showPlay" @tap.stop="play" src="/static/images/icon_play.png"
							class="icon-play"></image>
						<!-- #endif -->
						<!-- #ifdef APP-PLUS -->
						<j-video :url="item.url" height="750rpx" width="750rpx" :poster="urls[1].url"></j-video>
						<!-- #endif -->
					</view>
					<custom-image v-else width="750rpx" height="750rpx" :src="item.url"></custom-image>

				</swiper-item>
			</block>
		</swiper>
		<view class="dots black sm bg-white br60">{{currentSwiper + 1}}/{{urls.length}}</view>
	</view>
</template>

<script>
	var app = getApp();

	export default {
		data() {
			return {
				currentSwiper: 0,
				urls: [],
				showPlay: true,
				showControls: false,
				autoplay: true,

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
			interval: {
				type: Number,
				default: 3000,
			},
			duration: {
				type: Number,
				default: 500,
			},
			video: {
				type: String,
			}
		},
		watch: {
			imgUrls: {
				handler(val) {
					this.urls = val.map(item => {
						return {
							url: item.uri,
							type: "image"
						}
					});
					if(this.video) {
						this.urls.unshift({
							url: this.video,
							type: "video"
						})
						this.autoplay = false
						
						this.$nextTick(() => {
							this.videoContext = uni.createVideoContext('myVideo', this)
						})
					}
				},
				immediate: true,
			},
		},
		methods: {
			swiperChange(e) {
				this.currentSwiper = e.detail.current
			},
			videoErrorCallback(err) {
				console.log('err==>', err)
			},
			playEnd() {
				this.showPlay = true;
			},
			previewImage(current) {
				let index = current
				// #ifdef MP-WEIXIN
				wx.previewMedia({
					current,
					sources: this.urls,
				});
				//#endif
				// #ifdef H5 || APP-PLUS
				if (this.video) {
					index = current - 1
				}
				if (this.urls[current].type == "video") {
					this.videoContext.requestFullScreen()
				} else {
					uni.previewImage({
						index,
						urls: this.imgUrls.map((item) => item.uri)
					})
				}

				//#endif
			},
			play() {
				this.videoContext.play()
			},
			fullscreenchange(e) {
				const {
					fullScreen
				} = e.detail
				
				!fullScreen && this.videoContext.pause()
				this.showControls = fullScreen ? true : false
				this.showPlay = fullScreen ? false : true
				
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

	.swiper-wrap .video-wrap {
		width: 100%;
		height: 100%;
		position: relative;
		overflow: hidden;
	}

	.swiper-wrap .my-video {
		width: 100%;
		height: 100%;
	}

	.swiper-wrap .icon-play {
		width: 90rpx;
		height: 90rpx;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 999;
	}
</style>
