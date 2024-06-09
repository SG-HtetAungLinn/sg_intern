$(document).ready(function () {
    new WOW().init();

    function closeDrawer() {
        $("#drawer").css("right", "-250px");
        $("#overlay").css("opacity", "0");
        $("#overlay").css("visibility", "hidden");
    }

    $("#toggle-button").click(function () {
        let drawer = $("#drawer");
        let overlay = $("#overlay");
        if (drawer.css("right") === "-250px") {
            drawer.css("right", "0");
            overlay.css("opacity", "1");
            overlay.css("visibility", "visible");
        } else {
            closeDrawer();
        }
    });

    $("#overlay, #close-button").click(function () {
        closeDrawer();
    });

    new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        loop: true,
        effect: "fade",
        spaceBetween: 30,
    });
});
