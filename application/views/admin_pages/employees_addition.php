<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                                Employees Addition 
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/corporate_employees');?>" class="btn btn-minw btn-danger" type="button">View</a>
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
                            
                     <?php echo $msg;?>       
                            
                            
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post"  enctype="multipart/form-data" >
                       <br>
                                               
                                               
<div class="col-md-12">                                               
                                               
<div class="form-group">
    
       <div class="col-md-4">                                               
 
        
        <div class="col-sm-12">
        
<label class="control-label" for="val-select2">Select Corporate Client</label>

<select class="js-select2 form-control" id="corporate_id"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id"required     onchange="getPolicy(this.value)" required>
                                               
                             <option value="" selected="selected">Please Select Corporate Company</option>
                                                    
<?php  foreach($corporate_clients as $corporate_client){?>                             
                                                    
                                                    
                        <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                   
<?php }?>                                                      

</select>

      </div>
 </div>     
      
      
     
   <div class="col-md-4">                                               
  
     <div class="col-sm-12">
             <label class="control-label" for="val-select2">Select Policy </label>
                                           
                                                <select class="js-select2 form-control" id="dev" name="policy_id" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    
                                                   
                                                    
                                                     </select>
                                            </div> 
     </div>                                       
                                            
                                            
                                            
    <div class="col-md-4">                                               
                                        
                                            
                        <div class="col-sm-12">
                     <label class="col-xs-12" >Upload Excel</label>

                      <input type="file" id="example-file-input" name="sel_file"  required><br>

                                            </div>                                      
                                            
                                            
                                            
   
      
      
  </div></div>
</div>  
                                                 


<div class="form-group">
                                     <div class="col-md-5"></div>
                                            <div class="col-md-2">
                                            
                                            
                                              <button class="btn btn-sm btn-primary" type="submit" name="add_employees_addition">Save & Add Employee</button>
                                               
                                        
           
                                               
                                            </div>
                                            <div class="col-md-4  col-xs-offset-1">
                                          <i style="font-size:20px" class="fa">&#xf1c3;</i> <a href="../<?php base_url();?>uploads/excel/excel.csv" download> Excel Download<span class="ion-ios-excel"></span></a><br>
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
            
            
            
            
            
            
            