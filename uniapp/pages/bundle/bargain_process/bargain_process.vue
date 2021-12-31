<template>
    <view class="bargain-process-container">
        <!-- #ifdef H5 -->
        <download-nav v-if="showDownload"></download-nav>
        <!-- #endif -->
        <view v-show="status == -1">
            <view class="bargain-process-header">
                <view class="mt20 column status-container">
                    <view class="white xxl">
                        {{activityObj.bargain_tips}}
                    </view>
                    <view class="mt10 white xxs">
                        {{activityObj.simple_tips}}
                    </view>
                </view>
            </view>
            <view class="main">
                <navigator class="goods-planel row" :url="'/pages/goods_details/goods_details?id=' + activityObj.goods_id" hover-class="none">
                    <custom-image width="180rpx" height="180rpx" :src="activityObj.image" radius="10rpx" />
                    <view class="goods-info">
                        <view class="goods-name line2 nr">
                            {{activityObj.name}}
                        </view>
                        <view class="xs" style="color: #F95F2F;">
                            最低可砍至<text class="sm" style="line-height: 48rpx;">¥<text class="xl">{{activityObj.activity_price}}</text></text>
                        </view>
                        <view class="xs muted">
                            原价 <text style="text-decoration:line-through;">¥{{activityObj.price}}</text>
                        </view>
                    </view>
                </navigator>
                <view class="choose-container">
                    <view class="title xl normal">
                        请选择商品规格
                    </view>
                    <view class="choose-content row-between" @click="showSpecPop">
                        <view class="row">                        
                            <view class="muted sm">已选：</view>
                            <view class="md normal">
                                {{userSpecText}}
                            </view>
                        </view>
                        <u-icon name="arrow-right" size="28" color="#999" />
                    </view>
                </view>
                <view class="lunch-btn white br60 row-center" @click="$launchBargain">发起砍价</view>
            </view>
        </view>
        <view v-show="status != -1">
            <view class="bargain-process-header">
                <view class="mt20 status-container row">
                    <custom-image 
                    v-if="bargainObj.share_avatar" 
                    width="80rpx" 
                    height="80rpx" 
                    :src="bargainObj.share_avatar" 
                    round 
                    :customStyle="{'border': '2rpx solid #fff'}" 
                    />
                    <view class="column ml20">
                        <view class="white xxl">
                            {{bargainObj.bargain_tips}}
                        </view>
                        <view class="mt10 white xxs">
                            {{bargainObj.simple_tips || '邀请好友帮忙砍价 —— 砍至'+ bargainObj.current_price +'元即可发货'}}
                        </view>
                    </view>
                </view>
            </view>
            <view class="main">
                <navigator class="goods-planel row" :url="'/pages/goods_details/goods_details?id=' + bargainObj.goods_id" hover-class="none">
                    <custom-image width="180rpx" height="180rpx" :src="bargainObj.image" radius="10rpx" />
                    <view class="goods-info">
                        <view class="goods-name line2 nr">
                            {{bargainObj.name}}
                        </view>
                        <view class="xs muted">
                            {{bargainObj.spec_value_str}}
                        </view>
                        <view class="row-between mt10">
                            <view class="xs muted">
                                原价 ¥{{bargainObj.price || 0}}
                            </view>
                            <view class="row" v-show="showCountDown" v-if="timestamp > 0">                                
                                <u-count-down
                                    :timestamp="timestamp"
                                    :bg-color="primaryColor"
                                    color="#fff"
                                    :separator-color="primaryColor"
                                    height="36"
                                    :show-days="true"
                                    @end="closeBargainOrderFun"
                                />
                                <text class="muted xs ml10">内可砍</text>
                            </view>
                        </view>
                    </view>
                </navigator>
                <!-- 非被邀请状态 -->
                <view class="bargain-panel" v-if="status != 5">
                    <view class="bargain-panel-header nr">
                        已砍￥{{bargainObj.knife_price || 0}}，还差￥{{bargainObj.diff_price || 0}}
                    </view>
                    <view class="progress-container row">
                        <view class="progress">
                            <view class="progress-bar" :style="{'width': precent + '%'}">
                            </view>
                        </view>
                        <view class="primary xs ml20">
                            <text class="xxs">¥</text>{{bargainObj.activity_price}}
                        </view>
                    </view>
                    <view class="nr lighter row-center" style="margin-top: 35rpx;" v-if="bargainObj.status != 0 && bargainObj != -1">
                        {{bargainObj.status_tips}}
                    </view>
                    <view class="invite-btn1 br60 white row-center lg" @click="shareToBargain" v-if="bargainObj.direct_buy_btn != 1 && bargainObj.invite_btn">
                        邀请好友帮砍价
                    </view>
                    <view class="invite-btn1 br60 white row-center lg" v-if="bargainObj.buy_btn" @tap="handleClickBuy" >
                        立即购买
                    </view>
                    <view class="fail-btn br60 white row-center lg" v-if="bargainObj.status == 2">
                        砍价失败
                    </view>
                    <view class="invite-btn-group row-between" v-if="bargainObj.direct_buy_btn">
                        <view class="buy-now-btn br60 md row-center" @click="handleClickBuy">
                            ¥{{bargainObj.current_price}}  直接购买
                        </view>
                        <view class="invite-friend-btn white br60 md row-center" @click="shareToBargain">
                            邀请好友帮砍价
                        </view>
                    </view>
                    <view class="invite-btn1 br60 white row-center lg" v-if="bargainObj.order_btn" @click="toOrderDetail">
                        查看订单
                    </view>
                    <view class="bargain-code-content">
                        <view class="bargain-code-title row-between">
                            <view class="md normal bold">
                                砍价记录
                            </view>
                            <view class="muted xs">
                                已有{{bargainObj.knife_list && bargainObj.knife_list.length}}人帮砍
                            </view>
                        </view>
                        <view class="code-content">
                            <view class="user-item row-between" v-for="(item, index) in bargainObj.knife_list" :key="item.id">
                                <view class="user-content row">
                                    <custom-image width="80rpx" height="80rpx" radius="60rpx" :src="item.avatar"  />
                                    <view class="ml20">
                                        <view class="sm normal">
                                            {{item.nickname}}
                                        </view>
                                        <view class="muted xxs">
                                            小刀一砍，惊喜满满
                                        </view>
                                    </view>
                                </view>
                                <view class="bargain-price xs primary">
                                    ¥{{item.help_price || 0}}
                                </view>
                            </view>
                        </view>
                    </view>
                </view>
                <!-- end -->
                <!-- 被邀请状态 -->
                <view class="shared-panel" v-if="status == 5" >
                    <view class="btn-container">                        
                        <view class="nr muted row-center">
                            {{bargainObj.status_tips}}
                        </view>
                        <view class="help-knife-btn row-center white lg br60" v-if="bargainObj.knife_btn" @click="$helpBargain">
                            帮忙砍一刀
                        </view>
                        <navigator hover-class="none" url="/pages/bundle/bargain/bargain" class="knife-btn row-center lg normal br60" v-if="bargainObj.sponsor_btn">
                            我也要砍价
                        </navigator>
                    </view>
                    <view class="code-content">
                        <view class="bargain-code-title row-between">
                            <view class="md normal bold">
                                砍价记录
                            </view>
                            <view class="muted xs">
                                已有{{bargainObj.knife_list.length}}人帮砍
                            </view>
                        </view>
                        <view class="user-item row-between" v-for="(item, index) in bargainObj.knife_list" :key="item.id">
                            <view class="user-content row">
                                <custom-image width="80rpx" height="80rpx" radius="60rpx" :src="item.avatar"  />
                                <view class="ml20">
                                    <view class="sm normal">
                                        {{item.nickname}}
                                    </view>
                                    <view class="muted xxs">
                                        小刀一砍，惊喜满满
                                    </view>
                                </view>
                            </view>
                            <view class="bargain-price xs primary">
                                ¥{{item.help_price || 0}}
                            </view>
                        </view>
                    </view>
                </view>
                <!-- end -->
            </view>
        </view>
        <loading-view v-if="showLoadingView" />
        <goods-bargain v-if="status != -1" ref="goodsBargain" />
        <u-popup v-model="showBargainPop" mode="center">
            <view class="bargain-pop-container">
                <view class="md normal bold row-center" style="padding-top: 64rpx;">
                    恭喜您成功砍下<text class="primary lg">{{knifePrice || 0}}</text>元
                </view>
                <view class="bold md row-center" style="margin-top: 38rpx;" v-if="!isHelpKnife">
                    还差<text class="ml20 differ-price primary">{{diffPrice || 0}}<text style="font-size: 40rpx;">元</text></text>
                </view>
                <view class="bold primary xxl row-center" style="margin-top: 38rpx;" v-else>
                    已为好友砍价成功
                </view>
                <view class="progress-container row-center">
                    <view class="progress">
                        <view class="progress-bar" :style="{'width': precent + '%'}" />
                    </view>
                </view>
                <view class="row-center">                    
                    <view class="invite-btn row-center md" @click="shareToBargain">
                        {{isHelpKnife ? '确定' : '邀请好友帮砍'}}
                    </view>
                </view>
            </view>
            <view class="close-icon row-center" @click="closeBargainPop" mode="bottom">
                <u-icon name="close-circle" size="68rpx" color="#fff"></u-icon>
            </view>
        </u-popup>
        <spec-popup
        :show="showPop"
        :goods="activityObj"
        :isBargain="true"
        :show-add="false" 
        :show-buy="false" 
        :showConfirm="true"
        :disabledNumberBox="true"
        :showStock="false"
        @confirm="chooseSpec"
        @close="showPop=false"
        />
        <share-popup :show="showSharePop" @close="showSharePop = false" :goodsId="bargainId" :isBargain="true" :shareTitle="bargainObj.share_titles || bargainObj.name" :summary="bargainObj.share_intros || bargainObj.simple_tips" :img-url="bargainObj.image" />
		<float-tab></float-tab>
	</view>
