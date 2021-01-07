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
    <div class="goods-evaluate">
        <van-tabs v-model="active" line-width="40" @change="changeShow">
            <van-tab
                v-for="item in evaluate"
                :key="item.type"
                :title="item.title"
                :name="item.type"
            >
                <evaluate-list :type="item.type" />
            </van-tab>
        </van-tabs>
    </div>
</template>

<script>
import EvaluateList from "@C/EvaluateList";
// 评价列表
export default {
    name: "goodsEvaluate",
    components: {
        EvaluateList,
    },
    data() {
        return {
            evaluate: [
                {
                    type: 1,
                    title: "待评价",
                    show: false,
                },
                {
                    type: 2,
                    title: "已评价",
                    show: false,
                },
            ],
            active: 0,
        };
    },
    methods: {
        goPage(name) {
            this.$router.push({ name: name });
        },
    },
    created() {
        let type = Number(this.$route.query.type) || 0;
        this.changeShow(type);
    },
    methods: {
        changeShow(type) {
            const { evaluate } = this;
            let index = evaluate.findIndex((item) => {
                return item.type == type;
            });
            if (index != -1) {
                this.active = type;
                this.evaluate[index].show = true;
            }
        },
    },
};
</script>

<style lang="scss" scoped>
</style>