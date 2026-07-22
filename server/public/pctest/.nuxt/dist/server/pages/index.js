exports.ids = [30,1,2,10,14];
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

/***/ 141:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(149);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("a57d76be", content, true, context)
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

/***/ 148:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_adItem_vue_vue_type_style_index_0_id_562e7d63_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(141);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_adItem_vue_vue_type_style_index_0_id_562e7d63_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_adItem_vue_vue_type_style_index_0_id_562e7d63_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_adItem_vue_vue_type_style_index_0_id_562e7d63_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_adItem_vue_vue_type_style_index_0_id_562e7d63_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 149:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".ad-item[data-v-562e7d63]{width:100%;height:100%;cursor:pointer}", ""]);
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

/***/ 154:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/adItem.vue?vue&type=template&id=562e7d63&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"ad-item",on:{"click":function($event){$event.stopPropagation();return _vm.goPage(_vm.item)}}},[_c('el-image',{staticStyle:{"width":"100%","height":"100%"},attrs:{"src":_vm.item.image}})],1)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/adItem.vue?vue&type=template&id=562e7d63&scoped=true&

// EXTERNAL MODULE: ./utils/tools.js
var tools = __webpack_require__(135);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/adItem.vue?vue&type=script&lang=js&
//
//
//
//
//
//

/* harmony default export */ var adItemvue_type_script_lang_js_ = ({
  components: {},
  props: {
    item: {
      type: Object,
      default: () => ({})
    }
  },
  methods: {
    goPage(item) {
      let {
        link_type,
        link,
        params
      } = item;

      switch (link_type) {
        case 3:
          window.open(item.link);
          break;

        default:
          if (["/goods_details"].includes(link)) {
            link += `/${params.id}`;
          } else {
            link += Object(tools["c" /* paramsToStr */])(params);
          }

          this.$router.push({
            path: link
          });
      }
    }

  }
});
// CONCATENATED MODULE: ./components/adItem.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_adItemvue_type_script_lang_js_ = (adItemvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/adItem.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(148)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_adItemvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "562e7d63",
  "70919626"
  
)

/* harmony default export */ var adItem = __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 156:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/bg_coupon_s.3f57cfd.png";

/***/ }),

/***/ 183:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(203);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("3d0c7cbf", content, true, context)
};

/***/ }),

/***/ 202:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_activityArea_vue_vue_type_style_index_0_id_5cccde52_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(183);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_activityArea_vue_vue_type_style_index_0_id_5cccde52_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_activityArea_vue_vue_type_style_index_0_id_5cccde52_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_activityArea_vue_vue_type_style_index_0_id_5cccde52_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_activityArea_vue_vue_type_style_index_0_id_5cccde52_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 203:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".activity-area[data-v-5cccde52]{margin-bottom:16px}.activity-area .activity-header[data-v-5cccde52]{height:80px}.activity-area .activity-header .title[data-v-5cccde52]{font-size:28px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 205:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/activityArea.vue?vue&type=template&id=5cccde52&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return (_vm.list.length)?_c('div',{staticClass:"activity-area"},[_vm._ssrNode("<div class=\"activity-header row\" data-v-5cccde52>","</div>",[_vm._ssrNode("<div class=\"content row flex1\" data-v-5cccde52><div class=\"title bold mr8\" data-v-5cccde52>"+_vm._ssrEscape(_vm._s(_vm.title))+"</div> <div class=\"lg muted\" data-v-5cccde52>"+_vm._ssrEscape(_vm._s(_vm.desc))+"</div></div> "),_c('nuxt-link',{staticClass:"more",attrs:{"to":_vm.url}},[_vm._v("更多 "),_c('i',{staticClass:"el-icon-arrow-right"})])],2),_vm._ssrNode(" "),(_vm.banner.image)?_vm._ssrNode("<div data-v-5cccde52>","</div>",[_c('ad-item',{attrs:{"item":_vm.banner}})],1):_vm._e(),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"activity-goods mt16\" data-v-5cccde52>","</div>",[_c('goods-list',{attrs:{"list":_vm.list}})],1)],2):_vm._e()}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/activityArea.vue?vue&type=template&id=5cccde52&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/activityArea.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var activityAreavue_type_script_lang_js_ = ({
  components: {},
  props: {
    url: {
      type: String,
      default: ""
    },
    title: {
      type: String
    },
    desc: {
      type: String
    },
    banner: {
      type: Object,
      default: () => ({})
    },
    list: {
      type: Array,
      default: () => []
    }
  },

  created() {}

});
// CONCATENATED MODULE: ./components/activityArea.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_activityAreavue_type_script_lang_js_ = (activityAreavue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/activityArea.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(202)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_activityAreavue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "5cccde52",
  "1380c5da"
  
)

