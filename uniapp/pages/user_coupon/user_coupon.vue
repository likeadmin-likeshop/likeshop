<template>
<!-- pages/user_coupon/user_coupon.wxml -->
<view class="user-coupon">
    <tabs :active="active" sticky line-width="40" @change="onChange">
        <tab v-for="(item, index) in coupons" :key="index" :title="item.title + '(' + item.num + ')'">
            <my-coupons :type="item.type" @getnum="onChangeNum($event, index)"></my-coupons>
        </tab>
    </tabs>
</view>
</template>

<script>

export default {
  data() {
    return {
      active: 0,
      coupons: [{
        title: '可使用',
        num: '0',
        type: 0
      }, {
        title: '已使用',
        num: '0',
        type: 1
      }, {
        title: '已过期',
        num: '0',
        type: 2
      }]
    };
  },

  components: {
    
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {},

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
  methods: {
    onChangeNum(e, index) {
      this.coupons[index].num = e.detail
    },
    onChange(e) {
        console.log(e)
    }

  }
};
</script>
<style>
/* pages/user_coupon/user_coupon.wxss */
</style>