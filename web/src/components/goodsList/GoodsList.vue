<template>
    <div class="goods-list">
        <div v-if="type === 'double'" class="goods-double row-between">
            <div
                class="item bg-white mt10"
                v-for="(item) in lists"
                :key="item.id"
                @click="goPage(item.id, item.shop_id)"
            >
                <div class="goods-img">
                    <van-image width="100%" height="100%" radius="5px" lazy-load :src="item.image" />
                </div>
                <div class="goods-info">
                    <div class="goods-name two-txt-cut">{{item.name}}</div>
                    <div class="price mt5 row">
                        <div class="primary sm mr5">
                            <!-- <span class="sm">￥</span> -->
                            <price-slice
                                :showSubscript="true"
                                first-class="first-price"
                                second-class="second-price"
                                :price="item.price"
                                :weight="500"
                            />
                            <!-- <span class="~xxl">{{item.min_price}}</span> -->
                        </div>
                        <div class="muted xs line-through">
                            <price-slice
                                :showSubscript="true"
                                :price="item.market_price"
                                :weight="500"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="type === 'hot'" class="goods-hot">
            <div class="item bg-white mt10 row" v-for="(item, index) in lists" :key="index" @click="goPage(item.id, item.shop_id)">
                <div class="goods-img">
                    <van-image width="100%" height="100%" radius="3px" lazy-load :src="item.image" />
                </div>
                <div class="goods-info ml10">
                    <div class="goods-name two-txt-cut mb5">{{item.name}}</div>
                    <span class="sale br60 xxs">已有{{item.sales_sum}}人购买</span>
                    <div class="row-between mt5">
                        <div class="price mt5 row">
                            <div class="primary mr5">
                                <price-slice
                                showSubscript
                                firstClass="xs"
                                subScriptClass="sm"
                                :price="item.price"
                                />
                            </div>
                            <div class="muted xs line-through">
                                <price-slice
                                showSubscript
                                firstClass="xs"
                                subScriptClass="xs"
                                :price="item.market_price || item.max_price"
                                />
                            </div>
                        </div>
                        <img class="icon-md" src="@A/images/icon_go_red.png" />
                    </div>
                </div>
                <img class="paixu" :src="require(`@A/images/No.${index < 3 ? index : 3}.png`)" />
                <div class="index xxs">{{ index + 1 }}</div>
            </div>
        </div>
        <div v-if="type === 'one'" class="goods-one mt10">
            <div class="item bg-white row" v-for="(item) in lists" :key="item.id" @click="goPage(item.id, item.shop_id)">
                <div class="goods-img" style="width: 200rpx;height:200rpx;">
                    <van-image
                        width="200rpx"
                        height="200rpx"
                        radius="6rpx"
                        lazy-load
                        :src="item.image"
                    />
                </div>
                <div class="goods-info ml10">
                    <div class="goods-name two-txt-cut mb5">{{item.name}}</div>
                    <div class="row-between mt5">
                        <div class="price mt5 row">
                            <div class="primary mr5">
                                <price-slice
                                showSubscript
                                firstClass="xxl"
                                subScriptClass="sm"
                                :price="item.price"
                                :weight="500"
                                />
                            </div>
                            <div class="muted xs line-through">
                                <price-slice
                                showSubscript
                                firstClass="xs"
                                subScriptClass="xs"
                                :price="item.market_price || item.max_price"
                                :weight="500"
                                />
                            </div>
                        </div>
                        <!-- <div class="~muted ~xs">已售1575套</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PriceSlice from '@C/PriceSlice'
export default {
    name: "goodsList",
    components: {
        PriceSlice
    },
    props: {
        type: {
            type: String,
            default: "double",
        },
        lists: {
            type: Array,
            default: () => [],
        },
        shopId: {
            type: Number | String,
        }
    },
    methods: {
        goPage(id) {
            this.$router.push({
                name: "goodsDetail",
                query: {
                    id,
                },
            });
        },
    },
};
</script>
<style lang="scss" scoped>
.icon-md {
    width: 22px;
    height: 22px;
    flex: none;
}
.goods-list {
    .goods-double {
        flex-wrap: wrap;
        padding: 0 10px;
        .item {
            width: 173px;
            border-radius: 5px;
            .goods-img {
                width: 173px;
                height: 173px;
            }
            .goods-info {
                padding: 5px;
                .goods-name {
                }
            }
        }
    }
    .goods-hot {
        .item {
            position: relative;
            padding: 15px 10px;
            border-radius: 5px;
            .goods-info {
                flex: 1;
                margin-left: 10px;
                .sale {
                    padding: 2px 9px;
                    color: #f79c0c;
                    background-color: rgba(247, 156, 12, 0.1);
                }
            }
            .goods-img {
                width: 90px;
                height: 90px;
                flex: none;
            }
            & .paixu,
            & .index {
                position: absolute;
                top: 0;
                left: 14px;
                width: 25px;
                height: 27px;
                line-height: 30px;
                text-align: center;
                color: #621e09;
            }
        }
    }
    .goods-one {
        .item {
            padding: 10px;
            border-bottom: $--border-base;
            .goods-img {
                width: 80px;
                height: 80px;
                flex: none;
            }
            .goods-name {
                width: 245px;
                text-align: left;
            }
        }
    }
    .goods-info .price {
        align-items: baseline;
    }
    /deep/.first-price {
        font-size: 17px;
    }
    /deep/.second-price {
        font-size: 13px;
    }
}
</style>