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
    <div class="user-container">
        <div class="user-header">
            <div class="title lg white row-center">个人中心</div>
            <div class="user-info row-between">
                <div class="row">
                    <van-image
                        width="55"
                        height="55"
                        round
                        @click="goToPage('userProfile')"
                        :src="
                            userInfo.avatar ||
                            require('@A/images/default_avatar.png')
                        "
                    ></van-image>
                    <div v-if="userInfo.nickname" class="user-nickname">
                        <div
                            style="
                                font-size: 21px;
                                line-height: 30px;
                                font-weight: 500;
                                text-align: left;
                            "
                        >
                            {{ userInfo.nickname }}
                        </div>
                        <div class="invite-code-box row">
                            <div class="xs white ml10">会员ID:  {{userInfo.sn}}</div>
                            <div
                                @click.stop="onCopy(userInfo.sn)"
                                class="xs normal copy-btn row-center ml5"
                            >
                                复制
                            </div>
                        </div>
                    </div>
                    <div v-else class="user-text column" @click="goToPage('userProfile')">
                        <div
                            style="
                                font-size: 21px;
                                line-height: 30px;
                                font-weight: 500;
                                text-align: left;
                            "
                        >
                            点击登录
                        </div>
                        <div class="sm" style="line-height: 16px; text-align: left">
                            登录体验更多功能
                        </div>
                    </div>
                </div>
            </div>
            <router-link
                :to="{ name: 'userVip' }"
                class="user-header-footer row-between"
            >
                <div class="row">
                    <img
                        style="width: 21px; height: 21px"
                        src="@A/images/icon_userVip.png"
                    />
                    <div
                        class="nr ml5"
                        style="line-height: 25px; color: #ffe0a1"
                    >
                        {{
                            userInfo.nickname ?  userInfo.level: "登录查看会员权益"
                        }}
                    </div>
                </div>
                <div class="row">
                    <div
                        class="sm mr5"
                        style="line-height: 25px; color: #ffe0a1"
                    >
                        {{userInfo.next_level_tips || '查看会员权益'}}
                    </div>
                    <van-icon name="arrow" color="#FFE0A1" />
                </div>
            </router-link>
        </div>
        <div class="my-assets-box">
            <div class="my-assets-header row-between md">
                <div class="ml10 md" style="font-weight: 500">我的资产</div>
            </div>
            <div class="my-assets-content row">
                <router-link
                    :to="{ name: 'userWallet' }"
                    class="my-assets-item column-center"
                >
                    <div
                        class="xl primary"
                        style="line-height: 18px; margin-bottom: 9px"
                    >
                        {{ userInfo.user_money || 0 }}
                    </div>
                    <div class="sm normal" style="line-height: 18px">余额</div>
                </router-link>
                <router-link
                    :to="{ name: 'signUp' }"
                    class="my-assets-item column-center"
                >
                    <div
                        class="xl primary"
                        style="line-height: 18px; margin-bottom: 9px"
                    >
                        {{ userInfo.user_integral || 0 }}
                    </div>
                    <div class="sm normal" style="line-height: 18px">积分</div>
                </router-link>
                <router-link
                    :to="{ name: 'userCoupon' }"
                    class="my-assets-item column-center"
                >
                    <div
                        class="xl primary"
                        style="line-height: 18px; margin-bottom: 9px"
                    >
                        {{ userInfo.coupon || 0 }}
                    </div>
                    <div class="sm normal" style="line-height: 18px">
                        优惠券
                    </div>
                </router-link>
            </div>
        </div>
        <div class="my-order-box ml10 bg-white">
            <router-link
                :to="{ name: 'userOrder' }"
                class="my-order-header row-between sm"
            >
                <div class="ml10 md normal" style="font-weight: 500">
                    我的订单
                </div>
                <div class="row mr10">
                    <div class="sm" style="color: #888888">全部订单</div>
                    <img class="icon-sm" src="@A/images/arrow_right.png" />
                </div>
            </router-link>
            <div class="my-order-content row">
                <router-link
                    :to="{ name: 'userOrder' }"
                    class="my-order-item column-center"
                >
                    <div class="img-wrap column">
                        <div v-if="userInfo.wait_pay" class="badge bg-white">
                            {{ userInfo.wait_pay }}
                        </div>
                        <img
                            class="order-icon"
                            src="@A/images/icon_my_payment.png"
                        />
                    </div>
                    <div class="order-text">待付款</div>
                </router-link>
                <router-link
                    :to="{ name: 'userOrder' }"
                    class="my-order-item column-center"
                >
                    <div class="img-wrap column">
                        <div
                            v-if="userInfo.wait_delivery"
                            class="badge bg-white"
                        >
                            {{ userInfo.wait_delivery }}
                        </div>
                        <img
                            class="order-icon"
                            src="@A/images/icon_my_fahuo.png"
                        />
                    </div>
                    <div class="order-text">待发货</div>
                </router-link>
                <router-link
                    :to="{ name: 'userOrder' }"
                    class="my-order-item column-center"
                >
                    <div class="img-wrap column">
                        <div v-if="userInfo.wait_take" class="badge bg-white">
                            {{ userInfo.wait_take }}
                        </div>
                        <img
                            class="order-icon"
                            src="@A/images/icon_my_shouhuo.png"
                        />
                    </div>
                    <div class="order-text">待收货</div>
                </router-link>
                <router-link
                    :to="{ name: 'goodsEvaluate' }"
                    class="my-order-item column-center"
                >
                    <div class="img-wrap column">
                        <div
                            v-if="userInfo.wait_comment"
                            class="badge bg-white"
                        >
                            {{ userInfo.wait_comment }}
                        </div>
                        <img
                            class="order-icon"
                            src="@A/images/icon_my_pingjia.png"
                        />
                    </div>
                    <div class="order-text">商品评价</div>
                </router-link>
                <router-link
                    :to="{ name: 'postSale' }"
                    class="my-order-item column-center"
                >
                    <div class="img-wrap column">
                        <div v-if="userInfo.after_sale" class="badge bg-white">
                            {{ userInfo.after_sale }}
                        </div>
                        <img
                            class="order-icon"
                            src="@A/images/icon_my_shouhou.png"
                        />
                    </div>
                    <div class="order-text">退款/售后</div>
                </router-link>
            </div>
        </div>
        <div class="my-service-box bg-white">
            <div class="my-service-header row-between">
                <div class="ml10 md" style="font-weight: 500">我的服务</div>
            </div>
            <div class="my-service-content row wrap">
                <div
                    class="my-service-item column-center normal"
                    v-for="(items, index) in myOptList"
                    :key="index"
                    @click="goPage(items)"
                >
                    <img class="service-icon" :src="items.image" />
                    <div class="service-name sm">{{ items.name }}</div>
                </div>
            </div>
        </div>
        <recommend></recommend>
    </div>
