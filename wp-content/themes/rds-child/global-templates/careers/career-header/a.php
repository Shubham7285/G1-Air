<!-- Career content start -->
<div class="container-fluid px-0 rpx_pt_lg_160 rpx_pb_lg_80 rpx_py_40">
    <div class="container">
        <div class="row">
                <div class="col-12 col-lg-5 col-xl-5">
                    <?php if (!empty($args["page_templates"]["career_page"]["heading"])): ?>
                        <h1 class="content_mb_15"><?php echo esc_html($args["page_templates"]["career_page"]["heading"]); ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($args["page_templates"]["career_page"]["subheading"])): ?>
                        <h2 class="mb-0"><?php echo esc_html($args["page_templates"]["career_page"]["subheading"]); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-7 col-xl-7">
                <div class="content_pl_lg_18">
                    <?php if (!empty($args["page_templates"]["career_page"]["content"])): ?>
                        <p class="mb-0">
                            <?php echo wp_kses_post($args["page_templates"]["career_page"]["content"]); ?>
                        </p>
                    <?php endif; ?>
                </div>
                </div>
        </div>
    </div>
</div>

<!-- Career content end -->