</template>

<script>
    import {getBargainDetail, launchBargain, getBargainActivityDetail, helpBargain, closeBargainOrder} from '@/api/activity'
	import {strToParams} from '@/utils/tools'
    import config from '@/config/app'
    export default {
        data() {
            return {
                showPop: false,
                showBargainPop: false,
                showSharePop: false,
                activityObj: {},
                bargainObj: {},
                status: 1,
                precent: 0,
                timestamp: 0,
                userSpecText: '请选择商品规格',
                userSpec: {},
                bargainId: -1,
                activityId: -1,
                // 砍价弹窗变量
                knifePrice: 0,
                diffPrice: 0,
                isHelpKnife: false,
                showCountDown: true,
                showLoadingView: true,
                showDownload: false
            }
        },
        onLoad(options) {
            if (options && options.scene) {
            	let scene = strToParams(decodeURIComponent(options.scene));
            	options.bargainId = scene.id;
            }
			if(options && options.id) {
				options.bargainId = options.id
			}
            // #ifdef H5
            if(options && options.isapp == 1) {
                this.showDownload = true
            }
            // #endif
            // 活动详情ID
            this.bargainId = options.bargainId;
            // 砍价活动ID
            this.activityId = options.activityId;
            console.log(this.bargainId, this.activityId, "option")
            if(this.activityId && this.activityId != -1) {
                this.$getBargainDetail(this.activityId);
            }
            else if(this.bargainId && this.bargainId != -1) {
                this.$getBargainActivityDetail(this.bargainId)
            }
        },
        onReachBottom() {
          if(this.$refs.goodsBargain) {
              this.$refs.goodsBargain.$getBargainList();
          }
        },
        // #ifdef MP-WEIXIN
        onShareAppMessage() {
            return {
                path: "pages/bundle/bargain_process/bargain_process?bargainId=" + this.bargainId,
                title: this.bargainObj.share_titles
            }
        },
        // #endif
        methods: {
            showSpecPop() {
                this.showPop = true;
            },
            closeBargainPop() {
                this.showBargainPop = false
            },
            $getBargainDetail(id) {
                getBargainDetail({bargain_id: id}).then(res => {
                    if(res.code == 1) {
                        this.activityObj = res.data;
                        this.status = res.data.status;
                        this.showLoadingView = false;
                        this.userSpecText = res.data.goods_item[0].spec_value_str
                        this.userSpec = {
                            id: res.data.goods_item[0].id
                        }
                        // let url = config.baseURL.replace(/\/api\//g, "/mobile/");
                        let options = {
                            shareTitle: this.activityObj.name,
                            shareLink: location.href + "&invite_code=" + this.$store.getters.inviteCode,
                            shareImage: this.activityObj.image,
                            shareDesc: this.activityObj.simple_tips
                        }
                        this.wxShare(options)
                        console.log(options, "share-bargain-options1", location.href);
                    }
                })
            },
            chooseSpec(e) {
                this.userSpec = e.detail;
                this.userSpecText = e.detail.spec_value_str;
                this.showPop = false;
            },
            $launchBargain() {
                let data = {
                    // 砍价活动id
                    bargain_id: this.activityId,
                    item_id: this.userSpec.id
                }
                launchBargain(data).then(res => {
                    if(res.code == 1) {
                        this.$toast({title: res.msg});
                        this.knifePrice = res.data.knife_price;
                        this.diffPrice = res.data.diff_price;
                        this.precent = res.data.progress * 100;
                        if(this.precent > 100) {
                            this.precent = 100
                        }
                        this.showBargainPop = true;
                        this.bargainId = res.data.id;
                        this.showLoadingView = true;
                        uni.showLoading()
                        this.$getBargainActivityDetail(res.data.id);
                    }
                })
            },
            $getBargainActivityDetail(id) {
                let timestamp = 0;
                let now_time = (new Date().getTime()) / 1000
                getBargainActivityDetail({
                    id: id
                }).then(res => {
                    if(res.code == 1) {
                        uni.hideLoading()
                        this.status = res.data.status;
                        this.bargainObj = res.data;
                        timestamp = res.data.over_time;
                        this.precent = res.data.progress * 100;
                        if(this.precent > 100) {
                            this.precent = 100
                        }
                        this.showLoadingView = false;
                        this.timestamp = (timestamp - Math.floor(now_time));
                        console.log('calc: ', timestamp, '-', Math.floor(now_time), '=', this.timestamp )
                        let url = location.href.replace(/activityId=\d*/g, "bargainId=" + id);
                        let options = {
                            shareTitle: this.bargainObj.share_titles || this.bargainObj.name,
                            shareLink: url + "&invite_code=" + this.$store.getters.inviteCode,
                            shareImage: this.bargainObj.image,
                            shareDesc: this.bargainObj.share_intros || this.bargainObj.simple_tips
                        }
                        this.wxShare(options)
                        console.log(options, "share-bargain-options2", url);
                        if(this.timestamp <= 0 || this.status == 1) {
                            // 砍价已结束
                            this.showCountDown = false;
                        }
                        else {
                            this.showCountDown = true;
                        }
                    }
                })
            },
            shareToBargain() {
                this.showBargainPop = false
                if(this.isHelpKnife) {
                    return;
                }
                this.showSharePop = true
            },
            $helpBargain() {
                // 帮好友砍价
                helpBargain({
                    id: this.bargainId
                }).then(res => {
                    if(res.code == 1) {                        
                        this.knifePrice = res.data.knife_price;
                        this.precent = res.data.progress * 100;
                        if(this.precent > 100) {
                            this.precent = 100
                        }
                        this.isHelpKnife = true;
                        this.showBargainPop = true;
                        this.$getBargainActivityDetail(this.bargainId)
                    }
                })
            },
            toOrderDetail() {
                uni.navigateTo({
                    url: "/pages/order_details/order_details?id=" + this.bargainObj.order_id
                })
            },
            closeBargainOrderFun() {
                // 计时结束后关闭订单
                closeBargainOrder({
                    id: this.bargainObj.id
                }).then(res => {
                    if(res.code == 1) {
                        this.$toast({
                            title: res.msg
                        })
                        this.$getBargainActivityDetail(this.bargainObj.id)
                    }
                })
            },
            handleClickBuy() {
                let goods = [{
                    num: 1,
                    item_id: this.bargainObj.item_id
                }]
                let params = {
                    goods
                }
                console.log(goods, 'handleClickBuy')
                uni.navigateTo({
                   url: '/pages/confirm_order/confirm_order?data=' + encodeURIComponent(JSON.stringify(params)) + "&bargain_launch_id=" + this.bargainObj.id
                })
            }
        }
    }
