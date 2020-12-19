<template>
    <div class="order-list">
        <div v-if="isEmpty" class="column-center" style="padding-top: 100px">
            <img class="img-null" src="@A/images/goods_null.png" />
            <span class="lighter">暂无订单</span>
        </div>
        <van-list
            v-else
            v-model="loading"
            :finished="finished"
            finishedText="没有更多了"
            :error="error"
            @load="$getOrderList"
        >
            <div
                class="order-item bg-white mt10"
                v-for="item in orderList"
                :key="item.id"
                @click="goPage('orderDetails', { id: item.id })"
            >
                <div class="header row-between">
                    <div class="row">
                        <div class="mr5" v-if="item.order_type == 1">
                            <van-tag plain :color="primaryColor">秒杀</van-tag>
                        </div>
                        订单编号：{{ item.order_sn }}
                    </div>
                    <div
                        :class="[
                            'muted',
                            'sm',
                            item.order_status == 4 ? 'muted' : 'primary',
                        ]"
                    >
                        {{ orderStatus(item.order_status) }}
                    </div>
                </div>
                <div class="con">
                    <div class="order-goods">
                        <order-goods :list="item.order_goods" />
                    </div>
                    <div class="all-price row-end">
                        <div class="muted xs">共1件商品，总金额：</div>
                        <div class="md" style="font-weight: bold">
                            <price-slice
                                :showSubscript="true"
                                :price="item.order_amount"
                                :weight="500"
                            />
                        </div>
                    </div>
                </div>
                <div
                    class="footer row"
                    v-if="
                        item.cancel_btn ||
                        item.delivery_btn ||
                        item.take_btn ||
                        item.del_btn ||
                        item.pay_btn
                    "
                >
                    <div style="flex: 1">
                        <div
                            class="primary row sm"
                            v-if="
                                item.order_cancel_time * 1000 - Date.now() > 0
                            "
                        >
                            <van-count-down
                                class="count-down"
                                :time="
                                    item.order_cancel_time * 1000 - Date.now()
                                "
                                format="mm"
                            />分钟后订单自动关闭
                        </div>
                    </div>
                    <div v-if="item.cancel_btn">
                        <button
                            size="sm"
                            class="plain br60 lighter"
                            @click.stop="cancelOrder(item.id)"
                        >
                            取消订单
                        </button>
                    </div>
                    <div
                        v-if="item.delivery_btn"
                        @click.stop="goPage('goodsLogistics', { id: item.id })"
                    >
                        <button size="sm" class="plain br60 lighter">
                            查看物流
                        </button>
                    </div>
                    <div v-if="item.take_btn" class="ml10">
                        <button
                            size="sm"
                            class="plain br60 primary red"
                            @click.stop="comfirmOrder(item.id)"
                        >
                            确认收货
                        </button>
                    </div>
                    <div v-if="item.del_btn">
                        <button
                            size="sm"
                            class="plain br60 lighter"
                            @click.stop="delOrder(item.id)"
                        >
                            删除订单
                        </button>
                    </div>
                    <div v-if="item.pay_btn" class="ml10">
                        <button
                            size="sm"
                            class="bg-primary br60 white"
                            @click.stop="payNow(item.id)"
                        >
                            立即付款
                        </button>
                    </div>
                    <div v-if="item.comment_btn" class="ml10">
                        <button size="sm" class="plain br60 primary red">
                            去评价
                        </button>
                    </div>
                </div>
            </div>
        </van-list>
        <van-dialog
            use-slot
            :value="showCancel"
            :showCancelButton="true"
            :confirmButtonText="type == 0 || type == 2 ? '确定' : '删除'"
            :confirm-button-color="primaryColor"
            @confirm="onConfirm"
            @cancel="onShowDialog"
        >
            <div class="column-center tips-dialog">
                <img class="icon-lg" src="@A/images/icon_warning.png" />
                <div style="margin-top: 15px" v-if="type == 0">
                    确认取消该订单吗？
                </div>
                <div style="margin-top: 15px" v-if="type == 1">
                    确认删除该订单吗？
                </div>
                <div style="margin-top: 15px" v-if="type == 2">
                    确认收货吗？
                </div>
            </div>
        </van-dialog>
    </div>
</template>

