<template>
	<view :class="'loading ' + ( vertical ? 'loading--vertical' : '' )">
		<view :class="'loading__spinner loading__spinner--' + type" :style="{color, width: size + 'rpx', height: size + 'rpx'}">
			<view v-for="(item, index) in array12" :key="index" v-if="type === 'spinner'" class="loading__dot"></view>
		</view>
		<view class="loading__text" :style="{'font-size': textSize + 'rpx', color}">
			<slot></slot>
		</view>
	</view>
</template>
<script>
	export default {
		props: {
			color: String,
			vertical: Boolean,
			type: {
				type: String,
				default: 'spinner'
			},
			size: {
				type: Number,
				default: 40
			},
			textSize: String
		},
		data() {
			return {
				array12: Array.from({
					length: 12
				})
			}
		}
	}
</script>

<style>
	:host {
		font-size: 0;
		line-height: 1;
	}

	.loading {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		color: #c8c9cc;
	}

	.loading__spinner {
		position: relative;
		box-sizing: border-box;
		width: 45rpx;
		max-width: 100%;
		max-height: 100%;
		height: 45rpx;
		animation: rotate .8s linear infinite;
	}

	.loading__spinner--spinner {
		-webkit-animation-timing-function: steps(12);
		animation-timing-function: steps(12);
	}

	.loading__spinner--circular {
		border: 2rpx solid transparent;
		border-top-color: initial;
		border-radius: 100%;
	}

	.loading__text {
		margin-left: 16rpx;
		color: #969799;
		font-size: 28rpx;
		line-height: 40rpx;
	}

	.loading__text:empty {
		display: none;
	}

	.loading--vertical {
		-webkit-flex-direction: column;
		flex-direction: column;
	}

	.loading--vertical .loading__text {
		margin: 16rpx 0 0;
	}

	.loading__dot {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	.loading__dot:before {
		display: block;
		width: 4rpx;
		height: 25%;
		margin: 0 auto;
		background-color: currentColor;
		border-radius: 40%;
		content: " ";
	}

	.loading__dot:first-of-type {
		-webkit-transform: rotate(30deg);
		transform: rotate(30deg);
		opacity: 1;
	}

	.loading__dot:nth-of-type(2) {
		-webkit-transform: rotate(60deg);
		transform: rotate(60deg);
		opacity: .9375;
	}

	.loading__dot:nth-of-type(3) {
		-webkit-transform: rotate(90deg);
		transform: rotate(90deg);
		opacity: .875;
	}

	.loading__dot:nth-of-type(4) {
		-webkit-transform: rotate(120deg);
		transform: rotate(120deg);
		opacity: .8125;
	}

	.loading__dot:nth-of-type(5) {
		-webkit-transform: rotate(150deg);
		transform: rotate(150deg);
		opacity: .75;
	}

	.loading__dot:nth-of-type(6) {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		opacity: .6875;
	}

	.loading__dot:nth-of-type(7) {
		-webkit-transform: rotate(210deg);
		transform: rotate(210deg);
		opacity: .625;
	}

	.loading__dot:nth-of-type(8) {
		-webkit-transform: rotate(240deg);
		transform: rotate(240deg);
		opacity: .5625;
	}

	.loading__dot:nth-of-type(9) {
		-webkit-transform: rotate(270deg);
		transform: rotate(270deg);
		opacity: .5;
	}

	.loading__dot:nth-of-type(10) {
		-webkit-transform: rotate(300deg);
		transform: rotate(300deg);
		opacity: .4375;
	}

	.loading__dot:nth-of-type(11) {
		-webkit-transform: rotate(330deg);
		transform: rotate(330deg);
		opacity: .375;
	}

	.loading__dot:nth-of-type(12) {
		-webkit-transform: rotate(1turn);
		transform: rotate(1turn);
		opacity: .3125;
	}

	@-webkit-keyframes rotate {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
		}

		to {
			-webkit-transform: rotate(1turn);
			transform: rotate(1turn);
		}
	}

	@keyframes rotate {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
		}

		to {
			-webkit-transform: rotate(1turn);
			transform: rotate(1turn);
		}
	}
</style>
