<?php 
$widget_id = 32453;
$category_name = $args['category_taxonomy'];
if (empty($category_name) || in_array('all', $category_name)) {
    $testimonial = array(
        'post_type'      => 'bc_testimonials',
        'posts_per_page' => 5,
        'order'          => 'DESC',
        'meta_query'     => array(
            'relation' => 'OR',
            array(
                'key'     => 'testimonial_landing_page',
                'compare' => 'NOT EXISTS', // Exclude posts where the 'testimonial_landing_page' meta key doesn't exist
            ),
            array(
                'key'     => 'testimonial_landing_page',
                'value'   => '0', // Exclude posts where 'testimonial_landing_page' is set to 1
                'compare' => '=', 
                'type'    => 'NUMERIC',
            ),
        ),
        'post_status'    => 'publish',
        
    );
} else {
    $testimonial = array(
        'post_type'      => 'bc_testimonials',
        'posts_per_page' => 5,
        'order'          => 'DESC',
        'meta_query'     => array(
            'relation' => 'OR',
            array(
                'key'     => 'testimonial_landing_page',
                'compare' => 'NOT EXISTS', // Exclude posts where the 'testimonial_landing_page' meta key doesn't exist
            ),
            array(
                'key'     => 'testimonial_landing_page',
                'value'   => '0', // Exclude posts where 'testimonial_landing_page' is set to 1
                'compare' => '=', 
                'type'    => 'NUMERIC',
            ),
        ),
        'post_status'    => 'publish',
        'tax_query' => [
            'relation' => 'OR', 
            [
                'taxonomy' => 'bc_testimonial_category',
                'field'    => 'name',
                'terms' => $category_name,
                'operator' => 'IN', 
            ],
        ],
    );
}

