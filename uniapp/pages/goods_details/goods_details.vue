<template>
    <view class="goods-details">
        <!-- #ifndef H5 -->
        <navbar
            title="商品详情"
            :background="{ background: `rgba(256,256,256,${percent})` }"
            :titleColor="`rgba(0,0,0,${percent})`"
            :immersive="true"
        ></navbar>
        <!-- #endif -->

        <!-- #ifdef H5 -->
        <download-nav v-if="showDownload" :top="44"></download-nav>
        <!-- #endif -->
        <loading-view v-if="isFirstLoading"></loading-view>
        <view class="contain" v-if="!isNull">
            <bubble-tips top="180rpx"></bubble-tips>
            <product-swiper :imgUrls="swiperList" :video="goodsDetail.video"></product-swiper>
            <!-- 秒杀 -->
            <view class="seckill bg-seckill" v-if="goodsType == 1">
                <view class="bg-seckill__price">
                    <view>
                        <view style="color: white">限时秒杀</view>
                        <view>
                            <price-format
                                :first-size="46"
                                :second-size="32"
                                :subscript-size="32"
                                :price="goodsDetail.min_price"
                                :weight="500"
                            ></price-format>
                            <template v-if="goodsDetail.min_price != goodsDetail.max_price">
                                <text style="font-size: 46rpx">-</text>
                                <price-format
                                    :first-size="46"
                                    :second-size="32"
                                    :subscript-size="32"
                                    :show-subscript="false"
                                    :price="goodsDetail.max_price"
                                    :weight="500"
                                ></price-format>
                            </template>
                        </view>
                    </view>
                </view>
                <view class="bg-seckill__time">
                    <text class="xs" style="color: white">距离活动结束</text>
                    <u-count-down
                        :timestamp="countTime"
                        color="black"
                        bg-color="#fff"
                        separator-color="#fff"
                        font-size="24"
                        height="36"
                        separator-size="26"
                        @end="getGoodsDetailFun"
                        separator="zh"
                    ></u-count-down>
                </view>
            </view>
            <!-- 拼团 -->
            <view class="group bg-team" v-if="goodsType == 2">
                <view class="bg-team__price">
                    <view>
                        <view style="color: white">拼团优惠</view>
                        <view>
                            <text class="tip"> {{ team.people_num || 0 }}人团 </text>
                            <price-format
                                :subscript-size="32"
                                :first-size="46"
                                :second-size="32"
                                :price="team.team_min_price || 0"
                                :weight="500"
                            ></price-format>
                            <text class="xs">起</text>
                        </view>
                    </view>
                </view>
                <view class="bg-team__time">
                    <text class="xs" style="color: white">距离活动结束</text>
                    <u-count-down
                        :timestamp="countTime"
                        color="black"
                        bg-color="#fff"
                        separator-color="#fff"
                        font-size="24"
                        height="36"
                        separator-size="26"
                        @end="getGoodsDetailFun"
                        separator="zh"
                    ></u-count-down>
                </view>
            </view>
            <!-- 会员价 -->
            <view class="goods-info bg-white bg-vip" v-if="!goodsType && goodsDetail.member_price">
                <view class="vip-name">
                    <view class="line1"> {{ userInfo.level }}价</view>
                </view>
                <view style="padding: 0 11rpx">
                    <price-format
                        :price="goodsDetail.member_price"
                        :first-size="48"
                        :second-size="48"
                        :subscript-size="42"
                        :weight="500"
                        color="#E0A356"
                    >
                    </price-format>
                    <text style="color: #e0a356">起</text>
                </view>
            </view>
            <view
                class="goods-info bg-white m-x-20 round-box"
                :style="{
                    'margin-top': goodsType != 0 || goodsDetail.member_price ? '-90rpx' : '30rpx'
                }"
            >
                <!-- v-if="goodsType != 1" -->
                <view class="info-header row" v-if="goodsType == 0">
                    <view class="price row flex1">
                        <view class="primary mr10">
                            <price-format
                                :first-size="46"
                                :second-size="32"
                                :subscript-size="32"
                                :price="goodsDetail.min_price"
                                :weight="500"
                            ></price-format>
                            <template v-if="goodsDetail.min_price != goodsDetail.max_price">
                                <text style="font-size: 46rpx">-</text>
                                <price-format
                                    :first-size="46"
                                    :second-size="32"
                                    :subscript-size="32"
                                    :show-subscript="false"
                                    :price="goodsDetail.max_price"
                                    :weight="500"
                                ></price-format>
                            </template>
                        </view>
                        <view class="line-through muted md">
                            <price-format
                                :price="goodsDetail.market_price"
                                v-if="goodsDetail.market_price && goodsDetail.market_price != 0"
                            ></price-format>
                        </view>
                    </view>
                </view>
                <view
                    class="discount"
                    style="padding: 30rpx 20rpx 0 0rpx"
                    v-if="couponList.length || goodsDetail.order_give_integral"
                >
                    <view class="row" style="align-items: flex-start">
                        <view style="flex: 1">
                            <view
                                :class="[
                                    'row coupons',
                                    { mb30: goodsDetail.order_give_integral > 0 }
                                ]"
                                v-if="couponList.length"
                                @tap="showCouponFun"
                            >
                                <view class="con row ml20" style="flex: 1">
                                    <view
                                        v-for="(item, index) in couponList"
                                        :key="index"
                                        class="coupons-item mr20"
                                    >
                                        <view v-if="index < 2" class="row xs">
                                            <view class="line1">
                                                {{ item.use_condition }}
                                            </view>
                                        </view>
                                    </view>
                                </view>
                                <text class="text">领券</text>
                                <image class="icon-sm" src="/static/images/arrow_right.png"></image>
                            </view>
                            <view
                                class="row integral"
                                style="align-items: flex-start; padding: 0 20rpx"
                                v-if="goodsDetail.order_give_integral"
                            >
                                <view class="flexnone">
                                    <u-tag text="积分" size="mini" type="primary" mode="plain" />
                                </view>
                                <view class="ml20"
                                    >下单最多可获得{{ goodsDetail.order_give_integral }}积分</view
                                >
                            </view>
                        </view>
                    </view>
                </view>
                <view class="row">
                    <view class="name lg bold row">
                        <view style="width: 80%; margin-right: 20rpx">
                            {{ goodsDetail.name }}
                        </view>
                        <view style="margin-left: auto; width: 20%" class="row-between">
                            <view class="column" @tap="showShareBtn = true">
                                <u-icon name="share" size="36" />
                                <text class="m-t-5 muted xxs">分享</text>
                            </view>
                            <view class="column" @tap="collectGoodsFun" style="margin-left: 10rpx">
                                <template v-if="goodsDetail.is_collect == 1">
                                    <u-icon name="star-fill" color="#ff2c3c" size="36" />
                                </template>
                                <template v-else>
                                    <u-icon name="star" size="36" />
                                </template>
                                <text class="m-t-5 muted xxs">收藏</text>
                            </view>
                        </view>
                    </view>
                </view>
                <view class="row-between xs lighter" style="padding: 0 24rpx 20rpx">
                    <text v-if="goodsDetail.stock !== true">库存: {{ goodsDetail.stock }}件</text>
                    <text>销量: {{ goodsDetail.sales_sum }}件</text>
                    <text>浏览量: {{ goodsDetail.click_count }}次</text>
                </view>
            </view>
            <view class="group-play bg-white mt20 m-x-20 round-box" v-if="goodsType == 2">
                <view class="title">拼团玩法</view>
                <view class="steps row">
                    <view class="row step">
                        <view class="number xxs">1</view>
                        <view class="sm">开团/参团</view>
                    </view>
                    <view class="line"></view>
                    <view class="row step">
                        <view class="number xxs">2</view>
                        <view class="sm">团满即成新团</view>
                    </view>
                    <view class="line"></view>
                    <view class="row step">
                        <view class="number xxs">3</view>
                        <view class="sm">满员发货</view>
                    </view>
                </view>
            </view>

            <swiper
                v-if="teamFound.length"
                class="mt20 bg-white m-x-20"
                autoplay="true"
                style="height: 240rpx"
                vertical="true"
                circular="true"
                :interval="5000"
            >
                <swiper-item v-for="(sitem, index) in teamFound" :key="index">
                    <view class="group-list">
                        <view
                            v-for="(item, index2) in sitem"
                            :key="index2"
                            class="group-item bg-white row-between"
                        >
                            <view class="row" style="max-width: 280rpx">
                                <custom-image
                                    :src="item.avatar"
                                    width="80rpx"
                                    height="80rpx"
                                    radius="50%"
                                >
                                </custom-image>
                                <view class="ml20 line1 normal">{{ item.nickname }}</view>
                            </view>
                            <view class="row ml20" style="flex: none">
                                <view class="column-center">
                                    <text class="sm normal">
                                        还差
                                        <text class="primary">{{ item.need - item.join }}</text>
                                        人成团
                                    </text>
                                    <view class="muted xs">
                                        剩余
                                        <u-count-down
                                            :timestamp="getTeamCountTime(item.found_end_time)"
                                            separator-color="#999"
                                            color="#999"
                                            :separator-size="24"
                                            :font-size="24"
                                            bg-color="transparent"
                                            @end="getGoodsDetailFun"
                                        ></u-count-down>
                                    </view>
                                </view>
                                <view
                                    class="group-btn br60 white row-center"
                                    @tap="showSpecFun(3, item.id)"
                                    >去参团</view
                                >
                            </view>
                        </view>
                    </view>
                </swiper-item>
            </swiper>
            <view class="mt20 round-box bg-white m-x-20">
                <view
                    v-if="!goodsType"
                    class="spec row"
                    @tap="showSpecFun(0)"
                    style="margin-top: 20rpx"
                >
                    <view class="text lighter">已选</view>
                    <view class="line1 mr20" style="flex: 1">{{
                        checkedGoods.spec_value_str || '默认'
                    }}</view>
                    <image class="icon-sm" src="/static/images/arrow_right.png"></image>
                </view>

                <view class="row spec" @click="handleServer" v-if="assurance_service.length">
                    <view class="text lighter">保障</view>
                    <view class="line1 mr20" style="flex: 1"
                        ><text v-for="(item, index) in assurance_service" :key="item.id"
                            >{{ item.title
                            }}<text
                                v-if="index + 1 < assurance_service.length"
                                style="margin: 0 12rpx"
                            >
                                ·
                            </text></text
                        ></view
                    >

                    <image class="icon-sm" src="/static/images/arrow_right.png"></image>
                </view>
            </view>

            <view class="evaluation bg-white mt20 m-x-20 round-box" v-if="comment.create_time">
                <navigator
                    hover-class="none"
                    :url="'/pages/all_comments/all_comments?id=' + goodsDetail.id"
                    class="title row-between"
                >
                    <view>
                        <text class="balck md mr10">用户评价</text>
                        <text class="primary sm">好评率{{ comment.goods_rate || '0%' }}</text>
                    </view>
                    <view class="row">
                        <text class="lighter">查看全部</text>
                        <image class="icon-sm" src="/static/images/arrow_right.png"></image>
                    </view>
                </navigator>
                <view class="con" v-if="comment.goods_rate">
                    <view class="user-info row">
                        <image class="avatar mr20" :src="comment.avatar"></image>
                        <view class="user-name md mr10">{{ comment.nickname }}</view>
                    </view>
                    <view class="muted xs mt10">
                        <text class="mr20">{{ comment.create_time }}</text>
                    </view>
                    <view v-if="comment.comment" class="dec mt20">{{ comment.comment }}</view>
                </view>
                <view class="con row-center muted" v-else>暂无评价</view>
            </view>

            <view class="goods-like mt20 bg-white m-x-20 round-box" v-if="goodsLike.length">
                <goods-like :list="goodsLike"></goods-like>
            </view>
            <view class="details mt20 bg-white m-x-20 round-box">
                <view class="title lg">商品详情</view>
                <view class="content">
                    <u-parse
                        :html="goodsDetail.content"
                        :lazy-load="true"
                        :show-with-animation="true"
                    ></u-parse>
                </view>
            </view>
            <view class="footer row bg-white fixed">
                <navigator
                    class="btn column-center"
                    hover-class="none"
                    url="/bundle/pages/contact_offical/contact_offical"
                >
                    <image class="icon-md" src="/static/images/icon_contact.png"></image>
                    <text class="xxs lighter">客服</text>
                </navigator>

                <navigator
                    class="btn cart column-center"
                    hover-class="none"
                    open-type="switchTab"
                    url="/pages/shop_cart/shop_cart"
                >
                    <image class="icon-md" src="/static/images/icon_cart.png"></image>
                    <text class="xxs lighter">购物车</text>
                    <u-badge
                        v-if="cartNum"
                        bgColor="#FF2C3C"
                        :offset="[8, 10]"
                        :count="cartNum"
                    ></u-badge>
                </navigator>
                <view
                    v-if="btnText.yellow"
                    class="add-cart br60 white mr10 md ml20"
                    @tap="showSpecFun(1)"
                >
                    {{ btnText.yellow }}
                </view>
                <view class="right-buy br60 white mr20 ml10 md" @tap="showSpecFun(2)">{{
                    btnText.red
                }}</view>
            </view>
        </view>
        <view v-else>
            <view class="details-null column-center">
                <image class="img-null" src="/static/images/goods_null.png"></image>
                <view class="xs muted">该商品已下架或不存在，去逛逛别的吧~</view>
            </view>
            <recommend></recommend>
        </view>
        <spec-popup
            :show="showSpec"
            :goods="goodsDetail"
            :is-seckill="goodsType == 1"
            @close="showSpec = false"
            :show-add="popupType == 1 || popupType == 0"
            :show-buy="popupType == 2 || popupType == 0"
            :showConfirm="popupType == 3"
            @buynow="onBuy"
            @addcart="onAddCart"
            @change="onChangeGoods"
            :group="Boolean(isGroup)"
            :red-btn-text="btnText.red"
            :yellow-btn-text="btnText.yellow"
            @confirm="onConfirm"
        ></spec-popup>

        <share-popup
            v-model="showShareBtn"
            :share-id="id"
            pagePath="pages/goods_details/goods_details"
            :type="1"
            :config="{
                avatar: userInfo.avatar,
                nickname: userInfo.nickname,
                image: goodsDetail.poster || goodsDetail.image,
                price: goodsDetail.min_price,
                marketPrice: goodsDetail.market_price,
                name: goodsDetail.name
            }"
        >
        </share-popup>
        <!-- 领券 -->
        <u-popup v-model="showCoupon" mode="bottom" border-radius="14">
            <view>
                <view class="row-between" style="padding: 30rpx">
                    <view class="title md bold">领券</view>
                    <view class="close" @tap="showCoupon = false">
                        <image class="icon-lg" src="/static/images/icon_close.png"></image>
                    </view>
                </view>
                <view class="content bg-body">
                    <scroll-view scroll-y="true" style="height: 700rpx">
                        <coupon-list
                            :list="couponList"
                            @reflash="getGoodsCouponFun"
                            :btn-type="3"
                        ></coupon-list>
                    </scroll-view>
                </view>
            </view>
        </u-popup>
        <u-popup v-model="showServer" mode="bottom" border-radius="14">
            <view style="padding-bottom: 50rpx">
                <view class="row-between" style="padding: 30rpx">
                    <view class="title md bold">保障</view>
                    <view class="close" @tap="showServer = false">
                        <image class="icon-lg" src="/static/images/icon_close.png"></image>
                    </view>
                </view>
                <view style="padding: 0 20rpx">
                    <scroll-view scroll-y="true" style="height: 700rpx">
                        <view v-for="item in assurance_service" :key="item.id" class="mt30">
                            <view class="bold"> {{ item.title }} </view>
                            <view class=""> {{ item.content }} </view>
                        </view>
                    </scroll-view>
                </view>

                <button class="btn-server" @click="showServer = false">我知道了</button>
            </view>
        </u-popup>
        <view class="share-money" :class="{ show: showCommission && enableCommission }">
            <view class="row-end">
                <view class="share-close row-center" @tap="showCommission = false">
                    <u-icon name="close" size="16" color="#fff"></u-icon>
                </view>
            </view>
            <view class="share-con mt10" @tap="showShareBtn = true">
                <view class="primary" style="font-size: 45rpx">
                    {{ distribution.earnings }}<text class="xs">元</text>
                </view>
                <view class="lighter xxs"> 好友下单最高可赚 </view>
            </view>
        </view>

        <u-back-top
            :scroll-top="scrollTop"
            :top="1000"
            :customStyle="{
                backgroundColor: '#FFF',
                color: '#000',
                boxShadow: '0px 3px 6px rgba(0, 0, 0, 0.1)'
            }"
        ></u-back-top>
    </view>
