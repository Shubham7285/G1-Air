<?php
$Ids = null;
$args = [
    "post_type" => "post",
    "posts_per_page" => 3,
    "order" => "DESC",
    "post_status" => "publish",
];

if (isset($atts["id"])) {
    $Ids = explode(",", $atts["id"]);
    $args["post__in"] = $Ids;
}

$query = new WP_Query($args);
?>
<div class="order-lg-2 order-2 rpx_py_lg_80 rpx_pt_40 rpx-pb-0  recent_post  color_quaternary_bg">
    <div class="container">
        <div class="">
            <div class="row content_ml_lg_n15 content_ml_lg_n15">
                <div class="col-lg-12 content_px_lg_15">
                    <h4 class="rpx_mb_lg_48 rpx_mb_20">Recent Posts</h4>
                </div>
                <?php if ($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <div class="col-lg-4 col-md-4 rpx_mb_lg_0 rpx_mb_30">
							<a href="<?php echo esc_url(get_permalink()); ?>"  class="no_hover_underline no-underline card border-0 rounded-0 p-0 position-relative blogs h-100 bg-transparent">
							<div class="blog_img_container rpx_mb_30 ">
										<img src="<?php echo esc_url(post_content_first_image()); ?>" class="blog_img img-fluid w-100" alt="<?php echo esc_attr(get_the_title()); ?>" width="350" height="200">
									</div>
									<div class="card-body px-0 py-0">
										<h5 class="rpx_mb_15 true_black"><?php echo esc_html(get_the_title()); ?></h5>
									</div>
									  <div class="card-footer bg-transparent border-0 p-0">
									  <span class="no_hover_underline w-100 d-inline-flex align-items-center link_text_btn blog_read_more_text_color">
											<div class="continue blog_read_more_text_color"><span class="d-inline-block align-middle ">Keep Reading</span><i class="align-middle icon-chevron-right2 ms-2 position-relative "></i></div>
										</span>
									   </div>
								</a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>