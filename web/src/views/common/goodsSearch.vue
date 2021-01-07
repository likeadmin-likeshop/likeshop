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
    <div class="goods-search">
            <div class="header-wrap">
                <van-search
                    show-action
                    autofocus
                    :value="keyword"
                    :left-icon="require('@A/images/icon_search.png')"
                    placeholder="请输入搜索关键词"
                    @click.stop="showHistroyPage"
                    @clear="onClear"
                    shape="round"
                    @search="onSearch"
                    @input="onChange"
                >
                    <template #action>
                        <div @click="onSearch">搜索</div>
                    </template>
                </van-search>
            </div>

        <van-sticky :offset-top="0">
            <div v-show="!showHistory" class="header row bg-white">
                <div
                    class="tag row-center"
                    :class="{ primary: comprehensive }"
                    @click="onNormal"
                >
                    综合
                </div>
                <div
                    class="tag row-center"
                    data-type="priceSort"
                    @click="onPriceSort"
                >
                    <div :class="{ primary: priceSort }">价格</div>
                    <div>
                        <trigonometry
                            direction="up"
                            size="small"
                            :color="priceSort == 'desc' ? '#FF5058' : '#333'"
                        ></trigonometry>
                        <trigonometry
                            size="small"
                            :color="priceSort == 'asc' ? '#FF5058' : '#333'"
                        ></trigonometry>
                    </div>
                </div>
                <div
                    class="tag row-center"
                    data-type="saleSort"
                    @click="onSaleSort"
                >
                    <div :class="{ primary: saleSort }">销量</div>
                    <div>
                        <trigonometry
                            direction="up"
                            size="small"
                            :color="saleSort == 'desc' ? '#FF5058' : '#333'"
                        ></trigonometry>
                        <trigonometry
                            size="small"
                            :color="saleSort == 'asc' ? '#FF5058' : '#333'"
                        ></trigonometry>
                    </div>
                </div>
                <!-- <div class="tag row-center">新品</div> -->
                <div class="tag row-center" @click="changeType">
                    <img
                        class="icon-sm"
                        :src="
                            type === '1'
                                ? require('@A/images/icon_one.png')
                                : require('@A/images/icon_double.png')
                        "
                    />
                </div>
            </div>

        </van-sticky>
        <div class="content bg-white" v-show="showHistory">
            <div class="search-words">
                <div
                    style="border-bottom: 1px solid #e5e5e5"
                    v-if="showHotList"
                >
                    <div class="title">热门搜索</div>
                    <div class="words row wrap">
                        <div
                            class="item br60 bg-gray mr10 mb10 normal sm one-txt-cut"
                            v-for="(item, index) in hotList"
                            :key="index"
                            @click="onChangeKeyword(index, item)"
                        >
                            {{ item }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-words">
                <div class="title row-between">
                    <div>历史搜索</div>
                    <div
                        class="xs muted mr10"
                        style="padding: 5px 10px"
                        @click.stop="$clearSearch"
                    >
                        清空
                    </div>
                </div>
                <div class="words row wrap">
                    <div
                        class="item br60 bg-gray mr10 mb10 normal sm one-txt-cut"
                        v-for="(item, index) in historyList"
                        :key="index"
                        @click.stop="onChangeKeyword(index, item)"
                    >
                        {{ item }}
                    </div>
                </div>
            </div>
        </div>
        <div class="content" v-show="!showHistory">
            <div v-show="!isDataNull">
                <van-list
                    v-model="loading"
                    :finished="isFinished"
                    finished-text="没有更多了"
                    @load="$getGoodsSearch"
                >
                    <div class="goods-list">
                        <div v-show="showType == 'double'" class="double">
                            <goods-list :type="showType" :lists="goodsList" />
                        </div>
                        <div v-show=" showType == 'one'" class="one">
                        <goods-list  :lists="goodsList" :type="showType" />
                    </div>
                    </div>
                </van-list>
            </div>
            <div class="data-null" v-show="isDataNull">
                <div class="column-center" style="padding-top: 100px">
                    <img class="img-null" src="@A/images/goods_null.png" />
                    <div class="lighter">暂无商品</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { getGoodsSearch, getSearchpage, clearSearch } from "@/api/store";
import { trottle } from "@U/utils";
import Trigonometry from "@C/Trigonometry";
import GoodsList from "@C/GoodsList";
const sortType = {
    //降序
    DESC: "desc",
    // 升序
    ASC: "asc",
    // 无排序方式
    NONE: "",
};
export default {
    name: "goodsSearch",
    data() {
        return {
            keyword: "",
            showHotList: false,
            hotList: [],
            historyList: [],
            showHistory: false,
            goodsList: [],
            page: 1,
            isFinished: false,
            loading: true,
            priceSort: "",
            saleSort: "",
            type: "2",
            isDataNull: false,
            showType: "double",
        };
    },
    components: {
        Trigonometry,
        GoodsList,
    },
    computed: {
        comprehensive() {
            return this.priceSort == "" && this.saleSort == "";
        },
    },
    created() {
        let { id, name,type } = this.$route.query;
        this.type = type
        if (id) {
            document.title = name;
            this.id = id;
            this.$getGoodsSearch();
        } else {
            this.showHistory = true;
        }
        this.$getSearchpage();
        this.onNormal = trottle(this.onNormal, 200, this);
        this.onSaleSort = trottle(this.onSaleSort, 200, this);
        this.onPriceSort = trottle(this.onPriceSort, 200, this);
        this.onSearch = trottle(this.onSearch, 200, this);
    },
    methods: {
        onSearch() {
            this.showHistory = false;
            this.cleanStatus();
            this.$getGoodsSearch();
        },
        onChange(value) {
            this.keyword = value;
        },
        onChangeKeyword(index, item) {
            this.keyword = item;
            this.showHistory = false;
            this.onSearch();
        },
        onClear() {
            this.keyword = "";
        },
        $getSearchpage() {
            getSearchpage().then((res) => {
                if (res.code == 1) {
                    let { history_lists, hot_lists } = res.data;
                    this.showHotList = false;
                    this.hotList = hot_lists;
                    this.historyList = history_lists;
                    if (this.hotList) {
                        if (this.hotList.length > 0) {
                            this.showHotList = true;
                        }
                    }
                }
            });
        },
        $clearSearch() {
            clearSearch().then((res) => {
                if (res.code == 1) {
                    this.$getSearchpage();
                }
            });
        },
        $getGoodsSearch() {
            let {
                page,
                goodsList,
                keyword,
                priceSort,
                saleSort,
                isFinished,
            } = this;
              this.loading = true;
            if (isFinished) return;
            getGoodsSearch({
                category_id: this.type == 1 ? this.id : "",
                brand_id: this.type == 0 ? this.id : "",
                page_no: page,
                keyword,
                price: priceSort,
                sales_sum: saleSort,
            }).then((res) => {
                if (res.code == 1) {
                    this.loading = false;
                    let { list, more } = res.data;
                    goodsList.push(...list);
                    this.goodsList = goodsList;
                    this.page++;
                    this.$nextTick(() => {
                        if (!more) {
                            this.isFinished = true;
                        }
                        if (goodsList.length <= 0) {
                            // 空
                            this.isDataNull = true;
                        }
                    });
                }
            });
        },
        onNormal() {
            this.saleSort = sortType.NONE;
            this.priceSort = sortType.NONE;
            this.cleanStatus();
            this.$getGoodsSearch();
        },
        onPriceSort() {
            this.saleSort = sortType.NONE;
            this.cleanStatus();
            if (
                this.priceSort == sortType.ASC ||
                this.priceSort == sortType.NONE
            ) {
                this.priceSort = sortType.DESC;
            } else {
                this.priceSort = sortType.ASC;
            }
            this.$getGoodsSearch();
        },
        onSaleSort() {
            this.priceSort = sortType.NONE;
            this.cleanStatus();
            if (
                this.saleSort == sortType.ASC ||
                this.saleSort == sortType.NONE
            ) {
                this.saleSort = sortType.DESC;
            } else {
                this.saleSort = sortType.ASC;
            }
            this.$getGoodsSearch();
        },
        changeType() {
            this.type = this.type == '1' ? '2' : '1'
            this.showType = this.showType == "double" ? "one" : "double";
        },
        showHistroyPage() {
            if (this.id) {
                console.log(this.id);
            } else {
                this.$getSearchpage();
                this.showHistory = true;
            }
        },
        cleanStatus() {
            this.page = 1;
            this.isFinished = false;
            this.loading = true;
            this.goodsList = [];
            this.isDataNull = false;
        },
    },
};
</script>

<style lang="scss" scoped>
.goods-search {
    height: 100vh;
    display: flex;
    flex-direction: column;
    .header-wrap {
        position: relative;
        z-index: 10;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.03);
    }
    .header {
        height: 40px;
        .tag {
            height: 100%;
            flex: 1;
        }
    }
    .content {
        flex: 1;
        .search-words {
            padding: 0 12px;
            .title {
                padding: 13px 0;
            }
            .words {
                .item {
                    line-height: 26px;
                    height: 26px;
                    padding: 0 12px;
                }
            }
        }
        .goods-list {
            overflow: hidden;
        }
        .data-null {
            .img-null {
                width: 150px;
                height: 150px;
                flex: none;
            }
        }
    }
}
</style>