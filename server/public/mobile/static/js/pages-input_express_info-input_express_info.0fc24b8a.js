(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-input_express_info-input_express_info"],{"036e":function(n,e,t){"use strict";t.r(e);var i=t("62d5"),a=t("749f");for(var o in a)"default"!==o&&function(n){t.d(e,n,(function(){return a[n]}))}(o);t("a779");var r,s=t("f0c5"),l=Object(s["a"])(a["default"],i["b"],i["c"],!1,null,"6d37aae2",null,!1,i["a"],r);e["default"]=l.exports},"03d5":function(n,e,t){"use strict";t("4160"),t("a434"),t("d3b7"),t("159b"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i=t("327e"),a=t("a298"),o=t("f262"),r={data:function(){return{fileList:[],formInfo:{express:"",number:"",remark:""}}},components:{},props:{},onLoad:function(n){var e=n.id;this.afterSalesId=e},onReady:function(){},onShow:function(){},onHide:function(){},onUnload:function(){},onPullDownRefresh:function(){},onReachBottom:function(){},onShareAppMessage:function(){},methods:{afterRead:function(n){var e=this,t=n;uni.showLoading({title:"正在上传中...",mask:!0}),t.forEach((function(n){e.uploadFile(n.path).then((function(n){uni.hideLoading(),e.fileList.push(n)}))}))},formSubmit:function(n){var e=n.detail.value,t=this.fileList;if(console.log(e),!e.express)return(0,o.Tips)({title:"请填写物流公司名称"});if(!e.number)return(0,o.Tips)({title:"请填写快递单号"});var i={id:this.afterSalesId,express_name:e.express,invoice_no:e.number,express_remark:e.remark,express_image:t.length<=0?"":t[0].url};this.inputExpressInfoFun(i)},uploadFile:function(n){var e=this;return new Promise((function(t){uni.uploadFile({url:a.baseURL+"file/formimage",filePath:n,name:"file",fileType:"image",cloudPath:"",success:function(n){console.log("uploadFile res ==> ",n);e.fileList;var i=JSON.parse(n.data);1==i.code&&t(i.data)},fail:function(n){console.log(n)}})}))},inputExpressInfoFun:function(n){var e=this;(0,i.inputExpressInfo)(n).then((function(n){1==n.code&&((0,o.Tips)({title:"提交成功"},(function(){uni.navigateBack()})),e.$emit("RESET_LIST"))}))},handleImage:function(n){this.fileList.splice(n)}}};e.default=r},"0773":function(n,e,t){"use strict";t.d(e,"b",(function(){return a})),t.d(e,"c",(function(){return o})),t.d(e,"a",(function(){return i}));var i={uIcon:t("3715").default},a=function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("v-uni-view",{class:{"custom-image":!0,"image-round":n.round},style:[n.viewStyle],on:{click:function(e){arguments[0]=e=n.$handleEvent(e),n.onClick.apply(void 0,arguments)}}},[n.error?n._e():t("v-uni-image",{staticClass:"image",attrs:{src:n.src,mode:n.mode,"lazy-load":n.lazyLoad,"show-menu-by-longpress":n.showMenuByLongpress},on:{load:function(e){arguments[0]=e=n.$handleEvent(e),n.onLoaded.apply(void 0,arguments)},error:function(e){arguments[0]=e=n.$handleEvent(e),n.onErrored.apply(void 0,arguments)}}}),n.loading&&n.showLoading?t("v-uni-view",{staticClass:"loading-wrap image"},[n.useLoadingSlot?n._t("loading"):t("u-icon",{attrs:{color:"#aaa",name:"photo-fill",size:"45"}})],2):n._e(),n.error&&n.showError?t("v-uni-view",{staticClass:"error-wrap image"},[n.useErrorSlot?n._t("error"):t("u-icon",{attrs:{color:"#aaa",name:"error-circle-fill",size:"45"}}),t("v-uni-text",{staticClass:"sm"},[n._v("加载失败")])],2):n._e()],1)},o=[]},"128e":function(n,e,t){"use strict";t.r(e);var i=t("c12b"),a=t("7e1a");for(var o in a)"default"!==o&&function(n){t.d(e,n,(function(){return a[n]}))}(o);t("717a");var r,s=t("f0c5"),l=Object(s["a"])(a["default"],i["b"],i["c"],!1,null,"79baabfc",null,!1,i["a"],r);e["default"]=l.exports},"1a91":function(n,e,t){var i=t("4b42");"string"===typeof i&&(i=[[n.i,i,""]]),i.locals&&(n.exports=i.locals);var a=t("4f06").default;a("4512d570",i,!0,{sourceMap:!1,shadowMode:!1})},2406:function(n,e,t){var i=t("24fb");e=i(!1),e.push([n.i,"\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/* pages/input_express_info/input_express_info.wxss */.input-contain[data-v-79baabfc]{background-color:#fff}.input-contain .input-item[data-v-79baabfc]{padding:%?24?%}.input-item .label[data-v-79baabfc]{width:%?152?%}.input-item .input[data-v-79baabfc]{-webkit-box-flex:1;-webkit-flex:1;flex:1}.upload-contain[data-v-79baabfc]{background-color:#fff;padding:%?24?% %?20?% %?44?%}.upload-contain .header[data-v-79baabfc]{margin-bottom:%?30?%}.submit-btn[data-v-79baabfc]{margin-top:%?50?%;margin-left:%?26?%;margin-right:%?26?%}",""]),n.exports=e},"2faa":function(n,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={props:{src:{type:String},round:Boolean,width:{type:null},height:{type:null},radius:null,lazyLoad:Boolean,useErrorSlot:Boolean,useLoadingSlot:Boolean,showMenuByLongpress:Boolean,mode:{type:String,default:"scaleToFill"},showError:{type:Boolean,default:!0},showLoading:{type:Boolean,default:!0}},data:function(){return{error:!1,loading:!0,viewStyle:{}}},created:function(){this.setStyle()},methods:{setStyle:function(){var n=this.width,e=this.height,t=this.radius,i={};n&&(i.width=n),e&&(i.height=e),t&&(i["overflow"]="hidden",i["border-radius"]=t),this.viewStyle=i},onLoaded:function(n){this.loading=!1,this.$emit("load",n.detail)},onErrored:function(n){this.error=!1,this.loading=!0,this.$emit("error",n.detail)},onClick:function(n){this.$emit("click",n.detail)}},watch:{src:function(){this.error=!1,this.loading=!0},width:function(){this.setStyle()},height:function(){this.setStyle()}}};e.default=i},"4b42":function(n,e,t){var i=t("24fb");e=i(!1),e.push([n.i,'@charset "UTF-8";\n/**\n * 这里是uni-app内置的常用样式变量\n *\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\n *\n */\n/**\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\n *\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\n */\n/* 颜色变量 */\n/* 行为相关颜色 */.uploader-container .upload-image-box[data-v-6d37aae2]{position:relative;margin-right:%?8?%;margin-bottom:%?8?%}.uploader-container .upload-image-box .close-icon[data-v-6d37aae2]{position:absolute;right:%?-20?%;top:%?-15?%;width:%?40?%;height:%?40?%;background-color:red;-webkit-border-radius:50%;border-radius:50%;z-index:20}.uploader-container .uplader-upload[data-v-6d37aae2]{position:relative;width:%?160?%;height:%?160?%;background-color:#f7f8fa}.uploader-container .uplader-upload .uploader-input[data-v-6d37aae2]{position:absolute;width:100%;height:100%;overflow:hidden;opacity:0;top:0;left:0;z-index:10;cursor:pointer}.uploader-container .uplader-upload-slot[data-v-6d37aae2]{position:relative;min-width:%?160?%;min-height:%?160?%}.uploader-container .uplader-upload-slot .uploader-input[data-v-6d37aae2]{position:absolute;width:100%;height:100%;overflow:hidden;opacity:0;top:0;left:0;z-index:10;cursor:pointer}',""]),n.exports=e},"62d5":function(n,e,t){"use strict";t.d(e,"b",(function(){return a})),t.d(e,"c",(function(){return o})),t.d(e,"a",(function(){return i}));var i={customImage:t("8d29").default,uIcon:t("3715").default},a=function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("v-uni-view",{staticClass:"uploader-container row wrap"},[n._l(n.fileList,(function(e,i){return t("v-uni-view",{key:i,staticClass:"upload-image-box",style:{width:n.previewSize,height:n.previewSize}},[t("custom-image",{staticClass:"img-preview",attrs:{mode:"aspectFit",radius:"10rpx",src:e.url,width:n.previewSize,height:n.previewSize}}),t("v-uni-view",{staticClass:"close-icon row-center",on:{click:function(e){arguments[0]=e=n.$handleEvent(e),n.deleteImage(e,i)}}},[t("u-icon",{attrs:{name:"close",size:"30",color:"white"}})],1)],1)})),n.useSlot?t("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:(0==n.fileList.length||n.mutiple)&&n.fileList.length<n.maxUpload,expression:"(fileList.length == 0 || mutiple) && fileList.length < maxUpload"}],staticClass:"uplader-upload-slot row-center",on:{click:function(e){arguments[0]=e=n.$handleEvent(e),n.handleImage.apply(void 0,arguments)}}},[n._t("default")],2):t("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:(0==n.fileList.length||n.mutiple)&&n.fileList.length<n.maxUpload,expression:"(fileList.length == 0 || mutiple) && fileList.length < maxUpload"}],staticClass:"uplader-upload row-center",style:{width:n.previewSize,height:n.previewSize},on:{click:function(e){arguments[0]=e=n.$handleEvent(e),n.handleImage.apply(void 0,arguments)}}},[t("u-icon",{attrs:{size:"48",color:"#dcdee0",name:"camera"}}),t("v-uni-view",{staticClass:"uploader-input",attrs:{type:"image",accept:"image/*"}})],1)],2)},o=[]},6779:function(n,e,t){"use strict";var i=t("ffdc"),a=t.n(i);a.a},"717a":function(n,e,t){"use strict";var i=t("f73c"),a=t.n(i);a.a},"749f":function(n,e,t){"use strict";t.r(e);var i=t("ac62"),a=t.n(i);for(var o in i)"default"!==o&&function(n){t.d(e,n,(function(){return i[n]}))}(o);e["default"]=a.a},"7e1a":function(n,e,t){"use strict";t.r(e);var i=t("03d5"),a=t.n(i);for(var o in i)"default"!==o&&function(n){t.d(e,n,(function(){return i[n]}))}(o);e["default"]=a.a},"8d29":function(n,e,t){"use strict";t.r(e);var i=t("0773"),a=t("a449");for(var o in a)"default"!==o&&function(n){t.d(e,n,(function(){return a[n]}))}(o);t("6779");var r,s=t("f0c5"),l=Object(s["a"])(a["default"],i["b"],i["c"],!1,null,"0cf16de3",null,!1,i["a"],r);e["default"]=l.exports},"9ded":function(n,e,t){var i=t("24fb");e=i(!1),e.push([n.i,'@charset "UTF-8";\n/**\n * 这里是uni-app内置的常用样式变量\n *\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\n *\n */\n/**\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\n *\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\n */\n/* 颜色变量 */\n/* 行为相关颜色 */.custom-image[data-v-0cf16de3]{position:relative;display:block;width:100%;height:100%}.custom-image.image-round[data-v-0cf16de3]{overflow:hidden;-webkit-border-radius:50%;border-radius:50%}.custom-image .image[data-v-0cf16de3]{display:block;width:100%;height:100%}.custom-image .loading-wrap[data-v-0cf16de3],\n.custom-image .error-wrap[data-v-0cf16de3]{position:absolute;top:0;left:0;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;color:#969799;font-size:%?28?%;background-color:#f7f8fa}',""]),n.exports=e},a449:function(n,e,t){"use strict";t.r(e);var i=t("2faa"),a=t.n(i);for(var o in i)"default"!==o&&function(n){t.d(e,n,(function(){return i[n]}))}(o);e["default"]=a.a},a779:function(n,e,t){"use strict";var i=t("1a91"),a=t.n(i);a.a},ac62:function(n,e,t){"use strict";t("a9e3"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={name:"uploader",props:{fileList:{type:Array,default:function(){return[]}},mutiple:{type:Boolean,default:!1},maxUpload:{type:Number,default:1},previewSize:{type:String,default:"160rpx"},deletable:{type:Boolean,default:!1},useSlot:{type:Boolean,default:!1}},data:function(){return{}},create:function(){},methods:{handleImage:function(){var n=this;uni.chooseImage({count:this.mutiple?this.maxUpload:1,success:function(e){n.$emit("after-read",e.tempFiles)}})},deleteImage:function(n,e){this.$emit("delete",e)}}};e.default=i},c12b:function(n,e,t){"use strict";t.d(e,"b",(function(){return a})),t.d(e,"c",(function(){return o})),t.d(e,"a",(function(){return i}));var i={uploader:t("036e").default},a=function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("v-uni-view",{staticClass:"input-express-info"},[t("v-uni-form",{on:{submit:function(e){arguments[0]=e=n.$handleEvent(e),n.formSubmit.apply(void 0,arguments)}}},[t("v-uni-view",{staticClass:"input-contain mt20"},[t("v-uni-view",{staticClass:"input-item row"},[t("v-uni-view",{staticClass:"nr label"},[n._v("物流公司")]),t("v-uni-input",{staticClass:"input",attrs:{placeholder:"请输入物流公司名称",value:n.formInfo.express,name:"express"}})],1),t("v-uni-view",{staticClass:"input-item row"},[t("v-uni-view",{staticClass:"nr label"},[n._v("快递单号")]),t("v-uni-input",{staticClass:"input",attrs:{placeholder:"请输入快递单号",value:n.formInfo.number,name:"number"}})],1),t("v-uni-view",{staticClass:"input-item row"},[t("v-uni-view",{staticClass:"nr label"},[n._v("备注说明")]),t("v-uni-input",{staticClass:"input",attrs:{placeholder:"选填",value:n.formInfo.remark,name:"remark"}})],1)],1),t("v-uni-view",{staticClass:"upload-contain mt20"},[t("v-uni-view",{staticClass:"header row"},[t("v-uni-view",{staticClass:"nr normal"},[n._v("上传凭证")]),t("v-uni-view",{staticClass:"sm muted ml20"},[n._v("(请上传快递单号凭证）")])],1),t("v-uni-view",{staticClass:"upload"},[t("uploader",{attrs:{deletable:!0,"preview-size":"160rpx","max-count":"1","file-list":n.fileList},on:{delete:function(e){arguments[0]=e=n.$handleEvent(e),n.handleImage.apply(void 0,arguments)},"after-read":function(e){arguments[0]=e=n.$handleEvent(e),n.afterRead.apply(void 0,arguments)}}})],1)],1),t("v-uni-view",{staticClass:"submit-btn"},[t("v-uni-button",{staticClass:" br60 bg-primary white lg",attrs:{size:"lg","form-type":"submit"}},[n._v("提交")])],1)],1)],1)},o=[]},f73c:function(n,e,t){var i=t("2406");"string"===typeof i&&(i=[[n.i,i,""]]),i.locals&&(n.exports=i.locals);var a=t("4f06").default;a("36113ff4",i,!0,{sourceMap:!1,shadowMode:!1})},ffdc:function(n,e,t){var i=t("9ded");"string"===typeof i&&(i=[[n.i,i,""]]),i.locals&&(n.exports=i.locals);var a=t("4f06").default;a("5f285e32",i,!0,{sourceMap:!1,shadowMode:!1})}}]);