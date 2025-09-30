<?php
$get_alt_text = RDS_ALT_DATA;
$financing_home_svg_alt = "";
if (is_array($get_alt_text)) {
    foreach ($get_alt_text as $value) {
        if (in_array("fullwidth-cta-icon.webp", $value) || in_array("fullwidth-cta-icon.svg", $value)) {
            $financing_home_svg_alt = 'alt="' . $value[3] . '"';
        }
    }
}
?>

    <!-- financing html start here -->
    <div class="d-block home-financing  rpx_pb_lg_80">   
        <div class="container-fluid px-0">
            <div class="container">
                <div class="row align-items-center color_tertiary_bg  financing-row-outer">
                    <div class="col-sm-12 col-lg-3">
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
                    <div class="col-sm-12 col-lg-6 text-center px-0">

                                                                   
                                                                     <h6 class="color_quaternary d-block text-uppercase"><?php echo $args["globals"]["financing"]["subheading"]; ?></h6>
                                                                      <h4 class="true_white d-lg-block   mb-0 text-uppercase"><?php echo $args["globals"]["financing"]["heading"]; ?></h4>
                                        </div>
                    <div class="col-sm-12 col-lg-3 text-center text-lg-end ps-lg-0">
                                                <a href="<?php echo get_home_url() .
                        	$args["globals"]["financing"]["button_link"]; ?>" class="btn btn-secondary mw-250 mh-50" style="
"><?php echo $args["globals"]["financing"]["button_text"]; ?><i class=" icon-circle-chevron-right2
"></i></a>
                                        </div>
                </div>
                
            </div>
        </div>
    </div>
