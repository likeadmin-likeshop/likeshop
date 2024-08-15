// +---------------------------------------------------------------------- // | likeshop开源商城系统
// +---------------------------------------------------------------------- // |
欢迎阅读学习系统程序代码，建议反馈是我们前进的动力 // | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github // | 访问官网：https://www.likeshop.cn // |
访问社区：https://home.likeshop.cn // | 访问手册：http://doc.likeshop.cn // |
微信公众号：likeshop技术社区 // |
likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识 // |
likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识 // |
禁止对系统程序代码以任何目的，任何形式的再发布 // | likeshop团队版权所有并拥有最终解释权 //
+---------------------------------------------------------------------- // | author:
likeshop.cn.team // +----------------------------------------------------------------------

<template>
    <view>
        <view class="confirm-order">
            <view class="confirm-con">
                <!-- 收货方式 -->
                <view class="contain">
                    <u-tabs
                        :list="addressTabsList"
                        :is-scroll="addressTabsList.length === 1"
                        :current="addressTabsIndex"
                        :active-color="primaryColor"
                        bar-width="100"
                        :bar-style="{ top: '100%' }"
                        @change="changeDelivery"
                    />
                    <!-- 快递配送 -->
                    <view
                        v-show="addressTabsList[addressTabsIndex]['sign'] === 'express'"
                        class="receiving-card"
                        @click="onAddressExpress"
                    >
                        <u-image
                            class="icon-md mr20"
                            width="44"
                            height="44"
                            src="/static/images/icon_address.png"
                            mode="scaleToFill"
                        />
                        <view class="receiving-content">
                            <template v-if="address.id">
                                <view class="md black bold">
                                    <text>{{ address.contact }}</text>
                                    <text class="ml10">{{ address.telephone }}</text>
                                </view>
                                <view class="xs black mt10">{{
                                    address.province +
                                    address.city +
                                    address.district +
                                    address.address
                                }}</view>
                            </template>
                            <template v-else>
                                <view>请选择收货地址</view>
                            </template>
                        </view>
                        <u-icon name="arrow-right" />
                    </view>
                    <!-- 门店自提 -->
                    <view
                        v-show="addressTabsList[addressTabsIndex]['sign'] === 'store'"
                        class="receiving-card"
                        @click="onAddressStore"
                    >
                        <u-image
                            class="icon-md mr20"
                            width="44"
                            height="44"
                            src="/static/images/icon_address.png"
                            mode="scaleToFill"
                        />
                        <view class="receiving-content">
                            <template v-if="storeInfo.id">
                                <text class="md black bold">{{ storeInfo.name }}</text>
                                <text class="xs black mt10">{{ storeInfo.shop_address }}</text>
                                <text class="xs muted mt10">
                                    <text>营业时间：</text>
                                    <text
                                        >{{ storeInfo.business_start_time }} -
                                        {{ storeInfo.business_end_time }}</text
                                    >
                                </text>
                            </template>
                            <template v-else>
                                <view>请选择门店地址</view>
                            </template>
                        </view>
                        <u-icon name="arrow-right" />
                    </view>
                </view>

                <!-- 门店自提表单 -->
                <view
                    v-show="addressTabsList[addressTabsIndex]['sign'] === 'store'"
                    class="contain store-from"
                >
                    <view class="store-from-item">
                        <text>提货人</text>
                        <u-input
                            v-model="userConsignee"
                            class="flex1"
                            type="text"
                            input-align="right"
                            :clearable="false"
                            placeholder="请输入提货人"
                        />
                    </view>
                    <view class="store-from-item">
                        <text>联系方式</text>
                        <u-input
                            v-model="userMobile"
                            class="flex1"
                            type="text"
                            input-align="right"
                            :clearable="false"
                            placeholder="请输入联系方式"
                        />
                    </view>
                </view>

                <view class="goods contain">
                    <order-goods
                        :team="{ need: orderInfo.team_need }"
                        :list="goodsLists"
                        :delivery="delivery"
                        :order_type="orderInfo.order_type"
                        mode="comfirm"
                    ></order-goods>
                    <!-- <view class="item row-between">
						<view>配送方式</view>
						<view>快递</view>
					</view> -->
                    <view class="item row-between">
                        <view>买家留言</view>
                        <u-input
                            v-model="userRemark"
                            class="flex1 ml20"
                            :clearable="false"
                            placeholder="请添加备注（150字以内）"
                        ></u-input>
                    </view>
                </view>
                <view class="contain benefit" v-if="orderInfo.order_type == 0">
                    <view class="item row-between" @tap="showCoupon = true">
                        <view>优惠券</view>
                        <view class="row">
                            <text class="primary" v-if="orderInfo.discount_amount"
                                >-￥{{ orderInfo.discount_amount }}</text
                            >
                            <text v-else-if="usableCoupon.length" class="primary">{{
                                usableCoupon.length + '张可用'
                            }}</text>
                            <text v-else class="muted">无优惠券可用</text>
                            <image
                                class="icon-sm ml20"
                                src="/static/images/arrow_right.png"
                            ></image>
                        </view>
                    </view>
                    <view class="item row" @tap="changeIntegral" v-if="orderInfo.integral_switch">
                        <view>积分抵扣</view>
                        <view class="ml20 muted xs row" style="flex: 1">
                            共{{ orderInfo.user_integral }}积分{{
                                orderInfo.user_integral < orderInfo.integral_limit
                                    ? '，满' + orderInfo.integral_limit + '可用'
                                    : ''
                            }}
                            <view style="margin-top: 10rpx" @tap.stop="dialogIntegralDesc">
                                <u-icon
                                    class="ml10"
                                    color="#999"
                                    size="30"
                                    name="question-circle"
                                ></u-icon>
                            </view>
                        </view>
                        <checkbox
                            :disabled="
                                orderInfo.user_integral < orderInfo.integral_limit ||
                                orderInfo.integral_config == 0
                            "
                            :checked="Boolean(useIntegral)"
                        >
                        </checkbox>
                    </view>
                </view>

                <view class="price contain">
                    <view class="item row-between">
                        <view>商品金额</view>
                        <view>¥{{ orderInfo.total_goods_price }}</view>
                    </view>
                    <view class="item row-between">
                        <view>运费</view>
                        <view>¥{{ orderInfo.shipping_price }}</view>
                    </view>
                    <view class="item row-between" v-if="orderInfo.discount_amount">
                        <view>优惠券</view>
                        <view class="primary">-¥{{ orderInfo.discount_amount }}</view>
                    </view>
                    <view class="item row-between" v-if="orderInfo.integral_amount">
                        <view>积分抵扣</view>
                        <view class="primary">-¥{{ orderInfo.integral_amount }}</view>
                    </view>
                </view>
            </view>
            <view class="footer bg-white row-between fixed">
                <view class="all-price lg row">
                    <text>合计：</text>
                    <view class="primary">
                        <price-format
                            :first-size="36"
                            :second-size="36"
                            :price="orderInfo.order_amount"
                        ></price-format>
                    </view>
                </view>
                <button class="btn br60 white" size="md" hover-class="none" @tap="onSubmitOrder">
                    提交订单
                </button>
            </view>
        </view>
        <loading-view v-if="showLoading" background-color="transparent" :size="50"></loading-view>
        <loading-view v-if="isFirstLoading"></loading-view>
        <u-popup v-model="showCoupon" border-radius="14" mode="bottom" closeable>
            <view class="pop-title row-between">
                <view class="title">优惠券</view>
            </view>
            <view v-if="showCoupon">
                <tabs :active="couponTabsIndex" :config="{ underLineWidth: 100 }">
                    <tab :title="'可使用优惠券 (' + usableCoupon.length + ')'">
                        <coupon-obj
                            :list="usableCoupon"
                            :type="0"
                            @change="onSelectCoupon"
                            :coupon-id="couponId"
                        ></coupon-obj>
                    </tab>
                    <tab :title="'不可用优惠券 (' + unusableCoupon.length + ')'">
                        <coupon-obj
                            :list="unusableCoupon"
                            :type="1"
                            @change="onSelectCoupon"
                        ></coupon-obj>
                    </tab>
                </tabs>
            </view>
        </u-popup>
    </view>
