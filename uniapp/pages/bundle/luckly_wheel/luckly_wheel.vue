<template>
<view class="luckly-wheel-container">
  <view class="header">
    <image src="/static/images/choujiang_bg.png"></image>
  </view>
  <view class="main">
    <view class="row-end">
      <navigator class="user-prize row-center" url="/pages/bundle/prize_record/prize_record" hover-class="none">
        <text class="md" style="color: #7D350C;font-weight: 600;">我的奖品</text>
      </navigator>
    </view>
    <view class="wheel-box">
      <view class="wheel-container">
        <view class="row-center">
          <view class="notice-container row">
            <image src="/static/images/icon_notice.png" class="icon"></image>
            <!-- <view class="xs ml20 marquee-box" style="color: #F9EDDD" wx:if="{{record.length > 0}}">
                <text class="xs marquee_text" style="color: #F9EDDD;" wx:for="{{record}}" wx:key="id">{{item.text}}</text>
            </view> -->
            <view class="marquee-box ml20" v-if="record.length > 0">
              <swiper autoplay vertical style="height: 33rpx">
                <swiper-item v-for="(item, index) in record" :key="index" class="row">
                  <text class="xs marquee_text" style="color: #F9EDDD;">{{item.text}}</text>
                </swiper-item>
              </swiper>
            </view>
            <view class="xs ml20" style="color: #F9EDDD" v-else>
              <text class="xs" style="color: #F9EDDD;">暂无通知</text>
            </view>
          </view>
        </view>
        <view class="wheel">
          <my-lottery :lotteryData="lists" :status="config.status" :luckyOrder="3" :circleTimes="30" @begin="startLottery" @finish="lotteryFinish"></my-lottery>
        </view>
        <view class="rules-box">
          <view class="lg" style="color: #FCD7D2;margin-bottom: 30rpx;">活动规则</view>
          <text class="sm" style="color: #FCD7D2;">{{config.rule}}
          </text>
        </view>
      </view>
    </view>
    <view class="xs row-center" style="color: #FFF2D9;margin-top: 30rpx">本活动的所有奖品，均由商城提供</view>
  </view>
  <u-popup v-model="showResult" mode="center" >
    <view class="result-popup column-center">
      <view class="result-container column-between">
        <view class="row-center" style="padding:0 118rpx;margin-top: 90rpx">
          <text style="color: #F95F2F;font-size: 62rpx;text-align: center;">{{resultText}}</text>
        </view>
        <view class="mb20">
          <view class="get-btn row-center md br60" @tap="onClose">
            点击收下
          </view>
        </view>
      </view>
      <view style="margin-top: 50rpx" @tap="onClose">
        <image src="/static/bundle/images/icon_close.png" style="width: 62rpx;height: 62rpx;"></image>
      </view>
    </view>
  </u-popup>
</view>
</template>

<script>
// pages/luckly_wheel/luckly_wheel.js
import { getPrize } from "@/api/user";

export default {
  data() {
    return {
      // 抽奖配置
      config: {},
      // 抽奖列表
      lists: [],
      // 通知信息
      record: [],
      // 今天剩余抽奖
      surplus: 0,
      showResult: false,
      // 抽奖结果
      resultText: ""
    };
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getPrizeFun();
  },
  methods: {
    getPrizeFun() {
      getPrize().then(res => {
        if (res.code == 1) {
          let {
            config,
            list,
            record,
            surplus
          } = res.data;
          list = list.map((item, index) => {
            if (index == 4) {
              item.type = 1;
              item.name = "今日剩余" + surplus + "次";
            }

            return item;
          });
          this.config = config;
          this.lists = list;
          this.record = record
          this.surplus = surplus
        }
      });
    },

    onClose() {
      this.showResult = false
    },

    startLottery(e) {
      this.getPrizeFun();
    },

    lotteryFinish(e) {
      this.showResult = true;
      this.resultText = e.detail
    }

  }
};
</script>

<style lang="scss">
/* pages/luckly_wheel/luckly_wheel.wxss */

.luckly-wheel-container {
  background-color: $-color-primary;
  padding-bottom: 20rpx;
  .header {
    width: 100%;
    height: 1108rpx;
    image {
      width: 100%;
      height: 100%;
    }
  }
  .main {
    margin-top: -810rpx;
    position: relative;
    .user-prize {
        padding: 20rpx;
        background-color: #FEF0B5;
        border-radius: 100rpx 0rpx 0rpx 100rpx;
        box-shadow: 0px 3px 0px #F95F2F;
    }
    .wheel-box {
      padding: 0 30rpx;
      .wheel-container {
        padding: 27rpx 15rpx 36rpx;
        background-color: #ED3720;
        border: 12rpx solid #FE6847;
        margin-top: 20rpx;
        border-radius: 30rpx;
        .notice-container {
          background-color: #D30C16;
          border: 2rpx solid #EDB17D;
          padding: 13rpx 28rpx;
          border-radius: 100rpx;
          width: 586rpx;
          .marquee-box {
            width: 500rpx;
            height: 33rpx;
          }
        }
        .wheel {
          margin-top: 20rpx;
          .lottery-box {
            background-image: url(data:image/png;base64,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);
            width: 560rpx;
            height: 560rpx;
            background-size: 100% 100%;
            padding: 35rpx 40rpx;
          }
        }
        .rules-box {
          margin-top: 24rpx;
          background-color: #D30C16;
          padding: 20rpx 16rpx 20rpx 28rpx;
          border-radius: 20rpx;
        }
      }
    }
  }
}

.luckly-wheel-container .van-popup {
  background-color: rgba(0, 0, 0, 0);
}

.result-popup {
  width: 545rpx;
  height: 626rpx;
  .result-container {
    width: 545rpx;
    height: 514rpx;
    background-size: 100% 100%;
    background-image: url(../../../static/images/lottery_bg.png);
  }
}

.get-btn {
  width: 320rpx;
  height: 70rpx;
  color: #7B3200;
  background: linear-gradient(180deg, #FEF0B0 0%, #FFA92E 100%);
}
</style>