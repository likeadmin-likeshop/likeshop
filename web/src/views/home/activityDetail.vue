<template>
    <div class="activity-detail-contain">
        <div class="header row-start"  v-if="goodsList.length">
            <div class="white header-title mt10">{{title}}  <span class="white xxs">{{name}}</span></div>
        </div>
        <div class="content">
            <div class="goods-container" v-if="!empty">
                <van-list      
                    v-model="loading"
                    :finished="finished"
                    finished-text="没有更多了"
                    @load="$getActivityGoodsLists"
                >
                    <!-- <goods-lists type="hot" :lists="goodsList" /> -->
                    <router-link :to="{name: 'goodsDetail', query: {
                        id: item.id
                    }}" class="goods-item bg-white row mb10" v-for="item in goodsList" :key="item.id">
                        <div class="goods-img">
                            <van-image width="100%" height="100%" radius="6px" lazy-load :src="item.image" />
                        </div>
                        <div class="goods-info ml10">
                            <div class="goods-name two-txt-cut normal nr mb5">{{item.name}}</div>
                            <div class="count-buy br60 xxs">累计{{item.sales_sum}}人购买</div>
                            <div class="row-between mt5">
                                <div class="row">
                                    <price-slice
                                        :price="item.price"
                                        showSubscript
                                        subScriptClass="sm"
                                        firstClass="xl"
                                        secondClass="sm"
                                        :color="primaryColor"
                                    />
                                    <price-slice
                                        class="ml5"
                                        :price="item.market_price"
                                        showSubscript
                                        subScriptClass="xs"
                                        firstClass="xs"
                                        secondClass="xs"
                                        color="#999999"
                                    />
                                </div>
                                <div class="buy-btn row-center br60">
                                    马上抢
                                </div>
                            </div>
                        </div>
                    </router-link>
                </van-list>
            </div>
            <div class="data-null column-center"  v-else >
                <img class="img-null" src="@A/images/goods_null.png" alt="">
                <div class="muted nr">
                    暂无活动商品～
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GoodsLists from "@C/GoodsList";
import {getActivityGoodsLists} from '@API/store'
export default {
    name: "activityDetail",
    components: {
        GoodsLists
    },
    data() {
        return {
            loading: true,
            finished: false,
            goodsList: [],
            empty: false,
            page: 1,
            id: -1,
            title: '',
            name: ''
        }
    },
    methods: {
        $getActivityGoodsLists() {
            let {finished, goodsList} = this;
            this.loading = true
            if(finished) return;
            getActivityGoodsLists({
                id: this.id,
                page_no: this.page
            }).then(res => {
                if(res.code == 1) {
                    let {more, list} = res.data;
                    this.loading = false;
                    goodsList.push(...list);
                    this.goodsList = goodsList;
                    this.page ++;
                    if(!more) {
                        this.finished = true
                    }
                    if(goodsList.length <= 0) {
                        this.empty = true;
                        return;
                    }
                }
            })
        }
    },
    created() {
        document.title = this.$route.query.title;
        this.id = this.$route.query.id;
        this.name = this.$route.query.name
    },
    mounted() {
        this.$getActivityGoodsLists()
    }
}
</script>

<style lang="scss" scoped>
.activity-detail-contain {
    .header {
        background-image: url(../../assets/images/zhuanqu_bg.png);
        background-size: 100% 100%;
        height: 170px;
        width: 100%;
        padding-left: 12px;
        .header-title {
            font-size: 23px;
        }
    }
    .content {
        margin-top: -120px;
        padding: 0 10px;
        .goods-container {
            .goods-item {
                padding: 15px 10px;
                border-radius: 5px;
                .goods-img {
                    width: 90px;
                    height: 90px;
                    flex: none;
                }
                .goods-info {
                    flex: 1;
                    .goods-name {
                        line-height: 20px;
                    }
                    .count-buy {
                        background-color: #FEF0DA;
                        color: #F77A0C;
                        padding: 2px 9px;
                        display: inline-flex;
                    }
                    .buy-btn {
                        padding: 0px 17px;
                        height: 31px;
                        color: white;
                        background: linear-gradient(90deg, #F95F2F 0%, #FF2C3C 100%);
                    }
                }
            }
        }
        .data-null {
            padding-top: 200px;
        }
    }
}
</style>