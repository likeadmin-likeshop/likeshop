<template>
<!-- components/my-coupons/my-coupons.wxml -->
<view class="my-coupons">
    <coupon-list v-if="!showNull" :list="couponList" :btnType="type"></coupon-list>
    <view v-else class="column-center" style="padding-top: 200rpx">
        <image class="img-null" src="/static/images/coupon_null.png"></image>
        <text class="muted">暂无优惠券～</text>
    </view>
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
import { getMyCoupon } from '../../api/user';

export default {
  data() {
    return {
      couponList: [],
      showNull: false
    };
  },

  props: {
    type: {
      type: Number,
      default: 0
    }
  },
  beforeMount: function () {
    this.getMyCouponFun();
  },
  methods: {
    getMyCouponFun() {
      const {
        type
      } = this;
      getMyCoupon({
        type
      }).then(res => {
        if (res.code == 1) {
          this.$emit('getnum', {
            detail: res.data.length
          });

          if (res.data.length <= 0) {
              this.showNull = true;
              return;
          }
            this.couponList = res.data;
        }
      });
    }

  }
};
</script>
<style>
/* components/my-coupons/my-coupons.wxss */
.my-coupons {
    min-height: calc(100vh - 80rpx);
}
</style>