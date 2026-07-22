exports.ids = [26,6,12,14,15,16];
exports.modules = {

/***/ 130:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(133);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("03051d40", content, true, context)
};

/***/ }),

/***/ 131:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/priceFormate.vue?vue&type=template&id=4e80ed36&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('span',{class:(_vm.lineThrough ? 'line-through' : '') + 'price-format',style:({ color: _vm.color, 'font-weight': _vm.weight })},[_vm._ssrNode(((_vm.showSubscript)?("<span"+(_vm._ssrStyle(null,{ 'font-size': _vm.subscriptSize + 'px', 'margin-right': '1px' }, null))+">¥</span>"):"<!---->")+" <span"+(_vm._ssrStyle(null,{ 'font-size': _vm.firstSize + 'px', 'margin-right': '1px' }, null))+">"+_vm._ssrEscape(_vm._s(_vm.priceSlice.first))+"</span> "+((_vm.priceSlice.second)?("<span"+(_vm._ssrStyle(null,{ 'font-size': _vm.secondSize + 'px' }, null))+">"+_vm._ssrEscape("."+_vm._s(_vm.priceSlice.second))+"</span>"):"<!---->"))])}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/priceFormate.vue?vue&type=template&id=4e80ed36&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/priceFormate.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var priceFormatevue_type_script_lang_js_ = ({
  data() {
    return {
      priceSlice: {}
    };
  },

  components: {},
  props: {
    firstSize: {
      type: Number,
      default: 14
    },
    secondSize: {
      type: Number,
      default: 14
    },
    color: {
      type: String
    },
    weight: {
      type: [String, Number],
      default: 500
    },
    price: {
      type: [String, Number],
      default: ""
    },
    showSubscript: {
      type: Boolean,
      default: true
    },
    subscriptSize: {
      type: Number,
      default: 14
    },
    lineThrough: {
      type: Boolean,
      default: false
    }
  },

  created() {
    this.priceFormat();
  },

  watch: {
    price(val) {
      this.priceFormat();
    }

  },
  methods: {
    priceFormat() {
      let {
        price
      } = this;
      let priceSlice = {};

      if (price !== null) {
        price = parseFloat(price);
        price = String(price).split(".");
        priceSlice.first = price[0];
        priceSlice.second = price[1];
        this.priceSlice = priceSlice;
      }
    }

  }
});
// CONCATENATED MODULE: ./components/priceFormate.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_priceFormatevue_type_script_lang_js_ = (priceFormatevue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/priceFormate.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(132)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_priceFormatevue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  null,
  "342d9bc8"
  
)

/* harmony default export */ var priceFormate = __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 132:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_3_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_3_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_3_oneOf_1_2_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_priceFormate_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(130);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_3_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_3_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_3_oneOf_1_2_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_priceFormate_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_3_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_3_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_3_oneOf_1_2_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_priceFormate_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_3_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_3_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_3_oneOf_1_2_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_priceFormate_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_3_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_3_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_3_oneOf_1_2_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_priceFormate_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 133:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".price-format{display:flex;align-items:baseline}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 134:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(137);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("7277513c", content, true, context)
};

/***/ }),

/***/ 136:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_nullData_vue_vue_type_style_index_0_id_7fa0e58c_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(134);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_nullData_vue_vue_type_style_index_0_id_7fa0e58c_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_nullData_vue_vue_type_style_index_0_id_7fa0e58c_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_nullData_vue_vue_type_style_index_0_id_7fa0e58c_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_nullData_vue_vue_type_style_index_0_id_7fa0e58c_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 137:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".null-data[data-v-7fa0e58c]{padding:100px}.null-data .img-null[data-v-7fa0e58c]{width:150px;height:150px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

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

/***/ }),

/***/ 139:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/nullData.vue?vue&type=template&id=7fa0e58c&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"bg-white column-center null-data"},[_vm._ssrNode("<img"+(_vm._ssrAttr("src",_vm.img))+" alt class=\"img-null\""+(_vm._ssrStyle(null,_vm.imgStyle, null))+" data-v-7fa0e58c> <div class=\"muted mt8\" data-v-7fa0e58c>"+_vm._ssrEscape(_vm._s(_vm.text))+"</div>")])}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/nullData.vue?vue&type=template&id=7fa0e58c&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/nullData.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
/* harmony default export */ var nullDatavue_type_script_lang_js_ = ({
  components: {},
  props: {
    img: {
      type: String
    },
    text: {
      type: String,
      default: "暂无数据"
    },
    imgStyle: {
      type: String,
      default: ''
    }
  },
  methods: {}
});
// CONCATENATED MODULE: ./components/nullData.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_nullDatavue_type_script_lang_js_ = (nullDatavue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/nullData.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(136)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_nullDatavue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "7fa0e58c",
  "5933b7a8"
  
)

/* harmony default export */ var nullData = __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 157:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/news_null.856b3f3.png";

/***/ }),

/***/ 158:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(175);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("9935c90c", content, true, context)
};

/***/ }),

