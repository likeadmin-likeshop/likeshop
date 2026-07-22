exports.ids = [5,14];
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

/***/ 143:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "d", function() { return client; });
/* unused harmony export loadingType */
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "e", function() { return loginType; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "c", function() { return SMSType; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return FieldType; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AfterSaleType; });
const client = 5;
const loadingType = {
  LOADING: 'loading',
  FINISHED: 'finished',
  ERROR: 'error',
  EMPTY: 'empty'
};
const loginType = {
  SMS: 0,
  ACCOUNT: 1
}; // 短信发送

const SMSType = {
  // 注册
  REGISTER: 'ZCYZ',
  // 找回密码
  FINDPWD: 'ZHMM',
  // 登陆
  LOGIN: 'YZMDL',
  // 更换手机号
  CHANGE_MOBILE: 'BGSJHM',
  // 绑定手机号
  BIND: 'BDSJHM'
};
const FieldType = {
  NONE: '',
  SEX: 'sex',
  NICKNAME: 'nickname',
  AVATAR: 'avatar',
  MOBILE: 'mobile'
}; // 售后状态

const AfterSaleType = {
  // 售后申请 
  NORMAL: 'normal',
  // 处理中
  HANDLING: 'apply',
  // 已处理
  FINISH: 'finish'
};

/***/ }),

/***/ 176:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(193);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("735bba82", content, true, context)
};

/***/ }),

/***/ 192:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_afterSalesList_vue_vue_type_style_index_0_id_f2a37070_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(176);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_afterSalesList_vue_vue_type_style_index_0_id_f2a37070_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_afterSalesList_vue_vue_type_style_index_0_id_f2a37070_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_afterSalesList_vue_vue_type_style_index_0_id_f2a37070_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_afterSalesList_vue_vue_type_style_index_0_id_f2a37070_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 193:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".after-sales-list .after-sales-header[data-v-f2a37070]{border:1px solid #e5e5e5;background-color:#f2f2f2}.after-sales-list .after-sales-content[data-v-f2a37070]{margin-top:16px}.after-sales-list .after-sales-content .goods-item[data-v-f2a37070]{padding:10px 20px}.after-sales-list .after-sales-content .goods-item .goods-info[data-v-f2a37070]{margin-left:10px;width:500px}.after-sales-list .after-sales-content .goods-item .apply-btn[data-v-f2a37070]{border:1px solid #ccc;border-radius:2px;width:100px;height:32px;align-self:flex-start}.after-sales-list .after-sales-content .goods-item .apply-btn[data-v-f2a37070]:nth-of-type(2n){margin-left:10px}.after-sales-list .after-sales-content .goods-item .apply-btn[data-v-f2a37070]:nth-of-type(3){margin-top:10px;margin-left:0}.after-sales-list .after-sales-content .goods-item .apply-btn[data-v-f2a37070]:nth-of-type(4){margin-top:10px}.after-sales-list .shadow[data-v-f2a37070]{box-shadow:0 3px 4px rgba(0,0,0,.08)}.after-sales-list .border[data-v-f2a37070]{border-bottom:1px solid #e5e5e5}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 235:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/afterSalesList.vue?vue&type=template&id=f2a37070&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"after-sales-list"},_vm._l((_vm.lists),function(items){return _vm._ssrNode("<div class=\"mb20\" data-v-f2a37070>","</div>",[_vm._ssrNode(((_vm.type != 'normal')?("<div class=\"after-sales-header row-between\" data-v-f2a37070><div class=\"row\" data-v-f2a37070><div class=\"lighter sm\" data-v-f2a37070>"+_vm._ssrEscape("\n                    申请时间："+_vm._s(items.time)+"\n                ")+"</div> <div class=\"lighter sm\" style=\"margin-left: 110px\" data-v-f2a37070>"+_vm._ssrEscape("\n                    申请状态："+_vm._s(items.after_sale.status_text)+"\n                ")+"</div></div> <div class=\"primary sm\" style=\"margin-right: 12px\" data-v-f2a37070>"+_vm._ssrEscape("\n                "+_vm._s(items.after_sale.type_text)+"\n            ")+"</div></div>"):"<!---->")+" "),_vm._ssrNode("<div"+(_vm._ssrClass("after-sales-content",{shadow: _vm.type != 'normal', border: _vm.type == 'normal'}))+" data-v-f2a37070>","</div>",_vm._l((items.order_goods),function(item,index){return _vm._ssrNode("<div class=\"goods-item row-between\" data-v-f2a37070>","</div>",[_vm._ssrNode("<div class=\"row\" data-v-f2a37070>","</div>",[_c('el-image',{staticStyle:{"width":"72px","height":"72px"},attrs:{"src":item.image}}),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"goods-info\" data-v-f2a37070>","</div>",[_vm._ssrNode("<div class=\"goods-name noraml line1\" data-v-f2a37070>"+_vm._ssrEscape("\n                            "+_vm._s(item.goods_name)+"\n                        ")+"</div> <div class=\"muted sm mt8 mb8\" data-v-f2a37070>"+_vm._ssrEscape("\n                            "+_vm._s(item.spec_value_str)+"\n                        ")+"</div> "),_c('price-formate',{attrs:{"price":item.goods_price,"showSubscript":"","color":"#FF2C3C"}})],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"row wrap\""+(_vm._ssrStyle(null,{width: _vm.type != 'apply' ? null : '210px'}, null))+" data-v-f2a37070>","</div>",[(_vm.type == 'normal')?_c('el-button',{staticClass:"apply-btn row-center mr20 sm",attrs:{"disabled":items.after_sale && items.after_sale.able_apply == 0,"size":"small"},on:{"click":function($event){$event.stopPropagation();return _vm.goPage(items.order_id, item.item_id)}}},[_vm._v("申请售后")]):_vm._e(),_vm._ssrNode(" "),(_vm.type != 'normal')?_c('el-button',{staticClass:"apply-btn row-center mr20 sm",attrs:{"size":"small"},on:{"click":function($event){return _vm.goToDetail(items.after_sale.after_sale_id)}}},[_vm._v("查看详情")]):_vm._e(),_vm._ssrNode(" "),(_vm.type == 'apply')?_c('el-button',{staticClass:"apply-btn row-center mr20 sm",attrs:{"size":"small"},on:{"click":function($event){$event.stopPropagation();return _vm.cancelApply(items.after_sale.after_sale_id)}}},[_vm._v("撤销申请")]):_vm._e(),_vm._ssrNode(" "),(items.after_sale.status==2)?_c('el-button',{staticClass:"apply-btn row-center mr20 sm",attrs:{"size":"small"},on:{"click":function($event){$event.stopPropagation();return _vm.showInput(items.after_sale.after_sale_id)}}},[_vm._v("填写快递单号")]):_vm._e()],2)],2)}),0)],2)}),0)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/afterSalesList.vue?vue&type=template&id=f2a37070&scoped=true&

