<template>
  <div class="user-coupons">
    <el-tabs v-model="active" @tab-click="getMyCoupons">
      <el-tab-pane
        v-for="(item, index) in coupons"
        :label="item.title"
        :key="index"
      >
        <coupons-list
          v-if="item.hasData"
          :list="item.list"
          :type="item.type"
        />
        <null-data
          v-else
          :img="require('~/assets/images/coupon_null.png')"
          text="暂无优惠券~"
        ></null-data>
      </el-tab-pane>
    </el-tabs>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
       link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
    };
  },
  layout: "user_lauout",
  async asyncData({ $get }) {
    let { data } = await $get("coupon/myCoupon", {
      params: { type: 0 },
    });
    return {
      couponsList: data,
    };
  },
  components: {},
  data() {
    return {
      active: 0,
      coupons: [
        {
          title: "可使用",
          type: 0,
          list: [],
          hasData: true
        },
        {
          title: "已使用",
          type: 1,
          list: [],
          hasData: true
        },
        {
          title: "已过期",
          type: 2,
          list: [],
          hasData: true
        },
      ],
    };
  },
  methods: {
    async getMyCoupons() {
      let { data, code } = await this.$get("coupon/myCoupon", {
        params: { type: this.active },
      });
      if (code == 1) {
        this.changeData(data)
      }
    },
    changeData(data) {
      this.coupons.some((item) => {
        if (item.type == this.active) {
          Object.assign(item, { list: data, hasData: data.length });
          return true;
        }
      });
    },
  },
  watch: {
    couponsList: {
      immediate: true,
      handler(val) {
        this.changeData(val)
      },
    },
  },
};
</script>

<style lang="scss">
</style>