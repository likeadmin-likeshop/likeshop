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