</template>

<script>
import Recommend from "@C/Recommend";
import { getUser } from "@/api/user";
import { getMenu } from "@API/app";
import { getUrlparams } from "@U/relUrl";
export default {
    name: "user",
    components: {
        Recommend,
    },
    data() {
        return {
            myOptList: [],
            isLogin: false,
            loading: true,
            finished: false,
            page: 1,
            goodsList: [],
            userInfo: {},
        };
    },
    methods: {
        goToPage: function (name, query) {
            this.$router.push({
                name: name,
                query,
            });
        },
        $getMenu() {
            getMenu({ type: 2, client: 2 }).then((res) => {
                if (res.code == 1) {
                    this.myOptList = res.data;
                }
            });
        },
        $getUser() {
            getUser().then((res) => {
                if (res.code == 1) {
                    this.userInfo = res.data;
                }
            });
        },
        onCopy(str) {
            var aux = document.createElement("input");
            aux.setAttribute("value", str);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
            this.$toast({
                type: "success",
                message: "复制成功",
            });
        },
        goPage({ link, link_type }) {
            switch (link_type) {
                case 2:
                    window.location.href = link;
                    break;
                default:
                    let url = link.split("?");
                    this.$router.push({
                        path: url[0],
                        query: getUrlparams(link),
                    });
            }
        },
    },
    mounted: function () {
        this.$getUser();
        this.$getMenu();
    },
};
</script>

