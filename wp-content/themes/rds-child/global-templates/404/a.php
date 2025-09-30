<?php $get_alt_text = RDS_ALT_DATA;
$alt = "";

if (is_array($get_alt_text)) {
  foreach ($get_alt_text as $value) {
    if (in_array("404-img-1.webp", $value)) {
      $alt = 'alt="' . $value[3] . '"';
      break; // Optional: exit loop once the alt text is found
    }
  }
}

?>    
     <div class="container-fluid custom-404">
    <div class="container">
        <div class="row mx-0">
            <!-- <div class="col-md-7 px-lg-0">
                <?php
                // Ensure that the image URL and alt text are not empty
                $image_url = get_exist_image_url("404", "404-img-1");
                $image_url_2x = get_exist_image_url("404", "404-img-1@2x");
                $image_url_3x = get_exist_image_url("404", "404-img-1@3x");
                $alt = !empty($args["globals"]["404"]["image_alt"]) ? 'alt="' . esc_attr($args["globals"]["404"]["image_alt"]) . '"' : '';
                ?>
                <img src="<?php echo !empty($image_url) ? esc_url($image_url) : ''; ?>"
                     srcset="<?php echo !empty($image_url) ? esc_url($image_url) : ''; ?> 1x, 
                             <?php echo !empty($image_url_2x) ? esc_url($image_url_2x) : ''; ?> 2x, 
                             <?php echo !empty($image_url_3x) ? esc_url($image_url_3x) : ''; ?> 3x"
                     width="635" height="391" class="img-fluid mx-auto" <?php echo $alt; ?>>
            </div> -->
            <div class="col-md-12 text-center">
                <h1 class="display1 pagenotfound_display_1">Oops!</h1>
                <span class="display2 pagenotfound_display_2 d-block">Page Not Found</span>
                <div class="text-center elementor">
                    <a href="<?php echo esc_url(get_home_url()); ?>" class="btn btn-secondary mw-250 mh-50" name="Return to Home">Return home <i class=" icon-circle-chevron-right2
"></i></a>
                </div>
            </div>
        </div>
        <div class="row error-menu">
            <div class="col-lg-12 col-xl-12 mx-auto">
                <div class=" text-center     error-menu-inner">
                    <h6 class="d-lg-inline d-block  true_white mb-0 mt-0">Or Jump To...</h6>
                    <div class="d-flex  page_main_links">
                               <?php
    $name = "404"; 
    $menu = !empty($name) ? get_term_by("name", $name, "nav_menu") : null;
    $menu_items = !empty($menu) ? wp_get_nav_menu_items($menu->term_id) : [];

    if (!empty($menu_items)): ?>
        <?php foreach ($menu_items as $value): ?>
            <a href="<?php echo esc_url($value->url); ?>" 
               target="<?php echo esc_attr($value->target); ?>" 
               class="text_16 line_height_21 font_default text_normal no_hover_underline">
               <?php echo esc_html($value->title); ?>
            </a>
        <?php endforeach;
    endif;
?>
                    </div>
                    <span class="error-pipe position-relative d-none d-md-inline-block"></span>

                    <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url("/")); ?>" class="input-group search d-inline-flex align-items-center error-search-box">
                        <div class="input-group-prepend pl-5 pl-sm-0">
                            <button id="searchsubmit" aria-label="magnifying glass" type="submit" class="input-group-text bg-transparent border-0 h-56 text-center m_w_45 rounded-0 focus-outline-0 cursor-pointer">
                                <i class="icon-magnifying-glass2 true_white text_18 line_height_18 mx-auto"></i>
                            </button>
                        </div>
                        <input type="text" value="<?php echo esc_attr(get_search_query()); ?>" name="s" id="s" class="form-control rounded-0 empty-search error-search bc_font_alt_1 bc_text_semibold border-0 h-56" placeholder="SEARCH">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