// EXTERNAL MODULE: ./utils/type.js
var type = __webpack_require__(143);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/afterSalesList.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ var afterSalesListvue_type_script_lang_js_ = ({
  props: {
    type: {
      type: String,
      default: type["a" /* AfterSaleType */].NORMAL
    },
    lists: {
      type: Array,
      default: () => []
    }
  },

  data() {
    return {};
  },

  methods: {
    goToDetail(id) {
      switch (this.type) {
        case type["a" /* AfterSaleType */].NORMAL:
          this.$router.push("/goods_details/" + id);
          break;

        case type["a" /* AfterSaleType */].HANDLING:
        case type["a" /* AfterSaleType */].FINISH:
          this.$router.push("/user/after_sales/after_sale_details?afterSaleId=" + id);
          break;
      }
    },

    goPage(orderId, itemId) {
      this.$router.push('/user/after_sales/apply_sale?order_id=' + orderId + '&item_id=' + itemId);
    },

    showInput(e) {
      this.$emit("show", e);
    },

    async cancelApply(afterSaleId) {
      let res = await this.$post("after_sale/cancel", {
        id: afterSaleId
      });

      if (res.code == 1) {
        this.$message({
          message: res.msg,
          type: 'success'
        });
        this.$emit('refresh');
      }
    }

  }
});
// CONCATENATED MODULE: ./components/afterSalesList.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_afterSalesListvue_type_script_lang_js_ = (afterSalesListvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/afterSalesList.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(192)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_afterSalesListvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "f2a37070",
  "a5b4dd36"
  
)

/* harmony default export */ var afterSalesList = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default})


/***/ })

};;
//# sourceMappingURL=after-sales-list.js.map