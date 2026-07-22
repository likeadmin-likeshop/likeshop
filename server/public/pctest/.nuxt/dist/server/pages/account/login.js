exports.ids = [21,15];
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

/***/ 215:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(264);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("12069380", content, true, context)
};

/***/ }),

/***/ 263:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_style_index_0_id_61c3ab88_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(215);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_style_index_0_id_61c3ab88_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_style_index_0_id_61c3ab88_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_style_index_0_id_61c3ab88_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_style_index_0_id_61c3ab88_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 264:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_GET_URL_IMPORT___ = __webpack_require__(31);
var ___CSS_LOADER_URL_IMPORT_0___ = __webpack_require__(265);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
var ___CSS_LOADER_URL_REPLACEMENT_0___ = ___CSS_LOADER_GET_URL_IMPORT___(___CSS_LOADER_URL_IMPORT_0___);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".login[data-v-61c3ab88]{background-image:url(" + ___CSS_LOADER_URL_REPLACEMENT_0___ + ");background-size:cover;background-repeat:no-repeat;background-position:50%;height:640px;min-width:1180px}.login .login-container[data-v-61c3ab88]{margin:0 auto;width:1180px;height:100%;position:relative}.login .login-container .login-float-form-wrap[data-v-61c3ab88]{position:absolute;top:140px;right:60px;width:400px}.login .login-container .login-float-form-wrap .login-box[data-v-61c3ab88]{background-color:#fff;width:400px;min-height:400px;display:flex;flex-direction:column;justify-content:space-between}.login .login-container .login-float-form-wrap .login-box .login-header-box[data-v-61c3ab88]{padding-top:20px}.login .login-container .login-float-form-wrap .login-box .login-header-box .header-tabs .header-tab[data-v-61c3ab88]{width:160px;height:35px;display:flex;flex-direction:column;align-items:center;cursor:pointer}.login .login-container .login-float-form-wrap .login-box .login-header-box .header-tabs .active-tab[data-v-61c3ab88]{color:#ff2c3c;text-align:center}.login .login-container .login-float-form-wrap .login-box .login-header-box .header-tabs .active-tab[data-v-61c3ab88]:after{content:\"\";height:2px;width:72px;margin-top:8px;background-color:#ff2c3c}.login .login-container .login-float-form-wrap .login-box .login-header-box .login-form-box[data-v-61c3ab88]{padding:0 30px}.login .login-container .login-float-form-wrap .login-box .login-header-box .login-form-box .login-form-item[data-v-61c3ab88]{margin-top:24px}.login .login-container .login-float-form-wrap .login-box .login-header-box .login-form-box .login-form-item .input-phone-num[data-v-61c3ab88]{width:340px}.login .login-container .login-float-form-wrap .login-box .login-header-box .login-form-box .login-form-item .verify-code-img[data-v-61c3ab88]{width:100px;height:40px;margin-left:20px;background-color:red}.login .login-container .login-float-form-wrap .login-box .login-header-box .login-form-box .login-form-item .sms-btn[data-v-61c3ab88]{margin-left:20px;height:40px}.login .login-container .login-float-form-wrap .login-box .login-header-box .option-box[data-v-61c3ab88]{padding:0 30px;margin-top:60px}.login .login-container .login-float-form-wrap .login-box .login-header-box .option-box[data-v-61c3ab88]  .el-checkbox{color:#888}.login .login-container .login-float-form-wrap .login-box .login-footer-box[data-v-61c3ab88]{height:50px;background-color:#f2f2f2;padding:15px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 265:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/login_bg.3a68329.png";

/***/ }),

