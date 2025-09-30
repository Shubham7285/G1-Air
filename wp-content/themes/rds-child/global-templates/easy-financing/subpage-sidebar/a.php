<div class="sidbar-financing d-block  text-center mh-331  ">
    <div class="sidbar-financing-inner rpx_py_40 rpx_px_20 color_tertiary_bg">
        <div class="financing-icon">
      <?php
                    $financing_image_url = get_exist_image_url("fullwidth-cta", "fullwidth-cta-icon");
                    if (!empty($financing_image_url)) {
                        if (@getimagesize($financing_image_url) === false) { ?>
                            <img src="<?php echo esc_url($financing_image_url); ?>" class="img-fluid" <?php echo $financing_home_svg_alt; ?>>
                        <?php } else { ?>
                            <img src="<?php echo esc_url($financing_image_url); ?>" srcset="<?php echo esc_url($financing_image_url); ?> 1x, <?php echo esc_url(get_exist_image_url("fullwidth-cta", "fullwidth-cta-icon@2x")); ?> 2x, <?php echo esc_url(get_exist_image_url("fullwidth-cta", "fullwidth-cta-icon@3x")); ?> 3x" class="img-fluid" <?php echo $financing_home_svg_alt; ?>>
                        <?php }
                    }
                    ?>
        </div>
		<div class="sidbar-financing-content">
 <?php if (!empty($args["page_templates"]["subpage"]["sidebar"]["financing"]["subheading"])): ?>
            <h6 class="h6-alt rpx_mb_10 text-uppercase">
                <?php echo $args["page_templates"]["subpage"]["sidebar"]["financing"]["subheading"]; ?>
        </h6>
        <?php endif; ?>
        <?php if (!empty($args["page_templates"]["subpage"]["sidebar"]["financing"]["heading"])): ?>
            <h4 class="h4-alt mb-0  text-uppercase">
                <?php echo $args["page_templates"]["subpage"]["sidebar"]["financing"]["heading"]; ?>
            </h4>
        <?php endif; ?>

       
			
		</div>
        <div class="sidebar-finance-btn">
        <?php if (!empty($args["page_templates"]["subpage"]["sidebar"]["financing"]["button_link"]) && !empty($args["page_templates"]["subpage"]["sidebar"]["financing"]["button_text"])): ?>
            <a href="<?php echo get_home_url() . $args["page_templates"]["subpage"]["sidebar"]["financing"]["button_link"]; ?>" class="btn btn-secondary mw-250 mh-50">
                <?php echo $args["page_templates"]["subpage"]["sidebar"]["financing"]["button_text"]; ?><i class=" icon-circle-chevron-right2
"></i>
            </a>
            </div>
        <?php endif; ?>
    </div>
</div>
