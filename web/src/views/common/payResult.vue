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
                    <div>{{payInfo.order_sn}}</div>
                </div>
                <div class="row-between info-item">
                    <div>付款时间</div>
                    <div>{{payInfo.pay_time}}</div>
                </div>
                <div class="row-between info-item">
                    <div>支付方式</div>
                    <div>{{payInfo.pay_way_text}}</div>
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
import { getOrderDetail } from "@/api/user";
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
        let { id } = this.$route.query;
        this.id = id;
        // this.$getOrderResult();
    },
    methods: {
        $getOrderResult() {
            getOrderDetail( this.id).then((res) => {
                if (res.code == 1) {
                    this.isShow = true;
                    this.payInfo = res.data;
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