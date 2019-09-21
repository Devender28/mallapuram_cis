             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Add Employee Family Members
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/employee_family_members');?>" class="btn btn-minw btn-danger" type="button">View</a>
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
                                           
                                               <select class="js-select2 form-control" id="corporate_id" name="corporate_id" style="width: 100%;" onchange="showEmployees(this.value)"    data-placeholder="Choose one.." required>
                                               
                                                    <option value="">Please Select Corporate Company </option>
                                                    
                                                   
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
                                           
                                               <select class="js-select2 form-control" id="employee" name="employee_id" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option value="">Please Select Corporate Employee </option>
                                                    
                                                   
                                                  
                                                     
                                                     
                                                     </select>   
                                            </div>
                                          </div>
                                         
                                         
                                         
                                         </div>
                                       

                                        <div class="form-group">
                                      
                                        
                                        <div class="col-md-6">
                                      
                                            <label class="col-xs-12" >Family Member Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="name"   required></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Relation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="relation"  required></div>
                                       
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Member Date Of Birth</label>
                                            <div class="col-sm-9">
               <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="date_of_birth" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"  required></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12">Gender</label>
                                            <div class="col-sm-9">
               <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="gender" value="Male" checked> Male
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="gender" value="Female"> Female
                                                </label>
                                                
                                        </div>
                                        </div>
                                        
                                        </div>

                                        
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                      
                                            <label class="col-xs-12">Age </label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text"  name="age" ></div>
                                       
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Age band  </label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text"  name="age_band" ></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Photo</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="photo"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12">Aadhaar Upload</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="aadhaar_scan"></div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                       
                                            <label class="col-xs-12">Pan Upload</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="pan_scan"></div>
                                       
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                         <div class="form-group">
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Passport Upload</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="passpot_scan">
                                          </div>
                                       
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                       
                                            <label class="col-xs-12">Voter ID Upload</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="voterid_scan"></div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group">
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Driving License</label>
                                            <div class="col-sm-9">
                                          <input type="file" id="example-file-input" name="driving_license_scan"></div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_corporate_employee_family">Add Family Member</button>&nbsp;&nbsp;
                                               <button class="btn btn-sm btn-primary" type="submit" name="save_add_corporate_employee_family">Save & Add Family Member</button>
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
function view_corporate_employee_family(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('view_corporate_employee_family').'"';?>,
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
  text: "you want to delete this Corporate Employee Family Details..",
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
  $.post(<?php echo '"'.base_url('delete').'"';?>,
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
  text: "you want to Deactivate this corporate Employee Family Details",
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
  $.post(<?php echo '"'.base_url('status').'"';?>,
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
  text: "you want to Activate this Corporate Employee Family Details",
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
  $.post(<?php echo '"'.base_url('status').'"';?>,
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