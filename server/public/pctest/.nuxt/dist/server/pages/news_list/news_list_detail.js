exports.ids = [32];
exports.modules = {

/***/ 218:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(271);
if(content.__esModule) content = content.default;
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add CSS to SSR context
var add = __webpack_require__(4).default
module.exports.__inject__ = function (context) {
  add("2cfd472a", content, true, context)
};

/***/ }),

/***/ 270:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_news_list_detail_vue_vue_type_style_index_0_id_52deb4b2_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(218);
/* harmony import */ var _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_news_list_detail_vue_vue_type_style_index_0_id_52deb4b2_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_news_list_detail_vue_vue_type_style_index_0_id_52deb4b2_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_news_list_detail_vue_vue_type_style_index_0_id_52deb4b2_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_vue_style_loader_index_js_ref_7_oneOf_1_0_node_modules_css_loader_dist_cjs_js_ref_7_oneOf_1_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_oneOf_1_2_node_modules_sass_loader_dist_cjs_js_ref_7_oneOf_1_3_node_modules_sass_resources_loader_lib_loader_js_ref_7_oneOf_1_4_node_modules_nuxt_components_dist_loader_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_news_list_detail_vue_vue_type_style_index_0_id_52deb4b2_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ 271:
/***/ (function(module, exports, __webpack_require__) {

// Imports
var ___CSS_LOADER_API_IMPORT___ = __webpack_require__(3);
var ___CSS_LOADER_EXPORT___ = ___CSS_LOADER_API_IMPORT___(false);
// Module
___CSS_LOADER_EXPORT___.push([module.i, ".news-details-container .nav-container[data-v-52deb4b2]{padding:15px 16px}.news-details-container .content-box[data-v-52deb4b2]{display:flex;flex-direction:row}.news-details-container .content-box .news-detail-box[data-v-52deb4b2]{width:900px}.news-details-container .content-box .news-detail-box .content-header[data-v-52deb4b2]{padding:20px;border-bottom:1px solid #e5e5e5}.news-details-container .content-box .news-detail-box .content-header .news-detail-title[data-v-52deb4b2]{color:#222;font-size:24px;font-weight:500;margin-bottom:43px}.news-details-container .content-box .news-detail-box .content-html-box[data-v-52deb4b2]{padding:24px 20px}.news-details-container .content-box .news-detail-box .content-html-box>div[data-v-52deb4b2]{width:100%;overflow:hidden}.news-details-container .content-box .news-detail-box .content-html-box>div[data-v-52deb4b2]  img{width:100%}.news-details-container .content-box .recommend-box[data-v-52deb4b2]{width:264px}.news-details-container .content-box .recommend-box .recommend-box-header[data-v-52deb4b2]{padding:15px 10px;border-bottom:1px solid #e5e5e5}.news-details-container .content-box .recommend-box .recommend-box-header .primary-line[data-v-52deb4b2]{margin-right:10px;background-color:#ff2c3c;width:4px;height:20px}.news-details-container .content-box .recommend-box .recommend-box-content .recommend-list-container .recommend-list-item[data-v-52deb4b2]{padding:10px;cursor:pointer}.news-details-container .content-box .recommend-box .recommend-box-content .recommend-list-container .recommend-list-item .goods-info[data-v-52deb4b2]{margin-top:8px}", ""]);
// Exports
module.exports = ___CSS_LOADER_EXPORT___;


/***/ }),

