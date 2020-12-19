<template>
    <div class="confirm-order">
        <div class="confirm-con">
            <div class="address-wrap row contain" @click="onSelectAddress">
                <img class="icon mr10" src="@A/images/pay_address.png" />
                <div class="address">
                    <div class="black md" v-if="!address.contact">
                        设置收货地址
                    </div>
                    <div v-else>
                        <span class="name md mr10">{{ address.contact }}</span>
                        <span class="phone md">{{ address.telephone }}</span>
                        <div class="area sm mt10 lighter">
                            {{ address.province }} {{ address.city }}
                            {{ address.district }} {{ address.address }}
                        </div>
                    </div>
                </div>
                <img class="icon-sm ml10" src="@A/images/arrow_right.png" />
            </div>
            <div class="goods contain">
                <order-goods :list="goodsLists" />
                <div class="item row-between">
                    <div>配送方式</div>
                    <div>快递</div>
                </div>
                <div class="input">
                    <van-field
                        v-model="userRemark"
                        type="textarea"
                        rows="1"
                        :autosize="{ minHeight: 30, maxHeight: 80 }"
                        label="店铺留言"
                        placeholder="选填，请输入150字以内的文字留言"
                    />
                </div>
            </div>
            <div class="price contain">
                <div class="item row-between">
                    <div>商品金额</div>
                    <div>¥{{ orderInfo.total_goods_price }}</div>
                </div>
                <div class="item row-between">
                    <div>运费</div>
                    <div>¥{{ orderInfo.shipping_price }}</div>
                </div>
            </div>
            <div class="pay-way contain">
                <div class="lighter title">支付方式</div>
                <van-radio-group
                    class="radio-group"
                    v-model="payWay"
                    :checked-color="primaryColor"
                >
                    <div
                        class="item row-between"
                        v-for="item in payWayArr"
                        :key="item.type"
                        @click="payWay = item.type"
                    >
                        <div class="row">
                            <img class="icon-lg mr10" :src="item.icon" />
                            <div class>
                                <div class="balck bt10">{{ item.name }}</div>
                                <div class="muted xs">
                                    {{ item.desc
                                    }}{{
                                        item.type == 3
                                            ? orderInfo.user_money
                                            : ""
                                    }}
                                </div>
                            </div>
                        </div>
                        <van-radio :name="item.type"></van-radio>
                    </div>
                </van-radio-group>
            </div>
        </div>
        <div class="footer bg-white row-between">
            <div class="all-price lg row">
                <span>合计：</span>
                <div class="primary row">
                    ￥
                    <price-slice :price="orderInfo.order_amount" />
                </div>
            </div>
            <button
                class="btn br60 white"
                size="md"
                hover-class="none"
                @click="onSubmitOrder"
            >
                提交订单
            </button>
        </div>
    </div>
</template>

<script>
import wx from "weixin-js-sdk";
import { orderBuy } from "@/api/store";
import { prepay } from "@/api/app";
import OrderGoods from "@C/OrderGoods";
import { payWayType } from "@/utils/type";
import { wxPay } from "@/utils/wxjssdk";
import { Dialog } from 'vant';
export default {
    name: "confirmOrder",
    components: {
        OrderGoods,
    },
    data() {
        return {
            address: {},
            orderInfo: {},
            userRemark: "",
            goodsLists: [],
            addressId: "",
            popActive: 0,
            payWay: 1,
            payWayArr: [
                {
                    icon: require("@A/images/pay_wechat.png"),
                    name: "微信支付",
                    type: payWayType.wechat,
                    desc: "微信快捷支付",
                },
                {
                    icon: require("@A/images/icon_balance.png"),
                    name: "余额支付",
                    type: payWayType.balance,
                    desc: "可用余额：",
                },
            ],
            useIntegral: 0,
        };
    },
    async created() {
        let { goods, type } = this.$route.query;
        this.addressId = this.$ls.get("addressid");
        this.$ls.remove("addressid");
        goods = JSON.parse(goods) || [];
        this.confirmType = type || "";
        this.goods = goods;
        this.$orderBuy();
    },
    mounted() {
        this.$ls.remove("addressid");
    },
    methods: {
        onSelectAddress() {
            this.$router.push({
                name: "userAddress",
                query: {
                    type: 1,
                },
            });
        },
        onSubmitOrder() {
            this.toast = this.$toast({
                type: "loading",
                message: "请稍等...",
                duration: 0,
            });
            this.$orderBuy("submit");
        },
        $orderBuy(action = "info") {
            let { address, userRemark, useIntegral } = this;
            let submitObj = {
                action,
                goods: this.goods,
                use_integral: useIntegral,
            };

            if (action == "info") {
                if (this.addressId) {
                    submitObj.address_id = this.addressId;
                }
            } else if (action == "submit") {
                submitObj.remark = userRemark;
                submitObj.address_id = address.id;
                submitObj.type = this.confirmType;
                submitObj.pay_way = this.payWay;
            }
            orderBuy(submitObj)
                .then((res) => {
                    if (res.code == 1) {
                        if (action == "info") {
                            let { address, goods_lists } = res.data;
                            this.address = address;
                            this.goodsLists = goods_lists;
                            this.orderInfo = res.data;
                            this.addressId = address.id;
                            return false;
                        } else if (action == "submit") {
                            let { order_id, type } = res.data;
                            this.tradeId = order_id;
                            this.type = type;
                            return prepay({
                                from: type,
                                order_id: order_id,
                            });
                        }
                    } else {
                        this.toast && this.toast.clear();
                        return false;
                    }
                })
                .then((res) => {
                    this.toast && this.toast.clear();
                    if (res.code == 1) {
                        let opt = res.data;
                        wxPay(opt)
                            .then((res) => {
                                this.$router.replace({
                                    name: "payResult",
                                    query: {
                                        id: this.tradeId,
                                        type: this.type,
                                    },
                                });
                            })
                            .catch(() => {
                                this.$router.replace({
                                    name: "userOrder",
                                });
                            });
                    } else if (res.code == 10001) {
                        this.$router.replace({
                            name: "payResult",
                            query: {
                                id: this.tradeId,
                                type: this.type,
                            },
                        });
                    }
                });
        },
    },
};
</script>

<style lang="scss" scoped>
.confirm-order {
    padding-bottom: 60px;
    .contain {
        margin: 10px 10px 0;
        border-radius: 7px;
        background-color: #fff;
        overflow: hidden;
    }
    .confirm-con {
        .img-line {
            height: 1.5px;
            width: 100%;
            display: block;
        }
        .address-wrap {
            height: 82px;
            padding: 0 10px;
            .address {
                flex: 1;
            }
        }
        .goods {
            .title {
                padding: 11px 10px;
                border-bottom: $--border-base;
            }
            .all-num {
                padding: 11px 10px;
                border-bottom: 1px dotted $--border-color-base;
            }
            .input {
                .van-field {
                    padding: 13px 10px;
                }
            }
            .item {
                height: 50px;
                padding: 0 10px;
            }
        }
        .pay-way {
            .title {
                padding: 10px 10px;
            }
            .radio-group .item {
                height: 60px;
                padding: 0 10px;
            }
        }

        .price {
            padding: 0 10px;
            .item {
                height: 40px;
            }
        }
        .van-cell:after {
            border: none;
        }
    }
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        box-sizing: border-box;
        height: 50px;
        padding: 0 15px;
        .btn {
            background: linear-gradient(
                90deg,
                rgba(249, 95, 47, 1) 0%,
                rgba(255, 44, 60, 1) 100%
            );
            padding: 0 25px;
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