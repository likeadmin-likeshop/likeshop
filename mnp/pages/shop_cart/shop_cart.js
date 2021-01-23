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
import { getCartList, changeCartSelset, changeGoodsCount, deleteGoods } from '../../api/store'
import { patchPage } from 'miniprogrampatch'
import { Tips } from '../../utils/util';
import event from '../../utils/events'
Page = patchPage(Page);
Page({

    /**
     * 页面的初始数据
     */
    data: {
        //购物车状态 1为有 2为空 0则什么都不显示
        cartType: 0,
        isShow: false,
        cartLists: [],
        delPopup: false,
        totalPrice: ''
    },
    goodsDelete() {
        deleteGoods({
            cart_id: this.cartId
        }).then(res => {
            if(res.code == 1) {
                this.$getCartList()
            }
        })
    },
    changeDelPopup(e) {
        const {cartid} = e.currentTarget.dataset
        if(cartid) {
            this.cartId = cartid
        }
        this.setData({
            delPopup: !this.data.delPopup
        })
    },
    $getCartList() {
        getCartList().then(res => {
            wx.stopPullDownRefresh({
              success: (res) => {},
            })
            if(res.code == 1) {
                let {lists, total_amount} = res.data
                let cartType = 0
                if(lists.length == 0) {
                    cartType = 2
                }else {
                    cartType = 1
                }
                this.setData({
                    cartLists: lists,
                    cartType,
                    totalPrice: total_amount,
                    isShow: true
                })
                event.emit("GET_CART_NUM")
            }
        })
    },
    changOneSelect(e) {
        const {cartid, select} = e.currentTarget.dataset
        let selected = !select
        this.$changeCartSelset([cartid], selected)
    },
    changeAllSelect() {
        const {isSelectedAll, cartLists} = this.data
        let cartid = cartLists.map(item => item.cart_id)
        this.$changeCartSelset(cartid, !isSelectedAll)
    },
    $changeCartSelset(cartId, selected) {
        changeCartSelset({
            cart_id: cartId,
            selected
        }).then(res => {
            if(res.code == 1) {
                this.$getCartList()
            }
        })
    },
    countChange(e) {
        const {cartid} = e.currentTarget.dataset
        changeGoodsCount({
            cart_id: cartid,
            goods_num: e.detail
        }).then(res => {
            if(res.code == 1) {
                this.$getCartList()
            }
        })
    },
    goToConfirm() {
        let {cartLists} = this.data
        let goods = []
        cartLists.forEach((item) => {
            if(item.selected) {
                goods.push({
                    item_id: item.item_id,
                    num: item.goods_num
                })
            }
        })
        if(goods.length == 0) return Tips({title: '您还没有选择商品哦'})
        wx.navigateTo({
            url: `/pages/confirm_order/confirm_order?goods=${JSON.stringify(goods)}&type=cart`
        })
    },
    goPage(e) {
        const {url} = e.currentTarget.dataset
        wx.navigateTo({
            url
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
        this.$getCartList()
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
        this.$getCartList()
    },

    /**
     * 页面上拉触底事件的处理函数
     */
    onReachBottom: function () {

    },

    /**
     * 用户点击右上角分享
     */
    onShareAppMessage: async function () {
        let shareRes = await userShare();
        if(shareRes.code == 1) {
            return {
                title: shareRes.data.mnp_share_title,
                path: "pages/index/index"
            }    
        } else {
            return {
                path: "pages/index/index"
            }
        }
    },
    computed: {
        nullSelect: {
            require: ['cartLists'],
			fn({ cartLists }) {
                let index = cartLists.findIndex((item) => (item.selected == 1))
                if(index == -1) {
                    return true
                }
                return false
			}
        },
        isSelectedAll: {
            require: ['cartLists'],
            fn({ cartLists }) {
                let index = cartLists.findIndex((item) => (item.selected == 0))
                if(index == -1) {
                    return 1
                }
                return 0
			}
        }
    }
})