    
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Employee Claim Intimation
                            </h1>
                        </div>
                        
                   <!--<div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="endorsement_request_list.php">  <button class= "btn btn-minw btn-danger" type="button">View</button></a>
                           </div>
                           </div>-->
                        
                    </div>
                </div>
                <!-- END Page Header -->
                
                
                
             

                <!-- Page Content -->
                <div class="content content-narrow">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->

                            <div class="block">

                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" >
                                       <br>

                                       <?php echo @$msg;?>
                                       
                                        
                                       
                                           <div class="form-group"> 
                                         
                                        
                                                <div class="col-md-6">
                                                    <label class="col-xs-12">Employee Name</label>
                                                    <div class="col-sm-9">
                                                         <select class="js-select2 form-control" id="" required name="employee" data-placeholder="Choose one.." style="width: 100%;">
                                                       
                                                            <option> </option>
                                                            <?php foreach($emps as $emp) { ?>

                                                            <option value="<?php echo $emp->employee_id;?>"><?php echo $emp->name;?></option>

                                                            <?php } ?>
                                                            
                                                             </select>

                                                    </div>
                                                
                                                </div>
                                                
                                                
                                                
                                                <div class="col-md-6">
                                                    <label class="col-xs-12">Policy Name</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-select2 form-control" id="val-select2" name="policy" required data-placeholder="Choose one..">
                                                       
                                                            <option> </option>
                                                            <?php foreach($policies as $policy) { ?>
                                                            <option value="<?php echo $policy->policy_number;?>"><?php echo $this->fun->getPolicy($policy->policy_name).' - '.$policy->policy_number;?></option>
                                                            <?php } ?>
                                                            
                                                             </select>

                                                    </div>
                                                
                                                </div>
                                        
                                           </div>
                                            
                                            
                                            
                                  <div class="form-group"> 
                                     
                                        
                                            <div class="col-md-6">
                                                <label class="col-xs-12">Date of Hospitalization</label>
                                                <div class="col-sm-9">
                                               <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="hosp_date" required data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">

                                            </div>
                                            
                                            </div>
                                        
                                        
                                            <div class="col-md-6">
                                               <label class="col-xs-12">Reason for Hospitalization</label>
                                                <div class="col-sm-9">
                                                 <input class="form-control" type="text" required name="hosp_reason" >

                                                </div>
                                            
                                            </div>
                                        
                                         </div>
                                         
                       
                                   
                                        
                             
                                        
                                     <div class="form-group">
                                       <div class="col-xs-5"></div>
                                        <div class="col-xs-7">
                                        
                                        
                                           <input type="submit" class="btn btn-minw btn-danger" value="Submit" name="claim_intimation">
                                           
                                      
                                           
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
           
          
           
        