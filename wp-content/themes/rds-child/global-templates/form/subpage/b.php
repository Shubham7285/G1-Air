<div class="sidebar true_black_bg  d-lg-block d-none">
    <div class="sidebar-form-outer d-lg-block  border_form border_form_light ">
        <?php if (!empty($args["page_templates"]["subpage"]["sidebar"]["request_service"]["heading"])): ?>
           <h3 class=" h3-alt d-block  text-center">
                <?php echo $args["page_templates"]["subpage"]["sidebar"]["request_service"]["heading"]; ?>
        </h3>
        <?php endif; ?>
        
        <?php if (!empty($args["page_templates"]["subpage"]["sidebar"]["request_service"]["subheading"])): ?>
           <h4 class="d-block  p-alt text-center text_normal text_26 line_height_31">
                <?php echo $args["page_templates"]["subpage"]["sidebar"]["request_service"]["subheading"]; ?>
            </h4>
        <?php endif; ?>
        
        <?php
        $form_id = !empty($args["page_templates"]["subpage"]["sidebar"]["request_service"]["gravity_form_id"]) ? $args["page_templates"]["subpage"]["sidebar"]["request_service"]["gravity_form_id"] : '';
        if ($form_id) {
            echo do_shortcode("[gravityforms id=" . $form_id . " ajax=true]");
        }
        ?>
    </div>
</div>
