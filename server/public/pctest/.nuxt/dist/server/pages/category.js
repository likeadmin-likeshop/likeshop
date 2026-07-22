exports.ids = [23,10,12,14];
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

/***/ 140:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(145);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("f37a30f2", content, true, context)
};

/***/ }),

/***/ 144:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_goodsList_vue_vue_type_style_index_0_id_483dfcdd_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(140);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_goodsList_vue_vue_type_style_index_0_id_483dfcdd_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_goodsList_vue_vue_type_style_index_0_id_483dfcdd_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_goodsList_vue_vue_type_style_index_0_id_483dfcdd_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_goodsList_vue_vue_type_style_index_0_id_483dfcdd_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 145:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".goods-list[data-v-483dfcdd]{align-items:stretch}.goods-list .goods-item[data-v-483dfcdd]{display:block;box-sizing:border-box;width:224px;height:310px;margin-bottom:16px;padding:12px 12px 16px;border-radius:4px;transition:all .2s}.goods-list .goods-item[data-v-483dfcdd]:hover{transform:translateY(-8px);box-shadow:0 0 6px rgba(0,0,0,.1)}.goods-list .goods-item .goods-img[data-v-483dfcdd]{width:200px;height:200px}.goods-list .goods-item .name[data-v-483dfcdd]{margin-bottom:10px;height:40px;line-height:20px}.goods-list .goods-item .seckill .btn[data-v-483dfcdd]{padding:4px 12px;border-radius:4px;border:1px solid transparent}.goods-list .goods-item .seckill .btn.not-start[data-v-483dfcdd]{border-color:#ff2c3c;color:#ff2c3c;background-color:transparent}.goods-list .goods-item .seckill .btn.end[data-v-483dfcdd]{background-color:#e5e5e5;color:#fff}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 153:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/goodsList.vue?vue&type=template&id=483dfcdd&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"goods-list row wrap"},_vm._l((_vm.list),function(item,index){return _c('nuxt-link',{key:index,staticClass:"goods-item bg-white",style:({ marginRight: (index + 1) % _vm.num == 0 ? 0 : '14px' }),attrs:{"to":("/goods_details/" + (item.id))}},[_c('el-image',{staticClass:"goods-img",attrs:{"lazy":"","src":item.image,"alt":""}}),_vm._v(" "),_c('div',{staticClass:"name line2"},[_vm._v(_vm._s(item.name))]),_vm._v(" "),(_vm.type == 'seckill')?_c('div',{staticClass:"seckill row-between"},[_c('div',{staticClass:"primary row"},[_vm._v("\n        秒杀价"),_c('price-formate',{attrs:{"price":item.seckill_price,"first-size":18}})],1),_vm._v(" "),_c('div',{class:['btn bg-primary white', {'not-start' : _vm.status == 0, end: _vm.status == 2}]},[_vm._v(_vm._s(_vm.getSeckillText))])]):_c('div',{staticClass:"row-between wrap"},[_c('div',{staticClass:"price row"},[_c('div',{staticClass:"primary mr8"},[_c('price-formate',{attrs:{"price":item.price,"first-size":16}})],1),_vm._v(" "),_c('div',{staticClass:"muted sm line-through"},[_c('price-formate',{attrs:{"price":item.market_price}})],1)]),_vm._v(" "),_c('div',{staticClass:"muted xs"},[_vm._v(_vm._s(item.sales_sum)+"人购买")])])],1)}),1)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/goodsList.vue?vue&type=template&id=483dfcdd&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/goodsList.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var goodsListvue_type_script_lang_js_ = ({
  props: {
    list: {
      type: Array,
      default: () => []
    },
    num: {
      type: Number,
      default: 5
    },
    type: {
      type: String
    },
    status: {
      type: Number
    }
  },
  watch: {
    list: {
      immediate: true,
      handler: function (val) {}
    }
  },
  computed: {
    getSeckillText() {
      switch (this.status) {
        case 0:
          return '未开始';

        case 1:
          return '立即抢购';

        case 2:
          return '已结束';
      }
    }

  }
});
// CONCATENATED MODULE: ./components/goodsList.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_goodsListvue_type_script_lang_js_ = (goodsListvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/goodsList.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(144)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_goodsListvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "483dfcdd",
  "74ea4c66"
  
)

/* harmony default export */ var goodsList = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default})


/***/ }),

/***/ 171:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/goods_null.38f1689.png";

/***/ }),

/***/ 206:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(241);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("38d10b78", content, true, context)
};

/***/ }),