</template>

<script>
import { orderBuy, getOrderCoupon, getDelivery } from '@/api/order'
import { teamBuy } from '@/api/activity'
import { prepay, getMnpNotice, getPayway } from '@/api/app'
import { wxpay, alipay } from '@/utils/pay'

export default {
    data() {
        return {
            isFirstLoading: true, // 首次页面加载loading
            showLoading: false, // Loading: 显示 | 隐藏
            address: {}, // 收货地址信息
            orderInfo: {}, // 订单信息
            goodsLists: [], // 商品列表
            addressId: '', // 收货地址ID
            useIntegral: 0, // 使用积分
            userRemark: '', // 用户留言
            userConsignee: '', // 取货人
            userMobile: '', // 联系电话

            storeInfo: {}, // 门店信息

            couponId: '', // 优惠券ID
            showCoupon: false, // 显示优惠券Popup
            couponTabsIndex: 0, // 优惠券Tabs索引
            usableCoupon: [], // 优惠券--可使用
            unusableCoupon: [], // 优惠券--不可用

            bargainLaunchId: -1,

            addressTabsIndex: 0, // 地址Tabs索引
            // 地址Tabs列表
            addressTabsList: [
                {
                    id: 1,
                    sign: 'express',
                    name: '快递配送'
                },
                {
                    id: 2,
                    sign: 'store',
                    name: '门店自提'
                }
            ]
        }
    },

    computed: {
        delivery() {
            return this.addressTabsList[this.addressTabsIndex]['id']
        }
    },

    onLoad(options) {
        const data = JSON.parse(decodeURIComponent(options.data))

        this.goods = data.goods
        this.type = data.type
        this.teamId = data.teamId
        this.bargainLaunchId = options.bargain_launch_id
        this.foundId = data.foundId || 0

        // 配送方式
        getDelivery()
            // 请求结果判断
            .then(({ code, data, msg }) => {
                if (code != 1) throw new Error(msg)
                return data
            })
            // 配送方式Tabs处理
            .then((data) => {
                // 快递
                if (!data.is_express) {
                    this.addressTabsList = this.addressTabsList.filter(
                        (item) => item.sign !== 'express'
                    )
                }
                // 自提
                if (!data.is_selffetch) {
                    this.addressTabsList = this.addressTabsList.filter(
                        (item) => item.sign !== 'store'
                    )
                }
            })
            // 页面数据初始化
            .then(() => {
                this.handleOrderMethods('info')
                this.initCouponData()
            })
            // 监听全局事件
            .then(() => {
                uni.$on('selectaddress', (params) => {
                    this.addressId = params.id
                    this.handleOrderMethods('info')
                })

                uni.$on('payment', (params) => {
                    setTimeout(() => {
                        uni.$off('payment')

                        if (params.result) {
                            uni.redirectTo({
                                url: `/pages/pay_result/pay_result?id=${params.order_id}`
                            })
                        } else {
                            uni.redirectTo({
                                url: '/pages/user_order/user_order'
                            })
                        }
                    }, 500)
                })

                uni.$on('store', (params) => {
                    this.storeInfo = params
                })
            })
            .catch((err) => {
                console.log(err)
            })
    },

    onUnload() {
        // 取消全局监听
        uni.$off(['selectaddress', 'store'])
    },

    methods: {
        // 更改配送方式
        changeDelivery(index) {
            this.addressTabsIndex = index
            this.handleOrderMethods('info')
        },

        // 点击选择收货地址
        onAddressExpress() {
            uni.navigateTo({
                url: `/pages/user_address/user_address?type=${1}`
            })
        },

        // 点击门店自提
        onAddressStore() {
            uni.navigateTo({
                url: `/bundle/pages/store_list/store_list`
            })
        },

        // 更改积分使用
        changeIntegral() {
            const useIntegral = this.useIntegral

            const orderInfo = this.orderInfo
            const integral_limit = orderInfo.integral_limit
            const user_integral = orderInfo.user_integral

            if (integral_limit > user_integral) return this.$toast({ title: '未满足使用条件' })

            this.useIntegral = useIntegral ? 0 : 1
            this.$nextTick(() => this.handleOrderMethods('info'))
        },

        // 积分使用说明Dialog
        dialogIntegralDesc() {
            const desc = this.orderInfo.integral_desc

            uni.showModal({
                title: '积分使用说明',
                content: desc,
                confirmColor: '#FF2C3C',
                showCancel: false
            })
        },

        // 选择优惠券
        onSelectCoupon(value) {
            this.couponId = value
            this.showCoupon = false
            this.handleOrderMethods('info')
        },

        // 获取微信授权
        authWechatMessage() {
            return new Promise((resolve, reject) => {
                getMnpNotice({
                    scene: 1
                })
                    .then(({ code, data, msg }) => {
                        if (code != 1) throw new Error(msg)
                        return data
                    })
                    .then((data) => {
                        if (!data.length) return reject()
                        uni.requestSubscribeMessage({
                            tmplIds: data,
                            success(res) {
                                resolve(res)
                            },
                            fail(err) {
                                reject(err)
                            }
                        })
                    })
                    .catch((err) => {
                        reject(err)
                    })
            })
        },

        // 点击订单提交
        onSubmitOrder() {
            uni.showModal({
                title: '温馨提示',
                content: '是否确认下单?',
                confirmColor: '#FF2C3C',
                success: ({ confirm }) => {
                    if (!confirm) return

                    // #ifdef MP-WEIXIN
                    this.authWechatMessage()
                        .catch((err) => {
                            console.log(err)
                        })
                        .finally(() => {
                            this.handleOrderMethods('submit')
                        })
                    // #endif

                    // #ifndef MP-WEIXIN
                    this.handleOrderMethods('submit')
                    // #endif
                }
            })
        },

        // 初始化优惠券数据
        initCouponData() {
            getOrderCoupon({
                goods: this.goods
            })
                .then(({ code, data, msg }) => {
                    if (code != 1) throw new Error(msg)
                    return data
                })
                .then((data) => {
                    this.usableCoupon = data.usable
                    this.unusableCoupon = data.unusable
                })
                .catch((err) => {
                    console.log(err)
                })
        },

        // 初始化页面数据
        async initPageData(from) {
            this.showLoading = true

            try {
                const { code, data, msg } = this.teamId ? await teamBuy(from) : await orderBuy(from)

                if (code == 1) {
                    this.address = data.address
                    this.goodsLists = data.goods_lists
                    //TODO
                    if (data.selffetch_info) {
                        console.log(456)
                        this.storeInfo = data.selffetch_info.selffetch_shop
                            ? data.selffetch_info.selffetch_shop
                            : {}
                        this.userConsignee = data.selffetch_info.contact
                        this.userMobile = data.selffetch_info.mobile
                    }

                    this.orderInfo = data
                    this.$nextTick(() => {
                        this.isFirstLoading = false
                    })
                } else {
                    throw new Error(msg)
                }
            } catch (err) {
                console.log(err)
                this.$toast({ title: '网络异常，请重新进入页面' })
            } finally {
                this.showLoading = false
            }
        },

        // 订单提交
        async handleOrderSubmit(from) {
            this.showLoading = true

            from.remark = this.userRemark
            from.type = this.type

            try {
                const { code, data, msg } = this.teamId ? await teamBuy(from) : await orderBuy(from)

                if (code == 1) {
                    uni.redirectTo({
                        url: `/pages/payment/payment?from=${data.type}&order_id=${data.order_id}`
                    })
                } else {
                    throw new Error(msg)
                }
            } catch (err) {
                console.log(err)
                // this.$toast({ title: '下单异常，请重新操作' })
            } finally {
                this.showLoading = false
            }
        },

        // 订单处理
        handleOrderMethods(action) {
            // 订单提交数据
            const orderFrom = {
                action,
                goods: this.goods,
                delivery_type: this.delivery,
                use_integral: this.useIntegral,
                address_id: this.addressId,
                coupon_id: this.couponId,
                bargain_launch_id: this.bargainLaunchId == -1 ? '' : this.bargainLaunchId
            }

            // 门店自提
            if (this.addressTabsList[this.addressTabsIndex]['sign'] === 'store') {
                orderFrom.selffetch_shop_id = this.storeInfo.id
                orderFrom.consignee = this.userConsignee
                orderFrom.mobile = this.userMobile
            }

            // 拼团
            if (this.teamId) {
                const goods = this.goods[0]

                delete orderFrom.goods

                orderFrom.item_id = goods.item_id
                orderFrom.goods_num = goods.num
                orderFrom.team_id = this.teamId
                orderFrom.found_id = this.foundId
            }

            switch (action) {
                case 'info':
                    this.initPageData(orderFrom)
                    break
                case 'submit':
                    this.handleOrderSubmit(orderFrom)
                    break
            }
        }
    }
}
</script>
<style>
.confirm-order .confirm-con {
    overflow: hidden;
    padding-bottom: calc(120rpx + env(safe-area-inset-bottom));
}

