<div class="container-fluid about-content about-content-start rpx_py_lg_80 rpx_pt_40 pb-0 px-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-lg-0 mb-5">
                <?php if (!empty($args["page_templates"]["finance_page"]["heading"])): ?>
                    <h1 class="text-start rpx_mb_15"><?php echo $args["page_templates"]["finance_page"]["heading"]; ?></h1>
                <?php endif; ?>
                
                <?php if (!empty($args["page_templates"]["finance_page"]["subheading"])): ?>
                    <h2 class="text-start rpx_mb_15"><?php echo $args["page_templates"]["finance_page"]["subheading"]; ?></h2>
                <?php endif; ?>
                
                <?php if (!empty($args["page_templates"]["finance_page"]["button_text"])): ?>
                    <a target="<?php echo $args["page_templates"]["finance_page"]["target"] == "true" ? "_blank" : "_self"; ?>" href="<?php echo $args['page_templates']['finance_page']['button_link']; ?>" class="btn btn-primary"><i class="icon-calendar2"></i><?php echo $args["page_templates"]["finance_page"]["button_text"]; ?> <i class=" icon-circle-chevron-right2
                            "></i></a>
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <?php if (!empty($args["page_templates"]["finance_page"]["content"])): ?>
                <?php echo $args["page_templates"]["finance_page"]["content"]; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
