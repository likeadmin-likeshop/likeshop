<template>
	<view class="shop-cart">
		<view class="main " :style="{'padding-bottom':  (cartType == 1 ?  '100rpx' : 0)}">
			<view v-for="(item, index) in cartLists" :key="index" class="cart-list mb20" v-show="!(cartType!=1)">
				<view class="cart-item bg-white" :class="{invalid: item.cart_status != 0}">
					<view class="row-between select" v-if="item.cart_status == 0">
						<checkbox :value="item.cart_id + ''" :checked="item.selected == 1" @click="changOneSelect(item.cart_id, item.selected)">选择</checkbox>
						<view :data-cartid="item.cart_id" @click="changeDelPopup(item.cart_id)">
							<image class="icon-xl" src="/static/images/icon_del.png" />
						</view>
					</view>
					<view class="select row-between sm muted" v-else>
						已失效
						<view :data-cartid="item.cart_id" @click="changeDelPopup(item.cart_id)">
							<image class="icon-xl" src="/static/images/icon_del.png" />
						</view>
					</view>
					<view class="row" style="padding: 20rpx" @tap="goPage" :data-url="'/pages/goods_details/goods_details?id=' + item.goods_id">
						<custom-image width="180rpx" height="180rpx" radius="10rpx" class="goods-img mr20" lazy-load :src="item.img" />
						<view class="info" style="flex: 1">
							<view class="line2 nr">{{item.name}}</view>
							<view class="muted xs line1 mt10">
								{{item.spec_value_str}}
							</view>
							<view class="row-between mt20">
								<view class="price row primary">
									<price-format :price="item.price" :firstSize="32" :secondSize="32" :showSubscript="true" :subscriptSize="32"></price-format>
								</view>
								<view class="cartNum" @tap.stop="">
									<u-number-box :disabled="item.cart_status != 0" v-model="item.goods_num" :min="1" async-change integer @change="countChange($event, item.cart_id)" />
								</view>
							</view>
						</view>
					</view>
				</view>
			</view>
			<view class="cart-null column-center bg-white mb20" style="padding: 80rpx 0 50rpx" v-show="!(cartType != 2)">
				<image class="img-null" src="/static/images/cart_null.png"></image>
				<view class="muted mb20">购物车暂无任何商品~</view>
				<navigator open-type="switchTab" url="/pages/index/index" hover-class="none" class="primary br60 btn row-center">去逛逛</navigator>
			</view>
			<view v-if="!isLogin" class="login column-center">
				<image class="img-null" src="/static/images/cart_null.png"></image>
				<view class="muted mt20">登录后才能查看购物车哦</view>
				<navigator class="white br60 row-center btn" url="/pages/login/login">
					<!-- <image class="mr10" src="/static/images/icon_wechat.png"></image> -->
					<text>去登录</text>
				</navigator>
			</view>
			<recommend v-if="isShow"></recommend>
		</view>
		<view class="footer row bg-white" v-show="!(cartType != 1)">
			<checkbox-group class="row" @change="changeAllSelect">
				<checkbox id="checkAll" value="all" :checked="isSelectedAll"></checkbox>
				<label for="checkAll" class="ml10">全选</label>
			</checkbox-group>
			<view class="all-price lg mr20 row-end">
				<view>合计：</view>
				<view class="primary">￥{{totalPrice || 0}}</view>
                
			</view>
			<view class="right-btn br60 white" :style="' ' + (nullSelect ? 'background: #d7d7d7' : '')" @tap="goToConfirm">去结算</view>
		</view>
		<u-modal v-model="delPopup" :showCancelButton="true" comfirm-text="狠心删除" confirm-color="#FF2C3C" :show-title="false"
		 @confirm="goodsDelete" @cancel="changeDelPopup">
			<view class="column-center tips-dialog" style="padding-top: 40rpx">
				<image class="icon-lg" src="/static/images/icon_warning.png" />
				<view style="margin:30rpx 0;">确认删除该商品吗？</view>
			</view>
		</u-modal>
	</view>
</template>

