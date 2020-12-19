<template>
    <div class="news-center">
        <!-- <div class="news-header white column-center">帮助文档</div> -->
        <div class="news-header">
            <ad-swiper :id="7" v-if="!type" radius="0" />
            <ad-swiper :id="10" v-if="type" radius="0" />
        </div>
        <van-tabs v-model="categoryId" swipeable line-width="40">
            <van-tab title="全部">
                <article-list
                    class="mt10"
                    :type="type"
                    finishedText="我可是有底线的～"
                    :errorText="errorText"
                />
            </van-tab>
            <van-tab :title="item.name" v-for="(item) in categoryList" :key="item.id">
                <article-list
                    class="mt10"
                    :type="type"
                    :categoryId="categoryId"
                    finishedText="我可是有底线的～"
                />
            </van-tab>
        </van-tabs>
    </div>
</template>

<script>
import { getCategoryList, getArticleList, getArticleDetail } from "@API/news";
import AdSwiper from "@C/AdSwiper";
import ArticleList from "@C/ArticleList";
export default {
    name: "helpCenter",

    components: {
        ArticleList,
        AdSwiper
    },

    data() {
        return {
            type: 0,
            categoryId: 0,
            isEmpty: false,
            isError: false,
            errorText: "",
            categoryList: []
        };
    },

    methods: {
        $getCategoryList(data) {
            getCategoryList(data).then((res) => {
                if (res.code == 1) {
                    this.categoryList = res.data;
                }
            });
        },
    },

    created() {
        let {id, type} = this.$route.query;
        this.id = id;
        //type存在则为帮助中心
        this.type = type || 0;
        type ?  document.title = '帮助中心' : document.title = '商城咨讯'
    },

    mounted() {
        this.$getCategoryList({type: this.type})
        // this.$getArticleDetail({type: 0, page_no: this.page});
    },
};
</script>

<style lang="scss" scoped>
img {
    width: 100%;
    height: 100%;
}
.news-center {
    .news-header {
        font-size: 34px;
        font-weight: bold;
        font-family: PingFang SC;
        // height: 150px;
        // background-color: #3497f7;
    }
}
.van-tabs/deep/ {
    .van-tab {
        width: 25%;
        flex: none;
    }
}
</style>