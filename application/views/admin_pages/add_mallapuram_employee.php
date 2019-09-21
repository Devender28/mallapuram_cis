             
               

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Add Employee
                            </h1>
                        </div>
                        
                   <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/all_mallapuram_employee');?>">  <button class= "btn btn-minw btn-danger" type="button">View</button></a>
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
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" >
                                       <br>

                                       
                                     <?php echo @$msg;?>
                                       
                                            <div class="form-group"> 
                                  
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Employee Name</label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text" id="example-text-input" name="name" >

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Email (Username)</label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="email"  name="email" required>

                                        </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Password</label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text" name="password" required >

                                        </div>
                                        
                                        </div>
                                         
                                         
                                         
                                         
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Employee Role</label>
                                            <div class="col-sm-9">
                                             <select class="js-select2 form-control"  name="role" style="width: 100%;" >
                                                        <option>--- Select ---</option>
                                                      <option value="admin">Admin</option>
                                                      <option value="executive">Executive</option>
                                                        <option value="manager">Manager</option>
                                                                                                              
                                                    </select>

                                        </div>
                                        
                                        </div>
                                        </div>
                           
                                     <div class="form-group">
                                   
                                            <div class="col-md-5 col-xs-offset-4">
                                            
                                            
                                               <input type="submit" class="btn btn-minw btn-danger" name="emp_add" value="Add Employee">
                                               
                                          
                                               
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
           
          
           
        