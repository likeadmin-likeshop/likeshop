<template>
    <div class="recommend" v-if="goodsList.length">
        <!-- <div class="header row-center">
            <img class="title" src="@A/images/recommend_title.png" />
        </div> -->
        <div class="header row-center">
            <div class="line mr10"></div>
            <img class="header-icon mr10" src="@A/images/home_icon_recommend.png" alt="">
            <div class="title xxl normal bold">好物优选</div>
            <div class="line ml10"></div>
        </div>
        <goods-list :lists="goodsList"></goods-list>
    </div>
</template>

<script>
import { getBestList } from "@/api/store";
import GoodsList from "@C/GoodsList";
export default {
    name: "Recommend",
    components: {
        GoodsList
    },
    props: {},
    data() {
        return {
            goodsList: [],
        };
    },
    created() {
        this.$getBestList();
    },
    methods: {
        $getBestList() {
            getBestList({
                page_no: 1,
                page_size: 6,
            }).then((res) => {
                if (res.code == 1) {
                    this.goodsList = res.data.list;
                }
            });
        },
    },
};
</script>
<style lang="scss" scoped>
.recommend {
    padding-bottom: 25px;
    .header {
        padding: 12.5px;
        .line {
            width: 29px;
            height: 1px;
            background-color: $--border-color-base;
        }
        .header-icon {
            width: 19px;
            height: 19px;
        }
        .title {
            line-height: 25px;
        }
    }
}
// .recommend .header .title {
//     width: 238px;
//     height: 22.5px;
//     margin: 5px 0;
// }
</style>