
             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Employee Family Members
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                           <a href="<?php echo base_url('admin/employee_family_members');?>" class="btn btn-minw btn-danger" type="button">Back</a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                   
         <?php echo $msg;?>          
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data">
                                       
                                       <br>
                                       
                                       
                                         <div class="form-group">
                                         
                                         <div class="col-md-6">
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Company</label>
                                           
                                               <select class="js-select form-control" id="val-select" name="corporate_id" style="width: 100%;" data-placeholder="Choose one.." onchange="showEmployees(this.value)"  required>
                                               
                                                    <option value="<?php echo $corporate_employee_family->corporate_id;?>"><?php echo $this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_employee_family->corporate_id);?> </option>
                                                    
                                                   
<?php 
$a =1;
foreach($corporate_clients as $corporate_client){?>             
                                                   
                                                    <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                    
 <?php
$a++;
}
?>                                                     
                                                     
                                                     
                                                     </select>                                
              
                                            </div>
                                          </div>
                                         
                                         
                                         <div class="col-md-6">
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Employee</label>
                                           
                                               <select class="js-select form-control" id="employee" name="employee_id" style="width: 100%;" data-placeholder="Choose one.."  required>
                                               
                                                    <option value="<?php echo $corporate_employee_family->employee_id;?>"><?php echo $this->fun->getnewfieldvalue('corporate_employee','name','id',$corporate_employee_family->employee_id);?> </option>
                                                    
                                                   
<?php 
$a =1;
foreach($corporate_employees_families as $corporate_employee_family){?>             
                                                   
                                                    <option value="<?php echo $corporate_employee_family->id;?>"><?php echo $corporate_employee_family->name;?></option>
                                                    
 <?php
$a++;
}
?>                                                     
                                                     
                                                     
                                                     </select>   
                                            </div>
                                          </div>
                                         
                                         
                                         
                                         </div>
                                       

                                        <div class="form-group">
                                       
                                        
                                        
                                        <div class="col-md-6">
                                      
                                            <label class="col-xs-12" >Member Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="name" value="<?php echo $corporate_employee_family->name;?>"  required></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Relation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="relation" value="<?php echo $corporate_employee_family->relation;?>"  required></div>
                                       
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Member Date Of Birth</label>
                                            <div class="col-sm-9">
               <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="date_of_birth" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="<?php echo $corporate_employee_family->date_of_birth;?>"  required></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                         
                                       
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Gender</label>
                                            <div class="col-sm-9">
               <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="gender" value="Male"  <?php if($corporate_employee_family->gender=='Male'){echo "checked"; }?>> Male
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="gender" value="Female" <?php if($corporate_employee_family->gender=='Female'){echo "checked"; }?>> Female
                                                </label>
                                                
                                        </div>
                                        </div>
                                        
                                        </div>

                                        
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                      
                                            <label class="col-xs-12">Age </label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text" id="example-text-input" name="age"  value="<?php echo $corporate_employee_family->age;?>"  ></div>
                                       
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Age band  </label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text" id="example-text-input" name="age_band"  value="<?php echo $corporate_employee_family->age_band;?>"  ></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Photo</label>
                                            <div class="col-sm-9">
                                         
                                          <img src="<?php echo base_url('uploads/corporate_employee_family/photo/'.$corporate_employee_family->photo);?>" width="100px">
                                               <input class="form-control" type="hidden" name="photoold" value="<?php echo $corporate_employee_family->photo;?>" >
                                               <input type="file" name="photo">
               
                                         
                                         </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12">Aadhaar Upload</label>
                                            <div class="col-sm-9">
                                          
                                          <img src="<?php echo base_url('uploads/corporate_employee_family/aadhaar_scan/'.$corporate_employee_family->aadhaar_scan);?>" width="100px">
                                               <input class="form-control" type="hidden" name="aadhaar_scanold" value="<?php echo $corporate_employee_family->aadhaar_scan;?>" >
                                               <input type="file" name="aadhaar_scan">   
                                          
                                          
                                          
                                          </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Pan Upload</label>
                                            <div class="col-sm-9">
              
               <img src="<?php echo base_url('uploads/corporate_employee_family/pan_scan/'.$corporate_employee_family->pan_scan);?>" width="100px">
                                               <input class="form-control" type="hidden" name="pan_scanold" value="<?php echo $corporate_employee_family->pan_scan;?>"  >
                                               <input type="file" name="pan_scan">
              
               
              
             <br>
                                       
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Passport Upload</label>
                                            <div class="col-sm-9">
                                            
                                            
                                            
                                            
                           <img src="<?php echo base_url('uploads/corporate_employee_family/passpot_scan/'.$corporate_employee_family->passpot_scan);?>" width="100px">
                                               <input class="form-control" type="hidden" name="passpot_scanold" value="<?php echo $corporate_employee_family->passpot_scan;?>" >
                                               <input type="file" name="passpot_scan">                 
                                            
                                            
                                            
                                            
                                            
            <br/>
             
              
             
             </div>
                                      
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Voter ID Upload</label>
                                            <div class="col-sm-9">
             
             
             
             
              <img src="<?php echo base_url('uploads/corporate_employee_family/voterid_scan/'.$corporate_employee_family->voterid_scan);?>" width="100px">
                                               <input class="form-control" type="hidden" name="voterid_scanold" value="<?php echo $corporate_employee_family->voterid_scan;?>" >
                                               <input type="file" name="voterid_scan">   
             
           
             
               <br>
               </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group">
                                         <div class="col-md-6">
                                           <label class="col-xs-12" >Driving License</label>
                                            <div class="col-sm-9">
             
             
             
             
              <img src="<?php echo base_url('uploads/corporate_employee_family/driving_license_scan/'.$corporate_employee_family->driving_license_scan);?>" width="100px">
                                               <input class="form-control" type="hidden" name="driving_license_scanold" value="<?php echo $corporate_employee_family->driving_license_scan;?>" >
                                               <input type="file" name="driving_license_scan">   
             
             
             
             
             
             
              <br/>
                                        
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="edit_corporate_employee_family">Update Family Member</button>
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
function showEmployees(val) 
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('employees').'"';?>,
 data: {
  get_id:val
 },
  success: function (response) { 
  document.getElementById("employee").innerHTML=response; 
 
 
 
 }
 });  
 
 
 
}
</script>           
            
    