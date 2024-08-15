<template>
	<view>
		<l-painter
			css="width: 640rpx; padding-bottom: 35rpx; background-color: #ffffff; box-shadow: 0 20rpx 58rpx rgba(0,0,0,.15);border-radius: 10rpx;"
			isCanvasToTempFilePath @success="handleSuccess" @fail="handleFail" custom-style="position: fixed; left: 200%">
			<l-painter-view css="padding-left: 40rpx;">
				<l-painter-image :src="config.avatar"
					css="margin-top: 15rpx; width: 72rpx;  height: 72rpx; border-radius: 50%;" />
				<l-painter-view css="margin-top: 30rpx; padding-left: 20rpx; display: inline-block">
					<l-painter-text :text="`来自${config.nickname}的分享`"
						css="display: block; padding-bottom: 10rpx; color: #333333; font-size: 28rpx;line-clamp:1;width: 100%;" />
				</l-painter-view>
				<l-painter-image :src="config.image"
					css="object-fit: cover; object-position: center; width: 560rpx; height: 560rpx;margin-top: 15rpx;" />
		
				<l-painter-view css="margin-top: 30rpx;">
					<!-- 商品分享海报文字内容 -->
					<l-painter-view :css="`display: ${type == 1 ? 'inline-block' : 'none'}; width: 400rpx;`">
						<l-painter-view
							:css="`vertical-align: bottom; color: #FF2C3C; font-size: 30rpx; line-height: 1em;`">
							<l-painter-text text="￥" css="vertical-align: bottom;font-size: 28rpx;" />
							<l-painter-text :text="price.prev" css="vertical-align: bottom; font-size: 38rpx;" />
							<l-painter-text :text="price.next" css="vertical-align: bottom; font-size: 30rpx;" />
							<l-painter-text :text="marketPrice"
								css="vertical-align: bottom; padding-left: 10rpx;font-size: 28rpx; font-weight: normal; text-decoration: line-through; color: #999999" />
						</l-painter-view>
						<l-painter-view css="margin-top:30rpx;">
							<l-painter-text
								css="line-clamp: 2; color: #333333; line-height: 1.5em;font-size: 30rpx; width: 378rpx; padding-right:22rpx; box-sizing: border-box"
								:text="config.name"></l-painter-text>
						</l-painter-view>
					</l-painter-view>
					
					<!-- 砍价分享海报文字内容 -->
					<l-painter-view :css="`display: ${type == 2 ? 'inline-block' : 'none'}; width: 400rpx;`">
						<l-painter-view>
							<l-painter-text
								:css="`line-clamp: 2; color: #FF2C3C; line-height: 1.5em;font-size: 32rpx; width: 375rpx; padding-right:22rpx; box-sizing: border-box`"
								:text="bShareTitle"></l-painter-text>
						</l-painter-view>
						<l-painter-view css="margin-top:8rpx;">
							<l-painter-text
								css="line-clamp: 2; color: #F95F2F; line-height: 1.5em;font-size: 24rpx; width: 378rpx; padding-right:22rpx; box-sizing: border-box"
								:text="bShareIntro"></l-painter-text>
						</l-painter-view>
						<l-painter-view css="margin-top:8rpx;">
							<l-painter-text
								css="line-clamp: 2; color: #333333; line-height: 1.5em;font-size: 28rpx; width: 378rpx; padding-right:22rpx; box-sizing: border-box"
								:text="config.name"></l-painter-text>
						</l-painter-view>
					</l-painter-view>
					
					<l-painter-view css="display: inline-block;">
						<!-- #ifdef H5 || APP-PLUS -->
						<l-painter-qrcode css="width: 168rpx; height: 168rpx;" :text="link">
						</l-painter-qrcode>
						<!--  #endif -->
						<!-- #ifdef MP -->
						<l-painter-image :src="qrcode" css="width: 168rpx; height: 168rpx;" />
						<!--  #endif -->
						<l-painter-text text="长按识别二维码"
							css="display: block; padding-top: 10rpx; color: #999999;font-size: 24rpx;" />
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
			config: {    // 相关配置
				type: Object,
				default: () => ({})
			},
			shareId: {  // 分享id
				type: [Number, String],
				default: ''
			},
			qrcode: {   // 二维码数据
				type: [String],
				default: ''
			},
			// pagePath:{  
			// 	type: String,
			// 	default: ''
			// },
			link: {
				type: String,
				default: ''
			},
			type: {      // 生成海报需使用 0-会员分享海报 1-商品详情 2-砍价活动
				type: [String, Number],
				default: 1,
			},
			
			bShareTitle: {  // 分享海报标题
				type: String,
				default: '我正在参与砍价 还差一步',
			},
			bShareIntro: { // 分享海报简介
				type: String,
				default: '帮忙砍一刀',
			}
		},
		data() {
			return {
				
			};
		},
		computed: {
			price() {
				let {
					price
				} = this.config
				if (price == undefined) return {}
				price = String(parseFloat(price)).split('.')
				return {
					prev: price[0],
					next: price[1] ? `.${price[1]}` : ''
				}
			},
			marketPrice() {
				return `￥${parseFloat(this.config.marketPrice)}`
			}
		},
		methods: {
			handleSuccess(val) {
				this.$emit('success', val)
			},
			handleFail() {
				this.$emit('fail')
			}
		}
	}
</script>

<style>

</style>
