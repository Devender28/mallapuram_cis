 <?php 
                   
					$this->session->userdata('emp_id');
                                       $emp_type=$this->session->userdata('emp_type');
					 
					 $chk = $this->db->get_where('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')))->row();
	                
					
					
					 
					// print_r($chk);
					 
					  if($chk)
					  {
            $info = $this->db->get_where('ticket_picking',array('ticket_id'=>$chk->ticket_id))->row();
						$profile_info  = $this->db->get_where('ind_registration',array('max_id'=>$info->member_max_id))->row();
            $family_profile_info  = $this->db->get_where('ind_family',array('family_member_max_id'=>$info->family_member_max_id))->row();
            $new_request_info  = $this->db->get_where('ind_service_request',array('member_id'=>$info->member_max_id))->row();
            $policy_info  = $this->db->get_where('ind_policy',array('policy_max_id'=>$info->policy_max_id))->row();

                      }
					  else
					  {
                          //$info1 = $this->db->order_by('id','asc')->get_where('ticket_bucket',array('status'=>0))->row();
						  
			
                           @$today= date('Y-m-d');


                        $this->db->order_by('id','asc');
                           $this->db->where(array('status'=>'0','responsibility'=>ucwords($emp_type)));
                           
                           $this->db->where('(postpone <="'.$today.'" OR postpone ="")');
						  
						  $info1 = $this->db->get('ticket_bucket')->row();			  
						  
											 
                                              if($info1->id)
											 {
                                              $data=array('emp_id'=>$this->session->userdata('emp_id'),
                                                'member_max_id'=>$info1->member_max_id,
                                               'family_member_max_id' => @$info1->family_member_max_id,
                                              'policy_max_id' => $info1->policy_max_id,
					      'ticket_type_id'=>$info1->ticket_type_id,
						'order'=>$info1->order,
                                                'endorsement_max_id' => $info1->endorsement_max_id,
                                                'claims_max_id' => $info1->claims_max_id, 
                                                'ticket_max_id' =>$info1->ticket_max_id,
                                                'ticket_process_id' => $info1->ticket_process_id,
                                                'points'            => $info1->points,
                                                'ticket_id' => $info1->ticket_id
												);

                                               if($this->db->insert('ticket_picking',$data))
											   {

                                                 $this->db->update('tickets',array('status'=>1),array('ticket_id'=>$info1->ticket_id));
                                                 $this->db->update('ticket_bucket',array('status'=>1),array('ticket_id'=>$info1->ticket_id));
                                                 
                                                  $info = $this->db->get_where('ticket_picking',array('ticket_id'=>$info1->ticket_id))->row();
                                          $profile_info = $this->db->get_where('ind_registration',array('max_id'=>$info->member_max_id))->row();
                                          $family_profile_info  = $this->db->get_where('ind_family',array('family_member_max_id'=>$info->family_member_max_id))->row();
                                          $new_request_info  = $this->db->get_where('ind_service_request',array('max_id'=>$info->ticket_max_id))->row(); 
                                          $policy_info  = $this->db->get_where('ind_policy',array('policy_max_id'=>$info->policy_max_id))->row();
                                           $client_info  = $this->db->get_where('corporate_client',array('client_max_id'=>$info->member_max_id))->row();


                                                }
                                         
                                              }
                                          }	
                                        
                                      
               
			   
			   ?>


  

     
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                    
                    
                        <div class="col-md-12">
                          <div class="col-sm-8">  <h1 class="page-heading"><?php echo @$this->fun->getnewfieldvalue('ticket_process','name','id',$info->ticket_process_id);?></h1> </div>
                          
                          
                          
                           <div class="col-sm-1">  <button class="btn btn-minw btn-warning" type="button" style="background-color:#F30; margin-top:5px; border-radius:3px;"><?php echo @$this->fun->getnewfieldvalue('ticket_bucket','process_status','ticket_id',$info->ticket_id);?></button> </div>
                           
                           <div class="col-sm-1"> <img src="<?php echo base_url();?>assets/images/phone.png"> </div>
                           
                            <div class="col-sm-2"> <button class="btn btn-minw btn-warning" type="button" style="background-color: #000000; margin-top:5px; border-radius:3px; float:right;">Points: <?php echo @$this->fun->getnewfieldvalue('ticket_bucket','points','ticket_id',$info->ticket_id);?></button> </div>
                      </div>
                    
                        
                    <!-- <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="health_insurance_edit.php"><button class="btn btn-minw btn-danger" type="button">Edit</button></a>
                           </div>
                           </div>   -->
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                        
                        
                           
                            <div class="block">
                            
                            <div class="row">
                        <div class="block">
                        
                        <div class="col-md-2 "> 
                         <div align="center" class="col-sm-12 content-mini content-mini-full bg-info font-w700 text-white" style="margin:10px;border-radius:3px;"><h4>Login Time<br>
                          11:30 am </h4>
                         </div>
                         </div>
                         
                         
                         <div class="col-md-2 "> 
                         <div align="center" class="col-sm-12 content-mini content-mini-full bg-danger font-w700 text-white" style="margin:10px;border-radius:3px;"><h4>Total Score<br>
                          <?php echo $this->fun->totalScore($this->session->userdata('emp_id')) ;?></h4>
                         </div>
                         </div>
                         
                         
                         
                        
                         
                         <div class="col-md-2 "> 
                         <div align="center" class="col-sm-12 content-mini content-mini-full bg-success font-w700 text-white" style="margin:10px;border-radius:3px;"><h4>Today Score<br>
                          <?php echo $this->fun->todayScore($this->session->userdata('emp_id')) ;?></h4>
                         </div>
                         </div>
                         
                         
                         <div class="col-md-3 "> 
                         <div align="center" class="col-sm-12 content-mini content-mini-full bg-info font-w700 text-white" style="margin:10px;border-radius:3px;"><h4>Your Best Score<br>
                         <?php echo $this->fun->bestScore($this->session->userdata('emp_id')) ;?></h4>
                         </div>
                         </div>
                         
                         
                       
                         
                         
                         
                         
                         <div class="col-md-3"> 
                         <div align="center"  class="block-content block-content-full bg-warning text-muted font-w600" text-white style="margin:10px; color:#FFF; border-radius:3px;"><h4>Average Score Per Day <br>
                         <?php echo $this->fun->avgScore($this->session->userdata('emp_id')) ;?></h4>
                         </div>
                         </div>
                         
                       
                        </div>
                        </div>
                            
                           <div class="row form-group bg_1"> <div class="col-md-6"><h3>T.NO: <?php //echo @$info->ticket_max_id.' - '.$info->ticket_id;?> <?php echo @$info->ticket_id;?></h3></div> 
                           
                           
                           <div class="col-md-3"><h3>Name:<span style="color: #FF0;"> 
