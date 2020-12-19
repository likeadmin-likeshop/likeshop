<template>
    <van-popup
        class="spec-popup"
        v-model="showsepc"
        closeable
        round
        position="bottom"
        @close="$emit('close')"
    >
        <div class="header row">
            <div class="goods-img mr10" @click="previewImage(checkedGoods.image)">
                <van-image width="100%" height="100%" :src="checkedGoods.image" />
            </div>
            <div class="goods-info">
                <div class="primary xxl">
                    <price-slice
                        :showSubscript="true"
                        :price="checkedGoods.price"
                        :weight="700"
                        first-class="first-price"
                        second-class="xxl"
                    />
                </div>
                <div class="sm">库存：{{checkedGoods.stock}}件</div>
                <div class="sm">
                    <span>已选择：{{checkedGoods.spec_value_str}}，{{goodsNum}}件</span>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="scroll-wrap hidden-scrollbar">
                <div class="spec-list">
                    <div class="spec" v-for="item in specList " :key="item.id">
                        <div class="name mb10">{{ item.name }}</div>
                        <div class="row wrap">
                            <div
                                :class="['spec-item', 'br60' ,'sm', { checked : specitem.checked }]"
                                v-for="specitem in item.spec_value"
                                :key="specitem.id"
                                @click="choseSpecItem(item.id, specitem.id)"
                            >{{ specitem.value }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="good-num row-between ml10 mr10">
                <div class="label">数量</div>
                <van-stepper
                    :value="goodsNum"
                    :min="1"
                    :max="checkedGoods.stock"
                    input-class="input"
                    plus-class="plus"
                    input-width="45px"
                    button-size="29px"
                    minus-class="minus"
                    @change="onChange"
                />
            </div>
        </div>
        <div class="footer row-between bg-white">
            <button
                v-if="showAdd"
                class="add-cart br60 white btn"
                size="lg"
                @click="onClick('addcart')"
            >加入购物车</button>
            <button
                v-if="showBuy"
                class="bg-primary br60 white btn"
                size="lg"
                @click="onClick('buynow')"
            >立即购买</button>
            <button
                v-if="showBargain"
                class="bg-primary br60 white btn"
                size="lg"
                @click="onClick('bargain')"
            >
                确定
            </button>
        </div>
    </van-popup>
</template>

<script>
import { ImagePreview } from "vant";
export default {
    name: "GoodsSpec",
    components: {},
    props: {
        show: {
            type: Boolean
        },
        goods: {
            type: Object,
            default: () => {}
        },
        showAdd: {
            type: Boolean,
            default: true
        },
        showBuy: {
            type: Boolean,
            default: true
        },
        showBargain: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            checkedGoods: {},
            specList: [],
            goodsNum: 1,
            showsepc: false
        };
    },
    created() {},
    methods: {
        onClick(type) {
            let { checkedGoods, goodsNum } = this;
            checkedGoods.goodsNum = goodsNum;
            this.$emit(type, checkedGoods);
        },
        onChange(e) {
            this.goodsNum = e;
        },
        previewImage(url) {
            ImagePreview([url]);
        },
        choseSpecItem(id, specid ) {
            let { specList } = this;
            specList.forEach(item => {
                if (item.spec_value && item.id == id) {
                    item.spec_value.forEach(specitem => {
                        specitem.checked = 0;
                        if (specitem.id == specid) {
                            specitem.checked = 1;
                        }
                    });
                }
            });
            this.specList = [...specList];
        }
    },
    watch: {
        show:{
            immediate: true,
            handler(val) {
                this.showsepc = val
            }
        },
        goods: {
            immediate: true,
            handler(value, oldValue) {
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
                this.specList = specList;
                this.checkedGoods = goodsItem.length ? goodsItem[0] : {};
            }
        },
        specList(value) {
            const { goods_item } = this.goods;
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
            let key = keyArr.join(",");
            let index = goods_item.findIndex(item => {
                return item.spec_value_ids == key;
            });
            if (index == -1) return;
            this.checkedGoods = goods_item[index];
            this.$emit("change", goods_item[index]);
        }
    }
};
</script>
<style lang="scss" scoped>
.spec-popup {
    &.van-popup--bottom.van-popup--round {
        border-radius: 10px 10px 0 0;
    }
    .header {
        padding: 17px;
        padding-right: 35px;
        align-items: flex-start;
        border-bottom: $--border-base;
        .goods-img {
            width: 80px;
            height: 80px;
            flex: none;
        }
    }
    .main {
        .scroll-wrap {
            max-height: 250px;
            overflow-y: auto;
        }
        .spec-list {
            padding: 15px 10px;
            .spec-item {
                line-height: 26px;
                padding: 0 10px;
                background-color: $--background-color-gray;
                margin: 0 10px 10px 0;
                &.checked {
                    background-color: $--color-primary;
                    color: #fff;
                }
            }
        }
    }
    .footer {
        height: 60px;
        padding: 0 15px;
        margin-top: 40px;
        .btn {
            margin: 0 5px;
            flex: 1;
        }
        .add-cart {
            background-color: $--color-yellow;
        }
    }
    .first-price {
        font-size: 23px;
    }
}
</style>