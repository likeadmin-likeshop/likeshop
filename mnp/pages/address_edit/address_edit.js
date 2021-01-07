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
import { editAddress, getOneAddress, hasRegionCode, addAddress } from '../../api/user'
import { Tips } from '../../utils/util'
Page({

	/**
	 * 页面的初始数据
	 */
	data: {
		addressObj: {
			contact: '',
			telephone: '',
			province: '',
			city: '',
			district: '',
			address: '',
			is_default: 0,
		},
		region: '',
		addressId: '',
	},
	formSubmit(e) {
		let { value } = e.detail;
		let {  addressObj: { province_id, city_id, district_id, is_default, address}, addressId } = this.data
		value.address = address
		if (!value.contact) return Tips({ title: '请填写收货人姓名' });
		if (!value.telephone) return Tips({ title: '请填写手机号码' });
		if (!value.region) return Tips({ title: '请选择省、市、区' });
		if (!value.address) return Tips({ title: '请填写小区、街道、门牌号等信息' });
		value.province_id = parseInt(province_id)
		value.city_id = parseInt(city_id)
		value.district_id = parseInt(district_id)
		value.is_default = is_default
		value.id = addressId
		delete value.region
		if(addressId) {
			editAddress(value).then(res => {
				if (res.code == 1) {
					Tips({ title: res.msg }, { tab: 3, url: 1 });
				}
			}).catch(err => {
				return Tips({ title: err });
			})
		}else {
			addAddress(value).then(res => {
				if (res.code == 1) {
					Tips({ title: res.msg }, { tab: 3, url: 1 });
				}
			}).catch(err => {
				return Tips({ title: err });
			})
		}
		
	},

	regionChange(e) {
		let { code, value } = e.detail
		let region = value.reduce((pre, cur) => {
			return pre + cur + ' '
		}, '')

		this.data.addressObj.province_id = code[0]
		this.data.addressObj.city_id = code[1]
		this.data.addressObj.district_id = code[2]
		this.setData({
			region
		})
	},

	ChangeIsDefault: function (e) {
		if(this.data.addressObj.is_default == 0) {
			this.setData({ 'addressObj.is_default': 1 });
		}
		else {
			this.setData({ 'addressObj.is_default': 0 });
		}
	},

	textareaChange: function (e) {
		this.setData({'addressObj.address': e.detail})
	},
	/**
	 * 生命周期函数--监听页面加载
	 */
	onLoad: function (options) {
		this.setData({
			addressId: parseInt(options.id) 
		})
		if (options.id) {
			wx.setNavigationBarTitle({ title: '编辑地址' })
			this.$getOneAddress()
		} else {
			wx.setNavigationBarTitle({ title: '添加地址' })
			this.$getWxAddress()
		}
	},
	$getOneAddress() {
		getOneAddress(this.data.addressId).then(res => {
			if(res.code == 1) {
				let { city, province, district } = res.data
				this.setData({
					addressObj: res.data,
					region: `${province} ${city} ${district}`
				})
			}
		})
	},
	$getWxAddress() {
		let wxAddress = wx.getStorageSync('wxAddress')
		if (!wxAddress) return
		let { userName: contact,
			telNumber: telephone,
			provinceName: province,
			cityName: city,
			countyName: district,
			detailInfo: address } = JSON.parse(wxAddress)
		hasRegionCode({
			province,
			city,
			district
		}).then(res => {
			if(res.code == 1) {
				if(res.data.province) {
					this.setData({
						region: `${province} ${city} ${district}`,
						'addressObj.contact': contact,
						'addressObj.telephone': telephone,
						'addressObj.address': address,
					})
					this.data.addressObj.province_id = res.data.province
					this.data.addressObj.city_id = res.data.city
					this.data.addressObj.district_id = res.data.district
				}
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
		wx.removeStorageSync('wxAddress')
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