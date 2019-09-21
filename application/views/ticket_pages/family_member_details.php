 


 

     
                            
                            
                            
                        
                         
                                <div class="block-content block-content-narrow row">
                   
                    <form class="form-horizontal" action="" method="post">
                    
                    <div class="col-lg-4" style="border-right: solid #CCC 1px; background-color:#F9E3DF;">
                            <!-- Article -->
                            <div class="block">
                                <div class="block-header" style="background-color:#F9E3DF;">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Family Member Details </h3>
                                </div>
                                <div class="block-content block-content-full"  style="background-color:#F9E3DF;">
                                    <!-- SlimScroll Container -->
                                   <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                                        
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                                    <div class="col-sm-12">
             <label class="control-label" for="val-select2">Relationship </label>
                                           
                                                <input class="form-control" type="text" id="relationship"  value="<?php echo $family_profile_info->relationship;?>" readonly>
                                                <br>

                            </div>
                                            
                                            
                                              
                                            <div class="col-md-12">
                                            <label>First Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->first_name;?>" readonly>
                                          <br>

                                    </div>
                                    
                                    <div class="col-md-12">
                                            <label >Middle Name</label>
                                           <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->middle_name;?>" readonly>
                                           <br>

                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label > Last Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->last_name;?>" readonly>
                                          <br>

                                    </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label>Mobile 1</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->mobile1;?>" readonly>
                                          <br>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label>Mobile 2</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->mobile2;?>" readonly>
                                          <br>
                                    </div>
                                    
                                    
                                     <div class="col-md-12">
                                            <label>Mobile 3</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->mobile3;?>" readonly>
                                          <br>
                                    </div>
                          
                          
                           <div class="col-md-12">
                                            <label>Date of Birth (Recorded)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->recorded_dob;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            
                            <div class="col-md-12">
                                            <label>Date of Birth (Actual)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->actual_dob;?>" readonly>
                                          <br>
                            </div>
                                    
                                    
                                    
                                    <div class="col-md-12">
                                            <label>Aadhar No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->aadhar_no;?>" readonly>
                                          <br>
                            </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label>Aadhar Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>uploads/individual/aadhar/<?php echo $family_profile_info->aadhar_scan;?>" width="250" height="120">
                                         
                                          <br>

                                          </div>
                            
                            
                            <div class="col-md-12"><br>

                                            <label>Pan No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->pan_no;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Pan Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>/uploads/individual/pan/<?php echo $family_profile_info->pan_scan;?>" width="250" height="120">
                                          <br>
                            </div>
                            
                            
                             <div class="col-md-12">
                             <br>

                                            <label>Voterid No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->voterid_no;?>" readonly>
                                          <br>
                                         

                            </div>
                          
                           <div class="col-md-12">
                                            <label>Voterid Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>uploads/individual/voterid/<?php echo $family_profile_info->voterid_scan;?>" width="250" height="120">
                                          <br>
                            </div>
                          
                          
                          
                          
                            <div class="col-md-12">
                            <br>

                            
                                            <label>Driving License No </label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->license_no;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Driving License Expiry Date </label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->license_expiry_date;?>" readonly>
                                          <br>
                            </div>
                            
                            
                             <div class="col-md-12">
                                            <label>Driving License Scan Copy</label>
                                          <img src="<?php echo base_url();?>uploads/individual/license/<?php echo $family_profile_info->license_scan;?>" width="250" height="120">
                                          <br>
                                     

                            </div>
                            
                            
                           
                            <div class="col-md-12">
                            <br>

                                            <label>Passport No </label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->passport_no;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Passport Expiry Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $family_profile_info->passport_expiry_date;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Passport Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>uploads/individual/passport/<?php echo $family_profile_info->passport_scan;?>" width="250" height="120">
                                          <br>
                            </div>
                            
                          
                          
                            </div>
                          
                          </div>           
                                  
        
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                     
                     
                     
                     
                     <div class="col-lg-4" >
                       <div class="col-lg-12" >
                            <!-- Article -->
                            <div class="block" >
                               <!-- <div class="block-header">
                                <h3 class="block-title">Family Member Details</h3>
                                </div>-->
                                <div class="block-content block-content-full">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Process </h3>
                                   <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          <div class="block-content block-content-full">
                          <?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?>

                    </div>
                                                   
                                  
                            </div>
                          
                          </div>           
                                 
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                    
                    
                      <div class="col-lg-12" >
                       
                       
                       <div class="col-md-12"><textarea name="remarks"  class="form-control" rows="6" placeholder="Remarks"></textarea>
                      
                      </div>
                    
                    </div>
                      
                      
                      
                      
                      
                      
                    
                    
                    
                     </div>
                      
                      
                      
                      
                      
                      <div class="col-lg-4" style="background-color:#F7E9C8;">
                            <!-- Article -->
                            <div class="block" style="background-color:#F7E9C8;">
                                <div class="block-header">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Family Member Details </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                                       
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          
                                                   <div class="form-group">
                                                  <div class="col-md-8">
                                                   <label class="control-label" for="val-select2">Relationship </label>
                                           
                                                <input class="form-control" type="text" id="example-text-input" name="relationship" value="<?php echo $family_profile_info->relationship;?>" readonly>
                                                
                                              </div>
                                               <div class="col-md-4">
                                               <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="relationship_radio" value="Yes"><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="relationship_radio" value="No" checked><span></span> No
                                            </label>
 
                                          </div>
                                              
                                              
                                              </div>
                                            
                                            
                                              
                                                  <div class="form-group">
                                                  <div class="col-md-8">
                                            <label>First Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="first_name" value="<?php echo $family_profile_info->first_name;?>" readonly>
                                          

                                    </div>
                                    
                                        <div class="col-md-4">
                                        <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="first_name_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="first_name_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                              
                                    
                                    </div>
                                    
                                                <div class="form-group">
                                                  <div class="col-md-8">
                                            <label >Middle Name</label>
                                           <input class="form-control" type="text" id="example-text-input" name="middle_name" value="<?php echo $family_profile_info->middle_name;?>" readonly>
                                           

                                    </div>
                                    
                                        <div class="col-md-4">
                                        <br>

                                            <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="middle_name_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="middle_name_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                              
                                    
                                    </div>
                                    
                                    
                                              <div class="form-group">
                                               <div class="col-md-8">
                                            <label > Last Name</label> 
                                          <input class="form-control" type="text" id="example-text-input" name="last_name" value="<?php echo $family_profile_info->last_name;?>" readonly>
                                         

                                    </div>
                                    
                                       <div class="col-md-4">
                                       <br>

                                            <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="last_name_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="last_name_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                              
                                    
                                    </div>
                                     
                                              <div class="form-group">
                                               <div class="col-md-8">
                                            <label>Mobile 1</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile1" value="<?php echo $family_profile_info->mobile1;?>" readonly>
                                         
                                    </div>
                                    
                                        <div class="col-md-4">
                                        <br>

                                           <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="mobile1_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="mobile1_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                    
                                               <div class="form-group">
                                               <div class="col-md-8">
                                            <label>Mobile 2</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile2" value="<?php echo $family_profile_info->mobile2;?>" readonly>
                                          
                                    </div>
                                    
                                     <div class="col-md-4">
                                     <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="mobile2_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="mobile2_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                          <div class="form-group">
                                               <div class="col-md-8">
                                            <label>Mobile 3</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile3" value="<?php echo $family_profile_info->mobile3;?>" readonly>
                                         
                                    </div>
                                    
                                    <div class="col-md-4">
                                    <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="mobile3_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="mobile3_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                    
                          
                          
                                             <div class="form-group">
                                               <div class="col-md-8">
                                            <label>Date of Birth (Recorded)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="recorded_dob" value="<?php echo $family_profile_info->recorded_dob;?>" readonly>
                                         
                            </div>
                                          <div class="col-md-4">
                                          <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="recorded_dob_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="recorded_dob_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                          </div>
                            
                            
                            
                                              <div class="form-group">
                                               <div class="col-md-8">
                                            <label>Date of Birth (Actual)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="actual_dob" value="<?php echo $family_profile_info->actual_dob;?>" readonly>
                                        
                                           </div>
                            
                                          <div class="col-md-4">
                                          <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="actual_dob_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="actual_dob_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                                    
                                    
                                    
                                              <div class="form-group">
                                               <div class="col-md-8">
                                            <label>Aadhar No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="aadhar_no" value="<?php echo $family_profile_info->aadhar_no;?>" readonly>
                                         
                                         </div>
                                         
                                          <div class="col-md-4">
                                          <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="aadhar_no_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="aadhar_no_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                         
                                         </div>
                                    
                                    
                                          <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Aadhar Scan Copy</label><br>

                                          <img src="<?php echo base_url('uploads/individual/aadhar/'.$family_profile_info->aadhar_scan);?>" width="250" height="120">
                                         
                                        

                                          </div>
                                          
                                          
                                          <div class="col-md-4">
                                          <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="aadhar_scan_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="aadhar_scan_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                          
                                          
                                          </div>
                            
                            
                                           <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Pan No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="pan_no" value="<?php echo $family_profile_info->pan_no;?>" readonly>
                                          
                                          </div>
                                          
                                           <div class="col-md-4">
                                           <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="pan_no_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="pan_no_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                          
                                          </div>
                             
                            
                                          <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Pan Scan Copy</label><br>

                                          <img src="<?php echo base_url('uploads/individual/pan/'.$family_profile_info->pan_scan);?>" width="250" height="120">
                                        
                                          </div>
                            
                                           <div class="col-md-4">
                                           <br>

                                            <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="pan_scan_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="pan_scan_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                                         <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Voterid No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="voterid_no" value="<?php echo $family_profile_info->voterid_no;?>" readonly>
                                        
                                       </div>
                                       
                                        <div class="col-md-4">
                                        <br>

                                              <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="voterid_no_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="voterid_no_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                       
                                       </div>
                          
                                        <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Voterid Scan Copy</label><br>

                                          <img src="<?php echo base_url('uploads/individual/voterid/'.$family_profile_info->voterid_scan);?>" width="250" height="120">
                                          
                                        </div>
                            
                                         <div class="col-md-4">
                                         <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="voterid_scan_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="voterid_scan_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                                       
                            
                          </div>
                          
                          
                          
                                        <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Driving License No </label>
                                          <input class="form-control" type="text" id="example-text-input" name="license_no" value="<?php echo $family_profile_info->license_no;?>" readonly>
                                       
                            </div>
                            
                                         <div class="col-md-4">
                                         <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="license_no_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="license_no_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                                         <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Driving License Expiry Date </label>
                                          <input class="form-control" type="text" id="example-text-input" name="license_expiry_date" value="<?php echo $family_profile_info->license_expiry_date;?>" readonly>
                                          
                            </div>
                            
                                          <div class="col-md-4">
                                          <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="license_expiry_date_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="license_expiry_date_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                                          <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Driving License Scan Copy</label>
                                          <img src="<?php echo base_url('uploads/individual/license/'.$family_profile_info->license_scan);?>" width="250" height="120">
                                         
                                     

                            </div>
                            
                                       <div class="col-md-4">
                                       <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="license_scan_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="license_scan_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                           
                                         <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Passport No </label>
                                          <input class="form-control" type="text" id="example-text-input" name="passport_no" value="<?php echo $family_profile_info->passport_no;?>" readonly>
                                          
                            </div>
                            
                                          <div class="col-md-4">
                                          <br>

                                            <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="passport_no_radio" value="Yes"><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="passport_no_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                                         <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Passport Expiry Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="passport_expiry_date" value="<?php echo $family_profile_info->passport_expiry_date;?>" readonly>
                                         
                            </div>
                            
                            
                                         <div class="col-md-4">
                                         <br>

                                            <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="passport_expiry_date_radio" value="Yes" ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="passport_expiry_date_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                                           <div class="form-group">
                                          <div class="col-md-8">
                                            <label>Passport Scan Copy</label><br>

                                          <img src="<?php echo base_url('uploads/individual/passport/'.$family_profile_info->passport_scan);?>" width="250" height="120">
                                          
                            </div>
                            
                                         <div class="col-md-4">
                                         <br>

                                             <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="passport_scan_radio" value="Yes"><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="passport_scan_radio" value="No" checked><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                          
                          
                            </div>
                          
                          </div>           
                                 
                                    
                                  
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                    
                    
                    
                     </div>
                               
                   
                        <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                           <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                           <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>">
                          <input type="hidden" name="family_member_max_id" value="<?php echo $info->family_member_max_id;?>">

                      

                                          
                                            
        
    
 