/***/ 320:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/account/login.vue?vue&type=template&id=61c3ab88&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"login"},[_vm._ssrNode("<div class=\"login-container\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-float-form-wrap\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-box\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-header-box\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"header-tabs row-center\" data-v-61c3ab88><div"+(_vm._ssrClass("header-tab xxl",{'active-tab': _vm.loginStatus == 0}))+" data-v-61c3ab88>\n              验证码登录\n            </div> <div"+(_vm._ssrClass("header-tab xxl",{'active-tab': _vm.loginStatus == 1}))+" data-v-61c3ab88>\n              账号密码登录\n            </div></div> "),_vm._ssrNode("<div"+(_vm._ssrStyle(null,null, { display: (_vm.loginStatus == 0) ? '' : 'none' }))+" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-form-box\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-form-item\" data-v-61c3ab88>","</div>",[_c('el-input',{staticClass:"input-phone-num",attrs:{"placeholder":"请输入手机号码"},model:{value:(_vm.telephone),callback:function ($$v) {_vm.telephone=$$v},expression:"telephone"}},[_c('el-select',{staticStyle:{"width":"100px"},attrs:{"slot":"prepend","placeholder":"请选择"},slot:"prepend",model:{value:(_vm.selectNumberType),callback:function ($$v) {_vm.selectNumberType=$$v},expression:"selectNumberType"}},[_c('el-option',{attrs:{"label":"中国+86","value":"1"}})],1)],1)],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"login-form-item row\" data-v-61c3ab88>","</div>",[_c('el-input',{staticStyle:{"width":"210px"},attrs:{"placeholder":"短信验证码"},model:{value:(_vm.smsCode),callback:function ($$v) {_vm.smsCode=$$v},expression:"smsCode"}}),_vm._ssrNode(" "),_c('el-button',{staticClass:"sms-btn",on:{"click":_vm.sendSMSCode}},[(_vm.canSend)?_c('div',[_vm._v("获取验证码")]):_c('count-down',{attrs:{"time":60,"format":"ss秒","autoStart":true},on:{"finish":function($event){_vm.canSend = true}}})],1)],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"option-box column\" style=\"margin-top: 30px\" data-v-61c3ab88>","</div>",[_c('el-checkbox',{staticClass:"muted",model:{value:(_vm.isRemember),callback:function ($$v) {_vm.isRemember=$$v},expression:"isRemember"}},[_vm._v("记住账号")]),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"mt10 column\" data-v-61c3ab88>","</div>",[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.smsLogin}},[_vm._v("立即登录")])],1)],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div"+(_vm._ssrStyle(null,null, { display: (_vm.loginStatus == 1) ? '' : 'none' }))+" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-form-box\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"login-form-item\" data-v-61c3ab88>","</div>",[_c('el-input',{staticClass:"input-phone-num",attrs:{"placeholder":"请输入账号/手机号码"},model:{value:(_vm.account),callback:function ($$v) {_vm.account=$$v},expression:"account"}},[_c('i',{staticClass:"el-icon-user",staticStyle:{"font-size":"18px"},attrs:{"slot":"prepend"},slot:"prepend"})])],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"login-form-item row\" data-v-61c3ab88>","</div>",[_c('el-input',{attrs:{"placeholder":"请输入密码","show-password":""},model:{value:(_vm.password),callback:function ($$v) {_vm.password=$$v},expression:"password"}},[_c('i',{staticClass:"el-icon-more-outline",staticStyle:{"font-size":"18px"},attrs:{"slot":"prepend"},slot:"prepend"})])],1)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"option-box column\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"row-between\" data-v-61c3ab88>","</div>",[_c('el-checkbox',{staticClass:"muted",model:{value:(_vm.isRemember),callback:function ($$v) {_vm.isRemember=$$v},expression:"isRemember"}},[_vm._v("记住账号")]),_vm._ssrNode(" "),_c('nuxt-link',{staticClass:"muted",attrs:{"to":"/account/forget_pwd"}},[_vm._v("忘记密码？")])],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"mt10 column\" data-v-61c3ab88>","</div>",[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.accountLogin}},[_vm._v("立即登录")])],1)],2)],2)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"login-footer-box row-between\" data-v-61c3ab88>","</div>",[_vm._ssrNode("<div class=\"row\" data-v-61c3ab88></div> "),_c('nuxt-link',{staticClass:"primary",attrs:{"to":"/account/register"}},[_vm._v("\n            注册账号\n          ")])],2)],2)])])])}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/account/login.vue?vue&type=template&id=61c3ab88&scoped=true&

// EXTERNAL MODULE: ./utils/type.js
var type = __webpack_require__(143);

// EXTERNAL MODULE: external "js-cookie"
var external_js_cookie_ = __webpack_require__(10);
var external_js_cookie_default = /*#__PURE__*/__webpack_require__.n(external_js_cookie_);

