<template>
    <div class="product-swiper">
        <van-swipe @change="onChange" :autoplay="3000">
            <van-swipe-item
                v-for="(item, index) in imgList"
                :key="index"
                @click="previewImg(index)"
            >
                <van-image width="100%" height="100%" :src="item.uri" />
            </van-swipe-item>
            <template #indicator>
                <div class="custom-indicator bg-white br60">{{ current + 1 }}/{{imgList.length}}</div>
            </template>
        </van-swipe>
    </div>
</template>

<script>
import { ImagePreview } from "vant";
export default {
    name: "PriceSwiper",
    components: {},
    props: {
        imgList: {
            type: Array,
            default: () => []
        }
    },
    data() {
        return {
            current: 0
        };
    },
    created() {},
    methods: {
        onChange(index) {
            this.current = index;
        },
        previewImg(index) {
            ImagePreview({
                images: this.images,
                startPosition: index
            });
        }
    },
    watch: {
        imgList: {
            immediate: true,
            deep: true,
            handler(newValue, oldValue) {
                this.images = newValue.map(item => item.uri);
            }
        }
    }
};
</script>
<style lang="scss" scoped>
.product-swiper {
    height: 375px;
    position: relative;
    .van-swipe {
        height: 100%;
    }
    .custom-indicator {
        position: absolute;
        right: 12px;
        bottom: 12px;
        height: 17px;
        width: 32px;
        text-align: center;
    }
}
</style>