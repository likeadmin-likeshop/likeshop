<template>
    <view class="payment-pages">
        <view class="payment u-skeleton">
            <!-- Header -->
            <view class="payment-header">
                <price-format
                    class="u-skeleton-fillet"
                    :subscript-size="40"
                    :first-size="56"
                    :second-size="40"
                    :price="amount"
                    :weight="500"
                />
                <template v-if="timeout > 0">
                    <view class="payment-count-down">
                        <text>支付剩余时间</text>
                        <u-count-down :timestamp="timeout" :font-size="22" />
                    </view>
                </template>
            </view>

            <!-- Main -->
            <view class="payment-main">
                <view class="payway-container u-skeleton-fillet">
                    <!-- Payway -->
                    <u-radio-group v-model="payway" style="width: 100%">
                        <view class="payway">
                            <view
                                class="payway-item"
                                v-for="(item, index) in paywayList"
                                :key="item.id"
                                @click="changePayway(item.pay_way)"
                            >
                                <u-image
                                    :src="item.icon"
                                    width="48"
                                    height="48"
                                    mode="scaleToFill"
                                />
                                <view class="payway-item-content">
                                    <text class="payway-item-content-name">{{ item.name }}</text>
                                    <text class="payway-item-content-tips">{{ item.extra }}</text>
                                </view>
                                <u-radio
                                    shape="circle"
                                    :name="item.pay_way"
                                    :active-color="primaryColor"
                                />
                            </view>
                        </view>
                    </u-radio-group>
                    <template v-if="!paywayList.length">
                        <view class="payway-empty">暂无支付方式</view>
                    </template>
                </view>
            </view>

            <!-- Footer -->
            <view class="payment-footer u-skeleton-fillet">
                <view
                    :class="['payment-submit', { 'payment-submit--disabled': loadingPay }]"
                    @tap="handlePrepay"
                >
                    <u-loading mode="circle" :show="loadingPay" />
                    <text v-show="!loadingPay">立即支付</text>
                </view>
            </view>
            <u-popup
                v-model="Alipayshow"
                mode="bottom"
                height="600rpx"
                safe-area-inset-bottom
                border-radius="20"
                closeable
                @close="handleclose"
            >
                <view class="Alipay">
                    <view style="margin-top: 50rpx">
                        <price-format
                            class=""
                            :price="amount"
                            :firstSize="48"
                            :secondSize="48"
                            :showSubscript="true"
                            :subscriptSize="48"
                        />
                    </view>
                    <view class="flex row-between" style="width: 100%; margin-top: 50rpx">
                        <text class="bold">支付方式</text>
                        <text class="bold">支付宝</text>
                    </view>
                    <view
                        class=""
                        style="
                            width: 100%;
                            background-color: #f7f7f7;
                            margin: 50rpx 0;
                            padding: 20rpx;
                        "
                        >请复制链接,粘贴至浏览器并支付</view
                    >
                    <button class="btn" @click="$copy(key)">复制链接</button>
                </view>
            </u-popup>
        </view>

        <u-skeleton :loading="loadingSkeleton" :animation="true" bgColor="#FFF" />
    </view>
</template>

<script>
/**
 * @description 支付页面
 * @query {String} from 订单来源: order-商品订单; recharge-充值订单;
 * @query {Number} order_id	订单ID
 */
import { prepay, getPayway } from '@/api/app'
import { wxpay, alipay } from '@/utils/pay'
import { getUserInfo } from '@/api/user'
import store from '@/store'
import { getOrderDetail } from '@/api/order'

