<?php  $ltime=$this->db->order_by('id','desc')->get_where('emp_login',array('emp_id'=>$this->session->userdata('emp_id')))->row();?>

<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style=" background-color: #FF9900;">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome  &nbsp;<?php echo $this->session->userdata('ticketsystem_login');?>
                                                                     (&nbsp;<?php echo ucfirst($this->session->userdata('emp_type'));?>&nbsp;)
                        </h2>
                    </div>
                </div>
                <!-- END Page Header -->
                
                    <div class="row">
                    
                    <div class="block">
                                
                                <div class="block-content">
                                    <!-- Slider with autoplay -->
                                    <div class="js-slider" data-slider-dots="true" data-slider-autoplay="true" data-slider-autoplay-speed="3000">
                                        <div>
                                    
                                  
                                      </div>
                                       <!-- <div>
                                            <a href="http://mallapuramcorp.com/ " target="_blank">  <img src="images/banner-2.jpg" class="img-responsive" ></a>
                                        </div>
                                        <div>
                                            <a href="http://mallapuramcorp.com/ " target="_blank">  <img src="images/banner-3.jpg" class="img-responsive" ></a>
                                        </div> -->
                                    </div>
                                    <!-- END Slider with autoplay -->
                                </div>
                            </div>
                    </div>
                <!-- Stats -->
                <div class="row">
                        <div class="col-sm-6 col-lg-2 col-lg-offset-1">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-success">
                                    <!--<div align="center" class="h1 font-w700 text-white">  <img src="images/insurance-company-icon.png" width="92" height="77">  </div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Login Time</div>
                                    
                                    <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                      <?php echo  $ltime->login_time;?>
                                </div>
                                    
                                </div>
                                
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-danger">
                                   <!-- <div align="center" class="h1 font-w700 text-white"><img src="images/insurance-policy-type-icon.png" width="92" height="77"></div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Total Score</div>
                                    
                                    <div align="center"class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                   <?php echo $this->fun->totalScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-warning">
                                   <!-- <div align="center" class="h1 font-w700 text-white"> <img src="images/corporate-client.png" width="92" height="77"></div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Today Score</div>
                                    
                                     <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                     <?php echo $this->fun->todayScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-info">
                                    <!--<div align="center" class="h1 font-w700 text-white"><img src="images/insurance-policy.png" width="92" height="77"> </div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Best Score</div>
                                     <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                     <?php echo $this->fun->bestScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                </div>
                               
                            </a>
                        </div>
                        
                        
                        
                        
                        <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-warning">
                                    <!--<div align="center" class="h1 font-w700 text-white"> <img src="images/corporate-client.png" width="92" height="77"></div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Avg Score/Day </div>
                                    
                                     <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                     <?php echo $this->fun->avgScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>
                        
                        
                        
                        
                    </div>
                <!-- END Stats -->
                
                <div class="row">
                
                
                <div class="col-sm-6 col-lg-4"></div>
                
                <div class="col-sm-6 col-lg-3">
                <br>
<br>

                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url();?>ticket/pick_ticket">
                                <div class="block-content block-content-full bg-success">
                                    <!--<div align="center" class="h1 font-w700 text-white">  <img src="images/insurance-company-icon.png" width="92" height="77">  </div>-->
                                  <!--  <div align="center" class="h4 text-white-op text-uppercase push-5-t">Pick Ticket</div>-->
                                    
                                    <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                    Pick Ticket
                                </div>
                                    
                                </div>
                                
                            </a>
                        </div></div>

                <!-- Page Content -->
                
                <!-- END Page Content -->
            </main>








<div class="modal fade" id="modal-slideleft" tabindex="-1" role="dialog" aria-hidden="true"  style="width:800px;padding-left: 700px;padding-top: 200px;">    
            <div class="modal-dialog modal-dialog-slideleft">
                <div class="modal-content" >
                    <div class="block block-themed block-transparent remove-margin-b" >
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Tickets</h3>
                        </div>
                        <div class="block-content">
                            <p class="h1 font-w700 push-10">No Tickets</p>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                    </div>
                </div>
            </div>
        </div>        
            
            
  
 
 
  <script>

$(window).load(function(){        
  
  $('#modal-slideleft').modal('show');
 	}); 

</script>          



            