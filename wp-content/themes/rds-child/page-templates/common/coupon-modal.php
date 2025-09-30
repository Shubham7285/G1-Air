<?php 	
 global $rdsTemplateDataGlobal;
$args = $rdsTemplateDataGlobal;
//echo'<pre>'; print_R($args["globals"]['promotion']);
?>
<div class="modal fade coupon-popup request_form px-lg-0 px-0 pt-5 pt-md-0 77" id="slider_request_coupon_form" tabindex="-1" role="dialog" data-bs-backdrop="false" data-bs-keyboard="false" aria-labelledby="requestcoupon_Label" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered px-lg-0 px-2 " role="document">
      <div class="modal-content border-0 text-center">
         <div class="modal-header border-0 p-0">
            <button type="button" class="close coupon-popup-close position-absolute bg-transparent border-0 pb-0 px-0" data-bs-dismiss="modal" aria-label="Close" style="opacity:1; z-index: 999; color:#fff ;">
            <i class="icon-xmark1 text_30 line_height_26"></i>
            </button>
         </div>
         <div class="modal-body w-100 my-auto mx-auto coupons rpx_px_lg_28 rpx_px_11 rpx_py_lg_38 rpx_py_11">
            <div class="border-dashed-7  footer_form_A ui_kit_footer_form elementor-popupform rpx_px_lg_67 rpx_px_15 rpx_py_lg_50 rpx_py_20">
               <?php if (!empty($args["globals"]["promotion"]["popup_form_heading"])) { ?>
               <!-- <h3 class=" h3-alt"><?php echo $args["globals"]["promotion"]["popup_form_heading"]; ?></h3> -->
                <h4 class="rpx_mb_18"><?php echo $args["globals"]["promotion"]["popup_form_heading"]; ?></h4>
                <div class="rpx_pb_26  d-flex justify-content-center align-items-center color_primary">
                  <i class="icon-shield-check1 text_30 line_height_26 rpx_mr_lg_10 rpx_mr_0"></i> <p class="text_16 m-0 color_primary fw-bold"><?php echo $args["globals"]["promotion"]["popup_form_subheading"]; ?></p>
                </div>
               <?php } ?>
               <?php if (!empty($args["globals"]["promotion"]["popup_form_subheading"])) { ?>
              
               <?php } ?>
               <div class="">
                  <?php
                     $form_id = $args["globals"]["promotion"]["popup_gravity_form_id"];
                     if (!empty($form_id)) {
                        echo do_shortcode("[gravityforms id=" . $form_id . " ajax=true]");
                     }
                     ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

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
	function couponButtonClick(attr) {
		var couponContainer = jQuery(attr).closest('.coupon_name');
		var CouponTitle = couponContainer.find('.coupon_title').text();
		var CouponsubTitle = couponContainer.find('.coupon_heading ').text();
		var Couponsubheading = couponContainer.find('.coupon_sub_heading').text();
		console.log(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
		jQuery(".coupon-name").find('input:text').val(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
		jQuery(".bc-promotion-title").text(CouponTitle + " " + CouponsubTitle + " " + Couponsubheading);
	}

    </script>
