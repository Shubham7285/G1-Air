<div class="container-fluid rpx_py_lg_80 rpx_py_40 text-start financing_page_form color_secondary_bg page-template-rds-free-estimate px-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 free_estimate_form">
                <?php if (!empty($args["page_templates"]["finance_page"]["gravity_form_heading"])): ?>
                    <h4 class="rpx_pb_25 mb-0 text-center h4-alt"><?php echo $args["page_templates"]["finance_page"]["gravity_form_heading"]; ?></h4>
                <?php endif; ?>
                
                <?php if (!empty($args["page_templates"]["finance_page"]["gravity_form_id"])): ?>
                    <?php
                    $form_id = $args["page_templates"]["finance_page"]["gravity_form_id"];
                    echo do_shortcode("[gravityforms id=" . $form_id . " ajax=true]");
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
