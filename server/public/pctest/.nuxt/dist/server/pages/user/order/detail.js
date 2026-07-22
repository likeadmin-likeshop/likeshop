exports.ids = [45,8,14,15];
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

/***/ 135:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "d", function() { return trottle; });
/* unused harmony export strToParams */
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "c", function() { return paramsToStr; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return copyClipboard; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return importCDN; });
//节流
const trottle = (func, time = 1000, context) => {
  let previous = new Date(0).getTime();
  return function (...args) {
    let now = new Date().getTime();

    if (now - previous > time) {
      func.apply(context, args);
      previous = now;
    }
  };
}; //获取url后的参数  以对象返回

function strToParams(str) {
  var newparams = {};

  for (let item of str.split('&')) {
    newparams[item.split('=')[0]] = item.split('=')[1];
  }

  return newparams;
} //对象参数转为以？&拼接的字符

function paramsToStr(params) {
  let p = '';

  if (typeof params == 'object') {
    p = '?';

    for (let props in params) {
      p += `${props}=${params[props]}&`;
    }

    p = p.slice(0, -1);
  }

  return p;
}
/**
 * @description 复制到剪切板
 * @param value { String } 复制内容
 * @return { Promise } resolve | reject
 */

const copyClipboard = value => {
  const elInput = document.createElement('input');
  elInput.setAttribute('value', value);
  document.body.appendChild(elInput);
  elInput.select();

  try {
    if (document.execCommand('copy')) return Promise.resolve();else throw new Error();
  } catch (err) {
    return Promise.reject(err);
  } finally {
    document.body.removeChild(elInput);
  }
};
/**
 * 导入第三方CDN
 * 缺陷：由于没有做调用栈，目前仅支持调用一次，多次调用将会产生异步不确定性。
 * 改良：改造成调用栈的方式
 * @param uri { String } CDN链接
 * @return { Promise }
 */

const importCDN = uri => {
  return new Promise((resolve, reject) => {
    /* 如果已经存在则直接退出 */
    const hasScriptEl = document.getElementById(uri);
    if (hasScriptEl) return resolve(hasScriptEl);

    try {
      const scriptEl = document.createElement('script');
      scriptEl.setAttribute('id', uri);
      scriptEl.setAttribute('src', uri);
      document.body.append(scriptEl);
      const handler = 'onload' in scriptEl ? stdOnEnd : ieOnEnd;
      handler(scriptEl).then(() => resolve(scriptEl)).catch(() => reject());
    } catch (err) {
      reject(err);
    }

    function stdOnEnd(scriptEl) {
      return new Promise((resolve, reject) => {
        scriptEl.onload = function () {
          this.onerror = this.onload = null;
          resolve(scriptEl);
        };

        scriptEl.onerror = function () {
          this.onerror = this.onload = null;
          reject();
        };
      });
    }

    function ieOnEnd(scriptEl) {
      return new Promise((resolve, reject) => {
        scriptEl.onreadystatechange = function () {
          if (this.readyState === 'loaded' || this.readyState === 'complete') {
            this.onreadystatechange = null;
            resolve(scriptEl);
          }
        };
      });
    }
  });
};

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

/***/ 230:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(299);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("45101cda", content, true, context)
};

/***/ }),

