<template>
<!--pages/message_center/message_center.wxml-->
<view class="message-center-container">
  <navigator v-for="(item, index) in list" :key="index" class="message-item row" hover-class="none" :url="'/pages/bundle/notice/notice?type=' + item.type">
    <image style="width: 76rpx;height: 76rpx;flex: none" :src="item.img"></image>
    <view class="item-info ml20 column">
      <view class="item-title">{{item.title}}</view>
      <view class="item-desc line1 muted">{{item.content}}</view>
    </view>
  </navigator>
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
import { getNoticeLists, getMessageLists } from '@/api/store';

export default {
  data() {
    return {
      list: []
    };
  },

  components: {},
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getMessageListsFun();
  },

  methods: {
    getMessageListsFun() {
      getMessageLists().then(res => {
        if (res.code == 1) {
          this.list = res.data;
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/message_center/message_center.wxss */

.message-center-container {
  margin-top: 10rpx;
  padding: 0 20rpx;
  background-color: white;
  .message-item {
    padding: 32rpx 0;
    &:not(:last-of-type) {
        border-bottom: $-solid-border;
    }
    .item-info {
      font-size: 32rpx;
      flex: 1;
      overflow: hidden;
      .item-title{
        font-size: 32rpx;
      }
      .item-desc{
        font-size: 26rpx;
      }
    }
  }
}
</style>