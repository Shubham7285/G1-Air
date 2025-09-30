<?php
$get_alt_text = RDS_ALT_DATA;
$header_logo_alt = "";
$header_mobile_logo_alt = "";
$header_mobile_cta_alt = "";
if (is_array($get_alt_text)) {
    foreach ($get_alt_text as $value) {
        if (is_array($value) && in_array("header-logo.webp", $value)) {
            $header_logo_alt = 'alt="' . $value[3] . '"';
        }

        if (is_array($value) && in_array("m-header-logo.webp", $value)) {
            $header_mobile_logo_alt = 'alt="' . $value[3] . '"';
        }

        if (is_array($value) && in_array("m-header-logo.webp", $value)) {
            $header_mobile_cta_alt = 'alt="' . $value[3] . '"';
        }
    }
}
$announcement_class = "d-lg-block";
$template = basename(get_page_template());
if (
	$template == "rds-landing.php" &&
	!$args["page_templates"]["landing_page"]["announcement_and_nav_toggle"]
) {
	$announcement_class = "d-none";
}

// $phoneNumber = preg_replace("/[^0-9]/", "", $args['site_info']['phone']);
// $formatedPhone = "(".substr($phoneNumber, 0, 3).") ".substr($phoneNumber, 3, 3)."-".substr($phoneNumber, 6, 4);
// $phoneNum = $args['site_info']['phone'];
// $phoneNumber = preg_replace('/\D/', '', $phoneNum);
// $formatedPhone = substr($phoneNumber, 0, 6) . '-' . substr($phoneNumber, 6);
?>
        <!-- Header Deafult Starts -->
        <div class="container-fluid d-none d-lg-block hide-on-touch site_header true_black_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-12 mr-0 align-self-center pe-0">
                        <a href="<?php echo get_home_url(); ?>" class="d-inline-block">
                        <img src="<?php echo get_exist_image_url(
                        	"header",
                        	"header-logo"
                        ); ?>" srcset="<?php echo get_exist_image_url(
	"header",
	"header-logo"
); ?> 1x, <?php echo get_exist_image_url(
 	"header",
 	"header-logo@2x"
 ); ?> 2x, <?php echo get_exist_image_url(
 	"header",
 	"header-logo@3x"
 ); ?> 3x" <?php echo $header_logo_alt; ?> class="branding_logo img-fluid w-auto">
                        </a>
                    </div>
                    <div class="col-lg-9 ps-0 text-end">
                        <div class="d-lg-flex align-items-center justify-content-end font_default header_call_box">
                            <span class="px-2 py-2 me-2 mb-0 call_today">
                            <i class=" icon-phone   text_24 line_height_24 color_primary "></i> <span class="true_white"><?php echo !empty( $args["globals"]["header"]["call_text"] ) ?  $args["globals"]["header"]["call_text"] : '';?></span><a href="tel: <?php
                            echo !empty( $args["site_info"]["country_code"] ) ?  $args["site_info"]["country_code"] : '';
                            //echo $args["site_info"]["country_code"];
                            echo !empty( $args["site_info"]["phone"] ) ?  $args["site_info"]["phone"] : '';
 //echo $args["site_info"]["phone"];
 ?>" class=" phone_number">
                                    <?php
                                    echo !empty( $args["site_info"]["country_code"] ) ?  $args["site_info"]["country_code"] : '';
                                    echo !empty( $args["site_info"]["phone"] ) ?  $args["site_info"]["phone"] : '';
                                    ?></a> 
                            </span>
                                                        <?php if (!empty( $args["globals"]["desktop_schedule_online_button"]["enabled"] )                                                        	
                                                        ) {
                                                        	if (
                                                        		$args["globals"]["desktop_schedule_online_button"]["type"] !=
                                                        		"url"
                                                        	) { ?>
                                <span id="schedule_online_button_desktop" class="btn btn-primary mw-250 mh-50 " ><i class="me-0 <?php 
                                echo !empty( $args["globals"]["desktop_schedule_online_button"]["icon_class"] ) ?  $args["globals"]["desktop_schedule_online_button"]["icon_class"] : '';
                                //echo $args["globals"]["desktop_schedule_online_button"]["icon_class"]; ?>"></i><?php 
                                echo !empty( $args["globals"]["desktop_schedule_online_button"]["label"] ) ?  $args["globals"]["desktop_schedule_online_button"]["label"] : '';
                               // echo $args["globals"]["desktop_schedule_online_button"]["label"]; ?><i class=" icon-circle-chevron-right2
"></i></span>
                            <?php } else { ?>
                                <a  class="btn btn-primary mw-250 mh-50 "  href="<?php echo get_home_url() .
                                	(!empty($args["globals"]["desktop_schedule_online_button"]["url"]) ? $args["globals"]["desktop_schedule_online_button"]["url"] : ''); ?>"><?php  
                                    echo !empty( $args["globals"]["desktop_schedule_online_button"]["label"] ) ?  $args["globals"]["desktop_schedule_online_button"]["label"] : '';?><i class=" icon-circle-chevron-right2
                            "></i></a>
                            <?php }
                                                        } ?>                       
                        </div>
                        <div class="desktop-menus">
                        <!-- Desktop Navigations Starts -->
                        <?php get_template_part(
                        	"global-templates/nav/desktop/a"
                        ); ?>
                        <!-- Desktop Navigations Ends -->
                    </div>
				</div>
                </div>
            </div>
        </div>
        <!-- Header Deafult Ends -->
        <!-- Mobile Header Starts -->
        <div class="container-fluid ui_kit_mobile_header mobile_header_type_A d-lg-none show-on-touch px-0">
            <div class="container-fluid">
                <div class="row row-eq-height no-gutters align-items-center true_black_bg">
                    <div class="col-3 ps-0 text-start  align-self-center">
                        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="toggle-menu-icon true_black_bg h-100 navbar-toggler d-inline-flex align-items-center rounded-0 <?php echo $announcement_class ?>" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                            <i class="icon-bars2 true_white navbar-toggler-icon icon-bars2 text_24 line_height_24"></i>
                        </button>
                    </div>
                    <div class="col-6 text-center px-0">
                        <a href="<?php echo get_home_url(); ?>" class="d-block">
                        <img src="<?php echo get_exist_image_url(
                        	"header",
                        	"m-header-logo"
                        ); ?>" srcset="<?php echo get_exist_image_url(
	"header",
	"m-header-logo"
); ?> 1x, <?php echo get_exist_image_url(
 	"header",
 	"m-header-logo@2x"
 ); ?> 2x, <?php echo get_exist_image_url(
 	"header",
 	"m-header-logo@3x"
 ); ?> 3x"  width="" height="" style="max-width: 199px;     margin-left: -12px !important;" class="img-fluid w-atuo" <?php echo $header_mobile_logo_alt; ?> >
                        </a>
                    </div>
                    <div class="col-3 text-center pe-0">
                        <div class="d-flex h-100 phone-icon no_hover_underline ">
                            <a href="tel:<?php echo !empty( $args["site_info"]["country_code"] ) ?  $args["site_info"]["country_code"] : '';
                             echo !empty( $args["site_info"]["phone"] ) ?  $args["site_info"]["phone"] : '';
                            ?>" class="d-flex align-items-center justify-content-center w-100 no_hover_underline color_primary_bg">
                                <i class="true_white icon-phone-flip  text_24 line_height_24  "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade mobile_popup_form_background_color  border-0 " id="cta-a" tabindex="-1" role="dialog" aria-labelledby="cta-a" aria-hidden="true">
            <div class="modal-dialog mt-0" role="document">
                <div class="modal-content border-0 position-absolute mt-md-0">
                    <div class="modal-body  mobile_popup_form_background_color text-center border-0 p-0 m-0">
                    <div class="row row-eq-height align-items-start call-popup" style="height:75px">
                    <div class="col-3">
