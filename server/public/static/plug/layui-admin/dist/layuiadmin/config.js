/**

 @Name：layuiAdmin iframe版全局配置
 @Author：贤心
 @Site：http://www.layui.com/admin/
 @License：LPPL（layui付费产品协议）
    
 */
layui.define(['laytpl', 'layer', 'element', 'util'], function(exports){
  exports('setter', {
    container: 'LAY_app' //容器ID
    ,base: layui.cache.base //记录静态资源所在路径
    ,views: layui.cache.base + 'tpl/' //动态模板所在目录
    ,entry: 'index' //默认视图文件名
    ,engine: '.html' //视图文件后缀名
    ,pageTabs: true //是否开启页面选项卡功能。iframe版推荐开启
    
    ,name: 'layuiAdmin'
    ,tableName: ( typeof theme_tag !== 'undefined' && theme_tag === 2)?'layuiAdmin2':'layuiAdmin'
    ,MOD_NAME: 'admin' //模块事件名
    
    ,debug: true //是否开启调试模式。如开启，接口异常时会抛出异常 URL 等信息

    //自定义请求字段
    ,request: {
      tokenName: false //自动携带 token 的字段名（如：access_token）。可设置 false 不携带。
    }
    
    //自定义响应字段
    ,response: {
      statusName: 'code' //数据状态的字段名称
      ,statusCode: {
        ok: 1 //数据状态一切正常的状态码
        ,logout: 1001 //登录状态失效的状态码
      }
      ,msgName: 'msg' //状态信息的字段名称
      ,dataName: 'data' //数据详情的字段名称
    }
    
    //扩展的第三方模块
    ,extend: [
      'echarts', //echarts 核心包
      'echartsTheme' //echarts 主题
    ]
    
    //主题配置
    ,theme: {
      //内置主题配色方案
      color: [{
        main: '#20222A' //主题色
        ,selected: '#009688' //选中色
        ,alias: 'default' //默认别名
      },{
        main: '#03152A'
        ,selected: '#3B91FF'
        ,alias: 'dark-blue' //藏蓝
      },{
        main: '#2E241B'
        ,selected: '#A48566'
        ,alias: 'coffee' //咖啡
      },{
        main: '#50314F'
        ,selected: '#7A4D7B'
        ,alias: 'purple-red' //紫红
      },{
        main: '#344058'
        ,logo: '#1E9FFF'
        ,selected: '#1E9FFF'
        ,alias: 'ocean' //海洋
      },{
        main: '#3A3D49'
        ,logo: '#2F9688'
        ,selected: '#5FB878'
        ,alias: 'green' //墨绿
      },{
        main: '#20222A'
        ,logo: '#F78400'
        ,selected: '#F78400'
        ,alias: 'red' //橙色
      },{
        main: '#28333E'
        ,logo: '#AA3130'
        ,selected: '#AA3130'
        ,alias: 'fashion-red' //时尚红
      },{
        main: '#24262F'
        ,logo: '#3A3D49'
        ,selected: '#009688'
        ,alias: 'classic-black' //经典黑
      },{
        logo: '#226A62'
        ,header: '#2F9688'
        ,alias: 'green-header' //墨绿头
      },{
        main: '#344058'
        ,logo: '#0085E8'
        ,selected: '#1E9FFF'
        ,header: '#1E9FFF'
        ,alias: 'ocean-header' //海洋头
      },{
        header: '#393D49'
        ,alias: 'classic-black-header' //经典黑头
      },{
        main: '#50314F'
        ,logo: '#50314F'
        ,selected: '#7A4D7B'
        ,header: '#50314F'
        ,alias: 'purple-red-header' //紫红头
      },{
        main: '#28333E'
        ,logo: '#28333E'
        ,selected: '#AA3130'
        ,header: '#AA3130'
        ,alias: 'fashion-red-header' //时尚红头
      },{
        main: '#28333E'
        ,logo: '#009688'
        ,selected: '#009688'
        ,header: '#009688'
        ,alias: 'green-header' //墨绿头
      }]
      
      //初始的颜色索引，对应上面的配色方案数组索引
      //如果本地已经有主题色记录，则以本地记录为优先，除非请求本地数据（localStorage）
      ,initColorIndex: 1
    }
  });
});
