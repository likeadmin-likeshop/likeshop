<template>
    <div class="promote-order">
        <!-- <div class="promote-header row white">
            <div class="deal-num column">
                <div class="num">21</div>
                <div class="explain sm">成交笔数</div>
            </div>
            <div class="income-num column">
                <price-slice
                    showSubscript
                    subScriptClass="sm"
                    firstClass="order-price-size"
                    secondClass="order-price-size"
                    price="64.51"
                ></price-slice>
                <div class="explain sm">累计预估收益</div>
            </div>
        </div> -->
        <div class="content">
            <div class="order-container" v-if="!isEmpty">
                <van-list
                    v-model="loading"
                    :finished="finished"
                    finished-text="没有更多了"
                    @load="$getPromoteOrder"
                >
                    <div class="order-item bg-white" v-for="(item) in list in list" :key="item.order_sn">
                        <div class="order-header row-between">
                            <div>订单编号:{{item.order_sn}}</div>
                            <div class="white guide-shop-btn row-center">{{item.status}}</div>
                        </div>
                        <div class="order-content row">
                            <div class="order-goods-img">
                                <van-image width="100%" height="100%" radius="6px" :src="item.image" ></van-image>
                            </div>
                            <div class="order-goods-info ml10">
                                <div class="name row sm">{{item.goods_name}}</div>
                                <div class="row-between mt5 mb5">
                                    <div class="xs muted">数量<span class="normal nr">{{item.goods_num}}</span></div>
                                    <div class="xs">
                                        付款金额 
                                        <price-slice
                                            :price="item.pay_price"
                                            showSubscript
                                            subScriptClass="nr"
                                            firstClass="nr"
                                            secondClass="nr"
                                        />
                                    </div>
                                </div>
                                <div class="pre-income muted">预估收益 
                                    <price-slice
                                        showSubscript
                                        subScriptClass="nr"
                                        firstClass="nr"
                                        secondClass="nr"
                                        :color="primaryColor"
                                        weight="bold"
                                        :price="item.money"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="order-footer row-between">
                            <div class="time muted">{{item.create_time}}</div>
                        </div>
                    </div>
                </van-list>
            </div>
            <div v-else class="data-null column-center">
                <div class="img-null">
                    <img src="@A/images/null_order.png" alt="">
                </div>
                <div class="muted sm">暂无分销订单～</div>
            </div>
        </div>
    </div>
</template>

<script>
import {getPromoteOrder} from '@API/user'
import PriceSlice from '../PriceSlice/PriceSlice.vue'
export default {
    name: "PromoteOrder",
    props: {
        orderType: {
            type: String,
        },
    },
    data() {
        return {
            list: [],
            page: 1,
            loading: false,
            finished: false,
            isEmpty: false,
        }
    },
    methods: {
        $getPromoteOrder() {
            let {finished} = this
            this.loading = true;
            if(finished) return;
            getPromoteOrder({status: this.orderType}).then(res => {
                if(res.code == 1) {
                    let {more, page} = res.data;
                    this.loading = false;
                    this.list.push(...res.data.list);
                    this.page ++;
                    if(!more) {
                        this.finished = true;
                    }
                    if(this.list.length <= 0) {
                        this.isEmpty = true;
                        return;
                    }
                }
            })
        }
    },
    created() {

    },
    mounted() {
        this.$getPromoteOrder();
    }
}
</script>

<style lang="scss" scoped>
    .promote-order {
        .promote-header {
            height: 120px;
            background-color: $--color-primary;
            padding-top: 30px;
            .deal-num {
                flex: 1;
                align-self: flex-start;
                .num {
                    font-size: 21px;
                    line-height: 17px;
                }
                .explain {
                    line-height: 17px;
                    margin-top: 8px;
                }
            }
            .income-num {
                flex: 1;
                align-self: flex-start;
                .explain {
                    line-height: 17px;
                    margin-top: 6px;
                }
            }
        }
        .content {
            padding: 0 10px;
            .order-container {
                .order-item {
                    border-radius: 7px;
                    .order-header {
                        padding: 10px 15px;
                        border-bottom: 1px solid $--border-color-base;
                        .guide-shop-btn {
                            // background: linear-gradient(80deg, #F95F2F 0%, #FF2C3C 100%);
                            // border-radius: 2px;
                            // width: 67px;
                            // height: 21px;
                            color: #F95F2F;
                        }
                    }
                    .order-content {
                        padding: 10px 15px 10px 10px;
                        border-bottom: 1px solid $--border-color-base;
                        .order-goods-img {
                            width: 70px;
                            height: 70px;
                            flex: none;
                        }
                        .order-goods-info {
                            text-align: left;
                            .name {
                                line-height: 18px;
                            }
                            .pre-income {
                                line-height: 17px;
                                margin-top: 4px;
                            }
                        }
                    }
                    .order-footer {
                        padding: 10px 15px 10px 10px;
                        .static {
                            color: #F95F2F;
                        }
                        .wait-return {
                            color: #F95F2F;
                        }
                    }
                }
            }
            .data-null {
                padding-top: 100px;
                .img-null {
                    img {
                        width: 100%;
                        height: 100%;
                    }
                }
            }
        }
    }
</style>