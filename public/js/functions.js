"use strict";
(Array.prototype.switchPosition = function (e, t) {
    return this.splice(t, 0, this.splice(e, 1)[0]);
}),
    (Array.prototype.max = function () {
        return Math.max.apply(null, this);
    }),
    (Array.prototype.min = function () {
        return Math.min.apply(null, this);
    }),
    (Array.prototype.remove = function (e) {
        return this.filter(function (t) {
            return t != e;
        });
    }),
    (Number.prototype.numberFormat = function (e, t, a) {
        var r = this,
            n =
                ((e = isNaN((e = Math.abs(e))) ? 2 : e),
                (t = null == t ? "." : t),
                (a = null == a ? "," : a),
                r < 0 ? "-" : ""),
            o = parseInt((r = Math.abs(+r || 0).toFixed(e))) + "",
            i = (i = o.length) > 3 ? i % 3 : 0;
        return (
            n +
            (i ? o.substr(0, i) + a : "") +
            o.substr(i).replace(/(\d{3})(?=\d)/g, "$1" + a) +
            (e
                ? t +
                  Math.abs(r - o)
                      .toFixed(e)
                      .slice(2)
                : "")
        );
    }),
    (String.prototype.replaceAll = function (e, t) {
        return this.replace(new RegExp(e, "g"), t);
    }),
    (String.prototype.permalink = function () {
        if ("" == (t = this)) return "";
        let e = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç,";
        for (let a = 0; a < e.length; a++)
            t = t.replace(
                e.charAt(a),
                "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc-".charAt(a)
            );
        var t;
        return (t = t
            .replace(/&.*?;/g, "")
            .replace(/\s+/g, "-")
            .replace(/[^\w\-]/g, "")
            .toLowerCase());
    }),
    (String.prototype.nl2br = function () {
        return this.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "$1 <br /> $2");
    });
let check_fields = (e, t) => {
        $(".required").removeClass("required");
        var a = !0;
        $.each(e, function (t, r) {
            var n = e[t].split(":");
            if (0 == $(n[0]).length)
                return (
                    Swal({
                        text: "Hubo un error inesperado. Intenta más tarde",
                        type: "error",
                    }),
                    !1
                );
            if ($(n[0]).val().length > 0) {
                if ("email" == n[1]) {
                    /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
                        $(n[0]).val()
                    ) ||
                        ($(n[0]).addClass("required").effect("pulsate").focus(),
                        (a = !1));
                }
            } else $(n[0]).addClass("required").effect("pulsate").focus(), (a = !1);
        }),
            $(".required:eq(0)").focus(),
            a && t();
    },
    loading = (e) => {
        let t = null == e || !("show" in e) || e.show,
            a = null != e && "message" in e ? e.message : "";
        t
            ? $("#loading").addClass("active").find(".loading-text").html(a)
            : ($("#loading").removeClass("active"),
              "callback" in e && e.callback());
    },
    ajax = (e, t = {}, a = !0) => (
        a && loading(),
        null == t && (t = {}),
        (t.token = TOKEN),
        new Promise((r, n) => {
            $.ajax({
                type: "POST",
                url: `${e}`,
                data: t,
                dataType: "json",
                cache: !1,
            })
                .then((t) => {
                    a && loading({ show: !1 }),
                        "ok" != t.status &&
                            (Swal.fire({ type: "error", html: t.message }),
                            "object" == typeof t && (t.ajax_url = e),
                            console.log(t),
                            n(t)),
                        r(t);
                })
                .always((e) => {
                    a && loading({ show: !1 });
                })
                .catch((e) => {
                    let t = e.responseText;
                    console.log(e.responseText), n(t);
                });
        })
    ),
    get_form = (e) => {
        var t = $(e).serializeArray(),
            a = { required: [] };
        return (
            $(t).each(function (t, r) {
                void 0 !== a[this.name]
                    ? (Array.isArray(a[this.name]) ||
                          (a[this.name] = [a[this.name]]),
                      a[this.name].push(this.value))
                    : ((a[this.name] = this.value),
                      $(e).find(`[name="${this.name}"]`).prop("required") &&
                          a.required.push(this.name));
            }),
            a
        );
    },
    object_to_formdata = (e) => {
        const t = new FormData();
        for (var a in e) t.append(a, e[a]);
        return t;
    },
    logout = (e) => {
        ajax(e, { mode: "logout" }).then((e) => {
            window.location.reload();
        });
    },
    toggle_button = (e, t) => {
        1 == t
            ? $(e)
                  .find("i")
                  .removeClass("fa-toggle-off")
                  .addClass("fa-toggle-on")
            : $(e)
                  .find("i")
                  .removeClass("fa-toggle-on")
                  .addClass("fa-toggle-off");
    },
    random = (e, t) => Math.floor(Math.random() * (t - e)) + e,
    get_template = (e) =>
        new Promise((t, a) => {
            $.ajax({
                type: "GET",
                url: ROOT + "templates/" + e + ".php",
                cache: !1,
            })
                .done((e) => {
                    t(e);
                })
                .fail((e) => {
                    a(e);
                });
        }),
    get_id_video = function (e, t) {
        let a = {},
            r = {},
            n = "";
        switch (t) {
            case "vimeo":
                if (((a = e.split("/")), 1 == a.length)) return !1;
                n = a[a.length - 1];
                break;
            case "youtube":
                if (((a = e.split("watch?v=")), 1 == a.length)) return !1;
                (r = a[1].split("&")), (n = r[0]);
        }
        return n;
    };
var dom = function (e, t = "") {
    return $("<" + e + ">")
        .clone()
        .addClass(t);
};
//# sourceMappingURL=functions.js.map
