exports.ids = [22,15];
exports.modules = {

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

/***/ 216:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(267);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("37dd9b8a", content, true, context)
};

/***/ }),

/***/ 266:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_register_vue_vue_type_style_index_0_id_6237a356_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(216);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_register_vue_vue_type_style_index_0_id_6237a356_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_register_vue_vue_type_style_index_0_id_6237a356_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_register_vue_vue_type_style_index_0_id_6237a356_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_register_vue_vue_type_style_index_0_id_6237a356_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 267:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".register-container[data-v-6237a356]{flex:1}.register-container .register-box[data-v-6237a356]{padding-top:40px;padding-bottom:55px;width:880px;border:1px solid #e5e5e5}.register-container .register-box .register-title[data-v-6237a356]{font-size:24px}.register-container .register-box .form-box .register-form-item[data-v-6237a356]{margin-top:24px}.register-container .register-box .form-box .register-form-item .form-input[data-v-6237a356]{width:400px}.register-container .register-box .form-box .register-form-item .verify-code-img[data-v-6237a356]{width:100px;height:40px;margin-left:26px;background-color:red}.register-container .register-box .form-box .register-form-item .sms-btn[data-v-6237a356]{margin-left:16px;height:40px;width:120px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 321:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/account/register.vue?vue&type=template&id=6237a356&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"register-container column-center"},[_vm._ssrNode("<div class=\"register-box column-center bg-white\" data-v-6237a356>","</div>",[_vm._ssrNode("<div class=\"register-title\" data-v-6237a356>注册账号</div> "),_c('el-form',{staticClass:"form-box column"},[_c('div',{staticClass:"register-form-item"},[_c('el-input',{staticClass:"form-input",attrs:{"placeholder":"请输入手机号码"},model:{value:(_vm.telephone),callback:function ($$v) {_vm.telephone=$$v},expression:"telephone"}},[_c('i',{staticClass:"el-icon-user",staticStyle:{"font-size":"18px"},attrs:{"slot":"prepend"},slot:"prepend"})])],1),_vm._v(" "),(_vm.registerSetting)?_c('div',{staticClass:"register-form-item row"},[_c('el-input',{staticClass:"form-input",staticStyle:{"width":"264px"},attrs:{"placeholder":"短信验证码"},model:{value:(_vm.smsCode),callback:function ($$v) {_vm.smsCode=$$v},expression:"smsCode"}}),_vm._v(" "),_c('el-button',{staticClass:"sms-btn",on:{"click":_vm.sendSMSCode}},[(_vm.canSend)?_c('div',[_vm._v("获取验证码")]):_c('count-down',{attrs:{"time":60,"format":"ss秒","autoStart":""},on:{"finish":function($event){_vm.canSend = true}}})],1)],1):_vm._e(),_vm._v(" "),_c('div',{staticClass:"register-form-item"},[_c('el-input',{attrs:{"placeholder":"请输入密码 (数字与字母自由组合)","show-password":""},model:{value:(_vm.password),callback:function ($$v) {_vm.password=$$v},expression:"password"}},[_c('i',{staticClass:"el-icon-more-outline",staticStyle:{"font-size":"18px"},attrs:{"slot":"prepend"},slot:"prepend"})])],1),_vm._v(" "),_c('div',{staticClass:"register-form-item"},[_c('el-input',{attrs:{"placeholder":"再次输入密码","show-password":""},model:{value:(_vm.againPwd),callback:function ($$v) {_vm.againPwd=$$v},expression:"againPwd"}},[_c('i',{staticClass:"el-icon-key",staticStyle:{"font-size":"18px"},attrs:{"slot":"prepend"},slot:"prepend"})])],1),_vm._v(" "),_c('div',{staticClass:"row-between",staticStyle:{"margin-top":"36px"}},[_c('nuxt-link',{attrs:{"to":"/account/login"}},[_vm._v("已有账号，去登录")])],1),_vm._v(" "),_c('div',{staticClass:"mt10 column"},[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.registerFun}},[_vm._v("立即注册")])],1)])],2)])}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/account/register.vue?vue&type=template&id=6237a356&scoped=true&

// EXTERNAL MODULE: ./utils/type.js
var type = __webpack_require__(143);

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/account/register.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ var registervue_type_script_lang_js_ = ({
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

  layout: "default_layout",
  components: {
    CountDown: countDown["default"]
  },

  async asyncData({
    $get
  }) {
    let registerSetting = false;
    let res = await $get("index/config");

    if (res.code == 1) {
      registerSetting = res.data.register_setting ? true : false;
    }

    return {
      registerSetting
    };
  },

  data() {
    return {
      telephone: '',
      smsCode: '',
      password: '',
      againPwd: '',
      isAgree: false,
      canSend: true
    };
  },

  methods: {
    async sendSMSCode() {
      if (!this.canSend) {
        return;
      }

      let res = await this.$post("sms/send", {
        mobile: this.telephone,
        key: type["c" /* SMSType */].REGISTER
      });

      if (res.code == 1) {
        this.$message({
          message: res.msg,
          type: 'success'
        });
        this.canSend = false;
      }
    },

    async registerFun() {
      if (!this.telephone) {
        this.$message({
          message: '请输入手机号',
          type: 'error'
        });
        return;
      }

      if (this.registerSetting && !this.smsCode) {
        this.$message({
          message: "请输入短信验证码",
          type: 'error'
        });
        return;
      }

      if (!this.password) {
        this.$message({
          message: '请输入密码',
          type: 'error'
        });
        return;
      }

      if (this.password != this.againPwd) {
        this.$message({
          message: '两次密码输入不一致',
          type: 'error'
        });
        return;
      }

      let res = await this.$post('account/register', {
        mobile: this.telephone,
        password: this.password,
        code: this.smsCode,
        client: type["d" /* client */]
      });

      if (res.code == 1) {
        this.$message({
          message: '注册成功',
          type: 'success'
        });
        this.$router.push('/account/login');
      }
    }

  }
});
// CONCATENATED MODULE: ./pages/account/register.vue?vue&type=script&lang=js&
 /* harmony default export */ var account_registervue_type_script_lang_js_ = (registervue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/account/register.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(266)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  account_registervue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "6237a356",
  "3ab922bc"
  
)

/* harmony default export */ var register = __webpack_exports__["default"] = (component.exports);

/***/ })

};;
//# sourceMappingURL=register.js.map