/***/ 298:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_style_index_0_id_55e5c831_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(230);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_style_index_0_id_55e5c831_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_style_index_0_id_55e5c831_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_style_index_0_id_55e5c831_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_style_index_0_id_55e5c831_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 299:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".order-detail[data-v-55e5c831]{padding:20px 10px}.order-detail .detail-hd[data-v-55e5c831]{padding:14px 5px;border-bottom:1px solid #e5e5e5}.order-detail .address[data-v-55e5c831]{padding:16px 15px}.order-detail .address>div[data-v-55e5c831]{margin-bottom:10px}.order-detail .address-item[data-v-55e5c831]{display:flex}.order-detail .address-item-label[data-v-55e5c831]{width:70px;text-align:justify;-moz-text-align-last:justify;text-align-last:justify}.order-detail .detail-con .title[data-v-55e5c831]{height:40px;background:#f2f2f2;border:1px solid #e5e5e5;padding:0 20px}.order-detail .detail-con .goods .goods-hd[data-v-55e5c831],.order-detail .detail-con .goods .goods-list[data-v-55e5c831]{padding:10px 20px;border:1px solid #e5e5e5;border-top:0 solid #e5e5e5}.order-detail .detail-con .goods .goods-hd .goods-item[data-v-55e5c831],.order-detail .detail-con .goods .goods-list .goods-item[data-v-55e5c831]{padding:10px 0}.order-detail .detail-con .goods .goods-hd .goods-item .goods-name[data-v-55e5c831],.order-detail .detail-con .goods .goods-list .goods-item .goods-name[data-v-55e5c831]{line-height:1.5}.order-detail .detail-con .goods .info .goods-img[data-v-55e5c831]{width:72px;height:72px;margin-right:10px}.order-detail .detail-con .goods .num[data-v-55e5c831],.order-detail .detail-con .goods .price[data-v-55e5c831],.order-detail .detail-con .goods .total[data-v-55e5c831]{width:150px}.order-detail .detail-footer[data-v-55e5c831]{padding:25px 20px;justify-content:flex-end}.order-detail .detail-footer .money>div[data-v-55e5c831]{text-align:right}.order-detail .detail-footer .money>div[data-v-55e5c831]:first-of-type{width:80px}.order-detail .detail-footer .money>div[data-v-55e5c831]:last-of-type{width:120px;display:flex;justify-content:flex-end}.order-detail .detail-footer .oprate-btn .btn[data-v-55e5c831]{width:152px;height:44px;cursor:pointer;border-radius:2px}.order-detail .detail-footer .oprate-btn .btn.plain[data-v-55e5c831]{border:1px solid #e5e5e5}.order-detail .selffetc-code[data-v-55e5c831]{display:inline-block;padding:4px 15px;border-radius:60px;font-size:12px;background-color:#f6f6f6;color:#222}.order-detail .qr-container[data-v-55e5c831]{width:120px;height:120px;padding:6px;border:1px solid #e5e5e5;border-radius:6px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 336:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/user/order/detail.vue?vue&type=template&id=55e5c831&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"order-detail"},[_vm._ssrNode("<div class=\"detail-hd row-between\" data-v-55e5c831><div class=\"lg\" data-v-55e5c831>订单状态</div> <div"+(_vm._ssrClass(null,['status lg', { primary: _vm.orderDetail.order_status == 0 }]))+" data-v-55e5c831>"+_vm._ssrEscape("\n            "+_vm._s(_vm.orderDetail.order_status_desc)+"\n        ")+"</div></div> <div class=\"address\" data-v-55e5c831><div class=\"address-item\" data-v-55e5c831><div class=\"lighter address-item-label\" data-v-55e5c831>收件人：</div> <div data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.consignee))+"</div></div> <div class=\"address-item\" data-v-55e5c831><div class=\"lighter address-item-label\" data-v-55e5c831>联系方式：</div> <div data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.mobile))+"</div></div> "+((_vm.orderDetail.delivery_type === 1)?("<div class=\"address-item\" data-v-55e5c831><div class=\"lighter address-item-label\" data-v-55e5c831>收货地址：</div> <div data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.delivery_address))+"</div></div>"):"<!---->")+" "+((_vm.orderDetail.delivery_type === 2)?("<div class=\"address-item\" data-v-55e5c831><div class=\"lighter address-item-label\" data-v-55e5c831>门店地址：</div> <div data-v-55e5c831><div class=\"bold black\" data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.selffetch_shop.name))+"</div> <div class=\"lighter mt8\" data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.selffetch_shop.shop_address))+"</div> <div class=\"row\" data-v-55e5c831><div class=\"column-center mt10\" data-v-55e5c831><div class=\"qr-container\" data-v-55e5c831></div> <div class=\"selffetc-code mt10\" data-v-55e5c831><span data-v-55e5c831>提货码:</span> <span data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.pickup_code))+"</span> <span class=\"primary ml8 pointer\" data-v-55e5c831>复制</span></div></div></div></div></div>"):"<!---->")+"</div> "),_vm._ssrNode("<div class=\"detail-con\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"title row\" data-v-55e5c831><div class=\"flex1\" data-v-55e5c831>"+_vm._ssrEscape("\n                下单时间："+_vm._s(_vm.orderDetail.create_time)+"\n            ")+"</div> <div class=\"flex1\" data-v-55e5c831>"+_vm._ssrEscape("订单编号："+_vm._s(_vm.orderDetail.order_sn))+"</div> <div class=\"flex1\" data-v-55e5c831>"+_vm._ssrEscape("订单类型："+_vm._s(_vm.orderDetail.order_type_desc))+"</div></div> "),_vm._ssrNode("<div class=\"goods\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"goods-hd lighter row\" data-v-55e5c831><div class=\"info row flex1\" data-v-55e5c831>商品信息</div> <div class=\"price row-center\" data-v-55e5c831>单价</div> <div class=\"num row-center\" data-v-55e5c831>数量</div> <div class=\"total row-center\" data-v-55e5c831>合计</div></div> "),_vm._ssrNode("<div class=\"goods-list\" data-v-55e5c831>","</div>",_vm._l((_vm.orderDetail.order_goods),function(item,index){return _vm._ssrNode("<div class=\"goods-item row\" data-v-55e5c831>","</div>",[_c('nuxt-link',{staticClass:"info row flex1",attrs:{"to":("/goods_details/" + (item.goods_id))}},[_c('el-image',{staticClass:"goods-img",attrs:{"src":item.image,"alt":""}}),_vm._v(" "),_c('div',{staticClass:"goods-info flex1"},[_c('div',{staticClass:"goods-name line2"},[(item.is_seckill)?_c('el-tag',{attrs:{"size":"mini","effect":"plain"}},[_vm._v("秒杀")]):_vm._e(),_vm._v("\n                                "+_vm._s(item.goods_name)+"\n                            ")],1),_vm._v(" "),_c('div',{staticClass:"sm lighter mt8"},[_vm._v(_vm._s(item.spec_value))])])],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"price row-center\" data-v-55e5c831>","</div>",[_c('price-formate',{attrs:{"price":item.goods_price}})],1),_vm._ssrNode(" <div class=\"num row-center\" data-v-55e5c831>"+_vm._ssrEscape(_vm._s(item.goods_num))+"</div> "),_vm._ssrNode("<div class=\"total row-center\" data-v-55e5c831>","</div>",[_c('price-formate',{attrs:{"price":item.total_price}})],1)],2)}),0)],2),_vm._ssrNode(" "+((_vm.orderDetail.user_remark)?("<div class=\"mt16\" data-v-55e5c831><span class=\"lighter mr8\" data-v-55e5c831>买家留言：</span> <span data-v-55e5c831>"+_vm._ssrEscape(_vm._s(_vm.orderDetail.user_remark))+"</span></div>"):"<!---->"))],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"detail-footer row\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"column\" style=\"align-items: flex-end\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"money row mb8\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"lighter\" data-v-55e5c831>商品总价：</div> "),_vm._ssrNode("<div data-v-55e5c831>","</div>",[_c('price-formate',{attrs:{"price":_vm.orderDetail.goods_price}})],1)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"money row mb8\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"lighter\" data-v-55e5c831>运费：</div> "),_vm._ssrNode("<div data-v-55e5c831>","</div>",[_c('price-formate',{attrs:{"price":_vm.orderDetail.shipping_price}})],1)],2),_vm._ssrNode(" "),(_vm.orderDetail.discount_amount != 0)?_vm._ssrNode("<div class=\"money row mb16\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"lighter\" data-v-55e5c831>优惠券：</div> "),_vm._ssrNode("<div data-v-55e5c831>","</div>",[_vm._ssrNode("\n                        -\n                        "),_c('price-formate',{attrs:{"price":_vm.orderDetail.discount_amount}})],2)],2):_vm._e(),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"money row\" data-v-55e5c831>","</div>",[_vm._ssrNode("<div class=\"lighter\" data-v-55e5c831>实付金额：</div> "),_vm._ssrNode("<div class=\"primary\" data-v-55e5c831>","</div>",[_c('price-formate',{attrs:{"price":_vm.orderDetail.order_amount,"subscript-size":14,"first-size":28,"second-size":28}})],1)],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"oprate-btn row-end mt16\" data-v-55e5c831>","</div>",[_vm._ssrNode(((_vm.orderDetail.cancel_btn)?("<div class=\"btn plain row-center lighter\" data-v-55e5c831>\n                    取消订单\n                </div>"):"<!---->")+" "+((_vm.orderDetail.delivery_btn)?("<div class=\"btn plain row-center ml8 lighter\" data-v-55e5c831>\n                    物流查询\n                </div>"):"<!---->")+" "+((_vm.orderDetail.take_btn)?("<div class=\"btn bg-primary row-center white ml8\" data-v-55e5c831>\n                    确认收货\n                </div>"):"<!---->")+" "+((_vm.orderDetail.del_btn)?("<div class=\"btn plain row-center lighter ml8\" data-v-55e5c831>\n                    删除订单\n                </div>"):"<!---->")+" "),(_vm.orderDetail.pay_btn)?_c('nuxt-link',{staticClass:"btn bg-primary row-center white ml8",attrs:{"to":("/payment?id=" + (_vm.orderDetail.id))}},[_c('span',{staticClass:"mr8"},[_vm._v("去付款")]),_vm._v(" "),(_vm.getCancelTime(_vm.orderDetail.order_cancel_time) > 0)?_c('count-down',{attrs:{"time":_vm.getCancelTime(_vm.orderDetail.order_cancel_time),"format":"hh:mm:ss"},on:{"finish":_vm.getOrderDetail}}):_vm._e()],1):_vm._e()],2)],2)]),_vm._ssrNode(" "),_c('deliver-search',{attrs:{"aid":_vm.id},model:{value:(_vm.showDeliverPop),callback:function ($$v) {_vm.showDeliverPop=$$v},expression:"showDeliverPop"}})],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/user/order/detail.vue?vue&type=template&id=55e5c831&scoped=true&

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// EXTERNAL MODULE: ./utils/tools.js
var tools = __webpack_require__(135);