/***/ 174:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_numberBox_vue_vue_type_style_index_0_id_0f3bdeec_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(158);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_numberBox_vue_vue_type_style_index_0_id_0f3bdeec_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_numberBox_vue_vue_type_style_index_0_id_0f3bdeec_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_numberBox_vue_vue_type_style_index_0_id_0f3bdeec_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_numberBox_vue_vue_type_style_index_0_id_0f3bdeec_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 175:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".number-box[data-v-0f3bdeec]{display:inline-flex;align-items:center}.number-box .number-input[data-v-0f3bdeec]{position:relative;text-align:center;padding:0;margin:0 6px;align-items:center;justify-content:center}.number-box .minus[data-v-0f3bdeec],.number-box .plus[data-v-0f3bdeec]{width:32px;display:flex;justify-content:center;align-items:center;cursor:pointer}.number-box .plus[data-v-0f3bdeec]{border-radius:0 2px 2px 0}.number-box .minus[data-v-0f3bdeec]{border-radius:2px 0 0 2px}.number-box .disabled[data-v-0f3bdeec]{color:#c8c9cc!important;background:#f7f8fa!important}.number-box .input-disabled[data-v-0f3bdeec]{color:#c8c9cc!important;background-color:#f2f3f5!important}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 182:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(201);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("75275508", content, true, context)
};

/***/ }),

/***/ 184:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/public/numberBox.vue?vue&type=template&id=0f3bdeec&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"number-box"},[_vm._ssrNode("<div"+(_vm._ssrClass(null,{ minus: true, disabled: _vm.disabled || _vm.inputVal <= _vm.min }))+(_vm._ssrStyle(null,{
      background: _vm.bgColor,
      height: _vm.inputHeight + 'px',
      color: _vm.color,
    }, null))+" data-v-0f3bdeec><div"+(_vm._ssrStyle(null,{fontSize: _vm.size + 'px'}, null))+" data-v-0f3bdeec>-</div></div> <input"+(_vm._ssrAttr("disabled",_vm.disabledInput || _vm.disabled))+" type=\"text\""+(_vm._ssrAttr("value",(_vm.inputVal)))+(_vm._ssrClass(null,{ 'number-input': true, 'input-disabled': _vm.disabled }))+(_vm._ssrStyle(null,{
      color: _vm.color,
      fontSize: _vm.size + 'px',
      background: _vm.bgColor,
      height: _vm.inputHeight + 'px',
      width: _vm.inputWidth + 'px',
    }, null))+" data-v-0f3bdeec> <div"+(_vm._ssrClass("plus",{ disabled: _vm.disabled || _vm.inputVal >= _vm.max }))+(_vm._ssrStyle(null,{
      background: _vm.bgColor,
      height: _vm.inputHeight + 'px',
      color: _vm.color,
    }, null))+" data-v-0f3bdeec><div"+(_vm._ssrStyle(null,{fontSize: _vm.size + 'px'}, null))+" data-v-0f3bdeec>+</div></div>")])}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/public/numberBox.vue?vue&type=template&id=0f3bdeec&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/public/numberBox.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var numberBoxvue_type_script_lang_js_ = ({
  components: {},
  props: {
    // 预显示的数字
    value: {
      type: Number,
      default: 1
    },
    // 背景颜色
    bgColor: {
      type: String,
      default: " #F2F3F5"
    },
    // 最小值
    min: {
      type: Number,
      default: 0
    },
    // 最大值
    max: {
      type: Number,
      default: 99999
    },
    // 步进值，每次加或减的值
    step: {
      type: Number,
      default: 1
    },
    // 是否禁用加减操作
    disabled: {
      type: Boolean,
      default: false
    },
    // input的字体大小，单位px
    size: {
      type: [Number, String],
      default: 14
    },
    // input宽度，单位px
    inputWidth: {
      type: [Number, String],
      default: 64
    },
    //字体颜色
    color: {
      type: String,
      default: "#333"
    },
    // input高度，单位px
    inputHeight: {
      type: [Number, String],
      default: 32
    },
    // index索引，用于列表中使用，让用户知道是哪个numberbox发生了变化，一般使用for循环出来的index值即可
    index: {
      type: [Number, String],
      default: ""
    },
    // 是否禁用输入框，与disabled作用于输入框时，为OR的关系，即想要禁用输入框，又可以加减的话
    // 设置disabled为false，disabledInput为true即可
    disabledInput: {
      type: Boolean,
      default: false
    },
    // 是否只能输入大于或等于0的整数(正整数)
    positiveInteger: {
      type: Boolean,
      default: true
    },
    asyncChange: {
      type: Boolean,
      default: false
    }
  },
  watch: {
    value(v1, v2) {
      if (!this.changeFromInner) {
        this.inputVal = v1;
        this.$nextTick(function () {
          this.changeFromInner = false;
        });
      }
    },

    inputVal(v1, v2) {
      if (v1 == "") return;
      let value = 0;
      let tmp = /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(v1);
      if (tmp && v1 >= this.min && v1 <= this.max) value = v1;else value = v2;

      if (this.positiveInteger) {
        if (v1 < 0 || String(v1).indexOf(".") !== -1) {
          value = v2;
          this.$nextTick(() => {
            this.inputVal = v2;
          });
        }
      }

      if (this.asyncChange) {
        return;
      } // 发出change事件


      this.handleChange(value, "change");
    }

  },

  data() {
    return {
      inputVal: 1,
      // 输入框中的值，不能直接使用props中的value，因为应该改变props的状态
      timer: null,
      // 用作长按的定时器
      changeFromInner: false,
      // 值发生变化，是来自内部还是外部
      innerChangeTimer: null // 内部定时器

    };
  },

  created() {
    this.inputVal = Number(this.value);
  },

  computed: {},
  methods: {
    btnTouchStart(callback) {
      this[callback]();
    },

    minus() {
      this.computeVal("minus");
    },

    plus() {
      this.computeVal("plus");
    },

    calcPlus(num1, num2) {
      let baseNum, baseNum1, baseNum2;

      try {
        baseNum1 = num1.toString().split(".")[1].length;
      } catch (e) {
        baseNum1 = 0;
      }

      try {
        baseNum2 = num2.toString().split(".")[1].length;
      } catch (e) {
        baseNum2 = 0;
      }

      baseNum = Math.pow(10, Math.max(baseNum1, baseNum2));
      let precision = baseNum1 >= baseNum2 ? baseNum1 : baseNum2;
      return ((num1 * baseNum + num2 * baseNum) / baseNum).toFixed(precision);
    },

    calcMinus(num1, num2) {
      let baseNum, baseNum1, baseNum2;

      try {
        baseNum1 = num1.toString().split(".")[1].length;
      } catch (e) {
        baseNum1 = 0;
      }

      try {
        baseNum2 = num2.toString().split(".")[1].length;
      } catch (e) {
        baseNum2 = 0;
      }

      baseNum = Math.pow(10, Math.max(baseNum1, baseNum2));
      let precision = baseNum1 >= baseNum2 ? baseNum1 : baseNum2;
      return ((num1 * baseNum - num2 * baseNum) / baseNum).toFixed(precision);
    },

    computeVal(type) {
      if (this.disabled) return;
      let value = 0; // 减

      if (type === "minus") {
        value = this.calcMinus(this.inputVal, this.step);
      } else if (type === "plus") {
        value = this.calcPlus(this.inputVal, this.step);
      } // 判断是否小于最小值和大于最大值


      if (value < this.min || value > this.max) {
        return;
      }

      if (this.asyncChange) {
        this.$emit("change", value);
      } else {
        this.inputVal = value;
        this.handleChange(value, type);
      }
    },

    // 处理用户手动输入的情况
    onBlur(event) {
      let val = 0;
      let value = event.target.value;
      console.log(value);

      if (!/(^\d+$)/.test(value)) {
        val = this.min;
      } else {
        val = +value;
      }

      if (val > this.max) {
        val = this.max;
      } else if (val < this.min) {
        val = this.min;
      }

      this.$nextTick(() => {
        this.inputVal = val;
      });
      this.handleChange(val, "blur");
    },

    // 输入框获得焦点事件
    onFocus() {
      this.$emit("focus");
    },

    handleChange(value, type) {
      if (this.disabled) return; // 清除定时器，避免造成混乱

      if (this.innerChangeTimer) {
        clearTimeout(this.innerChangeTimer);
        this.innerChangeTimer = null;
      }

      this.changeFromInner = true;
      this.innerChangeTimer = setTimeout(() => {
        this.changeFromInner = false;
      }, 150);
      this.$emit("input", Number(value));
      this.$emit(type, {
        value: Number(value),
        index: this.index
      });
    }

  }
});
// CONCATENATED MODULE: ./components/public/numberBox.vue?vue&type=script&lang=js&
 /* harmony default export */ var public_numberBoxvue_type_script_lang_js_ = (numberBoxvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/public/numberBox.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(174)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  public_numberBoxvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "0f3bdeec",
  "6f93421a"
  
)

