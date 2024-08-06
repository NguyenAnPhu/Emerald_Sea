<div class="collection ">
    <div class="container-xl d-flex flex-column">
        <div class="collection_title mx-0 text-left">
            <h3>Bộ Sưu Tập Mới</h3>
        </div>
        <div class="collection_top d-flex flex-column align-items-center flex-xxl-row gap-4">
            <div class="col-12 col-xxl-6 mx-0">
                <img class="imgModel" src="assets/images/collection_model.png" alt="" srcset="">
            </div>
            <div class="collection_top-detail col-12 col-lg-6 d-flex flex-column flex-sm-row justify-content-center gap-4">
                <div class="product_gold d-flex flex-column justify-content-center">
                    <div class="position-relative">
                        <img src="assets/images/collection_gold1.png" alt="">
                        <div class="sale position-absolute">-05%</div>
                    </div>
                    <span class="name text-center">Bộ trang sức cưới Vàng 24K Tình Nồng</span>
                    <span class="price_sale text-decoration-line-through">72,240,000 ₫</span>
                    <span class="price">68,800,000₫</span>

                </div>
                <div class="product_gold d-flex flex-column justify-content-center">
                    <div class="position-relative">
                        <img src="assets/images/collection_gold2.png" alt="">
                        <div class="sale position-absolute">-05%</div>
                    </div>
                    <span class="name text-center">Bộ trang sức cưới Vàng 24K Hoa Tình Yêu</span>
                    <span class="price_sale text-decoration-line-through">72,240,000 ₫</span>
                    <span class="price">69,800,000₫</span>
                </div>
            </div>
        </div>
        <div class="collection_list col-12 d-flex gap-4">
            <div class="swiper swiper-collection">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver1.png" alt="">
                            <span class="name">Bộ trang sức Bạc</span>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver2.png" alt="">
                            <span class="name">Bộ trang sức Bạc</span>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver3.png" alt="">
                            <span class="name">Bộ trang sức Bạc</span>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection_list-detail d-flex flex-column align-items-center">
                            <img src="assets/images/collection_silver4.png" alt="">
                            <span class="name">Bộ trang sức Bạc</span>
                            <span class="price">1,800,000₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-more">
            <button class="btn d-flex align-items-center" type="submit">
                <span>XEM THÊM</span>
                <img src="assets/icons/arrow_forward.svg" alt="" srcset="">
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