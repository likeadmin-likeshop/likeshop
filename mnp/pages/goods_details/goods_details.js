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
import { getGoodsDetail, addCart, getGoodsCoupon, getCartNum } from '../../api/store'
import { collectGoods } from '../../api/user'
import { trottle, Tips, getUrlParams } from '../../utils/util'
import { showLoginDialog, getRect } from '../../utils/wxutil'
import wxParse from '../../wxParse/wxParse'
import { CollectType } from '../../utils/type'
import event from './../../utils/events'
Page({

    /**
     * 页面的初始数据
     */
    data: {
        showSpec: false,
        showCoupons: false,
        popupType: '',
        swiperList: [],
        goodsDetail: {},
        goodsLike: [],
        comment: {},
        checkedGoods: {},
        couponList: [],
        isFirstLoading: true,
        isCollect: CollectType.CANCEL_COLLECTION,
        timeData: {},
        // 动画数据
        actionData: {},
        shopCartActionData: {},
        cartNum: ""
    },



    // 收藏商品
    collectGoods(e) {
        let { is_collect } = this.data.goodsDetail;
        if (is_collect == CollectType.CANCEL_COLLECTION) {
            this.data.isCollect = CollectType.COLLECTION;
        } else {
            this.data.isCollect = CollectType.CANCEL_COLLECTION;
        }
        this.$handleCollectGoods({ is_collect: this.data.isCollect, goods_id: this.id });
    },

    $handleCollectGoods(data) {
        let { $state: {isLogin} }  = this.data
        if (!isLogin) {
            showLoginDialog()
            return
        }
        collectGoods(data).then(res => {
            if (res.code == 1) {
                if(data.is_collect == 1) {
                    Tips({title: "收藏成功"})
                }else {
                    Tips({title: "取消收藏"})
                }
                event.emit("REFLASH");
                this.$getGoodsDetail();
            }
        })
    },

    async onLoadFun() {
        this.$getGoodsDetail()
        this.$getCoupons()
        this.$getCartNum()
    },
    $getCartNum() {
        let { $state: {isLogin} }  = this.data
        if (!isLogin) {
            return
        }
        getCartNum().then(res => {
            if(res.code == 1) {
                this.setData({
                    cartNum: res.data.num
                })
            }
        })
    },
    $getCoupons() {
        getGoodsCoupon({
            id: this.id
        }).then(res => {
            if (res.code == 1) {
                this.setData({
                    couponList: res.data
                })
            }
        })
    },
    $getGoodsDetail() {
            getGoodsDetail({
                id: this.id
            }).then(res => {
                if (res.code == 1) {
                    let { goods_image, content, activity, comment, like } = res.data
                    this.setData({
                        goodsDetail: res.data,
                        swiperList: goods_image,
                        comment,
                        goodsLike: like,
                        isFirstLoading: false
                    })
                    wx.nextTick(() => {
                        getRect('.cart').then(res => {
                            this.cartLeft = res.left + res.width/2
                            this.cartTop = res.top - res.height
                
                        })
                    })
                    wxParse.wxParse('content', 'html', content, this, 10);
                }else {
                    setTimeout(() => {
                        wx.navigateBack()
                    },500)
                }
            })
    },
   
    onChangeSpec(e) {
        this.setData({
            checkedGoods: e.detail
        })
    },
    onShowCoupons(e) {
        let { $state: {isLogin} }  = this.data
        if (!isLogin) {
            showLoginDialog()
            return
        }
        this.setData({
            showCoupons: true
        })
    },
   
   
    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        if(options.scene) {
            let scene = getUrlParams(decodeURIComponent(options.scene))
            options.id = scene.id
        }
        this.actionObj = wx.createAnimation({
            duration: 1000,
            delay: 0,
            timingFunction: "linear"
        });
        this.cartActionObj = wx.createAnimation({
          delay: 0,
          duration: 100,
          timingFunction: "ease-in-out"
        })
        this.onAddCart = trottle(this.onAddCart, 800, this)
        this.id = options.id
        this.onLoadFun()
    },
    goPage(e) {
        let { url } = e.currentTarget.dataset
        wx.navigateTo({
            url
        })
    },
  
    showSpec(e) {
        let { $state: {isLogin} }  = this.data
        if (!isLogin) {
            showLoginDialog()
            return
        }
        let { type } = e.currentTarget.dataset
        this.setData({
            popupType: type,
            showSpec: true
        })
    },
    onClose() {
        this.setData({
            showSpec: false,
            showCoupons: false
        })
    },
    onAddCart(e) {
        let { id, goodsNum } = e.detail
        addCart({
            item_id: id,
            goods_num: goodsNum
        }).then((res) => {
            if (res.code == 1) {
                this.setData({
                    showSpec: false
                })
                // wx.showToast({ title: res.msg })
                this.runGoodsAnim();
                // this.$getCartNum()
            }
        })
    },
    onBuyNow(e) {
        let { id, goodsNum } = e.detail
        let goods = [{
            item_id: id,
            num: goodsNum
        }]
        this.setData({
            showSpec: false
        })
        wx.nextTick(() => {
            wx.navigateTo({
                url: `/pages/confirm_order/confirm_order?goods=${JSON.stringify(goods)}`
            })
        })
    },

    // 创建动画实例
    runGoodsAnim: function(callback) {
      
        this.initAnim();
        // 缩放动画
        this.actionObj.opacity(1).scale(0.35).step({duration: 300,});
        // 曲线动画
        this.actionObj.left(80).step({duration: 200, timingFunction: "ease-out" })
        this.actionObj.top(this.cartTop * 1 / 2).opacity(0.8).step({duration: 200, delay: 0, timingFunction: "linear"})
        this.actionObj.left(this.cartLeft).step({duration: 200, timingFunction: "ease-in"})
        this.actionObj.top(this.cartTop).opacity(0).scale(0).step({duration: 200,delay: 0,timingFunction: "linear" });
        this.cartActionObj.rotate(15).step({delay: 1000,});
        this.cartActionObj.rotate(-15).step();
        this.cartActionObj.rotate(15).step({duration: 100});
        this.cartActionObj.rotate(-15).step({duration: 100});
        this.cartActionObj.rotate(0).step()
      
        this.setData({
            actionData: this.actionObj.export(),
            cartActionObj: this.cartActionObj.export()
        });
        setTimeout(() => {
            this.$getCartNum()
        },1000)
        
    },

    initAnim: function() {
        this.actionObj.translateX('-50%')
                      .translateY(0)
                      .top('2%')
                      .left('50%')
                      .opacity(0)
                      .scale(1)
                      .step({duration: 0});
        this.setData({
            actionData: this.actionObj.export(),
        });
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
       
    },
    
})