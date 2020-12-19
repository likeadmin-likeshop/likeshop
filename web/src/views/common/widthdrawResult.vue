<template>
    <div class="pay-result">
        <div class="commit-order-box bg-white" v-show="isShow">
            <div class="commit-order-header column-center">
                <div>
                    <img class="order-img" :src="widthdrawInfo.status == 0 ? require('@A/images/icon_cashOut_wait.png') : widthdrawInfo.status == 1 ? require('@A/images/icon_paySuccess.png') : require('@A/images/icon_payFail.png')" />
                </div>
                <div class="xl one-txt-cut">{{widthdrawInfo.status == 0 ? '提交成功，待审核...' : widthdrawInfo.status == 1 ? '审核通过，已入账' : '审核失败，账号异常'}}</div>
            </div>
            <div style="height:60px"></div>
            <div class="column-center">
                <price-slice
                :price="widthdrawInfo.money"
                :color="primaryColor"
                :showSubscript="true"
                subScriptClass="md"
                firstClass="width-draw-result"
                secondClass="width-draw-result"
                weight="bold"
                />
            </div>
            <div class="info mt10">
                <div class="row-between info-item normal">
                    <div>流水号</div>
                    <div>
                        {{widthdrawInfo.sn}}
                        <!-- <div class="mb5" v-for="(item, index) in widthdrawInfo.sn" :key="index">{{item}}</div> -->
                    </div>
                </div>
                <div class="row-between info-item normal">
                    <div>提交时间</div>
                    <div>{{widthdrawInfo.create_time}}</div>
                </div>
                <div class="row-between info-item normal">
                    <div>提现至</div>
                    <div>{{widthdrawInfo.type == 1 ? '余额' : widthdrawInfo.type == 2 ? '微信' : '支付宝'}}</div>
                </div>
                <div class="row-between info-item normal">
                    <div>服务费</div>
                    <div>￥<price-slice :price="widthdrawInfo.poundage" /></div>
                </div>
                <div class="row-between info-item normal">
                    <div>实际到账</div>
                    <div>￥<price-slice :price="widthdrawInfo.left_money" /></div>
                </div>
            </div>
            <div class="opt-btn-contain">
                <div class="bg-primary btn white row-center lg" @click="goPage('userWithdrawCode')">查看历史提现记录</div>
                <div class="btn primary row-center lg" :style="'border:1px solid' + primaryColor" @click="goPage('home')">返回首页</div>
                <div class="muted xs lighter" style="margin-top: 32px;text-align: center">* 审核成功后约72小时内到账，请留意账户明细</div>
            </div>
        </div>
    </div>
</template>

<script>
import {getWithdrawDetail} from '@API/user'
import PriceSlice from '../../components/PriceSlice/PriceSlice.vue';
export default {
  components: { PriceSlice },
    name: "widthdrawResult",
    data() {
        return {
            widthdrawStatus: "",
            widthdrawInfo: {},
            isShow: false,
        };
    },
    created() {
        let { id } = this.$route.query;
        this.id = id;
        this.$getWithdrawDetail();
    },
    methods: {
        $getWithdrawDetail() {
            getWithdrawDetail({id: this.id}).then(res => {
                if(res.code == 1) {
                    this.widthdrawInfo = res.data
                    this.isShow = true;
                    this.widthdrawStatus = res.data.status;
                }
            })
        },

        goPage(name) {
            this.$router.push({
                name
            })
        }
    },
    mounted() {

    }
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