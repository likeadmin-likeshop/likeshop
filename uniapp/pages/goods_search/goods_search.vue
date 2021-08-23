<template>
	<view class="goods-search">

		<view class="header-wrap">
			<u-sticky offset-top="0" h5-nav-height="0">
				<view class="search">
					 <u-search v-model="keyword" @focus="showHistory = true" :focus="showHistory" @search="onSearch" bg-color="#F4F4F4"></u-search>
				</view>
				<view v-show="!showHistory" class="header row bg-white">
					<view :class="'tag row-center ' + (comprehensive ? 'primary' : '')" @tap="onNormal">综合</view>
					<view class="tag row-center" data-type="priceSort" @tap="onPriceSort">
						<text :class="priceSort ? 'primary' : ''">价格</text>
						<view>
							<trigonometry direction="up" size="small" :color="priceSort == 'desc' ? '#FF5058' : '#333'">
							</trigonometry>
							<trigonometry size="small" :color="priceSort == 'asc' ? '#FF5058' : '#333'"></trigonometry>
						</view>
					</view>
					<view class="tag row-center" data-type="saleSort" @tap="onSaleSort">
						<text :class="saleSort ? 'primary' : ''">销量</text>
						<view>
							<trigonometry direction="up" size="small" :color="saleSort == 'desc' ? '#FF5058' : '#333'">
							</trigonometry>
							<trigonometry size="small" :color="saleSort == 'asc' ? '#FF5058' : '#333'"></trigonometry>
						</view>
					</view>
					<view class="tag row-center" @tap="changeType">
						<image class="icon-sm" :src=" goodsType === 'one' ? '/static/images/icon_double.png' : '/static/images/icon_one.png'"></image>
					</view>
				</view>
			</u-sticky>
		</view>
		<view v-show="showHistory" class="content bg-white">
			<view v-if="hotList.length" class="search-words">
				<view class="title">热门搜索</view>
				<view class="words row wrap">
					<view v-for="(item, index) in hotList" :key="index" class="item br60  mr20 mb20 lighter sm line1" @tap="onChangeKeyword(item)">{{item}}</view>
				</view>
			</view>
			<view v-if="historyList.length" class="search-words">
				<view class="title row-between">
					<view>历史搜索</view>
					<view class="xs muted mr20" style="padding: 10rpx 20rpx" @tap="clearSearchFun">清空</view>
				</view>
				<view class="words row wrap">
					<view v-for="(item, index) in historyList" :key="index" class="item br60  mr20 mb20 lighter sm line1" @tap="onChangeKeyword(item)">{{item}}</view>
				</view>
			</view>
		</view>
		<view v-show="!showHistory" class="content">
			<view class="goods-list">
				<view v-show="goodsType == 'double'" class="double">
					<goods-list type="double" :list="goodsList"></goods-list>
				</view>
				<view v-show="goodsType == 'one'" class="one">
					<goods-list :list="goodsList" type="one"></goods-list>
				</view>
			</view>
			<loading-footer :status="status" :slot-empty="true">
				<view slot="empty" class="column-center" style="padding-top: 200rpx">
					<image class="img-null" src="/static/images/goods_null.png"></image>
					<text class="lighter">暂无商品</text>
				</view>
			</loading-footer>
		</view>
	</view>
</template>