<script>
import wx from "weixin-js-sdk";
import { getOrderList, cancelOrder, delOrder, confirmOrder } from "@/api/user";
import OrderGoods from "@C/OrderGoods";
import { prepay } from "@/api/app";
import { wxPay } from "@/utils/wxjssdk";
export default {
    name: "OrderList",
    components: {
        OrderGoods,
    },
    props: {
        orderType: {
            type: String,
        },
    },
    data() {
        return {
            loading: true,
            finished: false,
            error: false,
            orderList: [],
            showCancel: false,
            isEmpty: false,
            type: "",
            page: 1,
        };
    },
    created() {
        this.$getOrderList();
    },
    methods: {
        goPage(name, query) {
            this.$router.push({
                name,
                query,
            });
        },
        onShowDialog() {
            this.showCancel = !this.showCancel;
        },
        delOrder(id) {
            this.id = id;
            this.type = 1;
            this.$nextTick(() => {
                this.onShowDialog();
            });
        },
        cancelOrder(id) {
            this.id = id;
            this.type = 0;
            this.$nextTick(() => {
                this.onShowDialog();
            });
        },
        comfirmOrder(id) {
            this.id = id;
            this.type = 2;
            this.$nextTick(() => {
                this.onShowDialog();
            });
        },
        async onConfirm() {
            let res = null;
            switch (this.type) {
                case 0:
                    res = await cancelOrder(this.id);
                    break;
                case 1:
                    res = await delOrder(this.id);
                    break;
                case 2:
                    res = await confirmOrder(this.id);
                    break;
            }
            if (res.code == 1) {
                this.onShowDialog();
                this.$toast({ message: res.msg });
                this.reflesh();
            }
        },
        reflesh() {
            this.page = 1;
            this.orderList = [];
            this.finished = false;
            this.$getOrderList();
        },
        $getOrderList() {
            let { page, orderType, orderList, finished } = this;
            this.loading = true;
            if (finished) return;
            getOrderList({
                type: orderType,
                page_no: page,
            }).then((res) => {
                if (res.code == 1) {
                    this.loading = false;
                    let { list, more } = res.data;
                    orderList.push(...list);
                    this.orderList = orderList;
                    this.page = ++page;
                    this.$nextTick(() => {
                        if (!more) {
                            this.finished = true;
                        }
                        if (orderList.length <= 0) {
                            this.isEmpty = true;
                            return;
                        }
                    });
                } else {
                    this.error = true;
                }
            });
        },
        payNow(id) {
            this.$toast({
                type: "loading",
                message: "请稍等...",
                duration: 0,
            });
            prepay({
                from: "order",
                order_id: id,
            }).then((res) => {
                this.$toast.clear();
                if (res.code == 1) {
                    let opt = res.data;
                    wxPay(opt)
                        .then((res) => {
                            this.$toast({ message: "支付成功" });
                            this.reflesh();
                        })
                        .catch(() => {
                            
                        });
                }
            });
        },
    },
    computed: {
        orderStatus() {
            return function (status) {
                var text = "";
                switch (status) {
                    case 0:
                        text = "待支付";
                        break;
                    case 1:
                        text = "待发货";
                        break;
                    case 2:
                        text = "待收货";
                        break;
                    case 3:
                        text = "已完成";
                        break;
                    case 4:
                        text = "订单已关闭";
                        break;
                }
                return text;
            };
        },
    },
};
</script>

<style lang="scss" scoped>
.order-list {
    min-height: calc(100vh - 80px);
    padding: 0 10px;
    overflow: hidden;
    .count-down {
        color: $--color-primary;
        font-size: 13px;
    }
    .order-item {
        border-radius: 5px;
        .header {
            height: 40px;
            padding: 0 12px;
            border-bottom: 1px dotted $--border-color-base;
            .shop-icon {
                width: 20px;
                height: 20px;
            }
        }
        .con {
            .order-goods {
                .item {
                    padding: 10px 12px;
                    .goods-img {
                        width: 90px;
                        height: 90px;
                        flex: none;
                    }
                }
            }
            .all-price {
                text-align: right;
                padding: 10px 12px;
            }
        }
        .footer {
            height: 50px;
            border-top: 1px dotted $--border-color-base;
            padding: 0 12px;
            .plain {
                width: 90px;
                height: 31px;
                border: 1px solid #999999;
            }
            .red {
                border-color: $--color-primary;
            }
        }
    }
    .tips-dialog {
        height: 115px;
        width: 100%;
    }
   
}
</style>