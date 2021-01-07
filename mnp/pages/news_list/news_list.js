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
import { getCategoryList, getArticleList } from '../../api/store'
import { loadingType } from '../../utils/type'
Page({

    /**
     * 页面的初始数据
     */
    data: {
        active: 0,
        showLoading: true,
        categoryList: [],
        newsList: [],
        page: 1,
        status: loadingType.LOADING,
        bannerList: [],
        type: 0
    },
    changeActive(e) {
        let { name } = e.detail
        this.setData({
            active: name,
            page: 1,
            newsList: [],
            status: loadingType.LOADING,
        })
        setTimeout(() => {
            this.$getArticleList()
        }, 100)

    },
    $getCategoryList() {
        getCategoryList({ type: this.type }).then(res => {
            if(res.code == 1) {
                this.setData({
                    categoryList: res.data,
                })
                this.$getArticleList()
            }
        })
    },
    $getArticleList() {
        let { active, page, newsList, status } = this.data
        if (status == loadingType.FINISHED) return
        getArticleList({
            type: this.type,
            id: active ? active : '',
            page_no: page,
        }).then(res => {
            if(res.code == 1) {
                let { list, more } = res.data
                newsList.push(...list)
                this.setData({
                    newsList,
                    page: ++page,
                    showLoading: false
                })
                wx.nextTick(() => {
                    if (!more) {
                        this.setData({
                            status: loadingType.FINISHED
                        })
                    }
                    if (newsList.length <= 0) {
                        this.setData({
                            status: loadingType.EMPTY
                        })
                        return
                    }
                })
            }
        })
    },
    goPage(e) {
        let { id } = e.currentTarget.dataset
        wx.navigateTo({
            url: `/pages/news_details/news_details?id=${id}&type=${this.type}`
        })
    },
    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        //分类id
        this.id = options.id
        //type存在则为帮助中心
        this.type = options.type || ''
        this.setData({
            type: this.type
        })
        if (this.type) {
            wx.setNavigationBarTitle({
                title: '帮助中心'
            })
        } else {
            wx.setNavigationBarTitle({
                title: '商城资讯'
            })
        }
        this.$getCategoryList()
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
        this.$getArticleList()
    },
    
    onShareAppMessage(res) {
		
	}
})