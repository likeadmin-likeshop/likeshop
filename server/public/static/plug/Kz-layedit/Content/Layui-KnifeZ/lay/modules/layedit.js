/**

 @Name：Kz.layedit 富文本编辑器
 @Author：贤心
 @Modifier:KnifeZ
 @License：MIT
 @Version: V21.04.11
 */
layui.define(['layer', 'form', 'code'], function (exports) {
    "use strict";

    /**
     * 移动端使用。获取触摸位置的元素。没有则返回null
     * @param touchEvent 触摸事件
     * @returns {Element} 触摸点的DOM对象
     */
    var getTouchElement = function (touchEvent) {
        var myLocation = touchEvent.originalEvent.changedTouches[0];
        return document.elementFromPoint(myLocation.clientX, myLocation.clientY);
    };

    var $ = layui.$
        , layer = layui.layer
        , form = layui.form
        , hint = layui.hint()
        , device = layui.device()
        , MOD_NAME = 'layedit'
        , THIS = 'layui-this'
        , SHOW = 'layui-show'
        , ABLED = 'layui-disabled'
        , Edit = function () {
            var that = this;
            that.index = 0;

            //全局配置
            that.config = {
                //默认工具bar
                tool: [
                    'strong', 'italic', 'underline', 'del'
                    , '|'
                    , 'left', 'center', 'right'
                    , '|'
                    , 'link', 'unlink', 'face', 'image'
                ]
                , uploadImage: {
                    url: ''
                    , done: function (data) {
                    }
                }
                , uploadVideo: {
                    url: ''
                    , done: function (data) {
                    }
                }
                , uploadFiles: {
                    url: ''
                    , done: function (data) {//文件上传接口返回code为0时的回调
                    }
                }
                , calldel: {
                    url: ''
                    , done: function (data) {
                    }
                }
                , quote: {
                    style: []
                    , js: []
                }
                , customTheme: {
                    video: {
                        title: []
                        , content: []
                        , preview: []
                    }
                }
                , customlink: {
                    title: '自定义链接'
                    , href: ''
                    , onmouseup: ''
                }
                , facePath: layui.cache.dir
                , devmode: false
                , autoSync: false
                , onchange: function (content) { }
                , hideTool: []
                , height: 280 //默认高
            };
        };
    //全局设置
    Edit.prototype.set = function (options) {
        var that = this;
        $.extend(true, that.config, options);
        return that;
    };

    //事件监听
    Edit.prototype.on = function (events, callback) {
        return layui.onevent(MOD_NAME, events, callback);
    };

    //建立编辑器
    Edit.prototype.build = function (id, settings) {
        settings = settings || {};

        var that = this
            , config = that.config
            , ELEM = 'layui-layedit'
            , textArea = $(typeof (id) == 'string' ? '#' + id : id)
            , name = 'LAY_layedit_' + (++that.index)
            , haveBuild = textArea.next('.' + ELEM)

            , set = $.extend({}, config, settings)

            , tool = function () {
                var node = []
                    , hideTools = {};
                set._elem = textArea;
                layui.each(set.hideTool, function (_, item) {
                    hideTools[item] = true;
                });
                layui.each(set.tool, function (_, item) {
                    if (tools[item] && !hideTools[item]) {
                        node.push(tools[item]);
                    }
                });
                return node.join('');
            }()


            , editor = $(['<div class="' + ELEM + '">'
                , '<div class="layui-unselect layui-layedit-tool">' + tool.replace("layBkColor_Index", "layBkColor_" + that.index).replace("layFontColor_Index", "layFontColor_" + that.index) + '</div>'
                , '<div class="layui-layedit-iframe">'
                , '<iframe  src="" id="' + name + '" name="' + name + '" textarea="' + id + '" frameborder="0"></iframe>'
                , '</div>'
                , '</div>'].join(''))

        //编辑器不兼容ie8以下
        if (device.ie && device.ie < 8) {
            return textArea.removeClass('layui-hide').addClass(SHOW);
        }

        haveBuild[0] && (haveBuild.remove());

        setIframe.call(that, editor, textArea[0], set)
        textArea.addClass('layui-hide').after(editor);
        //tool bind
        layui.use(['colorpicker', 'jquery'], function () {
            var colorpicker = layui.colorpicker, $ = layui.jquery;
            for (var i = 0; i <= that.index; i++) {
                colorpicker.render({
                    elem: '#layBkColor_' + i  //绑定元素
                    , predefine: true
                    , colors: ['#800000', '#cc0000', '#999999', '#ff8c00', '#ffb800', '#ff7800', '#1e90ff', '#009688', '#5fb878', '#ffffff', '#000000']
                    , size: 'xs'
                    , done: function (color) {
                        var iframeWin = getWin(this.elem.split('_')[1]);
                        if (device.ie)
                            iframeWin[0].document.execCommand('backColor', false, color);
                        else
                            iframeWin[0].document.execCommand('hiliteColor', false, color);

                        setTimeout(function () {
                            iframeWin[0].document.body.focus();
                        }, 10);
                    }
                });
                colorpicker.render({
                    elem: '#layFontColor_' + i  //绑定元素
                    , predefine: true
                    , colors: ['#800000', '#cc0000', '#999999', '#ff8c00', '#ffb800', '#ff7800', '#1e90ff', '#009688', '#5fb878', '#ffffff', '#000000']
                    , size: 'xs'
                    , color: '#000'
                    , done: function (color) {
                        var iframeWin = getWin(this.elem.split('_')[1]);
                        iframeWin[0].document.execCommand('forecolor', false, color);
                        setTimeout(function () {
                            iframeWin[0].document.body.focus();
                        }, 10);
                    }
                });
            }
        })
        //end
        return that.index;
    };

    //获得编辑器中内容
    Edit.prototype.getContent = function (index) {
        var iframeWin = getWin(index);
        if (!iframeWin[0]) return;
        return toLower(iframeWin[0].document.body.innerHTML);
    };

    //获得编辑器中纯文本内容
    Edit.prototype.getText = function (index) {
        var iframeWin = getWin(index);
        if (!iframeWin[0]) return;
        return $(iframeWin[0].document.body).text();
    };
    /**
     * 设置编辑器内容
     * @param {[type]} index   编辑器索引
     * @param {[type]} content 要设置的内容
     * @param {[type]} flag    是否追加模式
     */
    Edit.prototype.setContent = function (index, content, flag) {
        var iframeWin = getWin(index);
        if (!iframeWin[0]) return;
        if (flag) {
            $(iframeWin[0].document.body).append(content)
        } else {
            $(iframeWin[0].document.body).html(content)
        }
        this.sync(index)
    };
    //将编辑器内容同步到textarea（一般用于异步提交时）
    Edit.prototype.sync = function (index) {
        var iframeWin = getWin(index);
        if (!iframeWin[0]) return;
        var textarea = $('#' + iframeWin[1].attr('textarea'));
        textarea.val(toLower(iframeWin[0].document.body.innerHTML));
    };

    //获取编辑器选中内容
    Edit.prototype.getSelection = function (index) {
        var iframeWin = getWin(index);
        if (!iframeWin[0]) return;
        var range = Range(iframeWin[0].document);
        return document.selection ? range.text : range.toString();
    };

    //iframe初始化
    var setIframe = function (editor, textArea, set) {
        var that = this
            , iframe = editor.find('iframe');
        iframe.css({
            height: set.height
        }).on('load', function () {
            var conts = iframe.contents()
                , iframeWin = iframe.prop('contentWindow')
                , head = conts.find('head')
                , style = $(['<style>'
                    , '*{margin: 0; padding: 0;}'
                    , 'body{padding: 10px; line-height: 20px; overflow-x: hidden; word-wrap: break-word; font: 14px Helvetica Neue,Helvetica,PingFang SC,Microsoft YaHei,Tahoma,Arial,sans-serif; -webkit-box-sizing: border-box !important; -moz-box-sizing: border-box !important; box-sizing: border-box !important;}'
                    , 'a{color:#01AAED; text-decoration:none;}a:hover{color:#c00}'
                    , 'p{margin-bottom: 10px;}'
                    , 'video{max-width:400px;}'
                    , 'td{border: 1px solid #DDD;width:80px}'
                    , 'table{border-collapse: collapse;}'
                    , 'a[name]:before{content:"§";color: #01aaed;font-weight: bold;}'
                    , 'img{display: inline-block; border: none; vertical-align: middle;}'
                    , 'pre{margin: 10px 0; padding: 10px; line-height: 20px; border: 1px solid #ddd; border-left-width: 6px; background-color: #F2F2F2; color: #333; font-family: Courier New; font-size: 12px;}'
                    , '</style>'].join(''))
                , body = conts.find('body');
            var quoteStyle = function () {
                var content = [];
                layui.each(set.quote.style, function (index, item) {
                    content.push('<link href="' + item + '" rel="stylesheet"/>');
                });
                layui.each(set.quote.js, function (index, item) {
                    content.push('<script src="' + item + '"></script>');
                });
                return content.join('');
            }();
            head.append(style);
            head.append(quoteStyle);
            body.attr('contenteditable', 'true').css({
                'min-height': set.height
            }).html(textArea.value || '');
            hotkey.apply(that, [iframeWin, iframe, textArea, set]); //快捷键处理
            toolActive.call(that, iframeWin, editor, set); //触发工具

        });
    }

        //获得iframe窗口对象
        , getWin = function (index) {
            var iframe = $('#LAY_layedit_' + index)
                , iframeWin = iframe.prop('contentWindow');
            return [iframeWin, iframe];
        }

        //IE8下将标签处理成小写
        , toLower = function (html) {
            if (device.ie == 8) {
                html = html.replace(/<.+>/g, function (str) {
                    return str.toLowerCase();
                });
            }
            return html;
        }

        //快捷键处理
        , hotkey = function (iframeWin, iframe, textArea, set) {
            var iframeDOM = iframeWin.document
                , body = $(iframeDOM.body);
            body.on('keydown', function (e) {
                var keycode = e.keyCode;
                //处理回车
                if (keycode === 13) {
                    var range = Range(iframeDOM);
                    var container = getContainer(range)
                        , parentNode = container.parentNode;
                    if (parentNode.tagName.toLowerCase() === 'pre') {
                        if (e.shiftKey) return
                        layer.msg('请暂时用shift+enter');
                        return false;
                    }
                    if (parentNode.tagName.toLowerCase() === 'body' || container.tagName === 'BODY') {
                        iframeDOM.execCommand('formatBlock', false, '<p>');
                    }
                }
                //back键
                if (keycode === 8) {
                    var range = Range(iframeDOM);
                    var container = getContainer(range);
                    //删除第一条hr水平线
                    if (container.innerHTML == "<hr>" && container.tagName == "BODY") {
                        range.selectNode(container.childNodes[0]);
                        range.deleteContents();
                    }
                    //触发图片删除回调函数 p标签内图片
                    if (container.hasChildNodes() && container.childNodes[0].tagName == "IMG") {
                        var callDel = set.calldel;
                        if (callDel.url != "") {
                            if (range.commonAncestorContainer.childNodes[(range.startOffset - 1)].tagName != "IMG") {
                                //alert("error-无法找到图片路径");
                            } else {
                                $.post(
                                    callDel.url
                                    , {
                                        "imgpath": range.commonAncestorContainer.childNodes[(range.startOffset - 1)].src
                                    }
                                    , function (res) {
                                        callDel.done(res);
                                    }
                                );
                            }
                        }
                    }
                }
                //del
                if (keycode === 46) {
                    var range = Range(iframeDOM);
                    var container = getContainer(range);
                    //触发图片删除回调函数 p标签内图片
                    if (container.nextElementSibling == null) {
                        return;
                    }
                    if (container.nextElementSibling.tagName === "IMG") {
                        var callDel = set.calldel;
                        if (callDel.url != "") {
                            $.post(callDel.url, { "imgpath": container.nextElementSibling.src }, function (res) {
                                callDel.done(res);
                            })
                        }
                    }
                }

                setTimeout(function () {
                    //ctrl+b 加粗
                    if (e.ctrlKey && keycode == 66) {
                        var elem = document.createElement("strong");
                        body.find("b").each(function () {
                            elem.innerText = this.innerText;
                            this.outerHTML = elem.outerHTML;
                        });
                    }
                    var html = body.html();
                    //IE8下将标签处理成小写
                    if (device.ie == 8) {
                        html = html.replace(/<.+>/g, function (str) {
                            return str.toLowerCase();
                        });
                    }

                    if (set.autoSync) {
                        textArea.value = html;
                    }
                    set.onchange(html);
                }, 10);
            });

            //给textarea同步内容
            $(textArea).parents('form').on('submit', function () {
                var html = body.html();
                //IE8下将标签处理成小写
                if (device.ie == 8) {
                    html = html.replace(/<.+>/g, function (str) {
                        return str.toLowerCase();
                    });
                }
                textArea.value = html;
            });
            //处理粘贴
            body.on('paste', function (e) {
                var range = Range(iframeDOM);
                if (!(e.originalEvent.clipboardData && e.originalEvent.clipboardData.items)) {
                    return;
                }
                for (var i = 0, len = e.originalEvent.clipboardData.items.length; i < len; i++) {
                    var item = e.originalEvent.clipboardData.items[i];
                    if (item.kind === "file") {
                        var f = item.getAsFile();
                        var formData = new FormData();
                        formData.append('file', f);
                        var url = set.uploadImage.url;
                        var src = "";
                        $.ajax({
                            type: 'POST'
                            , url: url
                            , data: formData
                            , async: false
                            , contentType: false
                            , processData: false
                            , dataType: "json"
                            , mimeType: "multipart/form-data"
                            , success: function (data) {
                                if (data.code == 0 || data.code == 2) {
                                    src = data.data.src;
                                    set.uploadImage.done(data);
                                }
                            }
                            , error: function (d) {
                                layer.msg("上传服务器出错");
                            }
                        });
                        if (src != "") {
                            var elem = document.createElement("img");
                            elem.src = src;
                            if (device.ie) {
                                layer.msg("暂不支持IE浏览器");

                            } else {
                                var container = getContainer(range);
                                if (container.innerHTML == "<br>") {
                                    range.selectNode(container);
                                    range.deleteContents();
                                }
                                range.deleteContents();
                                range.insertNode(elem);
                                e.preventDefault(); //插入后禁止默认事件
                            }
                        } else {
                            layer.msg("图片上传失败！仅粘贴到内容");
                        }
                    }
                }
                setTimeout(function () {
                    filter.call(iframeWin, body);
                    textArea.value = body.html();
                }, 10);
            });
        }

        //标签过滤
        , filter = function (body) {
            var iframeWin = this
                , iframeDOM = iframeWin.document;
            //clean word start
            body.find('.MsoNormal,.MsoListParagraph').each(function () {
                this.removeAttribute('class');
            })
            body.html(body.html().replace(/<o:p> <\/o:p>/g, ""));
            body.html(body.html().replace(/o:/g, ""));
            body.html(body.html().replace(/<font>/gi, ""));
            body.html(body.html().replace(/<span>/gi, ""));
            body.html(body.html().replace(/<span [^>]+>/gi, ""));
            body.html(body.html().replace(/<\/span>/gi, ""));
            body.html(body.html().replace(/<P>/g, ""));
            body.html(body.html().replace(/<\/P>/g, ""));

            body.html(body.html().replace(/<p><\/p>/g, ""));//移除空p
            //clean word end
            //清除影响版面的css属性
            //body.find('*[style]').each(function () {
            //    var textAlign = this.style.textAlign;
            //    this.removeAttribute('style');
            //    $(this).css({
            //        'text-align': textAlign || ''
            //    })
            //});

            // 移除不安全的标签
            //    body.find('script,link').remove();

            ////修饰表格
            //body.find('table').addClass('layui-table');
        }

        //Range对象兼容性处理
        , Range = function (iframeDOM) {
            const selection = iframeDOM.getSelection()
            return iframeDOM.selection
                ? iframeDOM.selection.createRange()
                : selection.rangeCount && selection.getRangeAt(0);
        }

        //当前Range对象的endContainer兼容性处理
        , getContainer = function (range) {
            if (!range) return
            return range.endContainer || range.parentElement().childNodes[0]
        }

        //在选区插入内联元素
        , insertInline = function (tagName, attr, range) {
            var iframeDOM = this.document
                , elem = document.createElement(tagName);
            for (var key in attr) {
                elem.setAttribute(key, attr[key]);
            }
            elem.removeAttribute('text');
            // be fix by knifeZ
            if (device.ie) { //IE
                var text = range.text || attr.text;
                if (tagName === 'a' && !text) return;
                if (text) {
                    elem.innerHTML = text;
                }
                layer.msg("暂不支持IE浏览器");
                range.selectNode(this.document.body.childNodes.item(0));
                range.insertNode(elem);
            } else { //非IE
                var text = range.toString() || attr.text;
                if (tagName === 'a' && !text) return;
                if (text) {
                    elem.innerHTML = text;
                }
                var container = getContainer(range)
                    , parentNode = container.parentNode;

                //var elep = document.createElement('p');
                //if (tagName != "pre" && tagName != "span" && tagName != "p" && tagName != "a" && tagName != "hr" && tagName != "div" && parentNode.tagName != "P" && container.innerHTML != "<br>") {
                //    elep.appendChild(elem);
                //} else {
                //    elep = elem;
                //}
                //处理换行
                if (container.innerHTML == "<br>") {
                    range.selectNode(container);
                    range.deleteContents();
                }
                range.deleteContents();
                range.insertNode(elem);
                //图片默认居中
                if (tagName == "img" && container.innerHTML == "<br>") {
                    iframeDOM.execCommand('formatBlock', false, '<p>');
                    iframeDOM.execCommand('justifyCenter');
                    setTimeout(function () {
                        body.focus();
                    }, 10);
                }
            }
        }
        // 批量在选区插入内联元素 - 此处服务于图片
        ,insertInlineAll = function (data, range) {
            var iframeDOM = this.document;
            var elems = [];
            for(var i = 0; i < data.length;i++){
                elems[i] = document.createElement(data[i].tagName);
                for (var key in data[i].attr) {
                    elems[i].setAttribute(key, data[i].attr[key]);
                }
                elems[i].removeAttribute('text');
            }

            if (iframeDOM.selection) { //IE
                var text = range.text || attr.text;
                if (tagName === 'a' && !text) return;
                if (text) {
                    elem.innerHTML = text;
                }
                range.pasteHTML($(elems).prop('outerHTML'));
                range.select();
            } else { //非IE
                /*
                var text = range.toString() || attr.text;
                if (tagName === 'a' && !text) return;
                if (text) {
                    elem.innerHTML = text;
                }
                */
                range.deleteContents();
                for(var j = 0; j < elems.length;j++){
                    var text = range.toString() || data[j].attr.text;
                    // if (data[j].tagName === 'a' && !text) return;
                    if (text) {
                        elem.innerHTML = text;
                    }
                    range.insertNode(elems[j]);
                }
            }
        }

        //工具选中
        , toolCheck = function (tools, othis) {
            var iframeDOM = this.document
                , CHECK = 'layedit-tool-active'
                , container = getContainer(Range(iframeDOM))
                , item = function (type) {
                    return tools.find('.layedit-tool-' + type)
                }

            if (othis) {
                othis[othis.hasClass(CHECK) ? 'removeClass' : 'addClass'](CHECK);

            }
            tools.find('>i').removeClass(CHECK);
            item('unlink').addClass(ABLED);
            $(container).parents().each(function () {
                var tagName = this.tagName.toLowerCase()
                    , textAlign = this.style.textAlign;
                //be fix by kinfeZ
                //文字
                //if (tagName === 'b' || tagName === 'strong') {
                //    item('b').addClass(CHECK)
                //}
                //if (tagName === 'i' || tagName === 'em') {
                //    item('i').addClass(CHECK)
                //}
                //if (tagName === 'u') {
                //    item('u').addClass(CHECK)
                //}
                //if (tagName === 'strike') {
                //    item('d').addClass(CHECK)
                //}
                //对齐
                if (tagName === 'p') {
                    if (textAlign === 'center') {
                        item('center').addClass(CHECK);
                    } else if (textAlign === 'right') {
                        item('right').addClass(CHECK);
                    } else {
                        item('left').addClass(CHECK);
                    }
                }
                //超链接
                if (tagName === 'a') {
                    item('link').addClass(CHECK);
                    item('unlink').removeClass(ABLED);
                }
            });
        }

        //触发工具
        , toolActive = function (iframeWin, editor, set) {
            var iframeDOM = iframeWin.document
                , body = $(iframeDOM.body)
                , toolEvent = {
                    //超链接
                    link: function (range) {
                        var container = getContainer(range)
                            , parentNode = $(container).parent();
                        link.call(body, {
                            href: parentNode.attr('href')
                            , target: parentNode.attr('target')
                            , rel: parentNode.attr('rel')
                            , text: parentNode.attr('text') || range.toString()
                            , dmode: set.devmode
                        }, function (field) {
                            var parent = parentNode[0];
                            if (parent.tagName === 'A') {
                                parent.href = field.url;
                                parent.rel = field.rel;
                                if (field.rel == "") {
                                    parent.removeAttr("rel");
                                }
                                parent.target = field.target;
                                if (field.target == "_self" || field.target == undefined) {
                                    parent.removeAttr("target");
                                }
                                if (field.text != "") {
                                    parent.text = field.text;
                                }
                            } else {
                                var data = {
                                    target: field.target
                                    , href: field.url
                                    , rel: field.rel
                                    , text: field.text
                                };
                                if (field.rel == "" || field.rel == undefined) {
                                    delete data["rel"];
                                }
                                if (field.target == "_self" || field.target == undefined) {
                                    delete data["target"];
                                }
                                if (field.text == "") {
                                    data["text"] = data["href"]
                                }
                                insertInline.call(iframeWin, 'a', data, range);
                            }
                        });
                    }
                    //清除超链接
                    , unlink: function (range) {
                        iframeDOM.execCommand('unlink');
                    }
                    //表情
                    , face: function (range) {
                        face.call(this, { facePath: set.facePath }, function (img) {
                            insertInline.call(iframeWin, 'img', {
                                src: img.src
                                , alt: img.alt
                            }, range);
                            setTimeout(function () {
                                body.focus();
                            }, 10);
                        });
                    }
                    //图片
                    , image: function (range) {
                        var that = this;
                        layui.use('upload', function (upload) {
                            var uploadImage = set.uploadImage || {};
                            if (uploadImage.url == "") {
                                layer.msg("上传接口配置错误！");
                            }
                            upload.render({
                                url: uploadImage.url
                                , method: uploadImage.method
                                , field: uploadImage.field
                                , data: uploadImage.data
                                , headers: uploadImage.headers
                                , accept: uploadImage.accept || 'image'
                                , acceptMime: uploadImage.acceptMime || 'image/*'
                                , exts: uploadImage.exts || 'jpg|png|gif|bmp|jpeg'
                                , size: uploadImage.size || 1024 * 10
                                , elem: $(that).find('input')[0]
                                , done: function (res) {
                                    if (res.code == 0) {
                                        res.data = res.data || {};
                                        insertInline.call(iframeWin, 'img', {
                                            src: res.data.src
                                            , alt: res.data.title
                                        }, range);
                                        uploadImage.done(res);
                                        setTimeout(function () {
                                            body.focus();
                                        }, 10);
                                    } else {
                                        layer.msg(res.msg || '上传失败');
                                    }
                                }
                            });
                        });
                    }
                    //插入代码
                    , code: function (range) {
                        var codeConfig = set.codeConfig || { hide: false, encode: true, class: "layui-code" };
                        code.call(body, { hide: codeConfig.hide, default: codeConfig.default }, function (pre) {
                            if (codeConfig.encode || true) {
                                pre.code = pre.code.replace(/&(?!#?[a-zA-Z0-9]+;)/g, '&amp;')
                                    .replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/'/g, '&#39;').replace(/"/g, '&quot;');
                            }
                            insertInline.call(iframeWin, 'pre', {
                                text: pre.code
                                , 'lay-lang': pre.lang
                                , 'lay-encode': codeConfig.encode
                                , class: codeConfig.class || 'layui-code'
                            }, range);
                            setTimeout(function () {
                                layui.code();
                                body.focus();
                            }, 10);
                        });
                    }
                    /*#Extens#*/
                    //多图上传
                    , images: function (range) {
                        var that = this;
                        layer.open({
                            type: 1
                            , id: 'fly-jie-image-upload'
                            , title: '图片管理'
                            , shade: 0.05
                            , shadeClose: true
                            , area: function () {
                                if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 485) {
                                    return ['90%']
                                } else {
                                    return ['485px']
                                }
                            }()
                            , offset: function () {
                                if (/mobile/i.test(navigator.userAgent)) {
                                    return 'auto'
                                } else {
                                    return '100px'
                                }
                            }()
                            , skin: 'layui-layer-border'
                            , content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px;">'
                                , '<li class="layui-form-item">'
                                , '<div class="layui-upload">'
                                , '<button type="button" class="layui-btn" id="LayEdit_InsertImages"><i class="layui-icon"></i>多图上传</button> '
                                , '<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;min-height: 116px">'
                                , '  预览图(点击图片可删除)：<div class="layui-upload-list" id="imgsPrev"></div>'
                                , '</blockquote>'
                                , '</div>'
                                , '</li>'
                                , '<li class="layui-form-item" style="position: relative;width: 48%;display: inline-block;">'
                                , '<label class="layui-form-label" style="position: relative;z-index: 10;width: 60px;">宽度</label>'
                                , '<input type="text" required name="imgWidth" placeholder="px" style="position: absolute;width: 100%;padding-left: 70px;left: 0;top:0" value="" class="layui-input">'
                                , '</li>'
                                , '<li class="layui-form-item" style="position: relative;width: 48%;display: inline-block;margin-left: 4%;">'
                                , '<label class="layui-form-label" style="width: 60px;position: relative;z-index: 10;">高度</label>'
                                , '<input type="text" required name="imgHeight" placeholder="px" style="position: absolute;width: 100%;padding-left: 70px;left: 0;top:0" value="" class="layui-input">'
                                , '</li>'
                                , '</ul>'].join('')
                            , btn: ['确定', '取消']
                            , btnAlign: 'c'
                            , yes: function (index, layero) {
                                var styleStr = "";
                                if (layero.find('input[name="imgWidth"]').val() != "") {
                                    var w = layero.find('input[name="imgWidth"]').val();
                                    styleStr += w.indexOf('%') > 0 ? "width:" + w + ";" : "width:" + w + "px;";
                                }
                                if (layero.find('input[name="imgHeight"]').val() != "") {
                                    var h = layero.find('input[name="imgHeight"]').val();
                                    styleStr += h.indexOf('%') > 0 ? "height:" + h + ";" : "height:" + h + "px;";
                                }
                                if (layero.find('#imgsPrev').find('img').length === 0) {
                                    layer.msg('请选择要插入的图片');
                                } else {
                                    /*
                                    if (styleStr != "") styleStr = "style='" + styleStr + "'";
                                    insertInline.call(iframeWin, 'p', {
                                        text: layero.find('#imgsPrev').html().replace(new RegExp(/(style="max-width:70px;margin:2px")/g), styleStr)
                                    }, range);
                                    */
                                    var list = document.getElementById('imgsPrev').children;
                                    var objs = [];
                                    for(var i = 0; i < list.length;i++){
                                        objs.push({
                                            tagName: 'img',
                                            attr: {
                                                src: list[i].src,
                                                alt: list[i].alt,
                                                style: styleStr
                                            }
                                        })
                                    }
                                    insertInlineAll.call(iframeWin, objs, range);
                                    layer.close(index);
                                }
                            }
                            , btn2: function (index, layero) {
                                if (layero.find("#imgsPrev img").length > 0) {
                                    var imgPaths = "";
                                    for (var i = 0; i < layero.find("#imgsPrev img").length; i++) {
                                        imgPaths += layero.find("#imgsPrev img")[i].src;
                                    }
                                    var callDel = set.calldel;
                                    if (callDel.url != "") {
                                        $.post(callDel.url, { "imgpath": imgPaths }, function (res) {
                                            callDel.done(res);
                                        })
                                    }
                                }
                            }
                            , cancel: function (index, layero) {
                                if (layero.find("#imgsPrev img").length > 0) {
                                    var imgPaths = "";
                                    for (var i = 0; i < layero.find("#imgsPrev img").length; i++) {
                                        imgPaths += layero.find("#imgsPrev img")[i].src;
                                    }
                                    var callDel = set.calldel;
                                    if (callDel.url != "") {
                                        $.post(callDel.url, { "imgpath": imgPaths }, function (res) {
                                            callDel.done(res);
                                        })
                                    }
                                }
                            }
                            , success: function (layero, index) {
                                layui.use('upload', function () {
                                    var upload = layui.upload;
                                    var uploadImage = set.uploadImage || {};
                                    if (uploadImage.url == "") {
                                        layer.msg("上传接口配置错误！");
                                    }
                                    var loding;
                                    var errorIndex = [];//上传接口出错的文件索引
                                    //执行实例
                                    upload.render({
                                        elem: '#LayEdit_InsertImages'
                                        , url: uploadImage.url
                                        , method: uploadImage.method
                                        , data: uploadImage.data
                                        , headers: uploadImage.headers
                                        , accept: uploadImage.accept || 'image'
                                        , acceptMime: uploadImage.acceptMime || 'image/*'
                                        , exts: uploadImage.exts || 'jpg|png|gif|bmp|jpeg'
                                        , size: uploadImage.size || 1024 * 10
                                        , field: uploadImage.field
                                        , multiple: true
                                        , before: function (obj) {
                                            loding = layer.msg('文件上传中,请稍等', { icon: 16, shade: 0.3, time: 0 });
                                            obj.preview(function (index, file, result) {
                                                //由于有时预览会在allDone之后回调，此时所有单个文件的error已经执行，即已经出错的文件id以有，因此需要判断此预览文件id是否是上传出错文件的id，不是才预览
                                                if (errorIndex.indexOf(index) === -1)
                                                    $('#imgsPrev').append('<img data-index="' + index + '" src="' + result + '" alt="' + file.name + '" style="width:110px;height:110px;box-sizing: border-box;border: 1px solid #999;padding: 2px;margin-right:8px;margin-bottom:10px;" /> ')
                                            });
                                        }
                                        , allDone: function () {
                                            //所有上传操作完成后，删除出错的文件
                                            for (var i = 0; i < errorIndex.length; i++) {
                                                $('#imgsPrev').find('img[data-index="' + errorIndex[i] + '"]').remove();
                                            }
                                            layer.close(loding);
                                        }
                                        , error: function (index, upload) {
                                            //某文件上传接口返回错误时，将其错误index记录下来
                                            errorIndex.push(index);
                                        }
                                        , done: function (res, index, upload) {
                                            if (res.code == 0) {
                                                res.data = res.data || {};
                                                $('#imgsPrev img[data-index="' + index + '"]').attr('src', res.data.src);
                                                uploadImage.done(res);
                                            } else if (res.code == 2) {
                                                res.data = res.data || {};
                                                $('#imgsPrev img[data-index="' + index + '"]').attr('src', res.data.src);
                                                uploadImage.done(res);
                                            } else {
                                                layer.msg(res.msg || '上传失败');
                                            }

                                            layero.find('#imgsPrev img').on('click', function () {
                                                var imgsrc = this.src;
                                                var dataIndex = this.getAttribute("data-index");
                                                layer.confirm('是否删除该图片?', { icon: 3, title: '提示' }, function (index) {
                                                    var callDel = set.calldel;
                                                    if (callDel.url != "") {
                                                        $.post(callDel.url, { "imgpath": imgsrc }, function (res) {
                                                            $("#imgsPrev img[data-index=" + dataIndex + "]")[0].remove();
                                                            callDel.done(res);
                                                        })
                                                    } else {
                                                        layer.msg("没有配置回调参数");
                                                        $("#imgsPrev img[data-index=" + dataIndex + "]")[0].remove();
                                                    }
                                                    layer.close(index);
                                                });
                                            });
                                        }
                                    });
                                })
                            }
                        });
                    }
                    //图片2
                    , image_alt: function (range) {
                        //使用通用的图片编辑
                        imageEditor({
                            context: {
                                set: set
                            }//上传成功后，用于删除之前的图片
                            , beforeUpload: function (imageData, context) {
                                context.deleteImage(imageData);
                            }
                            , success: function (imageData) {
                                insertInline.call(iframeWin, 'img', {
                                    src: imageData.src
                                    , alt: imageData.alt
                                    , style: imageData.style
                                }, range);
                            }
                        });
                    }
                    //插入视频
                    , video: function (range) {
                        var body = this
                            , customTheme = set.customTheme || { video: [] }
                            , customContent = "";
                        if (customTheme.video.title.length > 0) {
                            customContent = AddCustomThemes(customTheme.video.title, customTheme.video.content, customTheme.video.preview);
                        }
                        layer.open({
                            type: 1
                            , id: 'fly-jie-video-upload'
                            , title: '视频管理'
                            , shade: 0.05
                            , shadeClose: true
                            , area: function () {
                                if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 485) {
                                    return ['90%']
                                } else {
                                    return ['485px']
                                }
                            }()
                            , offset: function () {
                                if (/mobile/i.test(navigator.userAgent)) {
                                    return 'auto'
                                } else {
                                    return '100px'
                                }
                            }()
                            , skin: 'layui-layer-border'
                            , content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px">'
                                , '<li class="layui-form-item" style="position: relative">'
                                , '<button type="button" class="layui-btn" id="LayEdit_InsertVideo" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传视频</button>'
                                , '<input type="text" name="video" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">'
                                , '</li>'
                                , '<li class="layui-form-item" style="position: relative">'
                                , '<button type="button" class="layui-btn" id="LayEdit_InsertImage" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传封面</button>'
                                , '<input type="text" name="cover" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">'
                                , '</li>'
                                , customContent
                                , '</ul>'].join('')
                            , btn: ['确定', '取消']
                            , btnAlign: 'c'
                            , yes: function (index, layero) {
                                var video = layero.find('input[name="video"]')
                                    , cover = layero.find('input[name="cover"]')
                                    , theme = layero.find('select[name="theme"]');
                                if (video.val() == '') {
                                    layer.msg('请选择一个视频或输入视频地址')
                                } else {
                                    var txt = '&nbsp;<video src="' + video.val() + '" poster="' + cover.val() + '" ' + set.videoAttr + ' controls="controls" >您的浏览器不支持video播放</video>&nbsp;';
                                    var custclass = '';
                                    if (customTheme.video.title.length > 0 && theme.length > 0) {
                                        //追加样式
                                        custclass = theme[0].options[theme[0].selectedIndex].value;
                                    }
                                    insertInline.call(iframeWin, 'div', {
                                        text: txt
                                        , class: custclass
                                    }, range);
                                    layer.close(index);
                                }
                            }
                            , btn2: function (index, layero) {
                                var callDel = set.calldel;
                                if (callDel.url != "") {
                                    $.post(callDel.url, {
                                        "imgpath": layero.find('input[name="cover"]').val()
                                        , "filepath": layero.find('input[name="video"]').val()
                                    }, function (res) {
                                        callDel.done(res);
                                    })
                                }
                            }
                            , cancel: function (index, layero) {
                                var callDel = set.calldel;
                                if (callDel.url != "") {
                                    $.post(callDel.url, {
                                        "imgpath": layero.find('input[name="cover"]').val()
                                        , "filepath": layero.find('input[name="video"]').val()
                                    }, function (res) {
                                        callDel.done(res);
                                    })
                                }
                            }
                            , success: function (layero, index) {
                                layui.use('upload', function (upload) {
                                    var loding
                                        , video = layero.find('input[name="video"]')
                                        , cover = layero.find('input[name="cover"]')
                                        , upload = layui.upload
                                        , uploadImage = set.uploadImage || {};

                                    if (uploadImage.url == "") {
                                        layer.msg("图片上传接口配置错误！");
                                    }
                                    var uploadfile = set.uploadVideo || {};

                                    if (uploadfile.url == "") {
                                        layer.msg("视频上传接口配置错误！");
                                    }
                                    //执行实例
                                    upload.render({
                                        elem: '#LayEdit_InsertImage'
                                        , url: uploadImage.url
                                        , method: uploadImage.method
                                        , data: uploadImage.data
                                        , headers: uploadImage.headers
                                        , accept: uploadImage.accept || 'image'
                                        , acceptMime: uploadImage.acceptMime || 'image/*'
                                        , exts: uploadImage.exts || 'jpg|png|gif|bmp|jpeg'
                                        , size: uploadImage.size || 1024 * 10
                                        , field: uploadImage.field
                                        , before: function (obj) {
                                            loding = layer.msg('文件上传中,请稍等哦', { icon: 16, shade: 0.3, time: 0 });
                                        }
                                        , done: function (res, input, upload) {
                                            layer.close(loding);
                                            if (res.code == 0) {
                                                res.data = res.data || {};
                                                cover.val(res.data.src);
                                                uploadImage.done(res);
                                            } else if (res.code == 2) {
                                                var curIndex = layer.open({
                                                    type: 1
                                                    , anim: 2
                                                    , icon: 5
                                                    , title: '提示'
                                                    , area: ['390px', '260px']
                                                    , offset: 't'
                                                    , content: res.msg + "<div><img src='" + res.data.src + "' style='max-height:100px'/></div><p style='text-align:center'>确定使用该文件吗？</p>"
                                                    , btn: ['确定', '取消']
                                                    , yes: function () {
                                                        res.data = res.data || {};
                                                        cover.val(res.data.src);
                                                        layer.close(curIndex);
                                                    }
                                                });
                                            } else {
                                                layer.msg(res.msg || "上传失败");
                                            }
                                        }
                                    });
                                    upload.render({
                                        elem: '#LayEdit_InsertVideo'
                                        , url: uploadfile.url
                                        , method: uploadfile.method
                                        , data: uploadfile.data
                                        , headers: uploadfile.headers
                                        , field: uploadfile.field
                                        , accept: uploadfile.accept || 'video'
                                        , acceptMime: uploadfile.acceptMime || 'video/*'
                                        , exts: uploadfile.exts || 'mp4|flv|avi|rm|rmvb'
                                        , size: uploadfile.size || 1024 * 20
                                        , before: function (obj) {
                                            loding = layer.msg('文件上传中,请稍等哦', { icon: 16, shade: 0.3, time: 0 });
                                        }
                                        , done: function (res, input, upload) {
                                            layer.close(loding);
                                            if (res.code == 0) {
                                                res.data = res.data || {};
                                                video.val(res.data.src);
                                                uploadfile.done(res);
                                            } else if (res.code == 2) {
                                                var curIndex = layer.open({
                                                    type: 1
                                                    , anim: 2
                                                    , icon: 5
                                                    , title: '提示'
                                                    , area: ['390px', '260px']
                                                    , offset: 't'
                                                    , content: res.msg + "<div><video src='" + res.data.src + "' style='max-height:100px' controls='controls'/></div><p style='text-align:center'>确定使用该文件吗？</p>"
                                                    , btn: ['确定', '取消']
                                                    , yes: function () {
                                                        res.data = res.data || {};
                                                        video.val(res.data.src);
                                                        layer.close(curIndex);
                                                    }
                                                });
                                            } else {
                                                layer.msg(res.msg || "上传失败");
                                            }
                                        }
                                    });
                                    var theme = layero.find('select[name="theme"]');
                                    if (customTheme.video.title.length > 0 && theme.length > 0) {
                                        layero.find('select[name="theme"]').on('change mouseover', function () {
                                            layer.tips("<img src='" + theme[0].options[theme[0].selectedIndex].attributes["data-img"].value + "' />", this);
                                        })
                                    }
                                })

                            }
                        });
                    }
                    //上传附件
                    , attachment: function (range) {
                        var that = this;
                        layer.open({
                            type: 1
                            , id: 'fly-jie-image-upload'
                            , title: '附件上传'
                            , shade: 0.05
                            , shadeClose: true
                            , area: function () {
                                if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 485) {
                                    return ['90%']
                                } else {
                                    return ['485px']
                                }
                            }()
                            , offset: function () {
                                if (/mobile/i.test(navigator.userAgent)) {
                                    return 'auto'
                                } else {
                                    return '100px'
                                }
                            }()
                            , skin: 'layui-layer-border'
                            , content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px;">'
                                , '<li class="layui-form-item">'
                                , '<div class="layui-upload">'
                                , '<button type="button" class="layui-btn" id="LayEdit_InsertFiles"><i class="layui-icon"></i>上传附件</button> '
                                , '<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;min-height: 116px">'
                                , '  上传列表：<div class="layui-upload-list" id="filesPrev"></div>'
                                , '</blockquote>'
                                , '</div>'
                                , '</li>'
                                , '</ul>'].join('')
                            , btn: ['确定', '取消']
                            , btnAlign: 'c'
                            , yes: function (index, layero) {
                                if (layero.find('#filesPrev').find('a').length === 0) {
                                    layer.msg('请选择要上传的附件');
                                } else {
                                    insertInline.call(iframeWin, 'p', {
                                        text: layero.find('#filesPrev').html()
                                    }, range);
                                    layer.close(index);
                                }
                            }
                            , success: function (layero, index) {
                                layui.use('upload', function () {
                                    var upload = layui.upload;
                                    var uploadFiles = set.uploadFiles || {};
                                    if (uploadFiles.url == "") {
                                        layer.msg("上传接口配置错误！");
                                    }
                                    var errorIndex = [];//上传接口出错的文件索引
                                    //执行实例
                                    upload.render({
                                        elem: '#LayEdit_InsertFiles'
                                        , url: uploadFiles.url
                                        , field: uploadFiles.field
                                        , headers: uploadFiles.headers
                                        , data: uploadFiles.data
                                        , method: uploadFiles.type
                                        , accept: uploadFiles.accept || 'file'
                                        , acceptMime: uploadFiles.acceptMime || 'file/*'
                                        , exts: uploadFiles.exts
                                        , size: uploadFiles.size || 1024 * 30
                                        , multiple: true
                                        , before: function (obj) {
                                            obj.preview(function (index, file, result) {
                                                //由于有时预览会在allDone之后回调，此时所有单个文件的error已经执行，即已经出错的文件id以有，因此需要判断此预览文件id是否是上传出错文件的id，不是才预览
                                                if (errorIndex.indexOf(index) === -1)
                                                    $('#filesPrev').append('<a data-index="' + index + '" target="_blank" href="' + result + '" alt="' + file.name + '" >' + file.name + '</a>&nbsp;')
                                            });
                                        }
                                        , allDone: function () {
                                            //所有上传操作完成后，删除出错的文件
                                            for (var i = 0; i < errorIndex.length; i++) {
                                                $('#filesPrev').find('a[data-index="' + errorIndex[i] + '"]').remove();
                                            }

                                            //触发自动插入编辑器功能
                                            if (uploadFiles.autoInsert) {
                                                insertInline.call(iframeWin, 'p', {
                                                    text: layero.find('#filesPrev').html()
                                                }, range);
                                                layer.close(index);
                                            }
                                        }
                                        , error: function (index, upload) {
                                            //某文件上传接口返回错误时，将其错误index记录下来
                                            errorIndex.push(index);
                                        }
                                        , done: function (res, index, upload) {
                                            if (res.code == 0) {
                                                res.data = res.data || {};
                                                $('#filesPrev a[data-index="' + index + '"]').attr('href', res.data.src);
                                                uploadFiles.done(res);
                                            } else if (res.code == 2) {
                                                layer.msg(res.msg || '上传失败');
                                                res.data = res.data || {};
                                                $('#filesPrev a[data-index="' + index + '"]').attr('href', res.data.src);
                                                uploadFiles.done(res);
                                            } else {
                                                layer.msg(res.msg || '上传失败');
                                            }
                                            layero.find('#filesPrev a').on('click', function () {
                                                var dataIndex = this.getAttribute("data-index");
                                                layer.confirm('是否删除该附件?', { icon: 3, title: '提示' }, function (index) {
                                                    var callDel = set.calldel;
                                                    if (callDel.url != "") {
                                                        $.post(callDel.url, { "filepath": this.href }, function (res) {
                                                            $('#filesPrev').find('a[data-index="' + dataIndex + '"]').remove();
                                                            callDel.done(res);
                                                        })
                                                    } else {
                                                        layer.msg("没有配置回调参数");
                                                        $('#filesPrev').find('a[data-index="' + dataIndex + '"]').remove();
                                                    }
                                                    layer.close(index);
                                                });
                                            });
                                        }
                                    });
                                })
                            }
                        });
                    }
                    //源码模式
                    , html: function (range) {
                        var that = this;
                        if (that.parentElement.nextElementSibling.lastElementChild.id.indexOf('aceHtmleditor') == -1) {
                            var docs = that.parentElement.nextElementSibling.firstElementChild.contentDocument.body.innerHTML;
                            if (docs.indexOf("</pre>") > -1) {
                                docs = docs
                                    .replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&#39;/g, "'").replace(/&quot;/g, '"');
                            }
                            docs = style_html(docs, 4, ' ', 80);
                            that.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height:" + that.parentElement.nextElementSibling.clientHeight + "px");

                            if (this.parentElement.parentElement.getAttribute("style") !== null) this.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height: " + (this.parentElement.parentElement.offsetHeight - this.parentElement.offsetHeight - 14) + "px");


                            that.parentElement.nextElementSibling.firstElementChild.style = "position: absolute;left: -32768px;top: -32768px;";
                            var htmlPanel = document.createElement("div");
                            htmlPanel.setAttribute("id", that.parentElement.nextElementSibling.firstElementChild.id + "aceHtmleditor");
                            htmlPanel.setAttribute("style", "left: 0px;top: 0px;width: 100%;height: 100%");
                            that.parentElement.nextElementSibling.appendChild(htmlPanel);
                            var editor = ace.edit(that.parentElement.nextElementSibling.firstElementChild.id + 'aceHtmleditor');
                            editor.setFontSize(14);
                            editor.session.setMode("ace/mode/html");
                            editor.setTheme("ace/theme/tomorrow");
                            editor.setValue(docs);
                            editor.setOption("wrap", "free");
                            editor.gotoLine(0);
                            //工具栏屏蔽
                            $(that).siblings('i').addClass("layui-disabled");
                            $(that).siblings('.layedit-tool-fullScreen').removeClass("layui-disabled");
                            $(that).removeClass("layui-disabled");

                        } else {
                            var editor = ace.edit(that.parentElement.nextElementSibling.firstElementChild.id + 'aceHtmleditor');
                            var doc = editor.getValue();
                            iframeWin.document.body.innerHTML = doc;
                            iframeWin.document.body.childNodes.forEach(function (item, index, arr) {
                                if (item.tagName == "PRE") {
                                    item.innerHTML = item.innerHTML.replace(/&(?!#?[a-zA-Z0-9]+;)/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/'/g, '&#39;').replace(/"/g, '&quot;');
                                }
                            });
                            var height = that.parentElement.nextElementSibling.clientHeight;
                            that.parentElement.nextElementSibling.removeAttribute("style");
                            this.parentElement.nextElementSibling.firstElementChild.style = "height:" + height + "px";
                            this.parentElement.nextElementSibling.lastElementChild.remove();
                            $(that).siblings('i').removeClass("layui-disabled");
                        }
                    }
                    //全屏
                    , fullScreen: function (range) {
                        if (this.parentElement.parentElement.getAttribute("style") == null) {
                            this.parentElement.parentElement.setAttribute("style", "position: fixed;top: 0;left: 0;height: 100%;width: 100%;background-color: #fff;z-index: 9999;");
                            this.parentElement.nextElementSibling.style = "height:" + (this.parentElement.parentElement.offsetHeight - this.parentElement.offsetHeight - 8) + "px";
                            this.parentElement.nextElementSibling.firstElementChild.style = "height:100%";
                            //是否源码模式
                            if (this.parentElement.nextElementSibling.lastElementChild.id.indexOf('aceHtmleditor') > -1) {
                                this.parentElement.nextElementSibling.firstElementChild.style = "position: absolute;left: -32768px;top: -32768px;";
                                this.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height: " + (this.parentElement.parentElement.offsetHeight - this.parentElement.offsetHeight) + "px");
                            }
                        } else {
                            this.parentElement.parentElement.removeAttribute("style");
                            this.parentElement.nextElementSibling.removeAttribute("style");
                            this.parentElement.nextElementSibling.firstElementChild.style = "height:" + set.height;
                            if (this.parentElement.nextElementSibling.lastElementChild.id.indexOf('aceHtmleditor') > -1) {
                                this.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height:" + this.parentElement.nextElementSibling.firstElementChild.clientHeight + "px");
                                this.parentElement.nextElementSibling.firstElementChild.style = "position: absolute;left: -32768px;top: -32768px;";
                            }
                        }
                    }
                    , preview: function (range) {
                        var currStyle = [];
                        layui.each(set.quote.style, function (index, item) {
                            currStyle.push('<link href="' + item + '" rel="stylesheet"/>');
                        });
                        var setPreview = set.previewAttr || {
                            area: ['50%', '100%'], offset: 'r'
                        };
                        var docs = this.parentElement.nextElementSibling.firstElementChild.contentDocument.body.innerHTML;
                        layer.open({
                            type: 1
                            , id: 'layui-kz-preview'
                            , title: '预览'
                            , shade: 0.05
                            , maxmin: true
                            , full: function (index) {
                                index[0].style.height = ($(".layui-layer-shade").offsetHeight) + "px";
                                index[0].children[1].style.height = ($(".layui-layer-shade").offsetHeight - 43) + "px";
                            }, min: function (index) {
                            }, restore: function (index) {
                                index[0].style.height = (document.body.clientHeight - 100) + "px";
                                index[0].children[1].style.height = (document.body.clientHeight - 143) + "px";
                            }
                            , shadeClose: true
                            , area: function () {
                                if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 485) {
                                    return ['90%', '90%']
                                } else {
                                    return setPreview.area
                                }
                            }()
                            , offset: function () {
                                if (/mobile/i.test(navigator.userAgent)) {
                                    return 'auto'
                                } else {
                                    return setPreview.offset
                                }
                            }()
                            , content: currStyle.join('') + docs
                            , success: function (layero, index) {
                                //layer.full(index);//全屏
                                layer.setTop(layero); //置顶
                            }
                        })
                    }

                    , removeformat: function (range) {
                        //if (device.ie)
                        //    iframeDOM.execCommand('backColor', false, "#fff");
                        //else
                        //    iframeDOM.execCommand('hiliteColor', false, "#fff");

                        //iframeDOM.execCommand('forecolor', false, "#000");
                        iframeDOM.execCommand('removeFormat', 'strong', 'color');
                        setTimeout(function () {
                            body.focus();
                        }, 10);
                    }
                    , fontFomatt: function (range) {
                        var alt = set.fontFomatt || {
                            code: ["p", "h1", "h2", "h3", "h4", "div"]
                            , text: ["正文(p)", "一级标题(h1)", "二级标题(h2)", "三级标题(h3)", "四级标题(h4)", "块级元素(div)"]
                        };
                        var arr = {}
                            , arr2 = {}
                            , codes = alt.code
                            , texts = alt.text
                            , fonts = function () {
                                layui.each(codes, function (index, item) {
                                    arr[index] = item;
                                });
                                return arr;
                            }()
                            , fonttexts = function () {
                                layui.each(texts, function (index, item) {
                                    arr2[index] = item;
                                });
                                return arr2;
                            }()
                        fontFomatt.call(this, { fonts: fonts, texts: fonttexts }, function (value) {
                            iframeDOM.execCommand('formatBlock', false, "<" + value + ">");
                            setTimeout(function () {
                                body.focus();
                            }, 10);
                        });
                    }
                    , fontfamily: function (range) {
                        var alt = set.fontfamily || {
                            code: ["font-family:宋体,SimSun", "font-family:微软雅黑,Microsoft YaHei", "font-family:黑体, SimHei", "font-family:楷体,楷体_GB2312, SimKai", "font-family:arial, helvetica,sans-serif", "font-family:arial black,avant garde", "font-family:times new roman"]
                            , text: ["宋体", "微软雅黑", "黑体", "楷体", "arial", "arial black", "times new roman"]
                        };
                        var arr = {}
                            , arr2 = {}
                            , codes = alt.code
                            , texts = alt.text
                            , fonts = function () {
                                layui.each(codes, function (index, item) {
                                    arr[index] = item;
                                });
                                return arr;
                            }()
                            , fonttexts = function () {
                                layui.each(texts, function (index, item) {
                                    arr2[index] = item;
                                });
                                return arr2;
                            }();
                        fontfamily.call(this, { fonts: fonts, texts: fonttexts }, function (value) {
                            insertInline.call(iframeWin, 'span', {
                                style: value
                                , text: "&nbsp;"
                            }, range);
                            setTimeout(function () {
                                body.focus();
                            }, 10);
                        });
                    }
                    /*
                    , fontSize: function (range) {
                        var alt = set.fontSize || {
                            code: ["font-size:10px", "font-size:12px", "font-size:14px", "font-size:16px", "font-size:18px", "font-size:20px", "font-size:24px", "font-size:26px", "font-size:28px", "font-size:30px", "font-size:32px"]
                            , text: ["10px", "12px", "14px", "16px", "18px", "20px", "24px", "26px", "28px", "30px", "32px"]
                        };
                        var arr = {}
                            , arr2 = {}
                            , codes = alt.code
                            , texts = alt.text
                            , fonts = function () {
                                layui.each(codes, function (index, item) {
                                    arr[index] = item;
                                });
                                return arr;
                            }()
                            , fonttexts = function () {
                                layui.each(texts, function (index, item) {
                                    arr2[index] = item;
                                });
                                return arr2;
                            }();
                        fontSize.call(this, { fonts: fonts, texts: fonttexts }, function (value) {
                            insertInline.call(iframeWin, 'span', {
                                style: value
                                , text: "&nbsp;"
                            }, range);
                            setTimeout(function () {
                                body.focus();
                            }, 10);
                        });
                    }
                    */
                   // 字体大小
                   , fontSize: function (range) {
                        var alt = set.fontSize || {
                            code: ["1", "2", "3", "4", "5", "6","7"],
                            text: ["9px", "13px", "16px", "18px", "24px", "32px","48px"]
                        }, arr = {}, arr2 = {};
                        var codes = alt.code;
                        var texts = alt.text;
                        var fonts = function () {
                            layui.each(codes, function (index, item) {
                                arr[index] = item;
                            });
                            return arr;
                        }();
                        var fonttexts = function () {
                            layui.each(texts, function (index, item) {
                                arr2[index] = item;
                            });
                            return arr2;
                        }();
                        fontSize.call(this, { fonts: fonts, texts: fonttexts,last_value:set.fontSize_value }, function (value) {
                            set.fontSize_value = value;
                            var fontText = alt.code.indexOf(value);
                            if(fontText > 0){
                                fontText = alt.text[fontText];
                            }else {
                                fontText = value;
                            }

                            // 获取到对应的节点id
                            var list = getRangeNodes(range);

                            // window.iframeDOM = iframeDOM;
                            layer.msg('已成功设置字号为：'+fontText,{icon:6})
                            iframeDOM.execCommand('FontSize', false, value);

                            // 修改字体样式
                            for(var i = 0;i<list.length;i++){
                                var len = list[i].children.length;
                                if(!len || len == 0){
                                    continue;
                                }
                                for(var j = 0;j<len;j++){
                                    if(list[i].children[j].nodeName == 'FONT'){
                                        list[i].children[j].size = null;
                                        list[i].children[j].style.fontSize = fontText;
                                    }
                                }
                            }

                            // d.queryCommandValue("FontSize")
                            // iframeDOM.queryCommandValue('FontSize', false, value)
                            setTimeout(function () {
                                body.focus();
                                // 进行批量更改

                            }, 10);
                        });
                    }
                    // 间距
                    , lineHeight: function (range) {
                        var alt = set.lineHeight || {
                            code: ["1", "1.5", "1.75", "2", "3", "4","5"],
                            text: ["1", "1.5", "1.75", "2", "3", "4","5"]
                        }, arr = {}, arr2 = {};
                        var codes = alt.code;
                        var texts = alt.text;
                        var fonts = function () {
                            layui.each(codes, function (index, item) {
                                arr[index] = item;
                            });
                            return arr;
                        }();
                        var fonttexts = function () {
                            layui.each(texts, function (index, item) {
                                arr2[index] = item;
                            });
                            return arr2;
                        }();
                        lineHeight.call(this, { fonts: fonts, texts: fonttexts,last_value:set.lineHeight_value }, function (value) {
                            set.lineHeight_value = value;
                            var fontText = alt.code.indexOf(value);
                            if(fontText > 0){
                                fontText = alt.text[fontText];
                            }else {
                                fontText = value;
                            }

                            // 获取到对应的节点id
                            var list = getRangeNodes(range);

                            // window.iframeDOM = iframeDOM;
                            layer.msg('已成功设置行间距为：'+fontText,{icon:6})
                            // iframeDOM.execCommand('FontSize', false, value);

                            window.list = list;

                            // 修改字体样式
                            for(var i = 0;i<list.length;i++){
                                var len = list[i].children.length;
                                list[i].style.lineHeight = value + "em";
                            }


                            // iframeDOM.execCommand('formatBlock', false, "<" + value + ">");
                            setTimeout(function () {
                                body.focus();
                            }, 10);
                        });
                    }
                    , customlink: function (range) {
                        var container = getContainer(range)
                            , parentNode = $(container).parent();
                        customlink.call(body, { title: set.customlink.title }, function (field) {
                            var parent = parentNode[0];
                            if (parent.tagName === 'A') {
                                parent.href = field.url;
                                parent.rel = field.rel;
                            } else {
                                insertInline.call(iframeWin, 'a', {
                                    target: "_blank"
                                    , href: set.customlink.href
                                    , rel: "nofollow"
                                    , text: field.text
                                    , onmouseup: set.customlink.onmouseup
                                }, range);
                            }
                        });
                    }
                    , anchors: function (range) {
                        anchors.call(body, {}, function (field) {
                            insertInline.call(iframeWin, 'a', {
                                name: field.text
                                , text: " "
                            }, range);
                        });
                    }
                    , table: function (range) {
                        table.call(this, {}, function (opts) {
                            var tbody = "<tr>";
                            for (var i = 0; i < opts.cells; i++) {
                                tbody += "<td></td>";
                            }
                            tbody += "</tr>";
                            var tmptr = tbody;
                            for (var i = 0; i < opts.rows; i++) {
                                tbody += tmptr;
                            }
                            insertInline.call(iframeWin, 'table', {
                                text: tbody
                            }, range);
                        });
                    }
                    , addhr: function (range) {
                        insertInline.call(iframeWin, 'hr', {}, range);
                    }
                    /*End*/
                    //帮助
                    , help: function () {
                        layer.open({
                            type: 2
                            , title: '帮助'
                            , area: ['600px', '380px']
                            , shadeClose: true
                            , shade: 0.1
                            , offset: '100px'
                            , skin: 'layui-layer-msg'
                            , content: ['http://www.layui.com/about/layedit/help.html', 'no']
                        });
                    }
                }
                , tools = editor.find('.layui-layedit-tool')

                , click = function () {
                    var othis = $(this)
                        , events = othis.attr('layedit-event')
                        , command = othis.attr('lay-command');

                    if (othis.hasClass(ABLED)) return;

                    body.focus();

                    var range = Range(iframeDOM)
                        , container = range.commonAncestorContainer;

                    if (command) {
                        if (/justifyLeft|justifyCenter|justifyRight/.test(command)) {
                            if (container.parentNode.tagName === 'BODY') {
                                iframeDOM.execCommand('formatBlock', false, '<p>');
                            }
                        }
                        iframeDOM.execCommand(command);
                        setTimeout(function () {
                            if (/Bold/.test(command)) {
                                var elem = document.createElement("strong");
                                body.find("b").each(function () {
                                    elem.innerText = this.innerText;
                                    this.outerHTML = elem.outerHTML;
                                });
                            }
                            body.focus();
                        }, 10);
                    } else {
                        toolEvent[events] && toolEvent[events].call(this, range, iframeDOM);
                    }
                    toolCheck.call(iframeWin, tools, othis);
                }

                , isClick = /image/;

            tools.find('>i').on('mousedown', function () {
                var othis = $(this)
                    , events = othis.attr('layedit-event');
                if (isClick.test(events)) return;
                click.call(this)
            }).on('click', function () {
                var othis = $(this)
                    , events = othis.attr('layedit-event');
                if (!isClick.test(events)) return;
                click.call(this)
            });

            //触发内容区域
            body.on('click', function () {
                toolCheck.call(iframeWin, tools);
                layer.close(face.index);
                layer.close(fontFomatt.index);
                layer.close(fontfamily.index);
                layer.close(fontSize.index);
                layer.close(table.index);
            });
            //右键菜单自定义
            var rbtnIndex = null;
            var contextmenu = function (event) {
                var rbtn = set.rightBtn || {
                    type: "layBtn", customEvent: function (tagName, event) { }
                };
                if (event != null && rbtn.type != "default") {
                    layer.close(rbtnIndex);
                    var currenNode, parentNode;

                    currenNode = event.target;
                    parentNode = currenNode.parentNode;
                    if (rbtn.type == "custom") {
                        rbtn.customEvent(currenNode.tagName, event);
                        return false;
                    }
                    switch (currenNode.tagName) {
                        case "IMG":
                            imageEditor({
                                context: {
                                    set: set
                                }
                                , data: {
                                    src: event.target.src
                                    , alt: event.target.alt
                                    , width: event.target.style.width || event.target.getAttribute('width')
                                    , height: event.target.style.height || event.target.getAttribute('height')
                                }//打开图片编辑器之前
                                , beforeOpen: function (options, context) {
                                    //增加图片删除按钮
                                    options.btn.push('<span style="background:#FF5722;color:#FFF;display:block;margin:0 -15px;padding:0 15px;">删除</span>');
                                    options.btn3 = function (index, layero) {
                                        context.deleteImage(context.getImageData(), { src: 'must-delete' });
                                        event.toElement.remove();
                                        layer.close(index);
                                    }
                                }//上传前，用于删除之前的图片
                                , beforeUpload: function (imageData, context) {
                                    context.deleteImage(imageData);
                                }//点击确定后
                                , success: function (imageData, context) {
                                    event.target.src = imageData.src;
                                    event.target.alt = imageData.alt;
                                    event.target.style.width = imageData.width;
                                    event.target.style.height = imageData.height;
                                }
                            });
                            break;
                        case "VIDEO":
                            var customTheme = set.customTheme || { video: [] }
                                , customContent = "";
                            if (customTheme.video.title.length > 0) {
                                customContent = AddCustomThemes(customTheme.video.title, customTheme.video.content, customTheme.video.preview);
                            }
                            rbtnIndex = layer.open({
                                type: 1
                                , id: 'fly-jie-video-upload'
                                , title: '视频管理'
                                , shade: 0.05
                                , shadeClose: true
                                , area: function () {
                                    if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 485) {
                                        return ['90%']
                                    } else {
                                        return ['485px']
                                    }
                                }()
                                , offset: function () {
                                    if (/mobile/i.test(navigator.userAgent)) {
                                        return 'auto'
                                    } else {
                                        return '100px'
                                    }
                                }()
                                , skin: 'layui-layer-border'
                                , content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px">'
                                    , '<li class="layui-form-item" style="position: relative">'
                                    , '<button type="button" class="layui-btn" id="LayEdit_InsertVideo" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传视频</button>'
                                    , '<input type="text" name="video" value="' + event.target.src + '" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">'
                                    , '</li>'
                                    , '<li class="layui-form-item" style="position: relative">'
                                    , '<button type="button" class="layui-btn" id="LayEdit_InsertImage" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传封面</button>'
                                    , '<input type="text" name="cover" value="' + event.target.poster + '" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">'
                                    , '</li>'
                                    , customContent
                                    , '</ul>'].join('')
                                , btn: ['确定', '取消', '<span style="color:red">删除</span>']
                                , btnAlign: 'c'
                                , yes: function (index, layero) {
                                    var video = layero.find('input[name="video"]')
                                        , cover = layero.find('input[name="cover"]');
                                    if (video.val() == '') {
                                        layer.msg('请选择一个视频或输入视频地址')
                                    } else {
                                        event.target.src = video.val();
                                        event.target.poster = cover.val();
                                        layer.close(index);
                                    }
                                }
                                , btn2: function (index, layero) {
                                }
                                , btn3: function (index, layero) {
                                    var callDel = set.calldel;
                                    if (callDel.url != "") {
                                        $.post(callDel.url, {
                                            "filepath": event.target.src
                                            , "imgpath": event.target.poster
                                        }, function (res) {
                                            parentNode.remove();
                                            callDel.done(res);
                                        })
                                    } else {
                                        event.toElement.remove();
                                    }
                                    layer.close(index);
                                }
                                , success: function (layero, index) {
                                    layui.use('upload', function (upload) {
                                        var loding
                                            , video = layero.find('input[name="video"]')
                                            , cover = layero.find('input[name="cover"]')
                                            , upload = layui.upload
                                            , uploadImage = set.uploadImage || {}
                                            , uploadfile = set.uploadVideo || {};
                                        if (uploadImage.url == "") {
                                            layer.msg("图片上传接口配置错误！");
                                        }
                                        if (uploadfile.url == "") {
                                            layer.msg("视频上传接口配置错误！");
                                        }
                                        //执行实例
                                        upload.render({
                                            elem: '#LayEdit_InsertImage'
                                            , url: uploadImage.url
                                            , method: uploadImage.method
                                            , data: uploadImage.data
                                            , headers: uploadImage.headers
                                            , accept: uploadImage.accept || 'image'
                                            , acceptMime: uploadImage.acceptMime || 'image/*'
                                            , exts: uploadImage.exts || 'jpg|png|gif|bmp|jpeg'
                                            , size: uploadImage.size || 1024 * 10
                                            , field: uploadImage.field
                                            , before: function (obj) {
                                                loding = layer.msg('文件上传中,请稍等哦', { icon: 16, shade: 0.3, time: 0 });
                                            }
                                            , done: function (res, input, upload) {
                                                layer.close(loding);
                                                if (res.code == 0) {
                                                    res.data = res.data || {};
                                                    cover.val(res.data.src);
                                                    uploadImage.done(res);
                                                } else if (res.code == 2) {
                                                    var curIndex = layer.open({
                                                        type: 1
                                                        , anim: 2
                                                        , icon: 5
                                                        , title: '提示'
                                                        , area: ['390px', '260px']
                                                        , offset: 't'
                                                        , content: res.msg + "<div><img src='" + res.data.src + "' style='max-height:100px'/></div><p style='text-align:center'>确定使用该文件吗？</p>"
                                                        , btn: ['确定', '取消']
                                                        , yes: function () {
                                                            res.data = res.data || {};
                                                            cover.val(res.data.src);
                                                            layer.close(curIndex);
                                                        }
                                                    });
                                                } else {
                                                    layer.msg(res.msg || "上传失败");
                                                }
                                            }
                                        });
                                        upload.render({
                                            elem: '#LayEdit_InsertVideo'
                                            , url: uploadfile.url
                                            , method: uploadfile.method
                                            , data: uploadfile.data
                                            , headers: uploadfile.headers
                                            , field: uploadfile.field
                                            , accept: uploadfile.accept || 'video'
                                            , acceptMime: uploadfile.acceptMime || 'video/*'
                                            , exts: uploadfile.exts || 'mp4|flv|avi|rm|rmvb'
                                            , size: uploadfile.size || 1024 * 20
                                            , before: function (obj) {
                                                loding = layer.msg('文件上传中,请稍等哦', { icon: 16, shade: 0.3, time: 0 });
                                            }
                                            , done: function (res, input, upload) {
                                                layer.close(loding);
                                                if (res.code == 0) {
                                                    res.data = res.data || {};
                                                    video.val(res.data.src);
                                                    uploadfile.done(res);
                                                } else if (res.code == 2) {
                                                    var curIndex = layer.open({
                                                        type: 1
                                                        , anim: 2
                                                        , icon: 5
                                                        , title: '提示'
                                                        , area: ['390px', '260px']
                                                        , offset: 't'
                                                        , content: res.msg + "<div><video src='" + res.data.src + "' style='max-height:100px' controls='controls'/></div><p style='text-align:center'>确定使用该文件吗？</p>"
                                                        , btn: ['确定', '取消']
                                                        , yes: function () {
                                                            res.data = res.data || {};
                                                            video.val(res.data.src);
                                                            layer.close(curIndex);
                                                        }
                                                    });
                                                } else {
                                                    layer.msg(res.msg || "上传失败");
                                                }
                                            }
                                        });
                                        var theme = layero.find('select[name="theme"]');
                                        if (customTheme.video.title.length > 0 && theme.length > 0) {
                                            layero.find('select[name="theme"]').on('change mouseover', function () {
                                                layer.tips("<img src='" + theme[0].options[theme[0].selectedIndex].attributes["data-img"].value + "' />", this);
                                            })
                                        }
                                    })

                                }
                            });
                            break;
                        case "TD":
                            rbtnIndex = layer.open({
                                type: 1
                                , title: false
                                , shade: 0
                                , offset: [event.clientY + "px", event.clientX + "px"]
                                , skin: 'layui-box layui-util-face'
                                , content: function () {
                                    var content = [
                                        , '<li  style="float: initial;width:100%;" lay-command="addnewtr"> 新增行 </li>'
                                        , '<li  style="float: initial;width:100%;"  lay-command="deltr"> 删除行 </li>'].join('');
                                    return '<ul class="layui-clear" style="width: max-content;width:-moz-max-content;">' + content + '</ul>';
                                }()
                                , success: function (layero, index) {

                                    layero.find('li').on('click', function () {
                                        var othis = $(this)
                                            , command = othis.attr('lay-command');
                                        if (command) {
                                            switch (command) {
                                                case 'deltr':
                                                    parentNode.remove();
                                                    break;
                                                case 'addnewtr':
                                                    var html = "<tr>";
                                                    for (var i = 0; i < parentNode.children.length; i++) {
                                                        html += "<td></td>";
                                                    }
                                                    html += "</tr>";
                                                    $(parentNode).after(html)
                                                    break;
                                            }
                                        }
                                        layer.close(index);
                                    });
                                }
                            });
                            break;
                        default:
                            rbtnIndex = layer.open({
                                type: 1
                                , title: false
                                , closeBtn: false
                                , offset: function () {
                                    if (/mobile/i.test(navigator.userAgent)) {
                                        return 'auto'
                                    } else {
                                        var frame = set._elem.next().find('iframe').get(0);
                                        return [
                                            frame.offsetTop + event.clientY + parentNode.getBoundingClientRect().y + "px", frame.offsetLeft + event.clientX + parentNode.getBoundingClientRect().x + 'px'
                                        ];
                                    }
                                }()
                                , shade: function () {
                                    if (/mobile/i.test(navigator.userAgent)) {
                                        return 0.1
                                    }
                                    return 0;
                                }
                                , shadeClose: true
                                , content: ['<style>'
                                    , 'ul.context-menu > li > a{border: none;border-bottom: 1px solid rgba(0,0,0,.2);border-radius: 0}'
                                    , 'ul.context-menu > li > a:hover{border-color: rgba(0,0,0,.2);background:#eaeaea}'
                                    , 'ul.context-menu > li:last-child > a{border: none;}'
                                    , '</style>'
                                    , '<ul style="width:100px" class="context-menu">'
                                    , '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm" style="width:100%" lay-command="left"> 居左 </a></li>'
                                    , '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm" style="width:100%" lay-command="center"> 居中 </a></li>'
                                    , '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm" style="width:100%" lay-command="right"> 居右 </a></li>'
                                    , '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm context-menu-delete" style="width:100%" lay-command="right"> 删除 </a></li>'
                                    , '</ul>'].join('')
                                , success: function (layero, index) {
                                    var callDel = set.calldel;
                                    layero.find('.layui-btn-primary').on('click', function () {
                                        var othis = $(this)
                                            , command = othis.attr('lay-command');
                                        if (command) {
                                            if (currenNode.tagName == "VIDEO") {
                                                parentNode.style = "text-align:" + command;
                                            } else {
                                                currenNode.style = "text-align:" + command;
                                            }
                                        }
                                        layer.close(index);
                                    });
                                    layero.find('.context-menu-delete').on('click', function () {
                                        if (currenNode.tagName == "BODY") {
                                            layer.msg("不能再删除了")
                                        } else if (currenNode.tagName == "VIDEO") {
                                            if (callDel.url != "") {
                                                $.post(callDel.url, {
                                                    "filepath": event.target.src, "imgpath": event.target.poster
                                                }, function (res) {
                                                    parentNode.remove();
                                                    callDel.done(res);
                                                })
                                            } else {
                                                parentNode.remove();
                                            }
                                        } else if (currenNode.tagName == "IMG") {
                                            if (callDel.url != "") {
                                                $.post(callDel.url, { para: event.target.src }, function (res) {
                                                    currenNode.remove();
                                                    callDel.done(res);
                                                })
                                            } else {
                                                currenNode.remove();
                                            }
                                        } else {
                                            currenNode.remove();
                                        }
                                        layer.close(index);
                                    });
                                }
                            });
                            break;
                        //return true;
                    }
                    return false;
                }
            };
            if (/mobile/i.test(navigator.userAgent)) {
                var timeOutEvent;
                body.on({
                    touchstart: function (e) {
                        // 长按事件触发
                        timeOutEvent = setTimeout(function () {
                            contextmenu(e);
                            clearTimeout(timeOutEvent);
                        }, 300);
                        //长按300毫秒
                        e.preventDefault();
                    }, touchmove: function () {
                        clearTimeout(timeOutEvent);
                    }, touchend: function () {
                        clearTimeout(timeOutEvent);
                    }
                });
            } else {
                body.on('contextmenu', function (event) {
                    return contextmenu(event);
                })
            }
        }
        //超链接面板
        , link = function (options, callback) {
            var dMode = options.dmode;
            var body = this
                , index = layer.open({
                    type: 1
                    , id: 'LAY_layedit_link'
                    , area: function () {
                        if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 460) {
                            return ['90%']
                        } else {
                            return ['460px']
                        }
                    }()
                    , offset: function () {
                        if (/mobile/i.test(navigator.userAgent)) {
                            return 'auto'
                        } else {
                            return '100px'
                        }
                    }()
                    , shade: 0.05
                    , shadeClose: true
                    , moveType: 1
                    , title: '超链接'
                    , skin: 'layui-layer-msg'
                    , content: ['<ul class="layui-form" style="margin: 15px;">'
                        , '<li class="layui-form-item">'
                        , '<label class="layui-form-label" style="width: 70px;">链接地址</label>'
                        , '<div class="layui-input-block">'
                        , '<input name="url" value="' + (options.href || '') + '" autofocus="true" autocomplete="off" class="layui-input">'
                        , '</div>'
                        , '</li>'
                        , '<li class="layui-form-item">'
                        , '<label class="layui-form-label" style="width: 70px;">链接文本</label>'
                        , '<div class="layui-input-block">'
                        , '<input name="text" value="' + (options.text || '') + '" autofocus="true" autocomplete="off" class="layui-input" ' + (options.text !== "" ? 'readonly="readonly"' : '') + '>'
                        , '</div>'
                        , '</li>'
                        , '<li class="layui-form-item ' + (dMode ? '' : 'layui-hide') + '">'
                        , '<label class="layui-form-label" style="width: 70px;">打开方式</label>'
                        , '<div class="layui-input-block">'
                        , '<input type="radio" name="target" value="_blank" class="layui-input" title="新窗口" '
                        + (options.target === '_blank' ? 'checked' : '') + '>'
                        , '<input type="radio" name="target" value="_self" class="layui-input" title="当前窗口"'
                        + ((options.target === '_self' || !options.target) ? 'checked' : '') + '>'
                        , '</div>'
                        , '</li>'
                        , '<li class="layui-form-item ' + (dMode ? '' : 'layui-hide') + '">'
                        , '<label class="layui-form-label" style="width: 70px;">rel属性</label>'
                        , '<div class="layui-input-block">'
                        , '<input type="radio" name="rel" value="" class="layui-input" title="无" '
                        + ((options.rel === '' || !options.target) ? 'checked' : '') + '>'
                        , '<input type="radio" name="rel" value="nofollow" class="layui-input" title="nofollow"'
                        + ((options.rel === 'nofollow') ? 'checked' : '') + '>'
                        , '</div>'
                        , '</li>'
                        , '<button type="button" lay-submit lay-filter="layedit-link-yes" id="layedit-link-yes" class="layui-btn" style="display: none;"> 确定 </button>'
                        , '</ul>'].join('')
                    , btn: ['确定', '取消']
                    , btnAlign: 'c'
                    , yes: function (index, layero) {
                        $('#layedit-link-yes').click();
                    }
                    , btn1: function (index, layero) {
                        layer.close(index);
                        setTimeout(function () {
                            body.focus();
                        }, 10);
                    }
                    , success: function (layero, index) {
                        var eventFilter = 'submit(layedit-link-yes)';
                        form.render('radio');
                        form.on(eventFilter, function (data) {
                            layer.close(link.index);
                            callback && callback(data.field);
                        });
                    }
                });
            link.index = index;
        }

        , customlink = function (options, callback) {
            var body = this
                , index = layer.open({
                    type: 1
                    , id: 'LAY_layedit_customlink'
                    , area: function () {
                        if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 350) {
                            return ['90%']
                        } else {
                            return ['350px']
                        }
                    }()
                    , offset: function () {
                        if (/mobile/i.test(navigator.userAgent)) {
                            return 'auto'
                        } else {
                            return '100px'
                        }
                    }()
                    , shade: 0.05
                    , shadeClose: true
                    , moveType: 1
                    , title: options.title
                    , skin: 'layui-layer-msg'
                    , content: ['<ul class="layui-form" style="margin: 15px;">'
                        , '<li class="layui-form-item">'
                        , '<label class="layui-form-label" style="width: 60px;">名称</label>'
                        , '<div class="layui-input-block" style="margin-left: 90px">'
                        , '<input name="text" value="" autofocus="true" autocomplete="off" class="layui-input">'
                        , '</div>'
                        , '</li>'
                        , '<li class="layui-form-item" style="display:none">'
                        , '<button type="button" lay-submit lay-filter="layedit-link-yes" id="layedit-link-yes"> 确定 </button>'
                        , '</li>'
                        , '</ul>'].join('')
                    , btn: ['确定', '取消']
                    , btnAlign: 'c'
                    , yes: function (index, layero) {
                        $('#layedit-link-yes').click();
                    }
                    , success: function (layero, index) {
                        var eventFilter = 'submit(layedit-link-yes)';
                        form.render('radio');
                        form.on(eventFilter, function (data) {
                            callback && callback(data.field);
                            layer.close(customlink.index);
                        });
                    }
                });
            customlink.index = index;
        }
        , anchors = function (options, callback) {
            var body = this
                , index = layer.open({
                    type: 1
                    , id: 'LAY_layedit_addmd'
                    , area: function () {
                        if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 350) {
                            return ['90%']
                        } else {
                            return ['350px']
                        }
                    }()
                    , offset: function () {
                        if (/mobile/i.test(navigator.userAgent)) {
                            return 'auto'
                        } else {
                            return '100px'
                        }
                    }()
                    , shade: 0.05
                    , shadeClose: true
                    , moveType: 1
                    , title: '添加锚点'
                    , skin: 'layui-layer-msg'
                    , content: ['<ul class="layui-form" style="margin: 15px;">'
                        , '<li class="layui-form-item">'
                        , '<label class="layui-form-label" style="width: 60px;">名称</label>'
                        , '<div class="layui-input-block" style="margin-left: 90px">'
                        , '<input name="text" value="' + (options.name || '') + '" autofocus="true" autocomplete="off" class="layui-input">'
                        , '</div>'
                        , '</li>'
                        , '<button type="button" lay-submit lay-filter="layedit-link-yes" id="layedit-link-yes" class="layui-btn" style="display: none;"> 确定 </button>'
                        , '</ul>'].join('')
                    , btn: ['确定', '取消']
                    , btnAlign: 'c'
                    , yes: function (index, layero) {
                        $('#layedit-link-yes').click();
                    }
                    , success: function (layero, index) {
                        var eventFilter = 'submit(layedit-link-yes)';
                        form.render('radio');
                        form.on(eventFilter, function (data) {
                            layer.close(anchors.index);
                            callback && callback(data.field);
                        });
                    }
                });
            anchors.index = index;
        }
        , table = function (options, callback) {
            table.hide = table.hide || function (e) {
                if ($(e.target).attr('layedit-event') !== 'table') {
                    layer.close(table.index);
                }
            };
            if (!/mobile/i.test(navigator.userAgent)) {
                table.index = layer.tips(
                    function () {
                        return '<div style="padding: 5px;border: 1px solid #e6e6e6;"><span id="laytable_label" class="layui-label">0列 x 0行</span>'
                            + '<table class="layui-table" lay-size="sm">'
                            + '<tbody>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '</tbody>'
                            + '</table></div>';
                    }(), this, {
                    tips: 1
                    , time: 0
                    , skin: 'layui-box layui-util-face'
                    , maxWidth: 500
                    , success: function (layero, index) {
                        layero.find('td').on('mouseover', function () {
                            layero.find('#laytable_label')[0].innerText = (this.cellIndex + 1) + "列X" + (this.parentElement.rowIndex + 1) + "行";
                            layero.find('td').removeAttr("style");

                            $(this).attr('style', 'background-color:linen;');
                            $(this).prevAll().attr('style', 'background-color:linen;');
                            for (var i = 0; i < $(this.parentElement).prevAll().length; i++) {
                                for (var j = 0; j < $(this.parentElement).prevAll()[i].childNodes.length; j++) {
                                    if (j <= this.cellIndex) {
                                        $(this.parentElement).prevAll()[i].children[j].style = "background-color:linen;";
                                    }
                                }
                            }
                        });
                        layero.find('td').on('click', function () {
                            callback && callback({
                                cells: this.cellIndex + 1
                                , rows: this.parentElement.rowIndex
                            });
                            layer.close(index);
                        });
                        $(document).off('click', table.hide).on('click', table.hide);
                    }
                });
            } else {
                table.index = layer.open({
                    type: 1
                    , title: false
                    , closeBtn: 0
                    , shade: 0.05
                    , shadeClose: true
                    , content: function () {
                        return '<div style="padding: 5px;border: 1px solid #e6e6e6;"><span id="laytable_label" class="layui-label">0列 x 0行</span>'
                            + '<table class="layui-table" lay-size="sm">'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '<tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                            + '</table></div>';
                    }()
                    , area: ['85%']
                    , skin: 'layui-box layui-util-face'
                    , success: function (layero, index) {
                        layero.find('td').on('touchmove', function (e) {
                            var realTarget = getTouchElement(e);
                            if (realTarget != null && realTarget.tagName.toUpperCase() === 'TD') {
                                layero.find('#laytable_label')[0].innerText = (realTarget.cellIndex + 1) + "列X" + (realTarget.parentElement.rowIndex + 1) + "行";
                                layero.find('td').removeAttr("style");

                                $(realTarget).attr('style', 'background-color:linen;');
                                $(realTarget).prevAll().attr('style', 'background-color:linen;');
                                for (var i = 0; i < $(realTarget.parentElement).prevAll().length; i++) {
                                    for (var j = 0; j < $(realTarget.parentElement).prevAll()[i].childNodes.length; j++) {
                                        if (j <= realTarget.cellIndex) {
                                            $(realTarget.parentElement).prevAll()[i].children[j].style = "background-color:linen;";
                                        }
                                    }
                                }
                            }
                        });
                        layero.find('td').on('touchend', function (e) {
                            var realTarget = getTouchElement(e);
                            if (realTarget != null && realTarget.tagName.toUpperCase() === 'TD') {
                                callback && callback({
                                    cells: realTarget.cellIndex + 1
                                    , rows: realTarget.parentElement.rowIndex
                                });
                                layer.close(index);
                            }
                        });
                    }
                });
            }
            return table.index;
        }
        //表情面板
        , face = function (options, callback) {
            //表情库
            var faces = function () {
                var alt = ["[微笑]", "[嘻嘻]", "[哈哈]", "[可爱]", "[可怜]", "[挖鼻]", "[吃惊]", "[害羞]", "[挤眼]", "[闭嘴]", "[鄙视]", "[爱你]", "[泪]", "[偷笑]", "[亲亲]", "[生病]", "[太开心]", "[白眼]", "[右哼哼]", "[左哼哼]", "[嘘]", "[衰]", "[委屈]", "[吐]", "[哈欠]", "[抱抱]", "[怒]", "[疑问]", "[馋嘴]", "[拜拜]", "[思考]", "[汗]", "[困]", "[睡]", "[钱]", "[失望]", "[酷]", "[色]", "[哼]", "[鼓掌]", "[晕]", "[悲伤]", "[抓狂]", "[黑线]", "[阴险]", "[怒骂]", "[互粉]", "[心]", "[伤心]", "[猪头]", "[熊猫]", "[兔子]", "[ok]", "[耶]", "[good]", "[NO]", "[赞]", "[来]", "[弱]", "[草泥马]", "[神马]", "[囧]", "[浮云]", "[给力]", "[围观]", "[威武]", "[奥特曼]", "[礼物]", "[钟]", "[话筒]", "[蜡烛]", "[蛋糕]"]
                    , arr = {};
                layui.each(alt, function (index, item) {
                    arr[item] = options.facePath + 'images/face/' + index + '.gif';
                });
                return arr;
            }();
            face.hide = face.hide || function (e) {
                if ($(e.target).attr('layedit-event') !== 'face') {
                    layer.close(face.index);
                }
            };
            if (!/mobile/i.test(navigator.userAgent)) {
                face.index = layer.tips(function () {
                    var content = [];
                    layui.each(faces, function (key, item) {
                        content.push('<li title="' + key + '"><img src="' + item + '" alt="' + key + '"/></li>');
                    });
                    return '<ul class="layui-clear" style="width: 279px;">' + content.join('') + '</ul>';
                }(), this, {
                    tips: 1
                    , time: 0
                    , skin: 'layui-box layui-util-face'
                    , maxWidth: 500
                    , success: function (layero, index) {
                        layero.css({
                            marginTop: -4
                            , marginLeft: -10
                        }).find('.layui-clear>li').on('click', function () {
                            callback && callback({
                                src: faces[this.title]
                                , alt: this.title
                            });
                            layer.close(index);
                        });
                        $(document).off('click', face.hide).on('click', face.hide);
                    }
                });
            } else {
                face.index = layer.open({
                    type: 1
                    , title: false
                    , closeBtn: 0
                    , shade: 0.05
                    , shadeClose: true
                    , content: function () {
                        var content = [];
                        layui.each(faces, function (key, item) {
                            content.push('<li title="' + key + '"><img src="' + item + '" alt="' + key + '"/></li>');
                        });
                        return '<ul class="layui-clear" style="width: 279px;">' + content.join('') + '</ul>';
                    }()
                    , skin: 'layui-box layui-util-face'
                    , success: function (layero, index) {
                        layero.find('.layui-clear>li').on('click', function () {
                            callback && callback({
                                src: faces[this.title]
                                , alt: this.title
                            });
                            layer.close(index);
                        });
                    }
                });
            }
            return face.index;
        }
        , fontFomatt = function (options, callback) {
            fontFomatt.hide = fontFomatt.hide || function (e) {
                if ($(e.target).attr('layedit-event') !== 'fontFomatt' && $(e.target).attr('layedit-event') !== 'fontfamily') {
                    layer.close(fontFomatt.index);
                }
            }
            fontFomatt.index = layer.tips(function () {
                var content = [];
                layui.each(options.fonts, function (index, item) {
                    content.push('<li title="' + options.fonts[index] + '" style="float: initial;width:100%;"><' + options.fonts[index] + '>' + options.texts[index] + '</' + options.fonts[index] + '></li>');
                });
                return '<ul class="layui-clear" style="width: max-content;width:-moz-max-content;">' + content.join('') + '</ul>';
            }(), this, {
                tips: 1
                , time: 0
                , skin: 'layui-box layui-util-face'
                , success: function (layero, index) {
                    layero.css({ marginTop: -4, marginLeft: -10 }).find('.layui-clear>li').on('click', function () {
                        callback && callback(this.title, options.fonts);
                        layer.close(index);
                    });
                    $(document).off('click', fontFomatt.hide).on('click', fontFomatt.hide);
                }
            });
        }
        , fontfamily = function (options, callback) {
            fontfamily.hide = fontfamily.hide || function (e) {
                if ($(e.target).attr('layedit-event') != 'fontfamily') {
                    layer.close(fontfamily.index);
                }
            }
            fontfamily.index = layer.tips(function () {
                var content = [];
                layui.each(options.fonts, function (index, item) {
                    content.push('<li title="' + options.fonts[index] + '" style="float: initial;width:100%;' + options.fonts[index] + '"><' + options.fonts[index] + '>' + options.texts[index] + '</' + options.fonts[index] + '></li>');
                });
                return '<ul class="layui-clear" style="width: max-content;width:-moz-max-content;">' + content.join('') + '</ul>';
            }(), this, {
                tips: 1
                , time: 0
                , skin: 'layui-box layui-util-face'
                , success: function (layero, index) {
                    layero.css({ marginTop: -4, marginLeft: -10 }).find('.layui-clear>li').on('click', function () {
                        callback && callback(this.title, options.fonts);
                        layer.close(index);
                    });
                    $(document).off('click', fontfamily.hide).on('click', fontfamily.hide);
                }
            });
        }
        // 字体大小 显示操作
        ,fontSize = function (options, callback) {
            fontSize.hide = fontSize.hide || function (e) {
                if ($(e.target).attr('layedit-event') !== 'fontSize') {
                    layer.close(fontSize.index);
                }
            }
            if(!options.last_value){
                options.last_value = 2;
            }
            fontSize.index = layer.tips(function () {
                var content = [];
                layui.each(options.fonts, function (index, item) {
                    var iHtml = '';
                    if(options.last_value == options.fonts[index]){
                        iHtml = '&nbsp;&nbsp;<i class="layui-icon">&#xe605;</i>'
                    }
                    content.push('<li title="' + options.fonts[index] + '">' + options.fonts[index] + '：' + options.texts[index] + iHtml +'</' + options.fonts[index] +'></li>');
                });
                return '<ul class="layui-clear" style="width: max-content;">' + content.join('') + '</ul>';
            }(), this, {
                    tips: 1
                    , time: 0
                    , skin: 'layui-box layui-util-font'
                    , success: function (layero, index) {
                        layero.css({ marginTop: -4, marginLeft: -10 }).find('.layui-clear>li').on('click', function () {
                            callback && callback(this.title, options.fonts,options.texts);
                            layer.close(index);
                        });
                        $(document).off('click', fontSize.hide).on('click', fontSize.hide);
                    }
                });
        }
         // 间距
         ,lineHeight = function (options, callback) {
            lineHeight.hide = lineHeight.hide || function (e) {
                if ($(e.target).attr('layedit-event') !== 'lineHeight') {
                    layer.close(lineHeight.index);
                }
            }

            if(!options.last_value){
                options.last_value = 1;
            }

            lineHeight.index = layer.tips(function () {
                var content = [];
                layui.each(options.fonts, function (index, item) {
                    var iHtml = '';
                    if(options.last_value == options.fonts[index]){
                        iHtml = '&nbsp;&nbsp;&nbsp;&nbsp;<i class="layui-icon">&#xe605;</i>'
                    }
                    content.push('<li title="' + options.fonts[index] + '">' + options.texts[index] + iHtml + '</' + options.fonts[index]  + '></li>');
                });
                return '<ul class="layui-clear" style="width: max-content;">' + content.join('') + '</ul>';
            }(), this, {
                    tips: 1
                    , time: 0
                    , skin: 'layui-box layui-util-font'
                    , success: function (layero, index) {
                        layero.css({ marginTop: -4, marginLeft: -10 }).find('.layui-clear>li').on('click', function () {
                            callback && callback(this.title, options.fonts);
                            layer.close(index);
                        });
                        $(document).off('click', lineHeight.hide).on('click', lineHeight.hide);
                    }
                });
        }
        //插入代码面板
        , code = function (options, callback) {
            var objSel = ['<li class="layui-form-item objSel">'
                , '<label class="layui-form-label">请选择语言</label>'
                , '<style>#selectCodeLanguage ~ .layui-form-select > dl {max-height: 192px} </style>'
                , '<div class="layui-input-block">'
                , '<select name="lang" id="selectCodeLanguage">'
                , '<option value="JavaScript">JavaScript</option>'
                , '<option value="HTML">HTML</option>'
                , '<option value="CSS">CSS</option>'
                , '<option value="Java">Java</option>'
                , '<option value="PHP">PHP</option>'
                , '<option value="C#">C#</option>'
                , '<option value="Python">Python</option>'
                , '<option value="Ruby">Ruby</option>'
                , '<option value="Go">Go</option>'
                , '</select>'
                , '</div>'
                , '</li>'].join('');
            if (options.hide) {
                objSel = ['<li class="layui-form-item" style="display:none">'
                    , '<label class="layui-form-label">请选择语言</label>'
                    , '<div class="layui-input-block">'
                    , '<select name="lang">'
                    , '<option value="' + options.default + '" selected="selected">'
                    , options.default
                    , '</option>'
                    , '</select>'
                    , '</div>'
                    , '</li>'].join('');
            }
            var body = this
                , index = layer.open({
                    type: 1
                    , id: 'LAY_layedit_code'
                    , area: function () {
                        if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 650) {
                            return ['90%']
                        } else {
                            return ['650px']
                        }
                    }()
                    , offset: function () {
                        if (/mobile/i.test(navigator.userAgent)) {
                            return 'auto'
                        } else {
                            return '100px'
                        }
                    }()
                    , shade: 0.05
                    , shadeClose: true
                    , moveType: 1
                    , title: '插入代码'
                    , skin: 'layui-layer-msg'
                    , content: ['<ul class="layui-form layui-form-pane" style="margin: 15px;">'
                        , objSel
                        , '<li class="layui-form-item layui-form-text">'
                        , '<label class="layui-form-label">代码</label>'
                        , '<div class="layui-input-block">'
                        , '<textarea name="code" lay-verify="required" autofocus="true" class="layui-textarea" style="height: 200px;"></textarea>'
                        , '</div>'
                        , '</li>'
                        , '<button type="button" id="layedit-code-yes" lay-submit lay-filter="layedit-code-yes" class="layui-btn" style="display: none"> 确定 </button>'
                        , '</ul>'].join('')
                    , btn: ['确定', '取消']
                    , btnAlign: 'c'
                    , yes: function (index, layero) {
                        $('#layedit-code-yes').click();
                    }
                    , btn1: function (index, layero) {
                        layer.close(index);
                        body.focus();
                    }
                    , success: function (layero, index) {
                        var eventFilter = 'submit(layedit-code-yes)';
                        form.render('select');
                        form.on(eventFilter, function (data) {
                            layer.close(code.index);
                            callback && callback(data.field, options.hide, options.default);
                        });
                    }
                });
            code.index = index;
        }
        //全部工具
        , tools = {
            html: '<i class="layui-icon layedit-tool-html" title="HTML源代码"  layedit-event="html"">&#xe64b;</i><span class="layedit-tool-mid"></span>'
            , undo: '<i class="layui-icon layedit-tool-undo" title="撤销" lay-command="undo" layedit-event="undo"">&#xe603;</i>'
            , redo: '<i class="layui-icon layedit-tool-redo" title="重做" lay-command="redo" layedit-event="redo"">&#xe602;</i>'
            , strong: '<i class="layui-icon layedit-tool-b" title="加粗" lay-command="Bold" layedit-event="b"">&#xe62b;</i>'
            , italic: '<i class="layui-icon layedit-tool-i" title="斜体" lay-command="italic" layedit-event="i"">&#xe644;</i>'
            , underline: '<i class="layui-icon layedit-tool-u" title="下划线" lay-command="underline" layedit-event="u"">&#xe646;</i>'
            , del: '<i class="layui-icon layedit-tool-d" title="删除线" lay-command="strikeThrough" layedit-event="d"">&#xe64f;</i>'

            , '|': '<span class="layedit-tool-mid"></span>'

            , left: '<i class="layui-icon layedit-tool-left" title="左对齐" lay-command="justifyLeft" layedit-event="left"">&#xe649;</i>'
            , center: '<i class="layui-icon layedit-tool-center" title="居中对齐" lay-command="justifyCenter" layedit-event="center"">&#xe647;</i>'
            , right: '<i class="layui-icon layedit-tool-right" title="右对齐" lay-command="justifyRight" layedit-event="right"">&#xe648;</i>'
            , link: '<i class="layui-icon layedit-tool-link" title="插入链接" layedit-event="link"">&#xe64c;</i>'
            , unlink: '<i class="layui-icon layedit-tool-unlink layui-disabled" title="清除链接" lay-command="unlink" layedit-event="unlink"" style="font-size:18px">&#xe64d;</i>'
            , face: '<i class="layui-icon layedit-tool-face" title="表情" layedit-event="face"" style="font-size:18px">&#xe650;</i>'
            , image: '<i class="layui-icon layedit-tool-image" title="图片" layedit-event="image" style="font-size:18px">&#xe64a;<input type="file" name="file"></i>'
            , code: '<i class="layui-icon layedit-tool-code" title="插入代码" layedit-event="code" style="font-size:18px">&#xe64e;</i>'

            , images: '<i class="layui-icon layedit-tool-images" title="多图上传" layedit-event="images" style="font-size:18px">&#xe634;</i>'
            , image_alt: '<i class="layui-icon layedit-tool-image_alt" title="图片" layedit-event="image_alt" style="font-size:18px">&#xe64a;</i>'
            , video: '<i class="layui-icon layedit-tool-video" title="插入视频" layedit-event="video" style="font-size:18px">&#xe6ed;</i>'
            , fullScreen: '<i class="layui-icon layedit-tool-fullScreen" title="全屏" layedit-event="fullScreen"style="font-size:18px">&#xe638;</i>'
            , colorpicker: '<i class="layui-icon" title="字体颜色选择" id="layFontColor_Index">&#xe66a;</i>'
            , fontBackColor: '<i class="layui-icon" title="字体背景色选择" id="layBkColor_Index"></i>'
            , fontFomatt: '<i class="layui-icon layedit-tool-fontFomatt" title="段落格式" layedit-event="fontFomatt" style="font-size:18px">&#xe639;</i>'
            , fontfamily: '<i class="layui-icon layedit-tool-fontfamily" title="字体" layedit-event="fontfamily" style="font-size:18px">&#xe702;</i>'
            , fontSize: '<i class="layui-icon layedit-tool-fontSize" title="字体大小" layedit-event="fontSize" style="font-size:18px">&#xe642;</i>'
            , lineHeight: '<i class="layui-icon layedit-tool-lineHeight" style="font-size:18px;" title="间距" layedit-event="lineHeight"">&#xe60a;</i>'
            , addhr: '<i class="layui-icon layui-icon-chart layedit-tool-addhr" title="添加水平线" layedit-event="addhr" style="font-size:18px"></i>'
            , anchors: '<i class="layui-icon layedit-tool-anchors" title="添加锚点" layedit-event="anchors" style="font-size:18px">&#xe60b;</i>'
            , customlink: '<i class="layui-icon layedit-tool-customlink" title="添加自定义链接" layedit-event="customlink" style="font-size:18px">&#xe606;</i>'
            , table: '<i class="layui-icon layedit-tool-table" title="插入表格" layedit-event="table" style="font-size:18px">&#xe62d;</i>'
            , attachment: '<i class="layui-icon layedit-tool-attachment" title="插入附件" layedit-event="attachment" style="font-size:18px">&#xe62f;</i>'
            , preview: '<i class="layui-icon layedit-tool-preview" title="预览" layedit-event="preview" style="font-size:18px">&#xe615;</i>'
            , removeformat: '<i class="layui-icon layedit-tool-removeformat" title="清除文字样式" layedit-event="removeformat" style="font-size:18px">&#xe615;</i>'
            , help: '<i class="layui-icon layedit-tool-help" title="帮助" layedit-event="help">&#xe607;</i>'
        }
        // 打开图片编辑框
        , imageEditor = function (options) {
            var context = options.context || {}
                , successCallback = options.success
                , beforeUploadCallback = options.beforeUpload
                , initialData = context.initialData = options.data
                , formId = context.formId = 'image-upload-' + parseInt(Math.random() * 1000000)
                , formatWidthHeight = function (val) {
                    var isNum = val.toString().indexOf('%') == -1;
                    return {
                        value: isNum ? parseInt(val) : val, string: isNum ? parseInt(val) + 'px' : val
                    };
                }
                , getImageData = context.getImageData = function () {
                    var imageData = layui.form.val(formId) || (function () {
                        //老版本layui.form.val无法取值
                        var itemForm = $('[lay-filter="' + formId + '"]').eq(0)
                            , field = {};
                        layui.each(itemForm.find('input,select,textarea'), function (_, item) {
                            field[item.name] = item.value;
                        });
                        return field;
                    })();
                    imageData.style = '';
                    if (imageData.width) {
                        imageData.width = formatWidthHeight(imageData.width).string;
                        imageData.style += "width:" + imageData.width + ";";
                    }
                    if (imageData.height) {
                        imageData.height = formatWidthHeight(imageData.height).string;
                        imageData.style += "height:" + imageData.height + ";";
                    }
                    context.logger && context.logger('getImageData', imageData);
                    return imageData;
                }
                , setImageData = context.setImageData = function (imageData) {
                    imageData = imageData || {};
                    if (!!imageData.width) {
                        imageData.width = formatWidthHeight(imageData.width).value;
                    }
                    if (!!imageData.height) {
                        imageData.height = formatWidthHeight(imageData.height).value;
                    }
                    form.val(formId, imageData);
                    //如果没有指定图片尺寸，尝试获取
                    if (imageData.src && !imageData.isInitialData && !imageData.loaded && !imageData.width && !imageData.height) {
                        var image = new Image();
                        image.src = imageData.src;
                        image.onload = function () {
                            imageData.loaded = true;
                            imageData.width = image.naturalWidth.toString();
                            imageData.height = image.naturalHeight.toString();
                            setImageData(imageData);
                        };
                    }
                }
                , checkImageSrc = context.checkImageSrc = function (imageData) {
                    if (!imageData.src) {
                        layer.msg('请先上传图片', { icon: 2, shade: 0.3, time: 1000 })
                    }
                    return !!imageData.src;
                }
                , imagePreview = context.imagePreview = function (imageData, title, callback) {
                    var image = new Image()
                        , maxWidth = /mobile/i.test(navigator.userAgent) ? 300 : 640
                        , maxHeight = /mobile/i.test(navigator.userAgent) ? 600 : 480;
                    image.src = imageData.src;
                    image.onload = function () {
                        //获取图片实际尺寸，并根据图片原始尺寸调整预览框大小
                        var width = image.naturalWidth
                            , height = image.naturalHeight;
                        if (width > maxWidth) {
                            height = height * maxWidth / width
                            width = maxWidth
                        }
                        if (height > maxHeight) {
                            width = width * maxHeight / height
                            height = maxHeight
                        }
                        layer.open({
                            type: 1
                            , anim: 2
                            , icon: 5
                            , title: title || null
                            , offset: '100px'
                            , area: [(width + 20) + 'px', (height + 77) + 'px']
                            , content: ['<div style="text-align:center;padding:10px;">'
                                , ' <img src="' + imageData.src + '" style="max-width:640px;max-height:480px"/>'
                                , '</div>'].join('')
                            , btn: ['确定', '取消']
                            , btnAlign: 'c'
                            , yes: function (index) {
                                callback && callback(imageData);
                                layer.close(index);
                            }
                            , btn2: function (index) {
                                layer.close(index);
                            }
                        });
                    };
                }
                , deleteImage = context.deleteImage = function (uploadImage, initialImage) {
                    uploadImage = uploadImage || getImageData();
                    initialImage = initialImage || initialData;
                    if (!uploadImage.src) {
                        //图片不存在
                    } else if (!!initialData && (uploadImage.src.substring(0 - initialImage.src.length) == initialImage.src || initialImage.src.substring(0 - uploadImage.src.length) == uploadImage.src)) {
                        //编辑图片时，图片没有做任何修改，不删除
                    } else {
                        var callDel = context.set.calldel;
                        $.post(callDel.url, { "imgpath": uploadImage.src }, function (res) {
                            callDel.done(res);
                        });
                    }
                }
                , openOptions = {
                    type: 1
                    , id: 'fly-jie-image-upload'
                    , title: null
                    , shade: 0.05
                    , shadeClose: true
                    , area: function () {
                        if (/mobile/i.test(navigator.userAgent) || $(window).width() <= 485) {
                            return ['90%']
                        } else {
                            return ['485px']
                        }
                    }()
                    , offset: function () {
                        if (/mobile/i.test(navigator.userAgent)) {
                            return 'auto'
                        } else {
                            return '100px'
                        }
                    }()
                    , skin: 'layui-layer-border'
                    , content: ['<div style="padding:20px">'
                        , '<form class="layui-form layui-form-pane" lay-filter="' + formId + '">'
                        , '  <div class="layui-form-item">'
                        , '    <div class="layui-inline">'
                        , '      <label class="layui-form-label">图片路径</label>'
                        , '      <div class="layui-input-inline" style="width:136px;">'
                        , '        <input type="text" name="src" placeholder="请点击上传图片" class="layui-input" readonly>'
                        , '      </div>'
                        , '    </div>'
                        , '    <div class="layui-inline" style="overflow:hidden;margin-left:-24px;margin-top:-1px;margin-right:0;">'
                        , '        <div class="layui-btn-group">'
                        , '          <button type="button" class="layui-btn" id="upload-' + formId + '"><i class="layui-icon layui-icon-upload"></i>上传图片</button>'
                        , '          <button type="button" class="layui-btn layui-btn-danger" id="preview-' + formId + '"><i class="layui-icon layui-icon-picture"></i>预览</button>'
                        , '      </div>'
                        , '    </div>'
                        , '  </div>'
                        , '  <div class="layui-form-item">'
                        , '    <div class="layui-inline">'
                        , '      <label class="layui-form-label">图片宽度</label>'
                        , '      <div class="layui-input-inline" style="width:95px;">'
                        , '        <input type="text" required name="width" placeholder="图片宽度" value="" class="layui-input">'
                        , '      </div>'
                        , '    </div>'
                        , '    <div class="layui-inline">'
                        , '      <label class="layui-form-label">图片高度</label>'
                        , '      <div class="layui-input-inline" style="width:95px;margin-right:0;">'
                        , '        <input type="text" required name="height" placeholder="图片高度" value="" class="layui-input">'
                        , '      </div>'
                        , '    </div>'
                        , '  </div>'
                        , '  <div class="layui-form-item">'
                        , '    <label class="layui-form-label">图片描述</label>'
                        , '    <div class="layui-input-block" style="margin-right:10px;">'
                        , '      <input type="text" required name="alt" placeholder="请输入图片描述，可为空" value="" class="layui-input">'
                        , '    </div>'
                        , '  </div>'
                        , '</form></div>'].join('')
                    , btn: ['确定', '取消']
                    , yes: function (index, layero) {
                        var imageData = getImageData();
                        if (checkImageSrc(imageData)) {
                            successCallback(imageData, context);
                            layer.close(index);
                        }
                    }
                    , btn2: function (index) {
                        deleteImage();
                        layer.close(index);
                    }
                    , success: function (layero, index) {
                        //初始化赋值
                        initialData && setImageData(initialData);

                        //预览
                        $('#preview-' + formId).click(function () {
                            var imageData = getImageData();
                            checkImageSrc(imageData) && imagePreview(imageData);
                        });

                        //上传
                        layui.use('upload', function (upload) {
                            var upload = layui.upload
                                , loding
                                , uploadImage = context.set.uploadImage || {};
                            if (!uploadImage.url) {
                                layer.msg("上传接口配置错误！");
                            }
                            //执行实例
                            upload.render({
                                elem: '#upload-' + formId
                                , url: uploadImage.url
                                , method: uploadImage.method
                                , data: uploadImage.data
                                , headers: uploadImage.headers
                                , accept: uploadImage.accept || 'image'
                                , acceptMime: uploadImage.acceptMime || 'image/*'
                                , exts: uploadImage.exts || 'jpg|png|gif|bmp|jpeg'
                                , size: uploadImage.size || 1024 * 10
                                , field: uploadImage.field
                                , before: function (obj) {
                                    beforeUploadCallback && beforeUploadCallback(getImageData(), context);
                                    loding = layer.msg('文件上传中,请稍等哦', { icon: 16, shade: 0.3, time: 0 });
                                }
                                , done: function (res) {
                                    layer.close(loding);
                                    res.data = res.data || {};
                                    if (res.code == 0) {
                                        setImageData(res.data);
                                    } else if (res.code == 2) {
                                        imagePreview(res.data, '确定使用该文件吗？', function (imageData) {
                                            setImageData(imageData);
                                        });
                                    } else {
                                        layer.msg(res.msg || "上传失败");
                                    }
                                }
                            });
                        })
                    }
                };

            //如果是编辑模式，增加初始数据标识
            if (!!initialData) {
                initialData.isInitialData = true
            }
            //通过beforeOpen调整layer.open选项
            options.beforeOpen && options.beforeOpen(openOptions, context);

            //开启编辑器
            layer.open(openOptions);
        }
        , edit = new Edit();
    form.render();
    exports(MOD_NAME, edit);
});

