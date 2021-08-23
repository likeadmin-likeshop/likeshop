<template>
    <view class="goods-bargain-container">
        <view class="row-center" style="height: 100rpx;">
            <view class="bLine" />
            <view class="lg bold" style="margin: 0 30rpx;">
                更多砍价商品
            </view>
            <view class="bLine" />
        </view>
        <goods-list type="double" :list="lists" :isBargain="true"></goods-list>
    </view>
</template>

<script>
    import {getBargainList} from '@/api/activity'
    import {loadingType} from '@/utils/type'
    import {loadingFun} from '@/utils/tools'
    export default {
        data() {
            return {
                page: 1,
                loadingStatus: loadingType.LOADING,
                lists: []
            }
        },
        mounted() {
            this.$getBargainList()
        },
        methods: {
            $getBargainList() {
                let {page, loadingStatus, lists} = this;
                loadingFun(getBargainList, page, lists, loadingStatus).then(res => {
                    if(res) {
                        this.page = res.page;
                        this.lists = res.dataList;
                        this.loadingStatus = res.status
                    }
                })
            }
        }
    }
</script>

<style lang="scss">
    .goods-bargain-container {
        padding-bottom: 40rpx;
        .bLine {
            height: 2rpx;
            background-color: #CCCCCC;
            width: 58rpx;
        }
    }
</style>
