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
  <div class="my-coupon">
    <van-tabs v-model="active" line-width="40px" @change="tabChange">
      <van-tab :title="'可使用(' + myCouponCount[0] + ')'">
        <div class="empty-coupon column-center" v-show="isDataNull">
            <div class="img-null">
              <img src="@A/images/null_coupon.png"/>
            </div>
            <div class="muted sm mt10">暂无可用优惠券～</div>
        </div>
        <div v-show="!isDataNull">
          <coupon-list :couponList="couponList">
          </coupon-list>
        </div>
        <!-- <coupon-list></coupon-list> -->
      </van-tab>
      <van-tab :title="'已使用('+ myCouponCount[1] +')'">
        <div class="empty-coupon column-center" v-show="isDataNull">
            <div class="img-null">
              <img src="@A/images/null_coupon.png"/>
            </div>
            <div class="muted sm mt10">暂无可用优惠券～</div>
        </div>
        <div v-show="!isDataNull">
          <coupon-list :couponList="couponList" :isUse="true">
          </coupon-list>
        </div>
      </van-tab>
      <van-tab :title="'已过期('+ myCouponCount[2] +')'">
        <div class="empty-coupon column-center" v-show="isDataNull">
            <div class="img-null">
              <img src="@A/images/null_coupon.png"/>
            </div>
            <div class="muted sm mt10">暂无可用优惠券～</div>
        </div>
        <div v-show="!isDataNull">
          <coupon-list :couponList="couponList" :isExpired="true">
          </coupon-list>
        </div>
      </van-tab>
    </van-tabs>
  </div>
</template>

<script>
import CouponList from "@C/CouponList"
import {getMyCoupon} from "@API/user"
export default {
  name: "userCoupon",
  components: {
    CouponList
  },
  data() {
    return {
      active: 0,
      myCouponCount: [0, 0, 0],
      isDataNull: false,
      couponList: [],
    };
  },
  methods: {
    $getMyCoupon() {
      getMyCoupon({type: this.active}).then(res => {
        if(res.code == 1) {
          this.myCouponCount[this.active] = res.data.length;
          this.couponList = res.data;
          if(this.couponList <= 0) {
            this.isDataNull = true;
          }
        }
      })
    },
    tabChange(name, title) {
      this.couponList = [];
      this.isDataNull = false;
      this.$getMyCoupon()
    }
  },
  created() {
    this.$getMyCoupon()
  },
  mounted() {}
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
  height: 100%;
}
.my-coupon {
  & .empty-coupon {
    height: calc(100vh - 96px);
    & .img-null {
      flex: none;
      width: 150px;
      height: 150px;
    }
  }
}
</style>