$query = new WP_Query($testimonial);
if ($query->have_posts()) {

    $heading_tag = isset($args["globals"]["testimonial"]["heading_tag"]) ? $args["globals"]["testimonial"]["heading_tag"] : "h5";
    $subheading_tag = isset($args["globals"]["testimonial"]["subheading_tag"]) ? $args["globals"]["testimonial"]["subheading_tag"] : "h4";

    
$img1x = [
    get_exist_image_url('testimonial', 'testimonials-bg'),
    get_exist_image_url('testimonial', 'testimonials-bg'),
    get_exist_image_url('testimonial', 'm-testimonials-bg')
];

$img2x = [
    get_exist_image_url('testimonial', 'testimonials-bg@2x'),
    get_exist_image_url('testimonial', 'testimonials-bg@2x'),
    get_exist_image_url('testimonial', 'm-testimonials-bg@2x')
];

$img3x = [
    get_exist_image_url('testimonial', 'testimonials-bg@3x'),
    get_exist_image_url('testimonial', 'testimonials-bg@3x'),
    get_exist_image_url('testimonial', 'm-testimonials-bg@3x')
];

$img1x = implode(',', array_filter($img1x));
$img2x = implode(',', array_filter($img2x));
$img3x = implode(',', array_filter($img3x));   
?>
<?php echo do_shortcode('[custom-bg-srcset class="home-reviews" img1x="'.$img1x.'" img2x="'.$img2x.'" img3x="'.$img3x.'" size1x="cover" size2x="cover" size3x="cover"]'); ?>
    
    <!-- use this order class order-7 order-lg-7-->
    <div class="home-reviews rpx_py_lg_80 rpx_py_40 color_quaternary_bg">
        <div class="container-fluid px-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="review-img">
                        <img src="<?php echo get_exist_image_url("testimonial", "testimonials-img"); ?>" 
                            srcset="<?php echo get_exist_image_url("testimonial", "testimonials-img"); ?> 1x, 
                                    <?php echo get_exist_image_url("testimonial", "testimonials-img@2x"); ?> 2x, 
                                    <?php echo get_exist_image_url("testimonial", "testimonials-img@3x"); ?> 3x" 
                            alt="Review Image" width="" height="" 
                            class="img-fluid d-lg-block d-none">
                            <img src="<?php echo get_exist_image_url("testimonial", "m-testimonials-img"); ?>" 
                            srcset="<?php echo get_exist_image_url("testimonial", "m-testimonials-img"); ?> 1x, 
                                    <?php echo get_exist_image_url("testimonial", "m-testimonials-img@2x"); ?> 2x, 
                                    <?php echo get_exist_image_url("testimonial", "m-testimonials-img@3x"); ?> 3x" 
                            alt="Review Image" width="" height="" 
                            class="img-fluid  d-lg-none d-block ">
                    </div>
</div>
                    <div class="col-lg-6 reviews-content ">
                        <div class="slide-icon align-items-center pb-2 justify-content-center d-flex d-none">
                            <i class="icon-star1 sm_text_15 sm_line_height_15 text_25 line_height_42 stars_color mx-1"></i>
                            <i class="icon-star1 sm_text_15 sm_line_height_15 text_25 line_height_42 stars_color mx-1"></i>
                            <i class="icon-star1 sm_text_15 sm_line_height_15 text_25 line_height_42 stars_color mx-1"></i>
                            <i class="icon-star1 sm_text_15 sm_line_height_15 text_25 line_height_42 stars_color mx-1"></i>
                            <i class="icon-star1 sm_text_15 sm_line_height_15 text_25 line_height_42 stars_color mx-1"></i>
                        </div>
                        <?php if (!empty($args["globals"]["testimonial"]["heading"])): ?>
                            <<?php echo $heading_tag ?> class="text-start"><?php echo $args["globals"]["testimonial"]["heading"]; ?></<?php echo $heading_tag ?>>
                        <?php endif; ?>
                        <?php if (!empty($args["globals"]["testimonial"]["subheading"])): ?>
                            <<?php echo $subheading_tag ?> class="rpx_mb_30 text-start 
                            "><?php echo $args["globals"]["testimonial"]["subheading"]; ?></<?php echo $subheading_tag ?>>
                        <?php endif; ?>
                        <div class="slide-icon d-flex">
                            <i class="  icon-quote-left1
 text_45 line_height_45 me-3 sm_text_45 color_primary "></i>
                            <i class="icon-star1 text_15 line_height_42 stars_color me-1"></i>
                            <i class="icon-star1 text_15 line_height_42 stars_color me-1"></i>
                            <i class="icon-star1 text_15 line_height_42 stars_color me-1"></i>
                            <i class="icon-star1 text_15 line_height_42 stars_color me-1"></i>
                            <i class="icon-star1 text_15 line_height_42 stars_color me-1"></i>
                        </div>
                        <div class="swiper review-swiper-c-<?php echo $widget_id ?> pt-1 text-start">
                            <div class="swiper-wrapper">
                                <?php while ($query->have_posts()): $query->the_post();
                                    $name = get_post_meta(get_the_ID(), "testimonial_name", true);
                                    $city = get_post_meta(get_the_ID(), "testimonial_city", true);
                                    $state = get_post_meta(get_the_ID(), "testimonial_state", true);
                                    $message = get_post_meta(get_the_ID(), "testimonial_message", true);
                                    ?>
                                    <div class="swiper-slide text-lg-start text-center">
                                        <?php if (!empty($message)): ?>
                                            <p class="text-start"><?php
                                                $my_content = wp_strip_all_tags($message);
                                                echo wp_trim_words($my_content, 46);
                                            ?></p>
                                        <?php endif; ?>
                                        <?php if (!empty($name) || !empty($city) || !empty($state)): ?>
                                            <div class="d-lg-block d-none">
                                                <?php if (!empty($name)): ?>
                                                    <strong class="text-start d-block text-capitalize line_height_28">- <?php echo $name; ?></strong>
                                                <?php endif; ?>
                                                <p class="text-start mb-0 position-relative line_height_31_5 text_18 line_height_30">
                                                    <?php 
                                                    if (!empty($city) && !empty($state)) {
                                                        echo $city . ", " . $state;
                                                    } elseif (!empty($city)) {
                                                        echo $city;
                                                    } elseif (!empty($state)) {
                                                        echo $state;
                                                    } 
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="d-lg-none d-block">
                                                <?php if (!empty($name)): ?>
                                                    <strong class="text-start d-block  text-capitalize   ">- <?php echo $name; ?></strong>
                                                <?php endif; ?>
                                                <p class="text-start  mb-0 position-relative top_n4 text_normal text_14 line_height_30">
                                                    <?php 
                                                    if (!empty($city) && !empty($state)) {
                                                        echo $city . ", " . $state;
                                                    } elseif (!empty($city)) {
                                                        echo $city;
                                                    } elseif (!empty($state)) {
                                                        echo $state;
                                                    } 
                                                    ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div data-dark-color="color_primary" class="m-0 p-0 review-pagination-c-<?php echo $widget_id ?> apply-conditional-color swiper-pagination position-relative pagination-variation-a text-lg-start text-center" id="rds-testimonial-ew-pg-c-<?php echo $widget_id ?> "></div>
                        <?php if (!empty($args["globals"]["testimonial"]["button_text"])): ?>
                            <div class="text-lg-start text-center  read-more-rev-btn">
                                <a href="<?php echo get_home_url() . $args["globals"]["testimonial"]["button_link"]; ?>" class="btn btn-secondary mw-250 mh-50 " target="<?php echo isset($args["globals"]["testimonial"]["is_external"]) ? $args["globals"]["testimonial"]["is_external"] : false; ?>"><?php echo $args["globals"]["testimonial"]["button_text"]; ?><i class=" icon-circle-chevron-right2
"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <script type="text/javascript">
        jQuery(document).ready(function () {
            var swiper = new Swiper(".review-swiper-c-<?php echo $widget_id ?>", {
                spaceBetween: 10,
                slidesPerView: 1,
                loop: true,
                autoplay: {
                    delay: 8000,
                    disableOnInteraction: true,
                },
                pagination: {
                    el: ".review-pagination-c-<?php echo $widget_id ?>",
                    clickable: true
                },
            });
        })
    </script>
    <?php
}
?>