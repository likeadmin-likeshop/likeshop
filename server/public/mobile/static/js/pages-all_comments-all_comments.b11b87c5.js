(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-all_comments-all_comments"],{"0301":function(t,a,e){"use strict";e("a630"),e("a9e3"),e("3ca3"),Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0;var n={props:{color:String,vertical:Boolean,type:{type:String,default:"spinner"},size:{type:Number,default:40},textSize:String},data:function(){return{array12:Array.from({length:12})}}};a.default=n},"0746":function(t,a,e){"use strict";e.r(a);var n=e("0bca"),i=e.n(n);for(var r in n)"default"!==r&&function(t){e.d(a,t,(function(){return n[t]}))}(r);a["default"]=i.a},"0bca":function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0;var n={data:function(){return{}},components:{},props:{status:{type:String,default:"loading"},errorText:{type:String,default:"加载失败，点击重新加载"},loadingText:{type:String,default:"加载中..."},finishedText:{type:String,default:"我可是有底线的～"},slotEmpty:{type:Boolean,default:!1},color:{type:String,default:"#666"}},methods:{onRefresh:function(){this.$emit("refresh")}}};a.default=n},1578:function(t,a,e){var n=e("f988");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var i=e("4f06").default;i("309ad689",n,!0,{sourceMap:!1,shadowMode:!1})},"26dc":function(t,a,e){var n=e("412a");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var i=e("4f06").default;i("5955a0e7",n,!0,{sourceMap:!1,shadowMode:!1})},"2d23":function(t,a,e){"use strict";e.d(a,"b",(function(){return i})),e.d(a,"c",(function(){return r})),e.d(a,"a",(function(){return n}));var n={loadingFooter:e("e2bb").default},i=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("v-uni-view",{attrs:{height:"100vh"}},[e("v-uni-view",{staticClass:"all_comments",attrs:{slot:"header"},slot:"header"},[t.isEmpty?t._e():e("v-uni-view",{staticClass:"header bg-white"},[e("v-uni-view",{staticClass:"title xs"},[e("v-uni-text",{staticClass:"lighter mr10"},[t._v("商品好评率")]),e("v-uni-text",{staticClass:"primary"},[t._v(t._s(t.percent))])],1),e("v-uni-view",{staticClass:"tab row"},[t._l(t.categoryList,(function(a,n){return[a.count?e("v-uni-view",{key:n+"_"+n+"_0",class:"tab-item xs mr10  br60 mb20 "+(t.type==a.id?"bg-primary white":"bg-gray"),attrs:{"data-id":a.id},on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.onChangType.apply(void 0,arguments)}}},[t._v(t._s(a.name)+"("+t._s(a.count)+")")]):t._e()]}))],2)],1),e("v-uni-view",{staticClass:"main bg-white",attrs:{slot:"content"},slot:"content"},[e("v-uni-view",{staticClass:"evaluation-list"},t._l(t.commentList,(function(a,n){return e("v-uni-view",{key:n,staticClass:"evaluation-item"},[e("v-uni-view",{staticClass:"user-info row"},[e("v-uni-image",{staticClass:"avatar mr20",attrs:{src:a.avatar}}),e("v-uni-view",{staticClass:"user-name md mr10"},[t._v(t._s(a.nickname))]),e("van-rate",{attrs:{readonly:!0,size:"26rpx",color:"#FF2C3C",value:a.goods_comment}})],1),e("v-uni-view",{staticClass:"muted xs mt10"},[e("v-uni-text",{staticClass:"mr20"},[t._v(t._s(a.create_time))]),e("v-uni-text",[t._v(t._s(a.spec_value_str))])],1),a.comment?e("v-uni-view",{staticClass:"dec mt20"},[t._v(t._s(a.comment))]):t._e(),a.image.length?e("v-uni-view",{staticClass:"img mt20 row",staticStyle:{"flex-wrap":"wrap"}},t._l(a.image,(function(n,i){return e("v-uni-view",{key:i,staticClass:"img-item mr20 mb20",attrs:{"data-current":n,"data-uri":a.image},on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.previewImage.apply(void 0,arguments)}}},[e("van-image",{staticClass:"goods-img",attrs:{width:"160rpx",fit:"cover",height:"160rpx",radius:"6rpx","lazy-load":!0,src:n}})],1)})),1):t._e(),a.reply?e("v-uni-view",{staticClass:"seller-recall-container bg-gray mt10"},[e("v-uni-view",{staticClass:"lighter nr",staticStyle:{"word-wrap":"break-word"}},[t._v("商家回复："),e("span",{staticClass:"normal two-txt-cut"},[t._v(t._s(a.reply))])])],1):t._e()],1)})),1)],1)],1),e("loading-footer",{attrs:{status:t.status,slotEmpty:!0}},[e("v-uni-view",{staticClass:"column-center",staticStyle:{"padding-top":"200rpx"}},[e("v-uni-image",{staticClass:"img-null",attrs:{src:"/static/images/goods_null.png"}}),e("v-uni-text",{staticClass:"lighter"},[t._v("暂无评价")])],1)],1)],1)},r=[]},"37af":function(t,a,e){"use strict";e.r(a);var n=e("6166"),i=e("7296");for(var r in i)"default"!==r&&function(t){e.d(a,t,(function(){return i[t]}))}(r);e("fa3f");var o,s=e("f0c5"),d=Object(s["a"])(i["default"],n["b"],n["c"],!1,null,"49a28488",null,!1,n["a"],o);a["default"]=d.exports},"38c9":function(t,a,e){"use strict";e.r(a);var n=e("2d23"),i=e("9192");for(var r in i)"default"!==r&&function(t){e.d(a,t,(function(){return i[t]}))}(r);e("588d");var o,s=e("f0c5"),d=Object(s["a"])(i["default"],n["b"],n["c"],!1,null,"0dd266ba",null,!1,n["a"],o);a["default"]=d.exports},"3c95":function(t,a,e){"use strict";var n=e("1578"),i=e.n(n);i.a},"412a":function(t,a,e){var n=e("24fb");a=n(!1),a.push([t.i,'@charset "UTF-8";\n/**\n * 这里是uni-app内置的常用样式变量\n *\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\n *\n */\n/**\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\n *\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\n */\n/* 颜色变量 */\n/* 行为相关颜色 */.all_comments[data-v-0dd266ba]{padding-top:%?20?%}.all_comments .header .title[data-v-0dd266ba]{padding:%?24?% %?26?%;border-bottom:var(--border)}.all_comments .header .tab[data-v-0dd266ba]{padding:%?30?% 0 %?10?% %?20?%;-webkit-flex-wrap:wrap;flex-wrap:wrap}.all_comments .header .tab .tab-item[data-v-0dd266ba]{padding:%?9?% %?29?%}.all_comments .main .evaluation-list .evaluation-item[data-v-0dd266ba]{padding:%?20?%}.all_comments .main .evaluation-list .evaluation-item[data-v-0dd266ba]:not(:last-of-type){border-bottom:1px solid #e5e5e5}.all_comments .main .evaluation-list .evaluation-item .avatar[data-v-0dd266ba]{width:%?60?%;height:%?60?%;border-radius:50%}.all_comments .main .evaluation-list .evaluation-item .seller-recall-container[data-v-0dd266ba]{padding:%?24?% %?20?%;border-radius:%?12?%}',""]),t.exports=a},"55e1":function(t,a,e){"use strict";e.d(a,"b",(function(){return i})),e.d(a,"c",(function(){return r})),e.d(a,"a",(function(){return n}));var n={loading:e("37af").default},i=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("v-uni-view",{staticClass:"loading-footer row-center",style:"color: "+t.color},["loading"===t.status?e("v-uni-view",{staticClass:"loading row"},[e("loading",{staticClass:"mr20",attrs:{color:t.color}}),e("v-uni-text",{style:"color: "+t.color},[t._v(t._s(t.loadingText))])],1):t._e(),"finished"===t.status?e("v-uni-view",{staticClass:"finished"},[t._v(t._s(t.finishedText))]):t._e(),"error"===t.status?e("v-uni-view",{on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.onRefresh.apply(void 0,arguments)}}},[t._v(t._s(t.errorText))]):t._e(),"empty"===t.status?e("v-uni-view",{staticClass:"empty"},[t.slotEmpty?t._t("empty"):e("v-uni-text",[t._v("暂无数据")])],2):t._e()],1)},r=[]},"588d":function(t,a,e){"use strict";var n=e("26dc"),i=e.n(n);i.a},6166:function(t,a,e){"use strict";var n;e.d(a,"b",(function(){return i})),e.d(a,"c",(function(){return r})),e.d(a,"a",(function(){return n}));var i=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("v-uni-view",{class:"loading "+(t.vertical?"loading--vertical":"")},[e("v-uni-view",{class:"loading__spinner loading__spinner--"+t.type,style:{color:t.color,width:t.size+"rpx",height:t.size+"rpx"}},t._l(t.array12,(function(a,n){return"spinner"===t.type?e("v-uni-view",{key:n,staticClass:"loading__dot"}):t._e()})),1),e("v-uni-view",{staticClass:"loading__text",style:{"font-size":t.textSize+"rpx",color:t.color}},[t._t("default")],2)],1)},r=[]},"6f13":function(t,a,e){"use strict";var n=e("4ea4");e("d3b7"),Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0;var i=n(e("2909"));e("96cf");var r=n(e("1da1")),o=e("ca48"),s=e("01eb"),d={data:function(){return{status:s.loadingType.LOADING,page:1,type:"",commentList:[],categoryList:[],percent:"",isEmpty:!0}},components:{},props:{},onLoad:function(){var t=(0,r.default)(regeneratorRuntime.mark((function t(a){return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return this.id=a.id,t.next=3,this.getCommentCategoryFun();case 3:this.getCommentListFun();case 4:case"end":return t.stop()}}),t,this)})));function a(a){return t.apply(this,arguments)}return a}(),onReady:function(){},onShow:function(){},onHide:function(){},onUnload:function(){},onPullDownRefresh:function(){},onReachBottom:function(){this.getCommentListFun()},onShareAppMessage:function(){},methods:{onChangType:function(t){var a=this,e=t.currentTarget.dataset.id,n=this.type;e!=n&&(this.type=e,this.page=1,this.commentList=[],this.status=s.loadingType.LOADING,this.$nextTick((function(){return a.getCommentListFun()})))},getCommentCategoryFun:function(){var t=this;return new Promise((function(a){(0,o.getCommentCategory)(t.id).then((function(e){var n=e.code,i=e.data,r=i.comment,o=i.percent;1==n&&(t.categoryList=r,t.percent=o,t.type=r[0].id,t.$nextTick((function(){return a()})))}))}))},getCommentListFun:function(){var t=this,a=this.page,e=this.status,n=this.commentList,r=this.type;e!=s.loadingType.FINISHED&&(0,o.getCommentList)({id:r,goods_id:this.id,page_no:a}).then((function(a){if(1==a.code){var e=a.data,r=e.list,o=e.more;n.push.apply(n,(0,i.default)(r)),t.commentList=n,t.page++,t.$nextTick((function(){o||(t.status=s.loadingType.FINISHED),n.length<=0?t.status=s.loadingType.EMPTY:(console.log("commentList false"),t.isEmpty=!1)}))}}))},previewImage:function(t){var a=t.currentTarget.dataset,e=a.current,n=a.uri,i=n;uni.previewImage({current:e,urls:i})}}};a.default=d},7296:function(t,a,e){"use strict";e.r(a);var n=e("0301"),i=e.n(n);for(var r in n)"default"!==r&&function(t){e.d(a,t,(function(){return n[t]}))}(r);a["default"]=i.a},9192:function(t,a,e){"use strict";e.r(a);var n=e("6f13"),i=e.n(n);for(var r in n)"default"!==r&&function(t){e.d(a,t,(function(){return n[t]}))}(r);a["default"]=i.a},b88c:function(t,a,e){var n=e("24fb");a=n(!1),a.push([t.i,'[data-v-49a28488]:host{font-size:0;line-height:1}.loading[data-v-49a28488]{display:-webkit-inline-box;display:-webkit-inline-flex;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;color:#c8c9cc}.loading__spinner[data-v-49a28488]{position:relative;box-sizing:border-box;width:%?45?%;max-width:100%;max-height:100%;height:%?45?%;-webkit-animation:rotate-data-v-49a28488 .8s linear infinite;animation:rotate-data-v-49a28488 .8s linear infinite}.loading__spinner--spinner[data-v-49a28488]{-webkit-animation-timing-function:steps(12);animation-timing-function:steps(12)}.loading__spinner--circular[data-v-49a28488]{border:%?2?% solid transparent;border-top-color:initial;border-radius:100%}.loading__text[data-v-49a28488]{margin-left:%?16?%;color:#969799;font-size:%?28?%;line-height:%?40?%}.loading__text[data-v-49a28488]:empty{display:none}.loading--vertical[data-v-49a28488]{-webkit-flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.loading--vertical .loading__text[data-v-49a28488]{margin:%?16?% 0 0}.loading__dot[data-v-49a28488]{position:absolute;top:0;left:0;width:100%;height:100%}.loading__dot[data-v-49a28488]:before{display:block;width:%?4?%;height:25%;margin:0 auto;background-color:currentColor;border-radius:40%;content:" "}.loading__dot[data-v-49a28488]:first-of-type{-webkit-transform:rotate(30deg);transform:rotate(30deg);opacity:1}.loading__dot[data-v-49a28488]:nth-of-type(2){-webkit-transform:rotate(60deg);transform:rotate(60deg);opacity:.9375}.loading__dot[data-v-49a28488]:nth-of-type(3){-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:.875}.loading__dot[data-v-49a28488]:nth-of-type(4){-webkit-transform:rotate(120deg);transform:rotate(120deg);opacity:.8125}.loading__dot[data-v-49a28488]:nth-of-type(5){-webkit-transform:rotate(150deg);transform:rotate(150deg);opacity:.75}.loading__dot[data-v-49a28488]:nth-of-type(6){-webkit-transform:rotate(180deg);transform:rotate(180deg);opacity:.6875}.loading__dot[data-v-49a28488]:nth-of-type(7){-webkit-transform:rotate(210deg);transform:rotate(210deg);opacity:.625}.loading__dot[data-v-49a28488]:nth-of-type(8){-webkit-transform:rotate(240deg);transform:rotate(240deg);opacity:.5625}.loading__dot[data-v-49a28488]:nth-of-type(9){-webkit-transform:rotate(270deg);transform:rotate(270deg);opacity:.5}.loading__dot[data-v-49a28488]:nth-of-type(10){-webkit-transform:rotate(300deg);transform:rotate(300deg);opacity:.4375}.loading__dot[data-v-49a28488]:nth-of-type(11){-webkit-transform:rotate(330deg);transform:rotate(330deg);opacity:.375}.loading__dot[data-v-49a28488]:nth-of-type(12){-webkit-transform:rotate(1turn);transform:rotate(1turn);opacity:.3125}@-webkit-keyframes rotate-data-v-49a28488{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes rotate-data-v-49a28488{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}',""]),t.exports=a},ba73:function(t,a,e){var n=e("b88c");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var i=e("4f06").default;i("b7570d24",n,!0,{sourceMap:!1,shadowMode:!1})},e2bb:function(t,a,e){"use strict";e.r(a);var n=e("55e1"),i=e("0746");for(var r in i)"default"!==r&&function(t){e.d(a,t,(function(){return i[t]}))}(r);e("3c95");var o,s=e("f0c5"),d=Object(s["a"])(i["default"],n["b"],n["c"],!1,null,"1b4a51d1",null,!1,n["a"],o);a["default"]=d.exports},f988:function(t,a,e){var n=e("24fb");a=n(!1),a.push([t.i,".loading-footer[data-v-1b4a51d1]{padding:%?30?% 0;color:#666}",""]),t.exports=a},fa3f:function(t,a,e){"use strict";var n=e("ba73"),i=e.n(n);i.a}}]);