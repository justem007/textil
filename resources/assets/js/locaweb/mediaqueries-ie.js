"function" != typeof Object.create && (Object.create = function(e) {
    function t() {}
    return t.prototype = e, new t
});
var ua = {
    toString: function() {
        return navigator.userAgent
    },
    test: function(e) {
        return this.toString().toLowerCase().indexOf(e.toLowerCase()) > -1
    }
};
ua.version = (ua.toString().toLowerCase().match(/[\s\S]+(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [])[1], ua.webkit = ua.test("webkit"), ua.gecko = ua.test("gecko") && !ua.webkit, ua.opera = ua.test("opera"), ua.ie = ua.test("msie") && !ua.opera, ua.ie6 = ua.ie && document.compatMode && "undefined" == typeof document.documentElement.style.maxHeight, ua.ie7 = ua.ie && document.documentElement && "undefined" != typeof document.documentElement.style.maxHeight && "undefined" == typeof XDomainRequest, ua.ie8 = ua.ie && "undefined" != typeof XDomainRequest;
var domReady = function() {
        var e = [],
            t = function() {
                if (!arguments.callee.done) {
                    arguments.callee.done = !0;
                    for (var t = 0; t < e.length; t++) e[t]()
                }
            };
        return document.addEventListener && document.addEventListener("DOMContentLoaded", t, !1), ua.ie && (! function() {
            try {
                document.documentElement.doScroll("left")
            } catch (e) {
                return void setTimeout(arguments.callee, 50)
            }
            t()
        }(), document.onreadystatechange = function() {
            "complete" === document.readyState && (document.onreadystatechange = null, t())
        }), ua.webkit && document.readyState && ! function() {
            "loading" !== document.readyState ? t() : setTimeout(arguments.callee, 10)
        }(), window.onload = t,
            function(t) {
                return "function" == typeof t && (e[e.length] = t), t
            }
    }(),
    cssHelper = function() {
        var e, t = {
                BLOCKS: /[^\s{;][^{;]*\{(?:[^{}]*\{[^{}]*\}[^{}]*|[^{}]*)*\}/g,
                BLOCKS_INSIDE: /[^\s{][^{]*\{[^{}]*\}/g,
                DECLARATIONS: /[a-zA-Z\-]+[^;]*:[^;]+;/g,
                RELATIVE_URLS: /url\(['"]?([^\/\)'"][^:\)'"]+)['"]?\)/g,
                REDUNDANT_COMPONENTS: /(?:\/\*([^*\\\\]|\*(?!\/))+\*\/|@import[^;]+;)/g,
                REDUNDANT_WHITESPACE: /\s*(,|:|;|\{|\})\s*/g,
                WHITESPACE_IN_PARENTHESES: /\(\s*(\S*)\s*\)/g,
                MORE_WHITESPACE: /\s{2,}/g,
                FINAL_SEMICOLONS: /;\}/g,
                NOT_WHITESPACE: /\S+/g
            },
            n = !1,
            o = [],
            a = function(e) {
                "function" == typeof e && (o[o.length] = e)
            },
            r = function() {
                for (var t = 0; t < o.length; t++) o[t](e)
            },
            s = {},
            l = function(e, t) {
                if (s[e]) {
                    var n = s[e].listeners;
                    if (n)
                        for (var o = 0; o < n.length; o++) n[o](t)
                }
            },
            c = function(e, t, n) {
                if (ua.ie && !window.XMLHttpRequest && (window.XMLHttpRequest = function() {
                        return new ActiveXObject("Microsoft.XMLHTTP")
                    }), !XMLHttpRequest) return "";
                var o = new XMLHttpRequest;
                try {
                    o.open("get", e, !0), o.setRequestHeader("X_REQUESTED_WITH", "XMLHttpRequest")
                } catch (a) {
                    return void n()
                }
                var i = !1;
                setTimeout(function() {
                    i = !0
                }, 5e3), document.documentElement.style.cursor = "progress", o.onreadystatechange = function() {
                    4 !== o.readyState || i || (!o.status && "file:" === location.protocol || o.status >= 200 && o.status < 300 || 304 === o.status || navigator.userAgent.indexOf("Safari") > -1 && "undefined" == typeof o.status ? t(o.responseText) : n(), document.documentElement.style.cursor = "", o = null)
                }, o.send("")
            },
            d = function(e) {
                return e = e.replace(t.REDUNDANT_COMPONENTS, ""), e = e.replace(t.REDUNDANT_WHITESPACE, "$1"), e = e.replace(t.WHITESPACE_IN_PARENTHESES, "($1)"), e = e.replace(t.MORE_WHITESPACE, " "), e = e.replace(t.FINAL_SEMICOLONS, "}")
            },
            u = {
                stylesheet: function(e) {
                    var n = {},
                        o = [],
                        a = [],
                        i = [],
                        r = [],
                        s = e.cssHelperText,
                        l = e.getAttribute("media");
                    if (l) var c = l.toLowerCase().split(",");
                    else var c = ["all"];
                    for (var d = 0; d < c.length; d++) o[o.length] = u.mediaQuery(c[d], n);
                    var h = s.match(t.BLOCKS);
                    if (null !== h)
                        for (var d = 0; d < h.length; d++)
                            if ("@media " === h[d].substring(0, 7)) {
                                var f = u.mediaQueryList(h[d], n);
                                i = i.concat(f.getRules()), a[a.length] = f
                            } else i[i.length] = r[r.length] = u.rule(h[d], n, null);
                    return n.element = e, n.getCssText = function() {
                        return s
                    }, n.getAttrMediaQueries = function() {
                        return o
                    }, n.getMediaQueryLists = function() {
                        return a
                    }, n.getRules = function() {
                        return i
                    }, n.getRulesWithoutMQ = function() {
                        return r
                    }, n
                },
                mediaQueryList: function(e, n) {
                    var o = {},
                        a = e.indexOf("{"),
                        i = e.substring(0, a);
                    e = e.substring(a + 1, e.length - 1);
                    for (var r = [], s = [], l = i.toLowerCase().substring(7).split(","), c = 0; c < l.length; c++) r[r.length] = u.mediaQuery(l[c], o);
                    var d = e.match(t.BLOCKS_INSIDE);
                    if (null !== d)
                        for (c = 0; c < d.length; c++) s[s.length] = u.rule(d[c], n, o);
                    return o.type = "mediaQueryList", o.getMediaQueries = function() {
                        return r
                    }, o.getRules = function() {
                        return s
                    }, o.getListText = function() {
                        return i
                    }, o.getCssText = function() {
                        return e
                    }, o
                },
                mediaQuery: function(e, n) {
                    e = e || "";
                    var o, a;
                    "mediaQueryList" === n.type ? o = n : a = n;
                    for (var i, r = !1, s = [], l = !0, c = e.match(t.NOT_WHITESPACE), d = 0; d < c.length; d++) {
                        var u = c[d];
                        if (i || "not" !== u && "only" !== u)
                            if (i) {
                                if ("(" === u.charAt(0)) {
                                    var h = u.substring(1, u.length - 1).split(":");
                                    s[s.length] = {
                                        mediaFeature: h[0],
                                        value: h[1] || null
                                    }
                                }
                            } else i = u;
                        else "not" === u && (r = !0)
                    }
                    return {
                        getQueryText: function() {
                            return e
                        },
                        getAttrStyleSheet: function() {
                            return a || null
                        },
                        getList: function() {
                            return o || null
                        },
                        getValid: function() {
                            return l
                        },
                        getNot: function() {
                            return r
                        },
                        getMediaType: function() {
                            return i
                        },
                        getExpressions: function() {
                            return s
                        }
                    }
                },
                rule: function(e, t, n) {
                    for (var o = {}, a = e.indexOf("{"), i = e.substring(0, a), r = i.split(","), s = [], l = e.substring(a + 1, e.length - 1).split(";"), c = 0; c < l.length; c++) s[s.length] = u.declaration(l[c], o);
                    return o.getStylesheet = function() {
                        return t || null
                    }, o.getMediaQueryList = function() {
                        return n || null
                    }, o.getSelectors = function() {
                        return r
                    }, o.getSelectorText = function() {
                        return i
                    }, o.getDeclarations = function() {
                        return s
                    }, o.getPropertyValue = function(e) {
                        for (var t = 0; t < s.length; t++)
                            if (s[t].getProperty() === e) return s[t].getValue();
                        return null
                    }, o
                },
                declaration: function(e, t) {
                    var n = e.indexOf(":"),
                        o = e.substring(0, n),
                        a = e.substring(n + 1);
                    return {
                        getRule: function() {
                            return t || null
                        },
                        getProperty: function() {
                            return o
                        },
                        getValue: function() {
                            return a
                        }
                    }
                }
            },
            h = function(t) {
                if ("string" == typeof t.cssHelperText) {
                    var n = {
                            stylesheet: null,
                            mediaQueryLists: [],
                            rules: [],
                            selectors: {},
                            declarations: [],
                            properties: {}
                        },
                        o = n.stylesheet = u.stylesheet(t),
                        a = (n.mediaQueryLists = o.getMediaQueryLists(), n.rules = o.getRules()),
                        r = n.selectors,
                        s = function(e) {
                            for (var t = e.getSelectors(), n = 0; n < t.length; n++) {
                                var o = t[n];
                                r[o] || (r[o] = []), r[o][r[o].length] = e
                            }
                        };
                    for (i = 0; i < a.length; i++) s(a[i]);
                    var l = n.declarations;
                    for (i = 0; i < a.length; i++) l = n.declarations = l.concat(a[i].getDeclarations());
                    var c = n.properties;
                    for (i = 0; i < l.length; i++) {
                        var d = l[i].getProperty();
                        c[d] || (c[d] = []), c[d][c[d].length] = l[i]
                    }
                    return t.cssHelperParsed = n, e[e.length] = t, n
                }
            },
            f = function(e, t) {},
            m = function() {
                n = !0, e = [];
                for (var o = [], a = function() {
                    for (var e = 0; e < o.length; e++) h(o[e]);
                    var t = document.getElementsByTagName("style");
                    for (e = 0; e < t.length; e++) f(t[e]);
                    n = !1, r()
                }, i = document.getElementsByTagName("link"), s = 0; s < i.length; s++) {
                    var l = i[s];
                    l.getAttribute("rel").indexOf("style") > -1 && l.href && 0 !== l.href.length && !l.disabled && (o[o.length] = l)
                }
                if (o.length > 0) {
                    var u = 0,
                        m = function() {
                            u++, u === o.length && a()
                        },
                        p = function(e) {
                            var n = e.href;
                            c(n, function(o) {
                                o = d(o).replace(t.RELATIVE_URLS, "url(" + n.substring(0, n.lastIndexOf("/")) + "/$1)"), e.cssHelperText = o, m()
                            }, m)
                        };
                    for (s = 0; s < o.length; s++) p(o[s])
                } else a()
            },
            p = {
                stylesheets: "array",
                mediaQueryLists: "array",
                rules: "array",
                selectors: "object",
                declarations: "array",
                properties: "object"
            },
            g = {
                stylesheets: null,
                mediaQueryLists: null,
                rules: null,
                selectors: null,
                declarations: null,
                properties: null
            },
            v = function(e, t) {
                if (null !== g[e]) {
                    if ("array" === p[e]) return g[e] = g[e].concat(t);
                    var n = g[e];
                    for (var o in t) t.hasOwnProperty(o) && (n[o] ? n[o] = n[o].concat(t[o]) : n[o] = t[o]);
                    return n
                }
            },
            b = function(t) {
                g[t] = "array" === p[t] ? [] : {};
                for (var n = 0; n < e.length; n++) {
                    var o = "stylesheets" === t ? "stylesheet" : t;
                    v(t, e[n].cssHelperParsed[o])
                }
                return g[t]
            },
            w = function(e) {
                return "undefined" != typeof window.innerWidth ? window["inner" + e] : "undefined" != typeof document.documentElement && "undefined" != typeof document.documentElement.clientWidth && 0 != document.documentElement.clientWidth ? document.documentElement["client" + e] : void 0
            };
        return {
            addStyle: function(e, t, n) {
                var o = document.createElement("style");
                return o.setAttribute("type", "text/css"), t && t.length > 0 && o.setAttribute("media", t.join(",")), document.getElementsByTagName("head")[0].appendChild(o), o.styleSheet ? o.styleSheet.cssText = e : o.appendChild(document.createTextNode(e)), o.addedWithCssHelper = !0, "undefined" == typeof n || n === !0 ? cssHelper.parsed(function(t) {
                        var n = f(o, e);
                        for (var a in n) n.hasOwnProperty(a) && v(a, n[a]);
                        l("newStyleParsed", o)
                    }) : o.parsingDisallowed = !0, o
            },
            removeStyle: function(e) {
                return e.parentNode.removeChild(e)
            },
            parsed: function(t) {
                n ? a(t) : "undefined" != typeof e ? "function" == typeof t && t(e) : (a(t), m())
            },
            stylesheets: function(e) {
                cssHelper.parsed(function(t) {
                    e(g.stylesheets || b("stylesheets"))
                })
            },
            mediaQueryLists: function(e) {
                cssHelper.parsed(function(t) {
                    e(g.mediaQueryLists || b("mediaQueryLists"))
                })
            },
            rules: function(e) {
                cssHelper.parsed(function(t) {
                    e(g.rules || b("rules"))
                })
            },
            selectors: function(e) {
                cssHelper.parsed(function(t) {
                    e(g.selectors || b("selectors"))
                })
            },
            declarations: function(e) {
                cssHelper.parsed(function(t) {
                    e(g.declarations || b("declarations"))
                })
            },
            properties: function(e) {
                cssHelper.parsed(function(t) {
                    e(g.properties || b("properties"))
                })
            },
            broadcast: l,
            addListener: function(e, t) {
                "function" == typeof t && (s[e] || (s[e] = {
                    listeners: []
                }), s[e].listeners[s[e].listeners.length] = t)
            },
            removeListener: function(e, t) {
                if ("function" == typeof t && s[e])
                    for (var n = s[e].listeners, o = 0; o < n.length; o++) n[o] === t && (n.splice(o, 1), o -= 1)
            },
            getViewportWidth: function() {
                return w("Width")
            },
            getViewportHeight: function() {
                return w("Height")
            }
        }
    }();
domReady(function() {
    var e, t = {
            LENGTH_UNIT: /[0-9]+(em|ex|px|in|cm|mm|pt|pc)$/,
            RESOLUTION_UNIT: /[0-9]+(dpi|dpcm)$/,
            ASPECT_RATIO: /^[0-9]+\/[0-9]+$/,
            ABSOLUTE_VALUE: /^[0-9]*(\.[0-9]+)*$/
        },
        n = [],
        o = function() {
            var e = "css3-mediaqueries-test",
                t = document.createElement("div");
            t.id = e;
            var n = cssHelper.addStyle("@media all and (width) { #" + e + " { width: 1px !important; } }", [], !1);
            document.body.appendChild(t);
            var a = 1 === t.offsetWidth;
            return n.parentNode.removeChild(n), t.parentNode.removeChild(t), o = function() {
                return a
            }, a
        },
        a = function() {
            e = document.createElement("div"), e.style.cssText = "position:absolute;top:-9999em;left:-9999em;margin:0;border:none;padding:0;width:1em;font-size:1em;", document.body.appendChild(e), 16 !== e.offsetWidth && (e.style.fontSize = 16 / e.offsetWidth + "em"), e.style.width = ""
        },
        i = function(t) {
            e.style.width = t;
            var n = e.offsetWidth;
            return e.style.width = "", n
        },
        r = function(e, n) {
            var o = e.length,
                a = "min-" === e.substring(0, 4),
                r = !a && "max-" === e.substring(0, 4);
            if (null !== n) {
                var s, l;
                if (t.LENGTH_UNIT.exec(n)) s = "length", l = i(n);
                else if (t.RESOLUTION_UNIT.exec(n)) {
                    s = "resolution", l = parseInt(n, 10);
                    var c = n.substring((l + "").length)
                } else t.ASPECT_RATIO.exec(n) ? (s = "aspect-ratio", l = n.split("/")) : t.ABSOLUTE_VALUE ? (s = "absolute", l = n) : s = "unknown"
            }
            var d, u;
            if ("device-width" === e.substring(o - 12, o)) return d = screen.width, null !== n ? "length" === s ? a && d >= l || r && l > d || !a && !r && d === l : !1 : d > 0;
            if ("device-height" === e.substring(o - 13, o)) return u = screen.height, null !== n ? "length" === s ? a && u >= l || r && l > u || !a && !r && u === l : !1 : u > 0;
            if ("width" === e.substring(o - 5, o)) return d = document.documentElement.clientWidth || document.body.clientWidth, null !== n ? "length" === s ? a && d >= l || r && l > d || !a && !r && d === l : !1 : d > 0;
            if ("height" === e.substring(o - 6, o)) return u = document.documentElement.clientHeight || document.body.clientHeight, null !== n ? "length" === s ? a && u >= l || r && l > u || !a && !r && u === l : !1 : u > 0;
            if ("device-aspect-ratio" === e.substring(o - 19, o)) return "aspect-ratio" === s && screen.width * l[1] === screen.height * l[0];
            if ("color-index" === e.substring(o - 11, o)) {
                var h = Math.pow(2, screen.colorDepth);
                return null !== n ? "absolute" === s ? a && h >= l || r && l > h || !a && !r && h === l : !1 : h > 0
            }
            if ("color" === e.substring(o - 5, o)) {
                var f = screen.colorDepth;
                return null !== n ? "absolute" === s ? a && f >= l || r && l > f || !a && !r && f === l : !1 : f > 0
            }
            if ("resolution" === e.substring(o - 10, o)) {
                var m;
                return m = i("dpcm" === c ? "1cm" : "1in"), null !== n ? "resolution" === s ? a && m >= l || r && l > m || !a && !r && m === l : !1 : m > 0
            }
            return !1
        },
        s = function(e) {
            var t = e.getValid(),
                n = e.getExpressions(),
                o = n.length;
            if (o > 0) {
                for (var a = 0; o > a && t; a++) t = r(n[a].mediaFeature, n[a].value);
                var i = e.getNot();
                return t && !i || i && !t
            }
            return t
        },
        l = function(e, t) {
            for (var o = e.getMediaQueries(), a = {}, i = 0; i < o.length; i++) {
                var r = o[i].getMediaType();
                if (0 !== o[i].getExpressions().length) {
                    var l = !0;
                    if ("all" !== r && t && t.length > 0) {
                        l = !1;
                        for (var c = 0; c < t.length; c++) t[c] === r && (l = !0)
                    }
                    l && s(o[i]) && (a[r] = !0)
                }
            }
            var d = [],
                u = 0;
            for (var h in a) a.hasOwnProperty(h) && (u > 0 && (d[u++] = ","), d[u++] = h);
            d.length > 0 && (n[n.length] = cssHelper.addStyle("@media " + d.join("") + "{" + e.getCssText() + "}", t, !1))
        },
        c = function(e, t) {
            for (var n = 0; n < e.length; n++) l(e[n], t)
        },
        d = function(e) {
            for (var t = e.getAttrMediaQueries(), o = !1, a = {}, i = 0; i < t.length; i++) s(t[i]) && (a[t[i].getMediaType()] = t[i].getExpressions().length > 0);
            var r = [],
                l = [];
            for (var d in a) a.hasOwnProperty(d) && (r[r.length] = d, a[d] && (l[l.length] = d), "all" === d && (o = !0));
            l.length > 0 && (n[n.length] = cssHelper.addStyle(e.getCssText(), l, !1));
            var u = e.getMediaQueryLists();
            o ? c(u) : c(u, r)
        },
        u = function(e) {
            for (var t = 0; t < e.length; t++) d(e[t]);
            ua.ie ? (document.documentElement.style.display = "block", setTimeout(function() {
                    document.documentElement.style.display = ""
                }, 0), setTimeout(function() {
                    cssHelper.broadcast("cssMediaQueriesTested")
                }, 100)) : cssHelper.broadcast("cssMediaQueriesTested")
        },
        h = function() {
            for (var e = 0; e < n.length; e++) cssHelper.removeStyle(n[e]);
            n = [], cssHelper.stylesheets(u)
        },
        f = 0,
        m = function() {
            var e = cssHelper.getViewportWidth(),
                t = cssHelper.getViewportHeight();
            if (ua.ie) {
                var n = document.createElement("div");
                n.style.position = "absolute", n.style.top = "-9999em", n.style.overflow = "scroll", document.body.appendChild(n), f = n.offsetWidth - n.clientWidth, document.body.removeChild(n)
            }
            var a, i = function() {
                var n = cssHelper.getViewportWidth(),
                    i = cssHelper.getViewportHeight();
                (Math.abs(n - e) > f || Math.abs(i - t) > f) && (e = n, t = i, clearTimeout(a), a = setTimeout(function() {
                    o() ? cssHelper.broadcast("cssMediaQueriesTested") : h()
                }, 500))
            };
            window.onresize = function() {
                var e = window.onresize || function() {};
                return function() {
                    e(), i()
                }
            }()
        },
        p = document.documentElement;
    return p.style.marginLeft = "-32767px", setTimeout(function() {
        p.style.marginLeft = ""
    }, 5e3),
        function() {
            o() ? p.style.marginLeft = "" : (cssHelper.addListener("newStyleParsed", function(e) {
                    d(e.cssHelperParsed.stylesheet)
                }), cssHelper.addListener("cssMediaQueriesTested", function() {
                    ua.ie && (p.style.width = "1px"), setTimeout(function() {
                        p.style.width = "", p.style.marginLeft = ""
                    }, 0), cssHelper.removeListener("cssMediaQueriesTested", arguments.callee)
                }), a(), h()), m()
        }
}());
try {
    document.execCommand("BackgroundImageCache", !1, !0)
} catch (e) {}