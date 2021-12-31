<template>
	<view class="sort">
		<navigator class="header" hover-class="none" url="/pages/goods_search/goods_search">
			<u-search bg-color="#F4F4F4" :disabled="true"></u-search>
		</navigator>
		<view class="content">
			<cate-one  v-if="appConfig.cate_style == 2" :list="cateList"></cate-one>
			<cate-two v-if="appConfig.cate_style == 3" :list="cateList"></cate-two>
			<cate-three v-if="appConfig.cate_style == 4" :list="cateList"></cate-three>
			<cate-four v-if="appConfig.cate_style == 1" :list="cateList"></cate-four>
		</view>
	</view>
</template>

<script>
	import {
		getCatrgory
	} from '@/api/store';
	import {
		getRect,
		setTabbar
	} from '@/utils/tools';
	import {
		mapGetters,
		mapActions
	} from 'vuex'
	import Cache from '@/utils/cache'
	export default {
		data() {
			return {
				cateList: []
			};
		},

		components: {},
		onLoad(options) {
			setTabbar()
			this.getCatrgoryFun();
		},
		onShow() {
			this.getCartNum()
		},
		onShareAppMessage() {
			const shareInfo = Cache.get('shareInfo')
			return {
				title: shareInfo.mnp_share_title,
				path: "pages/index/index?invite_code=" + this.inviteCode
			};
		},
		methods: {
			...mapActions(['getCartNum']),
			getCatrgoryFun() {
				getCatrgory().then(res => {
					if (res.code == 1) {
						this.cateList = res.data
					}
				});
			},

		},
		computed: {
			...mapGetters(["cartNum", "inviteCode", "appConfig"])
		}
	};
</script>
<style lang="scss">
	$header-height: 94rpx;
	$nav-height: 80rpx;
	page {


		.sort {
			.header {
				box-sizing: border-box;
				height: $header-height;
				border-bottom: $-solid-border;

				.search {
					flex: 1;
					height: 60rpx;

					input {
						flex: 1;
						height: 100%;
					}
				}
			}
			.content {
				height: calc(100vh - #{$header-height} - var(--window-top) - var(--window-bottom));
			}
		}
		
	}
</style>
