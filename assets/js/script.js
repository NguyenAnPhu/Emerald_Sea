var swiperCategory = new Swiper(".swiper-category", {
    initialSlide: 1,
    loop: true,
    // slidesPerView: "auto",
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 2,

        },
        576: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        796: {
            slidesPerView: 4,
            spaceBetween: 10
        },
        1240: {
            slidesPerView: 6,
            spaceBetween: 10
        }
    }
});
var swiperCollection = new Swiper(".swiper-collection", {
    initialSlide: 1,
    loop: true, 
    // slidesPerView: "auto",
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10

        },
        576: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        796: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 10
        },

    }
});
var swiperBestSeller = new Swiper(".swiper-bestSeller", {
    initialSlide: 1,
    loop: true,
    // slidesPerView: "auto",
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 12
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 12
        },
        796: {
            slidesPerView: 3,
            spaceBetween: 12
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 24
        },
        1240: {
            slidesPerView: 4,
            spaceBetween: 24
        }
    }
});
var swiperFeature = new Swiper(".swiper-feature", {
    initialSlide: 1,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        576: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        796: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        1240: {
            slidesPerView: 4,
            spaceBetween: 20
        }
    }
});