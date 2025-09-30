   <!-- company service html start here -->
     <div class="d-block company-service rpx_pt_lg_80 rpx_py_40 rpx_pb_lg_60">
        <div class="container-fluid px-0">
            <div class="container">
                <div class="row align-items-center">                            
                    <div class="col-lg-6 right-content">
                    <div class="cmpny-content">
                         <h4 class="text-start text-md-center text-lg-start"><?php echo $args["globals"]["company_services"]["heading"]; ?></h4>
                        <h5 class="text-start text-md-center  text-lg-start"><?php echo $args["globals"]["company_services"]["subheading"]; ?></h5>
                                               
                        
                                                
                        <p class="text-center text-md-center  text-lg-start"><?php echo !empty($args["globals"]["company_services"]["description_html_allowed"]) ? $args["globals"]["company_services"]["description_html_allowed"] : ''; ?></p>
                        
            
                                                        <div class="text-center text-md-center  text-lg-start">
                                    <a href="<?php echo get_home_url() . $args["globals"]["company_services"]["button_link"]; ?>" class="btn btn-secondary mw-250 mh-50">
                                       <?php echo $args["globals"]["company_services"]["button_text"]; ?>   <i class=" icon-circle-chevron-right2
"></i>                       </a>
                                                </div>
                    </div>
                    </div>
                    <div class="col-lg-6 left-img">
                        <div class="img_section text-lg-start text-md-center text-start">
                            <img decoding="async" src="<?php echo get_exist_image_url(
                            'company-services',
                            'company-services-img'
                        ); ?>" srcset="" class="img-fluid d-lg-block d-none" width="" height="">
                         <img decoding="async" src="<?php echo get_exist_image_url(
                            'company-services',
                            'm-company-services-img'
                        ); ?>" srcset="" class="img-fluid d-lg-none " width="" height="">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>