<div class="collection ">
    <div class="container-xl">
        <div class="collection_title mx-0 text-left">
            <h3>Bộ Sưu Tập Mới</h3>
        </div>
        <div class="collection_top row justify-content-center">
            <div class="col-12 col-lg-6 mx-0">
                <img class="imgModel w-100 h-100" src="assets/images/collection_model.png" alt="" srcset="">
            </div>

            <div class="product_gold col-6 col-md-4 col-lg-3 d-flex flex-column">
                <a class="position-relative mx-0">
                    <img class="w-100" src="assets/images/collection_gold1.png" alt="">
                    <div class="sale position-absolute">-05%</div>
                </a>
                <a class="name text-center text-decoration-none">Bộ trang sức cưới Vàng 24K Tình Nồng</a>
                <span class="price_sale text-decoration-line-through">72,240,000 ₫</span>
                <span class="price">68,800,000₫</span>
            </div>
            <div class="product_gold col-6 col-md-4 col-lg-3 d-flex flex-column">
                <a class="position-relative mx-0">
                    <img class="w-100" src="assets/images/collection_gold2.png" alt="">
                    <div class="sale position-absolute">-05%</div>
                </a>
                <a class="name text-center text-decoration-none">Bộ trang sức cưới Vàng 24K Hoa Tình Yêu</a>
                <span class="price_sale text-decoration-line-through">72,240,000 ₫</span>
                <span class="price">69,800,000₫</span>
            </div>
        </div>
        <div class="collection_list">
            <div class="swiper swiper-collection">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver1.png" alt="">
                            <a class="name text-decoration-none">Bộ trang sức Bạc</a>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver2.png" alt="">
                            <a class="name text-decoration-none">Bộ trang sức Bạc</a>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver3.png" alt="">
                            <a class="name text-decoration-none">Bộ trang sức Bạc</a>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver4.png" alt="">
                            <a class="name text-decoration-none">Bộ trang sức Bạc</a>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-more d-flex justify-content-center">
            <button class="btn d-flex " type="submit">
                <span>XEM THÊM</span>
                <i class="lp-next"></i>
            </button>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper(".swiper-collection", {
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

            },
            576: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            796: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1240: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }
    });
</script>