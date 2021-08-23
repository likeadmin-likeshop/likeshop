<template>
<!-- pages/user_coupon/user_coupon.wxml -->
<view class="user-coupon">
    <tabs :active="active" sticky line-width="40" @change="onChange">
        <tab v-for="(item, index) in coupons" :key="index" :title="item.title + '(' + item.num + ')'">
            <my-coupons :type="item.type" @getnum="onChangeNum($event, index)"></my-coupons>
        </tab>
    </tabs>
</view>
</template>

<script>

export default {
  data() {
    return {
      active: 0,
      coupons: [{
        title: '可使用',
        num: '0',
        type: 0
      }, {
        title: '已使用',
        num: '0',
        type: 1
      }, {
        title: '已过期',
        num: '0',
        type: 2
      }]
    };
  },

  components: {
    
  },
  props: {},

  methods: {
    onChangeNum(e, index) {
      this.coupons[index].num = e.detail
    },
    onChange(e) {
        console.log(e)
    }

  }
};
</script>
<style>
/* pages/user_coupon/user_coupon.wxss */
</style>