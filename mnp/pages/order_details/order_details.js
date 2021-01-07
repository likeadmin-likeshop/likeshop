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
import { getOrderDetail, cancelOrder, delOrder, confirmOrder } from '../../api/user'
import { prepay } from '../../api/app'
import { Tips } from '../../utils/util'
import event from '../../utils/events'
import {wxpay} from '../../utils/wxutil'
import Toast from '../../components/weapp/toast/toast';
Page({

    /**
     * 页面的初始数据
     */
    data: {
        orderDetail: {},
        isFirstLoading: true,
        type: 0,
        cancelTime: 0
    },
    onShowDialog() {
        let { showCancel } = this.data
        this.setData({
            showCancel: !showCancel
        })
    },
    async onConfirm() {
        const { type } = this.data
        let res = null
			switch(type) {
				case 0 : res = await cancelOrder(this.id) 
				break;
				case 1 : res = await delOrder(this.id) 
				break;
				case 2 : res = await confirmOrder(this.id) 
				break;
			}
        if (res.code == 1) {
            this.onShowDialog()
            if(type == 0 || type == 2) {
                Tips({ title: res.msg })
                this.$getOrderDetail()
            }else if(type == 1) {
                Tips({ title: res.msg }, { tab: 3, url: 1 });
            }
            event.emit('RESET_LIST')
        }
    },
    delOrder(e) {
        this.setData({
            type: 1
        })
        wx.nextTick(() => {
            this.onShowDialog()
        })

    },
    comfirmOrder(e) {
        this.setData({
            type: 2
        })
        wx.nextTick(() => {
            this.onShowDialog()
        })

    },
    cancelOrder(e) {
        this.setData({
            type: 0
        })
        wx.nextTick(() => {
            this.onShowDialog()
        })
    },
    payNow(e) {
        this.toast = Toast.loading({
            duration: 0, // 持续展示 toast
            forbidClick: true,
            message: '请稍等...',
          });
        prepay({
            from: 'order',
            order_id: this.id
        }).then(res => {
            if (res.code == 1) {
                Toast.clear()
                let args = res.data
                wxpay(args).then(()=> {
                    Tips({ title: '支付成功' })
                    this.$getOrderDetail()
                    event.emit('RESET_LIST')
                }).catch(() => {
                    
                })
            }
        })
    },
    $getOrderDetail() {
        getOrderDetail(this.id).then(res => {
            if(res.code == 1) {
                const cancelTime = res.data.order_cancel_time*1000 - Date.now()
                this.setData({
                    orderDetail: res.data,
                    cancelTime: cancelTime > 0 ? cancelTime : 0
                })
                wx.nextTick(() => {
                    this.setData({
                        isFirstLoading: false
                    })
                })
            }
        })
    },
    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        this.id = this.id ? this.id : options.id
        this.$getOrderDetail()
    },
    goPage(e) {
        let { url } = e.currentTarget.dataset
        wx.navigateTo({
            url
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