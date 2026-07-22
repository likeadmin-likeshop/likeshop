exports.ids = [31,2];
exports.modules = {

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

/***/ 157:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "img/news_null.856b3f3.png";

/***/ }),

/***/ 210:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(250);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("00ea9cd2", content, true, context)
};

/***/ }),

/***/ 249:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_id_091e30b1_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(210);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_id_091e30b1_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_id_091e30b1_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_id_091e30b1_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_id_091e30b1_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 250:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".help-center-container .help-center-banner[data-v-091e30b1]{margin-top:16px}.help-center-container .help-center-box[data-v-091e30b1]{margin-top:16px;display:flex;flex-direction:row}.help-center-container .help-center-box .help-center-aside[data-v-091e30b1]{width:160px;min-height:635px;padding-top:20px;padding-bottom:20px}.help-center-container .help-center-box .help-center-aside .nav li[data-v-091e30b1]{padding:10px 32px;cursor:pointer}.help-center-container .help-center-box .help-center-aside .nav .active-item[data-v-091e30b1]{color:#ff2c3c}.help-center-container .help-center-box .article-lists-container[data-v-091e30b1]{width:1004px;display:flex;flex-direction:column;justify-content:space-between}.help-center-container .help-center-box .article-lists-container .article-item[data-v-091e30b1]{padding:15px 20px;border-bottom:1px solid #e5e5e5;cursor:pointer}.help-center-container .help-center-box .article-lists-container .article-item .article-name[data-v-091e30b1]{margin-bottom:11px;margin-top:13px;max-width:720px}.help-center-container .help-center-box .article-lists-container .help-center-pagination[data-v-091e30b1]{padding-top:38px;margin-bottom:30px}.help-center-container .help-center-box .article-lists-container .data-null[data-v-091e30b1]{padding-top:150px}[data-v-091e30b1] .el-pagination.is-background .btn-next,[data-v-091e30b1] .el-pagination.is-background .btn-prev,[data-v-091e30b1] .el-pagination.is-background .el-pager li{background:#fff;padding:0 10px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 315:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/news_list/index.vue?vue&type=template&id=091e30b1&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"help-center-container"},[_vm._ssrNode("<div class=\"help-center-banner\" data-v-091e30b1>","</div>",[_c('client-only',[_c('swiper',{ref:"mySwiper",attrs:{"options":_vm.swiperOptions}},_vm._l((_vm.bannerList),function(item,index){return _c('swiper-slide',{key:index,staticClass:"swiper-item"},[_c('ad-item',{attrs:{"item":item}})],1)}),1)],1)],1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"help-center-box\" data-v-091e30b1>","</div>",[_vm._ssrNode("<div class=\"help-center-aside bg-white\" data-v-091e30b1><ul class=\"nav\" data-v-091e30b1><li"+(_vm._ssrClass("row",{'active-item': _vm.currentId <= 0}))+" data-v-091e30b1>全部</li> "+(_vm._ssrList((_vm.categoryList),function(item){return ("<li"+(_vm._ssrClass("row",{'active-item': item.id == _vm.currentId}))+" data-v-091e30b1>"+_vm._ssrEscape(_vm._s(item.name))+"</li>")}))+"</ul></div> "),_vm._ssrNode("<div class=\"article-lists-container ml16 bg-white\" data-v-091e30b1>","</div>",[_vm._ssrNode("<div"+(_vm._ssrStyle(null,null, { display: (!_vm.dataNull) ? '' : 'none' }))+" data-v-091e30b1>","</div>",[_vm._ssrNode("<div data-v-091e30b1>","</div>",_vm._l((_vm.articleList),function(item){return _c('nuxt-link',{key:item.id,staticClass:"article-item row-between bg-white",attrs:{"to":'/news_list/news_list_detail?id=' + item.id}},[_c('div',[_c('div',{staticClass:"lg article-name line2"},[_vm._v(_vm._s(item.title))]),_vm._v(" "),_c('div',{staticClass:"lighter"},[_vm._v(_vm._s(item.synopsis))]),_vm._v(" "),_c('div',{staticClass:"row",staticStyle:{"margin-top":"56px"}},[_c('div',{staticClass:"sm muted"},[_vm._v("发布时间："+_vm._s(item.create_time))]),_vm._v(" "),_c('div',{staticClass:"row ml16"},[_c('i',{staticClass:"el-icon-view muted"}),_vm._v(" "),_c('div',{staticClass:"muted",staticStyle:{"margin-left":"3px"}},[_vm._v(_vm._s(item.visit)+" 人浏览")])])])]),_vm._v(" "),_c('el-image',{staticStyle:{"width":"200px","height":"150px","border-radius":"6px"},attrs:{"fit":"cover","src":item.image}})],1)}),1),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"help-center-pagination row-center\" data-v-091e30b1>","</div>",[_c('el-pagination',{attrs:{"background":"","hide-on-single-page":"","layout":"prev, pager, next","total":_vm.count,"prev-text":"上一页","next-text":"下一页","page-size":10},on:{"current-change":_vm.changePage}})],1)],2),_vm._ssrNode(" <div class=\"data-null column-center\""+(_vm._ssrStyle(null,null, { display: (_vm.dataNull) ? '' : 'none' }))+" data-v-091e30b1><img"+(_vm._ssrAttr("src",__webpack_require__(157)))+" style=\"width: 150px;height: 150px;\" data-v-091e30b1> <div class=\"xs muted\" data-v-091e30b1>\n          暂无消息记录～\n        </div></div>")],2)],2)],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/news_list/index.vue?vue&type=template&id=091e30b1&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/news_list/index.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var news_listvue_type_script_lang_js_ = ({
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

  async asyncData({
    $get,
    $post
  }) {
    let categoryList = [];
    let currentId = 0;
    let articleList = [];
    let count = 0;
    let dataNull = true;
    const banner = $get("ad/lists", {
      params: {
        pid: 8,
        client: 2
      }
    });
    let res = await $get("article/category");
    const {
      data: bannerList
    } = await banner;

    if (res.code == 1) {
      categoryList = res.data;
      currentId = 0;
      let listsRes = await $get("article/lists", {
        params: {
          id: currentId,
          page_size: 10
        }
      });

      if (listsRes.code == 1) {
        articleList = listsRes.data.list;
        count = listsRes.data.count;

        if (count <= 0) {
          dataNull = true;
        } else {
          dataNull = false;
        }
      }
    }

    return {
      categoryList,
      articleList,
      count,
      currentId,
      bannerList,
      dataNull
    };
  },

  data() {
    return {
      categoryList: [],
      articleList: [],
      currentId: -1,
      count: 0,
      swiperOptions: {
        width: 1180
      }
    };
  },

  mounted() {
    console.log(this.articleList, 'articleList');
  },

  methods: {
    async changePage(current) {
      let res = await this.$get("article/lists", {
        params: {
          id: this.currentId,
          page_no: current,
          page_size: 10
        }
      });

      if (res.code == 1) {
        this.articleList = res.data.list;

        if (this.articleList.length <= 0) {
          dataNull = true;
        } else {
          dataNull = false;
        }
      }
    },

    changeList(id) {
      this.currentId = id;
      this.changePage(1);
    }

  }
});
// CONCATENATED MODULE: ./pages/news_list/index.vue?vue&type=script&lang=js&
 /* harmony default export */ var pages_news_listvue_type_script_lang_js_ = (news_listvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/news_list/index.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(249)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  pages_news_listvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "091e30b1",
  "b8ae5b80"
  
)

/* harmony default export */ var news_list = __webpack_exports__["default"] = (component.exports);

/* nuxt-component-imports */
installComponents(component, {AdItem: __webpack_require__(154).default})


/***/ })

};;
//# sourceMappingURL=index.js.map