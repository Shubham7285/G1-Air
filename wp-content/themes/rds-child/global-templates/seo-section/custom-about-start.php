<div class="d-block  about-content about-content-start rpx_py_lg_80 rpx_py_40">
    <div class="container-fluid px-0">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 about-left-content">
                <div class="about-left-content-inner">
           <?php if (!empty($args["page_templates"]["about_us_page"]["seo_section"]["heading"])): ?>
        <h1 class="text-start rpx_mb_15"><?php echo esc_html($args["page_templates"]["about_us_page"]["seo_section"]["heading"]); ?></h1>
    <?php endif; ?>
    <?php if (!empty($args["page_templates"]["about_us_page"]["seo_section"]["subheading"])): ?>
        <h2 class="text-start mb-0"><?php echo esc_html($args["page_templates"]["about_us_page"]["seo_section"]["subheading"]); ?></h2>
    <?php endif; ?>
              </div>
              </div>

              				                <div class="col-lg-8 mt-lg-0 about-right-content">
               
                            <div class="">
                            <p class="seotext-sm-start mb-0"><?php echo !empty($args["page_templates"]["about_us_page"]["seo_section"]["before_read_more_content"]) ? $args["page_templates"]["about_us_page"]["seo_section"]["before_read_more_content"] : ''; ?></p>
                    <div class="collapse bg-transparent border-0" id="read_more">
                        <div class="bg-transparent border-0">
                            <p class="seotext-sm-start"><?php echo !empty($args["page_templates"]["about_us_page"]["seo_section"]["after_read_more_content"]) ? $args["page_templates"]["about_us_page"]["seo_section"]["after_read_more_content"] : ''; ?></p>
                        </div>
                    </div>
                    <?php
                    if (!empty($args["page_templates"]["about_us_page"]["seo_section"]["after_read_more_content"])) {
                        echo do_shortcode('[bc-read-more id="read_more" background-color="" data-close-icon="icon-minus1" data-open-icon="icon-plus1"]');
                    }
                    ?>
                            </div>
            </div>

        </div>
    </div>
</div>
                            </div>