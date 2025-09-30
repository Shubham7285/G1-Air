<div class="d-block">
    <?php
    // Example of setting image size-wise
    // ['desktop', 'ipad', 'mobile']

    $img1x = [
        get_exist_image_url('service-area', 'service-map'),
        get_exist_image_url('service-area', 'service-map'),
        get_exist_image_url('service-area', 'm-service-map')
    ];

    $img2x = [
        get_exist_image_url('service-area', 'service-map@2x'),
        get_exist_image_url('service-area', 'service-map@2x'),
        get_exist_image_url('service-area', 'm-service-map@2x')
    ];

    $img3x = [
        get_exist_image_url('service-area', 'service-map@3x'),
        get_exist_image_url('service-area', 'service-map@3x'),
        get_exist_image_url('service-area', 'm-service-map@3x')
    ];

    $img1x = implode(',', $img1x);
    $img2x = implode(',', $img2x);
    $img3x = implode(',', $img3x);

    echo do_shortcode('[custom-bg-srcset class="proudly-serving-a " img1x="'.$img1x.'" img2x="'.$img2x.'" img3x="'.$img3x.'" size1x="cover" size2x="cover" size3x="cover"]');
    ?>

    <div class="container-fluid proudly_serving_area proudly-serving-a px-0">
        <div class="container map-content-area-outer ">
            <div class="row align-items-center ">
                <div class="col-lg-6 col-md-5 text-center text-sm-start pe-lg-1">
                    <div class="d-block map-content-area">
                        
                        <?php
                        $heading = $args['globals']['service_area']['heading'];
                        if (!empty($heading)) {
                                echo '<h4 class="text-center">'.$heading.'</h5>';
                           
                        }

                        $subheading = $args['globals']['service_area']['subheading'];
                        if (!empty($subheading)) {
                                echo '<h4 class="p-0 border-bottom-white text-uppercase h4-alt mb-0">'.$subheading.'</h4>';
                        }

                        $description_html_allowed = $args['globals']['service_area']['description_html_allowed'];
                        if (!empty($description_html_allowed)) {
                                echo '<p class="text-center ">'.$description_html_allowed.'</p>';
                        }

                        if (!empty($args['globals']['service_area']['button_link']) && !empty($args['globals']['service_area']['button_text'])) {
                            echo '<div class="view-more-btn text-center">';
                            echo '<a href="'.get_home_url().$args['globals']['service_area']['button_link'].'" class="btn btn-secondary mw-165"> <span>';
                            echo $args['globals']['service_area']['button_text'];
                            echo ' </span><i class=" icon-circle-chevron-right2
 ms-2 bc_text_18 bc_line_height_18 position-relative"></i>';
                            echo '</a></div>';
                        }
                        ?>

                    </div>
                </div>
				
				<div class="col-lg-6">
					
					</div>
			</div>
            </div>
        </div>
    </div>
</div>
