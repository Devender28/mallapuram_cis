 <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                         Add  CD Account  Amount
                            </h1>
                        </div>
                        
                   <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/cd_amount_details');?>" class="btn btn-minw btn-danger" type="button">View</a>
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
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post"  enctype="multipart/form-data" >
                                       <br>

                                       
                                       <div class="col-md-12">
                                        
                                       
                                            <div class="form-group"> 
                                  
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Select Client</label>
                                            <div class="col-sm-9">
                                             <select class="js-select2 form-control" id="corporate_id"  style="width: 100%;"  data-placeholder="Choose one.."   name="corporate_id"     onchange="getInsurance(this.value)" required>
  
                                               
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
                                              <select class="js-select2 form-control" id="dev1" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                            </select>

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                         </div>
                                            
                                            
                                    
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                               <div class="col-md-12">
                                        
                                       
                                            <div class="form-group"> 
                                  
                                            <div class="col-md-6">
                                            <label class="col-xs-12">Payment Methods</label>
                                            <div class="col-sm-9">
                                             
                                            
                                            
                                            
                                         
                                            <label class="css-input css-radio css-radio-warning push-10-r">
                                                <input type="radio" name="payment_methods" checked="" value="Cheque"><span></span> Cheque
                                            </label>
                                            
                                            <label class="css-input css-radio css-radio-warning">
                                                <input type="radio" name="payment_methods"   value="NetBanking"><span></span> Online
                                            </label>
                                            
                                            <label class="css-input css-radio css-radio-warning">
                                                <input type="radio" name="payment_methods" value="Cash"><span></span> Cash
                                            </label>
                                             
                                        </div>
                                     </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Number</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" type="text" id="number" name="number"  required>   

                                        </div>
                                         </div>
                                    </div>
                                 </div>    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                <div class="col-md-12">
                                       
                                     <div class="form-group"> 
                                  
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Amount</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" type="text" id="amount" name="amount"  required>   

                                        </div>
                                         </div>
                                         
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Date </label>
                                            <div class="col-sm-9">
            <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="date" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" required="" aria-required="true"></div>
                                        </div>
                                        
                                        
                                        
                                           
                                      </div>
                                </div>    
                                
                                
                                
                                
                                
                                
                                
                               <div class="col-md-12">
                                       
                                     <div class="form-group"> 
                                  
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Remarks</label>
                                            <div class="col-sm-9">
                                               
                        <textarea class="form-control" id="example-textarea-input" name="remarks" rows="6" placeholder="Content.."></textarea>
                                        </div>
                                         </div>
                                         
                                         
                                         
                                        
                                        
                                        
                                           
                                      </div>
                                </div> 
                                
                                
                                
                                
                                
                                     
                                            
                                             
                                        
                             
                                        
                                     <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <input type="submit" class="btn btn-minw btn-danger" value="Add Amount" name="add_cd_account_amount">
                                               
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
  
 
  document.getElementById("dev1").innerHTML=response; 
 
 }
 });
  }
</script>         
            
            
            
            