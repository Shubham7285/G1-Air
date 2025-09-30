<?php
//exaple how to set image sizewise
// ['dektop', 'ipad', 'mobile']
$img1x = [get_exist_image_url("coupons", "coupons-bg"), get_exist_image_url("coupons-bg", "coupons-bg"), get_exist_image_url("coupons-bg", "m-coupons-bg")];
$img2x = [get_exist_image_url("coupons-bg", "coupons-bg@2x"), get_exist_image_url("coupons-bg", "coupons-bg@2x"), get_exist_image_url("coupons-bg", "m-coupons-bg@2x")];
$img3x = [get_exist_image_url("coupons-bg", "coupons-bg@3x"), get_exist_image_url("coupons-bg", "coupons-bg@3x"), get_exist_image_url("coupons-bg", "m-coupons-bg@3x")];
$img1x = Implode(",", $img1x);
$img2x = Implode(",", $img2x);
$img3x = Implode(",", $img3x);

   $widget_id = $args["globals"]["promotion"]["widget_id"];
   $category_name = is_array($args["category_taxonomy"]) ? $args["category_taxonomy"] : array($args["category_taxonomy"]);
   $current_date = date("m/d/Y");
   $paged = get_query_var("paged") ? get_query_var("paged") : -1;
   if (empty($category_name) || in_array("all", $category_name)) {
       query_posts([
           "post_type" => "bc_promotions",
           "posts_per_page" => "6",
           "paged" => $paged,
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
        "posts_per_page" => "6",
        "paged" => $paged,
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
   
   $title_tag = isset($args["globals"]["promotion"]["title_tag"])
   	? $args["globals"]["promotion"]["title_tag"]
   	: "h5";
   $heading_tag = isset($args["globals"]["promotion"]["heading_tag"])
   	? $args["globals"]["promotion"]["heading_tag"]
   	: "h4";
   ?>
    <?php  echo do_shortcode('[custom-bg-srcset class="promotion_bg_img" img1x="' . $img1x . '" img2x="' . $img2x . '" img3x="' . $img3x . '" size1x="cover" size2x="cover" size3x="cover"]'); ?>
<div class="d-block promotion-home promotion_bg_img rpx_py_lg_80 rpx_py_40">
<?php
   global $template;
   if (
   	!empty($template) &&
   	!empty($template) &&
   	basename($template) == "rds-landing.php"
   ) { ?>
  

<div class="container-fluid px-0">
<?php } else { ?>
<div class="container-fluid px-0">
   <?php }
      ?>
      <div class="container">
         <div class="row">
            <div class="homepage_coupon col-lg-12">
                 <?php if (!empty($args["globals"]["promotion"]["heading"])) { ?>
               <h5 class="text-center"><?php echo $args["globals"]["promotion"]["heading"]; ?></h5>
               <?php } ?>
               <?php if (!empty($args["globals"]["promotion"]["title"])) { ?>
               <h4 class=" text-center"><?php echo $args["globals"]["promotion"]["title"]; ?></h4>
               <?php } ?>
              
               <div class="promotion-outer">
                  <div class="swiper home-coupon-swiper promotion-slider">
                     <div class="swiper-wrapper">
                        <?php if (have_posts()):
                           while (have_posts()):
                              the_post();
                              $promotion_type = get_post_meta(get_the_ID(), "promotion_type", true);
                              $noexpiry = get_post_meta(get_the_ID(), "promotion_noexpiry", true);
                              $date = get_post_meta(get_the_ID(), "promotion_expiry_date1", true);
                              $open_new_tab = get_post_meta(get_the_ID(), "promotion_open_new_tab", true);
                              if (
                                 strtotime($date) >= strtotime(current_time("m/d/Y")) ||
                                 $noexpiry == 1
                              ) {
                                 $title = get_post_meta(get_the_ID(), "promotion_title1", true);
                                 $color = get_post_meta(get_the_ID(), "promotion_color", true);
                                 $subheading = get_post_meta(get_the_ID(), "promotion_subheading", true);
                                 $heading = get_post_meta(get_the_ID(), "promotion_heading", true);
                                 $footer_heading = get_post_meta(get_the_ID(), "promotion_footer_heading", true);
                                 $requestButtonLink = get_post_meta($post->ID, "request_button_link", true);
                                 $requestButtonTitle = get_post_meta($post->ID, "request_button_title", true);
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
                        <?php
                           }
                           endwhile;
                           endif; ?>
                     </div>
                  </div>
                  <?php
                     global $template;
                     if (
                        !empty($template) &&
                        basename($template) == "rds-landing.php"
                     ) { ?>
                  <div class="swiper-button-next home_coupon_next_a-<?php echo $widget_id ?>">
                     <i class=" icon-circle-chevron-right2 text_25 true_black line_height_42 transform"></i>
                  </div>
                  <div class="swiper-button-prev home_coupon_prev_a-<?php echo $widget_id ?>">
                     <i class="icon-chevron-left text_25 true_black line_height_42 transform"></i>
                  </div>
                  <?php } else { ?>
                    <div class="swiper-pagination coupon-slider-pagination"></div>
                  <div class="col-sm-12 col-lg-12 text-center promotion-button">
                     <?php if (!empty($args["globals"]["promotion"]["button_link"]) && !empty($args["globals"]["promotion"]["button_text"])) { ?>
                     <a href="<?php echo get_home_url() . $args["globals"]["promotion"]["button_link"]; ?>" class="btn btn-secondary mw-210"><?php echo $args["globals"]["promotion"]["button_text"]; ?><i class=" icon-circle-chevron-right2
"></i></a>
                     <?php } ?>
                  </div>
                  <?php }
                     ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php wp_reset_query(); ?>
<script>
   jQuery(".promotionC_icon").click(function () {
          var text = jQuery(this).html().trim();
          currentText = jQuery(this).text();
   
          if (currentText == "More info ") {
              jQuery(this).html(text.replace('More info ', 'Less info '));
              if (jQuery('body').hasClass('elementor-editor-active')) {
               jQuery(this).find('i').toggleClass('icon-plus1 icon-minus1');
           }
          } else {
              jQuery(this).html(text.replace('Less info ', 'More info '));
               if (jQuery('body').hasClass('elementor-editor-active')) {
                    jQuery(this).find('i').toggleClass('icon-minus1 icon-plus1');
                }
          }
      });
</script>
<script type="text/javascript">
   jQuery(document).ready(function () {
   
       jQuery(".coupon-popup-close").click(function () {
           
           jQuery(this).closest("#slider_request_coupon_form").find("form .gfield_label").each(function (k, d) {
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
       setInterval(function () {
               var promotiontitleValue = jQuery('#input_9_10').val();
               jQuery('.bc-promotion-title').text(promotiontitleValue);
       }, 500);
   });
	/*
   function couponButtonClick(attr) {
       var CouponTitle = jQuery(attr).parent('.coupon_name').find('.coupon_title').text();
       var CouponsubTitle = jQuery(attr).parent('.coupon_name').find('.coupon_heading ').text();
       var Couponsubheading = jQuery(attr).parent('.coupon_name').find('.coupon_sub_heading ').text();
       console.log(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading)
       jQuery(".coupon-name").find('input:text').val(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
       jQuery(".bc-promotion-title").text(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
   }
   */
</script>
		<script>
    jQuery(document).ready(function () {
        var Swipes = new Swiper('.home-coupon-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.coupon-slider-pagination',
                clickable: true,
            },
             autoplay: {
                    delay: 8000,
                    disableOnInteraction: true,
                },
            breakpoints: {
                // When screen width is <= 991px
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30 // Optional: Adjust spacing for small screens
                }
            }
        });
    });
</script>

	<?php wp_reset_query(); ?>
	<?php echo get_template_part('page-templates/common/coupon-modal'); ?>