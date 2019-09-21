    
           

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Update Ticket Type
                            </h1>
                        </div>
                      
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('ticket/ticket_types');?>" class="btn btn-minw btn-danger" type="button">View</a>
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

                                       
                                      <?php echo @$msg;?>

                                       <div class="form-group">
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Ticket Type</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="name" value="<?php echo $type->name;?>" required> </div>
                                        </div>
                                        
                                        
                                        
                                       
                                       
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                            <div class="col-xs-9">
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-sm btn-primary" type="submit" name="edit_ticket_type">Update</button>
                                               
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
      


       
       
       
     
        
 
        
        
        
        
        