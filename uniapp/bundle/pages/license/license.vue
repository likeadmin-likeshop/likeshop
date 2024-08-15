<template>
    <view class="license">
        <view class="box bg-white">
            <template v-if="images.length">
                <view v-for="(item, index) in images" :key="index" class="m-b-25" @click="viewImage(index)">
                    <u-image :src="item" width="100%" height="348rpx">   
                    </u-image>
                </view>
            </template>
            <template v-else>
                <view class="data-null xs muted">
                    <image src="../../../static/images/order_null.png" mode=""></image>
                    <view>
                        商家暂时还没有上传资质哦~
                    </view>
                </view>
            </template>
        </view>
    </view>
</template>

<script>
	import {
        getCopyright
	} from "@/api/user";
    export default {
        data() {
            return {
                images: []
            }
        },
        
        methods: {
            getCopyrightFunc() {
                getCopyright().then(res => {
                    this.images = res.data
                })
            },
            
            viewImage(current) {
                uni.previewImage({
                    current,
                    urls: this.images// 需要预览的图片http链接列表
                });
            }
        },
        
        onLoad() {
            this.getCopyrightFunc()
        }
    }
</script>

<style lang="scss">
    .license {
        padding: 30rpx;
        .box {
            padding: 30rpx;
            border-radius: 16rpx;
            .data-null {
                padding-top: 200rpx;
                height: 700rpx;
                text-align: center;
                image {
                    width: 200rpx;
                    height: 200rpx;
                }
            }
        }
    }
</style>
