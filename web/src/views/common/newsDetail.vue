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
    <div class="news-detail">
        <div class="news-detail-header">
            <div class="title xxl mb10">{{articleDetailObj.title}}</div>
            <div class="row-between">
                <div class="xs lighter">发布时间: {{articleDetailObj.create_time}}</div>
                <div class="row">
                    <div class="visit-icon">
                        <img src="@A/images/icon_see.png"/>
                    </div>
                    <div class="ml5 muted xs">{{articleDetailObj.visit}}人浏览</div>
                </div>
            </div>
        </div>
        <div class="main" ref="main" v-html="articleDetailObj.content">
        </div>
    </div>
</template>

<script>
import {getArticleDetail} from "@API/news"
export default {
    name: "helpDetail",

    data() {
        return {
            currentId: 0,
            articleDetailObj: {}
        }
    },

    methods: {
        $getArticleDetail(data) {
            getArticleDetail(data).then(res => {
                if (res.code == 1) {
                    this.articleDetailObj = res.data;
                    this.$nextTick(() => {
                        this.$refs.main.children[0].style.width = "100%";
                        this.$refs.main.children[0].style.height = "100%";
                        const regex = new RegExp('<img', 'gi');
                        this.articleDetailObj.content = this.articleDetailObj.content.replace(regex, `<img style="max-width: 100%; height: auto"`);
                    })
                }
            });
        },
    },

    created() { 
        this.currentId = this.$route.query.id;
        this.type = this.$route.query.type;
    },

    mounted() {
        this.$getArticleDetail({type: this.type, id: this.currentId})
        this.currentId = this.$route.query.id;
    },
}
</script>

<style lang="scss" scoped>
.news-detail {
    background-color: #ffffff;
    .news-detail-header {
        padding: 10px 8px;
        border-bottom: $--border-base;
        .title {

        }
        .visit-icon {
            height: 15px;
            width: 15px;
        }
    }
    .main {
        padding: 20px 8px;
        overflow-x: hidden;
    }
}
img {
    width: 100%;
    height: 100%;
}
</style>