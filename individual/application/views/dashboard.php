                   
            
            
              

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style=" background-color: #FF9900;">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome <?php echo $this->fun->getMember($this->session->userdata('login'));?></h2>
                    </div>
                </div>
                <!-- END Page Header -->
                
                    <div class="row">
                    
                    <div class="block">
                                
                                <div class="block-content">
                                    <!-- Slider with autoplay -->
                                    <div class="js-slider" data-slider-dots="true" data-slider-autoplay="true" data-slider-autoplay-speed="3000">
                                        
                                        <div>
                                            <a href="http://mallapuramcorp.com/ " target="_blank">  <img src="images/banner-2.jpg" class="img-responsive" ></a>
                                        </div>
                                        
                                    </div>
                                    <!-- END Slider with autoplay -->
                                </div>
                            </div>
                    </div>
                <!-- Stats -->
                <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url('family_members');?>">
                                <div class="block-content block-content-full bg-success">
                                    <div class="h1 font-w700 text-white"><?php echo $dependents;?></div>
                                    <div class="h5 text-white-op text-uppercase push-5-t">Dependents</div>
                                </div>
                               <!--  <div class="block-content block-content-full block-content-mini">
                                    <i class="si si-user-follow fa-2x text-primary pull-left"></i> Today
                                </div> -->
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url('policies_view');?>">
                                <div class="block-content block-content-full bg-danger">
                                    <div class="h1 font-w700 text-white"><?php echo $policies;?></div>
                                    <div class="h5 text-white-op text-uppercase push-5-t">Polycies</div>
                                </div>
                               <!--  <div class="block-content block-content-full block-content-mini">
                                     <i class="si si-user-follow fa-2x text-primary pull-left"></i> Today
                                </div> -->
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url('requests');?>">
                                <div class="block-content block-content-full bg-warning">
                                    <div class="h1 font-w700 text-white"> <?php echo $requests;?></div>
                                    <div class="h5 text-white-op text-uppercase push-5-t">Requests</div>
                                </div>
                               <!--  <div class="block-content block-content-full block-content-mini">
                                    <i class="si si-user-follow fa-2x text-primary pull-left"></i> This week
                                </div> -->
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url('share_app_details');?>">
                                <div class="block-content block-content-full bg-info">
                                    <div class="h1 font-w700 text-white"> <?php echo $shares;?></div>
                                    <div class="h5 text-white-op text-uppercase push-5-t">APP Shares</div>
                                </div>
                               <!--  <div class="block-content block-content-full block-content-mini">
                                     <i class="si si-user-follow fa-2x text-primary pull-left"></i> This Month
                                </div>  -->
                            </a>
                        </div>
                        
                    </div>
                <!-- END Stats -->

                <!-- Page Content -->
                
                <!-- END Page Content -->
            </main>
            

            <!-- Footer -->
           
 
 