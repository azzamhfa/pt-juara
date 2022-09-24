//Test
$(function () {
    $("#poultry").hover(function () {
        $(".wp4.text-center").hide();
        $("#jaringan1").show();
    });
    $("#trading").hover(function () {
        $(".wp4.text-center").hide();
        $("#trading1").show();
        // target.removeAttribute("type", "hidden");
    });
    $("#ayam").hover(function () {
        $(".wp4.text-center").hide();
        $("#ayam1").show();
        // target.removeAttribute("type", "hidden");
    });
    $("#kaf").hover(function () {
        $(".wp4.text-center").hide();
        $("#kaf1").show();
        // target.removeAttribute("type", "hidden");
    });
    $("#rph").hover(function () {
        $(".wp4.text-center").hide();
        $("#rph1").show();
        // target.removeAttribute("type", "hidden");
    });
    $("#dombaA").hover(function () {
        $(".wp4.text-center").hide();
        $("#domba1").show();
        // target.removeAttribute("type", "hidden");
    });
    $("#dombaB").hover(function () {
        $(".wp4.text-center").hide();
        $("#domba2").show();
        // target.removeAttribute("type", "hidden");
    });
});

//FLEXSLIDER
$(window).load(function () {
    $(".flexslider").flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: true,
    });
});
$(window).load(function () {
    $(function () {
        var pull = $("#pull");
        var menu = $("nav ul");

        $(pull).on("click", function (e) {
            e.preventDefault();
            menu.slideToggle();
        });
    });
    $(window).resize(function () {
        var menu = $("nav ul");
        var w = $(window).width();
        if (w > 320 && menu.is(":hidden")) {
            menu.removeAttr("style");
        }
    });
});

//OVERLAYS
$(document).ready(function () {
    if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".effects .img").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".img").hasClass("hover")) {
                $(this).closest(".img").removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".effects .img")
            .mouseenter(function () {
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function () {
                $(this).removeClass("hover");
            });
    }
});

// SMOOTH NAV SCROLL
$(function () {
    $("a[href*=#]:not([href=#])").click(function () {
        if (
            location.pathname.replace(/^\//, "") ===
                this.pathname.replace(/^\//, "") &&
            location.hostname === this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html,body").animate(
                    {
                        scrollTop: target.offset().top,
                    },
                    2000
                );
                return false;
            }
        }
    });
});

// WAYPOINTS
$(function () {
    $(".wp1").waypoint(
        function () {
            $(".wp1").addClass("animated bounceInLeft");
        },
        {
            offset: "85%",
        }
    );

    $(".wp2").waypoint(
        function () {
            $(".wp2").addClass("animated bounceInRight");
        },
        {
            offset: "85%",
        }
    );

    $(".wp3").waypoint(
        function () {
            $(".wp3").addClass("animated bounceInLeft");
        },
        {
            offset: "85%",
        }
    );

    $(".wp4").waypoint(
        function () {
            $(".wp4").addClass("animated fadeInUp");
        },
        {
            offset: "85%",
        }
    );

    $(".wp5").waypoint(
        function () {
            $(".wp5").addClass("animated fadeInUp");
        },
        {
            offset: "85%",
        }
    );

    $(".wp6").waypoint(
        function () {
            $(".wp6").addClass("animated fadeInUp");
        },
        {
            offset: "85%",
        }
    );
});
