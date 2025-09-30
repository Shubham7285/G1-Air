<?php
$get_alt_text = RDS_ALT_DATA;
$career_banner_alt = "";
$career_mobile_banner_alt = "";

if (is_array($get_alt_text)) {
    foreach ($get_alt_text as $value) {
        if (in_array("careers-banner.webp", $value)) {
            $career_banner_alt = !empty($value[3]) ? 'alt="' . esc_attr($value[3]) . '"' : '';
        }

        if (in_array("m-careers-banner.webp", $value)) {
            $career_mobile_banner_alt = !empty($value[3]) ? 'alt="' . esc_attr($value[3]) . '"' : '';
        }
    }
}
?> 
<!-- carrer banner starts -->
<div class="container-fluid px-0 content_mb_lg_56">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="careers-banner-img">
                    <img src="<?php echo get_exist_image_url('careers','careers-banner'); ?>" srcset="<?php echo get_exist_image_url('careers','careers-banner'); ?> 1x, <?php echo get_exist_image_url('careers','careers-banner@2x'); ?> 2x, <?php echo get_exist_image_url('careers','careers-banner@3x'); ?> 3x" width="1075" height="502" <?php echo $career_banner_alt; ?> class="img-fluid careers-banner-img mw-lg-100 object-fit d-lg-block">
                </div>
            </div>
            <div class="col-lg-6 position-relative carrer_banner_content d-flex align-items-center">
                <div class="mw-lg-743 ms-lg-0 container content_py_40 content_py_xl_0 content_pl_lg_80 content_pl_15 content_pr_15 ccontent_pl_xl_105">
                    <span class="display1 true_black d-block rpx_mb_15"><?php the_title(); ?></span>
                    
                                <div class="mw-lg-445 rpx_mb_15"> <?php
$content = isset($args['page_templates']['career_page']['banner']['content']) ? $args['page_templates']['career_page']['banner']['content'] : '';
$charLimit = 464;
        if (strlen(strip_tags($content)) > $charLimit) {
            $trimmedContent = substr(strip_tags($content), 0, $charLimit);
            echo $trimmedContent . '...';
           
        } else {
            echo $content;
        }
    ?></div>
                    <div class="">
                        <?php if(!empty($args['page_templates']['career_page']['banner']['button_text'])){ ?>
                        <button  onclick="scrollSmoothTo('open_position')"  class="btn btn-primary"><?php echo $args['page_templates']['career_page']['banner']['button_text']; ?> <i class=" icon-circle-chevron-right2
                            "></i></button>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- carrer banner ends -->

    <script>
        function scrollSmoothTo(elementId) {
            var offset = <?php echo wp_is_mobile() ? 80 : 220; ?>;

            jQuery("html, body").animate({
            scrollTop: jQuery('#open_position').offset().top - offset
            }, 500);

            }
            //Job Application js
            function viewPostionButtonClick(attr) {
            var jobTitle = jQuery(attr).siblings('.position_title').text();
            console.log(jobTitle);
            jQuery(".job-title").find('input:text').val(jobTitle);
        }
    </script> 