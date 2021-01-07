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
import { inputExpressInfo } from '../../api/user'
import { baseURL } from '../../config'
import { Tips } from '../../utils/util';
import event from '../../utils/events'
Page({

  /**
   * 页面的初始数据
   */
  data: {
    fileList: [],
    formInfo: {
      express: '',
      number: '',
      remark: ''
    }
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

  formSubmit(e) {
    let { value } = e.detail;
    let { fileList } = this.data;
    console.log(value)
    if(!value.express) return Tips({title: '请填写物流公司名称'});
    if(!value.number) return Tips({title: '请填写快递单号'});
    let data = {
      id: this.afterSalesId,
      express_name: value.express,
      invoice_no: value.number,
      express_remark: value.remark,
      express_image: fileList.length <= 0 ? '' : fileList[0].url
    }
    this.$inputExpressInfo(data);
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

  $inputExpressInfo(data) {
    inputExpressInfo(data).then(res => {
      if(res.code == 1) {
          Tips({title: '提交成功'}, () => {
            wx.navigateBack()
          });
          event.emit('RESET_LIST');
          
      }
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let {id} = options;
    // 售后id
    this.afterSalesId = id;
    console.log(id);
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