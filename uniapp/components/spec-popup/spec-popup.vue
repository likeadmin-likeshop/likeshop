<template>
	<uni-popup ref="popup" type="bottom" :mask-click="false">
		<view class="bg-white spec-contain">
			<view class="close" @tap="close">
				<image class="icon-lg" src="/static/images/icon_close.png"></image>
			</view>
			<view class="header row">
				<custom-image class="goods-img mr20" radius="10rpx" @tap="previewImage(checkedGoods.image)" :src="checkedGoods.image"></custom-image>
				<view class="goods-info">
					<view class="primary">
						<price-format :first-size="46" :second-size="32" :show-subscript="32" :price="checkedGoods.price" :weight="500"></price-format>
					</view>
					<view class="sm">
						库存：{{checkedGoods.stock}}件
					</view>
					<view class="sm">
						<text>已选择：{{checkedGoods.spec_value_str}}，{{goodsNum}}件</text>
					</view>
				</view>
			</view>
			<view class="main">
				<scroll-view style="max-height: 500rpx;" scroll-y="true">
					<view class="spec-list">
						<view v-for="(item, index) in specList" :key="index" class="spec">
							<view class="name mb20">{{ item.name }}</view>
							<view class="row wrap">
								<view v-for="(specitem, index2) in item.spec_value" :key="index2" :class="'spec-item sm ' + ( specitem.checked ? 'checked' : '' )"
								 @tap="choseSpecItem(item.id, specitem.id)">
									{{ specitem.value }}
								</view>
							</view>
						</view>
					</view>
				</scroll-view>
				<view class="good-num row-between ml20 mr20">
					<view class="label">数量</view>
					<uni-number-box :value="goodsNum" :min="1" :max="checkedGoods.stock" @change="onChange"></uni-number-box>
				</view>
			</view>
			<view class="btns row-between bg-white">
				<button v-if="showAdd" class="add-cart br60 white btn" size="lg" @tap="onClick('addcart')">{{yellowBtnText}}</button>
				<button v-if="showBuy" class="bg-primary br60 white btn" size="lg" @tap="onClick('buynow')">{{redBtnText}}</button>
			</view>
		</view>
	</uni-popup>
</template>

<script>
	export default {
		data() {
			return {
				checkedGoods: {},
				specList: [],
				goodsNum: 1
			};
		},

		components: {},
		props: {
			show: {
				type: Boolean
			},
			goods: {
				type: Object
			},
			showAdd: {
				type: Boolean,
				default: true
			},
			showBuy: {
				type: Boolean,
				default: true
			},
			redBtnText: {
				type: String,
				default: "立即购买"
			},
			yellowBtnText: {
				type: String,
				default: "加入购物车"
			},
		},
		mounted() {},
		watch: {
			goods(value) {
				let specList = value.goods_spec || [];
				let goodsItem = value.goods_item || [];
				specList.forEach(item => {
					if (item.spec_value) {
						item.spec_value.forEach((specitem, specindex) => {
							if (specindex == 0) {
								specitem.checked = 1;
							} else {
								specitem.checked = 0;
							}
						});
					}
				});
				this.specList = specList
				this.checkedGoods = goodsItem.length ? goodsItem[0] : {}
			},

			specList(value) {
				const {
					goods_item
				} = this.goods;
				let keyArr = [];
				value.forEach(item => {
					if (item.spec_value) {
						item.spec_value.forEach(specitem => {
							if (specitem.checked) {
								keyArr.push(specitem.id);
							}
						});
					}
				});
				if (!keyArr.length) return;
				let key = keyArr.join(',');
				let index = goods_item.findIndex(item => {
					return item.spec_value_ids == key;
				});
				if (index == -1) return;
				this.checkedGoods = goods_item[index]
				this.$emit('change', {
					detail: goods_item[index]
				});
			},
			show: {
				handler(val) {
					if(val) {
						this.open()
					}else {
						this.close()
					}
				}
			}

		},
		methods: {
			open() {
				this.$refs.popup.open()
			},
			close() {
				this.$refs.popup.close()
				this.$emit('close')
			},
			onClick(type) {
				let {
					checkedGoods,
					goodsNum
				} = this;
				checkedGoods.goodsNum = goodsNum;
				this.$emit(type, {
					detail: checkedGoods
				});
			},

			onChange(e) {
				this.goodsNum = e
			},

			choseSpecItem(id, specid) {
				this.specList.forEach(item => {
					if (item.spec_value && item.id == id) {
						item.spec_value.forEach(specitem => {
							specitem.checked = 0;
							if (specitem.id == specid) {
								specitem.checked = 1;
							}
						});
					}
				});
				this.specList = [...this.specList]
			},

			previewImage(current) {
				uni.previewImage({
					current,
					// 当前显示图片的http链接
					urls: [current] // 需要预览的图片http链接列表

				});
			}

		}
	};
</script>
<style lang="scss">
	.spec-contain {
		border-radius: 10rpx 10rpx 0 0;
		overflow: hidden;
		position: relative;

		.close {
			position: absolute;
			right: 10rpx;
			top: 10rpx;
		}

		.header {
			padding: 30rpx;
			padding-right: 70rpx;
			align-items: flex-start;
			border: $-solid-border;

			.goods-img {
				width: 160rpx;
				height: 160rpx;
				flex: none;
			}
		}

		.main {
			.spec-list {
				padding: 30rpx 20rpx;

				.spec-item {
					line-height: 52rpx;
					padding: 0 20rpx;
					background-color: #F4F4F4;
					border-radius: 60rpx;
					margin: 0 20rpx 20rpx 0;

					&.checked {
						background-color: $-color-primary;
						color: #fff;
					}

				}
			}

		}
		.btns {
			height: 120rpx;
			padding: 0 30rpx;
			margin-top: 80rpx;
		
			.add-cart {
				background-color: #FF9E1E;
			}
		
			.btn {
				margin: 0 10rpx;
				flex: 1;
			}
		}
	}
</style>
