
 

               

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Update Policy 
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
                            
                            <div class="form-group bg_1"><h3>Update Policy </h3></div>
                            
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

                                                    <option value="<?php echo $ics->id;?>" <?php if($policy->insurance_company==$ics->id) echo "selected"; ?>><?php echo $ics->name;?></option>
                                                    <?php } ?>
                                                   
                                                   
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Select Policy Name <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
              <select class="js-select2 form-control" id="dev1" name="policy_name" required>
                                               
                                                    <option value="<?php echo $policy->policy_name;?>"><?php echo $this->fun->getPolicy($policy->policy_name);?></option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                                
                                                
                                                </div>
                                       
                                       
                                       
                                       
                                       
                                       <div class="form-group">
                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Enter Policy Number <span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="policy_no" value="<?php echo $policy->policy_number;?>" required>
                                            </div>
                                          </div>

                                          <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Enter Policy Holder Name <span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="policy_holder_name" value="<?php echo $policy->policy_holder_name;?>" required>
                                            </div>
                                          </div>
                                                
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group">

                                                <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Policy Start Date <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
               <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="start_date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $policy->policy_start_date;?>" required>
                                            </div>
                                          </div>

                                                <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Enter Policy Period<span class="text-danger">*</span> </label>
                                          <div class="col-sm-9">
             <input class="form-control" type="text" id="example-text-input" name="policy_period" value="<?php echo $policy->policy_period;?>" required>
                                            </div>
                                          </div>
                                                
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group">

                                                 <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Policy Sum Insured <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="sum_insured" value="<?php echo $policy->policy_sum_insured;?>" required>
                                            </div>
                                          </div>

                                                <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Enter Policy Premium <span class="text-danger">*</span></label>
                                          <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="premium" value="<?php echo $policy->policy_premium;?>" required>
                                            </div>
                                          </div>
                                          
                                       </div>

                                          <div class="form-group">

                                          <div class="col-md-6">
                    <label class="col-xs-12" for="example-text-input">Select Premium Payment Mode </label>
                                          <div class="col-sm-9">
            <select class="js-select2 form-control" id="val-select2" name="payment_mode" >
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Annual" <?php if($policy->policy_premium_mode=='Annual') echo "selected";?>>Annual</option>
                                                    <option value="Semi Annual" <?php if($policy->policy_premium_mode=='Semi Annual') echo "selected";?>>Semi Annual</option>
                                                    <option value="Quarterly" <?php if($policy->policy_premium_mode=='Quarterly') echo "selected";?>>Quarterly</option>
                                                    <option value="Monthly" <?php if($policy->policy_premium_mode=='Monthly') echo "selected";?>>Monthly</option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-6">
                        <label class="col-xs-12" for="example-text-input">Policy Copy Upload</label>
                                          <div class="col-sm-9">
             <input type="file" id="example-file-input" name="policy_copy">
             <input type="hidden" name="old_policy_copy" value="<?php echo $policy->policy_copy;?>">
             <img src="<?php echo base_url('uploads/individual/policies/'.$policy->policy_copy);?>" width="150" height="80">
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
              <input class="form-control" type="text" id="example-text-input" name="nominee1_name" value="<?php echo $policy->nominee1_name;?>"></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Select Nominee Relation</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="nominee1_relation" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Father" <?php if($policy->nominee1_relation=="Father") echo "selected"; ?>>Father</option>
                                                    <option value="Mother" <?php if($policy->nominee1_relation=="Mother") echo "selected"; ?>>Mother</option>
                                                    <option value="Brother" <?php if($policy->nominee1_relation=="Brother") echo "selected"; ?>>Brother</option>
                                                    <option value="Sister" <?php if($policy->nominee1_relation=="Sister") echo "selected"; ?>>Sister</option>
                                                    <option value="Son" <?php if($policy->nominee1_relation=="Son") echo "selected"; ?>>Son</option>
                                                    <option value="Daughter" <?php if($policy->nominee1_relation=="Daughter") echo "selected"; ?>>Daughter</option>
                                                    
                                                     </select></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee DOB</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee1_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $policy->nominee1_dob;?>"></div>
                                       
                                        </div>

                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee Percentage</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="" name="nomination1_percentage" data-date-format="mm/dd/yy" value="<?php echo $policy->nomination1_percentage;?>"></div>
                                       
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
              <input class="form-control" type="text" id="example-text-input" name="nominee2_name" value="<?php echo $policy->nominee2_name;?>"></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Select Nominee Relation</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="nominee2_relation" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                   <option value="Father" <?php if($policy->nominee2_relation=="Father") echo "selected"; ?>>Father</option>
                                                    <option value="Mother" <?php if($policy->nominee2_relation=="Mother") echo "selected"; ?>>Mother</option>
                                                    <option value="Brother" <?php if($policy->nominee2_relation=="Brother") echo "selected"; ?>>Brother</option>
                                                    <option value="Sister" <?php if($policy->nominee2_relation=="Sister") echo "selected"; ?>>Sister</option>
                                                    <option value="Son" <?php if($policy->nominee2_relation=="Son") echo "selected"; ?>>Son</option>
                                                    <option value="Daughter" <?php if($policy->nominee2_relation=="Daughter") echo "selected"; ?>>Daughter</option>
                                                    
                                                     </select></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee DOB</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee2_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $policy->nominee2_dob;?>"></div>
                                       
                                        </div>
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee Percentage</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="" name="nomination2_percentage" value="<?php echo $policy->nomination2_percentage;?>"></div>
                                       
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
              <input class="form-control" type="text" id="example-text-input" name="nominee3_name" value="<?php echo $policy->nominee3_name;?>"></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Select Nominee Relation</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="nominee3_relation" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Father" <?php if($policy->nominee3_relation=="Father") echo "selected"; ?>>Father</option>
                                                    <option value="Mother" <?php if($policy->nominee3_relation=="Mother") echo "selected"; ?>>Mother</option>
                                                    <option value="Brother" <?php if($policy->nominee3_relation=="Brother") echo "selected"; ?>>Brother</option>
                                                    <option value="Sister" <?php if($policy->nominee3_relation=="Sister") echo "selected"; ?>>Sister</option>
                                                    <option value="Son" <?php if($policy->nominee3_relation=="Son") echo "selected"; ?>>Son</option>
                                                    <option value="Daughter" <?php if($policy->nominee3_relation=="Daughter") echo "selected"; ?>>Daughter</option>
                                                    
                                                     </select></div>
                                        
                                        </div>
                                       
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee DOB</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee3_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $policy->nominee3_dob;?>"></div>
                                       
                                        </div>

                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Enter Nominee Percentage</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="" name="nomination3_percentage" data-date-format="mm/dd/yy" value="<?php echo $policy->nomination3_percentage;?>"></div>
                                       
                                        </div>
                                        
                                        
                                        </div>
                                        
                                        
                       
                                     <div class="space"></div>
                                     <div class="form-group">
                                     <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                            
                                               <button class="btn btn-minw btn-danger" type="submit" name="update_policy">Update</button>
                                               
                                               
                                               
                                            
                                               
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