/* harmony default export */ var numberBox = __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 200:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_commentList_vue_vue_type_style_index_0_id_780b4851_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(182);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_commentList_vue_vue_type_style_index_0_id_780b4851_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_commentList_vue_vue_type_style_index_0_id_780b4851_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_commentList_vue_vue_type_style_index_0_id_780b4851_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_commentList_vue_vue_type_style_index_0_id_780b4851_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 201:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".comment-list .comment-con>.item[data-v-780b4851]{padding:20px;border-bottom:1px dashed #e5e5e5;align-items:flex-start}.comment-list .comment-con>.item .avatar img[data-v-780b4851]{border-radius:50%;width:44px;height:44px}.comment-list .comment-con>.item .comment-imglist[data-v-780b4851]{margin-top:10px}.comment-list .comment-con>.item .comment-imglist .item[data-v-780b4851]{width:80px;height:80px;margin-right:6px}.comment-list .comment-con>.item .reply[data-v-780b4851]{background-color:#f2f2f2;align-items:flex-start;padding:10px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 231:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(304);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("6ab4852a", content, true, context)
};

/***/ }),

/***/ 239:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/commentList.vue?vue&type=template&id=780b4851&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"comment-list"},[_vm._ssrNode("<div class=\"comment-con\" data-v-780b4851>","</div>",[(_vm.commentList.length)?[_vm._l((_vm.commentList),function(item,index){return _vm._ssrNode("<div class=\"item row\" data-v-780b4851>","</div>",[_vm._ssrNode("<div class=\"avatar mr8\" data-v-780b4851><img"+(_vm._ssrAttr("src",item.avatar))+" alt data-v-780b4851></div> "),_vm._ssrNode("<div class=\"content flex1\" data-v-780b4851>","</div>",[_vm._ssrNode("<div data-v-780b4851>"+_vm._ssrEscape(_vm._s(item.nickname))+"</div> <div class=\"lighter\" style=\"margin: 5px 0 10px\" data-v-780b4851><span data-v-780b4851>"+_vm._ssrEscape(_vm._s(item.create_time))+"</span> <span data-v-780b4851>|</span> <span data-v-780b4851>"+_vm._ssrEscape("规格："+_vm._s(item.spec_value_str))+"</span></div> <div data-v-780b4851>"+_vm._ssrEscape("\n            "+_vm._s(item.comment)+"\n          ")+"</div> "),_vm._ssrNode("<div class=\"comment-imglist row\" data-v-780b4851>","</div>",_vm._l((item.image),function(img,index){return _vm._ssrNode("<div class=\"item\" data-v-780b4851>","</div>",[_c('el-image',{staticStyle:{"height":"100%","width":"100%"},attrs:{"preview-src-list":item.image,"src":img,"fit":"contain"}})],1)}),0),_vm._ssrNode(" "+((item.reply)?("<div class=\"row reply mt16\" data-v-780b4851><div class=\"primary flexnone\" data-v-780b4851>商家回复：</div> <div class=\"lighter\" data-v-780b4851>"+_vm._ssrEscape("\n              "+_vm._s(item.reply)+"\n            ")+"</div></div>"):"<!---->"))],2)],2)}),_vm._ssrNode(" "),(_vm.count)?_vm._ssrNode("<div class=\"pagination row-center\" style=\"padding: 38px 0\" data-v-780b4851>","</div>",[_c('el-pagination',{attrs:{"background":"","hide-on-single-page":"","layout":"prev, pager, next","total":_vm.count,"prev-text":"上一页","next-text":"下一页","page-size":10},on:{"current-change":_vm.changePage}})],1):_vm._e()]:_c('null-data',{attrs:{"img":__webpack_require__(157),"text":"暂无评价~"}})],2)])}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/commentList.vue?vue&type=template&id=780b4851&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/commentList.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var commentListvue_type_script_lang_js_ = ({
  components: {},
  props: {
    list: {
      type: Array,
      default: () => []
    },
    type: Number,
    goodsId: [String, Number]
  },

  data() {
    return {
      commentList: [],
      count: 0,
      page: 1
    };
  },

  created() {
    this.getCommentList();
  },

  methods: {
    async getCommentList() {
      const {
        data,
        code
      } = await this.$get("goods_comment/lists", {
        params: {
          id: this.type,
          goods_id: this.goodsId,
          page_size: 10,
          page_no: this.page
        }
      });

      if (code == 1) {
        this.commentList = data.list;
        this.count = data.count;
      }
    },

    changePage(current) {
      this.page = current;
      this.getCommentList();
    }

  }
});
// CONCATENATED MODULE: ./components/commentList.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_commentListvue_type_script_lang_js_ = (commentListvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/commentList.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(200)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_commentListvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "780b4851",
  "d0f2d8d4"
  
)

