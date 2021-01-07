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
import { getCatrgory } from '../../api/store'
import { getRect } from '../../utils/wxutil'
import { navigateTo } from '../../utils/util'
import event from '../../utils/events'
Page({

	/**
	 * 页面的初始数据
	 */
	data: {
		asideScroll: 0,
		navActive: '',
		toView: '',
		height: 0,
		leftTop: [],
		rightTop: [],
		asideHeight: '',
		sortList: [],
	},

	goPage(e) {
		let { url, item: {id, name, type} } = e.currentTarget.dataset
		console.log(e)
		wx.navigateTo({
			url: `${url}?id=${id}&name=${name}&type=${type}`,
		})
	},
	init() {
		getRect('.aside').then(res => {
			this.data.asideHeight = res.height
		})
		getRect('.one-item', 'all').then(res => {
			let leftTop = []
			res.forEach((item) => {
				leftTop.push(item.top)
			})
			this.data.leftTop = leftTop
		})
		getRect('.one-item-wrap', 'all').then(async res => {
			let { asideHeight } = this.data
			let rightTop = []
			let headerInfo = await getRect('.header')
			let headerH = headerInfo.height
			let lastheight = res[res.length - 1].height
			res.forEach((item) => {
				rightTop.push({
					id: item.id,
					top: item.top - headerH
				})
			})
			this.data.rightTop = rightTop
			this.setData({
				navActive: rightTop[0].id,
				height: asideHeight - lastheight > 0 ? asideHeight - lastheight : 0
			})
		})
	},
	changeActive(e) {
		let { id } = e.currentTarget.dataset
		this.setData({
			toView: id,
		});
	},
	onScroll(e) {
		let { asideHeight, asideScroll, leftTop, rightTop } = this.data
		let { scrollTop } = e.detail;
		for (let i = rightTop.length - 1; i >= 0; i--) {
			if (scrollTop + 2 >= rightTop[i].top) {
				asideScroll = parseInt(leftTop[i] / asideHeight) * asideHeight
				this.setData({
					navActive: rightTop[i].id,
					asideScroll
				})
				break;
			}
		}
	},
	$getCatrgory() {
		getCatrgory().then((res) => {
			if(res.code == 1){
				this.setData({
					sortList: res.data
				})
				wx.nextTick(()=>{
					this.init()
				});
			}
		})
	},
	/**
	 * 生命周期函数--监听页面加载
	 */
	onLoad: function (options) {
		this.$getCatrgory()
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
		event.emit('GET_CART_NUM')
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