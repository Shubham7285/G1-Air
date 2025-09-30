<div class="service-section d-lg-none rpx_py_40">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center service-grid">
                <?php
                $servicesItems = $args['globals']['services']['items'];
                $titleLengths = [];
                foreach ($servicesItems as $item) {
                    // Check if the 'title' key exists in the current array element
                    if (isset($item['title'])) {
                        $title = $item['title'];
                        $titleLengths[] = strlen($title);
                    }
                }
                $maxValue = max($titleLengths);
                $class = "";
                if ($maxValue < 21) {
                    $class = '';
                } elseif ($maxValue >= 21 && $maxValue < 42) {
                    $class = '';
                } elseif ($maxValue >= 42) {
                    $class = '';
                }
                foreach ($servicesItems as $value) {
                    echo '<div class="col-12 text-center px-0 service-grid-column' .
                        $class .
                        '">
                    <a href="' .
                        get_home_url() .
                        $value['link'] .
                        '" class="d-flex justify-content-center ' .
                        $args['globals']['services']['top_border_class'] .
                        ' no_hover_underline h-100 service_block ">
                    <div class="d-flex d-lg-block align-items-center text-lg-center service-outter-box">
                    <div class="w-100 d-lg-block   service-outter-inner">
                    <div class="col-12 text-center">
                    <i class="' .
                        $value['icon'] .
                        ' color_primary text_70 line_height_70 sm_text_30 sm_line_height_60 service_block_icon"></i>
                    </div>
                    <div class="col-12 text-center mx-auto">
                    <h6 class="h7 mb-0">' .
                        $value['title'] .
                        '</h6>
                    </div>
                    <div class="col-lg-12 col-2 text-end d-none">
                    <i class="true_black icon-chevron-right2 sm_text_20 sm_line_height_60 d-lg-none d-inline-block"></i>
                    </div>
                    </div>
                    </div>
                    </a>
                    </div>';
                }
                ?>  
            </div>
        </div>
    </div>
   
</div>
<div class="d-none position-relative d-lg-block service-section rpx_py_lg_80">
    <div class="container-fluid">
        <div class="container">
            <div id="rds_services_swiper" class="swiper service-swipper-auto">
                <div class="abc swiper-wrapper "> 
                    <?php
                    $servicesItems = $args['globals']['services']['items'];
                    $count = count($servicesItems);
                    $titleLengths = [];
                    foreach ($servicesItems as $item) {
                        // Check if the 'title' key exists in the current array element
                        if (isset($item['title'])) {
                            $title = $item['title'];
                            $titleLengths[] = strlen($title);
                        }
                    }
                    $maxValue = max($titleLengths);
                    $class = "h-190";
                    if ($maxValue < 21) {
                        $class = '';
                    } elseif ($maxValue >= 21 && $maxValue < 42) {
                        $class = '';
                    } elseif ($maxValue >= 42) {
                        $class = '';
                    }
                    foreach ($servicesItems as $value) {
                        echo '<div class="swiper-slide shadow-sm ' .
                            $args['globals']['services']['top_border_class'] .
                            ' ' .
                            $class .
                            '">
                    <a href="' .
                            get_home_url() .
                            $value['link'] .
                            '" class="d-block no_hover_underline px-lg-3 h-100 service_block">
                    <div class="d-flex d-lg-block align-items-center text-lg-center py-lg-2 px-lg-0 px-4 py-1">
                    <div class="w-100 d-lg-block d-flex align-items-center service-icon-box ">
                    <div class="col-lg-12 col-2">
                    <i class="' .
                            $value['icon'] .
                            ' color_primary text_70 line_height_70 sm_text_30 sm_line_height_60 service_block_icon"></i>
                    </div>
                    <div class="col-lg-12 col-8">
                    <h6 class="h7 mb-0">' .
                            $value['title'] .
                            '</h6>
                    </div>

                    </div>
                    </div>
                    </a>
                    </div>';
                    }
                    ?> 
					 <?php if ($count > 5) { ?>
        <div class="swiper-pagination  swiper-pagination-service d-none d-lg-block "></div>
    <?php } ?>
                </div>
            </div>
        </div>
         <div class="truck-image">
 <img src="<?php echo get_exist_image_url("hero", "home-icon"); ?>" 
                            srcset="<?php echo get_exist_image_url("hero", "home-icon"); ?> 1x, 
                                    <?php echo get_exist_image_url("hero", "home-icon@2x"); ?> 2x, 
                                    <?php echo get_exist_image_url("hero", "home-icon@3x"); ?> 3x" 
                            alt="Review Image" width="" height="" 
                            class="img-fluid d-lg-block d-none">
    </div>
    </div>
   
</div>
<script>
    var numImage1 = jQuery('.abc .col-lg').length;
    if (numImage1 <= 3) {
        jQuery('.abc .row').addClass('justify-content-center');
    }
    jQuery(document).ready(function () {
        var CountSlider = "<?php echo $count; ?>";
        var loop = false;
        if (CountSlider > 5) {
            loop = true;
        }
        if (CountSlider < 5) {
            jQuery(".abc.swiper-wrapper").addClass("justify-content-center");
        }
        var swiper = new Swiper('#rds_services_swiper', {
            loop: true,
            slidesPerView: 5,
            spaceBetween: 0,
            noSwiping: true,
            allowSlidePrev: true,
            allowSlideNext: true,
            autoplay: {
                        enabled: true,
                        delay: 5000
                    },
            navigation: {
                nextEl: ".swiper-button-next-services",
                prevEl: ".swiper-button-prev-services",
            },
            pagination: {
                el: ".swiper-pagination-service",
                clickable: true,

            },
            breakpoints: {
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                    noSwiping: true,
                    allowSlidePrev: true,
                    allowSlideNext: true,
                    
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    noSwiping: true,
                    allowSlidePrev: true,
                    allowSlideNext: true,
                    
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    noSwiping: true,
                    allowSlidePrev: true,
                    allowSlideNext: true,
                    
                }
            },
        });
       
  

    });
</script>
