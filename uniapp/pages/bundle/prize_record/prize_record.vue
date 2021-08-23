<template>
<!--bundle/pages/prize_record/prize_record.wxml-->
<view class="prize-record-container">
  <view v-for="(item, index) in lists" :key="index" class="prize-record-item row">
    <custom-image :src="item.prize_image" style="width: 90rpx;height: 90rpx" radius="6rpx" />
    <view class="prize-record-info">
      <view class="lg">{{item.prize_name}}</view>
      <view class="xs lighter">领取时间：{{item.create_time}}</view>
    </view>
  </view>
  <loading-footer slotEmpty :status="loadingStatus">
    <view class="data-null column-center" slot="empty">
      <image src="/static/images/null_gift.png" class="img-null"></image>
      <text class="xs muted">暂无抽奖记录～</text>
    </view>
  </loading-footer>
</view>
</template>

<script>
// bundle/pages/prize_record/prize_record.js
import { loadingType } from '@/utils/type';
import { getUserRecord } from '@/api/user';
import {loadingFun} from "@/utils/tools"
export default {
  data() {
    return {
      loadingStatus: loadingType.LOADING,
      page: 1,
      lists: []
    };
  },

  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getUserRecordFun();
  },


  onReachBottom: function () {
    this.getUserRecordFun();
  },

  methods: {
    getUserRecordFun() {
      let {
        loadingStatus,
        lists,
        page
      } = this;

      loadingFun(getUserRecord, page, lists, loadingStatus).then(res => {
          if(res) {                  
              this.page = res.page;
              this.lists = res.dataList
              this.loadingStatus = res.status
          }
      })
    }

  }
};
</script>
<style lang="scss">
/* bundle/pages/prize_record/prize_record.wxss */

.prize-record-container {
  padding: 0 20rpx;
  .prize-record-item {
    margin-top: 20rpx;
    background-color: white;
    padding: 26rpx 24rpx;
    border-radius: 10rpx;
    .prize-record-info {
      margin-left: 24rpx;
      flex: 1
    }
  }
}

.data-null {
  padding-top: 200rpx;
}
</style>