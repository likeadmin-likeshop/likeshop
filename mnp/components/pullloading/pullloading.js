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
Component({
	/**
	 * 组件的属性列表
	 */
    options: {
        multipleSlots: true // 在组件定义时的选项中启用多slot支持
    },
    properties: {
        height: {
            type: String,
            value: '100vh'
        },
        status: {
            type: String,
            value: 'loading'
        },
        finishedText: {
            type: String,
            value: '我可是有底线的～'
        },
        errorText: {
            type: String,
            value: '加载失败，点击重新加载'
        },
        slotFooter: {
            type: Boolean,
            value: false
        }
    },
	/**
	 * 组件的初始数据
	 */
    data: {
        
    },
    lifetimes: {
        ready: function () {
            // this.getScroolHeight()
        }
    },
	/**
	 * 组件的方法列表
	 */
    methods: {
        toLower() {
            if (this.data.status === 'loading') {
                this.triggerEvent('scrolltobottom')
            }
        },
        // getConHeight() {
        //     this.createSelectorQuery().select('.content').boundingClientRect((rect) => {
        //         if (rect && this.scroolHeight  >= rect.height) {
        //             this.toLower()
        //         }
        //     }).exec()
        // },
        // getScroolHeight() {
        //     this.createSelectorQuery().select('.scroll-wrap').boundingClientRect((rect) => {
        //         this.scroolHeight = rect && rect.height
        //     }).exec()
        // }
    },
    observers: {
        'status': function (val) {
            // wx.nextTick(() => {
            //     this.getConHeight()
            // })
        }
    }
})
