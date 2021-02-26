/**

 @Name：layuiAdmin iframe版主入口
 @Author：贤心
 @Site：http://www.layui.com/admin/
 @License：LPPL
    
 */
 
layui.extend({
  setter: 'config' //配置模块
  ,admin: 'lib/admin' //核心模块
  ,view: 'lib/view' //视图渲染模块
}).define(['setter', 'admin'], function(exports){
  var setter = layui.setter
  ,element = layui.element
  ,admin = layui.admin
  ,tabsPage = admin.tabsPage
  ,view = layui.view
  
  //打开标签页
  ,openTabsPage = function(url, text, menus_id){
    //遍历页签选项卡
    var matchTo
    ,tabs = $('#LAY_app_tabsheader>li')
    ,path = url.replace(/(^http(s*):)|(\?[\s\S]*$)/g, '');
    
    tabs.each(function(index){
      var li = $(this)
      ,layid = li.attr('lay-id');

      if(layid === url){
        matchTo = true;
        tabsPage.index = index;
      }
    });

    // 获取一级菜单ID
    var first_id = $(".first-nav .layui-nav .layui-nav-item.activate").attr("data-id");
        //如果是控制台的快捷方式点进来 那么应该使用 menus_id, 否则就是从菜单点击 使用一级菜单绑定的ID
        //值得注意的是 menus_id是在页面固定写死的, 如果你改变了菜单id  也要注意修改才行, 不然找不到菜单哦 FZR
        first_id = menus_id === undefined ? first_id : menus_id;
    
    text = text || '新标签页';
    
    if(setter.pageTabs){
      //如果未在选项卡中匹配到，则追加选项卡
      if(!matchTo){
        //延迟修复 Firefox 空白问题
        setTimeout(function(){
          $(APP_BODY).append([
            '<div class="layadmin-tabsbody-item layui-show">'
              ,'<iframe src="'+ url +'" frameborder="0" class="layadmin-iframe"></iframe>'
            ,'</div>'
          ].join(''));
        }, 10);
        
        tabsPage.index = tabs.length;
        element.tabAdd(FILTER_TAB_TBAS, {
          title: '<span data-id="'+first_id+'">'+ text +'</span>'
          ,id: url
          ,attr: path
        });
        
      }
    } else {
      var iframe = admin.tabsBody(admin.tabsPage.index).find('.layadmin-iframe');
      iframe[0].contentWindow.location.href = url;
    }

    //定位当前tabs
    element.tabChange(FILTER_TAB_TBAS, url);
    admin.tabsBodyChange(tabsPage.index, {
      url: url
      ,text: text
    });
  }
  
  ,APP_BODY = '#LAY_app_body', FILTER_TAB_TBAS = 'layadmin-layout-tabs'
  ,$ = layui.$, $win = $(window);
  
  //初始
  if(admin.screen() < 2) admin.sideFlexible();
  
  //将模块根路径设置为 controller 目录
  layui.config({
    base: setter.base + 'modules/'
  });
  
  //扩展 lib 目录下的其它模块
  layui.each(setter.extend, function(index, item){
    var mods = {};
    mods[item] = '{/}' + setter.base + 'lib/extend/' + item;
    layui.extend(mods);
  });
  
  view().autoRender();
  
  //加载公共模块
  layui.use('common');

  //对外输出
  exports('index', {
    openTabsPage: openTabsPage
  });
});
