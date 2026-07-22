exports.ids = [47,15];
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

/***/ 224:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(287);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("98ca9702", content, true, context)
};

/***/ }),

/***/ 286:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(224);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 287:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".user-profile{padding:10px}.user-profile .user-header{padding:10px 5px;border-bottom:1px solid #e5e5e5}.user-profile .user-container{margin-top:35px}.user-profile .user-container .user-form-item{padding-left:13px;margin-top:24px}.user-profile .user-container .user-form-item .user-form-label{width:60px;text-align:left;margin-right:24px}.user-profile .user-container .user-form-item .user-avatar-upload .avatar-uploader:hover .avatar .mask{display:flex}.user-profile .user-container .user-form-item .user-avatar-upload .avatar-uploader:hover .avatar:after{opacity:1}.user-profile .user-container .user-form-item .user-avatar-upload .avatar-uploader .avatar{position:relative}.user-profile .user-container .user-form-item .user-avatar-upload .avatar-uploader .avatar .mask{display:none;position:absolute}.user-profile .user-container .user-form-item .user-avatar-upload .avatar-uploader .avatar:after{content:\"更换头像\";position:absolute;transition:opacity .3s ease;opacity:0;width:100%;height:64px;left:0;top:0;border-radius:60px;background-color:rgba(0,0,0,.3);color:#fff;display:flex;flex-direction:row;justify-content:center;align-items:center;font-size:12px}.user-profile .user-container .user-form-item .user-input{width:240px}.user-profile .user-container .user-form-item .el-radio__input.is-checked+.el-radio__label{color:#007aff}.user-profile .user-container .user-form-item .el-input__inner:focus{border-color:#007aff}.user-profile .user-container .user-form-item .el-radio__input.is-checked .el-radio__inner{border-color:#007aff;background:#007aff}.user-profile .user-container .user-form-item .el-radio__inner:hover{border-color:#007aff}.user-profile .user-container .primary-btn{background-color:#ff2c3c;height:32px;width:100px;margin-top:32px;border:none;cursor:pointer}.user-profile .user-container .primary-btn:focus{border:none;outline:none}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 330:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/user/profile.vue?vue&type=template&id=7df05dc7&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"user-profile"},[_vm._ssrNode("<div class=\"user-header lg\">\n    个人资料\n  </div> "),_vm._ssrNode("<div class=\"user-container\">","</div>",[_vm._ssrNode("<div class=\"user-form-item row\">","</div>",[_vm._ssrNode("<label class=\"user-form-label nr\">头像</label> "),_vm._ssrNode("<div class=\"user-avatar-upload\">","</div>",[_c('el-upload',{staticClass:"avatar-uploader",attrs:{"action":_vm.action,"show-file-list":false,"file-list":_vm.fileList,"on-success":_vm.uploadFileSuccess}},[_c('div',{staticClass:"avatar"},[_c('el-image',{staticStyle:{"width":"64px","height":"64px","border-radius":"60px"},attrs:{"src":_vm.avatar}}),_vm._v(" "),_c('div',{staticClass:"mask white"})],1)])],1)],2),_vm._ssrNode(" <div class=\"user-form-item row\"><label class=\"user-form-label nr\">用户ID</label> <div class=\"normal nr\">"+_vm._ssrEscape(_vm._s(_vm.sn))+"</div></div> "),_vm._ssrNode("<div class=\"user-form-item row\">","</div>",[_vm._ssrNode("<label class=\"user-form-label nr\">昵称</label> "),_c('el-input',{staticClass:"user-input",attrs:{"suffix-icon":"el-icon-edit"},model:{value:(_vm.nickName),callback:function ($$v) {_vm.nickName=$$v},expression:"nickName"}})],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"user-form-item row\">","</div>",[_vm._ssrNode("<label class=\"user-form-label nr\">性别</label> "),_c('el-radio-group',{model:{value:(_vm.radio),callback:function ($$v) {_vm.radio=$$v},expression:"radio"}},[_c('el-radio',{attrs:{"label":1}},[_vm._v("男")]),_vm._v(" "),_c('el-radio',{attrs:{"label":2}},[_vm._v("女")])],1)],2),_vm._ssrNode(" <div class=\"user-form-item row\"><label class=\"user-form-label nr\">手机号</label> <div class=\"normal nr\">"+_vm._ssrEscape(_vm._s(_vm.mobile))+"</div> <div style=\"color: #6699CC;margin-left: 13px;cursor: pointer;\">修改号码</div></div> <div class=\"user-form-item row\"><label class=\"user-form-label nr\">注册时间</label> <div class=\"normal nr\">"+_vm._ssrEscape(_vm._s(_vm.createTime))+"</div></div> <div class=\"user-form-item row\"><label class=\"user-form-label nr\">登录密码</label> <div class=\"nr\" style=\"color: #6699CC;cursor: pointer;\">修改密码</div></div> <button class=\"primary-btn row-center white\">\n      保存\n    </button>")],2),_vm._ssrNode(" "),_c('el-dialog',{attrs:{"title":_vm.mobile ? '更换手机号': '绑定手机',"visible":_vm.showChangeNumber,"width":"40%"},on:{"update:visible":function($event){_vm.showChangeNumber=$event}}},[_c('div',[_c('el-form',{staticStyle:{"width":"50%","margin":"0 auto"}},[_c('el-form-item',[_c('el-input',{attrs:{"placeholder":"请输入新的手机号码"},model:{value:(_vm.telephone),callback:function ($$v) {_vm.telephone=$$v},expression:"telephone"}})],1),_vm._v(" "),_c('el-form-item',[_c('div',{staticClass:"row"},[_c('el-input',{attrs:{"placeholder":"短信验证码"},model:{value:(_vm.verifyCode),callback:function ($$v) {_vm.verifyCode=$$v},expression:"verifyCode"}}),_vm._v(" "),_c('el-button',{staticStyle:{"margin-left":"14px"},on:{"click":_vm.sndSmsToPhone}},[(_vm.canSendNumber)?_c('div',[_vm._v("获取验证码")]):_c('count-down',{attrs:{"time":60,"format":"ss秒","autoStart":""},on:{"finish":function($event){_vm.canSendNumber = true}}})],1)],1)])],1)],1),_vm._v(" "),_c('div',{attrs:{"slot":"footer"},slot:"footer"},[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.changeUserMobile}},[_vm._v("确认")]),_vm._v(" "),_c('el-button',{on:{"click":_vm.closeChangeNumber}},[_vm._v("取消")])],1)]),_vm._ssrNode(" "),_c('el-dialog',{attrs:{"title":"设置登录密码","visible":_vm.showPwdPop,"width":"40%"},on:{"update:visible":function($event){_vm.showPwdPop=$event}}},[_c('div',[_c('el-form',{staticStyle:{"width":"50%","margin":"0 auto"}},[_c('el-form-item',[_c('el-input',{attrs:{"placeholder":"请输入手机号码","disabled":""},model:{value:(_vm.mobile),callback:function ($$v) {_vm.mobile=$$v},expression:"mobile"}})],1),_vm._v(" "),_c('el-form-item',[_c('div',{staticClass:"row"},[_c('el-input',{attrs:{"placeholder":"短信验证码"},model:{value:(_vm.verifyCode),callback:function ($$v) {_vm.verifyCode=$$v},expression:"verifyCode"}}),_vm._v(" "),_c('el-button',{staticStyle:{"margin-left":"14px"},on:{"click":_vm.sndSmsToPhone}},[(_vm.canSendPwd)?_c('div',[_vm._v("获取验证码")]):_c('count-down',{attrs:{"time":60,"format":"ss秒","autoStart":""},on:{"finish":function($event){_vm.canSendPwd = true}}})],1)],1)]),_vm._v(" "),_c('el-form-item',[_c('el-input',{attrs:{"type":"password","placeholder":"请输入密码 (数字与字母自由组合)"},model:{value:(_vm.pwd),callback:function ($$v) {_vm.pwd=$$v},expression:"pwd"}})],1),_vm._v(" "),_c('el-form-item',[_c('el-input',{attrs:{"type":"password","placeholder":"再次输入密码"},model:{value:(_vm.againPwd),callback:function ($$v) {_vm.againPwd=$$v},expression:"againPwd"}})],1)],1)],1),_vm._v(" "),_c('div',{attrs:{"slot":"footer"},slot:"footer"},[_c('el-button',{attrs:{"type":"primary"},on:{"click":_vm.setPassWord}},[_vm._v("确认")]),_vm._v(" "),_c('el-button',{on:{"click":_vm.closePwdPop}},[_vm._v("取消")])],1)])],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/user/profile.vue?vue&type=template&id=7df05dc7&

