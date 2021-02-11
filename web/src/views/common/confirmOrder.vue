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
            <div class="contain coupons">
                <div class="item row-between" @click="showCoupon = true">
                    <div>优惠券</div>
                    <div class="row">
                        <span v-if="orderInfo.discount_amount" class="primary"
                            >-￥{{ orderInfo.discount_amount }}</span
                        >
                        <span v-else class="muted md">请选择</span>
                        <img
                            class="icon-sm ml10"
                            src="@A/images/arrow_right.png"
                        />
                    </div>
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
                <div class="item row-between" v-if="orderInfo.discount_amount">
                    <div>优惠券</div>
                    <div class="primary">-¥{{ orderInfo.discount_amount }}</div>
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
        <van-popup
            safe-area-inset-bottom
            class="coupon-popup"
            v-model="showCoupon"
            closeable
            round
            position="bottom"
            @close="onCloseCoupon"
        >
            <div class="title">优惠券</div>
            <van-tabs :active="popActive">
                <van-tab :title="`可使用优惠券 (${usableCoupon.length})`">
                    <coupon-popup
                        :list="usableCoupon"
                        :type="0"
                        @select="onSelectCoupon"
                    ></coupon-popup>
                </van-tab>
                <van-tab :title="`不可用优惠券 (${unusableCoupon.length})`">
                    <coupon-popup
                        :list="unusableCoupon"
                        :type="1"
                    ></coupon-popup>
                </van-tab>
            </van-tabs>
            <div
                class="bg-primary white br60 btn lg"
                size="md"
                @click="onCloseCoupon"
            >
                确认
            </div>
        </van-popup>
    </div>
</template>

<script>
import wx from "weixin-js-sdk";
import { orderBuy, getOrderCoupon } from "@/api/store";
import { prepay } from "@/api/react_native";
import OrderGoods from "@C/OrderGoods";
import CouponPopup from "@C/CouponPopup";
import { payWayType } from "@/utils/type";
import { wxPay } from "@/utils/wxjssdk";
import { Dialog } from 'vant';
export default {
    name: "confirmOrder",
    components: {
        OrderGoods,
        CouponPopup,
    },
    data() {
        return {
            address: {},
            orderInfo: {},
            userRemark: "",
            goodsLists: [],
            addressId: "",
            showCoupon: false,
            popActive: 0,
            usableCoupon: [],
            unusableCoupon: [],
            payWay: 1,
            payWayArr: [
                {
                    icon: require("@A/images/pay_wechat.png"),
                    name: "微信支付",
                    type: payWayType.wechat,
                    desc: "微信快捷支付",
                }
            ],
            showCoupon: false,
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
        await this.$getOrderCoupon();
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
        onCloseCoupon() {
            this.showCoupon = false;
            this.$orderBuy();
        },
        onSelectCoupon(id) {
            this.couponId = id;
        },
        onSubmitOrder() {
            this.toast = this.$toast({
                type: "loading",
                message: "请稍等...",
                duration: 0,
            });
            this.$orderBuy("submit");
        },
        $getOrderCoupon() {
            return new Promise((resolve) => {
                console.log(this.goods);
                getOrderCoupon({
                    goods: this.goods,
                }).then((res) => {
                    if (res.code == 1) {
                        const { usable, unusable } = res.data;
                        this.usableCoupon = usable;
                        this.unusableCoupon = unusable;
                        resolve();
                    }
                });
            });
        },
        $orderBuy(action = "info") {
            let { address, userRemark } = this;
            let submitObj = {
                action,
                goods: this.goods,
                coupon_id: this.couponId
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
        .coupons {
            .item {
                height: 50px;
                padding: 0 10px;
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
    .coupon-popup {
        .title {
            height: 50px;
            border-bottom: $--border-base;
            padding-left: 15px;
            font-weight: bold;
            line-height: 50px;
        }
        .btn {
            margin: 5px 10px;
            display: block;
            box-sizing: border-box;
            height: 37px;
            line-height: 37px;
            text-align: center;
        }
    }
}
</style>