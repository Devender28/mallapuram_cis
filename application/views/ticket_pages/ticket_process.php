    
           

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Add Ticket Process
                            </h1>
                        </div>
                      
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('ticket/ticket_process');?>" class="btn btn-minw btn-danger" type="button">View</a>
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
                                           <div class="col-sm-9">
             <label class="control-label" >Select Ticket Type</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="type"  data-placeholder="Choose one.." required>
                                               
                                                    <option> </option>
                                                    <?php
                                                    foreach($types as $type) { ?>
                                                    
                                                    <option value="<?php echo $type->id;?>"><?php echo $type->name;?></option>
                                                    
                                                    <?php } ?>
                                                       
                                                     </select>
                                            </div>
                                        </div>
                                       
                                       
                                       
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Ticket Process</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="name" required> </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Responsibility</label>
                                            <div class="col-sm-9">
              <select class="js-select2 form-control" id="val-select2" name="resp"  data-placeholder="Choose one.." required>
                                               
                                                    <option> </option>
                                                    <option value="Executive">Executive</option>
                                                    <option value="Manager">Manager</option>
                                                   
                                                     </select>
                                                      </div>
                                        </div>
                                        
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Priority</label>
                                            <div class="col-sm-9">
              <select class="js-select2 form-control" id="val-select2" name="priority"  data-placeholder="Choose one.." required>
                                               
                                                    <option> </option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>

                                                     </select>
                                                     </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Process Order</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="order" required> </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Points</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="points" required> </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        

                                        <div class="col-md-12">
                                            <label class="col-xs-12" >Description</label>
                                            <div class="col-sm-9">
              <textarea class="form-control" type="text"  name="desc" required></textarea> </div>
                                        </div>
                                       
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                            <div class="col-xs-9">
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-sm btn-primary" type="submit" name="add_ticket_process">Submit & Add</button>
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_ticket_process_red">Submit</button>
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
      


       
       
       
     
        
 
        
        
        
        
        