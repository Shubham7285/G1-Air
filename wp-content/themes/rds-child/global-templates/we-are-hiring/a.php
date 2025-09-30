  <div class="d-block home-financing  rpx_pb_lg_80">   
        <div class="container-fluid px-0">
            <div class="container">
                <div class="row align-items-center color_tertiary_bg">
                    <div class="col-sm-12 col-lg-3">
                  <?php
                    $careers_cta_image = get_exist_image_url("careers-cta", "financing-a-badge");
                    $careers_cta_image2x = get_exist_image_url("careers-cta", "financing-a-badge@2x");
                    $careers_cta_image3x = get_exist_image_url("careers-cta", "financing-a-badge@3x");

                    if (!empty($careers_cta_image) && @getimagesize($careers_cta_image) !== false) {
                        ?>
                        <img src="<?php echo esc_url($careers_cta_image); ?>" alt="career-logo" class="img-fluid" width="205" height="" srcset="<?php echo esc_url($careers_cta_image); ?> 1x, <?php echo esc_url($careers_cta_image2x); ?> 2x, <?php echo esc_url($careers_cta_image3x); ?> 3x">
                        <?php
                    } else {
                        ?>
                        <div class="hiring-icon-outer"><i class="icon-people-group4 text_125 sm_text_100 line_height_23"></i></div>
                        <?php
                    }
                    ?>
                                            </div>
                    <div class="col-sm-12 col-lg-6 text-center px-0">
                     <h6 class="color_quaternary d-block text-uppercase"><?php echo !empty($args["page_templates"]["homepage"]["we_are_hiring"]["subheading"]) ? $args["page_templates"]["homepage"]["we_are_hiring"]["subheading"] : ''; ?> </h6>
                     <h4 class="true_white d-lg-block   mb-0 text-uppercase"> <?php echo !empty($args["page_templates"]["homepage"]["we_are_hiring"]["heading"]) ? $args["page_templates"]["homepage"]["we_are_hiring"]["heading"] : ''; ?> </h4>

                                        </div>
                    <div class="col-sm-12 col-lg-3 text-center text-lg-end ps-lg-0">
                                                 <?php if (!empty($args["page_templates"]["homepage"]["we_are_hiring"]["button_text"])) { ?>
                        <a href="<?php echo esc_url(get_home_url() . $args["page_templates"]["homepage"]["we_are_hiring"]["button_link"]); ?>" class="btn btn-secondary mw-165">
                           <?php echo esc_html($args["page_templates"]["homepage"]["we_are_hiring"]["button_text"]); ?> <i class=" icon-circle-chevron-right2
"></i>
                        </a>
                    <?php } ?>
                                        </div>
                </div>
            </div>
        </div>
    </div>
