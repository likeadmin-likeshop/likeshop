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
import { getBestList, getHome } from '../../api/store'
import { getMenu, getCouponPopList } from '../../api/app'
import { Tips } from '../../utils/util'
import { showLoginDialog } from '../../utils/wxutil'
import event from '../../utils/events'
const app = getApp()
Page({

    /**
     * 页面的初始数据
     */
    data: {
        currentSwiper: 0,
        colors : ["#FE41B7","#FA444D","#BD5AFF", "#FB831C", "#2DC1B9"],
        page:1,
        navH: 0,
        statusBarHeight: 0,
        searchH: 0,
        logo: '',
        status: 'loading',
        timeData: {},
        remainTime: "",
        navList: [],
        news: [],
        goodsList: [],
        seckill: {},
        hotGoods: [],
        newGoods: [],
        activityArea: [],
        showCoupop: false,
        couponPopList: []
    },
    swiperChange(e) {
        this.setData({
            currentSwiper: e.detail.current
        })
    },
    goPage(e) {
        const {item: {is_tab, link, link_type}} = e.currentTarget.dataset
        let { $state } = this.data
        if(!$state.isLogin) return showLoginDialog()
        switch(link_type) {
            case 1:
                // 本地跳转
                if(is_tab) {
                    wx.switchTab({
                      url: link,
                    })
                    return
                }
                wx.navigateTo({
                    url: link,
                })
                break;
            case 2:
                // webview
                wx.navigateTo({
                  url: "/pages/webview/webview?url=" + link,
                })
                break;
            case 3:
                // tabbar
                
        }
    },
    onChangeDate(e) {
        let timeData = {}
        for (let prop in e.detail) {
            if (prop !== 'milliseconds') timeData[prop] = ('0' + e.detail[prop]).slice(-2)
        }
        this.setData({
            timeData
        });
    },
    $getHome() {
        getHome().then(res => {
            if (res.code == 1) {
                const { coupon, news , shop_logo, new_goods,  } = res.data;
                this.setData({
                    logo: shop_logo,
                    news,
                    coupon,
                    newGoods: new_goods,
                })
            }
        })
    },
    $getBestList() {
        let { page, goodsList, status } = this.data
        if (status == 'finished') return
        getBestList({
            page_no: page
        }).then(res => {
            if (res.code == 1) {
                let { list, more } = res.data
                goodsList.push(...list)
                this.setData({
                    goodsList,
                    page: ++page
                })
                wx.stopPullDownRefresh()
                wx.nextTick(() => {
                    if (!more) {
                        this.setData({
                            status: 'finished'
                        })
                    }
                    if (goodsList.length <= 0) {
                        this.setData({
                            status: 'empty'
                        })
                    }
                })
            }
        })
    },

    handleArray(data, array = [], optNum = 10) {
        if(data.length <= optNum) {
            data.length > 0 && array.push(data)
            return array;
        }
        array.push(data.splice(0,optNum))
        return this.handleArray(data, array,optNum)
    },

    async $getMenu() {
      const {code, data} = await getMenu({type: 1})
      if(code == 1) {
        //   截取数组
        const arr = this.handleArray(data,);
        console.log(arr)
        this.setData({
            navList: arr
        })
      }
    },

    async $getCouponPopList() {
        const {code, data} = await getCouponPopList();
        if(code == 1) {
            this.setData({
                couponPopList: data,
                showCoupop: data.length > 0 ? true : false
            })
        }
    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        this.setData({
            navH: app.globalData.navHeight,
            statusBarHeight: app.globalData.statusBarHeight
        });
        this.$getMenu();
        this.$getBestList();
      
    },

    onShowCoupons() {
        this.setData({
            showCoupop: !this.data.showCoupop
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
        this.$getHome()
        this.$getCouponPopList()
        event.emit("GET_CART_NUM")
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
        this.data.page = 1
		this.data.goodsList = []
		this.setData({
			status: 'loading'
		})
		this.$getHome()
		this.$getBestList()
    },

    /**
     * 页面上拉触底事件的处理函数
     */
    onReachBottom: function () {
        this.$getBestList()
    },

    /**
     * 用户点击右上角分享
     */
    onShareAppMessage: function () {

    }
})