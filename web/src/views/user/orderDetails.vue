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
    <div class="order-details">
        <div class="header-bg"></div>
        <div class="header">
            <div class="item" v-if="orderDetail.order_status == 0">
                <div class="white lg mb5">等待买家付款</div>
                <div class="white sm row"  v-if="cancelTime">
                    支付剩余
                    <van-count-down
                        class="count-down"
                        @finish="$getOrderDetail"
                        :time="cancelTime"
                        format="mm分ss秒"
                    />自动关闭
                </div>
            </div>
            <div class="item" v-if="orderDetail.order_status == 1">
                <div class="white lg mb5">等待商家发货</div>
                <div class="white sm">您的商品正在打包中，请耐心等待…</div>
            </div>
            <div class="item" v-if="orderDetail.order_status == 2">
                <div class="white lg mb5">已发货</div>
                <div class="white sm">您的商品正在路中，请耐心等待…</div>
            </div>
            <div class="item" v-if="orderDetail.order_status == 3">
                <div class="white lg mb5">已完成</div>
                <div class="white sm">商品已签收，期待再次购买！</div>
            </div>
            <div class="item" v-if="orderDetail.order_status == 4">
                <div class="white lg mb5">订单已关闭</div>
                <!-- <div class="white sm">原因：超时未支付</div> -->
            </div>
        </div>
        <div class="address-wrap row contain">
            <img class="icon mr10" src="@A/images/pay_address.png" />
            <div class="address">
                <div>
                    <span class="name md mr5">{{orderDetail.consignee}}</span>
                    <span class="phone md">{{orderDetail.mobile}}</span>
                    <div class="area sm mt5 lighter">{{orderDetail.delivery_address}}</div>
                </div>
            </div>
        </div>
        <div class="bargain contain column-center" v-if="false">
            <div class="bargain-header row">
                <div class="line"></div>
                <div class="title md normal ml5 mr5">支付成功即可完成拼团</div>
                <div class="line"></div>
            </div>
            <div class="bargain-contain row">
                <div class="bargain-people">
                    <van-image src="" width="40px" height="40px" round />
                    <div class="bargain-tag bg-primary white br60 row-center ">团长</div>
                </div>
            </div>
        </div>
        <div class="goods contain">
            <order-goods
                :show-comment="orderDetail.comment_btn"
                :show-refund="orderDetail.refund_btn"
                :link="true"
                :list="orderDetail.order_goods"
                :shopId="9"
            />
        </div>
        <div class="price contain">
            <div class="row-between">
                <div>商品金额</div>
                <div class="black">
                    ¥
                    <price-slice :price="orderDetail.goods_price" />
                </div>
            </div>
            <div class="row-between">
                <div>运费</div>
                <div class="black">
                    +¥
                    <price-slice :price="orderDetail.shipping_price" />
                </div>
            </div>
            <div class="row-between" v-if="orderDetail.discount_amount != 0">
                <div>优惠券</div>
                <div class="primary">
                    -¥
                    <price-slice :price="orderDetail.discount_amount" />
                </div>
            </div>
            <div class="row-end">
                <div class="lighter">实付金额：</div>
                <div class="primary xl">
                    ¥
                    <price-slice :price="orderDetail.order_amount" />
                </div>
            </div>
        </div>
        <div class="order-info contain">
            <div class="item row" style="align-items: flex-start;">
                <div class="title">买家留言</div>
                <div class="black">{{orderDetail.user_remark || '无'}}</div>
            </div>
        </div>
        <div class="order-info contain">
            <div class="item row">
                <div class="title">订单编号</div>
                <div class="black">{{orderDetail.order_sn}}</div>
            </div>
            <div class="item row">
                <div class="title">支付方式</div>
                <div class="black">{{orderDetail.pay_way_text}}</div>
            </div>
            <div class="item row">
                <div class="title">下单时间</div>
                <div class="black">{{orderDetail.create_time}}</div>
            </div>
            <div v-if="orderDetail.pay_time" class="item row">
                <div class="title">付款时间</div>
                <div class="black">{{orderDetail.pay_time}}</div>
            </div>
            <div v-if="orderDetail.shipping_time" class="item row">
                <div class="title">发货时间</div>
                <div class="black">{{orderDetail.shipping_time }}</div>
            </div>
            <div v-if="orderDetail.confirm_take_time" class="item row">
                <div class="title">成交时间</div>
                <div class="black">{{orderDetail.confirm_take_time }}</div>
            </div>
            <div v-if="orderDetail.cancel_time" class="item row">
                <div class="title">关闭时间</div>
                <div class="black">{{orderDetail.cancel_time}}</div>
            </div>
        </div>
        <div
            class="footer bg-white row"
            v-if="orderDetail.cancel_btn || orderDetail.delivery_btn || orderDetail.take_btn || orderDetail.del_btn || orderDetail.pay_btn"
        >
            <div style="flex: 1"></div>
            <div v-if="orderDetail.cancel_btn">
                <button size="sm" class="plain br60" @click="cancelOrder">取消订单</button>
            </div>
            <div v-if="orderDetail.delivery_btn">
                <button
                    size="sm"
                    class="plain br60"
                    @click="goPage('goodsLogistics', {id: orderDetail.id})"
                >查看物流</button>
            </div>
            <div v-if="orderDetail.take_btn" class="ml10">
                <button size="sm" class="plain br60 primary red" @click="comfirmOrder">确认收货</button>
            </div>
            <div v-if="orderDetail.del_btn">
                <button size="sm" class="plain br60" @click="delOrder">删除订单</button>
            </div>
            <div class="ml10" v-if="orderDetail.pay_btn">
                <button size="sm" class="bg-primary br60 white" @click="payNow">立即付款</button>
            </div>
        </div>
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
                <div style="margin-top:15px" v-if="type == 0">确认取消该订单吗？</div>
                <div style="margin-top:15px" v-if="type == 1">确认删除该订单吗？</div>
                <div style="margin-top:15px" v-if="type == 2">确认收货吗？</div>
            </div>
        </van-dialog>
    </div>
