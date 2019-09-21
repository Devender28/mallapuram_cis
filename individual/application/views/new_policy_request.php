<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Service Support

                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url("requests");?>"><button class="btn btn-minw btn-danger" type="button">View Requests</button></a>
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
                            
                            <div class="form-group bg_1"><h3>New Policy Request</h3></div>
                            
                            <?php echo $msg;?>    
                                
                                
                                
                                <div class="block-content block-content-narrow">
                   <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
                                       
                                       <br>
                                       
                                       
                                       
                                       
                                       
                                       <div class="form-group">
                                       <div class="space"></div>
                                       <div class="col-md-11">
                                  <label class="col-xs-12"><h5>Choose Policy Category</h5> </label>
                                            <div class="col-xs-12">
                                              
                                               <div class="col-md-3">
                                               
                                               <div class="col-sm-12 content-mini content-mini-full bg-success">  
                                            <label class="css-input css-radio css-radio-default push-10-r  h5 font-w700 text-white">
                                                <input type="radio" name="category"  id="example-inline-radio1" value="Health" required><span></span> Health Insurance
                                            </label>
                                            </div>
                                                </div>
                                                
                                                 <div class="col-md-3 "> 
                                                  <div class="col-sm-12 content-mini content-mini-full bg-info">
                                                <label class="css-input css-radio css-radio-default  h5 font-w700 text-white">
                                                <input type="radio" name="category" id="example-inline-radio2" value="General"><span></span> General Insurance
                                            </label>
                                            </div>
                                                </div>
                                                
                                                
                                          <div class="col-md-3"> 
                                          <div class="col-sm-12 content-mini content-mini-full bg-warning">
                                                 <label class="css-input css-radio css-radio-default  h5 font-w700 text-white">
                                                <input type="radio" name="category" id="example-inline-radio3" value="Moter Insurance"><span></span>Motor Insurance
                                                </label>
                                            </div>
                                                </div>
                                                
                                                <div class="col-md-3 "> 
                                                  <div class="col-sm-12 content-mini content-mini-full bg-danger">
                                                  <label class="css-input css-radio css-radio-default h5 font-w700 text-white">
                                                <input type="radio" name="category" id="example-inline-radio4" value="Life Insurance"><span></span> Life Insurance
                                            </label>
                                            </div>
                                                </div>
                                                
                                                 </div>
                                       
                                        
                                        </div>
                                        
                                        </div>  
                                        
                                       
                                              <div class="space"></div>                                   
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Comment </label>
                                            <div class="col-sm-12">
            <textarea class="form-control" id="material-textarea-small" name="comments" rows="7" placeholder="Please add a comment"></textarea></div>
                                       
                                        </div>
                                        
                                        
                                        </div>
                                         
                                        
                                        
                                        
                                        
                                        
                                        
                       
                                     <div class="space"></div>
                                     <div class="form-group">
                                     <div class="col-md-2"></div>
                                            <div class="col-md-6">
                                            
                                               <input class="btn btn-minw btn-danger" name="new_policy_request" type="submit" value="Request">
                                               

                                               
                                            
                                               
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