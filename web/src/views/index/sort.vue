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
    <div class="sort bg-white">
        <div class="header" ref="header">
            <van-search
                disabled
                shape="round"
                :left-icon="require('@A/images/icon_search.png')"
                placeholder="请输入搜索关键词"
                @click="goPage('goodsSearch')"
            />
        </div>
        <div class="content row" ref="content">
            <div class="aside" ref="aside">
                <div class="aside-con">
                    <div v-for="(item) in sortList" :key="item.id">
                        <div
                            :class="['one-item', 'sm', { active : ('item' + item.id) == navActive}]"
                            @click="changeActive('item' + item.id)"
                        >
                            <span class="name">{{ item.name }}</span>
                            <div
                                v-if="'item' + item.id == navActive"
                                class="active-line bg-primary"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main bg-gray" ref="main">
                <div class="main-wrap">
                    <ad-swiper :id="4" height="71px" />
                    <div
                        class="one-item-wrap mt10"
                        ref="oneitem"
                        :id="'item' + item.id"
                        v-for="(item) in sortList"
                        :key="item.id"
                    >
                        <div
                            class="two-item bg-white mb10"
                            v-for="sitem in item.sons"
                            :key="sitem.id"
                        >
                            <div class="title row-center">
                                <span class="line mr10"></span>
                                <span class="name bold sm">{{sitem.name}}</span>
                                <span class="line ml10"></span>
                            </div>
                            <div class="three-list row wrap">
                                <div
                                    class="three-item column-center mb10"
                                    v-for="titem in sitem.sons"
                                    :key="titem.id"
                                    @click="goPage('goodsSearch',{id: titem.id, name: titem.name, type:  titem.type})"
                                >
                                    <div class="three-img">
                                        <van-image
                                            fit="contain"
                                            width="100%"
                                            height="100%"
                                            lazy-load
                                            :src="titem.image"
                                        />
                                    </div>
                                    <div class="text mt10 xs">{{ titem.name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div :style="{height: mainheight + 'px'} "></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BScroll from "@better-scroll/core";
import { getCatrgory } from "@/api/store";
import AdSwiper from '@C/AdSwiper'
export default {
    name: "Sort",
    components: {
        AdSwiper
    },
    data() {
        return {
            mainheight: 0,
            navActive: "",
            headerHeight: 0,
            leftTop: [],
            rightTop: [],
            asideHeight: "",
            sortList: [],
            bannerList: [],
        };
    },
    created() {
        this.$getCatrgory();
    },
    methods: {
        goPage(name, query) {
            console.log(query);
            this.$router.push({
                name,
                query,
            });
        },
        $getCatrgory() {
            getCatrgory().then((res) => {
                if (res.code == 1) {
                    this.sortList = res.data;
                    this.$nextTick(() => {
                        this.initScroll();
                        this.getScrollHeght();
                    });
                }
            });
        },
        changeActive(id) {
            let { rightTop } = this;
            rightTop.forEach((item) => {
                if (id == item.id) {
                    this.scrollMain.scrollToElement("#" + item.id, 500);
                }
            });
        },
        initScroll() {
            const { aside, main, header, content } = this.$refs;
            this.headerHeight = header.getBoundingClientRect().height;
            this.contentHeight = content.getBoundingClientRect().height;
            this.scrollAside = new BScroll(aside, {
                scrollY: true,
                click: true,
            });
            this.scrollMain = new BScroll(main, {
                scrollY: true,
                bounce: false,
                click: true,
                probeType: 3,
            });
            this.scrollMain.on("scroll", (val) => {
                let scrollTop = Math.abs(val.y);
                let { leftTop, rightTop } = this;
                for (let i = rightTop.length - 1; i >= 0; i--) {
                    if (scrollTop + 2 >= rightTop[i].top) {
                        this.navActive = rightTop[i].id;
                        break;
                    }
                }
            });
        },
        getScrollHeght() {
            let { oneitem } = this.$refs;
            let rightTop = [];
            let lastheight = 0;
            if (oneitem.length) {
                lastheight = oneitem[oneitem.length - 1].getBoundingClientRect()
                    .height;
                oneitem.forEach((item) => {
                    let top =
                        item.getBoundingClientRect().top - this.headerHeight;
                    rightTop.push({
                        id: item.id,
                        top: top,
                    });
                });
            } else {
                lastheight = oneitem.getBoundingClientRect().height;
                rightTop.push({
                    id: oneitem.id,
                    top:
                        oneitem.getBoundingClientRect().top - this.headerHeight,
                });
            }
            this.navActive = rightTop[0].id;
            this.rightTop = rightTop;
            this.mainheight =
                this.contentHeight - lastheight > 0
                    ? this.contentHeight - lastheight
                    : 0;
            this.$nextTick(() => {
                this.scrollMain.refresh();
            });
        },
    },
};
</script>
<style lang="scss" scoped>
.sort {
    .header {
        height: 45px;
        border-bottom: $--border-base;
        .van-search {
            height: 100%;
        }
    }
    .content {
        height: calc(100vh - 96px);
        .aside {
            flex: none;
            width: 100px;
            height: 100%;
            overflow: hidden;
            .one-item {
                position: relative;
                text-align: center;
                padding: 13px 5px;
                &.active {
                    color: $--color-primary;
                    font-weight: bold;
                }
                .active-line {
                    position: absolute;
                    width: 3px;
                    height: 15px;
                    left: 2px;
                    top: 50%;
                    transform: translateY(-50%);
                }
            }
        }
        .main {
            flex: 1;
            height: 100%;
            overflow: hidden;
            .main-wrap {
                padding: 10px 12px;
                .two-item {
                    border-radius: 5px;
                    .title {
                        height: 45px;
                        .line {
                            width: 20px;
                            height: 1px;
                            background-color: #bbbbbb;
                        }
                    }
                    .three-list {
                        align-items: flex-start;
                        .three-item {
                            width: 33%;
                            .three-img {
                                width: 70px;
                                height: 70px;
                            }
                            .text {
                                text-align: center;
                            }
                        }
                    }
                }
            }
        }
    }
}
</style>
