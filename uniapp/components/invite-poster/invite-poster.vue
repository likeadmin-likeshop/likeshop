<template>
	<view>
		<l-painter :css="`width: 600rpx;height: 960rpx;`" isCanvasToTempFilePath
			@success="handleSuccess" custom-style="position: fixed; left: 200%">
			<l-painter-image :src="config.poster"
				css="position:absolute; width: 600rpx;height: 960rpx;object-fit: cover; border-radius: 20rpx;" />
			<l-painter-view
				css="position:absolute;background-color: #ffffff;width:100%;height: 240rpx;border-radius: 14rpx; bottom: 0;left: 0;padding-top: 30rpx;">

				<l-painter-view css="width: 330rpx; display: inline-block;padding-left: 30rpx;">
					<l-painter-view>
						<l-painter-image :src="config.avatar"
							css="width: 80rpx;  height: 80rpx; border-radius: 50%;" />
						<l-painter-text :text="config.nickname"
							css="margin-top: 10rpx; margin-left: 20rpx; color: #333333; font-size: 34rpx;line-clamp:1;font-weight: bold;width:220rpx;" />
					</l-painter-view>
					<l-painter-view css="margin-top: 30rpx;line-height: 34rpx;">
						<l-painter-text text="邀请你一起来赚大钱" css="color: #333333; font-size: 28rpx;" />
					</l-painter-view>
					<l-painter-view css="margin-top: 20rpx;">
						<l-painter-text :text="`邀请码：${config.code}`" css="color: #FF2C3C; font-size: 28rpx;" />
					</l-painter-view>
				</l-painter-view>
				<l-painter-view css="display: inline-block;margin-top:10rpx;">
					<l-painter-view css="padding-left: 30rpx;">
						<!-- #ifdef H5 || APP-PLUS -->
						<l-painter-qrcode css="width: 180rpx; height: 180rpx;" :text="config.link">
						</l-painter-qrcode>
						<!--  #endif -->
						<!-- #ifdef MP -->
						<l-painter-image :src="config.qrCode" css="width: 180rpx; height: 180rpx;" />
						<!--  #endif -->
					</l-painter-view>
				</l-painter-view>
			</l-painter-view>
		</l-painter>
	</view>
</template>

<script>
	import lPainter from '@/components/lime-painter/components/l-painter/l-painter.vue'
	import lPainterImage from '@/components/lime-painter/components/l-painter-image/l-painter-image.vue'
	import lPainterText from '@/components/lime-painter/components/l-painter-text/l-painter-text.vue'
	import lPainterView from '@/components/lime-painter/components/l-painter-view/l-painter-view.vue'
	import lPainterQrcode from '@/components/lime-painter/components/l-painter-qrcode/l-painter-qrcode.vue'
	export default {
		name: "share-poster",
		components: {
			lPainter,
			lPainterImage,
			lPainterText,
			lPainterView,
			lPainterQrcode
		},
		props: {
			config: {
				type: Object,
				default: () => ({})
			},
			goodsId: {
				type: [Number, String],
				default: ''
			},
			qrcode: {
				type: [String],
				default: ''
			}
		},
		data() {
			return {
				
			};
		},
		methods: {
			handleSuccess(val) {
				this.$emit('success', val)
			}
		}
	}
</script>

<style>

</style>
