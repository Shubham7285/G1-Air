<div class="container-fluid px-0 rpx_py_40 rpx_pt_lg_80 rpx_pb_lg_50">
    <div class="container">
        <div class="swiper carrer_icon_swiper">
            <div class="swiper-wrapper flex-lg-wrap">
                <?php
                // Check if $iconItems is an array and not empty
                if (!empty($args["page_templates"]["career_page"]["perks"]["items"]) && is_array($args["page_templates"]["career_page"]["perks"]["items"])) {
                    $iconItems = $args["page_templates"]["career_page"]["perks"]["items"];
                    foreach ($iconItems as $value) {
                        // Check if the necessary keys exist and are not empty
                        $icon = !empty($value["icon"]) ? esc_attr($value["icon"]) : '';
                        $heading = !empty($value["heading"]) ? esc_html($value["heading"]) : '';
                        $description = !empty($value["description"]) ? esc_html($value["description"]) : '';

                        // Output the HTML
                        echo '<div class="swiper-slide col-lg-4 text-lg-start text-center pe-lg-4 content_mt_lg_9 content_mb_lg_42">
                            <div class="d-flex align-items-start justify-content-lg-start justify-content-center">
                                <div class="carrer_icon_inner mw-50 text-start me-3">
                                    <i class="' . $icon . ' text_36 line_height_36 color_primary d-inline-block"></i>
                                </div>
                                <div class="carrer_title text-start">
                                    <h3 class="rpx_mb_16">' . $heading . '</h3>
                                    <p class="rpx_mb_30">' . $description . '</p>
                                </div>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="swiper-pagination carrer_pagination position-relative d-lg-none"></div>
    </div>
</div>

<script>
jQuery(document).ready(function(){
    var swiperIconA = new Swiper(".carrer_icon_swiper", {
		slidesPerView: 1,
        spaceBetween: 10,
		loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
          },
        pagination: {
          el: ".carrer_pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 10,
            noSwiping: false,
            autoHeight:true,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 10,
            noSwiping: false,
          },
          992: {
            slidesPerView: 6,
            spaceBetween: 0,
            noSwiping: true,
          },
        },
    });
});
</script>
