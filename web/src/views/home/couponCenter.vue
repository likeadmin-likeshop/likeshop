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

<template>
  <div class="coupon-center">
    <div class="coupon-list-container" v-show="!isListNull">
      <coupon-list :couponList="couponList" :isCouponCenter="true" @receive="userReceiveCoupon"></coupon-list>
    </div>
    <div class="data-null column-center" v-show="isListNull">
      <img class="img-null" src="@A/images/null_coupon.png" />
      <div class="muted">暂无优惠券可领～</div>
    </div>
  </div>
</template>

<script>
import CouponList from "@C/CouponList";
import { getCouponList } from "@API/store";
import {getCoupon} from '@API/user'
export default {
  name: "couponCenter",
  components: {
    CouponList,
  },
  data() {
    return {
      couponList: [],
      isListNull: false
    };
  },
  methods: {
    $getCoupon(id) {
      getCoupon({id: id}).then(res => {
        if(res.code == 1) {
          this.$toast({message: res.msg})
          this.$getCouponList();
        }
      })
    },
    $getCouponList() {
      getCouponList().then((res) => {
        if (res.code == 1) {
          if(res.data.length <= 0) {
            this.isListNull = true;
          }
          this.couponList = res.data;
        }
      });
    },
    userReceiveCoupon(id) {
      this.$getCoupon(id);
    }
  },
  created() {
    this.$getCouponList();
  }
};
</script>

<style lang="scss" scoped>
.coupon-center {
  .data-null {
    padding-top: 150px;
  }
}
</style>