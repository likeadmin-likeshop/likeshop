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
import {getAfterSaleList, applyAfterSale, getGoodsInfo, inputExpressInfo, cancelApply, afterSaleDetail, applyAgain} from "../../api/user"
import {AfterSaleType} from "../../utils/type";
import event from '../../utils/events';
Page({

  /**
   * 页面的初始数据
   */
  data: {
    active: AfterSaleType.NORMAL,
    afterSaleType: AfterSaleType.NORMAL,
    afterSaleList: [],
    afterSale: [{
      name: '售后申请',
      type: AfterSaleType.NORMAL,
      isShow: true
    }, {
      name: '处理中',
      type: AfterSaleType.HANDLING,
      isShow: false
    }, {
      name: '已处理',
      type: AfterSaleType.FINISH,
      isShow: false
    }]
  },

  onChange(e) {
    const {name} = e.detail
    this.changeShow(name);
  },

  changeShow(type) {
    const {afterSale} = this.data
		let index = afterSale.findIndex(item => {
			return item.type == type
    });
		if(index != -1) {
			this.setData({
				[`afterSale[${index}].isShow`]: true,
				active: type
			})
		}
  },

  goPage(e) {
    let {url} = e.currentTarget.dataset;
    wx.navigateTo({
      url: url,
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
  
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
    event.remove("RESET_LIST")
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
    const { active } = this.data
    let myComponent = this.selectComponent('#' + active);
		if (myComponent.$getAfterSaleList) {
			myComponent.$getAfterSaleList()
		}
  },
})