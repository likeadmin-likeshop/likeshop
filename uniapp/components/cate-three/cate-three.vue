<template>
	<view class="cate-three row">
		<view class="aside">
			<scroll-view style="height: 100%" scroll-y="true" scroll-with-animation="true">
				<block v-for="(item, index) in cateList" :key="index">
					<view :class="'one-item sm ' + (index == selectIndex ? 'active' : '')" @click="changeActive(index)">
						<text class="name">{{ item.name }}</text>
						<view v-if="index == selectIndex" class="active-line bg-primary"></view>
					</view>
				</block>
			</scroll-view>
		</view>
		<view class="main bg-body">
			<scroll-view style="height: 100%" scroll-y="true" scroll-with-animation="true">
				<view class="main-wrap">
					<view style="border-radius: 10rpx;">
						<swipers :pid="4" height="200rpx" previous-margin="0" padding="20rpx 0 0" radius="10rpx">
						</swipers>
					</view>
					<view class="cate-two mt20">
						<view v-for="(sitem, sindex) in cateTwoList" :key="sindex" class="two-item bg-white mb20">
							<navigator class="title row-between" v-if="sitem.type == 1" hover-class="none"
								:url="`/pages/goods_search/goods_search?id=${sitem.id}&name=${sitem.name}&type=${sitem.type}`">
								<text class="name bold sm">{{sitem.name}}</text>
								<u-icon name="arrow-right"></u-icon>
							</navigator>
							<view class="title row-between" v-else>
								<text class="name bold sm">{{sitem.name}}</text>
							</view>
							<view class="three-list row wrap">
								<navigator v-for="(titem, tindex) in sitem.sons" :key="tindex"
									class="three-item column-center mb20" hover-class="none"
									:url="`/pages/goods_search/goods_search?id=${titem.id}&name=${titem.name}&type=${titem.type}`">
									<u-image mode="aspectFit" width="150rpx" height="150rpx" :src="titem.image">
									</u-image>
									<view class="text mt20 xs">{{ titem.name }}</view>
								</navigator>
							</view>
						</view>
					</view>
				</view>
			</scroll-view>
		</view>
	</view>
</template>

<script>
	export default {
		name: "cate-three",
		props: {
			list: {
				type: Array,
				default: () => ([])
			}
		},
		data() {
			return {
				selectIndex: 0,
				cateList: [],
				cateTwoList: []
			};
		},
		methods: {
			changeActive(index) {
				const {
					cateList
				} = this
				this.selectIndex = index
				this.cateTwoList = cateList[this.selectIndex].sons
			},
			
		},
		watch: {
			list: {
				immediate: true,
				handler(val) {
					let index = val.findIndex((item) => item.type == 1)
					this.selectIndex = index == -1 ? 0 : index
					this.cateList = val
					this.cateTwoList = val[this.selectIndex] ? val[this.selectIndex].sons : []
				}
			}
		},
	}
</script>

<style lang="scss">
	$header-height: 94rpx;
	.cate-three {
		height: calc(100vh - #{$header-height} - var(--window-top) - var(--window-bottom));
		background-color: #fff;

		.aside {
			width: 180rpx;
			flex: none;
			height: 100%;

			.one-item {
				position: relative;
				text-align: center;
				padding: 26rpx 10rpx;

				&.active {
					color: $-color-primary;
					font-size: 26rpx;
					font-weight: bold;
				}

				.active-line {
					position: absolute;
					width: 6rpx;
					height: 30rpx;
					left: 4rpx;
					top: 50%;
					transform: translateY(-50%);
				}
			}
		}

		.main {
			height: 100%;
			flex: 1;

			.main-wrap {
				position: relative;



				padding: 0 20rpx;

				.two-item {
					border-radius: 10rpx;

					.title {
						height: 90rpx;
						padding: 0 20rpx;

						.line {
							width: 40rpx;
							height: 1px;
							background-color: #BBBBBB;
						}
					}

					.three-list {
						align-items: flex-start;
						padding: 0 10rpx;

						.three-item {
							width: 33%;

							.text {
								text-align: center;
							}
						}
					}

				}
			}
		}
	}
</style>
