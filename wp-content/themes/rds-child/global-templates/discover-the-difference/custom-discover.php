<!--order-5 order-lg-5-->
<?php
$get_alt_text = RDS_ALT_DATA;
$alt = "";
if (is_array($get_alt_text)) {
    foreach ($get_alt_text as $value) {
        if (in_array("value-prop-img.webp", $value)) {
            $alt = 'alt="' . $value[3] . '"';
        }
    }
}

$img1x = [
    get_exist_image_url('value-prop', 'value-prop-bg'),
    get_exist_image_url('value-prop', 'value-prop-bg'),
    get_exist_image_url('value-prop', 'm-value-prop-bg')
];

$img2x = [
    get_exist_image_url('value-prop', 'value-prop-bg@2x'),
    get_exist_image_url('value-prop', 'value-prop-bg@2x'),
    get_exist_image_url('value-prop', 'm-value-prop-bg@2x')
];

$img3x = [
    get_exist_image_url('value-prop', 'value-prop-bg@3x'),
    get_exist_image_url('value-prop', 'value-prop-bg@3x'),
    get_exist_image_url('value-prop', 'm-value-prop-bg@3x')
];

$img1x = implode(',', array_filter($img1x));
$img2x = implode(',', array_filter($img2x));
$img3x = implode(',', array_filter($img3x));    
?>

<?php if ($img1x || $img2x || $img3x) : ?>
<?php echo do_shortcode('[custom-bg-srcset class="discover-difference" img1x="'.$img1x.'" img2x="'.$img2x.'" img3x="'.$img3x.'" size1x="cover" size2x="cover" size3x="cover" m_position="center right" ]'); ?>
<?php endif; ?>
         <!-- discover the difference -->
     <div class="d-block discover-difference rpx_py_lg_80 rpx_py_40">
        <div class="container-fluid px-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12  discover-content">
                    <div class=""><h5 class=" true_white text-center">
        <?php echo !empty( $args['globals']['discover_the_difference']['heading']) ?  $args['globals']['discover_the_difference']['heading'] : ''; ?></h5>
    
    <h4 class="mb-0  text-center true_white rpx_mb_15">
         <?php echo !empty($args['globals']['discover_the_difference']['subheading']) ? $args['globals']['discover_the_difference']['subheading'] : ''; ?>   </h4>
                                <div class="discover-icons d-none d-lg-grid">
                                                      <?php 
                     if (!empty($args['globals']['discover_the_difference']['items'])) {
                      $discoverItems = $args['globals']['discover_the_difference']['items']; 
                      $discoverItemsCount = count($discoverItems);
                    $i = 1;

                    foreach ($discoverItems as $value) {
                        echo'  <div class="discover-icons-outer">
                                        
                                                <div class="icon-box-outter ">
                                                     <div class="icon-box pt-3">
                                                    <i class="color_primary '.$value['icon'].' text_40 line_height_40"></i>
                                                    </div>
                                                </div>
                                            <div class="icon-content">
                                            <h6 class="mb-0 true_white rpx_mb_10">'.$value['title'].'</h6>
                                               <p class="mb-0 true_white">'.$value['description'].'</p>    
                                            </div>
                                            </div>';
                        $i++;
                       } 
                      }?>




                                     
                                                                    </div>
                                                                     <div class="discover-icons d-block d-lg-none">
 <div class="swiper discover-swipper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
			                    <?php 
                     if (!empty($args['globals']['discover_the_difference']['items'])) {
                      $discoverItems = $args['globals']['discover_the_difference']['items']; 
                      $discoverItemsCount = count($discoverItems);
                    $i = 1;
                    foreach ($discoverItems as $value) {
                                     echo'<div class="discover-icons-outer swiper-slide">
                                        
                                                <div class="icon-box-outter ">
                                                     <div class="icon-box ">
                                                    <i class="color_primary  '.$value['icon'].' text_45 line_height_45"></i>
                                                    </div>
                                                  
                                                </div>
                                            <div class="icon-content text-start">
                                              <h6 class="mb-0 true_white rpx_mb_10">'.$value['title'].'</h6>
                                               <p class="mb-0 true_white">'.$value['description'].'</p>
                                            </div>
                                            </div>';
											 $i++;
                       } 
                      } ?>
			
			
                                                </div>
                                                 <!-- Pagination -->
    <div class="swiper-pagination discover-swipper-pagination"></div>
                                                </div>
                                                </div>


                                <div class="col-12 text-center">
                                    <a href=" <?php echo get_home_url(). (!empty($args['globals']['discover_the_difference']['button_link']) ? $args['globals']['discover_the_difference']['button_link'] : ''); ?>" class="no_hover_underline">
                                        <button type="button" class="btn btn-secondary  mw-250 mh-50">
                                            <?php echo $args['globals']['discover_the_difference']['button_text']; ?><i class=" icon-circle-chevron-right2
"></i> </button>
                                    </a>
                    </div>
                        </div>
                            </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function () {
    var Swipes = new Swiper('.discover-swipper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
                    delay: 8000,
                    disableOnInteraction: true,
                },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.discover-swipper-pagination',
            clickable: true, // Enables clickable bullets
        },
    });
    });
</script>