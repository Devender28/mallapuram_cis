<?php  $ltime=$this->db->order_by('id','desc')->get_where('emp_login',array('emp_id'=>$this->session->userdata('emp_id')))->row();
$pr=$this->db->get_where('promotions',array('status'=>'1'))->row();
?>

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
                        <div class="col-sm-6 col-lg-2 ">
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
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Last Month Score</div>
                                    
                                    <div align="center"class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                   <?php echo $this->fun->lMonthScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>


                        <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-info">
                                   <!-- <div align="center" class="h1 font-w700 text-white"><img src="images/insurance-policy-type-icon.png" width="92" height="77"></div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Cur Month Score</div>
                                    
                                    <div align="center"class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                   <?php echo $this->fun->cMonthScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>

                         <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-black">
                                   <!-- <div align="center" class="h1 font-w700 text-white"><img src="images/insurance-policy-type-icon.png" width="92" height="77"></div>-->
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Yearly Score</div>
                                    
                                    <div align="center"class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                   <?php echo $this->fun->yearlyScore($this->session->userdata('emp_id')) ;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>


 
                        <div class="col-sm-6 col-lg-2">
                            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gray-lighter3">
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
                                <div class="block-content block-content-full bg-gray-darker">
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
                                <div class="block-content block-content-full bg-gray-dark">
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
                
                


<a href="<?php echo base_url('ticket/add_individual');?>" target="_blank">Add Individual</a>











<div class="row">
         




<div class="col-sm-6 col-lg-4"></div>
                
                <div class="col-sm-6 col-lg-3">
                <br>
<br>

                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url();?>ticket/pick_ticket">
                                <div class="block-content block-content-full bg-success">
                                    <div align="center" class="confirm-div block-content block-content-full block-content-mini h3 font-w600 text-danger">
                
                
                                   </div>
                                    
                                    <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                    Pick Ticket
                                </div>
                                    
                                </div>
                                
                            </a>
                        </div></div>

                <!-- Page Content -->


                
                <!-- END Page Content -->
            


<div class="row col-lg-offset-1">

<div class="col-md-12">
                                    
                                    <div class="col-md-8">
                                      
                                      <div>
                                            <a href="http://mallapuramcorp.com/ " target="_blank">  <img src="<?php echo base_url('uploads/promotions/'.$pr->image);?>" width="90%" ></a>
                                        </div>
                                        
                                        
                                        <div class="col-md-12 " style="background-color: #EFEDEF; padding:10px; margin-bottom:20px; margin-top:20px;">
                                <div class="nice-copy">
                                <?php echo $pr->description;?></div><br />
                                  </div>
                                        
                                        </div>
                                       <!-- <div>
                                            <a href="http://mallapuramcorp.com/ " target="_blank">  <img src="images/banner-3.jpg" class="img-responsive" ></a>
                                        </div>-->
                                        
                                        
                                      </div>

</div>









</main>






<script>
// assumes you're using jQuery
$(document).ready(function() {
$('.confirm-div').hide();
<?php if($this->session->flashdata('msg')){ ?>
$('.confirm-div').html('<?php echo $this->session->flashdata('msg'); ?>').show();
$('.confirm-div').delay(5000).fadeOut("slow");
});
<?php } ?>
</script>








            