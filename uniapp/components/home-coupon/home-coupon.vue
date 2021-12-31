// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

<template>
	<view class="every-day-coupon bg-white mb20" v-if="list.length">
		<view class="coupon-header row-between" @tap="goPage">
			<view class="normal lg title">每日领券</view>
			<view class="row">
				<view class="muted sm mr5">进入领券中心</view>
				<image src="/static/images/arrow_right.png" class="icon-sm"></image>
			</view>
		</view>
		<view class="coupon-scroll">
			<scroll-view style="heigth: 138rpx" scroll-x="true" scroll-with-animation="true" @scroll="scrollBarChange">
				<view class="coupon-contain row">
					<view v-for="(item, index) in list" :key="index" :class="'coupon-item mr20 row-between ' + (item.is_get ? 'recieve' : '')"
					 @tap="onRecive(item.id)">
						<view class="coupon-left">
							<view class="row info">
								<price-format :subscript-size="30" :first-size="56" :second-size="50" :price="item.money"></price-format>
								<view class="sm ml10" style="align-self: flex-end;line-height: 50rpx;margin-bottom: 3rpx">
									优惠券
								</view>
							</view>
							<view class="desc xs">{{item.use_condition}}</view>
						</view>
						<view class="coupon-right xxs primary column-center">立即领取</view>
						<image v-if="item.is_get" class="coupon-img" src="/static/images/home_img_ receive.png"></image>
					</view>
				</view>
			</scroll-view>
		</view>
		<view class="row-center mt20" v-if="list.length > 2">
			<cu-progress progressBarColor="#FF2C3C" :left="progressPer"></cu-progress>
		</view>
	</view>
</template>

<script>
	import {
		toLogin
	} from '@/utils/login';
	import {
		getCoupon
	} from '@/api/user';
	import {
		getRect
	} from '@/utils/tools'
	export default {
		data() {
			return {
				progressPer: 0
			};
		},

		components: {},
		props: {
			list: {
				type: Array,
				default: () => []
			}
		},
		watch: {
			list: {
				handler() {
					this.$nextTick(function(){
						getRect(".coupon-scroll", false, this).then(res => {
							this.rectWidth = res.width;
						});
					})
				},
				immediate: true,
				deep: true
			}
		},

		methods: {
			scrollBarChange(e) {
				let {
					progressPer
				} = this;
				let {
					scrollLeft,
					scrollWidth
				} = e.detail;
				progressPer = scrollLeft / (scrollWidth - this.rectWidth) * 100;
				this.progressPer = Number(progressPer.toFixed(0));
			},

			onRecive(id) {
				if (!this.isLogin) {
					toLogin();
					return;
				}

				getCoupon(id).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						})
						this.$emit('reflash');
					}
				});
			},

			goPage() {
				if (!this.isLogin) {
					toLogin();
					return;
				}

				uni.navigateTo({
					url: '/pages/user_getcoupon/user_getcoupon'
				});
			}

		}
	};
</script>
<style lang="scss">
	.every-day-coupon {
		background-image: url(../../static/images/home_bg_coupon.png);
		background-size: 100% 100%;
		background-repeat: no-repeat;
		height: 264rpx;
		width: 710rpx;
		margin: 0 20rpx;
		padding: 0 20rpx;
		border-radius: 14rpx;
		box-sizing: border-box;

		.coupon-header {
			height: 90rpx;

			.title {
				margin-left: 20rpx;
				font-weight: bold;
			}
		}

		.coupon-contain {
			.coupon-item {
				height: 134rpx;
				width: 326rpx;
				flex: none;
				position: relative;
				background: url(../../static/images/home_bg_coupon_red.png);
				background-size: 100% 100%;

				&.recieve {
					background-image: url(../../static/images/home_bg_coupon_gray.png);

					.coupon-right {
						background-color: #E5E5E5;
						color: $-color-muted;
					}
				}

				.coupon-left {
					width: 269rpx;
					padding-left: 20rpx;
					color: white;

					.info {
						height: 70rpx;
						border-bottom: 3rpx dashed #fff;

						.money-logo {
							font-weight: bold;
							align-self: flex-end;
							line-height: 50rpx;
							margin-right: 6rpx;
							margin-bottom: 4rpx
						}
					}

					.desc {
						margin-top: 10rpx;
					}

				}

				.coupon-right {
					width: 57rpx;
					height: 100%;
					background-color: #FFE5E6;
					border-radius: 0rpx 14rpx 14rpx 0rpx;
					writing-mode: tb;

				}

				.coupon-img {
					height: 77rpx;
					width: 99rpx;
					position: absolute;
					top: 0;
					right: 73rpx;
				}
			}

		}
	}
</style>
