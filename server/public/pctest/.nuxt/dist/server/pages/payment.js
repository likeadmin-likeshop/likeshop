exports.ids = [33,14,15];
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

/***/ 191:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/pay_success.3a82887.png";

/***/ }),

/***/ 211:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(253);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("3a1d5cf6", content, true, context)
};

/***/ }),

/***/ 251:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/pay_wait.2214e17.png";

/***/ }),

/***/ 252:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_vue_vue_type_style_index_0_id_e4887d24_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(211);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_vue_vue_type_style_index_0_id_e4887d24_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_vue_vue_type_style_index_0_id_e4887d24_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_vue_vue_type_style_index_0_id_e4887d24_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_vue_vue_type_style_index_0_id_e4887d24_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 253:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".payment[data-v-e4887d24]{margin:16px 0;padding:0 40px}.payment .payment-hd>img[data-v-e4887d24]{width:32px;height:32px}.payment .payment-hd .status[data-v-e4887d24]{font-size:24px}.payment .payment-con[data-v-e4887d24],.payment .payment-hd[data-v-e4887d24]{padding:32px 0;border-bottom:1px dashed #e5e5e5}.payment .payment-con .item[data-v-e4887d24]{align-items:flex-start}.payment .payment-footer[data-v-e4887d24]{padding:32px 0}.payment .payment-footer .pay-way[data-v-e4887d24]{width:200px;height:68px;cursor:pointer;margin-right:32px;border:1px dashed #e5e5e5}.payment .payment-footer .pay-way img[data-v-e4887d24]{width:30px;height:30px}.payment .payment-footer .btn[data-v-e4887d24]{width:134px;height:40px;border:1px solid #e5e5e5}.payment .el-dialog .pay-code[data-v-e4887d24]{width:270px;height:270px}.payment .el-dialog .pay-money[data-v-e4887d24]{font-size:18px;margin-top:24px;align-items:baseline}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 316:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/payment.vue?vue&type=template&id=e4887d24&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"payment bg-white"},[_vm._ssrNode("<div class=\"payment-hd row\" data-v-e4887d24>","</div>",[(_vm.order.pay_status == 0)?[_vm._ssrNode("<img"+(_vm._ssrAttr("src",__webpack_require__(251)))+" alt data-v-e4887d24> <div class=\"status ml8 mr16 bold\" data-v-e4887d24>"+_vm._ssrEscape("\n        "+_vm._s(_vm.getOrderStatus(_vm.order.order_status))+"\n      ")+"</div> "),(_vm.getCancelTime(_vm.order.order_cancel_time) > 0)?_vm._ssrNode("<div class=\"row\" data-v-e4887d24>","</div>",[_vm._ssrNode("\n        请在\n        "),_c('count-down',{style:({ color: '#FF2C3C' }),attrs:{"time":_vm.getCancelTime(_vm.order.order_cancel_time),"format":"hh时mm分ss秒"},on:{"finish":_vm.getOrder}}),_vm._ssrNode("\n        完成支付, 超时后将取消订单\n      ")],2):_vm._e()]:_vm._e(),_vm._ssrNode(" "+((_vm.order.pay_status == 1)?("<img"+(_vm._ssrAttr("src",__webpack_require__(191)))+" alt data-v-e4887d24> <div class=\"status ml8 mr16 bold\" data-v-e4887d24>支付成功</div>"):"<!---->"))],2),_vm._ssrNode(" <div class=\"payment-con\" data-v-e4887d24><div class=\"item row mb16\" data-v-e4887d24>"+_vm._ssrEscape("订单编号："+_vm._s(_vm.order.order_sn))+"</div> <div class=\"item row mb16\" data-v-e4887d24>\n      订单价格：<span class=\"primary\" data-v-e4887d24>"+_vm._ssrEscape("￥"+_vm._s(_vm.order.order_amount))+"</span></div> <div class=\"item row mb16\" data-v-e4887d24>\n      收货地址：\n      <div data-v-e4887d24>"+_vm._ssrEscape("\n        "+_vm._s(_vm.order.consignee)+" "+_vm._s(_vm.order.mobile)+"\n        ")+"<span class=\"ml16\" data-v-e4887d24>"+_vm._ssrEscape(_vm._s(_vm.order.delivery_address))+"</span></div></div> <div class=\"item row mb16\" data-v-e4887d24>\n      商品名称：\n      <div data-v-e4887d24>"+(_vm._ssrList((_vm.order.order_goods),function(item,index){return ("<div data-v-e4887d24><div class=\"row\" data-v-e4887d24>"+_vm._ssrEscape("\n            "+_vm._s(item.goods_name)+" /\n            ")+"<span class=\"ml8\" data-v-e4887d24>"+_vm._ssrEscape(" "+_vm._s(item.spec_value))+"</span></div></div>")}))+"</div></div></div> "),_vm._ssrNode("<div class=\"payment-footer\" data-v-e4887d24>","</div>",[(_vm.order.pay_status == 0 && _vm.order.order_status == 0)?[_vm._ssrNode("<div class=\"title lg bold\" data-v-e4887d24>请选择支付方式</div> <div class=\"row mt16\" data-v-e4887d24>"+(_vm._ssrList((_vm.payWayArr),function(item,index){return ("<div class=\"pay-way  row-center\" data-v-e4887d24><img"+(_vm._ssrAttr("src",item.icon))+" alt data-v-e4887d24> <span class=\"ml16 xxl\" data-v-e4887d24>"+_vm._ssrEscape(_vm._s(item.name))+"</span></div>")}))+"</div>")]:_c('nuxt-link',{staticClass:"btn row-center",attrs:{"to":"/user/order"}},[_vm._v("查看订单")])],2),_vm._ssrNode(" "),_c('el-dialog',{attrs:{"title":"微信支付","visible":_vm.showWxpay,"width":"700px","center":""},on:{"update:visible":function($event){_vm.showWxpay=$event},"close":_vm.clearTimer}},[_c('div',{staticClass:"column-center black"},[_c('img',{staticClass:"pay-code",attrs:{"src":_vm.payInfo.data,"alt":""}}),_vm._v(" "),_c('div',{staticClass:"mt8",staticStyle:{"font-size":"18px"}},[_vm._v("微信扫一扫，完成支付")]),_vm._v(" "),_c('div',{staticClass:"pay-money row"},[_c('span',[_vm._v("需支付金额：")]),_vm._v(" "),_c('span',{staticClass:"primary"},[_c('price-formate',{attrs:{"price":_vm.payInfo.order_amount,"subscript-size":18,"first-size":28,"second-size":28}})],1)])])])],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/payment.vue?vue&type=template&id=e4887d24&scoped=true&

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// EXTERNAL MODULE: ./utils/type.js
var type = __webpack_require__(143);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/payment.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ var paymentvue_type_script_lang_js_ = ({
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
    CountDown: countDown["default"]
  },

  async asyncData({
    query,
    $get
  }) {
    const {
      data
    } = await $get("order/detail", {
      params: {
        id: query.id
      }
    });
    return {
      order: data
    };
  },

  data() {
    return {
      showWxpay: false,
      showAlipay: false,
      payWayArr: [],
      payInfo: {},
      cancelTime: 0,
      alipayHtml: ""
    };
  },

  created() {
    this.id = this.$route.query.id;
    this.getPayway();
  },

  beforeDestroy() {
    clearInterval(this.timer);
  },

  methods: {
    async getPayway() {
      const {
        code,
        data
      } = await this.$get('payment/payway', {
        params: {
          from: 'order',
          order_id: this.id
        }
      });

      if (code == 1) {
        this.payWayArr = data.pay;
        if (!this.payWayArr.length) this.$message({
          message: "请联系管理员配置支付方式",
          type: "error"
        });
      }
    },

    async orderPay(payWay) {
      const {
        data,
        code,
        msg
      } = await this.$post("payment/pcPrepay", {
        order_id: this.id,
        pay_way: payWay,
        order_source: type["d" /* client */]
      });

      if (code == 1) {
        this.payInfo = data;
        this.showWxpay = true;
        this.createTimer();
      } else if (code == 20001) {
        let divForm = document.getElementsByTagName("divform");

        if (divForm.length) {
          document.body.removeChild(divForm[0]);
        }

        const div = document.createElement("divform");
        div.innerHTML = data.data; // data就是接口返回的form 表单字符串

        document.body.appendChild(div);
        document.forms[0].submit();
      } else if (code == 10001) {
        this.$message({
          message: msg,
          type: "success"
        });
        this.getOrder();
      }
    },

    clearTimer() {
      clearInterval(this.timer);
    },

    createTimer() {
      if (this.timer) clearInterval(this.timer);
      this.timer = setInterval(() => {
        this.getOrder();
      }, 2000);
    },

    async getOrder() {
      const {
        data,
        code,
        msg
      } = await this.$get("order/detail", {
        params: {
          id: this.id
        }
      });

      if (code == 1) {
        this.order = data;

        if (data.pay_status == 1) {
          clearInterval(this.timer);
          this.showWxpay = false;
        }
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
// CONCATENATED MODULE: ./pages/payment.vue?vue&type=script&lang=js&
 /* harmony default export */ var pages_paymentvue_type_script_lang_js_ = (paymentvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/payment.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(252)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  pages_paymentvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "e4887d24",
  "ece7bc8e"
  
)

/* harmony default export */ var payment = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {PriceFormate: __webpack_require__(131).default})


/***/ })

};;
//# sourceMappingURL=payment.js.map