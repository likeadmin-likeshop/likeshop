exports.ids = [39,14,17];
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

/***/ 142:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(151);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("61949a37", content, true, context)
};

/***/ }),

/***/ 150:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(142);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 151:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".v-upload .el-upload--picture-card{width:76px;height:76px;line-height:76px}.v-upload .el-upload-list--picture-card .el-upload-list__item{width:76px;height:76px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 155:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/public/upload.vue?vue&type=template&id=e8fbe052&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"v-upload"},[_c('el-upload',{attrs:{"list-type":"picture-card","action":_vm.url + 'file/formimage',"limit":_vm.limit,"on-success":_vm.success,"on-error":_vm.error,"on-change":_vm.onChange,"auto-upload":_vm.autoUpload,"accept":"image/jpg,image/jpeg,image/png","before-upload":_vm.beforeAvatarUpload}},[(_vm.isSlot)?_vm._t("default"):_c('div',[_c('div',{staticClass:"muted xs"},[_vm._v("上传图片")])])],2)],1)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/public/upload.vue?vue&type=template&id=e8fbe052&

// EXTERNAL MODULE: ./config.js
var config = __webpack_require__(32);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/public/upload.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ var uploadvue_type_script_lang_js_ = ({
  components: {},
  props: {
    limit: {
      type: Number,
      default: 1
    },
    isSlot: {
      type: Boolean,
      default: false
    },
    autoUpload: {
      type: Boolean,
      default: true
    },
    onChange: {
      type: Function,
      default: () => {}
    }
  },
  watch: {},

  data() {
    return {
      url: config["a" /* default */].baseUrl
    };
  },

  created() {},

  computed: {},
  methods: {
    success(res, file, fileList) {
      if (!this.autoUpload) {
        return;
      }

      this.$message({
        message: "上传成功",
        type: 'success'
      });
      this.$emit('success', fileList);
    },

    error(res) {
      this.$message({
        message: "上传失败，请重新上传",
        type: 'error'
      });
    },

    beforeAvatarUpload(file) {
      var testmsg = file.name.substring(file.name.lastIndexOf('.') + 1);
      console.log('fdsadsf');
      const extension = testmsg === 'jpg';
      const extension2 = testmsg === 'png';
      const extension4 = testmsg === 'jpeg';

      if (!extension && !extension2) {
        this.$message({
          message: '上传文件只能是 jpg, jpeg, png格式!',
          type: 'warning'
        });
        return false;
      }

      return extension || extension2 || extension4;
    }

  }
});
// CONCATENATED MODULE: ./components/public/upload.vue?vue&type=script&lang=js&
 /* harmony default export */ var public_uploadvue_type_script_lang_js_ = (uploadvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/public/upload.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(150)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  public_uploadvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  null,
  "5b9a4320"
  
)

/* harmony default export */ var upload = __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 228:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(295);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("199d6a81", content, true, context)
};

/***/ }),

