exports.ids = [11,17];
exports.modules = {

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

/***/ 159:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(178);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("7359e29e", content, true, context)
};

/***/ }),

/***/ 177:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_inputExpress_vue_vue_type_style_index_0_id_e2e8d3fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(159);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_inputExpress_vue_vue_type_style_index_0_id_e2e8d3fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_inputExpress_vue_vue_type_style_index_0_id_e2e8d3fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_inputExpress_vue_vue_type_style_index_0_id_e2e8d3fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_inputExpress_vue_vue_type_style_index_0_id_e2e8d3fe_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 178:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".input-express .dialog-footer[data-v-e2e8d3fe]{text-align:center}.input-express .dialog-footer .el-button[data-v-e2e8d3fe]{width:160px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 185:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/inputExpress.vue?vue&type=template&id=e2e8d3fe&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"input-express"},[_c('el-dialog',{attrs:{"title":"填写快递单号","visible":_vm.showDialog,"width":"926px"},on:{"update:visible":function($event){_vm.showDialog=$event}}},[_c('el-form',{ref:"inputForm",attrs:{"inline":"","label-width":"100px","model":_vm.form,"rules":_vm.rules}},[_c('el-form-item',{attrs:{"label":"物流公司：","prop":"business"}},[_c('el-input',{attrs:{"size":"small","placeholder":"请输入物流公司名称"},model:{value:(_vm.form.business),callback:function ($$v) {_vm.$set(_vm.form, "business", $$v)},expression:"form.business"}})],1),_vm._v(" "),_c('el-form-item',{attrs:{"label":"快递单号：","prop":"number"}},[_c('el-input',{attrs:{"size":"small","placeholder":"请输入快递单号"},model:{value:(_vm.form.number),callback:function ($$v) {_vm.$set(_vm.form, "number", $$v)},expression:"form.number"}})],1),_vm._v(" "),_c('el-form-item',{attrs:{"label":"备注说明：","prop":"desc"}},[_c('el-input',{staticStyle:{"width":"632px"},attrs:{"type":"textarea","placeholder":"请输入详细内容，选填","resize":"none","rows":"5"},model:{value:(_vm.form.desc),callback:function ($$v) {_vm.$set(_vm.form, "desc", $$v)},expression:"form.desc"}})],1),_vm._v(" "),_c('el-form-item',{attrs:{"label":"上传凭证：","prop":"upload"}},[_c('div',{staticClass:"xs muted"},[_vm._v("请上传快递单号凭证，选填")]),_vm._v(" "),_c('upload',{attrs:{"isSlot":"","file-list":_vm.fileList,"limit":3},on:{"success":_vm.uploadSuccess}},[_c('div',{staticClass:"column-center",staticStyle:{"height":"100%"}},[_c('i',{staticClass:"el-icon-camera xs",staticStyle:{"font-size":"24px"}}),_vm._v(" "),_c('div',{staticClass:"muted xs mt10",staticStyle:{"line-height":"0"}},[_vm._v("上传凭证")])])])],1)],1),_vm._v(" "),_c('div',{staticClass:"dialog-footer",attrs:{"slot":"footer"},slot:"footer"},[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.submitForm}},[_vm._v("确定")]),_vm._v(" "),_c('el-button',{on:{"click":function($event){_vm.showDialog = false}}},[_vm._v("取消")])],1)],1)],1)}
var staticRenderFns = []


// CONCATENATED MODULE: ./components/inputExpress.vue?vue&type=template&id=e2e8d3fe&scoped=true&

// EXTERNAL MODULE: ./components/public/upload.vue + 4 modules
var upload = __webpack_require__(155);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./components/inputExpress.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ var inputExpressvue_type_script_lang_js_ = ({
  components: {
    upload: upload["default"]
  },

  data() {
    return {
      showDialog: false,
      form: {
        // 物流公司
        business: '',
        // 快递单号
        number: '',
        // 详细内容
        desc: ''
      },
      rules: {
        business: [{
          required: true,
          message: '请输入物流公司'
        }],
        number: [{
          required: true,
          message: "请输入快递单号"
        }]
      },
      fileList: []
    };
  },

  props: {
    value: {
      type: Boolean,
      default: false
    },
    aid: {
      type: [String, Number],
      default: -1
    }
  },
  methods: {
    submitForm() {
      console.log(this.$refs);
      this.$refs['inputForm'].validate(async valid => {
        if (valid) {
          let fileList = [];
          this.fileList.forEach(item => {
            fileList.push(item.response.data);
          });
          let data = {
            id: this.aid,
            express_name: this.form.business,
            invoice_no: this.form.number,
            express_remark: this.form.desc,
            express_image: fileList.length <= 0 ? '' : fileList[0].base_url
          };
          let res = await this.$post("after_sale/express", data);

          if (res.code == 1) {
            this.$message({
              message: '提交成功',
              type: 'success'
            });
            this.showDialog = false;
            this.$emit("success");
          }
        } else {
          return false;
        }
      });
    },

    uploadSuccess(e) {
      let fileList = Object.assign([], e);
      this.fileList = fileList;
    }

  },
  watch: {
    value(val) {
      this.showDialog = val;
    },

    showDialog(val) {
      this.$emit("input", val);
    }

  }
});
// CONCATENATED MODULE: ./components/inputExpress.vue?vue&type=script&lang=js&
 /* harmony default export */ var components_inputExpressvue_type_script_lang_js_ = (inputExpressvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./components/inputExpress.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(177)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  components_inputExpressvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "e2e8d3fe",
  "6c64c81d"
  
)

/* harmony default export */ var inputExpress = __webpack_exports__["default"] = (component.exports);

/***/ })

};;
//# sourceMappingURL=input-express.js.map