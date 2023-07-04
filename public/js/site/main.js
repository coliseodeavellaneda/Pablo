$(() => {
    if (
        (console.log("main"),
        $(window).scroll((e) => {
            e.currentTarget.pageYOffset > 66
                ? $("header.header,.header-spacer").addClass("scroll")
                : $("header.header,.header-spacer").removeClass("scroll");
        }),
        $("header.header .mobile-icon").click(() => {
            $("header.header .menu").toggleClass("active");
        }),
        $("header.header .menu .close").click(() => {
            $("header.header .menu").removeClass("active");
        }),
        new WOW().init(),
        $.scrollUp({ scrollText: '<i class="fa fa-angle-up"></i>' }),
        $("header.header nav").on("click", '[data-toggle="menu-link"]', (e) => {
            e.preventDefault();
            const a = $(e.currentTarget).attr("href").replace("#", "");
            "home" != $_section
                ? (window.location.href = `${ROOT}#${a}`)
                : $("body,html").animate(
                      { scrollTop: $(`[data-section="${a}"]`).offset().top },
                      "slow"
                  );
        }),
        "" != window.location.hash)
    ) {
        const e = window.location.hash.replace("#", "");
        $("body,html").animate(
            { scrollTop: $(`[data-section="${e}"]`).offset().top },
            "slow"
        );
    }
});
//# sourceMappingURL=main.js.map
