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
import { getGoodsSearch, getSearchpage, clearSearch } from '../../api/store'
import { trottle, Tips } from '../../utils/util'
import { loadingType } from '../../utils/type'
import { getRect } from '../../utils/wxutil'
import { patchPage } from 'miniprogrampatch'
Page = patchPage(Page);
const app = getApp();
Page({

	/**
	 * 页面的初始数据
	 */
	data: {
		headerH: 0,
		keyword: '',
		status: loadingType.LOADING,
		page: 1,
		type: '2',
		goodsList: [],
		priceSort: '',
		saleSort: '',
		showHistory: false,
		hotList: [],
		historyList:[]
	},
	onChange(e)  {
		this.setData({
			keyword: e.detail
		})
	},
	changeType() {
		if (this.data.type === '1') {
			this.setData({
				type: '2'
			})
		} else {
			this.setData({
				type: '1'
			})
		}
	},
	$clearSearch() {
		clearSearch().then(res => {
			if(res.code == 1) {
				this.$getSearchpage()
			}
		})
	},
	onNormal() {
		this.setData({
			priceSort: '',
			saleSort: '',
		})
		this.onSearch()
	},
	onPriceSort() {
		let {priceSort} = this.data
		this.setData({
			saleSort: '',
		})
		if (priceSort == 'asc') {
			priceSort = 'desc'
		} else {
			priceSort = 'asc'
		}
		this.setData({
			priceSort
		})
		this.onSearch()
	},
	onSaleSort() {
		let {saleSort} = this.data
		this.setData({
			priceSort: '',
		})
		if (saleSort == 'desc') {
			saleSort = 'asc'
		} else {
			saleSort = 'desc'
		}
		this.setData({
			saleSort
		})
		this.onSearch()
	},
	init(option) {
		let { id, name } = option
		this.type = option.type
		console.log(this.type, option)
		getRect('.header-wrap').then(res => {
			this.setData({
				headerH: res.height
			})
		})
		if (id) {
			wx.setNavigationBarTitle({
				title: name
			})
			this.id = id
			this.$getGoodsSearch()
		} else {
			wx.setNavigationBarTitle({
				title: '搜索'
			})
			this.setData({
				showHistory: true
			})
		}
	},
	$getSearchpage() {
		getSearchpage().then(res => {
			if(res.code == 1) {
				let {history_lists, hot_lists} = res.data
				this.setData({
					hotList: hot_lists,
					historyList: history_lists
				})
			}
		})
	},
	onFocus() {
		this.setData({
			showHistory: true
		})
	},
	onClear() {
		if(this.id) {
			this.onSearch()
		}
	},
	onSearch() {
		this.setData({
			showHistory: false
		})
		this.data.page = 1
		this.setData({
			goodsList: [],
			status: loadingType.LOADING
		})
		wx.nextTick(() => {
			this.$getGoodsSearch()
		})
	},
	onChangeKeyword(e) {
		let {keyword} = e.currentTarget.dataset
		this.setData({
			keyword,
			showHistory: false
		})
		this.onSearch()
	},
	$getGoodsSearch() {
		let { page, goodsList, keyword, priceSort, saleSort, status } = this.data
		if (status == loadingType.FINISHED) return
		getGoodsSearch({
			category_id: this.type == 1 ? this.id : '',
      brand_id: this.type == 0 ? this.id : '',
			page_no: page,
			keyword,
			price: priceSort,
			sales_sum: saleSort
		}).then(res => {
			
			if (res.code == 1) {
				let { list, more } = res.data
				goodsList.push(...list)
				this.setData({
					goodsList,
					page: ++page
				})
				wx.nextTick(() => {
					if (!more) {
						this.setData({
							status: loadingType.FINISHED
						})
					}
					if (goodsList.length <= 0) {
						this.setData({
							status: loadingType.EMPTY
						})
					}
				})
				wx.nextTick(() => {
					wx.stopPullDownRefresh({
						success: (res) => {},
					})
				})
			}
		})
	},
	/**
	 * 生命周期函数--监听页面加载
	 */
	onLoad: function (options) {
		this.onSort = trottle(this.onSort, 500, this)
		this.onNormal = trottle(this.onNormal, 500, this)
		this.onPriceSort = trottle(this.onPriceSort, 500, this)
		this.onSaleSort = trottle(this.onSaleSort, 500, this)
		this.init(options)
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
		this.$getGoodsSearch()
	},

	/**
	 * 用户点击右上角分享
	 */
	onShareAppMessage: function () {

	},
	computed: {
		comprehensive: {
			require: ['priceSort', 'saleSort'],
			fn({ priceSort, saleSort }) {
				if (priceSort == '' && saleSort == '') {
					return true
				}
				return false
			}
		},
		// showDetail: {
		// 	require: ['keyword', 'cateId'],
		// 	fn({ keyword,  cateId}) {
		// 		if (keyword || cateId) {
		// 			return true
		// 		}
		// 		return false
		// 	}
		// }
	},
	watch: {
		// 监听属性
		keyword(value, old) {
			if(!value && !this.id ) {
				this.setData({
					showHistory: true
				})
			}
		},
		showHistory(value) {
			if(value) {
				this.$getSearchpage()
			}
		}
	}
})