//Custom Theme Add
function AddCustomThemes (list, contents, pimgs) {
    var content = [];
    layui.each(list, function (index, item) {
        content.push('<option value="' + contents[index] + '"  data-img="' + pimgs[index] + '">' + item + '</option>');
    });
    return ['<li class="layui-form-item" style="position: relative">'
        , '<label class="layui-form-label">主题选择</label>'
        , '<div class="layui-input-block">'
        , '<select name="theme" style="display:block;height:38px;width:100%;">' + content.join('') + '</select>'
        , '</div>'
        , '</li>'].join('');
}

// 找出当前选中范围的节点
function getRangeNodes(range){
    var cls = range.commonAncestorContainer.nodeName == 'BODY' ? range.commonAncestorContainer.children : [range.commonAncestorContainer.parentElement];
    var list = [];
    var bool = false;
    for(var i = 0; i< cls.length;i++){
        var start = range.startContainer.parentElement;
        if(start.nodeName == "FONT"){
            start = start.parentElement;
        }

        var end = range.endContainer.parentElement
        if(end.nodeName == "FONT"){
            end = end.parentElement;
        }
        if(!bool && cls[i] == start){
            bool = true;
        } else if(bool && cls[i] == end){
            list.push(cls[i])
            break;
        }
        if(bool){
            list.push(cls[i])
        }
    }
    return list;
}

