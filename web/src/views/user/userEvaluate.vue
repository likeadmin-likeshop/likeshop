<template>
    <div class="user-evaluate">
        <div class="header bg-white" v-if="!isEmpty">
            <div class="title xs row">
                <div class="lighter mr10">商品好评率</div>
                <div class="primary">{{this.percent}}</div>
            </div>
            <div class="tab row">
                <template v-for="(item, index) in categoryList">
                    <div
                        :class="['tab-item','xs' ,'mr5', 'br60', 'mb10', type == item.id ?  'bg-primary white' : 'bg-gray' ]"
                        v-if="item.count"
                        :key="index"
                        @click="onChangType(item.id)"
                    >{{item.name}}({{item.count}})</div>
                </template>
            </div>
        </div>
        <div class="main">
            <div v-if="isEmpty && finished" class="column-center" style="padding-top: 100px">
                <img class="img-null" src="@A/images/goods_null.png" />
                <span class="lighter">暂无评价</span>
            </div>
            <van-list
                v-else
                v-model="loading"
                :finished="finished"
                finishedText="没有更多了"
                :error="error"
                @load="$getCommentList"
            >
                <div class="evaluation-list bg-white">
                    <div class="evaluation-item" v-for="(item, index) in commentList" :key="index">
                        <div class="user-info row">
                            <img class="avatar mr10" :src="item.avatar" />
                            <div class="user-name sm mr10">{{item.nickname}}</div>
                            <van-rate
                                size="16px"
                                :color="primaryColor"
                                readonly
                                :value="item.goods_comment"
                            />
                        </div>
                        <div class="muted xs mt10 row">
                            <div class="mr10">{{item.create_time}}</div>
                            <div>{{item.spec_value_str}}</div>
                        </div>
                        <div v-if="item.comment" class="dec mt10" style="word-wrap:break-word;">{{item.comment}}</div>
                        <div class="img mt10 row" style="flex-wrap: wrap;" v-if="item.image.length">
                            <div
                                class="img-item mr10 mb10"
                                v-for="(imgitem, imgindex) in item.image"
                                :key="imgindex"
                                @click="previewImg(imgindex, item.image)"
                            >
                                <van-image
                                    width="2.13333rem"
                                    fit="cover"
                                    height="2.13333rem"
                                    lazy-load
                                    class="goods-img"
                                    :src="imgitem"
                                />
                            </div>
                        </div>
                        <div class="seller-recall-container bg-gray mt10" v-if="item.reply">
                            <div class="lighter nr" style="word-wrap:break-word;">
                                商家回复：<span class="normal two-txt-cut">{{item.reply}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </van-list>
        </div>
    </div>
</template>

<script>
import { getCommentList, getCommentCategory } from "@/api/store";
import { ImagePreview } from "vant";
export default {
    name: "userEvaluate",
    data() {
        return {
            commentList: [],
            categoryList: [],
            percent: "",
            isEmpty: true,
            type: "",
            loading: true,
            finished: false,
            error: false,
            page: 1
        };
    },
    async created() {
        this.id = this.$route.query.id;
        await this.$getCommentCategory();
        this.$getCommentList();
    },
    methods: {
        onChangType(id) {
            let { type } = this;
            if (id == type) return;
            this.type = id;
            this.page = 1;
            this.commentList = [];
            this.finished = false;
            this.$nextTick(() => this.$getCommentList());
        },
        $getCommentCategory() {
            return new Promise((resolve) => {
                getCommentCategory(this.id).then((res) => {
                    let {
                        code,
                        data: { comment, percent },
                    } = res;
                    if (code == 1) {
                        this.categoryList = comment;
                        this.percent = percent;
                        this.type = comment[0].id;
                        this.$nextTick(() => resolve());
                    }
                });
            });
        },
        $getCommentList() {
            let { page, type, commentList, finished } = this;
            this.loading = true;
            if (finished) return;
            getCommentList({
                id: type,
                goods_id: this.id,
                page_no: page,
            }).then((res) => {
                if (res.code == 1) {
                    this.loading = false;
                    let { list, more } = res.data;
                    commentList.push(...list);
                    this.commentList = commentList;
                    this.page = ++page;
                    console.log(this.commentList)
                    this.$nextTick(() => {
                        if (!more) {
                            this.finished = true;
                        }
                        if (commentList.length <= 0) {
                            this.isEmpty = true;
                            return;
                        } else {
                            this.isEmpty = false;
                        }
                    });
                } else {
                    this.error = true;
                }
            });
        },
        previewImg(index, images) {
            ImagePreview({
                images: images,
                startPosition: index
            });
        }
    },
};
</script>

<style lang="scss" scoped>
.user-evaluate {
    padding-top: 10px;
    text-align: left;
    .header {
        .title {
            padding: 12px 12px;
            border-bottom: $--border-base;
        }
        .tab {
            padding: 15px 0 5px 12px;
            flex-wrap: wrap;
            .tab-item {
                padding: 4px 14px;
            }
        }
    }
    .evaluation-item {
        padding: 10px;
        &:not(:last-of-type) {
            border-bottom: $--border-base;
        }
        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        .seller-recall-container {
            padding: 12px 10px;
            border-radius: 6px;
        }
    }
}
</style>