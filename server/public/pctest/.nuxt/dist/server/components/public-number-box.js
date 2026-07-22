exports.ids = [16];
exports.modules = {

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

/***/ })

};;
//# sourceMappingURL=public-number-box.js.map