/***/ 240:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_style_index_0_id_97320974_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(206);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_style_index_0_id_97320974_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_style_index_0_id_97320974_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_style_index_0_id_97320974_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_style_index_0_id_97320974_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 241:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".category[data-v-97320974]{padding:16px 0}.category .category-hd .category-wrap[data-v-97320974]{padding:0 16px}.category .category-hd .category-con[data-v-97320974]{border-bottom:1px dashed #e5e5e5;align-items:flex-start;padding-top:16px}.category .category-hd .category-con .name[data-v-97320974]{flex:none}.category .category-hd .category-con .item[data-v-97320974]{margin-bottom:16px;width:84px;margin-left:14px;cursor:pointer}.category .category-hd .category-con .item.active[data-v-97320974],.category .category-hd .category-con .item[data-v-97320974]:hover{color:#ff2c3c}.category .category-hd .sort[data-v-97320974]{padding:15px 16px}.category .category-hd .sort .sort-name .item[data-v-97320974]{margin-right:30px;cursor:pointer}.category .category-hd .sort .sort-name .item.active[data-v-97320974]{color:#ff2c3c}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 311:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/category.vue?vue&type=template&id=97320974&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"category"},[_vm._ssrNode("<div class=\"category-hd bg-white\" data-v-97320974><div class=\"category-wrap\" data-v-97320974><div class=\"category-con row\" data-v-97320974><div class=\"name muted\" data-v-97320974>一级分类：</div> <div class=\"category-list row wrap lighter\" data-v-97320974>"+(_vm._ssrList((_vm.categoryOne),function(item,index){return ("<div"+(_vm._ssrClass(null,['item line1', { active: _vm.oneIndex == index }]))+" data-v-97320974>"+_vm._ssrEscape("\n                        "+_vm._s(item.name)+"\n                    ")+"</div>")}))+"</div></div> <div class=\"category-con row\" data-v-97320974><div class=\"name muted\" data-v-97320974>二级分类：</div> <div class=\"category-list row wrap lighter\" data-v-97320974><div"+(_vm._ssrClass(null,['item line1', { active: _vm.twoIndex === '' }]))+" data-v-97320974>\n                        全部\n                    </div> "+(_vm._ssrList((_vm.categoryTwo),function(item,index){return ("<div"+(_vm._ssrClass(null,['item line1', { active: _vm.twoIndex === index }]))+" data-v-97320974>"+_vm._ssrEscape("\n                        "+_vm._s(item.name)+"\n                    ")+"</div>")}))+"</div></div> <div class=\"category-con row\" data-v-97320974><div class=\"name muted\" data-v-97320974>三级分类：</div> <div class=\"category-list row wrap lighter\" data-v-97320974><div"+(_vm._ssrClass(null,['item line1', { active: _vm.threeIndex === '' }]))+" data-v-97320974>\n                        全部\n                    </div> "+(_vm._ssrList((_vm.categoryThree),function(item,index){return ("<div"+(_vm._ssrClass(null,['item line1', { active: _vm.threeIndex === index }]))+" data-v-97320974>"+_vm._ssrEscape("\n                        "+_vm._s(item.name)+"\n                    ")+"</div>")}))+"</div></div></div> <div class=\"sort mb16 row bg-white\" data-v-97320974><div class=\"title muted\" data-v-97320974>排序方式：</div> <div class=\"sort-name ml16 row lighter\" data-v-97320974><div"+(_vm._ssrClass(null,['item', { active: _vm.sortType == '' }]))+" data-v-97320974>\n                    综合\n                </div> <div"+(_vm._ssrClass(null,['item', { active: _vm.sortType == 'price' }]))+" data-v-97320974>\n                    价格\n                    <i class=\"el-icon-arrow-down\""+(_vm._ssrStyle(null,null, { display: (_vm.priceSort == 'desc') ? '' : 'none' }))+" data-v-97320974></i> <i class=\"el-icon-arrow-up\""+(_vm._ssrStyle(null,null, { display: (_vm.priceSort == 'asc') ? '' : 'none' }))+" data-v-97320974></i></div> <div"+(_vm._ssrClass(null,['item', { active: _vm.sortType == 'sales_sum' }]))+" data-v-97320974>\n                    销量\n                    <i class=\"el-icon-arrow-down\""+(_vm._ssrStyle(null,null, { display: (_vm.saleSort == 'desc') ? '' : 'none' }))+" data-v-97320974></i> <i class=\"el-icon-arrow-up\""+(_vm._ssrStyle(null,null, { display: (_vm.saleSort == 'asc') ? '' : 'none' }))+" data-v-97320974></i></div></div></div></div> "),(_vm.isHasGoods)?_vm._ssrNode("<div data-v-97320974>","</div>",[_c('goods-list',{attrs:{"list":_vm.goodsList}}),_vm._ssrNode(" "),(_vm.count)?_vm._ssrNode("<div class=\"pagination row-center\" style=\"padding-bottom: 38px\" data-v-97320974>","</div>",[_c('el-pagination',{attrs:{"background":"","hide-on-single-page":"","layout":"prev, pager, next","total":_vm.count,"prev-text":"上一页","next-text":"下一页","page-size":20},on:{"current-change":_vm.changePage}})],1):_vm._e()],2):_c('null-data',{attrs:{"img":__webpack_require__(171),"text":"暂无商品~"}})],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/category.vue?vue&type=template&id=97320974&scoped=true&

