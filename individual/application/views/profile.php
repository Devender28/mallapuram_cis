               

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             View Profile
                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('edit_profile');?>"><button class="btn btn-minw btn-danger" type="button">Fill/Edit Profile</button></a>
                           </div>
                           </div>  
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                            <div class="form-group bg_1"><h3>Member Profile</h3></div>
                                <div class="block-content block-content-narrow">
                                
                   <form class="form-horizontal" action=" profile_edit.php" method="post" >
                                       
                                       
                                       
                                       
                                                <div class="form-group">
                                                <div class="col-md-6">
                                                <div class="col-md-6">First Name</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->first_name;?></strong></div>
                                                
                                                </div>
                                          
                                          
                                          
                                         <div class="col-md-6">
                                                <div class="col-md-6">Middle Name</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->middle_name;?></strong></div>
                                                
                                                </div>
                                                
                                                </div> 
                                                
                                                
                                                <div class="form-group">
                                                <div class="col-md-6">
                                                <div class="col-md-6">Last Name</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->last_name;?></strong></div>
                                                
                                                </div>
                                                </div> 
                                                
                                             
                                              <hr> 
                                                
                                                 
                                       
                                       <div class="form-group">
                                       
                                        <div class="col-md-6">
                                                <div class="col-md-6">Email1</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->email1;?></strong></div>
                                                
                                                </div>
                                                
                                                <div class="col-md-6">
                                                <div class="col-md-6">Email2</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->email2;?></strong></div>
                                                
                                                </div>
                                                
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                                <div class="col-md-6">Mobile1</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->mobile1;?></strong></div>
                                                
                                                </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        
                                       
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                                <div class="col-md-6">Date of Birth (Recorded)</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->recorded_dob;?></strong></div>
                                                
                                                </div>
                                        
                                    
                                         <div class="col-md-6">
                                                <div class="col-md-6">Date of Birth (Actual)</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->actual_dob;?></strong></div>
                                                
                                                </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="row bg_blue">
                                       

                                        <div class="col-md-6 "><h3 >Aadhar Details</h3> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <br>

                                         <div class="col-md-6">
                                                <div class="col-md-6">Aaadhar No</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->aadhar_no;?></strong></div>
                                                
                                                </div>
                                        
                                        
                                          <div class="col-md-6">
                                                <div class="col-md-6">Aaadhar Scan Copy</div>
                                                
                                                <div class="col-md-6">

<?php
                                                   
                                                    if($member->aadhar_scan)
                                                    {                                                     
                                                    ?>
                                                <img src="<?php echo base_url('uploads/individual/aadhar/'.$member->aadhar_scan);?>" width="150" height="80">
                                                <?php } else { ?>

                                                    <img src="<?php echo base_url('uploads/dummy_images/dummy.jpg');?>" width="150" height="80">

                                                    <?php } ?>

</div>
                                                
                                                </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        
                                        <div class="row bg_blue">
                                       
                                        <div class="col-md-6"> <h3>Pan Card Details</h3> </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                         <div class="space"></div>

                                         <div class="col-md-6">
                                                <div class="col-md-6">Pan No</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->pan_no;?></strong></div>
                                                
                                                </div>
                                        
                                        
                                        <div class="col-md-6">
                                                <div class="col-md-6">Pan Upload</div>
                                                
                                                <div class="col-md-6"><img src="<?php echo base_url('uploads/individual/pan/'.$member->pan_scan);?>" width="150" height="80"></div>
                                                
                                                </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="row bg_blue">
                                       
                                        <div class="col-md-6"> <h3>Voter ID Details</h3> </div>
                                        </div>
                                        
                                        <div class="space"></div>
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                                <div class="col-md-6">Voter ID No</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->voterid_no;?></strong></div>
                                                
                                                </div>
                                        
                                        
                                        <div class="col-md-6">
                                                <div class="col-md-6">Voter ID Scan Copy</div>
                                                
                                                 <div class="col-md-6"><img src="<?php echo base_url('uploads/individual/voterid/'.$member->voterid_scan);?>" width="150" height="80"></div>
                                                
                                                </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="row bg_blue">
                                      

                                        <div class="col-md-6"><h3>Driving License Details</h3> </div>
                                        </div>
                                        
                                         <div class="space"></div>
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                                <div class="col-md-6">Driving License No</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->license_no;?></strong></div>
                                                
                                                </div>
                                        
                                        
                                        <div class="col-md-6">
                                                <div class="col-md-6">Driving License Expiry Date</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->license_expiry_date;?></strong></div>
                                                
                                                </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                         <div class="col-md-6">
                                                <div class="col-md-6">Driving License Scan Copy</div>
                                                
                                                <div class="col-md-6"><img src="<?php echo base_url('uploads/individual/license/'.$member->license_scan);?>" width="150" height="80"></div>
                                                
                                                </div>
                                         
                                         
                                         </div>
                                        
                                        <hr>
                                        
                                         
                                        <div class="row bg_blue">
                                        
                                        <div class="col-md-6"><h3>Passport Details </h3> </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="space"></div>
                                        <div class="form-group">
                                         <div class="col-md-6">
                                                <div class="col-md-6">Passport No</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->passport_no;?></strong></div>
                                                
                                                </div>
                                        
                                        
                                        <div class="col-md-6">
                                                <div class="col-md-6">Passport Expiry Date</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->passport_expiry_date;?></strong></div>
                                                
                                                </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                                <div class="col-md-6">Passport Scan Copy</div>
                                                
                                                <div class="col-md-6"><img src="<?php echo base_url('uploads/individual/passport/'.$member->passport_scan);?>" width="150" height="80"></div>
                                                
                                                </div>
                                        
                                        </div>
                                         <hr>
                                        
                                        <div class="space"></div>
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                                <div class="col-md-6">State</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->state;?></strong></div>
                                                
                                                </div>
                                        
                                        
                                         <div class="col-md-6">
                                                <div class="col-md-6">District</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->district;?></strong></div>
                                                
                                                </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                                <div class="col-md-6">Address</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->address;?></strong></div>
                                                
                                                </div>
                                        
                                         <div class="col-md-6">
                                                <div class="col-md-6">Pincode</div>
                                                
                                                <div class="col-md-6"><strong><?php echo $member->pincode;?></strong></div>
                                                
                                                </div>
                                        </div>
                                        
                                        
                       
                                     <div class="space"></div>
                                     <div class="form-group">
                                     <div class="col-md-5"></div>
                                            <div class="col-md-6">
                                            
                                               
                                               
                                               <a class="btn btn-sm btn-primary" href="<?php echo base_url('edit_profile');?>" >Edit Profile</a>
                                               
                                            
                                               
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                               
                                
                           
 
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
           
            
            
            
            