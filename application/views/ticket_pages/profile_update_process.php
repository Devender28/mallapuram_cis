<?php  $checking_info=$this->db->get_where('check_ind_registration',array('ticket_id'=>$info->ticket_id))->row(); ?>


<div class="block-content block-content-narrow row">

                   
 <form class="form-horizontal" action="" method="post">                   
                    
                   
                    <div class="col-lg-4">
                            <!-- Article -->
                            <div class="block">
                            
                                <div class="block-header" style="background-color:#F9E3DF;">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Profile </h3>
                                </div>
                                <div class="block-content block-content-full" style="background-color:#F9E3DF;">
                                
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                                    
                                       
                          <div class="form-group">
                          
                          <div class="col-md-12">
                                    <div class="col-sm-12">
             <label class="control-label" for="val-select2">First Name</label>
                                           
                                                <input class="form-control" type="text" id="example-text-input" name="first_name" value="<?php echo $profile_info->first_name;?>" readonly>
                                                <br>

                            </div>
                                            
                                            
                                              
                                            <div class="col-md-12">
                                            <label> Middle Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="middle_name" value="<?php echo $profile_info->middle_name;?>" readonly>
                                          <br>

                                    </div>
                                    
                                    <div class="col-md-12">
                                            <label >Last Name</label>
                                           <input class="form-control" type="text" id="example-text-input" name="last_name" value="<?php echo $profile_info->last_name;?>" readonly>
                                           <br>

                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label>Email 1</label>
                                          <input class="form-control" type="text" id="example-text-input" name="email1" value="<?php echo $profile_info->email1;?>" readonly>
                                          <br>

                                    </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label> Email 2</label>
                                          <input class="form-control" type="text" id="example-text-input" name="email2" value="<?php echo $profile_info->email2;?>" readonly>
                                          <br>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label>Mobile 1</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile1" value="<?php echo $profile_info->mobile1;?>" readonly>
                                          <br>
                                    </div>
                                    
                                    
                                     <div class="col-md-12">
                                            <label>Mobile 2</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile2" value="<?php echo $profile_info->mobile2;?>" readonly>
                                          <br>
                                    </div>
                          
                          
                           <div class="col-md-12">
                                            <label>Mobile 3</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile3" value="<?php echo $profile_info->mobile3;?>" readonly>
                                          <br>
                            </div>
                            
                            
                             <div class="col-md-12">
                                            <label>Date of Birth (Recorded)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="recorded_dob" value="<?php echo $profile_info->recorded_dob;?>" readonly>
                                          <br>
                            </div>
                                    
                                    
                                     <div class="col-md-12">
                                            <label>Date of Birth (Actual)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="actual_dob" value="<?php echo $profile_info->actual_dob;?>" readonly> 
                                          <br>
                            </div>
                            
                              
                                    
                                    
                                    
                                    
                                      <h2>Uploads</h2>
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Aadhar No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="aadhar_no" value="<?php echo $profile_info->aadhar_no;?>" readonly>
                                          <br>
                            </div>
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Aadhar Scan Copy</label><br>

                                            <img src="<?php echo base_url();?>individual/uploads/individual/aadhar/<?php echo $profile_info->aadhar_scan;?>" width="250" height="120">
                                          <br>
                                          </div>
                                          
                                          
                                          
                                          
                                          
                                          
                                           <div class="col-md-12">
                                            <label>Pan No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $profile_info->pan_no;?>" readonly>
                                          <br>
                            </div>
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Pan Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/pan/<?php echo $profile_info->pan_scan;?>" width="250" height="120">
                                          <br>
                                          </div>
                            
                            
                            
                           
                              <div class="col-md-12">
                                            <label>Voterid No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="voterid_no" value="<?php echo $profile_info->voterid_no;?>" readonly>
                                          <br>
                            </div>
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Voterid Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/voterid/<?php echo $profile_info->voterid_scan;?>" width="250" height="120">
                                          <br>
                                          </div>
                                          
                                          
                                          
                                            <div class="col-md-12">
                                            <label>Driving License No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="license_no" value="<?php echo $profile_info->license_no;?>" readonly> 
                                          <br>
                            </div>
                                      
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Driving License Expiry Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="license_expiry_date" value="<?php echo $profile_info->license_expiry_date;?>" readonly>
                                          <br>
                            </div>
                                      <div class="col-md-12">
                                            <label>Driving License Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/license/<?php echo $profile_info->license_scan;?>" width="250" height="120">
                                          <br>
                                          </div>
                                          
                                          
                                          
                                           <div class="col-md-12">
                                            <label>Passport No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="passport_no" value="<?php echo $profile_info->passport_no;?>" readonly>
                                          <br>
                            </div>
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Passport Expiry Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="passport_expiry_date" value="<?php echo $profile_info->passport_expiry_date;?>" readonly>
                                          <br>
                            </div>
                                      
                                      
                                      <div class="col-md-12">
                                            <label>Passport Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/passport/<?php echo $profile_info->passport_scan;?>" width="250" height="120">
                                          <br>
                                          </div>
                                          
                                          
                                          
                                           <div class="col-md-12">
                                            <label>State</label>
                                          <input class="form-control" type="text" id="example-text-input" name="state" value="<?php echo $profile_info->state;?>" readonly>
                                          <br>
                            </div>
                                      
                                      
                                      
                                      
                                      <div class="col-md-12">
                                            <label>District</label>
                                          <input class="form-control" type="text" id="example-text-input" name="district" value="<?php echo $profile_info->district;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                            <label>Address</label>
                                          <input class="form-control" type="text" id="example-text-input" name="address" value="<?php echo $profile_info->address;?>" readonly>
                                          <br>
                            </div>
                            
                            
                            
                            <div class="col-md-12">
                                            <label>Pincode</label>
                                          <input class="form-control" type="text" id="example-text-input" name="pincode" value="<?php echo $profile_info->pincode;?>" readonly>
                                          <br>
                            </div>
                            </div>
                          </div>           
                        
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                     
 </form>                    
                     
  <form class="form-horizontal" action="" method="post">                   
                     <div class="col-lg-4" >
                       <div class="col-lg-12" >
                            <!-- Article -->
                            <div class="block" >
                               <!-- <div class="block-header">
                                <h3 class="block-title">Family Member Details</h3>
                                </div>-->
                                <div class="block-content block-content-full">
                                  <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Process </h3>
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                        
                          
                          <div class="block-content ">
                          <p>
						  <?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?>
                          </p>
   


                    </div>
                                                   
                                  
                            </div>
                          
                          </div>           
                                 
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                    
                    
                      <div class="col-lg-12" >
                      
                       
                       <div class="col-md-12">
                       <textarea  class="form-control"  rows="6"  name="remarks" placeholder="Remarks"></textarea>
                      
                      </div>
                    
                    </div>
                   
                     </div>
                      
                      
                      
                      
                      
                     
                      <div class="col-lg-4" >
                            <!-- Article -->
                            <div class="block">
                            
                                <div class="block-header" style="background-color:#F7E9C8;">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Profile </h3>
                                </div>
                                <div class="block-content block-content-full" style="height:500px;" style="background-color:#F7E9C8;">
                                
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true" style="background-color:#F7E9C8; padding:20px; margin-top:-20px;">
                                    
                                        
                          <div class="form-group">
                          <div class="col-md-12">
                           <div class="form-group">
                                    <div class="col-md-8">
             <label class="control-label" for="val-select2">First Name</label>
                                           
                                                <input class="form-control" type="text" id="example-text-input" name="first_name" value="<?php echo $profile_info->first_name;?>" <?php if($checking_info->first_name=="Yes"){ echo "readonly";}?>> 
                                             
                                             </div>
                                             
                                              <div class="col-md-4">
                                             
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="first_name_radio"  <?php if($checking_info->first_name=="Yes"){ echo "checked";}?> > <span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  name="first_name_radio"  <?php if($checking_info->first_name=="No"){ echo "checked";}?>><span></span> No
                                            </label>
                                                
                                            

                            </div>
                                
                                </div>            
                                            
                                              
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label> Middle Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="middle_name" value="<?php echo $profile_info->middle_name;?>" <?php if($checking_info->middle_name=="Yes"){ echo "readonly";}?>>
                                        

                                    </div>
                                    
                                    <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="middle_name_radio"  <?php if($checking_info->middle_name=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->middle_name=="No"){ echo "checked";}?> name="middle_name_radio"  ><span></span> No
                                            </label>
                                          </div>
                                          </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label >Last Name</label>
                                           <input class="form-control" type="text" id="example-text-input" name="last_name" value="<?php echo $profile_info->last_name;?>" <?php if($checking_info->last_name=="Yes"){ echo "readonly";}?>>
                                           
                                    </div>
                                    
                                    <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="last_name_radio"  <?php if($checking_info->last_name=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->last_name=="No"){ echo "checked";}?> name="last_name_radio"><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Email 1</label>
                                          <input class="form-control" type="text" id="example-text-input" name="email1" value="<?php echo $profile_info->email1;?>" <?php if($checking_info->email1=="Yes"){ echo "readonly";}?>>
                                    </div>
                                    
                                    
                                      <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="email1_radio" <?php if($checking_info->email1=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->email1=="No"){ echo "checked";}?> name="email1_radio"><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                     <div class="form-group">
                                    <div class="col-md-8">

                                            <label> Email 2</label>
                                          <input class="form-control" type="text" id="example-text-input" name="email2" value="<?php echo $profile_info->email2;?>" <?php if($checking_info->email2=="Yes"){ echo "readonly";}?>>
                                         
                                    </div>
                                    
                                    <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="email2_radio"  <?php if($checking_info->email2=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->email2=="No"){ echo "checked";}?> name="email2_radio"><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Mobile 1</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile1" value="<?php echo $profile_info->mobile1;?>" <?php if($checking_info->mobile1=="Yes"){ echo "readonly";}?>>
                                         
                                    </div>
                                    
                                    <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="mobile1_radio"  <?php if($checking_info->mobile1=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio"  value="No"  <?php if($checking_info->mobile1=="No"){ echo "checked";}?> name="mobile1_radio"><span></span> No
                                            </label>
                                          </div>
                                    
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Mobile 2</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile2" value="<?php echo $profile_info->mobile2;?>" <?php if($checking_info->mobile2=="Yes"){ echo "readonly";}?>>
                                         
                                    </div>
                                    
                                    
                                     <div class="col-md-4">
                                          <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="mobile2_radio"  <?php if($checking_info->mobile2=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio"  value="No"  <?php if($checking_info->mobile2=="No"){ echo "checked";}?> name="mobile2_radio"><span></span> No
                                            </label>
                                          </div>
                                    
                                    
                                    </div>
                          
                          
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Mobile 3</label>
                                          <input class="form-control" type="text" id="example-text-input" name="mobile3" value="<?php echo $profile_info->mobile3;?>" <?php if($checking_info->mobile3=="Yes"){ echo "readonly";}?>>
                                      
                                    </div>
                            
                            
                            
                                     <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="mobile3_radio" <?php if($checking_info->mobile3=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->mobile3=="No"){ echo "checked";}?> name="mobile3_radio"><span></span> No
                                            </label>
                                          </div>
                                         </div>
                            
                            
                                    
                                    
                                    
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Date of Birth (Recorded)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="recorded_dob" value="<?php echo $profile_info->recorded_dob;?>" <?php if($checking_info->recorded_dob=="Yes"){ echo "readonly";}?>>
                                          
                            </div>
                            
                                             <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="recorded_dob_radio"  <?php if($checking_info->recorded_dob=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->recorded_dob=="No"){ echo "checked";}?> name="recorded_dob_radio"><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Date of Birth (Actual)</label>
                                          <input class="form-control" type="text" id="example-text-input" name="actual_dob" value="<?php echo $profile_info->actual_dob;?>" <?php if($checking_info->actual_dob=="Yes"){ echo "readonly";}?>>
                                          
                            </div>
                            
                                          <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="actual_dob_radio" <?php if($checking_info->actual_dob=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->actual_dob=="No"){ echo "checked";}?> name="actual_dob_radio"><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                                    
                                    
                                    
                                    
                                      <h2>Uploads</h2>
                                      
                                      
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Aadhar No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="aadhar_no" value="<?php echo $profile_info->aadhar_no;?>" <?php if($checking_info->aadhar_no=="Yes"){ echo "readonly";}?>>
                                          
                                       </div>
                            
                                          <div class="col-md-4">
                                          <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="aadhar_no_radio" <?php if($checking_info->aadhar_no=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->aadhar_no=="No"){ echo "checked";}?> name="aadhar_no_radio"><span></span> No
                                            </label>
                                          </div>
                                       </div>
                                      
                                      
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Aadhar Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/aadhar/<?php echo $profile_info->aadhar_scan;?>" width="250" height="120">
                                         
                                          </div>
                                          
                                          
                                          <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="aadhar_scan_radio"  <?php if($checking_info->aadhar_scan=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->aadhar_scan=="No"){ echo "checked";}?>  name="aadhar_scan_radio"><span></span> No
                                            </label>
                                          </div>
                                          
                                          </div>
                                          
                                          
                                          
                                          
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Pan No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="pan_no" value="<?php echo $profile_info->pan_no;?>" <?php if($checking_info->pan_no=="Yes"){ echo "readonly";}?>>
                                     </div>
                                     
                                     <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="pan_no_radio"  <?php if($checking_info->pan_no=="Yes"){ echo "checked";}?> ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->pan_no=="No"){ echo "checked";}?> name="pan_no_radio"><span></span> No
                                            </label>
                                          </div>
                                     
                            </div>
                                      
                                      
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Pan Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/pan/<?php echo $profile_info->pan_scan;?>" width="250" height="120">
                                          
                                          </div>
                                          
                                          
                                          <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="pan_scan_radio"  <?php if($checking_info->pan_scan=="Yes"){ echo "checked";}?> ><span></span> Yes  
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->pan_scan=="No"){ echo "checked";}?> name="pan_scan_radio"><span></span> No
                                            </label>
                                          </div>
                                          
                                          </div>
                            
                            
                            
                           
                                   <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Voterid No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="voterid_no" value="<?php echo $profile_info->voterid_no;?>" <?php if($checking_info->voterid_no=="Yes"){ echo "readonly";}?>>
                                         
                            </div>
                            
                                       <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="voterid_no_radio"  <?php if($checking_info->voterid_no=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->voterid_no=="No"){ echo "checked";}?> name="voterid_no_radio"><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                                      
                                      
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Voterid Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/voterid/<?php echo $profile_info->voterid_scan;?>" width="250" height="120">
                                         
                                          </div>
                                          
                                          <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="voterid_scan_radio"  <?php if($checking_info->voterid_scan=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->voterid_scan=="No"){ echo "checked";}?> name="voterid_scan_radio"><span></span> No
                                            </label>
                                          </div>
                            
                                          
                                          
                                          </div>
                                          
                                          
                                      <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Driving License No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="license_no" value="<?php echo $profile_info->license_no;?>" <?php if($checking_info->license_no=="Yes"){ echo "readonly";}?>>
                                        
                                   </div>
                            
                            <div class="col-md-4">
                                          <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio"  value="Yes" name="license_no_radio"  <?php if($checking_info->license_no=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->license_no=="No"){ echo "checked";}?> name="license_no_radio"><span></span> No
                                            </label>
                                          </div>
                            
                              
                            </div>
                                      
                                      
                                      
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Driving License Expiry Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="license_expiry_date" value="<?php echo $profile_info->license_expiry_date;?>" <?php if($checking_info->license_expiry_date=="Yes"){ echo "readonly";}?>>
                                         
                            </div>
                            
                                      <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="license_expiry_date_radio"  <?php if($checking_info->license_expiry_date=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->license_expiry_date=="No"){ echo "checked";}?> name="license_expiry_date_radio"><span></span> No
                                            </label>
                                            
                                          </div>
                            
                            </div>
                            
                            
                            
                            
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Driving License Scan Copy</label><br>
                                          <img src="<?php echo base_url();?>individual/uploads/individual/license/<?php echo $profile_info->license_scan;?>" width="250" height="120">
                                          </div>
                                          
                                           <div class="col-md-4">
                                             <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="license_scan_radio"  <?php if($checking_info->license_scan=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->license_scan=="No"){ echo "checked";}?> name="license_scan_radio"><span></span> No
                                            </label>
                                            
                                          </div>
                                          
                                          </div>
                                          
                                          
                                          
                                          
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Passport No</label>
                                          <input class="form-control" type="text" id="example-text-input" name="passport_no" value="<?php echo $profile_info->passport_no;?>" <?php if($checking_info->passport_no=="Yes"){ echo "readonly";}?>>
                                          
                                        </div>
                                        
                                        <div class="col-md-4">
                                          <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="passport_no_radio" <?php if($checking_info->passport_no=="Yes"){ echo "checked";}?> ><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->passport_no=="No"){ echo "checked";}?> name="passport_no_radio"><span></span> No
                                            </label>
                                            
                                          </div>
                                        
                                        </div>
                                      
                                      
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Passport Expiry Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="passport_expiry_date" value="<?php echo $profile_info->passport_expiry_date;?>" <?php if($checking_info->passport_expiry_date=="Yes"){ echo "readonly";}?>>
                                          
                            </div>
                            
                                        <div class="col-md-4">
                                         <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="passport_expiry_date_radio" <?php if($checking_info->passport_expiry_date=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->passport_expiry_date=="No"){ echo "checked";}?> name="passport_expiry_date_radio"><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                                      
                                      
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Passport Scan Copy</label><br>

                                          <img src="<?php echo base_url();?>individual/uploads/individual/passport/<?php echo $profile_info->passport_scan;?>" width="250" height="120">
                                          
                                          </div>
                                          
                                          <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio"  value="Yes" name="passport_scan_radio"  <?php if($checking_info->passport_scan=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->passport_scan=="No"){ echo "checked";}?> name="passport_scan_radio"><span></span> No
                                            </label>
                                          </div>
                            
                                          
                                          </div>
                                          
                                          
                                     <div class="form-group">
                                    <div class="col-md-8">
                                            <label>State</label>
                                          <input class="form-control" type="text" id="example-text-input" name="state" value="<?php echo $profile_info->state;?>" <?php if($checking_info->state=="Yes"){ echo "readonly";}?>>
                                          
                                    </div>
                                             <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="state_radio"  <?php if($checking_info->state=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->state=="No"){ echo "checked";}?> name="state_radio"><span></span> No
                                            </label>
                                          </div>
                            </div>
                                      
                                      
                                      
                                      
                                      <div class="form-group">
                                    <div class="col-md-8">
                                            <label>District</label>
                                          <input class="form-control" type="text" id="example-text-input" name="district" value="<?php echo $profile_info->district;?>" <?php if($checking_info->district=="Yes"){ echo "readonly";}?>>
                                        
                            </div>
                            
                                        <div class="col-md-4">
                                             <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes"  name="district_radio"  <?php if($checking_info->district=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->district=="No"){ echo "checked";}?> name="district_radio"><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                            
                            
                            
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Address</label>
                                          <input class="form-control" type="text" id="example-text-input" name="address" value="<?php echo $profile_info->address;?>" <?php if($checking_info->address=="Yes"){ echo "readonly";}?>>
                                          
                            </div>
                            
                                           <div class="col-md-4">
                                            <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="address_radio"  <?php if($checking_info->address=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->address=="No"){ echo "checked";}?> name="address_radio"><span></span> No
                                            </label>
                                          </div>
                                            </div>
                            
                            
                                    <div class="form-group">
                                    <div class="col-md-8">
                                            <label>Pincode</label>
                                          <input class="form-control" type="text" id="example-text-input" name="pincode" value="<?php echo $profile_info->pincode;?>" <?php if($checking_info->pincode=="Yes"){ echo "readonly";}?>>
                                         
                            </div>
                            
                                       <div class="col-md-4">
                                           <br>

                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" value="Yes" name="pincode_radio"  <?php if($checking_info->pincode=="Yes"){ echo "checked";}?>><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" value="No"  <?php if($checking_info->pincode=="No"){ echo "checked";}?>  name="pincode_radio"><span></span> No
                                            </label>
                                          </div>
                            
                            </div>
                        
                         
                            
                            
                            
                           <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                           <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                           <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>"> 
                            
                            
                            
                            
                          
                          
                          
                            </div>
                          
                          </div>           
                                  
                       </div>
                       
       </div>
   </div>
</div>


</div>

 
 
 
 
 
 
 
 
 
 
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
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-primary" type="submit" value="DONE" name="profile_update_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-success" type="submit" value="SKIP" name="profile_update_skip"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-warning" type="submit" value="Postpone" name="postpone_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-danger" type="submit" value="ESCALATE" name="profile_update_escalate"></div>
                        <br>
<br>
 </form>
                        
                        </div>
                        </div>
                        </div>
                        
                        
 
 
 
 
 
 