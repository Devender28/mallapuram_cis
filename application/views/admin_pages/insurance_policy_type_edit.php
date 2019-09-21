    
              
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Update Insurance Policy Types
                            </h1>
                        </div>

                         <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/insurance_policy_type');?>" class="btn btn-minw btn-danger" type="button">Back</a>
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
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>

                                       
                                      <?php echo $msg;?>

                                       <div class="form-group">
                                       
                                       
                                       
                                       <div class="col-md-6">
                                           <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Category</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="category" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                   <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group" <?php if($type->category=='Group') { echo "selected"; } ?>>Group</option>
                                                    <option value="Individual" <?php if($type->category=='Individual') { echo "selected"; } ?>>Individual</option>
                                                     <option value="Corporate" <?php if($type->category=='Corporate') { echo "selected"; } ?>>Corporate</option>
                                                       
                                                     </select>
                                            </div>
                                        </div>
                                       
                                       
                                       
                                       
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Insurance Policy Types</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="type" value="<?php echo $type->name;?>" required> </div>
                                        </div>
                                        
                                        
                                        </div>


                                       <br> 
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                            <div class="col-xs-9">
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-sm btn-primary" type="submit" name="update_policy_type">Update</button>
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
      
       
       
       
     
        
         
        
        
        
        
        
        