<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              Add  Claim Dump
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/claim_dump');?>" class="btn btn-minw btn-danger" type="button">View</a>
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
                                               
                                               
                                               
                                               
<div class="form-group">
    <div class="col-md-6">
        <div class="col-sm-9">
<label class="control-label" for="val-select2">Select Corporate Client</label>
  <select class="js-select2 form-control" id="corporate_id"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id"required    onchange="getInsurance(this.value) " required>
  
                                               
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
                                              <select class="js-select2 form-control" id="comp" name="insurance_company_id" style="width: 100%;" data-placeholder="Choose one.." onchange="getPolicy(this.value) required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $cmp) {?>
                                                    <option value="<?php echo $cmp->id;?>"><?php echo $cmp->name;?></option>
                                                    
                                                    <?php } ?>
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
  <div class="col-md-6">
 <label class="col-xs-12" >Date</label>
<div class="col-sm-9">
 <input class="js-datepicker form-control" id="example-datepicker1" name="date" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" required="" aria-required="true" type="text"><br>
</div>
                                      
  </div>
  
  
  
  
<div class="col-md-6">
 <label class="col-xs-12" >Claim Dump( Upload Pdf )</label>
<div class="col-sm-9">
 <input type="file" id="example-file-input" name="pdf"  required><br>
</div>
</div>
  
  
  
  
  
</div> 
   
   
   
      





                                        
                                        
                                        
                                        
                                        
                                        
 <div class="form-group">
    <div class="col-md-6">
        <div class="col-sm-9">
           
              <!-- <button class="btn btn-sm btn-primary" type="submit" name="add_corporate_employee">Add Employee</button>&nbsp;-->
               <button class="btn btn-sm btn-primary" type="submit" name="add_claim_dump">Save & Add Pdf</button>
                                             
     </div>
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

function getInsurance(id){ 
  
$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/getInsurance').'"';?>,
 data: {
 
 id: id

 },
  success: function (response) { 
  
 
  document.getElementById("comp").innerHTML=response; 
 
 }
 });
  }



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
            
            
            
            
            
            
            