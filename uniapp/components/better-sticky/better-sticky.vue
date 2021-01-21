<template>
	<view class="tui-sticky-class">
		<!--sticky 容器-->
		<view class="tui-sticky-header" :class="[isFixed === true ? 'tui-sticky-fixed' : '']" :style="{transform:transform,webkitTransform:transform}">
			<slot name="header"></slot>
		</view>
		<view :style="{height:holderHeight + 'px'}" v-if="isFixed"></view>
		<!--sticky 容器-->
		<!--内容-->
		<slot name="content"></slot>
	</view>
</template>

<script>
	export default {
		name: "tuiSticky",
		props: {
			scrollTop: {
				type: Number
			}
		},
		watch: {
			scrollTop(newValue, oldValue) {
				this.updateStickyChange();
			}
		},
		// #ifdef H5
		mounted() {
			this.init();
		},
		// #endif
		onReady() {
			this.init();
		},
		data() {
			return {
				timer: null,
				top: 0,
				height: 0,
				holderHeight: 0,
				translateY: 0,
				isFixed: false
			};
		},
		computed:{
			transform(){
				return `translate3d(0,${this.translateY}px,0)`
			}
		},
		methods: {
			init(){
				this.updateScrollChange();
				uni.createSelectorQuery().in(this).select('.tui-sticky-header').boundingClientRect((res) => {
					if (res) {
						this.holderHeight = res.height
					}
				}).exec()
			},
			updateStickyChange() {
				const top = this.top;
				const height = this.height;
				const scrollTop = this.scrollTop

				const delY = scrollTop - (top + height)
				this.isFixed = (scrollTop >= top && delY <= 0) ? true : false

				this.translateY = 0
				if (delY < 0 && -delY < this.holderHeight) {
					this.translateY = -this.holderHeight - delY
				}
			},
			updateScrollChange() {
				if (this.timer) {
					clearTimeout(this.timer)
					this.timer = null
				}
				this.timer = setTimeout(() => {
					const className = '.tui-sticky-class';
					const query = uni.createSelectorQuery().in(this);
					query.select(className).boundingClientRect((res) => {
						if (res) {
							this.top = res.top;
							this.height = res.height
						}
					}).exec()
				}, 0)
			}
		}
	}
</script>

<style>
	.tui-sticky-fixed {
		width: 100%;
		position: fixed;
		top: 0;
		/* #ifdef H5 */
		top: 44px;
		/* #endif */
		z-index: 1;
	}
</style>
