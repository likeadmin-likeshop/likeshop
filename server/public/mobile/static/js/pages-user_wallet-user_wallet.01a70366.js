(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-user_wallet-user_wallet"],{"0116":function(t,e,a){t.exports=a.p+"static/img/sign_in_bg.a1ef6990.png"},"088c":function(t,e,a){"use strict";var i=a("7c29"),n=a.n(i);n.a},"1de5":function(t,e,a){"use strict";t.exports=function(t,e){return e||(e={}),t=t&&t.__esModule?t.default:t,"string"!==typeof t?t:(/^['"].*['"]$/.test(t)&&(t=t.slice(1,-1)),e.hash&&(t+=e.hash),/["'() \t\n]/.test(t)||e.needQuotes?'"'.concat(t.replace(/"/g,'\\"').replace(/\n/g,"\\n"),'"'):t)}},3134:function(t,e,a){t.exports=a.p+"static/img/get_coupon_bg.0fecb734.png"},"553c":function(t,e,a){"use strict";a.r(e);var i=a("5788"),n=a.n(i);for(var s in i)"default"!==s&&function(t){a.d(e,t,(function(){return i[t]}))}(s);e["default"]=n.a},5788:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i=a("8c4f"),n={data:function(){return{wallet:{}}},components:{},props:{},onLoad:function(t){},onReady:function(){},onShow:function(){this.getWalletFun()},onHide:function(){},onUnload:function(){},onPullDownRefresh:function(){},onReachBottom:function(){},methods:{goPage:function(t){var e=t.currentTarget.dataset.url;uni.navigateTo({url:e})},getWalletFun:function(){var t=this;(0,i.getWallet)().then((function(e){1==e.code&&(t.wallet=e.data)}))}}};e.default=n},"7c29":function(t,e,a){var i=a("b1fc");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("8e291bd8",i,!0,{sourceMap:!1,shadowMode:!1})},b1fc:function(t,e,a){var i=a("24fb"),n=a("1de5"),s=a("0116"),c=a("3134");e=i(!1);var r=n(s),o=n(c);e.push([t.i,'@charset "UTF-8";\n/**\n * 这里是uni-app内置的常用样式变量\n *\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\n *\n */\n/**\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\n *\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\n */\n/* 颜色变量 */\n/* 行为相关颜色 */\n/* pages/user_wallet/user_wallet.wxss */uni-image[data-v-3f61ded8]{width:100%;height:100%}.user-wallet .contain[data-v-3f61ded8]{padding:%?20?% %?30?% %?36?%}.user-wallet .contain .header[data-v-3f61ded8]{position:relative;background:-webkit-linear-gradient(top,#ff2c3c,#ff316a);background:linear-gradient(180deg,#ff2c3c,#ff316a);border-radius:%?20?%;height:%?320?%;padding:%?50?% %?30?% %?30?%;box-sizing:border-box}.user-wallet .contain .header .money .item[data-v-3f61ded8]{-webkit-box-flex:1;-webkit-flex:1;flex:1}.user-wallet .contain .header .btn[data-v-3f61ded8]{position:absolute;right:%?30?%;top:%?50?%;padding:0 %?51?%}.user-wallet .contain .nav[data-v-3f61ded8]{border-bottom:1px solid #e5e5e5}.user-wallet .contain .nav .nav-item[data-v-3f61ded8]{-webkit-box-flex:1;-webkit-flex:1;flex:1;padding:%?40?% 0}.user-wallet .contain .nav .nav-item uni-image[data-v-3f61ded8]{width:%?62?%;height:%?62?%}.user-wallet .activity[data-v-3f61ded8]{padding:%?40?% %?0?%}.user-wallet .activity .activity-title[data-v-3f61ded8]{font-weight:700}.user-wallet .activity .activity-header[data-v-3f61ded8]{margin-top:%?30?%}.user-wallet .activity .activity-header .activity-header-left[data-v-3f61ded8]{padding:%?43?% %?30?%;color:#1579dc;background-size:100% 100%;background-image:url('+r+");width:%?335?%}.user-wallet .activity .activity-header .activity-header-right[data-v-3f61ded8]{padding:%?43?% %?30?%;color:#ff2c3c;width:%?335?%;background-size:100% 100%;background-image:url("+o+")}.user-wallet .activity-items-contain .activity-item[data-v-3f61ded8]{padding:%?33?% 0;width:%?335?%}.user-wallet .activity-items-contain .activity-item .activity-img[data-v-3f61ded8]{width:%?74?%;height:%?74?%}",""]),t.exports=e},e9e8:function(t,e,a){"use strict";var i;a.d(e,"b",(function(){return n})),a.d(e,"c",(function(){return s})),a.d(e,"a",(function(){return i}));var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-uni-view",{staticClass:"user-wallet"},[a("v-uni-view",{staticClass:"contain bg-white mb20"},[a("v-uni-view",{staticClass:"header"},[a("v-uni-view",{staticClass:"white mb20"},[a("v-uni-view",{staticClass:"xs"},[t._v("总资产（元）")]),a("v-uni-view",{staticStyle:{"font-size":"76rpx"}},[t._v(t._s(t.wallet.user_money||0))])],1),a("v-uni-view",{staticClass:"money white row"},[a("v-uni-view",{staticClass:"item"},[a("v-uni-view",{staticClass:"xs"},[t._v("累计消费(元)")]),a("v-uni-view",{staticStyle:{"font-size":"38rpx"}},[t._v(t._s(t.wallet.total_order_amount||0))])],1)],1)],1),a("v-uni-view",{staticClass:"nav row"},[a("v-uni-navigator",{staticClass:"nav-item column-center",attrs:{"hover-class":"none",url:"/pages/user_bill/user_bill?type=0"}},[a("v-uni-image",{attrs:{src:"/static/images/icon_account.png"}}),a("v-uni-view",{staticClass:"mt10"},[t._v("账户明细")])],1),a("v-uni-navigator",{staticClass:"nav-item column-center",attrs:{"hover-class":"none",url:"/pages/user_bill/user_bill?type=1"}},[a("v-uni-image",{attrs:{src:"/static/images/icon_consume.png"}}),a("v-uni-view",{staticClass:"mt10"},[t._v("消费记录")])],1),a("v-uni-view",{staticClass:"nav-item column-center"})],1),a("v-uni-view",{staticClass:"activity"},[a("v-uni-view",{staticClass:"activity-title xl"},[t._v("热门活动")]),a("v-uni-view",{staticClass:"activity-header row"},[a("v-uni-navigator",{staticClass:"activity-header-left",attrs:{"hover-class":"none",url:"/pages/user_sign/user_sign"}},[a("v-uni-view",{staticClass:"lg",staticStyle:{"font-weight":"bold"}},[t._v("签到领积分")]),a("v-uni-view",{staticClass:"xs"},[t._v("赚积分抵现金")])],1),a("v-uni-navigator",{staticClass:"activity-header-right ml20",attrs:{"hover-class":"none",url:"/pages/user_getcoupon/user_getcoupon"}},[a("v-uni-view",{staticClass:"lg",staticStyle:{"font-weight":"bold"}},[t._v("领取优惠券")]),a("v-uni-view",{staticClass:"xs"},[t._v("满减享优惠")])],1)],1)],1)],1)],1)},s=[]},fcb4:function(t,e,a){"use strict";a.r(e);var i=a("e9e8"),n=a("553c");for(var s in n)"default"!==s&&function(t){a.d(e,t,(function(){return n[t]}))}(s);a("088c");var c,r=a("f0c5"),o=Object(r["a"])(n["default"],i["b"],i["c"],!1,null,"3f61ded8",null,!1,i["a"],c);e["default"]=o.exports}}]);