<?php
$dependants=$this->db->group_by('relation')->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'relation !='=>'self'))->num_rows();
?>


<?php
$insurance_policies=$this->db->group_by('policy_id')->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'relation'=>'self'))->num_rows();
?>

<?php

$pr=$this->db->get_where('promotions',array('status'=>'1'))->row();

?>


<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style=" background-color: #FF9900;">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <!--<h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>-->
                    </div>
                </div>
                <!-- END Page Header -->
                
                    <div class="row">
                    
                    <div class="block">
                                
                                <div class="block-content">
                                      
<div>
                                            <a href="<?php echo $pr->url;?> " target="_blank">  <img src="<?php echo base_url('uploads/promotions/'.$pr->image);?>" width="930" ></a>
                                        </div>




                                  <div class="nice-copy" style="background-color: #EFEDEF; padding:10px; margin-bottom:20px;margin-top:20px;">

                                <?php echo @$pr->description;?></div>   






                                </div>
                            </div>
                    </div>
                <!-- Stats -->
                <div class="row">
                        
                        
                       
                       
                       
                       
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url();?>employee/policies_view">
                                <div class="block-content block-content-full bg-success">
                                    <div align="center" class="h1 font-w700 text-white">
                                  <img src="<?php echo base_url();?>assets/images/insurance-company-icon.png" width="92" height="77">
                                  </div>
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Insurance Policies
								
                                    
                                    </div>
                                    
                                    <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                     <?php echo $insurance_policies;?>
                                </div>
                               </div>
                            </a>
                        </div>
                        
                     
                     
                     
                      <div class="col-sm-6 col-lg-3">
                            <a class="block block-rounded block-link-hover3 text-center" href="<?php echo base_url();?>employee/family_members">
                                <div class="block-content block-content-full bg-warning">
                                    <div align="center" class="h1 font-w700 text-white"> <img src="<?php echo base_url();?>assets/images/corporate-client.png" width="92" height="77"></div>
                                    <div align="center" class="h4 text-white-op text-uppercase push-5-t">Dependants
                                    
                                     </div>
                                    
                                     <div align="center" class="block-content block-content-full block-content-mini h1 font-w700 text-white">
                                      <?php echo $dependants;?>
                                </div>
                                    
                                </div>
                               
                            </a>
                        </div>
                        
                        
                    </div>
                 
                
            </main>
            