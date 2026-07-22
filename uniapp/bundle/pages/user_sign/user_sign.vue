<template>
<view>
<!-- pages/user_sgin/user_sgin.wxml -->
<view class="user-sgin">
    <view class="header" :style="{ backgroundImage: 'url(' + staticAsset('bundle/sign_header.png') + ')' }">
        <view class="row">
            <u-image class="avatar" width="110rpx" height="110rpx" shape="circle" :src="avatar == '' ? staticAsset('bundle/default_avatar.png') : avatar" />
            <view class="white ml20 row-between" style="flex: 1">
                <view>
                    <view style="font-size: 56rpx">{{integral}}</view>
                    <view class="row">
                        <navigator class="sm row" hover-class="none" url="/bundle/pages/sign_rule/sign_rule">
                            我的积分
                            <image :src="staticAsset('bundle/jifen_icon_help.png')" class="icon-sm ml10"></image>
                        </navigator>
                    </view>
                </view>
                <navigator class="score-detail-entry row" url="/bundle/pages/sign_detail/sign_detail" hover-class="none">
                    <image style="width: 26rpx;height: 26rpx;flex: none; margin-right: 7rpx" :src="staticAsset('bundle/jifen_icon_data.png')"></image>
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
                        <image class="num" :src="staticAsset('bundle/jifen_icon_select.png')" v-if="item.status == 1"></image>
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
                    <image class="img mr20" :src="item.type == 1 ? staticAsset('bundle/icon_jifen_qiandao.png') : item.type == 2 ? staticAsset('bundle/icon_jifen_pay.png') : staticAsset('bundle/icon_jifen_invite.png')"></image>
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
        <view class="pop-container" :style="{ backgroundImage: 'url(' + staticAsset('bundle/jifen_popBg.png') + ')' }">
            <view class="header-score row-center mt20">+{{addIntegral}}</view>
            <view class="box column-center">
                <view class="desc row mt20 sm">
                    <image style="width: 28rpx; height: 30rpx;margin-right: 8rpx" :src="staticAsset('bundle/icon_jifen.png')"></image>
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
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
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
    background-image: none;
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
    background-color: $ls-color-primary;
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
    border-top: $ls-solid-border;
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
    border: 1px solid $ls-color-primary;
}
.user-sgin .main .contain .task .item .con .num {
    color: $ls-color-primary;
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
    color: $ls-color-primary;
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
