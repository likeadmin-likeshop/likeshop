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
import {getAccountLog} from "../../api/user"
import {loadingType} from "../../utils/type"
Page({

    /**
     * 页面的初始数据
     */
    data: {
        active: 0,
        lists: [],
        page: 1,
        loadingStatus: loadingType.LOADING
    },

    onChange(e) {
        this.active = e.detail.index;
        this.setData({
            active: e.detail.index
        })
        this.cleanStatus()
        this.$getAccountLog(e.detail.index);
    },

    cleanStatus() {
        // 清理状态
        this.setData({
            page: 1,
            lists: [],
            loadingStatus: loadingType.LOADING
        })
    },

    $getAccountLog(type) {
        var changeType = 0;
        type == 0 ? changeType = 0 : type == 1 ? changeType = 2 : changeType = 1;
        let {lists, loadingStatus, page }= this.data
        if(loadingStatus == loadingType.FINISHED) return;
        getAccountLog({source: 1, type: changeType, page_no: page}).then(res => {
            if(res.code == 1) {
                let {more, list} = res.data;
                lists.push(...list);
                this.setData({
                    lists: lists,
                    page: ++ page
                })
                if(!more) {
                    this.setData({
                        loadingStatus: loadingType.FINISHED
                    })
                }
                if(lists.length <= 0) {
                    this.setData({
                    loadingStatus: loadingType.EMPTY
                    })
                }
                return;
            } else {
                this.setData({
                    loadingStatus: loadingType.ERROR
                })
            }
        })
    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        this.active = options.type;
        this.setData({
            active: parseInt(options.type)
        })
        this.$getAccountLog(this.active)
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
        this.$getAccountLog(this.active);
    },

    /**
     * 用户点击右上角分享
     */
    onShareAppMessage: function () {

    }
})