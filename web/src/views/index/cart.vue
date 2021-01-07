// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------


<template>
    <div class="cart-container">
        <div v-show="cartType == 1">
            <div class="shopping-cart-null column-center mb5">
                <div class="shop-cart-img">
                    <img src="@A/images/null_shoppingCar.png" />
                </div>
                <div class="shop-cart-tips muted">购物车暂无任何商品~</div>
                <router-link
                    :to="{ name: 'index' }"
                    class="shop-cart-btn row-center mt10"
                    >去逛逛</router-link
                >
            </div>
        </div>
        <div class="cart-box" v-show="cartType == 2">
            <div class="goods-container">
                <div
                    class="goods-item bg-white mt10"
                    v-for="item in goodsList"
                    :key="item.cart_id"
                >
                    <div class="goods-header row-between">
                        <div
                            class="row"
                            @click="$selectedOpt([item.cart_id], item.selected)"
                        >
                            <van-checkbox
                                v-model="item.selected"
                                :checked-color="primaryColor"
                                icon-size="17px"
                            />
                            <div
                                class="ml10 sm"
                                style="line-height: 18px; margin-top: 1px"
                            >
                                选择
                            </div>
                        </div>
                        <img
                            class="goods-del mr10"
                            @click.stop="showDialog(item.cart_id)"
                            src="@A/images/cart_icon_del.png"
                        />
                    </div>
                    <router-link :to="{name: 'goodsDetail', query: {id: item.goods_id}}" class="goods-info normal row">
                        <img class="goods-img" :src="item.img" />
                        <div class="goods-desc ml10 column">
                            <div class="row">
                                <div class="goods-name two-txt-cut">
                                    {{ item.name }}
                                </div>
                            </div>
                            <div class="goods-params muted mt5 row">
                                {{ item.spec_value_str }}
                            </div>
                            <div class="row-between primary mt10">
                                <price-slice
                                    :showSubscript="true"
                                    subScriptClass="xs"
                                    firstClass="lg"
                                    secondClass="xs"
                                    :price="item.price"
                                    :color="primaryColor"
                                />
                                <van-stepper
                                    :value="item.goods_num"
                                    button-size="23px"
                                    async-change
                                    @change="
                                        goodsCountChange($event, item.cart_id)
                                    "
                                />
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
            <div class="cart-footer bg-white row-between" v-if="cartType == 2">
                <div class="row" @click="selectAll()">
                    <van-checkbox
                        v-model="selectedAll"
                        :checked-color="primaryColor"
                        icon-size="17px"
                    ></van-checkbox>
                    <div
                        class="ml10 nr"
                        style="
                            line-height: 21px;
                            font-size: 14px;
                            margin-top: 3px;
                        "
                    >
                        全选
                    </div>
                </div>
                <div class="row-between">
                    <div class="row sum">
                        <div class="nr">合计：</div>
                        <price-slice
                            :showSubscript="true"
                            weight="500"
                            subScriptClass="xs"
                            firstClass="xxl"
                            secondClass="xs"
                            :price="tatalAmount"
                            :color="primaryColor"
                        ></price-slice>
                    </div>
                    <div
                        class="white btn row-center ml10"
                        :class="{ 'gray-btn-status': allNotSelect }"
                        @click="goConfirm"
                    >
                        去结算
                    </div>
                </div>
            </div>
        </div>
        <recommend class="mt10" />
        <van-dialog
            v-model="showWarning"
            show-cancel-button
            :confirmButtonColor="primaryColor"
            confirmButtonText="狠心删除"
            @confirm="goodsDelete"
        >
            <div class="dialog-content column-center">
                <img class="icon" src="@A/images/icon_warning.png" />
                <div class="normal" style="margin-top: 15px">
                    确认删除该商品吗？
                </div>
            </div>
        </van-dialog>
    </div>
</template>

<script>
import {
    getCartList,
    changeGoodsCount,
    selectedOpt,
    deleteGoods,
} from "@API/store";
import Recommend from "@C/Recommend";
import { mapActions } from "vuex";
const CarType = {
    NONE: 0,
    EMPTY: 1,
    HAVE: 2,
};
const SelectStatus = {
    NOT_SELECT: 0,
    SELECTED: 1,
};

