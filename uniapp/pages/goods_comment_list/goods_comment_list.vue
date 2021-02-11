<template>
<!--pages/goods_comment_list/goods_comment_list.wxml-->
<view class="goods-comment-list">
    <tabs :active="active" line-width="40" @change="changeActive">
        <tab title="待评价">
            <comment-list type="1" v-if="active == 0"></comment-list>
        </tab>
        <tab title="已评价">
             <comment-list type="2" v-if="active == 1"></comment-list>
        </tab>
    </tabs>
</view>
</template>

<script>


export default {
  data() {
    return {
      active: 0
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.type = options.type;

    if (this.type) {
        this.active = parseInt(this.type)
    }
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
      changeActive(e) {
           this.active = e
      }
  }
};
</script>
<style>
/* pages/goods_comment_list/goods_comment_list.wxss */
</style>