<template>
<view :class="'trigonometry ' + (direction === 'up' ? 'up' : '') + ' ' + (size === 'small' ? 'small' : '')" :style="'color:' + color + ';opacity: ' + opacity"></view>
</template>

<script>

export default {
  data() {
    return {};
  },

  components: {},
  props: {
    color: {
      type: String,
      default: ''
    },
    direction: {
      type: String
    },
    size: {
      type: String
    },
    opacity: {
      type: String,
      default: '0.8'
    }
  },
  methods: {}
};
</script>
<style>
.trigonometry {
  border-color: transparent transparent currentcolor currentcolor;
  border-style: solid;
  border-width: 6rpx;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  opacity: .8;
  margin: -6rpx 10rpx 0;
}

.up {
  margin-top: 6rpx;
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.small {
  border-width: 4rpx;
  margin-top: -4rpx;
}
.small.up {
  margin-top: 4rpx;
}
</style>