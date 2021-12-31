<template>
<view>
<!-- pages/user_sgin/user_sgin.wxml -->
<view class="user-sgin">
    <view class="header">
        <view class="row">
            <u-image class="avatar" width="110rpx" height="110rpx" shape="circle" :src="avatar == '' ? '/static/images/default_avatar.png' : avatar" />
            <view class="white ml20 row-between" style="flex: 1">
                <view>
                    <view style="font-size: 56rpx">{{integral}}</view>
                    <view class="row">
                        <navigator class="sm row" hover-class="none" url="/pages/bundle/sign_rule/sign_rule">
                            我的积分
                            <image src="/static/images/jifen_icon_help.png" class="icon-sm ml10"></image>
                        </navigator>
                    </view>
                </view>
                <navigator class="score-detail-entry row" url="/pages/bundle/sign_detail/sign_detail" hover-class="none">
                    <image style="width: 26rpx;height: 26rpx;flex: none; margin-right: 7rpx" src="/static/images/jifen_icon_data.png"></image>
                    <text class="sm white">积分明细</text>
                </navigator>
            </view>
        </view>
    </view>
    <view class="main">
        <view class="contain bg-white">
            <view class="title">已连续签到 {{signDays}}天</view>
            <view class="day-list row wrap">
                <view v-for="(item, index) in signList" :key="index" class="item column-center">
                    <view :class="'circle row-center ' + (item.status == 1 ? 'active-circle' : '')">
                        <view class="num xs lighter" v-if="item.status != 1">+{{item.integral}}</view>
                        <image class="num" src="/static/images/jifen_icon_select.png" v-if="item.status == 1"></image>
                    </view>
                    <view class="day mt10 lighter sm">{{item.days}}天</view>
                </view>
            </view>
            <view class="right-sgin">
                <button :class="'white br60 ' + (canSign == 1 ? 'gray' : 'primary-button')" @tap="userSignFun" size="md">{{canSign == 1 ? '已签到' : '立即签到' }}</button>
            </view>
        </view>
        <view class="contain bg-white mt20" v-if="makeInegral.length > 0">
            <view class="title row">
                <view class="line br60 mr20"></view>
                <view class="bold  xl">赚积分</view>
            </view>
            <view class="task">
                <view v-for="(item, index) in makeInegral" :key="index" class="item row">
                    <image class="img mr20" :src="item.type == 1 ? '/static/images/icon_jifen_qiandao.png' : item.type == 2 ? '/static/images/icon_jifen_pay.png' : '/static/images/icon_jifen_invite.png'"></image>
                    <view class="con">
                        <view class="md">{{item.name}}</view>
                        <view class="xs">
                            <text class="num mb20">+{{item.integral}}</text>
                            <text>积分</text>
                        </view>
                    </view>
                    <button hover-class="none" :class="'btn br60 ' + (item.status ? 'muted' : 'primary' )" :style="'border-color: ' + (item.status ? '#999999' : '#FF2C3C') + ';'" size="xs">{{item.status ? '已完成' : '未完成'}}</button>
                </view>
            </view>
        </view>
    </view>
</view>

    <u-popup v-model="showPop" mode="center">
        <view class="pop-container">
            <view class="header-score row-center mt20">+{{addIntegral}}</view>
            <view class="box column-center">
                <view class="desc row mt20 sm">
                    <image style="width: 28rpx; height: 30rpx;margin-right: 8rpx" src="/static/images/icon_jifen.png"></image>
                    {{addIntegral}}积分 + {{addGrowth}}成长值
                </view>
                <view class="bottom-box">
                    <view class="md" style="line-height: 36rpx">
                        您已连续签到 <text class="primary" style="font-size: 42rpx">{{signDays}}</text>天
                    </view>
                </view>
                <view class="bg-primary white br60 primary-btn" style="margin-top: 26rpx" @tap="onClose">确定</view>
            </view>
        </view>
    </u-popup>
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
import { getSignList, userSign, getSignRule } from "@/api/user";
import {trottle} from '@/utils/tools.js'
export default {
  data() {
    return {
      // 成长值
      growth: 0,
      // 积分
      integral: 0,
      avatar: "",
      signList: [],
      showPop: false,
      canSign: 0,
      addIntegral: 0,
      addGrowth: 0,
      signDays: 0,
      makeInegral: []
    };
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
	this.userSignFun = trottle(this.userSignFun, 1000, this)
  },


  onShow: function () {
    this.getSignListFun();
  },

  methods: {
    onClose() {
      this.showPop = false
    },

    getSignListFun() {
      getSignList().then(res => {
        if (res.code == 1) {
          let {
            sign_list
          } = res.data;
          this.signList = sign_list;
          this.integral = res.data.user.user_integral;
		  this.avatar = res.data.user.avatar
          this.canSign = res.data.user.today_sign;
          this.signDays = res.data.user.days;
          this.makeInegral = res.data.make_inegral
        }
      });
    },

    userSignFun() {
      if (this.canSign == 1) {
        return;
      }

      userSign().then(res => {
        if (res.code == 1) {
          let {
            days,
            growth,
            integral
          } = res.data;
          
          this.showPop = true;
          this.addGrowth = growth;
          this.addIntegral = integral;
          this.signDays = days
          
          this.getSignListFun();
        }
      });
    }

  }
};
</script>
<style lang="scss">
.user-sgin {
    padding-bottom: 100rpx;
}
.user-sgin .header {
    background-image: url(data:image/png;base64,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);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 400rpx;
    padding-top: 40rpx;
    box-sizing: border-box;
}

