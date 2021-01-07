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
import { getUserInfo, setUserInfo, changeUserMobile } from '../../api/user'
import { Tips } from '../../utils/util';
import { getWxCode } from "../../utils/wxutil"
Date.prototype.format = function (fmt) {
    var o = {
        "M+": this.getMonth() + 1,                 //月份 
        "d+": this.getDate(),                    //日 
        "h+": this.getHours(),                   //小时 
        "m+": this.getMinutes(),                 //分 
        "s+": this.getSeconds(),                 //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
        "S": this.getMilliseconds()             //毫秒 
    };
    if (/(y+)/.test(fmt)) {
        fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    }
    for (var k in o) {
        if (new RegExp("(" + k + ")").test(fmt)) {
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        }
    }
    return fmt;
}

const FieldType = {
    NONE: '',
    SEX: 'sex',
    NICKNAME: 'nickname',
    AVATAR: 'avatar',
    MOBILE: 'mobile'
}

Page({

    /**
     * 页面的初始数据
     */
    data: {
        userDate: "",
        endTime: "",
        userInfo: {},
        sexList: ['男', '女'],
        fieldType: FieldType.NONE,
        newMobile: '',
        myVersion: '',
        code: ''
    },
    // 更换手机
    showPop() {
        this.setData({
            showMobile: true,
        })
    },
    $changeUserMobile(data) {
        changeUserMobile(data).then(res => {
            if (res.code == 1) {
                this.$setUserInfo(res.data.purePhoneNumber)
            }
        })
    },
    // end
    bindSexChange(e) {
        console.log(e.detail)
        this.setData({
            fieldType: FieldType.SEX
        })
        this.$setUserInfo(e.detail.value + 1)
    },

    bindDateChange(e) {
        console.log('picker发送选择改变，携带值为', e.detail.value)
        this.setData({
            userDate: e.detail.value
        })
    },

    $getUserInfo(value) {
        getUserInfo().then(res => {
            if (res.code == 1) {
                this.setData({
                    userInfo: res.data
                })
            }
        })
    },

    getPhoneNumber(e) {
        // code encryptedData iv
        const { code } = this.data;
        const { encryptedData, iv } = e.detail;
        let data = {
            code,
            encrypted_data: encryptedData,
            iv
        }
        this.setData({
            fieldType: FieldType.MOBILE
        })
        if (encryptedData) {
            this.$changeUserMobile(data)
        }
    },

    storageUserInfo(e) {
        // 保存用户设置
        console.log('save click!!!')
    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        var startTime = new Date();
        this.setData({
            endTime: startTime.format('yyyy-MM-dd')
        })
        this.$getUserInfo()
        // wx.getAccountInfoSync({
        //     success: (res) => {
        //         this.setData({
        //             myVersion: res.miniProgram.envVersion
        //         })
        //     }
        // })
        const accountInfo = wx.getAccountInfoSync();
        this.setData({
            myVersion: accountInfo.miniProgram.version
        })
        getWxCode().then(res => {
            this.setData({
                code: res
            })
        });
    },

    $setUserInfo(value) {
        const { fieldType } = this.data;
        console.log(value)
        setUserInfo({
            field: fieldType,
            value: value
        }).then(res => {
            if (res.code == 1) {
                Tips("设置成功")
                this.$getUserInfo()
            }
        })
    },

    /**
     * 生命周期函数--监听页面初次渲染完成
     */
    onReady: function () {

    },

    onClose() {
        this.setData({
            showMobile: false
        })
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