<?php
// Check if WP Job Board is enabled
if (!empty($args["page_templates"]["career_page"]["position"]["wp_job_board"]) && $args["page_templates"]["career_page"]["position"]["wp_job_board"] == true) { ?>
    <div class="container-fluid" id="open_position">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb-0 pb-4"><?php echo !empty($args["page_templates"]["career_page"]["position"]["heading"]) ? esc_html($args["page_templates"]["career_page"]["position"]["heading"]) : ''; ?></h4>
                    <?php echo do_shortcode("[wpjb_jobs_list]"); ?>
                </div>
            </div>
        </div>
    </div>
<?php } else { 
    $team_args = [
        "post_type" => "bc_position",
        "posts_per_page" => -1,
        "order" => "DESC",
        "post_status" => "publish",
    ];
    $query = new WP_Query($team_args);
    
    ?>
    <div class="container-fluid px-0 rpx_py_40 rpx_py_lg_80" id="open_position">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="rpx_mb_40 true_black"><?php echo !empty($args["page_templates"]["career_page"]["position"]["heading"]) ? esc_html($args["page_templates"]["career_page"]["position"]["heading"]) : ''; ?></h4>
                </div>
	<div class="col-12">
                <div id="career_services_swiper" class="swiper swiper-container">
                    <div class="swiper-wrapper"> 
                    
                        <?php if ($query->have_posts()):
                            while ($query->have_posts()): $query->the_post();
                                $team_position = get_post_meta(get_the_ID(), "team_position", true);
                                $team_custom_content = get_post_meta(get_the_ID(), "team_custom_content", true);
                        ?>
                            <div class="swiper-slide color_quaternary_bg rpx_p_30 d-flex gap_25 flex-column align-items-start">
                                    <div class="">
									<h6 class="position_title rpx_mb_10 text-black"><?php the_title(); ?></h6>
                                    <p class="text_bold mb-0 text-black rpx_pb_25"><?php echo !empty($team_position) ? esc_html($team_position) : ''; ?></p></div>
                                    <p class="h-auto rpx_mb_30 text-black"><?php echo !empty($team_custom_content) ? wp_trim_words($team_custom_content, 25, "...") : wp_trim_words(get_the_content(), 25, "..."); ?></p>
                                    <a href="<?php echo get_home_url(); ?>/apply-now/" class="btn btn-secondary">
                                        Apply Now 
                                       <i class=" icon-circle-chevron-right2
                            "></i>
                                    </a>
                            </div>
                            <?php
                            endwhile;
                            wp_reset_postdata(); // Use wp_reset_postdata() instead of wp_reset_query()
                        endif; ?>
                        
                    </div>
                    <div class="swiper-pagination swiper-position-pagination"></div>
                </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

    <script>
    // Job Application js
    function viewPostionButtonClick(attr) {
        var jobTitle = jQuery(attr).siblings('.position_title').text();
        console.log(jobTitle);
        jQuery(".job-title").find('input:text').val(jobTitle);
    }

    jQuery(document).ready(function () {
        <?php if (isset($query) && $query): ?>
            var CountSlider = "<?php echo $query->found_posts; ?>";
            var loop = false;
            if (CountSlider > 3) {
                loop = true;
            }
            if (CountSlider < 3) {
                jQuery(".swiper-wrapper").addClass("justify-content-center");
            }
        <?php else: ?>
            var CountSlider = 0; // Or any default value you want
        <?php endif; ?>

        var swiper = new Swiper("#career_services_swiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                enabled: true,
                delay: 8000,
				disableOnInteraction: true
            },
            pagination: {
                el: ".swiper-position-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 31,
                },
            },
        });
    });
</script>