/* harmony default export */ var activityArea = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {AdItem: __webpack_require__(154).default,GoodsList: __webpack_require__(153).default})


/***/ }),

/***/ 233:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(310);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("2065e928", content, true, context)
};

/***/ }),

/***/ 309:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(233);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 310:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_GET_URL_IMPORT___ = __webpack_require__(31);
var ___CSS_LOADER_URL_IMPORT_0___ = __webpack_require__(156);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
var ___CSS_LOADER_URL_REPLACEMENT_0___ = ___CSS_LOADER_GET_URL_IMPORT___(___CSS_LOADER_URL_IMPORT_0___);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".index .banner{margin-left:160px;margin-bottom:16px;height:440px}.index .banner .swiper-container{--swiper-navigation-size:20px;--swiper-pagination-color:#fff}.index .banner .swiper-item{height:440px}.index .banner .swiper-item a{display:inline-block;width:100%;height:100%}.index .category-list .category-hd{height:79px}.index .category-list .category-hd .title{font-size:28px}.index .category-list .category-hd .category-two{margin-left:24px}.index .category-list .category-hd .category-two .item{margin-right:24px}.index .category-list .category-hd .category-two .item:hover{color:#333}.index .category-list .category-con{align-items:flex-start}.index .category-list .category-con>.ad-img{width:224px;height:636px}.index .coupons-list{padding:0 18px;flex-wrap:wrap;position:relative}.index .coupons-list .item{margin-bottom:20px;margin-right:16px;position:relative;cursor:pointer}.index .coupons-list .item .info{padding:0 10px;background:url(" + ___CSS_LOADER_URL_REPLACEMENT_0___ + ") no-repeat;width:240px;height:80px;background-size:100%}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 339:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/index.vue?vue&type=template&id=e5d1a4da&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"index"},[_vm._ssrNode("<div class=\"banner\">","</div>",[_c('client-only',[_c('el-carousel',{attrs:{"height":"440px","autoplay":""}},_vm._l((_vm.bannerList),function(item,index){return _c('el-carousel-item',{key:index,staticClass:"swiper-item"},[_c('ad-item',{attrs:{"item":item}})],1)}),1)],1)],1),_vm._ssrNode(" "),_c('activity-area',{attrs:{"title":"热销榜单","desc":"实时更新热销火爆商品","url":"/goods_list/1","list":_vm.indexData.host_list,"banner":_vm.indexData.host_ad}}),_vm._ssrNode(" "),_c('activity-area',{attrs:{"title":"新品推荐","desc":"品质好货 件件是精品","url":"/goods_list/2","list":_vm.indexData.new_list,"banner":_vm.indexData.new_ad}}),_vm._ssrNode(" "),_c('activity-area',{attrs:{"title":"好物优选","desc":"精挑细选 挑你喜欢","url":"/goods_list/3","list":_vm.indexData.best_list,"banner":_vm.indexData.best_ad}}),_vm._ssrNode(" "),_vm._l((_vm.indexData.category_list),function(item,index){return _vm._ssrNode("<div class=\"category-list\">","</div>",[_vm._ssrNode("<div class=\"category-hd row\">","</div>",[_vm._ssrNode("<div class=\"title bold line1\">"+_vm._ssrEscape("F"+_vm._s(index+ 1)+" / "+_vm._s(item.name))+"</div> "),_vm._ssrNode("<div class=\"row category-two flex1 wrap\">","</div>",_vm._l((item.sons),function(sitem,sindex){return _c('nuxt-link',{key:sindex,staticClass:"item muted mt8",attrs:{"to":("/category?id=" + (sitem.id))}},[_vm._v("\n          "+_vm._s(sitem.name)+"\n        ")])}),1),_vm._ssrNode(" "),_c('nuxt-link',{staticClass:"more",attrs:{"to":("/category?id=" + (item.id))}},[_vm._v("更多 "),_c('i',{staticClass:"el-icon-arrow-right"})])],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"category-con row\">","</div>",[(item.ad.image)?_vm._ssrNode("<div class=\"flexnone mr16 ad-img\">","</div>",[_c('ad-item',{attrs:{"item":item.ad}})],1):_vm._e(),_vm._ssrNode(" "),_c('goods-list',{attrs:{"list":item.goods_list,"num":item.ad.image ? 4 : 5}})],2)],2)}),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"coupon-popup\">","</div>",[_c('el-dialog',{attrs:{"title":"新人送券","visible":_vm.showCoupon,"width":"700px","center":"","top":"30vh"},on:{"update:visible":function($event){_vm.showCoupon=$event}}},[_c('div',{staticClass:"column-center black"},[_c('div',{staticClass:"coupons-list row"},[_vm._l((_vm.couponList),function(item,index){return [_c('div',{key:index,staticClass:"item"},[_c('div',{class:[
                'info white' ]},[_c('div',{staticClass:"info-hd row"},[_c('div',[_c('price-formate',{attrs:{"price":item.money,"first-size":38,"second-size":38}})],1),_vm._v(" "),_c('div',{staticClass:"ml8 flex1"},[_c('div',{staticClass:"line1"},[_vm._v(_vm._s(item.name))]),_vm._v(" "),_c('div',{staticClass:"xs line1"},[_vm._v(_vm._s(item.use_goods_type))])])])])])]})],2)]),_vm._v(" "),_c('div',{staticClass:"dialog-footer",attrs:{"slot":"footer"},slot:"footer"},[_c('el-button',{staticStyle:{"width":"200px"},attrs:{"type":"primary"},on:{"click":function($event){_vm.showCoupon = false}}},[_vm._v("确定")])],1)])],1)],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/index.vue?vue&type=template&id=e5d1a4da&

