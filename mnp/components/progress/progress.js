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
      multipleSlots: true, // 在组件定义时的选项中启用多slot支持
  },

  properties: {
      progressBarColor: {
          type: String,
          value: '#01B55B'
      },
      progressWidth: {
        type: Number,
        value: 90
      },
      progressHeight: {
        type: Number,
        value: 6
      },
      progressColor: {
        type: String,
        value: '#E5E5E5'
      },
      left: {
        type: Number,
        value: 0
      },
      barWidth: {
        type: Number,
        value: 30
      }
  },

  lifetimes: {
    // 生命周期函数，可以为函数，或一个在methods段中定义的方法名
    attached: function () { 
      this.data.offset = this.data.progressWidth - this.data.barWidth;
      this.setData({offset: this.data.offset})
    },
    detached: function () { },
},

  /**
   * 组件的初始数据
   */
  data: {
      currentSwiper: 0,
      // 剩余滑行距离
      offset: 0,
      barLeft: 0
  },

  observers: {
    'left': function(value) {
      this.setData({barLeft: (value / 100) * this.data.offset});
    }
  },

  /**
   * 组件的方法列表
   */
  methods: {
      swiperChange: function (e) {
          this.setData({
              currentSwiper: e.detail.current
          })
      },
  }
})
