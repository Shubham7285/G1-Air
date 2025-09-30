<?php
//exaple how to set image sizewise
// ['dektop', 'ipad', 'mobile']

$img1x = [
	get_exist_image_url("hero", "home-banner"),
	get_exist_image_url("hero", "home-banner"),
	get_exist_image_url("hero", "m-home-banner"),
];
$img2x = [
	get_exist_image_url("hero", "home-banner@2x"),
	get_exist_image_url("hero", "home-banner@2x"),
	get_exist_image_url("hero", "m-home-banner@2x"),
];
$img3x = [
	get_exist_image_url("hero", "home-banner@3x"),
	get_exist_image_url("hero", "home-banner@3x"),
	get_exist_image_url("hero", "m-home-banner@3x"),
];
$img1x = Implode(",", $img1x);
$img2x = Implode(",", $img2x);
$img3x = Implode(",", $img3x);

$heading_tag = isset($args["globals"]["hero"]["heading_tag"])
	? $args["globals"]["hero"]["heading_tag"]
	: "span";
$subheading_tag = isset($args["globals"]["hero"]["subheading_tag"])
	? $args["globals"]["hero"]["subheading_tag"]
	: "span";
?>
<?php echo do_shortcode(
	'[custom-bg-srcset class="home_banner" img1x="' .
		$img1x .
		'" img2x="' .
		$img2x .
		'" img3x="' .
		$img3x .
		'" size1x="cover" size2x="cover" size3x="cover"]'
); ?>

<div class="container-fluid home_banner px-0 rpx_pt_lg_80 rpx_pb_lg_125 rpx_py_40">
        <div class="position-relative"> 
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="banner-content">
						<?php if (!empty($args["globals"]["hero"]["heading"])) { ?>
                        <span class="display2 true_white"><?php echo $args["globals"]["hero"]["heading"]; ?></span>
						<?php } ?>
                    	<?php if (!empty($args["globals"]["hero"]["subheading"])) { ?>
                         <span class="display1 true_white"><?php echo $args["globals"]["hero"]["subheading"]; ?></span>
						 <?php } ?>
						  <?php if (!empty($args["globals"]["hero"]["footer_text"])) { ?>
                         <span class="display2 true_white pb-0"><?php echo $args["globals"]["hero"]["footer_text"]; ?></span>
                          <?php } ?>
						  <?php if (!empty($args["globals"]["hero"]["button_link"]) && !empty($args["globals"]["hero"]["button_text"])) { ?>
                            <div class="w-100 text-lg-start text-center">
                             <a href="<?php echo get_home_url() . $args["globals"]["hero"]["button_link"]; ?>" class="btn btn-secondary  mw-250 mh-50"><i class="icon-calendar2"></i><?php echo $args["globals"]["hero"]["button_text"]; ?><i class=" icon-circle-chevron-right2
                            "></i></a>
                            </div>
							 <?php } ?>
                             </div>
                     </div>
                     <div class="col-md-7">
                           <div class="desktop-form-b home-hero-banner-form d-lg-block d-none">
                        <div class="hero_banner_form_background position-relative mw-lg-625  mh-415 ms-auto">
                            <div class=" mx-auto">
                             <h3 class="text-center true_white">
                                <?php echo !empty($args["globals"]["hero"]["form_heading"]) ? $args["globals"]["hero"]["form_heading"] : ''; ?>                        </h3>
                                <div class="banner-form">
							<?php
                            $form_id = $args["globals"]["hero"]["desktop_gravity_form_id"];
                            if (!empty($form_id)) {
                                echo do_shortcode("[gravityforms id=" . $form_id . " ajax=true]");
                            }
                            ?>
                                </div>
                            </div>
                        </div>
                    </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
