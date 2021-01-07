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
import { getUser } from '../../api/user'
import { showLoginDialog } from '../../utils/wxutil'
import event from '../../utils/events'
import { getMenu } from '../../api/app'
const app = getApp()
Page({

	/**
	 * 页面的初始数据
	 */
	data: {
		showNav: false,
		navH: 0,
		navBg: 'transparent',
		navC: '#fff',
		userInfo: {},
		myOptList: []
	},
	goLogin() {
		let { $state } = this.data
		if($state.isLogin) {
			wx.navigateTo({
				url: '/pages/user_profile/user_profile',
			})
			return
		}
		wx.navigateTo({
			url: '/pages/login/login'
		})
	},
	goPage(e) {
		let { url } = e.currentTarget.dataset
		let {  $state } = this.data
		if (!$state.isLogin) {
			showLoginDialog()
			return
		}
		wx.navigateTo({
			url
		})
	},
	navigateTo(e) {
		const {item: {is_tab, link, link_type}} = e.currentTarget.dataset
        let { $state } = this.data
				if(!$state.isLogin) return showLoginDialog()
				console.log(e)
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
	$getUserInfo() {
		getUser().then(res => {
			wx.stopPullDownRefresh({
				success: (res) => {
				
				},
			})
			if(res.code == 1) {
				this.setData({
					userInfo: res.data,
				})
			}else {
				this.setData({
					userInfo: {
						user_money: 0,
						user_integral: 0,
						coupon: 0
					}
				})
			}
		})
	},
	observeHeader() {
		this.observeLine = wx.createIntersectionObserver()
		this.observeLine.relativeToViewport({ top: 0 }).observe('.header-line', (res) => {
			if (res.intersectionRatio == 0) {
				wx.setNavigationBarColor({
					frontColor: "#000000",
					backgroundColor: '#fff'
				})
				this.setData({
					navBg: '#fff',
					navC: '#000'
				})
			} else {
				wx.setNavigationBarColor({
					frontColor: "#ffffff",
					backgroundColor: '#000'
				})
				this.setData({
					navBg: 'transparent',
					navC: '#fff'
				})
			}
		})
	},

	onCopy(e) {
		wx.setClipboardData({
			data: this.data.userInfo.sn
		})
	},

	/**
	 * 生命周期函数--监听页面加载
	 */
	onLoad: function (options) {
		this.setData({
			navH: app.globalData.navHeight,
			statusBarH: app.globalData.statusBarHeight
		})
		this.$getMenu()
		wx.nextTick(() => {
			this.observeHeader()
		});
	},
	$getMenu() {
		getMenu({type: 2}).then((res) => {
			if(res.code == 1) {
				this.setData({
					myOptList: res.data
				})
			}
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
	onShow() {
		event.emit('GET_CART_NUM')
		this.$getUserInfo()
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
		this.observeLine.disconnect()
	},

	/**
	 * 页面相关事件处理函数--监听用户下拉动作
	 */
	onPullDownRefresh: function () {
	
		this.$getUserInfo()
		this.$getMenu()
	},

	/**
	 * 页面上拉触底事件的处理函数
	 */
	onReachBottom: function () {

	},

})