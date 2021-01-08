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
    <div class="goods-details" v-if="!isFirstLoading">
        <div class="app-load row-between bg-white" v-if="isFromApp">
            <div class="row">
                <img src="@A/images/shop_logo.png" alt />
                <div class="ml10">多商户电商平台</div>
            </div>
            <button
                class="br60 bg-primary white"
                size="xs"
                @click="$getAppDownload()"
            >
                app下载
            </button>
        </div>
        <product-swiper :imgList="swiperList"></product-swiper>
        <div class="goods-info bg-white">
            <div class="count-down row-between" v-if="activity.type == 1">
                <div class="price white row">
                    <div class="mr10">
                        <price-slice
                            :showSubscript="true"
                            :price="checkedGoods.price || goodsDetail.price"
                            :weight="700"
                            first-class="first-price"
                            second-class="xxl"
                        ></price-slice>
                    </div>
                    <div class="line-through white md">
                        <price-slice
                            :showSubscript="true"
                            :price="
                                checkedGoods.market_price ||
                                goodsDetail.market_price
                            "
                        ></price-slice>
                    </div>
                </div>
            </div>
            <div class="info-header row" v-else>
                <div class="price row" style="flex: 1">
                    <div class="primary mr10">
                        <price-slice
                            :showSubscript="true"
                            :price="checkedGoods.price || goodsDetail.price"
                            :weight="700"
                            first-class="first-price"
                            second-class="xxl"
                        ></price-slice>
                    </div>
                    <div class="line-through muted md">
                        <price-slice
                            :showSubscript="true"
                            :price="
                                checkedGoods.market_price ||
                                goodsDetail.market_price
                            "
                        ></price-slice>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="goods-name lg bold" style="flex: 1">
                    {{ goodsDetail.name }}
                </div>
                <img
                    v-if="activity.type == 1"
                    class="icon-share"
                    @click="showShare = true"
                    src="@A/images/icon_share.png"
                />
            </div>
            <div class="row-between xs lighter" style="padding: 0 0.32rem 10px">
                <span v-if="goodsDetail.stock !== true"
                    >库存: {{ checkedGoods.stock || goodsDetail.stock }}件</span
                >
                <span>销量: {{ goodsDetail.sales_sum }}件</span>
                <span>浏览量: {{ goodsDetail.click_count }}次</span>
            </div>
        </div>
        <div
            class="coupons row mt10 bg-white"
            style="align-items: flex-start"
            @click="showCoupons = true"
             v-if="couponLists.length"
        >
            <div class="text muted">优惠</div>
            <div class="con" style="flex: 1">
                <div class="row" style="flex: 1">
                    <van-tag plain :color="primaryColor">领券</van-tag>
                    <div class="row ml10" style="flex: 1">
                        <div
                            class="coupons-item primary mr10"
                            v-for="(item, index) in couponLists"
                            :key="item.id"
                        >
                            <div v-if="index < 2" class="row xs">
                                {{ item.use_condition }}
                            </div>
                        </div>
                    </div>
                    <img class="icon-sm" src="@A/images/arrow_right.png" />
                </div>
            </div>
        </div>
        <div class="evaluation bg-white mt10" >
            <div
                class="title row-between"
                @click="goPage('userEvaluate', { id: goodsDetail.id })"
            >
                <div>
                    <span class="balck md mr10">用户评价</span>
                    <span class="primary sm"
                        >好评率{{ comment.goods_rate  || "0%"}}</span
                    >
                </div>
                <div class="row">
                    <span class="lighter">查看全部</span>
                    <img class="icon-sm" src="@A/images/arrow_right.png" />
                </div>
            </div>
            <div class="con" v-if="comment.goods_rate">
                <div class="user-info row" >
                    <img class="avatar mr10" :src="comment.avatar" />
                    <div class="user-name md mr10">{{ comment.nickname }}</div>
                </div>
                <div class="muted xs mt10">
                    <span class="mr10">{{ comment.create_time }}</span>
                </div>
                <div v-if="comment.comment" class="dec mt20">
                    {{ comment.comment }}
                </div>
            </div>
             <div class="con muted row-center" v-else>
                 暂无评价
             </div>
        </div>
        <goods-like class="mt10" v-if="goodsLike.length" :lists="goodsLike" />
        <div class="details mt10 bg-white">
            <div class="title lg">商品详情</div>
            <div class="content" v-html="goodsDetail.content"></div>
        </div>
        <div class="footer row bg-white">
            <div class="btn column-center" @click="goPage('contactOffical')">
                <img class="icon" src="@A/images/icon_contact.png" />
                <span class="xxs lighter">客服</span>
            </div>
            <div
                class="btn column-center"
                hover-class="none"
                bindtap="collectGoods"
                @click="$handleCollectGoods"
            >
                <img
                    class="icon"
                    :src="
                        goodsDetail.is_collect == 0
                            ? require('@A/images/icon_collection.png')
                            : require('@A/images/detail_icon_service.png')
                    "
                />
                <span class="xxs lighter">收藏</span>
            </div>
            <div class="btn column-center" @click="goPage('cart')">
                <img
                    class="icon"
                    :class="{ shaking: iconShaking }"
                    src="@A/images/icon_cart.png"
                />
                <span class="xxs lighter">购物车</span>
                <div v-if="cartNum" class="cart-num white xxs row-center">
                    {{ cartNum }}
                </div>
            </div>
            <div
                v-if="!activity.type == 1"
                class="addcart br60 white mr10 md ml10"
                @click="onShowSpec(1)"
            >
                加入购物车
            </div>
            <div class="right-buy br60 white mr10 md" @click="onShowSpec(2)">
                立即购买
            </div>
        </div>
        <goods-spec
            :show="showSpec"
            :show-add="popupType == 1"
            :show-buy="popupType == 2"
            :goods="goodsDetail"
            @close="showSpec = false"
            @change="onChangeSpec"
            @addcart="onAddCart"
            @buynow="onBuyNow"
        />
        <transition @after-leave="afterLeave" :duration="800" @after-enter="afterEnter" >
            <div v-show="showAnim" class="goods-ball" ref="goodsBall">
                <img class="inner-ball" :src="goodsDetail.image" />
            </div>
        </transition>
        <van-popup
            class="coupons-popup"
            v-model="showCoupons"
            position="bottom"
            round
            closeable
            @close="showCoupons = false"
        >
            <div class="title md bold">领券</div>
            <div class="content bg-gray">
                <coupon-list
                    :coupon-list="couponLists"
                    :is-coupon-center="true"
                    @receive="userReceiveCoupon"
                ></coupon-list>
            </div>
        </van-popup>
        <van-popup
            v-model="posterpopup"
            position="center"
            closeable
            class="code-popup"
            transition="fade"
        >
            <div class="content mb10">
                <img :src="shareImg" alt class="share-img" />
            </div>
            <div class="bg-primary row-center white save-btn">
                长按保存图片到相册
            </div>
        </van-popup>
    </div>
