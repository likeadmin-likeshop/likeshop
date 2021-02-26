<template>
	<view>
		<u-popup class="share-popup" v-model="showPop" mode="bottom" border-radius="14" :closeable="true" @close="onClose">
			<view class="row-center md bold mt20 mb20">分享至</view>
			<view class="row-around share-tab">
				<view oclass="column-center" @tap="getPosterFun">
					<image class="share-icon" src="/static/images/icon_generate_poster.png"></image>
					<view class="mt10">生成海报</view>
				</view>
				<!-- #ifdef MP-WEIXIN -->
				<button open-type="share" class="column-center" hover-class="none">
					<image class="share-icon" src="/static/images/icon_wechat.png"></image>
					<view class="mt10">微信好友</view>
				</button>
				<!-- #endif -->
				<!-- #ifdef H5 -->
				<view oclass="column-center" @tap="showTips = true">
					<image class="share-icon" src="/static/images/icon_wechat.png"></image>
					<view class="mt10">微信好友</view>
				</view>
				<!-- #endif -->
			</view>
			<view class="row-center bg-body cancel xl" @tap="onClose">取消</view>
		</u-popup>
		<u-popup class="share-poster" v-model="showPoster" mode="center" :closeable="true" :custom-style="{background: 'rgba(0, 0, 0, 0)'}" :safe-area-inset-bottom="true">
			<image class="share-img mb20" :src="sharePoster"></image>
			<button class="row-center" type="primary" style="height: 84rpx" @tap="savePoster">
				<!-- #ifndef H5 -->
				保存图片到相册
				<!-- #endif -->
				<!-- #ifdef H5 -->
				长按保存图片到相册
				<!-- #endif -->
			</button>
		</u-popup>
		<!-- #ifdef H5 -->
		<u-popup class="share-tips" v-model="showTips" mode="top"  :custom-style="{background: 'rgba(0, 0, 0, 0)'}">
			<view style="overflow: hidden;">
				<image src="/static/images/share_arrow.png" class="share-arrow"/>
				<view class="white" style="text-align: center;margin-top: 280rpx;">
					<view class="bold lg">立即分享给好友吧</view>
					<view class="sm mt10">点击屏幕右上角将本页面分享给好友</view>
				</view>
			</view>
		</u-popup>
		<!-- #endif -->
	</view>
</template>

<script>
	import {
		getPoster
	} from "@/api/store"
	import {showLoginDialog} from '@/utils/wxutil'
	export default {
		props: {
			show: {
				type: Boolean
			},
			goodsId: String
		},
		data() {
			return {
				showPop: false,
				sharePoster: "",
				showPoster: false,
				showTips: false
			};
		},
		watch: {
			show(val) {
				console.log(val)
				this.showPop = val
			}
		},
		methods: {
			onClose() {
				this.$emit('close')
			},
			getPosterFun() {
				if (!this.isLogin) return showLoginDialog()
				uni.showLoading({
					title: '正在生成中...'
				});
				getPoster({
					id: this.goodsId,
					url: 'pages/goods_details/goods_details'
				}).then(res => {
					if (res.code == 1) {

						uni.hideLoading();
						this.sharePoster = res.data.replace(/[\r\n]/g, "");
						this.showPoster = true
					} else {
						uni.hideLoading({
							success: () => {
								this.$toast({
									title: res.msg
								});
							}
						});
					}
				});
			},
			async savePoster() {
				const {
					sharePoster
				} = this;
				//#ifdef MP-WEIXIN
				await this.getWriteAuth();
				let file = uni.getFileSystemManager();
				console.log(file, wx.env.USER_DATA_PATH)
				file.writeFile({
					filePath: wx.env.USER_DATA_PATH + "/share.png",
					data: sharePoster.slice(22),
					encoding: 'base64',
					success: () => {
						uni.saveImageToPhotosAlbum({
							filePath: wx.env.USER_DATA_PATH + "/share.png",
							success: res => {
								this.showPoster = false
								this.$toast({
									title: '保存成功',
									icon: 'success'
								});
							},

							fail: (res) => {
								this.$toast({
									title: '保存失败'
								});
							}

						});
					}
				});
				//#endif

			},

			getWriteAuth() {
				return new Promise(resolve => {
					uni.getSetting({
						success(res) {
							if (!res.authSetting['scope.writePhotosAlbum']) {
								uni.authorize({
									scope: 'scope.writePhotosAlbum',

									success() {
										resolve(true);
									},

									fail: () => {
										uni.showModal({
											title: '您已拒绝授权保存到相册',
											content: '是否进入权限管理，调整授权？',

											success: (res) => {
												if (res.confirm) {
													uni.openSetting({
														success: function(res) {}
													});
												} else if (res.cancel) {
													return this.$toast({
														title: '已取消！'
													});
												}
											}

										});
									}
								});
							} else {
								resolve(true);
							}
						}

					});
				});
			},
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

	.share-poster .share-img {
		width: 639rpx;
		height: 940rpx;
		border-radius: 12rpx;
	}
	
	.share-tips .share-arrow {
		 width: 140rpx;
		 height: 250rpx;
		 float: right;
		 margin: 15rpx 31rpx 0 0;
	}
</style>
