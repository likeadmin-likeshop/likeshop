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
import { getOrderList, cancelOrder, delOrder, confirmOrder } from '../../api/user'
import { prepay } from '../../api/app'
import { loadingType } from '../../utils/type'
import { Tips } from '../../utils/util'
import event from '../../utils/events'
import { wxpay } from '../../utils/wxutil'
import Toast from '../../components/weapp/toast/toast';
Component({
	/**
	 * 组件的属性列表
	 */
	properties: {
		orderType: {
			type: String
		}
	},

	/**
	 * 组件的初始数据
	 */
	data: {
		page: 1,
		orderList: [],
		status: loadingType.LOADING,
		showCancel: false
	},
	lifetimes: {
		created: function () {
			event.on('RESET_LIST', this.reflesh, this)
		},
		attached: function () {
			this.$getOrderList()
		},
		detached: function () {
			// 在组件实例被从页面节点树移除时执行
			event.remove('RESET_LIST')
		},
	},
	pageLifetimes: {
		// onReachBottom:function () {
		// 	this.$getOrderList()
		// }
	},
	/**
	 * 组件的方法列表
	 */
	methods: {
		reflesh() {
			this.data.page = 1,
			this.data.orderList = [],
			this.data.status = loadingType.LOADING
			this.setData({
				type: 0,
			})
			this.$getOrderList()
		},
		reload() {
			this.setData({
				status: loadingType.LOADING
			})
			this.$getOrderList()
		},
		goPage(e) {
			let { url } = e.currentTarget.dataset
			wx.navigateTo({
				url
			})
		},
		onShowDialog() {
			let { showCancel } = this.data
			this.setData({
				showCancel: !showCancel
			})
		},
		async onConfirm() {
			const { type } = this.data
			let res = null
			switch(type) {
				case 0 : res = await cancelOrder(this.id) 
				break;
				case 1 : res = await delOrder(this.id) 
				break;
				case 2 : res = await confirmOrder(this.id) 
				break;
			}
			if (res.code == 1) {
				this.onShowDialog()
				Tips({ title: res.msg })
				event.emit('RESET_LIST')
			}
		},
		delOrder(e) {
			this.id = e.currentTarget.dataset.id
			this.setData({
				type: 1
			})
			wx.nextTick(() => {
				this.onShowDialog()
			})

		},
		comfirmOrder(e) {
			this.id = e.currentTarget.dataset.id
			this.setData({
				type: 2
			})
			wx.nextTick(() => {
				this.onShowDialog()
			})

		},
		cancelOrder(e) {
			this.id = e.currentTarget.dataset.id
			this.setData({
				type: 0
			})
			wx.nextTick(() => {
				this.onShowDialog()
			})
		},
		payNow(e) {
			this.toast = Toast.loading({
				duration: 0, // 持续展示 toast
				forbidClick: true,
				message: '请稍等...',
			});
			let { id } = e.currentTarget.dataset
			prepay({
				from: 'order',
				order_id: id
			}).then(res => {
				if (res.code == 1) {
					Toast.clear()
					let args = res.data
					wxpay(args).then(()=> {
						Tips({ title: '支付成功' })
						event.emit('RESET_LIST')
					}).catch(() => {
						
					})
				}
			})
		},
		$getOrderList() {
			let { page, orderType, orderList, status } = this.data
			if (status == loadingType.FINISHED) return
			getOrderList({
				type: orderType,
				page_no: page
			}).then(res => {
				if (res.code == 1) {
					let { list, more } = res.data
					orderList.push(...list)
					this.setData({
						orderList,
						page: ++page
					})
					wx.nextTick(() => {
						if (!more) {
							this.setData({
								status: loadingType.FINISHED
							})
						}
						if (orderList.length <= 0) {
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
		}
	}
})
