<?php

// Example: how to set image size-wise
//['desktop', 'ipad', 'mobile']

$img1x = [
    get_exist_image_url('request-service', 'full-width-contact'),
    get_exist_image_url('request-service', 'full-width-contact'),
    get_exist_image_url('request-service', 'm-full-width-contact')
];

$img2x = [
    get_exist_image_url('request-service', 'full-width-contact@2x'),
    get_exist_image_url('request-service', 'full-width-contact@2x'),
    get_exist_image_url('request-service', 'm-full-width-contact@2x')
];

$img3x = [
    get_exist_image_url('request-service', 'full-width-contact@3x'),
    get_exist_image_url('request-service', 'full-width-contact@3x'),
    get_exist_image_url('request-service', 'm-full-width-contact@3x')
];

$img1x = implode(',', array_filter($img1x));
$img2x = implode(',', array_filter($img2x));
$img3x = implode(',', array_filter($img3x));    
?>

<?php if ($img1x || $img2x || $img3x) : ?>
<?php echo do_shortcode('[custom-bg-srcset class="home-request-service" img1x="'.$img1x.'" img2x="'.$img2x.'" img3x="'.$img3x.'" size1x="cover" size2x="cover" size3x="cover"]'); ?>
<?php endif; ?>

<div class=" d-lg-block home-request-service rpx_py_lg_80 rpx_py_30">
    <div class="container-fluid  text-center px-0" id="request_service">
        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-lg-12  elementor-requestformA">
                    <div class="banner-form-outer">
                        <?php
                        if (!empty($args["globals"]["request_service"]["heading"])) {
                        ?>
                            <h3 class="h3-alt rpx_mb_25 "><?php echo $args["globals"]["request_service"]["heading"]; ?></h3>
                        <?php
                        }
                        ?>
                        
                        <div class="banner-form">
                            <?php
                            if (!empty($args["globals"]["request_service"]["gravity_form_id"])) {
                                $form_id = $args["globals"]["request_service"]["gravity_form_id"];
                                echo do_shortcode("[gravityforms id=" . esc_attr($form_id) . " ajax=true]");
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