// EXTERNAL MODULE: ./utils/tools.js
var tools = __webpack_require__(135);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/category.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ var categoryvue_type_script_lang_js_ = ({
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

  watchQuery: true,

  async asyncData({
    query,
    $get
  }) {
    let {
      data
    } = await $get("goods_category/lists", {
      params: {
        client: 2
      }
    });
    return {
      categoryList: data
    };
  },

  data() {
    return {
      count: 0,
      oneIndex: 0,
      twoIndex: "",
      threeIndex: "",
      categoryOne: [],
      categoryTwo: [],
      categoryThree: [],
      sortType: "",
      saleSort: "desc",
      priceSort: "desc",
      page: "",
      goodsList: [],
      cateId: 0,
      isHasGoods: true
    };
  },

  created() {
    this.changeSortType = Object(tools["d" /* trottle */])(this.changeSortType, 500, this);
  },

  methods: {
    changeData(id) {
      const {
        categoryList
      } = this;
      this.setIndex(id);
      this.categoryOne = categoryList;
      this.categoryTwo = categoryList[this.oneIndex] ? categoryList[this.oneIndex].sons : [];
      this.categoryThree = this.categoryTwo[this.twoIndex] ? this.categoryTwo[this.twoIndex].sons : [];
      this.setCateId(id);
      this.getGoods();
    },

    setCateId(id) {
      if (this.twoIndex == '' && this.threeIndex == '' && this.oneIndex !== '') {
        this.cateId = this.categoryOne[this.oneIndex].id;
      }

      if (this.threeIndex == '' && this.twoIndex !== '') {
        this.cateId = this.categoryTwo[this.twoIndex].id;
      }

      if (id) {
        this.cateId = id;
      }
    },

    setIndex(id) {
      const {
        categoryList
      } = this;
      categoryList.some((oitem, oindex) => {
        if (oitem.id === id) {
          this.oneIndex = oindex;
          this.twoIndex = "";
          this.threeIndex = "";
          return true;
        }

        return oitem.sons && oitem.sons.some((witem, windex) => {
          if (witem.id === id) {
            this.oneIndex = oindex;
            this.twoIndex = windex;
            this.threeIndex = "";
            return true;
          }

          return witem.sons && witem.sons.some((titem, tindex) => {
            if (titem.id === id) {
              this.oneIndex = oindex;
              this.twoIndex = windex;
              this.threeIndex = tindex;
              return true;
            }
          });
        });
      });
    },

    clickAllTwo() {
      this.twoIndex = "";
      this.threeIndex = "";
      this.changeData();
    },

    clickAll() {
      this.threeIndex = "";
      this.changeData();
    },

    changeSortType(type) {
      this.sortType = type;

      switch (type) {
        case "price":
          if (this.priceSort == "asc") {
            this.priceSort = "desc";
          } else if (this.priceSort == "desc") {
            this.priceSort = "asc";
          }

          break;

        case "sales_sum":
          if (this.saleSort == "asc") {
            this.saleSort = "desc";
          } else if (this.saleSort == "desc") {
            this.saleSort = "asc";
          }

          break;

        default:
      }

      this.getGoods();
    },

    changePage(current) {
      this.page = current;
      this.getGoods();
    },

    async getGoods() {
      const {
        priceSort,
        sortType,
        saleSort
      } = this;
      let category_id = this.cateId;
      let sort = "";

      switch (sortType) {
        case "price":
          sort = priceSort;
          break;

        case "sales_sum":
          sort = saleSort;
          break;
      }

      const {
        data: {
          list,
          count
        }
      } = await this.$get("pc/goodsList", {
        params: {
          page_size: 20,
          page_no: this.page,
          sort_type: sortType,
          sort,
          category_id
        }
      });
      this.goodsList = list;

      if (!list.length) {
        this.isHasGoods = false;
      } else {
        this.isHasGoods = true;
      }

      this.count = count;
    }

  },
  watch: {
    categoryList: {
      immediate: true,

      handler(value) {
        const {
          id
        } = this.$route.query;
        this.changeData(Number(id));
      }

    }
  }
});
// CONCATENATED MODULE: ./pages/category.vue?vue&type=script&lang=js&
 /* harmony default export */ var pages_categoryvue_type_script_lang_js_ = (categoryvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/category.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(240)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  pages_categoryvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "97320974",
  "3cc1d84a"
  
)

/* harmony default export */ var category = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {GoodsList: __webpack_require__(153).default,NullData: __webpack_require__(139).default})


/***/ })

};;
//# sourceMappingURL=category.js.map