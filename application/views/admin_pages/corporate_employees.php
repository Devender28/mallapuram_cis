            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             Corporate Employees 
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/employees_addition');?>" class="btn btn-minw btn-danger" type="button">Add</a>
                           </div>
                           </div> 
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                    
                    
 <form method="post" action=""> 
                
        <div class="col-md-7" style="margin-bottom:40px;">
             <div class="col-sm-7">
<label class="control-label" for="val-select2">Select Corporate Client </label>
  <select class="js-select2 form-control" id="corporate_id"  style="width: 100%;" data-placeholder="Choose one.."   name="corporate_id" required   onchange="submit()" required>
                                               
                          
                          
                 
                          
   <option value="" selected>Please Select Corporate Company</option>
                          
                          
                        
                          
                                                  
<?php  foreach($corporate_clients as $corporate_client){?>                             
                                                    
                                                    
                  <option value="<?php echo $corporate_client->id;?>" <?php  if( $this->session->userdata('corporate_company')==$corporate_client->id){ ?> selected <?php }?> ><?php echo $corporate_client->name;?> </option>
                                                   
<?php }?>                                                      
<option value="all"  <?php  if( $this->session->userdata('corporate_company')=="all"){ ?> selected <?php }?> > All </option>
</select>
      </div>
                                        
   </div>
   
  </form>                  
                    
                    
                    
                 
                    
              <div class="col-md-12">
                            
                      <?php echo $msg;?>       
                            <div class="block">
                                
                                
                               

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>CORPORATE EMPLOYEES</h4><br>
                                   </div>
                                 </div>


<div class="block-content">
                            
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Created Date</th>
                                        <th>Corporate Client</th>
                                        <th>Employee Name</th>
                                        <th>Employee Email</th>
                                        <th class="hidden-xs">No Of Policies</th>
                                        
                                        <th class="hidden-xs">Dependents</th>
                                         <th class="hidden-xs">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
              
           
                                    
                                    
                                    
 <?php 
$a =1;
foreach($corporate_employees as $corporate_employee)
{
$num_of_policies=$this->db->group_by('policy_id')->order_by('id','asc')->get_where('corporate_employee',array('status'=>'1','relation'=>'self','corporate_id' => $corporate_employee->corporate_id,'employee_id' => $corporate_employee->employee_id))->num_rows();	
	
$num_of_depends=$this->db->group_by('relation')->order_by('id','asc')->get_where('corporate_employee',array('status'=>'1','relation !=' =>'self','corporate_id' => $corporate_employee->corporate_id,'employee_id' => $corporate_employee->employee_id))->num_rows();	
?>                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr>
                                         <td><?php echo $a;?></td>
                                         <td class="font-w600"> <?php echo $corporate_employee->crdate;?></td>
                                         <td class="font-w600"><?php echo $this->fun->getnewfieldvalue("corporate_client","name","id",$corporate_employee->corporate_id)?></td>
                                         <td class="hidden-xs"><?php echo $corporate_employee->name;?></td>
                                         <td class="hidden-xs"><?php echo $corporate_employee->email;?></td>
                                         
                                         
<td class="hidden-xs text-center">
<button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal1" type="button" onclick="view_emp_policies(<?php echo $corporate_employee->id;?>,<?php echo $corporate_employee->corporate_id;?>)" title="View Details"><span class="label label-info"><?php echo $num_of_policies;?></span>
</button> 
</td>




<td class="hidden-xs text-center">
<button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal2" type="button" onclick="view_emp_dependents(<?php echo $corporate_employee->id;?>,<?php echo $corporate_employee->corporate_id;?>)" title="View Details"><span class="label label-info"><?php echo $num_of_depends;?></span>
</button> 
</td>


                                     
                                         
                                         
                                        <td class="text-center">    <button disabled="disabled" class="btn btn-<?php if($corporate_employee->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $corporate_employee->id;?>','<?php echo $corporate_employee->status;?>');"  class="btn btn-xs btn-default" ><?php if($corporate_employee->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></button></td>
                                        
                                       
 
  <!--                                
   <td class="font-w600">    
                                  <a class="btn btn-<?php if($corporate_employee->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $corporate_employee->id;?>','<?php echo $corporate_employee->status;?>');"  class="btn btn-xs btn-default" ><?php if($corporate_employee->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i>
                                  </a>
  </td>
  -->                                
                                  
                                  
                                       
                                     
                                        <td class="text-center">
                                        
                           
                             
                            
             <div class="btn-group">
           <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_corporate_employee(<?php echo $corporate_employee->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
                    
                    
                    <a href="<?php echo base_url('admin/edit_corporate_employee').'/'.$corporate_employee->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                  
          
          
           <!-- <button class="js-swal-confirm btn btn-xs btn-default" type="button"><i class="fa fa-times"></i></button>-->
           <!--  <a  onclick="deleterecord('<?php echo $corporate_employee->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>  -->                                
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    
                                   
                                   
<?php
$a++;
}
?>    



                              
                                   
                                   
                                   
                                   
                                   
                            
                           
                                    
                                    
                                </tbody>
                            </table>
                        </div> 
                                
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










<div class="modal" id="modal-normal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Corporate Employee Policy Information</h3>
                        </div>
                        <div class="block-content" id="view_popup1">
       

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
    <div class="modal" id="modal-normal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Corporate Employee Dependents Information</h3>
                        </div>
                        <div class="block-content" id="view_popup2">
       

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





<script type="text/javascript">
function view_emp_policies(val,val1)
{

$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_emp_policies').'"';?>,
 data: {
 id:val,
 corporate_id:val1,
 
 },
  success: function (response) {
  document.getElementById("view_popup1").innerHTML=response; 
 
}
 });
}
</script>



<script type="text/javascript">
function view_emp_dependents(val,val1)
{

$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_emp_dependents').'"';?>,
 data: {
 id:val,
 corporate_id:val1,
 
 },
  success: function (response) {
  document.getElementById("view_popup2").innerHTML=response; 
 
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
            
            
            
            
            
            
            