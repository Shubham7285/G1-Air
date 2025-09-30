<div class="d-block  about-content">
    <div class="container-fluid px-0">
        <div class="container">
            <div class="row">
				                <div class="col-lg-6 mt-lg-0 discover-content">
                <?php if (!empty($args["page_templates"]["about_us_page"]["seo_section"]["heading"])): ?>
        <h1><?php echo esc_html($args["page_templates"]["about_us_page"]["seo_section"]["heading"]); ?></h1>
    <?php endif; ?>
    <?php if (!empty($args["page_templates"]["about_us_page"]["seo_section"]["subheading"])): ?>
        <h2 class="text-lg-center text-start color_secondary"><?php echo esc_html($args["page_templates"]["about_us_page"]["seo_section"]["subheading"]); ?></h2>
    <?php endif; ?>
                            <div class="">
                            <?php if (!empty($args["page_templates"]["about_us_page"]["seo_section"]["before_read_more_content"])): ?>
        <?php echo esc_html($args["page_templates"]["about_us_page"]["seo_section"]["before_read_more_content"]); ?>
    <?php endif; ?>
                            </div>
            </div>
            <div class="col-lg-6 about-left-img">
            <?php
    $image_placeholder_image =
    	get_stylesheet_directory_uri() . "/img/about-page/about-img.webp";
    $image_placeholder_image2x =
    	get_stylesheet_directory_uri() . "/img/about-page/about-img@2x.webp";
    $image_placeholder_image3x =
    	get_stylesheet_directory_uri() . "/img/about-page/about-img@3x.webp";
    if (@getimagesize($image_placeholder_image) == false) {
    	$image_placeholder_image =
    		get_stylesheet_directory_uri() . "/img/about-page/about-img.webp";
    	$image_placeholder_image2x =
    		get_stylesheet_directory_uri() . "/img/about-page/about-img@2x.webp";
    	$image_placeholder_image3x =
    		get_stylesheet_directory_uri() . "/img/about-page/about-img@3x.webp";
    }
    $m_image_placeholder_image =
    	get_stylesheet_directory_uri() . "/img/about-page/m-about-img.webp";
    $m_image_placeholder_image2x =
    	get_stylesheet_directory_uri() . "/img/about-page/m-about-img@2x.webp";
    $m_image_placeholder_image3x =
    	get_stylesheet_directory_uri() . "/img/about-page/m-about-img@3x.webp";
    if (@getimagesize($m_image_placeholder_image) === false) {
    	$m_image_placeholder_image =
    		get_stylesheet_directory_uri() . "/img/about-page/about-img.webp";
    	$m_image_placeholder_image2x =
    		get_stylesheet_directory_uri() . "/img/about-page/about-img@2x.webp";
    	$m_image_placeholder_image3x =
    		get_stylesheet_directory_uri() . "/img/about-page/about-img@3x.webp";
    }
    ?>

               
<?php if (!empty($image_placeholder_image)): ?>
        <img src="<?php echo esc_url($image_placeholder_image); ?>" srcset="<?php echo esc_url($image_placeholder_image); ?> 1x, <?php echo esc_url($image_placeholder_image2x); ?> 2x, <?php echo esc_url($image_placeholder_image3x); ?> 3x" class="d-none d-lg-block w-100 img_cover" width="540" height="534" alt="About Page Image">
    <?php endif; ?>
    
    <?php if (!empty($m_image_placeholder_image)): ?>
        <img src="<?php echo esc_url($m_image_placeholder_image); ?>" srcset="<?php echo esc_url($m_image_placeholder_image); ?> 1x, <?php echo esc_url($m_image_placeholder_image2x); ?> 2x, <?php echo esc_url($m_image_placeholder_image3x); ?> 3x" class="d-block d-lg-none w-100 img_cover bc_h_215" alt="About Page Image">
    <?php endif; ?>
              </div>

        </div>
    </div>
</div>
                            </div>