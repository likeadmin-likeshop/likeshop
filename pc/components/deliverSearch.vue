<template>
    <div class="deliver-search-container">
        <el-dialog :visible.sync="showDialog" width="920px" title="物流查询">
            <div class="deliver-box">
                <div class="deliver-recode-box row">
                    <div class="recode-img">
                        <el-image style="width: 100%; height: 100%" fit="cover" :src="deliverOrder.image" />
                        <div class="float-count row-center">共{{deliverOrder.count}}件商品</div>
                    </div>
                    <div class="recode-info-container ml10">
                        <div class="row">
                            <div class="recode-label">物流状态：</div>
                            <div class="primary lg" style="font-weight: 500">{{deliverOrder.tips}}</div>
                        </div>
                        <div class="row" style="margin: 6px 0;">
                            <div class="recode-label">快递公司：</div>
                            <div >{{deliverOrder.shipping_name}}</div>
                        </div>
                        <div class="row">
                            <div class="recode-label">快递单号：</div>
                            <div>{{deliverOrder.invoice_no}}</div>
                            <div class="copy-btn primary row-center" @click="onCopy">复制</div>
                        </div>
                    </div>
                </div>
                <div class="deliver-flow-box mt16">
                    <el-timeline>
                        <!-- 收货 -->
                        <el-timeline-item
                            v-if="this.deliverFinish.tips"
                        >
                            <div>
                                <div class="row lg">
                                    <div class="mr8" style="font-weight: 500">
                                        {{this.deliverTake.contacts}}
                                    </div>
                                    <div style="font-weight: 500">{{this.deliverTake.mobile}}</div>
                                </div>
                                <div class="lighter mt8">{{this.deliverTake.address}}</div>
                            </div>
                        </el-timeline-item>
                        <!-- 交易状态 -->
                        <el-timeline-item
                            v-if="this.deliverFinish.tips"
                            :timestamp="this.deliverFinish.time"
                        >
                            <div class="time-line-title">{{this.deliverFinish.title}}</div>
                            <div>{{this.deliverFinish.tips}}</div>
                        </el-timeline-item>
                        <!-- 跟踪物流 -->
                        <el-timeline-item
                            v-if="this.delivery.traces && this.delivery.traces.length"
                            :timestamp="this.delivery.time"
                        >
                            <div class="time-line-title mb8">{{this.delivery.title}}</div>
                            <el-timeline-item
                                v-for="(item, index) in this.delivery.traces"
                                :key="index"
                                :timestamp="traceTime(item)"
                            >
                                <div class="muted">{{traceContent(item)}}</div>
                            </el-timeline-item>
                        </el-timeline-item>
                        <!-- 完成 -->
                        <el-timeline-item
                            v-if="this.deliverShipment.tips"
                            :timestamp="this.deliverShipment.time"
                        >
                            <div class="time-line-title">{{this.deliverShipment.title}}</div>
                            <div>{{this.deliverShipment.tips}}</div>
                        </el-timeline-item>
                        <!-- 下单 -->
                        <el-timeline-item
                            v-if="this.deliverBuy.tips"
                            :timestamp="this.deliverBuy.time"
                        >
                            <div class="time-line-title">{{this.deliverBuy.title}}</div>
                            <div>{{this.deliverBuy.tips}}</div>
                        </el-timeline-item>
                    </el-timeline>
                </div>
            </div>
        </el-dialog>
    </div>
</template>

<script>
export default {
    props: {
        value: {
            type: Boolean,
            default: false,
        },
        aid: {
            type: Number | String
        }
    },
    data() {
        return {
            showDialog: false,
            deliverBuy: {},
            delivery: {},
            deliverFinish: {},
            deliverOrder: {},
            deliverShipment: {},
            deliverTake: {},
            express: '',
            timeLineArray: []
        }
    },
    watch: {
        value(val) {
            console.log(val, 'val')
            this.showDialog = val;
        },
        showDialog(val) {
            if(val) {
                if(this.aid) {
                    this.timeLineArray = []
                    this.getDeliverTraces();
                }
            }
            this.$emit("input", val);
        },
    },
    methods: {
        async getDeliverTraces() {
            let data = {
                id: this.aid
            }
            let res = await this.$get("order/orderTraces", {params: data});
            if(res.code == 1) {
                let {buy, delivery, finish, order, shipment, take, express} = res.data
                this.deliverBuy = buy;
                this.delivery = delivery;
                this.deliverFinish = finish;
                this.deliverOrder = order;
                this.deliverShipment = shipment;
                this.deliverTake = take;
                this.timeLineArray.push(this.deliverFinish);
                this.timeLineArray.push(this.delivery);
                this.timeLineArray.push(this.deliverShipment);
                this.timeLineArray.push(this.deliverBuy);
                this.express = express;
                console.log(this.timeLineArray)
            }
        },
        traceTime(item) {
            if (!Array.isArray(item)) {
                return '';
            }
            if (this.express === 'kdniao') {
                return item[2] || (item[1] ? item[0] : '');
            }
            return item[0] || item[2] || '';
        },
        traceContent(item) {
            if (!Array.isArray(item)) {
                return item || '';
            }
            return item[1] || item[0] || '';
        },
        onCopy() {
            // this.deliverOrder.invoice_no;
            let oInput = document.createElement('input');
            oInput.value = this.deliverOrder.invoice_no;
            document.body.appendChild(oInput);
            oInput.select();
            document.execCommand("Copy");
            this.$message.success("复制成功");
            oInput.remove();
        }
    }
}
</script>

<style lang="scss" scoped>
    .deliver-search-container {
        .deliver-box {
            .deliver-recode-box {
                padding: 10px 20px;
                background-color: #F2F2F2;
                .recode-img {
                    position: relative;
                    width: 72px;
                    height: 72px;
                    .float-count {
                        position: absolute;
                        bottom: 0;
                        height: 20px;
                        width: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        color: white;
                        font-size: 12px;
                    }
                }
                .recode-info-container {
                    flex: 1;
                    .recode-label {
                        width: 70px;
                    }
                    .copy-btn {
                        height: 20px;
                        min-width: 42px;
                        border: 1px solid $-color-primary;
                        font-size: 12px;
                        margin-left: 8px;
                        border-radius: 60px;
                        cursor: pointer;
                        &:hover {
                            background-color: white;
                        }
                    }
                }
            }
            .deliver-flow-box {
                padding-left: 15px;
            }
        }
    }
</style>