/***/ 294:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_apply_sale_vue_vue_type_style_index_0_id_55e350fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(228);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_apply_sale_vue_vue_type_style_index_0_id_55e350fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_apply_sale_vue_vue_type_style_index_0_id_55e350fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_apply_sale_vue_vue_type_style_index_0_id_55e350fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_apply_sale_vue_vue_type_style_index_0_id_55e350fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 295:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".apply-sale-list[data-v-55e350fe]{padding:10px}.apply-sale-list .goods-info .table-content[data-v-55e350fe],.apply-sale-list .goods-info .table-head[data-v-55e350fe]{padding:10px 20px;border-bottom:1px solid #e5e5e5}.apply-sale-list .goods-info .info[data-v-55e350fe]{width:500px}.apply-sale-list .goods-info .act-pay[data-v-55e350fe],.apply-sale-list .goods-info .num[data-v-55e350fe],.apply-sale-list .goods-info .price[data-v-55e350fe],.apply-sale-list .goods-info .sum[data-v-55e350fe]{width:100px}.apply-sale-list .apply-form[data-v-55e350fe]{margin-top:24px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 334:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/user/after_sales/apply_sale.vue?vue&type=template&id=55e350fe&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"apply-sale-list"},[_vm._ssrNode("<div class=\"goods-info\" data-v-55e350fe>","</div>",[_vm._ssrNode("<div class=\"table-head row\" data-v-55e350fe><div class=\"info\" data-v-55e350fe>商品信息</div> <div class=\"price row-center\" data-v-55e350fe>单价</div> <div class=\"num row-center\" data-v-55e350fe>数量</div> <div class=\"sum row-center\" data-v-55e350fe>合计</div> <div class=\"act-pay row-center\" data-v-55e350fe>实付</div></div> "),_vm._ssrNode("<div class=\"table-content row mt10\" data-v-55e350fe>","</div>",[_vm._ssrNode("<div class=\"info row\" data-v-55e350fe>","</div>",[_vm._ssrNode("<div class=\"row\" data-v-55e350fe>","</div>",[_c('el-image',{staticStyle:{"width":"72px","height":"72px","flex":"none"},attrs:{"src":_vm.goods.image}}),_vm._ssrNode(" <div class=\"ml10\" style=\"flex: 1; align-self: flex-start\" data-v-55e350fe><div class=\"line2\" data-v-55e350fe>"+_vm._ssrEscape(_vm._s(_vm.goods.goods_name))+"</div> <div class=\"mt10 muted sm\" data-v-55e350fe>"+_vm._ssrEscape(_vm._s(_vm.goods.spec_value))+"</div></div>")],2)]),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"price row-center\" style=\"align-self: flex-start\" data-v-55e350fe>","</div>",[_c('price-formate',{attrs:{"price":_vm.goods.goods_price}})],1),_vm._ssrNode(" <div class=\"num row-center\" style=\"align-self: flex-start\" data-v-55e350fe>"+_vm._ssrEscape("\n                "+_vm._s(_vm.goods.goods_num)+"\n            ")+"</div> "),_vm._ssrNode("<div class=\"sum row-center\" style=\"align-self: flex-start\" data-v-55e350fe>","</div>",[_c('price-formate',{attrs:{"price":_vm.goods.total_price}})],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"act-pay row-center\" style=\"align-self: flex-start\" data-v-55e350fe>","</div>",[_c('price-formate',{attrs:{"price":_vm.goods.total_pay_price}})],1)],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"apply-form\" data-v-55e350fe>","</div>",[_c('el-form',{ref:"form",attrs:{"model":_vm.form,"rules":_vm.rules,"label-width":"100px"}},[_c('el-form-item',{attrs:{"label":"退款类型：","prop":"applyType"}},[_c('el-radio-group',{on:{"change":_vm.applyRadioChange},model:{value:(_vm.applyType),callback:function ($$v) {_vm.applyType=$$v},expression:"applyType"}},[_c('el-radio',{attrs:{"label":"仅退款"}}),_vm._v(" "),_c('el-radio',{attrs:{"label":"退货退款"}})],1)],1),_vm._v(" "),_c('el-form-item',{attrs:{"label":"退款原因：","prop":"reason"}},[_c('el-select',{attrs:{"placeholder":"请选择"},model:{value:(_vm.form.reason),callback:function ($$v) {_vm.$set(_vm.form, "reason", $$v)},expression:"form.reason"}},_vm._l((_vm.reason),function(item,index){return _c('el-option',{key:index,attrs:{"label":item,"value":item}})}),1)],1),_vm._v(" "),_c('el-form-item',{attrs:{"label":"退款说明：","prop":"desc"}},[_c('el-input',{staticStyle:{"width":"600px"},attrs:{"type":"textarea","placeholder":"退款说明（200字以内）","maxlength":"200","show-word-limit":"","resize":"none","rows":"5"},model:{value:(_vm.form.desc),callback:function ($$v) {_vm.$set(_vm.form, "desc", $$v)},expression:"form.desc"}})],1),_vm._v(" "),_c('el-form-item',[_c('upload',{attrs:{"isSlot":"","file-list":_vm.fileList,"limit":3},on:{"success":_vm.uploadSuccess}},[_c('div',{staticClass:"column-center",staticStyle:{"height":"100%"}},[_c('i',{staticClass:"el-icon-camera xs",staticStyle:{"font-size":"24px"}}),_vm._v(" "),_c('div',{staticClass:"muted xs mt10",staticStyle:{"line-height":"0"}},[_vm._v("上传凭证")])])]),_vm._v(" "),_c('div',{staticClass:"xs muted"},[_vm._v("最多可上传3张图片，支持jpg、png格式，图片大小1M以内")])],1),_vm._v(" "),_c('el-form-item',[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.onSubmit}},[_vm._v("提交申请")])],1)],1)],1)],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/user/after_sales/apply_sale.vue?vue&type=template&id=55e350fe&scoped=true&

