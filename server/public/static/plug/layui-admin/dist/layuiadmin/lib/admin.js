/**

 @Name：layuiAdmin iframe版核心模块
 @Author：贤心
 @Site：http://www.layui.com/admin/
 @License：LPPL
    
 */
 
layui.define('view', function(exports){
  var $ = layui.jquery
  ,laytpl = layui.laytpl
  ,element = layui.element
  ,setter = layui.setter
  ,view = layui.view
  ,device = layui.device()
  
  ,$win = $(window), $body = $('body')
  ,container = $('#'+ setter.container)
  
  ,SHOW = 'layui-show', HIDE = 'layui-hide', THIS = 'layui-this', DISABLED = 'layui-disabled', TEMP = 'template'
  ,APP_BODY = '#LAY_app_body', APP_FLEXIBLE = 'LAY_app_flexible'
  ,FILTER_TAB_TBAS = 'layadmin-layout-tabs'
  ,APP_SPREAD_SM = 'layadmin-side-spread-sm', TABS_BODY = 'layadmin-tabsbody-item'
  ,ICON_SHRINK = 'layui-icon-shrink-right', ICON_SPREAD = 'layui-icon-spread-left'
  ,SIDE_SHRINK = 'layadmin-side-shrink', SIDE_MENU = 'LAY-system-side-menu'

  //通用方法
  ,admin = {
    v: '1.4.0 std'
    
    //数据的异步请求
    ,req: view.req
    
    //清除本地 token，并跳转到登入页
    ,exit: view.exit
    
    //xss 转义
    ,escape: function(html){
      return String(html || '').replace(/&(?!#?[a-zA-Z0-9]+;)/g, '&amp;')
      .replace(/</g, '&lt;').replace(/>/g, '&gt;')
      .replace(/'/g, '&#39;').replace(/"/g, '&quot;');
    }
    
    //事件监听
    ,on: function(events, callback){
      return layui.onevent.call(this, setter.MOD_NAME, events, callback);
    }
    
    //发送验证码
    ,sendAuthCode: function(options){
      options = $.extend({
        seconds: 60
        ,elemPhone: '#LAY_phone'
        ,elemVercode: '#LAY_vercode'
      }, options);

      var seconds = options.seconds
      ,btn = $(options.elem)
      ,token = null
      ,timer, countDown = function(loop){
        seconds--;
        if(seconds < 0){
          btn.removeClass(DISABLED).html('获取验证码');
          seconds = options.seconds;
          clearInterval(timer);
        } else {
          btn.addClass(DISABLED).html(seconds + '秒后重获');
        }

        if(!loop){
          timer = setInterval(function(){
            countDown(true);
          }, 1000);
        }
      };
      
      options.elemPhone = $(options.elemPhone);
      options.elemVercode = $(options.elemVercode);

      btn.on('click', function(){
        var elemPhone = options.elemPhone
        ,value = elemPhone.val();

        if(seconds !== options.seconds || $(this).hasClass(DISABLED)) return;

        if(!/^1\d{10}$/.test(value)){
          elemPhone.focus();
          return layer.msg('请输入正确的手机号')
        };
        
        if(typeof options.ajax === 'object'){
          var success = options.ajax.success;
          delete options.ajax.success;
        }
        
        admin.req($.extend(true, {
          url: '/auth/code'
          ,type: 'get'
          ,data: {
            phone: value
          }
          ,success: function(res){
            layer.msg('验证码已发送至你的手机，请注意查收', {
              icon: 1
              ,shade: 0
            });
            options.elemVercode.focus();
            countDown();
            success && success(res);
          }
        }, options.ajax));
      });
    }
    
    //屏幕类型
    ,screen: function(){
      var width = $win.width()
      if(width > 1200){
        return 3; //大屏幕
      } else if(width > 992){
        return 2; //中屏幕
      } else if(width > 768){
        return 1; //小屏幕
      } else {
        return 0; //超小屏幕
      }
    }
    
    //侧边伸缩
    ,sideFlexible: function(status){
      var app = container
      ,iconElem =  $('#'+ APP_FLEXIBLE)
      ,screen = admin.screen();

      //设置状态，PC：默认展开、移动：默认收缩
      if(status === 'spread'){
        //切换到展开状态的 icon，箭头：←
        iconElem.removeClass(ICON_SPREAD).addClass(ICON_SHRINK);
        
        //移动：从左到右位移；PC：清除多余选择器恢复默认
        if(screen < 2){
          app.addClass(APP_SPREAD_SM);
        } else {
          app.removeClass(APP_SPREAD_SM);
        }
        
        app.removeClass(SIDE_SHRINK)
      } else {
        //切换到搜索状态的 icon，箭头：→
        iconElem.removeClass(ICON_SHRINK).addClass(ICON_SPREAD);
        
        //移动：清除多余选择器恢复默认；PC：从右往左收缩
        if(screen < 2){
          app.removeClass(SIDE_SHRINK);
        } else {
          app.addClass(SIDE_SHRINK);
        }
        
        app.removeClass(APP_SPREAD_SM)
      }
      
      layui.event.call(this, setter.MOD_NAME, 'side({*})', {
        status: status
      });
    }
    
    //弹出面板
    ,popup: view.popup
    
    //右侧面板
    ,popupRight: function(options){
      //layer.close(admin.popup.index);
      return admin.popup.index = layer.open($.extend({
        type: 1
        ,id: 'LAY_adminPopupR'
        ,anim: -1
        ,title: false
        ,closeBtn: false
        ,offset: 'r'
        ,shade: 0.1
        ,shadeClose: true
        ,skin: 'layui-anim layui-anim-rl layui-layer-adminRight'
        ,area: '300px'
      }, options));
    }
    
    //主题设置
    ,theme: function(options){
      var theme = setter.theme
      ,local = layui.data(setter.tableName)
      ,id = 'LAY_layadmin_theme'
      ,style = document.createElement('style')
      ,styleText = laytpl([
        //主题色
        '.layui-side-menu,'
        ,'.layadmin-pagetabs .layui-tab-title li:after,'
        ,'.layadmin-pagetabs .layui-tab-title li.layui-this:after,'
        ,'.layui-layer-admin .layui-layer-title,'
        ,'.layadmin-side-shrink .layui-side-menu .layui-nav>.layui-nav-item>.layui-nav-child'
        ,'{background-color:{{d.color.main}} !important;}'
 
        //选中色
        ,'.layui-nav-tree .layui-this,'
        ,'.layui-nav-tree .layui-this>a,'
        ,'.layui-nav-tree .layui-nav-child dd.layui-this,'
        ,'.layui-nav-tree .layui-nav-child dd.layui-this a'
        ,'{background-color:{{d.color.selected}} !important;}'
        
        //logo
        ,'.layui-layout-admin .layui-logo{background-color:{{d.color.logo || d.color.main}} !important;}'
        
        //头部色
        ,'{{# if(d.color.header){ }}'
          ,'.layui-layout-admin .layui-header{background-color:{{ d.color.header }};}'
          ,'.layui-layout-admin .layui-header a,'
          ,'.layui-layout-admin .layui-header a cite{color: #f8f8f8;}'
          ,'.layui-layout-admin .layui-header a:hover{color: #fff;}'
          ,'.layui-layout-admin .layui-header .layui-nav .layui-nav-more{border-top-color: #fbfbfb;}'
          ,'.layui-layout-admin .layui-header .layui-nav .layui-nav-mored{border-color: transparent; border-bottom-color: #fbfbfb;}'
          ,'.layui-layout-admin .layui-header .layui-nav .layui-this:after, .layui-layout-admin .layui-header .layui-nav-bar{background-color: #fff; background-color: rgba(255,255,255,.5);}'
          ,'.layadmin-pagetabs .layui-tab-title li:after{display: none;}'
        ,'{{# } }}'
      ].join('')).render(options = $.extend({}, local.theme, options))
      ,styleElem = document.getElementById(id);
      
      //添加主题样式
      if('styleSheet' in style){
        style.setAttribute('type', 'text/css');
        style.styleSheet.cssText = styleText;
      } else {
        style.innerHTML = styleText;
      }
      style.id = id;
      
      styleElem && $body[0].removeChild(styleElem);
      $body[0].appendChild(style);
      $body.attr('layadmin-themealias', options.color.alias);
      
      //本地存储记录
      local.theme = local.theme || {};
      layui.each(options, function(key, value){
        local.theme[key] = value;
      });
      layui.data(setter.tableName, {
        key: 'theme'
        ,value: local.theme
      }); 
    }
    
    //初始化主题
    ,initTheme: function(index){
      var theme = setter.theme;
      index = index || 0;
      if(theme.color[index]){
        theme.color[index].index = index;
        admin.theme({
          color: theme.color[index]
        });
      }
    }
    
    //记录最近一次点击的页面标签数据
    ,tabsPage: {}
    
    //获取页面标签主体元素
    ,tabsBody: function(index){
      return $(APP_BODY).find('.'+ TABS_BODY).eq(index || 0);
    }
    
    //切换页面标签主体
    ,tabsBodyChange: function(index, options){
      options = options || {};
      admin.tabsBody(index).addClass(SHOW).siblings().removeClass(SHOW);
      events.rollPage('auto', index);

      // 如果是控制台 关闭菜单那状态
      var id = $(TABS_HEADER).eq(index).find('span').attr('data-id');
      var text = $(TABS_HEADER).eq(index).find('span').html();
      if (id === undefined || text === "修改密码") {

        $(".first-nav .layui-nav-tree .layui-nav-item").removeClass("activate");
        $("#LAY_app_body").addClass("hide-second-nav");
        $("#view").html("");

      } else {

        // 如果是点击选项卡进行切换
        if (!("text" in options)) {

          // 1、得到二级菜单
          var menus = JSON.parse(localStorage.getItem("menus"));
          var data = [];
          menus.forEach(function (item) {
            if (parseInt(id) === item['id']) {
              data = item;
            }
          });
          // 2、切换一级菜单选择状态
          $(".first-nav .layui-nav .layui-nav-item").removeClass("activate");
          $(".first-nav .layui-nav .layui-nav-item[data-id="+id+"]").addClass("activate");

          // 3、是否存在二级菜单,不存在则隐藏
          if (data) {
            $("#LAY_app_body").removeClass('hide-second-nav');
          } else {
            $("#LAY_app_body").addClass('hide-second-nav');
          }

          // 使用模板引擎, 渲染二三级菜单
          var getTpl =  document.getElementById('subMenu').innerHTML;
          var view = document.getElementById('view');
          laytpl(getTpl).render(data, function(html){
            view.innerHTML = html;
          });

          // 4、切换二级菜单选择状态
          $(".second-nav .layui-nav .layui-nav-item").removeClass("layui-this");
          $(".second-nav .layui-nav-tree .layui-nav-itemed dl dd").removeClass("layui-this");
          $(".second-nav .layui-nav .layui-nav-item a[lay-href='"+options.url+"']").parent().addClass("layui-this");
        }
      }
      
      //执行 {setter.MOD_NAME}.tabsPage 下的事件
      layui.event.call(this, setter.MOD_NAME, 'tabsPage({*})', {
        url: options.url
        ,text: options.text
      });
    }
    
    //resize事件管理
    ,resize: function(fn){
      var router = layui.router()
      ,key = router.path.join('-');
      
      if(admin.resizeFn[key]){
        $win.off('resize', admin.resizeFn[key]);
        delete admin.resizeFn[key];
      }
      
      if(fn === 'off') return; //如果是清除 resize 事件，则终止往下执行
      
      fn(), admin.resizeFn[key] = fn;
      $win.on('resize', admin.resizeFn[key]);
    }
    ,resizeFn: {}
    ,runResize: function(){
      var router = layui.router()
      ,key = router.path.join('-');
      admin.resizeFn[key] && admin.resizeFn[key]();
    }
    ,delResize: function(){
      this.resize('off');
    }
    
    //关闭当前 pageTabs
    ,closeThisTabs: function(){
      if(!admin.tabsPage.index) return;
      $(TABS_HEADER).eq(admin.tabsPage.index).find('.layui-tab-close').trigger('click');
      // 切换回上一级菜单
      var id = $(TABS_HEADER).eq(admin.tabsPage.index).find('span').attr('data-id');
      $(".first-nav .layui-nav .layui-nav-item").removeClass("activate");
      $(".first-nav .layui-nav .layui-nav-item[data-id="+id+"]").trigger("click");
    }
    
    //全屏
    ,fullScreen: function(){
      var ele = document.documentElement
      ,reqFullScreen = ele.requestFullScreen || ele.webkitRequestFullScreen 
      || ele.mozRequestFullScreen || ele.msRequestFullscreen;      
      if(typeof reqFullScreen !== 'undefined' && reqFullScreen) {
        reqFullScreen.call(ele);
      };
    }
    
    //退出全屏
    ,exitScreen: function(){
      var ele = document.documentElement
      if (document.exitFullscreen) {  
        document.exitFullscreen();  
      } else if (document.mozCancelFullScreen) {  
        document.mozCancelFullScreen();  
      } else if (document.webkitCancelFullScreen) {  
        document.webkitCancelFullScreen();  
      } else if (document.msExitFullscreen) {  
        document.msExitFullscreen();  
      }
    }
    
    //……
  };
  
  //事件
  var events = admin.events = {
    //伸缩
    flexible: function(othis){
      var iconElem = othis.find('#'+ APP_FLEXIBLE)
      ,isSpread = iconElem.hasClass(ICON_SPREAD);
      admin.sideFlexible(isSpread ? 'spread' : null);
    }
    
    //刷新
    ,refresh: function(){
      var ELEM_IFRAME = '.layadmin-iframe'
      ,length = $('.'+ TABS_BODY).length;
      
      if(admin.tabsPage.index >= length){
        admin.tabsPage.index = length - 1;
      }
      
      var iframe = admin.tabsBody(admin.tabsPage.index).find(ELEM_IFRAME);
      iframe[0].contentWindow.location.reload(true);
    }

    //输入框搜索
    ,serach: function(othis){
      othis.off('keypress').on('keypress',function(e){
        if(!this.value.replace(/\s/g, '')) return;
        //回车跳转
        if(e.keyCode === 13){
          var href = othis.attr('lay-action')
          ,text = othis.attr('lay-text') || '搜索';
          
          href = href + this.value;
          text = text + ' <span style="color: #FF5722;">'+ admin.escape(this.value) +'</span>';
          
          //打开标签页
          layui.index.openTabsPage(href, text);
          
          //如果搜索关键词已经打开，则刷新页面即可
          events.serach.keys || (events.serach.keys = {});
          events.serach.keys[admin.tabsPage.index] = this.value;
          if(this.value === events.serach.keys[admin.tabsPage.index]){
            events.refresh(othis);
          }
          
          //清空输入框
          this.value = '';
        }       
      });
    }
    
    //点击消息
    ,message: function(othis){
      othis.find('.layui-badge-dot').remove();
    }
    
    //弹出主题面板
    ,theme: function(){
      admin.popupRight({
        id: 'LAY_adminPopupTheme'
        ,success: function(){
          view(this.id).render('system/theme')
        }
      });
    }
    
    //便签
    ,note: function(othis){
      var mobile = admin.screen() < 2
      ,note = layui.data(setter.tableName).note;
      
      events.note.index = admin.popup({
        title: '便签'
        ,shade: 0
        ,offset: [
          '41px'
          ,(mobile ? null : (othis.offset().left - 250) + 'px')
        ]
        ,anim: -1
        ,id: 'LAY_adminNote'
        ,skin: 'layadmin-note layui-anim layui-anim-upbit'
        ,content: '<textarea placeholder="内容"></textarea>'
        ,resize: false
        ,success: function(layero, index){
          var textarea = layero.find('textarea')
          ,value = note === undefined ? '便签中的内容会存储在本地，这样即便你关掉了浏览器，在下次打开时，依然会读取到上一次的记录。是个非常小巧实用的本地备忘录' : note;
          
          textarea.val(value).focus().on('keyup', function(){
            layui.data(setter.tableName, {
              key: 'note'
              ,value: this.value
            });
          });
        }
      })
    }

    //全屏
    ,fullscreen: function(othis){
      var SCREEN_FULL = 'layui-icon-screen-full'
      ,SCREEN_REST = 'layui-icon-screen-restore'
      ,iconElem = othis.children("i");
      
      if(iconElem.hasClass(SCREEN_FULL)){
        admin.fullScreen();
        iconElem.addClass(SCREEN_REST).removeClass(SCREEN_FULL);
      } else {
        admin.exitScreen();
        iconElem.addClass(SCREEN_FULL).removeClass(SCREEN_REST);
      }
    }

    //弹出关于面板
    ,about: function(){
      admin.popupRight({
        id: 'LAY_adminPopupAbout'
        ,success: function(){
          view(this.id).render('system/about');
        }
      });
    }
    
    //弹出更多面板
    ,more: function(){
      admin.popupRight({
        id: 'LAY_adminPopupMore'
        ,success: function(){
          view(this.id).render('system/more');
        }
      });
    }
    
    //返回上一页
    ,back: function(){
      history.back();
    }
    
    //主题设置
    ,setTheme: function(othis){
      var index = othis.data('index')
      ,nextIndex = othis.siblings('.layui-this').data('index');
      
      if(othis.hasClass(THIS)) return;
      
      othis.addClass(THIS).siblings('.layui-this').removeClass(THIS);
      admin.initTheme(index);
    }
    
    //左右滚动页面标签
    ,rollPage: function(type, index){
      var tabsHeader = $('#LAY_app_tabsheader')
      ,liItem = tabsHeader.children('li')
      ,scrollWidth = tabsHeader.prop('scrollWidth')
      ,outerWidth = tabsHeader.outerWidth()
      ,tabsLeft = parseFloat(tabsHeader.css('left'));
      
      //右左往右
      if(type === 'left'){
        if(!tabsLeft && tabsLeft <=0) return;
        
        //当前的left减去可视宽度，用于与上一轮的页标比较
        var  prefLeft = -tabsLeft - outerWidth; 

        liItem.each(function(index, item){
          var li = $(item)
          ,left = li.position().left;
          
          if(left >= prefLeft){
            tabsHeader.css('left', -left);
            return false;
          }
        });
      } else if(type === 'auto'){ //自动滚动
        (function(){
          var thisLi = liItem.eq(index), thisLeft;
          
          if(!thisLi[0]) return;
          thisLeft = thisLi.position().left;
          
          //当目标标签在可视区域左侧时
          if(thisLeft < -tabsLeft){
            return tabsHeader.css('left', -thisLeft);
          }
          
          //当目标标签在可视区域右侧时
          if(thisLeft + thisLi.outerWidth() >= outerWidth - tabsLeft){
            var subLeft = thisLeft + thisLi.outerWidth() - (outerWidth - tabsLeft);
            liItem.each(function(i, item){
              var li = $(item)
              ,left = li.position().left;
              
              //从当前可视区域的最左第二个节点遍历，如果减去最左节点的差 > 目标在右侧不可见的宽度，则将该节点放置可视区域最左
              if(left + tabsLeft > 0){
                if(left - tabsLeft > subLeft){
                  tabsHeader.css('left', -left);
                  return false;
                }
              }
            });
          }
        }());
      } else {
        //默认向左滚动
        liItem.each(function(i, item){
          var li = $(item)
          ,left = li.position().left;

          if(left + li.outerWidth() >= outerWidth - tabsLeft){
            tabsHeader.css('left', -left);
            return false;
          }
        });
      }      
    }
    
    //向右滚动页面标签
    ,leftPage: function(){
      events.rollPage('left');
    }
    
    //向左滚动页面标签
    ,rightPage: function(){
      events.rollPage();
    }
    
    //关闭当前标签页
    ,closeThisTabs: function(){
      var topAdmin = parent === self ? admin : parent.layui.admin;
      topAdmin.closeThisTabs();
    }
    
    //关闭其它标签页
    ,closeOtherTabs: function(type){
      var TABS_REMOVE = 'LAY-system-pagetabs-remove';
      if(type === 'all'){
        $(TABS_HEADER+ ':gt(0)').remove();
        $(APP_BODY).find('.'+ TABS_BODY+ ':gt(0)').remove();

        $(TABS_HEADER).eq(0).trigger('click');
      } else {
        $(TABS_HEADER).each(function(index, item){
          if(index && index != admin.tabsPage.index){
            $(item).addClass(TABS_REMOVE);
            admin.tabsBody(index).addClass(TABS_REMOVE);
          }
        });
        $('.'+ TABS_REMOVE).remove();
      }
    }
    
    //关闭全部标签页
    ,closeAllTabs: function(){
      events.closeOtherTabs('all');
      $(".first-nav .layui-nav-tree .layui-nav-item").removeClass("activate");
      $("#LAY_app_body").addClass("hide-second-nav");
      $("#view").html("");
      //location.hash = '';
    }
    
    //遮罩
    ,shade: function(){
      admin.sideFlexible();
    }
    
    //检查更新
    ,update: function(){
      $.ajax({
        type: 'get',
        dataType: 'jsonp',
        data: {
          name: 'layuiAdmin'
          ,version: admin.v
        },
        url: 'https://fly.layui.com/api/product_update/',
        success: function(res){
          if(res.status === 0) {
            if(res.version === admin.v.replace(/\s|pro|std/g, '')){
              layer.alert('当前版本已经是最新版本');
            } else {
              layer.alert('检查到更新，是否前往下载？', {
                btn: ['更新', '暂不']
              }, function(index){
                layer.close(index);
                layer.open({
                  type: 2
                  ,content: 'https://fly.layui.com/user/product/'
                  ,area: ['100%', '100%']
                  ,title: '检查更新'
                });
              });
            }
          } else if(res.status == 1){
            layer.alert(res.msg, {
              btn: ['登入', '暂不']
            }, function(index){
              layer.close(index);
              layer.open({
                type: 2
                ,content: 'https://fly.layui.com/user/login/'
                ,area: ['100%', '100%']
                ,title: '检查更新'
              });
            });
          } else {
            layer.msg(res.msg || res.code, {shift: 6});
          }
        }, error: function(e){
          layer.msg('请求异常，请重试', {shift: 6});
        }
      });
    }
    
    //呼出IM 示例
    ,im: function(){
      admin.popup({
        id: 'LAY-popup-layim-demo' //定义唯一ID，防止重复弹出
        ,shade: 0
        ,area: ['800px', '300px']
        ,title: '面板外的操作示例'
        ,offset: 'lb'
        ,success: function(){
          //将 views 目录下的某视图文件内容渲染给该面板
          layui.view(this.id).render('layim/demo').then(function(){
            layui.use('im');
          });
        }
      })
    }
  };
  
  //初始
  !function(){
    //主题初始化，本地主题记录优先，其次为 initColorIndex
    var local = layui.data(setter.tableName);
    if(local.theme){
      admin.theme(local.theme);
    } else if(setter.theme){
      admin.initTheme(setter.theme.initColorIndex);
    }
    
    //常规版默认开启多标签页
    if(!('pageTabs' in layui.setter)) layui.setter.pageTabs = true;
    
    //不开启页面标签时
    if(!setter.pageTabs){
      $('#LAY_app_tabs').addClass(HIDE);
      container.addClass('layadmin-tabspage-none');
    }

    //低版本IE提示
    if(device.ie && device.ie < 10){
      view.error('IE'+ device.ie + '下访问可能不佳，推荐使用：Chrome / Firefox / Edge 等高级浏览器', {
        offset: 'auto'
        ,id: 'LAY_errorIE'
      });
    }
    
  }();
  
  //admin.prevRouter = {}; //上一个路由
  
  //监听 tab 组件切换，同步 index
  element.on('tab('+ FILTER_TAB_TBAS +')', function(data){
    admin.tabsPage.index = data.index;
  });
  
  //监听选项卡切换，改变菜单状态
  admin.on('tabsPage(setMenustatus)', function(router){
    var pathURL = router.url, getData = function(item){
      return {
        list: item.children('.layui-nav-child')
        ,a: item.children('*[lay-href]')
      }
    }
    ,sideMenu = $('#'+ SIDE_MENU)
    ,SIDE_NAV_ITEMD = 'layui-nav-itemed'
    
    //捕获对应菜单
    ,matchMenu = function(list){
      list.each(function(index1, item1){
        var othis1 = $(item1)
        ,data1 = getData(othis1)
        ,listChildren1 = data1.list.children('dd')
        ,matched1 = pathURL === data1.a.attr('lay-href');
        
        listChildren1.each(function(index2, item2){
          var othis2 = $(item2)
          ,data2 = getData(othis2)
          ,listChildren2 = data2.list.children('dd')
          ,matched2 = pathURL === data2.a.attr('lay-href');
          
          listChildren2.each(function(index3, item3){
            var othis3 = $(item3)
            ,data3 = getData(othis3)
            ,matched3 = pathURL === data3.a.attr('lay-href');
            
            if(matched3){
              var selected = data3.list[0] ? SIDE_NAV_ITEMD : THIS;
              othis3.addClass(selected).siblings().removeClass(selected); //标记选择器
              return false;
            }
            
          });

          if(matched2){
            var selected = data2.list[0] ? SIDE_NAV_ITEMD : THIS;
            othis2.addClass(selected).siblings().removeClass(selected); //标记选择器
            return false
          }
          
        });
        
        if(matched1){
          var selected = data1.list[0] ? SIDE_NAV_ITEMD : THIS;
          othis1.addClass(selected).siblings().removeClass(selected); //标记选择器
          return false;
        }
        
      });
    }
    
    //重置状态
    sideMenu.find('.'+ THIS).removeClass(THIS);
    
    //移动端点击菜单时自动收缩
    if(admin.screen() < 2) admin.sideFlexible();
    
    //开始捕获
    matchMenu(sideMenu.children('li'));
  });
  
  //监听侧边导航点击事件
  element.on('nav(layadmin-system-side-menu)', function(elem){
    if(elem.siblings('.layui-nav-child')[0] && container.hasClass(SIDE_SHRINK)){
      admin.sideFlexible('spread');
      layer.close(elem.data('index'));
    };
    admin.tabsPage.type = 'nav';
  });
  
  //监听选项卡的更多操作
  element.on('nav(layadmin-pagetabs-nav)', function(elem){
    var dd = elem.parent();
    dd.removeClass(THIS);
    dd.parent().removeClass(SHOW);
  });
  
  //同步路由
  var setThisRouter = function(othis){
    var layid = othis.attr('lay-id')
    ,attr = othis.attr('lay-attr')
    ,index = othis.index();
    
    admin.tabsBodyChange(index, {
      url: attr
    });
    //location.hash = layid === setter.entry ? '/' : attr;
  }
  ,TABS_HEADER = '#LAY_app_tabsheader>li';
  
  //标签页标题点击
  $body.on('click', TABS_HEADER, function(){
    var othis = $(this)
    ,index = othis.index();
    
    admin.tabsPage.type = 'tab';
    admin.tabsPage.index = index;

    setThisRouter(othis);
  });
  
  //监听 tabspage 删除
  element.on('tabDelete('+ FILTER_TAB_TBAS +')', function(obj){
    var othis = $(TABS_HEADER+ '.layui-this');
    
    obj.index && admin.tabsBody(obj.index).remove();
    setThisRouter(othis);
    
    //移除resize事件
    admin.delResize();
  });

  // 三级菜单收缩
  $body.on("click", ".second-nav .layui-nav-tree .layui-nav-itemed a", function () {
    var spanElem = $(this).children('i');
    if (spanElem.hasClass('up')) {
      spanElem.removeClass('up');
      $(this).next().show();
    } else {
      spanElem.addClass('up');
      $(this).next().hide();
    }
  });

  //页面跳转
  $body.on('click', '*[lay-href]', function(){
    var othis = $(this)
    ,href = othis.attr('lay-href')
    ,text = othis.attr('lay-text')
    ,menus_id = othis.attr('data-id')
    ,router = layui.router();
    
    admin.tabsPage.elem = othis;
    //admin.prevRouter[router.path[0]] = router.href; //记录上一次各菜单的路由信息

    // 解决选项卡 切换后 二级菜单点击样式 不会进行切换问题
    $(".second-nav .layui-nav .layui-nav-itemed  dl dd").removeClass('layui-this');
    $(".second-nav .layui-nav .layui-nav-item").removeClass('layui-this');
    $(this).parent().addClass('layui-this');

    //执行跳转
    var topLayui = parent === self ? layui : top.layui;
    topLayui.index.openTabsPage(href, text || othis.text(), menus_id);
    
    //如果为当前页，则执行刷新
    if(href === admin.tabsBody(admin.tabsPage.index).find('iframe').attr('src')){
      admin.events.refresh();
    }
  });
  
  //点击事件
  $body.on('click', '*[layadmin-event]', function(){
    var othis = $(this)
    ,attrEvent = othis.attr('layadmin-event');
    events[attrEvent] && events[attrEvent].call(this, othis);
  });
  
  //tips
  $body.on('mouseenter', '*[lay-tips]', function(){
    var othis = $(this);
    
    if(othis.parent().hasClass('layui-nav-item') && !container.hasClass(SIDE_SHRINK)) return;
    
    var tips = othis.attr('lay-tips')
    ,offset = othis.attr('lay-offset') 
    ,direction = othis.attr('lay-direction')
    ,index = layer.tips(tips, this, {
      tips: direction || 1
      ,time: -1
      ,success: function(layero, index){
        if(offset){
          layero.css('margin-left', offset + 'px');
        }
      }
    });
    othis.data('index', index);
  }).on('mouseleave', '*[lay-tips]', function(){
    layer.close($(this).data('index'));
  });
  
  //窗口resize事件
  var resizeSystem = layui.data.resizeSystem = function(){
    //layer.close(events.note.index);
    layer.closeAll('tips');
    
    if(!resizeSystem.lock){
      setTimeout(function(){
        admin.sideFlexible(admin.screen() < 2 ? '' : 'spread');
        delete resizeSystem.lock;
      }, 100);
    }
    
    resizeSystem.lock = true;
  }
  $win.on('resize', layui.data.resizeSystem);
  
  //接口输出
  exports('admin', admin);
});