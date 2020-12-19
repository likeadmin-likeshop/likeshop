<template>
    <div class="order-goods bg-white">
        <div class="item-wrap" v-for="item in list" :key="item.id" @click="link ? goPage('goodsDetail', {id: item.goods_id}) : ''">
            <div class="item row">
                <div class="goods-img">
                    <van-image
                        width="100%"
                        radius="5px"
                        height="100%"
                        :src="item.image_str || item.image"
                    />
                </div>
                <div class="goods-info ml10">
                    <div class="goods-name two-txt-cut mb5">
                         {{item.goods_name || item.name}}</div>
                    <div class="goods-spec xs muted mb10">{{item.spec_value_str}}</div>
                    <div class="row-between">
                        <div class="goods-price">
                            <div class="lg primary row">
                                <span class="sm">￥</span>
                                <div class="xl">
                                    <price-slice :weight="500" :price="item.goods_price" />
                                </div>
                            </div>
                        </div>
                        <div class="goods-num sm">x{{item.goods_num}}</div>
                    </div>
                </div>
            </div>
            <div class="footer row" v-if="link && item.comment_btn">
                <div style="flex: 1"></div>
                <div  v-if="item.comment_btn" @click="goPage('commodityEvaluation', {id: item.id})">
                    <button size="xs" class="plain br60" >评价晒图</button>
                </div>
                <div class="ml10">
                    <button size="xs" class="plain br60" @click="goPage('applyAfterSales', { item_id: item.item_id, order_id: item.order_id})">申请退款</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "OrderGoods",
    components: {},
    props: {
        list: {
            type: Array,
            default: () => [],
        },
        link: {
            type: Boolean,
            default: false,
        },
        shopId: {
            type: Number,
        },
    },
    methods: {
        goPage(name, query) {
            this.$router.push({
                name,
                query
            });
        },
    },
};
</script>
<style lang="scss" scoped>
.order-goods {
    .item {
        padding: 10px 12px;
        .goods-img {
            width: 90px;
            height: 90px;
            flex: none;
        }
        .goods-info {
            flex: 1;
        }
    }
    .footer {
        height: 35px;
        align-items: flex-start;
        padding: 0 12px;
    }
    .footer .plain {
        border: 1px solid #999;
        height: 26px;
        line-height: 26px;
        font-size: 13px;
    }
}
</style>