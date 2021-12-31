<template>
	<view class="cate-four row">
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
			<scroll-view style="height: 100%" scroll-y="true" scroll-with-animation="true" @scrolltolower="getGoodsSearchFun">
				<view class="main-wrap">
					<view style="border-radius: 10rpx;">
						<swipers :pid="4" height="200rpx" previous-margin="0" padding="20rpx 0 0" radius="10rpx">
						</swipers>
					</view>
					<view class="cate-two mt20" v-if="currentType">
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
					<view class="goods" v-else>
						<view class="row condition bg-white mt20">
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
						</view>
						<view class="goods-list">
							<navigator hover-class="none" class="row item bg-white mt20" v-for="(item, index) in goodsList" :key="index" :url="`/pages/goods_details/goods_details?id=${item.id}`">
								<u-image width="200rpx" height="200rpx" border-radius="14rpx" :src="item.image"></u-image>
								<view class="flex1 ml20 mr10">
									<view class="line2">{{item.name}}</view>
									<view class="muted" >
										<text class="xxs">原价</text>  <price-format :subscriptSize="22" :firstSize="22" :secondSize="22" :price="item.market_price"></price-format>
									</view>
									<view class="primary mt10">
										<price-format :price="item.price" :subscriptSize="22" :firstSize="34" :secondSize="26"></price-format>
									</view>
								</view>
							</navigator>
						</view>
						<loading-footer :status="status" :slot-empty="true">
							<view slot="empty" class="column-center" style="padding: 200rpx 0 0">
								<image class="img-null" src="/static/images/goods_null.png"></image>
								<text class="lighter sm">暂无商品</text>
							</view>
						</loading-footer>
					</view>
				</view>
			</scroll-view>
		</view>
	</view>
</template>

<script>
	import {
		arraySlice,
		trottle,
		loadingFun
	} from '@/utils/tools'
	import {
		getGoodsSearch,
	} from '@/api/store';
	import {
		loadingType
	} from '@/utils/type';
	export default {
		name: "cate-four",
		props: {
			list: {
				type: Array,
				default: () => ([])
			}
		},
		data() {
			return {
				page:1, 
				status: loadingType.LOADING,
				selectIndex: 0,
				cateList: [],
				cateTwoList: [],
				goodsList: [],
				priceSort: '',
				saleSort: '',
			};
		},
		created() {
			this.onNormal = trottle(this.onNormal, 500, this);
			this.onPriceSort = trottle(this.onPriceSort, 500, this);
			this.onSaleSort = trottle(this.onSaleSort, 500, this);
		},
		methods: {
			changeActive(index) {
				const {
					cateList
				} = this
				this.selectIndex = index
				this.cateTwoList = cateList[this.selectIndex].sons || []
				this.onRefresh()
			},
			onRefresh() {
				this.page = 1
				this.goodsList = []
				this.status = loadingType.LOADING
				this.$nextTick(() => {
					this.getGoodsSearchFun();
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
				this.onRefresh();
			},
			async getGoodsSearchFun() {
				let {
					page,
					goodsList,
					priceSort,
					saleSort,
					status,
					cateList,
					selectIndex
				} = this;
				const item = cateList[selectIndex] 
				if(item.type == 0) return
				if (status == loadingType.FINISHED) return;
				const params = {
					category_id: item.id,
					page_no: page,
					price: priceSort,
					sales_sum: saleSort
				}
				const data = await loadingFun(getGoodsSearch, page, goodsList, status, params)
				if (!data) return
				this.page = data.page
				this.goodsList = data.dataList
				this.status = data.status
			},
		},
		watch: {
			list: {
				handler(val) {
					if(!val.length) return
					let index = val.findIndex((item) => item.type == 1)
					
					this.selectIndex = index == -1 ? 0 : index
					this.cateList = val
					this.cateTwoList = val[this.selectIndex] ? val[this.selectIndex].sons : []
					this.getGoodsSearchFun()
					
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
			},
			currentType() {
				const {
					cateList,
					selectIndex
				} = this
				return cateList[selectIndex] ? cateList[selectIndex].type == 0 : true
			}
		},
	}
</script>

<style lang="scss">
	$header-height: 94rpx;
	.cate-four {
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
				.goods {
					.item {
						border-radius: 14rpx;
						overflow: hidden;
						.add {
							width: 46rpx;
							height: 46rpx;
							line-height: 46rpx;
							text-align: center;
						}
					}
				}
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
		.condition {
			height: 80rpx;
			border-radius: 10rpx;
		
			.tag {
				flex: 1;
			}
		}
	}
</style>