<style lang="scss" scoped>
.user-container {
    .user-header {
        height: 190px;
        background-image: url("./../../assets/images/my_topbg.png");
        background-size: 100% 100%;
        position: relative;
        .title {
            height: 50px;
        }
        .user-info {
            color: white;
            padding-left: 15px;
            .user-nickname {
                font-weight: bold;
                line-height: 25px;
                font-size: 18px;
                margin-left: 15px;
                .invite-code-box {
                    border: 1px solid white;
                    border-radius: 50px;
                    height: 20px;
                    .copy-btn {
                        background-color: #ffdfda;
                        height: 100%;
                        width: 45px;
                        border-radius: 50px;
                    }
                }
            }
            .user-text {
                margin-left: 15px;
            }
            .user-opt {
                position: relative;
                .dot {
                    position: absolute;
                    background-color: #ee0a24;
                    border: 1px solid #FFFFFF;
                    color: var(--primary-color);
                    border-radius: 100%;
                    top: 3px;
                    right: 0px;
                    font-size: 11px;
                    min-width: 8px;
                    height: 8px;
                }
            }
        }
        .user-header-footer {
            height: 20px;
            width: 339px;
            background-image: url(./../../assets/images/bg_memberGrade.png);
            background-size: 100% 100%;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 8px;
        }
    }
    .my-assets-box {
        background-color: white;
        border-radius: 7px;
        margin: 10px 10px 0;
        box-sizing: border-box;
        .my-assets-header {
            height: 44px;
            border-bottom: 1px dashed $--border-color-base;
        }
        .my-assets-content {
            padding: 10px 0px;
            .my-assets-item {
                width: 33%;
            }
        }
    }
    .my-order-box {
        padding: 0 0 10px;
        background-color: white;
        border-radius: 7px;
        margin: 10px 10px 0;
        box-sizing: border-box;
        .my-order-header {
            height: 44px;
            border-bottom: 1px dashed $--border-color-base;
            .arrow {
                width: 20px;
                height: 20px;
            }
        }
        .my-order-content {
            .my-order-item {
                width: 20%;
                margin-top: 10px;
                color: $--color-text-normal;
                .img-wrap {
                    position: relative;
                }
                .badge {
                    padding: 0 3px;
                    min-width: 14px;
                    height: 14px;
                    line-height: 14px;
                    border-radius: 14px;
                    box-sizing: border-box;
                    border: 1px solid currentColor;
                    color: $--color-primary;
                    position: absolute;
                    left: 17px;
                    top: -5px;
                    z-index: 2;
                }
                .order-icon {
                    width: 26px;
                    height: 26px;
                }
                .order-text {
                    font-size: 13px;
                    font-weight: 400;
                    line-height: 13.5px;
                    margin-top: 10px;
                }
            }
        }
    }
    .my-service-box {
        margin: 14px 10px 10px;
        border-radius: 7px;
        box-sizing: border-box;
        .my-service-header {
            height: 44px;
            border-bottom: 1px dashed $--border-color-base;
        }
        .my-service-content {
            padding-bottom: 20px;
            .my-service-item {
                width: 25%;
                margin-top: 20px;
                & .service-icon {
                    width: 26px;
                    height: 26px;
                }
                .service-name {
                    font-weight: 400;
                    line-height: 13.5px;
                    margin-top: 10px;
                }
            }
        }
    }
}
</style>