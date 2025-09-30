<?php
$template_id = get_current_elementor_template_id();
if ($template_id == 41084) {
?>
<div class="d-block">
    <div class="container-fluid pt-5 pt-lg-2 text-lg-center text-start">
        <div class="container pt-lg-2 py-2">
            <div class="row align-items-center py-lg-2">
                <div class="col-lg-12 px-0 bc_homepage text-lg-center text-start">
                    <?php if (!empty($args["page_templates"]["history_page"]["seo_section"]["heading"])): ?>
                        <h1><?php echo $args["page_templates"]["history_page"]["seo_section"]["heading"]; ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["history_page"]["seo_section"]["subheading"])): ?>
                        <h2 class="pb-lg-5"><?php echo $args["page_templates"]["history_page"]["seo_section"]["subheading"]; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["history_page"]["seo_section"]["before_read_more_content"])): ?>
                        <p><?php echo $args["page_templates"]["history_page"]["seo_section"]["before_read_more_content"]; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["history_page"]["seo_section"]["after_read_more_content"])): ?>
                        <div class="collapse bg-transparent border-0" id="read_more">
                            <div class="card card-body bg-transparent border-0 p-0">
                                <p><?php echo $args["page_templates"]["history_page"]["seo_section"]["after_read_more_content"]; ?></p>
                            </div>
                        </div>
                        <?php echo do_shortcode('[bc-read-more id="read_more" background-color="" data-close-icon="icon-minus1" data-open-icon="icon-plus1"]'); ?>
                    <?php endif; ?>                
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}elseif($template_id == 39478 || $template_id == 41539 || $template_id == 40844 || $template_id == 62368) {
?>
<!--order-5 order-lg-5-->
<?php
$get_alt_text = RDS_ALT_DATA;
$alt = "";
if (is_array($get_alt_text)) {
    foreach ($get_alt_text as $value) {
        if (in_array("seo-section.webp", $value)) {
            $alt = 'alt="' . $value[3] . '"';
        }
    }
}
?>
    <!-- expert html start here -->
    <div class="d-block expert rpx_pt_lg_80 rpx_pb_lg_60 rpx_pt_40 rpx_pb_40 ">
        <div class="container-fluid text-start px-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12  bc_homepage seosection-bc text-md-left seotext-sm-center text-center">
                        <div class="sec-content-inner text-lg-center text-start">
                                                          <h1 class=" text-lg-center text-start"><?php echo !empty($args["page_templates"]["homepage"]["seo_section"]["heading"]) ? $args["page_templates"]["homepage"]["seo_section"]["heading"] : ''; ?></h1>
                        <h2 class="text-lg-center text-start"><?php echo !empty($args["page_templates"]["homepage"]["seo_section"]["subheading"]) ? $args["page_templates"]["homepage"]["seo_section"]["subheading"] : ''; ?></h2>
                        <p class="text-lg-center text-start">
                          <?php echo !empty($args["page_templates"]["homepage"]["seo_section"]["before_read_more_content"]) ? $args["page_templates"]["homepage"]["seo_section"]["before_read_more_content"] : ''; ?>
    
    </p>
							<?php if (!empty($args["page_templates"]["homepage"]["seo_section"]["after_read_more_content"])): ?>
							
                        <div class="collapse bg-transparent border-0" id="read_more">
                            <div class="bg-transparent border-0">
                                <div class="seotext-sm-start text-center">
                                <?php echo !empty($args["page_templates"]["homepage"]["seo_section"]["after_read_more_content"]) ? $args["page_templates"]["homepage"]["seo_section"]["after_read_more_content"] : ''; ?>    
</div>
                            </div>
                        </div>
                        <a class=" bc_toggle_btn bc_toggle_btn_closed bc_toggle_content mw-132 seotext-sm-start text-md-start mb-4 btn-transparent text-uppercase  d-inline-flex align-items-center no_hover_underline  read-more-btn button" data-open-icon="icon-plus1" data-close-icon="icon-minus1" href="#read_more" data-bs-toggle="collapse"> <span>read more&nbsp;</span> <i class="icon icon-plus1 bc_text_12 position-relative top-0-1 top-sm-0-1" aria-hidden="true"></i></a>
							
							 <?php //echo do_shortcode('[bc-read-more id="read_more" background-color="" data-close-icon="icon-minus1" data-open-icon="icon-plus1"]'); ?>
                    <?php endif; ?> 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}elseif($template_id == 40758) {
?>
    <!-- expert html start here -->
    <div class="d-block expert about-expert">
        <div class="container-fluid text-start px-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12  bc_homepage seosection-bc text-md-left seotext-sm-center text-center">
                        <div class="sec-content-inner  text-lg-center text-start">
                                                          <h1 class=" text-lg-center text-start"><?php echo !empty($args["page_templates"]["about_us_page"]["seo_section"]["heading"]) ? $args["page_templates"]["about_us_page"]["seo_section"]["heading"] : ''; ?></h1>
                        <h2 class=" text-lg-center text-start color_secondary"><?php echo !empty($args["page_templates"]["about_us_page"]["seo_section"]["subheading"]) ? $args["page_templates"]["about_us_page"]["seo_section"]["subheading"] : ''; ?></h2>
                        <p class="  text-lg-center text-start">
                          <?php echo !empty($args["page_templates"]["about_us_page"]["seo_section"]["before_read_more_content"]) ? $args["page_templates"]["about_us_page"]["seo_section"]["before_read_more_content"] : ''; ?>
    
    </p>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}elseif($template_id == 40930) {
?>
<div class="d-block">
    <div class="container-fluid pt-5 pt-lg-2 text-lg-center text-start">
        <div class="container pt-lg-2 py-2">
            <div class="row align-items-center py-lg-2">
                <div class="col-lg-12 px-0 bc_homepage text-lg-center text-start">
                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["heading"])): ?>
                        <h1><?php echo $args["page_templates"]["landing_page"]["seo_section"]["heading"]; ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["subheading"])): ?>
                        <h2 class="pb-lg-5"><?php echo $args["page_templates"]["landing_page"]["seo_section"]["subheading"]; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["before_read_more_content"])): ?>
                        <p><?php echo $args["page_templates"]["landing_page"]["seo_section"]["before_read_more_content"]; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["after_read_more_content"])): ?>
                        <div class="collapse bg-transparent border-0" id="read_more">
                            <div class="card card-body bg-transparent border-0 p-0">
                                <p><?php echo $args["page_templates"]["landing_page"]["seo_section"]["after_read_more_content"]; ?></p>
                            </div>
                        </div>
                        <?php echo do_shortcode('[bc-read-more id="read_more" background-color="" data-close-icon="icon-minus1" data-open-icon="icon-plus1"]'); ?>
                    <?php endif; ?>                
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}elseif ($template_id == 60786) {
?>
<div class="d-block">
    <div class="container-fluid pt-5 pt-lg-2 text-lg-center text-start">
        <div class="container pt-lg-2 py-2">
            <div class="row align-items-center py-lg-2">
                <div class="col-lg-12 px-0 bc_homepage text-lg-center text-start">
                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["heading"])): ?>
                        <h1><?php echo $args["page_templates"]["landing_page"]["seo_section"]["heading"]; ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["subheading"])): ?>
                        <h2 class="pb-lg-5"><?php echo $args["page_templates"]["landing_page"]["seo_section"]["subheading"]; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["before_read_more_content"])): ?>
                        <p><?php echo $args["page_templates"]["landing_page"]["seo_section"]["before_read_more_content"]; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section"]["after_read_more_content"])): ?>
                        <div class="collapse bg-transparent border-0" id="read_more">
                            <div class="card card-body bg-transparent border-0 p-0">
                                <p><?php echo $args["page_templates"]["landing_page"]["seo_section"]["after_read_more_content"]; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["landing_page"]["seo_section2"]["after_read_more_content"])): ?>
                        <?php echo do_shortcode('[bc-read-more id="read_more" background-color="" data-close-icon="icon-minus1" data-open-icon="icon-plus1"]'); ?>
                    <?php endif; ?>              
                </div>
            </div>
        </div>
    </div>
