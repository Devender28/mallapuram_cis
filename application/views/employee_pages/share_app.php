            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                        Share App

                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                       <a href="<?php echo base_url("share_app_details");?>"><button class="btn btn-minw btn-danger" type="button">Shared Details</button></a>
                           
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
                            
                            <div class="form-group bg_1"><h3>Share App</h3></div>
                            
                              <?php echo $msg;?>  
                                
                                
                                
                                <div class="block-content block-content-narrow">
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                       
                                       <br>
                                       
                                       
                                       
                                       
                                       
                                       <div class="form-group">
                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input"> Enter Name <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
            <input class="form-control" type="text" id="example-text-input" name="name"  required>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Mobile <span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="mobile"  required>
                                            </div>
                                          </div>
                                                
                                                
                                                </div>  
                                        
                                       
                                              <div class="space"></div>                                   
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Enter Email <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                        <input class="form-control" type="text" id="example-text-input" name="email"  required></div>
                                       
                                        </div>
                                        
                                        
                                        </div>
                                         
                                        
                                        
                                        
                                        
                                        
                                        
                       
                                     <div class="space"></div>
                                <div class="form-group">
                                     <div class="col-md-2"></div>
                                            <div class="col-md-6">
                                            
                                          <input type="submit" name="share_app" class="btn btn-minw btn-danger" value="Submit">
                                               
      
                                               
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
           
   