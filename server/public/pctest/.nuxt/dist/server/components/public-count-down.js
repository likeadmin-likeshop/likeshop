exports.ids = [15];
exports.modules = {

/***/ 138:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/public/countDown.vue?vue&type=template&id=f83039aa&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return (_vm.time >= 0 )?_c('div',[_c('client-only',[(_vm.isSlot)?_vm._t("default"):_c('span',[_vm._v(_vm._s(_vm.formateTime))])],2)],1):_vm._e()}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/public/countDown.vue?vue&type=template&id=f83039aa&

// CONCATENATED MODULE: ./utils/parseTime.js
const SECOND = 1000;
const MINUTE = 60 * SECOND;
const HOUR = 60 * MINUTE;
const DAY = 24 * HOUR;
function parseTimeData(time) {
  const days = Math.floor(time / DAY);
  const hours = sliceTwo(Math.floor(time % DAY / HOUR));
  const minutes = sliceTwo(Math.floor(time % HOUR / MINUTE));
  const seconds = sliceTwo(Math.floor(time % MINUTE / SECOND));
  return {
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds
  };
}

function sliceTwo(str) {
  return (0 + str.toString()).slice(-2);
}

function parseFormat(format, timeData) {
  let days = timeData.days;
  let hours = timeData.hours,
      minutes = timeData.minutes,
      seconds = timeData.seconds;

  if (format.indexOf('dd') !== -1) {
    format = format.replace('dd', days);
  }

  if (format.indexOf('hh') !== -1) {
    format = format.replace('hh', sliceTwo(hours));
  }

  if (format.indexOf('mm') !== -1) {
    format = format.replace('mm', sliceTwo(minutes));
  }

  if (format.indexOf('ss') !== -1) {
    format = format.replace('ss', sliceTwo(seconds));
  }

  return format;
}
// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/public/countDown.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//

/* harmony default export */ var countDownvue_type_script_lang_js_ = ({
  components: {},
  props: {
    isSlot: {
      type: Boolean,
      default: false
    },
    time: {
      type: Number,
      default: 0
    },
    format: {
      type: String,
      default: "hh:mm:ss"
    },
    autoStart: {
      type: Boolean,
      default: true
    }
  },
  watch: {
    time: {
      immediate: true,

      handler(value) {
        if (value) {
          this.reset();
        }
      }

    }
  },

  data() {
    return {
      timeObj: {},
      formateTime: 0
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
      const {
        format
      } = this;
      this.remain = remain;
      const timeData = parseTimeData(remain);
      this.formateTime = parseFormat(format, timeData);
      this.$emit('change', timeData);

      if (remain === 0) {
        this.pause();
        this.$emit("finish");
      }
    }

  }
});
// CONCATENATED MODULE: ./components/public/countDown.vue?vue&type=script&lang=js&
 /* harmony default export */ var public_countDownvue_type_script_lang_js_ = (countDownvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/public/countDown.vue



function injectStyles (context) {
  
  
}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  public_countDownvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  null,
  "57be5ffc"
  
)

/* harmony default export */ var countDown = __webpack_exports__["default"] = (component.exports);

/***/ })

};;
//# sourceMappingURL=public-count-down.js.map