</div>
<div class="col-6 px-0 pt-3 text-center">
                    <img src="<?php echo get_exist_image_url(
                    	"header",
                    	"m-header-logo@3x"
                    ); ?>" srcset="<?php echo get_exist_image_url(
	"header",
	"m-header-logo"
); ?> 1x, <?php echo get_exist_image_url(
 	"header",
 	"m-header-logo@2x"
 ); ?> 2x, <?php echo get_exist_image_url(
 	"header",
 	"m-header-logo@3x"
 ); ?> 3x"  class="w-auto h-auto" <?php echo $header_mobile_cta_alt; ?> width="191" height="39"> 
 </div>
 <div class="col-3 text-end mobile-cross-box pt-3">
                    <button type="button" class="close p-0 bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="apply-conditional-color icon-xmark  close_icon text_24 line_height_24 true_white " data-dark-color="true_black" data-light-color="true_white"></i>
                    </button>
</div>

</div>
                        <div class="text-center call-options">
                            <a href="tel:<?php
                             echo !empty( $args["site_info"]["country_code"] ) ?  $args["site_info"]["country_code"] : '';
                             echo !empty( $args["site_info"]["phone"] ) ?  $args["site_info"]["phone"] : '';
                            ?>" class=" btn-primary no_hover_underline ">
                                <i class="icon-phone"></i> <span><?php echo !empty( $args["globals"]["header"]["call_text"] ) ?  $args["globals"]["header"]["call_text"] : '';?> | <?php
                                 echo !empty( $args["site_info"]["country_code"] ) ?  $args["site_info"]["country_code"] : '';
                                 echo !empty( $args["site_info"]["phone"] ) ?  $args["site_info"]["phone"] : '';
                                ?></span> <i class="icon-chevron-right2"></i>
                            </a>
                            <?php
                            if (!empty($args["globals"]["ctas"])) {
                            $footerItems = $args["globals"]["ctas"];
                            $i = 0;
                            foreach ($footerItems as $key => $value) {
                            	if ($value["enabled"] == true) {
                            		if (
                            			$value["type"] == "url" ||
                            			$value["type"] == "sms"
                            		) {
                            			echo '<a href="' .
                            				get_home_url() .
                            				$value["type"] .
                            				'" class=" btn-primary no_hover_underline " id="rds_footer_element_' .
                            				$i .
                            				'">
                           <i class="' .
                            				$value["icon_class"] .
                            				'"></i> <span>' .
                            				$value["label"] .
                            				' </span> <i class="icon-chevron-right2"></i>
                        </a>';
                            		} else {
                            			echo '<span id="rds_footer_element_' .
                            				$i .
                            				'" class="btn btn-primary" style="margin-bottom:16px">
                           <i class="' .
                            				$value["icon_class"] .
                            				'"></i> ' .
                            				$value["label"] .
                            				'  <i class="icon-chevron-right2"></i>
                        </span>';
                            		}
                            	}
                            	$i++;
                            }
                        }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part("global-templates/nav/mobile/a"); ?>
        <!-- Mobile Header Ends --> 