</template>

<script>
import Vue from "vue";
import ProductSwiper from "@C/ProductSwiper";
import PriceSlice from "@C/PriceSlice";
import GoodsSpec from "@C/GoodsSpec";
import CouponList from "@C/CouponList";
import GoodsLike from "@C/GoodsLike";
import {
    getGoodsDetail,
    getGoodsCoupon,
    addCart,
} from "@/api/store";
import { handleCollectGoods, getCoupon } from "@API/user";
import { getAppDownload } from "@API/app";
import { appSource } from "@U/utils";
import { mapState, mapActions } from "vuex";
const CollectType = {
    COLLECTION: 1,
    CANCEL_COLLECTION: 0,
};
export default {
    name: "goodsDetail",
    components: {
        ProductSwiper,
        PriceSlice,
        GoodsSpec,
        CouponList,
        GoodsLike,
    },
    data() {
        return {
            posterpopup: false,
            shareImg: "",
            timeData: {},
            swiperList: [],
            goodsDetail: {},
            checkedGoods: {},
            couponLists: [],
            goodsLike: [],
            isFirstLoading: true,
            showSpec: false,
            popupType: "",
            countTime: 0,
            activity: {},
            comment: {},
            showCoupons: false,
            isFromApp: this.$route.query.isapp,
            showAnim: false,
            iconShaking: false,
        };
    },

    async created() {
        this.id = this.$route.query.id;
        this.$getGoodsDetail();
        this.$getCoupons();
        this.getCartNum()
    },
    mounted() {},
    beforeDestroy() {
        clearTimeout(this.timer1);
        clearTimeout(this.timer2);
    },
    methods: {
        ...mapActions(['getCartNum']),
        $getAppDownload() {
            getAppDownload({ client: appSource() == "ios" ? 3 : 4 }).then(
                (res) => {
                    if (res.code == 1) {
                        window.location = res.data.line;
                    }
                }
            );
        }, 
        goPage(name, query) {
            this.$router.push({
                name,
                query,
            });
        },
        
        $getGoodsDetail() {
            getGoodsDetail({
                id: this.id,
            }).then((res) => {
                if (res.code == 1) {
                    let {
                        goods_image,
                        content,
                        comment,
                        like,
                        activity,
                    } = res.data;
                    this.goodsDetail = res.data;
                    this.swiperList = goods_image;
                    this.goodsLike = like;
                    this.countTime = activity.info
                        ? activity.info.end_time * 1000 - Date.now()
                        : 0;
                    this.activity = activity;
                    this.comment = comment;
                    this.isFirstLoading = false;
                } else {
                    setTimeout(() => {
                        this.$router.go(-1);
                    }, 500);
                }
            });
        },
        $getPoster() {
            this.$toast({
                type: "loading",
                message: "正在生成中...",
                duration: 0,
            });
            getPoster({
                id: this.id,
                url: `/mobile/common/goodsdetail?id=${this.id}`,
            }).then((res) => {
                this.$toast.clear();
                if (res.code == 1) {
                    this.shareImg = res.data;
                    this.posterpopup = true;
                }
            });
        },
        $getCoupons() {
            getGoodsCoupon({
                id: this.id,
            }).then((res) => {
                if (res.code == 1) {
                    this.couponLists = res.data;
                }
            });
        },
        userReceiveCoupon(id) {
            getCoupon({ id: id }).then((res) => {
                if (res.code == 1) {
                    this.$toast({ message: res.msg });
                    this.$getCoupons();
                }
            });
        },
        $handleCollectGoods() {
            let { is_collect, id } = this.goodsDetail;
            if (is_collect == CollectType.COLLECTION) {
                is_collect = CollectType.CANCEL_COLLECTION;
            } else {
                is_collect = CollectType.COLLECTION;
            }
            handleCollectGoods({ is_collect: is_collect, goods_id: id }).then(
                (res) => {
                    if (res.code == 1) {
                          if(is_collect == 1) {
                             this.$toast({ message: "收藏成功"});
                        }else {
                              this.$toast({ message: "取消收藏" });
                        }
                        this.$getGoodsDetail();
                    }
                }
            );
        },
        onShowSpec(type) {
            this.popupType = type;
            this.showSpec = true;
        },
        onChangeSpec(e) {
            this.checkedGoods = e;
        },
        onAddCart(e) {
            let { id, goodsNum } = e;
            addCart({
                item_id: id,
                goods_num: goodsNum,
            }).then((res) => {
                if (res.code == 1) {
                    this.iconShaking = false;
                    this.showSpec = false;
                    this.onControlAnim();
                    this.getCartNum()
                }
            });
        },
        onBuyNow(e) {
            let { id, goodsNum } = e;
            let goods = [
                {
                    item_id: id,
                    num: goodsNum,
                },
            ];
            this.showSpec = false;
            this.$nextTick(() => {
                this.$router.push({
                    name: "confirmOrder",
                    query: {
                        goods: JSON.stringify(goods),
                    },
                });
            });
        },
        // 控制动画方法
        onControlAnim() {
            const goodsBall = this.$refs.goodsBall;
            const innerBall = goodsBall.children[0];
            this.showAnim = true;
        },
        afterEnter(el) {
            this.showAnim = false;
        },
        afterLeave(el) {
            // 动画结束后
            this.iconShaking = true;
        },
    },
    computed: {
        ...mapState(['cartNum'])
    },
};
</script>
<style lang="scss" scoped>
/deep/.first-price {
    font-size: 23px;
}
.goods-details {
    padding-bottom: 50px;
    text-align: left;
    .app-load {
        box-sizing: border-box;
        position: fixed;
        top: 0;
        width: 100%;
        height: 50px;
        z-index: 1;
        padding: 0 10px;
        img {
            width: 86px;
            height: 24px;
        }
    }
    .goods-info {
        position: relative;
        .count-down {
            height: 50px;
            background: #ffd4d8;
            padding: 0 10px 0 0;
            .price {
                background-image: url(data:image/png;base64,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);
                width: 250px;
                height: 100%;
                background-size: 100%;
                padding-left: 12px;
            }
        }
        .info-header {
            padding: 10px 0 0 12px;
        }
        .icon-share {
            width: 67px;
            height: 30px;
        }
        .other-info {
            height: 42px;
        }
        .goods-name {
            padding: 10px 12px;
        }
    }
    .coupons {
        padding: 14px 12px;

        .text {
            width: 50px;
        }
        .coupons-item {
            overflow: hidden;
            > div {
                position: relative;
                height: 20px;
                line-height: 20px;
                padding: 0 9px;
                border-radius: 3px;
                box-sizing: border-box;
                color: #fff;
                background: $--color-primary;
                &::after,
                &::before {
                    content: "";
                    display: block;
                    width: 10px;
                    height: 10px;
                    position: absolute;
                    left: -6px;
                    background-color: #fff;
                    border-radius: 50%;
                    border: 1px solid currentColor;
                    box-sizing: border-box;
                }
                &::after {
                    right: -7px;
                    left: auto;
                }
            }
        }
    }
    .evaluation {
        .title {
            height: 50px;
            border-bottom: $--border-base;
            padding: 0 12px;
        }
        .con {
            padding: 15px 12px;
        }
        .user-info {
            .avatar {
                width: 30px;
                height: 30px;
                border-radius: 50%;
            }
        }
    }
    .bargain {
        .bargain-item {
            padding: 10px 12px;
            .bargain-btn {
                background: linear-gradient(90deg, #f95f2f 0%, #ff2c3c 100%);
                height: 29px;
                padding-left: 14px;
                padding-right: 14px;
                margin-left: 15px;
                box-shadow: 0px 3px 6px rgba(249, 47, 138, 0.4);
            }
        }
    }
    .details {
        line-height: 44px;
        text-align: center;
        .content {
            padding: 0 10px;
            /deep/img {
                display: block;
                width: 100%;
            }
        }
    }
    .footer {
        position: fixed;
        height: 50px;
        width: 100%;
        bottom: 0;
        left: 0;
        .btn {
            width: 50px;
            height: 100%;
            position: relative;
            .cart-num {
                background-color: $--color-primary;
                min-width: 15px;
                height: 15px;
                position: absolute;
                left: 30px;
                top: 3px;
                border-radius: 60px;
            }
        }
        .addcart,
        .right-buy {
            flex: 1;
            text-align: center;
            padding: 8px 0;
        }
        .addcart {
            background-color: $--color-yellow;
        }
        .right-buy {
            background-color: $--color-primary;
        }
    }
    .coupons-popup .title {
        padding: 15px;
    }
    .coupons-popup .content {
        height: 350px;
        overflow-x: auto;
    }
    .share-popup {
        .title {
            height: 50px;
        }
        img {
            width: 50px;
            height: 50px;
        }
        .share-tab {
            margin: 20px 0 70px;
        }
    }
    .code-popup {
        background-color: transparent;
        .content {
            width: 320px;
            height: 470px;
            .share-img {
                width: 100%;
                height: 100%;
                border-radius: 6px;
            }
        }
        .save-btn {
            height: 42px;
            border-radius: 4px;
        }
    }
    // 动画模块样式
    .shaking {
        animation: shake 1.5s 0.15s linear;
        -moz-animation: shake 1.5s 0.15s linear; /* Firefox */
        -webkit-animation: shake 1.5s 0.15s linear; /* Safari and Chrome */
        -o-animation: shake 1.5s 0.15s linear; /* Opera */
    }
    .goods-ball {
        position: fixed;
        top: 100px;
        left: 50%;
        transform: translateX(-50%);
        transition: all 0.5s cubic-bezier(0.08, 0.27, 0.73, 0.95);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
    }
    .inner-ball {
        width: 100%;
        height: 100%;
        // animation: addCartScale 1s ease, throwIn .7s ease-out 1s;
    }
    .v-enter-active {
        transition: all 0.7s cubic-bezier(0, 0, 0, 0);
    }
    .v-enter {
        transform: translateX(-50%) scale(3);
        opacity: 0;
        left: 50%;
    }
    .v-enter-to {
        transform: translateX(-50%) scale(0.7);
        opacity: 1;
    }
    .v-leave-active {
       transition: all 0.5s cubic-bezier(0.08, 0.27, 0.73, 0.95);
    }
    .v-leave {
        transform: translateY(0);
        opacity: 1;
    }
    .v-leave-to {
        transform: scale(0.3);
        opacity: 0;
        left: 75px;
        top: calc(100vh - 100px);
    }
}
@-webkit-keyframes shake {
    10% {
        transform: rotate(15deg);
    }
    20% {
        transform: rotate(-10deg);
    }
    30% {
        transform: rotate(5deg);
    }
    40% {
        transform: rotate(-5deg);
    }
    50%,
    100% {
        transform: rotate(0deg);
    }
}
@-moz-keyframes shake {
    10% {
        transform: rotate(15deg);
    }
    20% {
        transform: rotate(-10deg);
    }
    30% {
        transform: rotate(5deg);
    }
    40% {
        transform: rotate(-5deg);
    }
    50%,
    100% {
        transform: rotate(0deg);
    }
}
@-o-keyframes shake {
    10% {
        transform: rotate(15deg);
    }
    20% {
        transform: rotate(-10deg);
    }
    30% {
        transform: rotate(5deg);
    }
    40% {
        transform: rotate(-5deg);
    }
    50%,
    100% {
        transform: rotate(0deg);
    }
}
@keyframes shake {
    10% {
        transform: rotate(15deg);
    }
    20% {
        transform: rotate(-10deg);
    }
    30% {
        transform: rotate(5deg);
    }
    40% {
        transform: rotate(-5deg);
    }
    50%,
    100% {
        transform: rotate(0deg);
    }
}
</style>
