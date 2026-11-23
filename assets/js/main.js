/* ============================================================
   Trademark Profs — interactions (jQuery 3.5.1)
   ============================================================ */
(function($) {
    "use strict";

    $(function() {

        /* ---- Sticky nav shadow on scroll ---- */
        var $nav = $("#mainNav");

        function onScroll() {
            $nav.toggleClass("scrolled", $(window).scrollTop() > 20);
            $("#toTop").toggleClass("show", $(window).scrollTop() > 500);
        }
        $(window).on("scroll", onScroll);
        onScroll();

        /* ---- Back to top ---- */
        $("#toTop").on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
        });

        /* ---- Reveal on scroll (IntersectionObserver + fallback) ---- */
        var $reveals = $(".reveal");
        if ("IntersectionObserver" in window) {
            var io = new IntersectionObserver(function(entries) {
                entries.forEach(function(e) {
                    if (e.isIntersecting) {
                        $(e.target).addClass("in");
                        io.unobserve(e.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            });
            $reveals.each(function() {
                io.observe(this);
            });
        } else {
            $reveals.addClass("in");
        }

        /* ---- Animated counters ---- */
        function runCounter($el) {
            var target = parseFloat($el.data("count"));
            var suffix = $el.data("suffix") || "";
            var decimals = ($el.data("decimals") || 0) | 0;
            var start = null,
                dur = 1600;

            function step(ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                var eased = 1 - Math.pow(1 - p, 3);
                var val = (target * eased).toFixed(decimals);
                $el.text(Number(val).toLocaleString() + suffix);
                if (p < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
        }
        if ("IntersectionObserver" in window) {
            var co = new IntersectionObserver(function(entries) {
                entries.forEach(function(e) {
                    if (e.isIntersecting) {
                        runCounter($(e.target));
                        co.unobserve(e.target);
                    }
                });
            }, {
                threshold: 0.5
            });
            $(".counter").each(function() {
                co.observe(this);
            });
        } else {
            $(".counter").each(function() {
                runCounter($(this));
            });
        }

        /* ---- Smooth-scroll for in-page anchors ---- */
        $('a[href^="#"]').on("click", function(e) {
            var id = $(this).attr("href");
            if (id.length > 1 && $(id).length) {
                e.preventDefault();
                $("html, body").animate({
                    scrollTop: $(id).offset().top - 90
                }, 500);
            }
        });

        /* ---- Pricing billing toggle ---- */
        $(".bill-toggle button").on("click", function() {
            var mode = $(this).data("mode");
            $(".bill-toggle button").removeClass("active");
            $(this).addClass("active");
            var save = mode === "annual";
            $("[data-monthly]").each(function() {
                var m = $(this).data("monthly"),
                    a = $(this).data("annual");
                $(this).text(save ? a : m);
            });
            $(".save-note").toggleClass("d-none", !save);
        });

        /* =========================================================
           Generic single-step form validation
           Any <form data-validate> gets client-side validation and
           a mock success message (static — connect your CRM/endpoint).
           ========================================================= */
        function validEmail(v) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function validateField($f) {
            var val = $.trim($f.val() || "");
            var ok = true;
            if ($f.prop("required") && !val) ok = false;
            if (ok && $f.attr("type") === "email" && val && !validEmail(val)) ok = false;
            if (ok && $f.attr("type") === "tel" && val && val.replace(/\D/g, "").length < 7) ok = false;
            if (ok && $f.attr("type") === "checkbox" && $f.prop("required") && !$f.prop("checked")) ok = false;
            $f.toggleClass("is-invalid", !ok);
            return ok;
        }

        $("form[data-validate] .form-control, form[data-validate] .form-select").on("blur change", function() {
            if ($(this).hasClass("is-invalid")) validateField($(this));
        });

        $("form[data-validate]").on("submit", function(e) {
            e.preventDefault();
            var $form = $(this),
                ok = true;
            $form.find("[required]").each(function() {
                if (!validateField($(this))) ok = false;
            });
            if (!ok) {
                $form.find(".is-invalid").first().focus();
                return;
            }
            // Static demo: show success, no server call. Wire your CRM here.
            var $btn = $form.find('[type="submit"]');
            var orig = $btn.html();
            $btn.prop("disabled", true).html("Submitting…");
            setTimeout(function() {
                $form.find(".form-body").slideUp(250);
                $form.find(".form-success").fadeIn(350).css("display", "block");
                $btn.prop("disabled", false).html(orig);
                if ($form.find(".form-success").length) {
                    $("html, body").animate({
                        scrollTop: $form.offset().top - 110
                    }, 400);
                }
            }, 900);
        });

        /* =========================================================
           Multi-step registration form
           ========================================================= */
        var $ms = $("#regForm");
        if ($ms.length) {
            var current = 0;
            var $steps = $ms.find(".fstep");
            var total = $steps.length;

            function showStep(i) {
                $steps.removeClass("show").eq(i).addClass("show");
                $ms.find(".stepper .sp").each(function(idx) {
                    $(this).toggleClass("done", idx < i).toggleClass("active", idx === i);
                });
                current = i;
                $("html, body").animate({
                    scrollTop: $ms.offset().top - 110
                }, 300);
            }

            function validateStep(i) {
                var ok = true;
                $steps.eq(i).find("[required]").each(function() {
                    if (!validateField($(this))) ok = false;
                });
                return ok;
            }

            $ms.on("click", ".next-step", function() {
                if (validateStep(current)) {
                    if (current === total - 2) buildReview();
                    showStep(current + 1);
                } else {
                    $steps.eq(current).find(".is-invalid").first().focus();
                }
            });
            $ms.on("click", ".prev-step", function() {
                showStep(current - 1);
            });

            function buildReview() {
                var rows = "";
                $ms.find("[data-review]").each(function() {
                    var label = $(this).data("review");
                    var val = $(this).is("select") ?
                        $(this).find("option:selected").text() :
                        $(this).val();
                    if ($.trim(val)) {
                        rows += '<div class="d-flex justify-content-between py-2 border-bottom"><span class="text-muted">' +
                            label + '</span><span class="fw-semibold text-end">' + $("<div>").text(val).html() + "</span></div>";
                    }
                });
                $("#reviewBox").html(rows);
            }

            $ms.on("submit", function(e) {
                // e.preventDefault();
                if (!validateStep(current)) return;
                var $btn = $ms.find(".submit-reg");
                $btn.prop("disabled", true).html("Submitting…");
                setTimeout(function() {
                    $ms.find(".form-body").slideUp(250);
                    $ms.find(".stepper").slideUp(250);
                    $ms.find(".form-success").fadeIn(350).css("display", "block");
                    $("html, body").animate({
                        scrollTop: $ms.offset().top - 110
                    }, 400);
                }, 900);
            });
        }

        /* ---- Phone number light formatting ---- */
        $('input[type="tel"]').on("input", function() {
            var d = $(this).val().replace(/\D/g, "").slice(0, 10);
            var out = d;
            if (d.length > 6) out = "(" + d.slice(0, 3) + ") " + d.slice(3, 6) + "-" + d.slice(6);
            else if (d.length > 3) out = "(" + d.slice(0, 3) + ") " + d.slice(3);
            else if (d.length > 0) out = "(" + d;
            $(this).val(out);
        });

    });
})(jQuery);