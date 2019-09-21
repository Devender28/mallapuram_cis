<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Add Endorsement 
                            </h1>
                        </div>
                        
                   <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/endorsement_charges');?>">  <button class= "btn btn-minw btn-danger" type="button">View</button></a>
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
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post"  enctype="multipart/form-data">
                                       <br>

                                       
                                       <div class="col-md-12">
                                        
                                       
                                            <div class="form-group"> 
                                  
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Select Client</label>
                                            <div class="col-sm-9">
                                            <select class="js-select2 form-control" id="corporate_id"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id"     onchange="getPolicy(this.value)" required>
                                               
                             <option value="" selected="selected">Please Select Corporate Company</option>
                                                    
<?php  foreach($corporate_clients as $corporate_client){?>                             
                                                    
                                                    
                        <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                   
<?php }?>                                                      

</select>

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Select Policy</label>
                                            <div class="col-sm-9">
                                            <select class="js-select2 form-control" id="dev" name="policy_id" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    
                                                   
                                                    
                                                     </select>

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                         </div>
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         <div class="form-group">
                                         <br>

                                         
                                         <div class="col-md-6">
                                         <div class="col-md-5" style="margin-top:7px;">
                                         
                                            Used Amount
                                            </div>
                                            <div class="col-md-3" >
                                            <input class="form-control" type="text" id="example-text-input" name="addition_amount"  required>
                                             </div>
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="col-md-5" style="margin-top:7px;">
                                         
                                            Given Back Amount
                                            </div>
                                            <div class="col-md-3" >
                                            <input class="form-control" type="text" id="example-text-input" name="deletion_amount" required>
                                             </div>
                                        
                                        
                                        </div>
                                         
                                         
                                         </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                         <br>





                                        <div class="col-md-6">
                                         <div class="col-md-5" style="margin-top:7px;">
                                         
                                           Endorsement Number
                                            </div>
                                            <div class="col-md-9" >
                                            <input class="form-control" type="text" id="example-text-input" name="endorsement_number"  required>
                                             </div>
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Endorsement Copy Upload</label>
                                            <div class="col-sm-9">
                                         <input type="file" id="example-file-input" name="pdf" required>

                                        </div>
                                        
                                        </div>
                                        
                                        
                                         
                                        
                                        <br/>
                                        
                                        
                                        
                                        
                                        
                                         
                                         
                                         </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    
                                            </div>
                                        
                             
                                        
                                     <div class="form-group">
                                     <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                            
                                            
                                               <input type="submit" class="btn btn-minw btn-danger" value="Add Charges" name="add_endorsement_charges">
                                               
                                          
                                               
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
           
           
           
           
           
           
           
           
   <script type="text/javascript">
 function getPolicy(id){ 
 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/getpolices').'"';?>,
 data: {
 id:id
 },
  success: function (response) { 
 
  document.getElementById("dev").innerHTML=response; 
 
 }
 });
  }
</script>      
        
           
           
           