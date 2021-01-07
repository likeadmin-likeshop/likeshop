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
    properties: {
        list: {
            type: Array,
            value: [],
            observer: function (val) {
                this.setData({
                    coupons: val
                })
            }
        },
        type: {
            type: Number
        }
    },

    /**
     * 组件的初始数据
     */
    data: {
        coupons: []
    },

    /**
     * 组件的方法列表
     */
    methods: {
        onSelect(e) {
            const { coupons, type } = this.data
            if(type == 1) return
            const { index } = e.currentTarget.dataset
            coupons.forEach((item, i) => {
                if(i != index) {
                    item.checked = 0
                }
            })
            coupons[index].checked = coupons[index].checked ? 0 : 1
            this.triggerEvent('select', coupons[index].checked ? coupons[index].id : '' )
            this.setData({
                coupons
            })
            
        },

    }
})
