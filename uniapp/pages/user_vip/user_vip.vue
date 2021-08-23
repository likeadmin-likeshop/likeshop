<template>
	<view>
		<view class="user-vip">
			<view class="header">
				<view class="user-vip-info row">
					<custom-image width="110rpx" height="110rpx" round :src="userInfo.avatar"></custom-image>
					<view class="ml20 column">
						<view class="user-text white xxl row">{{userInfo.nickname}}</view>
						<view class="user-level white xs row-center">当前等级：{{userInfo.level_name || "无"}}</view>
					</view>
				</view>
			</view>
			<view class="content">
				<view class="vip-swiper-container">
					<swiper class="swiper" style="height: 320rpx" previous-margin="60rpx" next-margin="60rpx" display-multiple-items="1"
					 :current="currentIndex" @change="bindchange">
						<swiper-item v-for="(item, index) in levelList" :key="index">
							<view class="vip-card-item" :style="'background-image: url(' + item.background_image + ');'">
								<view class="row-between">
									<view>
										<view v-if="item.current_level_status == 1" class="row grade white sm">当前等级</view>
										<view v-else-if="item.current_level_status == -1" class="row white sm ml20">未解锁</view>
										<view v-else-if="item.current_level_status == 0" class="row white sm ml20">已解锁</view>
									</view>
									<image class="grade-icon" :src="item.image"></image>
								</view>
								<view class="row-between vip-name white">
									<view class="bold">{{item.name}}</view>
									<view class="sm">{{item.next_level}}</view>
								</view>
								<view class="row-center" v-if="item.diff_growth_percent">
									<view class="vip-progress bg-white row">
										<view class="vip-progress-bar" :style="'width: ' + (item.diff_growth_percent*100) + '%'"></view>
									</view>
								</view>
								<view class="row-between mt20" style="padding: 0 30rpx">
									<navigator hover-class="none" class="row">
										<view class="sm white" style="line-height: 36rpx">
											{{item.current_level_status == 0 ? '当前高于该等级' : item.current_growth_tips}}
										</view>
									</navigator>
									<view class="white">{{item.diff_growth_tips}}</view>
								</view>
							</view>
						</swiper-item>
					</swiper>
				</view>
				<view class="vip-grade-rule">
					<view class="title row">
						<view class="line br60"></view>
						<view class="xl ml20 bold">成长值规则</view>
					</view>
					<text class="rule-content column lighter ml20">
						{{growthRule}}
					</text>
				</view>
				<view class="vip-rights">
					<view class="title row">
						<view class="line br60"></view>
						<view class="xl ml20 bold">会员权益</view>
					</view>
					<view class="rights-list row">
						<view v-for="(item, index) in privilegeList" :key="index" class="rights-item column-center">
							<image class="mb10" :src="item.image"></image>
							<view class="sm">{{item.name}}</view>
						</view>
					</view>
				</view>
			</view>
		</view>
		<loading-view v-if="!userInfo.nickname"></loading-view>
	</view>
</template>

<script>
	import {
		getLevelList
	} from '@/api/user';

	export default {
		data() {
			return {
				userInfo: {},
				currentIndex: 0,
				levelList: [],
				growthRule: "",
				privilegeList: []
			};
		},

		components: {},
		props: {},

		onLoad: function(options) {
			this.getLevelListFun();
		},


		methods: {
			bindchange(e) {
				let {
					current
				} = e.detail;
				let currentLevel = this.levelList[current];
				this.currentIndex = current
				this.privilegeList = currentLevel.level_privilege
			},

			getLevelListFun() {
				getLevelList().then(res => {
					const {
						code,
						data
					} = res;
					if (code != 1) return;
					const {
						user,
						growth_rule,
						level_list
					} = data;
					let index = level_list.findIndex(item => item.current_level_status == 1);
					if (index == -1) index = 0;
					this.userInfo = user
					this.growthRule = growth_rule
					this.levelList = level_list
					this.currentIndex = index
					this.privilegeList = level_list[index].level_privilege
				});
			},
		}
	};
</script>
<style lang="scss">
	page {
		background-color: #fff;

		.user-vip {
			.header {
				background-image: url(../../static/images/vip_grade_bg.png);
				padding-top: 30rpx;
				background-size: 100% 100%;
				height: 382rpx;

				.user-vip-info {
					padding-left: 30rpx;

					.user-level {
						border: 1px solid white;
						border-radius: 100rpx;
						padding: 4rpx 20rpx;
						line-height: 30rpx;
					}

					.user-text {
						line-height: 50rpx;
						font-weight: bold;
					}
				}
			}

			.content {
				margin-top: -200rpx;

				.vip-card-item {
					height: 320rpx;
					width: 600rpx;
					position: relative;
					background-size: 100% 100%;

					.grade {
						line-height: 36rpx;
						background-color: rgba(0, 0, 0, 0.5);
						border-top-right-radius: 100rpx;
						border-bottom-right-radius: 100rpx;
						height: 50rpx;
						padding: 0 28rpx;
					}

					.user-grade {
						line-height: 36rpx;
						margin-left: 30rpx;
					}

					.grade-icon {
						width: 120rpx;
						height: 100rpx;
					}

					.vip-name {
						padding: 10rpx 30rpx;
						font-size: 46rpx;
						text-align: center;
						align-items: flex-end;
						margin-bottom: 30rpx;
					}

					.vip-progress {
						height: 8rpx;
						width: 540rpx;

						.vip-progress-bar {
							background-color: #f8d07c;
							height: 100%;
						}
					}

				}

				.vip-grade-rule {
					margin: 24rpx 40rpx;

					.title {
						.line {
							width: 8rpx;
							height: 34rpx;
							background-color: #f79c0c;
						}
					}
				}

				.vip-rights {
					margin: 24rpx 40rpx;

					.title {
						padding: 28rpx 0;

						.line {
							width: 8rpx;
							height: 34rpx;
							background-color: #f79c0c;
						}
					}

					.rights-item {
						width: 25%;
						padding-bottom: 30rpx;

						image {
							width: 82rpx;
							height: 82rpx;
						}
					}
				}

			}

		}
	}
</style>