export default {
    name: 'Payment',

    data() {
        return {
            from: '', // 订单来源
            order_id: '', // 订单ID
            amount: 0, // 支付金额
            timeout: 0, // 倒计时间戳
            payway: '', // 支付方式
            paywayList: [], // 支付方式列表
            Alipayshow: false,
            loadingSkeleton: true, // 骨架屏Loading
            loadingPay: false, // 支付处理中Loading
            userInfo: {},
            key: ''
        }
    },

    methods: {
        // 更改支付方式
        changePayway(value) {
            this.$set(this, 'payway', value)
        },

        // 初始化页面数据
        initPageData() {
            // 获取支付方式
            getPayway({
                from: this.from,
                order_id: this.order_id
            })
                .then((res) => {
                    if (res.code != 1) throw new Error(res.msg)
                    return res.data
                })
                .then((data) => {
                    this.loadingSkeleton = false
                    this.amount = data.order_amount
                    this.paywayList = data.pay
                    this.payway = this.paywayList[0]?.pay_way
                    // 倒计时
                    const startTimestamp = new Date().getTime() / 1000
                    const endTimestamp = data.cancel_time * 1
                    this.timeout = endTimestamp - startTimestamp
                })
                .catch((err) => {
                    throw new Error(err)
                })
        },
        //支付宝弹窗关闭(查询支付结果)
        handleclose() {
            this.queryPayResult()
                .then((result) => {
                    result ? this.handPayResult('success') : this.handPayResult('fail')
                })
                .catch((errMsg) => this.handPayResult('fail'))
        },
        // 查询支付结果
        queryPayResult() {
            return new Promise((resolve, reject) => {
                getOrderDetail(this.order_id).then((res) => {
                    if (res.data.pay_status == 1) {
                        resolve(true)
                    } else {
                        reject(false)
                    }
                })
            })
        },
        // 预支付处理
        handlePrepay() {
            if (this.loadingPay) return
            this.loadingPay = true
            // #ifdef MP-WEIXIN
            if (this.userInfo.mnp_auth == 0 && this.payway == 1) {
                uni.showModal({
                    content: '当前账号未微信授权，请前往个人设置授权',
                    confirmText: '前往授权',
                    success: ({ confirm }) => {
                        if (confirm) {
                            uni.navigateTo({
                                url: '/bundle/pages/user_profile/user_profile'
                            })
                        }
                    }
                })
            }
            // #endif
            // #ifdef H5
            if (this.userInfo.oa_auth == 0 && this.payway == 1) {
                uni.showModal({
                    content: '当前账号未微信授权，请前往个人设置授权',
                    confirmText: '前往授权',
                    success: ({ confirm }) => {
                        if (confirm) {
                            uni.navigateTo({
                                url: '/bundle/pages/user_profile/user_profile'
                            })
                        }
                    }
                })
                return (this.loadingPay = false)
            }

            // #endif

            this.key = `${store.getters.appConfig.domain}/mobile/bundle/pages/toAlipay/toAlipay?id=${this.order_id}&from=${this.from}&pay_way=${this.payway}&key=${store.getters.token}`
            console.log(this.key)

            prepay({
                from: this.from,
                order_id: this.order_id,
                pay_way: this.payway
            })
                .then(({ code, data }) => {
                    switch (code) {
                        case 1:
                            this.handleWechatPay(data)
                            break
                        case 10001:
                            uni.$on('Alipay', () => {
                                this.Alipayshow = true
                            })
                            this.handleAlipayPay(data)
                            break
                        case 20001:
                            this.handleWalletPay()
                            break
                    }
                })
                .catch((err) => {})
                .finally(() => {
                    setTimeout(() => {
                        this.loadingPay = false
                    }, 500)
                })
        },

        // 微信支付
        handleWechatPay(data) {
            wxpay(data).then((res) => {
                console.log(res)
                this.handPayResult(res)
            })
        },

        // 支付宝支付
        handleAlipayPay(data) {
            alipay(
                data,
                {
                    order_id: this.order_id,
                    from: this.from,
                    pay_way: this.payway
                },
                store.getters.token
            ).then((res) => {
                this.handPayResult(res)
            })
        },

        // 钱包余额支付
        handleWalletPay() {
            console.log('支付成功')
            //余额支付成功
            this.handPayResult('success')
        },

        // 支付后处理
        handPayResult(result) {
            switch (result) {
                case 'success':
                    this.$toast({
                        title: '支付成功'
                    })
                    uni.$emit('payment', {
                        result: true,
                        order_id: this.order_id
                    })
                    break
                case 'fail':
                default:
                    this.$toast({
                        title: '支付失败'
                    })
                    uni.$emit('payment', {
                        result: false,
                        order_id: this.order_id
                    })
            }
        }
    },

    onLoad(options) {
        const from = options.from
        const order_id = options.order_id

        try {
            if (!from && !order_id) throw new Error('页面参数有误')
            this.from = from
            this.order_id = order_id
            this.initPageData()
        } catch (err) {
            console.log(err)
            uni.navigateBack()
        }
        getUserInfo().then((res) => {
            if (res.code == 1) {
                this.userInfo = res.data
            }
        })
    },

    onUnload() {
        // this.handPayResult('fail')
        uni.$off('payment')
    }
}
</script>

<style lang="scss">
page {
    height: 100%;
    padding: 0;
}

.payment-pages {
    height: 100%;

    .payment {
        display: flex;
        flex-direction: column;
        height: calc(100% - env(safe-area-inset-bottom));

        &-header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 300rpx;
            background: linear-gradient(270deg, #ff2c3c 0%, #f95f2f 100%);
            color: #ffffff;
        }

        &-main {
            flex: 1;
            margin-top: -40rpx;
            padding: 0 20rpx;
            overflow: hidden;
        }

        &-footer {
            display: flex;
            align-items: center;
            height: 100rpx;
            padding: 0 20rpx;
            background-color: #ffffff;
        }

        .payway-container {
            padding: 0 20rpx;
            border-radius: 7px;
            background-color: #ffffff;

            .payway-empty {
                display: flex;
                justify-content: center;
                padding: 20rpx 0;
                font-size: 26rpx;
                color: $ls-color-muted;
            }
        }

        .payway {
            width: 100%;

            &-item {
                width: 100%;
                display: flex;
                align-items: center;
                height: 120rpx;

                &:nth-child(n + 2) {
                    border-top: $ls-dashed-border;
                }

                &-content {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    margin-left: 16rpx;

                    &-name {
                        font-size: 28rpx;
                        color: $ls-color-black;
                    }

                    &-tips {
                        font-size: 22rpx;
                        color: $ls-color-muted;
                    }
                }
            }
        }

        &-count-down {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 7rpx 25rpx;
            border-radius: 60px;
            margin-top: 10rpx;
            font-size: 22rpx;
            background-color: #ffffff;
            color: $ls-color-normal;
        }

        &-submit {
            flex: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 74rpx;
            font-size: 28rpx;
            border-radius: 60px;
            background: linear-gradient(270deg, #ff2c3c 0%, #f95f2f 100%);
            color: #ffffff;

            &--disabled::before {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                display: block;
                content: '';
                background: rgba(255, 255, 255, 0.3) !important;
            }
        }
    }
}
.Alipay {
    padding: 20rpx;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    .btn {
        background-color: #4073fa;
        border-radius: 12rpx;
        width: 100%;
        height: 80rpx;
        line-height: 80rpx;
        font-size: 28rpx;
        color: white;
    }
}
</style>