/* harmony default export */ var commentList = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {NullData: __webpack_require__(139).default})


/***/ }),

/***/ 300:
/***/ (function(module, exports) {

module.exports = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAkCAMAAAA5HAOUAAAAQlBMVEUAAAD/IDD/KDj/Kjr/LDz/KTn/Kzv/Kjr/Kzv/LDz/Kzv/Kzv/Kzv/LDz/Kzv/LDz/LDz/Kzv/Kzv/LDz/LDv/LDyPingBAAAAFXRSTlMAECAwQFBfYHCAj5+gr7C/wNDf7/B6g4n4AAAAvUlEQVQ4y8XUyRKDIBAEUBZlUYxs8/+/mmiMWtQwkFzS51cFtF0y9v9w3oE0gG4iCa/Illo3tTaQgT2Gvnl6q0S+YIEjC4EGODPUz4uXiviZQk0JbkmTEkVJao6AJM7qrM4kIJLM1TYV2a+Yp5E/CggUCp9KeK6jfPUmqyzfRzTW1FguFEu5WochR8yBGEafspgyXcr+ph5db/TEh0aU19o3VHb71oXLuNq6D/ocANcBuxcztviHSGu+/Kc9AXSSLqTq6c2LAAAAAElFTkSuQmCC"

/***/ }),

/***/ 301:
/***/ (function(module, exports) {

module.exports = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAkCAMAAAA5HAOUAAAAS1BMVEUAAABQUFBQUFBVVVVUVFRTU1NTU1NVVVVUVFRUVFRUVFRVVVVVVVVUVFRVVVVUVFRUVFRVVVVVVVVVVVVVVVVUVFRUVFRVVVVVVVUmEHPwAAAAGHRSTlMAECAwQFBfYHCAj5CfoK+wv8DP0N/g7/AGrtdjAAABEUlEQVQ4y8WUy5aDIBBEeUQeUVTUwP3/L53FaJIR1MxsxhX2udBdRakQ//9I+QFkwV5CGkBfUSNty3gBOR5SZtz55IlGiIZ0qqBnEEKISH8C3chKCCFU5nbcb9kG8iz1nsrcE/P2NpPuRu1MMt0CEJ8HyAiwdOZpnUsAefA/zNR+yADJbW4/gqvard3wWG9Ck9SxbJXW+4pMhybKibiuZqYjamLeTpCZrg515FcbnfE1yJPfVTXV6FlodoVSqErF1lD29IQyDnFfimUwPqM87b7UlsH2tbn+WBpW1dL0vZGrO6E+qu4SQOrUsSAzAtHaCIymTvUJcvj+hkKG1JdUAGb7yr2doZxLOL8Ltfbul/+0Lw1XEXqaPu71AAAAAElFTkSuQmCC"

/***/ }),

