<template>
    <div class="apply-detail">
        <div class="apply-detail-header row-between">
            <div class="lg">退货类型</div>
            <div class="primary lg">{{lists.status_text}}</div>
        </div>
        <div class="apply-detail-content">
            <div class="apply-detail-form">
                <div class="row form-item">
                    <div class="label lighter">收 件 人 ：</div>
                    <div class="form-name ml8">
                        {{lists.shop.contact}}
                    </div>
                </div>
                <div class="row form-item">
                    <div class="label lighter">联系方式：</div>
                    <div class="form-name ml8">
                        {{lists.shop.mobile}}
                    </div>
                </div>
                <div class="row form-item">
                    <div class="label lighter">退货地址：</div>
                    <div class="row">
                        <div class="form-name ml8 lighter">
                            {{lists.shop.address}}
                        </div>
                        <div class="copy-btn ml10 row-center primary" @click="onCopy">
                            复制
                        </div>
                    </div>
                </div>
            </div>
            <div class="goods-detail">
                <div class="detail-header row">
                    <div class="normal">申请时间：{{lists.create_time}}</div>
                    <div style="margin-left: 100px">退款编号：{{lists.sn}}</div>
                </div>

                <div class="form-header mb10 row">
                    <div class="info lighter">
                        退款信息
                    </div>
                    <div class="count lighter row-center">
                        数量
                    </div>
                    <div class="price lighter row-center">
                        退款金额
                    </div>
                    <div class="reason lighter row-center">
                        退款原因
                    </div>
                </div>
                <div class="form-content row">
                    <div class="info">
                        <div class="row">
                            <el-image style="width: 72px;height: 72px;" :src="lists.order_goods.image" />
                            <div class="goods-info ml10">
                                <div class="line2">
                                    {{lists.order_goods.goods_name}}
                                </div>
                                <div class="mt10 muted">
                                    {{lists.order_goods.spec_value}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="count row-center" style="align-self: flex-start">
                        {{lists.order_goods.goods_num}}
                    </div>
                    <div class="price row-center" style="align-self: flex-start">
                        <price-formate :price="lists.refund_price" showSubscript />
                    </div>
                    <div class="reason row-center" style="align-self: flex-start">
                        <div class="line2">
                            {{lists.refund_reason}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group row-end mt20">
                <el-popconfirm
                    title="确定撤销商品吗？"
                    confirm-button-text="确定"
                    cancel-button-text="取消"
                    icon="el-icon-info"
                    icon-color="red"
                    @confirm="cancelApply(lists.id)"
                >
                    <el-button class="apply-btn row-center sm" size="small" slot="reference" v-if="lists.status!=6">撤销申请</el-button>
                </el-popconfirm>
                <el-button class="apply-btn row-center sm" size="small" v-if="lists.status==2" @click="showInput=true">填写快递单号</el-button>
            </div>
        </div>
        <input-express v-model="showInput" :aid="lists.id" />
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

    data() {
        return {
            showInput: false,
        }
    },

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

    methods: {
        onCopy() {
            // this.deliverOrder.invoice_no;
            let oInput = document.createElement('input');
            oInput.value = this.lists.shop.address;
            document.body.appendChild(oInput);
            oInput.select();
            document.execCommand("Copy");
            this.$message.success("复制成功");
            oInput.remove();
        },

        async cancelApply(afterSaleId) {
            let res = await this.$post("after_sale/cancel", {id: afterSaleId});
            if(res.code == 1) {
                this.$message({
                    message: res.msg,
                    type: 'success'
                });
                setTimeout(() => {
                    this.$router.go(-1);
                }, 500);
            }
        },

        goRefund(afterSaleId, orderId, itemId) {
            this.$router.push('/user/after_sales/apply_result?afterSaleId=' + afterSaleId + "&order_id=" + orderId + "&item_id=" + itemId)
        }
    },

}
</script>

<style lang="scss" scoped>
    .apply-detail {
        padding: 10px;
        .apply-detail-header {
            padding: 15px 0;
            border-bottom: 1px solid #E5E5E5;
        }
        .apply-detail-content {
            .apply-detail-form {
                padding: 16px 15px 24px;
                .form-item {
                    margin-bottom: 10px;
                    .label {
                        width: 70px;
                    }
                    .copy-btn {
                        padding: 0 10px;
                        height: 24px;
                        background-color: #FFEEEF;
                        cursor: pointer;
                    }
                }
            }
            .goods-detail {
                border: 1px solid #E5E5E5;
                .detail-header {
                    padding: 10px 20px;
                    background-color: #F2F2F2FF;
                    border-bottom: 1px solid #E5E5E5;
                }
                .form-header {
                    padding: 10px 20px;
                    border-bottom: 1px solid #E5E5E5;
                }
                .form-content {
                    padding: 10px 20px;

                }
                .info {
                    width: 482px;
                }
                .count {
                    width: 116px;
                }
                .price {
                    width: 116px;
                }
                .reason {
                    width: 116px;
                }
            }
            .btn-group {
                .apply-btn {
                    border: 1px solid #CCCCCC;
                    border-radius: 2px;
                    width: 100px;
                    height: 32px;
                    align-self: flex-start;
                    margin-right: 10px;
                }
            }
        }
    }
</style>