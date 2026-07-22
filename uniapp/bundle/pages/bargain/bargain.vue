<template>
    <view class="bargain-container">
		<navbar title="砍价活动"></navbar>
        <view class="header" :style="{ backgroundImage: 'url(' + staticAsset('bundle/bargain_header.png') + ')' }">
            <!-- <view class="row-between" style="padding-top: 46rpx;">
                <view></view>
                <view class="rule-contain row">
                    <u-icon name="question-circle-fill" size="30" :color="primaryColor" />
                    <view class="xxs primary" style="margin-left: 6rpx;">
                        规则
                    </view>
                </view>
            </view> -->
        </view>
        <view class="main">
            <view class="activity-box">
                <view class="activity-item row mt20" v-for="(item, index) in lists" :key="index">
                    <custom-image width="180rpx" height="180rpx" :src="item.image" radius="10rpx" />
                    <view class="activity-info">
                        <view class="activity-name line2 nr">
                            {{item.name}}
                        </view>
                        <view class="row-between">
                            <view class="column">
                                <view class="xs" style="color: #F95F2F;">
                                    最低可砍至
                                    <price-format 
                                        showSubscript
                                        :subscriptSize="26"
                                        :firstSize="34"
                                        :secondSize="34"
                                        weight="500"
                                        :price="item.activity_price"
                                    />
                                </view>
                                <view class="mt10 xs muted">
                                    单买 ¥{{item.price}}
                                </view>
                            </view>
                            <navigator :url="'/bundle/pages/bargain_process/bargain_process?activityId=' + item.id" hover-class="none" class="lunch-btn white row-center">
                                发起砍价
                            </navigator>
                        </view>
                    </view>
                </view>
                <loading-footer :status="loadingStatus" slotEmpty color="#fff" >
                    <view slot="empty" class="data-null column-center">
                        <view class="white">活动暂未开始</view>
                    </view>
                </loading-footer>
            </view>
        </view>
    </view>
</template>

<script>
    import {getBargainList} from '@/api/activity'
    import {loadingType} from "@/utils/type"
    import {loadingFun} from '@/utils/tools'
    export default {
        data() {
            return {
                page: 1,
                loadingStatus: loadingType.LOADING,
                lists: []
            }
        },
        onLoad() {
            this.$getBargainList()
        },
        onReachBottom() {
            this.$getBargainList()
        },
        methods: {
            $getBargainList() {
                let {page, loadingStatus, lists} = this;
                
                loadingFun(getBargainList, page, lists, loadingStatus).then(res => {
                    if(res) {
                        this.page = res.page;
                        this.lists = res.dataList
                        this.loadingStatus = res.status
                    }
                })
            }
        }
    }
</script>

<style lang="scss">
    .bargain-container {
        background-color: #EE2466;
        min-height: 100vh;
        .header {
            height: 329rpx;
            background-image: none;
            background-size: 100% 100%;
            .rule-contain {
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 100rpx;
                padding: 6rpx 10rpx;
                margin-right: 24rpx;
            }
        }
        .main {
            margin-top: -70rpx;
            position: relative;
            .activity-box {
                padding: 10rpx 24rpx;
                .activity-item {
                    background-color: white;
                    padding: 30rpx 24rpx;
                    border-radius: 20rpx;
                    .activity-info {
                        margin-left: 24rpx;
                        flex: 1;
                        .activity-name {
                            line-height: 40rpx;
                            margin-bottom: 8rpx;
                        }
                        .lunch-btn {
                            background: linear-gradient(270deg, #FF2C3C 0%, #F95F2F 100%);
                            height: 62rpx;
                            width: 172rpx;
                            border-radius: 10rpx;
                            align-self: flex-end;
                        }
                    }
                }
            }
            .data-null {
                padding-top: 150rpx;
            }
        }
    }
</style>
