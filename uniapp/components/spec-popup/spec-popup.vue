<template>
	<u-popup v-model="showPop" mode="bottom" border-radius="14" :closeable="true" @close="onClose" :safe-area-inset-bottom="true">
		<view class="bg-white spec-contain">
			<view class="spec-header row">
				<custom-image class="goods-img mr20" radius="10rpx" @tap="previewImage(checkedGoods.image)" :src="checkedGoods.image"></custom-image>
				<view class="goods-info" v-if="!isBargain">
					<view class="primary row">
						<price-format :first-size="46" :second-size="32" :subscript-size="32" :price="group ? checkedGoods.team_price : checkedGoods.price" :weight="500"></price-format>
						<view class="vip-price row" v-if="!group && !isSeckill && checkedGoods.member_price">
							<view class="price-name xxs">会员价</view>
							<view style="padding: 0 11rpx"> 
								<price-format :price="checkedGoods.member_price" :first-size="22" :second-size="22" :subscript-size="22"
									 :weight="500" color="#7B3200"></price-format>
							</view>
						</view>
					</view>
					<view class="sm" v-show="showStock">
						库存：{{checkedGoods.stock}}件
					</view>
					<view class="sm">
						<text>已选择：{{checkedGoods.spec_value_str}}，{{goodsNum}}件</text>
					</view>
				</view>
                <view class="goods-info" v-else>
                    <view class="xs">
                        最低可砍至<text class="sm" style="color: #F95F2F;">¥{{checkedGoods.activity_price}}</text>
                    </view>
                    <view class="muted xs mt10">
                        原价 ¥{{checkedGoods.price}}
                    </view>
                    <view class="sm lighter mt20">
                    	<text>已选择：{{checkedGoods.spec_value_str}}</text>
                    </view>
                </view>
			</view>
			<view class="spec-main">
				<scroll-view style="max-height: 600rpx;" scroll-y="true">
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
					<u-number-box v-model="goodsNum" :min="1" :max="checkedGoods.stock" :disabled="disabledNumberBox"></u-number-box>
				</view>
			</view>
			<view class="btns row-between bg-white">
				<button v-if="showAdd" class="add-cart br60 white btn" size="lg" @tap="onClick('addcart')">{{yellowBtnText}}</button>
				<button v-if="showBuy" class="bg-primary br60 white btn" size="lg" @tap="onClick('buynow')">{{redBtnText}}</button>
				<button v-if="showConfirm" class="bg-primary br60 white btn" size="lg" @tap="onClick('confirm')">确定</button>
			</view>
		</view>
	</u-popup>
</template>

<script>
	export default {
		data() {
			return {
				checkedGoods: {},
				specList: [],
				goodsNum: 1,
				showPop: false
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
			showConfirm: {
				type: Boolean,
				default: false
			},
			redBtnText: {
				type: String,
				default: "立即购买"
			},
			yellowBtnText: {
				type: String,
				default: "加入购物车"
			},
			group: {
				type: Boolean,
				default: false
			},
			isSeckill: {
				type: Boolean,
				default: false
			},
            showStock: {
                type: Boolean,
                default: true
            },
            disabledNumberBox: {
                type: Boolean,
                default: false
            },
            isBargain: {
                type: Boolean,
                default: false
            },
			goodsType: {
				type: Number,
			}
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
				this.checkedGoods = goodsItem.length ? goodsItem[0] : {};
                console.log(this.checkedGoods, 'checkedGoods')
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
			show(val) {
				this.showPop = val
			}
		},
		methods: {
			onClose() {
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
<style lang="scss" scoped>
	.spec-contain {
		border-radius: 10rpx 10rpx 0 0;
		overflow: hidden;
		position: relative;

		.close {
			position: absolute;
			right: 10rpx;
			top: 10rpx;
		}

		.spec-header {
			padding: 30rpx;
			padding-right: 70rpx;
			align-items: flex-start;
			border: $-solid-border;
			.vip-price {
				margin: 0 24rpx;
				background-color: #FFE9BA;
				line-height: 36rpx;
				border-radius: 6rpx;
				overflow: hidden;
				.price-name {
					background-color: #101010;
					padding: 3rpx 12rpx;
					color: #FFD4B7;
					position: relative;
					overflow: hidden;
					&::after {
						content: '';
						display: block;
						width: 20rpx;
						height: 20rpx;
						position: absolute;
						right: -15rpx;
						background-color: #FFE9BA;
						border-radius: 50%;
						top: 50%;
						transform: translateY(-50%);
						box-sizing: border-box;
					}
				}
			}
			.goods-img {
				width: 180rpx;
				height: 180rpx;
				flex: none;
			}
		}

		.spec-main {
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
