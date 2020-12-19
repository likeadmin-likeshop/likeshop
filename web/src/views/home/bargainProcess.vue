<template>
    <div class="bargain-process">
        <div class="header white">
            <div class="xxl">待发货</div>
            <div class="mt5 xxs">邀请好友帮忙砍价 —— 砍至1元即可发货</div>
            <div class="mt10" style="font-size: 10px">已有 352人砍成功</div>
        </div>
        <div class="content">
            <div class="goods-container">
                <div class="goods-item bg-white row ">
                    <div class="goods-image">
                        <van-image src="" width="100%" height="100%"></van-image>
                    </div>
                    <div class="goods-info ml10">
                        <div class="goods-name two-txt-cut">
                            控油细致面膜21片装 护肤品 补水面膜清洁面膜
                        </div>
                        <div class="row-between">
                            <div class="goods-spec xs muted mt5">
                                原价 
                                <price-slice 
                                    price="69.3" 
                                    color="#999999"
                                    showSubscript
                                    subScriptClass="xs"
                                    firstClass="xs"
                                    secondClass="xs"
                                />
                            </div>
                            <div class="xs muted">仅剩14件</div>
                        </div>
                        <div class="muted row xs dec mt5" style="line-height: 21px">
                            <van-count-down
                                :time="remainTime"
                                format="HH:mm:ss"
                                @change="onChangeDate"
                                @finish="activeTimeOut"
                            >
                                <template v-slot="timeData">
                                    <div class="row-center">
                                        <div class="item white xs">
                                            {{ timeData.hours }}
                                        </div>
                                        <div
                                            class="primary"
                                            style="margin: 0 3px"
                                        >
                                            :
                                        </div>
                                        <div class="item white xs">
                                            {{ timeData.minutes }}
                                        </div>
                                        <div
                                            class="primary"
                                            style="margin: 0 3px"
                                        >
                                            :
                                        </div>
                                        <div class="item white xs">
                                            {{ timeData.seconds }}
                                        </div>
                                    </div>
                                </template>
                            </van-count-down>
                            <span class="ml5">后结束帮砍</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bargain-info-container bg-white">
                <div class="normal nr bold">已砍￥11.4，还差￥59.9</div>
                <div class="row" style="margin-top: 15px;">
                    <div class="progress br60">
                        <div class="progress-bar br60" style="width: 30%;"></div>
                    </div>
                    <div class="ml5">
                        <price-slice
                            price="1.01"
                            showSubscript
                            firstClass="xs"
                            secondClass="xs"
                            subScriptClass="xxs"
                            weight="bold"
                            :color="primaryColor"
                        />
                    </div>
                </div>
                <div class="invite-btn white xl row-center bg-primary br60 mt20" v-if="bargainStatus==0">邀请好友帮砍价</div>
                <div class="mt10" v-else-if="bargainStatus==1">
                    <div class="lighter nr row-center">恭喜您，砍价成功</div>
                    <div class="pay-btn bg-primary row-center white br60 mt20">立即支付</div>
                    <div class="primary more-btn row-center br60 mt10">更多砍价商品</div>
                </div>
                <div class="mt10" v-else>
                    <div class="lighter nr row-center">>非常遗憾，砍价失败了</div>
                    <div class="fail-btn mt20 row-center white br60">活动已结束</div>
                    <div class="primary more-btn row-center br60 mt10">更多砍价商品</div>
                </div>
                <div class="bargain-code">
                    <div class="row-between">
                        <div class="title normal bold md">砍价记录</div>
                        <div class="muted xs">已有2人帮砍</div>
                    </div>
                    <div class="help-bargain-container">
                        <div class="help-bargain-item row-between">
                            <div class="row">
                                <div class="help-bargain-image">
                                    <van-image width="100%" height="100%" round />
                                </div>
                                <div class="column" style="margin-left: 8px">
                                    <div class="normal xl">小橘子</div>
                                    <div class="muted xxs">小刀一砍，惊喜满满</div>
                                </div>
                            </div>
                            <div>
                                <price-slice 
                                    price="8.2"
                                    showSubscript
                                    subScriptClass="xs"
                                    firstClass="xs"
                                    secondClass="xs"
                                    :color="primaryColor"
                                ></price-slice>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <recommend/>
        </div>
        <van-popup v-model="showPop" round>
            <div class="pop-container" v-show="showPop">
                <img src="@A/images/bargain_popup_bg.png" alt="">
                <div class="bold normal column-center lg mt10">恭喜您成功砍下</div>
                <div class="row-center mt10">
                    <div class="money bold primary">1.23<span style="font-size: 19px;line-height: 18px;">元</span></div>
                </div>
                <div class="invite-btn white br60 row-center">邀请好友帮忙砍价</div>
            </div>
        </van-popup>
    </div>
</template>

<script>
import Recommend from "@C/Recommend";
import {BargainStatus} from "@U/type"
export default {
    name: "bargainProcess",
    components: {
        Recommend
    },
    data() {
        return {
            remainTime: 60 * 60 * 1000,
            showPop: false,
            bargainStatus: BargainStatus.FAIL
        }
    },
    methods: {
        onChangeDate() {

        },
        activeTimeOut() {

        }
    }
}
</script>

<style lang="scss" scoped>
    .bargain-process {
        .header {
            background-image: url(../../assets/images/bg_hometop.png);
            background-size: 100% 100%;
            height: 190px;
            padding: 10px 12px;
        }
        .content {
            margin-top: -110px;
            position: relative;
            .goods-container {
                padding: 0 12px;
                .goods-item {
                    padding: 15px 12px;
                    border-radius: 10px;
                    
                    .goods-image {
                        width: 90px;
                        height: 90px;
                        flex: none;
                    }
                    .goods-info {
                        flex: 1;
                        .dec {
                            .item {
                                text-align: center;
                                width: 18px;
                                line-height: 18px;
                                background-color: $--color-primary;
                                border-radius: 5px;
                                color: white;
                            }
                        }
                    }
                }
            }
            .bargain-info-container {
                padding: 12px 12px 10px;
                margin: 12px 12px 5px;
                border-radius: 10px;
                .progress {
                    flex: 1;
                    background-color: #FFEBE5;
                    height: 10px;
                    .progress-bar {
                        height: 100%;
                        background: linear-gradient(90deg, #F95F2F 0%, #FF2C3C 100%);
                    }
                }
                .invite-btn {
                    height: 42px;
                    box-shadow: 0px 3px 10px rgba(235, 36, 51, 0.5);
                }
                .pay-btn {
                    height: 42px;
                }
                .more-btn {
                    border: 1px solid $--color-primary;
                    height: 42px;
                }
                .fail-btn {
                    background-color: $--border-color-base;
                    height: 42px;
                }
                .bargain-code {
                    margin-top: 30px;
                    .help-bargain-container {
                        margin-top: 15px;
                        .help-bargain-item {
                            .help-bargain-image {
                                width: 40px;
                                height: 40px;
                            }
                        }
                    }
                }
            }
        }
        .pop-container {
            width: 280px;
            height: 320px;
            img {
                width: 100%;
                height: 163px;
            }
            .money {
                line-height: 18px;
                font-size: 28px;
            }
            .invite-btn {
                height: 42px;
                background: linear-gradient(90deg, #F95F2F 0%, #FF2C3C 100%);
                margin: 15px 30px;
            }
        }
    }
</style>