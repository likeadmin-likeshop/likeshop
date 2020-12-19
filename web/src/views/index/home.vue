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
                <ad-swiper :id="1" height="142px" padding="0 10px 10px 10px" radius="6px"></ad-swiper>
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
                        height="25"
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
            <div class="activity-container">
                <!-- 活动区域 -->
                <div class="special-area row-between" v-if="activityArea.length">
                    <router-link :to="{name: 'activityDetail', query: {
                        id: item.id,
                        title: item.name,
                        name: item.title
                    }}" class="area-item column-center" v-for="(item, index) in activityArea" :key="item.id">
                        <div class="mb5">
                            <div class="bold lg normal">{{item.name}}</div>
                            <div :style="{color: colors[index%colors.length]}" class="mt10 xs desc two-txt-cut">{{item.title}}</div>
                        </div>
                        <van-image style="flex: none;" width="1.73rem" height="1.73rem" :src="item.image" />
                    </router-link>
                </div>
                <!-- end -->
                <div class="hot" v-if="hotGoodsObj.length">
                    <active-area
                        extClass="hot"
                        class="mt10"
                        :lists="hotGoodsObj"
                        progressBarColor="#9912FE"
                    >
                        <div
                            slot="header"
                            hover-class="none"
                            class="row hot-header white"
                            open-type="navigate"
                            @click="goPage('hotList')"
                        >
                            <div class="title lg bold">
                                <img
                                    src="@A/images/home_hot_title.png"
                                    alt=""
                                />
                            </div>
                            <div
                                class="white xs ml5 one-txt-cut"
                                style="flex: 1; text-align: left"
                            >
                                根据销量、搜索、好评等综合得出
                            </div>
                            <div class="row xs">
                                更多
                                <img
                                    class="icon-sm"
                                    src="@A/images/arrow_right_w.png"
                                />
                            </div>
                        </div>
                    </active-area>
                </div>
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
        </div>
    </div>
</template>

<script>
import ActiveArea from "@C/ActiveArea";
import Recommend from "@C/Recommend";
import { getHome, getBestList } from "@API/store";
import {getMenu} from '@API/app'
import GoodsList from "@C/GoodsList";
import AdSwiper from '../../components/AdSwiper/AdSwiper.vue';
import PriceSlice from '../../components/PriceSlice/PriceSlice.vue';
import { ACCESS_TOKEN } from '@/configs'
import { mapState } from "vuex";
export default {
    name: "home",
    components: {
        ActiveArea,
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
            hotShopObj: [],
            hotGoodsObj: [
            ],
            newGoodsObj: [],
            news: [],
            activityArea: [],
            navList: [],
            // 好物优选
            loading: true,
            finished: false,
            isEmpty: false,
            page: 1,
            goodsList: [],
            // end
        };
    },
    methods: {
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
                    console.log(this.navList)
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
                    let {new_goods, host_goods, shop_logo, news, activity_area } = res.data;
                    this.newGoodsObj = new_goods;
                    this.hotGoodsObj = host_goods;
                    this.headerLogo = shop_logo;
                    this.news = news;
                    this.activityArea = activity_area
                }
            });
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
    },
    computed: {
        ...mapState(['token'])
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
        .activity-container {
            .special-area {
                margin: 10px 10px 0;
	            flex-wrap: wrap;
                .area-item {
                    justify-content: stretch;
                    text-align: center;
                    width: 117px;
                    padding: 10px 10px 5px;
                    box-sizing: border-box;
                    background-color: #fff;
                    border-radius: 5px;
                    margin-bottom: 2px;
                    &:not(:nth-of-type(3n)) {
                        margin-right: 2px;
                    }
                }
            }
            .hot {
                padding: 0 10px 5px;
                .hot-header {
                    padding: 10px 9px;
                    .title {
                        width: 86px;
                        height: 19px;
                        img {
                            width: 100%;
                            height: 100%;
                        }
                    }
                }
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
    }
   
}

.van-popup {
    background-color: transparent;
}
</style>