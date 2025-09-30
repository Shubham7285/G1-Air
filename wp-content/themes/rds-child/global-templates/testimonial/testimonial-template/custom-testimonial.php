<?php
$get_rds_template_data_array = RDS_TEMPLATE_DATA;
$paged = get_query_var("paged") ? get_query_var("paged") : -1;
$category_name = $args["category_taxonomy"];
if (empty($category_name) || in_array("all", $category_name)) {
    query_posts([
        "post_type" => "bc_testimonials",
        "posts_per_page" => 4,
        "paged" => $paged,
        "order" => "DESC",
        "post_status" => "publish",
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
    ]);
} else {
    query_posts([
        "post_type" => "bc_testimonials",
        "posts_per_page" => 4,
        "paged" => $paged,
        "order" => "DESC",
        "post_status" => "publish",
        "tax_query" => [
            "relation" => "AND", // Match both category and landing page criteria
            [
                "taxonomy" => "bc_testimonial_category",
                "field" => "name",
                "terms" => $category_name,
                "operator" => "IN",
            ],
        ],
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
    ]);
}

?>
<div class="w-100 d-block custom-review rpx_py_lg_80 rpx_py_40 ">
<div class="d-flex flex-column">
<div class="d-block order-1 order-lg-1">
<div class="container-fluid px-0">
    <div class="container subpage_full_content review_page_content ">
        <div class="row ">
            <div class="col-12">
            <h1 class="text-uppercase"><?php echo get_the_title(); ?></h1>
            <h2 class="text-uppercase rpx_pb_15 mb-0 rpx_pb_lg_45 rpx_pb_25 "><?php echo !empty($args["page_templates"]["testimonial_page"]["subheading"]) ? $args["page_templates"]["testimonial_page"]["subheading"] : ''; ?></h2>
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php
                        $message = get_post_meta(get_the_ID(), "testimonial_message", true);
                        $name = get_post_meta(get_the_ID(), "testimonial_name", true);
                        $heading = get_post_meta(get_the_ID(), "testimonial_heading", true);
                        $city = get_post_meta(get_the_ID(), "testimonial_city", true);
                        $state = get_post_meta(get_the_ID(), "testimonial_state", true);
                        ?>
                      <div class=" bg-white border-top-primary  text-center review-outer rpx_pb_lg_50 rpx_pb_25">
                        <div class="slide-icon d-flex justify-content-start mb-0 rpx_pb_30 ">
                            <i class=" icon-quote-left1
 text_45 line_height_45 me-3 sm_text_45 color_primary "></i>
                                <i class="icon-star1 stars_color text_15 line_height_15 me-1 mt-1"></i>
                                <i class="icon-star1 stars_color text_15 line_height_15 me-1 mt-1"></i>
                                <i class="icon-star1 stars_color text_15 line_height_15 me-1 mt-1"></i>
                                <i class="icon-star1 stars_color text_15 line_height_15 me-1 mt-1"></i>
                                <i class="icon-star1 stars_color text_15 line_height_15 me-0 mt-1"></i>
                            </div>
                            <?php if (!empty($message)): ?>
                               <div class="mb-0 review-content text-start rpx_pb_15 "><?php echo $message; ?></div>
                            <?php endif; ?>
                            
                            <?php if (!empty($name)): ?>
                                <strong class="d-block text_18 line_height_31 text_bold text-start"><?php echo esc_html($name); ?></strong>
                            <?php endif; ?>
                            <p class="mb-0">
                                <strong class="d-block text_18 line_height_31 text_bold">
                                    <?php 
                                    $location = '';
                                    if (!empty($city)) {
                                        $location .= esc_html($city);
                                    }
                                    if (!empty($state)) {
                                        if (!empty($location)) {
                                            $location .= ', ';
                                        }
                                        $location .= esc_html($state);
                                    }
                                    echo $location;
                                    ?>
                                </strong>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <?php understrap_pagination([
                            "prev_text" => '<i class="icon-angles-left4"></i>',
                            "next_text" => '<i class="icon-angles-right4"></i>',
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php wp_reset_query(); // Reset the custom query
?>
