exports.ids = [13,8,14,15];
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

/***/ 152:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(167);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("3e5ddd00", content, true, context)
};

/***/ }),

/***/ 166:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_deliverSearch_vue_vue_type_style_index_0_id_c351ad84_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(152);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_deliverSearch_vue_vue_type_style_index_0_id_c351ad84_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_deliverSearch_vue_vue_type_style_index_0_id_c351ad84_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_deliverSearch_vue_vue_type_style_index_0_id_c351ad84_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_deliverSearch_vue_vue_type_style_index_0_id_c351ad84_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 167:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".deliver-search-container .deliver-box .deliver-recode-box[data-v-c351ad84]{padding:10px 20px;background-color:#f2f2f2}.deliver-search-container .deliver-box .deliver-recode-box .recode-img[data-v-c351ad84]{position:relative;width:72px;height:72px}.deliver-search-container .deliver-box .deliver-recode-box .recode-img .float-count[data-v-c351ad84]{position:absolute;bottom:0;height:20px;width:100%;background-color:rgba(0,0,0,.5);color:#fff;font-size:12px}.deliver-search-container .deliver-box .deliver-recode-box .recode-info-container[data-v-c351ad84]{flex:1}.deliver-search-container .deliver-box .deliver-recode-box .recode-info-container .recode-label[data-v-c351ad84]{width:70px}.deliver-search-container .deliver-box .deliver-recode-box .recode-info-container .copy-btn[data-v-c351ad84]{height:20px;min-width:42px;border:1px solid #ff2c3c;font-size:12px;margin-left:8px;border-radius:60px;cursor:pointer}.deliver-search-container .deliver-box .deliver-recode-box .recode-info-container .copy-btn[data-v-c351ad84]:hover{background-color:#fff}.deliver-search-container .deliver-box .deliver-flow-box[data-v-c351ad84]{padding-left:15px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 170:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/deliverSearch.vue?vue&type=template&id=c351ad84&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"deliver-search-container"},[_c('el-dialog',{attrs:{"visible":_vm.showDialog,"width":"920px","title":"物流查询"},on:{"update:visible":function($event){_vm.showDialog=$event}}},[_c('div',{staticClass:"deliver-box"},[_c('div',{staticClass:"deliver-recode-box row"},[_c('div',{staticClass:"recode-img"},[_c('el-image',{staticStyle:{"width":"100%","height":"100%"},attrs:{"fit":"cover","src":_vm.deliverOrder.image}}),_vm._v(" "),_c('div',{staticClass:"float-count row-center"},[_vm._v("共"+_vm._s(_vm.deliverOrder.count)+"件商品")])],1),_vm._v(" "),_c('div',{staticClass:"recode-info-container ml10"},[_c('div',{staticClass:"row"},[_c('div',{staticClass:"recode-label"},[_vm._v("物流状态：")]),_vm._v(" "),_c('div',{staticClass:"primary lg",staticStyle:{"font-weight":"500"}},[_vm._v(_vm._s(_vm.deliverOrder.tips))])]),_vm._v(" "),_c('div',{staticClass:"row",staticStyle:{"margin":"6px 0"}},[_c('div',{staticClass:"recode-label"},[_vm._v("快递公司：")]),_vm._v(" "),_c('div',[_vm._v(_vm._s(_vm.deliverOrder.shipping_name))])]),_vm._v(" "),_c('div',{staticClass:"row"},[_c('div',{staticClass:"recode-label"},[_vm._v("快递单号：")]),_vm._v(" "),_c('div',[_vm._v(_vm._s(_vm.deliverOrder.invoice_no))]),_vm._v(" "),_c('div',{staticClass:"copy-btn primary row-center",on:{"click":_vm.onCopy}},[_vm._v("复制")])])])]),_vm._v(" "),_c('div',{staticClass:"deliver-flow-box mt16"},[_c('el-timeline',[(this.deliverFinish.tips)?_c('el-timeline-item',[_c('div',[_c('div',{staticClass:"row lg"},[_c('div',{staticClass:"mr8",staticStyle:{"font-weight":"500"}},[_vm._v("\n                                    "+_vm._s(this.deliverTake.contacts)+"\n                                ")]),_vm._v(" "),_c('div',{staticStyle:{"font-weight":"500"}},[_vm._v(_vm._s(this.deliverTake.mobile))])]),_vm._v(" "),_c('div',{staticClass:"lighter mt8"},[_vm._v(_vm._s(this.deliverTake.address))])])]):_vm._e(),_vm._v(" "),(this.deliverFinish.tips)?_c('el-timeline-item',{attrs:{"timestamp":this.deliverFinish.time}},[_c('div',{staticClass:"time-line-title"},[_vm._v(_vm._s(this.deliverFinish.title))]),_vm._v(" "),_c('div',[_vm._v(_vm._s(this.deliverFinish.tips))])]):_vm._e(),_vm._v(" "),(this.delivery.traces && this.delivery.traces.length)?_c('el-timeline-item',{attrs:{"timestamp":this.delivery.time}},[_c('div',{staticClass:"time-line-title mb8"},[_vm._v(_vm._s(this.delivery.title))]),_vm._v(" "),_vm._l((this.delivery.traces),function(item,index){return _c('el-timeline-item',{key:index,attrs:{"timestamp":item[0]}},[_c('div',{staticClass:"muted"},[_vm._v(_vm._s(item[1]))])])})],2):_vm._e(),_vm._v(" "),(this.deliverShipment.tips)?_c('el-timeline-item',{attrs:{"timestamp":this.deliverShipment.time}},[_c('div',{staticClass:"time-line-title"},[_vm._v(_vm._s(this.deliverShipment.title))]),_vm._v(" "),_c('div',[_vm._v(_vm._s(this.deliverShipment.tips))])]):_vm._e(),_vm._v(" "),(this.deliverBuy.tips)?_c('el-timeline-item',{attrs:{"timestamp":this.deliverBuy.time}},[_c('div',{staticClass:"time-line-title"},[_vm._v(_vm._s(this.deliverBuy.title))]),_vm._v(" "),_c('div',[_vm._v(_vm._s(this.deliverBuy.tips))])]):_vm._e()],1)],1)])])],1)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/deliverSearch.vue?vue&type=template&id=c351ad84&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/deliverSearch.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var deliverSearchvue_type_script_lang_js_ = ({
  props: {
    value: {
      type: Boolean,
      default: false
    },
    aid: {
      type: Number | String
    }
  },

  data() {
    return {
      showDialog: false,
      deliverBuy: {},
      delivery: {},
      deliverFinish: {},
      deliverOrder: {},
      deliverShipment: {},
      deliverTake: {},
      timeLineArray: []
    };
  },

  watch: {
    value(val) {
      console.log(val, 'val');
      this.showDialog = val;
    },

    showDialog(val) {
      if (val) {
        if (this.aid) {
          this.timeLineArray = [];
          this.getDeliverTraces();
        }
      }

      this.$emit("input", val);
    }

  },
  methods: {
    async getDeliverTraces() {
      let data = {
        id: this.aid
      };
      let res = await this.$get("order/orderTraces", {
        params: data
      });

      if (res.code == 1) {
        let {
          buy,
          delivery,
          finish,
          order,
          shipment,
          take
        } = res.data;
        this.deliverBuy = buy;
        this.delivery = delivery;
        this.deliverFinish = finish;
        this.deliverOrder = order;
        this.deliverShipment = shipment;
        this.deliverTake = take;
        this.timeLineArray.push(this.deliverFinish);
        this.timeLineArray.push(this.delivery);
        this.timeLineArray.push(this.deliverShipment);
        this.timeLineArray.push(this.deliverBuy);
        console.log(this.timeLineArray);
      }
    },

    onCopy() {
      // this.deliverOrder.invoice_no;
      let oInput = document.createElement('input');
      oInput.value = this.deliverOrder.invoice_no;
      document.body.appendChild(oInput);
      oInput.select();
      document.execCommand("Copy");
      this.$message.success("复制成功");
      oInput.remove();
    }

  }
});
// CONCATENATED MODULE: ./components/deliverSearch.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_deliverSearchvue_type_script_lang_js_ = (deliverSearchvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/deliverSearch.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(166)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_deliverSearchvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "c351ad84",
  "534b9234"
  
)

