    
           

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Add Insurance Policy Types
                            </h1>
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
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>

                                       
                                      <?php echo $msg;?>

                                       <div class="form-group">
                                       
                                       
                                       
                                       <div class="col-md-6">
                                           <div class="col-sm-9">
             <label class="control-label" >Select Categorey <span class="text-danger">*</span></label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="category"  data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group">Group</option>
                                                    <option value="Corporate">Corporate</option>
                                                    <option value="Individual">Individual</option>
                                                    
                                                       
                                                     </select>
                                            </div>
                                        </div>
                                       
                                       
                                       
                                       
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Insurance Policy Types <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="type" required> </div>
                                        </div>
                                        
                                        
                                        
                                       
                                       
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                            <div class="col-xs-9">
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-sm btn-primary" type="submit" name="add_policy_type">Submit & Add</button>
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_policy_type_red">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                
                              
                            </div>
                            
                       
                        </div>
                        
                    </div>
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
         
            <!-- END Footer -->
      


       
       
       
     
        
 
        
        
        
        
        