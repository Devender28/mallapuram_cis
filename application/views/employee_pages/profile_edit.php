  

               

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             Edit Profile
                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('profile');?>"><button class="btn btn-minw btn-danger" type="button">View Profile</button></a>
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
                            <div class="block"><?php echo @$msg;?>
                            
                             <div class="form-group bg_1"><h3>Member Profile</h3></div>
                                <div class="block-content block-content-narrow">
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                       
                                       <br>
                                                <div class="form-group">
                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">First  Name </label>
                                          <div class="col-sm-9">
            <input class="form-control" type="text" id="" name="first_name" value="<?php echo $member->first_name;?>" >
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Middle Name</label>
                                          <div class="col-sm-9"> 
             <input class="form-control" type="text" id="example-text-input" name="middle_name" value="<?php echo $member->middle_name;?>" >
                                            </div>
                                          </div>
                                                
                                                
                                                </div>  
                                                 
                                                 
                                       
                                       <div class="form-group">
                                       <div class="col-md-6">
                               <label class="col-xs-12" for="example-text-input">Last Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="last_name" value="<?php echo $member->last_name;?>"></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Email1</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="email1" value="<?php echo $member->email1;?>"></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Email2</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="email2"  value="<?php echo $member->email2;?>"></div>
                                       
                                        </div>
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Mobile1 </label>
                                            <div class="col-sm-9">
                               <input class="form-control" type="text" id="example-text-input" name="mobile1"  value="<?php echo $member->mobile1;?>"></div>
                                        
                                        </div>
                                        </div>

                                         <div class="form-group">
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Mobile2</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="mobile2"  value="<?php echo $member->mobile2;?>"></div>
                                       
                                        </div>
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Mobile3 </label>
                                            <div class="col-sm-9">
                               <input class="form-control" type="text" id="example-text-input" name="mobile3"  value="<?php echo $member->mobile3;?>"></div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         
                                        
                                        
                                       <!--  <div class="col-md-6">
                                         
                                            <label class="col-xs-12" >Username</label>
                                            <div class="col-sm-9">
                <input class="form-control" type="text" id="example-text-input" name="username" value="<?php echo $member->username;?>" readonly>   
                                             
                                            
                                        </div>
                                        </div> -->
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Date of Birth (Recorded)</label>
                                            <div class="col-sm-9">
             <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="r_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $member->recorded_dob;?>"> </div>
                                       
                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                    
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Date of Birth (Actual)</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="a_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $member->actual_dob;?>"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Aadhar Details</h3> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <div class="space"></div>
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Aadhar No</label>
                                            <div class="col-sm-9">
               <input class="form-control" type="text" id="example-text-input" name="aadhar_no"  value="<?php echo $member->aadhar_no;?>">   
                                                
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                            <label class="col-xs-12" >Aadhar Scan Copy</label>
                                            <div class="col-sm-9">
                <input type="file" id="example-file-input" name="aadhar_scan" >
                 <img src="<?php echo base_url('uploads/individual/aadhar/'.$member->aadhar_scan);?>" width="150" height="80"></div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="row bg_blue">
                                        

                                        <div class="col-md-6"> <h3>Pan Card Details</h3> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                        <div class="space"></div>
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12">Pan No</label>
                                            <div class="col-sm-9">
               <input class="form-control" type="text" id="example-text-input" name="pan_no" value="<?php echo $member->pan_no;?>" >   
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Pan Upload</label>
                                            <div class="col-sm-9">
               <input type="file" id="example-file-input" name="pan_scan" value="<?php echo $member->pan_scan;?>">
                <img src="<?php echo base_url('uploads/individual/pan/'.$member->pan_scan);?>" width="150" height="80">
                                       
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row bg_blue">

                                        <div class="col-md-6"><h3>Voter ID Details</h3> </div>
                                        </div>
                                       <div class="form-group">
                                        
                                        <div class="space"></div>
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Voterid No</label>
                                            <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="voter_no" value="<?php echo $member->voterid_no;?>" >   </div>
                                      
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Voterid Scan Copy</label>
                                            <input type="file" id="example-file-input" name="voter_scan" value="<?php echo $member->voterid_scan;?>">
                                            <div class="col-md-6"><img src="<?php echo base_url('uploads/individual/voterid/'.$member->voterid_scan);?>" width="150" height="80"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="row bg_blue">

                                        <div class="col-md-6"><h3>Driving License Details</h3> </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="space"></div>
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Driving License No</label>
                                            <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="license_no" value="<?php echo $member->license_no;?>" >   </div>
                                      
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Driving License Expiry Date</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="license_expiry" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $member->license_expiry_date;?>"> </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Driving License Scan Copy</label>
                                            <div class="col-sm-9">
             <input type="file" id="example-file-input" name="license_scan" value="<?php echo $member->license_scan;?>"> 
              <img src="<?php echo base_url('uploads/individual/license/'.$member->license_scan);?>" width="150" height="80"></div>
                                       
                                        </div>
                                         
                                         
                                         </div>
                                        
                                        
                                        
                                         
                                        <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Passport Details </h3> </div>
                                        </div>
                                        
                                        <div class="space"></div>
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                           <label class="col-xs-12" >Passport No</label>
                                            <div class="col-sm-9">
              
              <input class="form-control" type="text" id="example-text-input" name="passport_no" value="<?php echo $member->passport_no;?>" >
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Passport Expiry Date</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="passport_expiry" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $member->passport_expiry_date;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                        <label class="col-xs-12" >Passport Scan Copy</label>
                                            <div class="col-sm-9">
              <input type="file" id="example-file-input" name="passport_scan" value="<?php echo $member->passport_scan;?>">
               <img src="<?php echo base_url('uploads/individual/passport/'.$member->passport_scan);?>" width="150" height="80">  </div>
                                        
                                        </div>
                                        
                                        
                                         
                                        </div>
                                        
                                        <div class="space"></div>
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >State</label>
                                            <div class="col-sm-9">
             