<?php if($info->member_max_id)
{
echo @$this->fun->getnewfieldvalue('ind_registration','first_name','max_id',$info->member_max_id);
}
?> 
<?php //echo @$this->fun->getnewfieldvalue('ind_registration','first_name','max_id',$family_profile_info->member_max_id);?> 
<?php 
if($info->endorsement_max_id)
{
  $cid=$this->db->get_where('endorsement_request',array('endorsement_max_id'=>$info->endorsement_max_id))->row();
  echo @$this->fun->getnewfieldvalue('corporate_client','name','id',$cid->client);
}
?>

</span></h3></div> 
                           
                            <div class="col-md-3"><h3>Phone:<span style="color: #FF0;"> <?php echo @$this->fun->getnewfieldvalue('ind_registration','mobile1','max_id',$info->member_max_id);?> <?php // echo @$this->fun->getnewfieldvalue('ind_registration','mobile1','max_id',$family_profile_info->member_max_id);?>
<?php 
if($info->endorsement_max_id)
{
  $cid=$this->db->get_where('endorsement_request',array('endorsement_max_id'=>$info->endorsement_max_id))->row();
echo @$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$cid->client);
}
?>


</span></h3></div> 
                           
                           
                           </div>
                            
                      
                            
                                <?php 

                                


							   if($info->ticket_type_id=='3' && $info->order=='1') {
								   
								   

                                $this->load->view('ticket_pages/welcome_process',array('info'=>$info));

                               } if($info->ticket_type_id=='3' && $info->order=='2') { 
							   
							   
							    

                                $this->load->view('ticket_pages/profile_check',array('info'=>$info,'profile_info'=>$profile_info));

                                } if($info->ticket_type_id=='3' && $info->order=='3') { 
								
								
                                $this->load->view('ticket_pages/profile_update_process',array('info'=>$info,'profile_info'=>$profile_info));
                                
                                } if($info->ticket_type_id=='10' && $info->order=='1') { 
                
                
                                $this->load->view('ticket_pages/family_member_details',array('info'=>$info,'profile_info'=>$profile_info,'family_profile_info'=>$family_profile_info));
                                
                                } if($info->ticket_type_id=='10' && $info->order=='2') { 
                
                                $this->load->view('ticket_pages/family_member_details_update',array('info'=>$info,'profile_info'=>$profile_info,'family_profile_info'=>$family_profile_info));
                                
                                }

                             
                         if($info->ticket_type_id=='11' && $info->order=='1') { 
								
								
			 $this->load->view('ticket_pages/new_request',array('info'=>$info,'new_request_info'=>$new_request_info));
                                
                                }
			   if($info->ticket_type_id=='12' && $info->order=='1') { 
								
				$this->load->view('ticket_pages/existing_request',array('info'=>$info,'new_request_info'=>$new_request_info,'policy_info'=>$policy_info));
                                
                                }  if($info->ticket_type_id=='9' && $info->order=='1') { 
                
                                 
                                 $profile_info = $this->db->get_where('ind_registration',array('max_id'=>$info->member_max_id))->row();
                                 $policy_info  = $this->db->get_where('ind_policy',array('policy_max_id'=>$info->policy_max_id))->row();
                                 
                                    
                                $this->load->view('ticket_pages/policy_adition',array('info'=>$info,'profile_info'=>$profile_info,'policy_info'=>$policy_info));
                                
                                }


                           if($info->ticket_type_id=='13' && $info->order=='1') { 
                
                                 
                                 $end_info = $this->db->get_where('endorsement_request',array('endorsement_max_id'=>$info->endorsement_max_id))->row();
                                 $policy_info  = $this->db->get_where('sales_booking',array('policy_number'=>$end_info->policy))->row();
                                 
                                    
                                $this->load->view('ticket_pages/endorsement_ticket',array('info'=>$info,'end_info'=>$end_info,'policy_info'=>$policy_info));
                                
                                }

                                if($info->ticket_type_id=='14' && $info->order=='1') { 
                
                                 
                                 $claim_info = $this->db->get_where('claims_intimation',array('claims_id'=>$info->claims_max_id))->row();
                                 $policy_info  = $this->db->get_where('sales_booking',array('policy_number'=>$claim_info->policy_id))->row();
                                 
                                    
                                $this->load->view('ticket_pages/claim_intimation_ticket',array('info'=>$info,'claim_info'=>$claim_info,'policy_info'=>$policy_info));
                                
                                }



                              if($info->ticket_type_id=='') { 
                                $this->session->set_flashdata('msg', 'Tickets Not Available');
                                redirect('ticket/dashboard');
                                
                                }	



                                ?>
                              




    
 

                        
                        
                        
                        
                        
                        
                        
                        
 <?php
                                     $promotion=@$this->db->get_where('promotions',array('status'=>1))->row();
                                    ?>                       


