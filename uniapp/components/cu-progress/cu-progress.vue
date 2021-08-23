<template>
<view class="cu-progress" :style="'height: ' + progressHeight + '; width: ' + progressWidth + ';background-color: ' + progressColor">
	<view class="cu-progress-bar" :style="'background-color: ' + progressBarColor + ';left: ' + barLeft + 'rpx; width:' + barWidth + 'rpx'">
  </view>
</view>
</template>

<script>

export default {
  data() {
    return {
      currentSwiper: 0,
      // 剩余滑行距离
      offset: 0,
      barLeft: 0
    };
  },

  components: {},
  props: {
    progressBarColor: {
      type: String,
      default: '#01B55B'
    },
    progressWidth: {
      type: Number,
      default: 90
    },
    progressHeight: {
      type: Number,
      default: 6
    },
    progressColor: {
      type: String,
      default: '#E5E5E5'
    },
    left: {
      type: Number,
      default: 0
    },
    barWidth: {
      type: Number,
      default: 30
    }
  },
  watch: {
    'left': function (value) {
        this.barLeft = value / 100 * this.offset
    }
  },

  beforeMount: function () {
    this.offset = this.progressWidth - this.barWidth
  },
  destroyed: function () {},
  methods: {

  }
};
</script>
<style>
.cu-progress {
  background-color: #E5E5E5;
  height: 6rpx;
  width: 90rpx;
  position: relative;
}

.cu-progress .cu-progress-bar {
  height: 100%;
  width: 30rpx;
  position: absolute;
  left: 0;
}
</style>