.user-sgin .header .avatar {
    margin-left: 40rpx;
    border-radius: 50%;
    border: 4rpx solid #fff;
}

.user-sgin .main {
    z-index: 100;
    margin-top: -200rpx;
    width: 100%;
    top: 186rpx;
    padding: 0 20rpx;
    box-sizing: border-box;
}

.user-sgin .main .contain {
    border-radius: 10rpx;
}

.user-sgin .main .contain .title {
    padding: 24rpx 30rpx;
}

.user-sgin .main .contain .title .line {
    width: 8rpx;
    height: 34rpx;
    background-color: $-color-primary;
}

.user-sgin .main .day-list {
    width: 100%;
}

.user-sgin .main .day-list .item {
    width: 14.2%;
    margin-bottom: 10rpx;
}

.user-sgin .main .day-list .item .num {
    width: 68rpx;
    height: 68rpx;
    line-height: 58rpx;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f2f2f2;
}

.user-sgin .main .day-list .item .circle {
    position: relative;
}

.user-sgin .main .day-list .item .circle::before {
    content: "";
    width: 34rpx;
    height: 6rpx;
    position: absolute;
    background-color: #f2f2f2;
    right: 68rpx;
}

.user-sgin .main .day-list .item:nth-of-type(7n+1) .circle::before {
    content: "";
    background-color: rgba(0, 0, 0, 0);
}

.user-sgin .main .day-list .item .active-circle::before {
    content: "";
    width: 34rpx;
    height: 4rpx;
    position: absolute;
    background-color: #FFBD40;
    right: 68rpx;
}


.user-sgin .main .right-sgin {
    padding: 35rpx 145rpx;
}

.user-sgin .main .right-sgin .primary-button {
    background: linear-gradient(270deg, rgba(249, 95, 47, 1) 0%, rgba(252, 67, 54, 1) 55%, rgba(255, 44, 60, 1) 100%);
}
.user-sgin .main .contain .task {
    border-top: $-solid-border;
}
.user-sgin .main .contain .task .item {
    padding: 23rpx 30rpx;
}
.user-sgin .main .contain .task .item .img {
    width:74rpx;
    height:74rpx;
    border-radius:22rpx;
}
.user-sgin .main .contain .task .item .con {
    flex: 1;
}
.user-sgin .main .contain .task .item .btn {
    width: 154rpx;
    border: 1px solid $-color-primary;
}
.user-sgin .main .contain .task .item .con .num {
    color: $-color-primary;
}

.score-detail-entry {
    background-color: rgba(255, 255, 255, 0.3);
    border-radius:100rpx 0rpx 0rpx 100rpx;
    padding: 12rpx 19rpx 12rpx 16rpx;
    align-self: flex-end;
}

.van-popup {
    background-color: rgba(0, 0, 0, 0) !important;
}

.pop-container {
    background-repeat: no-repeat;
    background-size: 100%;
    height: 626rpx;
    width: 560rpx;
    position: relative;
    background-image: url(../../../static/images/jifen_popBg.png);
}

.u-mode-center-box {
    background-color: rgba(0, 0, 0, 0) !important;
}

.header-score {
    font-size: 46rpx;
    line-height: 36rpx;
    font-weight: bold;
    padding-top: 90rpx;
    padding-bottom: 150rpx;
    color: $-color-primary;
}

.desc {
    color: white;
    background:linear-gradient(82deg,rgba(250,81,50,1) 0%,rgba(236,60,34,1) 49%,rgba(250,83,50,1) 100%);
    padding: 16rpx 22rpx 16rpx 42rpx;
}

.box {

}

.bottom-box {
    margin-top: 84rpx;
}

.primary-btn {
    padding: 16rpx 190rpx;
}

.gray {
    background-color: #CCCCCC !important;
}
</style>