<div class="col-md-12">
                                    
                                    <div class="col-md-8">
                                      
                                      <div>
                                            <a href="<?php echo $promotion->url;?>" target="_blank">  <img src="<?php echo base_url().'uploads/promotions/'.$promotion->image;?>" class="img-responsive" ></a>
                                        </div>
                                        
                                        
                                        <div class="col-md-12 " style="background-color: #EFEDEF; padding:10px; margin-bottom:20px; margin-top:20px;">
                                <div class="nice-copy">
                                <h3>Discription</h3>
                                <p><?php echo $promotion->description;?></p></div><br />
                                  </div>
                                        
                                        </div>
                                       <!-- <div>
                                            <a href="http://mallapuramcorp.com/ " target="_blank">  <img src="images/banner-3.jpg" class="img-responsive" ></a>
                                        </div>-->
                                        
                                        
                                      </div>



















                                
                                
                                
                                
                                
                                
                                <div class="block-content">
                             <div class="row" style="border-bottom:solid #CCC 1px;"><h2>TICKET HISTORY</h2> </div>
                             <br>

                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Ticket No</th>
                                        <th>Status</th>
                                        <th class="hidden-xs">Remarks</th>
                                        <th class="hidden-xs" style="width: 15%;">Edited by</th>
                                        <th class="text-center" style="width: 10%;">Promoting Policy</th>
                                        <th class="text-center" style="width: 10%;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                  $thistory= $this->db->order_by('id','desc')->get_where('ticket_picking_history',array('ticket_id'=>$info->ticket_id))->result();
                                  $sn=1;
                                  foreach($thistory as $tht){
              
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $sn;?></td>
                                        <td class="hidden-xs"><?php echo $tht->ticket_id;?></td>
                                        <td class="font-w600"><button class="btn btn-minw btn-<?php if($tht->process_status=='POSTPONE') { echo "warning";} elseif($tht->process_status=='ESCALATE') { echo "danger";} elseif($tht->process_status=='SKIP') { echo "success";} else { echo "primary";}?>" type="button"><?php echo $tht->process_status;?></button></td>
                                        <td class="hidden-xs"><?php echo $tht->remark;?></td>
                                       <td class="hidden-xs"><?php echo $this->fun->getnewfieldvalue('mallapuram_employees','name','id',$tht->emp_id);?></td>
                                        <td class="text-center"><?php if($tht->promoting_policy==0) {echo "Not Interested"; } else { echo "Interested";}?></td>
                                        <td class="text-center"><?php echo $tht->crdate;?></td>
                                    </tr>
                                  
                                  <?php $sn++; } ?>  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                              
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                                
                          
                            
                          
                                
                                
                                
                                
                                
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                   
                </div>
                <!-- END Page Content -->
            </main>
           
       
           
          
          
            