<template>
    <div class="pay-result">
        <div class="commit-order-box bg-white" v-show="isShow">
            <div class="commit-order-header column-center">
                <div>
                    <img class="order-img" src="@A/images/icon_paySuccess.png" />
                </div>
                <div class="xl">订单支付成功</div>
            </div>
            <div style="height:80px"></div>
            <div class="info mt10">
                <div class="row-between info-item">
                    <div>订单编号</div>
                    <div>
                        <div class="mb5" v-for="(item, index) in payInfo.order_sn" :key="index">{{item}}</div>
                    </div>
                </div>
                <div class="row-between info-item">
                    <div>付款时间</div>
                    <div>{{payInfo.pay_time}}</div>
                </div>
                <div class="row-between info-item">
                    <div>支付方式</div>
                    <div>{{payInfo.pay_way}}</div>
                </div>
                <div class="row-between info-item">
                    <div>支付金额</div>
                    <div>￥<price-slice :price="payInfo.order_amount" /></div>
                </div>
            </div>
            <div class="opt-btn-contain">
                <div class="bg-primary btn white row-center lg" @click="goPage('userOrder')">查看订单</div>
                <div class="btn primary row-center lg" :style="'border:1px solid' + primaryColor" @click="goPage('home')">返回首页</div>
            </div>
        </div>
    </div>
</template>

<script>
// import { getOrderResult } from "@/api/store";
export default {
    name: "payResult",
    data() {
        return {
            payStatus: "",
            payInfo: {},
            isShow: false,
        };
    },
    created() {
        let { id, type } = this.$route.query;
        this.id = id;
        this.type = type;
        // this.$getOrderResult();
    },
    methods: {
        $getOrderResult() {
            getOrderResult({
                id: this.id,
                type: this.type,
            }).then((res) => {
                if (res.code == 1) {
                    this.isShow = true;
                    this.payInfo = res.data;
                    this.payStatus = res.data.pay_status;
                }
            });
        },
        goPage(name) {
            this.$router.replace({
                name
            })
        }
    },
};
</script>

<style lang="scss" scoped>
.pay-result {
    & .commit-order-box {
        width: 351px;
        margin-left: 12px;
        margin-right: 12px;
        margin-top: 39px;
        position: relative;
        padding: 0 10px;
        box-sizing: border-box;
        border-radius: 5px;
        padding-bottom: 15px;
        & .commit-order-header {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            & .order-img {
                width: 56px;
                height: 56px;
            }
        }
        & .info {
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e5e5;
            & .info-item {
                margin-top: 12px;
                align-items: flex-start;
            }
        }
        & .opt-btn-contain {
            & .btn {
                height: 42px;
                border-radius: 30px;
                margin-top: 15px;
            }
        }
    }
}
</style>