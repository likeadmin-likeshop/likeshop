<template>
  <div class="float-nav bg-white column-center">
    <div class="nav-list">
      <nuxt-link to="/shop_cart" class="item column-center lighter">
        <el-badge :value="publicData.cart_num" type="primary">
          <span class="iconfont icon-cart-Empty"></span>
        </el-badge>
        <div class="sm">购物车</div>
      </nuxt-link>
      <nuxt-link class="item column-center lighter" to="/user/coupons">
        <el-badge :value="publicData.coupon_num" type="primary">
          <span class="iconfont icon-coupons"></span>
        </el-badge>
        <div class="sm">优惠券</div>
      </nuxt-link>
      <nuxt-link class="item column-center lighter" to="/user/order">
        <span class="iconfont icon-icon_order"></span>
        <div class="sm">订单</div>
      </nuxt-link>
      <nuxt-link class="item column-center lighter" to="/user/collection">
        <span class="iconfont icon-collection"></span>
        <div class="sm">收藏</div>
      </nuxt-link>
      <nuxt-link class="item column-center lighter" to="/help_center">
        <span class="iconfont icon-survey"></span>
        <div class="sm">帮助</div>
      </nuxt-link>
      <div
        class="item column-center lighter"
        v-if="server.way == 4"
        @click="handleService"
      >
        <span class="iconfont icon-service"></span>
        <div class="sm">客服</div>
      </div>
      <el-popover
        placement="left"
        width="165"
        trigger="hover"
        v-if="server.way == 1"
      >
        <div style="text-align: center; margin: 0" class="column-center">
          <img
            style="width: 100px; height: 100px"
            :src="server.qr_code"
            alt=""
          />
          <div class="mt8">{{ server.name }}</div>
          <div class="xxs muted mt8">{{ server.phone }}</div>
          <div class="xxs muted mt8">{{ server.remarks }}</div>
          <!-- <div class="sm mt10">在线时间：{{ server.business_time }}</div> -->
        </div>
        <div class="item column-center lighter" slot="reference">
          <span class="iconfont icon-service"></span>
          <div class="sm">客服</div>
        </div>
      </el-popover>
    </div>
    <div class="back-top">
      <span class="iconfont icon-top" @click="scrollTop"></span>
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  data() {
    return {
      server: {}
    };
  },
  created() {
    this.getService();
  },
  methods: {
    handleService() {
      window.open(this.server.kefu_link, "_blank");
    },
    async getService() {
      const { data, code } = await this.$get("service/lists");
      if (code == 1) {
        this.server = data.pc;
      }
    },
    scrollTop() {
      cancelAnimationFrame(this.timer);
      const self = this;
      this.timer = requestAnimationFrame(function fn() {
        var oTop =
          document.body.scrollTop || document.documentElement.scrollTop;
        if (oTop > 0) {
          scrollTo(0, oTop - 250);
          self.timer = requestAnimationFrame(fn);
        } else {
          cancelAnimationFrame(self.timer);
        }
      });
    }
  },
  computed: {
    ...mapState(["publicData"])
  }
};
</script>

<style lang="scss" scoped>
.float-nav {
  height: 100vh;
  position: fixed;
  right: 0;
  top: 0;
  width: 60px;
  z-index: 999;
  box-shadow: -3px 1px 2px rgba(0, 0, 0, 0.04);
  .nav-list {
    position: absolute;
    bottom: 120px;
    .item {
      padding: 10px 4px;
      text-align: center;
      cursor: pointer;
      &:hover {
        color: $-color-primary;
      }
      .iconfont {
        font-size: 24px;
      }
      ::v-deep .el-badge__content {
        height: 16px;
        line-height: 16px;
        padding: 0 5px;
      }
    }
  }
  .back-top {
    position: absolute;
    bottom: 20px;
    cursor: pointer;
  }
}
</style>
