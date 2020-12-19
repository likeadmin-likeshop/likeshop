<template>
    <div
        class="progress"
        :style="'height:' + progressHeight + 'PX;width:' + progressWidth + 'PX;background-color:' + progressColor"
    >
        <div
        class="progress-bar"
        :style="'background-color:' + progressBarColor + ';left:' + barLeft + 'px; width:' + barWidth + 'px;'"
        ></div>
    </div>
</template>

<script>
export default {
  name: "ProgressBar",
  props: {
      progressBarColor: {
        type: String,
        default: '#01B55B'
      },
      progressWidth: {
        type: Number,
        default: 45
      },
      progressHeight: {
        type: Number,
        default: 3
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
        default: 15
      }
  },
  data() {
    return {
      barLeft: 0,
      offset: 0,
    };
  },
  watch: {
    left: function(value) {
      if(value > 100) {
        value = 100
      }
      this.barLeft = (value / 100) * this.offset;
    }
  },
  methods: {},
  created() {},
  mounted() {
    this.offset = this.progressWidth - this.barWidth;
  },
};
</script>

<style lang="scss" scoped>
.progress {
  background-color: #E5E5E5;
  height: 3px;
  width: 45PX;
  position: relative;
  .progress-bar {
    height: 100%;
    width: 15PX;
    position: absolute;
    left: 0;
  }
}
</style>