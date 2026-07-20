<template>
    <div class="apply-result-container">
        <div class="result-header row">
            <img style="width: 40px;height: 40px;align-self: flex-start" src="~/assets/images/pay_success.png" />
            <div class="ml16">
                <div class="apply-title" style="font-weight: 500;">提交申请</div>
                <div class="muted mt8">申请已提交，请耐心等待商家处理…</div>
            </div>
        </div>
        <div class="result-content">
            <div class="result-item row">
                <div class="label">退款类型：</div>
                <div class="desc">{{lists.refund_type_text}}</div>
            </div>
            <div class="result-item row">
                <div class="label">退款原因：</div>
                <div class="desc">{{lists.refund_reason}}</div>
            </div>
            <div class="result-item row">
                <div class="label">退款金额：</div>
                <div class="desc">
                    <price-formate  :price="lists.refund_price" showSubscript color="red" />
                </div>
            </div>
            <div class="result-item row">
                <div class="label">退款说明：</div>
                <div class="column desc">
                    <div class="mb16">{{lists.refund_remark}}</div>
                    <el-image style="width: 76px;height: 76px;" :src="lists.refund_image" v-if="lists.refund_image" :preview-src-list="[lists.refund_image]" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    head() {
        return {
        title: this.$store.getters.headTitle,
        link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
        };
    },
    layout: "user_lauout",
    async asyncData({$get, query}) {
        const data = {
            id: query.afterSaleId
        };
        let lists = {}
        let res = await $get("after_sale/detail", {params: data});
        if(res.code == 1) {
            lists = res.data;
        }
        return {
            lists,
        }
    },
    data() {
        return {

        }
    },
    methods: {

    }
}
</script>

<style lang="scss" scoped>
    .apply-result-container {
        padding: 10px;
        .result-header {
            padding: 46px 20px;
            border-bottom: 1px solid #E5E5E5;
            .apply-title {
                font-size: 24px;
            }
        }
        .result-content {
            padding: 24px 20px;
            .result-item {
                margin-bottom: 16px;
                &:not(:last-of-type) {
                    .label {
                        width: 82px;
                        align-self: flex-start;
                        text-align: right;
                        &::before {
                            content: '* ';
                            color: red;
                        }
                    }
                }
                .label {
                    width: 82px;
                    align-self: flex-start;
                    text-align: right;      
                }
                .desc {
                    margin-left: 24px;
                    width: 680px;
                }
            }
        }
    }
</style>