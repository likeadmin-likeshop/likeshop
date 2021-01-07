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
import {refundOPtType} from "../../utils/type"
import { baseURL } from '../../config'
import {getGoodsInfo, applyAfterSale, applyAgain} from "../../api/user"
import { Tips } from '../../utils/util';
import event from '../../utils/events'
Page({

  /**
   * 页面的初始数据
   */
  data: {
    hiddenOpt: false,
    optTyle: refundOPtType.ONLY_REFUND,
    goods: {},
    reason: [],
    showPop: false,
    reasonIndex: -1,
    fileList: [],
    remark: ""
  },

  showPopup() {
    this.setData({
      showPop: true
    })
  },

  radioChange(e) {
    this.setData({
      reasonIndex: e.detail.value
    })
  },

  hidePopup() {
    this.setData({
      showPop: false
    })
  },

  onlyRefund: function() {
    this.setData({
      optTyle: refundOPtType.ONLY_REFUND,
      hiddenOpt: true
    })
  },

  allRefunds() {
    this.setData({
      optTyle: refundOPtType.REFUNDS,
      hiddenOpt: true
    })
  },

  onSubmit() {
    console.log(this.afterSaleId)
    if(this.afterSaleId) {
      this.$applyAgain()
    } else {
      this.$applyAfterSale();
    }
  },

  // 重新申请
  $applyAgain() {
    let {reason, reasonIndex, optTyle, remark, fileList} = this.data;
    if(!reason[reasonIndex]) {
      return Tips({title: '请选择退款原因'})
    }
    const data = {
      id: this.afterSaleId,
      reason: reason[reasonIndex],
      refund_type: optTyle,
      remark: remark,
      img: fileList.length <= 0 ? '' : fileList[0].url
    }
    applyAgain(data).then(res => {
      if(res.code == 1) {
        event.emit('RESET_LIST');
        Tips({title: res.msg}, {tab: 5, url: '/pages/after_sales_detail/after_sales_detail?afterSaleId=' + res.data.after_sale_id})
      }
    })
  },

  onInput(e) {
    this.setData({
        remark: e.detail.value
    })
  },

  $applyAfterSale() {
    let {reason, reasonIndex, optTyle, remark, fileList} = this.data;
    if(!reason[reasonIndex]) {
      return Tips({title: '请选择退款原因'})
    }

    const data = {
      item_id: this.itemId,
      order_id: this.orderId,
      reason: reason[reasonIndex],
      refund_type: optTyle,
      remark: remark,
      img: fileList.length <= 0 ? '' : fileList[0].url
    }
    applyAfterSale(data).then(res => {
      if(res.code == 1) {
        event.emit('RESET_LIST');
        Tips({title: '提交成功'});
        wx.redirectTo({
          url: '/pages/after_sales_detail/after_sales_detail?afterSaleId=' + res.data.after_sale_id,
        })
      }
    })
  },

  afterRead(e) {
    const { file } = e.detail;
    wx.showLoading({
      title: '正在上传中...',
      mask: true
    })
    
    this.uploadFile(file.path).then(res => {
        wx.hideLoading()
        this.setData({
            fileList: [res]
        })
    })
  },



  uploadFile(path) {
    return new Promise(resolve => {
        wx.uploadFile({
            url: baseURL + 'file/formimage',
            filePath: path,
            name: 'file',
            success: (res) => {
                const { fileList } = this.data;
                let data = JSON.parse(res.data)
                if(data.code == 1) {
                    resolve(data.data)
                }
            },
        });
    })
  },

  deleteImage(e) {
    let {index} = e.detail;
    let { fileList } = this.data;
    fileList.splice(index, 1)
    this.setData({
      fileList: fileList
    })
  },

  $getGoodsInfo() {
    let {orderId, itemId} = this;
    getGoodsInfo({order_id: orderId, item_id: itemId}).then(res => {
      if(res.code == 1) {
        this.setData({
          goods: res.data.goods,
          reason: res.data.reason
        })
      }
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let {order_id, item_id, afterSaleId} = options;
    this.orderId = order_id;
    this.itemId = item_id;
    this.afterSaleId = afterSaleId
    this.$getGoodsInfo()
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