<script>
	import {
		getGoodsSearch,
		getSearchpage,
		clearSearch
	} from '@/api/store';
	import {
		trottle,
		loadingFun,
		getRect
	} from '@/utils/tools';
	import {
		loadingType
	} from '@/utils/type';

	export default {
		data() {
			return {
				keyword: '',
				status: loadingType.LOADING,
				page: 1,
				goodsType: 'double',
				goodsList: [],
				priceSort: '',
				saleSort: '',
				showHistory: false,
				hotList: [],
				historyList: []
			};
		},

		components: {},
		props: {},
		watch: {
			// 监听属性
			keyword(value, old) {
				if (!value && !this.id) {
					this.showHistory = true
				}
			},
			showHistory(value) {
				if (value) {
					this.getSearchpageFun();
				}
			}

		},
		computed: {
			comprehensive() {
				const {
					priceSort,
					saleSort
				} = this
				if (priceSort == '' && saleSort == '') {
					return true;
				}

				return false;
			}

		},




		onLoad(options) {
			this.onNormal = trottle(this.onNormal, 500, this);
			this.onPriceSort = trottle(this.onPriceSort, 500, this);
			this.onSaleSort = trottle(this.onSaleSort, 500, this);
			this.onSearch = trottle(this.onSearch, 500, this);
			this.init(options);
		},


		onReachBottom: function() {
			this.getGoodsSearchFun();
		},
		methods: {
			onChange(e) {
				this.keyword = e.value
			},

			changeType() {
				this.goodsType = this.goodsType === 'one' ? 'double' : 'one'
			},

			clearSearchFun() {
				clearSearch().then(res => {
					if (res.code == 1) {
						this.getSearchpageFun();
					}
				});
			},

			onNormal() {
				this.priceSort = ''
				this.saleSort = ''
				this.onRefresh();
			},

			onPriceSort() {
				let {
					priceSort
				} = this;
				this.saleSort = ''
				this.priceSort = priceSort == 'asc' ? 'desc' : 'asc'
				this.onRefresh();
			},

			onSaleSort() {
				let {
					saleSort
				} = this;
				this.priceSort = ''
				this.saleSort = saleSort == 'desc' ? 'asc' : 'desc'
				this.onSearch();
			},

			init(option) {
				let {
					id,
					name,
					type
				} = option;
				this.type = type;
				if (id) {
					uni.setNavigationBarTitle({
						title: name
					});
					this.id = id;
					this.getGoodsSearchFun();
				} else {
					uni.setNavigationBarTitle({
						title: '搜索'
					});
					this.showHistory = true
				}
			},

			getSearchpageFun() {
				getSearchpage().then(res => {
					if (res.code == 1) {
						let {
							history_lists,
							hot_lists
						} = res.data;
						this.hotList = hot_lists
						this.historyList = history_lists
					}
				});
			},

			onClear() {
				if (this.id) {
					this.onSearch();
				}
			},
			onSearch() {
				this.onRefresh()
			},
			onRefresh() {
				this.showHistory = false
				this.page = 1
				this.goodsList = []
				this.status = loadingType.LOADING
				this.$nextTick(() => {
					this.getGoodsSearchFun();
				});
			},

			onChangeKeyword(item) {
				this.keyword = item
				this.showHistory = false
				this.onRefresh();
			},

			async getGoodsSearchFun() {
				let {
					page,
					goodsList,
					keyword,
					priceSort,
					saleSort,
					status
				} = this;
				if (status == loadingType.FINISHED) return;
				const params = {
					category_id: this.type == 1 ? this.id : '',
					brand_id: this.type == 0 ? this.id : '',
					page_no: page,
					keyword,
					price: priceSort,
					sales_sum: saleSort
				}
				const data = await loadingFun(getGoodsSearch, page, goodsList, status, params)
				if (!data) return
				this.page = data.page
				this.goodsList = data.dataList
				this.status = data.status
			},
		}
	};
</script>
<style lang="scss">
	.goods-search {
		.header-wrap {
			.search {
				box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.03);
				position: relative;
				z-index: 1;
			}

			.header {
				height: 80rpx;

				.tag {
					height: 100%;
					flex: 1;
				}
			}
		}


		.content {
			.search-words {
				padding-left: 24rpx;
				padding-bottom: 20rpx;

				.title {
					padding: 26rpx 0;
				}

				.words {
					.item {
						line-height: 52rpx;
						height: 52rpx;
						padding: 0 24rpx;
						background-color: #F5F5F5;
					}
				}
			}

			.goods-list {
				overflow: hidden;
			}
		}
	}
</style>
