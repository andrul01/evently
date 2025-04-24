document.addEventListener("DOMContentLoaded", () => {
    const menu = document.querySelector("#menuBars");
    const navbar = document.querySelector(".navbar");
    const themetoggle = document.querySelector(".theme-toggle"); // Optional, make sure it exists

    if (menu && navbar) {
        menu.onclick = () => {
            menu.classList.toggle("fa-times");
            navbar.classList.toggle("active");
        };

        window.onscroll = () => {
            menu.classList.remove("fa-times");
            navbar.classList.remove("active");
            if (themetoggle) {
                themetoggle.classList.remove("active");
            }
        };
    } else {
        console.warn("Element(s) not found: menu or navbar");
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".ReviewSlide", {
        slidesPerView: 1,
        grabCursor: true,
        loop: true,
        spaceBetween: 10,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            700: {
                slidesPerView: 2,
            },
            1050: {
                slidesPerView: 3,
            },
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });
});