/***/ 302:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/goods_like.9578401.png";

/***/ }),

/***/ 303:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_id_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(231);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_id_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_id_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_id_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_id_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 304:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_GET_URL_IMPORT___ = __webpack_require__(31);
var ___CSS_LOADER_URL_IMPORT_0___ = __webpack_require__(305);
var ___CSS_LOADER_URL_IMPORT_1___ = __webpack_require__(306);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
var ___CSS_LOADER_URL_REPLACEMENT_0___ = ___CSS_LOADER_GET_URL_IMPORT___(___CSS_LOADER_URL_IMPORT_0___);
var ___CSS_LOADER_URL_REPLACEMENT_1___ = ___CSS_LOADER_GET_URL_IMPORT___(___CSS_LOADER_URL_IMPORT_1___);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".goods-details{padding:16px 0 44px}.goods-details .goods-info{align-items:flex-start}.goods-details .goods-info .goods-swiper{width:400px;border-radius:4px}.goods-details .goods-info .goods-swiper .swiper{margin:10px 0;padding:0 25px;--swiper-navigation-size:15px;--swiper-navigation-color:#888}.goods-details .goods-info .goods-swiper .swiper .swiper-button-next,.goods-details .goods-info .goods-swiper .swiper .swiper-button-prev{top:0;width:25px;height:100%;margin-top:0;background-size:12px 22px}.goods-details .goods-info .goods-swiper .swiper .swiper-button-prev{left:0}.goods-details .goods-info .goods-swiper .swiper .swiper-button-next{right:0}.goods-details .goods-info .goods-swiper .swiper .swiper-item{cursor:pointer;height:66px;width:66px;border:2px solid transparent}.goods-details .goods-info .goods-swiper .swiper .swiper-item~.swiper-item{margin-left:10px}.goods-details .goods-info .goods-swiper .swiper .swiper-item.active{border-color:#ff2c3c}.goods-details .goods-info .goods-swiper .current-img{width:100%;height:400px}.goods-details .goods-info .info-wrap{min-height:486px;border-radius:4px;padding:20px}.goods-details .goods-info .info-wrap .name{font-size:20px}.goods-details .goods-info .info-wrap .price-wrap{background:url(" + ___CSS_LOADER_URL_REPLACEMENT_0___ + ") no-repeat;background-size:100%;height:80px;padding:0 50px 0 20px;margin-bottom:26px}.goods-details .goods-info .info-wrap .price-wrap.seckill{background-image:url(" + ___CSS_LOADER_URL_REPLACEMENT_1___ + ")}.goods-details .goods-info .info-wrap .price-wrap.seckill .count-down .item{width:30px;height:30px;background:rgba(0,0,0,.5);text-align:center;line-height:30px;border-radius:4px}.goods-details .goods-info .info-wrap .spec-wrap .spec{align-items:flex-start}.goods-details .goods-info .info-wrap .spec-wrap .spec .spec-name{margin-right:20px;margin-top:6px;flex:none}.goods-details .goods-info .info-wrap .spec-wrap .spec .spec-item{padding:0 20px;line-height:32px;border:1px solid #e5e5e5;border-radius:2px;margin-right:10px;margin-bottom:10px;cursor:pointer}.goods-details .goods-info .info-wrap .spec-wrap .spec .spec-item.active{color:#ff2c3c;background-color:#ffeeef;border-color:currentColor}.goods-details .goods-info .info-wrap .goods-num{margin-bottom:30px}.goods-details .goods-info .info-wrap .goods-num .num{margin-right:20px}.goods-details .goods-info .info-wrap .goods-btns .btn{line-height:42px;border-radius:2px;margin-right:14px;text-align:center;width:120px;border:1px solid #ff2c3c;cursor:pointer}.goods-details .goods-info .info-wrap .goods-btns .btn.addcart{color:#ff2c3c;background-color:#ffeeef;border-color:currentColor}.goods-details .goods-info .info-wrap .goods-btns .btn.collection{width:146px;color:#555;background-color:transparent;border-color:#e5e5e5}.goods-details .goods-info .info-wrap .goods-btns .btn.collection .start-icon{width:18.5px;height:18px}.goods-details .details-wrap{align-items:stretch}.goods-details .details-wrap .details{padding:10px 0;overflow:hidden}.goods-details .details-wrap .details .rich-text{padding:0 10px;width:100%;overflow:hidden}.goods-details .details-wrap .details .rich-text img{width:100%}.goods-details .details-wrap .details .rich-text p{margin:0}.goods-details .details-wrap .details .evaluation .evaluation-hd{background-color:#f2f2f2;height:80px;margin:0 10px}.goods-details .details-wrap .details .evaluation .evaluation-hd .rate{height:60px;width:220px;border-right:1px solid #e5e5e5;padding-left:10px;margin-right:40px}.goods-details .details-wrap .details .evaluation .evaluation-tab{margin:16px 20px}.goods-details .details-wrap .details .evaluation .evaluation-tab .item{border-radius:2px;cursor:pointer;height:32px;padding:6px 20px;color:#555;background-color:#f2f2f2;margin-right:10px}.goods-details .details-wrap .details .evaluation .evaluation-tab .item.active{color:#fff;background-color:#ff2c3c}.goods-details .goods-like{width:264px}.goods-details .goods-like .title{border-bottom:1px solid #e5e5e5}.goods-details .goods-like .title>img{width:100%;height:100%}.goods-details .goods-like .goods-list .item{padding:10px;display:block}.goods-details .goods-like .goods-list .item .goods-img{width:244px;height:244px;margin-bottom:10px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 305:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/bg_price.48336c4.png";

