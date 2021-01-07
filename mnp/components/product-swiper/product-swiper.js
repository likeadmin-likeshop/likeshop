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
var app = getApp();
Component({
    properties: {
        imgUrls: {
            type: Object,
            value: [],
            observer: function (val) {
                let urls = val.map(item => {
                    return item.uri
                })
                this.setData({
                    urls
                })
            }
        }
    },
    data: {
        circular: true,
        autoplay: true,
        interval: 3000,
        duration: 500,
        currentSwiper: 0,
        urls:[]
    },
    attached: function () {
        
    },
    methods: {
        swiperChange: function (e) {
            this.setData({
                currentSwiper: e.detail.current
            })
        },
        previewImage(e) {
            const {current} = e.currentTarget.dataset
            wx.previewImage({
                current, // 当前显示图片的http链接
                urls: this.data.urls // 需要预览的图片http链接列表
              })
        }
    }
})