</template>

<script>
import OrderGoods from "@C/OrderGoods";
import { prepay } from "@/api/app";
import {
    getOrderDetail,
    cancelOrder,
    delOrder,
    confirmOrder,
} from "@/api/user";
import {wxPay} from "@/utils/wxjssdk"
export default {
    name: "userOrder",
    components: {
        OrderGoods,
    },
    data() {
        return {
            orderDetail: {},
            type: 0,
            showCancel: false,
            cancelTime: 0,
        };
    },
    created() {
        this.id = this.$route.query.id;
        this.$getOrderDetail();
    },
    mounted() {},
    methods: {
        $getOrderDetail() {
            getOrderDetail(this.id).then((res) => {
                if (res.code == 1) {
                    const cancelTime =
                        res.data.order_cancel_time * 1000 - Date.now();
                    this.orderDetail = res.data;
                    this.cancelTime = cancelTime > 0 ? cancelTime : 0;
                }
            });
        },
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
            this.type = 1;
            this.$nextTick(() => {
                this.onShowDialog();
            });
        },
        cancelOrder(id) {
            this.type = 0;
            this.$nextTick(() => {
                this.onShowDialog();
            });
        },
        comfirmOrder(id) {
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
                if (this.type == 1) {
                    setTimeout(() => {
                        this.$router.go(-1);
                    }, 1000);
                    return;
                }
                this.$getOrderDetail();
            }
        },
        payNow() {
            this.$toast({
                type: "loading",
                message: "请稍等...",
                duration: 0,
            });
            prepay({
                from: "order",
                order_id: this.id,
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
};
</script>

<style lang="scss" scoped>
.order-details {
    position: relative;
    padding-bottom: 60px;
    .header-bg {
        background-color: $--color-primary;
        position: absolute;
        height: 100px;
        width: 100%;
        z-index: -1;
    }
    .contain {
        background-color: #fff;
        margin: 0 10px 10px;
        border-radius: 7px;
        overflow: hidden;
    }
    .header {
        padding: 12px 20px;
        box-sizing: border-box;
        .count-down {
            color: #fff;
            margin: 0 4px;
        }
    }
    .address-wrap {
        min-height: 82px;
        padding: 12px;
        box-sizing: border-box;
    }
    .img-line {
        height: 1.5px;
        width: 100%;
        display: block;
    }
    .order-info {
        padding: 6px 0;
        .item {
            padding: 6px 12px;
            .title {
                width: 90px;
                flex: none;
            }
        }
    }
    .bargain {
        padding: 10px 0 15px;
        .bargain-header {
            .line {
                width: 65px;
                height: 1px;
                background-color: $--border-color-base;
            }
            .title {
                line-height: 10px;
                text-align: center;
                font-weight: bold;
            }
        }
        .bargain-contain {
            margin-top: 20px;
            .bargain-people {
                position: relative;
                .bargain-tag {
                    position: absolute;
                    width: 100%;
                    height: 15px;
                    bottom: -5px;
                    font-size: 10px;
                }
            }
        }
    }
    .goods {
        .title {
            padding: 11px 12px;
            border-bottom: $--border-base;
        }

        .shop-icon {
            width: 20px;
            height: 20px;
        }
    }
    .price > div {
        height: 30px;
        padding: 0 12px;
    }
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 50px;
        padding: 0 12px;
        box-sizing: border-box;
        .plain {
            border: $--border-base;
            &.red {
                border: 1px solid $--color-primary;
            }
        }
    }
    .tips-dialog {
        height: 115px;
        width: 100%;
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