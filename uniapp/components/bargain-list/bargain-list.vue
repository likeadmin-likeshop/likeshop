<template>
    <view class="bargain-list-container">       
        <view class="bargain-list mt20" v-for="(item, index) in lists" :key="item.id">
            <view class="header row-between">
                <view class="count-down-container row">
                    <text class="muted xs" style="margin-left: 8rpx;">发起时间：{{item.create_time}}</text>
                </view>
                <view class="primary sm">
                    {{item.status_text}}
                </view>
            </view>
            <navigator class="content row" hover-class="none" :url="'/pages/bundle/bargain_process/bargain_process?bargainId='+item.id">
                <custom-image width="180rpx" height="180rpx" :src="item.image" radius="10rpx" />
                <view class="goods-info">
                    <view class="goods-name line2 nr normal">
                        {{item.name}}
                    </view>
                    <view class="mt10 row">
                        <view class="sm primary">
                            已砍至<text class="sm" style="font-weight: 500;line-height: 48rpx;">￥<text class="xl">{{item.current_price}}</text></text>
                        </view>
                        <view class="xs muted ml20">
                            原价<text style="text-decoration: line-through;"> ¥{{item.price}}</text>
                        </view>
                    </view>
                    <view class="xxs" style="color: #FFA200;line-height: 30rpx;margin-top: 4rpx;">
                        {{item.bargain_tips}}
                    </view>
                </view>
            </navigator>
            <view class="footer row-end">
                <!--                <view hover-class="none" class="purchase-btn primary row-center br60 footer-btn" v-if="item.buy_btn" @click="onPurchaseClick(item.id, item.item_id)">
                    直接购买
                </view> -->
                <navigator hover-class="none" :url="'/pages/bundle/bargain_process/bargain_process?bargainId='+item.id" class="bargain-btn footer-btn white row-center br60" v-if="item.btn_tips != ''">
                    {{item.btn_tips}}
                </navigator>
                <!--                <navigator hover-class="none" class="bargain-btn white row-center br60 footer-btn" v-if="item.pay_btn" :url="'/pages/order_details/order_details?id=' + item.order_id">
                    去支付
                </navigator> -->
            </view>
        </view> 
        <loading-footer :status="loadingStatus" slotEmpty>
            <view class="data-null column-center" slot="empty">
                <image class="img-null" src="/static/images/order_null.png" />
                <view class="xs muted">
                    暂无砍价记录～
                </view>
            </view>
        </loading-footer>
    </view>
</template>

<script>
    import {loadingType} from '@/utils/type'
    import {getBargainActivityList} from "@/api/activity"
    import {loadingFun} from '@/utils/tools'
    export default {
        data() {
            return {
                loadingStatus: loadingType.LOADING,
                page: 1,
                lists: []
            }
        },
        props: {
            bargainType: {
                type: Number,
                default: -1
            }
        },
        mounted() {
             this.$getBargainActivityList()
        },
        onReachBottom() {
            
        },
        methods: {
            $getBargainActivityList() {
                let {page, lists, loadingStatus, bargainType} = this;
                loadingFun(getBargainActivityList, page, lists, loadingStatus, {type: bargainType}).then(res => {
                    if(res) {
                        this.page = res.page;
                        this.lists = res.dataList;
                        this.loadingStatus = res.status;
                    }
                })
            },
            onPurchaseClick(bargainId, itemId) {
                let goods = [{
                    num: 1,
                    item_id: itemId
                }]
                let params = {
                    goods
                }
                uni.navigateTo({
                	url: '/pages/confirm_order/confirm_order?data=' + encodeURIComponent(JSON.stringify(params)) + "&bargain_launch_id=" + bargainId
                });
            }
        }
    }
</script>

<style lang="scss">
    .bargain-list-container {
        .bargain-list {
            background-color: $-color-white;
            .header {
                height: 80rpx;
                padding: 20rpx 20rpx;
            }
            .content {
                padding: 30rpx 24rpx 18rpx;
                .goods-info {
                    margin-left: 24rpx;
                    flex: 1;
                    .goods-name {
                        line-height: 40rpx;
                    }
                }
            }
            .footer {
                padding: 19rpx 24rpx;
                .bargain-btn {
                    // 继续砍价 按钮
                    height: 62rpx;
                    padding: 0 44rpx;
                    background-color: $-color-primary;
                }
                .purchase-btn {
                    // 直接购买
                    height: 62rpx;
                    padding: 0 44rpx;
                    background-color: rgba(255, 44, 60, 0.1);
                }
                .footer-btn {
                    &:not(:last-child) {
                        margin-right: 20rpx;
                    }
                }
            }
        }
        .data-null {
            margin-top: 150rpx;
        }
    }
</style>
