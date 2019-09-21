<main id="main-container">
               
               <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Edit  Family Member Details
                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url("family_members");?>"><button class="btn btn-minw btn-danger" type="button">Back</button></a>
                           </div>
                           </div>  
                        
                    </div>
                </div>
              
               
               
               
                <div class="content content-narrow">
                  
                    
                    
                    <div class="row">
                         
                         
                         <div class="col-md-12">
                             
                             <div class="block">
                            <div class="form-group bg_1"><h3>Family Member Details</h3></div>
                               
                              <?php echo $msg;?>  
                                
                                
                                
                                <div class="block-content block-content-narrow">
                   
                   
                   <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
                                       
                                       <br>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="form-group">
                                                
                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Select Relationship</label>
                                          <div class="col-sm-9">
            <select class="js-select2 form-control" id="relationship" name="relationship" >
                                               
                                                    <option value="<?php echo $family_member->relationship;?>"><?php echo ucwords($family_member->relationship);?> </option>
                                                    <option value="father">Father</option>
                                                    <option value="mother">Mother</option>
                                                    <option value="brother">Brother</option>
                                                    <option value="sister">Sister</option>
                                                    <option value="spouse">Spouse</option>
                                                    <option value="son">Son</option>
                                                     <option value="daughter">Daughter</option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">First  Name </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="first_name" name="first_name"  value="<?php echo ucwords($family_member->first_name);?>">
                                            </div>
                                          </div>
                              </div>  
                                                 
                                                 
                                       
                                       
                                       
                                       
                                       <div class="form-group">
                                       
                                       <div class="col-md-6">
                               <label class="col-xs-12" for="example-text-input">Middle Name  </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="middle_name" name="middle_name"  value="<?php echo ucwords($family_member->middle_name);?>"></div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Last Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="last_name" name="last_name"  value="<?php echo ucwords($family_member->last_name);?>" ></div>
                                        
                                        </div>
                                      </div>  
                                        
                              
                              
                              
                              
                               <div class="form-group">
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Mobile1</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="mobile1" name="mobile1" value="<?php echo ucwords($family_member->mobile1);?>" ></div>
                                       
                                        </div>
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Mobile2 </label>
                                            <div class="col-sm-9">
                               <input class="form-control" type="text" id="mobile2" name="mobile2"  value="<?php echo ucwords($family_member->mobile2);?>"></div>
                                        
                                        </div>
                               
                               </div>
                                        
                                        
                                 
                                 
                                 
                                 
                                  <div class="form-group">
                                         
                                        <div class="col-md-6">
                                         
                                            <label class="col-xs-12" >Mobile3</label>
                                            <div class="col-sm-9">
                <input class="form-control" type="text" id="mobile3" name="mobile3"  value="<?php echo ucwords($family_member->mobile3);?>">   
                                             
                                            
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Date of Birth (Recorded)</label>
                                            <div class="col-sm-9">
             <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="recorded_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"   value="<?php echo $family_member->recorded_dob;?>"> </div>
                                       
                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                     
                                     
                                     
                                     <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Date of Birth (Actual)</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="actual_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"   value="<?php echo $family_member->actual_dob;?>"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Aadhar Details</h3> </div>
                                        </div>
                                        
                                        <div class="space"></div>
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Aadhar No</label>
                                            <div class="col-sm-9">
               <input class="form-control" type="text" id="aadhar_no" name="aadhar_no"   value="<?php echo $family_member->aadhar_no;?>">   
                                                
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                            <label class="col-xs-12" >Aadhar Scan Copy</label>
                                            <div class="col-sm-9">
                <input class="form-control" type="hidden" name="aadhar_scanold" value="<?php echo $family_member->aadhar_scan;?>"  >
                
                <input type="file" id="aadhar_scan" name="aadhar_scan">
                                           
                                       
                                       
                                       
              <img src="<?php echo base_url('../uploads/individual/aadhar/'.$family_member->aadhar_scan);?>" width="150px">                         
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                        </div>
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
               <input class="form-control" type="text" id="pan_no" name="pan_no"  value="<?php echo $family_member->pan_no;?>" >   
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Pan Upload</label>
                                            <div class="col-sm-9">
               <input class="form-control" type="hidden" name="pan_scanold" value="<?php echo $family_member->pan_scan;?>"  >
               <input type="file" id="pan_scan" name="pan_scan">
               <img src="<?php echo base_url('../uploads/individual/pan/'.$family_member->pan_scan);?>" width="150px">                        
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row bg_blue">
                                        

                                        <div class="col-md-6"><h3>Voter ID Details </h3> </div>
                                        </div>
                                        
                                        <div class="space"></div>
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Voterid No </label>
                                            <div class="col-sm-9">
             <input class="form-control" type="text" id="voterid_no" name="voterid_no"   value="<?php echo $family_member->voterid_no;?>">   </div>
                                      
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Voterid Scan Copy</label>
                                            <div class="col-sm-9">
                <input class="form-control" type="hidden" name="voterid_scanold" value="<?php echo $family_member->voterid_scan;?>"  >
                <input type="file" id="voterid_scan" name="voterid_scan">
                
                 <img src="<?php echo base_url('../uploads/individual/voterid/'.$family_member->voterid_scan);?>" width="150px"> 
                
                
                </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row bg_blue">
                                        

                                        <div class="col-md-6"><h3>Driving License Details</h3> </div>
                                        </div>
                                        
                                        
                                        <div class="space"></div>
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Driving License No</label>
                                            <div class="col-sm-9">
             <input class="form-control" type="text" id="license_no" name="license_no"   value="<?php echo $family_member->license_no;?>">   </div>
                                      
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Driving License Expiry Date</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="license_expiry_date" name="license_expiry_date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"  value="<?php echo $family_member->license_expiry_date;?>"> </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Driving License Scan Copy</label>
                                            <div class="col-sm-9">
             <input class="form-control" type="hidden" name="license_scanold" value="<?php echo $family_member->license_scan;?>"  >
             <input type="file" id="license_scan" name="license_scan"   > 
             
              <img src="<?php echo base_url('../uploads/individual/license/'.$family_member->license_scan);?>" width="150px">
             
             </div>
                                       
                                        </div>
                                         
                                         
                                         </div>
                                        
                                        
                                        
                                         
                                        <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Passport </h3> </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="space"></div>
                                        <div class="form-group">
                                         <div class="col-md-6">
                                           <label class="col-xs-12" >Passport No</label>
                                            <div class="col-sm-9">
              
              <input class="form-control" type="text" id="passport_no" name="passport_no"   value="<?php echo $family_member->passport_no;?>">
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Passport Expiry Date</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="passport_expiry_date" name="passport_expiry_date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"  value="<?php echo $family_member->passport_expiry_date;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                        <label class="col-xs-12" >Passport Scan Copy</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="hidden" name="passport_scanold" value="<?php echo $family_member->passport_scan;?>"  >
              <input type="file" id="passport_scan"  name="passport_scan">  
              
              <img src="<?php echo base_url('../uploads/individual/passport/'.$family_member->passport_scan);?>" width="150px">
              
              
              
              </div>
                                        
                                        </div>
                                        
                                        
                                         
                                        </div>
                                        
                                     
                                        
                                        
                       
                                     <div class="space"></div>
                                     <div class="form-group">
                                     <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                               <button class="btn btn-sm btn-primary" type="submit" name="edit_family_member">Update Family Member</button>
                  
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                          
 
                                
                            </div>
                        </div>
                        
                    </div>
                  
                   
                </div>
           </main>
           