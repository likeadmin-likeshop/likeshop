"use strict";

function AddCustomThemes(t, e, i) {
    var n = [];
    return layui.each(t, function(t, l) {
        n.push('<option value="' + e[t] + '"  data-img="' + i[t] + '">' + l + "</option>")
    }), ['<li class="layui-form-item" style="position: relative">', '<label class="layui-form-label">主题选择</label>', '<div class="layui-input-block">', '<select name="theme" style="display:block;height:38px;width:100%;">' + n.join("") + "</select>", "</div>", "</li>"].join("")
}

function getRangeNodes(t) {
    for (var e = "BODY" == t.commonAncestorContainer.nodeName ? t.commonAncestorContainer.children : [t.commonAncestorContainer.parentElement], i = [], n = !1, l = 0; l < e.length; l++) {
        var a = t.startContainer.parentElement;
        "FONT" == a.nodeName && (a = a.parentElement);
        var o = t.endContainer.parentElement;
        if ("FONT" == o.nodeName && (o = o.parentElement), n || e[l] != a) {
            if (n && e[l] == o) {
                i.push(e[l]);
                break
            }
        } else n = !0;
        n && i.push(e[l])
    }
    return i
}

function style_html(t, e, i, n) {
    function l() {
        return this.pos = 0, this.token = "", this.current_mode = "CONTENT", this.tags = {
            parent: "parent1",
            parentcount: 1,
            parent1: ""
        }, this.tag_type = "", this.token_text = this.last_token = this.last_text = this.token_type = "", this.Utils = {
            whitespace: "\n\r\t ".split(""),
            single_token: "br,input,link,meta,!doctype,basefont,base,area,hr,wbr,param,img,isindex,?xml,embed".split(","),
            extra_liners: "head,body,/html".split(","),
            in_array: function(t, e) {
                for (var i = 0; i < e.length; i++)
                    if (t === e[i]) return !0;
                return !1
            }
        }, this.get_content = function() {
            for (var t = "", e = [], i = !1;
                 "<" !== this.input.charAt(this.pos);) {
                if (this.pos >= this.input.length) return e.length ? e.join("") : ["", "TK_EOF"];
                if (t = this.input.charAt(this.pos), this.pos++, this.line_char_count++, this.Utils.in_array(t, this.Utils.whitespace)) e.length && (i = !0), this.line_char_count--;
                else {
                    if (i) {
                        if (this.line_char_count >= this.max_char) {
                            e.push("\n");
                            for (var n = 0; n < this.indent_level; n++) e.push(this.indent_string);
                            this.line_char_count = 0
                        } else e.push(" "), this.line_char_count++;
                        i = !1
                    }
                    e.push(t)
                }
            }
            return e.length ? e.join("") : ""
        }, this.get_script = function() {
            var t = "",
                e = [],
                i = new RegExp("<\/script>", "igm");
            i.lastIndex = this.pos;
            for (var n = i.exec(this.input), l = n ? n.index : this.input.length; this.pos < l;) {
                if (this.pos >= this.input.length) return e.length ? e.join("") : ["", "TK_EOF"];
                t = this.input.charAt(this.pos), this.pos++, e.push(t)
            }
            return e.length ? e.join("") : ""
        }, this.record_tag = function(t) {
            this.tags[t + "count"] ? (this.tags[t + "count"]++, this.tags[t + this.tags[t + "count"]] = this.indent_level) : (this.tags[t + "count"] = 1, this.tags[t + this.tags[t + "count"]] = this.indent_level), this.tags[t + this.tags[t + "count"] + "parent"] = this.tags.parent, this.tags.parent = t + this.tags[t + "count"]
        }, this.retrieve_tag = function(t) {
            if (this.tags[t + "count"]) {
                for (var e = this.tags.parent; e && t + this.tags[t + "count"] !== e;) e = this.tags[e + "parent"];
                e && (this.indent_level = this.tags[t + this.tags[t + "count"]], this.tags.parent = this.tags[e + "parent"]), delete this.tags[t + this.tags[t + "count"] + "parent"], delete this.tags[t + this.tags[t + "count"]], 1 == this.tags[t + "count"] ? delete this.tags[t + "count"] : this.tags[t + "count"]--
            }
        }, this.get_tag = function() {
            var t = "",
                e = [],
                i = !1;
            do {
                if (this.pos >= this.input.length) return e.length ? e.join("") : ["", "TK_EOF"];
                t = this.input.charAt(this.pos), this.pos++, this.line_char_count++, this.Utils.in_array(t, this.Utils.whitespace) ? (i = !0, this.line_char_count--) : ("'" !== t && '"' !== t || e[1] && "!" === e[1] || (t += this.get_unformatted(t), i = !0), "=" === t && (i = !1), e.length && "=" !== e[e.length - 1] && ">" !== t && i && (this.line_char_count >= this.max_char ? (this.print_newline(!1, e), this.line_char_count = 0) : (e.push(" "), this.line_char_count++), i = !1), e.push(t))
            } while (">" !== t);
            var n, l = e.join("");
            n = -1 !== l.indexOf(" ") ? l.indexOf(" ") : l.indexOf(">");
            var a = l.substring(1, n)
                .toLowerCase();
            if ("/" === l.charAt(l.length - 2) || this.Utils.in_array(a, this.Utils.single_token)) this.tag_type = "SINGLE";
            else if ("script" === a) this.record_tag(a), this.tag_type = "SCRIPT";
            else if ("style" === a) this.record_tag(a), this.tag_type = "STYLE";
            else if ("!" === a.charAt(0))
                if (-1 !== a.indexOf("[if")) {
                    if (-1 != l.indexOf("!IE")) {
                        var o = this.get_unformatted("--\x3e", l);
                        e.push(o)
                    }
                    this.tag_type = "START"
                } else if (-1 !== a.indexOf("[endif")) this.tag_type = "END", this.unindent();
                else if (-1 != a.indexOf("[cdata[")) {
                    var o = this.get_unformatted("]]>", l);
                    e.push(o), this.tag_type = "SINGLE"
                } else {
                    var o = this.get_unformatted("--\x3e", l);
                    e.push(o), this.tag_type = "SINGLE"
                } else "/" === a.charAt(0) ? (this.retrieve_tag(a.substring(1)), this.tag_type = "END") : (this.record_tag(a), this.tag_type = "START"), this.Utils.in_array(a, this.Utils.extra_liners) && this.print_newline(!0, this.output);
            return e.join("")
        }, this.get_unformatted = function(t, e) {
            if (e && -1 != e.indexOf(t)) return "";
            var i = "",
                n = "",
                l = !0;
            do {
                if (i = this.input.charAt(this.pos), this.pos++, this.Utils.in_array(i, this.Utils.whitespace)) {
                    if (!l) {
                        this.line_char_count--;
                        continue
                    }
                    if ("\n" === i || "\r" === i) {
                        n += "\n";
                        for (var a = 0; a < this.indent_level; a++) n += this.indent_string;
                        l = !1, this.line_char_count = 0;
                        continue
                    }
                }
                n += i, this.line_char_count++, l = !0
            } while (-1 == n.indexOf(t));
            return n
        }, this.get_token = function() {
            var t;
            if ("TK_TAG_SCRIPT" === this.last_token) {
                var e = this.get_script();
                return "string" != typeof e ? e : (t = js_beautify(e, this.indent_size, this.indent_character, this.indent_level), [t, "TK_CONTENT"])
            }
            if ("CONTENT" === this.current_mode) return t = this.get_content(), "string" != typeof t ? t : [t, "TK_CONTENT"];
            if ("TAG" === this.current_mode) {
                if ("string" != typeof(t = this.get_tag())) return t;
                return [t, "TK_TAG_" + this.tag_type]
            }
        }, this.printer = function(t, e, i, n) {
            this.input = t || "", this.output = [], this.indent_character = e || " ", this.indent_string = "", this.indent_size = i || 2, this.indent_level = 0, this.max_char = n || 7e3, this.line_char_count = 0;
            for (var l = 0; l < this.indent_size; l++) this.indent_string += this.indent_character;
            this.print_newline = function(t, e) {
                if (this.line_char_count = 0, e && e.length) {
                    if (!t)
                        for (; this.Utils.in_array(e[e.length - 1], this.Utils.whitespace);) e.pop();
                    e.push("\n");
                    for (var i = 0; i < this.indent_level; i++) e.push(this.indent_string)
                }
            }, this.print_token = function(t) {
                this.output.push(t)
            }, this.indent = function() {
                this.indent_level++
            }, this.unindent = function() {
                this.indent_level > 0 && this.indent_level--
            }
        }, this
    }
    var l, a;
    a = new l, a.printer(t, i, e);
    for (var o = !0;;) {
        var s = a.get_token();
        if (a.token_text = s[0], a.token_type = s[1], "TK_EOF" === a.token_type) break;
        switch (a.token_type) {
            case "TK_TAG_START":
            case "TK_TAG_SCRIPT":
            case "TK_TAG_STYLE":
                a.print_newline(!1, a.output), a.print_token(a.token_text), a.indent(), a.current_mode = "CONTENT";
                break;
            case "TK_TAG_END":
                o && a.print_newline(!0, a.output), a.print_token(a.token_text), a.current_mode = "CONTENT", o = !0;
                break;
            case "TK_TAG_SINGLE":
                a.print_newline(!1, a.output), a.print_token(a.token_text), a.current_mode = "CONTENT";
                break;
            case "TK_CONTENT":
                "" !== a.token_text && (o = !1, a.print_token(a.token_text)), a.current_mode = "TAG"
        }
        a.last_token = a.token_type, a.last_text = a.token_text
    }
    return a.output.join("")
}

