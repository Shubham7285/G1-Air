<?php if (function_exists('get_promotion_query')) {
    // $query = get_promotion_query(3);
    $category_name = $args['category_taxonomy'];
    $current_date = date('m/d/Y');
    if (empty($category_name) || in_array("all", $category_name)) {
        query_posts([
            "post_type" => "bc_promotions",
            "posts_per_page" => "3",
            // "paged" => $paged,
            "order" => "DESC",
            "post_status" => "publish",
            "meta_query" => [
         "relation" => "AND", 
             [
                 "key" => "promotion_landing_page_setting",
                 "value" => "0",
             ],
             [
                 "key" => "promotion_expiry_date1",
                 "value" => $current_date,
                 "compare" => ">=",
             ],
         ],
             "meta_value" => $current_date,
             "meta_compare" => ">=",
             
         ]);
     } else { 
         $abc = query_posts([
         "post_type" => "bc_promotions",
         "posts_per_page" => "3",
        //  "paged" => $paged,
         "order" => "DESC",
         "post_status" => "publish",
         "meta_query" => [
             "relation" => "AND", 
             [
                 "key" => "promotion_landing_page_setting",
                 "value" => "0", 
             ],
             [
                 "key" => "promotion_expiry_date1",
                 "value" => $current_date,
                 "compare" => ">=",
             ],
         ],
         "tax_query" => [
             [
                 "taxonomy" => "bc_promotion_category",
                 "field" => "name",
                 "terms" => $category_name,
                 "operator" => "IN",
             ],
         ],
     ]);
     
    }


            if (have_posts()) {?>
    <div class="sidebar_coupon  ">
    <?php if (!empty($args['page_templates']['subpage']['sidebar']['promotion']['heading'])): ?>
        <h3 class="true_black mb-0 text-center d-block ">
            <?php echo $args['page_templates']['subpage']['sidebar']['promotion']['heading']; ?>
        </h3>
    <?php endif; ?>
    <div class=" coupon-swiper-outer">
    <div class="swiper coupon-swiper">
        <div class="swiper-wrapper">
            <?php while (have_posts()) : the_post();
                $promotion_type = get_post_meta(get_the_ID(), 'promotion_type', TRUE);
                $noexpiry = get_post_meta(get_the_ID(), 'promotion_noexpiry', true);
                $colorCode = get_post_meta(get_the_ID(), 'promotion_color', true);
                $date = get_post_meta(get_the_ID(), 'promotion_expiry_date1', true);
                
                if (strtotime($date) >= strtotime(current_time('m/d/Y')) || $noexpiry == 1) {
                    $title = get_post_meta(get_the_ID(), 'promotion_title1', true);
                    $color = get_post_meta(get_the_ID(), 'promotion_color', true);
                    $subheading = get_post_meta(get_the_ID(), 'promotion_subheading', true);
                    $heading = get_post_meta(get_the_ID(), 'promotion_heading', true);
                    $footer_heading = get_post_meta(get_the_ID(), 'promotion_footer_heading', true);
                    $requestButtonLink = get_post_meta($post->ID, 'request_button_link', true);
                    $open_new_tab = get_post_meta(get_the_ID(), 'promotion_open_new_tab', true);
                    $requestButtonTitle = get_post_meta($post->ID, 'request_button_title', true);
						 $promotion_data = array(
                                    'heading' => $heading,
                                    'subheading' => $subheading,
                                    'title' => $title,
                                    'requestButtonLink' => $requestButtonLink,
                                    'requestButtonTitle' => $requestButtonTitle,
                                    'open_new_tab' => $open_new_tab,
                                    'date' => $date,
                                    'footer_heading' => $footer_heading,
                                    'promotion_noexpiry' => $noexpiry
                                );
					 foreach ($promotion_data as $key => $value) {
                                    set_query_var($key, $value);
                                }
                                                    ?>
           
                  <div class="swiper-slide h-auto ">
                           <?php     
							echo get_template_part('global-templates/promotion/coupon', null, [
                                'noexpiry' => $noexpiry,
                            ]);
                            
                         ?>
							  </div> 
                <?php } endwhile; ?>
        </div>
        </div>
    </div>
    
    <div class="swiper-pagination coupon-pagination mt-0 pagination-variation-a position-relative pb-3 pt-0"></div>
    
    <div class="text-center see_all_button mb-lg-4 pb-lg-2">
        <?php if (!empty($args['page_templates']['subpage']['sidebar']['promotion']['button_link']) && !empty($args['page_templates']['subpage']['sidebar']['promotion']['button_text'])): ?>
            <a href="<?php echo get_home_url() . $args['page_templates']['subpage']['sidebar']['promotion']['button_link']; ?>" class="btn btn-secondary mw-250">
                <?php echo $args['page_templates']['subpage']['sidebar']['promotion']['button_text']; ?> 
                <i class=" icon-circle-chevron-right2 text_18 line_height_18 ms-2 d-lg-inline-block"></i>
            </a>
        <?php endif; ?>
    </div>
</div>



<script type="text/javascript">
       jQuery(document).ready(function () {
   
       jQuery(".coupon-popup-close").click(function () {
           
           jQuery(this).closest("#sidebar_request_coupon_form").find("form .gfield_label").each(function (k, d) {
               jQuery(d).attr("style", "");
               jQuery(d).parent('li').children('label').show();
               jQuery(d).parent('li').find('.validation_message').hide();
               jQuery(d).parent('li').removeClass('gfield_error');
               jQuery(d).parent('li').removeClass('gfield_error');
               jQuery(d).parent('li').find('input').val('');
               jQuery(d).parent('li').find('select').val('');
               jQuery(d).parent('li').children('label').removeClass('float_label');
               jQuery(d).parent("li").find(".gfield-choice-input").prop("checked", true);
           });
       });
       jQuery(".rds_gform_submit").click(function () {
           console.log(jQuery(this).closest("form").find(".coupon-name input").val());
           var promotiontitleValue = jQuery(this).closest("form").find(".coupon-name input").val();
           if (promotiontitleValue != "") {
               setTimeout(function () {
                   jQuery('.bc-promotion-title').text(promotiontitleValue);
               }, 500);
           }
       });
	    var swiperSubpageA = new Swiper(".coupon-swiper", {
                spaceBetween: 20,
                slidesPerView: 1,
                loop: true,
                autoplay: {
                    delay: 8000,
                    disableOnInteraction: false,
                  },
                pagination: {
                    el: ".coupon-pagination",
                    clickable: true,
                },

            });
			            var mySwiper = document.querySelector('.coupon-swiper').swiper
                document.querySelectorAll('.request_service_button').forEach(function(button) {
                    button.addEventListener('click', function() {
                        if (document.getElementById('sidebar_request_coupon_form').classList.contains('show')) {
                            mySwiper.autoplay.stop();
                        }
                    });
                });

                document.querySelector('.coupon-popup-close').addEventListener('click', function() {
                    if (!document.getElementById('sidebar_request_coupon_form').classList.contains('show')) {
                        mySwiper.autoplay.start();
                }
            });
       setInterval(function () {
               var promotiontitleValue = jQuery('#input_9_10').val();
               jQuery('.bc-promotion-title').text(promotiontitleValue);
       }, 500);
   });
   
   /* function couponButtonClick(attr) {
       var CouponTitle = jQuery(attr).parent('.coupon_name').find('.coupon_title').text();
       var CouponsubTitle = jQuery(attr).parent('.coupon_name').find('.coupon_subtitle').text();
       var Couponsubheading = jQuery(attr).parent('.coupon_name').find('.coupon_sub_heading ').text();
       console.log(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading)
       jQuery(".coupon-name").find('input:text').val(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
       jQuery(".bc-promotion-title").text(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
   } */
    </script>
    <?php } wp_reset_query(); 
} ?>

	<?php echo get_template_part('page-templates/common/coupon-modal'); ?>