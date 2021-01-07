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
import {rechargeTemplate, recharge, getUser} from '../../api/user'
import { prepay } from '../../api/app'
import {wxpay} from '../../utils/wxutil'
import Toast from '../../components/weapp/toast/toast';
Page({

    /**
     * 页面的初始数据
     */
    data: {
        navRecharge: ['账户充值', '佣金转入'],
        active: 0,
        number: '',
        placeholder: "0.00",
        rechargeObj: [],
        showPopup: false,
        rechargeInfo: {},
        userInfo: {}
    },
    onShowPopup() {
        this.setData({ showPopup: !this.data.showPopup })
    },
    setPlaceholderStatus: function (event) {
        if (event.detail.value.length == 0) this.setData({ placeholder: '0.00' });
    },
    setPlaceholder: function () {
        this.setData({ placeholder: '' })
    },
    changeActive(e) {
        this.setData({
            active: e.currentTarget.dataset.id
        })
    },
    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        this.$rechargeTemplate();
        this.$getUserInfo()
    },
	$getUserInfo() {
		getUser().then(res => {
			if(res.code == 1) {
				this.setData({
					userInfo: res.data
				})
			}
		})
	},
    $rechargeTemplate() {
        rechargeTemplate().then(res => {
            if(res.code == 1) {
                this.setData({
                    rechargeObj: res.data
                })
            }
        })
    },
    rechargeRights() {
        const {number} = this.data
        this.$recharge({money: Number(number)})
    },
    temRecharge(e) {
        let { id} = e.currentTarget.dataset
        this.$recharge({id})
    },
    $recharge(obj) {
            this.toast = Toast.loading({
            duration: 0, // 持续展示 toast
            forbidClick: true,
            message: '请稍等...',
          });
          obj = Object.assign(obj, {pay_way: 1})
        recharge(obj).then((res) => {
            if(res.code == 1) {
                let {id} = res.data
                this.setData({
                    rechargeInfo: res.data
                })
                return prepay({
                    from: 'recharge',
                    order_id: id
                })
            }else {
                Toast.clear()
                return false
            }
        }).then(res => {
            Toast.clear()
            if (res.code == 1) {
                let args = res.data
                wxpay(args).then(()=> {
                   this.onShowPopup()
                   this.$getUserInfo()
                }).catch(() => {
                    
                })
            } 
        })
    },
    checkInputText: function (text) {
        var reg = /^(\.*)(\d+)(\.?)(\d{0,2}).*$/g;
         if (reg.test(text)) { //正则匹配通过，提取有效文本
          text = text.replace(reg, '$2$3$4');
        } else { //正则匹配不通过，直接清空
          text = '';
        } 
        return text; //返回符合要求的文本（为数字且最多有带2位小数）
      },
    onInput(e) {
        let number = e.detail.value
        number = this.checkInputText(number)
        this.setData({
            number
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