<template>
    <div class="news-details-container mt16">
        <div class="nav-container row">
            <div class="nr" style="width: 70px" >当前位置：</div>
            <el-breadcrumb style="flex: 1;" separator="/">
                <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
                <el-breadcrumb-item><nuxt-link to="/news_list">商城资讯</nuxt-link></el-breadcrumb-item>
                <el-breadcrumb-item class="line1" style="max-width: 800px;">{{detailsObj.title}}</el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <div class="content-box">
            <div class="news-detail-box mr16">
                <div class="content-header bg-white">
                    <div class="news-detail-title">
                        {{detailsObj.title}}
                    </div>
                    <div class="row">
                        <div class="sm muted">
                            发布时间：{{detailsObj.create_time}}
                        </div>
                        <div class="row" style="margin-left: 40px">
                            <i class="el-icon-view muted"></i>
                            <div class="muted" style="margin-left: 3px;">{{detailsObj.visit}} 人浏览</div>
                        </div>
                    </div>
                </div>
                <div class="content-html-box bg-white">
                    <div v-html="detailsObj.content"></div>
                </div>
            </div>
            <div class="recommend-box">
                <div class="recommend-box-header row bg-white">
                    <div class="primary-line"></div>
                    <div class="xxl" style="font-weight: 500">为您推荐</div>
                </div>
                <div class="recommend-box-content bg-white">
                    <div class="recommend-list-container">
                        <div class="recommend-list-item" v-for="(item) in recommend_list" :key="item.id" @click="toOther(item.id)">
                            <el-image style="width: 244px; height:183px;border-radius: 6px" fit="cover" :src="item.image" />
                            <div class="goods-info">
                                <div class="line2 goods-name">{{item.title}}</div>
                                <div class="row" style="margin-top: 10px">
                                    <i class="el-icon-view muted"></i>
                                    <div class="muted xs" style="margin-left: 4px;">{{item.visit}} 人浏览</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    head() {
    return {
        title: this.$store.getters.headTitle,
        link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
    };
  },
    async asyncData({$get, $post, query}) {
        let detailsObj = {};
        let recommend_list = [];
        let res = await $get("article/detail", {params: {id: query.id, client: 2}});
        if(res.code == 1) {
            detailsObj = res.data;
            recommend_list = res.data.recommend_list
        }
        return {
            detailsObj,
            recommend_list,
        };
    },
    watchQuery: ['id'],
    data() {
        return {
            recommend_list: []
        }
    },
    mounted() {
        console.log('route', this.$route)
        // this.getNewsDetails(this.$route.query.id);
    },
    methods: {
        // async getNewsDetails(id) {
        //     let res = await this.$get("article/detail", {params: {id: id, client: 2}});
        //     if(res.code == 1) {
        //         this.detailsObj = res.data;
        //         this.recommend_list = res.data.recommend_list
        //     }
        // },
        toOther(id) {
            this.$router.push('/news_list/news_list_detail?id=' + id)
        }
    }
}
</script>

<style lang="scss" scoped>
.news-details-container {
    .nav-container {
        padding: 15px 16px;
    }
    .content-box {
        display: flex;
        flex-direction: row;
        .news-detail-box {
            width: 900px;
            .content-header {
                padding: 20px;
                border-bottom: 1px solid #e5e5e5;
                .news-detail-title {
                    color: #222;
                    font-size: 24px;
                    font-weight: 500;
                    margin-bottom: 43px;
                }
            }
            .content-html-box {
                padding: 24px 20px;
                &>div {
                    width: 100%;
                    overflow: hidden;
                    ::v-deep img {
                        width: 100%;
                    }
                }
            }
        }
        .recommend-box {
            width: 264px;
            .recommend-box-header {
                padding: 15px 10px;
                border-bottom: 1px solid #e5e5e5;
                .primary-line {
                    margin-right: 10px;
                    background-color: $-color-primary;
                    width: 4px;
                    height: 20px;
                }
            }
            .recommend-box-content {
                .recommend-list-container {
                    .recommend-list-item {
                        padding: 10px;
                        cursor: pointer;
                        .goods-info {
                            margin-top: 8px;
                        }
                    }
                }
            }
        }
    }
}
</style>