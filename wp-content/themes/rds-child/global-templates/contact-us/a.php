<div class="container-fluid rpx_py_40 rpx_py_lg_80 contact-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1 class="text-start rpx_pb_lg_50 rpx_pb_30 mb-0 "><?php the_title(); ?></h1>
                
                <?php if (!empty($args["page_templates"]["contact_page"]["content"])): ?>
                  <p class="text-start mb-0">  <?php echo $args["page_templates"]["contact_page"]["content"]; ?></p>
                <?php endif; ?>
                
                <div class="form-outer">
                    <?php if (!empty($args["page_templates"]["contact_page"]["gravity_form_id"])): ?>
                        <?php
                        $form_id = $args["page_templates"]["contact_page"]["gravity_form_id"];
                        echo do_shortcode("[gravityforms id=" . $form_id . " ajax=true]");
                        ?>
                    <?php endif; ?>
                </div>
            </div>  
        </div>
    </div>
</div>
