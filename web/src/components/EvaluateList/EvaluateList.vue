<template>
    <div class="evaluate-list">
        <div v-if="isEmpty" class="column-center" style="padding-top: 100px">
            <img class="img-null" src="@A/images/null_news.png" />
            <span class="lighter">暂无评价～</span>
        </div>
        <van-list
            v-else
            v-model="loading"
            :finished="finished"
            finishedText="没有更多了"
            :error="error"
            @load="$getEvaluateList"
        >
            <template v-if="type == 1">
                <div
                    class="evaluate-item bg-white"
                    v-for="(item, index) in evaluateList"
                    :key="index"
                >
                    <div class="evaluate-goods-item">
                        <div class="evaluate-goods-show row" @click="goPage('goodsDetail', {id: item.goods_id})">
                            <div class="goods-img">
                                <van-image
                                    width="100%"
                                    height="100%"
                                    lazy-load
                                    radius="3px"
                                    :src="item.image"
                                />
                            </div>
                            <div class="goods-desc">
                                <div class="goods-name two-txt-cut nr">{{item.goods_name}}</div>
                                <div class="row-between mt10">
                                    <div class="sm">
                                        <price-slice
                                            :showSubscript="true"
                                            first-class="md"
                                            second-class="md"
                                            :price="item.goods_price"
                                            :weight="500"
                                        />
                                    </div>
                                    <div class="nr">x{{item.goods_num}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="evaluate-footer row-end" @click="goPage('commodityEvaluation',  {id: item.id})">
                            <div class="btn row-center primary br60">评价商品</div>
                        </div>
                    </div>
                </div>
            </template>
            <template v-else>
                <div
                    class="evaluate-item bg-white"
                    v-for="(item, index) in evaluateList"
                    :key="index"
                >
                    <div class="evaluate-goods-show">
                        <div class="row">
                            <div class="goods-img">
                                <van-image
                                    width="100%"
                                    height="100%"
                                    lazy-load
                                    radius="3px"
                                    :src="item.image"
                                />
                            </div>
                            <div class="goods-desc">
                                <div class="goods-name two-txt-cut nr">{{item.goods_name}}</div>
                                <div class="goods-rank row" style="margin-top: 17px">
                                    <div class="sm">评分</div>
                                    <div style="margin-left: 7px">
                                        <van-rate v-model="item.goods_comment" readonly size="13px"></van-rate>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="goods-evaluate"
                            v-if="item.comment"
                        >{{item.comment}}</div>
                    </div>
                </div>
            </template>
        </van-list>
    </div>
</template>

<script>
import {
    getBeforeGoodsCommentList,
    getAfterGoodsCommentList,
    getOrderCommentList
} from "@/api/user";

export default {
    name: "EvaluateList",
    props: {
        type: {
            type: Number,
        },
    },
    data() {
        return {
            loading: false,
            finished: false,
            error: false,
            evaluateList: [],
            isEmpty: false,
            page: 1,
        };
    },
    created() {
        
    },
    mounted() {
        this.$getEvaluateList();
    },
    methods: {
         goPage(name,query) {
            this.$router.push({
                name,
                query
            })
        },
        $getEvaluateList() {
            let { page, type, evaluateList, finished } = this;
            this.loading = true;
            if (finished) return;
            let requestData = { page_no: page, type: type };
            getOrderCommentList(requestData).then(res => {
                if(res.code == 1) {
                    this.loading = false;
                    let {list, more} = res.data;       
                    evaluateList.push(...list);
                    this.evaluateList = evaluateList;
                    this.page = ++page;
                    this.$nextTick(() => {
                        if(!more) {
                            this.finished = true;
                        }
                        if(this.evaluateList.length <= 0) {
                            this.isEmpty = true;
                            return;
                        }
                    })
                }
            })
        },
    },
};
</script>

<style lang="scss" scoped>
.evaluate-list {
    .evaluate-item {
        margin-top: 10px;
        .evaluate-header {
            padding: 10px 12px;
            .shop-icon {
                width: 20px;
                height: 20px;
            }
            .store-name {
                font-weight: bold;
                line-height: 20px;
            }
        }
        .evaluate-goods-item {
            .evaluate-goods-show {
                padding: 10px 12px;
                .goods-img {
                    height: 80px;
                    width: 80px;
                    flex: none;
                }
                .goods-desc {
                    margin-left: 12px;
                    flex: 1;
                }
                .sale-status {
                    padding: 10px 30px;
                    background-color: #f6f6f6;
                }
            }
            .evaluate-footer {
                padding: 0 12px 11px;
                .btn {
                    padding: 3px 17px;
                    font-family: PingFang SC;
                    border: 1px solid $--color-primary;
                }
                .grey-btn {
                    border: 1px solid #cccccc;
                    padding: 6px 17px;
                }
            }
        }
        .evaluate-goods-show {
            padding: 10px 12px;
            .goods-img {
                height: 80px;
                width: 80px;
                flex: none;
            }
            .goods-desc {
                margin-left: 12px;
            }
        }
        .goods-evaluate {
            margin-top: 10px;
            padding: 10px 10px 8px;
            background-color: #f6f6f6;
            border-radius: 5px;
        }
    }
    .van-tag {
        width: 33px;
        height: 17px;
        font-size: 11px !important;
        background: linear-gradient(
            270deg,
            rgba(255, 80, 88, 1) 0%,
            rgba(255, 166, 48, 1) 100%
        );
        padding: 0 !important;
        justify-content: center;
    }
}
</style>