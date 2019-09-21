

  
   
   
                <!-- Header Navigation Right -->
                
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Add Addition 
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('hr/addition_view');?>"><button class="btn btn-minw btn-danger" type="button">View</button></a>
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
                            <div class="block"> <?php echo @$msg;?>
                                <div class="block-content block-content-narrow">
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>

                                     
                                     
                                     
                          <div class="form-group">
                          
                          <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="policy" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php
                                                       foreach($client_policies as $cpolicy){
                                                    ?>
                                                    <option value="<?php echo $cpolicy->id;?>"><?php echo $this->fun->getPolicy($cpolicy->policy_name);?></option>
                                                    <?php } ?>
                                                    
                                                     </select>
                                            </div>
                                    </div>
                          
                          
                          
                          <div class="col-md-6">
                                            <label class="col-xs-12">  Remarks</label>
                                            <div class="col-sm-9">
                                           <input class="form-control" type="text" id="example-text-input" name="remark" ></div>
                                        </div>
                          
                          </div>           
                                  
                               
                                         
                                         <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">File Upload*</label>
                                            <div class="col-sm-9">
                                          <input name="add_file" type="file"></div>
                                        </div>
                                        
                                        
                                        
                                       
                                         </div>
                                         
                                         
                                         
                                        
                                    
                                  
                                    
                                    <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                            
                                            
                                               <button class="btn btn-minw btn-danger" type="submit" name="add_request">Submit</button>
                                               
                                               
                                               <button class="btn btn-sm btn-primary" type="submit">Save & Add</button>
                                               
                                            
                                               
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
           
           
           
       