



            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Edit Additions
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="additions_add.php"><button class="btn btn-minw btn-danger" type="button">Add Addition</button></a>
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
                   <form class="form-horizontal" action="base_forms_elements.html" method="post" enctype="multipart/form-data" onSubmit="return false;">
                   <br>

                                     
                                     
                                     
                          <div class="form-group">
                          
                          <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">Group</option>
                                                    <option value="2">Individual</option>
                                                     </select>
                                            </div>
                                    </div>
                          
                          
                          
                          <div class="col-md-6">
                                            <label class="col-xs-12">  Remarks</label>
                                            <div class="col-sm-9">
                                           <input class="form-control" type="text" id="example-text-input" name="example-text-input" value="Mallapuram"></div>
                                        </div>
                          
                          </div>           
                                  
                               
                                         
                                         <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">File Upload*</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="example-file-input"><img src="assets/img/photos/photo1.jpg" width="100" height="100">
                                       </div>
                                        </div>
                                        
                                        
                                        
                                       
                                         </div>
                                         
                                         
                                         
                                        
                                    
                                  
                                    
                                    <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                            
                                               <button class="btn btn-sm btn-primary" type="submit">Update</button>
                                               
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
           
            <?php include 'includes/footer_2.php'; ?>
           
       