<input class="form-control" type="text" id="example-text-input" name="state" value="<?php echo $member->state;?>" >
                                           
                                                

<!--
<select class="js-select2 form-control" id="val-select2" name="state" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    
                                                    <option value="Telangana" <?php if($member->state=='Telangana') echo "selected"; ?> >Telangana</option>
                                                    <option value="Andhra Pradesh" <?php if($member->state=='Andhra Pradesh') echo "selected"; ?>>Andhra Pradesh</option>
                                                    <option value="Karnataka" <?php if($member->state=='Karnataka') echo "selected"; ?>>Karnataka</option>
                                                    <option value="Maharashtra" <?php if($member->state=='Maharashtra') echo "selected"; ?>>Maharashtra</option>
                                                    
                                                     </select>

-->



</div>
                                        
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >District</label>
                                            <div class="col-sm-9">
                  <input class="form-control" type="text" id="example-text-input" name="district" value="<?php echo $member->district;?>" >
                <!--                               

                 <select class="js-select2 form-control" id="val-select2" name="district" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    
                                                    <option value="Rangareddy" <?php if($member->district=='Rangareddy') echo "selected"; ?>>Rangareddy</option>
                                                    <option value="Khammam" <?php if($member->district=='Khammam') echo "selected"; ?>>Khammam</option>
                                                    <option value="Nijamabad" <?php if($member->district=='Nijamabad') echo "selected"; ?>>Nijamabad</option>
                                                    <option value="Adilabad" <?php if($member->district=='Adilabad') echo "selected"; ?>>Adilabad</option>
                                                    
                                                     </select>




-->



</div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Address </label>
                                            <div class="col-sm-9">
                           <input class="form-control" type="text" id="example-text-input" name="address" value="<?php echo $member->address;?>" ></div>
                                       
                                        </div>
                                        
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Pincode</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="pincode"  value="<?php echo $member->pincode;?>">
                 
                    </div>
                                        </div>
                                        </div>
                                        
                                        
                       
                                     <div class="space"></div>
                                     <div class="form-group">
                                     <div class="col-md-5"></div>
                                            <div class="col-md-6">
                                            
                                               
                                               
                                               <button class="btn btn-sm btn-primary" type="submit" name="update_profile">Update</button>
                                               
                                            
                                               
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
           
            
            
            
            