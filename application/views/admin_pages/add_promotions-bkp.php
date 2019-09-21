<main id="main-container">
               
               <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Add  Promotional Image
                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url();?>admin/promotions"><button class="btn btn-minw btn-danger" type="button">Back</button></a>
                           </div>
                           </div>  
                        
                    </div>
                </div>
              
               
               
               
                <div class="content content-narrow">
                  
                    
                    
                    <div class="row">
                         
                         
                         <div class="col-md-12">
                             
                             <div class="block">
                            
                               
                              <?php echo $msg;?>  
                                
                                
                                
                                <div class="block-content block-content-narrow">
                   
                   
                   <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
                                       
                                       <br>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                  
                                                 
                                                 
                                       
                                       
                                       
                                       
                                         
                                        
                              
                              
                              
                              
                               
                                        
                                        
                                 
                                 
                                         
                                        <div class="space"></div>
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-4">
                                        
                                            <label class="col-xs-12">Name</label>
                                            <div class="col-sm-12">
               <input class="form-control" type="text" id="name" name="name"  required>   
                                                
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                   
                               <div class="form-group">         
                                        
                                   <div class="col-md-4">
                                            <label class="col-xs-12" >Promotional Image</label>
                                            <div class="col-sm-12">
                <input type="file"  name="image"  required>
                                           
                                        </div>
                                        </div>     
                                    </div>       
                                        
                            <div class="space"></div>            
                                        
                                        
                                        
                               <div class="form-group">         
                                   <div class="col-md-4">
                                        
                                            <label class="col-xs-12">Url</label>
                                            <div class="col-sm-12">
               <textarea class="form-control" type="text" id="url" name="url"  required></textarea>   
                                                
                                             </div>
                                    </div>     
                               </div>        
                                        
                         
                         <div class="space"></div>
                                        
                     <div class="form-group">         
                                   <div class="col-md-4">
                                        
                                            <div class="col-sm-12">
                <button class="btn btn-sm btn-primary" type="submit" name="add_promotions">Add Promotional Image</button>&nbsp;&nbsp; 
                                           </div>
                                     </div>     
                     </div>  
                                        
                                        
                                 </form>
                                </div>
                                
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                
                            </div>
                        </div>
                        
                    </div>
                  
                   
                </div>
           </main>
           