<script>
	import {
		getCartList,
		changeCartSelect,
		changeGoodsCount,
		deleteGoods
	} from '@/api/store';
	import {
		getUser
	} from '@/api/user';
	import {
		mapGetters,
		mapActions
	} from 'vuex'
	import Cache from '@/utils/cache'
	import {setTabbar} from '@/utils/tools'
	export default {
		data() {
			return {
				//购物车状态 1为有 2为空 0则什么都不显示
				cartType: 0,
				isShow: false,
				cartLists: [],
				delPopup: false,
				totalPrice: ''
			};
		},

		components: {},
		computed: {
			...mapGetters(['cartNum']),
			nullSelect() {
				let index = this.cartLists.findIndex(item => item.selected == 1 && item.cart_status == 0);

				if (index == -1) {
					return true;
				}

				return false;
			},
			isSelectedAll() {
				let index = this.cartLists.findIndex(item => item.selected == 0 && item.cart_status == 0);

				if (index == -1) {
					return true;
				}

				return false;
			},
		
		},
		onLoad() {
			setTabbar()
		},
		onShow() {
			this.isLogin && this.getCartListFun();
		},

		onPullDownRefresh() {
			this.getCartListFun();
		},
		onShareAppMessage() {
			const shareInfo = Cache.get('shareInfo')
			return {
				title: shareInfo.mnp_share_title,
				path: "pages/index/index?invite_code=" + this.userInfo.distribution_code
			};
		},
		methods: {
			...mapActions(['getCartNum']),
			goodsDelete() {
				this.delPopup = false
				deleteGoods({
					cart_id: this.cartId
				}).then(res => {
					if (res.code == 1) {
						this.getCartListFun();
					}
				});
			},
			changeDelPopup(cartId) {
				if (cartId) {
					this.cartId = cartId;
				}

				this.delPopup = !this.delPopup;
			},

			getCartListFun() {
				getCartList().then(res => {
					uni.stopPullDownRefresh({
						success: res => {}
					});

					if (res.code == 1) {
						let {
							lists,
							total_amount
						} = res.data;
						let cartType = 0;

						if (lists.length == 0) {
							cartType = 2;
						} else {
							cartType = 1;
						}
                        
						this.cartLists = lists;
						this.cartType = cartType;
						this.totalPrice = total_amount;
						this.isShow = true
						this.getCartNum()
					}
				});
			},

			changOneSelect(cartId, selected) {
				selected = !selected;
				this.changeCartSelectFun([cartId], selected);
			},

			// 更改全选状态
			changeAllSelect() {
				const {
					isSelectedAll,
					cartLists
				} = this;
				console.log(cartLists, "###")
				let cartid = cartLists.map(item => item.cart_id);
				this.changeCartSelectFun(cartid, !isSelectedAll);
			},

			changeCartSelectFun(cartId, selected) {
				console.log("selected ", selected)
				changeCartSelect({
					cart_id: cartId,
					selected: selected ? 1 : 0
				}).then(res => {
					if (res.code == 1) {
						this.getCartListFun();
					}
				});
			},

			countChange(number, cartId) {
				console.log("countChange", number, cartId)
				let cartid = cartId;
				changeGoodsCount({
					cart_id: cartid,
					goods_num: number
				}).then(res => {
					if (res.code == 1) {
						this.getCartListFun();
					}
                    else {
                        this.getCartListFun();
                    }
				})
			},

			goToConfirm() {
				let {
					cartLists
				} = this;
				let goods = [];
				cartLists.forEach(item => {
					if (item.selected && item.cart_status == 0) {
						goods.push({
							item_id: item.item_id,
							num: item.goods_num
						});
					}
				});
				if (goods.length == 0) return this.$toast({
					title: '您还没有选择商品哦'
				});
				uni.navigateTo({
					url: '/pages/confirm_order/confirm_order?data=' + encodeURIComponent((JSON.stringify({goods, type:'cart'}))),
				})
			},

			goPage(e) {
				const {
					url
				} = e.currentTarget.dataset;
				uni.navigateTo({
					url
				});
			}

		},
	};
</script>
<style lang="scss">
	.shop-cart {
		.main {
			padding-bottom: 100rpx;
		}

		.cart-list {
			.cart-item {
				margin: 20rpx 20rpx 0;
				border-radius: 10rpx;
				// &.invalid {
				// 	background-color: $-color-body;
				// }
			}

			.select {
				height: 80rpx;
				padding: 0 20rpx;
				border-bottom: $-solid-border;
			}
		}

		.cart-null {
			.btn {
				border: 1px solid $-color-primary;
				width: 184rpx;
				margin-left: auto;
				margin-right: auto;
				padding: 8rpx 24rpx;
			}
		}

		.footer {
			position: fixed;
			padding: 0 24rpx;
			width: 100%;
			height: 100rpx;
			box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);
			bottom: var(--window-bottom);
			box-sizing: border-box;
			z-index: 20;

			.all-price {
				text-align: right;
				flex: 1;
			}

			.right-btn {
				padding: 13rpx 45rpx;
				background: linear-gradient(90deg, rgba(249, 95, 47, 1) 0%, rgba(255, 44, 60, 1) 100%);
			}
		}

		.login {
			height:calc(100vh - var(--window-bottom));
			background: #fff;
			text-align: center;

			.btn {
				background-color: #09BB07;
				width: 280rpx;
				line-height: 70rpx;
				margin: 40rpx auto 0;

				image {
					width: 50rpx;
					height: 50rpx;
				}
			}
		}
	}
</style>