/* harmony default export */ var deliverSearch = __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 180:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(197);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("478847ea", content, true, context)
};

/***/ }),

/***/ 196:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_orderList_vue_vue_type_style_index_0_id_59915681_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(180);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_orderList_vue_vue_type_style_index_0_id_59915681_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_orderList_vue_vue_type_style_index_0_id_59915681_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_orderList_vue_vue_type_style_index_0_id_59915681_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_orderList_vue_vue_type_style_index_0_id_59915681_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 197:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".order-list[data-v-59915681]{padding:0 10px}.order-list .item[data-v-59915681]{margin-bottom:20px}.order-list .item .item-hd[data-v-59915681]{height:40px;border:1px solid #e5e5e5;background:#f2f2f2;padding:0 20px}.order-list .item .item-hd .status[data-v-59915681]{width:100px;text-align:right}.order-list .item .item-con[data-v-59915681]{box-shadow:0 3px 4px rgba(0,0,0,.08);align-items:stretch}.order-list .item .item-con .goods[data-v-59915681]{padding:17px 0;width:560px}.order-list .item .item-con .goods .goods-item[data-v-59915681]{padding:10px 20px}.order-list .item .item-con .goods .goods-item .goods-img[data-v-59915681]{flex:none;margin-right:10px;width:72px;height:72px}.order-list .item .item-con .goods .goods-item .goods-name[data-v-59915681]{width:100%}.order-list .item .item-con .goods .goods-item .goods-name .num[data-v-59915681]{padding:0 42px}.order-list .item .item-con .pay-price[data-v-59915681]{width:200px;border-left:1px solid #e5e5e5;border-right:1px solid #e5e5e5}.order-list .item .item-con .operate[data-v-59915681]{width:185px}.order-list .item .item-con .operate>div[data-v-59915681]{cursor:pointer}.order-list .item .item-con .operate .btn[data-v-59915681]{width:120px;height:32px;border-radius:2px}.order-list .item .item-con .operate .btn.plain[data-v-59915681]{border:1px solid #ff2c3c}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 237:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/orderList.vue?vue&type=template&id=59915681&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"order-list"},[_vm._l((_vm.list),function(item){return _vm._ssrNode("<div class=\"item mb16\" data-v-59915681>","</div>",[_vm._ssrNode("<div class=\"item-hd row\" data-v-59915681><div class=\"flex1 lighter sm\" data-v-59915681>"+_vm._ssrEscape("下单时间："+_vm._s(item.create_time))+"</div> <div class=\"flex1 lighter sm\" data-v-59915681>"+_vm._ssrEscape("订单编号："+_vm._s(item.order_sn))+"</div> <div class=\"flex1 lighter sm\" data-v-59915681>"+_vm._ssrEscape("订单类型："+_vm._s(item.order_type_desc))+"</div> <div"+(_vm._ssrClass(null,['status sm', { primary: item.order_status == 0 }]))+" data-v-59915681>"+_vm._ssrEscape("\n        "+_vm._s(item.order_status_desc)+"\n      ")+"</div></div> "),_vm._ssrNode("<div class=\"item-con row\" data-v-59915681>","</div>",[_vm._ssrNode("<div class=\"goods\" data-v-59915681>","</div>",_vm._l((item.order_goods),function(goods,index){return _c('nuxt-link',{key:index,staticClass:"goods-item row",attrs:{"to":("/goods_details/" + (goods.goods_id))}},[_c('el-image',{staticClass:"goods-img",attrs:{"src":goods.image,"alt":""}}),_vm._v(" "),_c('div',{staticClass:"goods-info flex1"},[_c('div',{staticClass:"goods-name mb8 row-between"},[_c('div',{staticClass:"line1",staticStyle:{"width":"350px"}},[(goods.is_seckill)?_c('el-tag',{attrs:{"size":"mini","effect":"plain"}},[_vm._v("秒杀")]):_vm._e(),_vm._v("\n                  "+_vm._s(goods.goods_name)+"\n              ")],1),_vm._v(" "),_c('div',{staticClass:"num"},[_vm._v("x"+_vm._s(goods.goods_num))])]),_vm._v(" "),_c('div',{staticClass:"sm muted mb8"},[_vm._v(_vm._s(goods.spec_value))]),_vm._v(" "),_c('div',{staticClass:"primary"},[_c('price-formate',{attrs:{"price":goods.goods_price}})],1)])],1)}),1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"pay-price column\" style=\"padding-left: 30px\" data-v-59915681>","</div>",[_vm._ssrNode("<div class=\"muted\" data-v-59915681>"+_vm._ssrEscape("共"+_vm._s(item.goods_count)+"件商品")+"</div> "),_vm._ssrNode("<div class=\"muted mt8 row\" data-v-59915681>","</div>",[_vm._ssrNode("\n          应付金额：\n          "),_vm._ssrNode("<span class=\"primary\" data-v-59915681>","</span>",[_c('price-formate',{attrs:{"price":item.order_amount,"subscript-size":16,"first-size":16,"second-size":16}})],1)],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"operate column-center sm\" data-v-59915681>","</div>",[(item.pay_btn)?_c('nuxt-link',{staticClass:"btn mb16 bg-primary row-center white sm",attrs:{"to":("/payment?id=" + (item.id))}},[_c('span',{staticClass:"mr8"},[_vm._v("去付款")]),_vm._v(" "),(_vm.getCancelTime(item.order_cancel_time) > 0)?_c('count-down',{attrs:{"time":_vm.getCancelTime(item.order_cancel_time),"format":"hh:mm:ss"},on:{"finish":function($event){return _vm.$emit('refresh')}}}):_vm._e()],1):_vm._e(),_vm._ssrNode(" "+((item.take_btn)?("<div class=\"btn mb10 primary row-center sm plain\" data-v-59915681>\n          确认收货\n        </div>"):"<!---->")+" "+((item.delivery_btn)?("<div class=\"mb10 muted row-center sm\" data-v-59915681>\n          物流查询\n        </div>"):"<!---->")+" "+((item.cancel_btn)?("<div class=\"mb10 muted row-center sm\" data-v-59915681>\n          取消订单\n        </div>"):"<!---->")+" "+((item.del_btn)?("<div class=\"mb10 muted row-center sm\" data-v-59915681>\n          删除订单\n        </div>"):"<!---->")+" "),_c('nuxt-link',{staticClass:"lighter",attrs:{"to":("/user/order/detail?id=" + (item.id))}},[_c('span',[_vm._v("查看详情")])])],2)],2)],2)}),_vm._ssrNode(" "),_c('deliver-search',{attrs:{"aid":_vm.aid},model:{value:(_vm.showDeliver),callback:function ($$v) {_vm.showDeliver=$$v},expression:"showDeliver"}})],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/orderList.vue?vue&type=template&id=59915681&scoped=true&

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/orderList.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ var orderListvue_type_script_lang_js_ = ({
  components: {
    CountDown: countDown["default"]
  },
  props: {
    list: {
      type: Array,
      default: () => []
    }
  },

  data() {
    return {
      showDeliver: false,
      aid: -1
    };
  },

  created() {
    console.log(this.list);
  },

  methods: {
    handleOrder(type, id) {
      this.type = type;
      this.orderId = id;
      this.$confirm(this.getTipsText(type), {
        title: "温馨提示",
        center: true,
        confirmButtonText: "确定",
        cancelButtonText: "取消",
        callback: action => {
          if (action == "confirm") {
            this.postOrder();
          }
        }
      });
    },

    async postOrder() {
      const {
        type,
        orderId
      } = this;
      let url = "";

      switch (type) {
        case 0:
          url = "order/cancel";
          break;

        case 1:
          url = "order/del";
          break;

        case 2:
          url = "order/confirm";
          break;
      }

      let {
        code,
        data,
        msg
      } = await this.$post(url, {
        id: orderId
      });

      if (code == 1) {
        this.$message({
          message: msg,
          type: "success"
        });
        this.$emit("refresh");
      }
    },

    getTipsText(type) {
      switch (type) {
        case 0:
          return "确认取消订单吗？";

        case 1:
          return "确认删除订单吗?";

        case 2:
          return "确认收货吗?";
      }
    },

    showDeliverDialog(id) {
      console.log("showDeliverDialog");
      this.aid = id;
      this.showDeliver = true;
    }

  },
  computed: {
    getOrderStatus() {
      return status => {
        let text = "";

        switch (status) {
          case 0:
            text = "待支付";
            break;

          case 1:
            text = "待发货";
            break;

          case 2:
            text = "待收货";
            break;

          case 3:
            text = "已完成";
            break;

          case 4:
            text = "订单已关闭";
            break;
        }

        return text;
      };
    },

    getCancelTime() {
      return time => time - Date.now() / 1000;
    }

  }
});
// CONCATENATED MODULE: ./components/orderList.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_orderListvue_type_script_lang_js_ = (orderListvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/orderList.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(196)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_orderListvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "59915681",
  "4ae951c5"
  
)

/* harmony default export */ var orderList = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default,DeliverSearch: __webpack_require__(170).default})


/***/ })

};;
//# sourceMappingURL=order-list.js.map