<hr>
   
   
                       <div class="row">
                        <div align="center" class="col-md-12">
                                       <label><p style="color: #F30;">Promoting Policy: </p></label>
                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="promoting_policy" value="1" ><span></span> Interested
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="promoting_policy" value="0" checked><span></span> Not Interested
                                            </label>
                                            <br>
<br>

                                          </div>
                        </div>



<div class="row" style="margin-bottom:30px;">
<div align="center" class="col-md-12" > 
                           
                         
                           <div class="col-md-4">
                           Postpone <input type="checkbox" id="chk2" name="row_1" >
                           </div>
                           
                            <div id="date"  class="col-md-4" style="display:none;">
                           <input id="date1" class="js-datepicker form-control" type="text" id="example-datepicker1" name="postpone" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                           </div>
                           
                         </div>
                        </div>




   

<div class="row">
                        <div class="col-md-12">
                        <div class="block">
                        <div class="col-md-4"></div>
                        
                         <div class="col-md-1"><input class="btn btn-minw btn-primary" type="submit" value="DONE" name="family_profile_check_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-success" type="submit" value="SKIP" name="family_profile_check_skip"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-warning" type="submit" value="Postpone" name="postpone_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-danger" type="submit" value="ESCALATE" name="family_profile_check_escalate"></div>
                        <br>
<br>
  </form>
                        
                        </div>
                        </div>
                        </div>
                        
                        
                        
                     
           
           
           
            
            
            
            