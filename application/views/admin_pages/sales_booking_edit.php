  
   
   
             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Update Sales Booking
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/sales_booking');?>" class="btn btn-minw btn-danger" type="button">Back</a>
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

                                <?php echo $msg;?>     
                                     
                                     
                          <div class="form-group">
                          
                          <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Client</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="client" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php
                                                       foreach($corporate_clients as $cc){
                                                    ?>
                                                    <option value="<?php echo $cc->id;?>" <?php if($sale->client==$cc->id) echo "selected";?>><?php echo $cc->name;?></option>
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                    </div>
                          
                          
                          
                          <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Company</label>
                                           
                                                <select class="js-select2 form-control" id="comp" name="company" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $company) { ?>
                                                    <option value="<?php echo $company->id;?>" <?php if($sale->company==$company->id) echo "selected" ;?>><?php echo $company->name;?></option>
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                    </div>
                          
                          </div>           
                                  
                                  
                                  
                                    <div class="form-group">
                                       <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Policy Category </label>
                                           
                                                <select class="js-select2 form-control" id="cat" name="category" onchange="getType(this.value)" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group" <?php if($sale->category=='Group') echo "selected" ;?>>Group</option>
<option value="Corporate" <?php if($sale->category=='Corporate') echo "selected" ;?>>Corporate</option>
                                                    <option value="Individual" <?php if($sale->company=='Individual') echo "selected" ;?>>Individual</option>
                                                     </select>
                                            </div>
                                    </div>
                                    
                                        
                                        
                                        <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy Type </label>
                                           
                                                <select class="js-select2 form-control" id="dev" name="type" onchange="getPolicy(this.value)" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option value="<?php echo $sale->type;?>"><?php echo $this->fun->getType($sale->type);?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    
                                                     </select>
                                            </div>
                                    </div>
                                        
                                        </div>   
                                     
                           
            <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
 Policy Specifications Details</h5><br>
</div></div>
                                         
                                         
                                        <div class="form-group">
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Select Policy Name</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="dev1" name="policy_name" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option value="<?php echo $sale->policy_name;?>"><?php echo $this->fun->getPolicy($sale->policy_name);?></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                   
                                                     </select></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Policy Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  value="<?php echo $sale->policy_number;?>" name="policy_number" ></div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Premium Amount without Tax</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="without_tax" value="<?php echo $sale->premium_without_tax;?>" name="premium_without_tax" ></div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Premium Amount with Tax </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="with_tax" value="<?php echo $sale->premium_with_tax;?>" name="premium_with_tax" ></div>
                                        </div>
                                        
                                        
                                        </div>
                                        
                                   
                                        
                                        
                                         
                                        
                                        <div class="form-group"> 
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Tax Percentage  (Premium Without Tax-Premium With Tax)</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="tax" name="tax" value="<?php echo $sale->tax_percentage;?>" readonly></div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Sum Insured</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="sum_insured" value="<?php echo $sale->sum_insured;?>"></div>
                                        </div>
                               
                                      
                                        </div>
                                        
                                        
                                         <div class="form-group"> 
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Start Date </label>
                                            <div class="col-sm-9">
            <input class="js-datepicker form-control" type="text" id="example-datepicker1" value="<?php echo $sale->start_date;?>" name="policy_start_date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"></div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Policy term (1 Year default)</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  value="<?php echo $sale->policy_term;?>" name="policy_term" ></div>
                                        </div>
                                        
                                        
                                        </div>
                                        
                                        
                                         <div class="form-group"> 
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Premium Payment term </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  value="<?php echo $sale->payment_term;?>" name="premium_payment_term" ></div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Select Payment Mode</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="payment_mode" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Annual" <?php if($sale->payment_mode=='Annual') echo "selected";?>>Annual</option>
                                                    <option value="Semi_Annual" <?php if($sale->payment_mode=='Semi_Annual') echo "selected";?>>Semi Annual</option>
                                                    <option value="Quarterly" <?php if($sale->payment_mode=='Quarterly') echo "selected";?>>Quarterly </option>
                                                    <option value="Monthly" <?php if($sale->payment_mode=='Monthly') echo "selected";?>>Monthly </option>
                                                     </select></div>
                                        </div>
                                       
                                         </div>
                                         
                                         
                                         
                                         
                                         <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Policy Copy Upload*</label>
                                            <div class="col-sm-9">
                                          <input name="policy_copy" type="file">
                                          <input name="old_policy_copy" type="hidden" value="<?php echo $sale->policy_copy;?>">
                                          <a  href="<?php echo base_url('uploads/sales/'.$sale->policy_copy);?>" target="_blank" ><span class="btn btn-md btn-info fa fa-download "></span></a>
                                          </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12"> Policy Benefits upload</label>
                                            <div class="col-sm-9">
                                          <input name="policy_benefits" type="file">
                                           <input name="old_policy_benefits" type="hidden" value="<?php echo $sale->policy_benefits;?>">
                                          <a  href="<?php echo base_url('uploads/sales/'.$sale->policy_benefits);?>" target="_blank" ><span class="btn btn-md btn-info fa fa-download "></span></a>
                                          </div>
                                        </div>
                                       
                                         </div>
                                         
                                         
                                         
                                         <div class="form-group"> 
                                         
                                        <div class="col-md-6">
                                            <label class="col-xs-12">  Remarks</label>
                                            <div class="col-sm-9">
                                           <input class="form-control" type="text"  value="<?php echo $sale->remarks;?>" name="remarks" ></div>
                                        </div>
                                        
                                        
                                         
                                         </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" name="update_sale_booking" type="submit">Update</button>
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
           
            
       



      


<?php $this->load->view('includes/footer');?>


<script type="text/javascript">
  $( "#with_tax,#without_tax" ).bind('input',function() {
  var d1=parseInt($( "#with_tax" ).val()); 
  var d2=parseInt($( "#without_tax" ).val());

  //var d3= parseInt((d1 - d2) / 100); 
    var d3= (100*(d1-d2)/d2).toFixed(2);
  $("#tax").val(d3);

});
</script>


        <script type="text/javascript">

  function getType(id){ 

     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getType').'"';?>,
 data: {
 id:id
 },
  success: function (response) { 
  document.getElementById("dev").innerHTML=response; 
 
 }
 });
  }

 function getPolicy(type){ alert(type)
    
       
        var comp= $( "#comp" ).val();
        var cat= $( "#cat" ).val();
        
     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getPolicy').'"';?>,
 data: {
 type:type,
 cat: cat,
 comp: comp

 },
  success: function (response) { alert(response)
  document.getElementById("dev1").innerHTML=response; 
 
 }
 });
  }
</script>