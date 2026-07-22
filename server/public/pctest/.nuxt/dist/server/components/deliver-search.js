exports.ids = [8];
exports.modules = {

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

/***/ })

};;
//# sourceMappingURL=deliver-search.js.map