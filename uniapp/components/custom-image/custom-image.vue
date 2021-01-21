<template>
	<view :style="[viewStyle]" :class="{'custom-image': true, 'image-round': round}" @click="onClick">
		<image v-if="!error" :src="src" :mode="mode" :lazy-load="lazyLoad" class="image" :show-menu-by-longpress="showMenuByLongpress"
		 @load="onLoaded" @error="onError"></image>
		<view v-if="loading && showLoading" class="loading-wrap image">
			<slot v-if="useLoadingSlot" name="loading"></slot>
			<uni-icons color="#999" v-else type="image" size="22"></uni-icons>
		</view>
		<view v-if="error && showError" class="error-wrap image">
			<slot v-if="useErrorSlot" name="error"></slot>
			<uni-icons color="#999" v-else type="image" size="22"></uni-icons>
			<text class="sm">加载失败</text>
		</view>
	</view>
</template>

<script>
	export default {
		props: {
			src: {
				type: String,

			},
			round: Boolean,
			width: {
				type: null
			},
			height: {
				type: null
			},
			radius: null,
			lazyLoad: Boolean,
			useErrorSlot: Boolean,
			useLoadingSlot: Boolean,
			showMenuByLongpress: Boolean,
			mode: {
				type: String,
				default: 'fill'
			},
			showError: {
				type: Boolean,
				default: true
			},
			showLoading: {
				type: Boolean,
				default: true
			}
		},
		data() {
			return {
				error: false,
				loading: true,
				viewStyle: {}
			}
		},
		created() {
			this.setStyle();
		},
		methods: {

			setStyle() {
				const {
					width,
					height,
					radius
				} = this
				let style = {};

				if (width) {
					style.width = width
				}

				if (height) {
					style.height = height
				}

				if (radius) {
					style['overflow'] = 'hidden'
					style['border-radius'] = radius
				}
				this.viewStyle = style
			},
			onLoaded(event) {
				this.loading = false
				this.$emit('load', event.detail);
			},
			onError(event) {
				this.error = false
				this.loading = true
				this.$emit('error', event.detail);
			},
			onClick(event) {
				this.$emit('click', event.detail);
			}
		},
		watch: {
			src() {
				this.error = false
				this.loading = true
			},
			width() {
				this.setStyle()
			},
			height() {
				this.setStyle()
			}
		}
	}
</script>

<style lang="scss">
	.custom-image {
		position: relative;
		display: block;
		width: 100%;
		height: 100%;
		.image-round {
			overflow: hidden;
			border-radius: 50%;
		}
		.image {
			display: block;
			width: 100%;
			height: 100%;
		}
		
		.loading-wrap,
		.error-wrap {
			position: absolute;
			top: 0;
			left: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			color: #969799;
			font-size: 28rpx;
			background-color: #f7f8fa;
		}
	}
</style>
