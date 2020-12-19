<template>
    <div :style="{'padding': padding, 'height': height}" v-if="list.length">
        <van-swipe :stop-propagation="false" :autoplay="3000" :indicator-color="primaryColor" v-show="list && list.length > 0">
            <van-swipe-item v-for="(item, index) in list" :key="index">
                <van-image
                    width="100%"
                    height="100%"
                    :radius="radius ? radius : '5'"
                    lazy-load
                    :src="item.image"
                    @click.prevent="goPage($event, item)"
                />
            </van-swipe-item>
        </van-swipe>
    </div>
</template>

<script>
import { getAdList } from "@/api/store";
export default {
    name: "AdSwiper",
    props: {
        id: {
            type: Number,
        },
        radius: {
            type: String
        },
        padding: {
            type: String,
        },
        height: {
            type: String,
            default: "142px"
        }
    },
    data() {
        return {
            list: [],
        };
    },
    created() {
        this.$getAdList();
    },
    mounted() {
    },
    methods: {
        $getAdList() {
            getAdList({ pid: this.id }).then((res) => {
                if (res.code == 1) {
                    this.list = res.data;
                }
            });
        },
        goPage(e, item) {
            let { link, link_type, params } = item;
            switch (link_type) {
                case 1:
                case 2:
                    this.$router.push({
                        path: link,
                        query: params
                    });
                    break;
                case 3: location.href = link;
                    break;
            }
        },
    },
    watch: {},
};
</script>

<style lang="scss" scoped>
.van-swipe {
    width: 100%;
    height: 100%;
    margin: 0 auto;
}
</style>