import "./bootstrap";
import "flowbite";
function initSwiper() {
    const screenWidth = window.innerWidth;
    let slidesPerView = 2;

    if (screenWidth <= 768) {
        // Change the screen width as needed
        slidesPerView = 1;
    }

    const swiper = new Swiper(".swiper", {
        // Other parameters...
        direction: "horizontal",
        loop: true,
        slidesPerView: slidesPerView,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}

// Initial initialization
initSwiper();

// Update Swiper on window resize
window.addEventListener("resize", function () {
    initSwiper();
});
//
const admin = document.getElementById("admin");
console.log(admin);
admin.addEventListener("click", function () {
    window.location = "admin";
});
