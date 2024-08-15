<template>
	<view class="">
		<u-popup class="share-popup" v-model="showshare" mode="bottom" border-radius="14" :closeable="true"
			:safe-area-inset-bottom="true" :mask-close-able="false">
			<view class="row row-center md bold mt30 mb30">分享至</view>
			<view class="row row-around share-tab">
				<view class="column column-center" @tap="getPoster">
					<image mode="widthFix" class="share-icon" src="/static/images/icon_generate_poster.png"></image>
					<view class="" style="margin: 15rpx 0;">生成海报</view>
				</view>
				<!-- #ifdef MP-WEIXIN-->
				<button open-type="share" class="column column-center" hover-class="none">
					<image class="share-icon" src="/static/images/icon_wechat.png"></image>
					<view class="">微信好友</view>
				</button>
				<!-- #endif -->
				<!-- #ifdef H5 || APP-PLUS -->
				<view oclass="column column-center" @tap="shareWx">
					<image class="share-icon" src="/static/images/icon_wechat.png"></image>
					<view class="">微信好友</view>
				</view>
				<!-- #endif -->
			</view>
			<view class="row row-center bg-body cancel xl" @tap="showshare=false">取消</view>
		</u-popup>
		<u-popup class="share-poster" v-model="showPoster" mode="center" :closeable="true"
			:safe-area-inset-bottom="true">
			<!-- #ifndef H5 -->
			<image style="width: 640rpx;" mode="widthFix" :src="poster"></image>
			<!-- #endif -->
			<!-- #ifdef H5 -->
			<img style="width: 640rpx;" :src="poster" />
			<!-- #endif -->
			<button class="row row-center save-btn" size="lg" @tap="savePoster">
				<!-- #ifndef H5 -->
				保存图片到相册
				<!-- #endif -->
				<!-- #ifdef H5 -->
				长按保存图片到相册
				<!-- #endif -->
			</button>
		</u-popup>
		<!-- #ifdef H5 -->
		<u-popup :custom-style="{'background': 'none'}"  class="share-tips" v-model="showTips" mode="top">
			<view style="overflow: hidden;">
				<image src="/static/images/share_arrow.png" class="share-arrow" />
				<view class="white" style="text-align: center;margin-top: 280rpx;">
					<view class="bold lg">立即分享给好友吧</view>
					<view class="sm m-t-10">点击屏幕右上角将本页面分享给好友</view>
				</view>
			</view>
		</u-popup>
		<!-- #endif -->
		<poster v-if="enablePoster" :type="type" :share-id="shareId" :config="config"
			:qrcode="mnpQrcode" :link="getLink" @success="handleSuccess" @fail="handleFail" 
			:b-share-title="bargainShare.share_title" :b-share-intro="bargainShare.share_intro"/>
	</view>
</template>

<script>
	import {
		mapGetters,
	} from 'vuex'
	import {
		// apiMnpQrCode,
		getShareMnQrcode
	} from "@/api/app"
	import {
		baseURL,
		basePath
	} from '@/config/app'
	import poster from './poster.vue'
	// import {TtAppNameEnum} from '@/utils/enum'
	export default {
		components: {
			poster
		},
		props: {
			value: {
				type: Boolean     // 是否开启此弹窗
			},
			shareId: {
				type: [String, Number],  // 商品id或其他活动id
				default: ''
			},
			config: {                    // 各种配置
				type: Object,
				default: () => ({})
			},
			pagePath: {                  // 跳转路径
				type: String,
				default: ''
			},
			type: {                      // 生成海报需使用 0-会员分享海报 1-商品详情 2-砍价活动
				type: [String, Number],
				default: 1
			}
		},
		data() {
			return {
				poster: "",
				enablePoster: false,
				showPoster: false,
				showTips: false,
				mnpQrcode: '',
				bargainShare: { // 砍价分享title和intro
					share_title: '',
					share_intro: '',
				}, 
			};
		},
		computed: {
			getLink() {
				return `${baseURL}${basePath}/${this.pagePath}?id=${this.shareId}&invite_code=${this.$store.getters.inviteCode}`
			},
			showshare: {
				get() {
					return this.value
				},
				set(val) {
					this.$emit('input', val)
				}
			}
		},
		watch: {
			showPoster(val) {
				if (!val) {
					this.enablePoster = false
				}
			}
		},
		methods: {
			async getPoster() {
				if (!this.isLogin) {
					return uni.navigateTo({
						url: '/pages/login/login'
					});
				}
				uni.showLoading({
					title: '正在生成中'
				})
				// #ifdef MP-WEIXIN
				if (!this.mnpQrcode) {
					// #ifdef MP-WEIXIN 
					const res = await this.getMnpQrcode()
					// #endif
					this.mnpQrcode = res.data.qr_code.replaceAll("\r\n", "")
					
					if(this.type == 2) {
						this.bargainShare = res.data.extra
					}
				}
				this.enablePoster = true
				// #endif
				
				// #ifdef APP-PLUS || H5
				this.enablePoster = true
				// #endif
			},
			// 获取商品页面二维码数据
			getMnpQrcode() {
				return new Promise((resolve, reject) => {
					getShareMnQrcode({
						id: this.shareId,  // 商品id或其他活动id
						url: this.pagePath, // 跳转页面路径
						type: this.type,         // 0-会员分享海报 1-商品详情 2-砍价活动
					}).then((res) => {
						console.log('shareRes', res)
						resolve(res)
					}).catch(() => {
						reject()
					})
				})
				// return new Promise((resolve, reject) => {
				// 	resolve({qr_code: 'https://likeshop.yixiangonline.com/uploads/images/background/20201209/17ca8666f3122f0ea83801a7c333b58f.png'})
				// })
			},
			
			handleSuccess(val) {
				this.poster = val
				uni.hideLoading()
				this.showPoster = true
				this.showshare = false
			},
			handleFail() {
				uni.hideLoading({
					success: () => {
						this.$toast({
							title: '生成失败'
						})
					}
				})
			},
			shareWx() {
				// #ifdef H5
				this.showTips = true
				this.showshare = false
				// #endif
				// #ifdef APP-PLUS
				uni.share({
					provider: "weixin",
					scene: "WXSceneSession",
					type: 0,
					href: this.getLink,
					title: this.config.name,
					summary: '',
					imageUrl: this.config.image,
					success: (res) => {
						console.log('分享成功');
					},
					fail: (err) => {
						this.$toast({
							title: err.errMsg
						})
					}
				});
				// #endif
			},

			async savePoster() {
				uni.saveImageToPhotosAlbum({
					filePath: this.poster,
					success: res => {
						this.showPoster = false
						this.$toast({
							title: '保存成功',
							icon: 'success'
						});
					},
					fail: (err) => {
						this.$toast({
							title: '保存失败'
						});
						console.log(err)
					}
				})

			}
		}
	}
</script>

<style lang="scss">
	.share-popup {
		.share-tab {
			margin: 40rpx 0 140rpx;

			.share-icon {
				width: 100rpx;
				height: 100rpx;
			}
		}

		.cancel {
			height: 98rpx;
		}
	}

	.share-poster {
		.share-img {
			width: 640rpx;
			border-radius: 12rpx;
		}

		.save-btn {
			// @include background_color();
			background-color: $-color-primary;
			color: #fff;
			margin-top: 20rpx;
		}
	}

	.share-tips .share-arrow {
		width: 140rpx;
		height: 250rpx;
		float: right;
		margin: 15rpx 31rpx 0 0;
	}
</style>
