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
import { getCollectGoods, collectGoods, } from "../../api/user"
import { CollectType, loadingType } from "../../utils/type"
import event from '../../utils/events'

Page({

    /**
     * 页面的初始数据
     */
    data: {
        page: 1,
        status: "loading",
        deleteSure: false,
        collectionList: [],
        collectionGoods: CollectType.COLLECTION,
    },

    deleteCancel: function (e) {
        this.setData({ deleteSure: false })
    },

    deleteConfirm: function (e) {
        this.id = e.currentTarget.dataset.id;
        this.setData({ deleteSure: true });
    },

    $getCollectGoods() {
        let { page, collectionList, status } = this.data
        if (status == loadingType.FINISHED) {
            return
        }
        getCollectGoods({ page_no: page }).then(res => {
            if (res.code == 1) {
                let { list, more } = res.data;
                collectionList.push(...list);
                this.setData({
                    collectionList: collectionList,
                    page: ++page
                })
                wx.nextTick(() => {
                    if (!more) {
                        this.setData({
                            status: loadingType.FINISHED
                        })
                    }
                    if (collectionList.length <= 0) {
                        this.setData({
                            status: loadingType.EMPTY
                        })
                        return
                    }
                })
            } else {
                this.setData({
                    status: loadingType.ERROR
                })
            }
        })
    },



    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        event.on("REFLASH", this.reflesh, this);
        this.$getCollectGoods();
    },

    reflesh() {
        this.data.collectionList = [];
        this.data.page = 1;
        this.data.status = loadingType.LOADING;
        this.$getCollectGoods();
    },

    cancelCollect () {
        console.log(this.id)
        collectGoods({
            is_collect: CollectType.CANCEL_COLLECTION,
            goods_id: this.id
        }).then(res => {
            if (res.code == 1) {
                this.data.collectionList = [];
                this.data.page = 1;
                this.data.status = loadingType.LOADING;
                this.$getCollectGoods()
            }
        })
    },

   
    goToGoodsDetail: function (e) {
        let {id} = e.currentTarget.dataset;
        wx.navigateTo({
            url: '/pages/goods_details/goods_details?id='+id,
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
        event.remove("REFLASH")
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
        this.$getCollectGoods();
    }
})