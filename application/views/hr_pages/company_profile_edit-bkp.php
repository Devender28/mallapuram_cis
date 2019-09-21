               
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push" >
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                                Company Profile
                            </h1>
                        </div>
                        
                   <div class="col-md-2">
                        <div class="col-xs-12">
                         <a href="company_profile_view.php"> <button class="btn btn-minw btn-danger" type="button">View</button></a>
                           </div>
                           </div> 
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                 
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" >
                                       <br>

                                       
                                       <div class="form-group">
                                       <div class="col-md-6">
                                       
                                            <label class="col-xs-12" for="val-username">Company Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="val-username" name="name" value="<?php echo $profile->name;?>"></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Address </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="address" value="<?php echo $profile->address;?>"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                         <label class="col-xs-12" >Pincode </label>
                                            <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="pincode" value="<?php echo $profile->pincode;?>"></div>
                                       
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Board Number(Company Contact Number) </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="contact_number" value="<?php echo $profile->contact_number;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >GST Number </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="gstn_number" value="<?php echo $profile->gstn_number;?>">    </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >GST Scan Copy</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="gstn_scan">
                                          <img src="<?php echo base_url();?>uploads/corporate_client/gstn/<?php echo $profile->gstn_scan;?>" width="250" height="105"></div>
                                          <input type="hidden" name="gstn_scanold" value="<?php echo $profile->gstn_scan;?>">
                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                         
                                            <label class="col-xs-12" >Logo </label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="logo">
                                           <img src="<?php echo base_url();?>uploads/corporate_client/logo/<?php echo $profile->logo;?>" width="300" height="100">
                                           <input type="hidden" name="logoold" value="<?php echo $profile->logo;?>">
                                           </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Company Pan Number</label>
                                            <div class="col-sm-9">
                                     <input class="form-control" type="text" id="example-text-input" name="pan_number" value="<?php echo $profile->pan_number;?>"> </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Company Pan Scan</label>
                                            <div class="col-sm-9">
                                        <input type="file" id="example-file-input" name="pan_scan"> </div>
                                          <img src="<?php echo base_url();?>uploads/corporate_client/pan/<?php echo $profile->pan_scan;?>" width="250" height="105">
                                          <input type="hidden" name="pan_scanold" value="<?php echo $profile->pan_scan;?>">
                                          </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Company Bank Account Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="bank_account_name" value="value="<?php echo $profile->bank_account_name;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Bank Account Number </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="bank_account_number" value="<?php echo $profile->bank_account_number;?>"> </div>
                                       
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank Name</label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text" id="example-text-input" name="bank_name" value="<?php echo $profile->bank_name;?>">
                                           
                                        </div>
                                        </div>
                                        
                                        </div>
                                        
                                        
                                       
                                       
                         
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                     
                                            <label class="col-xs-12" >Bank IFSC Code</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="ifsc_code" value="<?php echo $profile->ifsc_code;?>"> </div>
                                       
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         
                                            <label class="col-xs-12" >Cheque Scan Copy</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="cheque_scan">
                                                
                                                
                                          <img src="<?php echo base_url();?>uploads/corporate_client/cheque/<?php echo $profile->cheque_scan;?>" width="250" height="105">
                                          <input type="hidden" name="cheque_scanold" value="<?php echo $profile->cheque_scan;?>">
                                          </div>
                                        </div>
                                        </div>
                                        
                                        
                                       
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Authorised Contact Person Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="authorised_contact_person1_name" value="<?php echo $profile->authorised_contact_person1_name;?>"> </div>
                                       
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Authorised Contact Person1 Mobile </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="authorised_contact_person1_phone" value="<?php echo $profile->authorised_contact_person1_phone;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                             
                                        
                                     <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                            
                                            
                                               <input class="btn btn-minw btn-danger" type="submit" name="update_profile" value="Update Profile">
                                               
                                               
                                             
                                               
                                            
                                               
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
            <!-- END Main Container -->

       