/***/ }),

/***/ 306:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/bg_activity.9a3064a.png";

/***/ }),

/***/ 337:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/goods_details/_id.vue?vue&type=template&id=23cd1176&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return (_vm.goodsDetails.id)?_c('div',{staticClass:"goods-details"},[_vm._ssrNode("<div class=\"goods-info row\">","</div>",[_vm._ssrNode("<div class=\"goods-swiper mr16 bg-white column\">","</div>",[_c('el-image',{staticClass:"current-img",attrs:{"preview-src-list":_vm.goodsImage.map(function (item) { return item.uri; }),"src":_vm.goodsImage[_vm.swiperIndex].uri}}),_vm._ssrNode(" "),_c('client-only',[_c('swiper',{ref:"mySwiper",staticClass:"swiper",attrs:{"options":_vm.swiperOptions}},[_vm._l((_vm.goodsImage),function(item,index){return _c('swiper-slide',{key:index,class:{ 'swiper-item': true, active: index === _vm.swiperIndex }},[_c('div',{staticStyle:{"width":"100%","height":"100%"},on:{"mouseover":function($event){_vm.swiperIndex = index}}},[_c('el-image',{staticStyle:{"width":"100%","height":"100%"},attrs:{"src":item.uri}})],1)])}),_vm._v(" "),_c('div',{staticClass:"swiper-button-prev",attrs:{"slot":"button-prev"},slot:"button-prev"}),_vm._v(" "),_c('div',{staticClass:"swiper-button-next",attrs:{"slot":"button-next"},slot:"button-next"})],2)],1)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"info-wrap bg-white flex1\">","</div>",[_vm._ssrNode("<div class=\"name bold mb16\">"+_vm._ssrEscape("\n        "+_vm._s(_vm.goodsDetails.name)+"\n      ")+"</div> "),(_vm.activity.type == 1)?_vm._ssrNode("<div class=\"price-wrap row-between white seckill\">","</div>",[_vm._ssrNode("<div class=\"price row\" style=\"align-items: baseline\">","</div>",[_vm._ssrNode("<div class=\"mr8\">价格</div> "),_vm._ssrNode("<div>","</div>",[_c('price-formate',{attrs:{"price":_vm.checkedGoods.price || _vm.goodsDetails.price,"subscript-size":16,"first-size":30,"second-size":16}})],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"line-through ml8 row\">","</div>",[_vm._ssrNode("\n            原价\n            "),_c('price-formate',{attrs:{"price":_vm.checkedGoods.market_price || _vm.goodsDetails.market_price}})],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"row\">","</div>",[_vm._ssrNode("<div class=\"white mr16\">距离结束还有</div> "),_c('count-down',{attrs:{"time":_vm.countTime,"is-slot":true},on:{"change":_vm.onChangeDate}},[_c('div',{staticClass:"row-center count-down xxl"},[_c('div',{staticClass:"item white"},[_vm._v(_vm._s(_vm.timeData.hours))]),_vm._v(" "),_c('div',{staticClass:"white",staticStyle:{"margin":"0 4px"}},[_vm._v(":")]),_vm._v(" "),_c('div',{staticClass:"item white"},[_vm._v("\n                "+_vm._s(_vm.timeData.minutes)+"\n              ")]),_vm._v(" "),_c('div',{staticClass:"white",staticStyle:{"margin":"0 4px"}},[_vm._v(":")]),_vm._v(" "),_c('div',{staticClass:"item white"},[_vm._v("\n                "+_vm._s(_vm.timeData.seconds)+"\n              ")])])])],2)],2):_vm._ssrNode("<div class=\"price-wrap row-between lighter\">","</div>",[_vm._ssrNode("<div class=\"price row\" style=\"align-items: baseline\">","</div>",[_vm._ssrNode("<div class=\"mr8\">价格</div> "),_vm._ssrNode("<div class=\"primary\">","</div>",[_c('price-formate',{attrs:{"price":_vm.checkedGoods.price || _vm.goodsDetails.price,"subscript-size":16,"first-size":30,"second-size":16}})],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"line-through ml8 muted\">","</div>",[_c('price-formate',{attrs:{"price":_vm.checkedGoods.market_price || _vm.goodsDetails.market_price}})],1)],2),_vm._ssrNode(" <div class=\"row\">"+((_vm.goodsDetails.stock !== true)?("<div style=\"margin-right: 60px\"><div class=\"mb8\">库存</div> <div>"+_vm._ssrEscape(_vm._s(_vm.checkedGoods.stock || _vm.goodsDetails.stock))+"</div></div>"):"<!---->")+" <div><div class=\"mb8\">销量</div> <div>"+_vm._ssrEscape(_vm._s(_vm.goodsDetails.sales_sum))+"</div></div></div>")],2),_vm._ssrNode(" <div class=\"spec-wrap\">"+(_vm._ssrList((_vm.goodsSpec),function(item,index){return ("<div class=\"spec row mb16\"><div class=\"lighter spec-name\">"+_vm._ssrEscape(_vm._s(item.name))+"</div> <div class=\"spec-list row wrap\">"+(_vm._ssrList((item.spec_value),function(specitem,sindex){return ("<div"+(_vm._ssrClass(null,['spec-item lighter', { active: specitem.checked }]))+">"+_vm._ssrEscape("\n              "+_vm._s(specitem.value)+"\n            ")+"</div>")}))+"</div></div>")}))+"</div> "),_vm._ssrNode("<div class=\"goods-num row\">","</div>",[_vm._ssrNode("<div class=\"num lighter\">数量</div> "),_c('number-box',{attrs:{"min":1,"max":_vm.checkedGoods.stock},model:{value:(_vm.goodsNum),callback:function ($$v) {_vm.goodsNum=$$v},expression:"goodsNum"}})],2),_vm._ssrNode(" <div class=\"goods-btns row lg\"><div class=\"btn bg-primary white\">立即购买</div> "+((_vm.activity.type != 1)?("<div class=\"btn primary addcart\">加入购物车</div>"):"<!---->")+" <div class=\"btn lighter collection row-center\"><img"+(_vm._ssrAttr("src",_vm.goodsDetails.is_collect
                ? __webpack_require__(300)
                : __webpack_require__(301)))+" class=\"start-icon mr8\"> <div>收藏该商品</div></div></div>")],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"details-wrap row mt16\">","</div>",[_vm._ssrNode("<div class=\"details bg-white flex1\">","</div>",[_c('el-tabs',{model:{value:(_vm.active),callback:function ($$v) {_vm.active=$$v},expression:"active"}},[_c('el-tab-pane',{attrs:{"label":"商品详情"}},[_c('div',{staticClass:"rich-text",domProps:{"innerHTML":_vm._s(_vm.goodsDetails.content)}})]),_vm._v(" "),_c('el-tab-pane',{attrs:{"label":"商品评价"}},[_c('div',{staticClass:"evaluation"},[_c('div',{staticClass:"evaluation-hd row"},[_c('div',{staticClass:"rate row"},[_c('div',{staticClass:"lighter mr8"},[_vm._v("好评率")]),_vm._v(" "),_c('div',{staticClass:"primary",staticStyle:{"font-size":"30px"}},[_vm._v("\n                  "+_vm._s(_vm.comment.percent)+"\n                ")])]),_vm._v(" "),_c('div',{staticClass:"score lighter row"},[_c('span',{staticClass:"mr8"},[_vm._v("评分")]),_vm._v(" "),_c('el-rate',{attrs:{"disabled":"","allow-half":""},model:{value:(_vm.comment.avg_score),callback:function ($$v) {_vm.$set(_vm.comment, "avg_score", $$v)},expression:"comment.avg_score"}})],1)]),_vm._v(" "),_c('div',{staticClass:"evaluation-tab row"},_vm._l((_vm.comment.comment),function(item,index){return _c('div',{key:index,class:['item', { active: _vm.commentActive == item.id }],on:{"click":function($event){_vm.commentActive = item.id}}},[_vm._v("\n                "+_vm._s(item.name)+"("+_vm._s(item.count)+")\n              ")])}),0)]),_vm._v(" "),_c('div',[_vm._l((_vm.comment.comment),function(item,index){return [_c('comment-list',{directives:[{name:"show",rawName:"v-show",value:(_vm.commentActive == item.id),expression:"commentActive == item.id"}],key:index,attrs:{"goods-id":_vm.id,"type":item.id}})]})],2)])],1)],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"goods-like ml16\">","</div>",[_vm._ssrNode("<div class=\"title bg-white\"><img"+(_vm._ssrAttr("src",__webpack_require__(302)))+" alt></div> "),_vm._ssrNode("<div class=\"goods-list\">","</div>",[_vm._l((_vm.goodsDetails.like),function(item,index){return [(index < 5)?_c('nuxt-link',{key:index,staticClass:"item bg-white mb16",attrs:{"to":("/goods_details/" + (item.id))}},[_c('el-image',{staticClass:"goods-img",attrs:{"src":item.image}}),_vm._v(" "),_c('div',{staticClass:"goods-name line2"},[_vm._v("\n              "+_vm._s(item.name)+"\n            ")]),_vm._v(" "),_c('div',{staticClass:"price row mt8"},[_c('div',{staticClass:"primary mr8"},[_c('price-formate',{attrs:{"price":item.price,"first-size":16}})],1),_vm._v(" "),_c('div',{staticClass:"muted sm line-through"},[_c('price-formate',{attrs:{"price":item.market_price}})],1)])],1):_vm._e()]})],2)],2)],2)],2):_vm._e()}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/goods_details/_id.vue?vue&type=template&id=23cd1176&

// EXTERNAL MODULE: ./components/public/numberBox.vue + 4 modules
var numberBox = __webpack_require__(184);

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// EXTERNAL MODULE: external "vuex"
var external_vuex_ = __webpack_require__(2);

// EXTERNAL MODULE: ./node_modules/element-ui/lib/element-ui.common.js
var element_ui_common = __webpack_require__(12);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/goods_details/_id.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ var _idvue_type_script_lang_js_ = ({
  head() {
    return {
      title: this.$store.getters.headTitle,
      link: [{
        rel: "icon",
        type: "image/x-icon",
        href: this.$store.getters.favicon
      }]
    };
  },

  components: {
    NumberBox: numberBox["default"],
    CountDown: countDown["default"]
  },

  async asyncData({
    params,
    $get,
    app
  }) {
    const {
      data,
      code,
      msg
    } = await $get("goods/getGoodsDetail", {
      params: {
        id: params.id
      }
    });

    if (code == 0) {
      Object(element_ui_common["Message"])({
        message: msg,
        type: "error"
      });
      setTimeout(() => app.router.back(), 1500);
    }

    return {
      goodsDetails: data,
      goodsImage: data.goods_image,
      activity: data.activity
    };
  },

  data() {
    return {
      goodsDetails: {},
      goodsImage: [],
      activity: {},
      swiperOptions: {
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        preventClicks: true,
        slidesPerView: "auto"
      },
      active: "0",
      commentActive: 0,
      swiperIndex: 0,
      checkedGoods: {},
      comment: {},
      goodsNum: 1,
      goodsSpec: [],
      id: "",
      timeData: {}
    };
  },

  created() {
    this.id = this.$route.params.id;
    this.getComment(this.id);
  },

  methods: { ...Object(external_vuex_["mapActions"])(["getPublicData"]),

    onClickSlide(e) {
      this.swiperIndex = e;
    },

    onChoseSpecItem(id, specid) {
      const {
        goodsSpec
      } = this;
      goodsSpec.forEach(item => {
        if (item.spec_value && item.id == id) {
          item.spec_value.forEach(specitem => {
            specitem.checked = 0;

            if (specitem.id == specid) {
              specitem.checked = 1;
            }
          });
        }
      });
      this.goodsSpec = [...goodsSpec];
    },

    async onAddCart() {
      const {
        goodsNum,
        checkedGoods: {
          id
        }
      } = this;
      const {
        code,
        data,
        msg
      } = await this.$post("/cart/add", {
        item_id: id,
        goods_num: goodsNum
      });

      if (code == 1) {
        this.getPublicData();
        this.$message({
          message: msg,
          type: "success"
        });
      }
    },

    onBuyNow() {
      const {
        goodsNum,
        checkedGoods: {
          id
        }
      } = this;
      const goods = [{
        item_id: id,
        num: goodsNum
      }];
      this.$router.push({
        path: "/confirm_order",
        query: {
          data: encodeURIComponent(JSON.stringify({
            goods
          }))
        }
      });
    },

    async getGoodsDetail() {
      const {
        data,
        code
      } = await this.$get("goods/getGoodsDetail", {
        params: {
          id: this.id
        }
      });

      if (code == 1) {
        this.goodsDetails = data;
      }
    },

    async onCollectionGoods() {
      const {
        goodsDetails: {
          is_collect
        }
      } = this;
      const {
        data,
        code
      } = await this.$post("collect/handleCollectGoods", {
        is_collect: is_collect == 0 ? 1 : 0,
        goods_id: this.id
      });

      if (code == 1) {
        if (is_collect == 0) {
          this.$message({
            message: "收藏成功",
            type: "success"
          });
        } else {
          this.$message({
            message: "取消收藏成功",
            type: "success"
          });
        }

        this.getGoodsDetail();
      }
    },

    async getComment() {
      const {
        data,
        code
      } = await this.$get("/goods_comment/category", {
        params: {
          goods_id: this.id
        }
      });

      if (code == 1) {
        this.comment = data;
        this.commentActive = data.comment[0].id;
      }
    },

    onChangeDate(e) {
      let timeData = {};

      for (let prop in e) {
        if (prop !== 'milliseconds') timeData[prop] = ('0' + e[prop]).slice(-2);
      }

      this.timeData = timeData;
    }

  },
  watch: {
    goodsSpec: {
      immediate: true,

      handler(value) {
        const {
          goods_item
        } = this.goodsDetails;
        let keyArr = [];
        value.forEach(item => {
          if (item.spec_value) {
            item.spec_value.forEach(specitem => {
              if (specitem.checked) {
                keyArr.push(specitem.id);
              }
            });
          }
        });
        if (!keyArr.length) return;
        let key = keyArr.join(",");
        let index = goods_item.findIndex(item => {
          return item.spec_value_ids == key;
        });

        if (index == -1) {
          index = 0;
        }

        this.checkedGoods = goods_item[index];
        console.log(this.checkedGoods);
      }

    },
    goodsDetails: {
      immediate: true,

      handler(value) {
        if (!value.goods_spec) return;
        value.goods_spec.forEach(item => {
          item.spec_value.forEach((specitem, specindex) => {
            if (specindex == 0) {
              specitem.checked = 1;
            } else {
              specitem.checked = 0;
            }
          });
        });
        this.goodsSpec = [...value.goods_spec];
      }

    }
  },
  computed: {
    countTime() {
      const info = this.activity.info;
      return info ? info.end_time - Date.now() / 1000 : 0;
    }

  }
});
// CONCATENATED MODULE: ./pages/goods_details/_id.vue?vue&type=script&lang=js&
 /* harmony default export */ var goods_details_idvue_type_script_lang_js_ = (_idvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/goods_details/_id.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(303)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  goods_details_idvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  null,
  "742b8ff7"
  
)

/* harmony default export */ var _id = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default,CommentList: __webpack_require__(239).default})


/***/ })

};;
//# sourceMappingURL=_id.js.map