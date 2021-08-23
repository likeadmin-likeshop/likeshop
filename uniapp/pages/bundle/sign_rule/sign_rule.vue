<template>
<!--pages/sign_rule/sign_rule.wxml-->
<view style="padding: 30rpx">
  <text class="nr" style="line-height: 36rpx">{{rule}}</text>
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
import { getSignRule } from "@/api/user.js";

export default {
  data() {
    return {
      rule: ""
    };
  },

  components: {},
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getSignRuleFun();
  },

  
  methods: {
    getSignRuleFun() {
      getSignRule().then(res => {
        if (res.code == 1) {
          this.rule = res.data
        }
      });
    }

  }
};
</script>
<style>
/* pages/sign_rule/sign_rule.wxss */
</style>