// EXTERNAL MODULE: ./components/public/upload.vue + 4 modules
var upload = __webpack_require__(155);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/user/after_sales/apply_sale.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ var apply_salevue_type_script_lang_js_ = ({
  components: {
    upload: upload["default"]
  },

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
  name: 'applySale',

  async asyncData({
    $get,
    $post,
    query
  }) {
    let goods = {};
    let reason = [];
    let res = await $get('after_sale/goodsInfo', {
      params: {
        order_id: query.order_id,
        item_id: query.item_id
      }
    });

    if (res.code == 1) {
      goods = res.data.goods;
      reason = res.data.reason;
    }

    return {
      reason,
      goods
    };
  },

  data() {
    return {
      applyType: '仅退款',
      form: {
        applyType: 0,
        reason: '',
        desc: ""
      },
      rules: {
        applyType: [{
          required: true,
          message: "请选择退款类型"
        }],
        reason: [{
          required: true,
          message: "请选择退款原因",
          triggle: 'blur'
        }]
      },
      fileList: []
    };
  },

  methods: {
    applyRadioChange(value) {
      value == '仅退款' ? this.form.applyType = 0 : this.form.applyType = 1;
    },

    onSubmit(e) {
      this.$refs['form'].validate(valid => {
        if (valid) {
          if (this.$route.query.afterSaleId) {
            this.applyAgainFun();
          } else {
            this.$applyAfterSale();
          }
        } else {
          return false;
        }
      });
    },

    onUploadChange(e) {
      let fileList = Object.assign([], this.fileList);
      fileList.push(e);
      this.fileList = fileList;
      console.log('onChange', e, ' fileList:', this.fileList);
    },

    uploadSuccess(e) {
      let fileList = Object.assign([], e);
      this.fileList = fileList;
      console.log('onSuccess', e, ' fileList:', this.fileList);
    },

    // 重新申请
    async $applyAgain() {
      let fileList = [];
      this.fileList.forEach(item => {
        fileList.push(item.response.data);
      });
      const data = {
        id: this.$route.query.afterSaleId,
        reason: this.form.reason,
        refund_type: this.form.applyType,
        remark: this.form.desc,
        img: fileList.length <= 0 ? '' : fileList[0].base_url
      };
      let res = await $post("after_sale/again", data);

      if (res.code == 1) {
        this.$message({
          message: '提交成功',
          type: 'success'
        });
        this.$router.push("/user/after_sales/apply_result?afterSaleId=" + res.data.after_sale_id);
      }
    },

    // 初次申请售后
    async $applyAfterSale() {
      let fileList = [];
      this.fileList.forEach(item => {
        fileList.push(item.response.data);
      });
      const data = {
        item_id: this.$route.query.item_id,
        order_id: this.$route.query.order_id,
        reason: this.form.reason,
        refund_type: this.form.applyType,
        remark: this.form.desc,
        // 目前只支持单个
        img: fileList.length <= 0 ? '' : fileList[0].base_url
      };
      let res = await this.$post("after_sale/add", data);

      if (res.code == 1) {
        this.$message({
          message: '提交成功',
          type: 'success'
        });
        this.$router.push("/user/after_sales/apply_result?afterSaleId=" + res.data.after_sale_id);
      }
    }

  }
});
// CONCATENATED MODULE: ./pages/user/after_sales/apply_sale.vue?vue&type=script&lang=js&
 /* harmony default export */ var after_sales_apply_salevue_type_script_lang_js_ = (apply_salevue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/user/after_sales/apply_sale.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(294)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  after_sales_apply_salevue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "55e350fe",
  "5a186c55"
  
)

/* harmony default export */ var apply_sale = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default})


/***/ })

};;
//# sourceMappingURL=apply_sale.js.map