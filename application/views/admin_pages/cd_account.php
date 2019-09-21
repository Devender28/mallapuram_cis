 <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          CD Account Creation
                            </h1>
                        </div>
                        
                   <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/cd_account_details');?>" class="btn btn-minw btn-danger" type="button">View</a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->
                
                
               
             

                <!-- Page Content -->
                <div class="content content-narrow">
                    <div class="row">
                    
                    <?php echo $msg;?> 
                    
                    
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post"  enctype="multipart/form-data" >
                                       <br>

                                       
                                       <div class="col-md-12">
                                        
                                       
                                            <div class="form-group"> 
                                  
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Select Client</label>
                                            <div class="col-sm-9">
                                             <select class="js-select2 form-control" id="corporate_id"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id"required    onchange="getPolicy(this.value)" required>
  
                                               
                             <option value="" selected="selected">Please Corporate Client</option>
                                                    
<?php  foreach($corporate_clients as $corporate_client){?>                             
                                                    
                                                    
                        <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                   
<?php }?>                                                      

</select>

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Select Insurance Company</label>
                                            <div class="col-sm-9">
                                              <select class="js-select2 form-control" id="val-select2" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $cmp) {?>
                                                    <option value="<?php echo $cmp->id;?>"><?php echo $cmp->name;?></option>
                                                    
                                                    <?php } ?>
                                                     </select>

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                         </div>
                                            
                                            
                                    
                                            </div>
                                        
                             
                                        
                                     <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <input type="submit" class="btn btn-minw btn-danger" value="Create Account" name="add_cd_account">
                                               
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