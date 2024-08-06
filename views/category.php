<div class="category d-flex flex-column align-items-center justify-content-center">
    <div class="content container-xl d-flex flex-column ">
        <div class="content_title">
            <h2>
                Khám Phá Thế Giới Trang Sức
            </h2>

        </div>
        <div class="content_category col-12 d-flex">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content_category-detail d-flex flex-column">
                            <img src="assets/images/category1.png" alt="">
                            <a class="category_name text-decoration-none">Nhẫn</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content_category-detail d-flex flex-column">
                            <img src="assets/images/category2.png" alt="">
                            <a class="category_name text-decoration-none">Bông tai</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content_category-detail d-flex flex-column">
                            <img src="assets/images/category3.png" alt="">
                            <a class="category_name text-decoration-none">Dây chuyền</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content_category-detail d-flex flex-column">
                            <img src="assets/images/category4.png" alt="">
                            <a class="category_name text-decoration-none">Vòng tay</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content_category-detail d-flex flex-column">
                            <img src="assets/images/category5.png" alt="">
                            <a class="category_name text-decoration-none">Trang sức cưới</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content_category-detail d-flex flex-column">
                            <img src="assets/images/category6.png" alt="">
                            <a class="category_name text-decoration-none">Thiết kế riêng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
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
</script>