// EXTERNAL MODULE: external "vuex"
var external_vuex_ = __webpack_require__(2);

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/account/login.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ var loginvue_type_script_lang_js_ = ({
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
    $get,
    $post
  }) {
    return {
      userInfo: {}
    };
  },

  data() {
    return {
      // 选择电话类型
      selectNumberType: '中国+86',
      // 账号
      account: '',
      // 密码
      password: '',
      // 电话号码
      telephone: '',
      // 图形验证码
      verifyCode: '',
      // 短信验证码
      smsCode: '',
      isRemember: true,
      // 短信登陆或账号登陆 0 ==》 短信 1 ==》账号
      loginStatus: type["e" /* loginType */].SMS,
      canSend: true
    };
  },

  created() {},

  mounted() {
    let jsonPaser = JSON.parse(localStorage.getItem("ACCOUNT"));
    let telJson = JSON.parse(localStorage.getItem("TEL"));

    if (jsonPaser && jsonPaser.account) {
      this.account = jsonPaser.account;
    }

    if (telJson && telJson.telephone) {
      this.telephone = telJson.telephone;
    }
  },

  methods: {
    changeLoginType(type) {
      this.loginStatus = type;
      this.telephone = '';
      this.verifyCode = '';
      this.smsCode = '';
      let jsonPaser = JSON.parse(localStorage.getItem("ACCOUNT"));
      let telJson = JSON.parse(localStorage.getItem("TEL"));

      if (jsonPaser && jsonPaser.account) {
        this.account = jsonPaser.account;
      }

      if (telJson && telJson.telephone) {
        this.telephone = telJson.telephone;
      }
    },

    async sendSMSCode() {
      if (!this.canSend) {
        return;
      }

      let res = await this.$post("sms/send", {
        mobile: this.telephone,
        key: type["c" /* SMSType */].LOGIN,
        client: type["d" /* client */]
      });

      if (res.code == 1) {
        this.$message({
          message: res.msg,
          type: 'success'
        });
        this.canSend = false;
      }
    },

    async smsLogin() {
      let res = await this.$post('account/smsLogin', {
        account: this.telephone,
        code: this.smsCode,
        client: type["d" /* client */]
      });

      if (res.code == 1) {
        const token = res.data.token;
        external_js_cookie_default.a.set("token", token, {
          expires: 60
        });
        this.setToken(token);
        this.$router.replace({
          path: external_js_cookie_default.a.get("back_url") || '/'
        });
        external_js_cookie_default.a.remove('back_url');
        this.getPublicData();

        if (this.isRemember) {
          localStorage.setItem('TEL', JSON.stringify({
            telephone: this.telephone
          }));
        } else {
          localStorage.setItem('TEL', JSON.stringify({
            telephone: ''
          }));
        }
      }
    },

    async accountLogin() {
      let res = await this.$post('account/login', {
        account: this.account,
        password: this.password,
        client: type["d" /* client */]
      });

      if (res.code == 1) {
        const token = res.data.token;
        external_js_cookie_default.a.set('token', token, {
          expires: 60
        });
        this.setToken(token);
        this.$router.replace({
          path: external_js_cookie_default.a.get('back_url') || '/'
        });
        external_js_cookie_default.a.remove('back_url');
        this.getPublicData();

        if (this.isRemember) {
          localStorage.setItem('ACCOUNT', JSON.stringify({
            account: this.account
          }));
        } else {
          localStorage.setItem('ACCOUNT', JSON.stringify({
            account: ''
          }));
        }
      }
    },

    ...Object(external_vuex_["mapMutations"])(['setToken']),
    ...Object(external_vuex_["mapActions"])(['getPublicData'])
  }
});
// CONCATENATED MODULE: ./pages/account/login.vue?vue&type=script&lang=js&
 /* harmony default export */ var account_loginvue_type_script_lang_js_ = (loginvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/account/login.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(263)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  account_loginvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "61c3ab88",
  "1b76200c"
  
)

/* harmony default export */ var login = __webpack_exports__["default"] = (component.exports);

/***/ })

};;
//# sourceMappingURL=login.js.map