<template>
  <div v-if="time >= 0 ">
    <client-only>
      <slot v-if="isSlot"></slot>
      <span v-else>{{ formateTime }}</span>
    </client-only>
  </div>
</template>

<script>
import { parseTimeData, parseFormat } from "~/utils/parseTime";
export default {
  components: {},
  props: {
    isSlot: {
      type: Boolean,
      default: false,
    },
    time: {
      type: Number,
      default: 0,
    },
    format: {
      type: String,
      default: "hh:mm:ss",
    },
    autoStart: {
      type: Boolean,
      default: true,
    },
  },
  watch: {
    time: {
      immediate: true,
      handler(value) {
        if (value) {
          this.reset();
        }
      },
    },
  },
  data() {
    return {
      timeObj: {},
      formateTime: 0,
    };
  },
  created() {},
  computed: {},
  methods: {
    createTimer(fn) {
      return setTimeout(fn, 100);
    },
    isSameSecond(time1, time2) {
      return Math.floor(time1) === Math.floor(time2);
    },
    start() {
      if (this.counting) {
        return;
      }
      this.counting = true;
      this.endTime = Date.now() + this.remain * 1000;
      this.setTimer();
    },
    setTimer() {
      this.tid = this.createTimer(() => {
        let remain = this.getRemain();
        if (!this.isSameSecond(remain, this.remain) || remain === 0) {
          this.setRemain(remain);
        }
        if (this.remain !== 0) {
          this.setTimer();
        }
      });
    },
    getRemain() {
      return Math.max(this.endTime - Date.now(), 0);
    },
    pause() {
      this.counting = false;
      clearTimeout(this.tid);
    },
    reset() {
      this.pause();
      this.remain = this.time;
      this.setRemain(this.remain);
      if (this.autoStart) {
        this.start();
      }
    },
    setRemain(remain) {
      const { format } = this;
      this.remain = remain;
      const timeData = parseTimeData(remain);
      this.formateTime = parseFormat(format, timeData);
      this.$emit('change', timeData);
      if (remain === 0) {
        this.pause();
        this.$emit("finish");
      }
    },
  },
};
</script>

<style lang="scss">
</style>