</div>

<?php
} else {
?>
<div class="d-block">
    <div class="container-fluid pt-5 pt-lg-2 text-lg-center text-start">
        <div class="container pt-lg-2 py-2">
            <div class="row align-items-center py-lg-2">
                <div class="col-lg-12 px-0 bc_homepage text-lg-center text-start">
                    <?php if (!empty($args["page_templates"]["homepage"]["seo_section"]["heading"])): ?>
                        <h1><?php echo $args["page_templates"]["homepage"]["seo_section"]["heading"]; ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["homepage"]["seo_section"]["subheading"])): ?>
                        <h2 class="pb-lg-5"><?php echo $args["page_templates"]["homepage"]["seo_section"]["subheading"]; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["homepage"]["seo_section"]["before_read_more_content"])): ?>
                        <p><?php echo $args["page_templates"]["homepage"]["seo_section"]["before_read_more_content"]; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($args["page_templates"]["homepage"]["seo_section"]["after_read_more_content"])): ?>
                        <div class="collapse bg-transparent border-0" id="read_more">
                            <div class="card card-body bg-transparent border-0 p-0">
                                <p><?php echo $args["page_templates"]["homepage"]["seo_section"]["after_read_more_content"]; ?></p>
                            </div>
                        </div>
                        <?php echo do_shortcode('[bc-read-more id="read_more" background-color="" data-close-icon="icon-minus1" data-open-icon="icon-plus1"]'); ?>
                    <?php endif; ?>                
                </div>
            </div>
        </div>
    </div>
                    </div>
<?php
}
?>