//HTML 格式化
function style_html (html_source, indent_size, indent_character, max_char) {
    var Parser, multi_parser;

    function Parser () {
        this.pos = 0;
        this.token = '';
        this.current_mode = 'CONTENT';
        this.tags = {
            parent: 'parent1'
            , parentcount: 1
            , parent1: ''
        };
        this.tag_type = '';
        this.token_text = this.last_token = this.last_text = this.token_type = '';
        this.Utils = {
            whitespace: "\n\r\t ".split('')
            , single_token: 'br,input,link,meta,!doctype,basefont,base,area,hr,wbr,param,img,isindex,?xml,embed'.split(',')
            , extra_liners: 'head,body,/html'.split(',')
            , in_array: function (what, arr) {
                for (var i = 0; i < arr.length; i++) {
                    if (what === arr[i]) {
                        return true;
                    }
                }
                return false;
            }
        }
        this.get_content = function () {
            var char = '';
            var content = [];
            var space = false;
            while (this.input.charAt(this.pos) !== '<') {
                if (this.pos >= this.input.length) {
                    return content.length ? content.join('') : ['', 'TK_EOF'];
                }
                char = this.input.charAt(this.pos);
                this.pos++;
                this.line_char_count++;
                if (this.Utils.in_array(char, this.Utils.whitespace)) {
                    if (content.length) {
                        space = true;
                    }
                    this.line_char_count--;
                    continue;
                } else if (space) {
                    if (this.line_char_count >= this.max_char) {
                        content.push('\n');
                        for (var i = 0; i < this.indent_level; i++) {
                            content.push(this.indent_string);
                        }
                        this.line_char_count = 0;
                    } else {
                        content.push(' ');
                        this.line_char_count++;
                    }
                    space = false;
                }
                content.push(char);
            }
            return content.length ? content.join('') : '';
        }

        this.get_script = function () {

            var char = '';
            var content = [];
            var reg_match = new RegExp('</script>', 'igm'); //使用RegExp，无需转义
            reg_match.lastIndex = this.pos;
            var reg_array = reg_match.exec(this.input);
            var end_script = reg_array ? reg_array.index : this.input.length;
            while (this.pos < end_script) {
                if (this.pos >= this.input.length) {
                    return content.length ? content.join('') : ['', 'TK_EOF'];
                }

                char = this.input.charAt(this.pos);
                this.pos++;


                content.push(char);
            }
            return content.length ? content.join('') : '';
        }

        this.record_tag = function (tag) {
            if (this.tags[tag + 'count']) {
                this.tags[tag + 'count']++;
                this.tags[tag + this.tags[tag + 'count']] = this.indent_level;
            } else {
                this.tags[tag + 'count'] = 1;
                this.tags[tag + this.tags[tag + 'count']] = this.indent_level;
            }
            this.tags[tag + this.tags[tag + 'count'] + 'parent'] = this.tags.parent;
            this.tags.parent = tag + this.tags[tag + 'count'];
        }

        this.retrieve_tag = function (tag) {
            if (this.tags[tag + 'count']) {
                var temp_parent = this.tags.parent;
                while (temp_parent) {
                    if (tag + this.tags[tag + 'count'] === temp_parent) {
                        break;
                    }
                    temp_parent = this.tags[temp_parent + 'parent'];
                }
                if (temp_parent) {
                    this.indent_level = this.tags[tag + this.tags[tag + 'count']];
                    this.tags.parent = this.tags[temp_parent + 'parent'];
                }
                delete this.tags[tag + this.tags[tag + 'count'] + 'parent'];
                delete this.tags[tag + this.tags[tag + 'count']];
                if (this.tags[tag + 'count'] == 1) {
                    delete this.tags[tag + 'count'];
                } else {
                    this.tags[tag + 'count']--;
                }
            }
        }
        this.get_tag = function () {
            var char = '';
            var content = [];
            var space = false;
            do {
                if (this.pos >= this.input.length) {
                    return content.length ? content.join('') : ['', 'TK_EOF'];
                }
                char = this.input.charAt(this.pos);
                this.pos++;
                this.line_char_count++;
                if (this.Utils.in_array(char, this.Utils.whitespace)) {
                    space = true;
                    this.line_char_count--;
                    continue;
                }
                if (char === "'" || char === '"') {
                    if (!content[1] || content[1] !== '!') {
                        char += this.get_unformatted(char);
                        space = true;
                    }
                }
                if (char === '=') {
                    space = false;
                }
                if (content.length && content[content.length - 1] !== '=' && char !== '>'
                    && space) {
                    if (this.line_char_count >= this.max_char) {
                        this.print_newline(false, content);
                        this.line_char_count = 0;
                    } else {
                        content.push(' ');
                        this.line_char_count++;
                    }
                    space = false;
                }
                content.push(char);
            } while (char !== '>');

            var tag_complete = content.join('');
            var tag_index;
            if (tag_complete.indexOf(' ') !== -1) {
                tag_index = tag_complete.indexOf(' ');
            } else {
                tag_index = tag_complete.indexOf('>');
            }
            var tag_check = tag_complete.substring(1, tag_index).toLowerCase();
            if (tag_complete.charAt(tag_complete.length - 2) === '/' ||
                this.Utils.in_array(tag_check, this.Utils.single_token)) {
                this.tag_type = 'SINGLE';
            } else if (tag_check === 'script') {
                this.record_tag(tag_check);
                this.tag_type = 'SCRIPT';
            } else if (tag_check === 'style') {
                this.record_tag(tag_check);
                this.tag_type = 'STYLE';
            } else if (tag_check.charAt(0) === '!') {
                if (tag_check.indexOf('[if') !== -1) {
                    if (tag_complete.indexOf('!IE') != -1) {
                        var comment = this.get_unformatted('-->', tag_complete);
                        content.push(comment);
                    }
                    this.tag_type = 'START';
                } else if (tag_check.indexOf('[endif') !== -1) {
                    this.tag_type = 'END';
                    this.unindent();
                } else if (tag_check.indexOf('[cdata[') != -1) {
                    var comment = this.get_unformatted(']]>', tag_complete);
                    content.push(comment);
                    this.tag_type = 'SINGLE';
                } else {
                    var comment = this.get_unformatted('-->', tag_complete);
                    content.push(comment);
                    this.tag_type = 'SINGLE';
                }
            } else {
                if (tag_check.charAt(0) === '/') {
                    this.retrieve_tag(tag_check.substring(1));
                    this.tag_type = 'END';
                } else {
                    this.record_tag(tag_check);
                    this.tag_type = 'START';
                }
                if (this.Utils.in_array(tag_check, this.Utils.extra_liners)) {
                    this.print_newline(true, this.output);
                }
            }
            return content.join('');
        }
        this.get_unformatted = function (delimiter, orig_tag) {

            if (orig_tag && orig_tag.indexOf(delimiter) != -1) {
                return '';
            }
            var char = '';
            var content = '';
            var space = true;
            do {
                char = this.input.charAt(this.pos);
                this.pos++

                if (this.Utils.in_array(char, this.Utils.whitespace)) {
                    if (!space) {
                        this.line_char_count--;
                        continue;
                    }
                    if (char === '\n' || char === '\r') {
                        content += '\n';
                        for (var i = 0; i < this.indent_level; i++) {
                            content += this.indent_string;
                        }
                        space = false;
                        this.line_char_count = 0;
                        continue;
                    }
                }
                content += char;
                this.line_char_count++;
                space = true;
            } while (content.indexOf(delimiter) == -1);
            return content;
        }
        this.get_token = function () {
            var token;
            if (this.last_token === 'TK_TAG_SCRIPT') {
                var temp_token = this.get_script();
                if (typeof temp_token !== 'string') {
                    return temp_token;
                }
                token = js_beautify(temp_token, this.indent_size, this.indent_character, this.indent_level);
                return [token, 'TK_CONTENT'];
            }
            if (this.current_mode === 'CONTENT') {
                token = this.get_content();
                if (typeof token !== 'string') {
                    return token;
                } else {
                    return [token, 'TK_CONTENT'];
                }
            }
            if (this.current_mode === 'TAG') {
                token = this.get_tag();
                if (typeof token !== 'string') {
                    return token;
                } else {
                    var tag_name_type = 'TK_TAG_' + this.tag_type;
                    return [token, tag_name_type];
                }
            }
        }
        this.printer = function (js_source, indent_character, indent_size, max_char) {
            this.input = js_source || '';
            this.output = [];
            this.indent_character = indent_character || ' ';
            this.indent_string = '';
            this.indent_size = indent_size || 2;
            this.indent_level = 0;
            this.max_char = max_char || 7000;
            this.line_char_count = 0;
            for (var i = 0; i < this.indent_size; i++) {
                this.indent_string += this.indent_character;
            }
            this.print_newline = function (ignore, arr) {
                this.line_char_count = 0;
                if (!arr || !arr.length) {
                    return;
                }
                if (!ignore) {
                    while (this.Utils.in_array(arr[arr.length - 1], this.Utils.whitespace)) {
                        arr.pop();
                    }
                }
                arr.push('\n');
                for (var i = 0; i < this.indent_level; i++) {
                    arr.push(this.indent_string);
                }
            }
            this.print_token = function (text) {
                this.output.push(text);
            }
            this.indent = function () {
                this.indent_level++;
            }
            this.unindent = function () {
                if (this.indent_level > 0) {
                    this.indent_level--;
                }
            }
        }
        return this;
    }

    multi_parser = new Parser();
    multi_parser.printer(html_source, indent_character, indent_size);
    var f = true;
    while (true) {
        var t = multi_parser.get_token();
        multi_parser.token_text = t[0];
        multi_parser.token_type = t[1];
        if (multi_parser.token_type === 'TK_EOF') {
            break;
        }
        switch (multi_parser.token_type) {
            case 'TK_TAG_START':
            case 'TK_TAG_SCRIPT':
            case 'TK_TAG_STYLE':
                multi_parser.print_newline(false, multi_parser.output);
                multi_parser.print_token(multi_parser.token_text);
                multi_parser.indent();
                multi_parser.current_mode = 'CONTENT';
                break;
            case 'TK_TAG_END':
                if (f)
                    multi_parser.print_newline(true, multi_parser.output);
                multi_parser.print_token(multi_parser.token_text);
                multi_parser.current_mode = 'CONTENT';
                f = true;
                break;
            case 'TK_TAG_SINGLE':
                multi_parser.print_newline(false, multi_parser.output);
                multi_parser.print_token(multi_parser.token_text);
                multi_parser.current_mode = 'CONTENT';
                break;
            case 'TK_CONTENT':
                if (multi_parser.token_text !== '') {
                    f = false;
                    multi_parser.print_token(multi_parser.token_text);
                }
                multi_parser.current_mode = 'TAG';
                break;
        }
        multi_parser.last_token = multi_parser.token_type;
        multi_parser.last_text = multi_parser.token_text;
    }
    return multi_parser.output.join('');
}