/***/ 323:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// CONCATENATED MODULE: ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/news_list/news_list_detail.vue?vue&type=template&id=52deb4b2&scoped=true&
var render = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',{staticClass:"news-details-container mt16"},[_vm._ssrNode("<div class=\"nav-container row\" data-v-52deb4b2>","</div>",[_vm._ssrNode("<div class=\"nr\" style=\"width: 70px\" data-v-52deb4b2>当前位置：</div> "),_c('el-breadcrumb',{staticStyle:{"flex":"1"},attrs:{"separator":"/"}},[_c('el-breadcrumb-item',{attrs:{"to":{ path: '/' }}},[_vm._v("首页")]),_vm._v(" "),_c('el-breadcrumb-item',[_c('nuxt-link',{attrs:{"to":"/news_list"}},[_vm._v("商城资讯")])],1),_vm._v(" "),_c('el-breadcrumb-item',{staticClass:"line1",staticStyle:{"max-width":"800px"}},[_vm._v(_vm._s(_vm.detailsObj.title))])],1)],2),_vm._ssrNode(" "),_vm._ssrNode("<div class=\"content-box\" data-v-52deb4b2>","</div>",[_vm._ssrNode("<div class=\"news-detail-box mr16\" data-v-52deb4b2><div class=\"content-header bg-white\" data-v-52deb4b2><div class=\"news-detail-title\" data-v-52deb4b2>"+_vm._ssrEscape("\n                    "+_vm._s(_vm.detailsObj.title)+"\n                ")+"</div> <div class=\"row\" data-v-52deb4b2><div class=\"sm muted\" data-v-52deb4b2>"+_vm._ssrEscape("\n                        发布时间："+_vm._s(_vm.detailsObj.create_time)+"\n                    ")+"</div> <div class=\"row\" style=\"margin-left: 40px\" data-v-52deb4b2><i class=\"el-icon-view muted\" data-v-52deb4b2></i> <div class=\"muted\" style=\"margin-left: 3px;\" data-v-52deb4b2>"+_vm._ssrEscape(_vm._s(_vm.detailsObj.visit)+" 人浏览")+"</div></div></div></div> <div class=\"content-html-box bg-white\" data-v-52deb4b2><div data-v-52deb4b2>"+(_vm._s(_vm.detailsObj.content))+"</div></div></div> "),_vm._ssrNode("<div class=\"recommend-box\" data-v-52deb4b2>","</div>",[_vm._ssrNode("<div class=\"recommend-box-header row bg-white\" data-v-52deb4b2><div class=\"primary-line\" data-v-52deb4b2></div> <div class=\"xxl\" style=\"font-weight: 500\" data-v-52deb4b2>为您推荐</div></div> "),_vm._ssrNode("<div class=\"recommend-box-content bg-white\" data-v-52deb4b2>","</div>",[_vm._ssrNode("<div class=\"recommend-list-container\" data-v-52deb4b2>","</div>",_vm._l((_vm.recommend_list),function(item){return _vm._ssrNode("<div class=\"recommend-list-item\" data-v-52deb4b2>","</div>",[_c('el-image',{staticStyle:{"width":"244px","height":"183px","border-radius":"6px"},attrs:{"fit":"cover","src":item.image}}),_vm._ssrNode(" <div class=\"goods-info\" data-v-52deb4b2><div class=\"line2 goods-name\" data-v-52deb4b2>"+_vm._ssrEscape(_vm._s(item.title))+"</div> <div class=\"row\" style=\"margin-top: 10px\" data-v-52deb4b2><i class=\"el-icon-view muted\" data-v-52deb4b2></i> <div class=\"muted xs\" style=\"margin-left: 4px;\" data-v-52deb4b2>"+_vm._ssrEscape(_vm._s(item.visit)+" 人浏览")+"</div></div></div>")],2)}),0)])],2)],2)],2)}
var staticRenderFns = []


// CONCATENATED MODULE: ./pages/news_list/news_list_detail.vue?vue&type=template&id=52deb4b2&scoped=true&

// CONCATENATED MODULE: ./node_modules/babel-loader/lib??ref--2-0!./node_modules/@nuxt/components/dist/loader.js??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./pages/news_list/news_list_detail.vue?vue&type=script&lang=js&
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ var news_list_detailvue_type_script_lang_js_ = ({
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
    $post,
    query
  }) {
    let detailsObj = {};
    let recommend_list = [];
    let res = await $get("article/detail", {
      params: {
        id: query.id,
        client: 2
      }
    });

    if (res.code == 1) {
      detailsObj = res.data;
      recommend_list = res.data.recommend_list;
    }

    return {
      detailsObj,
      recommend_list
    };
  },

  watchQuery: ['id'],

  data() {
    return {
      recommend_list: []
    };
  },

  mounted() {
    console.log('route', this.$route); // this.getNewsDetails(this.$route.query.id);
  },

  methods: {
    // async getNewsDetails(id) {
    //     let res = await this.$get("article/detail", {params: {id: id, client: 2}});
    //     if(res.code == 1) {
    //         this.detailsObj = res.data;
    //         this.recommend_list = res.data.recommend_list
    //     }
    // },
    toOther(id) {
      this.$router.push('/news_list/news_list_detail?id=' + id);
    }

  }
});
// CONCATENATED MODULE: ./pages/news_list/news_list_detail.vue?vue&type=script&lang=js&
 /* harmony default export */ var news_list_news_list_detailvue_type_script_lang_js_ = (news_list_detailvue_type_script_lang_js_); 
// EXTERNAL MODULE: ./node_modules/vue-loader/lib/runtime/componentNormalizer.js
var componentNormalizer = __webpack_require__(1);

// CONCATENATED MODULE: ./pages/news_list/news_list_detail.vue



function injectStyles (context) {
  
  var style0 = __webpack_require__(270)
if (style0.__inject__) style0.__inject__(context)

}

/* normalize component */

var component = Object(componentNormalizer["a" /* default */])(
  news_list_news_list_detailvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  injectStyles,
  "52deb4b2",
  "5c800cb0"
  
)

/* harmony default export */ var news_list_detail = __webpack_exports__["default"] = (component.exports);

/***/ })

};;
//# sourceMappingURL=news_list_detail.js.map