export default {
    name: "cart",
    components: {
        Recommend,
    },
    data() {
        return {
            goodsList: [],
            showWarning: false,
            selectedAll: false,
            allNotSelect: false,
            cartType: CarType.NONE,
        };
    },
    methods: {
        ...mapActions(['getCartNum']),
        goodsDelete() {
            this.$deleteGoods(this.cart_id);
        },
        showDialog(cart_id) {
            this.cart_id = cart_id;
            this.showWarning = true;
        },
        goConfirm() {
            const { goodsList } = this;
            let goods = [];
            goodsList.forEach((item) => {
                if (item.selected) {
                    goods.push({
                        item_id: item.item_id,
                        num: item.goods_num,
                    });
                }
            });
            if (goods.length <= 0) {
                return this.$toast({
                    message: "您还没有选择商品哦"
                });
            }
            this.$router.push({
                name: 'confirmOrder',
                query: {
                     goods: JSON.stringify(goods)
                }
            })
        },
        selectAll() {
            let cartId = this.goodsList.map((item) => {
                return item.cart_id;
            });

            this.$selectedOpt(cartId, this.selectedAll);
        },

        // 删除商品
        $deleteGoods(cart_id) {
            deleteGoods({ cart_id: cart_id }).then((res) => {
                if (res.code == 1) {
                    // this.$toast(res.msg)
                    this.$getCartList();
                }
            });
        },

        // 检查是否全选了
        checkSelectAll() {
            for (let i = 0; i < this.goodsList.length; i++) {
                if (this.goodsList[i].selected == SelectStatus.NOT_SELECT) {
                    // 有一个没选就是非全选
                    return false;
                }
            }
            return true;
        },

        checkNotSelect() {
            for (let i = 0; i < this.goodsList.length; i++) {
                if (this.goodsList[i].selected == SelectStatus.SELECTED) {
                    // 有一个选中了
                    return false;
                }
            }
            return true;
        },

        // 选择商品
        $selectedOpt(cart_id, selected) {
            selectedOpt({
                cart_id: cart_id,
                selected: selected ? 0 : 1,
            }).then((res) => {
                if (res.code == 1) {
                    this.$getCartList();
                }
            });
        },

        goodsCountChange(value, cart_id) {
            this.$changeGoodsCount(cart_id, value);
        },

        // 改变数量
        $changeGoodsCount(cart_id, changeNum) {
            changeGoodsCount({
                cart_id: cart_id,
                goods_num: changeNum,
            }).then((res) => {
                if (res.code == 1) {
                    this.$getCartList();
                }
            });
        },

        $getCartList() {
            getCartList().then((res) => {
                if (res.code == 1) {
                    this.goodsList = res.data.lists;
                    this.tatalAmount = res.data.total_amount;
                    this.goodsList.length <= 0
                        ? (this.cartType = CarType.EMPTY)
                        : (this.cartType = CarType.HAVE);
                    this.checkSelectAll()
                        ? (this.selectedAll = true)
                        : (this.selectedAll = false);
                    this.checkNotSelect()
                        ? (this.allNotSelect = true)
                        : (this.allNotSelect = false);
                        this.getCartNum()

                }
            });
        },
    },
    mounted: function () {
        this.$getCartList();
    },
};
</script>

<style lang="scss" scoped>
.cart-container {
    padding-bottom: 40px;
    .shopping-cart-null {
        width: 100%;
        height: 344.5px;
        background-color: white;
        .shop-cart-img {
            width: 150px;
            height: 150px;
            img {
                width: 100%;
                height: 100%;
                flex: none;
            }
        }
        .shop-cart-tips {
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
        }
        .shop-cart-btn {
            width: 120px;
            height: 31px;
            font-size: 15px;
            color: $--color-primary;
            border-radius: 30px;
            border: 1px solid rgba(255, 44, 60, 1);
            font-weight: 400;
            line-height: 17px;
        }
    }
    .cart-box {
        display: flex;
        flex: 1;
        flex-direction: column;
        .goods-container {
            .goods-item {
                padding: 0 0 10px 12px;
                margin: 10px 10px 0;
                border-radius: 5px;
                .goods-header {
                    padding: 10 10px 10px 0;
                    border-bottom: 1px solid $--border-color-base;
                    height: 40px;
                    .goods-del {
                        width: 28px;
                        height: 28px;
                        flex: none;
                    }
                }
                .goods-info {
                    flex: 1;
                    padding-top: 10px;
                    padding-right: 10px;
                    .goods-img {
                        width: 90px;
                        height: 90px;
                        flex: none;
                    }
                    .goods-desc {
                        flex: 1;
                        .goods-name {
                            font-size: 14px;
                            font-weight: 400;
                            line-height: 18px;
                            text-align: left;
                        }
                        .goods-params {
                            line-height: 21px;
                        }
                    }
                }
            }
        }
        .cart-footer {
            padding: 0 12px;
            height: 50px;
            position: fixed;
            width: 100%;
            bottom: 50px;
            box-sizing: border-box;
            z-index: 2000;
            box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);
            .sum {
                font-size: 14px;
            }
            .btn {
                height: 34px;
                width: 90px;
                font-size: 15px;
                border-radius: 30px;
                background: linear-gradient(
                    90deg,
                    rgba(249, 95, 47, 1) 0%,
                    rgba(255, 44, 60, 1) 100%
                );
            }
            .gray-btn-status {
                background: #d7d7d7;
            }
        }
    }
    .dialog-content {
        height: 115px;
        .icon {
            width: 28px;
            height: 28px;
        }
    }
}
.van-stepper /deep/ {
    & .van-stepper__minus {
        border-radius: 0px;
        background-color: white !important;
        border-left: 1px solid rgba(187, 187, 187, 1) !important;
        border-top: 1px solid rgba(187, 187, 187, 1) !important;
        border-bottom: 1px solid rgba(187, 187, 187, 1) !important;
        border-right: 0px;
    }
    & .van-stepper__input {
        border-radius: 0px;
        background-color: white !important;
        border: 1px solid rgba(187, 187, 187, 1) !important;
        margin: 0;
    }
    & .van-stepper__plus {
        border-radius: 0px;
        background-color: white !important;
        border-top: 1px solid rgba(187, 187, 187, 1) !important;
        border-bottom: 1px solid rgba(187, 187, 187, 1) !important;
        border-right: 1px solid rgba(187, 187, 187, 1) !important;
        border-left: 0px;
    }
}
</style>