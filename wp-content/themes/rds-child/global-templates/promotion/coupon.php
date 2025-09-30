<?php
$noexpiry = $args['noexpiry'] ?? false;
?>
<div class="coupon-inner">
							 <div class="coupon-content coupon_name">
								 <?php if (!empty($title)) { ?>
                              <h4 class="mb-0  coupon_title coupon_offer d-grid"><?php echo $title; ?></h4>
                              <?php } ?>
                              <?php if (!empty($heading)) { ?>
                              <span class=" text-center coupon_heading"><?php echo $heading; ?></span>
                              <?php } ?>
                              <?php if (!empty($subheading)) { ?>
                               <span class=" text-center coupon_sub_heading  "><?php echo $subheading; ?></span>
                              <?php } ?>
                              <div class="redeem-btn">
                              <a data-bs-toggle="<?php echo empty($requestButtonLink) ? "modal" : ""; ?>" 
                                 data-bs-target="<?php echo empty($requestButtonLink) ? "#slider_request_coupon_form" : ""; ?>" 
                                 <?php echo empty($requestButtonLink) ? 'onclick="couponButtonClick(this);"' : 'href="' . $requestButtonLink . '"'; ?>
                                 <?php echo empty($requestButtonTitle) ? 'aria-label="Request Service"' : 'aria-label="' . $requestButtonTitle . '"'; ?>
                                 class="btn btn-primary mw-250 mh-50  request_service_button"
                                 <?php echo $open_new_tab == 1 ? 'target="_blank"' : ""; ?>>
                              <?php echo empty($requestButtonTitle) ? "Request Service" : $requestButtonTitle; ?> 
                              <i class=" icon-circle-chevron-right2 "></i>
                              </a>
                              </div>
							  <div class="coupon-footer-box">
                              <?php if ($noexpiry != 1 && !empty($date)) { ?>
                              <span class="d-block  coupon_expiry text-capitalize ">Expires <?php echo $date; ?></span>
                              <?php } ?>
                              <?php if (!empty($footer_heading)) { ?>
                              <span class="d-block coupon_disclaimer  text-center"><?php echo $footer_heading; ?></span>
                              <?php } ?>
							  </div>
                           </div>
                        </div>