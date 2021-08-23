<template>
<!--pages/webview/webview.wxml-->
<view class="page-body">
  <view class="page-section page-section-gap">
    <web-view :src="url"></web-view>
  </view>
</view>
</template>

<script>

export default {
  data() {
    return {
      url: ''
    };
  },

  components: {},
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
      this.url = options.url
  },
  methods: {}
};
</script>
<style>
/* pages/webview/webview.wxss */
.page-section-gap{
  box-sizing: border-box;
  padding: 0 30rpx;
}
</style>