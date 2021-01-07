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
    <div class="user-payment">
        <div class="payment">
            <van-tabs
                v-model="active"
                line-width="40"
                :color="primaryColor"
                title-inactive-color="#333333"
            >
                <van-tab title="账户充值">
                    <div class="bg-white planel">
                        <div class="input row-center">
                            <div
                                style="
                                    font-size: 23px;
                                    align-self: flex-end;
                                    margin-bottom: 5px;
                                "
                            >
                                ¥
                            </div>
                            <input
                                placeholder="0.00"
                                type="number"
                                v-model="number"
                                @input="onInput"
                            />
                        </div>
                        <div class="tips mt10 muted row">
                            提示：当前余额为
                            <div class="primary ml5">
                                ¥ {{ userInfo.user_money || 0 }}
                            </div>
                        </div>
                    </div>
                    <button class="btn white br60" @click="rechargeRights">立即充值</button>
                </van-tab>
                <van-tab title="佣金转入">
                    <div class="planel bg-white">
                        <div class="input row-center">
                            <div
                                style="
                                    font-size: 23px;
                                    align-self: flex-end;
                                    margin-bottom: 5px;
                                "
                            >
                                ¥
                            </div>
                            <input placeholder="0.00" />
                        </div>
                        <div class="tips mt10 muted row">
                            提示：当前佣金为
                            <div class="primary ml5">¥ 0</div>
                        </div>
                    </div>
                    <button class="btn white br60">立即转入</button>
                </van-tab>
            </van-tabs>
        </div>
        <div class="fast-payment-container">
            <div class="title bold normal row">推荐充值</div>
            <div class="fast-pay row wrap">
                <div
                    class="fast-pay-item bg-white column-center"
                    v-for="item in rechargeObj"
                    :key="item.id"
                    @click="$recharge({ id: item.id })"
                >
                    <div class="hot-recharge white" v-if="item.is_recommend">
                        热门充值
                    </div>
                    <div class="price bold">
                        <price-slice
                            firstClass="order-price-size"
                            weight="bold"
                            :price="item.money"
                        ></price-slice
                        ><span class="xxl" style="font-weight: 400">元</span>
                    </div>
                    <div class="preferential primary xs">
                        {{ item.tips }}
                    </div>
                </div>
            </div>
        </div>
        <recommend />
        <van-popup class="pay-popup" v-model="showPopup" closeable round transition="fade" >
            <div class="content">
                <img class="img-icon" src="@/assets/images/recharge_success.png" />
                <div class="xxl bold mt5">充值成功</div>
                <div v-if="rechargeInfo.give_integral || rechargeInfo.give_growth" class="lg desc" >恭喜您获得 <span><span class="primary" v-if="rechargeInfo.give_integral">{{rechargeInfo.give_integral}}</span> 积分</span> <span v-if="rechargeInfo.give_growth">+ <span class="primary">{{rechargeInfo.give_growth}}</span>成长值</span></div>
                <button class="br60 btn bg-primary white"  size="md">好的，谢谢</button>
            </div>
        </van-popup>
    </div>
</template>

<script>
import { rechargeTemplate, recharge, getUser } from "@API/user";
import Recommend from "@C/Recommend";
import { prepay } from "@API/app";
import { wxPay } from "@/utils/wxjssdk";
export default {
    name: "userPayment",
    components: {
        Recommend,
    },
    data() {
        return {
            active: 0,
            rechargeObj: [],
            rechargeInfo: {},
            userInfo: {},
            number: "",
            showPopup: false
        };
    },
    methods: {
        $rechargeTemplate() {
            rechargeTemplate().then((res) => {
                if (res.code == 1) {
                    this.rechargeObj = res.data;
                }
            });
        },
        $getUserInfo() {
            getUser().then((res) => {
                if (res.code == 1) {
                    this.userInfo = res.data;
                }
            });
        },
        rechargeRights() {
            this.$recharge({money: Number(this.number)})
        },
        $recharge(obj) {
            this.toast = this.$toast.loading({
                duration: 0, // 持续展示 toast
                forbidClick: true,
                message: "请稍等...",
            });
            obj = Object.assign(obj, {pay_way: 1})
            recharge(obj)
                .then((res) => {
                    if (res.code == 1) {
                        let { id } = res.data;
                        this.rechargeInfo = res.data;
                        return prepay({
                            from: "recharge",
                            order_id: id,
                        });
                    } else {
                        this.toast.clear();
                        return false;
                    }
                })
                .then((res) => {
                    this.toast.clear();
                    if (res.code == 1) {
                        let args = res.data;
                        wxPay(args)
                            .then(() => {
                                this.showPopup = true;
                            })
                            .catch(() => {});
                    }
                });
        },
        checkInputText (text) {
            var reg = /^(\.*)(\d+)(\.?)(\d{0,2}).*$/g;
            if (reg.test(text)) {
                //正则匹配通过，提取有效文本
                text = text.replace(reg, "$2$3$4");
            } else {
                //正则匹配不通过，直接清空
                text = "";
            }
            return text; //返回符合要求的文本（为数字且最多有带2位小数）
        },
        onInput() {
            this.number = this.checkInputText(this.number);
        },
    },
    created: function () {
        this.$rechargeTemplate();
        this.$getUserInfo();
    },
};
</script>

<style lang="scss" scoped>
.user-payment {
    padding: 10px 0;
    .payment {
        margin: 0 15px;
        text-align: center;
        border-radius: 10px;
        overflow: hidden;
        .planel {
            padding: 40px 0 36px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            .input {
                margin: 0 45px 0;
                border-bottom: $--border-base;
                input {
                    width: 100%;
                    height: 47px;
                    text-align: left;
                    font-size: 33px;
                    margin-left: 15px;
                }
            }
            .tips {
                margin: 12px 45px;
            }
        }
        .btn {
            width: 255px;
            height: 40px;
            border: none;
            background: linear-gradient(
                79deg,
                rgba(249, 95, 47, 1) 0%,
                rgba(255, 44, 60, 1) 100%
            );
            margin: 35px 45px 15px;
            padding: 0 15px;
        }
    }
    .fast-payment-container {
        margin: 36px 15px 0;
        .title {
            font-size: 19px;
            line-height: 26px;
        }
        .fast-pay {
            margin-top: 20px;
            .fast-pay-item {
                position: relative;
                width: 107px;
                height: 75px;
                border-radius: 5px;
                margin-bottom: 8px;
                &:not(:nth-of-type(3n)) {
                    margin-right: 12px;
                }
                .hot-recharge {
                    position: absolute;
                    padding: 1px 5px;
                    height: 15px;
                    background: linear-gradient(
                        180deg,
                        #ff2c3c 0%,
                        #f95f2f 100%
                    );
                    border-radius: 0 10px 0 10px;
                    font-size: 10px;
                    top: 0;
                    right: 0;
                }
                .price {
                    font-size: 21px;
                    line-height: 25px;
                }
                .preferential {
                    line-height: 16px;
                }
            }
        }
    }
    .pay-popup {
        .content {
            width: 280px;
            text-align: center;
            padding: 20px;
            .img-icon {
                width: 84px;
                height: 59px;
            }
            .desc {
                margin-top: 25px;
            }
            .btn {
                margin-top: 40px;
                width: 224px;
            }
        }
    }
}
</style>