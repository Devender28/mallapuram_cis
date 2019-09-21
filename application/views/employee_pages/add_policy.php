
 

               

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Add Policy 
                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('policies_view');?>"><button class="btn btn-minw btn-danger" type="button">View</button></a>
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
                            
                            <div class="form-group bg_1"><h3>Add Policy </h3></div>
                            
                                <div class="block-content block-content-narrow">
                                <?php echo $msg;?>
                                
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                       
                                       <br>
                                       
                                       <div class="form-group">
                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Select Insurance Company <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
            <select class="js-select2 form-control" id="val-select2" name="inc_company" onchange="getPolicy(this.value)" required>
                                               
                                                    <option>Select Insurance Company </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($inc_companies as $ics){ ?>

                                                    <option value="<?php echo $ics->id;?>"><?php echo $ics->name;?></option>
                                                    <?php } ?>
                                                   
                                                   
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Select Policy Name <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
              <select class="js-select2 form-control" id="dev1" name="policy_name" required>
                                               
                                                    <option>Select Policy </option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                                
                                                
                                                </div>
                                       
                                       
                                       
                                       
                                       
                                       <div class="form-group">
                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Enter Policy Number <span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="policy_no" required>
                                            </div>
                                          </div>

                                          <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Enter Policy Holder Name <span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="policy_holder_name" required>
                                            </div>
                                          </div>
                                                
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group">

                                                <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Policy Start Date <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
               <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="start_date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" required>
                                            </div>
                                          </div>

                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Enter Policy Period<span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="policy_period" required>
                                            </div>
                                          </div>
                                                
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group">

                                                 <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Policy Sum Insured <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="sum_insured" required>
                                            </div>
                                          </div>

                                                <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Policy Premium <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="premium" required>
                                            </div>
                                          </div>
                                          
                                       </div>

                                          <div class="form-group">

                                          <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Select Premium Payment Mode </label>
                                          <div class="col-sm-9">
            <select class="js-select2 form-control" id="val-select2" name="payment_mode" >
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Annual">Annual</option>
                                                    <option value="Semi Annual">Semi Annual</option>
                                                    <option value="Quarterly">Quarterly</option>
                                                    <option value="Monthly">Monthly</option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Policy Copy Upload</label>
                                          <div class="col-sm-9">
             <input type="file" id="example-file-input" name="policy_copy">
                                            </div>
                                          </div>
                                                
                                                
                                                </div>  
                                                 
                                                 <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Nominee 1</h3> </div>
                                        </div>
                                       
                                       <div class="form-group">
                                       <div class="space"></div>
                                       <div class="col-md-6">
                               <label class="col-xs-12" for="example-text-input">Nominee Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="nominee1_name" ></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Select Nominee Relation</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="nominee1_relation" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    
                                                     </select></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee DOB</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee1_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"></div>
                                       
                                        </div>

                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee Percentage</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="" name="nomination1_percentage" data-date-format="mm/dd/yy" placeholder=""></div>
                                       
                                        </div>
                                        
                                        
                                        </div>
                                        
                                         <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Nominee 2</h3> </div>
                                        </div>
                                       
                                       <div class="form-group">
                                       <div class="space"></div>
                                       <div class="col-md-6">
                               <label class="col-xs-12" for="example-text-input">Nominee Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="nominee2_name" ></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Select Nominee Relation</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="nominee2_relation" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                   <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    
                                                     </select></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee DOB</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee2_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"></div>
                                       
                                        </div>
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee Percentage</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="" name="nomination2_percentage" placeholder=""></div>
                                       
                                        </div>
                                        
                                        </div>
                                       
                                       
                                        <div class="row bg_blue">
                                       

                                        <div class="col-md-6"><h3>Nominee 3</h3> </div>
                                        </div>
                                       
                                       <div class="form-group">
                                       <div class="space"></div>
                                       <div class="col-md-6">
                               <label class="col-xs-12" for="example-text-input">Nominee Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="nominee3_name" ></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Select Nominee Relation</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="nominee3_relation" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    
                                                     </select></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee DOB</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee3_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"></div>
                                       
                                        </div>

                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee Percentage</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="" name="nomination3_percentage" data-date-format="mm/dd/yy" placeholder=""></div>
                                       
                                        </div>
                                        
                                        
                                        </div>
                                        
                                        
                       
                                     <div class="space"></div>
                                     <div class="form-group">
                                     <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                            
                               

<button class="btn btn-minw btn-danger" type="submit" name="add_policy">Submit</button>
                                               
                                               

<!--

<button class="btn btn-sm btn-primary" type="submit">Save & Add</button>
 -->                                              
                                            
                                               
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
 url: <?php echo '"'.base_url('getPolicy').'"';?>,
 data: {
 id:id

 },
  success: function (response) { 
  document.getElementById("dev1").innerHTML=response; 
 
 }
 });
  }
  </script>          