// EXTERNAL MODULE: ./components/activityArea.vue + 4 modules
var activityArea = __webpack_require__(205);

// EXTERNAL MODULE: external "vue-awesome-swiper"
var external_vue_awesome_swiper_ = __webpack_require__(38);

// EXTERNAL MODULE: ./utils/tools.js
var tools = __webpack_require__(135);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/index.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ var lib_vue_loader_options_pagesvue_type_script_lang_js_ = ({
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
    ActivityArea: activityArea["default"]
  },
  directives: {
    swiper: external_vue_awesome_swiper_["directive"]
  },

  async asyncData({
    $get,
    store
  }) {
    const banner = $get("ad/lists", {
      params: {
        pid: 2,
        client: 2
      }
    });
    const index = $get("pc/index");
    const {
      data: bannerList
    } = await banner;
    const {
      data: indexData
    } = await index;
    let couponList = [];

    if (store.getters.isLogin) {
      const {
        data
      } = await $get("coupon/registerSendCoupon");
      couponList = data;
    }

    return {
      bannerList,
      indexData,
      couponList
    };
  },

  data() {
    const self = this;
    return {
      bannerList: [],
      showCoupon: false,
      swiperOptions: {
        pagination: {
          el: ".swiper-pagination"
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        width: 1020,
        preventClicks: true,
        loop: true,
        observer: true,
        //修改swiper自己或子元素时，自动初始化swiper 
        observeParents: true,
        //修改swiper的父元素时，自动初始化swiper 
        on: {
          slideChangeTransitionStart() {
            console.log(this.activeIndex, 'active', this.realIndex);
            console.log(this.isEnd, 'isBegin', this.isBeginning);

            if (this.isEnd) {
              // 到达第4个
              this.slideToLoop(0);
            }

            if (this.isBeginning) {
              this.slideTo(self.bannerList.length);
            }
          }

        }
      }
    };
  },

  created() {// console.log(this);
  },

  mounted() {// if(this.$refs.mySwiper) {
    // }
  },

  // activated() {
  //   this.mySwiper.updateSwiper()
  // },
  beforeDestroy() {// console.log(this.mySwiper, "##");
    // this.bannerList = false;
    // this.mySwiper.destroySwiper()
  },

  destroyed() {},

  computed: {
    mySwiper() {
      return this.$refs.mySwiper;
    }

  },
  methods: {},
  watch: {
    couponList: {
      immediate: true,

      handler(val) {
        if (val.length) {
          this.showCoupon = true;
          this.$store.dispatch('getPublicData');
        }
      }

    }
  }
});
// CONCATENATED MODULE: ./pages/index.vue?vue&type=script&lang=js&
 /* harmony default export */ var pagesvue_type_script_lang_js_ = (lib_vue_loader_options_pagesvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/index.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(309)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  pagesvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  null,
  "218e1d45"
  
)

/* harmony default export */ var pages = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {AdItem: __webpack_require__(154).default,ActivityArea: __webpack_require__(205).default,GoodsList: __webpack_require__(153).default,PriceFormate: __webpack_require__(131).default})


/***/ })

};;
//# sourceMappingURL=index.js.map