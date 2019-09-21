            
<?php

$pr=$this->db->get_where('promotions',array('status'=>'1'))->row();

?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style=" background-color: #FF9900;">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome <?php echo $this->fun->getClient($this->session->userdata('client_id'));?></h2>
                    </div>
                </div>
                <!-- END Page Header -->

               




                    








 <!-- Stats -->
                <div class="content bg-white border-b" style="margin-top:-15px;">




<div class="block">
                                
                                <div class="block-content">

<div class="col-md-12 ">
                                    <!-- Slider with autoplay -->
                                    <div class="col-md-8 ">
                                      
                                      <div>
                                            <a href="<?php echo $pr->url;?> " target="_blank">  <img src="<?php echo base_url('uploads/promotions/'.$pr->image);?>" width="930" ></a>
                                        </div>
                                        
                                        
                                        <div class="nice-copy" style="background-color: #EFEDEF; padding:10px; margin-bottom:20px;margin-top:20px;">

                                <?php echo $pr->description;?></div>
                                       <!-- <div>
                                            <a href="http://mallapuram.com/ " target="_blank">  <img src="images/banner-3.jpg" class="img-responsive" ></a>
                                        </div>-->
                                    </div>
                                    <!-- END Slider with autoplay -->
                               
                                 </div>
                                
                           </div>
</div>






                    <div class="row items-push text-uppercase">



 <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-danger">
                                    <div align="center" class="h1 font-w700 text-white"><img src="<?php echo base_url();?>assets/images/insurance-policy-type-icon.png" width="92" height="77"></div>
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Employees</div>
                                    
                                    <div align="center"class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                   <?php echo $emp_count;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>



<div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-warning">
                                    <div align="center" class="h1 font-w700 text-white"><img src="<?php echo base_url();?>assets/images/insurance-policy-type-icon.png" width="92" height="77"></div>
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Policies</div>
                                    
                                    <div align="center"class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                   <?php echo $policy_count;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>



<div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-info">
                                    <div align="center" class="h1 font-w700 text-white"><img src="<?php echo base_url();?>assets/images/insurance-policy.png" width="92" height="77"> </div>
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Claim Intimations</div>
                                     <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                     <?php echo $ci_count;?>
                                </div>
                                </div>
                               
                            </a>
                        </div>





                        
                    </div>
                </div>
            </main>
            
