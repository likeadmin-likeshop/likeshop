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
import event from './utils/events'
import store from "./store/index";
import { getCartNum } from './api/store'
App({
    onLaunch: function () {
        this.checkUpdate()
        event.on('GET_CART_NUM', () => {this.$getCartNum()})
        this.$getCartNum()
        this.getSystemInfo()
    },
    getSystemInfo() {
        wx.getSystemInfo({
            success: res => {
                let { statusBarHeight, platform } = res
                let navHeight
                if (platform == 'ios' || platform == 'devtools') {
                    navHeight = statusBarHeight + 44
                } else {
                    navHeight = statusBarHeight + 48
                }
                this.globalData.navHeight = navHeight;
                this.globalData.statusBarHeight = statusBarHeight
            },
            fail(err) {
                console.log(err);
            }
        })
    },
    $getCartNum() {
        getCartNum().then(res => {
            if(res.data.num == 0)return wx.removeTabBarBadge({index: 2})
            if(res.code == 1) {
                wx.setTabBarBadge({
                    index: 2,
                    text: String(res.data.num)
                  })
            }
        })
    },
    checkUpdate() {
        const updateManager = wx.getUpdateManager()

        updateManager.onCheckForUpdate(function (res) {
            // 请求完新版本信息的回调
            console.log(res.hasUpdate)
        })

        updateManager.onUpdateReady(function () {
            wx.showModal({
                title: '更新提示',
                content: '新版本已经准备好，是否重启应用？',
                success: function (res) {
                    if (res.confirm) {
                        // 新的版本已经下载好，调用 applyUpdate 应用新版本并重启
                        updateManager.applyUpdate()
                    }
                }
            })
        })

        updateManager.onUpdateFailed(function () {
            // 新版本下载失败
        })

    },
    globalData: {
        navHeight: 0,
        statusBarHeight: 0,
        platform: ''
    },
    store: store,
})