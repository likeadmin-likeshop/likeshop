
<template>
    <div class="goods-like bg-white">
        <div class="header row-center">
            <div class="line mr10"></div>
            <img
                class="header-icon mr10"
                src="@A/images/home_icon_recommend.png"
                alt=""
            />
            <div class="title xxl normal bold">猜你喜欢</div>
            <div class="line ml10"></div>
        </div>
        <div class="goods">
            <div class="scroll-wrap row">
                <div
                    class="goods-item"
                    v-for="item in lists"
                    :key="item.id"
                    @click="goPage('goodsDetail', { id: item.id })"
                >
                    <div class="goods-img">
                        <van-image
                            :src="item.image"
                            width="100%"
                            height="100%"
                            radius="5px"
                            class="mb5"
                        />
                    </div>
                    <div class="goods-name one-txt-cut mt5">
                        {{ item.name }}
                    </div>
                    <div class="price row">
                        <div class="primary mr5 xxs">
                            <price-slice
                                :showSubscript="true"
                                first-class="nr"
                                :price="item.price"
                            />
                        </div>
                        <div class="xxs muted line-through">
                            <price-slice
                                :showSubscript="true"
                                :weight="500"
                                :price="item.market_price"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "GoodsLike",
    components: {},
    props: {
        
        lists: {
            type: Array,
            default: () => [],
        },
    },
    data() {
        return {};
    },
    created() {},
    methods: {
        goPage(name, query) {
            this.$router.push({
                name,
                query,
            });
        },
    },
    watch: {
        $route: function (to, from) {
            //执行数据更新查询
            location.reload();
        },
    },
};
</script>
<style lang="scss" scoped>
.goods-like {
    .header {
        padding: 12.5px;
        .line {
            width: 29px;
            height: 1px;
            background-color: $--border-color-base;
        }
        .header-icon {
            width: 19px;
            height: 19px;
        }
        .title {
            line-height: 25px;
        }
    }
    .goods {
        padding-bottom: 10px;
        padding-top: 12px;
        .scroll-wrap {
            overflow-x: auto;
            overflow-y:hidden ;
            &::-webkit-scrollbar {
                display: none;
            }
        }
        .goods-item {
            width: 120px;
            margin-left: 10px;
            display: inline-block;
            &:last-of-type {
                padding-right: 10px;
            }
            .price {
                align-items: baseline;
            }
            .goods-img {
                width: 120px;
                height: 120px;
            }
        }
    }
}
</style>