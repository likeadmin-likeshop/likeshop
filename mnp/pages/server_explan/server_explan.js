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
import {getServerProto, getPrivatePolicy, getAfterSaleGuar} from '../../api/app'
import wxParse from '../../wxParse/wxParse.js';
Page({

  /**
   * 页面的初始数据
   */
  data: {
    
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let {type} = options;
    type = parseInt(type)
    // 0 ==> 服务协议 1 ==> 隐私政策 2 ==> 售后保障
    wx.setNavigationBarTitle({
      title: type == 0 ? '服务协议' : type == 1 ? '隐私政策' : '售后保障',
    })
    switch(type) {
      case 0:
        this.$getServerProto() 
        break;
      case 1:
        this.$getPrivatePolicy()
        break;
      case 2:
        this.$getAfterSaleGuar()
        break;
      default:
        this.$getServerProto() 
        break;
    }
  },

  // 服务协议
  $getServerProto() {
    getServerProto().then(res => {
      if(res.code == 1) {
        wxParse.wxParse('content', 'html', res.data, this, 15);
      }
    })
  },

  // 隐私协议
  $getPrivatePolicy() {
    getPrivatePolicy().then(res => {
      if(res.code == 1) {
        wxParse.wxParse('content', 'html', res.data, this, 15);
      }
    })
  },

  // 售后保障
  $getAfterSaleGuar() {
    getAfterSaleGuar().then(res => {
      if(res.code == 1) {
        wxParse.wxParse('content', 'html', res.data, this, 15);
      }
    })
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})