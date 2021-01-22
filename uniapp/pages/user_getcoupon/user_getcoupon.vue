<template>
<!-- pages/user_getcoupon/user_getcoupon.wxml -->
<view class="user-getcoupon">
    <coupon-list v-if="!showNull" :list="couponList" :btn-type="3" @reflash="$getCouponList"></coupon-list>
    <view v-else class="~column-center" style="padding-top: 200rpx">
        <image class="~img-null" src="/static/images/coupon_null.png"></image>
        <text class="~muted">暂无优惠券可领～</text>
    </view>
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
import { getCouponList } from '../../api/store';

export default {
  data() {
    return {
      couponList: [],
      showNull: false
    };
  },

  components: {
      
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getCouponListFun();
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {},

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {},

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {},

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {},

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {},

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {},

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {},
  methods: {
    getCouponListFun() {
      getCouponList().then(res => {
        if (res.code == 1) {
          if (res.data.length <= 0) {
            this.showNull = true;
            return;
          }
            this.couponList = res.data;
        }
      });
    }

  }
};
</script>
<style>
/* pages/user_getcoupon/user_getcoupon.wxss */
</style>