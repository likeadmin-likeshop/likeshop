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
import { getCommentList, getCommentCategory } from '../../api/store'
import { loadingType } from '../../utils/type'
Page({

    /**
     * 页面的初始数据
     */
    data: {
        status: loadingType.LOADING,
		page: 1,
        type: '',
        commentList: [],
        categoryList: [],
        percent: '',
        isEmpty: true
    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: async function (options) {
        this.id = options.id
        await this.$getCommentCategory()
        this.$getCommentList()
    },
    onChangType(e) {
        let {id} = e.currentTarget.dataset
        let {type} = this.data
        if(id == type ) return
        this.setData({
            type: id,
            page: 1,
            commentList: [],
            status: loadingType.LOADING,
        })
        wx.nextTick(() => this.$getCommentList())
    },
    $getCommentCategory() {
        return new Promise(resolve => {
            getCommentCategory(this.id).then(res => {
                let {code, data: {comment, percent }} = res
                if(code == 1) {
                    this.setData({
                        categoryList: comment,
                        percent: percent,
                        type: comment[0].id
                    })
                    wx.nextTick(() => resolve())
                }
            })
        })
    },
    $getCommentList() {
        let { page, status, commentList, type } = this.data
		if (status == loadingType.FINISHED) return
        getCommentList({
            id: type,
            goods_id: this.id,
            page_no: page
        }).then(res => {
			if (res.code == 1) {
				let { list, more } = res.data
				commentList.push(...list)
				this.setData({
					commentList,
					page: ++page
				})
				wx.nextTick(() => {
					if (!more) {
						this.setData({
							status: loadingType.FINISHED
						})
					}
					if (commentList.length <= 0) {
						this.setData({
							status: loadingType.EMPTY
						})
					}else {
                        this.setData({
                            isEmpty: false
                        })
                    }
				})
			}
		})
    },
    previewImage(e) {
        const {current, uri} = e.currentTarget.dataset
        let urls = uri
        wx.previewImage({
            current, // 当前显示图片的http链接
            urls // 需要预览的图片http链接列表
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