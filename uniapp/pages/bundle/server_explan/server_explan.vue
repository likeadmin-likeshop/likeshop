<template>
<view>
<!--pages/server_explan/server_explan.wxml-->
<view class="main">
  <u-parse :html="article_content" />
</view>

<!--<import src="/wxParse/wxParse.wxml"></import>-->
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
import { getServerProto, getPrivatePolicy, getAfterSaleGuar } from '@/api/app';

export default {
  data() {
    return {
      article_content: ""
    };
  },

  components: {},
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let {
      type
    } = options;
    type = parseInt(type); // 0 ==> 服务协议 1 ==> 隐私政策 2 ==> 售后保障

    uni.setNavigationBarTitle({
      title: type == 0 ? '服务协议' : type == 1 ? '隐私政策' : '售后保障'
    });

    switch (type) {
      case 0:
        this.getServerProtoFun();
        break;

      case 1:
        this.getPrivatePolicyFun();
        break;

      case 2:
        this.getAfterSaleGuarFun();
        break;

      default:
        this.getServerProtoFun();
        break;
    }
  },
  methods: {
    // 服务协议
    getServerProtoFun() {
      getServerProto().then(res => {
        if (res.code == 1) {
          //wxParse.wxParse('content', 'html', res.data, this, 15)
          setTimeout(() => {
            this.article_content = res.data;
          }, 200);
        }
      });
    },

    // 隐私协议
    getPrivatePolicyFun() {
      getPrivatePolicy().then(res => {
        if (res.code == 1) {
          //wxParse.wxParse('content', 'html', res.data, this, 15)
          setTimeout(() => {
            this.article_content = res.data;
          }, 200);
        }
      });
    },

    // 售后保障
    getAfterSaleGuarFun() {
      getAfterSaleGuar().then(res => {
        if (res.code == 1) {
          //wxParse.wxParse('content', 'html', res.data, this, 15)
          setTimeout(() => {
            this.article_content = res.data;
          }, 200);
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/server_explan/server_explan.wxss */

.main {
  padding: 20rpx;
  /* min-height: 100vh; */
}
</style>