.confirm-order .contain {
    border-radius: 14rpx;
    margin: 20rpx 20rpx 0;
    background-color: #fff;
    overflow: hidden;
}

.confirm-order .img-line {
    height: 1.5px;
    width: 100%;
    display: block;
}

.confirm-order .coupons {
    height: 100rpx;
    padding: 0 24rpx;
}

.goods .title {
    padding: 22rpx 24rpx;
    border-bottom: 1px solid #f6f6f6;
}

.goods .all-num {
    padding: 22rpx 24rpx;
    border-bottom: 1px dotted #f6f6f6;
}

.confirm-order .footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100rpx;
    padding: 0 30rpx;
    box-sizing: content-box;
    padding-bottom: env(safe-area-inset-bottom);
}

.confirm-order .price {
    padding: 28rpx 20rpx;
}

.confirm-order .price .item:not(:last-of-type) {
    margin-bottom: 20rpx;
}

.confirm-order .goods > .item,
.confirm-order .benefit > .item {
    padding: 0 24rpx;
    height: 80rpx;
}

.confirm-order .btn {
    background: linear-gradient(90deg, rgba(249, 95, 47, 1) 0%, rgba(255, 44, 60, 1) 100%);
    padding: 0 50rpx;
}

.confirm-order .van-cell:after {
    border: none;
}

.goods .shop-icon {
    width: 40rpx;
    height: 40rpx;
}

.pop-title {
    height: 100rpx;
    border-bottom: 1rpx solid #f2f2f2;
}

.pop-title .title {
    margin-left: 30rpx;
    font-size: 34rpx;
    font-weight: bold;
    line-height: 36rpx;
}

.receiving-way {
    margin: 20rpx 20rpx 0 20rpx;
    border-radius: 7px;
    background-color: #ffffff;
    overflow: hidden;
}

.receiving-card {
    display: flex;
    align-items: center;
    min-height: 160rpx;
    padding: 20rpx;
    border-top: 1px solid #f2f2f2;
}

.receiving-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.store-from {
    padding: 0 20rpx;
    font-size: 28rpx;
}

.store-from-item {
    display: flex;
    align-items: center;
    height: 100rpx;
}

.store-from-item:nth-child(n + 2) {
    border-top: 1px dashed #f2f2f2;
}
</style>
