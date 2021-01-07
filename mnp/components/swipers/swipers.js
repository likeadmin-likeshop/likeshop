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
import {getAdList} from '../../api/store'
var app = getApp();
Component({
  properties: {
    pid: {
      type: Number
    },
    height: {
      type: String,
    },
    radius: {
      type: String,
      default: '10rpx'
    },
    padding: {
      type: String,
      default: '0rpx'
    }
  },
  data: {
    lists: [],
    circular: true,
    autoplay: true,
    interval: 3000,
    duration: 500,
    currentSwiper: 0
  },
  observers: {
    'pid': function(value) {
      this.$getAdList()
    }
  },
  methods: {
    $getAdList() {
      getAdList({pid: this.properties.pid}).then(res => {
        if(res.code == 1) {
          this.setData({
            lists: res.data
          })
        }
      })
    },
    swiperChange: function (e) {
      this.setData({
        currentSwiper: e.detail.current
      })
    },
    goPage: function(e) {
      let {item} = e.currentTarget.dataset;
      let {link, link_type, params, is_tab} = item;
      let args = "?"
      if(params instanceof Array) {
        // 若判断为数组
        console.log(params, "$$$")
      }
      else if(params instanceof Object) {
        // 非数组，但为对象
        console.log(params, '###')
        Object.keys(params).forEach((keys) => {
          args += keys + '=' + params[keys] + '&'
        })
      }
      console.log(link)
      switch (link_type) {
        case 1: 
        case 2:
          if(is_tab) {
            wx.switchTab({
              url: link + args,
            })
          }
          else {
            wx.navigateTo({
              url: link + args,
            })
          }
          break;
        case 3:
            wx.navigateTo({
              url: '/pages/webview/webview?url=' + link,
            })
            break;
      }
    }
  }
})