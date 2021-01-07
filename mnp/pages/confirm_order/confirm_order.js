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
import { orderBuy, getOrderCoupon } from '../../api/store'
import { prepay, getMnpNotice } from '../../api/app'
import { Tips } from '../../utils/util'
import event from '../../utils/events'
import { payWay } from '../../utils/type'
import { wxpay } from '../../utils/wxutil'
import Toast from '../../components/weapp/toast/toast';
import Dialog from '../../components/weapp/dialog/dialog';
Page({

    /**
     * 页面的初始数据
     */
    data: {
        isFirstLoading: true,
        address: {},
        orderInfo: {},
        goodsLists: [],
        addressId: '',
        showCoupon: false,
        popActive: 0,
        usableCoupon: [],
        unusableCoupon: [],
        userRemark: '',
        payWayArr: [
            {
                icon: '/images/icon_wechat.png',
                name: '微信支付',
                type: payWay.wechat,
                desc: '微信快捷支付'
            }
        ],
        payWay: payWay.wechat
    },

    radioChange(e) {
        this.setData({
            payWay: Number(e.detail.value)
        })
    },
    onSelectCoupon(e) {
        this.couponId = e.detail
    },
    showCouponPop: function (e) {
        this.setData({ showCoupon: !this.data.showCoupon })
    },
    hideCouponPop: function (e) {
        this.setData({
            showCoupon: !this.data.showCoupon,
        })
        this.$orderBuy()
    },
    onSelectAddress() {
        wx.navigateTo({
            url: `/pages/user_address/user_address?type=1`
        })
    },
    onRemarkChange(e) {
        let { detail } = e
        this.setData({
            userRemark: detail
        })
    },

    getAuthMsg() {
        return new Promise(resolve => {
            getMnpNotice({
                scene: 1
            }).then((res) => {
                if(res.code == 1) {
                    wx.requestSubscribeMessage({
                        tmplIds: res.data,
                        fail(res) {
                            console.log(res.errMsg)
                        },
                        complete() {
                            resolve()
                        }
                    })
                }
            })
        })
	},

    onSubmitOrder() {
        wx.showModal({
            title: '温馨提示',
            content: '是否确认下单',
            success: async (res) => {
                let { confirm } = res
                if (confirm) {
                    await this.getAuthMsg()
                    // wx.showLoading({
                    //     title: '请稍等...',
                    //     mask: true
                    // })
                    this.toast = Toast.loading({
                        duration: 0, // 持续展示 toast
                        forbidClick: true,
                        message: '请稍等...',
                    });
                    this.$orderBuy('submit')
                }
            }
        })
    },
    $getOrderCoupon() {
        return new Promise(resolve => {
            getOrderCoupon({
                goods: this.goods
            }).then(res => {
                if (res.code == 1) {
                    const { usable, unusable } = res.data
                    this.setData({
                        usableCoupon: usable,
                        unusableCoupon: unusable
                    })
                    resolve()
                }
            })
        })

    },
    $orderBuy(action = 'info') {
        let { address, userRemark, payWay, } = this.data
        let submitObj = {
            action,
            goods: this.goods,
            coupon_id: this.couponId,
        }

        if (action == 'info') {
            if (this.addressId) {
                submitObj.address_id = this.addressId
            }
        } else if (action == 'submit') {
            submitObj.remark = userRemark
            submitObj.address_id = address.id
            submitObj.type = this.confirmType,
                submitObj.pay_way = payWay
        }
        orderBuy(submitObj).then(res => {
            if (res.code == 1) {
                if (action == 'info') {
                    let { address, goods_lists } = res.data
                    this.setData({
                        address,
                        goodsLists: goods_lists,
                        orderInfo: res.data,
                    })
                    wx.nextTick(() => {
                        this.setData({
                            isFirstLoading: false
                        })
                    })
                    return false
                } else if (action == 'submit') {
                    let { order_id, type } = res.data
                    this.orderId = order_id
                    return prepay({
                        from: type,
                        order_id
                    })
                }
            } else {
                Toast.clear()
                return false
            }
        }).then(res => {
            Toast.clear()
            if (res.code == 1) {
                let args = res.data
                wxpay(args).then(()=> {
                    this.payStatus = true
					wx.redirectTo({
							url: `/pages/pay_result/pay_result?id=${this.orderId}`
					})
                }).catch(() => {
                    
					this.payStatus = true
					wx.redirectTo({
							url: `/pages/user_order/user_order`
					})
                })
            }
        })
    },
    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        let goods = options.goods || []
        this.confirmType = options.type || ''
        this.goods = JSON.parse(goods)
        event.on('SELECT_ADDRESS', this.getAddress, this)
    },
    getAddress(e) {
        this.addressId = e.id
    },
    /**
     * 生命周期函数--监听页面初次渲染完成
     */
    onReady: function () {

    },

    /**
     * 生命周期函数--监听页面显示
     */
    onShow: async function () {
        await this.$getOrderCoupon()
        if (this.payStatus) return
        this.$orderBuy()
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
        event.remove('SELECT_ADDRESS')
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