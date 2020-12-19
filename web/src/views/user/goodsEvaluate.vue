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