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
				cateList: [],
				cateTwoList: [],
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
						let index = this.cateList.findIndex((item) => item.type == 1)
						this.selectIndex = index == -1 ? 0 : index
						this.cateList.forEach((item, index) => item.isShow = this.selectIndex == index ? true :
							false)
						this.cateTwoList = res.data[this.selectIndex] ? res.data[this.selectIndex].sons : []
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
		}
	}
</style>