// EXTERNAL MODULE: external "qrcodejs2"
var external_qrcodejs2_ = __webpack_require__(129);
var external_qrcodejs2_default = /*#__PURE__*/__webpack_require__.n(external_qrcodejs2_);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/user/order/detail.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ var detailvue_type_script_lang_js_ = ({
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

  layout: "user_lauout",
  components: {
    CountDown: countDown["default"]
  },

  async asyncData({
    $get,
    query
  }) {
    const {
      data,
      code
    } = await $get("order/detail", {
      params: {
        id: query.id
      }
    });

    if (code == 1) {
      return {
        orderDetail: data,
        id: query.id
      };
    }
  },

  data() {
    return {
      orderDetail: {},
      showDeliverPop: false
    };
  },

  mounted() {
    if (this.orderDetail.delivery_type === 2) {
      this.creatQrCode(this.orderDetail.pickup_code);
    }
  },

  methods: {
    creatQrCode(content) {
      const qrcode = new external_qrcodejs2_default.a(this.$refs.qrCodeUrl, {
        text: content,
        width: 106,
        height: 106,
        colorDark: '#333333',
        colorLight: '#ffffff',
        correctLevel: external_qrcodejs2_default.a.CorrectLevel.H
      });
    },

    onCopyQRCode() {
      const content = this.orderDetail.pickup_code;
      Object(tools["a" /* copyClipboard */])(content).then(() => {
        this.$message.success('复制成功');
      }).catch(err => {
        this.$message.error('复制失败');
        console.log(err);
      });
    },

    async getOrderDetail() {
      const {
        data,
        code
      } = await this.$get("order/detail", {
        params: {
          id: this.id
        }
      });

      if (code == 1) {
        this.orderDetail = data;
      }
    },

    handleOrder(type) {
      this.type = type;
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
        id
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
        id
      });

      if (code == 1) {
        this.$message({
          message: msg,
          type: "success"
        });

        if (type == 1) {
          setTimeout(() => {
            this.$router.go(-1);
          }, 1500);
        } else {
          this.getOrderDetail();
        }
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
// CONCATENATED MODULE: ./pages/user/order/detail.vue?vue&type=script&lang=js&
 /* harmony default export */ var order_detailvue_type_script_lang_js_ = (detailvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/user/order/detail.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(298)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  order_detailvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "55e5c831",
  "b092d02e"
  
)

/* harmony default export */ var detail = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default,DeliverSearch: __webpack_require__(170).default})


/***/ })

};;
//# sourceMappingURL=detail.js.map