</script>

<style lang="scss">
    .bargain-process-container {
        .bargain-process-header {
            background-image: url(../../../static/images/bg_hometop.png);
            height: 420rpx;
            background-size: 100% 100%;
            padding-top: 30rpx;
            .rule-contain {
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 100rpx;
                padding: 6rpx 10rpx;
                margin-right: 24rpx;
            }
            .status-container {
                margin-left: 24rpx;
            }
        }
        .main {
            padding: 0 24rpx;
            margin-top: -230rpx;
            .goods-planel {
                background-color: white;
                padding: 30rpx 24rpx;
                border-radius: 20rpx;
                box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.06);
                .goods-info {
                    margin-left: 24rpx;
                    flex: 1;
                    .goods-name {
                        line-height: 40rpx;
                    }
                }
            }
            // 砍价状态2
            .bargain-panel {
                margin-top: 30rpx;
                padding: 24rpx 24rpx 20rpx;
                background-color: $-color-white;
                box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.06);
                border-radius: 20rpx;
                .bargain-panel-header {
                    font-weight: bold;
                }
                .progress-container {
                    margin-top: 33rpx;
                    .progress {
                        flex: 1;
                        background-color: #FFEBE5;
                        height: 20rpx;
                        border-radius: 50rpx;
                        .progress-bar {
                            background: linear-gradient(90deg, #F95F2F 0%, #FF2C3C 100%);
                            transition: width .5s ease;
                            height: 100%;
                            width: 0%;
                            border-radius: 50rpx;
                        }
                    }
                }
                .invite-btn1 {
                    background-color: $-color-primary;
                    height: 84rpx;
                    margin-top: 36rpx;
                    box-shadow: 0px 3px 10px rgba(235, 36, 51, 0.5);
                }
                .fail-btn {
                    background-color: #E5E5E5;
                    height: 84rpx;
                    margin-top: 30rpx;
                }
                .invite-btn-group {
                    margin-top: 60rpx;
                    .buy-now-btn {
                        width: 316rpx;
                        height: 84rpx;
                        color: #F95F2F;
                        font-size: 30rpx;
                        background-color: rgba($color: #F95F2F, $alpha: 0.2);
                    }
                    .invite-friend-btn {
                        width: 316rpx;
                        height: 84rpx;
                        background-color: $-color-primary;
                    }
                }
                .bargain-code-content {
                    margin-top: 62rpx;
                    .bargain-code-title {
                        
                    }
                    .code-content {
                        margin-top: 30rpx;
                        .user-item {
                            padding: 15rpx 0;
                            margin-bottom: 30rpx;
                        }
                    }
                }
            }
            // end
            // 被邀请状态
            .shared-panel {
                .btn-container {
                    margin-top: 40rpx;
                    .help-knife-btn {
                        background-color: $-color-primary;
                        height: 84rpx;
                        box-shadow: 0px 3px 10px rgba(235, 36, 51, 0.5);
                    }
                    .knife-btn {
                        height: 84rpx;
                        background-color: $-color-white;
                        border: 1px solid #BBBBBB;
                        margin-top: 30rpx;
                    }
                }
                .code-content {
                    margin-top: 30rpx;
                    padding: 27rpx 24rpx;
                    background-color: $-color-white;                       
                    .user-item {
                        padding: 15rpx 0;
                        margin-top: 10rpx;
                    }
                }
            }
            // end
            .choose-container {
                margin: 40rpx 0;
                .title {
                    font-weight: 500;
                    margin-bottom: 30rpx;
                }
                .choose-content {
                    padding: 30rpx 20rpx;
                    background-color: $-color-white;
                    border-radius: 10px;
                }
            }
            .lunch-btn {
                height: 84rpx;
                background-color: $-color-primary;
                box-shadow: 0px 3px 10px rgba(235, 36, 51, 0.5);
            }
        }
        .pop-container {
            height: 800rpx;
            .goods-info {
                padding: 20rpx 20rpx;
                .goods-spec {
                    align-self: flex-end;
                }
            }
            .spec-selector {
                padding: 30rpx 20rpx;
                .title {
                    line-height: 36rpx;
                }
                .spec-item {
                    padding: 8rpx 28rpx;
                    background-color: #F4F4F4;                    
                }
                .spec-active-item {
                    padding: 8rpx 28rpx;
                    color: white;
                    background-color: $-color-primary;
                }
            }
            .pickup-number {
                margin-top: 30rpx;
                padding: 0 20rpx;
            }
        }
        .bargain-pop-container {
            width: 559rpx;
            height: 580rpx;
            background-image: url(../../../static/images/bg_kanjia.png);
            background-size: 100% 100%;
            .differ-price {
                font-size: 58rpx;
                line-height: 38rpx;
            }
            .progress-container {
                margin-top: 26rpx;
                .progress {
                    width: 409rpx;
                    height: 20rpx;
                    background-color: #FD498F1A;
                    border-radius: 50rpx;
                    .progress-bar {
                        height: 100%;
                        width: 0%;
                        background: linear-gradient(90deg, #FA444D 0%, #FD498F 100%);
                        border-radius: 50rpx;
                        transition: width .5s ease;
                    }
                }
            }
            .invite-btn {
                background-image: url(../../../static/images/coupon_button.png);
                background-size: 100% 100%;
                height: 106rpx;
                color: #7B3200;
                font-weight: 500;
                margin-top: 180rpx;
                width: 478rpx;
            }
        }
        .close-icon {
            margin-top: 26rpx;
        }
        .share-pop-container {
            height: 500rpx;
            background-color: $-color-white;
        }
    }
</style>