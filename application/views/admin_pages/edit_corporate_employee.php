


 

            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                               Edit Corporate Employees 
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                           <a href="<?php echo base_url('admin/corporate_employees');?>" class="btn btn-minw btn-danger" type="button">Back</a>
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
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                                       
                                       <br>
                                                <div class="form-group">
                                                
                                                <div class="col-md-6">
                                          <div class="col-sm-9">
           
           
           
           
             <label class="control-label" for="val-select2">Select Company</label>
                                           
                                                <select class="js-select form-control" id="val-select"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id" onchange="showBranches(this.value)" required>
                                               
                                                    <option value="<?php echo @$corporate_employee->corporate_id ;?>" selected="selected"  ><?php echo @$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_employee->corporate_id);?></option>
                                                    
<?php  foreach($corporate_clients as $corporate_client){?>                             
                                                    
                                                    
                                                    <option value="<?php echo $corporate_client->id;?>"><?php echo $this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_client->id);?></option>
                                                   
                                                    
<?php }?>                                                      
                                                     
                                                     
                                                     </select>
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                          </div>
                                                
                                                
                                               
                                               
    </div>  
                                                 
                                                 
                                       
                                       <div class="form-group">
                                       <div class="col-md-6">
                                            <label class="col-xs-12" for="example-text-input">Employee Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="employee_id"  value="<?php echo $corporate_employee->employee_id;?>" required></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Insurance Company ID</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="insurance_company_id"  value="<?php echo $corporate_employee->insurance_company_id;?>"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Employee Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="name" value="<?php echo $corporate_employee->name;?>" ></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Designation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="designation"  value="<?php echo $corporate_employee->designation;?>"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Date of Birth</label>
                                            <div class="col-sm-9">
             <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="date_of_birth" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $corporate_employee->date_of_birth;?>" required> </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         
                                            <label class="col-xs-12" >Age</label>
                                            <div class="col-sm-9">
                <input class="form-control" type="text"  name="age"   value="<?php echo $corporate_employee->age;?>">   
                                             
                                            
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Age Band</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="age_band"  value="<?php echo $corporate_employee->age_band;?>"> </div>
                                       
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Date of Joining</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="date_of_joining" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $corporate_employee->date_of_joining;?>"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Gender</label>
                                            <div class="col-sm-9">
               <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="gender" value="Male"  <?php if($corporate_employee->gender=='m' or $corporate_employee->gender=='Male'){echo "checked"; }?>> Male
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="gender" value="Female" <?php if($corporate_employee->gender=='f' or $corporate_employee->gender=='Female'){echo "checked"; }?>> Female
                                                </label>
                                                
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                            <label class="col-xs-12" >Photo</label>
                                            <div class="col-sm-9">
               
               
               
                
                                              
                                              
                   <?php
							 if($corporate_employee->photo=="")
							 {
							 ?>
						    <img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
                             <?php
							 }
							 else
							 {
							 ?>
                            <img src="<?php echo base_url('uploads/corporate_employee/photo/'.$corporate_employee->photo);?>" width="100px">
                             <?php
							 }
							 ?>
                                                         
                                              
                                              
                                              
                                              
                                              
                                              
                                               <input class="form-control" type="hidden" name="photoold" value="<?php echo $corporate_employee->photo;?>" >
                                               <input type="file" name="photo">
               
               
               
               
               
                                           
                                        
                                        
                                        
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Aadhaar Upload</label>
                                            <div class="col-sm-9">
                                            
                                            
                                            
                             
                             
                              <?php
							 if($corporate_employee->aadhaar_scan=="")
							 {
							 ?>
						    <img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
                             <?php
							 }
							 else
							 {
							 ?>
                            <img src="<?php echo base_url('uploads/corporate_employee/aadhaar_scan/'.$corporate_employee->aadhaar_scan);?>" width="100px">
                           
                             <?php
							 }
							 ?>
                             
                             
                             
                             
                             
                             
                              
                                               <input class="form-control" type="hidden" name="aadhaar_scanold" value="<?php echo $corporate_employee->aadhaar_scan;?>" >
                                               <input type="file" name="aadhaar_scan">              
                                            
                                            
                                            
                                            
                                            
                                            
            
               <br>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Pan Upload</label>
                                            <div class="col-sm-9">
              
              
              
              
              <?php
							 if($corporate_employee->pan_scan=="")
							 {
							 ?>
						    <img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
                             <?php
							 }
							 else
							 {
							 ?>
                            <img src="<?php echo base_url('uploads/corporate_employee/pan_scan/'.$corporate_employee->pan_scan);?>" width="100px">
                           
                             <?php
							 }
							 ?>
              
              
              
              
              
              
               
                                               <input class="form-control" type="hidden" name="pan_scanold" value="<?php echo $corporate_employee->pan_scan;?>"  >
                                               <input type="file" name="pan_scan">
              
               
              
             <br>
                                       
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Passport Upload</label>
                                            <div class="col-sm-9">
                                            
                                            
                             <?php
							 if($corporate_employee->passpot_scan=="")
							 {
							 ?>
						    <img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
                             <?php
							 }
							 else
							 {
							 ?>
                            <img src="<?php echo base_url('uploads/corporate_employee/passpot_scan/'.$corporate_employee->passpot_scan);?>" width="100px">
                           
                             <?php
							 }
							 ?>
                                              
                                               <input class="form-control" type="hidden" name="passpot_scanold" value="<?php echo $corporate_employee->passpot_scan;?>" >
                                               <input type="file" name="passpot_scan">                 
                                            
                                            
                                            
                                            
                                            
            <br/>
             
              
             
             </div>
                                      
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Voter ID Upload</label>
                                            <div class="col-sm-9">
             
             
              <?php
							 if($corporate_employee->voterid_scan=="")
							 {
							 ?>
						    <img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
                             <?php
							 }
							 else
							 {
							 ?>
                           <img src="<?php echo base_url('uploads/corporate_employee/voterid_scan/'.$corporate_employee->voterid_scan);?>" width="100px">
                           
                             <?php
							 }
							 ?>
             
             
                                               <input class="form-control" type="hidden" name="voterid_scanold" value="<?php echo $corporate_employee->voterid_scan;?>" >
                                               <input type="file" name="voterid_scan">   
             
           
             
               <br>
               </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                           <label class="col-xs-12" >Driving License</label>
                                            <div class="col-sm-9">
             
             
             
             
             
                                              
                                              
                                              
                                 <?php
							 if($corporate_employee->driving_license_scan=="")
							 {
							 ?>
						    <img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
                             <?php
							 }
							 else
							 {
							 ?>
                            <img src="<?php echo base_url('uploads/corporate_employee/driving_license_scan/'.$corporate_employee->driving_license_scan);?>" width="100px">
                           
                             <?php
							 }
							 ?>              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              <input class="form-control" type="hidden" name="driving_license_scanold" value="<?php echo $corporate_employee->driving_license_scan;?>" >
                                               <input type="file" name="driving_license_scan">   
             
             
             
             
             
             
              <br/>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank Account Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_account_name"  value="<?php echo $corporate_employee->bank_account_name;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                        <label class="col-xs-12" >Bank Account Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_account_number"  value="<?php echo $corporate_employee->bank_account_number;?>"> </div>
                                        
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_name"  value="<?php echo $corporate_employee->bank_name;?>"> </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Bank Branch</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_branch" value="<?php echo $corporate_employee->bank_branch;?>"> </div>
                                        
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank IFSC Code</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="ifsc_code"  value="<?php echo $corporate_employee->ifsc_code;?>"> </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Cheque Upload</label>
                                            <div class="col-sm-9">
                         
                         
                    
              <img src="<?php echo base_url('uploads/corporate_employee/cheque_scan/'.$corporate_employee->cheque_scan);?>" width="100px">
                                               <input class="form-control" type="hidden" name="cheque_scanold" value="<?php echo $corporate_employee->cheque_scan;?>" >
                                               <input type="file" name="cheque_scan">   
             
                         
                         
                         
                         
                         
                         
                         </div>
                                       
                                        </div>
                                        
                                         
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                       <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Mobile Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="phone"  value="<?php echo $corporate_employee->phone;?>" >
                 
                    </div>
                                        </div> 
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Email ID</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="email"  value="<?php echo $corporate_employee->email;?>"  required>
                  
                    </div>
                                        </div>
                                        </div> 
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                          <div class="col-md-6">
                                          <label class="col-xs-12" >Sum Insured</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="sum_insured"  value="<?php echo $corporate_employee->sum_insured;?>">
                
                    </div>
                                        </div> 
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Family floater</label>
                                            <div class="col-sm-9">
                <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="family_floater" value="Yes" <?php if($corporate_employee->family_floater=='Yes'){echo "checked"; }?>> Yes
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="family_floater" value="No" <?php if($corporate_employee->family_floater=='No' or $corporate_employee->family_floater==""){echo "checked"; }?>> No
                                                </label>
                                                
                                          
                                             </div>
                                        </div> 
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Nominee Person Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="nominee_name"  value="<?php echo $corporate_employee->nominee_name;?>" >
                 
                    </div>
                                        </div> 
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Nominee Relationship</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="nominee_relationship"   value="<?php echo $corporate_employee->nominee_relationship;?>">
                 
                    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Nominee Date of Birth</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"  value="<?php echo $corporate_employee->nominee_dob;?>">
                 
                    </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    <div class="col-md-6">
                                            <label class="col-xs-12" >Policy Id(Individual)</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text"  name="policy_id"  value="<?php echo $corporate_employee->branch;?>">
                 
                    </div>
                                        </div>    
                                        
                                        
                                        
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                          


                                        
                                    
                                     
                                     <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="edit_corporate_employee">Update Employee</button>
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
function showBranches(val) 
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('branches').'"';?>,
 data: {
  get_id:val
 },
  success: function (response) { 
  document.getElementById("branches").innerHTML=response; 
 
 
 
 }
 });  
 
  
 
 
}
</script>      
  
  
   