</template>

<script>
import { getGoodsDetail, addCart, getPoster, getCartNum } from '@/api/store'
import { collectGoods } from '@/api/user'
import { getGoodsCoupon, teamCheck } from '@/api/activity'
import { mapActions, mapGetters } from 'vuex'
import { arraySlice, trottle } from '@/utils/tools'
import { toLogin } from '@/utils/login'
import { getUser, inputInviteCode } from '@/api/user'
import Cache from '@/utils/cache'
import { strToParams } from '@/utils/tools'

export default {
    data() {
        return {
            scrollTop: 0,
            percent: 0,
            isFirstLoading: true,
            isNull: false,
            showSpec: false,
            showCoupon: false,
            showShareBtn: false,
            showCommission: true,
            popupType: '',
            swiperList: [],
            goodsDetail: {},
            goodsLike: [],
            goodsType: 0,
            checkedGoods: {},
            couponList: [],
            comment: {},
            countTime: 0,
            tagStyle: {
                img: 'width:100%;'
            },
            team: {},
            teamFound: [],
            isGroup: 0,
            id: '',
            showDownload: false,
            distribution: {},
            showServer: false,
            assurance_service: []
        }
    },

    onLoad(options) {
        this.onPageScroll = trottle(this.onPageScroll, 500, this)
        if (options && options.scene) {
            let scene = strToParams(decodeURIComponent(options.scene))
            console.log(scene, decodeURIComponent(options.scene))
            options.id = scene.id
        }
        // #ifdef H5
        if (options && options.isapp == 1) {
            this.showDownload = true
        }
        // #endif
        if (!options.id) {
            return this.$toast(
                {
                    title: '缺少参数，无法查看商品'
                },
                {
                    tab: 3
                }
            )
        } else {
            this.id = options.id
        }
        this.getGoodsCouponFun()
        this.getCartNum()
    },
    onShow() {
        this.getGoodsDetailFun()
    },
    onPageScroll(e) {
        const top = uni.upx2px(100)
        const { scrollTop } = e
        this.percent = scrollTop / top > 1 ? 1 : scrollTop / top
        this.scrollTop = scrollTop
    },
    methods: {
        ...mapActions(['getCartNum']),
        handleServer() {
            this.showServer = true
        },
        async getGoodsDetailFun() {
            const { data, code } = await getGoodsDetail({
                id: this.id
            })
            if (code == 1) {
                let {
                    goods_image,
                    content,
                    comment,
                    like,
                    activity,
                    distribution,
                    assurance_service
                } = data
                let { info, team, team_found } = activity //秒杀时间
                let time = info
                    ? info.end_time - Date.now() / 1000 //拼团时间
                    : team
                    ? team.end_time - Date.now() / 1000
                    : 0

                if (team_found) {
                    team_found = arraySlice(team_found, [], 2)
                }
                this.distribution = distribution || {}
                this.goodsDetail = data
                this.swiperList = goods_image
                this.comment = comment
                this.goodsLike = like
                this.countTime = time
                this.goodsType = activity.type || 0
                this.team = team ? team : {}
                this.teamFound = team_found ? team_found : []
                this.assurance_service = assurance_service
                this.$nextTick(() => {
                    this.isFirstLoading = false
                })
                // #ifdef H5
                let options = {
                    shareTitle: data.name,
                    shareLink: location.href + '&invite_code=' + this.userInfo.distribution_code,
                    shareImage: data.image,
                    shareDesc: data.remark
                }
                this.wxShare(options)
                // #endif
            } else {
                this.isNull = true
                this.isFirstLoading = false
            }
        },
        async getGoodsCouponFun() {
            const { data, code } = await getGoodsCoupon({
                id: this.id
            })
            if (code == 1) {
                this.couponList = data
            }
        },
        async collectGoodsFun() {
            if (!this.isLogin) return toLogin()
            const {
                goodsDetail: { is_collect }
            } = this
            const { data, code } = await collectGoods({
                is_collect: is_collect == 0 ? 1 : 0,
                goods_id: this.id
            })
            if (code == 1) {
                if (is_collect == 0) {
                    this.$toast({
                        title: '收藏成功'
                    })
                } else {
                    this.$toast({
                        title: '取消收藏'
                    })
                }
                this.getGoodsDetailFun()
            }
        },
        showCouponFun() {
            if (!this.isLogin) return toLogin()
            this.showCoupon = true
        },
        onChangeGoods(e) {
            console.log(e)
            this.checkedGoods = e.detail
        },
        showSpecFun(type, id) {
            if (!this.isLogin) return toLogin()
            if (this.goodsType == 2 && [2, 3].includes(type)) {
                this.isGroup = 1
                this.foundId = id
            } else {
                this.isGroup = 0
                this.foundId = ''
            }
            this.popupType = type
            this.showSpec = true
        },
        onBuy(e) {
            let { id, goodsNum } = e.detail
            const { goodsType, team } = this
            let goods = [
                {
                    item_id: id,
                    num: goodsNum
                }
            ]
            const params = {
                goods
            }
            this.showSpec = false
            goodsType == 2 ? (params.teamId = team.team_id) : ''
            this.foundId ? (params.foundId = this.foundId) : ''
            uni.navigateTo({
                url:
                    '/pages/confirm_order/confirm_order?data=' +
                    encodeURIComponent(JSON.stringify(params))
            })
            console.log(1111)
        },
        onConfirm(e) {
            const {
                team: { team_id }
            } = this
            teamCheck({
                team_id,
                found_id: this.foundId
            }).then((res) => {
                if (res.code == 1) {
                    this.onBuy(e)
                }
            })
        },
        async onAddCart(e) {
            let { id, goodsNum } = e.detail

            if (this.goodsType == 2) {
                // 拼团单独购买
                let goods = [
                    {
                        item_id: id,
                        num: goodsNum
                    }
                ]
                uni.navigateTo({
                    url:
                        '/pages/confirm_order/confirm_order?data=' +
                        encodeURIComponent(
                            JSON.stringify({
                                goods
                            })
                        )
                })
                return
            }
            const { code, data, msg } = await addCart({
                item_id: id,
                goods_num: goodsNum
            })
            if (code == 1) {
                this.getCartNum()
                this.$toast({
                    title: msg,
                    icon: 'success'
                })
                this.showSpec = false
            }
        }
    },
    async onShareAppMessage() {
        const { goodsDetail, team, userInfo } = this
        return {
            title: team.share_title || goodsDetail.name,
            imageUrl: goodsDetail.image,
            path:
                '/pages/goods_details/goods_details?id=' +
                this.id +
                '&invite_code=' +
                userInfo.distribution_code
        }
    },
    computed: {
        ...mapGetters(['cartNum', 'userInfo']),
        btnText() {
            const { goodsType } = this
            switch (goodsType) {
                case 1:
                    return {
                        red: '立即抢购',
                        yellow: ''
                    }
                case 2:
                    return {
                        red: '立即开团',
                        yellow: '单独购买'
                    }
                default:
                    return {
                        red: '立即购买',
                        yellow: '加入购物车'
                    }
            }
        },
        getTeamCountTime() {
            return (time) => time - Date.now() / 1000
        },
        enableCommission() {
            const {
                goodsType,
                distribution: { earnings, is_show }
            } = this
            return goodsType == 0 && earnings > 0 && is_show == 1
        }
    }
}
</script>

