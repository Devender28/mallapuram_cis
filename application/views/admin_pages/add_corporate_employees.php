 


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              Add Corporate Employees 
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
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                                       
                                       <br>
                                                <div class="form-group">
                                                
                                                <div class="col-md-6">
                                          <div class="col-sm-9">
           
           
           
           
             <label class="control-label" for="val-select2">Select Company</label>
                                           
                                                <select class="js-select2 form-control" id="corporate_id"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id"required    onchange="showBranches(this.value)" required>
                                                
                                               
                                                    <option value="" selected="selected">Please Select Corporate Company</option>
                                                    
<?php  foreach($corporate_clients as $corporate_client){?>                             
                                                    
                                                    
                                                    <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                   
                                                    
<?php }?>                                                      
                                                     
                                                     
                                                     </select>
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                          </div>
                                                
                                                
                                                



<div class="col-md-6">
                                          <div class="col-sm-9">
           
           
           
           
             <label class="control-label" for="val-select2">Select Branch</label>
                                           
                                         <select  name="branch" class="js-select2 form-control" id="branches"  style="width: 100%;"  data-placeholder="Choose one.."  required>
                                               
                                                    <option value="" >Please Select Corporate Branch</option>
                                                    
                                       </select>
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                          </div>
















</div>  
                                                 
                                                 
                                       
                                       <div class="form-group">
                                       <div class="col-md-6">
                                            <label class="col-xs-12" for="example-text-input">Employee Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="employee_id" required></div>
                                        
                                        </div>
                                    
                                     
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Insurance Company ID</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="insurance_company_id" required></div>
              
                                       
                                        </div>
                               
                                       
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Employee Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" name="name"  required></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Designation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="designation" ></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Date of Birth</label>
                                            <div class="col-sm-9">
             <input class="js-datepicker form-control" type="text"  name="date_of_birth" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" required> </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         
                                            <label class="col-xs-12" >Age</label>
                                            <div class="col-sm-9">
                <input class="form-control" type="text"  name="age" >   
                                             
                                            
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Age Band</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="age_band" > </div>
                                       
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Date of Joining</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="date_of_joining" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Gender</label>
                                            <div class="col-sm-9">
               <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="gender" value="Male" checked> Male
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="gender" value="Female"> Female
                                                </label>
                                                
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                            <label class="col-xs-12" >Photo</label>
                                            <div class="col-sm-9">
                <input type="file" id="example-file-input" name="photo">
                                           
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Aadhaar Upload</label>
                                            <div class="col-sm-9">
               <input type="file" id="example-file-input" name="aadhaar_scan"><br>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Pan Upload</label>
                                            <div class="col-sm-9">
               <input type="file" id="example-file-input" name="pan_scan"><br>
                                       
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Passport Upload</label>
                                            <div class="col-sm-9">
             <input type="file" id="example-file-input" name="passpot_scan"><br></div>
                                      
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Voter ID Upload</label>
                                            <div class="col-sm-9">
               <input type="file" id="example-file-input" name="voterid_scan"><br></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                           <label class="col-xs-12" >Driving License</label>
                                            <div class="col-sm-9">
              <input type="file" id="example-file-input" name="driving_license_scan">
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank Account Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_account_name" > </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                        <label class="col-xs-12" >Bank Account Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_account_number" > </div>
                                        
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_name" > </div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Bank Branch</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="bank_branch" > </div>
                                        
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Bank IFSC Code</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="ifsc_code" > </div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Cheque Upload</label>
                                            <div class="col-sm-9">
                         <input type="file" id="example-file-input" name="cheque_scan"> </div>
                                       
                                        </div>
                                        
                                         
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                       <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Mobile Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="phone" name="phone" required>
                 
                    </div>
                                        </div> 
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Email ID</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="email" name="email"  required>
                  
                    </div>
                                        </div>
                                        </div> 
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                          <div class="col-md-6">
                                          <label class="col-xs-12" >Sum Insured</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="sum_insured" >
                
                    </div>
                                        </div> 
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Family floater</label>
                                            <div class="col-sm-9">
                <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="family_floater" value="Yes" checked="checked"> Yes
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="family_floater" value="No"> No
                                                </label>
                                                
                                          
                                             </div>
                                        </div> 
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12" >Nominee Person Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="nominee_name" >
                 
                    </div>
                                        </div> 
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Nominee Relationship</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="nominee_relationship" >
                 
                    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Nominee Date of Birth</label>
                                            <div class="col-sm-9">
              <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                 
                    </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Policy Id(Individual)</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" name="policy_id"  >
                 
                    </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                          


                                        
                                    
                                     
                                     <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_corporate_employee">Add Employee</button>&nbsp;
                                               
                                               <button class="btn btn-sm btn-primary" type="submit" name="save_add_corporate_employee">Save & Add Employee</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                               

  <div class="form-group"> <hr> </div>
                                 


 
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
           
            



<div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">View Details</h3>
                        </div>
                        <div class="block-content" id="view_popup">
                        
                    
                        
                           


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>











<script type="text/javascript">
function view_corporate_employee(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_corporate_employee').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}
</script>  





<script>
function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this corporate Employee Details..",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('admin/delete').'"';?>,
        {
          x: id, 
          y: img, 
          bdr: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data,status){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}




function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Corporate Employee Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Deactivate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('admin/status').'"';?>,
        {
          x: id, 
          y: 0,
		  z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});} else {

  swal({
  title: "Are you sure?",
  text: "you want to Activate this Corporate Employee Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Activate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
           {
  $.post(<?php echo '"'.base_url('admin/status').'"';?>,
        {
          x: id, 
         y: 1,
		 z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }

});
}
}









</script> 
            
            
            
            
            
            
            
            
 <script type="text/javascript">
function showBranches(val) 
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/branches').'"';?>,
 data: {
  get_id:val
 },
  success: function (response) { 
  document.getElementById("branches").innerHTML=response; 
 
 
 
 }
 });  
 
 
 }
</script>            
            
            
            
            
            
            
            