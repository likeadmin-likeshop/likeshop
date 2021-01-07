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
import { getCoupon } from '../../api/user'
import { Tips } from '../../utils/util'
Component({
    /**
     * 组件的属性列表
     */
    properties: {
        list: {
            type: Array,
            value: [],
            observer: function (val) {
                let arr = val.map(item => {
                    return 0
                })
                this.setData({
                    showTips: arr
                })
            }
        },
        btnType: {
            // 0 去使用  1已使用 2已过期 3领取
            type: Number
        }
    },

    /**
     * 组件的初始数据
     */
    data: {
        showTips: []
    },

    /**
     * 组件的方法列表
     */
    methods: {
        onHandle(e) {
            this.id = e.currentTarget.dataset.id
            const { btnType } = this.data
            switch (btnType) {
                case 0:
                    wx.switchTab({
                        url: '/pages/index/index',
                      })
                    break;
                case 1:
                    // text = '去使用';
                    break;
                case 2:
                    // text = '已使用';
                    break;
                case 3:
                    this.$getCoupon()
                    break;
            }

        },
        onShowTips(e) {
            const {showTips} = this.data
            const { index } =  e.currentTarget.dataset
            this.setData({
                [`showTips[${index}]`]: showTips[index] ? 0 : 1
            })
        },
        $getCoupon() {
            getCoupon(this.id).then(res => {
                if (res.code == 1) {
                    Tips({ title: res.msg })
                    this.triggerEvent('reflash')
                }
            })
        }
    }
})
