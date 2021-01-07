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
import { getAddressLists, delAddress, setDefaultAddress } from '../../api/user'
import { Tips } from '../../utils/util'
import event from '../../utils/events'
Page({

	/**
	 * 页面的初始数据
	 */
	data: {
		addressList: [],
		hasAddress: true,
		deleteSure: false,
		currentId: 0,
	},
	onSelect(e) {
		if(this.type) {
			let { id } = e.currentTarget.dataset
			event.emit('SELECT_ADDRESS', {id})
			wx.navigateBack()
		}
	},
	addAddress() {
		wx.navigateTo({
			url: '/pages/address_edit/address_edit'
		});
	},
	editAddress(e) {
		let { id } = e.currentTarget.dataset
		wx.navigateTo({
			url: `/pages/address_edit/address_edit?id=${id}`
		});
	},
	$getAddressLists() {
		getAddressLists().then(res => {
			if(res.code == 1) {
				if(res.data.length) {
					this.setData({ 
						addressList: res.data,
						hasAddress: true
					})
				}else {
					this.setData({ 
						hasAddress: false
					})
				}
			}
		})
	},
	radioChange(e) {
		let id = e.detail.value
		console.log(e)
		setDefaultAddress(id).then(res => {
			if(res.code == 1) Tips({title: res.msg})
			this.$getAddressLists()
		})
	},
	onLoadFun() {
		this.$getAddressLists()
	},
	$delAddress(e) {
		let self = this;
		// let {id} = e.currentTarget.dataset
		let id = self.data.currentId;
		delAddress(id).then(res => {
			if(res.code == 1 ) {
				Tips({title: res.msg})
				self.setData({deleteSure: false})
				this.$getAddressLists()
			}
		
		})
	},
	getWxAddress() {
		wx.authorize({
			scope: 'scope.address',
			success: function (res) {
				wx.chooseAddress({
					success: function (res) {
						wx.setStorageSync('wxAddress', JSON.stringify(res))
						setTimeout(() => {
							wx.navigateTo({
								url: `/pages/address_edit/address_edit`
							});
						},200)
						
					},
					fail: function (res) {
						if (res.errMsg == 'chooseAddress:cancel') return Tips({ title: '取消选择' });
					},
				})
			},
			fail: function (res) {
				wx.showModal({
					title: '您已拒绝导入微信地址权限',
					content: '是否进入权限管理，调整授权？',
					success(res) {
						if (res.confirm) {
							wx.openSetting({
								success: function (res) {

								}
							});
						} else if (res.cancel) {
							return Tips({ title: '已取消！' });
						}
					}
				})
			},
		})
	},

	showSurePop: function(e) {
		let self = this;
		self.data.deleteSure = true;
		self.data.currentId = e.currentTarget.dataset.id;
		self.setData({deleteSure: true, currentId: e.currentTarget.dataset.id})
	},

	hidePop: function(e) {
		let self = this;
		self.data.deleteSure = false;
		self.setData({deleteSure: self.data.deleteSure})
	},
	/**
	 * 生命周期函数--监听页面加载
	 */
	onLoad: function (options) {
		this.type = options.type
	},

	/**import
	 * 生命周期函数--监听页面初次渲染完成
	 */
	onReady: function () {

	},

	/**
	 * 生命周期函数--监听页面显示
	 */
	onShow: function () {
		this.$getAddressLists()
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
})