<template>
	<view class="float-tab ~column">
		<navigator class="tab-img" :style="{top: 3*top + 'px'}" hover-class="none" open-type="switchTab"
			url="/pages/index/index">
			<image class="tab-icon" src="/static/images/icon_float_home.png" />
		</navigator>
		<navigator class="tab-img" :style="{top: 2*top + 'px'}" hover-class="none" open-type="navigate"
			url="/pages/bundle/contact_offical/contact_offical">
			<image class="tab-icon" src="/static/images/icon_float_help.png" />
		</navigator>
		<navigator class="tab-img" :style="{top: top + 'px'}" hover-class="none" open-type="switchTab"
			url="/pages/shop_cart/shop_cart">
			<image class="tab-icon" src="/static/images/icon_float_cart.png" />
		</navigator>
		<image style="z-index: 99" :style="{transform: `rotateZ(${showMore ? 135 : 0}deg)`}" class="tab-img" src="/static/images/icon_float_more.png" @click="onChange" />
	</view>
</template>

<script>
	import {
		getRect
	} from "@/utils/tools"
	export default {
		name: "float-tab",
		data() {
			return {
				showMore: false,
				top: 0
			};
		},
		mounted() {
			getRect(".tab-img", false, this).then(res => {

				this.height = res.height
				console.log(this.height)
			});
		},
		methods: {
			onChange() {
				this.showMore = !this.showMore
			},
		},
		watch: {
			showMore(val) {
				if (val) {
					this.top = -this.height
				} else {
					this.top = 0
				}
			}
		}
	}
</script>

<style lang="scss">
	.float-tab {
		position: fixed;
		right: 16rpx;
		bottom: 200rpx;
		width: 96rpx;
		height: 96rpx;
		z-index: 777;

		.tab-img {
			width: 100%;
			height: 100%;
			position: absolute;
			transition: all .5s;
			.tab-icon {
				width: 100%;
				height: 100%;
			}
		}
	}
</style>
