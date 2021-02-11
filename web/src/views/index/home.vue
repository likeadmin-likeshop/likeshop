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
    <div class="home-container">
        <div class="header">
            <div
                class="row white bg-primary"
                style="height: 30px; padding-top: 5px"
            >
                <img class="logo ml10" :src="headerLogo" />
            </div>
            <van-sticky>
                <van-search
                    disabled
                    shape="round"
                    :background="primaryColor"
                    placeholder="请输入搜索关键词"
                    @click="goPage('goodsSearch')"
                />
            </van-sticky>
        </div>
        <div class="main">
            <div class="banner">
                <!-- <img src="@A/images/banner.png" /> -->
                <ad-swiper :id="1" height="4.02667rem" padding="0 10px 10px 10px" radius="6px"></ad-swiper>
            </div>
            <van-swipe v-if="navList.length" class="nav-box bg-white" :loop="false" :indicator-color="primaryColor" :show-indicators="true">
                <van-swipe-item class="row wrap mb10" v-for="(items, index) in navList" :key="index">
                    <div
                        class="nav-item column-center normal"
                        v-for="(item, index) in items"
                        :key="index"
                        @click="handleNav(item.link, item.link_type)"
                    >
                        <img :src="item.image" alt />
                        <div class="xs">{{ item.name }}</div>
                    </div>
                </van-swipe-item>
            </van-swipe>
            <div class="news row bg-white" v-if="news.length">
                <img class="icon-toutiao" src="@A/images/icon_toutiao.png" />
                <span class="gap-line"></span>
                <div class="news-list">
                    <van-swipe
                        :autoplay="3000"
                        :show-indicators="false"
                        :vertical="true"
                        :touchable="false"
                        height="0.66667rem"
                    >
                        <van-swipe-item
                            v-for="(item, index) in news"
                            :key="index"
                            class="row"
                        >
                            <router-link class="row normal" :to="{name: 'newsCenter'}">
                                <van-tag
                                    v-if="item.is_new"
                                    class="tag"
                                    plain
                                    round
                                    :color="primaryColor"
                                    size="medium"
                                    >最新</van-tag
                                >
                                <div class="text-swiper ml10 one-txt-cut">
                                    {{ item.title }}
                                </div>
                            </router-link>
                        </van-swipe-item>
                    </van-swipe>
                </div>
                <img class="icon-sm ml10" src="@A/images/arrow_right.png" />
            </div>
            <div class="new-goods-container" v-if="newGoodsObj.length">
                <div class="new-goods-header row-center">
                    <div class="line mr10"></div>
                    <img
                        class="header-icon mr10"
                        src="@A/images/home_icon_newproduct.png"
                        alt=""
                    />
                    <div class="title xxl normal bold">新品推荐</div>
                    <div class="line ml10"></div>
                </div>
                <div class="goods-contain">
                    <div
                        class="goods-item row bg-white"
                        v-for="item in newGoodsObj"
                        :key="item.id"
                        @click="goPage('goodsDetail', { id: item.id })"
                    >
                        <div class="goods-img">
                            <van-image
                                :src="item.image"
                                width="100%"
                                height="100%"
                            />
                        </div>
                        <div class="goods-info column">
                            <div class="goods-name two-txt-cut nr">
                                {{ item.name }}
                            </div>
                            <div
                                class="goods-params row-between muted mt10 mb5 xxs"
                            >
                                <div class="xxs">
                                    原价
                                    <price-slice
                                        showSubscript
                                        subScriptClass="xxs"
                                        firstClass="xxs"
                                        secondClass="xxs"
                                        :price="item.market_price"
                                    />
                                </div>
                                <div class="xxs">
                                    {{ item.sales_sum }}人购买
                                </div>
                            </div>
                            <div class="row-between">
                                <price-slice
                                    weight="bold"
                                    showSubscript
                                    subScriptClass="sm"
                                    firstClass="home-new-goods-size"
                                    secondClass="sm"
                                    :price="item.price"
                                    :color="primaryColor"
                                ></price-slice>
                                <div
                                    class="fastbuy-btn white row-center br60 xs"
                                >
                                    立即抢购
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommend" v-if="goodsList.length">
                <div class="recommend-header row-center">
                    <div class="line mr10"></div>
                    <img class="header-icon mr10" src="@A/images/home_icon_recommend.png" alt="">
                    <div class="title xxl normal bold">好物优选</div>
                    <div class="line ml10"></div>
                </div>
                <van-list
                    v-model="loading"
                    :finished="finished"
                    finished-text="没有更多了"
                    @load="$getBestList"
                >
                    <goods-list :lists="goodsList" ></goods-list>    
                </van-list>
            </div>
            <van-popup class="column-center" v-model="showCoupop" round transition="fade">
                <div class="coupon-popup">
                    <div class="coupon-container">
                        <div class="coupon-wrapper">
                            <div class="coupon-item row" v-for="item in couponPopList" :key="item.id">
                                <div class="lg primary money">
                                    <price-slice
                                        :price="item.money"
                                        :showSubscript="true"
                                        subScriptClass="lg"
                                        firstClass="coupon-pop-size"
                                        secondClass="lg"
                                    />
                                </div>
                                <div class="column coupon-desc">
                                    <div class="bold md">{{item.name}}</div>
                                    <div class="xs muted mt5" style="line-height: 15px;">{{item.use_goods_type}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-coupon-btn lg white bg-primary mt10 br60 column-center" @click="showCoupop = false">
                    立即领取
                </div>
            </van-popup>
        </div>
    </div>
</template>

<script>
import Recommend from "@C/Recommend";
import { getHome, getBestList } from "@API/store";
import {getMenu, getCouponPopList} from '@API/app'
import {getCoupon} from "@API/user"
import GoodsList from "@C/GoodsList";
import AdSwiper from '../../components/AdSwiper/AdSwiper.vue';
import PriceSlice from '../../components/PriceSlice/PriceSlice.vue';
import { ACCESS_TOKEN } from '@/configs'
import { mapState } from "vuex";
export default {
    name: "home",
    components: {
        Recommend,
        GoodsList,
        AdSwiper,
        PriceSlice
    },
    data() {
        return {
            colors : ["#FE41B7","#FA444D","#BD5AFF", "#FB831C", "#2DC1B9"],
            showCoupop: false,
            showHotRank: true,
            showHotShop: true,
            headerLogo: "",
            remainTime: 0,
            couponList: [],
            newGoodsObj: [],
            news: [],
            activityArea: [],
            navList: [],
            couponPopList: [],
            // 好物优选
            loading: true,
            finished: false,
            isEmpty: false,
            page: 1,
            goodsList: [],
            // end
            isDischarge: true
        };
    },
    methods: {
        userGetCoupon(id) {
            getCoupon({id: id}).then(res => {
                if(res.code == 1) {
                    this.$toast(res.msg)
                    this.$getHome()
                }
            })
        },
        handleArray(data, array = [], optNum = 10) {
        if(data.length <= optNum ) {
            data.length > 0 && array.push(data)
            return array;
        }
        array.push(data.splice(0,optNum))
        return this.handleArray(data, array,optNum)
    },
        $getMenu() {
            getMenu({type: 1, client: 2}).then(res => {
                if(res.code == 1) {
                    let data =  JSON.parse(JSON.stringify(res.data)) 
                    const arr = this.handleArray(res.data);
                    this.navList = arr;
                }
            })
        },
        handleNav(url, type) {
            // 处理页面跳转
            switch(type) {
                case 1:
                    // 正常页面跳转
                    this.$router.push(url)
                    break;
                case 2:
                    // webview
                    window.location.href = url;
                    break;
                case 3:
                    // tabbar
                    this.$router.push(url)
                    break;
            }
        },
        goPage(name, query) {
            this.$router.push({ name: name, query });
        },
        $getHome() {
            getHome().then((res) => {
                if (res.code == 1) {
                    let { coupon, new_goods, shop_logo, news, activity_area } = res.data;
                    let currentTime = Date.parse(new Date()) / 1000;
                    this.couponList = coupon;
                    this.newGoodsObj = new_goods;
                    this.headerLogo = shop_logo;
                    this.news = news;
                    this.activityArea = activity_area
                }
            });
        },

        $getCouponPopList() {
            if(!this.token) {
                return;
            }
            getCouponPopList().then(res => {
                if(res.code == 1) {
                    this.couponPopList = res.data;
                    if(res.data.length > 0) {
                        this.showCoupop = true
                    }
                }
            })
        },

        // 时间改变
        onChangeDate() {

        },
        // 计时结束
        activeTimeOut() {
            this.$getHome()
        },
        // 获取好物优选
        $getBestList() {
            let {page, finished} = this;
            this.loading = true;
            if(finished == true) return;
            getBestList({
                page_no: page,
                page_size: 15,
            }).then((res) => {
                if (res.code == 1) {
                    this.loading = false;
                    let {more, list} = res.data
                    this.goodsList.push(...list);
                    this.page ++;
                    if(!more) {
                        this.finished = true;
                    }
                    if (this.goodsList.length <= 0) {
                        this.isEmpty = true;
                    }
                }
            });
        },
    },
    created() {
        this.$getMenu();
        this.$getHome();
        this.$getBestList()
        this.$getCouponPopList();
    },
    mounted() {
        this.isDischarge = false;
    },
    computed: {
        ...mapState(['token'])
    },
    destroyed() {
        this.isDischarge = true;
    }
};
</script>

<style lang="scss" scoped>
.router-link-active {
    text-decoration: none;
}
.home-container {
    .header {
        height: 183px;
        background: url(../../assets/images/bg_hometop.png) no-repeat;
        background-size: 100%;
        .logo {
            width: auto;
            height: 25px;
        }
    }
    .main {
        margin-top: -90px;
        .nav-box {
            padding: 15px 0 0;
            .nav-item {
                width: 20%;
                margin-bottom: 16px;
                img {
                    width: 41px;
                    height: 41px;
                    margin-bottom: 7px;
                }
            }
        }
        .news {
            padding: 5px 15px;
            box-shadow: 0px 3px 14px rgba(0, 0, 0, 0.06);
            .icon-toutiao {
                width: 57px;
                height: 17px;
            }
            .gap-line {
                height: 14px;
                width: 1px;
                flex: none;
                background-color: #dcdddc;
                margin: 0 15px;
            }
            .tag {
                font-size: 10px;
                flex: none;
                line-height: 14px;
            }
            .news-list {
                height: 25px;
                width: 500px;
                overflow: hidden;
                .van-swipe {
                    width: 100%;
                    margin: 0 auto;
                    height: 100% !important;
                }
            }
            img {
                flex: none;
            }
        }
        .new-goods-container {
            .new-goods-header {
                padding: 12.5px;
                .line {
                    width: 29px;
                    height: 1px;
                    background-color: $--border-color-base;
                }
                .header-icon {
                    width: 19px;
                    height: 19px;
                }
                .title {
                    line-height: 25px;
                }
            }
            .goods-contain {
                .goods-item {
                    margin: 0 10px 10px;
                    border-radius: 5px;
                    .goods-img {
                        width: 120px;
                        height: 120px;
                        flex: none;
                    }
                    .goods-info {
                        padding: 12.5px 10px 11px;
                        flex: 1;
                        .goods-params {
                            line-height: 15px;
                        }
                        .fastbuy-btn {
                            background-color: $--color-primary;
                            height: 26px;
                            width: 73px;
                            line-height: 16px;
                        }
                    }
                }
            }
        }
        .recommend {
            padding-bottom: 10px;
            .recommend-header {
                padding: 12.5px;
                .line {
                    width: 29px;
                    height: 1px;
                    background-color: $--border-color-base;
                }
                .header-icon {
                    width: 19px;
                    height: 19px;
                }
                .title {
                    line-height: 25px;
                }
            }
        }
        .coupon-popup {
            overflow: hidden;
            background-image: url(../../assets/images/popCoupon.png);
            height: 400px;
            width: 319px;
            background-size: 100% 100%;
            .coupon-container {
                overflow-y: hidden;
                height: 220px;
                padding-top: 160px;
                .coupon-wrapper {
                    overflow-y: auto;
                    height: 100%;
                    &::-webkit-scrollbar {
                        display: none;
                    }
                    .coupon-item {
                        background-image: url(../../assets/images/pop_bg_coupon.png);
                        height: 55px;
                        background-size: 100% 100%;
                        margin: 0 37px 10px;
                        padding: 10px 0;
                        .money {
                            width: 80px;
                            text-align: center;
                            border-right: 1px dashed $--color-primary;
                            line-height: 39px;
                        }
                        .coupon-desc {
                            line-height: 21px;
                            margin-left: 15px;
                        }
                    }
                }
            }
        }
        .get-coupon-btn {
            height: 42px;
            border: 1px solid #F8D07C;
            font-weight: 500;
            width: 239px;
        }
    }
   
}

.van-popup {
    background-color: transparent;
}
</style>