<style lang="scss" scoped>
.goods-details {
    padding-bottom: calc(120rpx + env(safe-area-inset-bottom));

    .seckill {
        height: 100rpx;
        background: #ffd4d8;

        .price {
            width: 504rpx;
            height: 100%;
            // background: url(../../static/images/bg_seckill.png) no-repeat;/
            background-size: 100%;
        }

        .down {
            flex: 1;
        }
    }

    .group {
        height: 100rpx;
        width: 100%;
        // background-image: url(../../static/images/pintuan_bg.png);
        background-size: 100%;

        .group-num {
            border: 1px solid #ffffff;
            border-radius: 4rpx;

            .group-icon {
                background: #fff;
                padding: 3rpx 7rpx;
            }
        }

        .down {
            height: 100%;
            background-color: #fff5e1;
            padding: 0 20rpx;
        }
    }

    .goods-info {
        position: relative;

        .info-header {
            padding: 20rpx 0 0rpx 24rpx;

            .price {
                align-items: baseline;
            }
        }

        .vip-price {
            margin: 0 24rpx;
            background-color: #ffe9ba;
            color: #ffd4b7;
            line-height: 36rpx;
            border-radius: 6rpx;
            overflow: hidden;

            .price-name {
                background-color: #101010;
                padding: 3rpx 12rpx;
                position: relative;
                overflow: hidden;

                &::after {
                    content: '';
                    display: block;
                    width: 20rpx;
                    height: 20rpx;
                    position: absolute;
                    right: -15rpx;
                    background-color: #ffe9ba;
                    border-radius: 50%;
                    top: 50%;
                    transform: translateY(-50%);
                    box-sizing: border-box;
                }
            }
        }

        .name {
            padding: 20rpx 24rpx;
            flex: 1;
        }

        .icon-share {
            width: 134rpx;
            height: 60rpx;
        }
    }

    .discount {
        .text {
            flex: none;
            color: #ff2c3c;
        }

        .con {
            width: 400rpx;
        }

        .coupons-item {
            overflow: hidden;

            & > view {
                position: relative;
                height: 40rpx;
                line-height: 40rpx;
                padding: 0 18rpx;
                border-radius: 6rpx;
                box-sizing: border-box;
                background-color: $ls-color-primary;
                color: #fff;
                white-space: nowrap;
                overflow: hidden;

                &::after,
                &::before {
                    content: '';
                    display: block;
                    width: 20rpx;
                    height: 20rpx;
                    position: absolute;
                    left: -14rpx;
                    background-color: #fff;
                    border-radius: 50%;
                    border: 1px solid currentColor;
                    box-sizing: border-box;
                }

                &::after {
                    right: -14rpx;
                    left: auto;
                }
            }
        }
    }

    .details-null {
        padding-top: 140rpx;
        margin-bottom: 100rpx;
    }

    .spec {
        padding: 24rpx;

        .text {
            width: 100rpx;
        }
    }

    .evaluation {
        .title {
            height: 100rpx;
            border-bottom: $ls-solid-border;
            padding: 0 24rpx;
        }

        .con {
            padding: 30rpx 24rpx;
        }

        .user-info .avatar {
            width: 60rpx;
            height: 60rpx;
            border-radius: 50%;
        }
    }

    .details {
        .title {
            line-height: 88rpx;
            text-align: center;
        }

        & > .content {
            padding: 0 20rpx 20rpx;
            overflow: hidden;

            ::v-deep image {
                vertical-align: middle;
            }

            // #ifdef H5
            ::v-deep img {
                vertical-align: middle;
            }

            // #endif
            // #ifdef MP-WEIXIN || APP-PLUS
            ::v-deep ._img {
                display: block;
            }

            // #endif
        }
    }

    .footer {
        height: 100rpx;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        box-sizing: content-box;
        padding-bottom: env(safe-area-inset-bottom);

        .btn {
            width: 100rpx;
            height: 100rpx;
            position: relative;
            line-height: 1.3;
        }

        .cart-num {
            position: absolute;
            left: 60rpx;
            top: 6rpx;
        }

        .add-cart,
        .right-buy {
            flex: 1;
            text-align: center;
            padding: 16rpx 0;
        }

        .add-cart {
            background-color: #ffa630;
        }

        .right-buy {
            background-color: $ls-color-primary;
        }
    }

    .group-play {
        .title {
            padding: 20rpx 28rpx;
            border-bottom: $ls-solid-border;
        }

        .steps {
            padding: 20rpx 28rpx;

            .step {
                flex: none;
            }

            .line {
                flex: 1;
                border: 1px dashed #999999;
                margin: 0 20rpx;
            }

            .number {
                border: 1rpx solid #707070;
                width: 28rpx;
                height: 28rpx;
                border-radius: 50%;
                line-height: 28rpx;
                text-align: center;
                margin-right: 6rpx;
            }
        }
    }

    .group-list {
        .group-item {
            padding: 20rpx 24rpx;

            &:not(:last-of-type) {
                border-bottom: $ls-solid-border;
            }

            .group-btn {
                background: linear-gradient(90deg, #f95f2f 0%, #ff2c3c 100%);
                height: 58rpx;
                padding-left: 28rpx;
                padding-right: 28rpx;
                margin-left: 30rpx;
                box-shadow: 0px 6rpx 12rpx rgba(249, 47, 138, 0.4);
            }
        }
    }

    .share-money {
        position: fixed;
        left: 20rpx;
        bottom: calc(130rpx + env(safe-area-inset-bottom));
        transform: scale(0);
        transition: all 0.3s;

        &.show {
            transform: scale(1);
        }

        .share-close {
            width: 34rpx;
            height: 34rpx;
            background: #a7a7a7;
            border-radius: 50%;
        }

        .share-con {
            background: url('../../static/images/bg_packet_img.png');
            width: 241rpx;
            height: 208rpx;
            background-size: 100%;
            padding-top: 20rpx;
            text-align: center;
        }
    }

    .m-x-20 {
        margin-left: 20rpx;
        margin-right: 20rpx;
    }

    .bg-vip {
        background: url(data:image/png;base64,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)
            no-repeat;
        background-size: contain;
        height: 240rpx;
        padding: 30rpx 24rpx;

        .vip-name {
            font-size: 24rpx;
            background-color: #e0a356;
            width: 150rpx;
            border-radius: 25rpx;
            text-align: center;
            line-height: 30rpx;
            padding: 5rpx 0;
            margin-bottom: 10rpx;
            position: relative;

            &::before {
                position: absolute;
                content: '';
                top: -7rpx;
                right: 10rpx;
                width: 0;
                height: 0;
                border-top: 50px solid #e0a356;
                border-right: 50px solid transparent;
                border-left: 50px solid transparent;
                transform: scale(0.15);
            }
        }
    }

    .bg-team {
        display: flex;
        background: url(../../static/images/temp-bg.png) no-repeat;
        background-size: contain;
        height: 240rpx;
        padding: 30rpx 24rpx;

        .tip {
            font-size: 24rpx;
            color: black;
            background-color: white;
            padding: 5rpx 10rpx;
            border-radius: 10rpx;
            margin-right: 10rpx;
        }

        &__price {
            color: white;
            flex: 1;
            display: flex;
            justify-content: space-between;
            padding: 0 20rpx;
        }

        &__time {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 240rpx;
            // @include background_color(0.3);
        }
    }

    .bg-seckill {
        display: flex;
        background: url(../../static/images/seckill-bg.png) no-repeat;
        background-size: contain;
        height: 240rpx;
        padding: 30rpx 24rpx;

        .tip {
            font-size: 24rpx;
            color: black;
            background-color: white;
            padding: 5rpx 10rpx;
            border-radius: 10rpx;
            margin-right: 10rpx;
        }

        &__price {
            color: white;
            flex: 1;
            display: flex;
            justify-content: space-between;
            padding: 0 20rpx;
        }

        &__time {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 240rpx;
            // @include background_color(0.3);
        }
    }

    .btn-server {
        margin: 20rpx 20rpx 0 20rpx;
        background-color: #f36161;
        height: 80rpx;
        line-height: 80rpx;
        color: white;
    }

    .round-top {
        border-radius: 20rpx 20rpx 0 0;
    }

    .round-bottom {
        border-radius: 0 0 20rpx 20rpx;
    }

    .round-box {
        border-radius: 20rpx;
    }
}
</style>
