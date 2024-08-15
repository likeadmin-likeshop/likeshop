var set_select = null;
layui.define(["jquery", "form"], function (exports) {
    var $ = layui.$;
    var ojb = {
        init: function () {
            $(document).on('input click','.input-select' ,function () {
                var url = $(this).attr('data-url');
                let that = $(this);
                clearTimeout(set_select);
                set_select = setTimeout(function () {
                    $.get(url + '?keyword=' + $(that).val(), function (res) {
                        var data = res.data;
                        if (data.length == 0) {
                            that.next().hide();
                            return;
                        }
                        var dd_exist = (that.parent().find('dl')).length == 0 ? false : true;
                        var html = dd_exist ? '' : '<dl class="layui-anim layui-anim-upbit select-option">';
                        for (var i in data) {
                            html += '<dd>' + data[i] + '</dd>';
                        }
                        html += dd_exist ? '' :'</dl>';
                        if(dd_exist){
                            that.parent().find('dl').html(html);
                        }else{
                            that.after(html);
                        }
                        that.next().show();
                    });
                }, 300);
            });
            $(document).on('blur','.input-select', function () {
                let that = this
                setTimeout(function () {
                    $(that).next().hide()
                }, 200)
            });
            $(document).on('click', '.select-option dd', function () {
                $(this).parents().prev().val($(this).text());
                $(this).parent().remove();
            });
        }
    };
    ojb.init();
    exports("like-select-input", ojb);
});