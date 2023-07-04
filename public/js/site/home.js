"use strict";
$(() => {
    new Slider({ container: ".slider", slide: ".slide" });
    new Parallax(),
        $('[data-form="membership"]').submit((t) => {
            t.preventDefault(),
                $(t.currentTarget)
                    .find("button")
                    .prop("disabled", !0)
                    .html("Enviando...");
            const a = get_form(t.currentTarget);
            $.post("/", a)
                .then((t) => {
                    const j = $('[data-form="membership"]');
                    j.find("button").prop("disabled", !1).html("Enviar");
                    $('[data-form="contact"] [name]').val(""),
                        Swal.fire({ type: "success", html: t.message });
                })
                .catch((t) => {
                    $('[data-form="contact"] button')
                        .prop("disabled", !1)
                        .html("Enviar");
                });
        });
});
//# sourceMappingURL=home.js.map