// EXTERNAL MODULE: ./utils/type.js
var type = __webpack_require__(143);

// EXTERNAL MODULE: ./components/public/countDown.vue + 5 modules
var countDown = __webpack_require__(138);

// EXTERNAL MODULE: external "js-cookie"
var external_js_cookie_ = __webpack_require__(10);
var external_js_cookie_default = /*#__PURE__*/__webpack_require__.n(external_js_cookie_);

// EXTERNAL MODULE: external "vuex"
var external_vuex_ = __webpack_require__(2);

// EXTERNAL MODULE: ./config.js
var config = __webpack_require__(32);

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/user/profile.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//





/* harmony default export */ var profilevue_type_script_lang_js_ = ({
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
  components: {
    CountDown: countDown["default"]
  },

  async asyncData({
    $get,
    $post
  }) {
    let avatar = "";
    let nickName = "";
    let mobile = "";
    let sex = 0;
    let radio = 0;
    let createTime = '';
    let sn = '';
    let res = await $get("user/info");

    if (res.code == 1) {
      avatar = res.data.avatar;
      nickName = res.data.nickname;
      mobile = res.data.mobile;
      sex = res.data.sex;
      radio = sex;
      createTime = res.data.create_time;
      sn = res.data.sn;
    }

    return {
      avatar,
      nickName,
      mobile,
      sex,
      radio,
      createTime,
      sn
    };
  },

  data() {
    return {
      action: config["a" /* default */].baseUrl + 'file/formimage',
      nickName: '',
      radio: 1,
      showChangeNumber: false,
      showPwdPop: false,
      telephone: '',
      verifyCode: '',
      pwd: '',
      againPwd: '',
      smsType: type["c" /* SMSType */].CHANGE_MOBILE,
      canSendNumber: true,
      canSendPwd: true,
      fileList: []
    };
  },

  methods: { ...Object(external_vuex_["mapActions"])(['getPublicData']),

    async saveUserInfo() {
      let res = await this.$post("pc/changeUserInfo", {
        sex: this.radio,
        nickname: this.nickName
      });

      if (res.code == 1) {
        this.$message({
          message: res.msg,
          type: 'success'
        });
        this.getPublicData();
      }
    },

    closeChangeNumber() {
      this.telephone = '';
      this.verifyCode = '';
      this.showChangeNumber = false;
    },

    closePwdPop() {
      this.telephone = '';
      this.verifyCode = '';
      this.showPwdPop = false;
    },

    openChangeNumber() {
      this.showChangeNumber = true;
      this.smsType = this.mobile ? type["c" /* SMSType */].CHANGE_MOBILE : type["c" /* SMSType */].BIND;
    },

    openChangePwdPop() {
      this.showPwdPop = true;
      this.smsType = type["c" /* SMSType */].FINDPWD;
    },

    async sndSmsToPhone() {
      if ((this.smsType == type["c" /* SMSType */].CHANGE_MOBILE || this.smsType == type["c" /* SMSType */].BIND) && !this.canSendNumber) {
        return;
      } else if (this.smsType == type["c" /* SMSType */].FINDPWD && !this.canSendPwd) {
        return;
      }

      if (this.smsType == type["c" /* SMSType */].CHANGE_MOBILE && !this.telephone) {
        this.$message({
          message: '请输入手机号',
          type: 'error'
        });
        return;
      }

      let res = await this.$post("sms/send", {
        mobile: this.smsType == type["c" /* SMSType */].FINDPWD ? this.mobile : this.telephone,
        key: this.smsType
      });

      if (res.code == 1) {
        this.smsType == type["c" /* SMSType */].CHANGE_MOBILE ? this.canSendNumber = false : this.canSendPwd = false;
        this.$message({
          message: '发送成功',
          type: 'success'
        });
      }
    },

    async changeUserMobile() {
      if (!this.telephone) {
        this.$message({
          message: '请输入新的手机号码',
          type: 'error'
        });
        return;
      }

      if (!this.verifyCode) {
        this.$message({
          message: '请输入验证码',
          type: 'error'
        });
        return;
      }

      let res = await this.$post("user/changeMobile", {
        mobile: this.mobile,
        new_mobile: this.telephone,
        code: this.verifyCode,
        action: this.mobile ? 'change' : '',
        client: type["d" /* client */]
      });

      if (res.code == 1) {
        this.showChangeNumber = false;
        this.$message.success(res.msg);
        this.getPublicData();
      }
    },

    async setPassWord() {
      if (!this.verifyCode) {
        this.$message({
          message: '请输入验证码',
          type: 'error'
        });
        return;
      }

      if (!this.pwd) {
        this.$message({
          message: '请输入密码',
          type: 'error'
        });
        return;
      }

      if (!this.againPwd) {
        this.$message({
          message: '请输入确认密码',
          type: 'error'
        });
        return;
      }

      if (this.pwd != this.againPwd) {
        this.$message({
          message: '两次密码输入不一致',
          type: 'error'
        });
        return;
      }

      let res = await this.$post("login_password/forget", {
        mobile: this.mobile,
        code: this.verifyCode,
        password: this.pwd,
        repassword: this.againPwd,
        client: type["d" /* client */]
      });

      if (res.code == 1) {
        this.$message({
          message: res.msg,
          type: 'success'
        });
        this.showPwdPop = false;
        const token = res.data.token;
        external_js_cookie_default.a.set('token', token, {
          expires: 60
        });
      }
    },

    async uploadFileSuccess(res, fileList) {
      let respond = await this.$post('user/setInfo', {
        field: type["b" /* FieldType */].AVATAR,
        value: res.data.base_url
      });

      if (respond.code == 1) {
        this.$message({
          message: respond.msg,
          type: 'success'
        });
        let userRes = await this.$get("user/info");

        if (userRes.code == 1) {
          this.avatar = userRes.data.avatar;
          this.nickName = userRes.data.nickname;
          this.mobile = userRes.data.mobile;
          this.sex = userRes.data.sex;
          this.radio = this.sex;
          this.createTime = userRes.data.create_time;
        }
      }
    }

  }
});
// CONCATENATED MODULE: ./pages/user/profile.vue?vue&type=script&lang=js&
 /* harmony default export */ var user_profilevue_type_script_lang_js_ = (profilevue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/user/profile.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(286)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  user_profilevue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  null,
  "35eb5842"
  
)

/* harmony default export */ var profile = __webpack_exports__["default"] = (component.exports);

/***/ })

};;
//# sourceMappingURL=profile.js.map