//JS 格式化
function js_beautify (js_source_text, indent_size, indent_character, indent_level) {

    var input, output, token_text, last_type, last_text, last_word, current_mode, modes, indent_string;
    var whitespace, wordchar, punct, parser_pos, line_starters, in_case;
    var prefix, token_type, do_block_just_closed, var_line, var_line_tainted;


    function trim_output () {
        while (output.length && (output[output.length - 1] === ' ' || output[output.length - 1] === indent_string)) {
            output.pop();
        }
    }

    function print_newline (ignore_repeated) {
        ignore_repeated = typeof ignore_repeated === 'undefined' ? true : ignore_repeated;

        trim_output();

        if (!output.length) {
            return; // no newline on start of file
        }

        if (output[output.length - 1] !== "\n" || !ignore_repeated) {
            output.push("\n");
        }
        for (var i = 0; i < indent_level; i++) {
            output.push(indent_string);
        }
    }


    function print_space () {
        var last_output = output.length ? output[output.length - 1] : ' ';
        if (last_output !== ' ' && last_output !== '\n' && last_output !== indent_string) { // prevent occassional duplicate space
            output.push(' ');
        }
    }


    function print_token () {
        output.push(token_text);
    }

    function indent () {
        indent_level++;
    }


    function unindent () {
        if (indent_level) {
            indent_level--;
        }
    }


    function remove_indent () {
        if (output.length && output[output.length - 1] === indent_string) {
            output.pop();
        }
    }


    function set_mode (mode) {
        modes.push(current_mode);
        current_mode = mode;
    }


    function restore_mode () {
        do_block_just_closed = current_mode === 'DO_BLOCK';
        current_mode = modes.pop();
    }


    function in_array (what, arr) {
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] === what) {
                return true;
            }
        }
        return false;
    }


    function get_next_token () {
        var n_newlines = 0;
        var c = '';

        do {
            if (parser_pos >= input.length) {
                return ['', 'TK_EOF'];
            }
            c = input.charAt(parser_pos);

            parser_pos += 1;
            if (c === "\n") {
                n_newlines += 1;
            }
        }
        while (in_array(c, whitespace));

        if (n_newlines > 1) {
            for (var i = 0; i < 2; i++) {
                print_newline(i === 0);
            }
        }
        var wanted_newline = (n_newlines === 1);


        if (in_array(c, wordchar)) {
            if (parser_pos < input.length) {
                while (in_array(input.charAt(parser_pos), wordchar)) {
                    c += input.charAt(parser_pos);
                    parser_pos += 1;
                    if (parser_pos === input.length) {
                        break;
                    }
                }
            }

            // small and surprisingly unugly hack for 1E-10 representation
            if (parser_pos !== input.length && c.match(/^[0-9]+[Ee]$/) && input.charAt(parser_pos) === '-') {
                parser_pos += 1;

                var t = get_next_token(parser_pos);
                c += '-' + t[0];
                return [c, 'TK_WORD'];
            }

            if (c === 'in') { // hack for 'in' operator
                return [c, 'TK_OPERATOR'];
            }
            return [c, 'TK_WORD'];
        }

        if (c === '(' || c === '[') {
            return [c, 'TK_START_EXPR'];
        }

        if (c === ')' || c === ']') {
            return [c, 'TK_END_EXPR'];
        }

        if (c === '{') {
            return [c, 'TK_START_BLOCK'];
        }

        if (c === '}') {
            return [c, 'TK_END_BLOCK'];
        }

        if (c === ';') {
            return [c, 'TK_END_COMMAND'];
        }

        if (c === '/') {
            var comment = '';
            // peek for comment /* ... */
            if (input.charAt(parser_pos) === '*') {
                parser_pos += 1;
                if (parser_pos < input.length) {
                    while (!(input.charAt(parser_pos) === '*' && input.charAt(parser_pos + 1) && input.charAt(parser_pos + 1) === '/') && parser_pos < input.length) {
                        comment += input.charAt(parser_pos);
                        parser_pos += 1;
                        if (parser_pos >= input.length) {
                            break;
                        }
                    }
                }
                parser_pos += 2;
                return ['/*' + comment + '*/', 'TK_BLOCK_COMMENT'];
            }
            // peek for comment // ...
            if (input.charAt(parser_pos) === '/') {
                comment = c;
                while (input.charAt(parser_pos) !== "\x0d" && input.charAt(parser_pos) !== "\x0a") {
                    comment += input.charAt(parser_pos);
                    parser_pos += 1;
                    if (parser_pos >= input.length) {
                        break;
                    }
                }
                parser_pos += 1;
                if (wanted_newline) {
                    print_newline();
                }
                return [comment, 'TK_COMMENT'];
            }

        }

        if (c === "'" || // string
            c === '"' || // string
            (c === '/' &&
                ((last_type === 'TK_WORD' && last_text === 'return') || (last_type === 'TK_START_EXPR' || last_type === 'TK_END_BLOCK' || last_type === 'TK_OPERATOR' || last_type === 'TK_EOF' || last_type === 'TK_END_COMMAND')))) { // regexp
            var sep = c;
            var esc = false;
            c = '';

            if (parser_pos < input.length) {

                while (esc || input.charAt(parser_pos) !== sep) {
                    c += input.charAt(parser_pos);
                    if (!esc) {
                        esc = input.charAt(parser_pos) === '\\';
                    } else {
                        esc = false;
                    }
                    parser_pos += 1;
                    if (parser_pos >= input.length) {
                        break;
                    }
                }

            }

            parser_pos += 1;
            if (last_type === 'TK_END_COMMAND') {
                print_newline();
            }
            return [sep + c + sep, 'TK_STRING'];
        }

        if (in_array(c, punct)) {
            while (parser_pos < input.length && in_array(c + input.charAt(parser_pos), punct)) {
                c += input.charAt(parser_pos);
                parser_pos += 1;
                if (parser_pos >= input.length) {
                    break;
                }
            }
            return [c, 'TK_OPERATOR'];
        }

        return [c, 'TK_UNKNOWN'];
    }


    //----------------------------------

    indent_character = indent_character || ' ';
    indent_size = indent_size || 4;

    indent_string = '';
    while (indent_size--) {
        indent_string += indent_character;
    }

    input = js_source_text;

    last_word = ''; // last 'TK_WORD' passed
    last_type = 'TK_START_EXPR'; // last token type
    last_text = ''; // last token text
    output = [];

    do_block_just_closed = false;
    var_line = false;
    var_line_tainted = false;

    whitespace = "\n\r\t ".split('');
    wordchar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_$'.split('');
    punct = '+ - * / % & ++ -- = += -= *= /= %= == === != !== > < >= <= >> << >>> >>>= >>= <<= && &= | || ! !! , : ? ^ ^= |='.split(' ');

    // words which should always start on new line.
    line_starters = 'continue,try,throw,return,var,if,switch,case,default,for,while,break,function'.split(',');

    // states showing if we are currently in expression (i.e. "if" case) - 'EXPRESSION', or in usual block (like, procedure), 'BLOCK'.
    // some formatting depends on that.
    current_mode = 'BLOCK';
    modes = [current_mode];

    indent_level = indent_level || 0;
    parser_pos = 0; // parser position
    in_case = false; // flag for parser that case/default has been processed, and next colon needs special attention
    while (true) {
        var t = get_next_token(parser_pos);
        token_text = t[0];
        token_type = t[1];
        if (token_type === 'TK_EOF') {
            break;
        }

        switch (token_type) {

            case 'TK_START_EXPR':
                var_line = false;
                set_mode('EXPRESSION');
                if (last_type === 'TK_END_EXPR' || last_type === 'TK_START_EXPR') {
                    // do nothing on (( and )( and ][ and ]( ..
                } else if (last_type !== 'TK_WORD' && last_type !== 'TK_OPERATOR') {
                    print_space();
                } else if (in_array(last_word, line_starters) && last_word !== 'function') {
                    print_space();
                }
                print_token();
                break;

            case 'TK_END_EXPR':
                print_token();
                restore_mode();
                break;

            case 'TK_START_BLOCK':

                if (last_word === 'do') {
                    set_mode('DO_BLOCK');
                } else {
                    set_mode('BLOCK');
                }
                if (last_type !== 'TK_OPERATOR' && last_type !== 'TK_START_EXPR') {
                    if (last_type === 'TK_START_BLOCK') {
                        print_newline();
                    } else {
                        print_space();
                    }
                }
                print_token();
                indent();
                break;

            case 'TK_END_BLOCK':
                if (last_type === 'TK_START_BLOCK') {
                    // nothing
                    trim_output();
                    unindent();
                } else {
                    unindent();
                    print_newline();
                }
                print_token();
                restore_mode();
                break;

            case 'TK_WORD':

                if (do_block_just_closed) {
                    print_space();
                    print_token();
                    print_space();
                    break;
                }

                if (token_text === 'case' || token_text === 'default') {
                    if (last_text === ':') {
                        // switch cases following one another
                        remove_indent();
                    } else {
                        // case statement starts in the same line where switch
                        unindent();
                        print_newline();
                        indent();
                    }
                    print_token();
                    in_case = true;
                    break;
                }


                prefix = 'NONE';
                if (last_type === 'TK_END_BLOCK') {
                    if (!in_array(token_text.toLowerCase(), ['else', 'catch', 'finally'])) {
                        prefix = 'NEWLINE';
                    } else {
                        prefix = 'SPACE';
                        print_space();
                    }
                } else if (last_type === 'TK_END_COMMAND' && (current_mode === 'BLOCK' || current_mode === 'DO_BLOCK')) {
                    prefix = 'NEWLINE';
                } else if (last_type === 'TK_END_COMMAND' && current_mode === 'EXPRESSION') {
                    prefix = 'SPACE';
                } else if (last_type === 'TK_WORD') {
                    prefix = 'SPACE';
                } else if (last_type === 'TK_START_BLOCK') {
                    prefix = 'NEWLINE';
                } else if (last_type === 'TK_END_EXPR') {
                    print_space();
                    prefix = 'NEWLINE';
                }

                if (last_type !== 'TK_END_BLOCK' && in_array(token_text.toLowerCase(), ['else', 'catch', 'finally'])) {
                    print_newline();
                } else if (in_array(token_text, line_starters) || prefix === 'NEWLINE') {
                    if (last_text === 'else') {
                        // no need to force newline on else break
                        print_space();
                    } else if ((last_type === 'TK_START_EXPR' || last_text === '=') && token_text === 'function') {
                        // no need to force newline on 'function': (function
                        // DONOTHING
                    } else if (last_type === 'TK_WORD' && (last_text === 'return' || last_text === 'throw')) {
                        // no newline between 'return nnn'
                        print_space();
                    } else if (last_type !== 'TK_END_EXPR') {
                        if ((last_type !== 'TK_START_EXPR' || token_text !== 'var') && last_text !== ':') {
                            // no need to force newline on 'var': for (var x = 0...)
                            if (token_text === 'if' && last_type === 'TK_WORD' && last_word === 'else') {
                                // no newline for } else if {
                                print_space();
                            } else {
                                print_newline();
                            }
                        }
                    } else {
                        if (in_array(token_text, line_starters) && last_text !== ')') {
                            print_newline();
                        }
                    }
                } else if (prefix === 'SPACE') {
                    print_space();
                }
                print_token();
                last_word = token_text;

                if (token_text === 'var') {
                    var_line = true;
                    var_line_tainted = false;
                }

                break;

            case 'TK_END_COMMAND':

                print_token();
                var_line = false;
                break;

            case 'TK_STRING':

                if (last_type === 'TK_START_BLOCK' || last_type === 'TK_END_BLOCK') {
                    print_newline();
                } else if (last_type === 'TK_WORD') {
                    print_space();
                }
                print_token();
                break;

            case 'TK_OPERATOR':

                var start_delim = true;
                var end_delim = true;
                if (var_line && token_text !== ',') {
                    var_line_tainted = true;
                    if (token_text === ':') {
                        var_line = false;
                    }
                }

                if (token_text === ':' && in_case) {
                    print_token(); // colon really asks for separate treatment
                    print_newline();
                    break;
                }

                in_case = false;

                if (token_text === ',') {
                    if (var_line) {
                        if (var_line_tainted) {
                            print_token();
                            print_newline();
                            var_line_tainted = false;
                        } else {
                            print_token();
                            print_space();
                        }
                    } else if (last_type === 'TK_END_BLOCK') {
                        print_token();
                        print_newline();
                    } else {
                        if (current_mode === 'BLOCK') {
                            print_token();
                            print_newline();
                        } else {
                            // EXPR od DO_BLOCK
                            print_token();
                            print_space();
                        }
                    }
                    break;
                } else if (token_text === '--' || token_text === '++') { // unary operators special case
                    if (last_text === ';') {
                        // space for (;; ++i)
                        start_delim = true;
                        end_delim = false;
                    } else {
                        start_delim = false;
                        end_delim = false;
                    }
                } else if (token_text === '!' && last_type === 'TK_START_EXPR') {
                    // special case handling: if (!a)
                    start_delim = false;
                    end_delim = false;
                } else if (last_type === 'TK_OPERATOR') {
                    start_delim = false;
                    end_delim = false;
                } else if (last_type === 'TK_END_EXPR') {
                    start_delim = true;
                    end_delim = true;
                } else if (token_text === '.') {
                    // decimal digits or object.property
                    start_delim = false;
                    end_delim = false;

                } else if (token_text === ':') {
                    // zz: xx
                    // can't differentiate ternary op, so for now it's a ? b: c; without space before colon
                    if (last_text.match(/^\d+$/)) {
                        // a little help for ternary a ? 1 : 0;
                        start_delim = true;
                    } else {
                        start_delim = false;
                    }
                }
                if (start_delim) {
                    print_space();
                }

                print_token();

                if (end_delim) {
                    print_space();
                }
                break;

            case 'TK_BLOCK_COMMENT':

                print_newline();
                print_token();
                print_newline();
                break;

            case 'TK_COMMENT':

                // print_newline();
                print_space();
                print_token();
                print_newline();
                break;

            case 'TK_UNKNOWN':
                print_token();
                break;

            default:
                break;
        }

        last_type = token_type;
        last_text = token_text;
    }

    return output.join('');

}