function js_beautify(t, e, i, n) {
    function l() {
        for (; p.length && (" " === p[p.length - 1] || p[p.length - 1] === T);) p.pop()
    }

    function a(t) {
        if (t = void 0 === t || t, l(), p.length) {
            "\n" === p[p.length - 1] && t || p.push("\n");
            for (var e = 0; e < n; e++) p.push(T)
        }
    }

    function o() {
        var t = p.length ? p[p.length - 1] : " ";
        " " !== t && "\n" !== t && t !== T && p.push(" ")
    }

    function s() {
        p.push(y)
    }

    function r() {
        n++
    }

    function d() {
        n && n--
    }

    function c(t) {
        _.push(b), b = t
    }

    function u() {
        K = "DO_BLOCK" === b, b = _.pop()
    }

    function f(t, e) {
        for (var i = 0; i < e.length; i++)
            if (e[i] === t) return !0;
        return !1
    }

    function h() {
        var t = 0,
            e = "";
        do {
            if (C >= m.length) return ["", "TK_EOF"];
            e = m.charAt(C), C += 1, "\n" === e && (t += 1)
        } while (f(e, E));
        if (t > 1)
            for (var i = 0; i < 2; i++) a(0 === i);
        var n = 1 === t;
        if (f(e, k)) {
            if (C < m.length)
                for (; f(m.charAt(C), k) && (e += m.charAt(C), (C += 1) !== m.length););
            if (C !== m.length && e.match(/^[0-9]+[Ee]$/) && "-" === m.charAt(C)) {
                C += 1;
                return e += "-" + h(C)[0], [e, "TK_WORD"]
            }
            return "in" === e ? [e, "TK_OPERATOR"] : [e, "TK_WORD"]
        }
        if ("(" === e || "[" === e) return [e, "TK_START_EXPR"];
        if (")" === e || "]" === e) return [e, "TK_END_EXPR"];
        if ("{" === e) return [e, "TK_START_BLOCK"];
        if ("}" === e) return [e, "TK_END_BLOCK"];
        if (";" === e) return [e, "TK_END_COMMAND"];
        if ("/" === e) {
            var l = "";
            if ("*" === m.charAt(C)) {
                if ((C += 1) < m.length)
                    for (;
                        ("*" !== m.charAt(C) || !m.charAt(C + 1) || "/" !== m.charAt(C + 1)) && C < m.length && (l += m.charAt(C), !((C += 1) >= m.length)););
                return C += 2, ["/*" + l + "*/", "TK_BLOCK_COMMENT"]
            }
            if ("/" === m.charAt(C)) {
                for (l = e;
                     "\r" !== m.charAt(C) && "\n" !== m.charAt(C) && (l += m.charAt(C), !((C += 1) >= m.length)););
                return C += 1, n && a(), [l, "TK_COMMENT"]
            }
        }
        if ("'" === e || '"' === e || "/" === e && ("TK_WORD" === g && "return" === v || "TK_START_EXPR" === g || "TK_END_BLOCK" === g || "TK_OPERATOR" === g || "TK_EOF" === g || "TK_END_COMMAND" === g)) {
            var o = e,
                s = !1;
            if (e = "", C < m.length)
                for (;
                    (s || m.charAt(C) !== o) && (e += m.charAt(C), s = !s && "\\" === m.charAt(C), !((C += 1) >= m.length)););
            return C += 1, "TK_END_COMMAND" === g && a(), [o + e + o, "TK_STRING"]
        }
        if (f(e, w)) {
            for (; C < m.length && f(e + m.charAt(C), w) && (e += m.charAt(C), !((C += 1) >= m.length)););
            return [e, "TK_OPERATOR"]
        }
        return [e, "TK_UNKNOWN"]
    }
    var m, p, y, g, v, x, b, _, T, E, k, w, C, A, N, O, S, K, L, I;
    for (i = i || " ", e = e || 4, T = ""; e--;) T += i;
    for (m = t, x = "", g = "TK_START_EXPR", v = "", p = [], K = !1, L = !1, I = !1, E = "\n\r\t ".split(""), k = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_$".split(""), w = "+ - * / % & ++ -- = += -= *= /= %= == === != !== > < >= <= >> << >>> >>>= >>= <<= && &= | || ! !! , : ? ^ ^= |=".split(" "), A = "continue,try,throw,return,var,if,switch,case,default,for,while,break,function".split(","), b = "BLOCK", _ = [b], n = n || 0, C = 0, N = !1;;) {
        var z = h(C);
        if (y = z[0], "TK_EOF" === (S = z[1])) break;
        switch (S) {
            case "TK_START_EXPR":
                L = !1, c("EXPRESSION"), "TK_END_EXPR" === g || "TK_START_EXPR" === g || ("TK_WORD" !== g && "TK_OPERATOR" !== g ? o() : f(x, A) && "function" !== x && o()), s();
                break;
            case "TK_END_EXPR":
                s(), u();
                break;
            case "TK_START_BLOCK":
                c("do" === x ? "DO_BLOCK" : "BLOCK"), "TK_OPERATOR" !== g && "TK_START_EXPR" !== g && ("TK_START_BLOCK" === g ? a() : o()), s(), r();
                break;
            case "TK_END_BLOCK":
                "TK_START_BLOCK" === g ? (l(), d()) : (d(), a()), s(), u();
                break;
            case "TK_WORD":
                if (K) {
                    o(), s(), o();
                    break
                }
                if ("case" === y || "default" === y) {
                    ":" === v ? function() {
                        p.length && p[p.length - 1] === T && p.pop()
                    }() : (d(), a(), r()), s(), N = !0;
                    break
                }
                O = "NONE", "TK_END_BLOCK" === g ? f(y.toLowerCase(), ["else", "catch", "finally"]) ? (O = "SPACE", o()) : O = "NEWLINE" : "TK_END_COMMAND" !== g || "BLOCK" !== b && "DO_BLOCK" !== b ? "TK_END_COMMAND" === g && "EXPRESSION" === b ? O = "SPACE" : "TK_WORD" === g ? O = "SPACE" : "TK_START_BLOCK" === g ? O = "NEWLINE" : "TK_END_EXPR" === g && (o(), O = "NEWLINE") : O = "NEWLINE", "TK_END_BLOCK" !== g && f(y.toLowerCase(), ["else", "catch", "finally"]) ? a() : f(y, A) || "NEWLINE" === O ? "else" === v ? o() : ("TK_START_EXPR" !== g && "=" !== v || "function" !== y) && ("TK_WORD" !== g || "return" !== v && "throw" !== v ? "TK_END_EXPR" !== g ? "TK_START_EXPR" === g && "var" === y || ":" === v || ("if" === y && "TK_WORD" === g && "else" === x ? o() : a()) : f(y, A) && ")" !== v && a() : o()) : "SPACE" === O && o(), s(), x = y, "var" === y && (L = !0, I = !1);
                break;
            case "TK_END_COMMAND":
                s(), L = !1;
                break;
            case "TK_STRING":
                "TK_START_BLOCK" === g || "TK_END_BLOCK" === g ? a() : "TK_WORD" === g && o(), s();
                break;
            case "TK_OPERATOR":
                var P = !0,
                    R = !0;
                if (L && "," !== y && (I = !0, ":" === y && (L = !1)), ":" === y && N) {
                    s(), a();
                    break
                }
                if (N = !1, "," === y) {
                    L ? I ? (s(), a(), I = !1) : (s(), o()) : "TK_END_BLOCK" === g ? (s(), a()) : "BLOCK" === b ? (s(), a()) : (s(), o());
                    break
                }
                "--" === y || "++" === y ? ";" === v ? (P = !0, R = !1) : (P = !1, R = !1) : "!" === y && "TK_START_EXPR" === g ? (P = !1, R = !1) : "TK_OPERATOR" === g ? (P = !1, R = !1) : "TK_END_EXPR" === g ? (P = !0, R = !0) : "." === y ? (P = !1, R = !1) : ":" === y && (P = !!v.match(/^\d+$/)), P && o(), s(), R && o();
                break;
            case "TK_BLOCK_COMMENT":
                a(), s(), a();
                break;
            case "TK_COMMENT":
                o(), s(), a();
                break;
            case "TK_UNKNOWN":
                s()
        }
        g = S, v = y
    }
    return p.join("")
}
layui.define(["layer", "form", "code"], function(t) {
    var e = function(t) {
            var e = t.originalEvent.changedTouches[0];
            return document.elementFromPoint(e.clientX, e.clientY)
        },
        i = layui.$,
        n = layui.layer,
        l = layui.form,
        a = (layui.hint(), layui.device()),
        o = "layui-disabled",
        s = function() {
            var t = this;
            t.index = 0, t.config = {
                tool: ["html","|","strong","italic","underline","del","addhr","|","removeformat","fontfamily","fontSize","lineHeight","colorpicker","left","center","right","|","face","link","unlink","image","preview"],
                uploadImage: {
                    url: "",
                    done: function(t) {}
                },
                uploadVideo: {
                    url: "",
                    done: function(t) {}
                },
                uploadFiles: {
                    url: "",
                    done: function(t) {}
                },
                calldel: {
                    url: "",
                    done: function(t) {}
                },
                quote: {
                    style: [],
                    js: []
                },
                customTheme: {
                    video: {
                        title: [],
                        content: [],
                        preview: []
                    }
                },
                customlink: {
                    title: "自定义链接",
                    href: "",
                    onmouseup: ""
                },
                facePath: layui.cache.dir,
                devmode: !1,
                autoSync: !1,
                onchange: function(t) {},
                hideTool: [],
                height: 500
            }
        };
    s.prototype.set = function(t) {
        var e = this;
        return i.extend(!0, e.config, t), e
    }, s.prototype.on = function(t, e) {
        return layui.onevent("layedit", t, e)
    }, s.prototype.build = function(t, e) {
        e = e || {};
        var n = this,
            l = n.config,
            o = "layui-layedit",
            s = i("string" == typeof t ? "#" + t : t),
            c = "LAY_layedit_" + ++n.index,
            u = s.next("." + o),
            f = i.extend({}, l, e),
            h = function() {
                var t = [],
                    e = {};
                return f._elem = s, layui.each(f.hideTool, function(t, i) {
                    e[i] = !0
                }), layui.each(f.tool, function(i, n) {
                    O[n] && !e[n] && t.push(O[n])
                }), t.join("")
            }(),
            m = i(['<div class="' + o + '">', '<div class="layui-unselect layui-layedit-tool">' + h.replace("layBkColor_Index", "layBkColor_" + n.index)
                .replace("layFontColor_Index", "layFontColor_" + n.index) + "</div>", '<div class="layui-layedit-iframe">', '<iframe  src="" id="' + c + '" name="' + c + '" textarea="' + t + '" frameborder="0"></iframe>', "</div>", "</div>"
            ].join(""));
        return a.ie && a.ie < 8 ? s.removeClass("layui-hide")
            .addClass("layui-show") : (u[0] && u.remove(), r.call(n, m, s[0], f), s.addClass("layui-hide")
            .after(m), layui.use(["colorpicker", "jquery"], function() {
            for (var t = layui.colorpicker, e = (layui.jquery, 0); e <= n.index; e++) t.render({
                elem: "#layBkColor_" + e,
                predefine: !0,
                colors: ["#800000", "#cc0000", "#999999", "#ff8c00", "#ffb800", "#ff7800", "#1e90ff", "#009688", "#5fb878", "#ffffff", "#000000"],
                size: "xs",
                done: function(t) {
                    var e = d(this.elem.split("_")[1]);
                    a.ie ? e[0].document.execCommand("backColor", !1, t) : e[0].document.execCommand("hiliteColor", !1, t), setTimeout(function() {
                        e[0].document.body.focus()
                    }, 10)
                }
            }), t.render({
                elem: "#layFontColor_" + e,
                predefine: !0,
                colors: ["#800000", "#cc0000", "#999999", "#ff8c00", "#ffb800", "#ff7800", "#1e90ff", "#009688", "#5fb878", "#ffffff", "#000000"],
                size: "xs",
                color: "#000",
                done: function(t) {
                    var e = d(this.elem.split("_")[1]);
                    e[0].document.execCommand("forecolor", !1, t), setTimeout(function() {
                        e[0].document.body.focus()
                    }, 10)
                }
            })
        }), n.index)
    }, s.prototype.getContent = function(t) {
        var e = d(t);
        if (e[0]) return c(e[0].document.body.innerHTML)
    }, s.prototype.getText = function(t) {
        var e = d(t);
        if (e[0]) return i(e[0].document.body)
            .text()
    }, s.prototype.setContent = function(t, e, n) {
        var l = d(t);
        l[0] && (n ? i(l[0].document.body)
            .append(e) : i(l[0].document.body)
            .html(e), this.sync(t))
    }, s.prototype.sync = function(t) {
        var e = d(t);
        if (e[0]) {
            i("#" + e[1].attr("textarea"))
                .val(c(e[0].document.body.innerHTML))
        }
    }, s.prototype.getSelection = function(t) {
        var e = d(t);
        if (e[0]) {
            var i = h(e[0].document);
            return document.selection ? i.text : i.toString()
        }
    };
    var r = function(t, e, n) {
            var l = this,
                a = t.find("iframe");
            a.css({
                height: n.height
            })
                .on("load", function() {
                    var o = a.contents(),
                        s = a.prop("contentWindow"),
                        r = o.find("head"),
                        d = i(["<style>", "*{margin: 0; padding: 0;}", "body{padding: 10px; line-height: 20px; overflow-x: hidden; word-wrap: break-word; font: 14px Helvetica Neue,Helvetica,PingFang SC,Microsoft YaHei,Tahoma,Arial,sans-serif; -webkit-box-sizing: border-box !important; -moz-box-sizing: border-box !important; box-sizing: border-box !important;}", "a{color:#01AAED; text-decoration:none;}a:hover{color:#c00}", "p{margin-bottom: 10px;}", "video{max-width:400px;}", "td{border: 1px solid #DDD;width:80px}", "table{border-collapse: collapse;}", 'a[name]:before{content:"§";color: #01aaed;font-weight: bold;}', "img{display: inline-block; border: none; vertical-align: middle;}", "pre{margin: 10px 0; padding: 10px; line-height: 20px; border: 1px solid #ddd; border-left-width: 6px; background-color: #F2F2F2; color: #333; font-family: Courier New; font-size: 12px;}", "</style>"].join("")),
                        c = o.find("body"),
                        f = function() {
                            var t = [];
                            return layui.each(n.quote.style, function(e, i) {
                                t.push('<link href="' + i + '" rel="stylesheet"/>')
                            }), layui.each(n.quote.js, function(e, i) {
                                t.push('<script src="' + i + '"><\/script>')
                            }), t.join("")
                        }();
                    r.append(d), r.append(f), c.attr("contenteditable", "true")
                        .css({
                            "min-height": n.height
                        })
                        .html(e.value || ""), u.apply(l, [s, a, e, n]), v.call(l, s, t, n)
                })
        },
        d = function(t) {
            var e = i("#LAY_layedit_" + t);
            return [e.prop("contentWindow"), e]
        },
        c = function(t) {
            return 8 == a.ie && (t = t.replace(/<.+>/g, function(t) {
                return t.toLowerCase()
            })), t
        },
        u = function(t, e, l, o) {
            var s = t.document,
                r = i(s.body);
            r.on("keydown", function(t) {
                var e = t.keyCode;
                if (13 === e) {
                    var d = h(s),
                        c = m(d),
                        u = c.parentNode;
                    if ("pre" === u.tagName.toLowerCase()) {
                        if (t.shiftKey) return;
                        return n.msg("请暂时用shift+enter"), !1
                    }
                    "body" !== u.tagName.toLowerCase() && "BODY" !== c.tagName || s.execCommand("formatBlock", !1, "<p>")
                }
                if (8 === e) {
                    var d = h(s),
                        c = m(d);
                    if ("<hr>" == c.innerHTML && "BODY" == c.tagName && (d.selectNode(c.childNodes[0]), d.deleteContents()), c.hasChildNodes() && "IMG" == c.childNodes[0].tagName) {
                        var f = o.calldel;
                        "" != f.url && ("IMG" != d.commonAncestorContainer.childNodes[d.startOffset - 1].tagName || i.post(f.url, {
                            imgpath: d.commonAncestorContainer.childNodes[d.startOffset - 1].src
                        }, function(t) {
                            f.done(t)
                        }))
                    }
                }
                if (46 === e) {
                    var d = h(s),
                        c = m(d);
                    if (null == c.nextElementSibling) return;
                    if ("IMG" === c.nextElementSibling.tagName) {
                        var f = o.calldel;
                        "" != f.url && i.post(f.url, {
                            imgpath: c.nextElementSibling.src
                        }, function(t) {
                            f.done(t)
                        })
                    }
                }
                setTimeout(function() {
                    if (t.ctrlKey && 66 == e) {
                        var i = document.createElement("strong");
                        r.find("b")
                            .each(function() {
                                i.innerText = this.innerText, this.outerHTML = i.outerHTML
                            })
                    }
                    var n = r.html();
                    8 == a.ie && (n = n.replace(/<.+>/g, function(t) {
                        return t.toLowerCase()
                    })), o.autoSync && (l.value = n), o.onchange(n)
                }, 10)
            }), i(l)
                .parents("form")
                .on("submit", function() {
                    var t = r.html();
                    8 == a.ie && (t = t.replace(/<.+>/g, function(t) {
                        return t.toLowerCase()
                    })), l.value = t
                }), r.on("paste", function(e) {
                var d = h(s);
                if (e.originalEvent.clipboardData && e.originalEvent.clipboardData.items) {
                    for (var c = 0, u = e.originalEvent.clipboardData.items.length; c < u; c++) {
                        var p = e.originalEvent.clipboardData.items[c];
                        if ("file" === p.kind) {
                            var y = p.getAsFile(),
                                g = new FormData;
                            g.append("file", y);
                            var v = o.uploadImage.url,
                                x = "";
                            if (i.ajax({
                                type: "POST",
                                url: v,
                                data: g,
                                async: !1,
                                contentType: !1,
                                processData: !1,
                                dataType: "json",
                                mimeType: "multipart/form-data",
                                success: function(t) {
                                    0 != t.code && 2 != t.code || (x = t.data.src, o.uploadImage.done(t))
                                },
                                error: function(t) {
                                    n.msg("上传服务器出错")
                                }
                            }), "" != x) {
                                var b = document.createElement("img");
                                if (b.src = x, a.ie) n.msg("暂不支持IE浏览器");
                                else {
                                    var _ = m(d);
                                    "<br>" == _.innerHTML && (d.selectNode(_), d.deleteContents()), d.deleteContents(), d.insertNode(b), e.preventDefault()
                                }
                            } else n.msg("图片上传失败！仅粘贴到内容")
                        }
                    }
                    setTimeout(function() {
                        f.call(t, r), l.value = r.html()
                    }, 10)
                }
            })
        },
        f = function(t) {
            var e = this;
            e.document;
            t.find(".MsoNormal,.MsoListParagraph")
                .each(function() {
                    this.removeAttribute("class")
                }), t.html(t.html()
                .replace(/<o:p> <\/o:p>/g, "")), t.html(t.html()
                .replace(/o:/g, "")), t.html(t.html()
                .replace(/<font>/gi, "")), t.html(t.html()
                .replace(/<span>/gi, "")), t.html(t.html()
                .replace(/<span [^>]+>/gi, "")), t.html(t.html()
                .replace(/<\/span>/gi, "")), t.html(t.html()
                .replace(/<P>/g, "")), t.html(t.html()
                .replace(/<\/P>/g, "")), t.html(t.html()
                .replace(/<p><\/p>/g, ""))
        },
        h = function(t) {
            var e = t.getSelection();
            return t.selection ? t.selection.createRange() : e.rangeCount && e.getRangeAt(0)
        },
        m = function(t) {
            if (t) return t.endContainer || t.parentElement()
                .childNodes[0]
        },
        p = function(t, e, i) {
            var l = this.document,
                o = document.createElement(t);
            for (var s in e) o.setAttribute(s, e[s]);
            if (o.removeAttribute("text"), a.ie) {
                var r = i.text || e.text;
                if ("a" === t && !r) return;
                r && (o.innerHTML = r), n.msg("暂不支持IE浏览器"), i.selectNode(this.document.body.childNodes.item(0)), i.insertNode(o)
            } else {
                var r = i.toString() || e.text;
                if ("a" === t && !r) return;
                r && (o.innerHTML = r);
                var d = m(i);
                d.parentNode;
                "<br>" == d.innerHTML && (i.selectNode(d), i.deleteContents()), i.insertNode(o), "img" == t && "<br>" == d.innerHTML && (l.execCommand("formatBlock", !1, "<p>"), l.execCommand("justifyCenter"), setTimeout(function() {
                    body.focus()
                }, 10))
            }
        },
        y = function(t, e) {
            for (var n = this.document, l = [], a = 0; a < t.length; a++) {
                l[a] = document.createElement(t[a].tagName);
                for (var o in t[a].attr) l[a].setAttribute(o, t[a].attr[o]);
                l[a].removeAttribute("text")
            }
            if (n.selection) {
                var s = e.text || attr.text;
                if ("a" === tagName && !s) return;
                s && (elem.innerHTML = s), e.pasteHTML(i(l)
                    .prop("outerHTML")), e.select()
            } else {
                e.deleteContents();
                for (var r = 0; r < l.length; r++) {
                    var s = e.toString() || t[r].attr.text;
                    s && (elem.innerHTML = s), e.insertNode(l[r])
                }
            }
        },
        g = function(t, e) {
            var n = this.document,
                l = "layedit-tool-active",
                a = m(h(n)),
                s = function(e) {
                    return t.find(".layedit-tool-" + e)
                };
            e && e[e.hasClass(l) ? "removeClass" : "addClass"](l), t.find(">i")
                .removeClass(l), s("unlink")
                .addClass(o), i(a)
                .parents()
                .each(function() {
                    var t = this.tagName.toLowerCase(),
                        e = this.style.textAlign;
                    "p" === t && ("center" === e ? s("center")
                        .addClass(l) : "right" === e ? s("right")
                        .addClass(l) : s("left")
                        .addClass(l)), "a" === t && (s("link")
                        .addClass(l), s("unlink")
                        .removeClass(o))
                })
        },
        v = function(t, e, l) {
            var a = t.document,
                s = i(a.body),
                r = {
                    link: function(e) {
                        var n = m(e),
                            a = i(n)
                                .parent();
                        x.call(s, {
                            href: a.attr("href"),
                            target: a.attr("target"),
                            rel: a.attr("rel"),
                            text: a.attr("text") || e.toString(),
                            dmode: l.devmode
                        }, function(i) {
                            var n = a[0];
                            if ("A" === n.tagName) n.href = i.url, n.rel = i.rel, "" == i.rel && n.removeAttr("rel"), n.target = i.target, "_self" != i.target && void 0 != i.target || n.removeAttr("target"), "" != i.text && (n.text = i.text);
                            else {
                                var l = {
                                    target: i.target,
                                    href: i.url,
                                    rel: i.rel,
                                    text: i.text
                                };
                                "" != i.rel && void 0 != i.rel || delete l.rel, "_self" != i.target && void 0 != i.target || delete l.target, "" == i.text && (l.text = l.href), p.call(t, "a", l, e)
                            }
                        })
                    },
                    unlink: function(t) {
                        a.execCommand("unlink")
                    },
                    face: function(e) {
                        E.call(this, {
                            facePath: l.facePath
                        }, function(i) {
                            p.call(t, "img", {
                                src: i.src,
                                alt: i.alt
                            }, e), setTimeout(function() {
                                s.focus()
                            }, 10)
                        })
                    },
                    // image: function(e) {
                    //     var a = this;
                    //     layui.use("upload", function(o) {
                    //         var r = l.uploadImage || {};
                    //         "" == r.url && n.msg("上传接口配置错误！"), o.render({
                    //             url: r.url,
                    //             method: r.method,
                    //             field: r.field,
                    //             data: r.data,
                    //             headers: r.headers,
                    //             accept: r.accept || "image",
                    //             acceptMime: r.acceptMime || "image/*",
                    //             exts: r.exts || "jpg|png|gif|bmp|jpeg",
                    //             size: r.size || 10240,
                    //             elem: i(a)
                    //                 .find("input")[0],
                    //             done: function(i) {
                    //                 0 == i.code ? (i.data = i.data || {}, p.call(t, "img", {
                    //                     src: i.data.src,
                    //                     alt: i.data.title
                    //                 }, e), r.done(i), setTimeout(function() {
                    //                     s.focus()
                    //                 }, 10)) : n.msg(i.msg || "上传失败")
                    //             }
                    //         })
                    //     })
                    // },
                    image: function (e) {
                        var a = this;
                        var windows = layer.open({type: 2, title: "上传图片", content: image_upload_url, area: ["90%", "90%"]});
                        window.callback = function (uri) {
                            console.log(uri);
                            uri.forEach(function (item) {
                                p.call(t, "img", {src: item}, e)
                            });
                        };
                        window.callbackSetUri = function (uri) {
                            console.log(uri);
                            p.call(t, "img", {src: "/" + uri,}, e);
                            layer.close(windows)
                        }
                    },
                    code: function(e) {
                        var i = l.codeConfig || {
                            hide: !1,
                            encode: !0,
                            class: "layui-code"
                        };
                        N.call(s, {
                            hide: i.hide,
                            default: i.default
                        }, function(n) {
                            n.code = n.code.replace(/&(?!#?[a-zA-Z0-9]+;)/g, "&amp;")
                                .replace(/</g, "&lt;")
                                .replace(/>/g, "&gt;")
                                .replace(/'/g, "&#39;")
                                .replace(/"/g, "&quot;"), p.call(t, "pre", {
                                text: n.code,
                                "lay-lang": n.lang,
                                "lay-encode": i.encode,
                                class: i.class || "layui-code"
                            }, e), setTimeout(function() {
                                layui.code(), s.focus()
                            }, 10)
                        })
                    },
                    images: function(e) {
                        n.open({
                            type: 1,
                            id: "fly-jie-image-upload",
                            title: "图片管理",
                            shade: .05,
                            shadeClose: !0,
                            area: function() {
                                return /mobile/i.test(navigator.userAgent) || i(window)
                                    .width() <= 485 ? ["90%"] : ["485px"]
                            }(),
                            offset: function() {
                                return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                            }(),
                            skin: "layui-layer-border",
                            content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px;">', '<li class="layui-form-item">', '<div class="layui-upload">', '<button type="button" class="layui-btn" id="LayEdit_InsertImages"><i class="layui-icon"></i>多图上传</button> ', '<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;min-height: 116px">', '  预览图(点击图片可删除)：<div class="layui-upload-list" id="imgsPrev"></div>', "</blockquote>", "</div>", "</li>", '<li class="layui-form-item" style="position: relative;width: 48%;display: inline-block;">', '<label class="layui-form-label" style="position: relative;z-index: 10;width: 60px;">宽度</label>', '<input type="text" required name="imgWidth" placeholder="px" style="position: absolute;width: 100%;padding-left: 70px;left: 0;top:0" value="" class="layui-input">', "</li>", '<li class="layui-form-item" style="position: relative;width: 48%;display: inline-block;margin-left: 4%;">', '<label class="layui-form-label" style="width: 60px;position: relative;z-index: 10;">高度</label>', '<input type="text" required name="imgHeight" placeholder="px" style="position: absolute;width: 100%;padding-left: 70px;left: 0;top:0" value="" class="layui-input">', "</li>", "</ul>"].join(""),
                            btn: ["确定", "取消"],
                            btnAlign: "c",
                            yes: function(i, l) {
                                var a = "";
                                if ("" != l.find('input[name="imgWidth"]')
                                    .val()) {
                                    var o = l.find('input[name="imgWidth"]')
                                        .val();
                                    a += o.indexOf("%") > 0 ? "width:" + o + ";" : "width:" + o + "px;"
                                }
                                if ("" != l.find('input[name="imgHeight"]')
                                    .val()) {
                                    var s = l.find('input[name="imgHeight"]')
                                        .val();
                                    a += s.indexOf("%") > 0 ? "height:" + s + ";" : "height:" + s + "px;"
                                }
                                if (0 === l.find("#imgsPrev")
                                    .find("img")
                                    .length) n.msg("请选择要插入的图片");
                                else {
                                    for (var r = document.getElementById("imgsPrev")
                                        .children, d = [], c = 0; c < r.length; c++) d.push({
                                        tagName: "img",
                                        attr: {
                                            src: r[c].src,
                                            alt: r[c].alt,
                                            style: a
                                        }
                                    });
                                    y.call(t, d, e), n.close(i)
                                }
                            },
                            btn2: function(t, e) {
                                if (e.find("#imgsPrev img")
                                    .length > 0) {
                                    for (var n = "", a = 0; a < e.find("#imgsPrev img")
                                        .length; a++) n += e.find("#imgsPrev img")[a].src;
                                    var o = l.calldel;
                                    "" != o.url && i.post(o.url, {
                                        imgpath: n
                                    }, function(t) {
                                        o.done(t)
                                    })
                                }
                            },
                            cancel: function(t, e) {
                                if (e.find("#imgsPrev img")
                                    .length > 0) {
                                    for (var n = "", a = 0; a < e.find("#imgsPrev img")
                                        .length; a++) n += e.find("#imgsPrev img")[a].src;
                                    var o = l.calldel;
                                    "" != o.url && i.post(o.url, {
                                        imgpath: n
                                    }, function(t) {
                                        o.done(t)
                                    })
                                }
                            },
                            success: function(t, e) {
                                layui.use("upload", function() {
                                    var e = layui.upload,
                                        a = l.uploadImage || {};
                                    "" == a.url && n.msg("上传接口配置错误！");
                                    var o, s = [];
                                    e.render({
                                        elem: "#LayEdit_InsertImages",
                                        url: a.url,
                                        method: a.method,
                                        data: a.data,
                                        headers: a.headers,
                                        accept: a.accept || "image",
                                        acceptMime: a.acceptMime || "image/*",
                                        exts: a.exts || "jpg|png|gif|bmp|jpeg",
                                        size: a.size || 10240,
                                        field: a.field,
                                        multiple: !0,
                                        before: function(t) {
                                            o = n.msg("文件上传中,请稍等", {
                                                icon: 16,
                                                shade: .3,
                                                time: 0
                                            }), t.preview(function(t, e, n) {
                                                -1 === s.indexOf(t) && i("#imgsPrev")
                                                    .append('<img data-index="' + t + '" src="' + n + '" alt="' + e.name + '" style="width:110px;height:110px;box-sizing: border-box;border: 1px solid #999;padding: 2px;margin-right:8px;margin-bottom:10px;" /> ')
                                            })
                                        },
                                        allDone: function() {
                                            for (var t = 0; t < s.length; t++) i("#imgsPrev")
                                                .find('img[data-index="' + s[t] + '"]')
                                                .remove();
                                            n.close(o)
                                        },
                                        error: function(t, e) {
                                            s.push(t)
                                        },
                                        done: function(e, o, s) {
                                            0 == e.code ? (e.data = e.data || {}, i('#imgsPrev img[data-index="' + o + '"]')
                                                .attr("src", e.data.src), a.done(e)) : 2 == e.code ? (e.data = e.data || {}, i('#imgsPrev img[data-index="' + o + '"]')
                                                .attr("src", e.data.src), a.done(e)) : n.msg(e.msg || "上传失败"), t.find("#imgsPrev img")
                                                .on("click", function() {
                                                    var t = this.src,
                                                        e = this.getAttribute("data-index");
                                                    n.confirm("是否删除该图片?", {
                                                        icon: 3,
                                                        title: "提示"
                                                    }, function(a) {
                                                        var o = l.calldel;
                                                        "" != o.url ? i.post(o.url, {
                                                            imgpath: t
                                                        }, function(t) {
                                                            i("#imgsPrev img[data-index=" + e + "]")[0].remove(), o.done(t)
                                                        }) : (n.msg("没有配置回调参数"), i("#imgsPrev img[data-index=" + e + "]")[0].remove()), n.close(a)
                                                    })
                                                })
                                        }
                                    })
                                })
                            }
                        })
                    },
                    image_alt: function(e) {
                        S({
                            context: {
                                set: l
                            },
                            beforeUpload: function(t, e) {
                                e.deleteImage(t)
                            },
                            success: function(i) {
                                p.call(t, "img", {
                                    src: i.src,
                                    alt: i.alt,
                                    style: i.style
                                }, e)
                            }
                        })
                    },
                    video: function(e) {
                        var a = l.customTheme || {
                                video: []
                            },
                            o = "";
                        a.video.title.length > 0 && (o = AddCustomThemes(a.video.title, a.video.content, a.video.preview)), n.open({
                            type: 1,
                            id: "fly-jie-video-upload",
                            title: "视频管理",
                            shade: .05,
                            shadeClose: !0,
                            area: function() {
                                return /mobile/i.test(navigator.userAgent) || i(window)
                                    .width() <= 485 ? ["90%"] : ["485px"]
                            }(),
                            offset: function() {
                                return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                            }(),
                            skin: "layui-layer-border",
                            content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px">', '<li class="layui-form-item" style="position: relative">', '<button type="button" class="layui-btn" id="LayEdit_InsertVideo" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传视频</button>', '<input type="text" name="video" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">', "</li>", '<li class="layui-form-item" style="position: relative">', '<button type="button" class="layui-btn" id="LayEdit_InsertImage" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传封面</button>', '<input type="text" name="cover" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">', "</li>", o, "</ul>"].join(""),
                            btn: ["确定", "取消"],
                            btnAlign: "c",
                            yes: function(i, o) {
                                var s = o.find('input[name="video"]'),
                                    r = o.find('input[name="cover"]'),
                                    d = o.find('select[name="theme"]');
                                if ("" == s.val()) n.msg("请选择一个视频或输入视频地址");
                                else {
                                    var c = '&nbsp;<video src="' + s.val() + '" poster="' + r.val() + '" ' + l.videoAttr + ' controls="controls" >您的浏览器不支持video播放</video>&nbsp;',
                                        u = "";
                                    a.video.title.length > 0 && d.length > 0 && (u = d[0].options[d[0].selectedIndex].value), p.call(t, "div", {
                                        text: c,
                                        class: u
                                    }, e), n.close(i)
                                }
                            },
                            btn2: function(t, e) {
                                var n = l.calldel;
                                "" != n.url && i.post(n.url, {
                                    imgpath: e.find('input[name="cover"]')
                                        .val(),
                                    filepath: e.find('input[name="video"]')
                                        .val()
                                }, function(t) {
                                    n.done(t)
                                })
                            },
                            cancel: function(t, e) {
                                var n = l.calldel;
                                "" != n.url && i.post(n.url, {
                                    imgpath: e.find('input[name="cover"]')
                                        .val(),
                                    filepath: e.find('input[name="video"]')
                                        .val()
                                }, function(t) {
                                    n.done(t)
                                })
                            },
                            success: function(t, e) {
                                layui.use("upload", function(e) {
                                    var i, o = t.find('input[name="video"]'),
                                        s = t.find('input[name="cover"]'),
                                        e = layui.upload,
                                        r = l.uploadImage || {};
                                    "" == r.url && n.msg("图片上传接口配置错误！");
                                    var d = l.uploadVideo || {};
                                    "" == d.url && n.msg("视频上传接口配置错误！"), e.render({
                                        elem: "#LayEdit_InsertImage",
                                        url: r.url,
                                        method: r.method,
                                        data: r.data,
                                        headers: r.headers,
                                        accept: r.accept || "image",
                                        acceptMime: r.acceptMime || "image/*",
                                        exts: r.exts || "jpg|png|gif|bmp|jpeg",
                                        size: r.size || 10240,
                                        field: r.field,
                                        before: function(t) {
                                            i = n.msg("文件上传中,请稍等哦", {
                                                icon: 16,
                                                shade: .3,
                                                time: 0
                                            })
                                        },
                                        done: function(t, e, l) {
                                            if (n.close(i), 0 == t.code) t.data = t.data || {}, s.val(t.data.src), r.done(t);
                                            else if (2 == t.code) var a = n.open({
                                                type: 1,
                                                anim: 2,
                                                icon: 5,
                                                title: "提示",
                                                area: ["390px", "260px"],
                                                offset: "t",
                                                content: t.msg + "<div><img src='" + t.data.src + "' style='max-height:100px'/></div><p style='text-align:center'>确定使用该文件吗？</p>",
                                                btn: ["确定", "取消"],
                                                yes: function() {
                                                    t.data = t.data || {}, s.val(t.data.src), n.close(a)
                                                }
                                            });
                                            else n.msg(t.msg || "上传失败")
                                        }
                                    }), e.render({
                                        elem: "#LayEdit_InsertVideo",
                                        url: d.url,
                                        method: d.method,
                                        data: d.data,
                                        headers: d.headers,
                                        field: d.field,
                                        accept: d.accept || "video",
                                        acceptMime: d.acceptMime || "video/*",
                                        exts: d.exts || "mp4|flv|avi|rm|rmvb",
                                        size: d.size || 20480,
                                        before: function(t) {
                                            i = n.msg("文件上传中,请稍等哦", {
                                                icon: 16,
                                                shade: .3,
                                                time: 0
                                            })
                                        },
                                        done: function(t, e, l) {
                                            if (n.close(i), 0 == t.code) t.data = t.data || {}, o.val(t.data.src), d.done(t);
                                            else if (2 == t.code) var a = n.open({
                                                type: 1,
                                                anim: 2,
                                                icon: 5,
                                                title: "提示",
                                                area: ["390px", "260px"],
                                                offset: "t",
                                                content: t.msg + "<div><video src='" + t.data.src + "' style='max-height:100px' controls='controls'/></div><p style='text-align:center'>确定使用该文件吗？</p>",
                                                btn: ["确定", "取消"],
                                                yes: function() {
                                                    t.data = t.data || {}, o.val(t.data.src), n.close(a)
                                                }
                                            });
                                            else n.msg(t.msg || "上传失败")
                                        }
                                    });
                                    var c = t.find('select[name="theme"]');
                                    a.video.title.length > 0 && c.length > 0 && t.find('select[name="theme"]')
                                        .on("change mouseover", function() {
                                            n.tips("<img src='" + c[0].options[c[0].selectedIndex].attributes["data-img"].value + "' />", this)
                                        })
                                })
                            }
                        })
                    },
                    attachment: function(e) {
                        n.open({
                            type: 1,
                            id: "fly-jie-image-upload",
                            title: "附件上传",
                            shade: .05,
                            shadeClose: !0,
                            area: function() {
                                return /mobile/i.test(navigator.userAgent) || i(window)
                                    .width() <= 485 ? ["90%"] : ["485px"]
                            }(),
                            offset: function() {
                                return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                            }(),
                            skin: "layui-layer-border",
                            content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px;">', '<li class="layui-form-item">', '<div class="layui-upload">', '<button type="button" class="layui-btn" id="LayEdit_InsertFiles"><i class="layui-icon"></i>上传附件</button> ', '<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;min-height: 116px">', '  上传列表：<div class="layui-upload-list" id="filesPrev"></div>', "</blockquote>", "</div>", "</li>", "</ul>"].join(""),
                            btn: ["确定", "取消"],
                            btnAlign: "c",
                            yes: function(i, l) {
                                0 === l.find("#filesPrev")
                                    .find("a")
                                    .length ? n.msg("请选择要上传的附件") : (p.call(t, "p", {
                                    text: l.find("#filesPrev")
                                        .html()
                                }, e), n.close(i))
                            },
                            success: function(a, o) {
                                layui.use("upload", function() {
                                    var s = layui.upload,
                                        r = l.uploadFiles || {};
                                    "" == r.url && n.msg("上传接口配置错误！");
                                    var d = [];
                                    s.render({
                                        elem: "#LayEdit_InsertFiles",
                                        url: r.url,
                                        field: r.field,
                                        headers: r.headers,
                                        data: r.data,
                                        method: r.type,
                                        accept: r.accept || "file",
                                        acceptMime: r.acceptMime || "file/*",
                                        exts: r.exts,
                                        size: r.size || 30720,
                                        multiple: !0,
                                        before: function(t) {
                                            t.preview(function(t, e, n) {
                                                -1 === d.indexOf(t) && i("#filesPrev")
                                                    .append('<a data-index="' + t + '" target="_blank" href="' + n + '" alt="' + e.name + '" >' + e.name + "</a>&nbsp;")
                                            })
                                        },
                                        allDone: function() {
                                            for (var l = 0; l < d.length; l++) i("#filesPrev")
                                                .find('a[data-index="' + d[l] + '"]')
                                                .remove();
                                            r.autoInsert && (p.call(t, "p", {
                                                text: a.find("#filesPrev")
                                                    .html()
                                            }, e), n.close(o))
                                        },
                                        error: function(t, e) {
                                            d.push(t)
                                        },
                                        done: function(t, e, o) {
                                            0 == t.code ? (t.data = t.data || {}, i('#filesPrev a[data-index="' + e + '"]')
                                                .attr("href", t.data.src), r.done(t)) : 2 == t.code ? (n.msg(t.msg || "上传失败"), t.data = t.data || {}, i('#filesPrev a[data-index="' + e + '"]')
                                                .attr("href", t.data.src), r.done(t)) : n.msg(t.msg || "上传失败"), a.find("#filesPrev a")
                                                .on("click", function() {
                                                    var t = this.getAttribute("data-index");
                                                    n.confirm("是否删除该附件?", {
                                                        icon: 3,
                                                        title: "提示"
                                                    }, function(e) {
                                                        var a = l.calldel;
                                                        "" != a.url ? i.post(a.url, {
                                                            filepath: this.href
                                                        }, function(e) {
                                                            i("#filesPrev")
                                                                .find('a[data-index="' + t + '"]')
                                                                .remove(), a.done(e)
                                                        }) : (n.msg("没有配置回调参数"), i("#filesPrev")
                                                            .find('a[data-index="' + t + '"]')
                                                            .remove()), n.close(e)
                                                    })
                                                })
                                        }
                                    })
                                })
                            }
                        })
                    },
                    html: function(e) {
                        var n = this;
                        if (-1 == n.parentElement.nextElementSibling.lastElementChild.id.indexOf("aceHtmleditor")) {
                            var l = n.parentElement.nextElementSibling.firstElementChild.contentDocument.body.innerHTML;
                            l.indexOf("</pre>") > -1 && (l = l.replace(/&lt;/g, "<")
                                .replace(/&gt;/g, ">")
                                .replace(/&#39;/g, "'")
                                .replace(/&quot;/g, '"')), l = style_html(l, 4, " ", 80), n.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height:" + n.parentElement.nextElementSibling.clientHeight + "px"), null !== this.parentElement.parentElement.getAttribute("style") && this.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height: " + (this.parentElement.parentElement.offsetHeight - this.parentElement.offsetHeight - 14) + "px"), n.parentElement.nextElementSibling.firstElementChild.style = "position: absolute;left: -32768px;top: -32768px;";
                            var a = document.createElement("div");
                            a.setAttribute("id", n.parentElement.nextElementSibling.firstElementChild.id + "aceHtmleditor"), a.setAttribute("style", "left: 0px;top: 0px;width: 100%;height: 100%"), n.parentElement.nextElementSibling.appendChild(a);
                            var o = ace.edit(n.parentElement.nextElementSibling.firstElementChild.id + "aceHtmleditor");
                            o.setFontSize(14), o.session.setMode("ace/mode/html"), o.setTheme("ace/theme/tomorrow"), o.setValue(l), o.setOption("wrap", "free"), o.gotoLine(0), i(n)
                                .siblings("i")
                                .addClass("layui-disabled"), i(n)
                                .siblings(".layedit-tool-fullScreen")
                                .removeClass("layui-disabled"), i(n)
                                .removeClass("layui-disabled")
                        } else {
                            var o = ace.edit(n.parentElement.nextElementSibling.firstElementChild.id + "aceHtmleditor"),
                                s = o.getValue();
                            t.document.body.innerHTML = s, t.document.body.childNodes.forEach(function(t, e, i) {
                                "PRE" == t.tagName && (t.innerHTML = t.innerHTML.replace(/&(?!#?[a-zA-Z0-9]+;)/g, "&amp;")
                                    .replace(/</g, "&lt;")
                                    .replace(/>/g, "&gt;")
                                    .replace(/'/g, "&#39;")
                                    .replace(/"/g, "&quot;"))
                            });
                            var r = n.parentElement.nextElementSibling.clientHeight;
                            n.parentElement.nextElementSibling.removeAttribute("style"), this.parentElement.nextElementSibling.firstElementChild.style = "height:" + r + "px", this.parentElement.nextElementSibling.lastElementChild.remove(), i(n)
                                .siblings("i")
                                .removeClass("layui-disabled")
                        }
                    },
                    fullScreen: function(t) {
                        null == this.parentElement.parentElement.getAttribute("style") ? (this.parentElement.parentElement.setAttribute("style", "position: fixed;top: 0;left: 0;height: 100%;width: 100%;background-color: #fff;z-index: 9999;"), this.parentElement.nextElementSibling.style = "height:" + (this.parentElement.parentElement.offsetHeight - this.parentElement.offsetHeight - 8) + "px", this.parentElement.nextElementSibling.firstElementChild.style = "height:100%", this.parentElement.nextElementSibling.lastElementChild.id.indexOf("aceHtmleditor") > -1 && (this.parentElement.nextElementSibling.firstElementChild.style = "position: absolute;left: -32768px;top: -32768px;", this.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height: " + (this.parentElement.parentElement.offsetHeight - this.parentElement.offsetHeight) + "px"))) : (this.parentElement.parentElement.removeAttribute("style"), this.parentElement.nextElementSibling.removeAttribute("style"), this.parentElement.nextElementSibling.firstElementChild.style = "height:" + l.height, this.parentElement.nextElementSibling.lastElementChild.id.indexOf("aceHtmleditor") > -1 && (this.parentElement.nextElementSibling.setAttribute("style", "z-index: 999; overflow: hidden;height:" + this.parentElement.nextElementSibling.firstElementChild.clientHeight + "px"), this.parentElement.nextElementSibling.firstElementChild.style = "position: absolute;left: -32768px;top: -32768px;"))
                    },
                    preview: function(t) {
                        var e = [];
                        layui.each(l.quote.style, function(t, i) {
                            e.push('<link href="' + i + '" rel="stylesheet"/>')
                        });
                        var a = l.previewAttr || {
                                area: ["50%", "100%"],
                                offset: "r"
                            },
                            o = this.parentElement.nextElementSibling.firstElementChild.contentDocument.body.innerHTML;
                        n.open({
                            type: 1,
                            id: "layui-kz-preview",
                            title: "预览",
                            shade: .05,
                            maxmin: !0,
                            full: function(t) {
                                t[0].style.height = i(".layui-layer-shade")
                                    .offsetHeight + "px", t[0].children[1].style.height = i(".layui-layer-shade")
                                    .offsetHeight - 43 + "px"
                            },
                            min: function(t) {},
                            restore: function(t) {
                                t[0].style.height = document.body.clientHeight - 100 + "px", t[0].children[1].style.height = document.body.clientHeight - 143 + "px"
                            },
                            shadeClose: !0,
                            area: function() {
                                return /mobile/i.test(navigator.userAgent) || i(window)
                                    .width() <= 485 ? ["90%", "90%"] : a.area
                            }(),
                            offset: function() {
                                return /mobile/i.test(navigator.userAgent) ? "auto" : a.offset
                            }(),
                            content: e.join("") + o,
                            success: function(t, e) {
                                n.setTop(t)
                            }
                        })
                    },
                    removeformat: function(t) {
                        a.execCommand("removeFormat", "strong", "color"), setTimeout(function() {
                            s.focus()
                        }, 10)
                    },
                    fontFomatt: function(t) {
                        var e = l.fontFomatt || {
                                code: ["p", "h1", "h2", "h3", "h4", "div"],
                                text: ["正文(p)", "一级标题(h1)", "二级标题(h2)", "三级标题(h3)", "四级标题(h4)", "块级元素(div)"]
                            },
                            i = {},
                            n = {},
                            o = e.code,
                            r = e.text,
                            d = function() {
                                return layui.each(o, function(t, e) {
                                    i[t] = e
                                }), i
                            }(),
                            c = function() {
                                return layui.each(r, function(t, e) {
                                    n[t] = e
                                }), n
                            }();
                        k.call(this, {
                            fonts: d,
                            texts: c
                        }, function(t) {
                            a.execCommand("formatBlock", !1, "<" + t + ">"), setTimeout(function() {
                                s.focus()
                            }, 10)
                        })
                    },
                    fontfamily: function(e) {
                        var i = l.fontfamily || {
                                code: ["font-family:宋体,SimSun", "font-family:微软雅黑,Microsoft YaHei", "font-family:黑体, SimHei", "font-family:楷体,楷体_GB2312, SimKai", "font-family:arial, helvetica,sans-serif", "font-family:arial black,avant garde", "font-family:times new roman"],
                                text: ["宋体", "微软雅黑", "黑体", "楷体", "arial", "arial black", "times new roman"]
                            },
                            n = {},
                            a = {},
                            o = i.code,
                            r = i.text,
                            d = function() {
                                return layui.each(o, function(t, e) {
                                    n[t] = e
                                }), n
                            }(),
                            c = function() {
                                return layui.each(r, function(t, e) {
                                    a[t] = e
                                }), a
                            }();
                        w.call(this, {
                            fonts: d,
                            texts: c
                        }, function(i) {
                            p.call(t, "span", {
                                style: i,
                                text: "&nbsp;"
                            }, e), setTimeout(function() {
                                s.focus()
                            }, 10)
                        })
                    },
                    fontSize: function(t) {
                        var e = l.fontSize || {
                                code: ["1", "2", "3", "4", "5", "6", "7"],
                                text: ["9px", "13px", "16px", "18px", "24px", "32px", "48px"]
                            },
                            i = {},
                            o = {},
                            r = e.code,
                            d = e.text,
                            c = function() {
                                return layui.each(r, function(t, e) {
                                    i[t] = e
                                }), i
                            }(),
                            u = function() {
                                return layui.each(d, function(t, e) {
                                    o[t] = e
                                }), o
                            }();
                        C.call(this, {
                            fonts: c,
                            texts: u,
                            last_value: l.fontSize_value
                        }, function(i) {
                            l.fontSize_value = i;
                            var o = e.code.indexOf(i);
                            o = o > 0 ? e.text[o] : i;
                            var r = getRangeNodes(t);
                            n.msg("已成功设置字号为：" + o, {
                                icon: 6
                            }), a.execCommand("FontSize", !1, i);
                            for (var d = 0; d < r.length; d++) {
                                var c = r[d].children.length;
                                if (c && 0 != c)
                                    for (var u = 0; u < c; u++) "FONT" == r[d].children[u].nodeName && (r[d].children[u].size = null, r[d].children[u].style.fontSize = o)
                            }
                            setTimeout(function() {
                                s.focus()
                            }, 10)
                        })
                    },
                    lineHeight: function(t) {
                        var e = l.lineHeight || {
                                code: ["1", "1.5", "1.75", "2", "3", "4", "5"],
                                text: ["1", "1.5", "1.75", "2", "3", "4", "5"]
                            },
                            i = {},
                            a = {},
                            o = e.code,
                            r = e.text,
                            d = function() {
                                return layui.each(o, function(t, e) {
                                    i[t] = e
                                }), i
                            }(),
                            c = function() {
                                return layui.each(r, function(t, e) {
                                    a[t] = e
                                }), a
                            }();
                        A.call(this, {
                            fonts: d,
                            texts: c,
                            last_value: l.lineHeight_value
                        }, function(i) {
                            l.lineHeight_value = i;
                            var a = e.code.indexOf(i);
                            a = a > 0 ? e.text[a] : i;
                            var o = getRangeNodes(t);
                            n.msg("已成功设置行间距为：" + a, {
                                icon: 6
                            }), window.list = o;
                            for (var r = 0; r < o.length; r++) {
                                o[r].children.length;
                                o[r].style.lineHeight = i + "em"
                            }
                            setTimeout(function() {
                                s.focus()
                            }, 10)
                        })
                    },
                    customlink: function(e) {
                        var n = m(e),
                            a = i(n)
                                .parent();
                        b.call(s, {
                            title: l.customlink.title
                        }, function(i) {
                            var n = a[0];
                            "A" === n.tagName ? (n.href = i.url, n.rel = i.rel) : p.call(t, "a", {
                                target: "_blank",
                                href: l.customlink.href,
                                rel: "nofollow",
                                text: i.text,
                                onmouseup: l.customlink.onmouseup
                            }, e)
                        })
                    },
                    anchors: function(e) {
                        _.call(s, {}, function(i) {
                            p.call(t, "a", {
                                name: i.text,
                                text: " "
                            }, e)
                        })
                    },
                    table: function(e) {
                        T.call(this, {}, function(i) {
                            for (var n = "<tr>", l = 0; l < i.cells; l++) n += "<td></td>";
                            n += "</tr>";
                            for (var a = n, l = 0; l < i.rows; l++) n += a;
                            p.call(t, "table", {
                                text: n
                            }, e)
                        })
                    },
                    addhr: function(e) {
                        p.call(t, "hr", {}, e)
                    },
                    help: function() {
                        n.open({
                            type: 2,
                            title: "帮助",
                            area: ["600px", "380px"],
                            shadeClose: !0,
                            shade: .1,
                            offset: "100px",
                            skin: "layui-layer-msg",
                            content: ["http://www.layui.com/about/layedit/help.html", "no"]
                        })
                    }
                },
                d = e.find(".layui-layedit-tool"),
                c = function() {
                    var e = i(this),
                        n = e.attr("layedit-event"),
                        l = e.attr("lay-command");
                    if (!e.hasClass(o)) {
                        s.focus();
                        var c = h(a),
                            u = c.commonAncestorContainer;
                        l ? (/justifyLeft|justifyCenter|justifyRight/.test(l) && "BODY" === u.parentNode.tagName && a.execCommand("formatBlock", !1, "<p>"), a.execCommand(l), setTimeout(function() {
                            if (/Bold/.test(l)) {
                                var t = document.createElement("strong");
                                s.find("b")
                                    .each(function() {
                                        t.innerText = this.innerText, this.outerHTML = t.outerHTML
                                    })
                            }
                            s.focus()
                        }, 10)) : r[n] && r[n].call(this, c, a), g.call(t, d, e)
                    }
                },
                u = /image/;
            d.find(">i")
                .on("mousedown", function() {
                    var t = i(this),
                        e = t.attr("layedit-event");
                    u.test(e) || c.call(this)
                })
                .on("click", function() {
                    var t = i(this),
                        e = t.attr("layedit-event");
                    u.test(e) && c.call(this)
                }), s.on("click", function() {
                g.call(t, d), n.close(E.index), n.close(k.index), n.close(w.index), n.close(C.index), n.close(T.index)
            });
            var f = null,
                v = function(t) {
                    var e = l.rightBtn || {
                        type: "layBtn",
                        customEvent: function(t, e) {}
                    };
                    if (null != t && "default" != e.type) {
                        n.close(f);
                        var a, o;
                        if (a = t.target, o = a.parentNode, "custom" == e.type) return e.customEvent(a.tagName, t), !1;
                        switch (a.tagName) {
                            case "IMG":
                                S({
                                    context: {
                                        set: l
                                    },
                                    data: {
                                        src: t.target.src,
                                        alt: t.target.alt,
                                        width: t.target.style.width || t.target.getAttribute("width"),
                                        height: t.target.style.height || t.target.getAttribute("height")
                                    },
                                    beforeOpen: function(e, i) {
                                        e.btn.push('<span style="background:#FF5722;color:#FFF;display:block;margin:0 -15px;padding:0 15px;">删除</span>'), e.btn3 = function(e, l) {
                                            i.deleteImage(i.getImageData(), {
                                                src: "must-delete"
                                            }), t.toElement.remove(), n.close(e)
                                        }
                                    },
                                    beforeUpload: function(t, e) {
                                        e.deleteImage(t)
                                    },
                                    success: function(e, i) {
                                        t.target.src = e.src, t.target.alt = e.alt, t.target.style.width = e.width, t.target.style.height = e.height
                                    }
                                });
                                break;
                            case "VIDEO":
                                var s = l.customTheme || {
                                        video: []
                                    },
                                    r = "";
                                s.video.title.length > 0 && (r = AddCustomThemes(s.video.title, s.video.content, s.video.preview)), f = n.open({
                                    type: 1,
                                    id: "fly-jie-video-upload",
                                    title: "视频管理",
                                    shade: .05,
                                    shadeClose: !0,
                                    area: function() {
                                        return /mobile/i.test(navigator.userAgent) || i(window)
                                            .width() <= 485 ? ["90%"] : ["485px"]
                                    }(),
                                    offset: function() {
                                        return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                                    }(),
                                    skin: "layui-layer-border",
                                    content: ['<ul class="layui-form layui-form-pane" style="margin: 20px 20px 0 20px">', '<li class="layui-form-item" style="position: relative">', '<button type="button" class="layui-btn" id="LayEdit_InsertVideo" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传视频</button>', '<input type="text" name="video" value="' + t.target.src + '" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">', "</li>", '<li class="layui-form-item" style="position: relative">', '<button type="button" class="layui-btn" id="LayEdit_InsertImage" style="width: 110px;position: relative;z-index: 10;"> <i class="layui-icon"></i>上传封面</button>', '<input type="text" name="cover" value="' + t.target.poster + '" placeholder="请选择文件" style="position: absolute;width: 100%;padding-left: 120px;left: 0;top:0" class="layui-input">', "</li>", r, "</ul>"].join(""),
                                    btn: ["确定", "取消", '<span style="color:red">删除</span>'],
                                    btnAlign: "c",
                                    yes: function(e, i) {
                                        var l = i.find('input[name="video"]'),
                                            a = i.find('input[name="cover"]');
                                        "" == l.val() ? n.msg("请选择一个视频或输入视频地址") : (t.target.src = l.val(), t.target.poster = a.val(), n.close(e))
                                    },
                                    btn2: function(t, e) {},
                                    btn3: function(e, a) {
                                        var s = l.calldel;
                                        "" != s.url ? i.post(s.url, {
                                            filepath: t.target.src,
                                            imgpath: t.target.poster
                                        }, function(t) {
                                            o.remove(), s.done(t)
                                        }) : t.toElement.remove(), n.close(e)
                                    },
                                    success: function(t, e) {
                                        layui.use("upload", function(e) {
                                            var i, a = t.find('input[name="video"]'),
                                                o = t.find('input[name="cover"]'),
                                                e = layui.upload,
                                                r = l.uploadImage || {},
                                                d = l.uploadVideo || {};
                                            "" == r.url && n.msg("图片上传接口配置错误！"), "" == d.url && n.msg("视频上传接口配置错误！"), e.render({
                                                elem: "#LayEdit_InsertImage",
                                                url: r.url,
                                                method: r.method,
                                                data: r.data,
                                                headers: r.headers,
                                                accept: r.accept || "image",
                                                acceptMime: r.acceptMime || "image/*",
                                                exts: r.exts || "jpg|png|gif|bmp|jpeg",
                                                size: r.size || 10240,
                                                field: r.field,
                                                before: function(t) {
                                                    i = n.msg("文件上传中,请稍等哦", {
                                                        icon: 16,
                                                        shade: .3,
                                                        time: 0
                                                    })
                                                },
                                                done: function(t, e, l) {
                                                    if (n.close(i), 0 == t.code) t.data = t.data || {}, o.val(t.data.src), r.done(t);
                                                    else if (2 == t.code) var a = n.open({
                                                        type: 1,
                                                        anim: 2,
                                                        icon: 5,
                                                        title: "提示",
                                                        area: ["390px", "260px"],
                                                        offset: "t",
                                                        content: t.msg + "<div><img src='" + t.data.src + "' style='max-height:100px'/></div><p style='text-align:center'>确定使用该文件吗？</p>",
                                                        btn: ["确定", "取消"],
                                                        yes: function() {
                                                            t.data = t.data || {}, o.val(t.data.src), n.close(a)
                                                        }
                                                    });
                                                    else n.msg(t.msg || "上传失败")
                                                }
                                            }), e.render({
                                                elem: "#LayEdit_InsertVideo",
                                                url: d.url,
                                                method: d.method,
                                                data: d.data,
                                                headers: d.headers,
                                                field: d.field,
                                                accept: d.accept || "video",
                                                acceptMime: d.acceptMime || "video/*",
                                                exts: d.exts || "mp4|flv|avi|rm|rmvb",
                                                size: d.size || 20480,
                                                before: function(t) {
                                                    i = n.msg("文件上传中,请稍等哦", {
                                                        icon: 16,
                                                        shade: .3,
                                                        time: 0
                                                    })
                                                },
                                                done: function(t, e, l) {
                                                    if (n.close(i), 0 == t.code) t.data = t.data || {}, a.val(t.data.src), d.done(t);
                                                    else if (2 == t.code) var o = n.open({
                                                        type: 1,
                                                        anim: 2,
                                                        icon: 5,
                                                        title: "提示",
                                                        area: ["390px", "260px"],
                                                        offset: "t",
                                                        content: t.msg + "<div><video src='" + t.data.src + "' style='max-height:100px' controls='controls'/></div><p style='text-align:center'>确定使用该文件吗？</p>",
                                                        btn: ["确定", "取消"],
                                                        yes: function() {
                                                            t.data = t.data || {}, a.val(t.data.src), n.close(o)
                                                        }
                                                    });
                                                    else n.msg(t.msg || "上传失败")
                                                }
                                            });
                                            var c = t.find('select[name="theme"]');
                                            s.video.title.length > 0 && c.length > 0 && t.find('select[name="theme"]')
                                                .on("change mouseover", function() {
                                                    n.tips("<img src='" + c[0].options[c[0].selectedIndex].attributes["data-img"].value + "' />", this)
                                                })
                                        })
                                    }
                                });
                                break;
                            case "TD":
                                f = n.open({
                                    type: 1,
                                    title: !1,
                                    shade: 0,
                                    offset: [t.clientY + "px", t.clientX + "px"],
                                    skin: "layui-box layui-util-face",
                                    content: function() {
                                        return '<ul class="layui-clear" style="width: max-content;width:-moz-max-content;">' + [, '<li  style="float: initial;width:100%;" lay-command="addnewtr"> 新增行 </li>', '<li  style="float: initial;width:100%;"  lay-command="deltr"> 删除行 </li>'].join("") + "</ul>"
                                    }(),
                                    success: function(t, e) {
                                        t.find("li")
                                            .on("click", function() {
                                                var t = i(this),
                                                    l = t.attr("lay-command");
                                                if (l) switch (l) {
                                                    case "deltr":
                                                        o.remove();
                                                        break;
                                                    case "addnewtr":
                                                        for (var a = "<tr>", s = 0; s < o.children.length; s++) a += "<td></td>";
                                                        a += "</tr>", i(o)
                                                            .after(a)
                                                }
                                                n.close(e)
                                            })
                                    }
                                });
                                break;
                            default:
                                f = n.open({
                                    type: 1,
                                    title: !1,
                                    closeBtn: !1,
                                    offset: function() {
                                        if (/mobile/i.test(navigator.userAgent)) return "auto";
                                        var e = l._elem.next()
                                            .find("iframe")
                                            .get(0);
                                        return [e.offsetTop + t.clientY + o.getBoundingClientRect()
                                            .y + "px", e.offsetLeft + t.clientX + o.getBoundingClientRect()
                                            .x + "px"
                                        ]
                                    }(),
                                    shade: function() {
                                        return /mobile/i.test(navigator.userAgent) ? .1 : 0
                                    },
                                    shadeClose: !0,
                                    content: ["<style>", "ul.context-menu > li > a{border: none;border-bottom: 1px solid rgba(0,0,0,.2);border-radius: 0}", "ul.context-menu > li > a:hover{border-color: rgba(0,0,0,.2);background:#eaeaea}", "ul.context-menu > li:last-child > a{border: none;}", "</style>", '<ul style="width:100px" class="context-menu">', '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm" style="width:100%" lay-command="left"> 居左 </a></li>', '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm" style="width:100%" lay-command="center"> 居中 </a></li>', '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm" style="width:100%" lay-command="right"> 居右 </a></li>', '<li><a type="button" class="layui-btn layui-btn-primary layui-btn-sm context-menu-delete" style="width:100%" lay-command="right"> 删除 </a></li>', "</ul>"].join(""),
                                    success: function(e, s) {
                                        var r = l.calldel;
                                        e.find(".layui-btn-primary")
                                            .on("click", function() {
                                                var t = i(this),
                                                    e = t.attr("lay-command");
                                                e && ("VIDEO" == a.tagName ? o.style = "text-align:" + e : a.style = "text-align:" + e), n.close(s)
                                            }), e.find(".context-menu-delete")
                                            .on("click", function() {
                                                "BODY" == a.tagName ? n.msg("不能再删除了") : "VIDEO" == a.tagName ? "" != r.url ? i.post(r.url, {
                                                    filepath: t.target.src,
                                                    imgpath: t.target.poster
                                                }, function(t) {
                                                    o.remove(), r.done(t)
                                                }) : o.remove() : "IMG" == a.tagName && "" != r.url ? i.post(r.url, {
                                                    para: t.target.src
                                                }, function(t) {
                                                    a.remove(), r.done(t)
                                                }) : a.remove(), n.close(s)
                                            })
                                    }
                                })
                        }
                        return !1
                    }
                };
            if (/mobile/i.test(navigator.userAgent)) {
                var O;
                s.on({
                    touchstart: function(t) {
                        O = setTimeout(function() {
                            v(t), clearTimeout(O)
                        }, 300), t.preventDefault()
                    },
                    touchmove: function() {
                        clearTimeout(O)
                    },
                    touchend: function() {
                        clearTimeout(O)
                    }
                })
            } else s.on("contextmenu", function(t) {
                return v(t)
            })
        },
        x = function t(e, a) {
            var o = e.dmode,
                s = this,
                r = n.open({
                    type: 1,
                    id: "LAY_layedit_link",
                    area: function() {
                        return /mobile/i.test(navigator.userAgent) || i(window)
                            .width() <= 460 ? ["90%"] : ["460px"]
                    }(),
                    offset: function() {
                        return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                    }(),
                    shade: .05,
                    shadeClose: !0,
                    moveType: 1,
                    title: "超链接",
                    skin: "layui-layer-msg",
                    content: ['<ul class="layui-form" style="margin: 15px;">', '<li class="layui-form-item">', '<label class="layui-form-label" style="width: 70px;">链接地址</label>', '<div class="layui-input-block">', '<input name="url" value="' + (e.href || "") + '" autofocus="true" autocomplete="off" class="layui-input">', "</div>", "</li>", '<li class="layui-form-item">', '<label class="layui-form-label" style="width: 70px;">链接文本</label>', '<div class="layui-input-block">', '<input name="text" value="' + (e.text || "") + '" autofocus="true" autocomplete="off" class="layui-input" ' + ("" !== e.text ? 'readonly="readonly"' : "") + ">", "</div>", "</li>", '<li class="layui-form-item ' + (o ? "" : "layui-hide") + '">', '<label class="layui-form-label" style="width: 70px;">打开方式</label>', '<div class="layui-input-block">', '<input type="radio" name="target" value="_blank" class="layui-input" title="新窗口" ' + ("_blank" === e.target ? "checked" : "") + ">", '<input type="radio" name="target" value="_self" class="layui-input" title="当前窗口"' + ("_self" !== e.target && e.target ? "" : "checked") + ">", "</div>", "</li>", '<li class="layui-form-item ' + (o ? "" : "layui-hide") + '">', '<label class="layui-form-label" style="width: 70px;">rel属性</label>', '<div class="layui-input-block">', '<input type="radio" name="rel" value="" class="layui-input" title="无" ' + ("" !== e.rel && e.target ? "" : "checked") + ">", '<input type="radio" name="rel" value="nofollow" class="layui-input" title="nofollow"' + ("nofollow" === e.rel ? "checked" : "") + ">", "</div>", "</li>", '<button type="button" lay-submit lay-filter="layedit-link-yes" id="layedit-link-yes" class="layui-btn" style="display: none;"> 确定 </button>', "</ul>"].join(""),
                    btn: ["确定", "取消"],
                    btnAlign: "c",
                    yes: function(t, e) {
                        i("#layedit-link-yes")
                            .click()
                    },
                    btn1: function(t, e) {
                        n.close(t), setTimeout(function() {
                            s.focus()
                        }, 10)
                    },
                    success: function(e, i) {
                        l.render("radio"), l.on("submit(layedit-link-yes)", function(e) {
                            n.close(t.index), a && a(e.field)
                        })
                    }
                });
            t.index = r
        },
        b = function t(e, a) {
            var o = n.open({
                type: 1,
                id: "LAY_layedit_customlink",
                area: function() {
                    return /mobile/i.test(navigator.userAgent) || i(window)
                        .width() <= 350 ? ["90%"] : ["350px"]
                }(),
                offset: function() {
                    return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                }(),
                shade: .05,
                shadeClose: !0,
                moveType: 1,
                title: e.title,
                skin: "layui-layer-msg",
                content: ['<ul class="layui-form" style="margin: 15px;">', '<li class="layui-form-item">', '<label class="layui-form-label" style="width: 60px;">名称</label>', '<div class="layui-input-block" style="margin-left: 90px">', '<input name="text" value="" autofocus="true" autocomplete="off" class="layui-input">', "</div>", "</li>", '<li class="layui-form-item" style="display:none">', '<button type="button" lay-submit lay-filter="layedit-link-yes" id="layedit-link-yes"> 确定 </button>', "</li>", "</ul>"].join(""),
                btn: ["确定", "取消"],
                btnAlign: "c",
                yes: function(t, e) {
                    i("#layedit-link-yes")
                        .click()
                },
                success: function(e, i) {
                    l.render("radio"), l.on("submit(layedit-link-yes)", function(e) {
                        a && a(e.field), n.close(t.index)
                    })
                }
            });
            t.index = o
        },
        _ = function t(e, a) {
            var o = n.open({
                type: 1,
                id: "LAY_layedit_addmd",
                area: function() {
                    return /mobile/i.test(navigator.userAgent) || i(window)
                        .width() <= 350 ? ["90%"] : ["350px"]
                }(),
                offset: function() {
                    return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                }(),
                shade: .05,
                shadeClose: !0,
                moveType: 1,
                title: "添加锚点",
                skin: "layui-layer-msg",
                content: ['<ul class="layui-form" style="margin: 15px;">', '<li class="layui-form-item">', '<label class="layui-form-label" style="width: 60px;">名称</label>', '<div class="layui-input-block" style="margin-left: 90px">', '<input name="text" value="' + (e.name || "") + '" autofocus="true" autocomplete="off" class="layui-input">', "</div>", "</li>", '<button type="button" lay-submit lay-filter="layedit-link-yes" id="layedit-link-yes" class="layui-btn" style="display: none;"> 确定 </button>', "</ul>"].join(""),
                btn: ["确定", "取消"],
                btnAlign: "c",
                yes: function(t, e) {
                    i("#layedit-link-yes")
                        .click()
                },
                success: function(e, i) {
                    l.render("radio"), l.on("submit(layedit-link-yes)", function(e) {
                        n.close(t.index), a && a(e.field)
                    })
                }
            });
            t.index = o
        },
        T = function t(l, a) {
            return t.hide = t.hide || function(e) {
                "table" !== i(e.target)
                    .attr("layedit-event") && n.close(t.index)
            }, /mobile/i.test(navigator.userAgent) ? t.index = n.open({
                type: 1,
                title: !1,
                closeBtn: 0,
                shade: .05,
                shadeClose: !0,
                content: '<div style="padding: 5px;border: 1px solid #e6e6e6;"><span id="laytable_label" class="layui-label">0列 x 0行</span><table class="layui-table" lay-size="sm"><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div>',
                area: ["85%"],
                skin: "layui-box layui-util-face",
                success: function(t, l) {
                    t.find("td")
                        .on("touchmove", function(n) {
                            var l = e(n);
                            if (null != l && "TD" === l.tagName.toUpperCase()) {
                                t.find("#laytable_label")[0].innerText = l.cellIndex + 1 + "列X" + (l.parentElement.rowIndex + 1) + "行", t.find("td")
                                    .removeAttr("style"), i(l)
                                    .attr("style", "background-color:linen;"), i(l)
                                    .prevAll()
                                    .attr("style", "background-color:linen;");
                                for (var a = 0; a < i(l.parentElement)
                                    .prevAll()
                                    .length; a++)
                                    for (var o = 0; o < i(l.parentElement)
                                        .prevAll()[a].childNodes.length; o++) o <= l.cellIndex && (i(l.parentElement)
                                        .prevAll()[a].children[o].style = "background-color:linen;")
                            }
                        }), t.find("td")
                        .on("touchend", function(t) {
                            var i = e(t);
                            null != i && "TD" === i.tagName.toUpperCase() && (a && a({
                                cells: i.cellIndex + 1,
                                rows: i.parentElement.rowIndex
                            }), n.close(l))
                        })
                }
            }) : t.index = n.tips('<div style="padding: 5px;border: 1px solid #e6e6e6;"><span id="laytable_label" class="layui-label">0列 x 0行</span><table class="layui-table" lay-size="sm"><tbody><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style="height: 20px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div>', this, {
                tips: 1,
                time: 0,
                skin: "layui-box layui-util-face",
                maxWidth: 500,
                success: function(e, l) {
                    e.find("td")
                        .on("mouseover", function() {
                            e.find("#laytable_label")[0].innerText = this.cellIndex + 1 + "列X" + (this.parentElement.rowIndex + 1) + "行", e.find("td")
                                .removeAttr("style"), i(this)
                                .attr("style", "background-color:linen;"), i(this)
                                .prevAll()
                                .attr("style", "background-color:linen;");
                            for (var t = 0; t < i(this.parentElement)
                                .prevAll()
                                .length; t++)
                                for (var n = 0; n < i(this.parentElement)
                                    .prevAll()[t].childNodes.length; n++) n <= this.cellIndex && (i(this.parentElement)
                                    .prevAll()[t].children[n].style = "background-color:linen;")
                        }), e.find("td")
                        .on("click", function() {
                            a && a({
                                cells: this.cellIndex + 1,
                                rows: this.parentElement.rowIndex
                            }), n.close(l)
                        }), i(document)
                        .off("click", t.hide)
                        .on("click", t.hide)
                }
            }), t.index
        },
        E = function t(e, l) {
            var a = function() {
                var t = ["[微笑]", "[嘻嘻]", "[哈哈]", "[可爱]", "[可怜]", "[挖鼻]", "[吃惊]", "[害羞]", "[挤眼]", "[闭嘴]", "[鄙视]", "[爱你]", "[泪]", "[偷笑]", "[亲亲]", "[生病]", "[太开心]", "[白眼]", "[右哼哼]", "[左哼哼]", "[嘘]", "[衰]", "[委屈]", "[吐]", "[哈欠]", "[抱抱]", "[怒]", "[疑问]", "[馋嘴]", "[拜拜]", "[思考]", "[汗]", "[困]", "[睡]", "[钱]", "[失望]", "[酷]", "[色]", "[哼]", "[鼓掌]", "[晕]", "[悲伤]", "[抓狂]", "[黑线]", "[阴险]", "[怒骂]", "[互粉]", "[心]", "[伤心]", "[猪头]", "[熊猫]", "[兔子]", "[ok]", "[耶]", "[good]", "[NO]", "[赞]", "[来]", "[弱]", "[草泥马]", "[神马]", "[囧]", "[浮云]", "[给力]", "[围观]", "[威武]", "[奥特曼]", "[礼物]", "[钟]", "[话筒]", "[蜡烛]", "[蛋糕]"],
                    i = {};
                return layui.each(t, function(t, n) {
                    i[n] = e.facePath + "images/face/" + t + ".gif"
                }), i
            }();
            return t.hide = t.hide || function(e) {
                "face" !== i(e.target)
                    .attr("layedit-event") && n.close(t.index)
            }, /mobile/i.test(navigator.userAgent) ? t.index = n.open({
                type: 1,
                title: !1,
                closeBtn: 0,
                shade: .05,
                shadeClose: !0,
                content: function() {
                    var t = [];
                    return layui.each(a, function(e, i) {
                        t.push('<li title="' + e + '"><img src="' + i + '" alt="' + e + '"/></li>')
                    }), '<ul class="layui-clear" style="width: 279px;">' + t.join("") + "</ul>"
                }(),
                skin: "layui-box layui-util-face",
                success: function(t, e) {
                    t.find(".layui-clear>li")
                        .on("click", function() {
                            l && l({
                                src: a[this.title],
                                alt: this.title
                            }), n.close(e)
                        })
                }
            }) : t.index = n.tips(function() {
                var t = [];
                return layui.each(a, function(e, i) {
                    t.push('<li title="' + e + '"><img src="' + i + '" alt="' + e + '"/></li>')
                }), '<ul class="layui-clear" style="width: 279px;">' + t.join("") + "</ul>"
            }(), this, {
                tips: 1,
                time: 0,
                skin: "layui-box layui-util-face",
                maxWidth: 500,
                success: function(e, o) {
                    e.css({
                        marginTop: -4,
                        marginLeft: -10
                    })
                        .find(".layui-clear>li")
                        .on("click", function() {
                            l && l({
                                src: a[this.title],
                                alt: this.title
                            }), n.close(o)
                        }), i(document)
                        .off("click", t.hide)
                        .on("click", t.hide)
                }
            }), t.index
        },
        k = function t(e, l) {
            t.hide = t.hide || function(e) {
                "fontFomatt" !== i(e.target)
                    .attr("layedit-event") && "fontfamily" !== i(e.target)
                    .attr("layedit-event") && n.close(t.index)
            }, t.index = n.tips(function() {
                var t = [];
                return layui.each(e.fonts, function(i, n) {
                    t.push('<li title="' + e.fonts[i] + '" style="float: initial;width:100%;"><' + e.fonts[i] + ">" + e.texts[i] + "</" + e.fonts[i] + "></li>")
                }), '<ul class="layui-clear" style="width: max-content;width:-moz-max-content;">' + t.join("") + "</ul>"
            }(), this, {
                tips: 1,
                time: 0,
                skin: "layui-box layui-util-face",
                success: function(a, o) {
                    a.css({
                        marginTop: -4,
                        marginLeft: -10
                    })
                        .find(".layui-clear>li")
                        .on("click", function() {
                            l && l(this.title, e.fonts), n.close(o)
                        }), i(document)
                        .off("click", t.hide)
                        .on("click", t.hide)
                }
            })
        },
        w = function t(e, l) {
            t.hide = t.hide || function(e) {
                "fontfamily" != i(e.target)
                    .attr("layedit-event") && n.close(t.index)
            }, t.index = n.tips(function() {
                var t = [];
                return layui.each(e.fonts, function(i, n) {
                    t.push('<li title="' + e.fonts[i] + '" style="float: initial;width:100%;' + e.fonts[i] + '"><' + e.fonts[i] + ">" + e.texts[i] + "</" + e.fonts[i] + "></li>")
                }), '<ul class="layui-clear" style="width: max-content;width:-moz-max-content;">' + t.join("") + "</ul>"
            }(), this, {
                tips: 1,
                time: 0,
                skin: "layui-box layui-util-face",
                success: function(a, o) {
                    a.css({
                        marginTop: -4,
                        marginLeft: -10
                    })
                        .find(".layui-clear>li")
                        .on("click", function() {
                            l && l(this.title, e.fonts), n.close(o)
                        }), i(document)
                        .off("click", t.hide)
                        .on("click", t.hide)
                }
            })
        },
        C = function t(e, l) {
            t.hide = t.hide || function(e) {
                "fontSize" !== i(e.target)
                    .attr("layedit-event") && n.close(t.index)
            }, e.last_value || (e.last_value = 2), t.index = n.tips(function() {
                var t = [];
                return layui.each(e.fonts, function(i, n) {
                    var l = "";
                    e.last_value == e.fonts[i] && (l = '&nbsp;&nbsp;<i class="layui-icon">&#xe605;</i>'), t.push('<li title="' + e.fonts[i] + '">' + e.fonts[i] + "：" + e.texts[i] + l + "</" + e.fonts[i] + "></li>")
                }), '<ul class="layui-clear" style="width: max-content;">' + t.join("") + "</ul>"
            }(), this, {
                tips: 1,
                time: 0,
                skin: "layui-box layui-util-font",
                success: function(a, o) {
                    a.css({
                        marginTop: -4,
                        marginLeft: -10
                    })
                        .find(".layui-clear>li")
                        .on("click", function() {
                            l && l(this.title, e.fonts, e.texts), n.close(o)
                        }), i(document)
                        .off("click", t.hide)
                        .on("click", t.hide)
                }
            })
        },
        A = function t(e, l) {
            t.hide = t.hide || function(e) {
                "lineHeight" !== i(e.target)
                    .attr("layedit-event") && n.close(t.index)
            }, e.last_value || (e.last_value = 1), t.index = n.tips(function() {
                var t = [];
                return layui.each(e.fonts, function(i, n) {
                    var l = "";
                    e.last_value == e.fonts[i] && (l = '&nbsp;&nbsp;&nbsp;&nbsp;<i class="layui-icon">&#xe605;</i>'), t.push('<li title="' + e.fonts[i] + '">' + e.texts[i] + l + "</" + e.fonts[i] + "></li>")
                }), '<ul class="layui-clear" style="width: max-content;">' + t.join("") + "</ul>"
            }(), this, {
                tips: 1,
                time: 0,
                skin: "layui-box layui-util-font",
                success: function(a, o) {
                    a.css({
                        marginTop: -4,
                        marginLeft: -10
                    })
                        .find(".layui-clear>li")
                        .on("click", function() {
                            l && l(this.title, e.fonts), n.close(o)
                        }), i(document)
                        .off("click", t.hide)
                        .on("click", t.hide)
                }
            })
        },
        N = function t(e, a) {
            var o = ['<li class="layui-form-item objSel">', '<label class="layui-form-label">请选择语言</label>', "<style>#selectCodeLanguage ~ .layui-form-select > dl {max-height: 192px} </style>", '<div class="layui-input-block">', '<select name="lang" id="selectCodeLanguage">', '<option value="JavaScript">JavaScript</option>', '<option value="HTML">HTML</option>', '<option value="CSS">CSS</option>', '<option value="Java">Java</option>', '<option value="PHP">PHP</option>', '<option value="C#">C#</option>', '<option value="Python">Python</option>', '<option value="Ruby">Ruby</option>', '<option value="Go">Go</option>', "</select>", "</div>", "</li>"].join("");
            e.hide && (o = ['<li class="layui-form-item" style="display:none">', '<label class="layui-form-label">请选择语言</label>', '<div class="layui-input-block">', '<select name="lang">', '<option value="' + e.default+'" selected="selected">', e.default, "</option>", "</select>", "</div>", "</li>"].join(""));
            var s = this,
                r = n.open({
                    type: 1,
                    id: "LAY_layedit_code",
                    area: function() {
                        return /mobile/i.test(navigator.userAgent) || i(window)
                            .width() <= 650 ? ["90%"] : ["650px"]
                    }(),
                    offset: function() {
                        return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                    }(),
                    shade: .05,
                    shadeClose: !0,
                    moveType: 1,
                    title: "插入代码",
                    skin: "layui-layer-msg",
                    content: ['<ul class="layui-form layui-form-pane" style="margin: 15px;">', o, '<li class="layui-form-item layui-form-text">', '<label class="layui-form-label">代码</label>', '<div class="layui-input-block">', '<textarea name="code" lay-verify="required" autofocus="true" class="layui-textarea" style="height: 200px;"></textarea>', "</div>", "</li>", '<button type="button" id="layedit-code-yes" lay-submit lay-filter="layedit-code-yes" class="layui-btn" style="display: none"> 确定 </button>', "</ul>"].join(""),
                    btn: ["确定", "取消"],
                    btnAlign: "c",
                    yes: function(t, e) {
                        i("#layedit-code-yes")
                            .click()
                    },
                    btn1: function(t, e) {
                        n.close(t), s.focus()
                    },
                    success: function(i, o) {
                        l.render("select"), l.on("submit(layedit-code-yes)", function(i) {
                            n.close(t.index), a && a(i.field, e.hide, e.default)
                        })
                    }
                });
            t.index = r
        },
        O = {
            html: '<i class="layui-icon layedit-tool-html" title="HTML源代码"  layedit-event="html"">&#xe64b;</i>',
            undo: '<i class="layui-icon layedit-tool-undo" title="撤销" lay-command="undo" layedit-event="undo"">&#xe603;</i>',
            redo: '<i class="layui-icon layedit-tool-redo" title="重做" lay-command="redo" layedit-event="redo"">&#xe602;</i>',
            strong: '<i class="layui-icon layedit-tool-b" title="加粗" lay-command="Bold" layedit-event="b"">&#xe62b;</i>',
            italic: '<i class="layui-icon layedit-tool-i" title="斜体" lay-command="italic" layedit-event="i"">&#xe644;</i>',
            underline: '<i class="layui-icon layedit-tool-u" title="下划线" lay-command="underline" layedit-event="u"">&#xe646;</i>',
            del: '<i class="layui-icon layedit-tool-d" title="删除线" lay-command="strikeThrough" layedit-event="d"">&#xe64f;</i>',
            "|": '<span class="layedit-tool-mid"></span>',
            left: '<i class="layui-icon layedit-tool-left" title="左对齐" lay-command="justifyLeft" layedit-event="left"">&#xe649;</i>',
            center: '<i class="layui-icon layedit-tool-center" title="居中对齐" lay-command="justifyCenter" layedit-event="center"">&#xe647;</i>',
            right: '<i class="layui-icon layedit-tool-right" title="右对齐" lay-command="justifyRight" layedit-event="right"">&#xe648;</i>',
            link: '<i class="layui-icon layedit-tool-link" title="插入链接" layedit-event="link"">&#xe64c;</i>',
            unlink: '<i class="layui-icon layedit-tool-unlink layui-disabled" title="清除链接" lay-command="unlink" layedit-event="unlink"" style="font-size:18px">&#xe64d;</i>',
            face: '<i class="layui-icon layedit-tool-face" title="表情" layedit-event="face"" style="font-size:18px">&#xe650;</i>',
            image: '<i class="layui-icon layedit-tool-image" title="图片" layedit-event="image" style="font-size:18px">&#xe64a;</i>',
            code: '<i class="layui-icon layedit-tool-code" title="插入代码" layedit-event="code" style="font-size:18px">&#xe64e;</i>',
            images: '<i class="layui-icon layedit-tool-images" title="多图上传" layedit-event="images" style="font-size:18px">&#xe634;</i>',
            image_alt: '<i class="layui-icon layedit-tool-image_alt" title="图片" layedit-event="image_alt" style="font-size:18px">&#xe64a;</i>',
            video: '<i class="layui-icon layedit-tool-video" title="插入视频" layedit-event="video" style="font-size:18px">&#xe6ed;</i>',
            fullScreen: '<i class="layui-icon layedit-tool-fullScreen" title="全屏" layedit-event="fullScreen"style="font-size:18px">&#xe638;</i>',
            colorpicker: '<i class="layui-icon" title="字体颜色选择" id="layFontColor_Index">&#xe66a;</i>',
            fontBackColor: '<i class="layui-icon" title="字体背景色选择" id="layBkColor_Index"></i>',
            fontFomatt: '<i class="layui-icon layedit-tool-fontFomatt" title="段落格式" layedit-event="fontFomatt" style="font-size:18px">P</i>',
            fontfamily: '<i class="layui-icon layedit-tool-fontfamily" title="字体" layedit-event="fontfamily" style="font-size:16px">字体</i>',
            fontSize: '<i class="layui-icon layedit-tool-fontSize" title="字体大小" layedit-event="fontSize" style="font-size:16px">字号</i>',
            lineHeight: '<i class="layui-icon layedit-tool-lineHeight" style="font-size:16px;" title="行高" layedit-event="lineHeight"">行高</i>',
            addhr: '<i class="layui-icon layui-icon-chart layedit-tool-addhr" title="添加水平线" layedit-event="addhr" style="font-size:18px"></i>',
            anchors: '<i class="layui-icon layedit-tool-anchors" title="添加锚点" layedit-event="anchors" style="font-size:18px">&#xe60b;</i>',
            customlink: '<i class="layui-icon layedit-tool-customlink" title="添加自定义链接" layedit-event="customlink" style="font-size:18px">&#xe606;</i>',
            table: '<i class="layui-icon layedit-tool-table" title="插入表格" layedit-event="table" style="font-size:18px">&#xe62d;</i>',
            attachment: '<i class="layui-icon layedit-tool-attachment" title="插入附件" layedit-event="attachment" style="font-size:18px">&#xe62f;</i>',
            preview: '<i class="layui-icon layedit-tool-preview" title="预览" layedit-event="preview" style="font-size:18px">&#xe615;</i>',
            removeformat: '<i class="layui-icon layedit-tool-removeformat" title="清除文字样式" layedit-event="removeformat" style="font-size:18px">&#xe639;</i>',
            help: '<i class="layui-icon layedit-tool-help" title="帮助" layedit-event="help">&#xe607;</i>'
        },
        S = function(t) {
            var e = t.context || {},
                a = t.success,
                o = t.beforeUpload,
                s = e.initialData = t.data,
                r = e.formId = "image-upload-" + parseInt(1e6 * Math.random()),
                d = function(t) {
                    var e = -1 == t.toString()
                        .indexOf("%");
                    return {
                        value: e ? parseInt(t) : t,
                        string: e ? parseInt(t) + "px" : t
                    }
                },
                c = e.getImageData = function() {
                    var t = layui.form.val(r) || function() {
                        var t = i('[lay-filter="' + r + '"]')
                                .eq(0),
                            e = {};
                        return layui.each(t.find("input,select,textarea"), function(t, i) {
                            e[i.name] = i.value
                        }), e
                    }();
                    return t.style = "", t.width && (t.width = d(t.width)
                        .string, t.style += "width:" + t.width + ";"), t.height && (t.height = d(t.height)
                        .string, t.style += "height:" + t.height + ";"), e.logger && e.logger("getImageData", t), t
                },
                u = e.setImageData = function(t) {
                    if (t = t || {}, t.width && (t.width = d(t.width)
                        .value), t.height && (t.height = d(t.height)
                        .value), l.val(r, t), t.src && !t.isInitialData && !t.loaded && !t.width && !t.height) {
                        var e = new Image;
                        e.src = t.src, e.onload = function() {
                            t.loaded = !0, t.width = e.naturalWidth.toString(), t.height = e.naturalHeight.toString(), u(t)
                        }
                    }
                },
                f = e.checkImageSrc = function(t) {
                    return t.src || n.msg("请先上传图片", {
                        icon: 2,
                        shade: .3,
                        time: 1e3
                    }), !!t.src
                },
                h = e.imagePreview = function(t, e, i) {
                    var l = new Image,
                        a = /mobile/i.test(navigator.userAgent) ? 300 : 640,
                        o = /mobile/i.test(navigator.userAgent) ? 600 : 480;
                    l.src = t.src, l.onload = function() {
                        var s = l.naturalWidth,
                            r = l.naturalHeight;
                        s > a && (r = r * a / s, s = a), r > o && (s = s * o / r, r = o), n.open({
                            type: 1,
                            anim: 2,
                            icon: 5,
                            title: e || null,
                            offset: "100px",
                            area: [s + 20 + "px", r + 77 + "px"],
                            content: ['<div style="text-align:center;padding:10px;">', ' <img src="' + t.src + '" style="max-width:640px;max-height:480px"/>', "</div>"].join(""),
                            btn: ["确定", "取消"],
                            btnAlign: "c",
                            yes: function(e) {
                                i && i(t), n.close(e)
                            },
                            btn2: function(t) {
                                n.close(t)
                            }
                        })
                    }
                },
                m = e.deleteImage = function(t, n) {
                    if (t = t || c(), n = n || s, t.src)
                        if (!s || t.src.substring(0 - n.src.length) != n.src && n.src.substring(0 - t.src.length) != t.src) {
                            var l = e.set.calldel;
                            i.post(l.url, {
                                imgpath: t.src
                            }, function(t) {
                                l.done(t)
                            })
                        } else;
                    else;
                },
                p = {
                    type: 1,
                    id: "fly-jie-image-upload",
                    title: null,
                    shade: .05,
                    shadeClose: !0,
                    area: function() {
                        return /mobile/i.test(navigator.userAgent) || i(window)
                            .width() <= 485 ? ["90%"] : ["485px"]
                    }(),
                    offset: function() {
                        return /mobile/i.test(navigator.userAgent) ? "auto" : "100px"
                    }(),
                    skin: "layui-layer-border",
                    content: ['<div style="padding:20px">', '<form class="layui-form layui-form-pane" lay-filter="' + r + '">', '  <div class="layui-form-item">', '    <div class="layui-inline">', '      <label class="layui-form-label">图片路径</label>', '      <div class="layui-input-inline" style="width:136px;">', '        <input type="text" name="src" placeholder="请点击上传图片" class="layui-input" readonly>', "      </div>", "    </div>", '    <div class="layui-inline" style="overflow:hidden;margin-left:-24px;margin-top:-1px;margin-right:0;">', '        <div class="layui-btn-group">', '          <button type="button" class="layui-btn" id="upload-' + r + '"><i class="layui-icon layui-icon-upload"></i>上传图片</button>', '          <button type="button" class="layui-btn layui-btn-danger" id="preview-' + r + '"><i class="layui-icon layui-icon-picture"></i>预览</button>', "      </div>", "    </div>", "  </div>", '  <div class="layui-form-item">', '    <div class="layui-inline">', '      <label class="layui-form-label">图片宽度</label>', '      <div class="layui-input-inline" style="width:95px;">', '        <input type="text" required name="width" placeholder="图片宽度" value="" class="layui-input">', "      </div>", "    </div>", '    <div class="layui-inline">', '      <label class="layui-form-label">图片高度</label>', '      <div class="layui-input-inline" style="width:95px;margin-right:0;">', '        <input type="text" required name="height" placeholder="图片高度" value="" class="layui-input">', "      </div>", "    </div>", "  </div>", '  <div class="layui-form-item">', '    <label class="layui-form-label">图片描述</label>', '    <div class="layui-input-block" style="margin-right:10px;">', '      <input type="text" required name="alt" placeholder="请输入图片描述，可为空" value="" class="layui-input">', "    </div>", "  </div>", "</form></div>"].join(""),
                    btn: ["确定", "取消"],
                    yes: function(t, i) {
                        var l = c();
                        f(l) && (a(l, e), n.close(t))
                    },
                    btn2: function(t) {
                        m(), n.close(t)
                    },
                    success: function(t, l) {
                        s && u(s), i("#preview-" + r)
                            .click(function() {
                                var t = c();
                                f(t) && h(t)
                            }), layui.use("upload", function(t) {
                            var i, t = layui.upload,
                                l = e.set.uploadImage || {};
                            l.url || n.msg("上传接口配置错误！"), t.render({
                                elem: "#upload-" + r,
                                url: l.url,
                                method: l.method,
                                data: l.data,
                                headers: l.headers,
                                accept: l.accept || "image",
                                acceptMime: l.acceptMime || "image/*",
                                exts: l.exts || "jpg|png|gif|bmp|jpeg",
                                size: l.size || 10240,
                                field: l.field,
                                before: function(t) {
                                    o && o(c(), e), i = n.msg("文件上传中,请稍等哦", {
                                        icon: 16,
                                        shade: .3,
                                        time: 0
                                    })
                                },
                                done: function(t) {
                                    n.close(i), t.data = t.data || {}, 0 == t.code ? u(t.data) : 2 == t.code ? h(t.data, "确定使用该文件吗？", function(t) {
                                        u(t)
                                    }) : n.msg(t.msg || "上传失败")
                                }
                            })
                        })
                    }
                };
            s && (s.isInitialData = !0), t.beforeOpen && t.beforeOpen(p, e), n.open(p)
        },
        K = new s;
    l.render(), t("layedit", K)
});