<template>
    <div class="article-list">
        <van-list
        v-model="loading"
        :finished="finished"
        :finished-text="finishedText"
        v-show="!isEmpty"
        @load="$getArticleList()"
        >
            <div class="article-item bg-white" v-for="(item, index) in articleList" :key="index" v-show="!isEmpty" @click="visitArticle(item.id)">
                <div class="article-info row-between">
                    <div class="column" style="align-self:flex-start">
                        <div class="lg two-txt-cut" style="font-weight:500;">{{item.title}}</div>
                        <div class="two-txt-cut nr mt10 lighter">{{item.synopsis}}</div>
                    </div>
                    <div class="info-cover ml10">
                        <van-image :src="item.image" width="100%" height="100%" radius="5px" />
                    </div>
                </div>
                <div class="article-bottom row-between">
                    <div class="xs muted">发布时间: {{item.create_time}}</div>
                    <div class="row mt10">
                        <div style="height: 15px;width: 15px;">
                            <img src="@A/images/icon_see.png"/>
                        </div>
                        <div class="xs muted ml5">{{item.visit}}人浏览</div>
                    </div>
                </div>
            </div>
        </van-list>
        <div class="data-null column-center" v-show="isEmpty">
            <img src="@A/images/null_notice.png" class="img-null" />
            <div class="muted">{{emptyText}}</div>
        </div>
    </div>
</template>

<script>
import {getArticleList} from "@API/news"
export default {
    name: "articleList",
    props: {
        categoryId: {
            type: Number,
            default: 0
        },
        type: {
            type: Number | String,
            default: 0
        },
        finishedText: {
            type: String,
            default: ""
        },
        emptyText: {
            type: String,
            default: "暂无任何内容..."
        },
    },
    data() {
        return {
            loading: false,
            articleList: [],
            finished: false,
            page: 1,
            isEmpty: false
        }
    },
    methods: {   
        $getArticleList() {
            this.loading = true;
            if (this.finished == true) return;
            getArticleList({type: this.type, page_no: this.page, id: this.categoryId || ""}).then((res) => {
                if (res.code == 1) {
                    this.loading = false;
                    let { more, list } = res.data;
                    this.articleList.push(...list);
                    this.page ++;
                    this.$nextTick(() => {
                        if (!more) {
                            this.finished = true;
                        }
                        if (this.articleList.length <= 0) {
                            this.isEmpty = true;
                        }
                        return;
                    });
                }
            });
        },
        visitArticle(id) {
            this.loading = false;
            this.$router.push({
                name: "newsDetail",
                query: {
                    id: id,
                    type: this.type
                },
            });
        }
    },
    mounted() {
        this.$getArticleList({type: this.type})
    }
}
</script>

<style lang="scss" scoped>

.article-list {
    text-align: left;
    display: flex;
    flex-direction: column;
    .article-item {
        padding: 10px;
        border-bottom: 1px solid #F2F2F2;
        img{
            width: 100%;
            height: 100%;
        }
        .article-info {
            .info-cover {
                width: 120px;
                height: 90px;
                flex: none;
            }
        }
    }
}
.data-null {
    padding-top: 100px;
    padding-bottom: 100px;
}
</style>